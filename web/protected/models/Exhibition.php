<?php

/**
 * This is the model class for table "{{exhibition}}".
 *
 * The followings are the available columns in table '{{exhibition}}':
 * @property integer $id
 * @property string $name
 * @property string $place
 * @property string $date
 * @property string $referee
 * @property integer $count_male
 * @property integer $count_female
 * @property integer $count_all
 * @property string $created_at
 * @property string $updated_at
 * @property integer $state
 * 
 * The followings are the available model relations:
 * @property ExhibitionBestKennel[] $exhibitionBestKennels
 * @property ExhibitionChildDog[] $exhibitionChildDogs
 * @property ExhibitionClass[] $exhibitionClasses
 * @property ExhibitionDogCouple[] $exhibitionDogCouples
 */
class Exhibition extends BaseModel {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return '{{exhibition}}';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('name', 'required'),
            array('count_male, count_female, state', 'numerical', 'integerOnly' => true),
            array('name', 'length', 'max' => 500),
            array('place', 'length', 'max' => 300),
            array('referee', 'length', 'max' => 200),
            array('date, created_at, updated_at', 'safe'),
            array('created_at', 'default', 'value' => new CDbExpression('NOW()'), 'setOnEmpty' => false, 'on' => 'insert'),
            array('updated_at', 'default', 'value' => new CDbExpression('NOW()'), 'setOnEmpty' => false, 'on' => 'update'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, name, place, date, pocet, referee, count_male, count_female, created_at, updated_at, state', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'exhibitionBestKennels' => array(self::HAS_MANY, 'ExhibitionBestKennel', 'id_exhibition'),
            'exhibitionChildDogs' => array(self::HAS_MANY, 'ExhibitionChildDog', 'id_exhibition'),
            'exhibitionClasses' => array(self::HAS_MANY, 'ExhibitionClass', 'id_exhibition'),
            'exhibitionDogCouples' => array(self::HAS_MANY, 'ExhibitionDogCouple', 'id_exhibition'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
//    public function attributeLabels() {
//        return array(
//            'id' => 'ID',
//            'name' => 'Name',
//            'place' => 'Place',
//            'date' => 'Date',
//            'referee' => 'Referee',
//            'count_male' => 'Count Male',
//            'count_female' => 'Count Female',
//            'count_all' => 'Count All',
//            'created_at' => 'Created At',
//            'updated_at' => 'Updated At',
//            'state' => 'State',
//        );
//    }
    
     public function attributeLabels(){
        return $this->generateAttributeLabels(array(
            'id','name','state','created_at','updated_at','products','reps'
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
    public function search() {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria = new CDbCriteria;
   
        $criteria->compare('id', $this->id);
        $criteria->compare('name', $this->name, true);
        
        $criteria->compare('place', $this->place, true);
        $criteria->compare('date', $this->date, true);
        $criteria->compare('referee', $this->referee, true);
        $criteria->compare('count_male', $this->count_male);
        $criteria->compare('count_female', $this->count_female);
        $criteria->compare('created_at', $this->created_at, true);
        $criteria->compare('updated_at', $this->updated_at, true);
        $criteria->compare('state', $this->state);
        
        // COUNT
        if (isset($_GET['count_min']) && !empty($_GET['count_min'])){
            $count_min = intval($_GET['count_min']);
            $criteria->addCondition('(count_male + count_female) >= '. $count_min);
        }
        if (isset($_GET['count_max']) && !empty($_GET['count_max'])){
            $count_max = intval($_GET['count_max']);
            $criteria->addCondition('(count_male + count_female) <= '. $count_max);
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
    
    public function searchIndex() {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria = new CDbCriteria;
        
        $criteria->compare('t.place', $this->place, true);
        $criteria->compare('t.referee', $this->referee, true);
        $criteria->compare('t.state', 1, true);

        // COUNT
        if (isset($_GET['count_min']) && !empty($_GET['count_min'])){
            $count_min = intval($_GET['count_min']);
            $criteria->addCondition('(count_male+count_female) >= '. $count_min);
        }
        if (isset($_GET['count_max']) && !empty($_GET['count_max'])){
            $count_max = intval($_GET['count_max']);
            $criteria->addCondition('(count_male+count_female) <= '. $count_max);
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
     * @return Exhibition the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }
    
    ///////////////VIEW/////////////////
    public function getDataProviderFromModels($models){
        
    }   
    
    //////////////CREATE////////////////
    //////////////UPDATE////////////////
    
    // DOG CHILD
    public function setDogChildParameters($dogs,$children,$place){
        $params = array();
        foreach ($dogs as $key => $dogID) {
            if (is_numeric($key) && isset($children[$key]) && isset($place[$key])) {
                $model = $this->_newDogChild($dogID,$children[$key],$place[$key]);
                $params[$key]=$model;
            }
        }
        $this->exhibitionChildDogs = $params;
    }

    private function _newDogChild($dogID,$child,$place) {    
        $model = new ExhibitionChildDog();
        $model->id_dog =  $dogID;
        $model->child = $child;
        $model->place = $place;
        return $model;
    }
    
    
    // DOG COUPLE
    public function setDogCoupleParameters($dogsMale,$dogsFemale,$place){
        $params = array();
        foreach ($dogsMale as $key => $dogMaleID) {
            if (is_numeric($key) && isset($dogsFemale[$key]) && isset($place[$key])) {
                $model = $this->_newDogCouple($dogMaleID,$dogsFemale[$key],$place[$key]);               
                $params[$key]=$model;
            }
        }
        $this->exhibitionDogCouples = $params;
    }

    private function _newDogCouple($dogMaleID,$dogFemaleID,$place) {
        $model = new ExhibitionDogCouple();
        $model->id_dog1 = $dogMaleID;
        $model->id_dog2 = $dogFemaleID;
        $model->place = $place;      
        return $model;
    }
    
    
    // BEST KENNEL
    public function setBestKennelParameters($bestKennel,$place){
        $params = array();
        foreach ($bestKennel as $key => $bestKennelID) {
            if (is_numeric($key) && isset($place[$key])) {
                $model = $this->_newBestKennel($bestKennelID,$place[$key]);               
                $params[$key]=$model;
            }
        }
        $this->exhibitionBestKennels = $params;
    }

    private function _newBestKennel($bestKennel,$place) {
        $model = new ExhibitionBestKennel();
        $model->id_kennel = $bestKennel;
        $model->place = $place;      
        return $model;
    }
    
    // DOG CLASS
    public function setDogClassParameters($class,$dogs,$rankings,$tituls,$place){
        $models = array();
        foreach ($dogs as $key => $dogID) {
            if (is_numeric($key) && isset($place[$key])) {
                $model = $this->_newDogClass($class,$dogID,$rankings[$key],$tituls[$key],$place[$key]);  
                $models[]=$model;
            }
        }
        $this->exhibitionClasses = array_merge($this->exhibitionClasses,$models);
        
    }

    private function _newDogClass($class,$dogID,$ranking,$titul,$place) {
        $model = new ExhibitionClass();
        $model->class = $class;
        $model->id_dog = $dogID;
        $model->ranking = $ranking;      
        $model->titul = $titul;      
        $model->place = $place;      
        return $model;
    }
    
    public function save($runValidation = true, $attributes = array()) {
        if (!empty($attributes)) {
            return parent::save($runValidation, $attributes);
        }
        
        // SAVE OLD
        $exhibitionChildDogs = $exhibitionDogCouples = $exhibitionBestKennels = $exhibitionClasses = array();
        if (!$this->isNewRecord){
            $exhibitionChildDogs = ExhibitionChildDog::model()->findAllByAttributes(array('id_exhibition'=>$this->id));
            $exhibitionDogCouples = ExhibitionDogCouple::model()->findAllByAttributes(array('id_exhibition'=>$this->id));
            $exhibitionBestKennels = ExhibitionBestKennel::model()->findAllByAttributes(array('id_exhibition'=>$this->id));
            $exhibitionClasses = ExhibitionClass::model()->findAllByAttributes(array('id_exhibition'=>$this->id));
        }
        
        $result = $this->withRelated->save(
                    $runValidation, CMap::mergeArray($attributes, 
                            array('exhibitionChildDogs'), 
                            array('exhibitionDogCouples'),
                            array('exhibitionBestKennels'),
                            array('exhibitionClasses')
                            )
        );
        
        // DELETE OLD IF SAVED NEW
        if ($result){
            foreach ($exhibitionChildDogs as $exhibitionChildDog){
                ExhibitionChildDog::model()->deleteByPk($exhibitionChildDog->id);
            }
            foreach ($exhibitionDogCouples as $exhibitionDogCouple){
                ExhibitionDogCouple::model()->deleteByPk($exhibitionDogCouple->id);
            }
            foreach ($exhibitionBestKennels as $exhibitionBestKennel){
                ExhibitionBestKennel::model()->deleteByPk($exhibitionBestKennel->id);
            }
            foreach ($exhibitionClasses as $exhibitionClass){
                ExhibitionClass::model()->deleteByPk($exhibitionClass->id);
            }
        }
        
        return $result;
    }
        
    public function getErrors($attribute = null) {
        $errors = parent::getErrors($attribute);
        if ($attribute === null) {
            foreach($this->exhibitionChildDogs as $param){
                $errors = CMap::mergeArray($errors, $param->errors);
            }
            foreach($this->exhibitionDogCouples as $param){
                $errors = CMap::mergeArray($errors, $param->errors);
            }
            foreach($this->exhibitionBestKennels as $param){
                $errors = CMap::mergeArray($errors, $param->errors);
            }
            foreach($this->exhibitionClasses as $param){
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
