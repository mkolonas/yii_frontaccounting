<?php
/* @var $this DimensionTagController */
/* @var $model DimensionTagAssociation */

$this->breadcrumbs=array(
	'Dimension Tag Associations'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List DimensionTagAssociation', 'url'=>array('index')),
	array('label'=>'Manage DimensionTagAssociation', 'url'=>array('admin')),
);
?>

<h1>Create DimensionTagAssociation</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>