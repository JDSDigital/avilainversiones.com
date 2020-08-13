<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="">
    <!-- Main navbar -->
	<div class="navbar navbar-expand-md navbar-dark bg-indigo navbar-static">
		<div class="navbar-brand">
			<a href="index.html" class="d-inline-block">
				<img src="admin/images/logo_light.png" alt="">
			</a>
		</div>

		<div class="d-md-none">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
				<i class="icon-tree5"></i>
			</button>
			<button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
				<i class="icon-paragraph-justify3"></i>
			</button>
		</div>

		<div class="collapse navbar-collapse" id="navbar-mobile">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block">
						<i class="icon-paragraph-justify3"></i>
					</a>
				</li>
			</ul>

			<span class="navbar-text ml-md-3">
				<span class="badge badge-mark border-orange-300 mr-2"></span>
				<?= Yii::$app->user->identity->email ?>
			</span>

			<ul class="navbar-nav ml-md-auto">
				<li class="nav-item">
					<a href="#" class="navbar-nav-link">
              <?=
                  Html::beginForm(['/site/logout'], 'post')
                  . Html::submitButton(
                      '<i class="icon-switch2"></i>',
                      [
                          'class' => 'btn btn-link logout',
                          'data-popup' => 'tooltip',
                          'title' => 'Logout'
                      ]
                  )
                  . Html::endForm();
              ?>
					</a>
				</li>
			</ul>
		</div>
	</div>
    <!-- /main navbar -->

    <!-- Page content -->
	<div class="page-content">

        <!-- Main sidebar -->
        <div class="sidebar sidebar-light sidebar-main sidebar-expand-md">

            <!-- Sidebar mobile toggler -->
            <div class="sidebar-mobile-toggler text-center">
                <a href="#" class="sidebar-mobile-main-toggle">
                    <i class="icon-arrow-left8"></i>
                </a>
                <span class="font-weight-semibold">Navigation</span>
                <a href="#" class="sidebar-mobile-expand">
                    <i class="icon-screen-full"></i>
                    <i class="icon-screen-normal"></i>
                </a>
            </div>
            <!-- /sidebar mobile toggler -->


            <!-- Sidebar content -->
            <div class="sidebar-content">

                <!-- User menu -->
                <div class="sidebar-user-material">
                    <div class="sidebar-user-material-body">
                        <div class="card-body text-center">
                            <a href="#">
                                <img src="../images/placeholders/placeholder.jpg" class="img-fluid rounded-circle shadow-1 mb-3" width="80" height="80" alt="">
                            </a>
                            <h6 class="mb-0 text-white text-shadow-dark">Victoria Baker</h6>
                            <span class="font-size-sm text-white text-shadow-dark">Santa Ana, CA</span>
                        </div>
                    </div>
                </div>
                <!-- /user menu -->


                <!-- Main navigation -->
                <div class="card card-sidebar-mobile">
                    <ul class="nav nav-sidebar" data-nav-type="accordion">

                        <!-- Main -->
                        <li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Main</div> <i class="icon-menu" title="Main"></i></li>
                        <li class="nav-item">
                            <?= Html::a('<i class="icon-pie-chart7"></i><span>Dashboard</span>',
                                ['/site/index'],
                                ['class' => (Yii::$app->controller->id == 'site') ? 'nav-link active' : 'nav-link'])
                            ?>
                        </li>
                        <li class="nav-item">
                            <?= Html::a('<i class="icon-users2"></i><span>Usuarios</span>',
                                ['user/index'],
                                ['class' => (Yii::$app->controller->id == 'user') ? 'nav-link active' : 'nav-link'])
                            ?>
                        </li>
                        <li class="nav-item">
                            <?= Html::a('<i class="icon-graduation2"></i><span>Cursos</span>',
                                ['courses/index'],
                                ['class' => (Yii::$app->controller->id == 'courses') ? 'nav-link active' : 'nav-link'])
                            ?>
                        </li>
                        <li class="nav-item">
                            <?= Html::a('<i class="icon-images3"></i><span>Eventos</span>',
                                ['events/index'],
                                ['class' => (Yii::$app->controller->id == 'events') ? 'nav-link active' : 'nav-link'])
                            ?>
                        </li>
                        <li class="nav-item">
                            <?= Html::a('<i class="icon-home5"></i><span>Propiedades</span>',
                                ['properties/index'],
                                ['class' => (Yii::$app->controller->id == 'properties') ? 'nav-link active' : 'nav-link'])
                            ?>
                        </li>
                        <li class="nav-item">
                            <?= Html::a('<i class="icon-reading"></i><span>Blog</span>',
                                ['blog/index'],
                                ['class' => (Yii::$app->controller->id == 'blog') ? 'nav-link active' : 'nav-link'])
                            ?>
                        </li>
                        <li class="nav-item">
                            <?= Html::a('<i class="icon-stats-growth"></i><span>Estadísticas</span>',
                                ['statistics/index'],
                                ['class' => (Yii::$app->controller->id == 'statistics') ? 'nav-link active' : 'nav-link'])
                            ?>
                        </li>
                        <li class="nav-item">
                            <?= Html::a('<i class="icon-address-book2"></i><span>Alianzas</span>',
                                ['alliances/index'],
                                ['class' => (Yii::$app->controller->id == 'alliances') ? 'nav-link active' : 'nav-link'])
                            ?>
                        </li>
                        <li class="nav-item">
                            <?= Html::a('<i class="icon-briefcase"></i><span>Asesorías</span>',
                                ['consulting/index'],
                                ['class' => (Yii::$app->controller->id == 'consulting') ? 'nav-link active' : 'nav-link'])
                            ?>
                        </li>
                        <!-- <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link"><i class="icon-copy"></i> <span>Layouts</span></a>

                            <ul class="nav nav-group-sub" data-submenu-title="Layouts">
                                <li class="nav-item"><a href="index.html" class="nav-link active">Default layout</a></li>
                                <li class="nav-item"><a href="../../../../layout_2/LTR/material/full/index.html" class="nav-link">Layout 2</a></li>
                                <li class="nav-item"><a href="../../../../layout_3/LTR/material/full/index.html" class="nav-link">Layout 3</a></li>
                                <li class="nav-item"><a href="../../../../layout_4/LTR/material/full/index.html" class="nav-link">Layout 4</a></li>
                                <li class="nav-item"><a href="../../../../layout_5/LTR/material/full/index.html" class="nav-link">Layout 5</a></li>
                                <li class="nav-item"><a href="../../../../layout_6/LTR/material/full/index.html" class="nav-link disabled">Layout 6 <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>
                            </ul>
                        </li> -->
                        <!-- /main -->

                    </ul>
                </div>
                <!-- /main navigation -->

            </div>
            <!-- /sidebar content -->

        </div>
        <!-- /main sidebar -->

        <div class="content-wrapper">
            <div class="mb-3 border-top-1 border-top-primary">
                <div class="page-header page-header-light" style="margin-bottom: 0;">
                    <div class="page-header-content header-elements-md-inline">
                        <div class="page-title">
                            <h4>
                                <span class="font-weight-semibold"><?= $this->title ?></span>
                                <!-- <small class="d-block text-muted ml-0">Basic breadcrumb inside page header</small> -->
                            </h4>
                        </div>

                        <div class="header-elements py-0">
                            <?= Breadcrumbs::widget([
                                'encodeLabels' => false,
                                'tag' => 'div',
                                'itemTemplate' => "<span class='breadcrumb-item'>{link}</span>\n",
                                'activeItemTemplate' => "<span class='breadcrumb-item active'>{link}</span>",
                                'homeLink' => [
                                    'label' => '<i class="icon-home2 mr-2"></i> Dashboard',
                                    'url' => Url::to(Yii::$app->homeUrl.'dashboard')
                                ],
                                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                            ]) ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content">
                <?= Alert::widget() ?>
                <?= $content ?>
            </div>
        </div>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
