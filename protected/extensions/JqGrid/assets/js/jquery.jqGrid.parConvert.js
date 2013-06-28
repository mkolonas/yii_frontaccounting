var defaultColModel = {
	align: 'left',         // ori: 'align'. alt: 'center', 'right'
	attribute: null,       // ori: 'cellattr'. alt: any function(rowId, val, rawObj, colModel, rowData){} which return string
	classes: '',           // ori: 'classes'. alt: 'ui-ellipsis' or any string
	dateFormat: 'Y-m-d',   // ori: 'datefmt'. note: y, Y, yyyy (4 digits year); YY, yy (2 digits year); m, mm (months); d, dd (days). used by $colModel[]['sorttype'] == 'date' and $colModel[]['editrules']['date'] == true
	defVal: '',            // ori: 'defval'
	isEditable: false,     // ori: 'editable'
	editOptions: [],       // ori: 'editoptions'. req: $colModel[]['editable'] == true. note: override by $gridOptions['ajaxSelectOptions']
	editRules: [],         // ori: 'editrules'
	editType: 'text',      // ori: 'edittype'. alt: 'textarea', 'select', 'checkbox', 'password', 'button', 'image' 'file'
	firstSortOrder: null,  // ori: 'firstsortorder'. alt: 'asc', 'desc'
	isFixed: false,        // ori: 'fixed'
	formOptions: [],       // ori: 'formoptions'
	formatOptions: [],     // ori: 'formatoptions'
	formatter: [],         // ori: 'formatter'
	isFrozen: false,       // ori: 'frozen'
	isHideDialog: false,   // ori: 'hidedlg'
	isHidden: false,       // ori: 'hidden'
	index: '',             // ori: 'index'
	jsonMap: '',           // ori: 'jsonmap'
	asKey: false,          // ori: 'key'
	label: '',             // ori: 'label'
	name: '',              // ori: 'name'. note: COLUMN_NAME
	isResizable: true,     // ori: 'resizable'
	isSearchable: true,    // ori: 'search'
	searchOptions: [],     // ori: 'searchoptions'. req: $gridOptions['ajaxSelectOptions']
	isSortable: true,      // ori: 'sortable'
	sortType: 'text',      // ori: 'sorttype'. alt: 'int', 'integer', 'float', 'number', 'currency', 'date', function(val){} which return val
	sType: 'text',         // ori: 'stype'
	selectUrl: '',         // ori: 'surl'. req: $colModel[]['edittype'] == 'select'
	template: [],          // ori: 'template'
	title: true,           // ori: 'title'
	width: 150,            // ori: 'width'
	xmlMap: '',            // ori: 'xmlmap'
	unformat: null,        // ori: 'unformat'
	isViewable: true       // ori: 'viewable'
};

