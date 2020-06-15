<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = Html::encode('Blog');
?>

<section class="slice-lg slice--offset-top has-bg-cover bg-size-cover" style="background-image: url('./images/backgrounds/BannerHomeSecciones.jpg'); background-position: bottom center;">
    <span class="mask mask-dark--style-2"></span>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="py-5">
                    <h2 class="heading heading-inverse heading-xl strong-600 text-capitalize line-height-1_2 animated" data-animation-in="fadeInDownBig" data-animation-delay="200">
                        Blog
                    </h2>
                    <p class="lead c-white animated mt-3" data-animation-in="fadeInUpBig" data-animation-delay="200">
                        There is not time to go slow.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="slice sct-color-1">
    <div class="container">
        <?php  foreach ($models as $entry) : ?>
          <div class="row cols-md-space cols-sm-space cols-xs-space">
            <div class="col-lg-4">
              <div class="card z-depth-2-top">
                <div class="card-image">
                  <div class="view view-first crop-blog">
                    <?= Html::a(
                        Html::img('@web/images/blog/thumbs/'.$entry->file),
                        ['blog/view', 'id' => $entry->id]
                    ) ?>
                  </div>
                </div>

                <div class="card-body">
                  <h3 class="heading heading-5 strong-600 mb-0">
                    <?= Html::a($entry->title, ['blog/view', 'id' => $entry->id]) ?>
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

        <?php endforeach; ?>

        <span class="space-xs-lg"></span>

        <div class="pagination-wrapper">
            <nav aria-label="Pagination - Style 2">
                <ul class="pagination pagination--style-2 pagination-circle justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link" href="#">
                            <i class="ion-ios-arrow-back"></i>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">
                            <i class="ion-ios-arrow-forward"></i>
                            <span class="sr-only">Next</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</section>
