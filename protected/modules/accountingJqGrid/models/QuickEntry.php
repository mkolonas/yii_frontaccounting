<?php

/**
 * This is the model class for table "{{quick_entry}}".
 *
 * The followings are the available columns in table '{{quick_entry}}':
 * @property integer $id
 * @property string $created_time
 * @property integer $created_by
 * @property string $updated_time
 * @property integer $updated_by
 * @property integer $is_deleted
 * @property string $deleted_time
 * @property integer $deleted_by
 * @property integer $quick_entry_type_id
 * @property string $description
 * @property double $base_amount
 * @property string $base_description
 * @property integer $as_bal_type
 *
 * The followings are the available model relations:
 * @property QuickEntryType $quickEntryType
 * @property QuickEntryLine[] $quickEntryLines
 */
class QuickEntry extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return QuickEntry the static model class
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
		return '{{quick_entry}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('quick_entry_type_id, description, base_amount, as_bal_type', 'required'),
			array('created_by, updated_by, is_deleted, deleted_by, quick_entry_type_id, as_bal_type', 'numerical', 'integerOnly'=>true),
			array('base_amount', 'numerical'),
			array('description, base_description', 'length', 'max'=>60),
			array('created_time, updated_time, deleted_time', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, created_time, created_by, updated_time, updated_by, is_deleted, deleted_time, deleted_by, quick_entry_type_id, description, base_amount, base_description, as_bal_type', 'safe', 'on'=>'search'),
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
			'quickEntryType' => array(self::BELONGS_TO, 'QuickEntryType', 'quick_entry_type_id'),
			'quickEntryLines' => array(self::HAS_MANY, 'QuickEntryLine', 'quick_entry_id'),
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
			'quick_entry_type_id' => 'Quick Entry Type',
			'description' => 'Description',
			'base_amount' => 'Base Amount',
			'base_description' => 'Base Description',
			'as_bal_type' => 'As Bal Type',
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
		$criteria->compare('quick_entry_type_id',$this->quick_entry_type_id);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('base_amount',$this->base_amount);
		$criteria->compare('base_description',$this->base_description,true);
		$criteria->compare('as_bal_type',$this->as_bal_type);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}