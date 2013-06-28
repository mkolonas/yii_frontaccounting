<?php
/* @var $this MeasureUnitController */
/* @var $model MeasureUnit */

$this->breadcrumbs=array(
	'Measure Units'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List MeasureUnit', 'url'=>array('index')),
	array('label'=>'Manage MeasureUnit', 'url'=>array('admin')),
);
?>

<h1>Create MeasureUnit</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>