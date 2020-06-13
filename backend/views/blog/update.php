<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Blog */

$this->title = 'Actualizar una entrada: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Blog', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="card">

    <?= $this->render('_form', [
        'model' => $model,
        'previews' => $previews,
        'previewsConfig' => $previewsConfig,
    ]) ?>

</div>
