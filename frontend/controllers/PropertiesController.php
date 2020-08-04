<?php

namespace frontend\controllers;

use yii;
use common\models\Properties;
use common\models\PropertiesSearch;

class PropertiesController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $propertiesSearch = new PropertiesSearch;
        $dataProvider = $propertiesSearch->search(Yii::$app->request->post());

        return $this->render('index', [
          'propertiesSearch' => $propertiesSearch,
          'dataProvider' => $dataProvider,
        ]);
    }

    public function actionView($id)
    {
        $property = $this->findModel($id);

        return $this->render('view', [
            'property' => $property,
        ]);
    }

    /**
     * Finds the Properties model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Properties the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Properties::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

}
