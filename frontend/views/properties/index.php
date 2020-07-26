<?php
/* @var $this yii\web\View */
use yii\helpers\Html;

$this->title = Html::encode('Propiedades');
?>

<section class="sct-color-1">
    <div class="container-fluid no-padding">
        <div class="row row-no-padding">
            <div class="col-lg-4" id="div_properties_search">
                <div class="card card-inverse no-border no-radius">
                    <div class="card-body py-5 px-4">
                        <h3 class="heading heading-5 strong-500 text-capitalize"><?= Html::encode('Buscar propiedades') ?></h3>
                        <h4 class="heading heading-sm strong-400 text-normal c-gray-light"><?= Html::encode('Tu sueño está a punto de cumplirse.') ?></h4>

                        <form class="form-inverse mt-4" data-toggle="validator" role="form">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group has-feedback">
                                        <label class="text-uppercase"><?= Html::encode('Ubicación') ?></label>
                                        <input class="form-control form-control-lg" type="text" placeholder="City, Country">
                                        <span class="help-block with-errors"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group has-feedback">
                                        <label for="" class="text-uppercase"><?= Html::encode('Tipo') ?></label>
                                        <select class="form-control form-control-lg">
                                            <option>All types</option>
                                            <option>Houses</option>
                                            <option>Flats/Apartments</option>
                                            <option>Bungalows</option>
                                            <option>Lands</option>
                                            <option>Other</option>
                                        </select>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group has-feedback">
                                        <label for="" class="text-uppercase">I want</label>
                                        <select class="form-control form-control-lg">
                                            <option>All</option>
                                            <option>To rent</option>
                                            <option>To buy</option>
                                        </select>
                                    </div>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-styled btn-lg btn-block btn-golden text-sm mt-4">Search properties</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-8">
                <section class="slice-lg slice--offset sct-color-3 has-bg-cover bg-size-cover flex flex-items-xs-middle" style="background-image: url(./images/banners/banner-propiedades.jpg); background-position: center top; height: 100%;">

                    <span class="mask mask-dark--style-2"></span>

                    <div class="flex-wrap-item">
                        <div class="container sct-inner">
                            <div class="">
                                <div class="row">
                                    <div class="col-md-8 px-5">
                                        <h2 class="heading heading-2 strong-500 c-white">
                                            Time to find a new place?
                                        </h2>
                                        <p class="mt-3 c-white">
                                            Browse through more than 200.000 properties to rent or sell with Boomerang Real Estate. Contact our agents now!
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</section>

