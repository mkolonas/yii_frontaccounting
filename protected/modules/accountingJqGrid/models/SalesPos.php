<?php

/**
 * This is the model class for table "{{sales_pos}}".
 *
 * The followings are the available columns in table '{{sales_pos}}':
 * @property integer $id
 * @property string $created_time
 * @property integer $created_by
 * @property string $updated_time
 * @property integer $updated_by
 * @property integer $is_deleted
 * @property string $deleted_time
 * @property integer $deleted_by
 * @property string $pos_name
 * @property integer $is_cash_sale
 * @property integer $is_credit_sale
 * @property integer $pos_location_id
 * @property integer $pos_account
 * @property integer $is_active
 *
 * The followings are the available model relations:
 * @property Location $posLocation
 */
class SalesPos extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return SalesPos the static model class
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
		return '{{sales_pos}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pos_name, is_cash_sale, is_credit_sale, pos_location_id, pos_account, is_active', 'required'),
			array('created_by, updated_by, is_deleted, deleted_by, is_cash_sale, is_credit_sale, pos_location_id, pos_account, is_active', 'numerical', 'integerOnly'=>true),
			array('pos_name', 'length', 'max'=>30),
			array('created_time, updated_time, deleted_time', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, created_time, created_by, updated_time, updated_by, is_deleted, deleted_time, deleted_by, pos_name, is_cash_sale, is_credit_sale, pos_location_id, pos_account, is_active', 'safe', 'on'=>'search'),
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
			'posLocation' => array(self::BELONGS_TO, 'Location', 'pos_location_id'),
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
			'pos_name' => 'Pos Name',
			'is_cash_sale' => 'Is Cash Sale',
			'is_credit_sale' => 'Is Credit Sale',
			'pos_location_id' => 'Pos Location',
			'pos_account' => 'Pos Account',
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
		$criteria->compare('pos_name',$this->pos_name,true);
		$criteria->compare('is_cash_sale',$this->is_cash_sale);
		$criteria->compare('is_credit_sale',$this->is_credit_sale);
		$criteria->compare('pos_location_id',$this->pos_location_id);
		$criteria->compare('pos_account',$this->pos_account);
		$criteria->compare('is_active',$this->is_active);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}