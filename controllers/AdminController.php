<?php
/**
 * @package Wordle
 * @author  Christian Seiler <christian@christianseiler.ch>
 */

namespace fhnw\modules\games\wordle\controllers;

use humhub\modules\admin\components\Controller;

/**
 *
 */
class AdminController extends Controller
{
    /**
     * Render admin only page
     *
     * @return string
     */
    public function actionIndex(): string
    {
        return $this->render('index');
    }
}
