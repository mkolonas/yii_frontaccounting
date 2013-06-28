<?php
/* @var $this DimensionTagController */
/* @var $model DimensionTagAssociation */

$this->breadcrumbs=array(
	'Dimension Tag Associations'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List DimensionTagAssociation', 'url'=>array('index')),
	array('label'=>'Create DimensionTagAssociation', 'url'=>array('create')),
	array('label'=>'Update DimensionTagAssociation', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete DimensionTagAssociation', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DimensionTagAssociation', 'url'=>array('admin')),
);
?>

<h1>View DimensionTagAssociation #<?php echo $model->id; ?></h1>

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
		'dimension_id',
		'tag_id',
	),
)); ?>
