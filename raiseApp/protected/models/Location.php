<?php

/**
 * This is the model class for table "tbl_location".
 *
 * The followings are the available columns in table 'tbl_location':
 * @property integer $location_id
 * @property integer $location_companyId
 * @property string $location_name
 *
 * The followings are the available model relations:
 * @property Company[] $tblCompanys
 * @property Company $locationCompany
 * @property GeoLocation[] $tblGeoLocations
 * @property Skillmatrix[] $tblSkillmatrixes
 * @property Skillmatrix[] $skillmatrixes
 */
class Location extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Location the static model class
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
		return 'tbl_location';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('location_companyId, location_name', 'required'),
			array('location_companyId', 'numerical', 'integerOnly'=>true),
			array('location_name', 'length', 'max'=>250),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('location_id, location_companyId, location_name', 'safe', 'on'=>'search'),
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
			'tblCompanys' => array(self::MANY_MANY, 'Company', 'tbl_company2location(company2location_locationId, company2location_companyId)'),
			'locationCompany' => array(self::BELONGS_TO, 'Company', 'location_companyId'),
			'tblGeoLocations' => array(self::MANY_MANY, 'GeoLocation', 'tbl_location2geoLocation(location2geoLocation_locationId, location2geoLocation_geoLocationId)'),
			'tblSkillmatrixes' => array(self::MANY_MANY, 'Skillmatrix', 'tbl_location2skillmatrix(location2skillmatrix_locationId, location2skillmatrix_skillmatrixId)'),
			'skillmatrixes' => array(self::HAS_MANY, 'Skillmatrix', 'skillmatrix_locationId'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'location_id' => 'Location',
			'location_companyId' => 'Location Company',
			'location_name' => 'Location Name',
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

		$criteria->compare('location_id',$this->location_id);
		$criteria->compare('location_companyId',$this->location_companyId);
		$criteria->compare('location_name',$this->location_name,true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}