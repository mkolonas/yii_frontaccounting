<?php

/**
 * This is the model class for table "{{attachment}}".
 *
 * The followings are the available columns in table '{{attachment}}':
 * @property integer $id
 * @property string $created_time
 * @property integer $created_by
 * @property string $updated_time
 * @property integer $updated_by
 * @property integer $is_deleted
 * @property string $deleted_time
 * @property integer $deleted_by
 * @property string $name
 * @property string $description
 * @property integer $transaction_type_id
 * @property integer $transaction_no
 * @property string $unique_name
 * @property string $transaction_date
 * @property string $file_name
 * @property integer $file_size
 * @property string $file_type
 *
 * The followings are the available model relations:
 * @property TransactionType $transactionType
 */
class Attachment extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Attachment the static model class
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
		return '{{attachment}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, description, transaction_type_id, transaction_no, unique_name, transaction_date, file_name, file_size, file_type', 'required'),
			array('created_by, updated_by, is_deleted, deleted_by, transaction_type_id, transaction_no, file_size', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>50),
			array('unique_name, file_name, file_type', 'length', 'max'=>60),
			array('created_time, updated_time, deleted_time', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, created_time, created_by, updated_time, updated_by, is_deleted, deleted_time, deleted_by, name, description, transaction_type_id, transaction_no, unique_name, transaction_date, file_name, file_size, file_type', 'safe', 'on'=>'search'),
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
			'transactionType' => array(self::BELONGS_TO, 'TransactionType', 'transaction_type_id'),
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
			'description' => 'Description',
			'transaction_type_id' => 'Transaction Type',
			'transaction_no' => 'Transaction No',
			'unique_name' => 'Unique Name',
			'transaction_date' => 'Transaction Date',
			'file_name' => 'File Name',
			'file_size' => 'File Size',
			'file_type' => 'File Type',
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
		$criteria->compare('description',$this->description,true);
		$criteria->compare('transaction_type_id',$this->transaction_type_id);
		$criteria->compare('transaction_no',$this->transaction_no);
		$criteria->compare('unique_name',$this->unique_name,true);
		$criteria->compare('transaction_date',$this->transaction_date,true);
		$criteria->compare('file_name',$this->file_name,true);
		$criteria->compare('file_size',$this->file_size);
		$criteria->compare('file_type',$this->file_type,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}