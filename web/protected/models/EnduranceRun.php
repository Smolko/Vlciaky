<?php

/**
 * This is the model class for table "{{endurance_run}}".
 *
 * The followings are the available columns in table '{{endurance_run}}':
 * @property integer $id
 * @property string $place
 * @property string $date
 * @property string $referee
 * @property integer $count_male_svp1
 * @property integer $count_female_svp1
 * @property integer $count_male_svp2
 * @property integer $count_female_svp2
 * @property integer $count_male_svp3
 * @property integer $count_female_svp3
 * @property string $created_at
 * @property string $updated_at
 * @property integer $state
 *
 * The followings are the available model relations:
 * @property EnduranceRunDog[] $enduranceRunDogs
 */
class EnduranceRun extends BaseModel
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{endurance_run}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('count_male_svp1, count_female_svp1, count_male_svp2, count_female_svp2, count_male_svp3, count_female_svp3, state', 'numerical', 'integerOnly'=>true),
			array('place, referee', 'length', 'max'=>200),
			array('date, created_at, updated_at', 'safe'),
                        array('created_at', 'default', 'value' => new CDbExpression('NOW()'), 'setOnEmpty' => false, 'on' => 'insert'),
                        array('updated_at', 'default', 'value' => new CDbExpression('NOW()'), 'setOnEmpty' => false, 'on' => 'update'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, place, date, referee, count_male_svp1, count_female_svp1, count_male_svp2, count_female_svp2, count_male_svp3, count_female_svp3, created_at, updated_at, state', 'safe', 'on'=>'search'),
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
			'enduranceRunDogs' => array(self::HAS_MANY, 'EnduranceRunDog', 'id_endurance_run'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
//		return array(
//			'id' => 'ID',
//			'place' => 'Place',
//			'date' => 'Date',
//			'referee' => 'Referee',
//			'count_male_svp1' => 'Count Male Svp1',
//			'count_female_svp1' => 'Count Female Svp1',
//			'count_male_svp2' => 'Count Male Svp2',
//			'count_female_svp2' => 'Count Female Svp2',
//			'count_male_svp3' => 'Count Male Svp3',
//			'count_female_svp3' => 'Count Female Svp3',
//			'created_at' => 'Created At',
//			'updated_at' => 'Updated At',
//			'state' => 'State',
//		);
                return $this->generateAttributeLabels(array(
                    'id','place','date','referee','count_male_svp1','count_female_svp1','count_male_svp2','count_female_svp2','count_male_svp3','state',
        ));    
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
		$criteria->compare('place',$this->place,true);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('referee',$this->referee,true);
		$criteria->compare('count_male_svp1',$this->count_male_svp1);
		$criteria->compare('count_female_svp1',$this->count_female_svp1);
		$criteria->compare('count_male_svp2',$this->count_male_svp2);
		$criteria->compare('count_female_svp2',$this->count_female_svp2);
		$criteria->compare('count_male_svp3',$this->count_male_svp3);
		$criteria->compare('count_female_svp3',$this->count_female_svp3);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('updated_at',$this->updated_at,true);
		$criteria->compare('state',$this->state);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
        public function searchIndex() {
            // @todo Please modify the following code to remove attributes that should not be searched.

            $criteria = new CDbCriteria;

            $criteria->compare('t.place', $this->place, true);
            $criteria->compare('t.referee', $this->referee, true);
            $criteria->compare('t.state', 1, true);

            // COUNT
            if (isset($_GET['count_min']) && !empty($_GET['count_min'])){
                $count_min = intval($_GET['count_min']);
                $criteria->addCondition('(count_male_svp1+count_female_svp1+count_male_svp2+count_female_svp2+count_male_svp3+count_female_svp3) >= '. $count_min);
            }
            if (isset($_GET['count_max']) && !empty($_GET['count_max'])){
                $count_max = intval($_GET['count_max']);
                $criteria->addCondition('(count_male_svp1+count_female_svp1+count_male_svp2+count_female_svp2+count_male_svp3+count_female_svp3) <= '. $count_max);
            }

            // YEAR
            if (isset($_GET['year_min']) && !empty($_GET['year_min'])){
                $year_min = intval($_GET['year_min']);
                $criteria->addCondition('year(date) >= '. $year_min);
            }
            if (isset($_GET['year_max']) && !empty($_GET['year_max'])){
                $year_max = intval($_GET['year_max']);
                $criteria->addCondition('year(date) <= '. $year_max);
            }


            return new CActiveDataProvider($this, array(
                'criteria' => $criteria,
            ));
        }

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return EnduranceRun the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        
        // DOG CLASS
        public function setEnduranceRunDogParameters($dogs,$orders,$handlers,$durations,$evaluations,$types,$places){
            $models = array();
            foreach ($dogs as $key => $dogID) {
                if (is_numeric($key)) {
                    $model = $this->_newEnduranceRunDog($dogID,$orders[$key],$handlers[$key],$durations[$key],$evaluations[$key],$types[$key],$places[$key]);  
                    $models[]=$model;
                }
            }
            $this->enduranceRunDogs = array_merge($this->enduranceRunDogs,$models);

        }

        private function _newEnduranceRunDog($dog,$order,$handler,$duration,$evaluation,$type,$place) {
            $model = new EnduranceRunDog();
            $model->id_dog = $dog;
            $model->order = $order;
            $model->handler = $handler;      
            $model->duration = $duration;      
            $model->evaluation = $evaluation;      
            $model->type = $type;      
            $model->place = $place;      
            return $model;
        }

        public function save($runValidation = true, $attributes = array()) {
            if (!empty($attributes)) {
                return parent::save($runValidation, $attributes);
            }

            // SAVE OLD
            $enduranceRunDogs = array();
            if (!$this->isNewRecord){
                $enduranceRunDogs = EnduranceRunDog::model()->findAllByAttributes(array('id_endurance_run'=>$this->id));
            }

            $result = $this->withRelated->save(
                        $runValidation, CMap::mergeArray($attributes,array('enduranceRunDogs'))
            );

            // DELETE OLD IF SAVED NEW
            if ($result){
                foreach ($enduranceRunDogs as $enduranceRunDog){
                    EnduranceRunDog::model()->deleteByPk($enduranceRunDog->id);
                }
            }

            return $result;
        }

        public function getErrors($attribute = null) {
            $errors = parent::getErrors($attribute);
            if ($attribute === null) {
                foreach($this->enduranceRunDogs as $param){
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
