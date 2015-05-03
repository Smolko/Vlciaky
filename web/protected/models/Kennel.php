<?php

/**
 * This is the model class for table "{{kennel}}".
 *
 * The followings are the available columns in table '{{kennel}}':
 * @property integer $id
 * @property string $name
 * @property string $reg_number
 * @property string $registered_at
 * @property integer $id_user
 * @property string $created_at
 * @property string $updated_at
 * @property integer $state
 *
 * The followings are the available model relations:
 * @property Fertilisation[] $fertilisations
 */
class Kennel extends BaseModel
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{kennel}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, reg_number, registered_at, id_user, state', 'required'),
			array('id_user, state', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>200),
			array('reg_number', 'length', 'max'=>50),
			array('created_at', 'default', 'value' => new CDbExpression('NOW()'), 'setOnEmpty' => false, 'on' => 'insert'),
                        array('updated_at', 'default', 'value' => new CDbExpression('NOW()'), 'setOnEmpty' => false, 'on' => 'update'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, reg_number, registered_at, id_user, created_at, updated_at, state', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
                        'dogs' => array(self::HAS_MANY, 'Dog', 'id_kennel'),
			'exhibitionBestKennels' => array(self::HAS_MANY, 'ExhibitionBestKennel', 'id_kennel'),
			'fertilisations' => array(self::HAS_MANY, 'Fertilisation', 'id_kennel'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Name',
			'reg_number' => 'Reg Number',
			'registered_at' => 'Registered At',
			'id_user' => 'Id User',
			'created_at' => 'Created At',
			'updated_at' => 'Updated At',
			'state' => 'State',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('reg_number',$this->reg_number,true);
		$criteria->compare('registered_at',$this->registered_at,true);
		$criteria->compare('id_user',$this->id_user);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('updated_at',$this->updated_at,true);
		$criteria->compare('state',$this->state);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
	public function searchIndex()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('state',$this->state);
                
                // YEAR
                if (isset($_GET['year_min']) && !empty($_GET['year_min'])){
                    $year_min = intval($_GET['year_min']);
                    $criteria->addCondition('year(registered_at) >= '. $year_min);
                }
                if (isset($_GET['year_max']) && !empty($_GET['year_max'])){
                    $year_max = intval($_GET['year_max']);
                    $criteria->addCondition('year(registered_at) <= '. $year_max);
                }

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Kennel the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        
        public function getKennelCount(){
            return count($this->findAll());
        }
        
        // FERTILISATION
        public function setFertilisationParameters($fertilisationDates,$litterDates,$maleCounts,$femaleCounts,$fathers,$mothers,$comments){
            $models = array();
            foreach ($fathers as $key => $fatherID) {
                if (is_numeric($key)) {
                    $model = $this->_newFertilisation($fertilisationDates[$key],$litterDates[$key],$maleCounts[$key],$femaleCounts[$key],$fatherID, $mothers[$key],$comments[$key]);  
                    $models[]=$model;
                }
            }
            $this->fertilisations = $models;

        }

        private function _newFertilisation($fertilisationDate,$litterDate,$maleCount,$femaleCount,$father,$mother,$comment) {
            $model = new Fertilisation();
            $model->fertilisation_date = $fertilisationDate;
            $model->litter_date = $litterDate;
            $model->male_count = $maleCount;      
            $model->female_count = $femaleCount;      
            $model->id_dog_father = $father;      
            $model->id_dog_mother = $mother;      
            $model->comment = $comment;      
            return $model;
        }
        
        public function save($runValidation = true, $attributes = array()) {
            if (!empty($attributes)) {
                return parent::save($runValidation, $attributes);
            }

            // SAVE OLD
            $fertilisations = array();
            if (!$this->isNewRecord){
                $fertilisations = Fertilisation::model()->findAllByAttributes(array('id_kennel'=>$this->id));
            }

            $result = $this->withRelated->save(
                        $runValidation, CMap::mergeArray($attributes, array('fertilisations'))
            );

            // DELETE OLD IF SAVED NEW
            if ($result){
                foreach ($fertilisations as $fertilisation){
                    Fertilisation::model()->deleteByPk($fertilisation->id);
                }
            }

            return $result;
        }
        
        public function getErrors($attribute = null) {
            $errors = parent::getErrors($attribute);
            if ($attribute === null) {
                foreach($this->fertilisations as $param){
                    $errors = CMap::mergeArray($errors, $param->errors);
                }
            }
            return $errors;
        }
        
        public function behaviors(){
            return array(
                /*'activerecord-relation'=>array(
                    'class'=>'application.components.behaviors..EActiveRecordRelationBehavior',
                ),*/
                'withRelated'=>array(
                    'class'=>'application.components.WithRelatedBehavior',
                ),

          //      'LoggableBehavior'=> 'application.components.behaviors.ExtLoggableBehavior',
            ); 
        }
}
