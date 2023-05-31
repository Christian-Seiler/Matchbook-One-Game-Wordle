<?php
/**
 * @package Wordle
 * @author  Christian Seiler <christian@christianseiler.ch>
 */

namespace fhnw\modules\games\wordle;

use fhnw\modules\gamecenter\components\GameModule;
use JetBrains\PhpStorm\ArrayShape;
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
    #[ArrayShape([['name' => 'string', 'title' => 'string', 'description' => 'string', 'secret' => 'bool', 'show_progress' => 'bool']])]
    public function getAchievementConfig(): array
    {
        return [];
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
     * @return GameConfig
     */
    #[ArrayShape(['title' => 'string', 'description' => 'string', 'tags' => 'string[]'])]
    public function getGameConfig(): array
    {
        return [
            'title'       => 'Wordle',
            'description' => 'The Game Wordle'
        ];
    }

    public function getGameUrl(): string
    {
        return Url::to(['/wordle/play']);
    }

    public function getLeaderBoardConfig(): array
    {
        return []; // TODO: Implement getLeaderBoardConfig() method.
    }

}
