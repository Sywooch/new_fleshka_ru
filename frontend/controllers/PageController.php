<?php

namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use app\components\CController;

/**
 * Site controller
 */
class PageController extends CController {

    public function actionView() {
        $pageInfo = $_GET['data'];
		\Yii::$app->view->registerMetaTag([
			'name' => 'keywords',
			'content' => $pageInfo['meta_key']
		]);
		\Yii::$app->view->registerMetaTag([
			'name' => 'description',
			'content' => $pageInfo['meta_desc']
		]);
        return $this->render('view', ['model' => $pageInfo]);
    }

}
