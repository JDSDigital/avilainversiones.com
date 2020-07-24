<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Alliances */

$this->title = 'Actualizar una alianza: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Alianzas', 'url' => ['index']];
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
