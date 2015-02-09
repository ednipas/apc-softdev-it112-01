<?php

/**
 * This is the model class for table "classlist".
 *
 * The followings are the available columns in table 'classlist':
 * @property integer $id
 * @property integer $students_id
 * @property integer $section_id
 *
 * The followings are the available model relations:
 * @property Students $students
 * @property Section $section
 */
class Classlist extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Classlist the static model class
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
		return 'classlist';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, students_id, section_id', 'required'),
			array('id, students_id, section_id', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, students_id, section_id', 'safe', 'on'=>'search'),
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
			'students' => array(self::BELONGS_TO, 'Students', 'students_id'),
			'section' => array(self::BELONGS_TO, 'Section', 'section_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'students_id' => 'Students',
			'section_id' => 'Section',
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
		$criteria->compare('students_id',$this->students_id);
		$criteria->compare('section_id',$this->section_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}