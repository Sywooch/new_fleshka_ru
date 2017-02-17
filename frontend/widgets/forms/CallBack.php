<?php

namespace app\widgets\forms;

use Yii;
use yii\base\Widget;
use yii\helpers\Html;
use app\components\CController;

class CallBack extends Widget {

    public $class = 'call-widget';

    public function run() {
        $model = new \frontend\models\CallBackForm();
        if ($model->load(Yii::$app->request->post())) {
            $orderID = uniqid();
            Yii::$app->db->createCommand()->insert('{{%checkout}}', [
                    'status' => 1,
                    'name' => $model->name,
                    'email' => $model->email,
                    'phone' => $model->phone,
                    'comment' => $model->message,
                    'session_id' => $orderID,
                    'product_id' => 0,
                    'prices' => json_encode([]),
                    'colors' => json_encode([]),
                ])->execute();
            Yii::$app->mailer->compose([
                    'html' => 'contact-html',                    
                ])
                ->setFrom($model->email)
                ->setTo('sale@fleshka.ru')
                ->setTo('dilshod-x@mail.ru')
                ->setTo('alex@fleshka.ru')
                ->setSubject('Fleshka.ru - заказ ' . $orderID)
                ->setTextBody($model->comment . '<br><a href="http://admin.fleshka.ru/checkout/view?id=' . $orderID . '">Ссылка на заказ</a>')
                ->send();
            $cookies = Yii::$app->response->cookies;
            $cookies->remove('basket');
            \Yii::$app->getSession()->setFlash('success', 'seccess');
            //Yii::$app->response->redirect('/cart/checkout', 302);
        }
        return $this->render('callBack', ['model' => $model, 'class' => $this->class]);
    }

}
