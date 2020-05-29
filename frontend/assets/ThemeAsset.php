<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Theme asset bundle.
 */
class ThemeAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
      // Bootstrap
      // 'vendor/bootstrap/css/bootstrap.min.css',

      // Fonts
      'https://fonts.googleapis.com/css?family=Nunito:400,600,700,800|Roboto:400,500,700',

      // Plugins
      'vendor/swiper/css/swiper.min.css',
      'vendor/hamburgers/hamburgers.min.css',
      'vendor/animate/animate.min.css',
      'vendor/fancybox/css/jquery.fancybox.min.css',

      // Icons
      'fonts/font-awesome/css/font-awesome.min.css',
      'fonts/ionicons/css/ionicons.min.css',
      'fonts/line-icons/line-icons.css',
      'fonts/line-icons-pro/line-icons-pro.css',

      // Linea Icons
      'fonts/linea/arrows/linea-icons.css',
      'fonts/linea/basic/linea-icons.css',
      'fonts/linea/ecommerce/linea-icons.css',
      'fonts/linea/software/linea-icons.css',
      YII_ENV_DEV ? 'css/boomerang.css' : 'css/boomerang.min.css'
    ];
    public $js = [
      // Core
      'vendor/jquery/jquery.min.js',
      'vendor/popper/popper.min.js',
      'vendor/bootstrap/js/bootstrap.min.js',
      'js/slidebar/slidebar.js',
      'js/classie.js',
      'js/jquery.maphilight.js',
      'js/script.js',

      // Bootstrap Extensions
      'vendor/bootstrap-notify/bootstrap-growl.min.js',
      'vendor/scrollpos-styler/scrollpos-styler.js',

      // Plugins: Sorted A-Z
      'vendor/adaptive-backgrounds/adaptive-backgrounds.js',
      'vendor/countdown/js/jquery.countdown.min.js',
      'vendor/dropzone/dropzone.min.js',
      'vendor/easy-pie-chart/jquery.easypiechart.min.js',
      'vendor/fancybox/js/jquery.fancybox.min.js',
      'vendor/flatpickr/flatpickr.min.js',
      'vendor/flip/flip.min.js',
      'vendor/footer-reveal/footer-reveal.min.js',
      'vendor/gradientify/jquery.gradientify.min.js',
      'vendor/headroom/headroom.min.js',
      'vendor/headroom/jquery.headroom.min.js',
      'vendor/input-mask/input-mask.min.js',
      'vendor/instafeed/instafeed.js',
      'vendor/milestone-counter/jquery.countTo.js',
      'vendor/nouislider/js/nouislider.min.js',
      'vendor/paraxify/paraxify.min.js',
      'vendor/select2/js/select2.min.js',
      'vendor/sticky-kit/sticky-kit.min.js',
      'vendor/swiper/js/swiper.min.js',
      'vendor/textarea-autosize/autosize.min.js',
      'vendor/typeahead/typeahead.bundle.min.js',
      'vendor/typed/typed.min.js',
      'vendor/vide/vide.min.js',
      'vendor/viewport-checker/viewportchecker.min.js',
      'vendor/wow/wow.min.js',

      // Isotope
      'vendor/isotope/isotope.min.js',
      'vendor/imagesloaded/imagesloaded.pkgd.min.js',

      // App JS
      YII_ENV_DEV ? 'js/boomerang.js' : 'css/boomerang.min.js'
    ];
}
