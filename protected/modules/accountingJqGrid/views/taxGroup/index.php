<?php
/* @var $this TaxGroupController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tax Groups',
);

$this->menu=array(
	array('label'=>'Create TaxGroup', 'url'=>array('create')),
	array('label'=>'Manage TaxGroup', 'url'=>array('admin')),
);
?>

<h1>Tax Groups</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
