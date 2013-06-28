<?php
// COLMODEL. note: will overrides $gridOptions['cmTemplate']
// ref: <http://www.trirand.com/jqgridwiki/doku.php?id=wiki:colmodel_options#colmodel_api>
$colModel = array(
    array(
        'align' => 'left',           // ori: 'align'. alt: 'center', 'right'
        'attribute' => null,         // ori: 'cellattr'. alt: any function(rowId, val, rawObj, colModel, rowData){} which return string
        'classes' => '',             // ori: 'classes'. alt: 'ui-ellipsis' or any string
        'dateFormat' => 'Y-m-d',     // ori: 'datefmt'. note: y, Y, yyyy (4 digits year); YY, yy (2 digits year); m, mm (months); d, dd (days). used by $colModel[]['sorttype'] == 'date' and $colModel[]['editrules']['date'] == true
        'defVal' => '',              // ori: 'defval'
        'isEditable' => false,       // ori: 'editable'
        'editOptions' => array(),    // ori: 'editoptions'. req: $colModel[]['editable'] == true. note: override by $gridOptions['ajaxSelectOptions']
        'editRules' => array(),      // ori: 'editrules'
        'editType' => 'text',        // ori: 'edittype'. alt: 'textarea', 'select', 'checkbox', 'password', 'button', 'image' 'file'
        'firstSortOrder' => null,    // ori: 'firstsortorder'. alt: 'asc', 'desc'
        'isFixed' => false,          // ori: 'fixed'
        'formOptions' => array(),    // ori: 'formoptions'
        'formatOptions' => array(),  // ori: 'formatoptions'
        'formatter' => array(),      // ori: 'formatter'
        'isFrozen' => false,         // ori: 'frozen'
        'isHideDialog' => false,     // ori: 'hidedlg'
        'isHidden' => false,         // ori: 'hidden'
        'index' => '',               // ori: 'index'
        'jsonMap' => '',             // ori: 'jsonmap'
        'asKey' => false,            // ori: 'key'
        'label' => '',               // ori: 'label'
        'name' => '',                // ori: 'name'. note: COLUMN_NAME
        'isResizable' => true,       // ori: 'resizable'
        'isSearchable' => true,      // ori: 'search'
        'searchOptions' => array(),  // ori: 'searchoptions'. req: $gridOptions['ajaxSelectOptions']
        'isSortable' => true,        // ori: 'sortable'
        'sortType' => 'text',        // ori: 'sorttype'. alt: 'int', 'integer', 'float', 'number', 'currency', 'date', function(val){} which return val
        'sType' => 'text',           // ori: 'stype'
        'selectUrl' => '',           // ori: 'surl'. req: $colModel[]['edittype'] == 'select'
        'template' => array(),       // ori: 'template'
        'title' => true,             // ori: 'title'
        'width' => 150,              // ori: 'width'
        'xmlMap' => '',              // ori: 'xmlmap'
        'unformat' => null,          // ori: 'unformat'
        'isViewable' => true,        // ori: 'viewable'
    ),
    // additional column(s) in the grid
    array(
        'name' => 'name',       // ori: 'name'
        'index' => 'name',      // ori: 'index'
        'width' => '300',       // ori: 'width'
        'isSortable' => false,  // ori: 'sortable'
    ),
);

