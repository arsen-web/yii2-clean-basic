<?php

return [
    'db'         => [
        'class'    => 'yii\db\Connection',
        'dsn'      => 'mysql:host=localhost;dbname=yii2basic',
        'username' => 'root',
        'password' => '',
        'charset'  => 'utf8',
    ],
    //        'cache'        => [
    //            'class' => 'yii\caching\FileCache',
    //        ],
    //        'user'         => [
    //            'identityClass'   => 'app\models\User',
    //            'enableAutoLogin' => true,
    //        ],
    //        'errorHandler' => [
    //            'errorAction' => 'site/error',
    //        ],
    //        'mailer'       => [
    //            'class'            => 'yii\swiftmailer\Mailer',
    //            // send all mails to a file by default. You have to set
    //            // 'useFileTransport' to false and configure transport
    //            // for the mailer to send real emails.
    //            'useFileTransport' => true,
    //        ],
    //        'log'          => [
    //            'traceLevel' => YII_DEBUG ? 3 : 0,
    //            'targets'    => [
    //                [
    //                    'class'  => 'yii\log\FileTarget',
    //                    'levels' => ['error', 'warning'],
    //                ],
    //            ],
    //        ],
];