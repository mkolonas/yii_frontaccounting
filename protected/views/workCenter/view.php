<?php
/* @var $this WorkCenterController */
/* @var $model WorkCenter */

$this->breadcrumbs=array(
	'Work Centers'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List WorkCenter', 'url'=>array('index')),
	array('label'=>'Create WorkCenter', 'url'=>array('create')),
	array('label'=>'Update WorkCenter', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete WorkCenter', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage WorkCenter', 'url'=>array('admin')),
);
?>

<h1>View WorkCenter #<?php echo $model->id; ?></h1>

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
		'description',
		'is_active',
	),
)); ?>
