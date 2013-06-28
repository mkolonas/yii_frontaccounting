<?php
/* @var $this BankAccountController */
/* @var $data BankAccount */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_time')); ?>:</b>
	<?php echo CHtml::encode($data->created_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_by')); ?>:</b>
	<?php echo CHtml::encode($data->created_by); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updated_time')); ?>:</b>
	<?php echo CHtml::encode($data->updated_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updated_by')); ?>:</b>
	<?php echo CHtml::encode($data->updated_by); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_deleted')); ?>:</b>
	<?php echo CHtml::encode($data->is_deleted); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('deleted_time')); ?>:</b>
	<?php echo CHtml::encode($data->deleted_time); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('deleted_by')); ?>:</b>
	<?php echo CHtml::encode($data->deleted_by); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gl_account_id')); ?>:</b>
	<?php echo CHtml::encode($data->gl_account_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bank_account_type_id')); ?>:</b>
	<?php echo CHtml::encode($data->bank_account_type_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('account_name')); ?>:</b>
	<?php echo CHtml::encode($data->account_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('account_number')); ?>:</b>
	<?php echo CHtml::encode($data->account_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bank_name')); ?>:</b>
	<?php echo CHtml::encode($data->bank_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('address')); ?>:</b>
	<?php echo CHtml::encode($data->address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('currency_id')); ?>:</b>
	<?php echo CHtml::encode($data->currency_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('as_default_currency_account')); ?>:</b>
	<?php echo CHtml::encode($data->as_default_currency_account); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last_reconciled_date')); ?>:</b>
	<?php echo CHtml::encode($data->last_reconciled_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ending_reconcile_balance')); ?>:</b>
	<?php echo CHtml::encode($data->ending_reconcile_balance); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_active')); ?>:</b>
	<?php echo CHtml::encode($data->is_active); ?>
	<br />

	*/ ?>

</div>