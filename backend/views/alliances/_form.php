<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;

/* @var $this yii\web\View */
/* @var $model common\models\Alliances */
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

    <?= $form->field($model, 'name', [
        'template' => $template,
    ])->textInput(['maxlength' => true, 'class' => 'form-control']) ?>

    <?= $form->field($model, 'description', [
        'template' => $template,
    ])->textInput(['maxlength' => true, 'class' => 'form-control']) ?>

    <?= $form->field($model, 'url', [
        'template' => $template,
    ])->textInput(['maxlength' => true, 'class' => 'form-control']) ?>

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
              'allowedFileExtensions' => ['jpg', 'png', 'jpeg', 'gif'],
              'maxFileSize' => 2800,
              'maxFileCount' => 1,
              'overwriteInitial' => false,
              'initialPreview' => isset($previews) ? $previews : false,
              'initialPreviewAsData' => true,
              'initialPreviewShowDelete' => true,
              'initialPreviewConfig' => isset($previewsConfig) ? $previewsConfig : false,
            ]
        ]); ?>
      </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
