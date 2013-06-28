<?php
/* @var $this MeasureUnitController */
/* @var $model MeasureUnit */

$this->breadcrumbs=array(
	'Measure Units'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List MeasureUnit', 'url'=>array('index')),
	array('label'=>'Create MeasureUnit', 'url'=>array('create')),
	array('label'=>'Update MeasureUnit', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete MeasureUnit', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MeasureUnit', 'url'=>array('admin')),
);
?>

<h1>View MeasureUnit #<?php echo $model->id; ?></h1>

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
		'code',
		'name',
		'decimals',
		'is_active',
	),
)); ?>
