<?php

/**
 * This is the model class for table "tbl_company".
 *
 * The followings are the available columns in table 'tbl_company':
 * @property integer $company_id
 * @property string $company_name
 * @property string $company_contact
 * @property integer $company_location
 * @property string $company_description
 * @property string $company_branch
 *  *
 * The followings are the available model relations:
 * @property User[] $tblUsers
 * @property Location[] $locations
 */
class Company extends CActiveRecord
{
	const BRANCH_NONE=0;
	const BRANCH_IT=1;
	const BRANCH_BRANCHB=2;
	const BRANCH_BRANCHC=3;
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
			array('company_location', 'numerical', 'integerOnly'=>true),
			array('company_name, company_contact', 'length', 'max'=>250),
			array('company_branch', 'length', 'max'=>500),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('company_id, company_name, company_contact, company_location, company_description, company_branch', 'safe', 'on'=>'search'),
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
			'tblUsers' => array(self::MANY_MANY, 'User', 'tbl_company2user(company2user_companyId, company2user_userId)'),
			'locations' => array(self::HAS_MANY, 'Location', 'location_companyId'),
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
			'company_location' => 'Company Location',
			'company_description' => 'Company Description',
			'company_branch' => 'Company Branch',
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
		$criteria->compare('company_location',$this->company_location);
		$criteria->compare('company_description',$this->company_description,true);
		$criteria->compare('company_branch',$this->company_branch,true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
	/**
	 * @return array with company branch type names indexed by branch IDs
	 */
	 public function getTypeOptions() {
		return array(
			self::BRANCH_NONE=>'uncategorized',
			self::BRANCH_IT=>'Information Technology',
			self::BRANCH_BRANCHB =>'Branch B',
			self::BRANCH_BRANCHC =>'Branch C'
		);
	 }
}
