<?php

/**
 * This is the model class for table "{{customer_branch}}".
 *
 * The followings are the available columns in table '{{customer_branch}}':
 * @property integer $id
 * @property string $created_time
 * @property integer $created_by
 * @property string $updated_time
 * @property integer $updated_by
 * @property integer $is_deleted
 * @property string $deleted_time
 * @property integer $deleted_by
 * @property integer $customer_head_id
 * @property string $name
 * @property string $reference
 * @property string $physical_address
 * @property string $mailing_address
 * @property integer $area_id
 * @property integer $sales_person_id
 * @property string $contact_name
 * @property integer $default_location_id
 * @property integer $tax_group_id
 * @property integer $sales_account_id
 * @property integer $sales_discount_account_id
 * @property integer $receivable_account_id
 * @property integer $payment_discount_account_id
 * @property integer $default_shipping_company_id
 * @property integer $disable_transaction
 * @property integer $sales_size_id
 * @property string $note
 * @property integer $is_active
 *
 * The followings are the available model relations:
 * @property Area $area
 * @property CustomerHead $customerHead
 * @property GlAccount $salesAccount
 * @property GlAccount $salesDiscountAccount
 * @property GlAccount $receivableAccount
 * @property GlAccount $paymentDiscountAccount
 * @property Location $defaultLocation
 * @property SalesPerson $salesPerson
 * @property SalesSize $salesSize
 * @property ShippingCompany $defaultShippingCompany
 * @property TaxGroup $taxGroup
 * @property CustomerTransaction[] $customerTransactions
 * @property SalesOrder[] $salesOrders
 */
class CustomerBranch extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return CustomerBranch the static model class
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
		return '{{customer_branch}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('customer_head_id, name, reference, physical_address, mailing_address, sales_person_id, contact_name, default_location_id, default_shipping_company_id, disable_transaction, note, is_active', 'required'),
			array('created_by, updated_by, is_deleted, deleted_by, customer_head_id, area_id, sales_person_id, default_location_id, tax_group_id, sales_account_id, sales_discount_account_id, receivable_account_id, payment_discount_account_id, default_shipping_company_id, disable_transaction, sales_size_id, is_active', 'numerical', 'integerOnly'=>true),
			array('name, contact_name', 'length', 'max'=>60),
			array('reference', 'length', 'max'=>30),
			array('created_time, updated_time, deleted_time', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, created_time, created_by, updated_time, updated_by, is_deleted, deleted_time, deleted_by, customer_head_id, name, reference, physical_address, mailing_address, area_id, sales_person_id, contact_name, default_location_id, tax_group_id, sales_account_id, sales_discount_account_id, receivable_account_id, payment_discount_account_id, default_shipping_company_id, disable_transaction, sales_size_id, note, is_active', 'safe', 'on'=>'search'),
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
			'area' => array(self::BELONGS_TO, 'Area', 'area_id'),
			'customerHead' => array(self::BELONGS_TO, 'CustomerHead', 'customer_head_id'),
			'salesAccount' => array(self::BELONGS_TO, 'GlAccount', 'sales_account_id'),
			'salesDiscountAccount' => array(self::BELONGS_TO, 'GlAccount', 'sales_discount_account_id'),
			'receivableAccount' => array(self::BELONGS_TO, 'GlAccount', 'receivable_account_id'),
			'paymentDiscountAccount' => array(self::BELONGS_TO, 'GlAccount', 'payment_discount_account_id'),
			'defaultLocation' => array(self::BELONGS_TO, 'Location', 'default_location_id'),
			'salesPerson' => array(self::BELONGS_TO, 'SalesPerson', 'sales_person_id'),
			'salesSize' => array(self::BELONGS_TO, 'SalesSize', 'sales_size_id'),
			'defaultShippingCompany' => array(self::BELONGS_TO, 'ShippingCompany', 'default_shipping_company_id'),
			'taxGroup' => array(self::BELONGS_TO, 'TaxGroup', 'tax_group_id'),
			'customerTransactions' => array(self::HAS_MANY, 'CustomerTransaction', 'customer_branch_id'),
			'salesOrders' => array(self::HAS_MANY, 'SalesOrder', 'customer_branch_id'),
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
			'customer_head_id' => 'Customer Head',
			'name' => 'Name',
			'reference' => 'Reference',
			'physical_address' => 'Physical Address',
			'mailing_address' => 'Mailing Address',
			'area_id' => 'Area',
			'sales_person_id' => 'Sales Person',
			'contact_name' => 'Contact Name',
			'default_location_id' => 'Default Location',
			'tax_group_id' => 'Tax Group',
			'sales_account_id' => 'Sales Account',
			'sales_discount_account_id' => 'Sales Discount Account',
			'receivable_account_id' => 'Receivable Account',
			'payment_discount_account_id' => 'Payment Discount Account',
			'default_shipping_company_id' => 'Default Shipping Company',
			'disable_transaction' => 'Disable Transaction',
			'sales_size_id' => 'Sales Size',
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
		$criteria->compare('customer_head_id',$this->customer_head_id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('reference',$this->reference,true);
		$criteria->compare('physical_address',$this->physical_address,true);
		$criteria->compare('mailing_address',$this->mailing_address,true);
		$criteria->compare('area_id',$this->area_id);
		$criteria->compare('sales_person_id',$this->sales_person_id);
		$criteria->compare('contact_name',$this->contact_name,true);
		$criteria->compare('default_location_id',$this->default_location_id);
		$criteria->compare('tax_group_id',$this->tax_group_id);
		$criteria->compare('sales_account_id',$this->sales_account_id);
		$criteria->compare('sales_discount_account_id',$this->sales_discount_account_id);
		$criteria->compare('receivable_account_id',$this->receivable_account_id);
		$criteria->compare('payment_discount_account_id',$this->payment_discount_account_id);
		$criteria->compare('default_shipping_company_id',$this->default_shipping_company_id);
		$criteria->compare('disable_transaction',$this->disable_transaction);
		$criteria->compare('sales_size_id',$this->sales_size_id);
		$criteria->compare('note',$this->note,true);
		$criteria->compare('is_active',$this->is_active);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}