<?php

/**
 * This is the model class for table "{{tax_transaction_item}}".
 *
 * The followings are the available columns in table '{{tax_transaction_item}}':
 * @property integer $id
 * @property string $created_time
 * @property integer $created_by
 * @property string $updated_time
 * @property integer $updated_by
 * @property integer $is_deleted
 * @property string $deleted_time
 * @property integer $deleted_by
 * @property integer $transaction_type_id
 * @property integer $transaction_no
 * @property string $date
 * @property integer $tax_type_id
 * @property double $rate
 * @property double $exchange_rate
 * @property integer $is_included_in_price
 * @property double $net_amount
 * @property double $amount
 * @property string $memo
 *
 * The followings are the available model relations:
 * @property TransactionType $transactionType
 * @property TaxType $taxType
 */
class TaxTransactionItem extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return TaxTransactionItem the static model class
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
		return '{{tax_transaction_item}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('date, tax_type_id, rate, exchange_rate, is_included_in_price, net_amount, amount', 'required'),
			array('created_by, updated_by, is_deleted, deleted_by, transaction_type_id, transaction_no, tax_type_id, is_included_in_price', 'numerical', 'integerOnly'=>true),
			array('rate, exchange_rate, net_amount, amount', 'numerical'),
			array('created_time, updated_time, deleted_time, memo', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, created_time, created_by, updated_time, updated_by, is_deleted, deleted_time, deleted_by, transaction_type_id, transaction_no, date, tax_type_id, rate, exchange_rate, is_included_in_price, net_amount, amount, memo', 'safe', 'on'=>'search'),
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
			'transactionType' => array(self::BELONGS_TO, 'TransactionType', 'transaction_type_id'),
			'taxType' => array(self::BELONGS_TO, 'TaxType', 'tax_type_id'),
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
			'transaction_type_id' => 'Transaction Type',
			'transaction_no' => 'Transaction No',
			'date' => 'Date',
			'tax_type_id' => 'Tax Type',
			'rate' => 'Rate',
			'exchange_rate' => 'Exchange Rate',
			'is_included_in_price' => 'Is Included In Price',
			'net_amount' => 'Net Amount',
			'amount' => 'Amount',
			'memo' => 'Memo',
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
		$criteria->compare('transaction_type_id',$this->transaction_type_id);
		$criteria->compare('transaction_no',$this->transaction_no);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('tax_type_id',$this->tax_type_id);
		$criteria->compare('rate',$this->rate);
		$criteria->compare('exchange_rate',$this->exchange_rate);
		$criteria->compare('is_included_in_price',$this->is_included_in_price);
		$criteria->compare('net_amount',$this->net_amount);
		$criteria->compare('amount',$this->amount);
		$criteria->compare('memo',$this->memo,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}