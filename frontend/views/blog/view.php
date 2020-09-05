<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = Html::encode('Blog');
?>

<section class="slice-sm sct-color-1">
    <div class="container container-xs">
        <div class="block block-post">
            <div class="block-body block-post-body">
                <?= Html::img('../images/blog/'.$model->file, ['class' => 'img-fluid']) ?>
                <h2 class="heading heading-inverse heading-1 strong-600 text-capitalize line-height-1_2">
                    <?= Html::encode($model->title) ?>
                </h2>
                <ul class="inline-links inline-links--style-1 mt-1">
                    <li>
                        <p class="heading heading-6">
                            <i class="fa fa-eye mr-2"></i> <?= Html::encode($model->views) ?>
                        </p>
                    </li>
                </ul>
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
