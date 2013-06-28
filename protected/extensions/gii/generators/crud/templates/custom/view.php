<?php
/**
 * The following variables are available in this template:
 * - $this: the CrudCode object
 */
?>
<?php echo "<?php\n"; ?>
/* @var $this <?php echo $this->getControllerClass(); ?> */
/* @var $model <?php echo $this->getModelClass(); ?> */

<?php
$nameColumn=$this->guessNameColumn($this->tableSchema->columns);
$label=$this->class2name($this->getControllerID());
echo "\$this->breadcrumbs=array(
	'$label'=>array('admin'),
	\$model->{$nameColumn},
);\n";
?>

$this->menu=array(
	array('label'=>'List <?php echo $label; ?>', 'url'=>array('index')),
	array('label'=>'Create <?php echo $label; ?>', 'url'=>array('create')),
	array('label'=>'Update <?php echo $label; ?>', 'url'=>array('update', 'id'=>$model-><?php echo $this->tableSchema->primaryKey; ?>)),
	array('label'=>'Delete <?php echo $label; ?>', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model-><?php echo $this->tableSchema->primaryKey; ?>),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage <?php echo $label; ?>', 'url'=>array('admin')),
);
?>

<h1>View <?php echo $label." #<?php echo \$model->{$this->tableSchema->primaryKey}; ?>"; ?></h1>

<?php
$withClause=null;
foreach($this->tableSchema->foreignKeys as $fk)
{
	$fTableName=$fk[0];
	$fClassName=str_replace(' ','',ucwords(str_replace('_',' ',$fTableName)));
	$fRelationName=lcfirst($fClassName);
	$withClause
		? $withClause.=",'".$fRelationName."'"
		: $withClause="'".$fRelationName."'";
}
if($withClause)
	$withClause='->with('.$withClause.')';
?>
<?php echo "<?php"; ?> $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model<?php echo $withClause; ?>,
	'attributes'=>array(
<?php
foreach($this->tableSchema->columns as $column)
{
	if(in_array($column->name, array_keys($this->tableSchema->foreignKeys)))
	{
		$fTableName=$this->tableSchema->foreignKeys[$column->name][0];
		$fClassName=str_replace(' ','',ucwords(str_replace('_',' ',$fTableName)));
		$fRelationName=lcfirst($fClassName);
		$fClass=CActiveRecord::model($fClassName);
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
		echo "\t\t\t'label'=>\$model->getAttributeLabel('".$column->name."'),\n";
    
		if($replacementColumn)
			echo "\t\t\t'value'=>\$model->$fRelationName->".$replacementColumn.",\n";
		else
			echo "\t\t\t'value'=>\$model->".$column->name.",    // please modify this, the generator can't resolve it.\n";
    
		echo "\t\t),\n";
	}
	elseif(substr(strtolower($column->name),-7)=='_status')
	{
		echo "\t\tarray(\n";
		echo "\t\t\t'label'=>\$model->getAttributeLabel('".$column->name."'),\n";
		echo "\t\t\t'value'=>\$model->".$column->name."?\"yes\":\"no\",\n";
		echo "\t\t),\n";
	}
	else
		echo "\t\t'".$column->name."',\n";
}
?>
	),
)); ?>
