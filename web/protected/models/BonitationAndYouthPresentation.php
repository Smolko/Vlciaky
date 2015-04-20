<?php

/**
 * This is the model class for table "{{bonitation_and_youth_presentation}}".
 *
 * The followings are the available columns in table '{{bonitation_and_youth_presentation}}':
 * @property integer $id
 * @property string $place
 * @property string $date
 * @property string $referee
 * @property integer $youth_presentation_male_count
 * @property integer $youth_presentation_female_count
 * @property integer $bonitation_male_count
 * @property integer $bonitation_female_count
 * @property string $created_at
 * @property string $updated_at
 * @property integer $state
 *
 * The followings are the available model relations:
 * @property BonitationDog[] $bonitationDogs
 * @property YouthPresentationDog[] $youthPresentationDogs
 */
class BonitationAndYouthPresentation extends BaseModel
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{bonitation_and_youth_presentation}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('youth_presentation_male_count, youth_presentation_female_count, bonitation_male_count, bonitation_female_count, state', 'numerical', 'integerOnly'=>true),
			array('place, referee', 'length', 'max'=>200),
			array('date, created_at, updated_at', 'safe'),
                        array('created_at', 'default', 'value' => new CDbExpression('NOW()'), 'setOnEmpty' => false, 'on' => 'insert'),
                        array('updated_at', 'default', 'value' => new CDbExpression('NOW()'), 'setOnEmpty' => false, 'on' => 'update'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, place, date, referee, youth_presentation_male_count, youth_presentation_female_count, bonitation_male_count, bonitation_female_count, created_at, updated_at, state', 'safe', 'on'=>'search'),
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
			'bonitationDogs' => array(self::HAS_MANY, 'BonitationDog', 'id_bonitation_and_youth_presentation'),
			'youthPresentationDogs' => array(self::HAS_MANY, 'YouthPresentationDog', 'id_bonitation_and_youth_presentation'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'place' => 'Place',
			'date' => 'Date',
			'referee' => 'Referee',
			'youth_presentation_male_count' => 'Youth Presentation Male Count',
			'youth_presentation_female_count' => 'Youth Presentation Female Count',
			'bonitation_male_count' => 'Bonitation Male Count',
			'bonitation_female_count' => 'Bonitation Female Count',
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
		$criteria->compare('place',$this->place,true);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('referee',$this->referee,true);
		$criteria->compare('youth_presentation_male_count',$this->youth_presentation_male_count);
		$criteria->compare('youth_presentation_female_count',$this->youth_presentation_female_count);
		$criteria->compare('bonitation_male_count',$this->bonitation_male_count);
		$criteria->compare('bonitation_female_count',$this->bonitation_female_count);
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
                $criteria->addCondition('(youth_presentation_male_count+youth_presentation_female_count+bonitation_male_count+bonitation_female_count) >= '. $count_min);
            }
            if (isset($_GET['count_max']) && !empty($_GET['count_max'])){
                $count_max = intval($_GET['count_max']);
                $criteria->addCondition('(youth_presentation_male_count+youth_presentation_female_count+bonitation_male_count+bonitation_female_count) <= '. $count_max);
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
	 * @return BonitationAndYouthPresentation the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        
        public function setBonitationDogParameters(
                $dogs,$evaluations,$bonitationCodes,$temperaments,$types,$harmonies,
                $headLengths,$headWidths,$snoutLengths,$earLengths,$obliqueLengths,$chestDepths,$chestCircles,$frontLegLengths,
                $thighLengths,$pasternLengths, $pasternCircles,$tarsusLengths,$tibiaLengths,$comments){
            $params = array();
            foreach ($dogs as $key => $dogID) {
                if (is_numeric($key)) {
                    $model = $this->_newBonitationDog(
                            $dogID,$evaluations[$key],$bonitationCodes[$key],$temperaments[$key], $types[$key], $harmonies[$key],
                            $headLengths[$key],$headWidths[$key],$snoutLengths[$key],$earLengths[$key],$obliqueLengths[$key],$chestDepths[$key],$chestCircles[$key],$frontLegLengths[$key],
                            $thighLengths[$key],$pasternLengths[$key], $pasternCircles[$key],$tarsusLengths[$key],$tibiaLengths[$key],$comments[$key]
                            );
                    $params[$key]=$model;
                }
            }
            $this->bonitationDogs = $params;
        }
        
        public function _newBonitationDog(
                $dog,$evaluation,$bonitationCode,$temperament,$type,$harmony,
                $headLength,$headWidth,$snoutLength,$earLength,$obliqueLength,$chestDepth,$chestCircle,$frontLegLength,
                $thighLength,$pasternLength, $pasternCircle,$tarsusLength,$tibiaLength,$comment){
            $model = new BonitationDog();
            $model->id_dog = $dog;
            $model->evaluation = $evaluation;
            $model->bonitation_code = $bonitationCode;
            $model->temperament = $temperament;
            $model->type = $type;
            $model->harmony = $harmony;
            $model->head_length = $headLength;
            $model->head_width = $headWidth;
            $model->snout_length = $snoutLength;
            $model->ear_length = $earLength;
            $model->oblique_length = $obliqueLength;
            $model->chest_depth = $chestDepth;
            $model->chest_circle = $chestCircle;
            $model->front_leg_length = $frontLegLength;
            $model->thigh_length = $thighLength;
            $model->pastern_length = $pasternLength;
            $model->pastern_circle = $pasternCircle;
            $model->tarsus_length = $tarsusLength;
            $model->tibia_length = $tibiaLength;
            $model->comment = $comment;
            
            
            return $model;
        }
        
        public function setYouthPresentationDogParameters($dogs,$evaluations,$assessments){
            $params = array();
            foreach ($dogs as $key => $dogID) {
                if (is_numeric($key)) {
                    $model = $this->_newYouthPresentationDog($dogID,$evaluations[$key],$assessments[$key]);
                    $params[$key]=$model;
                }
            }
            $this->youthPresentationDogs = $params;
        }
        
        public function _newYouthPresentationDog($dog,$evaluation,$assessment){
            $model = new YouthPresentationDog();
            $model->id_dog = $dog;
            $model->evaluation = $evaluation;
            $model->assessment = $assessment;
                        
            return $model;
        }
        
        public function save($runValidation = true, $attributes = array()) {
            if (!empty($attributes)) {
                return parent::save($runValidation, $attributes);
            }

            // SAVE OLD
            $bonitationDogs = $youthPresentationDogs = array();
            if (!$this->isNewRecord){
                $bonitationDogs = BonitationDog::model()->findAllByAttributes(array('id_bonitation_and_youth_presentation'=>$this->id));
                $youthPresentationDogs = YouthPresentationDog::model()->findAllByAttributes(array('id_bonitation_and_youth_presentation'=>$this->id));
            }

            $result = $this->withRelated->save(
                        $runValidation, CMap::mergeArray($attributes, array('bonitationDogs','youthPresentationDogs'))
            );

            // DELETE OLD IF SAVED NEW
            if ($result){
                foreach ($bonitationDogs as $bonitationDog){
                    BonitationDog::model()->deleteByPk($bonitationDog->id);
                }
                foreach ($youthPresentationDogs as $youthPresentationDog){
                    YouthPresentationDog::model()->deleteByPk($youthPresentationDog->id);
                }
            }

            return $result;
        }
        
        public function getErrors($attribute = null) {
            $errors = parent::getErrors($attribute);
            if ($attribute === null) {
                foreach($this->bonitationDogs as $param){
                    $errors = CMap::mergeArray($errors, $param->errors);
                }
                foreach($this->youthPresentationDogs as $param){
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
