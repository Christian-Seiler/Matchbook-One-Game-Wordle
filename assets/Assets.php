<?php
/**
 * @package Wordle
 * @author  Christian Seiler <christian@christianseiler.ch>
 */

namespace humhub\modules\games\wordle\assets;

use yii\web\AssetBundle;
use yii\web\View;

/**
 * AssetsBundles are used to include assets as javascript or css files
 */
class Assets extends AssetBundle
{

    public $css = [
        'css/wordle.css'
    ];

    /**
     * @var array list of JavaScript files that this bundle contains.
     * @inheritdoc
     */
    public $js = [
        'js/wordle.js'
    ];

    /**
     * @var array defines where the js files are included into the page, note your custom js files should be included after the core files
     *      (which are included in head)
     * @inheritdoc
     */
    public $jsOptions = ['position' => View::POS_END];

    /**
     * @var array $publishOptions change forceCopy to true when testing your js in order to rebuild this assets on every request (otherwise
     *                            they will be cached)
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
