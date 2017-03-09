<?php

namespace app\widgets\forms;

use Yii;
use yii\base\Widget;
use yii\helpers\Html;
use app\components\CController;

class CallBack extends Widget
{

    public $class = 'call-widget';

    public function run()
    {
        $model = new \frontend\models\CallBackForm();
        if ($model->load(Yii::$app->request->post()) && Yii::$app->recaptcha->verifyResponse(
            $_SERVER['REMOTE_ADDR'],
            Yii::$app->request->post('g-recaptcha-response')) && isset($_POST['user_fname']) && $_POST['user_fname'] == '') {
            $orderID = CController::UniqueRandomNumbersWithinRange(1,10,5);
			$orderID = \Yii::$app->db->createCommand('SELECT MAX(session_id) session_id FROM {{%checkout}} LIMIT 1')->queryOne();
			$orderID = $orderID['session_id'] + 1;
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
                'date' => date('Y-m-d H:i:s'),
            ])->execute();
            //$msg = 'Имя: ' . $model->name . '<br>E-mail: ' . $model->email . '<br>Телефон: ' . $model->phone . '<br>Сообщение: ' . $model->message . '<br> Номер заказа: ' . $orderID . '<br> <a href="admin.fleshka.ru/checkout/' . $orderID . '">Ссылка на заказ</a>';
            Yii::$app->mailer->compose()
                ->setFrom($model->email)
                ->setTo('sale@fleshka.ru')
                //->setTo('dilshod-x@mail.ru')
                ->setTo('alex@fleshka.ru')
                ->setSubject('Fleshka.ru - заказ ' . $orderID)
                ->setTextBody($model->message)
                //->setHtmlBody($msg)
                ->send();
            $cookies = Yii::$app->response->cookies;
            $cookies->remove('basket');
            \Yii::$app->getSession()->setFlash('success', 'seccess');
            //Yii::$app->response->redirect('/cart/checkout', 302);
        }
        return $this->render('callBack', ['model' => $model, 'class' => $this->class]);
    }

}
