<?php

/**
 * This is the model class for table "teacher".
 *
 * The followings are the available columns in table 'teacher':
 * @property integer $id
 * @property integer $account_id
 * @property string $fname
 * @property string $lname
 * @property string $mname
 * @property string $Contact_no
 * @property string $Address
 * @property integer $department_id
 *
 * The followings are the available model relations:
 * @property Grade[] $grades
 * @property Schedule[] $schedules
 * @property Section[] $sections
 * @property Department $department
 */
class Teacher extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Teacher the static model class
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
		return 'teacher';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('account_id, fname, lname, mname, Contact_no, Address, department_id', 'required'),
			array('account_id, department_id', 'numerical', 'integerOnly'=>true),
			array('fname, lname, mname', 'length', 'max'=>45),
			array('Contact_no', 'length', 'max'=>20),
			array('Address', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, account_id, fname, lname, mname, Contact_no, Address, department_id', 'safe', 'on'=>'search'),
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
			'grades' => array(self::HAS_MANY, 'Grade', 'teacher_id'),
			'schedules' => array(self::HAS_MANY, 'Schedule', 'teacher_id'),
			'sections' => array(self::HAS_MANY, 'Section', 'teacher_id'),
			'department' => array(self::BELONGS_TO, 'Department', 'department_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'account_id' => 'Account',
			'fname' => 'Fname',
			'lname' => 'Lname',
			'mname' => 'Mname',
			'Contact_no' => 'Contact No',
			'Address' => 'Address',
			'department_id' => 'Department',
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
		$criteria->compare('account_id',$this->account_id);
		$criteria->compare('fname',$this->fname,true);
		$criteria->compare('lname',$this->lname,true);
		$criteria->compare('mname',$this->mname,true);
		$criteria->compare('Contact_no',$this->Contact_no,true);
		$criteria->compare('Address',$this->Address,true);
		$criteria->compare('department_id',$this->department_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}