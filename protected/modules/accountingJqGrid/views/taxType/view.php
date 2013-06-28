<?php
/* @var $this TaxTypeController */
/* @var $model TaxType */

$this->breadcrumbs=array(
	'Tax Types'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List TaxType', 'url'=>array('index')),
	array('label'=>'Create TaxType', 'url'=>array('create')),
	array('label'=>'Update TaxType', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TaxType', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TaxType', 'url'=>array('admin')),
);
?>

<h1>View TaxType #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'created_time',
		'created_by',
		'updated_time',
		'updated_by',
		'is_deleted',
		'deleted_time',
		'deleted_by',
		'name',
		'rate',
		'sales_account_id',
		'purchasing_account_id',
		'is_active',
	),
)); ?>
