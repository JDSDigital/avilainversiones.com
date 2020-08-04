<?php

namespace frontend\controllers;

use yii;
use common\models\Blog;
use common\models\BlogSearch;

class BlogController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $blogSearch = new BlogSearch;
        $dataProvider = $blogSearch->search(Yii::$app->request->post());

        return $this->render('index', [
          'blogSearch' => $blogSearch,
          'dataProvider' => $dataProvider,
        ]);
    }

    public function actionView($id)
    {
        $model = $this->findModel($id);
        $model->updateCounters(['views' => 1]);

        return $this->render('view', [
            'model' => $model,
        ]);
    }

    /**
     * Finds the Blog model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Blog the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Blog::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

}
