<?php
/* @var $this ContactCategoryController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Contact Categories',
);

$this->menu=array(
	array('label'=>'Create ContactCategory', 'url'=>array('create')),
	array('label'=>'Manage ContactCategory', 'url'=>array('admin')),
);
?>

<h1>Contact Categories</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
