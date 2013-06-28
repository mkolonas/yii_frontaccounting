<?php

/**
 * This is the model class for table "{{supplier_allocation}}".
 *
 * The followings are the available columns in table '{{supplier_allocation}}':
 * @property integer $id
 * @property string $created_time
 * @property integer $created_by
 * @property string $updated_time
 * @property integer $updated_by
 * @property integer $is_deleted
 * @property string $deleted_time
 * @property integer $deleted_by
 * @property double $amount
 * @property string $date
 * @property integer $from_transaction_type_id
 * @property integer $from_transaction_no
 * @property integer $to_transaction_type_id
 * @property integer $to_transaction_no
 *
 * The followings are the available model relations:
 * @property TransactionType $fromTransactionType
 * @property TransactionType $toTransactionType
 */
class SupplierAllocation extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return SupplierAllocation the static model class
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
		return '{{supplier_allocation}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('date', 'required'),
			array('created_by, updated_by, is_deleted, deleted_by, from_transaction_type_id, from_transaction_no, to_transaction_type_id, to_transaction_no', 'numerical', 'integerOnly'=>true),
			array('amount', 'numerical'),
			array('created_time, updated_time, deleted_time', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, created_time, created_by, updated_time, updated_by, is_deleted, deleted_time, deleted_by, amount, date, from_transaction_type_id, from_transaction_no, to_transaction_type_id, to_transaction_no', 'safe', 'on'=>'search'),
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
			'fromTransactionType' => array(self::BELONGS_TO, 'TransactionType', 'from_transaction_type_id'),
			'toTransactionType' => array(self::BELONGS_TO, 'TransactionType', 'to_transaction_type_id'),
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
			'amount' => 'Amount',
			'date' => 'Date',
			'from_transaction_type_id' => 'From Transaction Type',
			'from_transaction_no' => 'From Transaction No',
			'to_transaction_type_id' => 'To Transaction Type',
			'to_transaction_no' => 'To Transaction No',
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
		$criteria->compare('amount',$this->amount);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('from_transaction_type_id',$this->from_transaction_type_id);
		$criteria->compare('from_transaction_no',$this->from_transaction_no);
		$criteria->compare('to_transaction_type_id',$this->to_transaction_type_id);
		$criteria->compare('to_transaction_no',$this->to_transaction_no);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}