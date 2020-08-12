<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
//            'class' => 'yii\caching\FileCache',
            'class' => 'yii\caching\DummyCache', //todo a.curkan на время разработки
        ],
    ],
];
