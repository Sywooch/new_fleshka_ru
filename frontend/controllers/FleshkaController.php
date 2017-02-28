<?php

namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use app\components\CController;

/**
 * Site controller
 */
class FleshkaController extends CController {

    public function actionView($id) {
        $pageInfo = \frontend\models\Pages::find()->where(['id' => (int) $id])->one();
        \Yii::$app->view->registerMetaTag([
            'name' => 'keywords',
            'content' => $pageInfo['meta_key']
        ]);
        \Yii::$app->view->registerMetaTag([
            'name' => 'description',
            'content' => $pageInfo['meta_desc']
        ]);
        $volumes = \Yii::$app->db->createCommand('SELECT vl.title, pr.price, pr.price_pz, vl.id FROM `yu_volume_to_page` pr LEFT JOIN yu_volumes vl ON vl.id = pr.volume_id WHERE pr.page_id = ' . (int) $id)->queryAll();
        $colors = \Yii::$app->db->createCommand('SELECT cl.color_id, cl.image, vl.title, vl.`value` FROM `yu_color_to_page` cl LEFT JOIN yu_colors vl ON vl.id = cl.color_id WHERE cl.page_id = ' . (int) $id)->queryAll();
        $colorButtons = array();
        foreach ($colors as $color) {
            $colorButtons[$color['value']] = $color;
        }        
        CController::$breadcrumbs = [['title' => 'Каталог', 'url' => 'catalog'], ['title' => $pageInfo['title'], 'url' => '']];
        return $this->render('view', ['model' => $pageInfo, 'volumes' => $volumes, 'colors' => $colors, 'colorButtons' => $colorButtons]);
    }

}
