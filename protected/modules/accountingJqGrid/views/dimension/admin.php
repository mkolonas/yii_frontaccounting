<?php
/* @var $this BankAccountController */
/* @var $model BankAccount */

/*$this->breadcrumbs=array(
	'Bank Accounts'=>array('index'),
	'Manage',
);*/
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
									'Reference',
									'Name',
									'Type',
									'Closed',
									'Date',
									'Due Date'
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
                            'name' => 'reference',
                            'index' => 'reference',
                            'width' => 100,
                            'editable' => true,
                        ),
                        array(
                            'name' => 'name',
                            'index' => 'name',
                            'width' => 200,
                            'editable' => true
                        ),
						array(
                            'name' => 'type',
                            'index' => 'type',
                            'width' => 100,
                            'editable' => true
                        ),
						array(
                            'name' => 'is_closed',
                            'index' => 'is_closed',
                            'width' => 100,
                            'editable' => true,
                            'edittype' => 'select',
                            'editoptions' => array('value' => '0:No; 1:Yes;'),
                        ),
						array(
                            'name' => 'date',
                            'index' => 'date',
                            'width' => 100,
                            'editable' => false
                        ),
						array(
                            'name' => 'due_date',
                            'index' => 'due_date',
                            'width' => 100,
                            'editable' => false
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