<?php

/**
 * This is the model class for table "{{endurance_run_dog}}".
 *
 * The followings are the available columns in table '{{endurance_run_dog}}':
 * @property integer $id
 * @property integer $id_endurance_run
 * @property integer $place
 * @property integer $id_dog
 * @property string $handler
 * @property integer $order
 * @property integer $duration
 * @property string $evaluation
 * @property integer $type
 * @property string $created_at
 * @property string $updated_at
 * @property integer $state
 *
 * The followings are the available model relations:
 * @property EnduranceRun $idEnduranceRun
 * @property Dog $idDog
 */
class EnduranceRunDog extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{endurance_run_dog}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			//array('id_endurance_run, place, id_dog, handler, order, duration, evaluation, type, created_at, updated_at, state', 'required'),
			array('id_endurance_run, place, id_dog, order, duration, type, state', 'numerical', 'integerOnly'=>true),
			array('handler, evaluation', 'length', 'max'=>200),
                        array('created_at', 'default', 'value' => new CDbExpression('NOW()'), 'setOnEmpty' => false, 'on' => 'insert'),
                        array('updated_at', 'default', 'value' => new CDbExpression('NOW()'), 'setOnEmpty' => false, 'on' => 'update'),
			
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, id_endurance_run, place, id_dog, handler, order, duration, evaluation, type, created_at, updated_at, state', 'safe', 'on'=>'search'),
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
			'idEnduranceRun' => array(self::BELONGS_TO, 'EnduranceRun', 'id_endurance_run'),
			'idDog' => array(self::BELONGS_TO, 'Dog', 'id_dog'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'id_endurance_run' => 'Id Endurance Run',
			'place' => 'Place',
			'id_dog' => 'Id Dog',
			'handler' => 'Handler',
			'order' => 'Order',
			'duration' => 'Duration',
			'evaluation' => 'Evaluation',
			'type' => 'Type',
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
		$criteria->compare('id_endurance_run',$this->id_endurance_run);
		$criteria->compare('place',$this->place);
		$criteria->compare('id_dog',$this->id_dog);
		$criteria->compare('handler',$this->handler,true);
		$criteria->compare('order',$this->order);
		$criteria->compare('duration',$this->duration);
		$criteria->compare('evaluation',$this->evaluation,true);
		$criteria->compare('type',$this->type);
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
	 * @return EnduranceRunDog the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
