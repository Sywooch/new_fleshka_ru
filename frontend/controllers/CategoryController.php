<?php

namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use app\components\CController;

/**
 * Site controller
 */
class CategoryController extends CController {

    public function actionView() {
        \Yii::$app->view->registerMetaTag([
            'name' => 'keywords',
            'content' => ''
        ]);
        \Yii::$app->view->registerMetaTag([
            'name' => 'description',
            'content' => ''
        ]);
        $where = ['active' => 1];
        $order = 'id DESC';

        $query = \frontend\models\Pages::find();
        
        $query->where($where);
        $countQuery = clone $query;
        $query->orderBy($order);
        $pages = new \yii\data\Pagination(['totalCount' => $countQuery->count(), 'pageSize' => 1]);
        $models = $query->offset($pages->offset)
                ->limit($pages->limit)
                ->all();

        return $this->render('view', [
                    'models' => $models,
                    'pagination' => $pages,
        ]);
    }

}
