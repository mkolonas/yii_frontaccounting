<?php
/* @var $this ContactCategoryController */
/* @var $model ContactCategory */

$this->breadcrumbs=array(
	'Contact Categories'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List ContactCategory', 'url'=>array('index')),
	array('label'=>'Create ContactCategory', 'url'=>array('create')),
	array('label'=>'Update ContactCategory', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ContactCategory', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ContactCategory', 'url'=>array('admin')),
);
?>

<h1>View ContactCategory #<?php echo $model->id; ?></h1>

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
		'contact_entity_id',
		'description',
		'as_system',
		'is_active',
	),
)); ?>
