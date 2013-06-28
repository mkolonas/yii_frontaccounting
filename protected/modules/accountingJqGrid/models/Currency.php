<?php

/**
 * This is the model class for table "{{currency}}".
 *
 * The followings are the available columns in table '{{currency}}':
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
 * @property string $symbol
 * @property string $country
 * @property string $hundreds_name
 * @property integer $is_auto_update
 * @property integer $is_active
 *
 * The followings are the available model relations:
 * @property BankAccount[] $bankAccounts
 * @property CustomerHead[] $customerHeads
 * @property ExchangeRate[] $exchangeRates
 * @property SalesPrice[] $salesPrices
 * @property Supplier[] $suppliers
 */
class Currency extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Currency the static model class
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
		return '{{currency}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('code, name, symbol, country, hundreds_name, is_auto_update, is_active', 'required'),
			array('created_by, updated_by, is_deleted, deleted_by, is_auto_update, is_active', 'numerical', 'integerOnly'=>true),
			array('code', 'length', 'max'=>3),
			array('name', 'length', 'max'=>60),
			array('symbol', 'length', 'max'=>10),
			array('country', 'length', 'max'=>100),
			array('hundreds_name', 'length', 'max'=>15),
			array('created_time, updated_time, deleted_time', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, created_time, created_by, updated_time, updated_by, is_deleted, deleted_time, deleted_by, code, name, symbol, country, hundreds_name, is_auto_update, is_active', 'safe', 'on'=>'search'),
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
			'bankAccounts' => array(self::HAS_MANY, 'BankAccount', 'currency_id'),
			'customerHeads' => array(self::HAS_MANY, 'CustomerHead', 'currency_id'),
			'exchangeRates' => array(self::HAS_MANY, 'ExchangeRate', 'currency_id'),
			'salesPrices' => array(self::HAS_MANY, 'SalesPrice', 'currency_id'),
			'suppliers' => array(self::HAS_MANY, 'Supplier', 'currency_id'),
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
			'symbol' => 'Symbol',
			'country' => 'Country',
			'hundreds_name' => 'Hundreds Name',
			'is_auto_update' => 'Is Auto Update',
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
		$criteria->compare('symbol',$this->symbol,true);
		$criteria->compare('country',$this->country,true);
		$criteria->compare('hundreds_name',$this->hundreds_name,true);
		$criteria->compare('is_auto_update',$this->is_auto_update);
		$criteria->compare('is_active',$this->is_active);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}