<?php

/**
 * This is the model class for table "{{purchase_order}}".
 *
 * The followings are the available columns in table '{{purchase_order}}':
 * @property integer $id
 * @property string $created_time
 * @property integer $created_by
 * @property string $updated_time
 * @property integer $updated_by
 * @property integer $is_deleted
 * @property string $deleted_time
 * @property integer $deleted_by
 * @property integer $supplier_id
 * @property string $comment
 * @property string $date
 * @property string $reference
 * @property string $requisition_no
 * @property integer $into_stock_location_id
 * @property string $delivery_address
 * @property double $total
 * @property integer $is_tax_included
 *
 * The followings are the available model relations:
 * @property GrnBatch[] $grnBatches
 * @property Location $intoStockLocation
 * @property Supplier $supplier
 * @property PurchaseOrderItem[] $purchaseOrderItems
 */
class PurchaseOrder extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return PurchaseOrder the static model class
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
		return '{{purchase_order}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('supplier_id, date, reference, into_stock_location_id, delivery_address, total, is_tax_included', 'required'),
			array('created_by, updated_by, is_deleted, deleted_by, supplier_id, into_stock_location_id, is_tax_included', 'numerical', 'integerOnly'=>true),
			array('total', 'numerical'),
			array('created_time, updated_time, deleted_time, comment, requisition_no', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, created_time, created_by, updated_time, updated_by, is_deleted, deleted_time, deleted_by, supplier_id, comment, date, reference, requisition_no, into_stock_location_id, delivery_address, total, is_tax_included', 'safe', 'on'=>'search'),
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
			'grnBatches' => array(self::HAS_MANY, 'GrnBatch', 'purchase_order_id'),
			'intoStockLocation' => array(self::BELONGS_TO, 'Location', 'into_stock_location_id'),
			'supplier' => array(self::BELONGS_TO, 'Supplier', 'supplier_id'),
			'purchaseOrderItems' => array(self::HAS_MANY, 'PurchaseOrderItem', 'purchase_order_id'),
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
			'supplier_id' => 'Supplier',
			'comment' => 'Comment',
			'date' => 'Date',
			'reference' => 'Reference',
			'requisition_no' => 'Requisition No',
			'into_stock_location_id' => 'Into Stock Location',
			'delivery_address' => 'Delivery Address',
			'total' => 'Total',
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
		$criteria->compare('supplier_id',$this->supplier_id);
		$criteria->compare('comment',$this->comment,true);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('reference',$this->reference,true);
		$criteria->compare('requisition_no',$this->requisition_no,true);
		$criteria->compare('into_stock_location_id',$this->into_stock_location_id);
		$criteria->compare('delivery_address',$this->delivery_address,true);
		$criteria->compare('total',$this->total);
		$criteria->compare('is_tax_included',$this->is_tax_included);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}