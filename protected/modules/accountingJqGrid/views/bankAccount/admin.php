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
                    'names' => array('ID', 'GL Account', 'Account Type', 'Account Name', 'No. Account', 'Bank', 'Address', 'Currency', 'Active'),
                    'models' => array(
                        array(
                            'name' => 'id',
                            'index' => 'id',
                            'width' => 100,
                            'hidden' => false,
                            'key' => true,
                        ),
                        array(
                            'name' => 'gl_account_id',
                            'index' => 'gl_account_id',
                            'width' => 200,
                            'editable' => false,
                        ),
                        array(
                            'name' => 'fa_bank_account_type.name',
                            'index' => 'fa_bank_account_type.name',
                            'width' => 200,
                            'editable' => false,
                        ),
						array(
                            'name' => 'account_name',
                            'index' => 'account_name',
                            'width' => 200,
                            'editable' => true,
							'align' => 'right',
                        ),
						array(
                            'name' => 'account_number',
                            'index' => 'account_number',
                            'width' => 200,
                            'editable' => true,
							'align' => 'right',
                        ),
						array(
                            'name' => 'bank_name',
                            'index' => 'bank_name',
                            'width' => 200,
                            'editable' => true,
							'align' => 'right',
                        ),
						array(
                            'name' => 'address',
                            'index' => 'address',
                            'width' => 200,
                            'editable' => true,
							'align' => 'right',
                        ),
						array(
                            'name' => 'fa_currency.code',
                            'index' => 'fa_currency.code',
                            'width' => 100,
                            'editable' => false,
							'align' => 'right',
                        ),
						 array(
                            'name' => 'is_active',
                            'index' => 'is_active',
                            'width' => 300,
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