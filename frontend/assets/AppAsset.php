<?php namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Class AppAsset
 * @package frontend\assets
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $css = [
        'css/main.css',
    ];

    public $js = [
        'js/main.js',
    ];

    public $depends = [
        \yii\web\YiiAsset::class,
        JQueryBundle::class,
        JQueryEasingBundle::class,
        BootstrapBundle::class,
    ];
}
