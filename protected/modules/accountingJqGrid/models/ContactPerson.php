<?php

/**
 * This is the model class for table "{{contact_person}}".
 *
 * The followings are the available columns in table '{{contact_person}}':
 * @property integer $id
 * @property string $created_time
 * @property integer $created_by
 * @property string $updated_time
 * @property integer $updated_by
 * @property integer $is_deleted
 * @property string $deleted_time
 * @property integer $deleted_by
 * @property string $name
 * @property string $name2
 * @property string $reference
 * @property string $address
 * @property string $address2
 * @property string $phone
 * @property string $phone2
 * @property string $fax
 * @property string $email
 * @property string $email2
 * @property integer $language_id
 * @property string $note
 * @property integer $is_active
 *
 * The followings are the available model relations:
 * @property ContactAssociation[] $contactAssociations
 * @property Language $language
 */
class ContactPerson extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ContactPerson the static model class
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
		return '{{contact_person}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, reference, phone, is_active', 'required'),
			array('created_by, updated_by, is_deleted, deleted_by, language_id, is_active', 'numerical', 'integerOnly'=>true),
			array('name, name2', 'length', 'max'=>60),
			array('reference, phone, phone2, fax', 'length', 'max'=>30),
			array('email, email2', 'length', 'max'=>100),
			array('created_time, updated_time, deleted_time, address, address2, note', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, created_time, created_by, updated_time, updated_by, is_deleted, deleted_time, deleted_by, name, name2, reference, address, address2, phone, phone2, fax, email, email2, language_id, note, is_active', 'safe', 'on'=>'search'),
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
			'contactAssociations' => array(self::HAS_MANY, 'ContactAssociation', 'contact_person_id'),
			'language' => array(self::BELONGS_TO, 'Language', 'language_id'),
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
			'name' => 'Name',
			'name2' => 'Name2',
			'reference' => 'Reference',
			'address' => 'Address',
			'address2' => 'Address2',
			'phone' => 'Phone',
			'phone2' => 'Phone2',
			'fax' => 'Fax',
			'email' => 'Email',
			'email2' => 'Email2',
			'language_id' => 'Language',
			'note' => 'Note',
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('name2',$this->name2,true);
		$criteria->compare('reference',$this->reference,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('address2',$this->address2,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('phone2',$this->phone2,true);
		$criteria->compare('fax',$this->fax,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('email2',$this->email2,true);
		$criteria->compare('language_id',$this->language_id);
		$criteria->compare('note',$this->note,true);
		$criteria->compare('is_active',$this->is_active);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}