<?php

/**
 * This is the model class for table "grades".
 *
 * The followings are the available columns in table 'grades':
 * @property integer $id
 * @property integer $teacher_id
 * @property integer $grading_period_id
 * @property integer $subjects_id
 * @property integer $students_id
 * @property integer $grading_date_id
 * @property double $knowledge
 * @property double $skills
 * @property double $understanding
 * @property double $performance
 * @property double $periodic_grade
 *
 * The followings are the available model relations:
 * @property Teacher $teacher
 * @property GradingPeriod $gradingPeriod
 * @property Subjects $subjects
 * @property Students $students
 * @property GradingDate $gradingDate
 */
class Grades extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'grades';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('teacher_id, grading_period_id, subjects_id, students_id, grading_date_id, knowledge, skills, understanding, performance, periodic_grade', 'required'),
			array('teacher_id, grading_period_id, subjects_id, students_id, grading_date_id', 'numerical', 'integerOnly'=>true),
			array('knowledge, skills, understanding, performance, periodic_grade', 'numerical'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, teacher_id, grading_period_id, subjects_id, students_id, grading_date_id, knowledge, skills, understanding, performance, periodic_grade', 'safe', 'on'=>'search'),
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
			'teacher' => array(self::BELONGS_TO, 'Teacher', 'teacher_id'),
			'gradingPeriod' => array(self::BELONGS_TO, 'GradingPeriod', 'grading_period_id'),
			'subjects' => array(self::BELONGS_TO, 'Subjects', 'subjects_id'),
			'students' => array(self::BELONGS_TO, 'Students', 'students_id'),
			'gradingDate' => array(self::BELONGS_TO, 'GradingDate', 'grading_date_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'Grade ID',
			'teacher_id' => 'Teacher ID',
			'grading_period_id' => 'Grading Period',
			'subjects_id' => 'Subjects',
			'students_id' => 'Students ID',
			'grading_date_id' => 'Grading Date ID',
			'knowledge' => 'Knowledge',
			'skills' => 'Skills',
			'understanding' => 'Understanding',
			'performance' => 'Performance',
			'periodic_grade' => 'Periodic Grade',
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
		$criteria->compare('teacher_id',$this->teacher_id);
		$criteria->compare('grading_period_id',$this->grading_period_id);
		$criteria->compare('subjects_id',$this->subjects_id);
		$criteria->compare('students_id',$this->students_id);
		$criteria->compare('grading_date_id',$this->grading_date_id);
		$criteria->compare('knowledge',$this->knowledge);
		$criteria->compare('skills',$this->skills);
		$criteria->compare('understanding',$this->understanding);
		$criteria->compare('performance',$this->performance);
		$criteria->compare('periodic_grade',$this->periodic_grade);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Grades the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
