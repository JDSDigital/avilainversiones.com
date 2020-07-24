<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Alliances */

$this->title = 'Crear Alianza';
$this->params['breadcrumbs'][] = ['label' => 'Alianzas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="card">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
