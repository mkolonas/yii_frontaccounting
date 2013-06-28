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
									'Currency',
									'Buy',
									'Sell',
									'Date'
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
                            'name' => 'fa_currency.name',
                            'index' => 'fa_currency.name',
                            'width' => 100,
                            'editable' => false,
                        ),
                        array(
                            'name' => 'rate_buy',
                            'index' => 'rate_buy',
                            'width' => 200,
                            'editable' => true,
                        ),
						array(
                            'name' => 'rate_sell',
                            'index' => 'rate_sell',
                            'width' => 200,
                            'editable' => true
                        ),
						array(
                            'name' => 'date',
                            'index' => 'date',
                            'width' => 100,
                            'editable' => true
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