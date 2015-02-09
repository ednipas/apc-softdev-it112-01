<?php

/**
 * This is the model class for table "student".
 *
 * The followings are the available columns in table 'student':
 * @property integer $id
 * @property integer $yr_level_id
 * @property integer $section_id
 * @property string $fname
 * @property string $lname
 * @property string $mname
 * @property string $contact_no
 * @property string $address
 *
 * The followings are the available model relations:
 * @property Grades[] $grades
 * @property Section $section
 * @property YrLevel $yrLevel
 * @property StudentHasSection[] $studentHasSections
 */
class Student extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Student the static model class
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
		return 'student';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('yr_level_id, section_id, fname, lname, mname, contact_no, address', 'required'),
			array('yr_level_id, section_id', 'numerical', 'integerOnly'=>true),
			array('fname, lname, mname', 'length', 'max'=>45),
			array('contact_no', 'length', 'max'=>20),
			array('address', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, yr_level_id, section_id, fname, lname, mname, contact_no, address', 'safe', 'on'=>'search'),
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
			'grades' => array(self::HAS_MANY, 'Grades', 'student_id'),
			'section' => array(self::BELONGS_TO, 'Section', 'section_id'),
			'yrLevel' => array(self::BELONGS_TO, 'YrLevel', 'yr_level_id'),
			'studentHasSections' => array(self::HAS_MANY, 'StudentHasSection', 'student_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'yr_level_id' => 'Yr Level',
			'section_id' => 'Section',
			'fname' => 'Fname',
			'lname' => 'Lname',
			'mname' => 'Mname',
			'contact_no' => 'Contact No',
			'address' => 'Address',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('yr_level_id',$this->yr_level_id);
		$criteria->compare('section_id',$this->section_id);
		$criteria->compare('fname',$this->fname,true);
		$criteria->compare('lname',$this->lname,true);
		$criteria->compare('mname',$this->mname,true);
		$criteria->compare('contact_no',$this->contact_no,true);
		$criteria->compare('address',$this->address,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}