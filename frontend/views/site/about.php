<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Empresa';
?>
<section class="slice-lg has-bg-cover bg-empresa" style="background-image: url(./images/banners/empresa.jpg);">
    <span class="mask mask-dark--style-2"></span>
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-5 offset-lg-5">
                <h2 class="heading heading-xl strong-600 text-capitalize">
                    Empresa
                </h2>
                <div class="c-white mt-3">
                    <p class="heading heading-5 mb-3">Una empresa es el respaldo de un sistema operativo que funciona por medio de equipos.</p>
                    <p class="heading heading-5 mb-3">Un equipo apoya una empresa a través del esfuerzo mancomunado de cada individuo.</p>
                    <p class="heading heading-5 mb-3">Un individuo es un eslabón fundamental para que se brinde un buen servicio.</p>
                    <p class="heading heading-5">Un buen servicio solo se logra cuando todos trabajan juntos en armonía.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="slice-xl sct-color-1" id="scrollToSection">
    <div class="container no-padding">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="milestone-counter text-center">
                    <div class="milestone-count color-golden strong-600" data-from="0" data-to="3" data-speed="3000" data-refresh-interval="100"></div>
                    <h4 class="milestone-info heading-5 c-gray-light text-normal">Años de experiencia</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="milestone-counter text-center">
                    <div class="milestone-count color-golden strong-600" data-from="0" data-to="7" data-speed="3000" data-refresh-interval="50"></div>
                    <h4 class="milestone-info heading-5 c-gray-light text-normal">Eventos inmobiliarios</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="milestone-counter text-center">
                    <div class="milestone-count color-golden strong-600" data-from="0" data-to="2000" data-speed="3000" data-refresh-interval="80"></div>
                    <h4 class="milestone-info heading-5 c-gray-light text-normal">Clientes</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="milestone-counter text-center">
                    <div class="milestone-count color-golden strong-600" data-from="0" data-to="20" data-speed="3000" data-refresh-interval="80"></div>
                    <h4 class="milestone-info heading-5 c-gray-light text-normal">Millones de dólares en venta</h4>
                </div>
            </div>
        </div>
    </div>
</section>

<?php if (count($statistics) > 0) : ?>
    <section class="container slice-md sct-color-1 text-center">
        <div class="row align-items-center">
            <div class="col-12">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="section-title section-title--style-1 text-center mb-4">
                            <h3 class="section-title-inner heading-2 text-uppercase strong-400">
                                <span><?= Html::encode('Estadísticas') ?></span>
                            </h3>
                            <span class="section-title-delimiter clearfix"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row align-items-center">
            <?php foreach ($statistics as $statistic): ?>
                <div class="col-lg-4 col-md-6">
                    <?=
                    Html::a(
                        Html::img($statistic->getThumb(), [
                            'class' => 'img-fluid',
                            'alt' => $statistic->title
                        ]),
                        $statistic->getImage(),
                        [
                            'class' => 'item',
                            'data-fancybox' => 'group',
                            'data-caption' => $statistic->title
                        ]
                    ) ?>
                    <div class="block-body text-center border-botom border-color-golden py-3">
                        <h6 class="heading heading-6 strong-600 mb-0"><?= $statistic->title ?></h6>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </section>
<?php endif; ?>

