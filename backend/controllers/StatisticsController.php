<?php

namespace backend\controllers;

use Yii;
use yii\helpers\Url;
use common\models\Statistics;
use common\models\StatisticsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * StatisticsController implements the CRUD actions for Statistics model.
 */
class StatisticsController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Statistics models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new StatisticsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Creates a new Statistics model.
     * If creation is successful, the browser will be redirected to the 'index' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Statistics();

        if ($model->load(Yii::$app->request->post())) {
            if ($model->validate() && $model->save()) {

                $model->upload();
                Yii::$app->session->setFlash('success', 'Estadística creada');

                return $this->redirect(['index']);
            } else {
                foreach ($model->errors as $error) {
                    Yii::$app->session->setFlash('error', $error);
                }
            }
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Statistics model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $previews[] = $model->getThumb();

        $previewsConfig[] = [
          'caption' => $model->file,
          'key' => $model->id,
          'url' => Url::to(["/statistics/deleteimage?id=" . $model->id]),
        ];

        if ($model->load(Yii::$app->request->post())) {
            if ($model->save()) {

                $model->upload();
                Yii::$app->session->setFlash('success', 'Estadísticas actualizadas');

                return $this->redirect(['index']);
            } else {
                foreach ($model->errors as $error) {
                    Yii::$app->session->setFlash('error', $error);
                }
            }
        }

        return $this->render('update', [
            'model' => $model,
            'previews' => $previews,
            'previewsConfig' => $previewsConfig,
        ]);
    }

    /**
     * Deletes an existing Statistics model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);
        $url = Url::to('@frontend/web/images/statistics/'). $model->file;
        $urlThumb = Url::to('@frontend/web/images/statistics/thumbs/'). $model->file;

        if ($model->file) {
            unlink($url);
            unlink($urlThumb);
        }

        if (!$this->findModel($id)->delete()) {
            foreach ($model->errors as $error) {
                Yii::$app->session->setFlash('error', $error);
            }
        }

        return $this->redirect(['index']);
    }

    /**
     * Deletes a single image
    * @param $id
    * @return bool
    */
    public function actionDeleteimage($id)
    {
        $model = $this->findModel($id);

        $url = Url::to('@frontend/web/images/statistics/') . $model->file;
        $urlThumb = Url::to('@frontend/web/images/statistics/thumbs/') . $model->file;

        // Delete image from the folder
        if (unlink($url) && unlink($urlThumb))
            return true;
        else
            return false;
    }

    /**
     * Changes Status.
     *
     * @return string
     */
    public function actionStatus()
    {
        if (Yii::$app->request->isAjax) {
            $data = Yii::$app->request->post();

            $model = $this->findModel($data['id']);

            $model->status = ($model->status) ? Statistics::STATUS_DELETED : Statistics::STATUS_ACTIVE;

            $model->save();
        }

        return null;
    }

    /**
     * Finds the Statistics model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Statistics the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Statistics::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
