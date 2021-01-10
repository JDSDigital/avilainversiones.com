<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contacto';
$url = Yii::getAlias('@web') . '/images/banners/banner-contacto.jpg';
?>

<section class="slice-lg slice--offset-top has-bg-cover bg-size-cover" style="background-image: url('<?= $url ?>'); background-position: top center;">
    <span class="mask mask-dark--style-2"></span>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="py-5">
                    <h2 class="heading heading-inverse heading-xl strong-600 text-capitalize line-height-1_2 animated" data-animation-in="fadeInDownBig" data-animation-delay="200">
                        Contacto
                    </h2>
                    <p class="lead c-white animated mt-3" data-animation-in="fadeInUpBig" data-animation-delay="200">
                        Deja tu contacto aquí y nos comunicaremos contigo.
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
                    'action' => ['site/contact'],
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

            <div class="col-lg-5 ml-lg-auto mt-5">
                <div class="row vertical-align mb-3">
                    <div class="col-xs-2">
                        <i class="text-golden-gradient fa fa-map-marker fa-2x mx-3"></i>
                    </div>
                    <div class="col-xs-10">
                        <p class="lead mb-0">
                            Avenida Presidente Kennedy 5600.
                            <br />
                            Vitacura, Chile.
                        </p>
                    </div>
                </div>
                <div class="row vertical-align mb-3">
                    <div class="col-xs-2">
                        <i class="text-golden-gradient fa fa-phone fa-2x mx-3"></i>
                    </div>
                    <div class="col-xs-10">
                        <p class="font-italic mb-0">
                            Oficina:
                        </p>
                        <p class="lead mb-0">
                            +56 2 3252 9122
                        </p>
                    </div>
                </div>
                <div class="row vertical-align mb-3">
                    <div class="col-xs-2">
                        <i class="text-golden-gradient fa fa-phone fa-2x mx-3"></i>
                    </div>
                    <div class="col-xs-10">
                        <p class="font-italic mb-0">
                            Móvil:
                        </p>
                        <p class="lead mb-0">
                            <?= Html::a(
                                '+56 9 5614 2921',
                                'https://wa.me/56956142921',
                                ['target' => '_blank', 'class' => 'c-white']
                            ) ?>
                        </p>
                    </div>
                </div>

                <?= Html::a(
                    Html::img('@web/images/elements/direccion.png', ['class' => 'img-fluid']),
                    'https://goo.gl/maps/WNBrJ1CVJECs7gBC6',
                    ['target' => '_blank']
                ) ?>

            </div>
        </div>
    </div>
</section>