<?php
/* @var $this BankAccountController */
/* @var $model BankAccount */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'bank-account-form',
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
		<?php echo $form->labelEx($model,'gl_account_id'); ?>
		<?php echo $form->textField($model,'gl_account_id'); ?>
		<?php echo $form->error($model,'gl_account_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bank_account_type_id'); ?>
		<?php echo $form->textField($model,'bank_account_type_id'); ?>
		<?php echo $form->error($model,'bank_account_type_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'account_name'); ?>
		<?php echo $form->textField($model,'account_name',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'account_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'account_number'); ?>
		<?php echo $form->textField($model,'account_number',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'account_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bank_name'); ?>
		<?php echo $form->textField($model,'bank_name',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'bank_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'address'); ?>
		<?php echo $form->textArea($model,'address',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'currency_id'); ?>
		<?php echo $form->textField($model,'currency_id'); ?>
		<?php echo $form->error($model,'currency_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'as_default_currency_account'); ?>
		<?php echo $form->textField($model,'as_default_currency_account'); ?>
		<?php echo $form->error($model,'as_default_currency_account'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'last_reconciled_date'); ?>
		<?php echo $form->textField($model,'last_reconciled_date'); ?>
		<?php echo $form->error($model,'last_reconciled_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ending_reconcile_balance'); ?>
		<?php echo $form->textField($model,'ending_reconcile_balance'); ?>
		<?php echo $form->error($model,'ending_reconcile_balance'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'is_active'); ?>
		<?php echo $form->textField($model,'is_active'); ?>
		<?php echo $form->error($model,'is_active'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->