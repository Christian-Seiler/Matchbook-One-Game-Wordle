<?php

/**
 * @package Wordle
 * @author  Christian Seiler <christian@christianseiler.ch>
 */

namespace humhub\modules\games\wordle;

use Yii;
use yii\base\Event;
use yii\helpers\Url;

/**
 *
 */
class Events
{
    /**
     * Defines what to do if admin menu is initialized.
     *
     * @param Event $event
     *
     * @return void
     */
    public static function onAdminMenuInit(Event $event): void
    {
        $config = [
            'label'     => 'Wordle',
            'url'       => Url::to(['/wordle/admin']),
            'group'     => 'manage',
            'icon'      => '<i class="fa fa-gamepad"></i>',
            'isActive'  => (Yii::$app->controller->module &&
                            Yii::$app->controller->module->id === 'wordle' &&
                            Yii::$app->controller->id === 'admin'),
            'sortOrder' => 99999,
        ];
        $event->sender->addItem($config);
    }

    /**
     * Defines what to do when the top menu is initialized.
     *
     * @param Event $event
     *
     * @return void
     */
    public static function onTopMenuInit($event): void
    {
        $config = [
            'label'     => 'Wordle',
            'icon'      => '<i class="fa fa-gamepad"></i>',
            'url'       => Url::to(['/wordle/index']),
            'sortOrder' => 99999,
            'isActive'  => (Yii::$app->controller->module &&
                            Yii::$app->controller->module->id === 'wordle' &&
                            Yii::$app->controller->id === 'index'),
        ];
        $event->sender->addItem($config);
    }
}
