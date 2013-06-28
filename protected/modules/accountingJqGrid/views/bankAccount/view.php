<?php
/* @var $this BankAccountController */
/* @var $model BankAccount */

$this->breadcrumbs=array(
	'Bank Accounts'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List BankAccount', 'url'=>array('index')),
	array('label'=>'Create BankAccount', 'url'=>array('create')),
	array('label'=>'Update BankAccount', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete BankAccount', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage BankAccount', 'url'=>array('admin')),
);
?>

<h1>View BankAccount #<?php echo $model->id; ?></h1>

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
		'gl_account_id',
		'bank_account_type_id',
		'account_name',
		'account_number',
		'bank_name',
		'address',
		'currency_id',
		'as_default_currency_account',
		'last_reconciled_date',
		'ending_reconcile_balance',
		'is_active',
	),
)); ?>
