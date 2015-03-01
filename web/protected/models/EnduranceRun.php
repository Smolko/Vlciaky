<?php

/**
 * This is the model class for table "{{endurance_run}}".
 *
 * The followings are the available columns in table '{{endurance_run}}':
 * @property integer $id
 * @property integer $place
 * @property integer $order
 * @property string $handler
 * @property string $type
 * @property string $evaluation
 * @property string $andurance_run_place
 * @property string $date
 * @property string $referee
 * @property integer $id_dog
 * @property string $created_at
 * @property string $updated_at
 * @property integer $state
 *
 * The followings are the available model relations:
 * @property Dog $idDog
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
			array('place, order, handler, type, evaluation, andurance_run_place, date, referee, id_dog, state', 'required'),
			array('place, order, id_dog, state', 'numerical', 'integerOnly'=>true),
			array('handler, andurance_run_place, referee', 'length', 'max'=>200),
			array('type', 'length', 'max'=>50),
			array('evaluation', 'length', 'max'=>300),
			array('created_at', 'default', 'value' => new CDbExpression('NOW()'), 'setOnEmpty' => false, 'on' => 'insert'),
                        array('updated_at', 'default', 'value' => new CDbExpression('NOW()'), 'setOnEmpty' => false, 'on' => 'update'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, place, order, handler, type, evaluation, andurance_run_place, date, referee, id_dog, created_at, updated_at, state', 'safe', 'on'=>'search'),
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
			'place' => 'Place',
			'order' => 'Order',
			'handler' => 'Handler',
			'type' => 'Type',
			'evaluation' => 'Evaluation',
			'andurance_run_place' => 'Andurance Run Place',
			'date' => 'Date',
			'referee' => 'Referee',
			'id_dog' => 'Id Dog',
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
		$criteria->compare('place',$this->place);
		$criteria->compare('order',$this->order);
		$criteria->compare('handler',$this->handler,true);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('evaluation',$this->evaluation,true);
		$criteria->compare('andurance_run_place',$this->andurance_run_place,true);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('referee',$this->referee,true);
		$criteria->compare('id_dog',$this->id_dog);
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
	 * @return EnduranceRun the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
