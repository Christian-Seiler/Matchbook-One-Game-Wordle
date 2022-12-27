<?php

declare(strict_types=1);

namespace humhub\modules\fhnw\games\wordle;

use humhub\modules\content\components\ContentContainerActiveRecord;
use humhub\modules\content\components\ContentContainerModule;
use humhub\modules\user\models\User;
use Yii;
use yii\helpers\Url;

/**
 *
 */
class Module extends ContentContainerModule {
  /**
   * @inheritdoc
   */
  public function getContentContainerTypes(): array {
    return [
      User::class
    ];
  }

  /**
   * @inheritdoc
   */
  public function getConfigUrl(): string {
    return Url::to(['/wordle/admin']);
  }

  /**
   * @inheritdoc
   */
  public function disable(): void {
    // Cleanup all module data, don't remove the parent::disable()!!!
    parent::disable();
  }

  /**
   * @inheritdoc
   */
  public function disableContentContainer(ContentContainerActiveRecord $container): void {
    // Clean up space related data, don't remove the parent::disable()!!!
    parent::disableContentContainer($container);
  }

  /**
   * @inheritdoc
   */
  public function getContentContainerName(ContentContainerActiveRecord $container): string {
    return Yii::t('WordleModule.base', 'Wordle');
  }

  /**
   * @inheritdoc
   */
  public function getContentContainerDescription(ContentContainerActiveRecord $container): string {
    return Yii::t('WordleModule.base', 'Short description of the modules purpose.');
  }
}
