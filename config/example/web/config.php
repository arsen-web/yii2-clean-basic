<?php

$config = \yii\helpers\ArrayHelper::merge(require __DIR__ . './../common/config.php', [
    'components' => require __DIR__ . '/components.php',
]);

if (YII_ENV_DEV) {
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
    ];
}

return $config;
