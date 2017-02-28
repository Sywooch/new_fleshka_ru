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

    public function actionView($url) {
        $pageInfo = \app\models\Stranitsy::find()->where(['url' => $url])->one();
        \Yii::$app->view->registerMetaTag([
            'name' => 'keywords',
            'content' => $pageInfo['meta_key']
        ]);
        \Yii::$app->view->registerMetaTag([
            'name' => 'description',
            'content' => $pageInfo['meta_desc']
        ]);
        CController::$breadcrumbs = [['title' => $pageInfo['title'], 'url' => '']];
        return $this->render('view', ['model' => $pageInfo]);
    }

}
