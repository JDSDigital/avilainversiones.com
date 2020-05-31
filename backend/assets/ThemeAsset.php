<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Theme asset bundle.
 */
class ThemeAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900',
        'css/icons/icomoon/styles.min.css',
        'css/bootstrap.min.css',
        'css/bootstrap_limitless.min.css',
        'css/layout.min.css',
        'css/components.min.css',
        'css/colors.min.css',
    ];
    public $js = [
        'js/main/jquery.min.js',
        'js/main/bootstrap.bundle.min.js',
        'js/plugins/loaders/blockui.min.js',
        'js/plugins/ui/ripple.min.js',
        'js/plugins/visualization/d3/d3.min.js',
        'js/plugins/visualization/d3/d3_tooltip.js',
        'js/plugins/forms/styling/switchery.min.js',
        'js/plugins/forms/selects/bootstrap_multiselect.js',
        'js/plugins/ui/moment/moment.min.js',
        'js/plugins/pickers/daterangepicker.js',
        'js/app.js',
        'js/demo_pages/dashboard.js',
    ];
}
