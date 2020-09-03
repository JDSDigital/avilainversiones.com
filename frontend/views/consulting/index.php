<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = Html::encode('Asesorías');
$i = 0;
$textOdd = "col col-md-6 col-sm-12 col-12";
$textEven = "col-md-6 order-lg-2";
$imageOdd = "col col-md-6 col-sm-12 col-12 order-first order-md-last";
$imageEven = "col-md-6 order-first order-md-first";
?>

<section class="slice-lg slice--offset-top has-bg-cover bg-size-cover" style="background-image: url('./images/banners/banner-asesorias.jpg'); background-position: center center;">
    <span class="mask mask-dark--style-2"></span>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="py-5">
                    <h2 class="heading heading-inverse heading-xl strong-600 text-capitalize line-height-1_2 animated" data-animation-in="fadeInDownBig" data-animation-delay="200">
                        Asesorías
                    </h2>
                    <p class="lead c-white animated mt-3" data-animation-in="fadeInUpBig" data-animation-delay="200">
                        ¿Deseas saber que tipo de asesoría necesitas?
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php if (count($dataProvider->getModels()) > 0) : ?>
    <?php foreach ($dataProvider->getModels() as $consulting) : ?>
        <section class="slice-lg sct-color-1">
            <div class="container">
                <div class="row align-items-md-center cols-xs-space cols-md-space cols-lg-space">
                    <div class="<?= ($i%2 === 0) ? $textEven : $textOdd ?>">
                        <div class="px-3 py-3 text-center text-lg-left">
                            <h3 class="heading heading-2 strong-500">
                                <?= Html::encode($consulting->name) ?>
                            </h3>
                            <p class="lead line-height-1_8 mt-4">
                                <?= $consulting->description ?>
                            </p>
                            <div class="btn p-0 ml-3 mt-5">
                                <?= Html::a("Online", ['site/consulting', 'id' => $consulting->id], [
                                    'class' => 'btn btn-styled btn-golden btn-circle text-uppercase strong-400'
                                ]) ?>
                            </div>
                            <div class="btn p-0 ml-3 mt-5">
                                <?= Html::button("Presencial", [
                                    'class' => 'btn btn-styled btn-secondary btn-circle text-uppercase strong-400'
                                ]) ?>
                            </div>
                        </div>
                    </div>

                    <div class="<?= ($i%2 === 0) ? $imageEven : $imageOdd ?>">
                        <?= Html::img($consulting->getImage(), ['class' => 'img-fluid img-center rounded z-depth-3-top']) ?>
                    </div>
                </div>
            </div>
        </section>
    <?php $i++; endforeach; ?>
<?php else : ?>
    <div class="slice">
        <div class="row mt-3">
            <div class="col-12 text-center">
                <p class="heading heading-4">No hay elementos que mostrar.</p>
            </div>
        </div>
    </div>
<?php endif; ?>
