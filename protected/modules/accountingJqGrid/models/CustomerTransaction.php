<?php

/**
 * This is the model class for table "{{customer_transaction}}".
 *
 * The followings are the available columns in table '{{customer_transaction}}':
 * @property integer $id
 * @property string $created_time
 * @property integer $created_by
 * @property string $updated_time
 * @property integer $updated_by
 * @property integer $is_deleted
 * @property string $deleted_time
 * @property integer $deleted_by
 * @property integer $transaction_type_id
 * @property integer $transaction_no
 * @property integer $as_version
 * @property integer $customer_head_id
 * @property integer $customer_branch_id
 * @property string $date
 * @property string $due_date
 * @property string $reference
 * @property integer $sales_type_id
 * @property integer $sales_order_id
 * @property double $overdue_amount
 * @property double $overdue_goods_and_services_tax
 * @property double $overdue_freight
 * @property double $overdue_freight_tax
 * @property double $overdue_discount
 * @property double $allocation
 * @property double $rate
 * @property integer $shipping_company_id
 * @property integer $dimension1_id
 * @property integer $dimension2_id
 * @property integer $payment_term_id
 *
 * The followings are the available model relations:
 * @property CustomerBranch $customerBranch
 * @property CustomerHead $customerHead
 * @property Dimension $dimension1
 * @property Dimension $dimension2
 * @property PaymentTerm $paymentTerm
 * @property SalesOrder $salesOrder
 * @property SalesType $salesType
 * @property ShippingCompany $shippingCompany
 * @property TransactionType $transactionType
 * @property CustomerTransactionItem[] $customerTransactionItems
 */
class CustomerTransaction extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return CustomerTransaction the static model class
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
		return '{{customer_transaction}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('transaction_type_id, transaction_no, as_version, customer_head_id, customer_branch_id, date, due_date, reference, sales_type_id, sales_order_id, overdue_amount, overdue_goods_and_services_tax, overdue_freight, overdue_freight_tax, overdue_discount, allocation, rate', 'required'),
			array('created_by, updated_by, is_deleted, deleted_by, transaction_type_id, transaction_no, as_version, customer_head_id, customer_branch_id, sales_type_id, sales_order_id, shipping_company_id, dimension1_id, dimension2_id, payment_term_id', 'numerical', 'integerOnly'=>true),
			array('overdue_amount, overdue_goods_and_services_tax, overdue_freight, overdue_freight_tax, overdue_discount, allocation, rate', 'numerical'),
			array('reference', 'length', 'max'=>60),
			array('created_time, updated_time, deleted_time', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, created_time, created_by, updated_time, updated_by, is_deleted, deleted_time, deleted_by, transaction_type_id, transaction_no, as_version, customer_head_id, customer_branch_id, date, due_date, reference, sales_type_id, sales_order_id, overdue_amount, overdue_goods_and_services_tax, overdue_freight, overdue_freight_tax, overdue_discount, allocation, rate, shipping_company_id, dimension1_id, dimension2_id, payment_term_id', 'safe', 'on'=>'search'),
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
			'customerBranch' => array(self::BELONGS_TO, 'CustomerBranch', 'customer_branch_id'),
			'customerHead' => array(self::BELONGS_TO, 'CustomerHead', 'customer_head_id'),
			'dimension1' => array(self::BELONGS_TO, 'Dimension', 'dimension1_id'),
			'dimension2' => array(self::BELONGS_TO, 'Dimension', 'dimension2_id'),
			'paymentTerm' => array(self::BELONGS_TO, 'PaymentTerm', 'payment_term_id'),
			'salesOrder' => array(self::BELONGS_TO, 'SalesOrder', 'sales_order_id'),
			'salesType' => array(self::BELONGS_TO, 'SalesType', 'sales_type_id'),
			'shippingCompany' => array(self::BELONGS_TO, 'ShippingCompany', 'shipping_company_id'),
			'transactionType' => array(self::BELONGS_TO, 'TransactionType', 'transaction_type_id'),
			'customerTransactionItems' => array(self::HAS_MANY, 'CustomerTransactionItem', 'customer_transaction_id'),
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
			'transaction_no' => 'Transaction No',
			'as_version' => 'As Version',
			'customer_head_id' => 'Customer Head',
			'customer_branch_id' => 'Customer Branch',
			'date' => 'Date',
			'due_date' => 'Due Date',
			'reference' => 'Reference',
			'sales_type_id' => 'Sales Type',
			'sales_order_id' => 'Sales Order',
			'overdue_amount' => 'Overdue Amount',
			'overdue_goods_and_services_tax' => 'Overdue Goods And Services Tax',
			'overdue_freight' => 'Overdue Freight',
			'overdue_freight_tax' => 'Overdue Freight Tax',
			'overdue_discount' => 'Overdue Discount',
			'allocation' => 'Allocation',
			'rate' => 'Rate',
			'shipping_company_id' => 'Shipping Company',
			'dimension1_id' => 'Dimension1',
			'dimension2_id' => 'Dimension2',
			'payment_term_id' => 'Payment Term',
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
		$criteria->compare('transaction_no',$this->transaction_no);
		$criteria->compare('as_version',$this->as_version);
		$criteria->compare('customer_head_id',$this->customer_head_id);
		$criteria->compare('customer_branch_id',$this->customer_branch_id);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('due_date',$this->due_date,true);
		$criteria->compare('reference',$this->reference,true);
		$criteria->compare('sales_type_id',$this->sales_type_id);
		$criteria->compare('sales_order_id',$this->sales_order_id);
		$criteria->compare('overdue_amount',$this->overdue_amount);
		$criteria->compare('overdue_goods_and_services_tax',$this->overdue_goods_and_services_tax);
		$criteria->compare('overdue_freight',$this->overdue_freight);
		$criteria->compare('overdue_freight_tax',$this->overdue_freight_tax);
		$criteria->compare('overdue_discount',$this->overdue_discount);
		$criteria->compare('allocation',$this->allocation);
		$criteria->compare('rate',$this->rate);
		$criteria->compare('shipping_company_id',$this->shipping_company_id);
		$criteria->compare('dimension1_id',$this->dimension1_id);
		$criteria->compare('dimension2_id',$this->dimension2_id);
		$criteria->compare('payment_term_id',$this->payment_term_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}