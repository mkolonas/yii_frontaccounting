<?php

class AreaController extends AppController
{
    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id)
    {
        $this->render('view', array(
            'model' => $this->loadModel($id),
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate()
    {
        $model = new Area;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Area'])) {
            $model->attributes = $_POST['Area'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id));
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionEdit()
    {
        $model = $this->loadModel($_POST['id']);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST)) {
            $model->name = $_POST['name'];
            $model->is_active = $_POST['is_active'];
            if ($model->save()) {
//                $this->redirect(array('view', 'id' => $model->id));
            }
        }

//        $this->render('update', array(
//            'model' => $model,
//        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id)
    {
        $this->loadModel($id)->delete();

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    /**
     * Lists all models.
     */
    public function actionIndex()
    {
        $dataProvider = new CActiveDataProvider('Area');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin()
    {
        $model = new Area('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['Area']))
            $model->attributes = $_GET['Area'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }
    
    public function actionGridJsonOld1()
    {
        echo '{
            "page": "1",
            "total": 2,
            "records": "5",
            "rows": [{
                "id": "13",
                "cell": [
                    "13",
                    "2007-10-06"
                ]
            },{
                "id": "12",
                "cell": [
                    "12",
                    "2007-10-06"
                ]
            },{
                "id": "11",
                "cell": [
                    "11",
                    "2007-10-06"
                ]
            },{
                "id": "10",
                "cell": [
                    "10",
                    "2007-10-06"
                ]
            },{
                "id": "4",
                "cell": [
                    "4",
                    "2007-10-04"
                ]
            }],
            "userdata": {
                "amount": 3220,
                "tax": 342,
                "total": 3564,
                "name": "Totals:"
            }
        }';
    }

    public function actionGridJson2()
    {
        $json = array(
            "page" => "1",
            "total" => 2,
            "records" => "5",
            "rows" => array(
                array(
                    "id" => "13",
                    "cell" => array(
                        "13",
                        "2007-10-06"
                    )
                ),
                array(
                    "id" => "12",
                    "cell" => array(
                        "12",
                        "2007-10-06"
                    )
                ),
                array(
                    "id" => "11",
                    "cell" => array(
                        "11",
                        "2007-10-06"
                    )
                ),
                array(
                    "id" => "10",
                    "cell" => array(
                        "10",
                        "2007-10-06"
                    )
                ),
                array(
                    "id" => "4",
                    "cell" => array(
                        "4",
                        "2007-10-04"
                    )
                ),
            ),
            "userdata" => array(
                "amount" => 3220,
                "tax" => 342,
                "total" => 3564,
                "name" => "Totals:"
            ),
        );
        
        echo json_encode($json);
    }

    public function actionAdminDataJson()
    {
        $area = Area::model();
        $criteria = $this->getCriteriaFromRequest($area);

        if(!$criteria) {
            header("HTTP/1.0 400 Bad Request");
            return;
        }

        $aoArea = $area->findAll($criteria);
        $count = $area->count();

        $this->renderPartial(
            'adminDataJson',
            array(
                'aoArea' => $aoArea,
                'count' => $count,
                'page' => $_GET['page'],
                'rows' => $_GET['rows'],
            )
        );
    }

    public function actionAdminDataJsonStatic()
    {
        $this->renderPartial('adminDataJsonStatic');
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer the ID of the model to be loaded
     */
    public function loadModel($id)
    {
        $model = Area::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param CModel the model to be validated
     */
    protected function performAjaxValidation($model)
    {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'area-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }
}