<section class="slice sct-color-1" id="scrollToSection">
    <div class="container">
        <div class="section-title section-title--style-1 text-center mb-2">
            <h3 class="section-title-inner heading-sm strong-600 text-uppercase">
                <span>Latest properties</span>
            </h3>
            <span class="section-title-delimiter clearfix d-none"></span>
        </div>

        <span class="clearfix"></span>

        <span class="space-xs-md"></span>

        <div class="row-wrapper">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="block block--style-3">
                        <div class="block-image relative">
                            <div class="view view-first">
                                <?= Html::a(
                                    Html::img('./images/prv/real-estate/img-1.jpg', ['class' => 'img-fluid']),
                                    ['properties/view']
                                ) ?>
                            </div>
                            <span class="block-ribbon block-ribbon-fixed block-ribbon-right bg-yellow">For sale</span>
                        </div>

                        <div class="aux-info-wrapper border-bottom">
                            <ul class="aux-info">
                                <li class="heading strong-400 text-center">
                                    <i class="icon-real-estate-017"></i> 150 sqft</span>
                                </li>
                                <li class="heading strong-400 text-center">
                                    <i class="icon-hotel-restaurant-022"></i> 5
                                </li>
                                <li class="heading strong-400 text-center">
                                    <i class="icon-hotel-restaurant-158"></i> Baths
                                </li>
                            </ul>
                        </div>

                        <div class="block-body">
                            <h3 class="heading heading-sm">
                                <?= Html::a(
                                    Html::encode('3015 Grand Avenue, CocoWalk'),
                                    ['properties/view']
                                ) ?>
                            </h3>
                            <p class="description">
                                Lorem ipsum dolor sit amet consectetur adipisg elitm.
                            </p>
                        </div>
                        <div class="block-footer border-top py-3">
                            <div class="row align-items-center">
                                <div class="col-7">
                                    <span class="block-price">$250.800</span>
                                    <span class="block-price-text"></span>
                                </div>
                                <div class="col-5 text-right">
                                        <span class="capacity" data-toggle="tooltip" data-placement="left" data-original-title="Capacity:<br><strong>2 members</strong>">
                                        <i class="icon ion-person"></i>
                                        <i class="icon ion-person"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="block block--style-3">
                        <div class="block-image relative">
                            <div class="view view-first">
                                <?= Html::a(
                                    Html::img('./images/prv/real-estate/img-2.jpg', ['class' => 'img-fluid']),
                                    ['properties/view']
                                ) ?>
                            </div>
                            <span class="block-ribbon block-ribbon-fixed block-ribbon-right bg-red">For rent</span>
                        </div>

                        <div class="aux-info-wrapper border-bottom">
                            <ul class="aux-info">
                                <li class="heading strong-400 text-center">
                                    <i class="icon-real-estate-017"></i> 150 sqft</span>
                                </li>
                                <li class="heading strong-400 text-center">
                                    <i class="icon-hotel-restaurant-022"></i> 5
                                </li>
                                <li class="heading strong-400 text-center">
                                    <i class="icon-hotel-restaurant-158"></i> Baths
                                </li>
                            </ul>
                        </div>

                        <div class="block-body">
                            <h3 class="heading heading-sm">
                                <?= Html::a(
                                    Html::encode('9975 Emerald, New York'),
                                    ['properties/view']
                                ) ?>
                            </h3>
                            <p class="description">
                                Lorem ipsum dolor sit amet consectetur adipisg elitm.
                            </p>
                        </div>
                        <div class="block-footer border-top py-3">
                            <div class="row align-items-center">
                                <div class="col col-6">
                                    <span class="block-price">$1300</span>
                                </div>
                                <div class="col col-6 text-right">
                                        <span class="capacity" data-toggle="tooltip" data-placement="left" data-original-title="Capacity:<br><strong>3 members</strong>">
                                        <i class="icon ion-person"></i>
                                        <i class="icon ion-person"></i>
                                        <i class="icon ion-person"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="block block--style-3">
                        <div class="block-image relative">
                            <div class="view view-first">
                                <?= Html::a(
                                    Html::img('./images/prv/real-estate/img-3.jpg', ['class' => 'img-fluid']),
                                    ['properties/view']
                                ) ?>
                            </div>
                            <span class="block-ribbon block-ribbon-fixed block-ribbon-right bg-red">For rent</span>
                        </div>

                        <div class="aux-info-wrapper border-bottom">
                            <ul class="aux-info">
                                <li class="heading strong-400 text-center">
                                    <i class="icon-real-estate-017"></i> 150 sqft</span>
                                </li>
                                <li class="heading strong-400 text-center">
                                    <i class="icon-hotel-restaurant-022"></i> 5
                                </li>
                                <li class="heading strong-400 text-center">
                                    <i class="icon-hotel-restaurant-158"></i> Baths
                                </li>
                            </ul>
                        </div>

                        <div class="block-body">
                            <h3 class="heading heading-sm">
                                <?= Html::a(
                                    Html::encode('2030 Misty Wagon, Canyon'),
                                    ['properties/view']
                                ) ?>
                            </h3>
                            <p class="description">
                                Lorem ipsum dolor sit amet consectetur adipisg elitm.
                            </p>
                        </div>
                        <div class="block-footer border-top py-3">
                            <div class="row align-items-center">
                                <div class="col col-6">
                                    <span class="block-price">$4000</span>
                                </div>
                                <div class="col col-6 text-right">
                                        <span class="capacity" data-toggle="tooltip" data-placement="left" data-original-title="Capacity:<br><strong>4 members</strong>">
                                        <i class="icon ion-person"></i>
                                        <i class="icon ion-person"></i>
                                        <i class="icon ion-person"></i>
                                        <i class="icon ion-person"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="block block--style-3">
                        <div class="block-image relative">
                            <div class="view view-first">
                                <?= Html::a(
                                    Html::img('./images/prv/real-estate/img-4.jpg', ['class' => 'img-fluid']),
                                    ['properties/view']
                                ) ?>
                            </div>
                        </div>

                        <div class="aux-info-wrapper border-bottom">
                            <ul class="aux-info">
                                <li class="heading strong-400 text-center">
                                    <i class="icon-real-estate-017"></i> 150 sqft</span>
                                </li>
                                <li class="heading strong-400 text-center">
                                    <i class="icon-hotel-restaurant-022"></i> 5
                                </li>
                                <li class="heading strong-400 text-center">
                                    <i class="icon-hotel-restaurant-158"></i> Baths
                                </li>
                            </ul>
                        </div>

                        <div class="block-body">
                            <h3 class="heading heading-sm">
                                <?= Html::a(
                                    Html::encode('2030 Misty Wagon, Canyon'),
                                    ['properties/view']
                                ) ?>
                            </h3>
                            <p class="description">
                                Lorem ipsum dolor sit amet consectetur adipisg elitm.
                            </p>
                        </div>
                        <div class="block-footer border-top py-3">
                            <div class="row align-items-center">
                                <div class="col col-6">
                                    <span class="block-price">$4000</span>
                                </div>
                                <div class="col col-6 text-right">
                                        <span class="capacity" data-toggle="tooltip" data-placement="left" data-original-title="Capacity:<br><strong>4 members</strong>">
                                        <i class="icon ion-person"></i>
                                        <i class="icon ion-person"></i>
                                        <i class="icon ion-person"></i>
                                        <i class="icon ion-person"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="block block--style-3">
                        <div class="block-image relative">
                            <div class="view view-first">
                                <?= Html::a(
                                    Html::img('./images/prv/real-estate/img-5.jpg', ['class' => 'img-fluid']),
                                    ['properties/view']
                                ) ?>
                            </div>
                            <span class="block-ribbon block-ribbon-fixed block-ribbon-right bg-yellow">For sale</span>
                        </div>

                        <div class="aux-info-wrapper border-bottom">
                            <ul class="aux-info">
                                <li class="heading strong-400 text-center">
                                    <i class="icon-real-estate-017"></i> 150 sqft</span>
                                </li>
                                <li class="heading strong-400 text-center">
                                    <i class="icon-hotel-restaurant-022"></i> 5
                                </li>
                                <li class="heading strong-400 text-center">
                                    <i class="icon-hotel-restaurant-158"></i> Baths
                                </li>
                            </ul>
                        </div>

                        <div class="block-body">
                            <h3 class="heading heading-sm">
                                <?= Html::a(
                                    Html::encode('3015 Grand Avenue, CocoWalk'),
                                    ['properties/view']
                                ) ?>
                            </h3>
                            <p class="description">
                                Lorem ipsum dolor sit amet consectetur adipisg elitm.
                            </p>
                        </div>
                        <div class="block-footer border-top py-3">
                            <div class="row align-items-center">
                                <div class="col-7">
                                    <span class="block-price">$250.800</span>
                                    <span class="block-price-text"></span>
                                </div>
                                <div class="col-5 text-right">
                                        <span class="capacity" data-toggle="tooltip" data-placement="left" data-original-title="Capacity:<br><strong>2 members</strong>">
                                        <i class="icon ion-person"></i>
                                        <i class="icon ion-person"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="block block--style-3">
                        <div class="block-image relative">
                            <div class="view view-first">
                                <?= Html::a(
                                    Html::img('./images/prv/real-estate/img-6.jpg', ['class' => 'img-fluid']),
                                    ['properties/view']
                                ) ?>
                            </div>
                            <span class="block-ribbon block-ribbon-fixed block-ribbon-right bg-red">For rent</span>
                        </div>

                        <div class="aux-info-wrapper border-bottom">
                            <ul class="aux-info">
                                <li class="heading strong-400 text-center">
                                    <i class="icon-real-estate-017"></i> 150 sqft</span>
                                </li>
                                <li class="heading strong-400 text-center">
                                    <i class="icon-hotel-restaurant-022"></i> 5
                                </li>
                                <li class="heading strong-400 text-center">
                                    <i class="icon-hotel-restaurant-158"></i> Baths
                                </li>
                            </ul>
                        </div>

                        <div class="block-body">
                            <h3 class="heading heading-sm">
                                <?= Html::a(
                                    Html::encode('9975 Emerald, New York'),
                                    ['properties/view']
                                ) ?>
                            </h3>
                            <p class="description">
                                Lorem ipsum dolor sit amet consectetur adipisg elitm.
                            </p>
                        </div>
                        <div class="block-footer border-top py-3">
                            <div class="row align-items-center">
                                <div class="col col-6">
                                    <span class="block-price">$1300</span>
                                </div>
                                <div class="col col-6 text-right">
                                        <span class="capacity" data-toggle="tooltip" data-placement="left" data-original-title="Capacity:<br><strong>3 members</strong>">
                                        <i class="icon ion-person"></i>
                                        <i class="icon ion-person"></i>
                                        <i class="icon ion-person"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="block block--style-3">
                        <div class="block-image relative">
                            <div class="view view-first">
                                <?= Html::a(
                                    Html::img('./images/prv/real-estate/img-7.jpg', ['class' => 'img-fluid']),
                                    ['properties/view']
                                ) ?>
                            </div>
                            <span class="block-ribbon block-ribbon-fixed block-ribbon-right bg-red">For rent</span>
                        </div>

                        <div class="aux-info-wrapper border-bottom">
                            <ul class="aux-info">
                                <li class="heading strong-400 text-center">
                                    <i class="icon-real-estate-017"></i> 150 sqft</span>
                                </li>
                                <li class="heading strong-400 text-center">
                                    <i class="icon-hotel-restaurant-022"></i> 5
                                </li>
                                <li class="heading strong-400 text-center">
                                    <i class="icon-hotel-restaurant-158"></i> Baths
                                </li>
                            </ul>
                        </div>

                        <div class="block-body">
                            <h3 class="heading heading-sm">
                                <?= Html::a(
                                    Html::encode('2030 Misty Wagon, Canyon'),
                                    ['properties/view']
                                ) ?>
                            </h3>
                            <p class="description">
                                Lorem ipsum dolor sit amet consectetur adipisg elitm.
                            </p>
                        </div>
                        <div class="block-footer border-top py-3">
                            <div class="row align-items-center">
                                <div class="col col-6">
                                    <span class="block-price">$4000</span>
                                </div>
                                <div class="col col-6 text-right">
                                        <span class="capacity" data-toggle="tooltip" data-placement="left" data-original-title="Capacity:<br><strong>4 members</strong>">
                                        <i class="icon ion-person"></i>
                                        <i class="icon ion-person"></i>
                                        <i class="icon ion-person"></i>
                                        <i class="icon ion-person"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="block block--style-3">
                        <div class="block-image relative">
                            <div class="view view-first">
                                <?= Html::a(
                                    Html::img('./images/prv/real-estate/img-8.jpg', ['class' => 'img-fluid']),
                                    ['properties/view']
                                ) ?>
                            </div>
                        </div>

                        <div class="aux-info-wrapper border-bottom">
                            <ul class="aux-info">
                                <li class="heading strong-400 text-center">
                                    <i class="icon-real-estate-017"></i> 150 sqft</span>
                                </li>
                                <li class="heading strong-400 text-center">
                                    <i class="icon-hotel-restaurant-022"></i> 5
                                </li>
                                <li class="heading strong-400 text-center">
                                    <i class="icon-hotel-restaurant-158"></i> Baths
                                </li>
                            </ul>
                        </div>

                        <div class="block-body">
                            <h3 class="heading heading-sm">
                                <?= Html::a(
                                    Html::encode('2030 Misty Wagon, Canyon'),
                                    ['properties/view']
                                ) ?>
                            </h3>
                            <p class="description">
                                Lorem ipsum dolor sit amet consectetur adipisg elitm.
                            </p>
                        </div>
                        <div class="block-footer border-top py-3">
                            <div class="row align-items-center">
                                <div class="col col-6">
                                    <span class="block-price">$4000</span>
                                </div>
                                <div class="col col-6 text-right">
                                        <span class="capacity" data-toggle="tooltip" data-placement="left" data-original-title="Capacity:<br><strong>4 members</strong>">
                                        <i class="icon ion-person"></i>
                                        <i class="icon ion-person"></i>
                                        <i class="icon ion-person"></i>
                                        <i class="icon ion-person"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
