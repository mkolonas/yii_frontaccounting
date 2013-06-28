<?php

/**
 * This is the model class for table "{{bank_account}}".
 *
 * The followings are the available columns in table '{{bank_account}}':
 * @property integer $id
 * @property string $created_time
 * @property integer $created_by
 * @property string $updated_time
 * @property integer $updated_by
 * @property integer $is_deleted
 * @property string $deleted_time
 * @property integer $deleted_by
 * @property integer $gl_account_id
 * @property integer $bank_account_type_id
 * @property string $account_name
 * @property string $account_number
 * @property string $bank_name
 * @property string $address
 * @property integer $currency_id
 * @property integer $as_default_currency_account
 * @property string $last_reconciled_date
 * @property double $ending_reconcile_balance
 * @property integer $is_active
 *
 * The followings are the available model relations:
 * @property BankAccountType $bankAccountType
 * @property Currency $currency
 * @property GlAccount $glAccount
 * @property BankTransaction[] $bankTransactions
 */
class BankAccount extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return BankAccount the static model class
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
		return '{{bank_account}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('gl_account_id, bank_account_type_id, account_name, account_number, bank_name, address, currency_id, as_default_currency_account, last_reconciled_date, ending_reconcile_balance, is_active', 'required'),
			array('created_by, updated_by, is_deleted, deleted_by, gl_account_id, bank_account_type_id, currency_id, as_default_currency_account, is_active', 'numerical', 'integerOnly'=>true),
			array('ending_reconcile_balance', 'numerical'),
			array('account_name, bank_name', 'length', 'max'=>60),
			array('account_number', 'length', 'max'=>100),
			array('created_time, updated_time, deleted_time', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, created_time, created_by, updated_time, updated_by, is_deleted, deleted_time, deleted_by, gl_account_id, bank_account_type_id, account_name, account_number, bank_name, address, currency_id, as_default_currency_account, last_reconciled_date, ending_reconcile_balance, is_active', 'safe', 'on'=>'search'),
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
			'bankAccountType' => array(self::BELONGS_TO, 'BankAccountType', 'bank_account_type_id'),
			'currency' => array(self::BELONGS_TO, 'Currency', 'currency_id'),
			'glAccount' => array(self::BELONGS_TO, 'GlAccount', 'gl_account_id'),
			'bankTransactions' => array(self::HAS_MANY, 'BankTransaction', 'bank_account_id'),
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
			'gl_account_id' => 'Gl Account',
			'bank_account_type_id' => 'Bank Account Type',
			'account_name' => 'Account Name',
			'account_number' => 'Account Number',
			'bank_name' => 'Bank Name',
			'address' => 'Address',
			'currency_id' => 'Currency',
			'as_default_currency_account' => 'As Default Currency Account',
			'last_reconciled_date' => 'Last Reconciled Date',
			'ending_reconcile_balance' => 'Ending Reconcile Balance',
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
		$criteria->compare('gl_account_id',$this->gl_account_id);
		$criteria->compare('bank_account_type_id',$this->bank_account_type_id);
		$criteria->compare('account_name',$this->account_name,true);
		$criteria->compare('account_number',$this->account_number,true);
		$criteria->compare('bank_name',$this->bank_name,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('currency_id',$this->currency_id);
		$criteria->compare('as_default_currency_account',$this->as_default_currency_account);
		$criteria->compare('last_reconciled_date',$this->last_reconciled_date,true);
		$criteria->compare('ending_reconcile_balance',$this->ending_reconcile_balance);
		$criteria->compare('is_active',$this->is_active);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}