var params = {
	grid: {
		visible: true,
		caption: {
			text: '',
			showButton: true, // req: grid.caption.text != ''
		},
		geo: {
			width: null, // alt: any integer. 
			height: 150, // alt: number, '100%', 'auto'
			applyAutoWidth: false,
			applyShrinkToFit: true, // alt: false, any integer
			applyForcedFit: false, // req: grid.geo.applyShrinkToFit == true
		},
		cellEdit: {
			apply: false,
			submitType: 'remote', // alt: 'clientArray'
			url: null,
			ajax: {},
		},
		subGrid: { // req: grid.gridView.applied == false
			apply: false,
			model: [],
			options: [],
			type: null, // alt: same as grid.data.type
			url: '',
			width: 20,
			event: {
				onBeforeExpand: null,
				onRowExpand: null,
				onRowColapse: null,
				onSerializeData: null,
			},
		},
		treeGrid: { // req: grid.gridView.applied == false
			apply: false,
			aNode: -1,
			dataType: null, // alt: same as grid.data.type
			model: 'nested', // alt: 'adjacency'
			icon: { // alt: any theme roller images
				plus: 'ui-icon-triangle-1-e',
				minus: 'ui-icon-triangle-1-s',
				leaf: 'ui-icon-radio-off',
			},
			reader: {},
			rootLevel: 0,
			applyExpandColumnClick: true,
		},
		gridView: {
			apply: false,
		},
		data: {
			options: [],
			str: null,
			type: 'xml', // alt: 'xmlstring', 'json', 'jsonstring', 'local', 'javascript', 'function', 'clientSide'. note: $gridOptions['loadonce'] == true -> $gridOptions['datatype'] == 'local'
		},
		dataRmt: {
			url: '', // alt: any url
			method: 'GET', // alt: 'POST'
			prmName: { // alt: any valid url query string
				page: 'page',
				rows: 'rows',
				sort: 'sidx',
				order: 'sord',
				search: '_search',
				nd: 'nd',
				id: 'id',
				oprt: 'oper',
				editOprt: 'edit',
				addOprt: 'add',
				delOprt: 'del',
				subGridId: 'id',
				nPage: null,
				totalRows: 'totalrows',
			},
			loadingText: 'Loading...', // alt: any string
			loadUi: 'enable', // alt: 'disable', 'block'
		},
		dataLcl: {
			applyMultiSort: false, // req: grid.data.type == 'local'
		},
		column: {
			template: {},
			names: [], // req: column.model.length == column.names.length
			models: [],
		},
		row: {
			applyHover: true,
			alternateFormat: {
				apply: false,
				cssClass: 'ui-priority-secondary',
			},
			emptyRecordText: 'No records to view', // alt: any string. req: $gridOptions['viewrecords'] == true
			multiSelect: {
				apply: false,
				applyBoxOnly: false,
				boxCellWidth: 20,
				useKey: false, // alt: 'shiftKey', 'altKey', 'ctrlKey'.
			},
			applyDeselectAfterSort: true, // req: grid.data.type == 'local'
			applyFooter: false,
			numbering: {
				apply: false,
				width: 25,
			},
			event: {
				onRightClick: null,
				onSelect: null,
				onSelectAll: null,
			},
		},
		cell: {
			layout: 5,
			direction: 'ltr', // alt: 'rtl'
		},

		// NOT CATEGORIZED YET.
		afterInsertRow: null, // req: grid.gridView.applied == false
		ajaxGridOptions: {},
		ajaxSelectOptions: {},
		applyAutoEncode: false,
		beforeProcessing: null,
		beforeRequest: null,
		beforeSelectRow: null,
		applyDeepEmpty: false,
		editUrl: null, // req: grid.cellEdit.submitType == 'clientArray'
		expandColumn: null, // req: grid.treeGrid.apply == true
		gridComplete: null,
		gridState: 'visible', // alt: 'hidden'. req: grid.caption != ''
		hasGrouping: false,
		groupingView: {
			groupField: [],
			groupOrder: [],
			groupText: [],
			groupColumnShow: [],
			groupSummary: [],
			showSummaryOnHide: false,
			sortItems: [],
			sortNames: [],
			summary: [],
			summaryVal: [],
			plusIcon: 'ui-icon-circlesmall-plus',
			minusIcon: 'ui-icon-circlesmall-minus',
			displayField: [],
		},
		hasHeaderTitles: false,
		idPrefix: '',
		applyIgnoreCase: false,
		inlineData: {},
		jsonReader: {},
		xmlReader: {},
		lastSort: 0,
		loadBeforeSend: null,
		loadComplete: null,
		loadError: null,
		applyLoadOnce: false,
		nv: 0,
		onDoubleClickRow: null,
		onHeaderClick: null,
		onInitGrid: null,
		onPaging: null,
		onSortCol: null,
		page: 1,
		postData: {},
		remapColumns: [],
		resizeClass: '',
		rowTotal: null, // alt: any integer
		savedRow: [], // ori: 'savedRow'. READONLY
		selArrRow: [], // ori: 'selarrrow'. READONLY
		selRow: null, // ori: 'selrow'. READONLY
		totalTime: 0, // ori: 'totaltime'. READONLY
		scroll: false, // alt: true, any integer
		scrollOffset: 18,
		scrollTimeout: 40,
		scrollrows: false,
		isSearchable: false,
		isSortable: false,
		sortName: '', // req: grid.data.types == 'xml' OR grid.data.types == 'json'
		sortOrder: 'asc', // alt: 'desc'. req: $gridOptions['sortname'] != ''
		toolbar: [
			false,
			'', // alt: 'top', 'bottom', 'both'
		],
		topPager: false,
		userData: {}, // req: $gridOptions['userDataOnFooter'] == true
		viewUserDataOnFooter: false,
		viewSortCols: [
			false,
			'vertical', // alt: 'horizontal'
			true
		],
	},
	navBar: { // ref: <http://www.trirand.com/jqgridwiki/doku.php?id=wiki:navigator#parameters>
		htmlElm: '',
		position: 'left',
		isCloneToTop: false,
		isCloseOnEscape: true,
		pager: { // ref: <http://www.trirand.com/jqgridwiki/doku.php?id=wiki:pager#properties>
			visible: true, // hypothesis
			position: 'center', // alt: 'right', 'left'
			text: 'Page {0} of {1}',
			pageBtn: {
				visible: true,
				firstIcon: null, // hypothesis
				prevIcon: null, // hypothesis
				nextIcon: null, // hypothesis
				lastIcon: null, // hypothesis
			},
			pageInput: {
				visible: true,
			},
		},
		data: {
			visible: false,
			position: 'right', // alt: 'center', 'left'
			text: 'View {0} - {1} of {2}',
			rowList: [], // alt: any array of integer
			rowNum: 20,

			lastPage: 0,
			recordCount: 0, // ori: 'reccount'. READONLY
			records: 0, // ori: 'records'. READONLY
		},
		actBtn: {
			visible: true, // hypothesis
			position: 'left',
			addBtn: {
				visible: true,
				icon: 'ui-icon-plus',
				text: '',
				title: 'Add new row',
				callback: null,
			},
			editBtn: {
				visible: true,
				icon: 'ui-icon-pencil',
				text: '',
				title: 'Edit selected row',
				callback: null,
			},
			delBtn: {
				visible: true,
				icon: 'ui-icon-trash',
				text: '',
				title: 'Delete selected row',
				callback: null,
			},
			srcBtn: {
				visible: true,
				icon: 'ui-icon-search',
				text: '',
				title: 'Find records',
			},
			viewBtn: {
				visible: false,
				icon: 'ui-icon-document',
				text: '',
				title: 'View selected row',
			},
			refreshBtn: {
				visible: true,
				icon: 'ui-icon-refresh',
				text: '',
				title: 'Reload Grid',
				state: 'firstpage',
				afterRefresh: null,
				beforeRefresh: null,
			},
		},
	},
	alertRowWdw: {
		caption: 'Warning',
		text: 'Please, select row',
	},
	editWdw: { // ref: <http://www.trirand.com/jqgridwiki/doku.php?id=wiki:navigator#parameters>
		geo: {
			top: 0,
			left: 0,
			width: 300,
			height: 'auto',
			zIndex: 950,
		},
		bhvr: {
			dragable: true,
			resizable: true,
			recreatable: false,
			closeOnEscape: false,
			asModal: false,
			closeAfterEdit: false,
			reloadAfterSubmit: true,
		},
		caption: 'Edit Record',
		submitBtn: {
			text: 'Submit',
			icon: [true, 'left', 'ui-icon-disk'],
		},
		cancelBtn: {
			text: 'Cancel',
			icon: null, // hypothesis
		},
		closeBtn: {
			text: 'Close',
			icon: [true, 'left', 'ui-icon-close'],
		},
		yesBtn: {
			text: 'Yes',
			icon: null, // hypothesis
		},
		noBtn: {
			text: 'No',
			icon: null, // hypothesis
		},
		exitBtn: {
			text: 'Cancel',
			icon: null, // hypothesis
		},
		pagerBtn: {
			visible: true,
			prevIcon: null, // hypothesis
			nextIcon: null, // hypothesis
		},
		msgText: {
			dataNotYetSaved: 'Data has been changed! Save changes?',
			emptyRequiredVal: 'Field is required',
			wrongNumberVal: 'Please, enter valid number',
			exceedMinVal: 'value must be greater than or equal to ',
			exceedMaxVal: 'value must be less than or equal to',
			wrongEmailVal: 'is not a valid e-mail',
			wrongIntegerVal: 'Please, enter valid integer value',
			wrongDateVal: 'Please, enter valid date value',
			wrongUrlVal: "is not a valid URL. Prefix required ('http://' or 'https://')",
			notDefinedVal: ' is not defined!',
			noReturnVal: ' return value is required!',
			wrongReturnArrayVal: 'Custom function should return array!',
			customFuncCheckNotExist: 'Custom function should be present in case of custom checking!"',
		},
		data: { // ref: <http://www.trirand.com/jqgridwiki/doku.php?id=wiki:form_editing#properties>
			dataHeight: 'auto',
			url: null,
			method: 'POST',
			editData: [],
			asJqModal: true,
			addedRow: 'first',
			topInfo: '',
			bottomInfo: '',
			saveKey: [false, 13],
			navKeys: [false, 38, 40],
			checkOnSubmit: false,
			checkOnUpdate: false,
			ajaxEditOptions: [],
		},
	},
	addWdw: {
		caption: 'Add Record',
		behaviour: {
			closeAfterAdd: false,
			clearAfterAdd: true,
		},
	},
	delWdw: { // ref: <http://www.trirand.com/jqgridwiki/doku.php?id=wiki:navigator#parameters>
		caption: 'Delete',
		text: 'Delete selected record(s)?',
		submitBtn: {
			text: 'Delete',
			icon: null,
		},
		cancelBtn: {
			text: 'Cancel',
			icon: null,
		}
	},
	searchWdw: { // ref: <http://www.trirand.com/jqgridwiki/doku.php?id=wiki:navigator#parameters>
		caption: 'Search...',
		findBtn: {
			text: 'Find',
			icon: null,
		},
		resetBtn: {
			text: 'Reset',
			icon: null,
		},
		compareText: [
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
		],
		groupText: [
			{op: 'AND', text: 'all'},
			{op: 'OR', text: 'any'},
		],
		matchText: ' match',
		rulesText: ' rules',
	},
	viewWdw: {
		caption: 'View Record',
		closeBtn: {
			text: 'Close',
			icon: null,
		},
	},
};

