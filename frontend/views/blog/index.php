<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\bootstrap4\LinkPager;

$this->title = Html::encode('Blog');
?>

<section class="slice-lg slice--offset-top has-bg-cover bg-size-cover" style="background-image: url('./images/banners/banner-blog.jpg'); background-position: center center;">
    <span class="mask mask-dark--style-2"></span>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="py-5">
                    <h2 class="heading heading-inverse heading-xl strong-600 text-capitalize line-height-1_2 animated" data-animation-in="fadeInDownBig" data-animation-delay="200">
                        Blog
                    </h2>
                    <p class="lead c-white animated mt-3" data-animation-in="fadeInUpBig" data-animation-delay="200">
                        Nuestros mejores consejos.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="slice sct-color-1">
    <div class="container">
        <?php if (count($dataProvider->getModels()) > 0) : ?>
            <div class="row cols-md-space cols-sm-space cols-xs-space">
                <?php foreach ($dataProvider->getModels() as $entry) : ?>
                    <div class="col-lg-4">
                      <div class="card z-depth-2-top">
                        <div class="card-image">
                          <div class="view view-first crop-blog">
                            <?= Html::a(
                                Html::img('@web/images/blog/thumbs/'.$entry->thumb),
                                ['blog/view', 'id' => $entry->id]
                            ) ?>
                          </div>
                        </div>

                        <div class="card-body">
                          <h3 class="heading heading-3 strong-600 mb-0">
                            <?= Html::a($entry->title, ['blog/view', 'id' => $entry->id]) ?>
                          </h3>
                          <p class="heading-6">
                              <?= Html::encode($entry->summary) ?>
                          </p>
                        </div>

                        <div class="card-footer">
                          <div class="row">
                            <div class="col">
                              <div class="block-author">
                                <div class="author-info">
                                  <div class="author-name">
                                      <i class="fa fa-user mr-1"></i>
                                      <?= Html::a($entry->user->name, ['blog/view', 'id' => $entry->id], ['class' => 'strong-600']) ?>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                      </div>
                    </div>

                <?php endforeach; ?>

                <span class="space-xs-lg"></span>

                <div class="pagination-wrapper">
                    <nav aria-label="Pagination">
                        <?= LinkPager::widget([
                            'pagination' => $dataProvider->getPagination(),
                            'options' => [
                                'class' => 'pagination pagination--style-2 pagination-circle justify-content-center'
                            ]
                        ]) ?>
                    </nav>
                </div>
            </div>
        <?php else : ?>
            <div class="col-12 text-center mt-3">
                <p class="heading heading-4">No hay elementos que mostrar.</p>
            </div>
        <?php endif; ?>
    </div>
</section>
