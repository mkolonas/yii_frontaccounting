<?php

/**
 * This is the model class for table "{{recurrent_invoice}}".
 *
 * The followings are the available columns in table '{{recurrent_invoice}}':
 * @property integer $id
 * @property string $created_time
 * @property integer $created_by
 * @property string $updated_time
 * @property integer $updated_by
 * @property integer $is_deleted
 * @property string $deleted_time
 * @property integer $deleted_by
 * @property string $description
 * @property integer $sales_order_id
 * @property integer $customer_head_id
 * @property integer $group_no
 * @property integer $days
 * @property integer $monthly
 * @property string $begin
 * @property string $end
 * @property string $last_sent
 *
 * The followings are the available model relations:
 * @property CustomerHead $customerHead
 * @property SalesOrder $salesOrder
 */
class RecurrentInvoice extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return RecurrentInvoice the static model class
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
		return '{{recurrent_invoice}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('description, sales_order_id, days, monthly, begin, end, last_sent', 'required'),
			array('created_by, updated_by, is_deleted, deleted_by, sales_order_id, customer_head_id, group_no, days, monthly', 'numerical', 'integerOnly'=>true),
			array('description', 'length', 'max'=>60),
			array('created_time, updated_time, deleted_time', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, created_time, created_by, updated_time, updated_by, is_deleted, deleted_time, deleted_by, description, sales_order_id, customer_head_id, group_no, days, monthly, begin, end, last_sent', 'safe', 'on'=>'search'),
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
			'customerHead' => array(self::BELONGS_TO, 'CustomerHead', 'customer_head_id'),
			'salesOrder' => array(self::BELONGS_TO, 'SalesOrder', 'sales_order_id'),
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
			'description' => 'Description',
			'sales_order_id' => 'Sales Order',
			'customer_head_id' => 'Customer Head',
			'group_no' => 'Group No',
			'days' => 'Days',
			'monthly' => 'Monthly',
			'begin' => 'Begin',
			'end' => 'End',
			'last_sent' => 'Last Sent',
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
		$criteria->compare('description',$this->description,true);
		$criteria->compare('sales_order_id',$this->sales_order_id);
		$criteria->compare('customer_head_id',$this->customer_head_id);
		$criteria->compare('group_no',$this->group_no);
		$criteria->compare('days',$this->days);
		$criteria->compare('monthly',$this->monthly);
		$criteria->compare('begin',$this->begin,true);
		$criteria->compare('end',$this->end,true);
		$criteria->compare('last_sent',$this->last_sent,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}