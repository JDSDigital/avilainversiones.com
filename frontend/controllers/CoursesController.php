<?php

namespace frontend\controllers;

use common\models\Courses;

class CoursesController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $models = Courses::find()->active()->all();

        return $this->render('index', [
          'models' => $models,
        ]);
    }

    public function actionView()
    {
        return $this->render('view');
    }

}
