<?php

/**
 * This is the model class for table "{{gl_account}}".
 *
 * The followings are the available columns in table '{{gl_account}}':
 * @property integer $id
 * @property string $created_time
 * @property integer $created_by
 * @property string $updated_time
 * @property integer $updated_by
 * @property integer $is_deleted
 * @property string $deleted_time
 * @property integer $deleted_by
 * @property string $code
 * @property string $code2
 * @property string $name
 * @property integer $gl_account_type_id
 * @property integer $is_active
 *
 * The followings are the available model relations:
 * @property BankAccount[] $bankAccounts
 * @property BudgetTransaction[] $budgetTransactions
 * @property CustomerBranch[] $customerBranches
 * @property CustomerBranch[] $customerBranches1
 * @property CustomerBranch[] $customerBranches2
 * @property CustomerBranch[] $customerBranches3
 * @property GlAccountType $glAccountType
 * @property GlTransaction[] $glTransactions
 * @property StockCategory[] $stockCategories
 * @property StockCategory[] $stockCategories1
 * @property StockCategory[] $stockCategories2
 * @property StockCategory[] $stockCategories3
 * @property StockCategory[] $stockCategories4
 * @property StockMaster[] $stockMasters
 * @property StockMaster[] $stockMasters1
 * @property StockMaster[] $stockMasters2
 * @property StockMaster[] $stockMasters3
 * @property StockMaster[] $stockMasters4
 * @property Supplier[] $suppliers
 * @property Supplier[] $suppliers1
 * @property Supplier[] $suppliers2
 * @property SupplierInvoiceItem[] $supplierInvoiceItems
 * @property TaxType[] $taxTypes
 * @property TaxType[] $taxTypes1
 */
class GlAccount extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return GlAccount the static model class
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
		return '{{gl_account}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('code, name, gl_account_type_id, is_active', 'required'),
			array('created_by, updated_by, is_deleted, deleted_by, gl_account_type_id, is_active', 'numerical', 'integerOnly'=>true),
			array('code, code2', 'length', 'max'=>15),
			array('name', 'length', 'max'=>60),
			array('created_time, updated_time, deleted_time', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, created_time, created_by, updated_time, updated_by, is_deleted, deleted_time, deleted_by, code, code2, name, gl_account_type_id, is_active', 'safe', 'on'=>'search'),
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
			'bankAccounts' => array(self::HAS_MANY, 'BankAccount', 'gl_account_id'),
			'budgetTransactions' => array(self::HAS_MANY, 'BudgetTransaction', 'general_ledger_account_id'),
			'customerBranches' => array(self::HAS_MANY, 'CustomerBranch', 'sales_account_id'),
			'customerBranches1' => array(self::HAS_MANY, 'CustomerBranch', 'sales_discount_account_id'),
			'customerBranches2' => array(self::HAS_MANY, 'CustomerBranch', 'receivable_account_id'),
			'customerBranches3' => array(self::HAS_MANY, 'CustomerBranch', 'payment_discount_account_id'),
			'glAccountType' => array(self::BELONGS_TO, 'GlAccountType', 'gl_account_type_id'),
			'glTransactions' => array(self::HAS_MANY, 'GlTransaction', 'gl_account_id'),
			'stockCategories' => array(self::HAS_MANY, 'StockCategory', 'default_sales_account_id'),
			'stockCategories1' => array(self::HAS_MANY, 'StockCategory', 'default_cogs_account_id'),
			'stockCategories2' => array(self::HAS_MANY, 'StockCategory', 'default_inventory_account_id'),
			'stockCategories3' => array(self::HAS_MANY, 'StockCategory', 'default_adjustment_account_id'),
			'stockCategories4' => array(self::HAS_MANY, 'StockCategory', 'default_assembly_account_id'),
			'stockMasters' => array(self::HAS_MANY, 'StockMaster', 'sales_account_id'),
			'stockMasters1' => array(self::HAS_MANY, 'StockMaster', 'cogs_account_id'),
			'stockMasters2' => array(self::HAS_MANY, 'StockMaster', 'inventory_account_id'),
			'stockMasters3' => array(self::HAS_MANY, 'StockMaster', 'adjustment_account_id'),
			'stockMasters4' => array(self::HAS_MANY, 'StockMaster', 'assembly_account_id'),
			'suppliers' => array(self::HAS_MANY, 'Supplier', 'purchase_account_id'),
			'suppliers1' => array(self::HAS_MANY, 'Supplier', 'payable_account_id'),
			'suppliers2' => array(self::HAS_MANY, 'Supplier', 'payment_discount_account_id'),
			'supplierInvoiceItems' => array(self::HAS_MANY, 'SupplierInvoiceItem', 'general_ledger_account_id'),
			'taxTypes' => array(self::HAS_MANY, 'TaxType', 'sales_account_id'),
			'taxTypes1' => array(self::HAS_MANY, 'TaxType', 'purchasing_account_id'),
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
			'code2' => 'Code2',
			'name' => 'Name',
			'gl_account_type_id' => 'Gl Account Type',
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
		$criteria->compare('code2',$this->code2,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('gl_account_type_id',$this->gl_account_type_id);
		$criteria->compare('is_active',$this->is_active);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}