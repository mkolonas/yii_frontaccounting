<?php
/* @var $this PaymentTermController */
/* @var $model PaymentTerm */

$this->breadcrumbs=array(
	'Payment Terms'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List PaymentTerm', 'url'=>array('index')),
	array('label'=>'Create PaymentTerm', 'url'=>array('create')),
	array('label'=>'View PaymentTerm', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage PaymentTerm', 'url'=>array('admin')),
);
?>

<h1>Update PaymentTerm <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>