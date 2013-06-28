<?php
/**
 * @var $this Controller
 * @var $content the string of responce
 */
$themeBaseUrl = Yii::app()->theme->baseUrl;

if (isset($this->module)) {
    $moduleName = $this->module->getName();
} else {
    $moduleName = 'app';
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $themeBaseUrl; ?>/css/tlm-classic.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $themeBaseUrl; ?>/css/global.css"/>
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $themeBaseUrl; ?>/css/<?php echo $moduleName ?>.css"/>
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $themeBaseUrl; ?>/css/<?php echo $moduleName .'/'. $this->id ?>.css"/>
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $themeBaseUrl; ?>/css/<?php echo $moduleName .'/'. $this->id .'/'. $this->action->id ?>.css"/>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->

	<div id="navmenu-h">
		<?php $this->renderPartial('//layouts/menu');?>
		<div style="clear:both;"></div>
	</div>
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php $this->widget('application.extensions.flash.Flash', array(
		'keys'=>array('success','error'),
		'htmlOptions'=>array('class'=>'flash'),
	)); ?><!-- flashes -->

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?><br />
		<?php echo Rights::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
