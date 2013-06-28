<?php
/* @var $this WorkcenterController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Work Centers',
);

$this->menu=array(
	array('label'=>'Create WorkCenter', 'url'=>array('create')),
	array('label'=>'Manage WorkCenter', 'url'=>array('admin')),
);
?>

<h1>Work Centers</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
