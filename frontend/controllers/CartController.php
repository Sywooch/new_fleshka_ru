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
        echo '<pre>';print_r($_POST);exit;
        if (isset($_POST['products'])) {
            foreach ($_POST['products'] as $productId) {
                $prices[] = array('count', 'vol', 'id', 'price');$_POST['prices'][$productId];
                $colors[] = array('val', 'title', 'id');$_POST['colors'][$productId];
                $checkout[$productId] = array('prices' => $prices, 'colors' => $colors);
            }
            
        } else {
            $products = json_decode($_COOKIE['basket'], true);
            echo '<pre>';print_r($products);exit;
            foreach ($products['rows'] as $product) {                
                $checkout[$product['id']] = array('prices' => $product['prices']['rows'], 'colors' => $product['colors']['rows']);
            }
        }
        Yii::$app->session['checkout'] = $checkout;
        $model = new \frontend\models\CheckoutForm();
        if ($model->load(Yii::$app->request->post())) {
            \Yii::$app->getSession()->setFlash('success', 'seccess');
        }
//        Yii::$app->db->createCommand()->insert('checkout', [
//            'name' => 'Sam',
//            'email' => 30,
//        ])->execute();
//        echo Yii::$app->session->getId();
        return $this->render('checkout');
    }

    public function actionIndex() {
        $products = json_decode($_COOKIE['basket'], true);
        //echo '<pre>';print_r($products);exit;
        return $this->render('index', ['products' => $products]);
    }

}
