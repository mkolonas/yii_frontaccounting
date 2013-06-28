<?php
/* @var $this TaxGroupController */
/* @var $model TaxGroup */

$this->breadcrumbs=array(
	'Tax Groups'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List TaxGroup', 'url'=>array('index')),
	array('label'=>'Create TaxGroup', 'url'=>array('create')),
	array('label'=>'Update TaxGroup', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TaxGroup', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TaxGroup', 'url'=>array('admin')),
);
?>

<h1>View TaxGroup #<?php echo $model->id; ?></h1>

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
		'as_tax_shipping',
		'is_active',
	),
)); ?>
