<?php

/**
 * This is the model class for table "{{customer_transaction_item}}".
 *
 * The followings are the available columns in table '{{customer_transaction_item}}':
 * @property integer $id
 * @property string $created_time
 * @property integer $created_by
 * @property string $updated_time
 * @property integer $updated_by
 * @property integer $is_deleted
 * @property string $deleted_time
 * @property integer $deleted_by
 * @property integer $customer_transaction_id
 * @property integer $stock_master_id
 * @property string $description
 * @property double $price_per_unit
 * @property double $tax_per_unit
 * @property double $quantity
 * @property double $discount_percent
 * @property double $standard_cost
 * @property double $quantity_done
 * @property integer $src_id
 *
 * The followings are the available model relations:
 * @property CustomerTransaction $customerTransaction
 * @property StockMaster $stockMaster
 */
class CustomerTransactionItem extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return CustomerTransactionItem the static model class
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
		return '{{customer_transaction_item}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('price_per_unit, tax_per_unit, quantity, discount_percent, standard_cost, quantity_done, src_id', 'required'),
			array('created_by, updated_by, is_deleted, deleted_by, customer_transaction_id, stock_master_id, src_id', 'numerical', 'integerOnly'=>true),
			array('price_per_unit, tax_per_unit, quantity, discount_percent, standard_cost, quantity_done', 'numerical'),
			array('created_time, updated_time, deleted_time, description', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, created_time, created_by, updated_time, updated_by, is_deleted, deleted_time, deleted_by, customer_transaction_id, stock_master_id, description, price_per_unit, tax_per_unit, quantity, discount_percent, standard_cost, quantity_done, src_id', 'safe', 'on'=>'search'),
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
			'customerTransaction' => array(self::BELONGS_TO, 'CustomerTransaction', 'customer_transaction_id'),
			'stockMaster' => array(self::BELONGS_TO, 'StockMaster', 'stock_master_id'),
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
			'customer_transaction_id' => 'Customer Transaction',
			'stock_master_id' => 'Stock Master',
			'description' => 'Description',
			'price_per_unit' => 'Price Per Unit',
			'tax_per_unit' => 'Tax Per Unit',
			'quantity' => 'Quantity',
			'discount_percent' => 'Discount Percent',
			'standard_cost' => 'Standard Cost',
			'quantity_done' => 'Quantity Done',
			'src_id' => 'Src',
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
		$criteria->compare('customer_transaction_id',$this->customer_transaction_id);
		$criteria->compare('stock_master_id',$this->stock_master_id);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('price_per_unit',$this->price_per_unit);
		$criteria->compare('tax_per_unit',$this->tax_per_unit);
		$criteria->compare('quantity',$this->quantity);
		$criteria->compare('discount_percent',$this->discount_percent);
		$criteria->compare('standard_cost',$this->standard_cost);
		$criteria->compare('quantity_done',$this->quantity_done);
		$criteria->compare('src_id',$this->src_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}