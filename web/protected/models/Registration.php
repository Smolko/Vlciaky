<?php

/**
 * This is the model class for table "{{registration}}".
 *
 * The followings are the available columns in table '{{registration}}':
 * @property integer $id
 * @property string $name
 * @property string $surname
 * @property string $title
 * @property string $born_date
 * @property string $login
 * @property string $password
 * @property string $street
 * @property string $address_number
 * @property string $city
 * @property string $psc
 * @property string $email
 * @property string $web_site
 * @property integer $phone_number
 * @property integer $club_member
 * @property integer $request_member
 * @property string $chs_owner
 * @property string $chs_registred
 * @property string $chs_number
 * @property integer $rank
 * @property string $created_at
 * @property string $updated_at
 * @property integer $state
 */
class Registration extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{registration}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, surname, login, password, street, address_number, city, psc, email, rank, created_at, updated_at', 'required'),
			array('phone_number, club_member, request_member, rank, state', 'numerical', 'integerOnly'=>true),
			array('name, login, password, address_number, chs_number', 'length', 'max'=>50),
			array('surname, street, city, email, web_site', 'length', 'max'=>100),
			array('title', 'length', 'max'=>20),
			array('psc', 'length', 'max'=>5),
			array('chs_owner', 'length', 'max'=>200),
			array('born_date, chs_registred', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, surname, title, born_date, login, password, street, address_number, city, psc, email, web_site, phone_number, club_member, request_member, chs_owner, chs_registred, chs_number, rank, created_at, updated_at, state', 'safe', 'on'=>'search'),
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
			'surname' => 'Surname',
			'title' => 'Title',
			'born_date' => 'Born Date',
			'login' => 'Login',
			'password' => 'Password',
			'street' => 'Street',
			'address_number' => 'Address Number',
			'city' => 'City',
			'psc' => 'Psc',
			'email' => 'Email',
			'web_site' => 'Web Site',
			'phone_number' => 'Phone Number',
			'club_member' => 'Club Member',
			'request_member' => 'Request Member',
			'chs_owner' => 'Chs Owner',
			'chs_registred' => 'Chs Registred',
			'chs_number' => 'Chs Number',
			'rank' => 'Rank',
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
		$criteria->compare('surname',$this->surname,true);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('born_date',$this->born_date,true);
		$criteria->compare('login',$this->login,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('street',$this->street,true);
		$criteria->compare('address_number',$this->address_number,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('psc',$this->psc,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('web_site',$this->web_site,true);
		$criteria->compare('phone_number',$this->phone_number);
		$criteria->compare('club_member',$this->club_member);
		$criteria->compare('request_member',$this->request_member);
		$criteria->compare('chs_owner',$this->chs_owner,true);
		$criteria->compare('chs_registred',$this->chs_registred,true);
		$criteria->compare('chs_number',$this->chs_number,true);
		$criteria->compare('rank',$this->rank);
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
	 * @return Registration the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
