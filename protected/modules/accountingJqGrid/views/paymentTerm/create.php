<?php
/* @var $this PaymentTermController */
/* @var $model PaymentTerm */

$this->breadcrumbs=array(
	'Payment Terms'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PaymentTerm', 'url'=>array('index')),
	array('label'=>'Manage PaymentTerm', 'url'=>array('admin')),
);
?>

<h1>Create PaymentTerm</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>