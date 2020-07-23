<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\StatisticsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Estadisticas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="card">
    <div class="card-header header-elements-inline">
        <h5 class="card-title"></h5>
        <div class="header-elements">
            <?= Html::a('Actualizar', ['update', 'id' => $model->id], ['class' => 'btn btn-success']) ?>
        </div>
    </div>

    <?php Pjax::begin(); ?>

    <div class="p-3">
        <?= Html::img($model->getImage(), ['class' => "img-fluid"])?>
    </div>

    <?php Pjax::end(); ?>

</div>
