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
        return $this->render('index', [
            'model' => $this->findModel(1),
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
                Yii::$app->session->setFlash('success', 'Estadisticas actualizadas');

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

        // Delete image from the database and the folder
        if (unlink($url) && unlink($urlThumb)) {
            $this->findModel($id)->delete();
        } else {
            foreach ($model->errors as $error) {
                Yii::$app->session->setFlash('error', $error);
            }
        }

        return $this->redirect(['index']);
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
