<?php

/**
 * This is the model class for table "{{dimension}}".
 *
 * The followings are the available columns in table '{{dimension}}':
 * @property integer $id
 * @property string $created_time
 * @property integer $created_by
 * @property string $updated_time
 * @property integer $updated_by
 * @property integer $is_deleted
 * @property string $deleted_time
 * @property integer $deleted_by
 * @property string $reference
 * @property string $name
 * @property integer $type
 * @property integer $is_closed
 * @property string $date
 * @property string $due_date
 *
 * The followings are the available model relations:
 * @property BankTransaction[] $bankTransactions
 * @property BankTransaction[] $bankTransactions1
 * @property BudgetTransaction[] $budgetTransactions
 * @property BudgetTransaction[] $budgetTransactions1
 * @property CustomerHead[] $customerHeads
 * @property CustomerHead[] $customerHeads1
 * @property CustomerTransaction[] $customerTransactions
 * @property CustomerTransaction[] $customerTransactions1
 * @property DimensionTagAssociation[] $dimensionTagAssociations
 * @property GlTransaction[] $glTransactions
 * @property GlTransaction[] $glTransactions1
 * @property QuickEntryLine[] $quickEntryLines
 * @property QuickEntryLine[] $quickEntryLines1
 * @property StockCategory[] $stockCategories
 * @property StockMaster[] $stockMasters
 * @property StockMaster[] $stockMasters1
 * @property Supplier[] $suppliers
 * @property Supplier[] $suppliers1
 */
class Dimension extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Dimension the static model class
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
		return '{{dimension}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('reference, name, type, is_closed, date, due_date', 'required'),
			array('created_by, updated_by, is_deleted, deleted_by, type, is_closed', 'numerical', 'integerOnly'=>true),
			array('reference, name', 'length', 'max'=>60),
			array('created_time, updated_time, deleted_time', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, created_time, created_by, updated_time, updated_by, is_deleted, deleted_time, deleted_by, reference, name, type, is_closed, date, due_date', 'safe', 'on'=>'search'),
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
			'bankTransactions' => array(self::HAS_MANY, 'BankTransaction', 'dimension1_id'),
			'bankTransactions1' => array(self::HAS_MANY, 'BankTransaction', 'dimension2_id'),
			'budgetTransactions' => array(self::HAS_MANY, 'BudgetTransaction', 'dimension1_id'),
			'budgetTransactions1' => array(self::HAS_MANY, 'BudgetTransaction', 'dimension2_id'),
			'customerHeads' => array(self::HAS_MANY, 'CustomerHead', 'dimension1_id'),
			'customerHeads1' => array(self::HAS_MANY, 'CustomerHead', 'dimension2_id'),
			'customerTransactions' => array(self::HAS_MANY, 'CustomerTransaction', 'dimension1_id'),
			'customerTransactions1' => array(self::HAS_MANY, 'CustomerTransaction', 'dimension2_id'),
			'dimensionTagAssociations' => array(self::HAS_MANY, 'DimensionTagAssociation', 'dimension_id'),
			'glTransactions' => array(self::HAS_MANY, 'GlTransaction', 'dimension1_id'),
			'glTransactions1' => array(self::HAS_MANY, 'GlTransaction', 'dimension2_id'),
			'quickEntryLines' => array(self::HAS_MANY, 'QuickEntryLine', 'dimension1_id'),
			'quickEntryLines1' => array(self::HAS_MANY, 'QuickEntryLine', 'dimension2_id'),
			'stockCategories' => array(self::HAS_MANY, 'StockCategory', 'default_dimension1'),
			'stockMasters' => array(self::HAS_MANY, 'StockMaster', 'dimension1_id'),
			'stockMasters1' => array(self::HAS_MANY, 'StockMaster', 'dimension2_id'),
			'suppliers' => array(self::HAS_MANY, 'Supplier', 'dimension1_id'),
			'suppliers1' => array(self::HAS_MANY, 'Supplier', 'dimension2_id'),
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
			'name' => 'Name',
			'type' => 'Type',
			'is_closed' => 'Is Closed',
			'date' => 'Date',
			'due_date' => 'Due Date',
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('type',$this->type);
		$criteria->compare('is_closed',$this->is_closed);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('due_date',$this->due_date,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}