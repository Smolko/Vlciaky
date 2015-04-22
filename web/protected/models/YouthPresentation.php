<?php

/**
 * This is the model class for table "{{youth_presentation}}".
 *
 * The followings are the available columns in table '{{youth_presentation}}':
 * @property integer $id
 * @property string $assessment
 * @property integer $evaluation
 * @property string $youth_presentation_date
 * @property string $youth_presentation_place
 * @property string $referee
 * @property integer $id_dog
 * @property string $created_at
 * @property string $updated_at
 * @property integer $state
 *
 * The followings are the available model relations:
 * @property Dog $idDog
 */
class YouthPresentation extends BaseModel
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{youth_presentation}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('assessment, evaluation, youth_presentation_date, youth_presentation_place, referee, id_dog, state', 'required'),
			array('evaluation, id_dog, state', 'numerical', 'integerOnly'=>true),
			array('assessment', 'length', 'max'=>1000),
			array('youth_presentation_place, referee', 'length', 'max'=>200),
			array('created_at', 'default', 'value' => new CDbExpression('NOW()'), 'setOnEmpty' => false, 'on' => 'insert'),
                        array('updated_at', 'default', 'value' => new CDbExpression('NOW()'), 'setOnEmpty' => false, 'on' => 'update'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, assessment, evaluation, youth_presentation_date, youth_presentation_place, referee, id_dog, created_at, updated_at, state', 'safe', 'on'=>'search'),
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
			'assessment' => 'Assessment',
			'evaluation' => 'Evaluation',
			'youth_presentation_date' => 'Youth Presentation Date',
			'youth_presentation_place' => 'Youth Presentation Place',
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
		$criteria->compare('assessment',$this->assessment,true);
		$criteria->compare('evaluation',$this->evaluation);
		$criteria->compare('youth_presentation_date',$this->youth_presentation_date,true);
		$criteria->compare('youth_presentation_place',$this->youth_presentation_place,true);
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
	 * @return YouthPresentation the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
