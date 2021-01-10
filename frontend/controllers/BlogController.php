<?php

namespace frontend\controllers;

use yii;
use common\models\Blog;
use common\models\BlogSearch;
use yii\web\NotFoundHttpException;

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

    public function actionView($title)
    {
        $model = $this->findModelByTitle($title);
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

    /**
     * Finds the Blog model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Blog the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModelByTitle($title)
    {

        $model = Blog::find()
            ->where(['like', 'title', str_replace('-', ' ', $title) . '%', false])
            ->one();

        if ($model !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

}
