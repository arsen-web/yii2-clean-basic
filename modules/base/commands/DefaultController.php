<?php

namespace app\modules\base\commands;

use yii\console\Controller;
use yii\helpers\BaseConsole;
use yii\helpers\Console;

class DefaultController extends Controller
{
    /**
     * @return void
     */
    public function actionIndex(): void
    {
        echo Console::ansiFormat("Базовое действие\n", [BaseConsole::FG_RED]);
    }
}