<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = Html::encode('Eventos');
?>

<section class="slice-lg slice--offset-top has-bg-cover bg-size-cover" style="background-image: url('../images/banners/eventos.jpg'); background-position: bottom center;">
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

<div class="light-gallery">
    <!-- Gallery -->
    <div class="gallery-bottom">
        <div class="row">
            <?php foreach ($model->eventsImages as $image) : ?>
                <div class="col-sm-2">
                  <div class="gallery-thumb crop view view-first mx-2 my-3">
                    <?= Html::a(
                      Html::img($image->getThumb()),
                      $image->getImage(),
                      [
                        'class' => 'item',
                        'data-fancybox' => 'group'
                      ]
                    ) ?>
                  </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
