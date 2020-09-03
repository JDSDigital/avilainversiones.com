<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Properties */

$this->title = 'Crear estadística';
$this->params['breadcrumbs'][] = ['label' => 'Estadísticas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="card">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
