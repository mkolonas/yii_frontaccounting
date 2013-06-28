<?php
/**
 * AppController is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class AppController extends RController
{
	/**
	 * @var string the default layout for the controller view. Defaults to '//layouts/column1',
	 * meaning using a single column layout. See 'protected/views/layouts/column1.php'.
	 */
	public $layout='//layouts/column2';
    /**
	 * @var array context menu items. This property will be assigned to {@link CMenu::items}.
	 */
	public $menu=array();
	public $menuContent=array();
	public $menuTitle='Operation';
    /**
	 * @var array the breadcrumbs of the current page. The value of this property will
	 * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
	 * for more details on how to specify this property.
	 */
	public $breadcrumbs=array();
	public $defaultAction='admin';

    /**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'rights', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	public function trimHtml($html, $side=null)
	{
		$startPattern='[^\\s*(<br\\s*/*>\\s*)+]i';
		$endPattern='[(<br\\s*/*>\\s*)+$]i';

		if($side=='start')
			$pattern=$startPattern;
		elseif($side=='end')
			$pattern=$endPattern;
		else
			$pattern=array($startPattern, $endPattern);

		return preg_replace($pattern, '', $html);
	}

	public function renderHtmlTd($data, $htmlField)
	{
		$strippedStr=strip_tags($data->$htmlField);
		$maxChar=Yii::app()->params['maxQuestionCharDisplay'];
		if(strlen($strippedStr)>$maxChar)
			$truncatedStr=substr($strippedStr,0,$maxChar) . ' ...';
		else
			$truncatedStr=$strippedStr;


		if($data->$htmlField!=$truncatedStr) {
			echo $truncatedStr.' &nbsp; ';
			$this->beginWidget('zii.widgets.jui.CJuiDialog', array(
				'id'=>$htmlField.'-dialog'.$data->id,
				'htmlOptions'=>array('class'=>$htmlField.'-box'),
				'options'=>array(
					'title'=>'Question: '.$data->name,
					'autoOpen'=>false,
					'width'=>'700px',
					'modal'=>true,
				),
			));
			echo $data->$htmlField;
			$this->endWidget('zii.widgets.jui.CJuiDialog');

			$button = '<img src="'.Yii::app()->theme->baseUrl.'/images/view.png">';
			echo CHtml::link($button, '#', array(
			   'onclick'=>'$("#'.$htmlField.'-dialog'.$data->id.'").dialog("open"); return false;',
			   'class'=>'view-html-button',
			));
		}
		else
			return $truncatedStr;
	}

	protected function parseFieldRowsToString($rows, $fieldName='name', $connector=',<br/>')
	{
		$temp='';
		foreach($rows as $row)
		{
			$temp
				? $temp.=$connector.$row->$fieldName
				: $temp=$row->$fieldName;
		}
		return $temp;
	}

	protected function parseStringIdsToSubstitutedStringRelation($row, $modelName, $fetchAllRow=true, $pkField='id', $connector=',<br/>', $separator=',')
	{
		static $asModel;
		$idItems=explode($separator,$row);
		
		if($fetchAllRow and !isset($asModel[$modelName]))
		{
			$aoModel=$modelName::model()->findAll();
			$asModel[$modelName]=$this->transformArrayObjectToArrayString($aoModel,'nama');
		}
		elseif(!$fetchAllRow)
		{
			$criteria=new CDbCriteria;
			$criteria->addInCondition($pkField,$idItems);
			$aoModel=$modelName::model()->findAll($criteria);
			$asModel[$modelName]=$this->transformArrayObjectToArrayString($aoModel,'nama');
		}
		
		$temp='';
		foreach($idItems as $item)
		{
			$temp
				? $temp.=$connector.$asModel[$modelName][$item]
				: $temp=$asModel[$modelName][$item];
		}
		return $temp;
	}

	/**
     * @param array $models any CActiveRecord objects
     * @param string|array $fieldName(s) any table field(s) which want to be displayed
     * @param string $connector the connector between the displayed fields
     * @param integer $trim maximum character count to be displayed
     * @return array the array of string to be used in the html select
     */
	protected function transformArrayObjectToArrayString($models, $fieldName='name', $connector=', ', $trim=0)
	{
		$temp=array();
        
        if(!is_array($fieldName)) {
            $fieldName = array($fieldName);
        }

        foreach($models as $model)
        {
            $val = '';
            foreach($fieldName as $item)
            {
                
                if($val) {
                    $val .= $connector;
                }

                $rawStr = '';

                $match = preg_match('/^([^.]+)\.([^.]+)\.([^.]+)/', $item, $subMatch);
                if ($match) {
                    $submodel = $subMatch[1];
                    $subsubmodel = $subMatch[2];
                    $field = $subMatch[3];
                    $rawStr = $model->$submodel->$subsubmodel->$field;
                }

                $match = preg_match('/^([^.]+)\.([^.]+)/', $item, $subMatch);
                if ($match) {
                    $submodel = $subMatch[1];
                    $field = $subMatch[2];
                    $rawStr = $model->$submodel->$field;
                }
                                
                if (!$rawStr) {
                    $rawStr = $model->$item;
                }

                $val .= $rawStr;
            }

            if ($trim and strlen($val) > ($trim-3)) {
                $val = substr($val, 0, $trim) . '...';
            } elseif ($trim) {
                $val = substr($val, 0, $trim);
            } else {
                $val = $val;
            }
            $temp[$model->id] = $val;
        }

		return $temp;
	}

    protected function getCriteriaFromRequest(CActiveRecord $model)
    {
        $criteria = new CDbCriteria;
        if (
            isset($_GET['sidx']) and
            isset($_GET['sord']) and
            $_GET['sidx'] != null and
            $_GET['sord'] != null
        ) {
            if ($model->hasAttribute($_GET['sidx'])) {
                $criteria->order = $_GET['sidx'] .' '. $_GET['sord'];
            } else {
                return;
            }
        }
        
        $criteria->offset = $_GET['rows'] * ($_GET['page'] - 1);
        $criteria->limit = $_GET['rows'];
        return $criteria;
    }
}