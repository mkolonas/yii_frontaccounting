<?php
/* @var $this ShippingCompanyController */
/* @var $model ShippingCompany */

$this->breadcrumbs=array(
	'Shipping Companies'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ShippingCompany', 'url'=>array('index')),
	array('label'=>'Create ShippingCompany', 'url'=>array('create')),
	array('label'=>'View ShippingCompany', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ShippingCompany', 'url'=>array('admin')),
);
?>

<h1>Update ShippingCompany <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>