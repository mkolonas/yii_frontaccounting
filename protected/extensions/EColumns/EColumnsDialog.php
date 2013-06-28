<?php

Yii::import('zii.widgets.jui.CJuiDialog');

class EColumnsDialog extends CJuiDialog
{
	private $_ecolumns;

	public $ecolumns = array();
	public $linkText = 'Layout';
	public $buttonCancelText='Close';
	public $buttonApplyText='Apply';
	public $buttonResetText='Reset';

	public function init()
	{
		//gridId is required
		if(empty($this->ecolumns['gridId'])) throw new CException('You must provide gridId');
		if($this->getId(false) === null)
			$this->setId($this->ecolumns['gridId'].'-ecolumns-dlg');

		//prepare EColumns params
		if($this->buttonApplyText)
			$this->ecolumns['buttonApply'] = CHtml::button($this->buttonApplyText, array('type' => 'submit', 'class' => 'apply', 'onclick' => '$("#'.$this->getId().'").dialog("close")', 'style' => 'float: left'));
		else
			$this->ecolumns['buttonApply'] = null;

		if($this->buttonResetText)
			$this->ecolumns['buttonReset'] = CHtml::button($this->buttonResetText, array('type'=>'button', 'class'=>'reset', 'style'=>'float:right;'));
		else
			$this->ecolumns['buttonReset'] = null;

		if($this->buttonCancelText)
			$this->ecolumns['buttonCancel'] = CHtml::button($this->buttonCancelText, array('type' => 'button', 'class' => 'close', 'onclick' => '$("#'.$this->getId().'").dialog("close"); return false;', 'style' => 'float: right'));
		else
			$this->ecolumns['buttonCancel'] = null;

		//create EColumns object
		$this->_ecolumns = $this->owner->createWidget('ext.ecolumns.EColumns', $this->ecolumns);

		parent::init();

		$this->_ecolumns->run();

		//handler for click on link
		yii::app()->clientScript->registerScript($this->getLinkId(), "
		   jQuery('#{$this->getLinkId()}').live('click', function() { jQuery('#{$this->getId()}').dialog('open'); return false; })
		", CClientScript::POS_READY);
	}

	public function columns()
	{
		return $this->_ecolumns->columns();
	}

	public function link()
	{
		return CHtml::button($this->linkText, array('class'=>'ecolumns-link', 'id'=>$this->getLinkId()));
	}

	public function getLinkId()
	{
	   return $this->getId().'-link';
	}
}
