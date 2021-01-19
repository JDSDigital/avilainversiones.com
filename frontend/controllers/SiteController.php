<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use frontend\models\ContactForm;
use common\models\Alliances;
use common\models\Blog;
use common\models\Consulting;
use common\models\Courses;
use common\models\Statistics;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $blogs = Blog::find()
        ->active()
        ->orderBy(['created_at' => SORT_ASC])
        ->limit(3)
        ->all();

        return $this->render('index', [
            'blogs' => $blogs,
        ]);
    }

    public function actionConsulting($id)
    {
        $consulting = Consulting::findOne($id);
        $model = new ContactForm();
        $model->subject = 'Estoy interesado en '.$consulting->name;

        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    public function actionCourses($id)
    {
        $courses = Courses::findOne($id);
        $model = new ContactForm();
        $model->subject = 'Estoy interesado en '.$courses->title;

        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $model = new ContactForm();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Gracias por contactarnos. Te responderemos lo antes posible.');
            } else {
                Yii::$app->session->setFlash('error', 'Ocurrió un error. Por favor intenta más tarde.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        $statistics = Statistics::find()->active()->all();

        return $this->render('about', [
            'statistics' => $statistics
        ]);
    }

    /**
     * Displays alliances page.
     *
     * @return mixed
     */
    public function actionAlliances()
    {
        $alliances = Alliances::find()->all();

        return $this->render('alliances', [
            'alliances' => $alliances
        ]);
    }
}
