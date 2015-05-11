<?php

/**
 * This is the model class for table "{{users}}".
 *
 * The followings are the available columns in table '{{users}}':
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property string $email
 * @property string $activkey
 * @property integer $superuser
 * @property integer $status
 * @property string $create_at
 * @property string $lastvisit_at
 * @property string $user_type
 * @property string $name
 * @property string $surname
 * @property string $title
 * @property string $born_date
 * @property string $street
 * @property string $address_number
 * @property string $city
 * @property string $psc
 * @property string $web_site
 * @property integer $phone_number
 * @property integer $club_member
 * @property integer $request_member
 * @property string $chs_owner
 * @property string $chs_registred
 * @property string $chs_number
 * @property integer $rank
 *
 * The followings are the available model relations:
 * @property Dog[] $dogs
 * @property Profiles $profiles
 */
class Users extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{users}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('create_at, user_type, name, surname, street, address_number, city, psc, rank', 'required'),
			array('superuser, status, phone_number, club_member, request_member, rank', 'numerical', 'integerOnly'=>true),
			array('username, title', 'length', 'max'=>20),
			array('password, email, activkey', 'length', 'max'=>128),
			array('user_type', 'length', 'max'=>10),
			array('name, address_number, chs_number', 'length', 'max'=>50),
			array('surname, street, city, web_site', 'length', 'max'=>100),
			array('psc', 'length', 'max'=>5),
			array('chs_owner', 'length', 'max'=>200),
			array('lastvisit_at, born_date, chs_registred', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, username, password, email, activkey, superuser, status, create_at, lastvisit_at, user_type, name, surname, title, born_date, street, address_number, city, psc, web_site, phone_number, club_member, request_member, chs_owner, chs_registred, chs_number, rank', 'safe', 'on'=>'search'),
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
                        'dogs' => array(self::HAS_MANY, 'Dog', 'id_owner'),
			'dogs1' => array(self::HAS_MANY, 'Dog', 'id_old_owner'),
			'profiles' => array(self::HAS_ONE, 'Profiles', 'user_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'username' => 'Username',
			'password' => 'Password',
			'email' => 'Email',
			'activkey' => 'Activkey',
			'superuser' => 'Superuser',
			'status' => 'Status',
			'create_at' => 'Create At',
			'lastvisit_at' => 'Lastvisit At',
			'user_type' => 'User Type',
			'name' => 'Name',
			'surname' => 'Surname',
			'title' => 'Title',
			'born_date' => 'Born Date',
			'street' => 'Street',
			'address_number' => 'Address Number',
			'city' => 'City',
			'psc' => 'Psc',
			'web_site' => 'Web Site',
			'phone_number' => 'Phone Number',
			'club_member' => 'Club Member',
			'request_member' => 'Request Member',
			'chs_owner' => 'Chs Owner',
			'chs_registred' => 'Chs Registred',
			'chs_number' => 'Chs Number',
			'rank' => 'Rank',
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
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('activkey',$this->activkey,true);
		$criteria->compare('superuser',$this->superuser);
		$criteria->compare('status',$this->status);
		$criteria->compare('create_at',$this->create_at,true);
		$criteria->compare('lastvisit_at',$this->lastvisit_at,true);
		$criteria->compare('user_type',$this->user_type,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('surname',$this->surname,true);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('born_date',$this->born_date,true);
		$criteria->compare('street',$this->street,true);
		$criteria->compare('address_number',$this->address_number,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('psc',$this->psc,true);
		$criteria->compare('web_site',$this->web_site,true);
		$criteria->compare('phone_number',$this->phone_number);
		$criteria->compare('club_member',$this->club_member);
		$criteria->compare('request_member',$this->request_member);
		$criteria->compare('chs_owner',$this->chs_owner,true);
		$criteria->compare('chs_registred',$this->chs_registred,true);
		$criteria->compare('chs_number',$this->chs_number,true);
		$criteria->compare('rank',$this->rank);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Users the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
