<?php
/**
 * The following variables are available in this template:
 * - $this: the CrudCode object
 */
?>
<?php echo "<?php\n"; ?>
/* @var $this <?php echo $controllerName=$this->getControllerClass(); ?> */
/* @var $model <?php echo $modelName=$this->getModelClass(); ?> */

<?php
$label=$this->class2name($this->getControllerID());
echo "\$this->breadcrumbs=array(
	'$label'=>array('admin'),
	'Manage',
);\n";
?>

$this->menu=array(
	array('label'=>'List <?php echo $label ?>', 'url'=>array('index')),
	array('label'=>'Create <?php echo $label ?>', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('<?php echo $this->class2id($this->getControllerID()); ?>-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage <?php echo $label ?></h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo "<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>"; ?>

<div class="search-form" style="display:none">
<?php echo "<?php \$this->renderPartial('_search',array(
	'model'=>\$model,
)); ?>\n"; ?>
</div><!-- search-form -->

<?php
$withClause=null;
$belongsToClause=null;
$fNamePair=array();
$fClassPair=array();
$model=new $modelName;

foreach($fRelation=$model->relations() as $fRelationName=>$fArray){
	if($fArray[0]==$model::BELONGS_TO) {
		$withClause
			? $withClause.=",'".$fRelationName."'"
			: $withClause="'".$fRelationName."'";

		$belongsToClause.="\${$fRelationName}ArrObj=CActiveRecord::model('{$fArray[1]}')->findAll();\n";
		$belongsToClause.="\${$fRelationName}Filter=array();\n";
		$belongsToClause.="foreach(\${$fRelationName}ArrObj as \$item) {\n";
		$belongsToClause.="\t\${$fRelationName}Filter[\$item->id]=\$item->name;\n";
		$belongsToClause.="}\n\n";

	}
	$columnName=$fArray[2];
	$fNamePair[$columnName]=$fRelationName;
	$fClassPair[$columnName]=$fArray[1];
}

if($withClause)
	$withClause='->with('.$withClause.')';

echo "<?php\n";
echo $belongsToClause;
?>
$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'<?php echo $this->class2id($this->getControllerID()); ?>-grid',
	'dataProvider'=>$model<?php echo $withClause; ?>->search(),
	'filter'=>$model,
	'columns'=>array(
<?php
$count=0;
foreach($this->tableSchema->columns as $column)
{
	if(isset($fNamePair[$column->name]))
	{
		$fClass=CActiveRecord::model($fClassPair[$column->name]);
		$fTableColumns=$fClass->tableSchema->columns;
		
		$replacementColumn=null;
		foreach($fTableColumns as $fColumn)
		{
			if(strtolower($fColumn->name)=='name')
				$replacementColumn=$fColumn->name;
			elseif(strtolower($fColumn->name)=='title')
				$replacementColumn=$fColumn->name;
			elseif(strtolower($fColumn->name)=='description')
				$replacementColumn=$fColumn->name;
			elseif(strtolower($fColumn->name)=='desc')
				$replacementColumn=$fColumn->name;
			elseif(strtolower($fColumn->name)=='term')
				$replacementColumn=$fColumn->name;
		}
		
		echo "\t\tarray(\n";
		echo "\t\t\t'name'=>'".$column->name."',\n";

		if($replacementColumn)
		{
			echo "\t\t\t'value'=>'\$data->".$fNamePair[$column->name]."?\$data->".$fNamePair[$column->name]."->$replacementColumn:\"-\"',\n";
			echo "\t\t\t'filter'=>$".$fNamePair[$column->name]."Filter,\n";
		}
		else
			echo "\t\t\t'value'=>'\$data->".$column->name."',    // please modify this, the generator can't resolve it.\n";

		echo "\t\t),\n";
	}
	elseif(substr(strtolower($column->name),-7)=='_status')
	{
		echo "\t\tarray(\n";
		echo "\t\t\t'name'=>'".$column->name."',\n";
		echo "\t\t\t'value'=>'\$data->".$column->name."?\"yes\":\"no\"',\n";
		echo "\t\t\t'filter'=>array(0=>'no',1=>'yes'),\n";
		echo "\t\t),\n";
	}
	elseif($column->dbType=='date' or $column->dbType=='datetime' )
	{
		echo "\t\tarray(\n";
		echo "\t\t\t'name'=>'".$column->name."',\n";
		echo "\t\t\t'filterHtmlOptions'=>array('id'=>'".str_replace('_','-',$column->name)."'),\n";
		echo "\t\t),\n";
	}
	else
	{
		echo "\t\t'".$column->name."',\n";
	}
}
?>
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>


<?php
$datePickerList=null;
foreach($this->tableSchema->columns as $column)
{
	if($column->dbType=='date' or $column->dbType=='datetime' or $column->dbType=='timestamp')
	{
		$datePickerList="$('#".str_replace('_','-',$column->name)." input').datepicker({dateFormat: 'yy-mm-dd'});\n";
	}
}

if($datePickerList)
{
	echo "<?php\n";
	echo "\$baseUrl = Yii::app()->baseUrl;\n";
	echo "\$cs = Yii::app()->getClientScript();\n";
	echo "\$cs->registerScriptFile(\$baseUrl.'/js/jquery-ui/js/jquery-ui-1.9.2.custom.min.js');\n";
	echo "\$cs->registerCssFile(\$baseUrl.'/js/jquery-ui/css/start/jquery-ui-1.9.2.custom.min.css');\n\n";

	echo "Yii::app()->clientScript->registerScript('convert-date-picker', \"\n";
	echo $datePickerList;
	echo "\");\n";
	echo "?>\n";
}
?>