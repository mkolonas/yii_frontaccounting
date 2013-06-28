<?php

/**
 * This is the model class for table "{{supplier_invoice_item}}".
 *
 * The followings are the available columns in table '{{supplier_invoice_item}}':
 * @property integer $id
 * @property string $created_time
 * @property integer $created_by
 * @property string $updated_time
 * @property integer $updated_by
 * @property integer $is_deleted
 * @property string $deleted_time
 * @property integer $deleted_by
 * @property integer $supplier_transaction_id
 * @property integer $transaction_type_id
 * @property integer $general_ledger_account_id
 * @property integer $goods_received_note_batch_item_id
 * @property integer $purchase_order_item_id
 * @property integer $stock_master_id
 * @property string $description
 * @property double $quantity
 * @property double $price_per_unit
 * @property double $tax_per_unit
 * @property string $memo
 *
 * The followings are the available model relations:
 * @property GlAccount $generalLedgerAccount
 * @property GrnBatchItem $goodsReceivedNoteBatchItem
 * @property PurchaseOrderItem $purchaseOrderItem
 * @property StockMaster $stockMaster
 * @property SupplierTransaction $supplierTransaction
 * @property TransactionType $transactionType
 */
class SupplierInvoiceItem extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return SupplierInvoiceItem the static model class
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
		return '{{supplier_invoice_item}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('quantity, price_per_unit, tax_per_unit', 'required'),
			array('created_by, updated_by, is_deleted, deleted_by, supplier_transaction_id, transaction_type_id, general_ledger_account_id, goods_received_note_batch_item_id, purchase_order_item_id, stock_master_id', 'numerical', 'integerOnly'=>true),
			array('quantity, price_per_unit, tax_per_unit', 'numerical'),
			array('created_time, updated_time, deleted_time, description, memo', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, created_time, created_by, updated_time, updated_by, is_deleted, deleted_time, deleted_by, supplier_transaction_id, transaction_type_id, general_ledger_account_id, goods_received_note_batch_item_id, purchase_order_item_id, stock_master_id, description, quantity, price_per_unit, tax_per_unit, memo', 'safe', 'on'=>'search'),
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
			'generalLedgerAccount' => array(self::BELONGS_TO, 'GlAccount', 'general_ledger_account_id'),
			'goodsReceivedNoteBatchItem' => array(self::BELONGS_TO, 'GrnBatchItem', 'goods_received_note_batch_item_id'),
			'purchaseOrderItem' => array(self::BELONGS_TO, 'PurchaseOrderItem', 'purchase_order_item_id'),
			'stockMaster' => array(self::BELONGS_TO, 'StockMaster', 'stock_master_id'),
			'supplierTransaction' => array(self::BELONGS_TO, 'SupplierTransaction', 'supplier_transaction_id'),
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
			'supplier_transaction_id' => 'Supplier Transaction',
			'transaction_type_id' => 'Transaction Type',
			'general_ledger_account_id' => 'General Ledger Account',
			'goods_received_note_batch_item_id' => 'Goods Received Note Batch Item',
			'purchase_order_item_id' => 'Purchase Order Item',
			'stock_master_id' => 'Stock Master',
			'description' => 'Description',
			'quantity' => 'Quantity',
			'price_per_unit' => 'Price Per Unit',
			'tax_per_unit' => 'Tax Per Unit',
			'memo' => 'Memo',
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
		$criteria->compare('supplier_transaction_id',$this->supplier_transaction_id);
		$criteria->compare('transaction_type_id',$this->transaction_type_id);
		$criteria->compare('general_ledger_account_id',$this->general_ledger_account_id);
		$criteria->compare('goods_received_note_batch_item_id',$this->goods_received_note_batch_item_id);
		$criteria->compare('purchase_order_item_id',$this->purchase_order_item_id);
		$criteria->compare('stock_master_id',$this->stock_master_id);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('quantity',$this->quantity);
		$criteria->compare('price_per_unit',$this->price_per_unit);
		$criteria->compare('tax_per_unit',$this->tax_per_unit);
		$criteria->compare('memo',$this->memo,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}