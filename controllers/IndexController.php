<?php
/**
 * @package Wordle
 * @author  Christian Seiler <christian@christianseiler.ch>
 */

namespace humhub\modules\games\wordle\controllers;

use humhub\components\Controller;

/**
 *
 */
class IndexController extends Controller
{

    /**
     * @var string $subLayout the name of the sub layout to be applied to this controller's views.
     *                        This property mainly affects the behavior of [[render()]].
     */
    public $subLayout = '@wordle/views/layouts/default';

    /**
     * Renders the index view for the module
     *
     * @return string
     */
    public function actionIndex(): string
    {
        return $this->render('index');
    }
}
