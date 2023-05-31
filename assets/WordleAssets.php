<?php

namespace fhnw\modules\games\wordle\assets;

use humhub\assets\AnimateCssAsset;
use humhub\components\assets\AssetBundle;

class WordleAssets extends AssetBundle
{

    public $css = ['css/wordle.css'];

    public $depends = [
        AnimateCssAsset::class
    ];

    public $forceCopy = true;

    public $js = ['js/words.js', 'js/wordle.js'];

    /**
     * @var string $sourcePath
     * @inheritdoc
     */
    public $sourcePath = '@wordle/resources';

}
