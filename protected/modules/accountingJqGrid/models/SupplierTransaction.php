<?php

/**
 * This is the model class for table "{{supplier_transaction}}".
 *
 * The followings are the available columns in table '{{supplier_transaction}}':
 * @property integer $id
 * @property string $created_time
 * @property integer $created_by
 * @property string $updated_time
 * @property integer $updated_by
 * @property integer $is_deleted
 * @property string $deleted_time
 * @property integer $deleted_by
 * @property integer $transaction_type_id
 * @property integer $supplier_id
 * @property string $reference
 * @property string $supplier_reference
 * @property string $date
 * @property string $overdue_date
 * @property double $overdue_amount
 * @property double $overdue_discount
 * @property double $overdue_goods_and_service_tax
 * @property double $rate
 * @property double $allocation
 * @property integer $is_tax_included
 *
 * The followings are the available model relations:
 * @property SupplierInvoiceItem[] $supplierInvoiceItems
 * @property TransactionType $transactionType
 * @property Supplier $supplier
 */
class SupplierTransaction extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return SupplierTransaction the static model class
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
		return '{{supplier_transaction}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, transaction_type_id, reference, supplier_reference, date, overdue_date, overdue_amount, overdue_discount, overdue_goods_and_service_tax, rate, allocation, is_tax_included', 'required'),
			array('id, created_by, updated_by, is_deleted, deleted_by, transaction_type_id, supplier_id, is_tax_included', 'numerical', 'integerOnly'=>true),
			array('overdue_amount, overdue_discount, overdue_goods_and_service_tax, rate, allocation', 'numerical'),
			array('supplier_reference', 'length', 'max'=>60),
			array('created_time, updated_time, deleted_time', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, created_time, created_by, updated_time, updated_by, is_deleted, deleted_time, deleted_by, transaction_type_id, supplier_id, reference, supplier_reference, date, overdue_date, overdue_amount, overdue_discount, overdue_goods_and_service_tax, rate, allocation, is_tax_included', 'safe', 'on'=>'search'),
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
			'supplierInvoiceItems' => array(self::HAS_MANY, 'SupplierInvoiceItem', 'supplier_transaction_id'),
			'transactionType' => array(self::BELONGS_TO, 'TransactionType', 'transaction_type_id'),
			'supplier' => array(self::BELONGS_TO, 'Supplier', 'supplier_id'),
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
			'transaction_type_id' => 'Transaction Type',
			'supplier_id' => 'Supplier',
			'reference' => 'Reference',
			'supplier_reference' => 'Supplier Reference',
			'date' => 'Date',
			'overdue_date' => 'Overdue Date',
			'overdue_amount' => 'Overdue Amount',
			'overdue_discount' => 'Overdue Discount',
			'overdue_goods_and_service_tax' => 'Overdue Goods And Service Tax',
			'rate' => 'Rate',
			'allocation' => 'Allocation',
			'is_tax_included' => 'Is Tax Included',
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
		$criteria->compare('transaction_type_id',$this->transaction_type_id);
		$criteria->compare('supplier_id',$this->supplier_id);
		$criteria->compare('reference',$this->reference,true);
		$criteria->compare('supplier_reference',$this->supplier_reference,true);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('overdue_date',$this->overdue_date,true);
		$criteria->compare('overdue_amount',$this->overdue_amount);
		$criteria->compare('overdue_discount',$this->overdue_discount);
		$criteria->compare('overdue_goods_and_service_tax',$this->overdue_goods_and_service_tax);
		$criteria->compare('rate',$this->rate);
		$criteria->compare('allocation',$this->allocation);
		$criteria->compare('is_tax_included',$this->is_tax_included);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}