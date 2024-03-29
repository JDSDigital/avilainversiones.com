<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

// Meta tags
$this->registerMetaTag(['name' => 'author', 'content' => 'avilainversiones.com']);
$this->registerMetaTag(['name' => 'description', 'content' => 'Aprende uno de los negocios más lucrativos del mundo de la mano de expertos.']);
$this->registerMetaTag(['name' => 'keywords', 'content' => 'inmobiliaria, curso, asesoria']);
$this->registerMetaTag(['rel' => 'canonical', 'href' => 'https://www.avilainversiones.com']);

$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/png', 'sizes' => '196x196', 'href' => Yii::getAlias('@web') . '/images/favicon/favicon-196x196.png']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/png', 'sizes' => '96x96', 'href' => Yii::getAlias('@web') . '/images/favicon/favicon-96x96.png']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/png', 'sizes' => '32x32', 'href' => Yii::getAlias('@web') . '/images/favicon/favicon-32x32.png']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/png', 'sizes' => '16x16', 'href' => Yii::getAlias('@web') . '/images/favicon/favicon-16x16.png']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/png', 'sizes' => '128x128', 'href' => Yii::getAlias('@web') . '/images/favicon/favicon-128.png']);

$this->registerLinkTag(['rel' => 'apple-touch-icon-precomposed', 'sizes' => '57x57', 'href' => Yii::getAlias('@web') . '/images/favicon/apple-touch-icon-57x57.png']);
$this->registerLinkTag(['rel' => 'apple-touch-icon-precomposed', 'sizes' => '114x114', 'href' => Yii::getAlias('@web') . '/images/favicon/apple-touch-icon-114x114.png']);
$this->registerLinkTag(['rel' => 'apple-touch-icon-precomposed', 'sizes' => '72x72', 'href' => Yii::getAlias('@web') . '/images/favicon/apple-touch-icon-72x72.png']);
$this->registerLinkTag(['rel' => 'apple-touch-icon-precomposed', 'sizes' => '144x144', 'href' => Yii::getAlias('@web') . '/images/favicon/apple-touch-icon-144x144.png']);
$this->registerLinkTag(['rel' => 'apple-touch-icon-precomposed', 'sizes' => '60x60', 'href' => Yii::getAlias('@web') . '/images/favicon/apple-touch-icon-60x60.png']);
$this->registerLinkTag(['rel' => 'apple-touch-icon-precomposed', 'sizes' => '120x120', 'href' => Yii::getAlias('@web') . '/images/favicon/apple-touch-icon-120x120.png']);
$this->registerLinkTag(['rel' => 'apple-touch-icon-precomposed', 'sizes' => '76x76', 'href' => Yii::getAlias('@web') . '/images/favicon/apple-touch-icon-76x76.png']);
$this->registerLinkTag(['rel' => 'apple-touch-icon-precomposed', 'sizes' => '152x152', 'href' => Yii::getAlias('@web') . '/images/favicon/apple-touch-icon-152x152.png']);

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

<!-- <footer id="footer" class="footer">
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
                            <div class="text-xs-center text-sm-left">
                                +56 9 5614 2921
                            </div>
                            <div class="text-xs-center text-sm-left">
                                Avenida Presidente Kennedy 5600, Santiago, Chile.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="text-xs-center text-sm-right">
                        <ul class="social-media social-media--style-1-v4">
                            <li>
                                <a href="https://www.instagram.com/4vilainversiones/" class="instagram" target="_blank" data-toggle="tooltip" data-original-title="Instagram">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com/channel/UCz0mzViL-LiDJMZ1IJp4m-g/featured" class="youtube" target="_blank" data-toggle="tooltip" data-original-title="Youtube">
                                    <i class="fa fa-youtube-play"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="copyright text-xs-center text-sm-right mt-1">
                        <ul class="copy-links">
                            <li>
                                &copy; <?= date('Y') . ' ' . Html::encode(Yii::$app->name) ?>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer> -->

<footer id="footer" class="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row cols-xs-space cols-sm-space cols-md-space">
                <div class="col-lg-5">
                    <div class="col">
                        <?=
                            Html::a(
                                Html::img('@web/images/logo/logo-navbar-golden.png', ['class' => 'img-responsive', 'alt' => Yii::$app->name]),
                                ['site/index'],
                                ['class' => 'navbar-brand']
                            )
                        ?>
                        <span class="clearfix"></span>
                        <p class="mt-3 d-none d-sm-block">Aprende uno de los negocios más lucrativos del mundo<br />de la mano de expertos.</p>
                        <p class="mt-3 d-sm-none">Aprende uno de los negocios más lucrativos del mundo de la mano de expertos.</p>
                    </div>
                </div>

                <div class="col-lg-2">
                    <div class="col">

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
                        </ul>
                     </div>
                </div>

                <div class="col-lg-2">
                    <div class="col">

                        <ul class="footer-menu">
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
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="col">
                        <h4 class="heading heading-sm strong-600 text-uppercase mb-1">
                            Contáctanos
                        </h4>
                        <p class="mt-3 mb-1">+56 2 3339 9467</p>
                        <p class="my-1">Avenida Presidente Kennedy 5600, Vitacura, Chile.</p>

                        <ul class="social-media social-media--style-1-v4">
                            <li>
                                <a href="https://www.instagram.com/4vilainversiones/" class="instagram" target="_blank">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com/channel/UCz0mzViL-LiDJMZ1IJp4m-g/featured" class="youtube" target="_blank">
                                    <i class="fa fa-youtube-play"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container container-sm">
             <div class="row">
                <div class="col">
                    <div class="copyright text-center">
                        &copy; <?= date('Y') . ' ' . Html::encode(Yii::$app->name) ?> / Diseño y desarrollo por <?= Html::a('Geknology', Url::to('http://www.geknology.com/'), ['target' => '_blank']) ?>
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
