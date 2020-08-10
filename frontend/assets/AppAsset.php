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
        'js/mail/jqBootstrapValidation.js',
        'js/mail/contact_me.js',
        'js/main.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        JQueryBundle::class,
        JQueryEasingBundle::class,
        BootstrapBundle::class,
    ];
}
