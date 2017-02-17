<?php

namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use app\components\CController;

/**
 * Site controller
 */
class CartController extends CController {

    public function actionCheckout() {
        $checkout = array();
        $orderID = uniqid();
        $prices = array();
        $colors = array();
        if (isset($_POST['products'])) {
            foreach ($_POST['products'] as $productId) {
                if (!empty($productId)) {
                    if (isset($_POST['prices'][$productId]))
                        foreach ($_POST['prices'][$productId] as $prId => $pr)
                            $prices[] = array('count' => $pr, 'vol' => FALSE, 'id' => $prId, 'price' => FALSE);
                    if (isset($_POST['colors'][$productId]))
                        foreach ($_POST['colors'][$productId] as $clId => $cl)
                            $colors[] = array('val' => FALSE, 'title' => FALSE, 'id' => $cl);
                    $checkout[$productId] = array('prices' => $prices, 'colors' => $colors);
                }
            }
            Yii::$app->session['checkout'] = $checkout;
        } elseif (!isset($_POST['user_fname']) && isset ($_COOKIE['basket'])) {
            $products = json_decode($_COOKIE['basket'], true);
            foreach ($products['rows'] as $product) {
                //if (!empty($productId))
                    $checkout[$product['id']] = array('prices' => $product['prices']['rows'], 'colors' => $product['colors']['rows']);
            }
            Yii::$app->session['checkout'] = $checkout;
        }
        
        
        $model = new \frontend\models\CheckoutForm();
        if ($model->load(Yii::$app->request->post()) && isset($_POST['user_fname']) && $_POST['user_fname'] == '') {
            foreach (Yii::$app->session['checkout'] as $productId => $ch) {
                Yii::$app->db->createCommand()->insert('{{%checkout}}', [
                    'status' => 1,
                    'name' => $model->name,
                    'email' => $model->email,
                    'phone' => $model->phone,
                    'comment' => $model->comment,
                    'session_id' => $orderID,
                    'product_id' => $productId,
                    'prices' => json_encode($ch['prices']),
                    'colors' => json_encode($ch['colors']),
                ])->execute();
            }
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
            return $this->redirect('/cart/checkout', 302);
        }
        return $this->render('checkout', ['model' => $model, 'orderID' => $orderID]);
    }

    public function actionIndex() {
        $products = json_decode($_COOKIE['basket'], true);
        foreach ($products['rows'] as $key => $product) {
            if (empty($product['id']))
                unset($products['rows'][$key]);
        }
        //echo '<pre>';print_r($products);exit;
        return $this->render('index', ['products' => $products]);
    }

}
