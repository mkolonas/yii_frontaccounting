<?php
/**
 * @var $this Controller
 * @var $themeBaseUrl theme base url
 * @var $moduleName the module name. If the controller belongs to application, then the module is 'app'.
 * @var $content the string of responce
 * @var $userModuleMenu the user module menu
 * @var $mainModuleMenu the main module menu
 * @var $extendedModuleMenu the extended module menu
 */
$themeBaseUrl = Yii::app()->theme->baseUrl;

if (isset($this->module)) {
    $moduleName = $this->module->id;
    Yii::import('application.modules.' . $moduleName . '.components.ModuleMenu');
} else {
    $moduleName = 'app';
}

$userModuleMenu = array();
$mainModuleMenu = array();
$extendedModuleMenu = array();

if (isset(Yii::$classMap['ModuleMenu']) and is_file(Yii::$classMap['ModuleMenu'])) {
    $userModuleMenu = ModuleMenu::getUserMenu();
    $mainModuleMenu = ModuleMenu::getMainMenu();
    $extendedModuleMenu = ModuleMenu::getExtendedMenu();
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="language" content="en" />

    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $themeBaseUrl; ?>/css/web-app-theme/base.css"/>
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $themeBaseUrl; ?>/css/web-app-theme/themes/default/style.css"/>
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $themeBaseUrl; ?>/css/dc-mega-menu/black.css" />

    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $themeBaseUrl; ?>/css/tlm-web-app-theme.css"/>
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $themeBaseUrl; ?>/css/global.css"/>
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $themeBaseUrl; ?>/css/<?php echo $moduleName ?>.css"/>
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $themeBaseUrl; ?>/css/<?php echo $moduleName .'/'. $this->id ?>.css"/>
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $themeBaseUrl; ?>/css/<?php echo $moduleName .'/'. $this->id .'/'. $this->action->id ?>.css"/>

    <script type='text/javascript' src='<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.hoverIntent.js'></script>
    <script type='text/javascript' src='<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.dcmegamenu.1.3.3.js'></script>
</head>

<body>

<div class="container">

    <div id="header">
        <h1><?php echo CHtml::encode(Yii::app()->name); ?></h1>
        <?php if (!Yii::app()->user->isGuest):?>
        <div id="user-navigation">
        <?php
        try {
            $this->renderPartial('//layouts/_userNavigation', array('moduleMenu' => $userModuleMenu));
        } catch (Exception $e) {
            // do nothing
        }
        ?>
        </div>
        <?php endif;?>
        <div id="main-navigation">
        <?php
        try {
            $this->renderPartial('//layouts/_mainNavigation', array('moduleMenu' => $mainModuleMenu));
        } catch (Exception $e) {
            // do nothing
        }
        ?>
        </div>
    </div><!-- header -->

    <?php if (!Yii::app()->user->isGuest):?>
    <div class="black">
        <?php
        try {
            $this->renderPartial('//layouts/_extendedNavigation', array('moduleMenu' => $extendedModuleMenu));
        } catch (Exception $e) {
            // do nothing
        }
        ?>
    </div>
    <?php endif;?>

    <div id="wrapper">
        <?php echo $content; ?>
    </div>

    <div class="clear"></div>

    <div id="footer">
        Copyright &copy; <?php echo date('Y').' '.Yii::app()->params['companyName']; ?><br/>
        All Rights Reserved.<br/>
        <?php echo Yii::powered(); ?>
    </div><!-- footer -->

</div><!-- page -->
<?php
if (isset(Yii::app()->params['extendedNavigationColumn']))
    $rowItem = Yii::app()->params['extendedNavigationColumn'];
else
    $rowItem = 3;

Yii::app()->clientScript->registerScript(
    'convert-main-menu',
    "$('.black > ul').dcMegaMenu({
        rowItems: '".$rowItem."',
        speed: 0,
        effect: 'slide'
    });"
);

Yii::app()->clientScript->registerScript(
    'remove-blank-sidebar',
    "portletCount = $('.container #wrapper #sidebar .portlet').size();
    
    if(!portletCount) {
        sidebar = $('.container #wrapper #sidebar');
        if(sidebar.size()) {
            sidebar.remove();
        }
    }"
);

Yii::app()->clientScript->registerScript(
    'adjust-width',
    "wrapper = $('#wrapper');
    wOuter = wrapper.outerWidth() - wrapper.width();
    calculatedWidth = wOuter + $('#content').outerWidth() + $('#sidebar').outerWidth();
    defaultVal = $('body').width();
    if(calculatedWidth > defaultVal) {
        header = $('#header');
        hOuter = header.outerWidth() - header.width();
        header.width(calculatedWidth - hOuter);

        black = $('.black');
        bOuter = black.outerWidth() - black.width();
        black.width(calculatedWidth - bOuter);
    
        footer = $('#footer');
        fOuter = footer.outerWidth() - footer.width();
        footer.width(calculatedWidth - fOuter);
    }"
);
?>
</body>
</html>
