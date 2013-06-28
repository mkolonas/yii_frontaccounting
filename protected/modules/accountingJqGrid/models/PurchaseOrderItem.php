<?php

/**
 * This is the model class for table "{{purchase_order_item}}".
 *
 * The followings are the available columns in table '{{purchase_order_item}}':
 * @property integer $id
 * @property string $created_time
 * @property integer $created_by
 * @property string $updated_time
 * @property integer $updated_by
 * @property integer $is_deleted
 * @property string $deleted_time
 * @property integer $deleted_by
 * @property integer $purchase_order_id
 * @property integer $stock_master_id
 * @property string $description
 * @property string $delivery_date
 * @property double $quantity_invoiced
 * @property double $price_per_unit
 * @property double $actual_price_per_unit
 * @property double $standard_cost_unit
 * @property double $quantity_ordered
 * @property double $quantity_received
 *
 * The followings are the available model relations:
 * @property GrnBatchItem[] $grnBatchItems
 * @property PurchaseOrder $purchaseOrder
 * @property StockMaster $stockMaster
 * @property SupplierInvoiceItem[] $supplierInvoiceItems
 */
class PurchaseOrderItem extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return PurchaseOrderItem the static model class
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
		return '{{purchase_order_item}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('purchase_order_id, stock_master_id, delivery_date, quantity_invoiced, price_per_unit, actual_price_per_unit, standard_cost_unit, quantity_ordered, quantity_received', 'required'),
			array('created_by, updated_by, is_deleted, deleted_by, purchase_order_id, stock_master_id', 'numerical', 'integerOnly'=>true),
			array('quantity_invoiced, price_per_unit, actual_price_per_unit, standard_cost_unit, quantity_ordered, quantity_received', 'numerical'),
			array('created_time, updated_time, deleted_time, description', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, created_time, created_by, updated_time, updated_by, is_deleted, deleted_time, deleted_by, purchase_order_id, stock_master_id, description, delivery_date, quantity_invoiced, price_per_unit, actual_price_per_unit, standard_cost_unit, quantity_ordered, quantity_received', 'safe', 'on'=>'search'),
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
			'grnBatchItems' => array(self::HAS_MANY, 'GrnBatchItem', 'purchase_order_item_id'),
			'purchaseOrder' => array(self::BELONGS_TO, 'PurchaseOrder', 'purchase_order_id'),
			'stockMaster' => array(self::BELONGS_TO, 'StockMaster', 'stock_master_id'),
			'supplierInvoiceItems' => array(self::HAS_MANY, 'SupplierInvoiceItem', 'purchase_order_item_id'),
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
			'purchase_order_id' => 'Purchase Order',
			'stock_master_id' => 'Stock Master',
			'description' => 'Description',
			'delivery_date' => 'Delivery Date',
			'quantity_invoiced' => 'Quantity Invoiced',
			'price_per_unit' => 'Price Per Unit',
			'actual_price_per_unit' => 'Actual Price Per Unit',
			'standard_cost_unit' => 'Standard Cost Unit',
			'quantity_ordered' => 'Quantity Ordered',
			'quantity_received' => 'Quantity Received',
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
		$criteria->compare('purchase_order_id',$this->purchase_order_id);
		$criteria->compare('stock_master_id',$this->stock_master_id);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('delivery_date',$this->delivery_date,true);
		$criteria->compare('quantity_invoiced',$this->quantity_invoiced);
		$criteria->compare('price_per_unit',$this->price_per_unit);
		$criteria->compare('actual_price_per_unit',$this->actual_price_per_unit);
		$criteria->compare('standard_cost_unit',$this->standard_cost_unit);
		$criteria->compare('quantity_ordered',$this->quantity_ordered);
		$criteria->compare('quantity_received',$this->quantity_received);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}