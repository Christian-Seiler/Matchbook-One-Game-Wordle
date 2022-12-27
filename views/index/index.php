<?php
declare(strict_types=1);

use humhub\widgets\Button;
use humhub\modules\fhnw\games\wordle\assets\Assets;

// Register our module assets, this could also be done within the controller
Assets::register($this);

$displayName = (Yii::$app->user->isGuest)
  ? Yii::t('WordleModule.base', 'Guest')
  : Yii::$app->user->getIdentity()->displayName;

// Add some configuration to our js module
$this->registerJsConfig("wordle", [
  'username' => (Yii::$app->user->isGuest) ? $displayName : Yii::$app->user->getIdentity()->username,
  'text'     => [
    'hello' => Yii::t('WordleModule.base', 'Hi there {name}!', ["name" => $displayName])
  ]
])

?>

<div class="panel-heading">
  <strong>Wordle</strong>
  <?= Yii::t('WordleModule.base', 'overview') ?>
</div>

<div class="panel-body">
  <p><?= Yii::t('WordleModule.base', 'Hello World!') ?></p>

  <?= Button::primary(Yii::t('WordleModule.base', 'Say Hello!'))
            ->action("wordle.hello")
            ->loader(false); ?>
</div>
