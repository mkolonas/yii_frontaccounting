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
									'Dimensions',
									'Tags',
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
                            'name' => 'fa_dimension.name',
                            'index' => 'fa_dimension.name',
                            'width' => 200,
                            'editable' => true,
                        ),
                        array(
                            'name' => 'fa_tag.name',
                            'index' => 'fa_tag.name',
                            'width' => 200,
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