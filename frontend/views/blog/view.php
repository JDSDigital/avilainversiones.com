<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = Html::encode('Blog');
?>
<section class="slice-lg slice--offset-top has-bg-cover bg-size-cover" style="background-image: url(<?= '../images/blog/'.$model->file ?>); background-position: bottom center;">
    <span class="mask mask-dark--style-2"></span>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h3 class="heading heading-1 strong-400 c-white">
                    <?= Html::encode($model->title) ?>
                </h3>
                <h4 class="heading heading-5 text-normal strong-300 c-white mt-4">
                    <?= Html::encode($model->summary) ?>
                </h4>

                <ul class="inline-links inline-links--style-1 mt-4">
                    <li>
                        <i class="fa fa-eye"></i> <?= Html::encode($model->views) ?>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="slice-sm sct-color-1">
    <div class="container container-xs">
        <div class="block block-post">
            <div class="block-body block-post-body">
                <?= Html::encode($model->article) ?>
            </div>
        </div>
    </div>
</section>
