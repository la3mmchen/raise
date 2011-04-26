<?php

/**
 * This is the model class for table "tbl_user".
 *
 * The followings are the available columns in table 'tbl_user':
 * @property integer $user_id
 * @property string $user_name
 * @property string $user_contact
 * @property string $user_pwd
 * @property string $user_information
 *
 * The followings are the available model relations:
 * @property Company[] $tblCompanys
 */
class User extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_name, user_contact, user_pwd, user_information', 'required'),
			array('user_name', 'length', 'max'=>500),
			array('user_contact', 'length', 'max'=>250),
			array('user_pwd', 'length', 'max'=>150),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('user_id, user_name, user_contact, user_pwd, user_information', 'safe', 'on'=>'search'),
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
			'tblCompanys' => array(self::MANY_MANY, 'Company', 'tbl_company2user(company2user_userId, company2user_companyId)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'user_id' => 'User',
			'user_name' => 'User Name',
			'user_contact' => 'User Contact',
			'user_pwd' => 'User Pwd',
			'user_information' => 'User Information',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('user_name',$this->user_name,true);
		$criteria->compare('user_contact',$this->user_contact,true);
		$criteria->compare('user_pwd',$this->user_pwd,true);
		$criteria->compare('user_information',$this->user_information,true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}