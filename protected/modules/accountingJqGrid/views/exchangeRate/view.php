<?php
/* @var $this ExchangeRateController */
/* @var $model ExchangeRate */

$this->breadcrumbs=array(
	'Exchange Rates'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ExchangeRate', 'url'=>array('index')),
	array('label'=>'Create ExchangeRate', 'url'=>array('create')),
	array('label'=>'Update ExchangeRate', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ExchangeRate', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ExchangeRate', 'url'=>array('admin')),
);
?>

<h1>View ExchangeRate #<?php echo $model->id; ?></h1>

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
		'currency_id',
		'rate_buy',
		'rate_sell',
		'date',
	),
)); ?>
