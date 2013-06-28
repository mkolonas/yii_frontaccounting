<?php
/* @var $this PaymentTermController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Payment Terms',
);

$this->menu=array(
	array('label'=>'Create PaymentTerm', 'url'=>array('create')),
	array('label'=>'Manage PaymentTerm', 'url'=>array('admin')),
);
?>

<h1>Payment Terms</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
