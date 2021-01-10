<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\web\View;

$this->title = Yii::$app->name;
?>

<section class="background-image-holder" data-holder-type="fullscreen">
    <div class="swiper-container">
        <!-- Slide -->
        <div class="swiper-slide">
            <div class="slice holder-item holder-item-light has-bg-cover bg-size-cover" style="background-image: url(./images/banners/home.jpg); background-position: bottom center;">
                <!-- <span class="mask mask-dark--style-3"></span> -->
                <div class="container-fluid align-bottom p-0">
                    <div class="col-lg-12">
                        <span class="mask mask-dark--style-2"></span>
                        <div class="row text-center slice-sm">
                            <div class="col">
                                <h2 class="heading heading-lg strong-600 text-uppercase animated" data-animation-in="fadeInDownBig" data-animation-delay="200">
                                    ¿Deseas invertir en bienes raíces?
                                </h2>
                                <p class="lead animated" data-animation-in="fadeInUpBig" data-animation-delay="200">
                                    Aprende uno de los negocios más lucrativos del mundo
                                    <br />
                                    de la mano de expertos.
                                </p>
                                <div class="btn-container mb-2">
                                    <?= Html::a(
                                        'Conócenos',
                                        ['site/about'],
                                        [
                                            'class' => [
                                                'btn btn-styled btn-golden btn-circle mt-3 text-uppercase strong-400 animated'
                                            ],
                                            'data-animation-in' => "fadeInUpBig",
                                            'data-animation-delay' => "1000"
                                        ]
                                    ) ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="slice-lg sct-color-1">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                <?= Html::img('./images/elements/ciclo-golden.png', [
                    "id" => "inversion",
                    "class" => "img-fluid",
                    "usemap" => "#image-map",
                    "width" => "1024",
                    "height" => "950",
                ]) ?>
                <map name="image-map">
                    <area id="inversion1" alt="Revisa en la sección de eventos nuestras próximas actividades." coords="537,104,582,111,625,120,665,133,698,145,732,166,762,187,788,207,812,231,839,260,788,382,730,393,711,366,687,339,660,318,630,300,600,286,571,275,600,222" shape="poly">
                    <div class="inversion1 image-hover">
                        <h6 class="c-gray-lighter">Revisa en la sección de eventos nuestras próximas actividades.</h6>
                    </div>
                    <area id="inversion2" alt="Agenda una reunión y aclara tus dudas." coords="856,282,880,318,899,358,913,396,922,430,931,467,933,506,933,541,931,574,924,614,794,650,749,610,761,573,765,537,763,500,755,450,742,417,805,405" shape="poly">
                    <div class="inversion2 image-hover">
                        <h6 class="c-gray-lighter">Agenda una reunión y aclara tus dudas.</h6>
                    </div>
                    <area id="inversion3" alt="Nuestros Asesores buscaran el presupuesto que mas se ajuste a ti." coords="917,642,900,688,881,725,853,768,825,805,796,832,767,856,737,878,696,899,589,823,591,762,620,750,654,730,679,711,705,684,724,660,739,634,788,675" shape="poly">
                    <div class="inversion3 image-hover">
                        <h6 class="c-gray-lighter">Nuestros Asesores buscaran el presupuesto que mas se ajuste a ti.</h6>
                    </div>
                    <area id="inversion4" alt="Llego el momento de la acción y dar juntos el primer paso." coords="673,913,632,927,581,939,525,943,476,940,420,932,378,920,333,903,326,770,376,736,411,755,447,766,488,774,529,775,567,771,563,835" shape="poly">
                    <div class="inversion4 image-hover">
                        <h6 class="c-gray-lighter">Llego el momento de la acción y dar juntos el primer paso.</h6>
                    </div>
                    <area id="inversion5" alt="Asesorias para enseñarte a como hacerlo pero tambien te ayudamos en tu gestión." coords="310,892,275,868,233,836,199,802,169,764,142,721,122,678,112,647,105,620,205,531,261,547,265,576,279,620,298,657,326,694,354,721,302,759" shape="poly">
                    <div class="inversion5 image-hover">
                        <h6 class="c-gray-lighter">Asesorias para enseñarte a como hacerlo pero tambien te ayudamos en tu gestión.</h6>
                    </div>
                    <area id="inversion6" alt="Vamos a recibir tu propiedad y con ello ver tu meta hacerse realidad." coords="98,594,95,552,94,499,99,452,110,410,122,371,140,326,162,295,183,265,316,287,337,340,318,361,301,384,284,414,271,447,262,482,260,520,199,506" shape="poly">
                    <div class="inversion6 image-hover">
                        <h6 class="c-gray-lighter">Vamos a recibir tu propiedad y con ello ver tu meta hacerse realidad.</h6>
                    </div>
                    <area id="inversion7" alt="Analicemos el mejor panorama para seguir invirtiendo." coords="201,242,229,216,263,186,301,163,339,143,380,126,423,113,466,105,511,106,573,219,547,272,518,270,477,271,437,281,398,295,375,309,357,322,332,268" shape="poly">
                    <div class="inversion7 image-hover">
                        <h6 class="c-gray-lighter">Analicemos el mejor panorama para seguir invirtiendo.</h6>
                    </div>
                </map>
            </div>
        </div>
    </div>
