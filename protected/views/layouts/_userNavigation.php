<?php

$globalMenu = array(
        array('label' => 'home', 'url' => array('/'), 'visible' => Yii::app()->user->id == 1),
        array('label' => 'Logout (' . Yii::app()->user->name . ')', 'url' => array('/site/logout'))
);

$this->widget('zii.widgets.CMenu', array(
    'items' => array_merge($moduleMenu, $globalMenu),
));
?>
