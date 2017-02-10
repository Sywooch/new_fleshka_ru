<?php

namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use app\components\CController;
use \yii\data\Pagination;

/**
 * Site controller
 */
class SiteController extends CController {

    public function actionIndex() {

        return $this->render('index');
    }

    public function actionSearch($text) {
        if(!filter_var($text, FILTER_VALIDATE_INT) === false) {
            $sql = 'SELECT * FROM {{%price_list}} WHERE old_id = ' . (int) $text;
            $cnt = count(Yii::$app->db->createCommand($sql)->queryAll());
            $pages = new Pagination(['totalCount' => $cnt, 'pageSize' => 20]);
            $rows = Yii::$app->db->createCommand($sql . ' LIMIT ' . (int) $pages->limit . ' OFFSET ' . (int) $pages->offset)->queryAll();
        } else {
            $rows = (new \yii\db\Query())
                ->select(['id'])
                ->from('{{%price_list}}')
                ->andWhere(['like', 'title', $text])
                ->all();
            $cnt = count($rows);
            $pages = new Pagination(['totalCount' => $cnt, 'pageSize' => 20]);
            $rows = (new \yii\db\Query())
                ->select(['id', 'title', 'old_id', 'image', 'price'])
                ->from('{{%price_list}}')
                ->andWhere(['like', 'title', $text])
                ->limit($pages->limit)
                ->offset($pages->offset)
                ->all();
        }

        \Yii::$app->view->registerMetaTag([
            'name' => 'keywords',
            'content' => ''
        ]);
        \Yii::$app->view->registerMetaTag([
            'name' => 'description',
            'content' => ''
        ]);
        return $this->render('search', ['text' => $text, 'rows' => $rows, 'pagination' => $pages,]);
    }

    public function actionError() {
        header("HTTP/1.0 404 Not Found");
        $exception = Yii::$app->errorHandler->exception;
       
        if ($exception !== null) {
            return $this->render('error', ['exception' => $exception]);
        }
    }

}
