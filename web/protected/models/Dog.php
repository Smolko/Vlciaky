<?php

/**
 * This is the model class for table "{{dog}}".
 *
 * The followings are the available columns in table '{{dog}}':
 * @property integer $id
 * @property string $name
 * @property integer $sex
 * @property string $color
 * @property string $birthday
 * @property string $deathday
 * @property string $death_cause
 * @property string $breed
 * @property string $old_regnumber
 * @property string $new_regnumber
 * @property integer $tattoo
 * @property string $chip
 * @property string $export_import
 * @property string $breeding
 * @property string $created_at
 * @property string $updated_at
 * @property integer $id_health
 * @property integer $id_fertilisation
 * @property integer $id_owner
 * @property integer $id_old_owner
 * @property integer $id_kennel_owner
 * @property integer $state
 *
 * The followings are the available model relations:
 * @property Bonitation[] $bonitations
 * @property Health $idHealth
 * @property Fertilisation $idFertilisation
 * @property Profiles $idOwner
 * @property Dog $idOldOwner
 * @property Dog[] $dogs
 * @property Users $idKennelOwner
 * @property EnduranceRun[] $enduranceRuns
 * @property Fertilisation[] $fertilisations
 * @property Fertilisation[] $fertilisations1
 * @property Image[] $images
 * @property YouthPresentation[] $youthPresentations
 */
class Dog extends BaseModel
{
        public function tableName()
	{
		return '{{dog}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, color, birthday, breed, old_regnumber, new_regnumber, tattoo, chip, export_import, breeding, state', 'required'),
			array('sex, tattoo, id_health, id_fertilisation, id_owner, id_old_owner, id_kennel_owner, state', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>200),
			array('color, old_regnumber, new_regnumber', 'length', 'max'=>50),
			array('death_cause', 'length', 'max'=>300),
			array('breed', 'length', 'max'=>100),
			array('chip, breeding', 'length', 'max'=>30),
			array('updated_at', 'safe'),
                        array('created_at', 'default', 'value' => new CDbExpression('NOW()'), 'setOnEmpty' => false, 'on' => 'insert'),
                        array('updated_at', 'default', 'value' => new CDbExpression('NOW()'), 'setOnEmpty' => false, 'on' => 'update'),
                        array('id_owner', 'default', 'value' => Yii::app()->user->getId(), 'setOnEmpty' => false, 'on' => 'insert'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, sex, color, birthday, deathday, death_cause, breed, old_regnumber, new_regnumber, tattoo, chip, export_import, breeding, created_at, updated_at, id_health, id_fertilisation, id_owner, id_old_owner, id_kennel_owner, state', 'safe', 'on'=>'search'),
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
			'bonitations' => array(self::HAS_MANY, 'Bonitation', 'id_dog'),
			'idHealth' => array(self::BELONGS_TO, 'Health', 'id_health'),
			'idFertilisation' => array(self::BELONGS_TO, 'Fertilisation', 'id_fertilisation'),
			'idOwner' => array(self::BELONGS_TO, 'Profiles', 'id_owner'),
			'idOldOwner' => array(self::BELONGS_TO, 'Dog', 'id_old_owner'),
			'dogs' => array(self::HAS_MANY, 'Dog', 'id_old_owner'),
			'idKennelOwner' => array(self::BELONGS_TO, 'Users', 'id_kennel_owner'),
			'enduranceRuns' => array(self::HAS_MANY, 'EnduranceRun', 'id_dog'),
			'fertilisations' => array(self::HAS_MANY, 'Fertilisation', 'id_dog_mother'),
			'fertilisations1' => array(self::HAS_MANY, 'Fertilisation', 'id_dog_father'),
			'images' => array(self::HAS_MANY, 'Image', 'id_dog'),
			'youthPresentations' => array(self::HAS_MANY, 'YouthPresentation', 'id_dog'),
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
			'sex' => 'Sex',
			'color' => 'Color',
			'birthday' => 'Birthday',
			'deathday' => 'Deathday',
			'death_cause' => 'Death Cause',
			'breed' => 'Breed',
			'old_regnumber' => 'Old Regnumber',
			'new_regnumber' => 'New Regnumber',
			'tattoo' => 'Tattoo',
			'chip' => 'Chip',
			'export_import' => 'Export Import',
			'breeding' => 'Breeding',
			'created_at' => 'Created At',
			'updated_at' => 'Updated At',
			'id_health' => 'Id Health',
			'id_fertilisation' => 'Id Fertilisation',
			'id_owner' => 'Id Owner',
			'id_old_owner' => 'Id Old Owner',
			'id_kennel_owner' => 'Id Kennel Owner',
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
		$criteria->compare('sex',$this->sex);
		$criteria->compare('color',$this->color,true);
		$criteria->compare('birthday',$this->birthday,true);
		$criteria->compare('deathday',$this->deathday,true);
		$criteria->compare('death_cause',$this->death_cause,true);
		$criteria->compare('breed',$this->breed,true);
		$criteria->compare('old_regnumber',$this->old_regnumber,true);
		$criteria->compare('new_regnumber',$this->new_regnumber,true);
		$criteria->compare('tattoo',$this->tattoo);
		$criteria->compare('chip',$this->chip,true);
		$criteria->compare('export_import',$this->export_import,true);
		$criteria->compare('breeding',$this->breeding,true);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('updated_at',$this->updated_at,true);
		$criteria->compare('id_health',$this->id_health);
		$criteria->compare('id_fertilisation',$this->id_fertilisation);
		$criteria->compare('id_owner',$this->id_owner);
		$criteria->compare('id_old_owner',$this->id_old_owner);
		$criteria->compare('id_kennel_owner',$this->id_kennel_owner);
		$criteria->compare('state',$this->state);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Dog the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        
        public function getTattooList(){
            return array(
            self::YES=>"Yes",
            self::NO=>"No",
            );
        }
        
        private function getSexLabel($numb){
            if($numb===1) return "Male";
            return "Female";
        }
        
        public function getSexName(){
            return $this->getSexLabel($this->sex);
        }
        
        public function getDogCount(){
            return count($this->findAll()); 
        }
}
