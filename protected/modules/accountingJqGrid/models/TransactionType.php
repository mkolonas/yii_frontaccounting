<?php

/**
 * This is the model class for table "{{transaction_type}}".
 *
 * The followings are the available columns in table '{{transaction_type}}':
 * @property integer $id
 * @property string $created_time
 * @property integer $created_by
 * @property string $updated_time
 * @property integer $updated_by
 * @property integer $is_deleted
 * @property string $deleted_time
 * @property integer $deleted_by
 * @property string $name
 * @property integer $type_no
 * @property string $next_reference
 * @property string $old_abbreviation
 * @property string $old_code
 *
 * The followings are the available model relations:
 * @property Attachment[] $attachments
 * @property AuditTrail[] $auditTrails
 * @property BankTransaction[] $bankTransactions
 * @property BudgetTransaction[] $budgetTransactions
 * @property CustomerAllocation[] $customerAllocations
 * @property CustomerAllocation[] $customerAllocations1
 * @property CustomerTransaction[] $customerTransactions
 * @property GlTransaction[] $glTransactions
 * @property SalesOrder[] $salesOrders
 * @property SupplierAllocation[] $supplierAllocations
 * @property SupplierAllocation[] $supplierAllocations1
 * @property SupplierInvoiceItem[] $supplierInvoiceItems
 * @property SupplierTransaction[] $supplierTransactions
 * @property TaxTransactionItem[] $taxTransactionItems
 */
class TransactionType extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return TransactionType the static model class
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
		return '{{transaction_type}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, name, type_no, next_reference, old_abbreviation, old_code', 'required'),
			array('id, created_by, updated_by, is_deleted, deleted_by, type_no', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>50),
			array('next_reference, old_abbreviation', 'length', 'max'=>100),
			array('old_code', 'length', 'max'=>3),
			array('created_time, updated_time, deleted_time', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, created_time, created_by, updated_time, updated_by, is_deleted, deleted_time, deleted_by, name, type_no, next_reference, old_abbreviation, old_code', 'safe', 'on'=>'search'),
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
			'attachments' => array(self::HAS_MANY, 'Attachment', 'transaction_type_id'),
			'auditTrails' => array(self::HAS_MANY, 'AuditTrail', 'transaction_type_id'),
			'bankTransactions' => array(self::HAS_MANY, 'BankTransaction', 'transaction_type_id'),
			'budgetTransactions' => array(self::HAS_MANY, 'BudgetTransaction', 'transaction_type_id'),
			'customerAllocations' => array(self::HAS_MANY, 'CustomerAllocation', 'from_transaction_type_id'),
			'customerAllocations1' => array(self::HAS_MANY, 'CustomerAllocation', 'to_transaction_type_id'),
			'customerTransactions' => array(self::HAS_MANY, 'CustomerTransaction', 'transaction_type_id'),
			'glTransactions' => array(self::HAS_MANY, 'GlTransaction', 'transaction_type_id'),
			'salesOrders' => array(self::HAS_MANY, 'SalesOrder', 'transaction_type_id'),
			'supplierAllocations' => array(self::HAS_MANY, 'SupplierAllocation', 'from_transaction_type_id'),
			'supplierAllocations1' => array(self::HAS_MANY, 'SupplierAllocation', 'to_transaction_type_id'),
			'supplierInvoiceItems' => array(self::HAS_MANY, 'SupplierInvoiceItem', 'transaction_type_id'),
			'supplierTransactions' => array(self::HAS_MANY, 'SupplierTransaction', 'transaction_type_id'),
			'taxTransactionItems' => array(self::HAS_MANY, 'TaxTransactionItem', 'transaction_type_id'),
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
			'type_no' => 'Type No',
			'next_reference' => 'Next Reference',
			'old_abbreviation' => 'Old Abbreviation',
			'old_code' => 'Old Code',
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
		$criteria->compare('type_no',$this->type_no);
		$criteria->compare('next_reference',$this->next_reference,true);
		$criteria->compare('old_abbreviation',$this->old_abbreviation,true);
		$criteria->compare('old_code',$this->old_code,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}