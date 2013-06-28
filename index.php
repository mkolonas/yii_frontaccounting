<?php

$dirName = dirname(__FILE__);
if (is_file($yii = $dirName . '/framework/yii.php')) {
    // do nothing
} elseif (is_file($yii = $dirName . '/../framework/yii.php')) {
    // do nothing
} elseif (is_file($yii = $dirName . '/../../framework/yii.php')) {
    // do nothing
} elseif (is_file($yii = $dirName . '/../../_yii/framework/yii.php')) {
    // do nothing
}

if(isset($_SERVER['APPLICATION_ENV']) and $_SERVER['APPLICATION_ENV']=='development-tlm') {
    defined('YII_DEBUG') or define('YII_DEBUG',true);
    defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);
}

$config=dirname(__FILE__).'/protected/config/main.php';

require_once($yii);
Yii::createWebApplication($config)->run();
