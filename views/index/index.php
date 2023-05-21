<?php
/**
 * @package Wordle
 * @author  Christian Seiler <christian@christianseiler.ch>
 */

use fhnw\modules\gamecenter\widgets\Keyboard;
use fhnw\modules\games\wordle\assets\Assets;
use fhnw\modules\games\wordle\widgets\Tile;
use humhub\modules\ui\view\components\View;

/** @var View $this */

// Register our module assets, this could also be done within the controller
Assets::register($this);

$user = Yii::$app->user;
$displayName = ($user->isGuest) ? Yii::t('WordleModule.base', 'Guest') : $user->getIdentity()->displayName;

$cols = 5;
$rows = 6;

// Add some configuration to our js module
$this->registerJsConfig('wordle', [
    'username' => $displayName,
    'rows'     => $rows,
    'columns'  => $cols,
    'word'     => 'hallo'
]);
$this->registerCss('wordle');
?>

<div class="panel-heading">
    <strong>Wordle</strong>
</div>

<div class="panel-body game" style="--rows: <?= $rows ?>; --cols: <?= $cols ?> ;">
    <div class="board">
        <?php for ($row = 0; $row < $rows; ++$row) : ?>
            <div class="board-row">
                <?php for ($column = 0; $column < $cols; ++$column) : ?>
                    <?= Tile::empty()->location($row, $column)->cssClass('pop')->style(['transition-delay' => ($column * 200) . ' ms']) ?>
                <?php endfor; ?>
            </div>
        <?php endfor; ?>
    </div>
    <?= Keyboard::qwertz()->action('wordle.type') ?>
</div>
