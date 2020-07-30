<?php

namespace backend\controllers;

use Yii;
use yii\helpers\Url;
use common\models\Events;
use common\models\EventsImages;
use common\models\EventsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * EventsController implements the CRUD actions for Events model.
 */
class EventsController extends Controller
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
     * Lists all Events models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new EventsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Events model.
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
     * Creates a new Events model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Events();

        if ($model->load(Yii::$app->request->post())) {
            if ($model->save()) {

                $model->upload();
                Yii::$app->session->setFlash('success', 'Evento creado');

                return $this->redirect(['view', 'id' => $model->id]);
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
     * Updates an existing Events model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        $uploadedImages = EventsImages::find()->where(['event_id' => $id])->all();

        $previews = [];
        $previewsConfig = [];

        foreach ($uploadedImages as $image){
            $previews[] = $image->getThumb();

            $previewsConfig[] = [
              'caption' => $image->file,
              'key' => $image->id,
              'url' => Url::to(["/events/deleteimage?id=" . $image->id]),
            ];
        }

        if ($model->load(Yii::$app->request->post())) {
            if ($model->save()) {

                $model->upload();
                Yii::$app->session->setFlash('success', 'Evento actualizado');

                return $this->redirect(['view', 'id' => $model->id]);
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
     * Deletes an existing Events model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);
        $images = EventsImages::find()->where(['event_id' => $id])->all();

        foreach ($images as $image) {
            $this->actionDeleteimage($image->id);
        }

        $model->delete();
        return $this->redirect(['index']);
    }

    /**
     * Deletes a single image
    * @param $id
    * @return bool
    */
    public function actionDeleteimage($id){

        $image = EventsImages::findOne($id);

        $event_id = $image->event_id;

        $url = Url::to('@frontend/web/images/events/') . $image->file;
        $urlThumb = Url::to('@frontend/web/images/events/thumbs/') . $image->file;

        // Delete image from the database and the folder
        if (unlink($url) && unlink($urlThumb) && $image->delete())
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

            $model->status = ($model->status) ? Events::STATUS_DELETED : Events::STATUS_ACTIVE;

            $model->save();
        }

        return null;
    }

    /**
     * Changes Featured.
     *
     * @return string
     */
    public function actionFeatured()
    {
        if (Yii::$app->request->isAjax) {
            $data = Yii::$app->request->post();

            $model = $this->findModel($data['id']);

            $model->featured = ($model->featured) ? Events::STATUS_DELETED : Events::STATUS_ACTIVE;

            $model->save();
        }

        return null;
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
