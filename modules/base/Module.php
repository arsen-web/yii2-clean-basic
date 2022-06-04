<?php

namespace app\modules\base;

use app\modules\base\controllers\DefaultController;
use yii\base\BootstrapInterface;

class Module extends \yii\base\Module implements BootstrapInterface
{
    /**
     * {@inheritdoc}
     */
    public $controllerNamespace = 'app\modules\base\controllers';

    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();
    }

    public function bootstrap($app)
    {
        \Yii::setAlias('@module_base', '@app/modules/base');

        if ($app instanceof \yii\console\Application) {
            $this->controllerNamespace = 'app\modules\base\commands';
        }

        $app->getUrlManager()->addRules([
            /** @see DefaultController::actionIndex() */
            'GET,POST,PUT,DELETE /' => 'base/default/index',
        ], false);
    }
}
