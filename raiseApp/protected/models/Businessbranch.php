<?php

/**
 * This is the model class for table "tbl_businessbranch".
 *
 * The followings are the available columns in table 'tbl_businessbranch':
 * @property integer $businessbranch_id
 * @property string $businessbranch_name
 * @property string $businessbranch_description
 *
 * The followings are the available model relations:
 * @property Company[] $tblCompanys
 * @property Skillgeneric[] $tblSkillgenerics
 */
class Businessbranch extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Businessbranch the static model class
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
		return 'tbl_businessbranch';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('businessbranch_name, businessbranch_description', 'required'),
			array('businessbranch_name', 'length', 'max'=>250),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('businessbranch_id, businessbranch_name, businessbranch_description', 'safe', 'on'=>'search'),
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
			'tblCompanys' => array(self::MANY_MANY, 'Company', 'tbl_company2businessbranch(company2businessbranch_businessbranchId, company2businessbranch_companyId)'),
			'tblSkillgenerics' => array(self::MANY_MANY, 'Skillgeneric', 'tbl_skillgeneric2businessbranch(skillgeneric2businessbranch_businessbranchId, skillgeneric2businessbranch_skillgenericId)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'businessbranch_id' => 'Businessbranch',
			'businessbranch_name' => 'Businessbranch Name',
			'businessbranch_description' => 'Businessbranch Description',
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

		$criteria->compare('businessbranch_id',$this->businessbranch_id);
		$criteria->compare('businessbranch_name',$this->businessbranch_name,true);
		$criteria->compare('businessbranch_description',$this->businessbranch_description,true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}