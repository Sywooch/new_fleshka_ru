<?php

namespace frontend\models;

use yii\base\Model;
use Yii;

class FeedbackForm extends Model {

    public $phone;
    public $name;

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            ['phone', 'required'],
            ['name', 'default'],
        ];
    }

}
