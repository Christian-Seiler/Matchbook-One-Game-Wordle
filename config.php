<?php
/*
 * Copyright (c) 2022.
 */

declare(strict_types=1);

use humhub\widgets\TopMenu;
use humhub\modules\admin\widgets\AdminMenu;
use humhub\modules\fhnw\games\wordle\Events;

return [
  'id'        => 'wordle',
  'class'     => 'humhub\modules\fhnw\games\wordle\Module',
  'namespace' => 'humhub\modules\fhnw\games\wordle',
  'events'    => [
    [
      'class'    => TopMenu::class,
      'event'    => TopMenu::EVENT_INIT,
      'callback' => [Events::class, 'onTopMenuInit'],
    ],
    [
      'class'    => AdminMenu::class,
      'event'    => AdminMenu::EVENT_INIT,
      'callback' => [Events::class, 'onAdminMenuInit']
    ],
  ],
];
