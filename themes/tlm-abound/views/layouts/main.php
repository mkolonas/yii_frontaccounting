<?php
/**
 * @var $this Controller
 * @var $content the string of responce
 */
$themeBaseUrl = Yii::app()->theme->baseUrl;
$cs = Yii::app()->getClientScript();
Yii::app()->clientScript->registerCoreScript('jquery');

if (isset($this->module)) {
    $moduleName = $this->module->getName();
} else {
    $moduleName = 'app';
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta charset="utf-8"/>
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="<?php echo $themeBaseUrl;?>/js/html5.js"></script>
        <![endif]-->

        <!-- Fav and Touch and touch icons -->
        <link rel="shortcut icon" href="<?php echo $themeBaseUrl; ?>/img/icons/favicon.ico"/>
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo $themeBaseUrl; ?>/img/icons/apple-touch-icon-144-precomposed.png"/>
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo $themeBaseUrl; ?>/img/icons/apple-touch-icon-72-precomposed.png"/>
        <link rel="apple-touch-icon-precomposed" href="<?php echo $themeBaseUrl; ?>/img/icons/apple-touch-icon-57-precomposed.png"/>

        <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $themeBaseUrl; ?>/css/bootstrap.css"/>
        <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $themeBaseUrl; ?>/css/abound.css"/>

        <!-- styles for style switcher -->
        <link rel="stylesheet"           type="text/css" media="screen" title="style1" href="<?php echo $themeBaseUrl; ?>/css/style-blue.css" />
        <link rel="alternate stylesheet" type="text/css" media="screen" title="style2" href="<?php echo $themeBaseUrl; ?>/css/style-brown.css" />
        <link rel="alternate stylesheet" type="text/css" media="screen" title="style3" href="<?php echo $themeBaseUrl; ?>/css/style-green.css" />
        <link rel="alternate stylesheet" type="text/css" media="screen" title="style4" href="<?php echo $themeBaseUrl; ?>/css/style-grey.css" />
        <link rel="alternate stylesheet" type="text/css" media="screen" title="style5" href="<?php echo $themeBaseUrl; ?>/css/style-orange.css" />
        <link rel="alternate stylesheet" type="text/css" media="screen" title="style6" href="<?php echo $themeBaseUrl; ?>/css/style-purple.css" />
        <link rel="alternate stylesheet" type="text/css" media="screen" title="style7" href="<?php echo $themeBaseUrl; ?>/css/style-red.css" />

        <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $themeBaseUrl; ?>/css/tlm-abound.css"/>
        <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $themeBaseUrl; ?>/css/global.css"/>
        <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $themeBaseUrl; ?>/css/<?php echo $moduleName ?>.css"/>
        <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $themeBaseUrl; ?>/css/<?php echo $moduleName .'/'. $this->id ?>.css"/>
        <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $themeBaseUrl; ?>/css/<?php echo $moduleName .'/'. $this->id .'/'. $this->action->id ?>.css"/>

        <?php
        $cs->registerScriptFile($themeBaseUrl . '/js/bootstrap.js');
        $cs->registerScriptFile($themeBaseUrl . '/js/plugins/jquery.sparkline.js'); // not always used
        $cs->registerScriptFile($themeBaseUrl . '/js/plugins/jquery.flot.min.js'); // not always used
        $cs->registerScriptFile($themeBaseUrl . '/js/plugins/jquery.flot.pie.min.js'); // not always used
        $cs->registerScriptFile($themeBaseUrl . '/js/charts.js');
        $cs->registerScriptFile($themeBaseUrl . '/js/plugins/jquery.knob.js'); // not always used
        $cs->registerScriptFile($themeBaseUrl . '/js/plugins/jquery.masonry.min.js');
        $cs->registerScriptFile($themeBaseUrl . '/js/styleswitcher.js');
        ?>
    </head>

    <body>
        <section id="navigation-main">
            <div class="navbar navbar-inverse navbar-fixed-top">
                <div class="navbar-inner">
                    <div class="container">
                        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </a>

                        <a class="brand" href="#"><?php echo CHtml::encode(Yii::app()->name); ?></a>

                        <div class="nav-collapse">
                            <?php $this->renderPartial('//layouts/_extendedNavigation') ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="subnav navbar navbar-fixed-top">
                <div class="navbar-inner">
                    <div class="container">

                        <div class="style-switcher pull-left">
                            <a href="javascript:chooseStyle('none', 60)" checked="checked"><span class="style" style="background-color:#0088CC;"></span></a>
                            <a href="javascript:chooseStyle('style2', 60)"><span class="style" style="background-color:#7c5706;"></span></a>
                            <a href="javascript:chooseStyle('style3', 60)"><span class="style" style="background-color:#468847;"></span></a>
                            <a href="javascript:chooseStyle('style4', 60)"><span class="style" style="background-color:#4e4e4e;"></span></a>
                            <a href="javascript:chooseStyle('style5', 60)"><span class="style" style="background-color:#d85515;"></span></a>
                            <a href="javascript:chooseStyle('style6', 60)"><span class="style" style="background-color:#a00a69;"></span></a>
                            <a href="javascript:chooseStyle('style7', 60)"><span class="style" style="background-color:#a30c22;"></span></a>
                        </div>
                        <form class="navbar-search pull-right" action="">

                            <input type="text" class="search-query span2" placeholder="Search">

                        </form>
                    </div><!-- container -->
                </div><!-- navbar-inner -->
            </div><!-- subnav -->
        </section>

        <section class="main-body">
            <div class="container-fluid">
                <?php echo $content; ?>
            </div>
        </section>

        <?php require_once('tpl_footer.php') ?>
    </body>
</html>