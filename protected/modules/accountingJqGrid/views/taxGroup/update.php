<?php
/* @var $this TaxGroupController */
/* @var $model TaxGroup */

$this->breadcrumbs=array(
	'Tax Groups'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TaxGroup', 'url'=>array('index')),
	array('label'=>'Create TaxGroup', 'url'=>array('create')),
	array('label'=>'View TaxGroup', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TaxGroup', 'url'=>array('admin')),
);
?>

<h1>Update TaxGroup <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>