<?php
/* @var $this WorkcenterController */
/* @var $model WorkCenter */

$this->breadcrumbs=array(
	'Work Centers'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List WorkCenter', 'url'=>array('index')),
	array('label'=>'Manage WorkCenter', 'url'=>array('admin')),
);
?>

<h1>Create WorkCenter</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>