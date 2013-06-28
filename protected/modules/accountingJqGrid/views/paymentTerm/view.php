<?php
/* @var $this PaymentTermController */
/* @var $model PaymentTerm */

$this->breadcrumbs=array(
	'Payment Terms'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List PaymentTerm', 'url'=>array('index')),
	array('label'=>'Create PaymentTerm', 'url'=>array('create')),
	array('label'=>'Update PaymentTerm', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete PaymentTerm', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PaymentTerm', 'url'=>array('admin')),
);
?>

<h1>View PaymentTerm #<?php echo $model->id; ?></h1>

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
		'payment_term_type_id',
		'days',
		'is_active',
	),
)); ?>
