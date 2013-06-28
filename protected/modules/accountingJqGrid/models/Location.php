<?php

/**
 * This is the model class for table "{{location}}".
 *
 * The followings are the available columns in table '{{location}}':
 * @property integer $id
 * @property string $created_time
 * @property integer $created_by
 * @property string $updated_time
 * @property integer $updated_by
 * @property integer $is_deleted
 * @property string $deleted_time
 * @property integer $deleted_by
 * @property string $code
 * @property string $name
 * @property string $delivery_address
 * @property string $phone1
 * @property string $phone2
 * @property string $fax
 * @property string $email
 * @property string $contact
 * @property integer $is_active
 *
 * The followings are the available model relations:
 * @property BillOfMaterial[] $billOfMaterials
 * @property CustomerBranch[] $customerBranches
 * @property GrnBatch[] $grnBatches
 * @property PurchaseOrder[] $purchaseOrders
 * @property SalesOrder[] $salesOrders
 * @property SalesPos[] $salesPoses
 * @property StockLocation[] $stockLocations
 * @property StockMove[] $stockMoves
 * @property WorkOrder[] $workOrders
 * @property WorkOrderIssue[] $workOrderIssues
 * @property WorkOrderRequirement[] $workOrderRequirements
 */
class Location extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Location the static model class
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
		return '{{location}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('code, name, is_active', 'required'),
			array('created_by, updated_by, is_deleted, deleted_by, is_active', 'numerical', 'integerOnly'=>true),
			array('code', 'length', 'max'=>5),
			array('name', 'length', 'max'=>60),
			array('phone1, phone2, fax, contact', 'length', 'max'=>30),
			array('email', 'length', 'max'=>100),
			array('created_time, updated_time, deleted_time, delivery_address', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, created_time, created_by, updated_time, updated_by, is_deleted, deleted_time, deleted_by, code, name, delivery_address, phone1, phone2, fax, email, contact, is_active', 'safe', 'on'=>'search'),
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
			'billOfMaterials' => array(self::HAS_MANY, 'BillOfMaterial', 'location_id'),
			'customerBranches' => array(self::HAS_MANY, 'CustomerBranch', 'default_location_id'),
			'grnBatches' => array(self::HAS_MANY, 'GrnBatch', 'location_id'),
			'purchaseOrders' => array(self::HAS_MANY, 'PurchaseOrder', 'into_stock_location_id'),
			'salesOrders' => array(self::HAS_MANY, 'SalesOrder', 'from_stock_location_id'),
			'salesPoses' => array(self::HAS_MANY, 'SalesPos', 'pos_location_id'),
			'stockLocations' => array(self::HAS_MANY, 'StockLocation', 'location_id'),
			'stockMoves' => array(self::HAS_MANY, 'StockMove', 'location_id'),
			'workOrders' => array(self::HAS_MANY, 'WorkOrder', 'location_id'),
			'workOrderIssues' => array(self::HAS_MANY, 'WorkOrderIssue', 'location_id'),
			'workOrderRequirements' => array(self::HAS_MANY, 'WorkOrderRequirement', 'location_id'),
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
			'name' => 'Name',
			'delivery_address' => 'Delivery Address',
			'phone1' => 'Phone1',
			'phone2' => 'Phone2',
			'fax' => 'Fax',
			'email' => 'Email',
			'contact' => 'Contact',
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('delivery_address',$this->delivery_address,true);
		$criteria->compare('phone1',$this->phone1,true);
		$criteria->compare('phone2',$this->phone2,true);
		$criteria->compare('fax',$this->fax,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('contact',$this->contact,true);
		$criteria->compare('is_active',$this->is_active);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}