<?php
declare(strict_types=1);

namespace humhub\modules\fhnw\games\wordle\controllers;

use humhub\components\Controller;

/**
 *
 */
class IndexController extends Controller {

  public $subLayout = '@wordle/views/layouts/default';

  /**
   * Renders the index view for the module
   *
   * @return string
   */
  public function actionIndex(): string {
    return $this->render('index');
  }

}

