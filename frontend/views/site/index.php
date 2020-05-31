<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\web\View;

$this->title = Yii::$app->name;
?>
<section>
    <div class="row">
        <div class="col-12">
            <section class="swiper-js-container background-image-holder" data-holder-type="fullscreen" data-holder-offset="">
                <div class="swiper-container" data-swiper-autoplay="true" data-swiper-effect="fade" data-swiper-items="1" data-swiper-space-between="0">
                    <div class="swiper-wrapper">
                        <!-- Slide -->
                        <div class="swiper-slide" data-swiper-autoplay="8000">
                            <div class="slice holder-item holder-item-light has-bg-cover bg-size-cover" style="background-image: url(./images/backgrounds/BannerHome.jpg); background-position: bottom center;">
                            <span class="mask mask-dark--style-2"></span>
                                <div class="container d-flex align-items-center">
                                    <div class="col">
                                        <div class="row text-center">
                                            <div class="col-lg-7">
                                                <h2 class="heading heading-lg strong-600 text-uppercase animated" data-animation-in="fadeInDownBig" data-animation-delay="200">
                                                    ¿Deseas invertir en bienes raíces?
                                                </h2>
                                                <p class="lead animated" data-animation-in="fadeInUpBig" data-animation-delay="200">
                                                    Aprende uno de los negocios mas lucrativos del mundo de la mano de expertos.
                                                </p>
                                                <a href="#" class="btn btn-styled btn-golden btn-circle mt-3 text-uppercase strong-400 animated" data-animation-in="fadeInUpBig" data-animation-delay="1000">Action button</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</section>

<section class="slice-lg has-bg-cover bg-size-cover" style="background-image: url('./images/backgrounds/slider/img-11.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-8 ml-lg-auto">
                <div class="px-5 py-5 z-depth-1-bottom">
                    <h2 class="heading heading-2 strong-400 c-gray-dark">
                        <?= Html::encode('Inversiones a tu alcance') ?>
                    </h2>
                    <div class="">
                        <p class="c-light-gray mt-4">
                            <?= Html::encode('La capacidad de conocer las mejores estrategias es lo que te va a permitir tener éxito en tus inversiones inmobiliarias.') ?>
                        </p>
                        <div class="btn-container mt-5">
                            <a href="#" class="btn btn-styled btn-golden btn-circle text-uppercase strong-400">Action button</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="slice-lg bg-white">
    <div class="container">
        <?=  Html::img('./images/elements/ciclo.png', [
            "id" => "inversion",
            "class" => "img-fluid", 
            "usemap" => "#image-map",
            "width" => "1024",
            "height" => "950",
        ]) ?>
        <map name="image-map">
            <area id="inversion1" alt="Asiste a un evento inmobiliario" title="Asiste a un evento inmobiliario" href="#" coords="537,104,582,111,625,120,665,133,698,145,732,166,762,187,788,207,812,231,839,260,788,382,730,393,711,366,687,339,660,318,630,300,600,286,571,275,600,222" shape="poly">
            <area id="inversion2" alt="Recibe una asesoría personalizada" title="Recibe una asesoría personalizada" href="" coords="856,282,880,318,899,358,913,396,922,430,931,467,933,506,933,541,931,574,924,614,794,650,749,610,761,573,765,537,763,500,755,450,742,417,805,405" shape="poly">
            <area id="inversion3" alt="Revisemos presupuestos" title="Revisemos presupuestos" href="" coords="917,642,900,688,881,725,853,768,825,805,796,832,767,856,737,878,696,899,589,823,591,762,620,750,654,730,679,711,705,684,724,660,739,634,788,675" shape="poly">
            <area id="inversion4" alt="Opta por un proyecto" title="Opta por un proyecto" href="" coords="673,913,632,927,581,939,525,943,476,940,420,932,378,920,333,903,326,770,376,736,411,755,447,766,488,774,529,775,567,771,563,835" shape="poly">
            <area id="inversion5" alt="Gestionemos tu crédito hipotecario" title="Gestionemos tu crédito hipotecario" href="" coords="310,892,275,868,233,836,199,802,169,764,142,721,122,678,112,647,105,620,205,531,261,547,265,576,279,620,298,657,326,694,354,721,302,759" shape="poly">
            <area id="inversion6" alt="Recibe tu propiedad" title="Recibe tu propiedad" href="" coords="98,594,95,552,94,499,99,452,110,410,122,371,140,326,162,295,183,265,316,287,337,340,318,361,301,384,284,414,271,447,262,482,260,520,199,506" shape="poly">
            <area id="inversion7" alt="Pensemos en tu nueva inversión" title="Pensemos en tu nueva inversión" href="" coords="201,242,229,216,263,186,301,163,339,143,380,126,423,113,466,105,511,106,573,219,547,272,518,270,477,271,437,281,398,295,375,309,357,322,332,268" shape="poly">
        </map>
    </div>
