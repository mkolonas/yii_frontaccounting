<?php

/**
 * This is the model class for table "{{grn_batch_item}}".
 *
 * The followings are the available columns in table '{{grn_batch_item}}':
 * @property integer $id
 * @property string $created_time
 * @property integer $created_by
 * @property string $updated_time
 * @property integer $updated_by
 * @property integer $is_deleted
 * @property string $deleted_time
 * @property integer $deleted_by
 * @property integer $grn_batch_id
 * @property integer $purchase_order_item_id
 * @property integer $stock_item_id
 * @property string $description
 * @property double $quantity_record
 * @property double $quantity_inv
 *
 * The followings are the available model relations:
 * @property GrnBatch $grnBatch
 * @property PurchaseOrderItem $purchaseOrderItem
 * @property StockItem $stockItem
 * @property SupplierInvoiceItem[] $supplierInvoiceItems
 */
class GrnBatchItem extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return GrnBatchItem the static model class
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
		return '{{grn_batch_item}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('grn_batch_id, purchase_order_item_id, stock_item_id, quantity_record, quantity_inv', 'required'),
			array('created_by, updated_by, is_deleted, deleted_by, grn_batch_id, purchase_order_item_id, stock_item_id', 'numerical', 'integerOnly'=>true),
			array('quantity_record, quantity_inv', 'numerical'),
			array('created_time, updated_time, deleted_time, description', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, created_time, created_by, updated_time, updated_by, is_deleted, deleted_time, deleted_by, grn_batch_id, purchase_order_item_id, stock_item_id, description, quantity_record, quantity_inv', 'safe', 'on'=>'search'),
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
			'grnBatch' => array(self::BELONGS_TO, 'GrnBatch', 'grn_batch_id'),
			'purchaseOrderItem' => array(self::BELONGS_TO, 'PurchaseOrderItem', 'purchase_order_item_id'),
			'stockItem' => array(self::BELONGS_TO, 'StockItem', 'stock_item_id'),
			'supplierInvoiceItems' => array(self::HAS_MANY, 'SupplierInvoiceItem', 'goods_received_note_batch_item_id'),
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
			'grn_batch_id' => 'Grn Batch',
			'purchase_order_item_id' => 'Purchase Order Item',
			'stock_item_id' => 'Stock Item',
			'description' => 'Description',
			'quantity_record' => 'Quantity Record',
			'quantity_inv' => 'Quantity Inv',
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
		$criteria->compare('grn_batch_id',$this->grn_batch_id);
		$criteria->compare('purchase_order_item_id',$this->purchase_order_item_id);
		$criteria->compare('stock_item_id',$this->stock_item_id);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('quantity_record',$this->quantity_record);
		$criteria->compare('quantity_inv',$this->quantity_inv);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}