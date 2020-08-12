<?php namespace frontend\modules\base\assets;

use frontend\assets\AppAsset;
use frontend\assets\BootboxBundle;
use yii\web\AssetBundle;

/**
 * Class HomeBundle
 * @package frontend\modules\base\assets
 */
class HomeBundle extends AssetBundle
{
    public $sourcePath = '@frontend/modules/base/web';

    public $js = [
        'js/home/index.js',
    ];

    public $depends = [
        AppAsset::class,
        BootboxBundle::class,
    ];

    public function __construct()
    {
        parent::__construct();
        foreach ($this->css as $k => $v) {
            $this->css[$k] = $v . "?m=" . strval(rand(10000, 99999));
        }
        foreach ($this->js as $k => $v) {
            $this->js[$k] = $v . "?m=" . strval(rand(10000, 99999));
        }
    }
}
