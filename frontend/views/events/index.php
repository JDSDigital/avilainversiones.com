<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = Html::encode('Eventos');
?>

<section class="slice-lg slice--offset-top has-bg-cover bg-size-cover" style="background-image: url('./images/banners/eventos.jpg'); background-position: bottom center;">
    <span class="mask mask-dark--style-2"></span>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="py-5">
                    <h2 class="heading heading-inverse heading-xl strong-600 text-capitalize line-height-1_2 animated" data-animation-in="fadeInDownBig" data-animation-delay="200">
                        Eventos
                    </h2>
                    <p class="lead c-white animated mt-3" data-animation-in="fadeInUpBig" data-animation-delay="200">
                        There is not time to go slow.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="slice sct-color-1">
    <div class="container">
        <div class="row cols-md-space cols-sm-space cols-xs-space justify-content-md-center">
            <div class="col-lg-9">
                <div class="card-wrapper">
                    <?php foreach ($models as $event) : ?>
                      <div class="card z-depth-2-top">
                        <div class="row ">
                          <div class="col-md-4">
                            <div class="card-image">
                              <div class="view view-first">
                                <?= Html::a(
                                  Html::img($event->cover()->getImage()),
                                  ['events/view', 'id' => $event->id]
                                ) ?>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h4 class="heading heading-5 strong-600 line-height-1_8">
                                <?= Html::a($event->title, ['events/view', 'id' => $event->id]) ?>
                              </h4>
                              <p class="card-text mt-3">
                                <?= Html::encode($event->summary) ?>
                              </p>
                              <div class="row align-items-center mt-4">
                                <div class="col-6">
                                  <div class="block-author">
                                    <div class="author-image author-image-xs">
                                      <img src="./images/prv/people/person-1.jpg">
                                    </div>
                                    <div class="author-info">
                                      <div class="author-name">
                                        <a href="#" class="strong-600">Elisabeth Alanna</a>
                                      </div>
                                    </div>
                                  </div>
                                </div>

                                <div class="col-6">
                                  <div class="text-right">
                                    <ul class="inline-links inline-links--style-2">
                                      <li>
                                        <?= Html::encode($event->created_at) ?>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="col-lg-3 blog-sidebar">
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
            </div>
        </div>
    </div>
</section>
