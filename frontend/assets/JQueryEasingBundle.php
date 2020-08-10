<?php namespace frontend\assets;

use yii\web\AssetBundle;

class JQueryEasingBundle extends AssetBundle
{
    public $sourcePath = '@node_modules';

    public $js = [
        'jquery.easing/jquery.easing.min.js',
    ];
}