$gridOptions = array(
    // PAGER. req: JqGrid::$pagerId != ''. ref: <http://www.trirand.com/jqgridwiki/doku.php?id=wiki:pager#properties>
    'lastPage' => 0,                          // ori: 'lastpage'
    'pager' => '',                            // ori: 'pager'. alt: any HTML_ELEMENT. replaced by JqGrid::$pagerId
    'pagerPosition' => 'center',              // ori: 'pagerpos'. alt: 'right', 'left'
    'viewPagerButtons' => true,               // ori: 'pgbuttons'
    'viewPagerInput' => true,                 // ori: 'pginput'
    'viewPagerText' => 'Page {0} of {1}',     // ori: 'pgtext'
    'recordCount' => 0,                       // ori: 'reccount'. READONLY
    'recordPosition' => 'right',              // ori: 'recordpos'. alt: 'center', 'left'
    'records' => 0,                           // ori: 'records'. READONLY
    'recordText' => 'View {0} - {1} of {2}',  // ori: 'recordtext'. req: $gridOptions['viewrecords'] == true
    'rowList' => array(),                     // ori: 'rowList'. alt: any array of integer
    'rowNum' => 20,                           // ori: 'rowNum'
    'viewRecords' => false,                   // ori: 'viewrecords'

    // CELL EDITING.
    'isCellEditType' => false,          // ori: 'cellEdit'
    'cellSubmit' => 'remote',           // ori: 'cellsubmit'. alt: 'clientArray'
    'cellUrl' => null,                  // ori: 'cellurl'
    'ajaxCellOptions' => new stdClass,  // ori: 'ajaxCellOptions'

    // SUBGRID. req: $gridOptions['subGrid'] == true
    'hasSubGrid' => false,         // ori: 'subGrid'. req: $gridOptions['gridview'] == false
    'subGridModel' => array(),     // ori: 'subGridModel'
    'subGridOptions' => array(),   // ori: 'subGridOptions'
    'subGridType' => null,         // ori: 'subGridType'. alt: same as $gridOptions['datatype']
    'subGridUrl' => '',            // ori: 'subGridUrl'
    'subGridWidth' => 20,          // ori: 'subGridWidth'

    // TREEGRID. req: $gridOptions['treeGrid'] == true
    'treeANode' => -1,                      // ori: 'treeANode'
    'treeDataType' => null,                 // ori: 'treedatatype'. alt: same as $gridOptions['datatype']
    'asTreeGrid' => false,                  // ori: 'treeGrid'. req: $gridOptions['gridview'] == false
    'treeGridModel' => 'nested',            // ori: 'treeGridModel'. alt: 'adjacency'
    'treeIcons' => array(                   // alt: any theme roller images
        'plus' => 'ui-icon-triangle-1-e',   // ori: 'plus'
        'minus' => 'ui-icon-triangle-1-s',  // ori: 'minus'
        'leaf' => 'ui-icon-radio-off',      // ori: 'leaf'
    ),
    'treeReader' => new stdClass,           // ori: 'treeReader'
    'treeRootLevel' => 0,                   // ori: 'tree_root_level'

    // NOT CATEGORIZED YET.
    'afterInsertRow' => null,                     // ori: 'afterInsertRow'. req: $gridOptions['gridview'] == false
    'ajaxGridOptions' => new stdClass,            // ori: 'ajaxGridOptions'
    'ajaxSelectOptions' => new stdClass,          // ori: 'ajaxSelectOptions'
    'alternateClass' => 'ui-priority-secondary',  // ori: 'altclass'. req: $gridOptions['altRows'] == true
    'hasAlternateRows' => false,                  // ori: 'altRows'
    'isAutoEncode' => false,                      // ori: 'autoencode'
    'isAutoWidth' => false,                       // ori: 'autowidth'
    'beforeProcessing' => null,                   // ori: 'beforeProcessing'
    'beforeRequest' => null,                      // ori: 'beforeRequest'
    'beforeSelectRow' => null,                    // ori: 'beforeSelectRow'
    'caption' => '',                              // ori: 'caption'
    'cellLayout' => 5,                            // ori: 'cellLayout'
    'colModelTemplate' => new stdClass,           // ori: 'cmTemplate'
    'colNames' => array(),                        // ori: 'colNames'. req: count($colModel) == count($gridOptions['colNames'])
    'colModel' => $colModel,                      // ori: 'colModel'. assigned to other variable
    'data' => array(),                            // ori: 'data'
    'dataStr' => null,                            // ori: 'datastr'
    'dataType' => 'xml',                          // ori: 'datatype'. alt: 'xmlstring', 'json', 'jsonstring', 'local', 'javascript', 'function', 'clientSide'. note: $gridOptions['loadonce'] == true -> $gridOptions['datatype'] == 'local'
    'isDeepEmpty' => false,                       // ori: 'deepempty'
    'isDeselectAfterSort' => true,                // ori: 'deselectAfterSort'. req: $gridOptions['datatype'] == 'local'
    'direction' => 'ltr',                         // ori: 'direction'. alt: 'rtl'
    'editUrl' => null,                            // ori: 'editurl'. req: $gridOptions['cellsubmit'] == 'clientArray'
    'emptyRecords' => 'No records to view',       // ori: 'emptyrecords'. alt: any string. req: $gridOptions['viewrecords'] == true
    'isExpandColumnClick' => true,                // ori: 'ExpandColClick'
    'expandColumn' => null,                       // ori: 'ExpandColumn'. req: $gridOptions['treeGrid'] == true
    'hasFooterRow' => false,                      // ori: 'footerrow'
    'isForcedFit' => false,                       // ori: 'forceFit'. req: $gridOptions['shrinkToFit'] == true
    'gridComplete' => null,                       // ori: 'gridComplete'
    'gridState' => 'visible',                     // ori: 'gridstate'. alt: 'hidden'. req: $gridOptions['caption'] != ''
    'asGridView' => false,                        // ori: 'gridview'
    'hasGrouping' => false,                       // ori: 'grouping'
    'groupingView' => array(
        'groupField' => array(),                     // ori: 'groupField'
        'groupOrder' => array(),                     // ori: 'groupOrder'
        'groupText' => array(),                      // ori: 'groupText'
        'groupColumnShow' => array(),                // ori: 'groupColumnShow'
        'groupSummary' => array(),                   // ori: 'groupSummary'
        'showSummaryOnHide' => false,                // ori: 'showSummaryOnHide'
        'sortItems' => array(),                      // ori: 'sortitems'
        'sortNames' => array(),                      // ori: 'sortnames'
        'summary' => array(),                        // ori: 'summary'
        'summaryVal' => array(),                     // ori: 'summaryval'
        'plusIcon' => 'ui-icon-circlesmall-plus',    // ori: 'plusicon'
        'minusIcon' => 'ui-icon-circlesmall-minus',  // ori: 'minusicon'
        'displayField' => array(),                   // ori: 'displayField'
    ),
    'hasHeaderTitles' => false,      // ori: 'headertitles'
    'height' => 150,                 // ori: 'height'. alt: number, '100%', 'auto'
    'isHiddenGrid' => false,         // ori: 'hiddengrid'. req: $gridOptions['hidegrid'] == true
    'canHideGrid' => true,           // ori: 'hidegrid'. req: $gridOptions['caption'] != ''
    'isHoverRows' => true,           // ori: 'hoverrows'
    'idPrefix' => '',                // ori: 'idPrefix'
    'isIgnoreCase' => false,         // ori: 'ignoreCase'
    'inlineData' => new stdClass,    // ori: 'inlineData'
    'jsonReader' => new stdClass,    // ori: 'jsonReader'
    'lastSort' => 0,                 // ori: 'lastsort'
    'loadBeforeSend' => null,        // ori: 'loadBeforeSend'
    'loadComplete' => null,          // ori: 'loadComplete'
    'loadError' => null,             // ori: 'loadError'
    'isLoadOnce' => false,           // ori: 'loadonce'
    'loadingText' => 'Loading...',   // ori: 'loadtext'. alt: any string
    'loadUi' => 'enable',            // ori: 'loadui'. alt: 'disable', 'block'
    'methodType' => 'GET',           // ori: 'mtype'. alt: 'POST'
    'hasMultiKey' => false,          // ori: 'multikey'. alt: 'shiftKey', 'altKey', 'ctrlKey'. req: $gridOptions['multiselect'] == true
    'asMultiBoxOnly' => false,       // ori: 'multiboxonly'. req: $gridOptions['multiselect'] == true
    'asMultiSelect' => false,        // ori: 'multiselect'
    'multiSelectWidth' => 20,        // ori: 'multiselectWidth'. req: $gridOptions['multiselect'] == true
    'asMultiSort' => false,          // ori: 'multiSort'. req: $gridOptions['datatype'] == 'local'
    'nv' => 0,                       // ori: 'nv'
    'onDoubleClickRow' => null,      // ori: 'ondblClickRow'
    'onHeaderClick' => null,         // ori: 'onHeaderClick'
    'onInitGrid' => null,            // ori: 'onInitGrid'
    'onPaging' => null,              // ori: 'onPaging'
    'onRightClickRow' => null,       // ori: 'onRightClickRow'
    'onSelectAll' => null,           // ori: 'onSelectAll'
    'onSelectRow' => null,           // ori: 'onSelectRow'
    'onSortCol' => null,             // ori: 'onSortCol'
    'page' => 1,                     // ori: 'page'
    'paramNames' => array(           // ori: 'prmNames'
        'page' => 'page',            // ori: 'page'
        'rows' => 'rows',            // ori: 'rows'
        'sort' => 'sidx',            // ori: 'sort'
        'order' => 'sord',           // ori: 'order'
        'search' => '_search',       // ori: 'search'
        'nd' => 'nd',                // ori: 'nd'
        'id' => 'id',                // ori: 'id'
        'oper' => 'oper',            // ori: 'oper'
        'editoper' => 'edit',        // ori: 'editoper'
        'addoper' => 'add',          // ori: 'addoper'
        'deloper' => 'del',          // ori: 'deloper'
        'subgridid' => 'id',         // ori: 'subgridid'
        'nPage' => null,             // ori: 'npage'
        'totalRows' => 'totalrows',  // ori: 'totalrows'
    ),
    'postData' => new stdClass,      // ori: 'postData'
    'remapColumns' => array(),       // ori: 'remapColumns'
    'resizeClass' => '',             // ori: 'resizeclass'
    'viewRowNumbers' => false,       // ori: 'rownumbers'
    'rowNumberWidth' => 25,          // ori: 'rownumWidth'. req: $gridOptions['rownumbers'] == true
    'rowTotal' => null,              // ori: 'rowTotal'. alt: any integer
    'savedRow' => array(),           // ori: 'savedRow'. READONLY
    'scroll' => false,               // ori: 'scroll'. alt: true, any integer
    'scrollOffset' => 18,            // ori: 'scrollOffset'
    'scrollTimeout' => 40,           // ori: 'scrollTimeout'
    'scrollrows' => false,           // ori: 'scrollrows'
    'isSearchable' => false,         // ori: 'search'
    'selArrRow' => array(),          // ori: 'selarrrow'. READONLY
    'selRow' => null,                // ori: 'selrow'. READONLY
    'canShrinkToFit' => true,        // ori: 'shrinkToFit'. alt: false, any integer
    'isSortable' => false,           // ori: 'sortable'
    'sortName' => '',                // ori: 'sortname'. req: $gridOptions['datatypes'] == 'xml' OR $gridOptions['datatypes'] == 'json'
    'sortOrder' => 'asc',            // ori: 'sortorder'. alt: 'desc'. req: $gridOptions['sortname'] != ''
    'toolbar' => array(
        false,
        '',                          // alt: 'top', 'bottom', 'both'
    ),
    'topPager' => false,             // ori: 'toppager'
    'totalTime' => 0,                // ori: 'totaltime'. READONLY
    'dataUrl' => '',                 // ori: 'url'. alt: any url
    'userData' => new stdClass,      // ori: 'userData'. req: $gridOptions['userDataOnFooter'] == true
    'userDataOnFooter' => false,     // ori: 'userDataOnFooter'
    'viewSortCols' => array(
        false,
        'vertical',                  // alt: 'horizontal'
        true
    ),
    'width' => null,                 // ori: 'width'. alt: any integer
    'xmlReader' => new stdClass,     // ori: 'xmlReader'
);

