<?php

namespace app\widgets\sliders;

use yii\base\Widget;
use yii\helpers\Html;
use app\components\CController;

class MainSlider extends Widget {

    public function run() {        
        return $this->render('mainSlider');
    }

}
