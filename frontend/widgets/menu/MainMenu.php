<?php

namespace app\widgets\menu;

use yii\base\Widget;
use yii\helpers\Html;
use app\components\CController;

class MainMenu extends Widget {

    public $mobile = false;

    public function run() {
        $rows = \Yii::$app->db->createCommand('SELECT * from {{%categories}}')->queryAll();
        return $this->render('mainMenu', ['rows' => $rows, 'mobile' => $this->mobile]);
    }

}
