<?php
declare(strict_types=1);
/*
 * Copyright (c) 2022.
 */

namespace humhub\modules\fhnw\games\wordle;

use Yii;
use yii\helpers\Url;

/**
 *
 */
class Events {
  /**
   * Defines what to do when the top menu is initialized.
   *
   * @param $event
   */
  public static function onTopMenuInit($event) {
    $config = [
      'label'     => 'Wordle',
      'icon'      => '<i class="fa fa-gamepad"></i>',
      'url'       => Url::to(['/wordle/index']),
      'sortOrder' => 99999,
      'isActive'  => (
        Yii::$app->controller->module &&
        Yii::$app->controller->module->id == 'wordle' &&
        Yii::$app->controller->id == 'index'
      ),
    ];
    $event->sender->addItem($config);
  }

  /**
   * Defines what to do if admin menu is initialized.
   *
   * @param $event
   */
  public static function onAdminMenuInit($event) {
    $config = [
      'label'     => 'Wordle',
      'url'       => Url::to(['/wordle/admin']),
      'group'     => 'manage',
      'icon'      => '<i class="fa fa-gamepad"></i>',
      'isActive'  => (
        Yii::$app->controller->module &&
        Yii::$app->controller->module->id == 'wordle' &&
        Yii::$app->controller->id == 'admin'
      ),
      'sortOrder' => 99999,
    ];
    $event->sender->addItem($config);
  }
}