</section>

<section class="slice-lg has-bg-cover bg-size-cover" style="background-image: url('./images/banners/inversiones.jpg');">
    <span class="mask mask-dark--style-2"></span>
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-8">
                <div class="z-depth-1-bottom">
                    <h2 class="heading heading-2 strong-400 c-gray-dark">
                        <?= Html::encode('Inversiones a tu alcance') ?>
                    </h2>
                    <div class="">
                        <p class="heading-5 c-light-gray mt-4">
                            <?= Html::encode('La capacidad de conocer las mejores estrategias es lo que te va a permitir tener éxito en tus inversiones inmobiliarias.') ?>
                        </p>
                        <div class="btn-container mt-5">
                            <?= Html::a(
                                'Ver más',
                                ['consulting/index'],
                                ['class' => [
                                    'btn btn-styled btn-golden btn-circle text-uppercase strong-400'
                                ]]
                            ) ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php if (count($blogs) > 0) : ?>
    <section class="slice sct-color-1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="section-title section-title--style-1 text-center mb-4">
                                <h3 class="section-title-inner heading-2 text-uppercase strong-400">
                                    <span><?= Html::encode('Blog') ?></span>
                                </h3>
                                <span class="section-title-delimiter clearfix"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <span class="space-xs-lg"></span>

            <div class="row justify-content-center cols-md-space cols-sm-space cols-xs-space">
                <?php foreach ($blogs as $entry) : ?>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="card z-depth-2-top">
                            <div class="card-image">
                                <div class="view view-first crop-blog">
                                    <?= Html::a(
                                        Html::img('@web/images/blog/thumbs/' . $entry->thumb),
                                        ['blog/view', 'title' => $entry->getSeoTitle()]
                                    ) ?>
                                </div>
                            </div>

                            <div class="card-body">
                                <h3 class="heading heading-3 strong-500 mb-0">
                                    <?= Html::a(
                                        $entry->title,
                                        ['blog/view', 'title' => $entry->getSeoTitle()]
                                    ) ?>
                                    <p class="heading-6">
                                        <?= Html::encode($entry->summary) ?>
                                    </p>
                                </h3>
                            </div>

                            <div class="card-footer">
                                <div class="row">
                                    <div class="col">
                                        <div class="block-author">
                                            <div class="author-info">
                                                <div class="author-name">
                                                    <i class="fa fa-user mr-1"></i>
                                                    <?= Html::a(
                                                        $entry->author ? $entry->author : $entry->user->name,
                                                        ['blog/view', 'title' => $entry->getSeoTitle()],
                                                        ['class' => 'strong-600']
                                                    )
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
<?php endif; ?>

