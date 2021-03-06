<?php

/**
 * This is the model class for table "{{sales_person}}".
 *
 * The followings are the available columns in table '{{sales_person}}':
 * @property integer $id
 * @property string $created_time
 * @property integer $created_by
 * @property string $updated_time
 * @property integer $updated_by
 * @property integer $is_deleted
 * @property string $deleted_time
 * @property integer $deleted_by
 * @property string $name
 * @property string $phone
 * @property string $fax
 * @property string $email
 * @property double $provision
 * @property double $provision2
 * @property double $break_point
 * @property integer $is_active
 *
 * The followings are the available model relations:
 * @property CustomerBranch[] $customerBranches
 */
class SalesPerson extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return SalesPerson the static model class
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
		return '{{sales_person}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, phone, fax, email, provision, provision2, break_point, is_active', 'required'),
			array('created_by, updated_by, is_deleted, deleted_by, is_active', 'numerical', 'integerOnly'=>true),
			array('provision, provision2, break_point', 'numerical'),
			array('name', 'length', 'max'=>60),
			array('phone, fax', 'length', 'max'=>30),
			array('email', 'length', 'max'=>100),
			array('created_time, updated_time, deleted_time', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, created_time, created_by, updated_time, updated_by, is_deleted, deleted_time, deleted_by, name, phone, fax, email, provision, provision2, break_point, is_active', 'safe', 'on'=>'search'),
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
			'customerBranches' => array(self::HAS_MANY, 'CustomerBranch', 'sales_person_id'),
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
			'phone' => 'Phone',
			'fax' => 'Fax',
			'email' => 'Email',
			'provision' => 'Provision',
			'provision2' => 'Provision2',
			'break_point' => 'Break Point',
			'is_active' => 'Is Active',
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
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('fax',$this->fax,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('provision',$this->provision);
		$criteria->compare('provision2',$this->provision2);
		$criteria->compare('break_point',$this->break_point);
		$criteria->compare('is_active',$this->is_active);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}