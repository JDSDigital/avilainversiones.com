<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\web\View;

$this->title = Yii::$app->name;
?>
<section>
    <div class="row">
        <div class="col-12">
            <section class="swiper-js-container background-image-holder" data-holder-type="fullscreen" data-holder-offset="">
                <div class="swiper-container" data-swiper-autoplay="true" data-swiper-effect="fade" data-swiper-items="1" data-swiper-space-between="0">
                    <div class="swiper-wrapper">
                        <!-- Slide -->
                        <div class="swiper-slide" data-swiper-autoplay="8000">
                            <div class="slice holder-item holder-item-light has-bg-cover bg-size-cover" style="background-image: url(./images/backgrounds/BannerHome.jpg); background-position: bottom center;">
                            <span class="mask mask-dark--style-2"></span>
                                <div class="container d-flex align-items-center">
                                    <div class="col">
                                        <div class="row text-center">
                                            <div class="col-lg-7">
                                                <h2 class="heading heading-lg strong-600 text-uppercase animated" data-animation-in="fadeInDownBig" data-animation-delay="200">
                                                    ¿Deseas invertir en bienes raíces?
                                                </h2>
                                                <p class="lead animated" data-animation-in="fadeInUpBig" data-animation-delay="200">
                                                    Aprende uno de los negocios mas lucrativos del mundo de la mano de expertos.
                                                </p>
                                                <a href="#" class="btn btn-styled btn-golden btn-circle mt-3 text-uppercase strong-400 animated" data-animation-in="fadeInUpBig" data-animation-delay="1000">Action button</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</section>

<section class="slice-lg has-bg-cover bg-size-cover" style="background-image: url('./images/backgrounds/slider/img-11.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-8 ml-lg-auto">
                <div class="px-5 py-5 z-depth-1-bottom">
                    <h2 class="heading heading-2 strong-400 c-gray-dark">
                        <?= Html::encode('Inversiones a tu alcance') ?>
                    </h2>
                    <div class="">
                        <p class="c-light-gray mt-4">
                            <?= Html::encode('La capacidad de conocer las mejores estrategias es lo que te va a permitir tener éxito en tus inversiones inmobiliarias.') ?>
                        </p>
                        <div class="btn-container mt-5">
                            <a href="#" class="btn btn-styled btn-golden btn-circle text-uppercase strong-400">Action button</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- <section class="slice-lg bg-white">
    <div class="container">
        <?php /* Html::img('./images/elements/ciclo.png', [
            "id" => "inversion",
            "class" => "img-fluid", 
            "usemap" => "#image-map",
            "width" => "7087",
            "height" => "6577",
        ]) */?>
        <map name="image-map">
            <area id="inversion1" alt="1" title="1" href="#" coords="3722,707,4505,864,5131,1176,5550,1502,5800,1790,5444,2628,5049,2703,4786,2365,4467,2128,4185,1996,3941,1896,4160,1514,3903,1051" shape="poly">
            <area id="inversion2" alt="2" title="2" href="#" coords="5926,1952,6295,2672,6439,3242,6452,3780,6383,4249,5494,4493,5174,4218,5268,3861,5275,3373,5212,3079,5131,2866,5556,2785" shape="poly">
            <area id="inversion3" alt="3" title="3" href="#" coords="6351,4418,6226,4781,6032,5144,5757,5507,5538,5745,5237,5983,4830,6220,4073,5688,4098,5269,4411,5106,4724,4887,4943,4656,5118,4387,5462,4668" shape="poly">
            <area id="inversion4" alt="4" title="4" href="#" coords="4661,6308,4091,6464,3421,6514,2889,6446,2557,6345,2301,6245,2251,5325,2589,5088,2889,5244,3202,5313,3559,5357,3916,5325,3910,5763" shape="poly">
            <area id="inversion5" alt="5" title="5" href="#" coords="2132,6158,1537,5720,1155,5282,917,4856,711,4280,1406,3667,1806,3780,1863,4149,2013,4474,2201,4737,2451,4975,2094,5238" shape="poly">
            <area id="inversion6" alt="6" title="6" href="#" coords="686,4111,654,3479,711,2985,867,2491,1061,2109,1274,1827,2182,1990,2326,2347,2113,2584,1969,2879,1856,3129,1787,3592,1368,3479" shape="poly">
            <area id="inversion7" alt="7" title="7" href="#" coords="1387,1671,1744,1333,2188,1064,2633,864,3115,757,3534,720,3972,1514,3772,1871,3371,1871,3014,1934,2714,2053,2457,2228,2288,1827" shape="poly">
        </map>
    </div>