<section class="slice-xl sct-color-1">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="section-title section-title--style-1 text-center mb-4">
                            <h3 class="section-title-inner heading-2 text-uppercase strong-400">
                                <span><?= Html::encode('Nuestro Equipo') ?></span>
                            </h3>
                            <span class="section-title-delimiter clearfix"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="block block--style-3 block--style-3-v2">
                    <div class="block-image">
                        <img src="./images/prv/team/ruben.jpg">
                    </div>
                    <div class="block-body text-center py-3">
                        <h3 class="heading heading-6 strong-600 mb-0">Rubén Ávila</h3>
                        <h4 class="heading heading-sm strong-300 mb-0">CEO - Presidente Ávila Inversiones</h4>
                    </div>
                    <div class="block-body border-top border-color-golden py-3">
                        <!-- <p class="mb-0">
                            Quisque ut nulla at nunc vehicula lacinia proin adipiscing porta tellus feugiat.
                        </p> -->
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="block block--style-3 block--style-3-v2">
                    <div class="block-image">
                        <img src="./images/prv/team/rita.jpg">
                    </div>
                    <div class="block-body text-center py-3">
                        <h3 class="heading heading-6 strong-600 mb-0">Rita Rivera</h3>
                        <h4 class="heading heading-sm strong-300 mb-0">Asistente Administrativo</h4>
                    </div>
                    <div class="block-body border-top border-color-golden py-3">
                        <!-- <p class="mb-0">
                            Quisque ut nulla at nunc vehicula lacinia proin adipiscing porta tellus feugiat.
                        </p> -->
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="block block--style-3 block--style-3-v2">
                    <div class="block-image">
                        <img src="./images/prv/team/betzabe.jpg">
                    </div>
                    <div class="block-body text-center py-3">
                        <h3 class="heading heading-6 strong-600 mb-0">Betzabe Ávila</h3>
                        <h4 class="heading heading-sm strong-300 mb-0">Asesor Inmobiliario</h4>
                    </div>
                    <div class="block-body border-top border-color-golden py-3">
                        <!-- <p class="mb-0">
                            Quisque ut nulla at nunc vehicula lacinia proin adipiscing porta tellus feugiat.
                        </p> -->
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="block block--style-3 block--style-3-v2">
                    <div class="block-image">
                        <img src="./images/prv/team/laura.jpg">
                    </div>
                    <div class="block-body text-center py-3">
                        <h3 class="heading heading-6 strong-600 mb-0">Laura Sanchez</h3>
                        <h4 class="heading heading-sm strong-300 mb-0">Productora Audiovisual</h4>
                    </div>
                    <div class="block-body border-top border-color-golden py-3">
                        <!-- <p class="mb-0">
                            Quisque ut nulla at nunc vehicula lacinia proin adipiscing porta tellus feugiat.
                        </p> -->
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="block block--style-3 block--style-3-v2">
                    <div class="block-image">
                        <img src="./images/prv/team/anabel.jpg">
                    </div>
                    <div class="block-body text-center py-3">
                        <h3 class="heading heading-6 strong-600 mb-0">Anabel Barbieri</h3>
                        <h4 class="heading heading-sm strong-300 mb-0">Diseñadora Gráfico</h4>
                    </div>
                    <div class="block-body border-top border-color-golden py-3">
                        <!-- <p class="mb-0">
                            Quisque ut nulla at nunc vehicula lacinia proin adipiscing porta tellus feugiat.
                        </p> -->
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="block block--style-3 block--style-3-v2">
                    <div class="block-image">
                        <img src="./images/prv/team/mariangela.jpg">
                    </div>
                    <div class="block-body text-center py-3">
                        <h3 class="heading heading-6 strong-600 mb-0">Mariangela Naranjo</h3>
                        <h4 class="heading heading-sm strong-300 mb-0">Gerente Comercial</h4>
                    </div>
                    <div class="block-body border-top border-color-golden py-3">
                        <!-- <p class="mb-0">
                            Quisque ut nulla at nunc vehicula lacinia proin adipiscing porta tellus feugiat.
                        </p> -->
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="block block--style-3 block--style-3-v2">
                    <div class="block-image">
                        <img src="./images/prv/team/jose2.jpg">
                    </div>
                    <div class="block-body text-center py-3">
                        <h3 class="heading heading-6 strong-600 mb-0">José Velásquez</h3>
                        <h4 class="heading heading-sm strong-300 mb-0">Encargado de Finanzas</h4>
                    </div>
                    <div class="block-body border-top border-color-golden py-3">
                        <!-- <p class="mb-0">
                            Quisque ut nulla at nunc vehicula lacinia proin adipiscing porta tellus feugiat.
                        </p> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
