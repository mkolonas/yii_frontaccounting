<?php
/* @var $this AttachmentController */
/* @var $model Attachment */

$this->breadcrumbs=array(
	'Attachments'=>array('index'),
	'Manage',
);

/*$this->menu=array(
	array('label'=>'List Attachment', 'url'=>array('index')),
	array('label'=>'Create Attachment', 'url'=>array('create')),
);*/

/*Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#attachment-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");*/
?>

<h1>Manage Attachments</h1>



<?php //echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<!--div class="search-form" style="display:none">
<?php /*$this->renderPartial('_search',array(
	'model'=>$model,
)); */?>
</div--><!-- search-form -->

<?php
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
                    'names' => array('ID', 'Name', 'Description', 'Trans. Type', 'Trans. No', 'Trans. Date', 'Filename', 'Size', 'Type'),
                    'models' => array(
                        array(
                            'name' => 'id',
                            'index' => 'id',
                            'width' => 100,
                            'hidden' => false,
                            'key' => true,
                        ),
                        array(
                            'name' => 'name',
                            'index' => 'name',
                            'width' => 200,
                            'editable' => true,
                        ),
                        array(
                            'name' => 'description',
                            'index' => 'description',
                            'width' => 400,
                            'editable' => true,
                            'edittype' => 'textarea',
                        ),
						array(
                            'name' => 'transaction_type_id',
                            'index' => 'transaction_type_id',
                            'width' => 100,
                            'editable' => true,
							'align' => 'right',
                        ),
						array(
                            'name' => 'transaction_no',
                            'index' => 'transaction_no',
                            'width' => 100,
                            'editable' => true,
							'align' => 'right',
                        ),
						array(
                            'name' => 'transaction_date',
                            'index' => 'transaction_date',
                            'width' => 100,
                            'editable' => true,
							'align' => 'right',
                        ),
						array(
                            'name' => 'file_name',
                            'index' => 'file_name',
                            'width' => 200,
                            'editable' => false,
                        ),
						array(
                            'name' => 'file_size',
                            'index' => 'file_size',
                            'width' => 100,
                            'editable' => false,
                        ),
						array(
                            'name' => 'file_type',
                            'index' => 'file_type',
                            'width' => 80,
                            'editable' => false,
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
