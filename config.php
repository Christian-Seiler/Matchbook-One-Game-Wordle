<?php
/**
 * @package Wordle
 * @author  Christian Seiler <christian@christianseiler.ch>
 */

use humhub\modules\admin\widgets\AdminMenu;
use humhub\modules\games\wordle\Events;
use humhub\widgets\TopMenu;

return [
    'id'        => 'wordle',
    'class'     => 'humhub\modules\games\wordle\WordleModule',
    'namespace' => 'humhub\modules\games\wordle',
    'events'    => [
        [
            'class'    => TopMenu::class,
            'event'    => TopMenu::EVENT_INIT,
            'callback' => [Events::class, 'onTopMenuInit'],
        ],
        [
            'class'    => AdminMenu::class,
            'event'    => TopMenu::EVENT_INIT,
            'callback' => [Events::class, 'onAdminMenuInit']
        ]
    ]
];
