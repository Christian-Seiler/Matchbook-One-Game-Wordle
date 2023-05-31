<?php

namespace fhnw\modules\games\wordle\controllers;

use humhub\components\Controller;

/**
 * @package Wordle/Controllers
 */
class IndexController extends Controller
{

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