</section>

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

        <div class="row cols-md-space cols-sm-space cols-xs-space">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card z-depth-2-top">
                    <div class="card-image">
                        <div class="view view-first">
                            <a href="#">
                                <img src="./images/prv/blog/img-tech-1.jpg">
                            </a>
                        </div>
                    </div>

                    <div class="card-body">
                        <h3 class="heading heading-5 strong-500 mb-0">
                            <a href="#">Learn how to build your own website with Boomerang</a>
                        </h3>
                    </div>

                    <div class="card-footer">
                        <div class="row">
                            <div class="col">
                                <div class="block-author">
                                    <div class="author-image author-image-xs">
                                        <img src="./images/prv/people/person-1.jpg">
                                    </div>
                                    <div class="author-info">
                                        <div class="author-name">
                                            <a href="#" class="strong-600">Bertram Ozzie</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col text-right">
                                <ul class="inline-links inline-links--style-2">
                                    <li>
                                        5 min read
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card z-depth-2-top">
                    <div class="card-image">
                        <div class="view view-first">
                            <a href="#">
                                <img src="./images/prv/blog/img-tech-2.jpg">
                            </a>
                        </div>
                    </div>

                    <div class="card-body">
                        <h3 class="heading heading-5 strong-500 mb-0">
                            <a href="#">15 Lessons about design you need to learn to succeed</a>
                        </h3>
                    </div>

                    <div class="card-footer">
                        <div class="row">
                            <div class="col">
                                <div class="block-author">
                                    <div class="author-image author-image-xs">
                                        <img src="./images/prv/people/person-2.jpg">
                                    </div>
                                    <div class="author-info">
                                        <div class="author-name">
                                            <a href="#" class="strong-600">Elisabeth Alanna</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col text-right">
                                <ul class="inline-links inline-links--style-2">
                                    <li>
                                        10 min read
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card z-depth-2-top">
                    <div class="card-image">
                        <div class="view view-first">
                            <a href="#">
                                <img src="./images/prv/blog/img-tech-3.jpg">
                            </a>
                        </div>
                    </div>

                    <div class="card-body">
                        <h3 class="heading heading-5 strong-500 mb-0">
                            <a href="#">Never changing design will eventually destroy you</a>
                        </h3>
                    </div>

                    <div class="card-footer">
                        <div class="row">
                            <div class="col">
                                <div class="block-author">
                                    <div class="author-image author-image-xs">
                                        <img src="./images/prv/people/person-3.jpg">
                                    </div>
                                    <div class="author-info">
                                        <div class="author-name">
                                            <a href="#" class="strong-600">Destiny Erykah</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col text-right">
                                <ul class="inline-links inline-links--style-2">
                                    <li>
                                        15 min read
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card z-depth-2-top">
                    <div class="card-image">
                        <div class="view view-first">
                            <a href="#">
                                <img src="./images/prv/blog/img-tech-1.jpg">
                            </a>
                        </div>
                    </div>

                    <div class="card-body">
                        <h3 class="heading heading-5 strong-500 mb-0">
                            <a href="#">Learn how to build your own website with Boomerang</a>
                        </h3>
                    </div>

                    <div class="card-footer">
                        <div class="row">
                            <div class="col">
                                <div class="block-author">
                                    <div class="author-image author-image-xs">
                                        <img src="./images/prv/people/person-1.jpg">
                                    </div>
                                    <div class="author-info">
                                        <div class="author-name">
                                            <a href="#" class="strong-600">Bertram Ozzie</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col text-right">
                                <ul class="inline-links inline-links--style-2">
                                    <li>
                                        5 min read
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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
                <div class="card bg-dark alpha-wrapper text-white overflow--hidden border-0 mb-5">
                    <a href="#">
                        <div class="card-img-bg" style="background-image: url('./images/services/arriendo.png');"></div>
                        <span class="mask mask-dark alpha-8 alpha-5--hover"></span>
                        <div class="card-body px-4 py-4">
                            <div style="min-height: 300px;">
                                <h3 class="heading heading-inverse heading-3 strong-600 mb-3"><?= Html::encode('Arriendo') ?></h3>
                                <p class="card-text heading-6 strong-400 line-height-1_8 c-gray-lighter">¿Buscas una propiedad para arrendar? o ¿deseas colocar tu propiedad en arriendo?</p>
                            </div>
                            <span href="#" class="link link--style-4 heading-sm text-uppercase strong-500">
                                Busco una propiedad
                                <i class="ion-ios-arrow-right ml-2"></i>
                            </span>
                            <span href="#" class="link link--style-4 heading-sm text-uppercase strong-500">
                                Deseo arrendarla
                                <i class="ion-ios-arrow-right ml-2"></i>
                            </span>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card bg-dark alpha-wrapper text-white overflow--hidden border-0 mb-5">
                    <a href="#">
                        <div class="card-img-bg" style="background-image: url('./images/services/credito.png');"></div>
                        <span class="mask mask-dark alpha-8 alpha-5--hover"></span>
                        <div class="card-body px-4 py-4">
                            <div style="min-height: 300px;">
                                <h3 class="heading heading-inverse heading-3 strong-600 mb-3"><?= Html::encode('Crédito Hipotecario') ?></h3>
                                <p class="card-text heading-6 strong-400 line-height-1_8 c-gray-lighter">dicha gestion puede ser mas compleja de lo que aparenta, pero si manejas bien el apalancamiento puede llevarte a ser un gran inversionista.</p>
                            </div>
                            <span href="#" class="link link--style-4 heading-sm text-uppercase strong-500">
                                Entidades Bancarias
                                <i class="ion-ios-arrow-right ml-2"></i>
                            </span>
                            <span href="#" class="link link--style-4 heading-sm text-uppercase strong-500">
                                Otras Entidades financieras
                                <i class="ion-ios-arrow-right ml-2"></i>
                            </span>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card bg-dark alpha-wrapper text-white overflow--hidden border-0 mb-5">
                    <a href="#">
                        <div class="card-img-bg" style="background-image: url('./images/services/inversion.png');"></div>
                        <span class="mask mask-dark alpha-8 alpha-5--hover"></span>
                        <div class="card-body px-4 py-4">
                            <div style="min-height: 300px;">
                                <h3 class="heading heading-inverse heading-3 strong-600 mb-3"><?= Html::encode('Oportunidades de Inversión') ?></h3>
                                <p class="card-text heading-6 strong-400 line-height-1_8 c-gray-lighter">propiedades que se ajustan a los nuevos conceptos inmobiliarios del mercado</p>
                            </div>
                            <a href="#" class="link link--style-4 heading-sm text-uppercase strong-500">
                                Usadas
                                <i class="ion-ios-arrow-right ml-2"></i>
                            </a>
                            <a href="#" class="link link--style-4 heading-sm text-uppercase strong-500">
                                Nuevas
                                <i class="ion-ios-arrow-right ml-2"></i>
                            </a>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card bg-dark alpha-wrapper text-white overflow--hidden border-0 mb-5">
                    <a href="#">
                        <div class="card-img-bg" style="background-image: url('./images/services/legal.png');"></div>
                        <span class="mask mask-dark alpha-8 alpha-5--hover"></span>
                        <div class="card-body px-4 py-4">
                            <div style="min-height: 300px;">
                                <h3 class="heading heading-inverse heading-3 strong-600 mb-3"><?= Html::encode('Departamento Legal') ?></h3>
                                <p class="card-text heading-6 strong-400 line-height-1_8 c-gray-lighter">Abogados expertos en el área de bienes raíces, listos para apoyarte en cualquier procedimiento que requieras.</p>
                            </div>
                            <span href="#" class="link link--style-4 heading-sm text-uppercase strong-500">
                                Presencial
                                <i class="ion-ios-arrow-right ml-2"></i>
                            </span>
                            <span href="#" class="link link--style-4 heading-sm text-uppercase strong-500">
                                Online
                                <i class="ion-ios-arrow-right ml-2"></i>
                            </span>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card bg-dark alpha-wrapper text-white overflow--hidden border-0 mb-5">
                    <a href="#">
                        <div class="card-img-bg" style="background-image: url('./images/services/estadisticas.png');"></div>
                        <span class="mask mask-dark alpha-8 alpha-5--hover"></span>
                        <div class="card-body px-4 py-4">
                            <div style="min-height: 300px;">
                                <h3 class="heading heading-inverse heading-3 strong-600 mb-3"><?= Html::encode('Estadísticas') ?></h3>
                                <p class="card-text heading-6 strong-400 line-height-1_8 c-gray-lighter">Te mostramos los números detrás de cualquiera de nuestras gestiones.</p>
                            </div>
                            <span href="#" class="link link--style-4 heading-sm text-uppercase strong-500">
                                Ver más
                                <i class="ion-ios-arrow-right ml-2"></i>
                            </span>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card bg-dark alpha-wrapper text-white overflow--hidden border-0 mb-5">
                    <a href="#">
                        <div class="card-img-bg" style="background-image: url('./images/services/alianzas.png');"></div>
                        <span class="mask mask-dark alpha-8 alpha-5--hover"></span>
                        <div class="card-body px-4 py-4">
                            <div style="min-height: 300px;">
                                <h3 class="heading heading-inverse heading-3 strong-600 mb-3"><?= Html::encode('Alianzas') ?></h3>
                                <p class="card-text heading-6 strong-400 line-height-1_8 c-gray-lighter">Colocamos a tu alcance las empresas y emprendimientos que nos ayudan a ser mejores.</p>
                            </div>
                            <a href="#" class="link link--style-4 heading-sm text-uppercase strong-500">
                                Ver más
                                <i class="ion-ios-arrow-right ml-2"></i>
                            </a>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card bg-dark alpha-wrapper text-white overflow--hidden border-0 mb-5">
                    <a href="#">
                        <div class="card-img-bg" style="background-image: url('./images/services/administracion.png');"></div>
                        <span class="mask mask-dark alpha-8 alpha-5--hover"></span>
                        <div class="card-body px-4 py-4">
                            <div style="min-height: 300px;">
                                <h3 class="heading heading-inverse heading-3 strong-600 mb-3"><?= Html::encode('Administración de Propiedades') ?></h3>
                                <p class="card-text heading-6 strong-400 line-height-1_8 c-gray-lighter">Conoce nuestro servicio para el manejo adecuado de tu inversión.</p>
                            </div>
                            <span href="#" class="link link--style-4 heading-sm text-uppercase strong-500">
                                Ver más
                                <i class="ion-ios-arrow-right ml-2"></i>
                            </span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
