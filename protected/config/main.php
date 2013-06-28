<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');
// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
    'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
    'name' => 'Application Name',
    'theme' => 'tlm-web-app-theme',
    'language' => 'id',
    // preloading 'log' component
    'preload' => array('log'),
    // autoloading model and component classes
    'import' => array(
        'application.models.*',
        'application.components.*',
        'application.modules.user.models.*',
        'application.modules.user.components.*',
        'application.modules.rights.*',
        'application.modules.rights.components.*',
        'ext.*',
    ),
    'modules' => array(
        'accountingJqGrid',
        'gii' => array(
            'password' => 'admincloud',
            'class'=>'system.gii.GiiModule',
            'ipFilters' => array('127.0.0.1', '::1'),
        ),
        'rights' => array(
            'install' => false,
        ),
        'message' => array(
            'userModel' => 'Users',
            'getNameMethod' => 'getFullName',
            'getSuggestMethod' => 'getSuggest',
            'viewPath' => '/message/fancy',
        ),
        'user' => array(
            # encrypting method (php hash function)
            'hash' => 'md5',
            # send activation email
            'sendActivationMail' => true,
            # allow access for non-activated users
            'loginNotActiv' => false,
            # activate user on registration (only sendActivationMail = false)
            'activeAfterRegister' => false,
            # automatically login from registration
            'autoLogin' => true,
            # registration path
            'registrationUrl' => array('/user/registration'),
            # recovery password path
            'recoveryUrl' => array('/user/recovery'),
            # login form path
            'loginUrl' => array('/site/login'),
            # page after login
            'returnUrl' => array('/site/index'),
            # page after logout
            'returnLogoutUrl' => array('/user/login'),
        ),
    ),
    // application components
    'components' => array(
        'user' => array(
            'class' => 'RWebUser',
            // enable cookie-based authentication
            'allowAutoLogin' => true,
            'loginUrl' => array('/site/login'),
        ),
        'urlManager' => array(
            'urlFormat' => 'path',
            'rules' => array(
                '<controller:\w+>/<id:\d+>' => '<controller>/view',
                '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
                '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
            ),
        ),
        'authManager' => array(
            'class' => 'RDbAuthManager',
            'connectionID' => 'db',
            'defaultRoles' => array('Authenticated', 'Guest'),
        ),
        'db' => array(
            'connectionString' => 'mysql:host=localhost;dbname=yii_frontaccounting',
            'emulatePrepare' => true,
            'username' => 'root',
            'password' => '1',
            'charset' => 'utf8',
            'tablePrefix' => '',
        ),
        'dbFa' => array(
            'class' => 'CDbConnection',
            'connectionString' => 'mysql:host=localhost;dbname=yii_frontaccounting',
            'username' => 'root',
            'password' => '1',
            'charset' => 'utf8',
            'tablePrefix' => 'fa_',
        ),
        'errorHandler' => array(
            // use 'site/error' action to display errors
            'errorAction' => 'site/error',
        ),
//        'request' => array(
//            'enableCsrfValidation' => true,
//        ),
        'log' => array(
            'class' => 'CLogRouter',
            'routes' => array(
                array(
                    'class' => 'CFileLogRoute',
                    'levels' => 'error, warning',
                ),
                // debug toolbar configuration
            //  array(
            //      'class' => 'XWebDebugRouter',
            //      'config' => 'alignLeft, opaque, runInDebug, fixedPos, collapsed, yamlStyle',
            //      'levels' => 'error, warning, trace, profile, info',
            //      'allowedIPs' => array('127.0.0.1'),
            //  ),
                // inline log
            //  array(
            //      'class'=>'CWebLogRoute',
            //  ),
            ),
        ),
        'widgetFactory' => array(
            'class' => 'WidgetFactory',
            'onAfterCreateWidget' => function(WidgetEvent $event) {
                static $defaultPageSize = 10;
                $widget = $event->widget;
                if ($widget instanceof CBaseListView) {
                    /** @var CBaseListView $widget */
                    if ($widget->dataProvider !== null && $widget->dataProvider->pagination !== false)
                        $widget->dataProvider->pagination->pageSize = $defaultPageSize;
                }
            },
        ),
    ),
    // application-level parameters that can be accessed
    // using Yii::app()->params['paramName']
    'params' => array(
        // this is used in contact page
        'adminEmail' => 'webmaster@example.com',
        'companyName' => 'Company Name',

        // extended navigation
        'extendedNavigationColumn' => 3,

        // supported browser
        'supportedIEVersion' => 9,
        'supportedOperaVersion' => 2,
        'supportedFFVersion' => 3,
        'supportedChromeVersion' => 2,
        'supportedSafariVersion' => 2,
    ),
);