<?php

/**
 * This is the model class for table "{{gl_transaction}}".
 *
 * The followings are the available columns in table '{{gl_transaction}}':
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
 * @property string $transaction_date
 * @property integer $gl_account_id
 * @property string $memo
 * @property double $amount
 * @property integer $dimension1_id
 * @property integer $dimension2_id
 * @property integer $person_type_id
 * @property string $person_id
 *
 * The followings are the available model relations:
 * @property GlAccount $glAccount
 * @property PaymentType $personType
 * @property TransactionType $transactionType
 * @property Dimension $dimension1
 * @property Dimension $dimension2
 */
class GlTransaction extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return GlTransaction the static model class
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
		return '{{gl_transaction}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('transaction_type_id, transaction_no, transaction_date, gl_account_id, memo, amount, dimension1_id, dimension2_id', 'required'),
			array('created_by, updated_by, is_deleted, deleted_by, transaction_type_id, transaction_no, gl_account_id, dimension1_id, dimension2_id, person_type_id', 'numerical', 'integerOnly'=>true),
			array('amount', 'numerical'),
			array('created_time, updated_time, deleted_time, person_id', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, created_time, created_by, updated_time, updated_by, is_deleted, deleted_time, deleted_by, transaction_type_id, transaction_no, transaction_date, gl_account_id, memo, amount, dimension1_id, dimension2_id, person_type_id, person_id', 'safe', 'on'=>'search'),
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
			'glAccount' => array(self::BELONGS_TO, 'GlAccount', 'gl_account_id'),
			'personType' => array(self::BELONGS_TO, 'PaymentType', 'person_type_id'),
			'transactionType' => array(self::BELONGS_TO, 'TransactionType', 'transaction_type_id'),
			'dimension1' => array(self::BELONGS_TO, 'Dimension', 'dimension1_id'),
			'dimension2' => array(self::BELONGS_TO, 'Dimension', 'dimension2_id'),
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
			'transaction_date' => 'Transaction Date',
			'gl_account_id' => 'Gl Account',
			'memo' => 'Memo',
			'amount' => 'Amount',
			'dimension1_id' => 'Dimension1',
			'dimension2_id' => 'Dimension2',
			'person_type_id' => 'Person Type',
			'person_id' => 'Person',
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
		$criteria->compare('transaction_date',$this->transaction_date,true);
		$criteria->compare('gl_account_id',$this->gl_account_id);
		$criteria->compare('memo',$this->memo,true);
		$criteria->compare('amount',$this->amount);
		$criteria->compare('dimension1_id',$this->dimension1_id);
		$criteria->compare('dimension2_id',$this->dimension2_id);
		$criteria->compare('person_type_id',$this->person_type_id);
		$criteria->compare('person_id',$this->person_id,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}