<?php
/* @var $this ContactCategoryController */
/* @var $model ContactCategory */

$this->breadcrumbs=array(
	'Contact Categories'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ContactCategory', 'url'=>array('index')),
	array('label'=>'Create ContactCategory', 'url'=>array('create')),
	array('label'=>'View ContactCategory', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ContactCategory', 'url'=>array('admin')),
);
?>

<h1>Update ContactCategory <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>