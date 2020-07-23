<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;

/* @var $this yii\web\View */
/* @var $model common\models\Statistics */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="card-body">

    <?php $form = ActiveForm::begin(); ?>

    <fieldset class="mb-3">
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

    </fieldset>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
