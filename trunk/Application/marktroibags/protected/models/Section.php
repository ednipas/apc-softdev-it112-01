<?php

/**
 * This is the model class for table "section".
 *
 * The followings are the available columns in table 'section':
 * @property integer $id
 * @property string $name
 * @property integer $teacher_id
 * @property integer $schedule_id
 * @property integer $yr_level_id
 *
 * The followings are the available model relations:
 * @property Schedule $schedule
 * @property YrLevel $yrLevel
 * @property Teacher $teacher
 * @property Students[] $students
 * @property Students[] $students1
 */
class Section extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Section the static model class
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
		return 'section';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, teacher_id, schedule_id, yr_level_id', 'required'),
			array('teacher_id, schedule_id, yr_level_id', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, teacher_id, schedule_id, yr_level_id', 'safe', 'on'=>'search'),
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
			'schedule' => array(self::BELONGS_TO, 'Schedule', 'schedule_id'),
			'yrLevel' => array(self::BELONGS_TO, 'YrLevel', 'yr_level_id'),
			'teacher' => array(self::BELONGS_TO, 'Teacher', 'teacher_id'),
			'students' => array(self::HAS_MANY, 'Students', 'section_id'),
			'students1' => array(self::MANY_MANY, 'Students', 'students_has_section(section_id, students_id)'),
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
			'teacher_id' => 'Teacher',
			'schedule_id' => 'Schedule',
			'yr_level_id' => 'Yr Level',
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
		$criteria->compare('name',$this->name,true);
		//$criteria->compare('teacher_id',$this->teacher_id);
        $criteria->compare('teacher.lname',$this->teacher_id);
		$criteria->compare('schedule_id',$this->schedule_id);
		//$criteria->compare('yr_level_id',$this->yr_level_id);
        $criteria->compare('yrLevel.name',$this->yr_level_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}