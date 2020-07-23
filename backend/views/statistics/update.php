<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Statistics */

$this->title = 'Actualizar estadísticas';
$this->params['breadcrumbs'][] = ['label' => 'Estadísticas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => 'Estadísticas', 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="card">

    <?= $this->render('_form', [
        'model' => $model,
        'previews' => $previews,
        'previewsConfig' => $previewsConfig,
    ]) ?>

</div>
