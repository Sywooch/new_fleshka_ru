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
        $sql = 'SELECT DISTINCT
                        p1.id AS id,
                        p1.title AS title,
                        vl.price,
                        (
                                SELECT
                                        cl2.image
                                FROM
                                        yu_color_to_page cl2
                                WHERE
                                        cl2.page_id = cl.page_id
                                ORDER BY
                                        cl2.color_id
                                LIMIT 1
                        ) AS image
                FROM
                        yu_category_to_page cp
                JOIN yu_pages p1 ON cp.page_id = p1.id
                JOIN yu_color_to_page cl ON cl.page_id = p1.id
                JOIN yu_volume_to_page vl ON vl.page_id = p1.id
                WHERE 1=1' . (isset($_GET['id']) ? ' AND cp.category_id = ' . (int) $_GET['id'] : '') . '' . (isset($_GET['cl']) ? ' AND cl.color_id = ' . (int) $_GET['cl'] : '') . '' . (isset($_GET['p1']) && isset($_GET['p2']) ? ' AND vl.price => ' . (int) $_GET['p1'] . ' AND vl.price <= ' . (int) $_GET['p2'] : '');
        echo $cnt = count(\Yii::$app->db->createCommand($sql)->queryAll());
        $pages = new \yii\data\Pagination(['totalCount' => $cnt, 'pageSize' => 1]);
        $models = \Yii::$app->db->createCommand($sql . ' LIMIT ' . (int) $pages->limit . ' OFFSET ' . (int) $pages->offset)->queryAll();
        
        return $this->render('view', [
                    'models' => $models,
                    'pagination' => $pages,
        ]);
    }

}
