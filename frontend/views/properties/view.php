<?php
/* @var $this yii\web\View */
use yii\helpers\Html;

$this->title = 'Propiedad';
?>

<section class="sct-color-1">
    <div class="container-fluid no-padding">
        <div class="row row-no-padding">
            <div class="col-lg-4" id="div_properties_search">
                <div class="card card-inverse no-border no-radius">
                    <div class="card-body py-5 px-4">
                        <h3 class="heading heading-5 strong-500 text-capitalize">Search properties</h3>
                        <h4 class="heading heading-sm strong-400 text-normal c-gray-light">You dream is about to get real.</h4>

                        <form class="form-inverse mt-4" data-toggle="validator" role="form">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group has-feedback">
                                        <label class="text-uppercase">Location</label>
                                        <input class="form-control form-control-lg" type="text" placeholder="City, Country">
                                        <span class="help-block with-errors"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group has-feedback">
                                        <label for="" class="text-uppercase">Property type</label>
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
                <section class="slice-lg slice--offset sct-color-3 has-bg-cover bg-size-cover flex flex-items-xs-middle" style="background-image: url(../images/banners/banner-propiedades.jpg); background-position: center top; height: 100%;">

                    <span class="mask mask-dark--style-2"></span>

                    <div class="flex-wrap-item">
                        <div class="container sct-inner">
                            <div class="">
                                <div class="row">
                                    <div class="col-md-6 px-5">
                                        <h3 class="heading heading-1 strong-400 c-white">
                                            <?= Html::encode($property->title) ?>
                                        </h3>
                                        <h4 class="heading heading-5 text-normal strong-300 c-white my-4">
                                            <?= Html::encode($property->summary) ?>
                                        </h4>
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

                    <!-- Properties listing -->
<section class="slice sct-color-2">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-10">
                <div class="light-gallery">
                    <!-- Gallery -->
                    <div class="gallery-top">
                        <?= Html::a(
                            Html::img($property->getCover()->getImage()),
                            $property->getCover()->getImage(),
                            [
                                'class' => 'item',
                                'data-fancybox' => true
                            ]
                        ) ?>
                    </div>

                    <div class="gallery-bottom">
                        <div class="row">
                            <?php foreach ($property->propertiesImages as $key => $image) : ?>
                                <div class="col-sm-2">
                                    <div class="gallery-thumb">
                                        <?= Html::a(
                                            Html::img($image->getThumb()),
                                            $image->getImage(),
                                            [
                                                'class' => 'item',
                                                'data-fancybox' => 'group'
                                            ]
                                        ) ?>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>

                <span class="space-md-md"></span>

                <!-- Description -->
                <div class="card">
                    <div class="card-title b-xs-bottom">
                        <h3 class="heading heading-sm text-uppercase"><?= Html::encode('Descripción') ?></h3>
                    </div>
                    <div class="card-body">
                        <?= $property->description ?>
                    </div>
                </div>

                <span class="space-md-md"></span>

                <!-- Address/Location -->
                <div class="card">
                    <div class="card-title b-xs-bottom">
                        <h3 class="heading heading-sm text-uppercase"><?= Html::encode('Ubicación') ?></h3>
                    </div>
                    <div class="card-body">
                        <dl>
                            <div class="row">
                                <div class="col-sm-4">
                                    <dt>Dirección:</dt>
                                    <dd><?= Html::encode($property->address) ?></dd>
                                </div>
                                <div class="col-sm-4">
                                    <dt>Ciudad:</dt>
                                    <dd><?= Html::encode($property->city) ?></dd>
                                </div>
                                <div class="col-sm-4">
                                    <dt>Comuna:</dt>
                                    <dd><?= Html::encode($property->commune) ?></dd>
                                </div>
                            </div>
                        </dl>
                    </div>
                </div>

                <span class="space-md-md"></span>

                <!-- Property details -->
                <div class="card">
                    <div class="card-title b-xs-bottom">
                        <h3 class="heading heading-sm text-uppercase"><?= Html::encode('Detalles') ?></h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <dl>
                                    <dt>Tamaño:</dt>
                                    <dd><?= Html::encode($property->getArea()) ?></dd>
                                    <dt>Precio:</dt>
                                    <dd><?= Yii::$app->formatter->asCurrency($property->price) ?></dd>
                                </dl>
                            </div>
                            <div class="col-sm-4">
                                <dl>
                                    <dt>Habitaciones:</dt>
                                    <dd><?= Html::encode($property->rooms) ?></dd>
                                    <dt>Baños:</dt>
                                    <dd><?= Html::encode($property->toilets) ?></dd>
                                </dl>
                            </div>
                            <div class="col-sm-4">
                                <dl>
                                    <dt>Estacionamiento:</dt>
                                    <dd><?= Html::encode($property->garage) ?></dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>

                <span class="space-md-md"></span>

                <!-- Video -->
                <!-- <div class="card">
                    <div class="card-title b-xs-bottom">
                        <h3 class="heading heading-sm text-uppercase"><?= Html::encode('Adicionales') ?></h3>
                    </div>
                    <div class="card-body">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/yC7jiT9KHxA?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</section>
