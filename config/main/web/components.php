<?php

return [
    'urlManager' => [
        'enablePrettyUrl'     => true,
        'enableStrictParsing' => true,
        'showScriptName'      => false,
        'rules'               => [
        ],
    ],
    'request'    => [
        'cookieValidationKey' => 'scQDkZPCUHQSK8gYTPIcdnS9hxjlHTUz',
        'parsers'             => [
            'application/json'    => 'yii\web\JsonParser',
            'multipart/form-data' => 'yii\web\MultipartFormDataParser'
        ]
    ],
    'response'   => [
        'format'     => \yii\web\Response::FORMAT_JSON,
        'formatters' => [
            \yii\web\Response::FORMAT_JSON => [
                'class'         => 'yii\web\JsonResponseFormatter',
                'prettyPrint'   => YII_DEBUG,
                'encodeOptions' => JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE,
            ],
        ],
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