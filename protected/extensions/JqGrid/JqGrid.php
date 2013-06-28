<?php

/**
 * Copyright: theliquidmetal <the.liquid.metal@gmail.com>
 * Base on milkyway <yhxxlm@gmail.com> and Tony Tomov <http://trirand.com/blog/jqgrid/jqgrid.html>
 * Created on 2013-06-12
 * 
 * This extension have to be installed into:
 * <Yii-Application>/proected/extensions/jqgrid
 * 
 * Usage:
 * <?php
 * // COLMODEL. note: will overrides $gridOptions['cmTemplate']
 * // ref: <http://www.trirand.com/jqgridwiki/doku.php?id=wiki:colmodel_options#colmodel_api>
 * $colModel = array(
 *     array(
 *         'align' => 'left',           // alt: 'center', 'right'
 *         'cellattr' => null,          // alt: any function(rowId, val, rawObj, colModel, rowData){} which return string
 *         'classes' => '',             // alt: 'ui-ellipsis' or any string
 *         'datefmt' => 'Y-m-d',        // note: y, Y, yyyy (4 digits year); YY, yy (2 digits year); m, mm (months); d, dd (days)
 *                                      // note: used by $colModel[]['sorttype'] == 'date' and $colModel[]['editrules']['date'] == true
 *         'defval' => '',
 *         'editable' => false,
 *         'editoptions' => array(),    // req: $colModel[]['editable'] == true. note: override by $gridOptions['ajaxSelectOptions']
 *         'editrules' => array(),
 *         'edittype' => 'text',        // alt: 'textarea', 'select', 'checkbox', 'password', 'button', 'image' 'file'
 *         'firstsortorder' => null,    // alt: 'asc', 'desc'
 *         'fixed' => false,
 *         'formoptions' => array(),
 *         'formatoptions' => array(),
 *         'formatter' => array(),
 *         'frozen' => false,
 *         'hidedlg' => false,
 *         'hidden' => false,
 *         'index' => '',
 *         'jsonmap' => '',
 *         'key' => false,
 *         'label' => '',
 *         'name' => 'COLUMN_NAME',
 *         'resizable' => true,
 *         'search' => true,
 *         'searchoptions' => array(),    // req: $gridOptions['ajaxSelectOptions']
 *         'sortable' => true,
 *         'sorttype' => 'text',          // alt: 'int', 'integer', 'float', 'number', 'currency', 'date', function(val){} which return val
 *         'stype' => 'text',
 *         'surl' => '',                  // req: $colModel[]['edittype'] == 'select'
 *         'template' => array(),
 *         'title' => true,
 *         'width' => 150,
 *         'xmlmap' => '',
 *         'unformat' => null,
 *         'viewable' => true,
 *     ),
 *     // additional column(s) in the grid
 *     array(
 *         'name' => 'name',
 *         'index' => 'name',
 *         'width' => '300',
 *         'sortable' => false,
 *     ),
 * );
 * 
 * $gridOptions = array(
 *     // PAGER. req: JqGrid::$pagerId != ''. ref: <http://www.trirand.com/jqgridwiki/doku.php?id=wiki:pager#properties>
 *     'lastpage' => 0,
 *     'pager' => '',                              // alt: any HTML_ELEMENT. replaced by JqGrid::$pagerId
 *     'pagerpos' => 'center',                     // alt: 'right', 'left'
 *     'pgbuttons' => true,
 *     'pginput' => true,
 *     'pgtext' => 'Page {0} of {1}',
 *     'reccount' => 0,                            // READONLY
 *     'recordpos' => 'right',                     // alt: 'center', 'left'
 *     'records' => 0,                             // READONLY
 *     'recordtext' => 'View {0} - {1} of {2}',    // req: $gridOptions['viewrecords'] == true
 *     'rowList' => array(),                       // alt: any array of integer
 *     'rowNum' => 20,
 *     'viewrecords' => false,
 * 
 *     // CELL EDITING.
 *     'cellEdit' => false,
 *     'cellsubmit' => 'remote',                   // alt: 'clientArray'
 *     'cellurl' => null,
 *     'ajaxCellOptions' => new stdClass,
 * 
 *     // SUBGRID. req: $gridOptions['subGrid'] == true
 *     'subGrid' => false,                         // req: $gridOptions['gridview'] == false
 *     'subGridModel' => array(),
 *     'subGridOptions' => array(),
 *     'subGridType' => null,                      // alt: same as $gridOptions['datatype']
 *     'subGridUrl' => '',
 *     'subGridWidth' => 20,
 * 
 *     // TREEGRID. req: $gridOptions['treeGrid'] == true
 *     'treeANode' => -1,
 *     'treedatatype' => null,                     // alt: same as $gridOptions['datatype']
 *     'treeGrid' => false,                        // req: $gridOptions['gridview'] == false
 *     'treeGridModel' => 'nested',                // alt: 'adjacency'
 *     'treeIcons' => array(                       // alt: any theme roller images
 *         'plus' => 'ui-icon-triangle-1-e',
 *         'minus' => 'ui-icon-triangle-1-s',
 *         'leaf' => 'ui-icon-radio-off',
 *     ),
 *     'treeReader' => new stdClass,
 *     'tree_root_level' => 0,
 * 
 *     // NOT CATEGORIZED YET.
 *     'afterInsertRow' => null,                  // req: $gridOptions['gridview'] == false
 *     'ajaxGridOptions' => new stdClass,
 *     'ajaxSelectOptions' => new stdClass,
 *     'altclass' => 'ui-priority-secondary',     // req: $gridOptions['altRows'] == true
 *     'altRows' => false,
 *     'autoencode' => false,
 *     'autowidth' => false,
 *     'beforeProcessing' => null,
 *     'beforeRequest' => null,
 *     'beforeSelectRow' => null,
 *     'caption' => '',
 *     'cellLayout' => 5,
 *     'cmTemplate' => new stdClass,
 *     'colNames' => array(),                     // req: count($colModel) == count($gridOptions['colNames'])
 *     'colModel' => $colModel,                   // assigned to other variable
 *     'data' => array(),
 *     'datastr' => null,
 *     'datatype' => 'xml',                       // alt: 'xmlstring', 'json', 'jsonstring', 'local', 'javascript', 'function', 'clientSide'
 *                                                // note: $gridOptions['loadonce'] == true -> $gridOptions['datatype'] == 'local'
 *     'deepempty' => false,
 *     'deselectAfterSort' => true,               // req: $gridOptions['datatype'] == 'local'
 *     'direction' => 'ltr',                      // alt: 'rtl'
 *     'editurl' => null,                         // req: $gridOptions['cellsubmit'] == 'clientArray'
 *     'emptyrecords' => 'No records to view',    // alt: any string. req: $gridOptions['viewrecords'] == true
 *     'ExpandColClick' => true,
 *     'ExpandColumn' => null,                    // req: $gridOptions['treeGrid'] == true
 *     'footerrow' => false,
 *     'forceFit' => false,                       // req: $gridOptions['shrinkToFit'] == true
 *     'gridComplete' => null,
 *     'gridstate' => 'visible',                  // alt: 'hidden'. req: $gridOptions['caption'] != ''
 *     'gridview' => false,
 *     'grouping' => false,
 *     'groupingView' => array(
 *         'groupField' => array(),
 *         'groupOrder' => array(),
 *         'groupText' => array(),
 *         'groupColumnShow' => array(),
 *         'groupSummary' => array(),
 *         'showSummaryOnHide' => false,
 *         'sortitems' => array(),
 *         'sortnames' => array(),
 *         'summary' => array(),
 *         'summaryval' => array(),
 *         'plusicon' => 'ui-icon-circlesmall-plus',
 *         'minusicon' => 'ui-icon-circlesmall-minus',
 *         'displayField' => array(),
 *     ),
 *     'headertitles' => false,
 *     'height' => 150,          // alt: number, '100%', 'auto'
 *     'hiddengrid' => false,    // req: $gridOptions['hidegrid'] == true
 *     'hidegrid' => true,       // req: $gridOptions['caption'] != ''
 *     'hoverrows' => true,
 *     'idPrefix' => '',
 *     'ignoreCase' => false,
 *     'inlineData' => new stdClass,
 *     'jsonReader' => new stdClass,
 *     'lastsort' => 0,
 *     'loadBeforeSend' => null,
 *     'loadComplete' => null,
 *     'loadError' => null,
 *     'loadonce' => false,
 *     'loadtext' => 'Loading...',    // alt: any string
 *     'loadui' => 'enable',          // alt: 'disable', 'block'
 *     'mtype' => 'GET',              // alt: 'POST'
 *     'multikey' => false,           // alt: 'shiftKey', 'altKey', 'ctrlKey'. req: $gridOptions['multiselect'] == true
 *     'multiboxonly' => false,       // req: $gridOptions['multiselect'] == true
 *     'multiselect' => false,
 *     'multiselectWidth' => 20,      // req: $gridOptions['multiselect'] == true
 *     'multiSort' => false,          // req: $gridOptions['datatype'] == 'local'
 *     'nv' => 0,
 *     'ondblClickRow' => null,
 *     'onHeaderClick' => null,
 *     'onInitGrid' => null,
 *     'onPaging' => null,
 *     'onRightClickRow' => null,
 *     'onSelectAll' => null,
 *     'onSelectRow' => null,
 *     'onSortCol' => null,
 *     'page' => 1,
 *     'prmNames' => array(
 *         'page' => 'page',
 *         'rows' => 'rows',
 *         'sort' => 'sidx',
 *         'order' => 'sord',
 *         'search' => '_search',
 *         'nd' => 'nd',
 *         'id' => 'id',
 *         'oper' => 'oper',
 *         'editoper' => 'edit',
 *         'addoper' => 'add',
 *         'deloper' => 'del',
 *         'subgridid' => 'id',
 *         'npage' => null,
 *         'totalrows' => 'totalrows',
 *     ),
 *     'postData' => new stdClass,
 *     'remapColumns' => array(),
 *     'resizeclass' => '',
 *     'rownumbers' => false,
 *     'rownumWidth' => 25,            // req: $gridOptions['rownumbers'] == true
 *     'rowTotal' => null,             // alt: any integer
 *     'savedRow' => array(),          // READONLY
 *     'scroll' => false,              // alt: true, any integer
 *     'scrollOffset' => 18,
 *     'scrollTimeout' => 40,
 *     'scrollrows' => false,
 *     'search' => false,
 *     'selarrrow' => array(),         // READONLY
 *     'selrow' => null,               // READONLY
 *     'shrinkToFit' => true,          // alt: false, any integer
 *     'sortable' => false,
 *     'sortname' => '',               // req: $gridOptions['datatypes'] == 'xml' OR $gridOptions['datatypes'] == 'json'
 *     'sortorder' => 'asc',           // alt: 'desc'. req: $gridOptions['sortname'] != ''
 *     'toolbar' => array(
 *         false,
 *         '',                         // alt: 'top', 'bottom', 'both'
 *     ),
 *     'toppager' => false,
 *     'totaltime' => 0,               // READONLY
 *     'url' => '',                    // alt: any url
 *     'userData' => new stdClass,     // req: $gridOptions['userDataOnFooter'] == true
 *     'userDataOnFooter' => false,
 *     'viewsortcols' => array(
 *         false,
 *         'vertical',                 // alt: 'horizontal'
 *         true
 *     ),
 *     'width' => null,                // alt: any integer
 *     'xmlReader' => new stdClass,
 * );
 * 
 * // NAVIGATOR. ref: <http://www.trirand.com/jqgridwiki/doku.php?id=wiki:navigator#parameters>
 * $navOptions = array(
 *     'add' => true,
 *     'addicon' => 'ui-icon-plus',
 *     'addtext' => '',
 *     'addtitle' => 'Add new row',
 *     'alertcap' => 'Warning',
 *     'alerttext' => 'Please, select row',
 *     'cloneToTop' => false,
 *     'closeOnEscape' => true,
 *     'del' => true,
 *     'delicon' => 'ui-icon-trash',
 *     'deltext' => '',
 *     'deltitle' => 'Delete selected row',
 *     'edit' => true,
 *     'editicon' => 'ui-icon-pencil',
 *     'edittext' => '',
 *     'edittitle' => 'Edit selected row',
 *     'position' => 'left',
 *     'refresh' => true,
 *     'refreshicon' => 'ui-icon-refresh',
 *     'refreshtext' => '',
 *     'refreshtitle' => 'Reload Grid',
 *     'refreshstate' => 'firstpage',
 *     'afterRefresh' => null,
 *     'beforeRefresh' => null,
 *     'search' => true,
 *     'searchicon' => 'ui-icon-search',
 *     'searchtext' => '',
 *     'searchtitle' => 'Find records',
 *     'view' => false,
 *     'viewicon' => 'ui-icon-document',
 *     'viewtext' => '',
 *     'viewtitle' => 'View selected row',
 *     'addfunc' => null,
 *     'editfunc' => null,
 *     'delfunc' => null,
 * );
 * 
 * // FORM EDITING. ref: <http://www.trirand.com/jqgridwiki/doku.php?id=wiki:navigator#parameters>
 * $editOptions = array(
 *     'addCaption' => 'Add Record',
 *     'editCaption' => 'Edit Record',
 *     'bSubmit' => 'Submit',
 *     'bCancel' => 'Cancel',
 *     'bClose' => 'Close',
 *     'saveData' => 'Data has been changed! Save changes?',
 *     'bYes' => 'Yes',
 *     'bNo' => 'No',
 *     'bExit' => 'Cancel',
 *     'msg' => array(
 *         'required' => 'Field is required',
 *         'number' => 'Please, enter valid number',
 *         'minValue' => 'value must be greater than or equal to ',
 *         'maxValue' => 'value must be less than or equal to',
 *         'email' => 'is not a valid e-mail',
 *         'integer' => 'Please, enter valid integer value',
 *         'date' => 'Please, enter valid date value',
 *         'url' => "is not a valid URL. Prefix required ('http://' or 'https://')",
 *         'nodefined' => ' is not defined!',
 *         'novalue' => ' return value is required!',
 *         'customarray' => 'Custom function should return array!',
 *         'customfcheck' => 'Custom function should be present in case of custom checking!"',
 *     ),
 * 
 *     // reference <http://www.trirand.com/jqgridwiki/doku.php?id=wiki:form_editing#properties>
 *     'top' => 0,
 *     'left' => 0,
 *     'width' => 300,
 *     'height' => 'auto',
 *     'dataheight' => 'auto',
 *     'modal' => false,
 *     'drag' => true,
 *     'resize' => true,
 *     'url' => null,
 *     'mtype' => 'POST',
 *     'editData' => array(),
 *     'recreateForm' => false,
 *     'jqModal' => true,
 *     'addedrow' => 'first',
 *     'topinfo' => '',
 *     'bottominfo' => '',
 *     'saveicon' => array(true, 'left', 'ui-icon-disk'),
 *     'closeicon' => array(true, 'left', 'ui-icon-close'),
 *     'savekey' => array(false, 13),
 *     'navkeys' => array(false, 38, 40),
 *     'checkOnSubmit' => false,
 *     'checkOnUpdate' => false,
 *     'closeAfterAdd' => false,
 *     'clearAfterAdd' => true,
 *     'closeAfterEdit' => false,
 *     'reloadAfterSubmit' => true,
 *     'closeOnEscape' => false,
 *     'ajaxEditOptions' => array(),
 *     'viewPagerButtons' => true,
 *     'zIndex' => 950,
 * );
 * 
 * $addOptions = array(
 *     // ... 
 * );
 * 
 * $delOptions = array(
 *     // reference <http://www.trirand.com/jqgridwiki/doku.php?id=wiki:navigator#parameters>
 *     'caption' => 'Delete',
 *     'msg' => 'Delete selected record(s)?',
 *     'bSubmit' => 'Delete',
 *     'bCancel' => 'Cancel',
 * );
 * 
 * // 1st level: use as less as you needed.
 * // 2nd level: use all, even you do not needed.
 * $searchOptions = array(
 *     // reference <http://www.trirand.com/jqgridwiki/doku.php?id=wiki:navigator#parameters>
 *     'caption' => 'Search...',
 *     'Find' => 'Find',
 *     'Reset' => 'Reset',
 *     'odata' => array(
 *         'equal',
 *         'not equal',
 *         'less',
 *         'less or equal',
 *         'greater',
 *         'greater or equal',
 *         'begins with',
 *         'does not begin with',
 *         'is in',
 *         'is not in',
 *         'ends with',
 *         'does not end with',
 *         'contains',
 *         'does not contain',
 *     ),
 *     'groupOps' => array(
 *         array('op' => 'AND', 'text' => 'all'),
 *         array('op' => 'OR', 'text' => 'any'),
 *     ),
 *     'matchText' => ' match',
 *     'rulesText' => ' rules',
 * );
 * 
 * $viewOptions = array(
 *     'caption' => 'View Record',
 *     'bClose' => 'Close',
 * );
 * 
 * $this->widget(
 *     'ext.JqGrid.JqGrid',
 *     array(
 *         'language' => 'en',
 *         'gridId' => 'demo-grid',
 *         'pagerId' => 'demo-pager',
 *         'gridOptions' => $gridOptions,
 *         'navOptions' => $navOptions,
 *         'editOptions' => $editOptions,
 *         'addOptions' => $addOptions,
 *         'delOptions' => $delOptions,
 *         'searchOptions' => $searchOptions,
 *         'viewOptions' => $viewOptions,
 * 
 *         'coreCss' => true,
 *         'coreJs' => true,
 *         'forceCopyAssets' => true,
 *     ),
 * );
 * ?>
 * 
 * See also:<https://github.com/tonytomov/jqGrid>
 */
