<?php

use yii\helpers\Html;
use yii\grid\GridView;
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
            'title',
            'summary',
            'article:ntext',
            'views',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
