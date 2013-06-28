<?php
/* @var $this TaxTypeController */
/* @var $model TaxType */

$this->breadcrumbs=array(
	'Tax Types'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TaxType', 'url'=>array('index')),
	array('label'=>'Create TaxType', 'url'=>array('create')),
	array('label'=>'View TaxType', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TaxType', 'url'=>array('admin')),
);
?>

<h1>Update TaxType <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>