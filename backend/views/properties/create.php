<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Properties */

$this->title = 'Crear propiedad';
$this->params['breadcrumbs'][] = ['label' => 'Propiedades', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="card">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
