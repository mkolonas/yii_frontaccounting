<?php
/**
 * This is the bootstrap file for test application.
 * This file should be removed when the application is deployed for production.
 */

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

$config=dirname(__FILE__).'/protected/config/test.php';

// remove the following line when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',true);

require_once($yii);
Yii::createWebApplication($config)->run();
