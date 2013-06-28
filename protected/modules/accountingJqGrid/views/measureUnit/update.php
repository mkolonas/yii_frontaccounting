<?php
/* @var $this MeasureUnitController */
/* @var $model MeasureUnit */

$this->breadcrumbs=array(
	'Measure Units'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List MeasureUnit', 'url'=>array('index')),
	array('label'=>'Create MeasureUnit', 'url'=>array('create')),
	array('label'=>'View MeasureUnit', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage MeasureUnit', 'url'=>array('admin')),
);
?>

<h1>Update MeasureUnit <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>