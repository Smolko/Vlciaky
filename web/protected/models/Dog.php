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
 * @property integer $id_fertilisation
 * @property integer $id_owner
 * @property integer $id_old_owner
 * @property integer $id_kennel
 * @property integer $dlk
 * @property integer $dbk
 * @property integer $dwarf
 * @property integer $dm
 * @property string $dna
 * @property string $dlk_vet
 * @property string $dlk_date
 * @property string $dbk_vet
 * @property string $dbk_date
 * @property string $dwarf_vet
 * @property string $dwarf_date
 * @property string $dm_vet
 * @property string $dm_date
 * @property string $created_at
 * @property string $updated_at
 * @property integer $state
 *
 * The followings are the available model relations:
 * @property BonitationDog[] $bonitationDogs
 * @property Fertilisation $idFertilisation
 * @property Profiles $idOwner
 * @property Dog $idOldOwner
 * @property Dog[] $dogs
 * @property Users $idKennelOwner
 * @property EnduranceRunDog[] $enduranceRunDogs
 * @property ExhibitionChildDog[] $exhibitionChildDogs
 * @property ExhibitionClass[] $exhibitionClasses
 * @property ExhibitionDogCouple[] $exhibitionDogCouples
 * @property ExhibitionDogCouple[] $exhibitionDogCouples1
 * @property Fertilisation[] $fertilisations
 * @property Fertilisation[] $fertilisations1
 * @property Image[] $images
 * @property YouthPresentationDog[] $youthPresentationDogs
 */
class Dog extends BaseModel
{
	/**
	 * @return string the associated database table name
	 */
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
			array('sex, tattoo, id_fertilisation, id_owner, id_old_owner, id_kennel, dlk, dbk, dwarf, dm, state', 'numerical', 'integerOnly'=>true),
			array('name, dna, dlk_vet, dbk_vet, dwarf_vet, dm_vet', 'length', 'max'=>200),
			array('color, old_regnumber, new_regnumber', 'length', 'max'=>50),
			array('death_cause', 'length', 'max'=>300),
			array('breed', 'length', 'max'=>100),
			array('chip, breeding', 'length', 'max'=>30),
			array('birthday, deathday, export_import, dlk_date, dbk_date, dwarf_date, dm_date, created_at, updated_at', 'safe'),
                        array('created_at', 'default', 'value' => new CDbExpression('NOW()'), 'setOnEmpty' => false, 'on' => 'insert'),
                        array('updated_at', 'default', 'value' => new CDbExpression('NOW()'), 'setOnEmpty' => false, 'on' => 'update'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, sex, color, birthday, deathday, death_cause, breed, old_regnumber, new_regnumber, tattoo, chip, export_import, breeding, id_fertilisation, id_owner, id_old_owner, id_kennel, dlk, dbk, dwarf, dm, dna, dlk_vet, dlk_date, dbk_vet, dbk_date, dwarf_vet, dwarf_date, dm_vet, dm_date, created_at, updated_at, state', 'safe', 'on'=>'search'),
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
			'bonitationDogs' => array(self::HAS_MANY, 'BonitationDog', 'id_dog'),
			'idFertilisation' => array(self::BELONGS_TO, 'Fertilisation', 'id_fertilisation'),
			'idOwner' => array(self::BELONGS_TO, 'Profiles', 'id_owner'),
			'idOldOwner' => array(self::BELONGS_TO, 'Dog', 'id_old_owner'),
			'dogs' => array(self::HAS_MANY, 'Dog', 'id_old_owner'),
			'idKennel' => array(self::BELONGS_TO, 'Users', 'id_kennel'),
			'enduranceRunDogs' => array(self::HAS_MANY, 'EnduranceRunDog', 'id_dog'),
			'exhibitionChildDogs' => array(self::HAS_MANY, 'ExhibitionChildDog', 'id_dog'),
			'exhibitionClasses' => array(self::HAS_MANY, 'ExhibitionClass', 'id_dog'),
			'exhibitionDogCouples' => array(self::HAS_MANY, 'ExhibitionDogCouple', 'id_dog1'),
			'exhibitionDogCouples1' => array(self::HAS_MANY, 'ExhibitionDogCouple', 'id_dog2'),
			'fertilisations' => array(self::HAS_MANY, 'Fertilisation', 'id_dog_mother'),
			'fertilisations1' => array(self::HAS_MANY, 'Fertilisation', 'id_dog_father'),
			'images' => array(self::HAS_MANY, 'Image', 'id_dog'),
			'youthPresentationDogs' => array(self::HAS_MANY, 'YouthPresentationDog', 'id_dog'),
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
			'id_fertilisation' => 'Id Fertilisation',
			'id_owner' => 'Id Owner',
			'id_old_owner' => 'Id Old Owner',
			'id_kennel' => 'Id Kennel',
			'dlk' => 'Dlk',
			'dbk' => 'Dbk',
			'dwarf' => 'Dwarf',
			'dm' => 'Dm',
			'dna' => 'Dna',
			'dlk_vet' => 'Dlk Vet',
			'dlk_date' => 'Dlk Date',
			'dbk_vet' => 'Dbk Vet',
			'dbk_date' => 'Dbk Date',
			'dwarf_vet' => 'Dwarf Vet',
			'dwarf_date' => 'Dwarf Date',
			'dm_vet' => 'Dm Vet',
			'dm_date' => 'Dm Date',
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
		$criteria->compare('id_fertilisation',$this->id_fertilisation);
		$criteria->compare('id_owner',$this->id_owner);
		$criteria->compare('id_old_owner',$this->id_old_owner);
		$criteria->compare('id_kennel',$this->id_kennel);
		$criteria->compare('dlk',$this->dlk);
		$criteria->compare('dbk',$this->dbk);
		$criteria->compare('dwarf',$this->dwarf);
		$criteria->compare('dm',$this->dm);
		$criteria->compare('dna',$this->dna,true);
		$criteria->compare('dlk_vet',$this->dlk_vet,true);
		$criteria->compare('dlk_date',$this->dlk_date,true);
		$criteria->compare('dbk_vet',$this->dbk_vet,true);
		$criteria->compare('dbk_date',$this->dbk_date,true);
		$criteria->compare('dwarf_vet',$this->dwarf_vet,true);
		$criteria->compare('dwarf_date',$this->dwarf_date,true);
		$criteria->compare('dm_vet',$this->dm_vet,true);
		$criteria->compare('dm_date',$this->dm_date,true);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('updated_at',$this->updated_at,true);
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
        
        public function getMaleList(){
            return CHtml::listData($this->findAllByAttributes(array('sex'=>1)), 'id', 'name');
        }
        
        public function getFemaleList(){
            return CHtml::listData($this->findAllByAttributes(array('sex'=>0)), 'id', 'name');
        }
}
