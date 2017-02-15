<?php

namespace frontend\models;

use yii\base\Model;
use Yii;

class CallBackForm extends Model {

    public $phone;
    public $name;
    public $message;
    public $email;

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            ['phone', 'required'],
            [['name', 'email', 'message'], 'default'],
            ['email', 'email'],
        ];
    }

}
