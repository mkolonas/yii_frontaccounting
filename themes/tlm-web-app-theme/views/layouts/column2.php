<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div id="content">
	<?php
		foreach(Yii::app()->user->getFlashes() as $key => $message) {
			echo '<div class="flash-' . $key . '">' . $message . "</div>\n";
		}
		echo $content;
	?>
</div><!-- content -->
<div id="sidebar">
	<?php
		if(count($this->menuContent))
			$items=$this->menuContent;
		elseif(count($this->menu))
			$items=$this->menu;
		else
			$items=array();

		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>$this->menuTitle,
		));
		$this->widget('zii.widgets.CMenu', array(
			'items'=>$items,
			'htmlOptions'=>array('class'=>'operations'),
		));
		$this->endWidget();
	?>
</div><!-- sidebar -->
<?php $this->endContent(); ?>