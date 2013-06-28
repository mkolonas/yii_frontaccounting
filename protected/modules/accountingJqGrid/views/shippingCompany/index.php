<?php
/* @var $this ShippingCompanyController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Shipping Companies',
);

$this->menu=array(
	array('label'=>'Create ShippingCompany', 'url'=>array('create')),
	array('label'=>'Manage ShippingCompany', 'url'=>array('admin')),
);
?>

<h1>Shipping Companies</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
