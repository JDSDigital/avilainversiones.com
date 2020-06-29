<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Properties */

$this->title = 'Actualizar propiedad: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Propiedades', 'url' => ['index']];
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
