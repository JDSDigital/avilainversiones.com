<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Consulting */

$this->title = 'Crear una asesoría';
$this->params['breadcrumbs'][] = ['label' => 'Asesorías', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="card">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