<section class="slice-lg sct-color-1">
    <div class="container container-lg">

        <div class="row align-items-center">
            <div class="col-12">
                <div class="section-title section-title--style-1 text-center mb-4">
                    <h3 class="section-title-inner heading-2 strong-400">
                        <span><?= Html::encode('Servicios Adicionales') ?></span>
                    </h3>
                    <span class="section-title-delimiter clearfix"></span>
                </div>
            </div>
        </div>

        <span class="space-xs-lg"></span>

        <div class="row cols-xs-space cols-sm-space cols-md-space justify-content-center">
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card bg-dark alpha-wrapper text-white overflow--hidden mb-5 border-color-golden services-box">
                    <div class="card-img-bg" style="background-image: url('./images/services/arriendo.png');"></div>
                    <span class="mask mask-dark alpha-8 alpha-5--hover"></span>
                    <div class="card-body px-4 py-4">
                        <div style="min-height: 200px;">
                            <h3 class="heading heading-inverse heading-3 strong-600 mb-3 text-golden-gradient"><?= Html::encode('Arriendo') ?></h3>
                            <p class="card-text heading-6 strong-400 line-height-1_8 c-gray-lighter">¿Buscas una propiedad para arrendar? o ¿Deseas colocar tu propiedad en arriendo?</p>
                        </div>
                    </div>
                    <div class="card-buttons px-4">
                        <div class="btn-container">
                            <?= Html::a(
                                'Busco una propiedad',
                                ['properties/index'],
                                ['class' => [
                                    'btn btn-sm btn-styled btn-golden btn-circle text-uppercase strong-400 w-100'
                                ]]
                            ) ?>
                        </div>
                        <div class="btn-container">
                            <?= Html::a(
                                'Deseo arrendarla',
                                ['site/contact', 'id' => 1],
                                ['class' => [
                                    'btn btn-sm btn-styled btn-golden btn-circle text-uppercase strong-400 w-100'
                                ]]
                            ) ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card bg-dark alpha-wrapper text-white overflow--hidden mb-5 border-color-golden services-box">
                    <div class="card-img-bg" style="background-image: url('./images/services/credito.png');"></div>
                    <span class="mask mask-dark alpha-8 alpha-5--hover"></span>
                    <div class="card-body px-4 py-4">
                        <div style="min-height: 200px;">
                            <h3 class="heading heading-inverse heading-3 strong-600 mb-3 text-golden-gradient"><?= Html::encode('Crédito Hipotecario') ?></h3>
                            <p class="card-text heading-6 strong-400 line-height-1_8 c-gray-lighter">Dicha gestión puede ser más compleja de lo que aparenta, pero si manejas bien el apalancamiento puede llevarte a ser un gran inversionista.</p>
                        </div>
                    </div>
                    <div class="card-buttons px-4">
                        <div class="btn-container">
                            <?= Html::a(
                                'Asesoría para crédito hipotecario',
                                ['consulting/index'],
                                ['class' => [
                                    'btn btn-sm btn-styled btn-golden btn-circle text-uppercase strong-400 w-100'
                                ]]
                            ) ?>
                        </div>
                        <div class="btn-container">
                            <?= Html::a(
                                'Gestionamos tu crédito hipotecario',
                                ['site/contact', 'id' => 2],
                                ['class' => [
                                    'btn btn-sm btn-styled btn-golden btn-circle text-uppercase strong-400 w-100'
                                ]]
                            ) ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card bg-dark alpha-wrapper text-white overflow--hidden mb-5 border-color-golden services-box">
                    <div class="card-img-bg" style="background-image: url('./images/services/inversion.png');"></div>
                    <span class="mask mask-dark alpha-8 alpha-5--hover"></span>
                    <div class="card-body px-4 py-4">
                        <div style="min-height: 200px;">
                            <h3 class="heading heading-inverse heading-3 strong-600 mb-3 text-golden-gradient"><?= Html::encode('Oportunidades de Inversión') ?></h3>
                            <p class="card-text heading-6 strong-400 line-height-1_8 c-gray-lighter">Propiedades que se ajustan a los nuevos conceptos inmobiliarios del mercado</p>
                        </div>
                    </div>
                    <div class="card-buttons px-4">
                        <div class="btn-container">
                            <?= Html::a(
                                'Usadas',
                                ['properties/index'],
                                ['class' => [
                                    'btn btn-sm btn-styled btn-golden btn-circle text-uppercase strong-400 w-100'
                                ]]
                            ) ?>
                        </div>
                        <div class="btn-container">
                            <?= Html::a(
                                'Nuevas',
                                ['consulting/index'],
                                ['class' => [
                                    'btn btn-sm btn-styled btn-golden btn-circle text-uppercase strong-400 w-100'
                                ]]
                            ) ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card bg-dark alpha-wrapper text-white overflow--hidden mb-5 border-color-golden services-box">
                    <div class="card-img-bg" style="background-image: url('./images/services/legal.png');"></div>
                    <span class="mask mask-dark alpha-8 alpha-5--hover"></span>
                    <div class="card-body px-4 py-4">
                        <div style="min-height: 200px;">
                            <h3 class="heading heading-inverse heading-3 strong-600 mb-3 text-golden-gradient"><?= Html::encode('Departamento Legal') ?></h3>
                            <p class="card-text heading-6 strong-400 line-height-1_8 c-gray-lighter">Abogados expertos en el área de Bienes raíces, listos para apoyarte en cualquier procedimiento que requieras.</p>
                        </div>
                    </div>
                    <div class="card-buttons px-4">
                        <div class="btn-container">
                            <?= Html::button(
                                'Presencial',
                                ['class' => [
                                    'btn btn-sm btn-styled btn-secondary btn-circle text-uppercase strong-400 w-100'
                                ]]
                            ) ?>
                        </div>
                        <div class="btn-container">
                            <?= Html::a(
                                'Online',
                                ['site/contact', 'id' => 3],
                                ['class' => [
                                    'btn btn-sm btn-styled btn-golden btn-circle text-uppercase strong-400 w-100'
                                ]]
                            ) ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card bg-dark alpha-wrapper text-white overflow--hidden mb-5 border-color-golden services-box">
                    <div class="card-img-bg" style="background-image: url('./images/services/estadisticas.png');"></div>
                    <span class="mask mask-dark alpha-8 alpha-5--hover"></span>
                    <div class="card-body px-4 py-4">
                        <div style="min-height: 200px;">
                            <h3 class="heading heading-inverse heading-3 strong-600 mb-3 text-golden-gradient"><?= Html::encode('Estadísticas') ?></h3>
                            <p class="card-text heading-6 strong-400 line-height-1_8 c-gray-lighter">Te mostramos los números detrás de cualquiera de nuestras gestiones.</p>
                        </div>
                    </div>
                    <div class="card-buttons px-4">
                        <div class="btn-container">
                            <?= Html::a(
                                'Ver más',
                                ['site/about'],
                                ['class' => [
                                    'btn btn-sm btn-styled btn-golden btn-circle text-uppercase strong-400 w-100'
                                ]]
                            ) ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card bg-dark alpha-wrapper text-white overflow--hidden mb-5 border-color-golden services-box">
                    <div class="card-img-bg" style="background-image: url('./images/services/alianzas.png');"></div>
                    <span class="mask mask-dark alpha-8 alpha-5--hover"></span>
                    <div class="card-body px-4 py-4">
                        <div style="min-height: 200px;">
                            <h3 class="heading heading-inverse heading-3 strong-600 mb-3 text-golden-gradient"><?= Html::encode('Alianzas') ?></h3>
                            <p class="card-text heading-6 strong-400 line-height-1_8 c-gray-lighter">Colocamos a tu alcance las empresas y emprendimientos que nos ayudan a ser mejores.</p>
                        </div>
                    </div>
                    <div class="card-buttons px-4">
                        <div class="btn-container">
                            <?= Html::a(
                                'Ver más',
                                ['site/alliances'],
                                ['class' => [
                                    'btn btn-sm btn-styled btn-golden btn-circle text-uppercase strong-400 w-100'
                                ]]
                            ) ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card bg-dark alpha-wrapper text-white overflow--hidden mb-5 border-color-golden services-box">
                    <div class="card-img-bg" style="background-image: url('./images/services/administracion.png');"></div>
                    <span class="mask mask-dark alpha-8 alpha-5--hover"></span>
                    <div class="card-body px-4 py-4">
                        <div style="min-height: 200px;">
                            <h3 class="heading heading-inverse heading-3 strong-600 mb-3 text-golden-gradient"><?= Html::encode('Administración de Propiedades') ?></h3>
                            <p class="card-text heading-6 strong-400 line-height-1_8 c-gray-lighter">Conoce nuestro servicio para el manejo adecuado de tu inversión.</p>
                        </div>
                    </div>
                    <div class="card-buttons px-4">
                        <div class="btn-container">
                            <?= Html::a(
                                'Ver más',
                                ['site/contact', 'id' => 4],
                                ['class' => [
                                    'btn btn-sm btn-styled btn-golden btn-circle text-uppercase strong-400 w-100'
                                ]]
                            ) ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
$js = <<<JS
  $('.services-box').SameHeight();
  $('.card').SameHeight();
JS;
$this->registerJs($js);
?>