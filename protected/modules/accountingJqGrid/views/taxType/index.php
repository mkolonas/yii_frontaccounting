<?php
/* @var $this TaxTypeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tax Types',
);

$this->menu=array(
	array('label'=>'Create TaxType', 'url'=>array('create')),
	array('label'=>'Manage TaxType', 'url'=>array('admin')),
);
?>

<h1>Tax Types</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
