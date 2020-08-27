<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\User */
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

      <?= $form->field($model, 'email', [
          'template' => $template,
      ])->textInput(['maxlength' => true, 'class' => 'form-control']) ?>

      <?= $form->field($model, 'name', [
          'template' => $template,
      ])->textInput(['maxlength' => true, 'class' => 'form-control']) ?>

      <?= $form->field($model, 'password', [
          'template' => $template,
      ])->passwordInput(['maxlength' => true, 'class' => 'form-control']) ?>

      <?= $form->field($model, 'repassword', [
          'template' => $template,
      ])->passwordInput(['maxlength' => true, 'class' => 'form-control']) ?>

  </fieldset>

  <div class="form-group">
      <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
  </div>

  <?php ActiveForm::end(); ?>

</div>
