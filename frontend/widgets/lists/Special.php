<?php

namespace app\widgets\lists;

use yii\base\Widget;
use yii\helpers\Html;
use app\components\CController;

class Special extends Widget {

    public function run() {
        $sql = 'SELECT * FROM {{%special}} LIMIT 8';
        $rows = \Yii::$app->db->createCommand($sql)->queryAll();
        return $this->render('special', ['rows' => $rows]);
    }

}
