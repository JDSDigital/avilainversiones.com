<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\bootstrap4\LinkPager;

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
                <?php  foreach ($dataProvider->getModels() as $property) : ?>

                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="block block--style-3">
                        <div class="block-image relative">
                            <div class="view view-first crop-blog">
                                <?= Html::a(
                                    Html::img($property->getCover()->getThumb(), ['class' => 'img-fluid']),
                                    ['properties/view', 'id' => $property->id]
                                ) ?>
                            </div>
                            <span class="block-ribbon block-ribbon-fixed block-ribbon-right bg-yellow"><?= $property->getContract() ?></span>
                        </div>

                        <div class="aux-info-wrapper border-bottom">
                            <ul class="aux-info">
                                <li class="heading strong-400 text-center">
                                    <i class="icon-real-estate-017"></i> <?= $property->getArea() ?></span>
                                </li>
                                <li class="heading strong-400 text-center">
                                    <i class="icon-hotel-restaurant-022"></i> <?= $property->rooms ?>
                                </li>
                                <li class="heading strong-400 text-center">
                                    <i class="icon-hotel-restaurant-158"></i> <?= $property->toilets ?>
                                </li>
                            </ul>
                        </div>

                        <div class="block-body">
                            <h3 class="heading heading-sm">
                                <?= Html::a(
                                    Html::encode($property->title),
                                    ['properties/view', 'id' => $property->id]
                                ) ?>
                            </h3>
                            <p class="description">
                                <?= Html::encode($property->summary) ?>
                            </p>
                        </div>
                        <div class="block-footer border-top py-3">
                            <div class="row align-items-center">
                                <div class="col-12">
                                    <span class="block-price"><?= Yii::$app->formatter->asCurrency($property->price) ?></span>
                                    <span class="block-price-text"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php endforeach; ?>
            </div>

        </div>
    </div>
</section>
