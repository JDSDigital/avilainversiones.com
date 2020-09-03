<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;

/* @var $this yii\web\View */
/* @var $model common\models\Statistics */
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

        <legend class="text-uppercase font-size-sm font-weight-bold">Imágen</legend>

        <div class="row">
            <div class="col-md-12">
                <?= $form->field($model, 'image')->widget(FileInput::classname(), [
                'language' => 'es',
                'options' => [
                  'multiple' => false,
                ],
                'pluginOptions' => [
                  'previewFileType' => 'image',
                  'showCancel' => false,
                  'showUpload' => false,
                  'showDelete' => false,
                  'allowedFileTypes' => ['image'],
                  'allowedFileExtensions' => ['jpg', 'png'],
                  'maxFileSize' => 8000,
                  'maxFileCount' => 1,
                  'overwriteInitial' => true,
                  'initialPreview' => isset($previews) ? $previews : false,
                  'initialPreviewAsData' => true,
                  'initialPreviewShowDelete' => true,
                  'initialPreviewConfig' => isset($previewsConfig) ? $previewsConfig : false,
                ]
                ]); ?>
            </div>
        </div>

    </fieldset>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
