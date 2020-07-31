<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Consulting */

$this->title = 'Actualizas asesoría: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Asesorías', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="card">

    <?= $this->render('_form', [
        'model' => $model,
        'previews' => $previews,
        'previewsConfig' => $previewsConfig,
    ]) ?>

</div>
