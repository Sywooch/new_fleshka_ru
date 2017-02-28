<?php

namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use app\components\CController;

/**
 * Site controller
 */
class ArticleController extends CController {

    public function actionIndex() {
        \Yii::$app->view->registerMetaTag([
            'name' => 'keywords',
            'content' => ''
        ]);
        \Yii::$app->view->registerMetaTag([
            'name' => 'description',
            'content' => ''
        ]);
        $where = ['active' => 1];
        $order = 'date DESC';

        $query = \app\models\Articles::find();
        $query->where($where);
        $countQuery = clone $query;
        $query->orderBy($order);
        $pages = new \yii\data\Pagination(['totalCount' => $countQuery->count(), 'pageSize' => 10]);
        $models = $query->offset($pages->offset)
                ->limit($pages->limit)
                ->all();
        CController::$breadcrumbs = [['title' => 'Новости', 'url' => 'article']];
        return $this->render('index', [
                    'models' => $models,
                    'pagination' => $pages,
        ]);
    }

    public function actionView($id) {
        $pageInfo = \app\models\Articles::find()->where(['id' => (int) $id])->one();
        \Yii::$app->view->registerMetaTag([
            'name' => 'keywords',
            'content' => $pageInfo['meta_key']
        ]);
        \Yii::$app->view->registerMetaTag([
            'name' => 'description',
            'content' => $pageInfo['meta_desc']
        ]);
        CController::$breadcrumbs = [['title' => 'Новости', 'url' => 'article'], ['title' => $pageInfo['title'], 'url' => '']];
        return $this->render('view', ['model' => $pageInfo]);
    }

}
