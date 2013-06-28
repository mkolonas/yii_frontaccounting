<?php

/**
 * This is the model class for table "{{bill_of_material}}".
 *
 * The followings are the available columns in table '{{bill_of_material}}':
 * @property integer $id
 * @property string $created_time
 * @property integer $created_by
 * @property string $updated_time
 * @property integer $updated_by
 * @property integer $is_deleted
 * @property string $deleted_time
 * @property integer $deleted_by
 * @property string $parent
 * @property integer $component_id
 * @property integer $workcenter_added
 * @property integer $location_id
 * @property double $quantity
 *
 * The followings are the available model relations:
 * @property Location $location
 * @property StockMaster $component
 * @property WorkCenter $workcenterAdded
 */
class BillOfMaterial extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return BillOfMaterial the static model class
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
		return '{{bill_of_material}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('parent, component_id, workcenter_added, location_id, quantity', 'required'),
			array('created_by, updated_by, is_deleted, deleted_by, component_id, workcenter_added, location_id', 'numerical', 'integerOnly'=>true),
			array('quantity', 'numerical'),
			array('parent', 'length', 'max'=>20),
			array('created_time, updated_time, deleted_time', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, created_time, created_by, updated_time, updated_by, is_deleted, deleted_time, deleted_by, parent, component_id, workcenter_added, location_id, quantity', 'safe', 'on'=>'search'),
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
			'component' => array(self::BELONGS_TO, 'StockMaster', 'component_id'),
			'workcenterAdded' => array(self::BELONGS_TO, 'WorkCenter', 'workcenter_added'),
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
			'parent' => 'Parent',
			'component_id' => 'Component',
			'workcenter_added' => 'Workcenter Added',
			'location_id' => 'Location',
			'quantity' => 'Quantity',
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
		$criteria->compare('parent',$this->parent,true);
		$criteria->compare('component_id',$this->component_id);
		$criteria->compare('workcenter_added',$this->workcenter_added);
		$criteria->compare('location_id',$this->location_id);
		$criteria->compare('quantity',$this->quantity);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}