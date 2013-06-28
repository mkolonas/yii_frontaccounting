<?php
/* @var $this BankAccountController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Bank Accounts',
);

$this->menu=array(
	array('label'=>'Create BankAccount', 'url'=>array('create')),
	array('label'=>'Manage BankAccount', 'url'=>array('admin')),
);
?>

<h1>Bank Accounts</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
