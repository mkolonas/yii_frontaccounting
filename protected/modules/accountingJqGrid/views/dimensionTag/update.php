<?php
/* @var $this DimensionTagController */
/* @var $model DimensionTagAssociation */

$this->breadcrumbs=array(
	'Dimension Tag Associations'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List DimensionTagAssociation', 'url'=>array('index')),
	array('label'=>'Create DimensionTagAssociation', 'url'=>array('create')),
	array('label'=>'View DimensionTagAssociation', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage DimensionTagAssociation', 'url'=>array('admin')),
);
?>

<h1>Update DimensionTagAssociation <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>