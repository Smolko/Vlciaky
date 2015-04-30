<?php

/**
 * This is the model class for table "{{fertilisation}}".
 *
 * The followings are the available columns in table '{{fertilisation}}':
 * @property integer $id
 * @property string $fertilisation_date
 * @property string $litter_date
 * @property integer $male_count
 * @property integer $female_count
 * @property string $comment
 * @property integer $id_dog_mother
 * @property integer $id_dog_father
 * @property integer $id_kennel
 * @property string $created_at
 * @property string $updated_at
 * @property integer $state
 *
 * The followings are the available model relations:
 * @property Dog[] $dogs
 * @property Dog $idDogMother
 * @property Dog $idDogFather
 * @property Kennel $idKennel
 */
class Fertilisation extends BaseModel
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{fertilisation}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fertilisation_date, litter_date, male_count, female_count, comment, id_dog_mother, id_dog_father, id_kennel, state', 'required'),
			array('male_count, female_count, id_dog_mother, id_dog_father, id_kennel, state', 'numerical', 'integerOnly'=>true),
			array('comment', 'length', 'max'=>200),
			array('created_at', 'default', 'value' => new CDbExpression('NOW()'), 'setOnEmpty' => false, 'on' => 'insert'),
                        array('updated_at', 'default', 'value' => new CDbExpression('NOW()'), 'setOnEmpty' => false, 'on' => 'update'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, fertilisation_date, litter_date, male_count, female_count, comment, id_dog_mother, id_dog_father, id_kennel, created_at, updated_at, state', 'safe', 'on'=>'search'),
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
			'dogs' => array(self::HAS_MANY, 'Dog', 'id_fertilisation'),
			'idDogMother' => array(self::BELONGS_TO, 'Dog', 'id_dog_mother'),
			'idDogFather' => array(self::BELONGS_TO, 'Dog', 'id_dog_father'),
			'idKennel' => array(self::BELONGS_TO, 'Kennel', 'id_kennel'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'fertilisation_date' => 'Fertilisation Date',
			'litter_date' => 'Litter Date',
			'male_count' => 'Male Count',
			'female_count' => 'Female Count',
			'comment' => 'Comment',
			'id_dog_mother' => 'Id Dog Mother',
			'id_dog_father' => 'Id Dog Father',
			'id_kennel' => 'Id Kennel',
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
		$criteria->compare('fertilisation_date',$this->fertilisation_date,true);
		$criteria->compare('litter_date',$this->litter_date,true);
		$criteria->compare('male_count',$this->male_count);
		$criteria->compare('female_count',$this->female_count);
		$criteria->compare('comment',$this->comment,true);
		$criteria->compare('id_dog_mother',$this->id_dog_mother);
		$criteria->compare('id_dog_father',$this->id_dog_father);
		$criteria->compare('id_kennel',$this->id_kennel);
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
	 * @return Fertilisation the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        
       public function getPuppyStatisticsY($year){
            
            $criteria=new CDbCriteria;
                $criteria->select = 'count(id) AS id, sum(male_count) AS male_count, sum(female_count) AS female_count';
                $criteria->addBetweenCondition('litter_date', date($year.'-01-01'), date($year.'-12-12'));
              //  $criteria->condition = "litter_date BETWEEN '".date($year.'-01-01')."' AND '" . date($year.'-12-31') . "'";
            // var_dump($this->findAll($criteria))[0];
           //     exit;
                 return $this->findAll($criteria)[0];
        }
        
         public function getPuppyCount($yearStart=0, $yearEnd=0){
             
             $criteria=new CDbCriteria;
                $criteria->select = 'count(id) AS id, sum(male_count) AS male_count, sum(female_count) AS female_count';
            if($yearStart!=0 && $yearEnd!=0){
                   $criteria->condition = "litter_date BETWEEN '".date($yearStart.'-01-01')."' AND '" . date($yearEnd.'-12-31') . "'";       
            }
            else if($yearStart==0 && $yearEnd!=0){
                   $criteria->condition = "litter_date < '".date($yearEnd.'-01-01')."'";       
            }
            else if($yearStart!=0 && $yearEnd==0){
                   $criteria->condition = "litter_date > '".date($yearStart.'-01-01')."'";        
            }
               // var_dump($this->findAll($criteria)[0]->male_count);
               // exit;
                 return $this->findAll($criteria)[0];
        }
}
