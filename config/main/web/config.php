<?php

return \yii\helpers\ArrayHelper::merge(require __DIR__ . './../common/config.php', [
    'id'         => 'espar',
    'components' => require __DIR__ . '/components.php',
]);
