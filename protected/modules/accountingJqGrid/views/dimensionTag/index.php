<?php
/* @var $this DimensionTagController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Dimension Tag Associations',
);

$this->menu=array(
	array('label'=>'Create DimensionTagAssociation', 'url'=>array('create')),
	array('label'=>'Manage DimensionTagAssociation', 'url'=>array('admin')),
);
?>

<h1>Dimension Tag Associations</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
