<?php

/**
 * This is the model class for table "{{health}}".
 *
 * The followings are the available columns in table '{{health}}':
 * @property integer $id
 * @property integer $dlk
 * @property integer $dbk
 * @property integer $dwarf
 * @property integer $dm
 * @property string $dna
 * @property string $testicles
 * @property string $teeth
 * @property string $head
 * @property string $eyes
 * @property string $ears
 * @property string $neck
 * @property string $trunk
 * @property string $upper_limbs
 * @property string $lower_limbs
 * @property string $tail
 * @property string $fur
 * @property string $color
 * @property string $movement
 * @property string $attachment_url
 * @property string $vet
 * @property string $date
 * @property string $created_at
 * @property string $updated_at
 * @property integer $state
 *
 * The followings are the available model relations:
 * @property Dog[] $dogs
 */
class Health extends BaseModel
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{health}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('dlk, dbk, dwarf, dm, dna, testicles, teeth, head, eyes, ears, neck, trunk, upper_limbs, lower_limbs, tail, fur, color, movement, attachment_url, vet, date, state', 'required'),
			array('dlk, dbk, dwarf, dm, state', 'numerical', 'integerOnly'=>true),
			array('dna, testicles, teeth, head, eyes, ears, neck, trunk, upper_limbs, lower_limbs, tail, fur, color, movement, vet', 'length', 'max'=>200),
			array('attachment_url', 'length', 'max'=>300),
			array('created_at', 'default', 'value' => new CDbExpression('NOW()'), 'setOnEmpty' => false, 'on' => 'insert'),
                        array('updated_at', 'default', 'value' => new CDbExpression('NOW()'), 'setOnEmpty' => false, 'on' => 'update'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, dlk, dbk, dwarf, dm, dna, testicles, teeth, head, eyes, ears, neck, trunk, upper_limbs, lower_limbs, tail, fur, color, movement, attachment_url, vet, date, created_at, updated_at, state', 'safe', 'on'=>'search'),
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
			'dogs' => array(self::HAS_MANY, 'Dog', 'id_health'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'dlk' => 'Dlk',
			'dbk' => 'Dbk',
			'dwarf' => 'Dwarf',
			'dm' => 'Dm',
			'dna' => 'Dna',
			'testicles' => 'Testicles',
			'teeth' => 'Teeth',
			'head' => 'Head',
			'eyes' => 'Eyes',
			'ears' => 'Ears',
			'neck' => 'Neck',
			'trunk' => 'Trunk',
			'upper_limbs' => 'Upper Limbs',
			'lower_limbs' => 'Lower Limbs',
			'tail' => 'Tail',
			'fur' => 'Fur',
			'color' => 'Color',
			'movement' => 'Movement',
			'attachment_url' => 'Attachment Url',
			'vet' => 'Vet',
			'date' => 'Date',
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
		$criteria->compare('dlk',$this->dlk);
		$criteria->compare('dbk',$this->dbk);
		$criteria->compare('dwarf',$this->dwarf);
		$criteria->compare('dm',$this->dm);
		$criteria->compare('dna',$this->dna,true);
		$criteria->compare('testicles',$this->testicles,true);
		$criteria->compare('teeth',$this->teeth,true);
		$criteria->compare('head',$this->head,true);
		$criteria->compare('eyes',$this->eyes,true);
		$criteria->compare('ears',$this->ears,true);
		$criteria->compare('neck',$this->neck,true);
		$criteria->compare('trunk',$this->trunk,true);
		$criteria->compare('upper_limbs',$this->upper_limbs,true);
		$criteria->compare('lower_limbs',$this->lower_limbs,true);
		$criteria->compare('tail',$this->tail,true);
		$criteria->compare('fur',$this->fur,true);
		$criteria->compare('color',$this->color,true);
		$criteria->compare('movement',$this->movement,true);
		$criteria->compare('attachment_url',$this->attachment_url,true);
		$criteria->compare('vet',$this->vet,true);
		$criteria->compare('date',$this->date,true);
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
	 * @return Health the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
