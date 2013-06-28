<?php

/**
 * This is the model class for table "{{stock_master}}".
 *
 * The followings are the available columns in table '{{stock_master}}':
 * @property integer $id
 * @property string $created_time
 * @property integer $created_by
 * @property string $updated_time
 * @property integer $updated_by
 * @property integer $is_deleted
 * @property string $deleted_time
 * @property integer $deleted_by
 * @property string $code
 * @property integer $stock_category_id
 * @property integer $tax_type_item_id
 * @property string $description
 * @property string $long_description
 * @property integer $measure_unit_id
 * @property integer $stock_type_id
 * @property integer $sales_account_id
 * @property integer $cogs_account_id
 * @property integer $inventory_account_id
 * @property integer $adjustment_account_id
 * @property integer $assembly_account_id
 * @property integer $dimension1_id
 * @property integer $dimension2_id
 * @property double $actual_cost
 * @property double $last_cost
 * @property double $material_cost
 * @property double $labour_cost
 * @property double $overhead_cost
 * @property integer $is_no_sale
 * @property integer $is_editable
 * @property integer $is_active
 *
 * The followings are the available model relations:
 * @property BillOfMaterial[] $billOfMaterials
 * @property CustomerTransactionItem[] $customerTransactionItems
 * @property PurchaseOrderItem[] $purchaseOrderItems
 * @property PurchasePrice[] $purchasePrices
 * @property SalesOrderDetail[] $salesOrderDetails
 * @property SalesPrice[] $salesPrices
 * @property StockItem[] $stockItems
 * @property StockLocation[] $stockLocations
 * @property Dimension $dimension1
 * @property Dimension $dimension2
 * @property GlAccount $salesAccount
 * @property GlAccount $cogsAccount
 * @property GlAccount $inventoryAccount
 * @property GlAccount $adjustmentAccount
 * @property GlAccount $assemblyAccount
 * @property MeasureUnit $measureUnit
 * @property StockCategory $stockCategory
 * @property StockType $stockType
 * @property TaxTypeItem $taxTypeItem
 * @property StockMove[] $stockMoves
 * @property SupplierInvoiceItem[] $supplierInvoiceItems
 * @property WorkOrder[] $workOrders
 * @property WorkOrderIssueItem[] $workOrderIssueItems
 * @property WorkOrderRequirement[] $workOrderRequirements
 */
