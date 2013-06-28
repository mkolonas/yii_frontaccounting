<?php
/* @var $this BankAccountController */
/* @var $model BankAccount */

$this->breadcrumbs=array(
	'Bank Accounts'=>array('index'),
	'Manage',
);
$this->widget(
    'ext.JqGrid.JqGrid',
    array(
        'gridId' => 'demo-grid',
        'pagerId' => 'demo-pager',
        'gridOptions' => array(
            'grid' => array(  // new param
                'geo' => array(
                    'height' => 'auto',
                    'width' => 970,
                ),
                'column' => array(
                    'names' => array(
									'ID',
									'Code',
									'Name',
									'Symbol',
									'Country',
									'Hundreds Name',
									'Auto Update',
									'Active'
							   ),
                    'models' => array(
                        array(
                            'name' => 'id',
                            'index' => 'id',
                            'width' => 100,
                            'hidden' => false,
                            'key' => true,
                        ),
                        array(
                            'name' => 'code',
                            'index' => 'code',
                            'width' => 100,
                            'editable' => true,
                        ),
                        array(
                            'name' => 'name',
                            'index' => 'name',
                            'width' => 200,
                            'editable' => true,
                        ),
						array(
                            'name' => 'symbol',
                            'index' => 'symbol',
                            'width' => 100,
                            'editable' => true
                        ),
						array(
                            'name' => 'country',
                            'index' => 'country',
                            'width' => 200,
                            'editable' => true
                        ),
						array(
                            'name' => 'hundreds_name',
                            'index' => 'hundreds_name',
                            'width' => 100,
                            'editable' => true
                        ),
						array(
                            'name' => 'is_auto_update',
                            'index' => 'is_auto_update',
                            'width' => 100,
                            'editable' => true,
                            'edittype' => 'select',
                            'editoptions' => array('value' => '0:No; 1:Yes;'),
                        ),
						array(
                            'name' => 'is_active',
                            'index' => 'is_active',
                            'width' => 100,
                            'editable' => true,
                            'edittype' => 'select',
                            'editoptions' => array('value' => '0:No; 1:Yes;'),
                        ),
                    ),
                ),
                'data' => array(
                    'type' => 'json',
                ),
                'dataRmt' => array(
                    'url' => 'adminDataJson',
                ),
            ),
            'navBar' => array(
                'htmlElm' => 'demo-pager',
                'data' => array(
                    'visible' => true,
                    'rowList' => array(10, 20, 30),
                    'rowNum' => 20,
                ),
            ),
        ),
    )
);
?>