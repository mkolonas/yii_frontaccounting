<?php
/* @var $this TaxGroupController */
/* @var $model TaxGroup */

$this->breadcrumbs=array(
	'Tax Groups'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TaxGroup', 'url'=>array('index')),
	array('label'=>'Manage TaxGroup', 'url'=>array('admin')),
);
?>

<h1>Create TaxGroup</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>