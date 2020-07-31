<?php

namespace frontend\controllers;

use yii;
use common\models\Consulting;
use common\models\ConsultingSearch;

class ConsultingController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $consultingSearch = new ConsultingSearch;
        $dataProvider = $consultingSearch->search(Yii::$app->request->post());

        return $this->render('index', [
          'consultingSearch' => $consultingSearch,
          'dataProvider' => $dataProvider,
        ]);
    }
}
