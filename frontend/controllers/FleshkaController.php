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
        $volumes = \Yii::$app->db->createCommand('SELECT vl.title, pr.price, pr.price_pz FROM `yu_volume_to_page` pr LEFT JOIN yu_volumes vl ON vl.id = pr.volume_id WHERE pr.page_id = ' . (int) $id)->queryAll();
        return $this->render('view', ['model' => $pageInfo, 'volumes' => $volumes]);
    }

}
