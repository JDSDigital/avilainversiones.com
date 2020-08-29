<?php

namespace backend\controllers;

use Yii;
use yii\helpers\Url;
use common\models\Alliances;
use common\models\AlliancesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AlliancesController implements the CRUD actions for Alliances model.
 */
class AlliancesController extends Controller
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
     * Lists all Alliances models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new AlliancesSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Alliances model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Alliances model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Alliances();

        if ($model->load(Yii::$app->request->post())) {
            if ($model->save()) {

                $model->upload();
                Yii::$app->session->setFlash('success', 'Alianza creada');

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
     * Updates an existing Alliances model.
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
          'url' => Url::to(["/alliances/deleteimage?id=" . $model->id]),
        ];

        if ($model->load(Yii::$app->request->post())) {
            if ($model->save()) {

                $model->upload();
                Yii::$app->session->setFlash('success', 'Alianza actualizada');

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
     * Deletes an existing Alliances model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);
        $url = Url::to('@frontend/web/images/alliances/'). $model->file;
        $urlThumb = Url::to('@frontend/web/images/alliances/thumbs/'). $model->file;

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
     * Changes Status.
     *
     * @return string
     */
    public function actionStatus()
    {
        if (Yii::$app->request->isAjax) {
            $data = Yii::$app->request->post();

            $model = $this->findModel($data['id']);

            $model->status = ($model->status) ? Alliances::STATUS_DELETED : Alliances::STATUS_ACTIVE;

            $model->save();
        }

        return null;
    }

    /**
     * Finds the Alliances model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Alliances the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Alliances::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
