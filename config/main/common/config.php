<?php

return [
    'basePath'  => dirname(__DIR__) . '/../../',
    'bootstrap' => require __DIR__ . '/bootstrap.php',
    'modules'   => require __DIR__ . '/modules.php',
    'params'    => require __DIR__ . '/params.php',
    'aliases'   => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
];