<?php

/**
 * This is the model class for table "{{grn_batch}}".
 *
 * The followings are the available columns in table '{{grn_batch}}':
 * @property integer $id
 * @property string $created_time
 * @property integer $created_by
 * @property string $updated_time
 * @property integer $updated_by
 * @property integer $is_deleted
 * @property string $deleted_time
 * @property integer $deleted_by
 * @property integer $supplier_id
 * @property integer $purchase_order_id
 * @property string $reference
 * @property string $delivery_date
 * @property integer $location_id
 *
 * The followings are the available model relations:
 * @property Location $location
 * @property PurchaseOrder $purchaseOrder
 * @property Supplier $supplier
 * @property GrnBatchItem[] $grnBatchItems
 */
class GrnBatch extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return GrnBatch the static model class
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
		return '{{grn_batch}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('supplier_id, purchase_order_id, reference, delivery_date, location_id', 'required'),
			array('created_by, updated_by, is_deleted, deleted_by, supplier_id, purchase_order_id, location_id', 'numerical', 'integerOnly'=>true),
			array('reference', 'length', 'max'=>60),
			array('created_time, updated_time, deleted_time', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, created_time, created_by, updated_time, updated_by, is_deleted, deleted_time, deleted_by, supplier_id, purchase_order_id, reference, delivery_date, location_id', 'safe', 'on'=>'search'),
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
			'location' => array(self::BELONGS_TO, 'Location', 'location_id'),
			'purchaseOrder' => array(self::BELONGS_TO, 'PurchaseOrder', 'purchase_order_id'),
			'supplier' => array(self::BELONGS_TO, 'Supplier', 'supplier_id'),
			'grnBatchItems' => array(self::HAS_MANY, 'GrnBatchItem', 'grn_batch_id'),
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
			'purchase_order_id' => 'Purchase Order',
			'reference' => 'Reference',
			'delivery_date' => 'Delivery Date',
			'location_id' => 'Location',
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
		$criteria->compare('purchase_order_id',$this->purchase_order_id);
		$criteria->compare('reference',$this->reference,true);
		$criteria->compare('delivery_date',$this->delivery_date,true);
		$criteria->compare('location_id',$this->location_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}