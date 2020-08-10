<?php namespace frontend\assets;

use yii\web\AssetBundle;

class JQueryBundle extends AssetBundle
{
    public $sourcePath = '@node_modules/';

    public $js = [
        'jquery/dist/jquery.min.js'
    ];
}