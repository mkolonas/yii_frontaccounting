<?php

/**
 * This is the model class for table "{{customer_head}}".
 *
 * The followings are the available columns in table '{{customer_head}}':
 * @property integer $id
 * @property string $created_time
 * @property integer $created_by
 * @property string $updated_time
 * @property integer $updated_by
 * @property integer $is_deleted
 * @property string $deleted_time
 * @property integer $deleted_by
 * @property string $name
 * @property string $reference
 * @property string $physical_address
 * @property string $mailing_address
 * @property string $goods_and_services_tax_no
 * @property integer $currency_id
 * @property integer $sales_type_id
 * @property integer $dimension1_id
 * @property integer $dimension2_id
 * @property integer $credit_status_id
 * @property integer $payment_term_id
 * @property double $discount
 * @property double $payment_discount
 * @property double $credit_limit
 * @property string $note
 * @property integer $is_active
 *
 * The followings are the available model relations:
 * @property CustomerBranch[] $customerBranches
 * @property Currency $currency
 * @property CreditStatus $creditStatus
 * @property Dimension $dimension1
 * @property Dimension $dimension2
 * @property PaymentTerm $paymentTerm
 * @property SalesType $salesType
 * @property CustomerTransaction[] $customerTransactions
 * @property RecurrentInvoice[] $recurrentInvoices
 * @property SalesOrder[] $salesOrders
 */
class CustomerHead extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return CustomerHead the static model class
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
		return '{{customer_head}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, reference, goods_and_services_tax_no, currency_id, sales_type_id, dimension1_id, dimension2_id, credit_status_id, discount, payment_discount, credit_limit, note, is_active', 'required'),
			array('created_by, updated_by, is_deleted, deleted_by, currency_id, sales_type_id, dimension1_id, dimension2_id, credit_status_id, payment_term_id, is_active', 'numerical', 'integerOnly'=>true),
			array('discount, payment_discount, credit_limit', 'numerical'),
			array('name', 'length', 'max'=>100),
			array('reference', 'length', 'max'=>30),
			array('goods_and_services_tax_no', 'length', 'max'=>55),
			array('created_time, updated_time, deleted_time, physical_address, mailing_address', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, created_time, created_by, updated_time, updated_by, is_deleted, deleted_time, deleted_by, name, reference, physical_address, mailing_address, goods_and_services_tax_no, currency_id, sales_type_id, dimension1_id, dimension2_id, credit_status_id, payment_term_id, discount, payment_discount, credit_limit, note, is_active', 'safe', 'on'=>'search'),
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
			'customerBranches' => array(self::HAS_MANY, 'CustomerBranch', 'customer_head_id'),
			'currency' => array(self::BELONGS_TO, 'Currency', 'currency_id'),
			'creditStatus' => array(self::BELONGS_TO, 'CreditStatus', 'credit_status_id'),
			'dimension1' => array(self::BELONGS_TO, 'Dimension', 'dimension1_id'),
			'dimension2' => array(self::BELONGS_TO, 'Dimension', 'dimension2_id'),
			'paymentTerm' => array(self::BELONGS_TO, 'PaymentTerm', 'payment_term_id'),
			'salesType' => array(self::BELONGS_TO, 'SalesType', 'sales_type_id'),
			'customerTransactions' => array(self::HAS_MANY, 'CustomerTransaction', 'customer_head_id'),
			'recurrentInvoices' => array(self::HAS_MANY, 'RecurrentInvoice', 'customer_head_id'),
			'salesOrders' => array(self::HAS_MANY, 'SalesOrder', 'customer_head_id'),
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
			'reference' => 'Reference',
			'physical_address' => 'Physical Address',
			'mailing_address' => 'Mailing Address',
			'goods_and_services_tax_no' => 'Goods And Services Tax No',
			'currency_id' => 'Currency',
			'sales_type_id' => 'Sales Type',
			'dimension1_id' => 'Dimension1',
			'dimension2_id' => 'Dimension2',
			'credit_status_id' => 'Credit Status',
			'payment_term_id' => 'Payment Term',
			'discount' => 'Discount',
			'payment_discount' => 'Payment Discount',
			'credit_limit' => 'Credit Limit',
			'note' => 'Note',
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
		$criteria->compare('reference',$this->reference,true);
		$criteria->compare('physical_address',$this->physical_address,true);
		$criteria->compare('mailing_address',$this->mailing_address,true);
		$criteria->compare('goods_and_services_tax_no',$this->goods_and_services_tax_no,true);
		$criteria->compare('currency_id',$this->currency_id);
		$criteria->compare('sales_type_id',$this->sales_type_id);
		$criteria->compare('dimension1_id',$this->dimension1_id);
		$criteria->compare('dimension2_id',$this->dimension2_id);
		$criteria->compare('credit_status_id',$this->credit_status_id);
		$criteria->compare('payment_term_id',$this->payment_term_id);
		$criteria->compare('discount',$this->discount);
		$criteria->compare('payment_discount',$this->payment_discount);
		$criteria->compare('credit_limit',$this->credit_limit);
		$criteria->compare('note',$this->note,true);
		$criteria->compare('is_active',$this->is_active);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}