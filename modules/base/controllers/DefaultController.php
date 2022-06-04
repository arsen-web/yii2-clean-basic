<?php

namespace app\modules\base\controllers;

use yii\web\Controller;

class DefaultController extends Controller
{
    /**
     * @return string[]
     */
    public function actionIndex(): array
    {
        return [
            'version' => '0.0.1'
        ];
    }
}