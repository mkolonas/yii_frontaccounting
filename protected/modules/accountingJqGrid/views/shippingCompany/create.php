<?php
/* @var $this ShippingCompanyController */
/* @var $model ShippingCompany */

$this->breadcrumbs=array(
	'Shipping Companies'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ShippingCompany', 'url'=>array('index')),
	array('label'=>'Manage ShippingCompany', 'url'=>array('admin')),
);
?>

<h1>Create ShippingCompany</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>