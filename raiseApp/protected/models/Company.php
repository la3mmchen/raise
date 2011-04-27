<?php

/**
 * This is the model class for table "tbl_company".
 *
 * The followings are the available columns in table 'tbl_company':
 * @property integer $company_id
 * @property string $company_name
 * @property string $company_contact
 * @property integer $company_locationCount
 * @property string $company_description
 *
 * The followings are the available model relations:
 * @property Businessbranch[] $tblBusinessbranches
 * @property ContactInformation[] $tblContactInformations
 * @property Location[] $tblLocations
 * @property Location[] $locations
 * @property User[] $tblUsers
 */
class Company extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Company the static model class
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
		return 'tbl_company';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('company_name, company_contact, company_description', 'required'),
			array('company_locationCount', 'numerical', 'integerOnly'=>true),
			array('company_name, company_contact', 'length', 'max'=>250),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('company_id, company_name, company_contact, company_locationCount, company_description', 'safe', 'on'=>'search'),
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
			'tblBusinessbranches' => array(self::MANY_MANY, 'Businessbranch', 'tbl_company2businessbranch(company2businessbranch_companyId, company2businessbranch_businessbranchId)'),
			'tblContactInformations' => array(self::MANY_MANY, 'ContactInformation', 'tbl_company2contactInformation(company2contactInformation_companyId, company2contactInformation_contactInformationId)'),
			'tblLocations' => array(self::MANY_MANY, 'Location', 'tbl_company2location(company2location_companyId, company2location_locationId)'),
			'locations' => array(self::HAS_MANY, 'Location', 'location_companyId'),
			'tblUsers' => array(self::MANY_MANY, 'User', 'tbl_user2company(user2company_companyId, user2company_userId)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'company_id' => 'Company',
			'company_name' => 'Company Name',
			'company_contact' => 'Company Contact',
			'company_locationCount' => 'Company Location Count',
			'company_description' => 'Company Description',
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

		$criteria->compare('company_id',$this->company_id);
		$criteria->compare('company_name',$this->company_name,true);
		$criteria->compare('company_contact',$this->company_contact,true);
		$criteria->compare('company_locationCount',$this->company_locationCount);
		$criteria->compare('company_description',$this->company_description,true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}
