<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = Html::encode('Blog');
?>

<section class="slice-lg slice--offset-top has-bg-cover bg-size-cover" style="background-image: url('../images/banners/banner-blog.jpg'); background-position: center center;">
    <span class="mask mask-dark--style-2"></span>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="py-5">
                    <h2 class="heading heading-inverse heading-1 strong-600 text-capitalize line-height-1_2 animated" data-animation-in="fadeInDownBig" data-animation-delay="200">
                        <?= Html::encode($model->title) ?>
                    </h2>
                    <p class="lead c-white animated mt-3" data-animation-in="fadeInUpBig" data-animation-delay="200">
                        <?= Html::encode($model->summary) ?>
                    </p>
                    <ul class="inline-links inline-links--style-1 mt-3">
                        <li>
                            <p class="heading heading-6">
                                <i class="fa fa-eye mr-2"></i> <?= Html::encode($model->views) ?>
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="slice-sm sct-color-1">
    <div class="container container-xs">
        <div class="block block-post">
            <div class="block-body block-post-body">
                <?= Html::img('../images/blog/'.$model->file, ['class' => 'img-fluid']) ?>
                <?= $model->article ?>
                <div class="mt-3">
                    <?= '<i class="fa fa-user mr-2"></i>'.$model->user->name ?>
                    <br />
                    <?php if ($model->source) : ?>
                        <?= 'Fuente: ' . Html::a($model->source, $model->source, ['target' => 'blank']) ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
