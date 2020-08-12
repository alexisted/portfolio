<?php namespace frontend\assets;

use yii\web\AssetBundle;
use yii\web\JqueryAsset;

/**
 * Class BootboxBundle
 * @package frontend\assets
 */
class BootboxBundle extends JqueryAsset
{
    public $sourcePath = '@node_modules';

    public $js = [
        'bootbox/dist/bootbox.min.js',
        'bootbox/dist/bootbox.all.min.js',
        'bootbox/dist/bootbox.locales.min.js'
    ];
}