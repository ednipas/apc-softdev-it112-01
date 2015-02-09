<?php

/**
 * This is the model class for table "schedule".
 *
 * The followings are the available columns in table 'schedule':
 * @property integer $id
 * @property integer $time_id
 * @property integer $day_id
 * @property integer $room_id
 * @property integer $subjects_id
 * @property integer $teacher_id
 *
 * The followings are the available model relations:
 * @property Time $time
 * @property Day $day
 * @property Room $room
 * @property Subjects $subjects
 * @property Teacher $teacher
 * @property Section[] $sections
 */
class Schedule extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'schedule';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('time_id, day_id, room_id, subjects_id, teacher_id', 'required'),
			array('time_id, day_id, room_id, subjects_id, teacher_id', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, time_id, day_id, room_id, subjects_id, teacher_id', 'safe', 'on'=>'search'),
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
			'time' => array(self::BELONGS_TO, 'Time', 'time_id'),
			'day' => array(self::BELONGS_TO, 'Day', 'day_id'),
			'room' => array(self::BELONGS_TO, 'Room', 'room_id'),
			'subjects' => array(self::BELONGS_TO, 'Subjects', 'subjects_id'),
			'teacher' => array(self::BELONGS_TO, 'Teacher', 'teacher_id'),
			'sections' => array(self::HAS_MANY, 'Section', 'schedule_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'time_id' => 'Time',
			'day_id' => 'Day',
			'room_id' => 'Room',
			'subjects_id' => 'Subjects',
			'teacher_id' => 'Teacher',
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
		$criteria->compare('time_id',$this->time_id);
		$criteria->compare('day_id',$this->day_id);
		$criteria->compare('room_id',$this->room_id);
		$criteria->compare('subjects_id',$this->subjects_id);
		$criteria->compare('teacher_id',$this->teacher_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Schedule the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
