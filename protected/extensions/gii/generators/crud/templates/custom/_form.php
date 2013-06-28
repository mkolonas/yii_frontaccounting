<?php
/**
 * The following variables are available in this template:
 * - $this: the CrudCode object
 */
?>
<?php echo "<?php\n"; ?>
/* @var $this <?php echo $controllerName=$this->getControllerClass(); ?> */
/* @var $model <?php echo $modelName=$this->getModelClass(); ?> */
/* @var $form CActiveForm */

<?php
$fNamePair=array();
$fClassPair=array();
$model=new $modelName;

foreach($fRelation=$model->relations() as $fRelationName=>$fArray){
	if($fArray[0]==$model::BELONGS_TO) {
		echo '$'.lcfirst($fArray[1])."ArrObj=CActiveRecord::model('".$fArray[1]."')->findAll();\n";
		echo '$'.lcfirst($fRelationName)."Filter=array();\n";
		echo 'foreach($'.lcfirst($fArray[1])."ArrObj as \$item) {\n";
		echo "\t$".lcfirst($fRelationName)."Filter[\$item->id]=\$item->name;\n";
		echo "}\n\n";
	}

	$columnName=$fArray[2];
	$fNamePair[$columnName]=$fRelationName;
	$fClassPair[$columnName]=$fArray[1];
}


?>
?>

<div class="form">

<?php echo "<?php \$form=\$this->beginWidget('CActiveForm', array(
	'id'=>'".$this->class2id($this->modelClass)."-form',
	'enableAjaxValidation'=>false,
)); ?>\n"; ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo "<?php echo \$form->errorSummary(\$model); ?>\n"; ?>

<?php
foreach($this->tableSchema->columns as $column)
{
	if($column->autoIncrement)
		continue;
	elseif(substr(strtolower($column->name),-7)=='_status')
	{
		$label=str_replace(
			array('_status','_'),
			array('',' '),
			$column->name
		);
		$label=ucwords($label);
?>
	<div class="row">
		<?php echo "<?php echo ".$this->generateActiveLabel($this->modelClass,$column)."; ?>\n"; ?>
		<?php echo "<?php echo \$form->dropDownList(\$model,'{$column->name}',array(0=>'no',1=>'yes')); ?>\n"; ?>
		<?php echo "<?php echo \$form->error(\$model,'{$column->name}'); ?>\n"; ?>
	</div>
<?php
	}
	elseif(array_key_exists($column->name, $fNamePair))
	{
?>
	<div class="row">
		<?php echo "<?php echo ".$this->generateActiveLabel($this->modelClass,$column)."; ?>\n"; ?>
		<?php echo "<?php echo \$form->dropDownList(\$model,'{$column->name}',\$".$fNamePair[$column->name]."Filter); ?>\n"; ?>
		<?php echo "<?php echo \$form->error(\$model,'{$column->name}'); ?>\n"; ?>
	</div>
<?php
	}
	else
	{
?>
	<div class="row">
		<?php echo "<?php echo ".$this->generateActiveLabel($this->modelClass,$column)."; ?>\n"; ?>
		<?php echo "<?php echo ".$this->generateActiveField($this->modelClass,$column)."; ?>\n"; ?>
		<?php echo "<?php echo \$form->error(\$model,'{$column->name}'); ?>\n"; ?>
	</div>
<?php
	}
}
?>
	<div class="row buttons">
		<?php echo "<?php echo CHtml::submitButton(\$model->isNewRecord ? 'Create' : 'Save'); ?>\n"; ?>
	</div>

<?php echo "<?php \$this->endWidget(); ?>\n"; ?>

</div><!-- form -->

<?php
$datePickerList=null;
foreach($this->tableSchema->columns as $column)
{
	if($column->dbType=='date' or $column->dbType=='datetime' or $column->dbType=='timestamp')
	{
		$datePickerList="$('#{$modelName}_{$column->name}').datepicker({dateFormat: 'yy-mm-dd'});\n";
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