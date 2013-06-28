<?php
/* @var $this TaxTypeController */
/* @var $model TaxType */

$this->breadcrumbs=array(
	'Tax Types'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TaxType', 'url'=>array('index')),
	array('label'=>'Manage TaxType', 'url'=>array('admin')),
);
?>

<h1>Create TaxType</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>