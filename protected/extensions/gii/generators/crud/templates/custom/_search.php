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
?>

<div class="wide form">

<?php echo "<?php \$form=\$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl(\$this->route),
	'method'=>'get',
)); ?>\n"; ?>

<?php foreach($this->tableSchema->columns as $column): ?>
<?php
	$field=$this->generateInputField($this->modelClass,$column);
	if(strpos($field,'password')!==false)
		continue;
	if(substr(strtolower($column->name),-7)=='_status')
	{
		$label=str_replace(
			array('_status','_'),
			array('',' '),
			$column->name
		);
		$label=ucwords($label);
		$column->type='boolean';
?>
	<div class="row">
		<?php echo "<?php echo \$form->label(\$model,'{$column->name}',array('label'=>'$label')); ?>\n"; ?>
		<?php echo "<?php echo \$form->dropDownList(\$model,'{$column->name}',array(''=>'',0=>'no',1=>'yes')); ?>\n"; ?>
	</div>
<?php
		continue;
	}
?>
	<div class="row">
		<?php echo "<?php echo \$form->label(\$model,'{$column->name}'); ?>\n"; ?>
		<?php echo "<?php echo ".$this->generateActiveField($this->modelClass,$column)."; ?>\n"; ?>
	</div>

<?php endforeach; ?>
	<div class="row buttons">
		<?php echo "<?php echo CHtml::submitButton('Search'); ?>\n"; ?>
	</div>

<?php echo "<?php \$this->endWidget(); ?>\n"; ?>

</div><!-- search-form -->