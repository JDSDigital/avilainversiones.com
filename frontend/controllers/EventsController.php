<?php

namespace frontend\controllers;

use yii;
use common\models\Events;
use common\models\EventsSearch;

class EventsController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $eventsSearch = new EventsSearch;
        $dataProvider = $eventsSearch->search(Yii::$app->request->post());

        return $this->render('index', [
          'eventsSearch' => $eventsSearch,
          'dataProvider' => $dataProvider,
        ]);
    }

    public function actionView($id)
    {
        $model = $this->findModel($id);

        return $this->render('view', [
            'model' => $model,
        ]);
    }

    /**
     * Finds the Events model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Events the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Events::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
