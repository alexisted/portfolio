<?php namespace frontend\assets;

use yii\web\AssetBundle;

class BootstrapBundle extends AssetBundle
{
    public $sourcePath = '@node_modules';

    public $css = [
        'bootstrap/dist/css/bootstrap.css',
    ];
    public $js = [
        'bootstrap/dist/js/bootstrap.min.js',
    ];
}