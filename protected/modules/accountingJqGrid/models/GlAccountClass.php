<?php

/**
 * This is the model class for table "{{gl_account_class}}".
 *
 * The followings are the available columns in table '{{gl_account_class}}':
 * @property integer $id
 * @property string $created_time
 * @property integer $created_by
 * @property string $updated_time
 * @property integer $updated_by
 * @property integer $is_deleted
 * @property string $deleted_time
 * @property integer $deleted_by
 * @property string $name
 * @property integer $is_active
 * @property integer $old_id
 * @property integer $old_ctype_status
 * @property string $old_abbreviation
 *
 * The followings are the available model relations:
 * @property GlAccountType[] $glAccountTypes
 */
class GlAccountClass extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return GlAccountClass the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return CDbConnection database connection
	 */
	public function getDbConnection()
	{
		return Yii::app()->dbFa;
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{gl_account_class}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, is_active, old_id, old_ctype_status, old_abbreviation', 'required'),
			array('created_by, updated_by, is_deleted, deleted_by, is_active, old_id, old_ctype_status', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>60),
			array('old_abbreviation', 'length', 'max'=>50),
			array('created_time, updated_time, deleted_time', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, created_time, created_by, updated_time, updated_by, is_deleted, deleted_time, deleted_by, name, is_active, old_id, old_ctype_status, old_abbreviation', 'safe', 'on'=>'search'),
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
			'glAccountTypes' => array(self::HAS_MANY, 'GlAccountType', 'gl_account_class_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'created_time' => 'Created Time',
			'created_by' => 'Created By',
			'updated_time' => 'Updated Time',
			'updated_by' => 'Updated By',
			'is_deleted' => 'Is Deleted',
			'deleted_time' => 'Deleted Time',
			'deleted_by' => 'Deleted By',
			'name' => 'Name',
			'is_active' => 'Is Active',
			'old_id' => 'Old',
			'old_ctype_status' => 'Old Ctype Status',
			'old_abbreviation' => 'Old Abbreviation',
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
		$criteria->compare('created_time',$this->created_time,true);
		$criteria->compare('created_by',$this->created_by);
		$criteria->compare('updated_time',$this->updated_time,true);
		$criteria->compare('updated_by',$this->updated_by);
		$criteria->compare('is_deleted',$this->is_deleted);
		$criteria->compare('deleted_time',$this->deleted_time,true);
		$criteria->compare('deleted_by',$this->deleted_by);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('is_active',$this->is_active);
		$criteria->compare('old_id',$this->old_id);
		$criteria->compare('old_ctype_status',$this->old_ctype_status);
		$criteria->compare('old_abbreviation',$this->old_abbreviation,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}