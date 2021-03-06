<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\bootstrap4\LinkPager;
Yii::$app->formatter->locale = 'es';

$this->title = Html::encode('Eventos');
?>

<section class="slice-lg slice--offset-top has-bg-cover bg-size-cover" style="background-image: url('./images/banners/banner-eventos.jpg'); background-position: center center;">
    <span class="mask mask-dark--style-2"></span>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="py-5">
                    <h2 class="heading heading-inverse heading-xl strong-600 text-capitalize line-height-1_2 animated" data-animation-in="fadeInDownBig" data-animation-delay="200">
                        Eventos
                    </h2>
                    <p class="lead c-white animated mt-3" data-animation-in="fadeInUpBig" data-animation-delay="200">
                        Cambia tu forma de ver el mercado inmobiliario.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="slice sct-color-1">
    <div class="container">
        <div class="row cols-md-space cols-sm-space cols-xs-space justify-content-md-center">
            <?php if (count($dataProvider->getModels()) > 0) : ?>
                <div class="col-lg-12">
                    <div class="card-wrapper">
                        <?php foreach ($dataProvider->getModels() as $event) : ?>
                          <div class="card z-depth-2-top">
                            <div class="row ">
                              <div class="col-md-4">
                                <div class="card-image">
                                  <div class="view view-first">
                                    <?= Html::a(
                                      Html::img($event->getCover()->getImage()),
                                      ['events/view', 'id' => $event->id]
                                    ) ?>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-8">
                                <div class="card-body">
                                  <h4 class="heading heading-3 strong-600 line-height-1_8">
                                    <?= Html::a($event->title, ['events/view', 'id' => $event->id]) ?>
                                  </h4>
                                  <p class="heading-6 card-text mt-3">
                                    <?= Html::encode($event->summary) ?>
                                  </p>
                                </div>
                              </div>
                            </div>
                          </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="pagination-wrapper">
                        <nav aria-label="Pagination">
                            <?= LinkPager::widget([
                              'pagination' => $dataProvider->getPagination(),
                              'options' => [
                                'class' => 'pagination pagination--style-2 pagination-circle justify-content-center'
                              ]
                            ]) ?>
                        </nav>
                    </div>
                </div>
            <?php else : ?>
                <div class="col-lg-12 text-center mt-3">
                    <p class="heading heading-4">No hay elementos que mostrar.</p>
                </div>
            <?php endif; ?>

            <!-- Client pictures sidebar -->

            <!-- <div class="col-lg-3 blog-sidebar">
                <h4 class="heading heading-5 strong-600 line-height-1_8">
                    Clientes
                </h4>
                <div class="row">
                    <div class="post-thumb">
                        <img src="./images/prv/magazine/person-1.jpg" alt="">
                    </div>
                    <div class="post-thumb">
                        <img src="./images/prv/magazine/person-2.jpg" alt="">
                    </div>
                    <div class="post-thumb">
                        <img src="./images/prv/magazine/person-3.jpg" alt="">
                    </div>
                    <div class="post-thumb">
                        <img src="./images/prv/magazine/person-4.jpg" alt="">
                    </div>
                </div>
                <h4 class="heading heading-5 strong-600 line-height-1_8 mt-3">
                    Eventos
                </h4>
                <div class="row">
                    <div class="post-thumb">
                        <img src="./images/prv/magazine/person-5.jpg" alt="">
                    </div>
                    <div class="post-thumb">
                        <img src="./images/prv/magazine/person-1.jpg" alt="">
                    </div>
                    <div class="post-thumb">
                        <img src="./images/prv/magazine/person-2.jpg" alt="">
                    </div>
                    <div class="post-thumb">
                        <img src="./images/prv/magazine/person-3.jpg" alt="">
                    </div>
                </div>
                <h4 class="heading heading-5 strong-600 line-height-1_8 mt-3">
                    Inversionistas
                </h4>
                <div class="row">
                    <div class="post-thumb">
                        <img src="./images/prv/magazine/person-4.jpg" alt="">
                    </div>
                    <div class="post-thumb">
                        <img src="./images/prv/magazine/person-5.jpg" alt="">
                    </div>
                    <div class="post-thumb">
                        <img src="./images/prv/magazine/person-1.jpg" alt="">
                    </div>
                    <div class="post-thumb">
                        <img src="./images/prv/magazine/person-2.jpg" alt="">
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</section>
