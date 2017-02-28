<?php

namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use app\components\CController;

/**
 * Site controller
 */
class CatalogController extends CController {

    public function actionIndex($id = 0) {
        \Yii::$app->view->registerMetaTag([
            'name' => 'keywords',
            'content' => ''
        ]);
        \Yii::$app->view->registerMetaTag([
            'name' => 'description',
            'content' => ''
        ]);
        $sql = 'SELECT * FROM {{%categories}} WHERE parent = ' . (int) $id . ' ORDER BY sort, id';
        $models = \Yii::$app->db->createCommand($sql)->queryAll();
        CController::$breadcrumbs = [['title' => 'Каталог', 'url' => '/catalog']];
        return $this->render('index', [
                    'rows' => $models,
        ]);
    }

}
