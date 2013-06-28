<?php
/* @var $this MeasureUnitController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Measure Units',
);

$this->menu=array(
	array('label'=>'Create MeasureUnit', 'url'=>array('create')),
	array('label'=>'Manage MeasureUnit', 'url'=>array('admin')),
);
?>

<h1>Measure Units</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
