<?php

defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../vendor/yiisoft/yii2/Yii.php';

$mainConfig = require __DIR__ . '/../config/main/web/config.php';
$localConfig = require __DIR__ . '/../config/local/web/config.php';

$config = yii\helpers\ArrayHelper::merge($mainConfig, $localConfig);

(new yii\web\Application($config))->run();
