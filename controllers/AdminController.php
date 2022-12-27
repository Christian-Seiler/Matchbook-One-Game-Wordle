<?php
declare(strict_types=1);

namespace humhub\modules\fhnw\games\wordle\controllers;

use humhub\modules\admin\components\Controller;

/**
 *
 */
class AdminController extends Controller {

  /**
   * Render admin only page
   *
   * @return string
   */
  public function actionIndex(): string {
    return $this->render('index');
  }

}

