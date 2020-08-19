<?php namespace frontend\assets;

use yii\web\AssetBundle;

class GalleryBundle extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $css = [
        'galery/css/swiper.min.css',
        'galery/css/style.css',
    ];

    public $js = [
        'galery/js/swiper.min.js',
        'galery/js/index.js',
    ];
}