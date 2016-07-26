<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/font-awesome.min.css',
        'css/animate.css',
        'http://fonts.googleapis.com/css?family=Oswald',
        'css/slick.css',
        'css/theme.css',
        'css/style.css',

    ];
    public $js = [
        'https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js',
        'js/wow.min.js',
        'js/slick.min.js',
        'js/custom.js',

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