</section> -->

<section class="slice sct-color-1">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="section-title section-title--style-1 text-center mb-4">
                            <h3 class="section-title-inner heading-2 text-uppercase strong-400">
                                <span><?= Html::encode('Blog') ?></span>
                            </h3>
                            <span class="section-title-delimiter clearfix"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <span class="space-xs-lg"></span>

        <div class="row cols-md-space cols-sm-space cols-xs-space">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card z-depth-2-top">
                    <div class="card-image">
                        <div class="view view-first">
                            <a href="#">
                                <img src="./images/prv/blog/img-tech-1.jpg">
                            </a>
                        </div>
                    </div>

                    <div class="card-body">
                        <h3 class="heading heading-5 strong-500 mb-0">
                            <a href="#">Learn how to build your own website with Boomerang</a>
                        </h3>
                    </div>

                    <div class="card-footer">
                        <div class="row">
                            <div class="col">
                                <div class="block-author">
                                    <div class="author-image author-image-xs">
                                        <img src="./images/prv/people/person-1.jpg">
                                    </div>
                                    <div class="author-info">
                                        <div class="author-name">
                                            <a href="#" class="strong-600">Bertram Ozzie</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col text-right">
                                <ul class="inline-links inline-links--style-2">
                                    <li>
                                        5 min read
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card z-depth-2-top">
                    <div class="card-image">
                        <div class="view view-first">
                            <a href="#">
                                <img src="./images/prv/blog/img-tech-2.jpg">
                            </a>
                        </div>
                    </div>

                    <div class="card-body">
                        <h3 class="heading heading-5 strong-500 mb-0">
                            <a href="#">15 Lessons about design you need to learn to succeed</a>
                        </h3>
                    </div>

                    <div class="card-footer">
                        <div class="row">
                            <div class="col">
                                <div class="block-author">
                                    <div class="author-image author-image-xs">
                                        <img src="./images/prv/people/person-2.jpg">
                                    </div>
                                    <div class="author-info">
                                        <div class="author-name">
                                            <a href="#" class="strong-600">Elisabeth Alanna</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col text-right">
                                <ul class="inline-links inline-links--style-2">
                                    <li>
                                        10 min read
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card z-depth-2-top">
                    <div class="card-image">
                        <div class="view view-first">
                            <a href="#">
                                <img src="./images/prv/blog/img-tech-3.jpg">
                            </a>
                        </div>
                    </div>

                    <div class="card-body">
                        <h3 class="heading heading-5 strong-500 mb-0">
                            <a href="#">Never changing design will eventually destroy you</a>
                        </h3>
                    </div>

                    <div class="card-footer">
                        <div class="row">
                            <div class="col">
                                <div class="block-author">
                                    <div class="author-image author-image-xs">
                                        <img src="./images/prv/people/person-3.jpg">
                                    </div>
                                    <div class="author-info">
                                        <div class="author-name">
                                            <a href="#" class="strong-600">Destiny Erykah</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col text-right">
                                <ul class="inline-links inline-links--style-2">
                                    <li>
                                        15 min read
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card z-depth-2-top">
                    <div class="card-image">
                        <div class="view view-first">
                            <a href="#">
                                <img src="./images/prv/blog/img-tech-1.jpg">
                            </a>
                        </div>
                    </div>

                    <div class="card-body">
                        <h3 class="heading heading-5 strong-500 mb-0">
                            <a href="#">Learn how to build your own website with Boomerang</a>
                        </h3>
                    </div>

                    <div class="card-footer">
                        <div class="row">
                            <div class="col">
                                <div class="block-author">
                                    <div class="author-image author-image-xs">
                                        <img src="./images/prv/people/person-1.jpg">
                                    </div>
                                    <div class="author-info">
                                        <div class="author-name">
                                            <a href="#" class="strong-600">Bertram Ozzie</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col text-right">
                                <ul class="inline-links inline-links--style-2">
                                    <li>
                                        5 min read
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="slice-lg sct-color-1">
    <div class="container container-lg">

        <div class="row align-items-center">
            <div class="col-12">
                <div class="section-title section-title--style-1 text-center mb-4">
                    <h3 class="section-title-inner heading-2 strong-400">
                        <span><?= Html::encode('Servicios Adicionales') ?></span>
                    </h3>
                    <span class="section-title-delimiter clearfix"></span>
                </div>
            </div>
        </div>
        
        <span class="space-xs-lg"></span>

        <div class="row cols-xs-space cols-sm-space cols-md-space justify-content-center">
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card bg-dark alpha-wrapper text-white overflow--hidden border-0 mb-5">
                    <a href="#">
                        <div class="card-img-bg" style="background-image: url('./images/services/arriendo.png');"></div>
                        <span class="mask mask-dark alpha-8 alpha-5--hover"></span>
                        <div class="card-body px-4 py-4">
                            <div style="min-height: 300px;">
                                <h3 class="heading heading-inverse heading-3 strong-600 mb-3"><?= Html::encode('Arriendo') ?></h3>
                                <p class="card-text heading-6 strong-400 line-height-1_8 c-gray-lighter">¿Buscas una propiedad para arrendar? o ¿deseas colocar tu propiedad en arriendo?</p>
                            </div>
                            <span href="#" class="link link--style-4 heading-sm text-uppercase strong-500">
                                Busco una propiedad
                                <i class="ion-ios-arrow-right ml-2"></i>
                            </span>
                            <span href="#" class="link link--style-4 heading-sm text-uppercase strong-500">
                                Deseo arrendarla
                                <i class="ion-ios-arrow-right ml-2"></i>
                            </span>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card bg-dark alpha-wrapper text-white overflow--hidden border-0 mb-5">
                    <a href="#">
                        <div class="card-img-bg" style="background-image: url('./images/services/credito.png');"></div>
                        <span class="mask mask-dark alpha-8 alpha-5--hover"></span>
                        <div class="card-body px-4 py-4">
                            <div style="min-height: 300px;">
                                <h3 class="heading heading-inverse heading-3 strong-600 mb-3"><?= Html::encode('Crédito Hipotecario') ?></h3>
                                <p class="card-text heading-6 strong-400 line-height-1_8 c-gray-lighter">dicha gestion puede ser mas compleja de lo que aparenta, pero si manejas bien el apalancamiento puede llevarte a ser un gran inversionista.</p>
                            </div>
                            <span href="#" class="link link--style-4 heading-sm text-uppercase strong-500">
                                Entidades Bancarias
                                <i class="ion-ios-arrow-right ml-2"></i>
                            </span>
                            <span href="#" class="link link--style-4 heading-sm text-uppercase strong-500">
                                Otras Entidades financieras
                                <i class="ion-ios-arrow-right ml-2"></i>
                            </span>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card bg-dark alpha-wrapper text-white overflow--hidden border-0 mb-5">
                    <a href="#">
                        <div class="card-img-bg" style="background-image: url('./images/services/inversion.png');"></div>
                        <span class="mask mask-dark alpha-8 alpha-5--hover"></span>
                        <div class="card-body px-4 py-4">
                            <div style="min-height: 300px;">
                                <h3 class="heading heading-inverse heading-3 strong-600 mb-3"><?= Html::encode('Oportunidades de Inversión') ?></h3>
                                <p class="card-text heading-6 strong-400 line-height-1_8 c-gray-lighter">propiedades que se ajustan a los nuevos conceptos inmobiliarios del mercado</p>
                            </div>
                            <a href="#" class="link link--style-4 heading-sm text-uppercase strong-500">
                                Usadas
                                <i class="ion-ios-arrow-right ml-2"></i>
                            </a>
                            <a href="#" class="link link--style-4 heading-sm text-uppercase strong-500">
                                Nuevas
                                <i class="ion-ios-arrow-right ml-2"></i>
                            </a>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card bg-dark alpha-wrapper text-white overflow--hidden border-0 mb-5">
                    <a href="#">
                        <div class="card-img-bg" style="background-image: url('./images/services/legal.png');"></div>
                        <span class="mask mask-dark alpha-8 alpha-5--hover"></span>
                        <div class="card-body px-4 py-4">
                            <div style="min-height: 300px;">
                                <h3 class="heading heading-inverse heading-3 strong-600 mb-3"><?= Html::encode('Departamento Legal') ?></h3>
                                <p class="card-text heading-6 strong-400 line-height-1_8 c-gray-lighter">Abogados expertos en el área de bienes raíces, listos para apoyarte en cualquier procedimiento que requieras.</p>
                            </div>
                            <span href="#" class="link link--style-4 heading-sm text-uppercase strong-500">
                                Presencial
                                <i class="ion-ios-arrow-right ml-2"></i>
                            </span>
                            <span href="#" class="link link--style-4 heading-sm text-uppercase strong-500">
                                Online
                                <i class="ion-ios-arrow-right ml-2"></i>
                            </span>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card bg-dark alpha-wrapper text-white overflow--hidden border-0 mb-5">
                    <a href="#">
                        <div class="card-img-bg" style="background-image: url('./images/services/estadisticas.png');"></div>
                        <span class="mask mask-dark alpha-8 alpha-5--hover"></span>
                        <div class="card-body px-4 py-4">
                            <div style="min-height: 300px;">
                                <h3 class="heading heading-inverse heading-3 strong-600 mb-3"><?= Html::encode('Estadísticas') ?></h3>
                                <p class="card-text heading-6 strong-400 line-height-1_8 c-gray-lighter">Te mostramos los números detrás de cualquiera de nuestras gestiones.</p>
                            </div>
                            <span href="#" class="link link--style-4 heading-sm text-uppercase strong-500">
                                Ver más
                                <i class="ion-ios-arrow-right ml-2"></i>
                            </span>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card bg-dark alpha-wrapper text-white overflow--hidden border-0 mb-5">
                    <a href="#">
                        <div class="card-img-bg" style="background-image: url('./images/services/alianzas.png');"></div>
                        <span class="mask mask-dark alpha-8 alpha-5--hover"></span>
                        <div class="card-body px-4 py-4">
                            <div style="min-height: 300px;">
                                <h3 class="heading heading-inverse heading-3 strong-600 mb-3"><?= Html::encode('Alianzas') ?></h3>
                                <p class="card-text heading-6 strong-400 line-height-1_8 c-gray-lighter">Colocamos a tu alcance las empresas y emprendimientos que nos ayudan a ser mejores.</p>
                            </div>
                            <a href="#" class="link link--style-4 heading-sm text-uppercase strong-500">
                                Ver más
                                <i class="ion-ios-arrow-right ml-2"></i>
                            </a>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card bg-dark alpha-wrapper text-white overflow--hidden border-0 mb-5">
                    <a href="#">
                        <div class="card-img-bg" style="background-image: url('./images/services/administracion.png');"></div>
                        <span class="mask mask-dark alpha-8 alpha-5--hover"></span>
                        <div class="card-body px-4 py-4">
                            <div style="min-height: 300px;">
                                <h3 class="heading heading-inverse heading-3 strong-600 mb-3"><?= Html::encode('Administración de Propiedades') ?></h3>
                                <p class="card-text heading-6 strong-400 line-height-1_8 c-gray-lighter">Conoce nuestro servicio para el manejo adecuado de tu inversión.</p>
                            </div>
                            <span href="#" class="link link--style-4 heading-sm text-uppercase strong-500">
                                Ver más
                                <i class="ion-ios-arrow-right ml-2"></i>
                            </span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
