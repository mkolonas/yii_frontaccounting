<?php
/* @var $this ShippingCompanyController */
/* @var $model ShippingCompany */

$this->breadcrumbs=array(
	'Shipping Companies'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List ShippingCompany', 'url'=>array('index')),
	array('label'=>'Create ShippingCompany', 'url'=>array('create')),
	array('label'=>'Update ShippingCompany', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ShippingCompany', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ShippingCompany', 'url'=>array('admin')),
);
?>

<h1>View ShippingCompany #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'created_time',
		'created_by',
		'updated_time',
		'updated_by',
		'is_deleted',
		'deleted_time',
		'deleted_by',
		'name',
		'phone1',
		'phone2',
		'contact',
		'address',
		'is_active',
	),
)); ?>
