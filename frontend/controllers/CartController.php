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
        if (isset($_POST['products'])) {
            foreach ($_POST['products'] as $productId) {
                foreach ($_POST['prices'][$productId] as $prId => $pr)
                    $prices[] = array('count' => $pr, 'vol' => FALSE, 'id' => $prId, 'price' => FALSE);
                foreach ($_POST['colors'][$productId] as $clId => $cl)
                    $colors[] = array('val' => FALSE, 'title' => FALSE, 'id' => $cl);
                $checkout[$productId] = array('prices' => $prices, 'colors' => $colors);
            }
        } else {
            $products = json_decode($_COOKIE['basket'], true);
            foreach ($products['rows'] as $product) {
                $checkout[$product['id']] = array('prices' => $product['prices']['rows'], 'colors' => $product['colors']['rows']);
            }
        }
        Yii::$app->session['checkout'] = $checkout;
//        echo '<pre>';print_r(Yii::$app->session['checkout']);exit;
        $model = new \frontend\models\CheckoutForm();
        if ($model->load(Yii::$app->request->post()) && isset($_POST['user_fname']) && $_POST['user_fname'] == '') {
            foreach (Yii::$app->session['checkout'] as $productId => $ch) {
                Yii::$app->db->createCommand()->insert('{{%checkout}}', [
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
            \Yii::$app->getSession()->setFlash('success', 'seccess');
        }
        return $this->render('checkout', ['model' => $model, 'orderID' => $orderID]);
    }

    public function actionIndex() {
        $products = json_decode($_COOKIE['basket'], true);
        //echo '<pre>';print_r($products);exit;
        return $this->render('index', ['products' => $products]);
    }

}
