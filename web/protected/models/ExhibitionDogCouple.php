<?php

/**
 * This is the model class for table "{{exhibition_dog_couple}}".
 *
 * The followings are the available columns in table '{{exhibition_dog_couple}}':
 * @property integer $id
 * @property integer $id_dog1
 * @property integer $id_dog2
 * @property integer $place
 * @property string $created_at
 * @property string $updated_at
 * @property integer $state
 *
 * The followings are the available model relations:
 * @property Dog $idDog1
 * @property Dog $idDog2
 */
class ExhibitionDogCouple extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{exhibition_dog_couple}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_dog1, id_dog2, place, state', 'numerical', 'integerOnly'=>true),
			array('created_at, updated_at', 'safe'),
                        array('created_at', 'default', 'value' => new CDbExpression('NOW()'), 'setOnEmpty' => false, 'on' => 'insert'),
                        array('updated_at', 'default', 'value' => new CDbExpression('NOW()'), 'setOnEmpty' => false, 'on' => 'update'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, id_dog1, id_dog2, place, created_at, updated_at, state', 'safe', 'on'=>'search'),
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
			'idDog1' => array(self::BELONGS_TO, 'Dog', 'id_dog1'),
			'idDog2' => array(self::BELONGS_TO, 'Dog', 'id_dog2'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'id_dog1' => 'Id Dog1',
			'id_dog2' => 'Id Dog2',
			'place' => 'Place',
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
		$criteria->compare('id_dog1',$this->id_dog1);
		$criteria->compare('id_dog2',$this->id_dog2);
		$criteria->compare('place',$this->place);
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
	 * @return ExhibitionDogCouple the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
