<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = Html::encode('Eventos');
?>

<section class="slice-lg slice--offset-top has-bg-cover bg-size-cover" style="background-image: url('../images/banners/banner-eventos.jpg'); background-position: center center;">
    <span class="mask mask-dark--style-2"></span>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="py-5">
                    <h2 class="heading heading-inverse heading-xl strong-600 text-capitalize line-height-1_2 animated" data-animation-in="fadeInDownBig" data-animation-delay="200">
                        <?= Html::encode($model->title) ?>
                    </h2>
                    <p class="lead c-white animated mt-3" data-animation-in="fadeInUpBig" data-animation-delay="200">
                        <?= Html::encode($model->summary) ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="slice-sm sct-color-1">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 article">
            <?= $model->article ?>
        </div>
      </div>
    </div>
</section>

<section class="slice-sm container">
    <div class="light-gallery">
        <!-- Gallery -->
        <div class="gallery-bottom">
            <div class="row justify-content-center">
                <?php foreach ($model->eventsImages as $image) : ?>
                    <div class="col-sm-3 justify-content-center">
                        <div class="gallery-thumb crop view view-first mx-2 my-3">
                            <?= Html::a(
                            Html::img($image->getThumb(), ['class' => 'mx-auto']),
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
</section>
