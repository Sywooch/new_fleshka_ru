<?php

namespace app\widgets\lists;

use yii\base\Widget;
use yii\helpers\Html;

class BreadCrumbs extends Widget {

    public $urls = [];

    public function run() {
        if (!empty($this->urls)) {
            return $this->render('breadCrumbs', ['breadCrumbs' => $this->urls, 'count' => count($this->urls)]);
        }
    }

}
