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
 *
 * The followings are the available model relations:
 * @property Explace[] $explaces
 */
class Exhibition extends BaseModel
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{exhibition}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('count_male, count_female, count_all', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>500),
			array('place', 'length', 'max'=>300),
			array('referee', 'length', 'max'=>200),
			array('date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, place, date, referee, count_male, count_female, count_all', 'safe', 'on'=>'search'),
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
			'explaces' => array(self::HAS_MANY, 'Explace', 'id_exhibition'),
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
			'place' => 'Place',
			'date' => 'Date',
			'referee' => 'Referee',
			'count_male' => 'Count Male',
			'count_female' => 'Count Female',
			'count_all' => 'Count All',
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
		$criteria->compare('place',$this->place,true);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('referee',$this->referee,true);
		$criteria->compare('count_male',$this->count_male);
		$criteria->compare('count_female',$this->count_female);
		$criteria->compare('count_all',$this->count_all);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Exhibition the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
