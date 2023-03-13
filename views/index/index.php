<?php
/**
 * @package Wordle
 * @author  Christian Seiler <christian@christianseiler.ch>
 */

use fhnw\modules\gamecenter\widgets\Keyboard;
use humhub\modules\games\wordle\assets\Assets;
use humhub\modules\ui\view\components\View;

/** @var View $this */

// Register our module assets, this could also be done within the controller
Assets::register($this);

$user = Yii::$app->user;
$displayName = ($user->isGuest) ? Yii::t('WordleModule.base', 'Guest') : $user->getIdentity()->displayName;

// Add some configuration to our js module
$this->registerJsConfig('wordle', [
    'username' => $displayName
]);
$cols = 5;
$rows = 6;
$this->registerCss('wordle');
?>

<div class="panel-heading">
    <strong>Wordle</strong>
</div>

<div class="panel-body game" style="--rows: <?= $rows ?>; --cols: <?= $cols ?> ;">
    <div class="board">
        <?php for ($row = 0; $row < $rows; ++$row) : ?>
            <div class="board-row">
                <?php for ($tile = 0; $tile < $cols; ++$tile) : ?>
                    <div class="tile" style="transition-delay: <?= ($tile * 200) ?>ms;">
                        <div class="front"></div>
                        <div class="back"></div>
                    </div>
                <?php endfor; ?>
            </div>
        <?php endfor; ?>
    </div>
    <?= Keyboard::qwertz()->action('wordle.type') ?>
</div>
