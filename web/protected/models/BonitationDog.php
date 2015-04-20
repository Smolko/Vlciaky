<?php

/**
 * This is the model class for table "{{bonitation_dog}}".
 *
 * The followings are the available columns in table '{{bonitation_dog}}':
 * @property integer $id
 * @property integer $id_bonitation_and_youth_presentation
 * @property integer $id_dog
 * @property string $evaluation
 * @property string $bonitation_code
 * @property string $temperament
 * @property string $type
 * @property integer $harmony
 * @property double $head_length
 * @property double $head_width
 * @property double $snout_length
 * @property double $ear_length
 * @property double $oblique_length
 * @property double $chest_depth
 * @property double $chest_circle
 * @property double $front_leg_length
 * @property double $thigh_length
 * @property double $pastern_length
 * @property double $pastern_circle
 * @property double $tarsus_length
 * @property double $tibia_length
 * @property string $comment
 * @property string $created_at
 * @property string $updated_at
 * @property integer $state
 *
 * The followings are the available model relations:
 * @property BonitationAndYouthPresentation $idBonitationAndYouthPresentation
 * @property Dog $idDog
 */
class BonitationDog extends BaseModel
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{bonitation_dog}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_bonitation_and_youth_presentation, id_dog, harmony, state', 'numerical', 'integerOnly'=>true),
			array('head_length, head_width, snout_length, ear_length, oblique_length, chest_depth, chest_circle, front_leg_length, thigh_length, pastern_length, pastern_circle, tarsus_length, tibia_length', 'numerical'),
			array('evaluation, bonitation_code', 'length', 'max'=>100),
			array('temperament, type', 'length', 'max'=>50),
			array('comment', 'length', 'max'=>1000),
			array('created_at, updated_at', 'safe'),
                        array('created_at', 'default', 'value' => new CDbExpression('NOW()'), 'setOnEmpty' => false, 'on' => 'insert'),
                        array('updated_at', 'default', 'value' => new CDbExpression('NOW()'), 'setOnEmpty' => false, 'on' => 'update'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, id_bonitation_and_youth_presentation, id_dog, evaluation, bonitation_code, temperament, type, harmony, head_length, head_width, snout_length, ear_length, oblique_length, chest_depth, chest_circle, front_leg_length, thigh_length, pastern_length, pastern_circle, tarsus_length, tibia_length, comment, created_at, updated_at, state', 'safe', 'on'=>'search'),
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
			'idBonitationAndYouthPresentation' => array(self::BELONGS_TO, 'BonitationAndYouthPresentation', 'id_bonitation_and_youth_presentation'),
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
			'id_bonitation_and_youth_presentation' => 'Id Bonitation And Youth Presentation',
			'id_dog' => 'Id Dog',
			'evaluation' => 'Evaluation',
			'bonitation_code' => 'Bonitation Code',
			'temperament' => 'Temperament',
			'type' => 'Type',
			'harmony' => 'Harmony',
			'head_length' => 'Head Length',
			'head_width' => 'Head Width',
			'snout_length' => 'Snout Length',
			'ear_length' => 'Ear Length',
			'oblique_length' => 'Oblique Length',
			'chest_depth' => 'Chest Depth',
			'chest_circle' => 'Chest Circle',
			'front_leg_length' => 'Front Leg Length',
			'thigh_length' => 'Thigh Length',
			'pastern_length' => 'Pastern Length',
			'pastern_circle' => 'Pastern Circle',
			'tarsus_length' => 'Tarsus Length',
			'tibia_length' => 'Tibia Length',
			'comment' => 'Comment',
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
		$criteria->compare('id_bonitation_and_youth_presentation',$this->id_bonitation_and_youth_presentation);
		$criteria->compare('id_dog',$this->id_dog);
		$criteria->compare('evaluation',$this->evaluation,true);
		$criteria->compare('bonitation_code',$this->bonitation_code,true);
		$criteria->compare('temperament',$this->temperament,true);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('harmony',$this->harmony);
		$criteria->compare('head_length',$this->head_length);
		$criteria->compare('head_width',$this->head_width);
		$criteria->compare('snout_length',$this->snout_length);
		$criteria->compare('ear_length',$this->ear_length);
		$criteria->compare('oblique_length',$this->oblique_length);
		$criteria->compare('chest_depth',$this->chest_depth);
		$criteria->compare('chest_circle',$this->chest_circle);
		$criteria->compare('front_leg_length',$this->front_leg_length);
		$criteria->compare('thigh_length',$this->thigh_length);
		$criteria->compare('pastern_length',$this->pastern_length);
		$criteria->compare('pastern_circle',$this->pastern_circle);
		$criteria->compare('tarsus_length',$this->tarsus_length);
		$criteria->compare('tibia_length',$this->tibia_length);
		$criteria->compare('comment',$this->comment,true);
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
	 * @return BonitationDog the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
