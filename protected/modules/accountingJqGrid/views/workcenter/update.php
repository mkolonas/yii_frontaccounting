<?php
/* @var $this WorkcenterController */
/* @var $model WorkCenter */

$this->breadcrumbs=array(
	'Work Centers'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List WorkCenter', 'url'=>array('index')),
	array('label'=>'Create WorkCenter', 'url'=>array('create')),
	array('label'=>'View WorkCenter', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage WorkCenter', 'url'=>array('admin')),
);
?>

<h1>Update WorkCenter <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>