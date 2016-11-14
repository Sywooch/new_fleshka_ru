<?php

namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use app\components\CController;

/**
 * Site controller
 */
class SiteController extends CController {

    public function actionIndex() {
        $pageInfo = $_GET['data'];
		\Yii::$app->view->registerMetaTag([
			'name' => 'keywords',
			'content' => $pageInfo['meta_key']
		]);
		\Yii::$app->view->registerMetaTag([
			'name' => 'description',
			'content' => $pageInfo['meta_desc']
		]);
        return $this->render('index', ['page' => $pageInfo]);
    }

    public function actionSearch($text) {
        $pageInfo = $_GET['data'];
        \Yii::$app->view->registerMetaTag([
            'name' => 'keywords',
            'content' => $pageInfo['meta_key']
        ]);
        \Yii::$app->view->registerMetaTag([
            'name' => 'description',
            'content' => $pageInfo['meta_desc']
        ]);
        return $this->render('search', ['page' => $pageInfo]);
    }
	
	public function actionError() {
        header("HTTP/1.0 404 Not Found");
        return $this->render('error');
    }   

}
