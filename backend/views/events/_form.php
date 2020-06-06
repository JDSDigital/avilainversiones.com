<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Events */
/* @var $form yii\widgets\ActiveForm */

$template = '<div class="form-group row">
    <label class="col-form-label col-lg-2">{label}</label>
    <div class="col-lg-10">
        <div class="input-group">
            {input}
        </div>
        {error}
    </div>
</div>';
?>

<div class="card-body">

    <?php $form = ActiveForm::begin(); ?>
    <fieldset class="mb-3">
        <legend class="text-uppercase font-size-sm font-weight-bold">Datos</legend>

        <?= $form->field($model, 'title', [
            'template' => $template,
        ])->textInput(['maxlength' => true, 'class' => 'form-control']) ?>

        <?= $form->field($model, 'summary', [
            'template' => $template,
        ])->textInput(['maxlength' => true, 'class' => 'form-control']) ?>

        <?= $form->field($model, 'article', [
            'template' => $template,
        ])->textarea(['maxlength' => true, 'class' => 'form-control']) ?>

        <?php $form->field($model, 'featured', [
            'template' => '<div class="form-group row">
                <div class="col-lg-3">
                    <div class="form-check form-check-right form-check-switchery">
                        {input}
                    </div>
                </div>
            </div>',
        ])->checkbox(['class' => 'form-check-input-switchery'])->label(false) ?>

    </fieldset>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
