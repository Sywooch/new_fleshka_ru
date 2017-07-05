<?php

namespace console\controllers;

class SmsController extends \yii\console\Controller {

    private function send($numbers, $message) {
        $username = "br.dilshod@gmail.com";
        $hash = "c9b555069e1b0b8683bc84ec7044086cd73c7c58b8e31e0df351820fa5cf2775";
        $test = "0";
        $sender = "API Test";
        $message = urlencode($message);
        $data = "username=" . $username . "&hash=" . $hash . "&message=" . $message . "&sender=" . $sender . "&numbers=" . $numbers . "&test=" . $test;
        $ch = curl_init('http://api.txtlocal.com/send/?');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        curl_close($ch);
    }

    public function actionIndex() {
        ini_set("display_errors", false);
        error_reporting(false);
        set_time_limit(0);
        $s = 'SELECT * FROM `yu_categories` where id > 5147;';
        $models = \Yii::$app->db->createCommand($s)->queryAll();
        $u = 'http://www.100zakazov.ru/published/publicdata/U45716/attachments/SC/products_pictures/';
        foreach ($models as $model) {
            try {
                $path = \Yii::getAlias('@frontend') . '/web/uploads/images/categories/';                
                copy($u . '' . str_replace(' ', '%20', $model['image']), $path . $model['image']);
                echo $u . '' . $model['image'] . ' -> ' . $path . $model['image'], "\r\n";
            } catch (Exception $ex) {
                continue;
            }
        }exit;
    }

}