// NAVIGATOR. ref: <http://www.trirand.com/jqgridwiki/doku.php?id=wiki:navigator#parameters>
$navOptions = array(
    // ?
    'position' => 'left',            // ori: 'position'
    'isCloneToTop' => false,         // ori: 'cloneToTop'
    'isCloseOnEscape' => true,       // ori: 'closeOnEscape'

    // ADD BUTTON
    'viewAddButton' => true,            // ori: 'add'
    'addButtonIcon' => 'ui-icon-plus',  // ori: 'addicon'
    'addButtonText' => '',              // ori: 'addtext'
    'addButtonTitle' => 'Add new row',  // ori: 'addtitle'

    // EDIT BUTTON
    'viewEditButton' => true,                  // ori: 'edit'
    'editButtonIcon' => 'ui-icon-pencil',      // ori: 'editicon'
    'editButtonText' => '',                    // ori: 'edittext'
    'editButtonTitle' => 'Edit selected row',  // ori: 'edittitle'

    // ALERT ON NOTHING ROW SELECTED
    'alertCaption' => 'Warning',          // ori: 'alertcap'
    'alertText' => 'Please, select row',  // ori: 'alerttext'

    // DELETE BUTTON
    'viewDelButton' => true,                    // ori: 'del'
    'delButtonIcon' => 'ui-icon-trash',         // ori: 'delicon'
    'delButtonText' => '',                      // ori: 'deltext'
    'delButtonTitle' => 'Delete selected row',  // ori: 'deltitle'

    // SEARCH BUTTON
    'viewSrcButton' => true,              // ori: 'search'
    'srcButtonIcon' => 'ui-icon-search',  // ori: 'searchicon'
    'srcButtonText' => '',                // ori: 'searchtext'
    'srcButtonTitle' => 'Find records',   // ori: 'searchtitle'

    // VIEW BUTTON
    'viewViewButton' => false,                 // ori: 'view'
    'viewButtonIcon' => 'ui-icon-document',    // ori: 'viewicon'
    'viewButtonText' => '',                    // ori: 'viewtext'
    'viewButtonTitle' => 'View selected row',  // ori: 'viewtitle'

    // REFRESH BUTTON
    'viewRefreshButton' => true,               // ori: 'refresh'
    'refreshButtonIcon' => 'ui-icon-refresh',  // ori: 'refreshicon'
    'refreshButtonText' => '',                 // ori: 'refreshtext'
    'refreshButtonTitle' => 'Reload Grid',     // ori: 'refreshtitle'
    'refreshButtonState' => 'firstpage',       // ori: 'refreshstate'
    'afterRefresh' => null,                    // ori: 'afterRefresh'
    'beforeRefresh' => null,                   // ori: 'beforeRefresh'

    'addFunc' => null,   // ori: 'addfunc'
    'editFunc' => null,  // ori: 'editfunc'
    'delFunc' => null,   // ori: 'delfunc'
);

