<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;

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

        <?= $form->field($model, 'article')->textarea([
            'class' => 'form-control',
            'rows' => 4
        ]) ?>

        <?= $form->field($model, 'author', [
            'template' => $template,
        ])->textInput(['maxlength' => true, 'class' => 'form-control']) ?>

        <?= $form->field($model, 'source', [
            'template' => $template,
        ])->textInput(['maxlength' => true, 'class' => 'form-control']) ?>

        <div class="row">
          <div class="col-md-12">
            <?= $form->field($model, 'thumbImage')->widget(FileInput::classname(), [
                'language' => 'es',
                'options' => [
                  'multiple' => false,
                ],
                'pluginOptions' => [
                  'previewFileType' => 'image',
                  'showCancel' => false,
                  'showUpload' => false,
                  'showDelete' => true,
                  'allowedFileTypes' => ['image'],
                  'allowedFileExtensions' => ['jpg', 'png'],
                  'maxFileSize' => 8000,
                  'maxFileCount' => 1,
                  'overwriteInitial' => true,
                  'initialPreview' => isset($previewThumb) ? $previewThumb : false,
                  'initialPreviewAsData' => true,
                  'initialPreviewShowDelete' => true,
                  'initialPreviewConfig' => isset($previewThumbConfig) ? $previewThumbConfig : false,
                ]
            ]); ?>
          </div>
        </div>

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
              'showDelete' => true,
              'allowedFileTypes' => ['image'],
              'allowedFileExtensions' => ['jpg', 'png'],
              'maxFileSize' => 8000,
              'maxFileCount' => 1,
              'overwriteInitial' => true,
              'initialPreview' => isset($preview) ? $preview : false,
              'initialPreviewAsData' => true,
              'initialPreviewShowDelete' => true,
              'initialPreviewConfig' => isset($previewConfig) ? $previewConfig : false,
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