class JqGrid extends CWidget
{

    public $language = 'en';
    public $gridId;
    public $pagerId;
    public $gridOptions = array();
    public $navOptions = array();
    public $editOptions = array();
    public $addOptions = array();
    public $delOptions = array();
    public $searchOptions = array();
    public $viewOptions = array();
    public $coreCss = true;
    public $coreJs = true;
    public $forceCopyAssets = true;

    /**
     * @var array the HTML attributes that should be rendered in the HTML tag representing the JUI widget.
     */
    public $htmlOptions = array();

    /**
     * @var string handles the assets folder path.
     */
    protected $_assetsUrl;

    public function init()
    {
        // Register the jqgrid path alias.
        if (Yii::getPathOfAlias('jqgrid') === false) {
            Yii::setPathOfAlias('jqgrid', realpath(dirname(__FILE__) . '/'));
        }

        if ($this->coreCss !== false) {
            $this->registerAssetCss('custom.css');
            $this->registerAssetCss('black-tie/jquery.ui.theme.css');
            $this->registerAssetCss('overide.css');
            $this->registerAssetCss('ui.jqgrid.css');
        }

        if ($this->coreJs !== false) {
            $this->registerJS('jquery.jqGrid.js');
        }
    }

    /**
     * Registers a specific css in the asset's css folder
     * @param string $cssFile the css file name to register
     * @param string $media the media that the CSS file should be applied to. If empty, it means all media types.
     */
    public function registerAssetCss($cssFile, $media = '')
    {
        Yii::app()->getClientScript()->registerCssFile($this->getAssetsUrl() . "/css/{$cssFile}", $media);
    }