// FORM EDITING. ref: <http://www.trirand.com/jqgridwiki/doku.php?id=wiki:navigator#parameters>
$editOptions = array(
    // FORM
    'formTop' => 0,                      // ori: 'top'
    'formLeft' => 0,                     // ori: 'left'
    'formWidth' => 300,                  // ori: 'width'
    'formHeight' => 'auto',              // ori: 'height'
    'addFormCaption' => 'Add Record',    // ori: 'addCaption'
    'editFormCaption' => 'Edit Record',  // ori: 'editCaption'
    'asModal' => false,                  // ori: 'modal'
    'canDraged' => true,                 // ori: 'drag'
    'canResized' => true,                // ori: 'resize'
    'canRecreate' => false,              // ori: 'recreateForm'
    'isCloseOnEscape' => false,          // ori: 'closeOnEscape'
    'zIndex' => 950,                     // ori: 'zIndex'

    // BUTTON
    'btnSubmitText' => 'Submit',                             // ori: 'bSubmit'
    'btnCancelText' => 'Cancel',                             // ori: 'bCancel'
    'btnCloseText' => 'Close',                               // ori: 'bClose'
    'btnYesText' => 'Yes',                                   // ori: 'bYes'
    'btnNoText' => 'No',                                     // ori: 'bNo'
    'btnExitText' => 'Cancel',                               // ori: 'bExit'
    'btnSaveIcon' => array(true, 'left', 'ui-icon-disk'),    // ori: 'saveicon'
    'btnCloseIcon' => array(true, 'left', 'ui-icon-close'),  // ori: 'closeicon'
    'viewPagerButtons' => true,                              // ori: 'viewPagerButtons'

    // MESSSAGE
    'notSavedDataMsg' => 'Data has been changed! Save changes?',                                // ori: 'saveData'
    'formMsg' => array(
        'required' => 'Field is required',                                                      // ori: 'required'
        'number' => 'Please, enter valid number',                                               // ori: 'number'
        'minValue' => 'value must be greater than or equal to ',                                // ori: 'minValue'
        'maxValue' => 'value must be less than or equal to',                                    // ori: 'maxValue'
        'email' => 'is not a valid e-mail',                                                     // ori: 'email'
        'integer' => 'Please, enter valid integer value',                                       // ori: 'integer'
        'date' => 'Please, enter valid date value',                                             // ori: 'date'
        'url' => "is not a valid URL. Prefix required ('http://' or 'https://')",               // ori: 'url'
        'notDefined' => ' is not defined!',                                                     // ori: 'nodefined'
        'noValue' => ' return value is required!',                                              // ori: 'novalue'
        'customArray' => 'Custom function should return array!',                                // ori: 'customarray'
        'customFuncCheck' => 'Custom function should be present in case of custom checking!"',  // ori: 'customfcheck'
    ),

    // DATA. reference <http://www.trirand.com/jqgridwiki/doku.php?id=wiki:form_editing#properties>
    'dataHeight' => 'auto',             // ori: 'dataheight'
    'url' => null,                      // ori: 'url'
    'methodType' => 'POST',             // ori: 'mtype'
    'editData' => array(),              // ori: 'editData'
    'asJqModal' => true,                // ori: 'jqModal'
    'addedRow' => 'first',              // ori: 'addedrow'
    'topInfo' => '',                    // ori: 'topinfo'
    'bottomInfo' => '',                 // ori: 'bottominfo'
    'saveKey' => array(false, 13),      // ori: 'savekey'
    'navKeys' => array(false, 38, 40),  // ori: 'navkeys'
    'checkOnSubmit' => false,           // ori: 'checkOnSubmit'
    'checkOnUpdate' => false,           // ori: 'checkOnUpdate'
    'closeAfterAdd' => false,           // ori: 'closeAfterAdd'
    'clearAfterAdd' => true,            // ori: 'clearAfterAdd'
    'closeAfterEdit' => false,          // ori: 'closeAfterEdit'
    'reloadAfterSubmit' => true,        // ori: 'reloadAfterSubmit'
    'ajaxEditOptions' => array(),       // ori: 'ajaxEditOptions'
);

