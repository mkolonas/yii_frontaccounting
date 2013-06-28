<?php

$modules = array_keys(Yii::app()->modules);
sort($modules);

foreach ($modules as $module) {
    if ($module != 'rights' and $module != 'user' and $module != 'message' and $module != 'gii') {
        $filteredModules[] = array('label' => $module, 'url' => array('/'.$module));
    }
}

$globalMenu = array(
    array(
        'label' => 'App Configs',
        'url' => '#',
        'items' => array(
            array(
                'label' => 'Users',
                'url' => '#',
                'items' => array(
                    array('label' => 'Manage User', 'url' => array('/user/admin/admin')),
                    array('label' => 'create User', 'url' => array('/user/admin/create')),
                    array('label' => 'Manage Profile Field', 'url' => array('/user/profileField/admin')),
                    array('label' => 'Create Profile Field', 'url' => array('/user/profileField/create')),
                ),
            ),
            array(
                'label' => 'Access Roles',
                'url' => '#',
                'items' => array(
                    array('label' => 'Assignments', 'url' => array('/rights/assignment/view')),
                    array('label' => 'Permissions', 'url' => array('/rights/authItem/permissions')),
                    array('label' => 'Roles', 'url' => array('/rights/authItem/roles')),
                    array('label' => 'Tasks', 'url' => array('/rights/authItem/tasks')),
                    array('label' => 'Operations', 'url' => array('/rights/authItem/operations')),
                ),
            ),
        ),
    ),
    array('label' => 'Modules', 'url' => '#', 'items' => $filteredModules),
);

$this->widget('zii.widgets.CMenu', array(
    'htmlOptions' => array('class' => 'mega-menu'),
    'items' => array_merge($globalMenu, $moduleMenu),
));
?>
