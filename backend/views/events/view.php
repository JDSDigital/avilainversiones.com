<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use common\models\Events;

/* @var $this yii\web\View */
/* @var $model common\models\Events */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Events', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="card">
    <div class="card-header header-elements-inline">
        <h5 class="card-title"></h5>
        <div class="header-elements">
            <?= Html::a('Actualizar', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Borrar', ['delete', 'id' => $model->id], [
                'class' => 'btn btn-danger ml-2',
                'data' => [
                    'confirm' => '¿Seguro desea borrar este evento?',
                    'method' => 'post',
                ],
            ]) ?>
        </div>
    </div>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'title',
            'summary',
            'article:ntext',
            'views',
            [
                'attribute' => 'featured',
                'value' => function ($model) {
                    return ($model->featured == Events::STATUS_ACTIVE) ? 'Activo' : 'Inactivo';
                },
            ],
            [
                'attribute' => 'status',
                'value' => function ($model) {
                    return ($model->status == Events::STATUS_ACTIVE) ? 'Activo' : 'Inactivo';
                },
            ],
            [
                'attribute' => 'created_at',
                'value' => function ($model) {
                    return date('d-m-Y', $model->created_at);
                },
            ],
            [
                'attribute' => 'updated_at',
                'value' => function ($model) {
                    return date('d-m-Y', $model->updated_at);
                },
            ],
        ],
    ]) ?>

</div>
