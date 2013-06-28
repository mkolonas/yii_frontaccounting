<?php

/**
 * This is the model class for table "{{work_order}}".
 *
 * The followings are the available columns in table '{{work_order}}':
 * @property integer $id
 * @property string $created_time
 * @property integer $created_by
 * @property string $updated_time
 * @property integer $updated_by
 * @property integer $is_deleted
 * @property string $deleted_time
 * @property integer $deleted_by
 * @property string $reference
 * @property integer $location_id
 * @property double $requested_unit
 * @property integer $stock_master_id
 * @property string $date
 * @property integer $type
 * @property string $required_by
 * @property string $released_date
 * @property double $units_issued
 * @property integer $is_closed
 * @property integer $is_released
 * @property double $additional_cost
 *
 * The followings are the available model relations:
 * @property Location $location
 * @property StockMaster $stockMaster
 * @property WorkOrderIssue[] $workOrderIssues
 * @property WorkOrderManufacture[] $workOrderManufactures
 * @property WorkOrderRequirement[] $workOrderRequirements
 */
class WorkOrder extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return WorkOrder the static model class
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
		return '{{work_order}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('reference, location_id, requested_unit, stock_master_id, date, type, required_by, released_date, units_issued, is_closed, is_released, additional_cost', 'required'),
			array('created_by, updated_by, is_deleted, deleted_by, location_id, stock_master_id, type, is_closed, is_released', 'numerical', 'integerOnly'=>true),
			array('requested_unit, units_issued, additional_cost', 'numerical'),
			array('reference', 'length', 'max'=>60),
			array('created_time, updated_time, deleted_time', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, created_time, created_by, updated_time, updated_by, is_deleted, deleted_time, deleted_by, reference, location_id, requested_unit, stock_master_id, date, type, required_by, released_date, units_issued, is_closed, is_released, additional_cost', 'safe', 'on'=>'search'),
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
			'stockMaster' => array(self::BELONGS_TO, 'StockMaster', 'stock_master_id'),
			'workOrderIssues' => array(self::HAS_MANY, 'WorkOrderIssue', 'work_order_id'),
			'workOrderManufactures' => array(self::HAS_MANY, 'WorkOrderManufacture', 'work_order_id'),
			'workOrderRequirements' => array(self::HAS_MANY, 'WorkOrderRequirement', 'work_order_id'),
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
			'reference' => 'Reference',
			'location_id' => 'Location',
			'requested_unit' => 'Requested Unit',
			'stock_master_id' => 'Stock Master',
			'date' => 'Date',
			'type' => 'Type',
			'required_by' => 'Required By',
			'released_date' => 'Released Date',
			'units_issued' => 'Units Issued',
			'is_closed' => 'Is Closed',
			'is_released' => 'Is Released',
			'additional_cost' => 'Additional Cost',
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
		$criteria->compare('reference',$this->reference,true);
		$criteria->compare('location_id',$this->location_id);
		$criteria->compare('requested_unit',$this->requested_unit);
		$criteria->compare('stock_master_id',$this->stock_master_id);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('type',$this->type);
		$criteria->compare('required_by',$this->required_by,true);
		$criteria->compare('released_date',$this->released_date,true);
		$criteria->compare('units_issued',$this->units_issued);
		$criteria->compare('is_closed',$this->is_closed);
		$criteria->compare('is_released',$this->is_released);
		$criteria->compare('additional_cost',$this->additional_cost);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}