    /**
     * Registers the jqgrid JavaScript.
     * @param int $position the position of the JavaScript code.
     * @see CClientScript::registerScriptFile
     */
    public function registerJS($jsFile, $position = CClientScript::POS_HEAD)
    {
        /* @var CClientScript $cs */
        $cs = Yii::app()->getClientScript();
        $cs->registerCoreScript('jquery');
        $cs->registerCoreScript('jquery.ui');
        $cs->registerScriptFile($this->getAssetsUrl() . "/js/{$jsFile}", $position);
    }

    public function run()
    {
        $gridId = $this->gridId;

        echo '<table id="'.$gridId.'"></table>';

        if ($this->pagerId) {
            $pagerId = $this->pagerId;
            echo '<div id="'.$pagerId.'"></div>';
            $this->gridOptions['pager'] = '#'.$pagerId;
        }

        $gridOptions = CJavaScript::encode($this->gridOptions);

        $cs = Yii::app()->getClientScript();
        $cs->registerScript(
            __CLASS__ .'_'.$gridId,
            "   $.extend(true, params, {$gridOptions})
                var jqPar = convertParam(params);
                $(function(){jQuery('#{$gridId}').jqGrid(jqPar.grid);})
            "
        );

        if ($this->pagerId) {
            if (count($this->navOptions)) {
                $navOptions = CJavaScript::encode($this->navOptions);
            } else {
                $navOptions = '{}';
            }

            if (count($this->editOptions)) {
                $editOptions = CJavaScript::encode($this->editOptions);
            } else {
                $editOptions = '{}';
            }

            $cs->registerScript(
                __CLASS__ .'_'.$pagerId,
                "$(function(){
                    jQuery('#{$gridId}').jqGrid(
                        'navGrid',
                        '#{$pagerId}',
                        jqPar.navBar,
                        jqPar.editWdw
                    );
                })"
            );
        }

        $cs->registerScriptFile($this->getAssetsUrl() . '/js/i18n/grid.locale-' . $this->language . '.js');
        $cs->registerScriptFile($this->getAssetsUrl() . "/js/jquery.jqGrid.parConvert.js");
    }

    /**
     * Returns the URL to the published assets folder.
     * @return string the URL
     */
    public function getAssetsUrl()
    {
        if (isset($this->_assetsUrl)) {
            return $this->_assetsUrl;
        } else {
            $assetsPath = Yii::getPathOfAlias('jqgrid.assets');
            $assetsUrl = Yii::app()->assetManager->publish($assetsPath, false, -1, $this->forceCopyAssets);
            return $this->_assetsUrl = $assetsUrl;
        }
    }
}