function convertParam(ori) {
	var map = {
		grid: {
			treeIcons: {},
			prmNames: {},
			groupingView: {},
			toolbar: [],
			viewsortcols: [],
		},
		navBar:{},
		edit:{
			msg: {},
		},
		del:{},
		src:{
			odata: [],
			groupOps: [],
		},
		view:{}
	};

	map.grid.hiddengrid            = !ori.grid.visible;
	map.grid.caption               = ori.grid.caption.text;
	map.grid.hidegrid              = ori.grid.caption.showButton;
	map.grid.width                 = ori.grid.geo.width;
	map.grid.height                = ori.grid.geo.height;
	map.grid.autowidth             = ori.grid.geo.applyAutoWidth;
	map.grid.shrinkToFit           = ori.grid.geo.applyShrinkToFit;
	map.grid.forceFit              = ori.grid.geo.applyForcedFit;
	map.grid.cellEdit              = ori.grid.cellEdit.apply;
	map.grid.cellsubmit            = ori.grid.cellEdit.submitType;
	map.grid.cellurl               = ori.grid.cellEdit.url;
	map.grid.ajaxCellOptions       = ori.grid.cellEdit.ajax;
	map.grid.subGrid               = ori.grid.subGrid.apply;
	map.grid.subGridModel          = ori.grid.subGrid.model;
	map.grid.subGridOptions        = ori.grid.subGrid.options;
	map.grid.subGridType           = ori.grid.subGrid.type;
	map.grid.subGridUrl            = ori.grid.subGrid.url;
	map.grid.subGridWidth          = ori.grid.subGrid.width;
	map.grid.subGridBeforeExpand   = ori.grid.subGrid.event.onBeforeExpand;
	map.grid.subGridRowExpanded    = ori.grid.subGrid.event.onRowExpand;
	map.grid.subGridRowColapsed    = ori.grid.subGrid.event.onRowColapse;
	map.grid.serializeSubGridData  = ori.grid.subGrid.event.onSerializeData;
	map.grid.treeGrid              = ori.grid.treeGrid.apply;
	map.grid.treeANode             = ori.grid.treeGrid.aNode;
	map.grid.treedatatype          = ori.grid.treeGrid.dataType;
	map.grid.treeGridModel         = ori.grid.treeGrid.model;
	map.grid.treeIcons.plus        = ori.grid.treeGrid.icon.plus;
	map.grid.treeIcons.minus       = ori.grid.treeGrid.icon.minus;
	map.grid.treeIcons.leaf        = ori.grid.treeGrid.icon.leaf;
	map.grid.treeReader            = ori.grid.treeGrid.reader;
	map.grid.tree_root_level       = ori.grid.treeGrid.rootLevel;
	map.grid.ExpandColClick        = ori.grid.treeGrid.applyExpandColumnClick;
	map.grid.gridview              = ori.grid.gridView.apply;
	map.grid.data                  = ori.grid.data.options;
	map.grid.datastr               = ori.grid.data.str;
	map.grid.datatype              = ori.grid.data.type;
	map.grid.url                   = ori.grid.dataRmt.url;
	map.grid.mtype                 = ori.grid.method;
	map.grid.prmNames.page         = ori.grid.dataRmt.prmName.page;
	map.grid.prmNames.rows         = ori.grid.dataRmt.prmName.rows;
	map.grid.prmNames.sort         = ori.grid.dataRmt.prmName.sort;
	map.grid.prmNames.order        = ori.grid.dataRmt.prmName.order;
	map.grid.prmNames.search       = ori.grid.dataRmt.prmName.search;
	map.grid.prmNames.nd           = ori.grid.dataRmt.prmName.nd;
	map.grid.prmNames.id           = ori.grid.dataRmt.prmName.id;
	map.grid.prmNames.oper         = ori.grid.dataRmt.prmName.oprt;
	map.grid.prmNames.editoper     = ori.grid.dataRmt.prmName.editOprt;
	map.grid.prmNames.addoper      = ori.grid.dataRmt.prmName.addOprt;
	map.grid.prmNames.deloper      = ori.grid.dataRmt.prmName.delOprt;
	map.grid.prmNames.subgridid    = ori.grid.dataRmt.prmName.subGridId;
	map.grid.prmNames.npage        = ori.grid.dataRmt.prmName.nPage;
	map.grid.prmNames.totalrows    = ori.grid.dataRmt.prmName.totalRows;
	map.grid.loadtext              = ori.grid.dataRmt.loadingText;
	map.grid.loadui                = ori.grid.dataRmt.loadUi;
	map.grid.multiSort             = ori.grid.dataLcl.applyMultiSort;
	map.grid.cmTemplate            = ori.grid.column.template;
	map.grid.colNames              = ori.grid.column.names;
	map.grid.colModel              = ori.grid.column.models;
	map.grid.hoverrows             = ori.grid.row.applyHover;
	map.grid.altRows               = ori.grid.row.alternateFormat.apply;
	map.grid.altclass              = ori.grid.row.alternateFormat.cssClass;
	map.grid.emptyrecords          = ori.grid.row.emptyRecordText;
	map.grid.multiselect           = ori.grid.row.multiSelect.apply;
	map.grid.multiboxonly          = ori.grid.row.multiSelect.applyBoxOnly;
	map.grid.multiselectWidth      = ori.grid.row.multiSelect.boxCellWidth;
	map.grid.multikey              = ori.grid.row.multiSelect.useKey;
	map.grid.deselectAfterSort     = ori.grid.row.applyDeselectAfterSort;
	map.grid.footerrow             = ori.grid.row.applyFooter;
	map.grid.rownumbers            = ori.grid.row.numbering.apply;
	map.grid.rownumWidth           = ori.grid.row.numbering.width;
	map.grid.onRightClickRow       = ori.grid.row.event.onRightClick;
	map.grid.onSelectRow           = ori.grid.row.event.onSelect;
	map.grid.onSelectAll           = ori.grid.row.event.onSelectAll;
	map.grid.cellLayout            = ori.grid.cell.layout;
	map.grid.direction             = ori.grid.cell.direction;

	map.grid.afterInsertRow                 = ori.grid.afterInsertRow;
	map.grid.ajaxGridOptions                = ori.grid.ajaxGridOptions;
	map.grid.ajaxSelectOptions              = ori.grid.ajaxSelectOptions;
	map.grid.autoencode                     = ori.grid.applyAutoEncode;
	map.grid.beforeProcessing               = ori.grid.beforeProcessing;
	map.grid.beforeRequest                  = ori.grid.beforeRequest;
	map.grid.beforeSelectRow                = ori.grid.beforeSelectRow;
	map.grid.deepempty                      = ori.grid.applyDeepEmpty;
	map.grid.editurl                        = ori.grid.editUrl;
	map.grid.ExpandColumn                   = ori.grid.expandColumn;
	map.grid.gridComplete                   = ori.grid.gridComplete;
	map.grid.gridstate                      = ori.grid.gridState;
	map.grid.grouping                       = ori.grid.hasGrouping;
	map.grid.groupingView.groupField        = ori.grid.groupingView.groupField;
	map.grid.groupingView.groupOrder        = ori.grid.groupingView.groupOrder;
	map.grid.groupingView.groupText         = ori.grid.groupingView.groupText;
	map.grid.groupingView.groupColumnShow   = ori.grid.groupingView.groupColumnShow;
	map.grid.groupingView.groupSummary      = ori.grid.groupingView.groupSummary;
	map.grid.groupingView.showSummaryOnHide = ori.grid.groupingView.showSummaryOnHide;
	map.grid.groupingView.sortitems         = ori.grid.groupingView.sortItems;
	map.grid.groupingView.sortnames         = ori.grid.groupingView.sortNames;
	map.grid.groupingView.summary           = ori.grid.groupingView.summary;
	map.grid.groupingView.summaryval        = ori.grid.groupingView.summaryVal;
	map.grid.groupingView.plusicon          = ori.grid.groupingView.plusIcon;
	map.grid.groupingView.minusicon         = ori.grid.groupingView.minusIcon;
	map.grid.groupingView.displayField      = ori.grid.groupingView.displayField;
	map.grid.headertitles                   = ori.grid.hasHeaderTitles;
	map.grid.idPrefix                       = ori.grid.idPrefix;
	map.grid.ignoreCase                     = ori.grid.applyIgnoreCase;
	map.grid.inlineData                     = ori.grid.inlineData;
	map.grid.jsonReader                     = ori.grid.jsonReader;
	map.grid.xmlReader                      = ori.grid.xmlReader;
	map.grid.lastsort                       = ori.grid.lastSort;
	map.grid.loadBeforeSend                 = ori.grid.loadBeforeSend;
	map.grid.loadComplete                   = ori.grid.loadComplete;
	map.grid.loadError                      = ori.grid.loadError;
	map.grid.loadonce                       = ori.grid.applyLoadOnce;
	map.grid.nv                             = ori.grid.nv;
	map.grid.ondblClickRow                  = ori.grid.onDoubleClickRow;
	map.grid.onHeaderClick                  = ori.grid.onHeaderClick;
	map.grid.onInitGrid                     = ori.grid.onInitGrid;
	map.grid.onPaging                       = ori.grid.onPaging;
	map.grid.onSortCol                      = ori.grid.onSortCol;
	map.grid.page                           = ori.grid.page;
	map.grid.postData                       = ori.grid.postData;
	map.grid.remapColumns                   = ori.grid.remapColumns;
	map.grid.resizeclass                    = ori.grid.resizeClass;
	map.grid.rowTotal                       = ori.grid.rowTotal;
	map.grid.scroll                         = ori.grid.scroll;
	map.grid.scrollOffset                   = ori.grid.scrollOffset;
	map.grid.scrollTimeout                  = ori.grid.scrollTimeout;
	map.grid.scrollrows                     = ori.grid.scrollRows;
	map.grid.search                         = ori.grid.isSearchable;
	map.grid.sortable                       = ori.grid.isSortable;
	map.grid.sortname                       = ori.grid.sortName;
	map.grid.sortorder                      = ori.grid.sortOrder;
	map.grid.toolbar[0]                     = ori.grid.toolbar[0];
	map.grid.toolbar[1]                     = ori.grid.toolbar[1];
	map.grid.toppager                       = ori.grid.topPager;
	map.grid.userData                       = ori.grid.userData;
	map.grid.userDataOnFooter               = ori.grid.viewUserDataOnFooter;
	map.grid.viewsortcols[0]                = ori.grid.viewSortCols[0];
	map.grid.viewsortcols[1]                = ori.grid.viewSortCols[1];
	map.grid.viewsortcols[2]                = ori.grid.viewSortCols[2];

	map.grid.pager           = ori.navBar.htmlElm;
	map.navBar.position      = ori.navBar.position;
	map.navBar.cloneToTop    = ori.navBar.applyCloneToTop;
	map.navBar.closeOnEscape = ori.navBar.isCloseOnEscape;
	map.navBar.x             = ori.navBar.pager.visible;
	map.grid.pagerpos        = ori.navBar.pager.position;
	map.navBar.pgtext        = ori.navBar.pager.text;
	map.grid.pgbuttons       = ori.navBar.pager.pageBtn.visible;
	map.navBar.x             = ori.navBar.pager.pageBtn.firstIcon;
	map.navBar.x             = ori.navBar.pager.pageBtn.prevIcon;
	map.navBar.x             = ori.navBar.pager.pageBtn.nextIcon;
	map.navBar.x             = ori.navBar.pager.pageBtn.lastIcon;
	map.grid.pginput         = ori.navBar.pager.pageInput.visible;
	map.grid.viewrecords     = ori.navBar.data.visible;
	map.grid.recordpos       = ori.navBar.data.position;
	map.grid.recordtext      = ori.navBar.data.text;
	map.grid.lastpage        = ori.navBar.data.lastPage;
	map.grid.rowList         = ori.navBar.data.rowList;
	map.grid.rowNum          = ori.navBar.data.rowNum;
	map.navBar.x             = ori.navBar.actBtn.visible;
	map.navBar.x             = ori.navBar.actBtn.position;
	map.navBar.add           = ori.navBar.actBtn.addBtn.visible;
	map.navBar.addicon       = ori.navBar.actBtn.addBtn.icon;
	map.navBar.addtext       = ori.navBar.actBtn.addBtn.text;
	map.navBar.addtitle      = ori.navBar.actBtn.addBtn.title;
	map.navBar.addfunc       = ori.navBar.actBtn.addBtn.callback;
	map.navBar.edit          = ori.navBar.actBtn.editBtn.visible;
	map.navBar.editicon      = ori.navBar.actBtn.editBtn.icon;
	map.navBar.edittext      = ori.navBar.actBtn.editBtn.text;
	map.navBar.edittitle     = ori.navBar.actBtn.editBtn.title;
	map.navBar.editfunc      = ori.navBar.actBtn.editBtn.callback;
	map.navBar.del           = ori.navBar.actBtn.delBtn.visible;
	map.navBar.delicon       = ori.navBar.actBtn.delBtn.icon;
	map.navBar.deltext       = ori.navBar.actBtn.delBtn.text;
	map.navBar.deltitle      = ori.navBar.actBtn.delBtn.title;
	map.navBar.delfunc       = ori.navBar.actBtn.delBtn.callback;
	map.navBar.search        = ori.navBar.actBtn.srcBtn.visible;
	map.navBar.searchicon    = ori.navBar.actBtn.srcBtn.icon;
	map.navBar.searchtext    = ori.navBar.actBtn.srcBtn.text;
	map.navBar.searchtitle   = ori.navBar.actBtn.srcBtn.title;
	map.navBar.view          = ori.navBar.actBtn.viewBtn.visible;
	map.navBar.viewicon      = ori.navBar.actBtn.viewBtn.icon;
	map.navBar.viewtext      = ori.navBar.actBtn.viewBtn.text;
	map.navBar.viewtitle     = ori.navBar.actBtn.viewBtn.title;
	map.navBar.refresh       = ori.navBar.actBtn.refreshBtn.visible;
	map.navBar.refreshicon   = ori.navBar.actBtn.refreshBtn.icon;
	map.navBar.refreshtext   = ori.navBar.actBtn.refreshBtn.text;
	map.navBar.refreshtitle  = ori.navBar.actBtn.refreshBtn.title;
	map.navBar.refreshstate  = ori.navBar.actBtn.refreshBtn.state;
	map.navBar.afterRefresh  = ori.navBar.actBtn.refreshBtn.afterRefresh;
	map.navBar.beforeRefresh = ori.navBar.actBtn.refreshBtn.beforeRefresh;

	map.navBar.alertcap  = ori.alertRowWdw.caption;
	map.navBar.alerttext = ori.alertRowWdw.text;

	map.edit.top               = ori.editWdw.geo.top;
	map.edit.left              = ori.editWdw.geo.left;
	map.edit.width             = ori.editWdw.geo.width;
	map.edit.height            = ori.editWdw.geo.height;
	map.edit.zIndex            = ori.editWdw.geo.zIndex;
	map.edit.drag              = ori.editWdw.bhvr.dragable;
	map.edit.resize            = ori.editWdw.bhvr.resizable;
	map.edit.recreateForm      = ori.editWdw.bhvr.recreatable;
	map.edit.closeOnEscape     = ori.editWdw.bhvr.closeOnEscape;
	map.edit.modal             = ori.editWdw.bhvr.asModal;
	map.edit.closeAfterEdit    = ori.editWdw.bhvr.closeAfterEdit;
	map.edit.reloadAfterSubmit = ori.editWdw.bhvr.reloadAfterSubmit;
	map.edit.editCaption       = ori.editWdw.caption;
	map.edit.bSubmit           = ori.editWdw.submitBtn.text;
	map.edit.saveicon          = ori.editWdw.submitBtn.icon;
	map.edit.bCancel           = ori.editWdw.cancelBtn.text;
	map.edit.x                 = ori.editWdw.cancelBtn.icon;
	map.edit.bClose            = ori.editWdw.closeBtn.text;
	map.edit.closeicon         = ori.editWdw.closeBtn.icon;
	map.edit.bYes              = ori.editWdw.yesBtn.text;
	map.edit.x                 = ori.editWdw.yesBtn.icon;
	map.edit.bNo               = ori.editWdw.noBtn.text;
	map.edit.x                 = ori.editWdw.noBtn.icon;
	map.edit.bExit             = ori.editWdw.exitBtn.text;
	map.edit.x                 = ori.editWdw.exitBtn.icon;
	map.edit.viewPagerBtns     = ori.editWdw.pagerBtn.visible;
	map.edit.x                 = ori.editWdw.pagerBtn.prevIcon;
	map.edit.x                 = ori.editWdw.pagerBtn.nextIcon;
	map.edit.msg.saveData      = ori.editWdw.msgText.dataNotYetSaved;
	map.edit.msg.required      = ori.editWdw.msgText.emptyRequiredVal;
	map.edit.msg.number        = ori.editWdw.msgText.wrongNumberVal;
	map.edit.msg.minValue      = ori.editWdw.msgText.exceedMinVal;
	map.edit.msg.maxValue      = ori.editWdw.msgText.exceedMaxVal;
	map.edit.msg.email         = ori.editWdw.msgText.wrongEmailVal;
	map.edit.msg.integer       = ori.editWdw.msgText.wrongIntegerVal;
	map.edit.msg.date          = ori.editWdw.msgText.wrongDateVal;
	map.edit.msg.url           = ori.editWdw.msgText.wrongUrlVal;
	map.edit.msg.nodefined     = ori.editWdw.msgText.notDefinedVal;
	map.edit.msg.novalue       = ori.editWdw.msgText.noReturnVal;
	map.edit.msg.customarray   = ori.editWdw.msgText.wrongReturnArrayVal;
	map.edit.msg.customfcheck  = ori.editWdw.msgText.customFuncCheckNotExist;
	map.edit.dataheight        = ori.editWdw.data.dataHeight;
	map.edit.url               = ori.editWdw.data.url;
	map.edit.mtype             = ori.editWdw.data.method;
	map.edit.editData          = ori.editWdw.data.editData;
	map.edit.jqModal           = ori.editWdw.data.asJqModal;
	map.edit.addedrow          = ori.editWdw.data.addedRow;
	map.edit.topinfo           = ori.editWdw.data.topInfo;
	map.edit.bottominfo        = ori.editWdw.data.bottomInfo;
	map.edit.savekey           = ori.editWdw.data.saveKey;
	map.edit.navkeys           = ori.editWdw.data.navKeys;
	map.edit.checkOnSubmit     = ori.editWdw.data.checkOnSubmit;
	map.edit.checkOnUpdate     = ori.editWdw.data.checkOnUpdate;
	map.edit.ajaxEditOptions   = ori.editWdw.data.ajaxEditOptions;

	map.edit.addCaption    = ori.addWdw.caption;
	map.edit.closeAfterAdd = ori.addWdw.behaviour.closeAfterAdd;
	map.edit.clearAfterAdd = ori.addWdw.behaviour.clearAfterAdd;

	map.del.caption = ori.delWdw.caption;
	map.del.msg     = ori.delWdw.text;
	map.del.bSubmit = ori.delWdw.submitBtn.text;
	map.del.x       = ori.delWdw.submitBtn.icon;
	map.del.bCancel = ori.delWdw.cancelBtn.text;
	map.del.x       = ori.delWdw.cancelBtn.icon;

	map.src.caption     = ori.searchWdw.caption;
	map.src.Find        = ori.searchWdw.findBtn.text;
	map.src.x           = ori.searchWdw.findBtn.icon;
	map.src.Reset       = ori.searchWdw.resetBtn.text;
	map.src.x           = ori.searchWdw.resetBtn.icon;
	map.src.odata[0]    = ori.searchWdw.compareText[0];
	map.src.odata[1]    = ori.searchWdw.compareText[1];
	map.src.odata[2]    = ori.searchWdw.compareText[2];
	map.src.odata[3]    = ori.searchWdw.compareText[3];
	map.src.odata[4]    = ori.searchWdw.compareText[4];
	map.src.odata[5]    = ori.searchWdw.compareText[5];
	map.src.odata[6]    = ori.searchWdw.compareText[6];
	map.src.odata[7]    = ori.searchWdw.compareText[7];
	map.src.odata[8]    = ori.searchWdw.compareText[8];
	map.src.odata[9]    = ori.searchWdw.compareText[9];
	map.src.odata[10]   = ori.searchWdw.compareText[10];
	map.src.odata[11]   = ori.searchWdw.compareText[11];
	map.src.odata[12]   = ori.searchWdw.compareText[12];
	map.src.odata[13]   = ori.searchWdw.compareText[13];
	map.src.groupOps[0] = ori.searchWdw.groupText[0];
	map.src.groupOps[1] = ori.searchWdw.groupText[1];
	map.src.matchText   = ori.searchWdw.matchText;
	map.src.rulesText   = ori.searchWdw.rulesText;

	map.view.caption = ori.viewWdw.caption;
	map.view.bClose  = ori.viewWdw.closeBtn.text;
	map.view.x       = ori.viewWdw.closeBtn.icon;

	return map;
}