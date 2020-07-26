<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contacto';
?>

<section class="slice-lg slice--offset-top has-bg-cover bg-size-cover" style="background-image: url('./images/banners/banner-contacto.jpg'); background-position: top center;">
    <span class="mask mask-dark--style-2"></span>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="py-5">
                    <h2 class="heading heading-inverse heading-xl strong-600 text-capitalize line-height-1_2 animated" data-animation-in="fadeInDownBig" data-animation-delay="200">
                        Contacto
                    </h2>
                    <p class="lead c-white animated mt-3" data-animation-in="fadeInUpBig" data-animation-delay="200">
                        There is not time to go slow.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="slice sct-color-1">
    <div class="container">
        <div class="section-title section-title--style-1 text-center mb-2">
            <h3 class="section-title-inner text-normal">
                Contáctanos
            </h3>
            <span class="section-title-delimiter clearfix d-none"></span>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-6">
                <!-- Contact form -->
                <?php $form = ActiveForm::begin([
                    'id' => 'contact-form',
                    'options' => [
                        'class' => 'form-default form-material'
                    ],
                ]); ?>
                    <div class="row">
                        <div class="col-12">
                            <?= $form->field($model, 'name', [
                                'template' => '<div class="form-group has-floating-label">
                                    {label}
                                    {input}
                                    <span class="bar"></span>
                                    {error}
                                </div>',
                                'labelOptions' => [
                                    'class' => 'control-label'
                                ]
                            ])->textInput([
                                'autofocus' => true,
                                'class' => 'form-control form-control-lg',
                            ]) ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">

                            <?= $form->field($model, 'email', [
                                'template' => '<div class="form-group has-floating-label">
                                    {label}
                                    {input}
                                    <span class="bar"></span>
                                    {error}
                                </div>',
                                'labelOptions' => [
                                    'class' => 'control-label'
                                ]
                            ])->textInput([
                                'class' => 'form-control form-control-lg',
                            ]) ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <?= $form->field($model, 'subject', [
                                'template' => '<div class="form-group has-floating-label">
                                    {label}
                                    {input}
                                    <span class="bar"></span>
                                    {error}
                                </div>',
                                'labelOptions' => [
                                    'class' => 'control-label'
                                ]
                            ])->textInput([
                                'class' => 'form-control form-control-lg',
                            ]) ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <?= $form->field($model, 'body', [
                                'template' => '<div class="form-group has-floating-label">
                                    {label}
                                    {input}
                                    <span class="bar"></span>
                                    {error}
                                </div>',
                                'labelOptions' => [
                                    'class' => 'control-label'
                                ]
                            ])->textarea([
                                'rows' => 6,
                                'class' => 'form-control form-control-lg',
                            ]) ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <?= $form->field($model, 'verifyCode', [
                                'template' => '<div class="form-group has-floating-label">
                                    {label}
                                    {input}
                                    <span class="bar"></span>
                                    {error}
                                </div>',
                                'labelOptions' => [
                                    'class' => 'control-label'
                                ]
                            ])->widget(Captcha::className(), [
                                'template' => '<div class="row">
                                    <div class="col-sm-9">{input}<span class="bar"></span></div>
                                    <div class="col-sm-3">{image}</div>
                                </div>',
                                'options' => [
                                    'class' => 'form-control form-control-xl',
                                ]
                            ]) ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <?= Html::submitButton('Enviar mensaje', [
                                    'class' => 'btn btn-styled btn-golden btn-circle mt-3 text-uppercase strong-400',
                                    'name' => 'contact-button'
                                ]) ?>
                            </div>
                        </div>
                    </div>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</section>
