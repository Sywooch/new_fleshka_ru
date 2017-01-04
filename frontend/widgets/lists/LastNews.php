<?php

namespace app\widgets\lists;

use yii\base\Widget;
use yii\helpers\Html;
use app\components\CController;

class LastNews extends Widget {

    public function run() {
        $sql = 'select id, title, image, date, short_description from {{%articles}} where active = 1 order by date desc limit 2';
        $rows = \Yii::$app->db->createCommand($sql)->queryAll();
        return $this->render('lastNews', ['rows' => $rows]);
    }

}
