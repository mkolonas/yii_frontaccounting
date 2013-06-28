<?php

/**
 * This is the model class for table "{{area}}".
 *
 * The followings are the available columns in table '{{area}}':
 * @property integer $id
 * @property string $created_time
 * @property integer $created_by
 * @property string $updated_time
 * @property integer $updated_by
 * @property integer $is_deleted
 * @property string $deleted_time
 * @property integer $deleted_by
 * @property string $name
 * @property integer $is_active
 *
 * The followings are the available model relations:
 * @property CustomerBranch[] $customerBranches
 */
class Area extends CActiveRecord
{
    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return Area the static model class
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
        return '{{area}}';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('name, is_active', 'required'),
            array('created_by, updated_by, is_deleted, deleted_by, is_active', 'numerical', 'integerOnly'=>true),
            array('name', 'length', 'max'=>60),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, created_time, created_by, updated_time, updated_by, is_deleted, deleted_time, deleted_by, name, is_active', 'safe', 'on'=>'search'),
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
            'customerBranches' => array(self::HAS_MANY, 'CustomerBranch', 'area_id'),
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

        $criteria->compare('t.id',$this->id);
        $criteria->compare('t.created_time',$this->created_time,true);
        $criteria->compare('t.created_by',$this->created_by);
        $criteria->compare('t.updated_time',$this->updated_time,true);
        $criteria->compare('t.updated_by',$this->updated_by);
        $criteria->compare('t.is_deleted',$this->is_deleted);
        $criteria->compare('t.deleted_time',$this->deleted_time,true);
        $criteria->compare('t.deleted_by',$this->deleted_by);
        $criteria->compare('t.name',$this->name,true);
        $criteria->compare('t.is_active',$this->is_active);

        return new CActiveDataProvider($this, array(
            'criteria'=>$criteria,
        ));
    }
}