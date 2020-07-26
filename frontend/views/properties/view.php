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
                                            9975 Emerald Escape, New York
                                        </h3>
                                        <h4 class="heading heading-5 text-normal strong-300 c-white my-4">
                                            Lorem ipsum dolor sit amet, consectetur adipisg elitm ut tincidunt purus iaculis consectetur.
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
                        <a href="../images/prv/real-estate/img-lg-1.jpg" class="item" data-fancybox>
                            <img src="../images/prv/real-estate/img-lg-1.jpg">
                        </a>
                    </div>

                    <div class="gallery-bottom">
                        <div class="row">
                            <div class="col-sm-2">
                                <div class="gallery-thumb">
                                    <a class="item" href="../images/prv/real-estate/img-1.jpg" data-fancybox="group">
                                        <img src="../images/prv/real-estate/img-1.jpg">
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="gallery-thumb">
                                    <a class="item" href="../images/prv/real-estate/img-2.jpg" data-fancybox="group">
                                        <img src="../images/prv/real-estate/img-2.jpg">
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="gallery-thumb">
                                    <a class="item" href="../images/prv/real-estate/img-3.jpg" data-fancybox="group">
                                        <img src="../images/prv/real-estate/img-3.jpg">
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="gallery-thumb">
                                    <a class="item" href="../images/prv/real-estate/img-4.jpg" data-fancybox="group">
                                        <img src="../images/prv/real-estate/img-4.jpg">
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="gallery-thumb">
                                    <a class="item" href="../images/prv/real-estate/img-5.jpg" data-fancybox="group">
                                        <img src="../images/prv/real-estate/img-5.jpg">
                                    </a>
                                </div>
                            </div>

                            <div class="col-sm-2">
                                <div class="gallery-thumb">
                                    <a class="item" href="../images/prv/real-estate/img-6.jpg" data-fancybox="group">
                                        <img src="../images/prv/real-estate/img-6.jpg">
                                    </a>
                                </div>
                            </div>
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
                        <p>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
                        </p>

                        <p>
                            Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.
                        </p>

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
                                    <dd>Av. Ancla N° 6</dd>
                                </div>
                                <div class="col-sm-4">
                                    <dt>Ciudad:</dt>
                                    <dd>Santiago</dd>
                                </div>
                                <div class="col-sm-4">
                                    <dt>Comuna:</dt>
                                    <dd>Santiago</dd>
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
                                    <dd>80 m</dd>
                                    <dt>Precio:</dt>
                                    <dd>200.000</dd>
                                </dl>
                            </div>
                            <div class="col-sm-4">
                                <dl>
                                    <dt>Habitaciones:</dt>
                                    <dd>2</dd>
                                    <dt>Baños:</dt>
                                    <dd>1</dd>
                                </dl>
                            </div>
                            <div class="col-sm-4">
                                <dl>
                                    <dt>Estacionamiento:</dt>
                                    <dd>1</dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>

                <span class="space-md-md"></span>

                <!-- Video -->
                <div class="card">
                    <div class="card-title b-xs-bottom">
                        <h3 class="heading heading-sm text-uppercase"><?= Html::encode('Adicionales') ?></h3>
                    </div>
                    <div class="card-body">
                        <!-- 16:9 aspect ratio -->
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/yC7jiT9KHxA?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
