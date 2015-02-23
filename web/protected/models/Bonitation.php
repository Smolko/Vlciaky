<?php

/**
 * This is the model class for table "{{bonitation}}".
 *
 * The followings are the available columns in table '{{bonitation}}':
 * @property integer $id
 * @property integer $id_dog
 * @property string $bonitation_code
 * @property string $temperament
 * @property string $comment
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
 * @property integer $harmony
 * @property integer $type
 * @property string $bonitation_place
 * @property string $referee
 * @property integer $state
 * @property string $date
 * @property string $created_at
 * @property string $updated_at
 *
 * The followings are the available model relations:
 * @property Dog $idDog
 */
class Bonitation extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{bonitation}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_dog, bonitation_code, temperament, comment, head_length, head_width, snout_length, ear_length, oblique_length, chest_depth, chest_circle, front_leg_length, thigh_length, pastern_length, pastern_circle, tarsus_length, tibia_length, harmony, type, bonitation_place, referee, state, date, created_at', 'required'),
			array('id_dog, harmony, type, state', 'numerical', 'integerOnly'=>true),
			array('head_length, head_width, snout_length, ear_length, oblique_length, chest_depth, chest_circle, front_leg_length, thigh_length, pastern_length, pastern_circle, tarsus_length, tibia_length', 'numerical'),
			array('bonitation_code', 'length', 'max'=>100),
			array('temperament', 'length', 'max'=>50),
			array('comment', 'length', 'max'=>1000),
			array('bonitation_place, referee', 'length', 'max'=>200),
			array('updated_at', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, id_dog, bonitation_code, temperament, comment, head_length, head_width, snout_length, ear_length, oblique_length, chest_depth, chest_circle, front_leg_length, thigh_length, pastern_length, pastern_circle, tarsus_length, tibia_length, harmony, type, bonitation_place, referee, state, date, created_at, updated_at', 'safe', 'on'=>'search'),
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
			'id_dog' => 'Id Dog',
			'bonitation_code' => 'Bonitation Code',
			'temperament' => 'Temperament',
			'comment' => 'Comment',
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
			'harmony' => 'Harmony',
			'type' => 'Type',
			'bonitation_place' => 'Bonitation Place',
			'referee' => 'Referee',
			'state' => 'State',
			'date' => 'Date',
			'created_at' => 'Created At',
			'updated_at' => 'Updated At',
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
		$criteria->compare('id_dog',$this->id_dog);
		$criteria->compare('bonitation_code',$this->bonitation_code,true);
		$criteria->compare('temperament',$this->temperament,true);
		$criteria->compare('comment',$this->comment,true);
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
		$criteria->compare('harmony',$this->harmony);
		$criteria->compare('type',$this->type);
		$criteria->compare('bonitation_place',$this->bonitation_place,true);
		$criteria->compare('referee',$this->referee,true);
		$criteria->compare('state',$this->state);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('updated_at',$this->updated_at,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Bonitation the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
