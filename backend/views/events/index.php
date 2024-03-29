<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;
use yii\grid\ActionColumn;
use yii\widgets\Pjax;
use common\models\Events;
/* @var $this yii\web\View */
/* @var $searchModel common\models\EventsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Eventos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="card">
    <div class="card-header header-elements-inline">
        <h5 class="card-title"></h5>
        <div class="header-elements">
            <?= Html::a('Crear un evento', ['create'], ['class' => 'btn btn-success']) ?>
        </div>
    </div>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'options' => [
            'class' => 'grid-view table-responsive',
        ],
        'tableOptions' => [
            'class' => 'table table-striped table-hover',
        ],
        'pager' => [
            'options' => ['class' => 'pagination ml-2 mt-1'],
        ],
        'summaryOptions' => [
            'class' => 'summary ml-2 mr-2 mt-1 mb-1',
        ],
        'layout' => '{items}{pager}{summary}',
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'attribute' => 'featured',
                'format' => 'raw',
                'value' => function ($model) {
                    $check = ($model->featured == Events::STATUS_ACTIVE) ? "checked='checked'" : null;
                    return "<div class='form-check form-check-right'>
                      <input id='featured-$model->id' type='checkbox' class='form-check-input-switchery switchFeatured' $check>
                    </div>";
                }
            ],
            [
                'attribute' => 'status',
                'format' => 'raw',
                'value' => function ($model) {
                    $check = ($model->status == Events::STATUS_ACTIVE) ? "checked='checked'" : null;
                    return "<div class='form-check form-check-right'>
                      <input id='status-$model->id' type='checkbox' class='form-check-input-switchery switchStatus' $check>
                    </div>";
                }
            ],
            [
                'attribute' => 'title',
                'format' => 'raw'
            ],
            'summary',
            // 'article:ntext',
            'views',
            [
                'class' => ActionColumn::className(),
                'template' => '{view} {update} {delete}',
                'buttons' => [
                    // 'view' => function ($url, $model, $key) {
                    //     return Html::a('<span class="icon-eye" aria-hidden="true"></span>', $url);
                    // },
                    'update' => function ($url, $model, $key) {
                        return Html::a('<span class="icon-pencil5" aria-hidden="true"></span>', $url);
                    },
                    'delete' => function ($url, $model, $key) {
                        return Html::a('<span class="icon-trash" aria-hidden="true"></span>', ['delete', 'id' => $model->id], [
                            'data' => [
                                'confirm' => '¿Seguro desea borrar este evento?',
                                'method' => 'post',
                            ],
                        ]);
                    }
                 ],
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>

<?php
    $this->registerJs('listenerChangeStatus("'.Url::to(["events/status"]).'");');
    $this->registerJs('listenerChangeFeatured("'.Url::to(["events/featured"]).'");');
?>
