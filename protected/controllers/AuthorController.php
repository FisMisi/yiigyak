<?php

class AuthorController extends Controller
{

    public function actionSumCalculate() {

        $model = new sumCalculateForm;

        if (isset($_POST['sumCalculateForm'])) {
            $model->attributes = $_POST['sumCalculateForm'];

            if($model->validate())
            {
                Yii::app()->session['eredmeny'] = $model->attributes;

                $this->redirect(array('author/result'));
            }

        }
        $this->render('sum', array(
            'model' => $model
        ));
    }

    public function actionResult()
    {
       $eredmeny=Yii::app()->session['eredmeny'];
       unset(Yii::app()->session['eredmeny']);

       $this->render('result',array(
                'model'=>$eredmeny
       ));
    }

        public function actionIndex() {

//get count
        $count = Author::model()->count();

//pagination
        $pages = new CPagination($count);
        $pages->setPageSize(2);
        $pages->applyLimit();

//result to show on page
        $result = Author::model()->findAll();

        $dataProvider = new CArrayDataProvider($result);

        $this->render('index', array(
            'dataProvider' => $dataProvider,
            'pages' => $pages
        ));
    }

    public function loadModel($id) {
        $model = Author::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'Nincs ilyen kurva oldal');
        return $model;
    }

    public function actionView() {

        $this->render('view', array(
            'data' => $this->loadModel($id),
        ));
    }

}
