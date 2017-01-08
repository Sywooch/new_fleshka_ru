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
                                    cl2.page_id = cl.page_id' . (isset($_GET['cl']) ? ' AND cl2.color_id = ' . (int) $_GET['cl'] : '') . '
                                ORDER BY
                                    cl2.color_id
                                LIMIT 1
                        ) AS image
                FROM
                        yu_category_to_page cp
                JOIN yu_pages p1 ON cp.page_id = p1.id
                JOIN yu_color_to_page cl ON cl.page_id = p1.id
                JOIN yu_volume_to_page vl ON vl.page_id = p1.id
                WHERE 1=1' . (isset($_GET['id']) ? ' AND cp.category_id = ' . (int) $_GET['id'] : '') . '' . (isset($_GET['vl']) ? ' AND vl.volume_id = ' . (int) $_GET['vl'] : '') . '' . (isset($_GET['cl']) ? ' AND cl.color_id = ' . (int) $_GET['cl'] : '') . '' . (isset($_GET['p1']) && isset($_GET['p2']) ? ' AND vl.price >= ' . (int) $_GET['p1'] . ' AND vl.price <= ' . (int) $_GET['p2'] : '') . ' GROUP BY p1.id';

        $cnt = count(\Yii::$app->db->createCommand($sql)->queryAll());
        $pages = new \yii\data\Pagination(['totalCount' => $cnt, 'pageSize' => 10]);
        $models = \Yii::$app->db->createCommand($sql . ' LIMIT ' . (int) $pages->limit . ' OFFSET ' . (int) $pages->offset)->queryAll();
        $volumes = \Yii::$app->db->createCommand('select id, title from {{%volumes}}')->queryAll();
        $colors = \Yii::$app->db->createCommand('select id, title, value from {{%colors}}')->queryAll();
        //echo '<pre>';print_r($models);exit;
        return $this->render('view', [
                    'rows' => $models,
                    'pagination' => $pages,
                    'volumes' => $volumes,
                    'colors' => $colors
        ]);
    }

}
