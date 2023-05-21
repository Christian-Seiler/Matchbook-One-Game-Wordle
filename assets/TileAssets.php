<?php
/**
 * @package Wordle
 * @author  Christian Seiler <christian@christianseiler.ch>
 */

namespace fhnw\modules\games\wordle\assets;

use yii\web\AssetBundle;

/**
 * AssetsBundles are used to include assets as javascript or css files
 */
class TileAssets extends AssetBundle
{

    /**
     * @var array $css list of CSS files that this bundle contains.
     *                 Each CSS file can be specified in one of the three formats as explained in [[js]].
     *                 Note that only a forward slash "/" should be used as directory separator.
     */
    public $css = [
        'css/tile.css'
    ];

    /**
     * @var array $publishOptions the options to be passed to [[AssetManager::publish()]] when the asset bundle is being published.
     *                            This property is used only when [[sourcePath]] is set.
     * @inheritdoc
     */
    public $publishOptions = [
        'forceCopy' => true
    ];

    /**
     * @var string $sourcePath defines the path of your module assets
     * @inheritdoc
     */
    public $sourcePath = '@wordle/resources';

}