class StockMaster extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return StockMaster the static model class
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
		return '{{stock_master}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('code, stock_category_id, tax_type_item_id, description, long_description, measure_unit_id, stock_type_id, sales_account_id, cogs_account_id, inventory_account_id, adjustment_account_id, assembly_account_id, actual_cost, last_cost, material_cost, labour_cost, overhead_cost, is_no_sale, is_editable, is_active', 'required'),
			array('created_by, updated_by, is_deleted, deleted_by, stock_category_id, tax_type_item_id, measure_unit_id, stock_type_id, sales_account_id, cogs_account_id, inventory_account_id, adjustment_account_id, assembly_account_id, dimension1_id, dimension2_id, is_no_sale, is_editable, is_active', 'numerical', 'integerOnly'=>true),
			array('actual_cost, last_cost, material_cost, labour_cost, overhead_cost', 'numerical'),
			array('code', 'length', 'max'=>20),
			array('description', 'length', 'max'=>200),
			array('created_time, updated_time, deleted_time', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, created_time, created_by, updated_time, updated_by, is_deleted, deleted_time, deleted_by, code, stock_category_id, tax_type_item_id, description, long_description, measure_unit_id, stock_type_id, sales_account_id, cogs_account_id, inventory_account_id, adjustment_account_id, assembly_account_id, dimension1_id, dimension2_id, actual_cost, last_cost, material_cost, labour_cost, overhead_cost, is_no_sale, is_editable, is_active', 'safe', 'on'=>'search'),
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
			'billOfMaterials' => array(self::HAS_MANY, 'BillOfMaterial', 'component_id'),
			'customerTransactionItems' => array(self::HAS_MANY, 'CustomerTransactionItem', 'stock_master_id'),
			'purchaseOrderItems' => array(self::HAS_MANY, 'PurchaseOrderItem', 'stock_master_id'),
			'purchasePrices' => array(self::HAS_MANY, 'PurchasePrice', 'stock_master_id'),
			'salesOrderDetails' => array(self::HAS_MANY, 'SalesOrderDetail', 'stock_master_id'),
			'salesPrices' => array(self::HAS_MANY, 'SalesPrice', 'stock_master_id'),
			'stockItems' => array(self::HAS_MANY, 'StockItem', 'stock_master_id'),
			'stockLocations' => array(self::HAS_MANY, 'StockLocation', 'stock_master_id'),
			'dimension1' => array(self::BELONGS_TO, 'Dimension', 'dimension1_id'),
			'dimension2' => array(self::BELONGS_TO, 'Dimension', 'dimension2_id'),
			'salesAccount' => array(self::BELONGS_TO, 'GlAccount', 'sales_account_id'),
			'cogsAccount' => array(self::BELONGS_TO, 'GlAccount', 'cogs_account_id'),
			'inventoryAccount' => array(self::BELONGS_TO, 'GlAccount', 'inventory_account_id'),
			'adjustmentAccount' => array(self::BELONGS_TO, 'GlAccount', 'adjustment_account_id'),
			'assemblyAccount' => array(self::BELONGS_TO, 'GlAccount', 'assembly_account_id'),
			'measureUnit' => array(self::BELONGS_TO, 'MeasureUnit', 'measure_unit_id'),
			'stockCategory' => array(self::BELONGS_TO, 'StockCategory', 'stock_category_id'),
			'stockType' => array(self::BELONGS_TO, 'StockType', 'stock_type_id'),
			'taxTypeItem' => array(self::BELONGS_TO, 'TaxTypeItem', 'tax_type_item_id'),
			'stockMoves' => array(self::HAS_MANY, 'StockMove', 'stock_master_id'),
			'supplierInvoiceItems' => array(self::HAS_MANY, 'SupplierInvoiceItem', 'stock_master_id'),
			'workOrders' => array(self::HAS_MANY, 'WorkOrder', 'stock_master_id'),
			'workOrderIssueItems' => array(self::HAS_MANY, 'WorkOrderIssueItem', 'stock_master_id'),
			'workOrderRequirements' => array(self::HAS_MANY, 'WorkOrderRequirement', 'stock_master_id'),
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
			'code' => 'Code',
			'stock_category_id' => 'Stock Category',
			'tax_type_item_id' => 'Tax Type Item',
			'description' => 'Description',
			'long_description' => 'Long Description',
			'measure_unit_id' => 'Measure Unit',
			'stock_type_id' => 'Stock Type',
			'sales_account_id' => 'Sales Account',
			'cogs_account_id' => 'Cogs Account',
			'inventory_account_id' => 'Inventory Account',
			'adjustment_account_id' => 'Adjustment Account',
			'assembly_account_id' => 'Assembly Account',
			'dimension1_id' => 'Dimension1',
			'dimension2_id' => 'Dimension2',
			'actual_cost' => 'Actual Cost',
			'last_cost' => 'Last Cost',
			'material_cost' => 'Material Cost',
			'labour_cost' => 'Labour Cost',
			'overhead_cost' => 'Overhead Cost',
			'is_no_sale' => 'Is No Sale',
			'is_editable' => 'Is Editable',
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
		$criteria->compare('code',$this->code,true);
		$criteria->compare('stock_category_id',$this->stock_category_id);
		$criteria->compare('tax_type_item_id',$this->tax_type_item_id);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('long_description',$this->long_description,true);
		$criteria->compare('measure_unit_id',$this->measure_unit_id);
		$criteria->compare('stock_type_id',$this->stock_type_id);
		$criteria->compare('sales_account_id',$this->sales_account_id);
		$criteria->compare('cogs_account_id',$this->cogs_account_id);
		$criteria->compare('inventory_account_id',$this->inventory_account_id);
		$criteria->compare('adjustment_account_id',$this->adjustment_account_id);
		$criteria->compare('assembly_account_id',$this->assembly_account_id);
		$criteria->compare('dimension1_id',$this->dimension1_id);
		$criteria->compare('dimension2_id',$this->dimension2_id);
		$criteria->compare('actual_cost',$this->actual_cost);
		$criteria->compare('last_cost',$this->last_cost);
		$criteria->compare('material_cost',$this->material_cost);
		$criteria->compare('labour_cost',$this->labour_cost);
		$criteria->compare('overhead_cost',$this->overhead_cost);
		$criteria->compare('is_no_sale',$this->is_no_sale);
		$criteria->compare('is_editable',$this->is_editable);
		$criteria->compare('is_active',$this->is_active);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}