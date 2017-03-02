<?php

namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use app\components\CController;
use \frontend\models\ContactForm;

/**
 * Site controller
 */
class PageController extends CController {

    public function actionView($url) {

        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending email.');
            }
            return $this->refresh();
        } else {
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
            return $this->render('view', ['model' => $pageInfo, 'feedBack' => $model]);
        }
    }

}