$addOptions = array(
    // ... 
);

$delOptions = array(
    // reference <http://www.trirand.com/jqgridwiki/doku.php?id=wiki:navigator#parameters>
    'windowCaption' => 'Delete',                  // ori: 'caption'
    'WindowMsg' => 'Delete selected record(s)?',  // ori: 'msg'
    'btnSubmitText' => 'Delete',                  // ori: 'bSubmit'
    'btnCancelText' => 'Cancel',                  // ori: 'bCancel'
);

// 1st level: use as less as you needed.
// 2nd level: use all, even you do not needed.
$searchOptions = array(
    // reference <http://www.trirand.com/jqgridwiki/doku.php?id=wiki:navigator#parameters>
    'windowCaption' => 'Search...',  // ori: 'caption'
    'btnFindText' => 'Find',         // ori: 'Find'
    'btnResetText' => 'Reset',       // ori: 'Reset'
    'compareText' => array(          // ori: 'odata'
        'equal',
        'not equal',
        'less',
        'less or equal',
        'greater',
        'greater or equal',
        'begins with',
        'does not begin with',
        'is in',
        'is not in',
        'ends with',
        'does not end with',
        'contains',
        'does not contain',
    ),
    'groupText' => array(            // ori: 'groupOps'
        array('op' => 'AND', 'text' => 'all'),
        array('op' => 'OR', 'text' => 'any'),
    ),
    'matchText' => ' match',         // ori: 'matchText'
    'rulesText' => ' rules',         // ori: 'rulesText'
);

$viewOptions = array(
    'windowCaption' => 'View Record',  // ori: 'caption'
    'btnCloseText' => 'Close',         // ori: 'bClose'
);

$this->widget(
    'ext.JqGrid.JqGrid',
    array(
        'language' => 'en',              // ori: 'language'
        'gridId' => 'demo-grid',         // ori: 'gridId'
        'pagerId' => 'demo-pager',       // ori: 'pagerId'
        'gridOptions' => $gridOptions,   // ori: 'gridOptions'
        'navOptions' => $navOptions,     // ori: 'navOptions'
        'editOptions' => $editOptions,   // ori: 'editOptions'
        'addOptions' => $addOptions,     // ori: 'addOptions'
        'delOptions' => $delOptions,     // ori: 'delOptions'
        'srcOptions' => $searchOptions,  // ori: 'searchOptions'
        'viewOptions' => $viewOptions,   // ori: 'viewOptions'

        'coreCss' => true,          // ori: 'coreCss'
        'coreJs' => true,           // ori: 'coreJs'
        'forceCopyAssets' => true,  // ori: 'forceCopyAssets'
    ),
);
