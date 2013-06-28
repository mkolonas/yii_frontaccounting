<?php
/* @var $this AttachmentController */
/* @var $model Attachment */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'attachment-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'created_time'); ?>
		<?php echo $form->textField($model,'created_time'); ?>
		<?php echo $form->error($model,'created_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'created_by'); ?>
		<?php echo $form->textField($model,'created_by'); ?>
		<?php echo $form->error($model,'created_by'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'updated_time'); ?>
		<?php echo $form->textField($model,'updated_time'); ?>
		<?php echo $form->error($model,'updated_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'updated_by'); ?>
		<?php echo $form->textField($model,'updated_by'); ?>
		<?php echo $form->error($model,'updated_by'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'is_deleted'); ?>
		<?php echo $form->textField($model,'is_deleted'); ?>
		<?php echo $form->error($model,'is_deleted'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'deleted_time'); ?>
		<?php echo $form->textField($model,'deleted_time'); ?>
		<?php echo $form->error($model,'deleted_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'deleted_by'); ?>
		<?php echo $form->textField($model,'deleted_by'); ?>
		<?php echo $form->error($model,'deleted_by'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'transaction_type_id'); ?>
		<?php echo $form->textField($model,'transaction_type_id'); ?>
		<?php echo $form->error($model,'transaction_type_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'transaction_no'); ?>
		<?php echo $form->textField($model,'transaction_no'); ?>
		<?php echo $form->error($model,'transaction_no'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'unique_name'); ?>
		<?php echo $form->textField($model,'unique_name',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'unique_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'transaction_date'); ?>
		<?php echo $form->textField($model,'transaction_date'); ?>
		<?php echo $form->error($model,'transaction_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'file_name'); ?>
		<?php echo $form->textField($model,'file_name',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'file_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'file_size'); ?>
		<?php echo $form->textField($model,'file_size'); ?>
		<?php echo $form->error($model,'file_size'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'file_type'); ?>
		<?php echo $form->textField($model,'file_type',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'file_type'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->