<?php
/**
 * @package Wordle
 * @author  Christian Seiler <christian@christianseiler.ch>
 */

namespace humhub\modules\games\wordle;

use fhnw\modules\gamecenter\components\GameModule;
use fhnw\modules\gamecenter\models\Genre;
use humhub\modules\content\components\ContentContainerActiveRecord;
use humhub\modules\user\models\User;
use Yii;
use yii\helpers\Url;

/**
 * @property-read string[] $contentContainerTypes
 * @property-read string   $configUrl
 * @phpstan-import-type GameConfig from GameModule
 * @phpstan-import-type AchievementConfig from GameModule
 */
class WordleModule extends GameModule
{
    /**
     * @phpstan-return AchievementConfig[]
     * @return array
     */
    public function getAchievementConfig(): array
    {
        return [
            ['id' => 'first-game', 'title' => 'Win your first game', 'description' => 'Win your first game']
        ];
    }

    /**
     * @inheritdoc
     * @return string the url
     * @noinspection PhpMissingParentCallCommonInspection
     */
    public function getConfigUrl(): string
    {
        return Url::to(['/wordle/admin']);
    }

    /**
     * @inheritdoc
     *
     * @param ContentContainerActiveRecord $container unused
     *
     * @return string
     * @noinspection PhpMissingParentCallCommonInspection
     */
    public function getContentContainerDescription(ContentContainerActiveRecord $container): string
    {
        return Yii::t('WordleModule.base', 'description');
    }

    /**
     * @inheritdoc
     *
     * @param ContentContainerActiveRecord $container unused
     *
     * @return string
     * @noinspection PhpMissingParentCallCommonInspection
     */
    public function getContentContainerName(ContentContainerActiveRecord $container): string
    {
        return Yii::t('WordleModule.base', 'name');
    }

    /**
     * @inheritdoc
     * @return string[] valid content container classes
     * @noinspection PhpMissingParentCallCommonInspection
     */
    public function getContentContainerTypes(): array
    {
        return [User::class];
    }

    /**
     * @inheritdoc
     * @return GameConfig
     */
    public function getGameConfig()
    {
        return [
            'title'       => 'Wordle',
            'description' => 'The Game Wordle'
        ];
    }
}
