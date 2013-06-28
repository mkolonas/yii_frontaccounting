<?php

/**
 * This is the model class for table "{{stock_move}}".
 *
 * The followings are the available columns in table '{{stock_move}}':
 * @property integer $id
 * @property string $created_time
 * @property integer $created_by
 * @property string $updated_time
 * @property integer $updated_by
 * @property integer $is_deleted
 * @property string $deleted_time
 * @property integer $deleted_by
 * @property integer $transaction_no
 * @property integer $stock_master_id
 * @property integer $type
 * @property integer $location_id
 * @property string $transaction_date
 * @property integer $person_id
 * @property double $price
 * @property string $reference
 * @property double $quantity
 * @property double $discount_percent
 * @property double $standard_cost
 * @property integer $is_visible
 *
 * The followings are the available model relations:
 * @property Location $location
 * @property StockMaster $stockMaster
 */
class StockMove extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return StockMove the static model class
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
		return '{{stock_move}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('transaction_no, stock_master_id, type, location_id, transaction_date, price, reference, quantity, discount_percent, standard_cost, is_visible', 'required'),
			array('created_by, updated_by, is_deleted, deleted_by, transaction_no, stock_master_id, type, location_id, person_id, is_visible', 'numerical', 'integerOnly'=>true),
			array('price, quantity, discount_percent, standard_cost', 'numerical'),
			array('reference', 'length', 'max'=>40),
			array('created_time, updated_time, deleted_time', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, created_time, created_by, updated_time, updated_by, is_deleted, deleted_time, deleted_by, transaction_no, stock_master_id, type, location_id, transaction_date, person_id, price, reference, quantity, discount_percent, standard_cost, is_visible', 'safe', 'on'=>'search'),
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
			'transaction_no' => 'Transaction No',
			'stock_master_id' => 'Stock Master',
			'type' => 'Type',
			'location_id' => 'Location',
			'transaction_date' => 'Transaction Date',
			'person_id' => 'Person',
			'price' => 'Price',
			'reference' => 'Reference',
			'quantity' => 'Quantity',
			'discount_percent' => 'Discount Percent',
			'standard_cost' => 'Standard Cost',
			'is_visible' => 'Is Visible',
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
		$criteria->compare('transaction_no',$this->transaction_no);
		$criteria->compare('stock_master_id',$this->stock_master_id);
		$criteria->compare('type',$this->type);
		$criteria->compare('location_id',$this->location_id);
		$criteria->compare('transaction_date',$this->transaction_date,true);
		$criteria->compare('person_id',$this->person_id);
		$criteria->compare('price',$this->price);
		$criteria->compare('reference',$this->reference,true);
		$criteria->compare('quantity',$this->quantity);
		$criteria->compare('discount_percent',$this->discount_percent);
		$criteria->compare('standard_cost',$this->standard_cost);
		$criteria->compare('is_visible',$this->is_visible);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}