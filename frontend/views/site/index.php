<?php

/* @var $this yii\web\View */

use Yii;
use yii\helpers\Html;

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
                            <div class="slice holder-item holder-item-light has-bg-cover bg-size-cover" style="background-image: url(./images/backgrounds/slider/img-41.jpg); background-position: bottom center;">
                                <div class="container d-flex align-items-center">
                                    <div class="col">
                                        <div class="row text-center">
                                            <div class="col-7">
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
                            Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna.
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
            <div class="col-lg-3">
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

            <div class="col-lg-3">
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

            <div class="col-lg-3">
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

            <div class="col-lg-3">
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

        <div class="row cols-xs-space cols-sm-space cols-md-space">
            <div class="col-lg-3">
                <div class="card bg-dark alpha-wrapper text-white overflow--hidden border-0">
                    <a href="#">
                        <div class="card-img-bg" style="background-image: url('./images/prv/work/creative/img-square-1.jpg');"></div>
                        <span class="mask mask-dark alpha-8 alpha-5--hover"></span>
                        <div class="card-body px-5 py-5">
                            <div style="min-height: 400px;">
                                <h3 class="heading heading-inverse heading-2 strong-600 mb-3"><?= Html::encode('Arriendo') ?></h3>
                                <p class="card-text heading-6 strong-400 line-height-1_8 c-gray-lighter">Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                            </div>
                            <span href="#" class="link link--style-4 heading-sm text-uppercase strong-500">
                                See articles
                                <i class="ion-ios-arrow-right ml-2"></i>
                            </span>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="card bg-dark alpha-wrapper text-white overflow--hidden border-0">
                    <a href="#">
                        <div class="card-img-bg" style="background-image: url('./images/prv/work/creative/img-square-2.jpg');"></div>
                        <span class="mask mask-dark alpha-8 alpha-5--hover"></span>
                        <div class="card-body px-5 py-5">
                            <div style="min-height: 400px;">
                                <h3 class="heading heading-inverse heading-2 strong-600 mb-3"><?= Html::encode('Crédito Hipotecario') ?></h3>
                                <p class="card-text heading-6 strong-400 line-height-1_8 c-gray-lighter">Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                            </div>
                            <span href="#" class="link link--style-4 heading-sm text-uppercase strong-500">
                                See articles
                                <i class="ion-ios-arrow-right ml-2"></i>
                            </span>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="card bg-dark alpha-wrapper text-white overflow--hidden border-0">
                    <a href="#">
                        <div class="card-img-bg" style="background-image: url('./images/prv/work/creative/img-square-3.jpg');"></div>
                        <span class="mask mask-dark alpha-8 alpha-5--hover"></span>
                        <div class="card-body px-5 py-5">
                            <div style="min-height: 400px;">
                                <h3 class="heading heading-inverse heading-2 strong-600 mb-3"><?= Html::encode('Oportunidades de Inversión') ?></h3>
                                <p class="card-text heading-6 strong-400 line-height-1_8 c-gray-lighter">Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                            </div>
                            <a href="#" class="link link--style-4 heading-sm text-uppercase strong-500">
                                See articles
                                <i class="ion-ios-arrow-right ml-2"></i>
                            </a>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="card bg-dark alpha-wrapper text-white overflow--hidden border-0">
                    <a href="#">
                        <div class="card-img-bg" style="background-image: url('./images/prv/work/creative/img-square-1.jpg');"></div>
                        <span class="mask mask-dark alpha-8 alpha-5--hover"></span>
                        <div class="card-body px-5 py-5">
                            <div style="min-height: 400px;">
                                <h3 class="heading heading-inverse heading-2 strong-600 mb-3"><?= Html::encode('Departamento Legal') ?></h3>
                                <p class="card-text heading-6 strong-400 line-height-1_8 c-gray-lighter">Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                            </div>
                            <span href="#" class="link link--style-4 heading-sm text-uppercase strong-500">
                                See articles
                                <i class="ion-ios-arrow-right ml-2"></i>
                            </span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
