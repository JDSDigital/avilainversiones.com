<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = Html::encode('Cursos');
?>

<section class="slice-lg slice--offset-top has-bg-cover bg-size-cover" style="background-image: url('./images/banners/banner-cursos.jpg'); background-position: center center;">
    <span class="mask mask-dark--style-2"></span>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="py-5">
                    <h2 class="heading heading-inverse heading-xl strong-600 text-capitalize line-height-1_2 animated" data-animation-in="fadeInDownBig" data-animation-delay="200">
                        Cursos
                    </h2>
                    <p class="lead c-white animated mt-3" data-animation-in="fadeInUpBig" data-animation-delay="200">
                        El conocimiento es tu mejor inversión.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="slice-lg sct-color-1">
    <div class="container">

        <div class="row cols-xs-space cols-sm-space cols-md-space justify-content-center">
            <div class="col-lg-9">
                <div class="card-wrapper">
                    <?php foreach ($models as $course) : ?>
                        <div class="card z-depth-2-top">
                            <div class="row ">
                                <div class="col-md-5 crop-course">
                                    <?= Html::img('@web/images/courses/'.$course->file, ['class' => 'img-fluid']) ?>
                                </div>
                                <div class="col-md-7">
                                    <div class="card-body">
                                        <h4 class="heading heading-5 strong-600 line-height-1_8">
                                            <?= Html::encode($course->title) ?>
                                        </h4>
                                        <p class="card-text mt-3">
                                            <?= $course->article ?>
                                        </p>
                                        <div class="row align-items-right">
                                            <div class="col-12">
                                                <div class="text-right">
                                                    <a href="#" class="btn btn-styled btn-golden btn-circle text-uppercase strong-400">Comprar</a>
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
        </div>

    </div>
</section>
