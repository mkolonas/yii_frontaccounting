<?php

/**
 * This is the model class for table "{{sales_order}}".
 *
 * The followings are the available columns in table '{{sales_order}}':
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
 * @property integer $version
 * @property integer $type
 * @property integer $customer_head_id
 * @property integer $customer_branch_id
 * @property string $reference
 * @property string $customer_reference
 * @property string $comment
 * @property string $date
 * @property integer $sales_type_id
 * @property integer $shipping_company_id
 * @property string $delivery_address
 * @property string $contact_phone
 * @property string $contact_email
 * @property string $deliver_to
 * @property double $freight_cost
 * @property integer $from_stock_location_id
 * @property string $delivery_date
 * @property integer $payment_term_id
 * @property double $total
 *
 * The followings are the available model relations:
 * @property CustomerTransaction[] $customerTransactions
 * @property RecurrentInvoice[] $recurrentInvoices
 * @property CustomerBranch $customerBranch
 * @property CustomerHead $customerHead
 * @property Location $fromStockLocation
 * @property PaymentTerm $paymentTerm
 * @property SalesType $salesType
 * @property ShippingCompany $shippingCompany
 * @property TransactionType $transactionType
 * @property SalesOrderDetail[] $salesOrderDetails
 */
class SalesOrder extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return SalesOrder the static model class
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
		return '{{sales_order}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('transaction_type_id, transaction_no, version, type, customer_head_id, customer_branch_id, reference, customer_reference, date, sales_type_id, shipping_company_id, delivery_address, deliver_to, freight_cost, from_stock_location_id, delivery_date, payment_term_id, total', 'required'),
			array('created_by, updated_by, is_deleted, deleted_by, transaction_type_id, transaction_no, version, type, customer_head_id, customer_branch_id, sales_type_id, shipping_company_id, from_stock_location_id, payment_term_id', 'numerical', 'integerOnly'=>true),
			array('freight_cost, total', 'numerical'),
			array('reference, contact_email', 'length', 'max'=>100),
			array('contact_phone', 'length', 'max'=>30),
			array('created_time, updated_time, deleted_time, comment', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, created_time, created_by, updated_time, updated_by, is_deleted, deleted_time, deleted_by, transaction_type_id, transaction_no, version, type, customer_head_id, customer_branch_id, reference, customer_reference, comment, date, sales_type_id, shipping_company_id, delivery_address, contact_phone, contact_email, deliver_to, freight_cost, from_stock_location_id, delivery_date, payment_term_id, total', 'safe', 'on'=>'search'),
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
			'customerTransactions' => array(self::HAS_MANY, 'CustomerTransaction', 'sales_order_id'),
			'recurrentInvoices' => array(self::HAS_MANY, 'RecurrentInvoice', 'sales_order_id'),
			'customerBranch' => array(self::BELONGS_TO, 'CustomerBranch', 'customer_branch_id'),
			'customerHead' => array(self::BELONGS_TO, 'CustomerHead', 'customer_head_id'),
			'fromStockLocation' => array(self::BELONGS_TO, 'Location', 'from_stock_location_id'),
			'paymentTerm' => array(self::BELONGS_TO, 'PaymentTerm', 'payment_term_id'),
			'salesType' => array(self::BELONGS_TO, 'SalesType', 'sales_type_id'),
			'shippingCompany' => array(self::BELONGS_TO, 'ShippingCompany', 'shipping_company_id'),
			'transactionType' => array(self::BELONGS_TO, 'TransactionType', 'transaction_type_id'),
			'salesOrderDetails' => array(self::HAS_MANY, 'SalesOrderDetail', 'sales_order_id'),
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
			'version' => 'Version',
			'type' => 'Type',
			'customer_head_id' => 'Customer Head',
			'customer_branch_id' => 'Customer Branch',
			'reference' => 'Reference',
			'customer_reference' => 'Customer Reference',
			'comment' => 'Comment',
			'date' => 'Date',
			'sales_type_id' => 'Sales Type',
			'shipping_company_id' => 'Shipping Company',
			'delivery_address' => 'Delivery Address',
			'contact_phone' => 'Contact Phone',
			'contact_email' => 'Contact Email',
			'deliver_to' => 'Deliver To',
			'freight_cost' => 'Freight Cost',
			'from_stock_location_id' => 'From Stock Location',
			'delivery_date' => 'Delivery Date',
			'payment_term_id' => 'Payment Term',
			'total' => 'Total',
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
		$criteria->compare('version',$this->version);
		$criteria->compare('type',$this->type);
		$criteria->compare('customer_head_id',$this->customer_head_id);
		$criteria->compare('customer_branch_id',$this->customer_branch_id);
		$criteria->compare('reference',$this->reference,true);
		$criteria->compare('customer_reference',$this->customer_reference,true);
		$criteria->compare('comment',$this->comment,true);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('sales_type_id',$this->sales_type_id);
		$criteria->compare('shipping_company_id',$this->shipping_company_id);
		$criteria->compare('delivery_address',$this->delivery_address,true);
		$criteria->compare('contact_phone',$this->contact_phone,true);
		$criteria->compare('contact_email',$this->contact_email,true);
		$criteria->compare('deliver_to',$this->deliver_to,true);
		$criteria->compare('freight_cost',$this->freight_cost);
		$criteria->compare('from_stock_location_id',$this->from_stock_location_id);
		$criteria->compare('delivery_date',$this->delivery_date,true);
		$criteria->compare('payment_term_id',$this->payment_term_id);
		$criteria->compare('total',$this->total);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}