<?php

/* @var $this yii\web\View */

use yii\helpers\Url;
use yii\helpers\Html;

$this->title = Html::encode('Cursos');
?>

<section class="slice-lg slice--offset-top has-bg-cover bg-size-cover" style="background-image: url('./images/banners/banner-asesorias.jpg'); background-position: center center;">
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
                <div class="col-lg-2 col-md-3 col-sm-4">
                    <div class="logo-box vertical-align">
                        <div class="logo-inner-box">
                            <a href="<?= $alliance->url ?>" target="_blank">
                              <span class="thumb" data-toggle="tooltip" data-html="true" data-title="<h3><?= $alliance->name ?></h3><h6><?= $alliance->description ?></h6>"><?= Html::img($alliance->getImage(), ['class' => 'img-responsive', 'alt' => $alliance->name]) ?></span>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>
