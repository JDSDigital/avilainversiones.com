<?php

/* @var $this yii\web\View */

use yii\helpers\Url;
use yii\helpers\Html;

$this->title = Html::encode('Alianzas');
?>

<section class="slice-lg slice--offset-top has-bg-cover bg-size-cover" style="background-image: url('./images/banners/banner-alianzas.jpg'); background-position: center center;">
    <span class="mask mask-dark--style-2"></span>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="py-5">
                    <h2 class="heading heading-inverse heading-xl strong-600 text-capitalize line-height-1_2 animated" data-animation-in="fadeInDownBig" data-animation-delay="200">
                        Alianzas
                    </h2>
                    <p class="lead c-white animated mt-3" data-animation-in="fadeInUpBig" data-animation-delay="200">
                        Hace falta texto aquí.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="slice-lg sct-color-1">
    <div class="container">

        <div class="row cols-xs-space cols-sm-space cols-md-space justify-content-center alliances">
            <?php foreach ($alliances as $alliance) : ?>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="logo-box vertical-align">
                        <div class="logo-inner-box">
                            <a href="<?= $alliance->url ?>" target="_blank">
                              <span class="thumb"><?= Html::img($alliance->getImage(), ['class' => 'img-responsive', 'alt' => $alliance->name]) ?></span>
                            </a>
                            <div class="logo-hover">
                                <h4 class="text-golden-gradient"><?= $alliance->name ?></h4 class="text-golden-gradient">
                                <h6 class="c-gray-lighter"><?= $alliance->description ?></h6>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>
