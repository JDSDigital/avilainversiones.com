<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

$this->title = 'Login';
?>

<!-- Page content -->
<div class="page-content">

<!-- Main content -->
<div class="content-wrapper">

    <!-- Content area -->
    <div class="content d-flex justify-content-center align-items-center">

        <!-- Login form -->
        <?php $form = ActiveForm::begin([
            'id' => 'login-form', 
            'options' => [
                'class' => 'login-form'
            ],
        ]); ?>
            <div class="card mb-0">
                <div class="card-body">
                    <div class="text-center mb-3">
                        <i class="icon-reading icon-2x text-slate-300 border-slate-300 border-3 rounded-round p-3 mb-3 mt-1"></i>
                        <h5 class="mb-0">Inicia sesión</h5>
                        <span class="d-block text-muted">Ingresa tus credenciales</span>
                    </div>

                    <?= $form->field($model, 'email', [
                        'options' => ['class' => 'form-group form-group-feedback form-group-feedback-left'],
                        'inputOptions' => [
                            'class' => 'form-control',
                            'placeholder' => 'Correo',
                            'autofocus' => true
                        ],
                        'template' => '{input}<div class="form-control-feedback"><i class="icon-user text-muted"></i></div>{error}{hint}',
                    ]); ?>

                    <?= $form->field($model, 'password', [
                        'options' => ['class' => 'form-group form-group-feedback form-group-feedback-left'],
                        'inputOptions' => [
                            'class' => 'form-control',
                            'placeholder' => 'Password',
                        ],
                        'template' => '{input}<div class="form-control-feedback"><i class="icon-lock2 text-muted"></i></div>{error}{hint}',
                    ])->passwordInput(); ?>

                    <?= $form->field($model, 'rememberMe')->checkbox() ?>

                    <div class="form-group">
                        <?= Html::submitButton('Login <i class="icon-circle-right2 ml-2"></i>', ['class' => 'btn btn-primary btn-block', 'name' => 'login-button']) ?>
                    </div>

                    <!-- <div class="text-center">
                        <a href="login_password_recover.html">Forgot password?</a>
                    </div> -->
                </div>
            </div>
        <?php ActiveForm::end(); ?>
        <!-- /login form -->

    </div>
    <!-- /content area -->

</div>
<!-- /main content -->

</div>
<!-- /page content -->
