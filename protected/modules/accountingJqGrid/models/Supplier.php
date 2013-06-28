<?php

/**
 * This is the model class for table "{{supplier}}".
 *
 * The followings are the available columns in table '{{supplier}}':
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
 * @property string $mailing_address
 * @property string $physical_address
 * @property string $goods_and_service_tax_no
 * @property string $contact
 * @property string $account_no
 * @property string $website
 * @property string $bank_account
 * @property integer $currency_id
 * @property integer $payment_term_id
 * @property integer $is_tax_included
 * @property integer $dimension1_id
 * @property integer $dimension2_id
 * @property integer $tax_group_id
 * @property double $credit_limit
 * @property integer $purchase_account_id
 * @property integer $payable_account_id
 * @property integer $payment_discount_account_id
 * @property string $note
 * @property integer $is_active
 *
 * The followings are the available model relations:
 * @property GrnBatch[] $grnBatches
 * @property PurchaseOrder[] $purchaseOrders
 * @property PurchasePrice[] $purchasePrices
 * @property Dimension $dimension1
 * @property Dimension $dimension2
 * @property Currency $currency
 * @property GlAccount $purchaseAccount
 * @property GlAccount $payableAccount
 * @property GlAccount $paymentDiscountAccount
 * @property PaymentTerm $paymentTerm
 * @property TaxGroup $taxGroup
 * @property SupplierTransaction[] $supplierTransactions
 */
class Supplier extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Supplier the static model class
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
		return '{{supplier}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, reference, mailing_address, physical_address, goods_and_service_tax_no, contact, account_no, website, bank_account, is_tax_included, credit_limit, purchase_account_id, note, is_active', 'required'),
			array('created_by, updated_by, is_deleted, deleted_by, currency_id, payment_term_id, is_tax_included, dimension1_id, dimension2_id, tax_group_id, purchase_account_id, payable_account_id, payment_discount_account_id, is_active', 'numerical', 'integerOnly'=>true),
			array('credit_limit', 'numerical'),
			array('name, contact, bank_account', 'length', 'max'=>60),
			array('reference', 'length', 'max'=>30),
			array('goods_and_service_tax_no', 'length', 'max'=>25),
			array('account_no', 'length', 'max'=>40),
			array('website', 'length', 'max'=>100),
			array('created_time, updated_time, deleted_time', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, created_time, created_by, updated_time, updated_by, is_deleted, deleted_time, deleted_by, name, reference, mailing_address, physical_address, goods_and_service_tax_no, contact, account_no, website, bank_account, currency_id, payment_term_id, is_tax_included, dimension1_id, dimension2_id, tax_group_id, credit_limit, purchase_account_id, payable_account_id, payment_discount_account_id, note, is_active', 'safe', 'on'=>'search'),
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
			'grnBatches' => array(self::HAS_MANY, 'GrnBatch', 'supplier_id'),
			'purchaseOrders' => array(self::HAS_MANY, 'PurchaseOrder', 'supplier_id'),
			'purchasePrices' => array(self::HAS_MANY, 'PurchasePrice', 'supplier_id'),
			'dimension1' => array(self::BELONGS_TO, 'Dimension', 'dimension1_id'),
			'dimension2' => array(self::BELONGS_TO, 'Dimension', 'dimension2_id'),
			'currency' => array(self::BELONGS_TO, 'Currency', 'currency_id'),
			'purchaseAccount' => array(self::BELONGS_TO, 'GlAccount', 'purchase_account_id'),
			'payableAccount' => array(self::BELONGS_TO, 'GlAccount', 'payable_account_id'),
			'paymentDiscountAccount' => array(self::BELONGS_TO, 'GlAccount', 'payment_discount_account_id'),
			'paymentTerm' => array(self::BELONGS_TO, 'PaymentTerm', 'payment_term_id'),
			'taxGroup' => array(self::BELONGS_TO, 'TaxGroup', 'tax_group_id'),
			'supplierTransactions' => array(self::HAS_MANY, 'SupplierTransaction', 'supplier_id'),
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
			'mailing_address' => 'Mailing Address',
			'physical_address' => 'Physical Address',
			'goods_and_service_tax_no' => 'Goods And Service Tax No',
			'contact' => 'Contact',
			'account_no' => 'Account No',
			'website' => 'Website',
			'bank_account' => 'Bank Account',
			'currency_id' => 'Currency',
			'payment_term_id' => 'Payment Term',
			'is_tax_included' => 'Is Tax Included',
			'dimension1_id' => 'Dimension1',
			'dimension2_id' => 'Dimension2',
			'tax_group_id' => 'Tax Group',
			'credit_limit' => 'Credit Limit',
			'purchase_account_id' => 'Purchase Account',
			'payable_account_id' => 'Payable Account',
			'payment_discount_account_id' => 'Payment Discount Account',
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
		$criteria->compare('mailing_address',$this->mailing_address,true);
		$criteria->compare('physical_address',$this->physical_address,true);
		$criteria->compare('goods_and_service_tax_no',$this->goods_and_service_tax_no,true);
		$criteria->compare('contact',$this->contact,true);
		$criteria->compare('account_no',$this->account_no,true);
		$criteria->compare('website',$this->website,true);
		$criteria->compare('bank_account',$this->bank_account,true);
		$criteria->compare('currency_id',$this->currency_id);
		$criteria->compare('payment_term_id',$this->payment_term_id);
		$criteria->compare('is_tax_included',$this->is_tax_included);
		$criteria->compare('dimension1_id',$this->dimension1_id);
		$criteria->compare('dimension2_id',$this->dimension2_id);
		$criteria->compare('tax_group_id',$this->tax_group_id);
		$criteria->compare('credit_limit',$this->credit_limit);
		$criteria->compare('purchase_account_id',$this->purchase_account_id);
		$criteria->compare('payable_account_id',$this->payable_account_id);
		$criteria->compare('payment_discount_account_id',$this->payment_discount_account_id);
		$criteria->compare('note',$this->note,true);
		$criteria->compare('is_active',$this->is_active);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}