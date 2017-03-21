<?php
return [
    'aliases'=>[
        '@frontBaseUrl' => 'http://shoko.dev',
    ],
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=shoko',
            'username' => 'shoko',
            'password' => '123',
            'charset' => 'utf8',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'transport' => [
                'class' => 'Swift_SmtpTransport',
                'host' => '127.0.0.1',
                'port' => '1025',
                //'encryption' => 'tls',
            ],
        ],
    ],
    'modules' => [
        'gii' => [
            'class' => 'yii\gii\Module',
            'allowedIPs' => ['*'] // adjust this to your needs
        ],
    ],
];
