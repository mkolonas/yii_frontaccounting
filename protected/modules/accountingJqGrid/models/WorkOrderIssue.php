<?php

/**
 * This is the model class for table "{{work_order_issue}}".
 *
 * The followings are the available columns in table '{{work_order_issue}}':
 * @property integer $id
 * @property string $created_time
 * @property integer $created_by
 * @property string $updated_time
 * @property integer $updated_by
 * @property integer $is_deleted
 * @property string $deleted_time
 * @property integer $deleted_by
 * @property integer $work_order_id
 * @property string $reference
 * @property string $issue_date
 * @property integer $location_id
 * @property integer $work_center_id
 *
 * The followings are the available model relations:
 * @property Location $location
 * @property WorkCenter $workCenter
 * @property WorkOrder $workOrder
 * @property WorkOrderIssueItem[] $workOrderIssueItems
 */
class WorkOrderIssue extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return WorkOrderIssue the static model class
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
		return '{{work_order_issue}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('work_order_id', 'required'),
			array('created_by, updated_by, is_deleted, deleted_by, work_order_id, location_id, work_center_id', 'numerical', 'integerOnly'=>true),
			array('reference', 'length', 'max'=>100),
			array('created_time, updated_time, deleted_time, issue_date', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, created_time, created_by, updated_time, updated_by, is_deleted, deleted_time, deleted_by, work_order_id, reference, issue_date, location_id, work_center_id', 'safe', 'on'=>'search'),
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
			'workCenter' => array(self::BELONGS_TO, 'WorkCenter', 'work_center_id'),
			'workOrder' => array(self::BELONGS_TO, 'WorkOrder', 'work_order_id'),
			'workOrderIssueItems' => array(self::HAS_MANY, 'WorkOrderIssueItem', 'work_order_issue_id'),
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
			'work_order_id' => 'Work Order',
			'reference' => 'Reference',
			'issue_date' => 'Issue Date',
			'location_id' => 'Location',
			'work_center_id' => 'Work Center',
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
		$criteria->compare('work_order_id',$this->work_order_id);
		$criteria->compare('reference',$this->reference,true);
		$criteria->compare('issue_date',$this->issue_date,true);
		$criteria->compare('location_id',$this->location_id);
		$criteria->compare('work_center_id',$this->work_center_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}