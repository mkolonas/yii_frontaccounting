<?php
/* @var $this ContactCategoryController */
/* @var $model ContactCategory */

$this->breadcrumbs=array(
	'Contact Categories'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ContactCategory', 'url'=>array('index')),
	array('label'=>'Manage ContactCategory', 'url'=>array('admin')),
);
?>

<h1>Create ContactCategory</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>