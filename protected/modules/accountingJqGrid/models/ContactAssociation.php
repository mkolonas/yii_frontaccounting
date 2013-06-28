<?php

/**
 * This is the model class for table "{{contact_association}}".
 *
 * The followings are the available columns in table '{{contact_association}}':
 * @property integer $id
 * @property string $created_time
 * @property integer $created_by
 * @property string $updated_time
 * @property integer $updated_by
 * @property integer $is_deleted
 * @property string $deleted_time
 * @property integer $deleted_by
 * @property integer $contact_person_id
 * @property integer $contact_category_id
 * @property integer $entity_id
 *
 * The followings are the available model relations:
 * @property ContactCategory $contactCategory
 * @property ContactPerson $contactPerson
 */
class ContactAssociation extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ContactAssociation the static model class
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
		return '{{contact_association}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('contact_person_id, contact_category_id', 'required'),
			array('created_by, updated_by, is_deleted, deleted_by, contact_person_id, contact_category_id, entity_id', 'numerical', 'integerOnly'=>true),
			array('created_time, updated_time, deleted_time', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, created_time, created_by, updated_time, updated_by, is_deleted, deleted_time, deleted_by, contact_person_id, contact_category_id, entity_id', 'safe', 'on'=>'search'),
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
			'contactCategory' => array(self::BELONGS_TO, 'ContactCategory', 'contact_category_id'),
			'contactPerson' => array(self::BELONGS_TO, 'ContactPerson', 'contact_person_id'),
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
			'contact_person_id' => 'Contact Person',
			'contact_category_id' => 'Contact Category',
			'entity_id' => 'Entity',
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
		$criteria->compare('contact_person_id',$this->contact_person_id);
		$criteria->compare('contact_category_id',$this->contact_category_id);
		$criteria->compare('entity_id',$this->entity_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}