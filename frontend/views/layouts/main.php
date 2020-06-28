<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="./images/favicon/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="./images/favicon/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="./images/favicon/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="./images/favicon/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="./images/favicon/apple-touch-icon-60x60.png" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="./images/favicon/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="./images/favicon/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="./images/favicon/apple-touch-icon-152x152.png" />
    <link rel="icon" type="image/png" href="./images/favicon/favicon-196x196.png" sizes="196x196" />
    <link rel="icon" type="image/png" href="./images/favicon/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/png" href="./images/favicon/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="./images/favicon/favicon-16x16.png" sizes="16x16" />
    <link rel="icon" type="image/png" href="./images/favicon/favicon-128.png" sizes="128x128" />
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar--bold sticky-top navbar-opaque navbar-inverse bg-light">
        <div class="container navbar-container">
            <!-- Brand/Logo -->
            <?=
                Html::a(
                    Html::img('@web/images/logo/logo-navbar-golden.png', ['class' => 'img-responsive', 'alt' => Yii::$app->name]),
                    ['site/index'],
                    ['class' => 'navbar-brand']
                )
            ?>

            <div class="d-inline-block">
                <!-- Navbar toggler  -->
                <button class="navbar-toggler hamburger hamburger-js hamburger--spring" type="button" data-toggle="collapse" data-target="#navbar_main" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>

            <div class="collapse navbar-collapse align-items-center justify-content-end" id="navbar_main">

                <!-- Navbar links -->
                <ul class="navbar-nav">
                    <li class="nav-item dropdown megamenu <?= (Yii::$app->controller->id == 'site' && Yii::$app->controller->action->id == 'index') ? 'active' : '' ?>">
                        <?= Html::a(Html::encode('Inicio'), ['site/index'], ['class' => 'nav-link']) ?>
                    </li>
                    <li class="nav-item dropdown megamenu <?= (Yii::$app->controller->id == 'consulting') ? 'active' : '' ?>">
                        <?= Html::a(Html::encode('Asesorías'), ['consulting/index'], ['class' => 'nav-link']) ?>
                    </li>
                    <li class="nav-item dropdown megamenu <?= (Yii::$app->controller->id == 'courses') ? 'active' : '' ?>">
                        <?= Html::a(Html::encode('Cursos'), ['courses/index'], ['class' => 'nav-link']) ?>
                    </li>
                    <li class="nav-item dropdown megamenu <?= (Yii::$app->controller->id == 'events') ? 'active' : '' ?>">
                        <?= Html::a(Html::encode('Eventos'), ['events/index'], ['class' => 'nav-link']) ?>
                    </li>
                    <li class="nav-item dropdown megamenu <?= (Yii::$app->controller->id == 'properties') ? 'active' : '' ?>">
                        <?= Html::a(Html::encode('Propiedades'), ['properties/index'], ['class' => 'nav-link']) ?>
                    </li>
                    <li class="nav-item dropdown megamenu <?= (Yii::$app->controller->id == 'site' && Yii::$app->controller->action->id == 'about') ? 'active' : '' ?>">
                        <?= Html::a(Html::encode('Empresa'), ['site/about'], ['class' => 'nav-link']) ?>
                    </li>
                    <li class="nav-item dropdown megamenu <?= (Yii::$app->controller->id == 'site' && Yii::$app->controller->action->id == 'contact') ? 'active' : '' ?>">
                        <?= Html::a(Html::encode('Contacto'), ['site/contact'], ['class' => 'nav-link']) ?>
                    </li>
                    <li class="nav-item dropdown megamenu <?= (Yii::$app->controller->id == 'blog') ? 'active' : '' ?>">
                        <?= Html::a(Html::encode('Blog'), ['blog/index'], ['class' => 'nav-link']) ?>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

    <div class="">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer id="footer" class="footer">
    <div class="footer-bottom bg-black py-3">
        <div class="container">
            <div class="row cols-xs-space col-sm-space align-items-center">
                <div class="col-md-10 col-12">
                    <div class="text-xs-center text-sm-left">
                        <ul class="footer-menu">
                            <li>
                                <?= Html::a(Html::encode('Inicio'), ['site/index'], ['class' => 'pl-0']) ?>
                            </li>
                            <li>
                                <?= Html::a(Html::encode('Asesorías'), ['consulting/index']) ?>
                            </li>
                            <li>
                                <?= Html::a(Html::encode('Cursos'), ['courses/index']) ?>
                            </li>
                            <li>
                                <?= Html::a(Html::encode('Eventos'), ['events/index']) ?>
                            </li>
                            <li>
                                <?= Html::a(Html::encode('Propiedades'), ['properties/index']) ?>
                            </li>
                            <li>
                                <?= Html::a(Html::encode('Empresa'), ['site/about']) ?>
                            </li>
                            <li>
                                <?= Html::a(Html::encode('Contacto'), ['site/contact']) ?>
                            </li>
                            <li>
                                <?= Html::a(Html::encode('Blog'), ['blog/index']) ?>
                            </li>
                        </ul>

                        <div class="copyright mt-1">
                            <ul class="copy-links">
                                <li>
                                    &copy; <?= date('Y') . ' ' . Html::encode(Yii::$app->name) ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="text-xs-center text-sm-right">
                        <ul class="social-media social-media--style-1-v4">
                            <li>
                                <a href="#" class="facebook" target="_blank" data-toggle="tooltip" data-original-title="Facebook">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="instagram" target="_blank" data-toggle="tooltip" data-original-title="Instagram">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="dribbble" target="_blank" data-toggle="tooltip" data-original-title="Dribbble">
                                    <i class="fa fa-dribbble"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="dribbble" target="_blank" data-toggle="tooltip" data-original-title="Github">
                                    <i class="fa fa-github"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
