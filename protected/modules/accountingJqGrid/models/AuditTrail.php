<?php

/**
 * This is the model class for table "{{audit_trail}}".
 *
 * The followings are the available columns in table '{{audit_trail}}':
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
 * @property integer $user_id
 * @property string $timestamp
 * @property string $description
 * @property integer $fiscal_year_id
 * @property string $general_ledger_date
 * @property integer $general_ledger_seq
 *
 * The followings are the available model relations:
 * @property FiscalYear $fiscalYear
 * @property TransactionType $transactionType
 * @property Users $user
 */
class AuditTrail extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return AuditTrail the static model class
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
		return '{{audit_trail}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('transaction_type_id, transaction_no, user_id, timestamp, fiscal_year_id, general_ledger_date', 'required'),
			array('created_by, updated_by, is_deleted, deleted_by, transaction_type_id, transaction_no, user_id, fiscal_year_id, general_ledger_seq', 'numerical', 'integerOnly'=>true),
			array('description', 'length', 'max'=>60),
			array('created_time, updated_time, deleted_time', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, created_time, created_by, updated_time, updated_by, is_deleted, deleted_time, deleted_by, transaction_type_id, transaction_no, user_id, timestamp, description, fiscal_year_id, general_ledger_date, general_ledger_seq', 'safe', 'on'=>'search'),
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
			'fiscalYear' => array(self::BELONGS_TO, 'FiscalYear', 'fiscal_year_id'),
			'transactionType' => array(self::BELONGS_TO, 'TransactionType', 'transaction_type_id'),
			'user' => array(self::BELONGS_TO, 'Users', 'user_id'),
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
			'user_id' => 'User',
			'timestamp' => 'Timestamp',
			'description' => 'Description',
			'fiscal_year_id' => 'Fiscal Year',
			'general_ledger_date' => 'General Ledger Date',
			'general_ledger_seq' => 'General Ledger Seq',
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
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('timestamp',$this->timestamp,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('fiscal_year_id',$this->fiscal_year_id);
		$criteria->compare('general_ledger_date',$this->general_ledger_date,true);
		$criteria->compare('general_ledger_seq',$this->general_ledger_seq);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}