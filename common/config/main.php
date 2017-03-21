<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'bootstrap' => ['log', 'devicedetect'],
    'components' => [
        'devicedetect' => [
            'class' => 'alexandernst\devicedetect\DeviceDetect'
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
    'aliases'=>[
        '@publicRoot'=>dirname(dirname(__DIR__)) . '/frontend/web/',
    ],

];