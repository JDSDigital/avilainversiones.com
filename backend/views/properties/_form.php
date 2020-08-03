<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;

/* @var $this yii\web\View */
/* @var $model common\models\Properties */
/* @var $form yii\widgets\ActiveForm */

$cover = Url::to(['properties/cover?id=']);
$btn = "<button type='button' class='kv-file-cover btn btn-sm btn-kv btn-default btn-outline-secondary' title='Portada' data-url='$cover{key}' data-key='{key}'><i class='fas fa-star'></i></button>";

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

        <?= $form->field($model, 'type_id', [
            'template' => $template,
        ])->dropDownList($model->getTypes(), ['class' => 'form-control form-control-uniform']) ?>

        <?= $form->field($model, 'contract_id', [
            'template' => $template,
        ])->dropDownList($model->getContracts(), ['class' => 'form-control form-control-uniform']) ?>

        <?= $form->field($model, 'title', [
            'template' => $template,
        ])->textInput(['maxlength' => true, 'class' => 'form-control']) ?>

        <?= $form->field($model, 'summary', [
            'template' => $template,
        ])->textInput(['maxlength' => true, 'class' => 'form-control']) ?>

        <?= $form->field($model, 'description')->textarea([
            'class' => 'form-control',
            'rows' => 4
        ]) ?>

        <?= $form->field($model, 'city', [
            'template' => $template,
        ])->textInput(['maxlength' => true, 'class' => 'form-control']) ?>

        <?= $form->field($model, 'commune', [
            'template' => $template,
        ])->textInput(['maxlength' => true, 'class' => 'form-control']) ?>

        <!-- TODO NUMBER -->
        <?= $form->field($model, 'price', [
            'template' => $template,
        ])->textInput(['maxlength' => true, 'class' => 'form-control']) ?>

        <!-- TODO NUMBER -->
        <?= $form->field($model, 'area', [
            'template' => $template,
        ])->textInput(['maxlength' => true, 'class' => 'form-control']) ?>

        <!-- TODO NUMBER -->
        <?= $form->field($model, 'rooms', [
            'template' => $template,
        ])->textInput(['type' => 'number', 'class' => 'form-control']) ?>

        <!-- TODO NUMBER -->
        <?= $form->field($model, 'toilets', [
            'template' => $template,
        ])->textInput(['type' => 'number', 'class' => 'form-control']) ?>

        <!-- TODO NUMBER -->
        <?= $form->field($model, 'garage', [
            'template' => $template,
        ])->textInput(['type' => 'number', 'class' => 'form-control']) ?>

        <?= $form->field($model, 'address', [
            'template' => $template,
        ])->textInput(['maxlength' => true, 'class' => 'form-control']) ?>

        <?php $form->field($model, 'featured', [
            'template' => '<div class="form-group row">
                <div class="col-lg-3">
                    <div class="form-check form-check-right form-check-switchery">
                        {input}
                    </div>
                </div>
            </div>',
        ])->checkbox(['class' => 'form-check-input-switchery'])->label(false) ?>

        <div class="row">
          <div class="col-md-12">
            <?= $form->field($model, 'images[]')->widget(FileInput::classname(), [
                'language' => 'es',
                'options' => [
                  'multiple' => true,
                ],
                'pluginOptions' => [
                  'previewFileType' => 'image',
                  'showCancel' => false,
                  'showUpload' => false,
                  'showDelete' => true,
                  'allowedFileTypes' => ['image'],
                  'allowedFileExtensions' => ['jpg', 'png'],
                  'maxFileSize' => 2800,
                  'maxFileCount' => 9,
                  'overwriteInitial' => false,
                  'initialPreview' => isset($previews) ? $previews : false,
                  'initialPreviewAsData' => true,
                  'initialPreviewShowDelete' => true,
                  'initialPreviewConfig' => isset($previewsConfig) ? $previewsConfig : false,
                  'otherActionButtons' => $btn,
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

<?php $this->registerJs('listenerCover();') ?>
