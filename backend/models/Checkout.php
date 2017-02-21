<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "yu_checkout".
 *
 * @property integer $id
 * @property integer $product_id
 * @property string $product_title
 * @property string $prices
 * @property string $colors
 * @property string $session_id
 * @property string $name
 * @property string $email
 * @property string $comment
 * @property string $phone
 */
class Checkout extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'yu_checkout';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['product_id', 'product_title', 'session_id', 'email'], 'required'],
            [['product_id'], 'integer'],
            [['product_title', 'name', 'email'], 'string', 'max' => 255],
            [['prices', 'colors', 'comment'], 'string', 'max' => 500],
            [['session_id'], 'string', 'max' => 128],
            [['phone'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'statusName' => 'Статус заказа',
            'id' => 'ID',
            'product_id' => 'Product ID',
            'product_title' => 'Product Title',
            'prices' => 'Prices',
            'colors' => 'Colors',
            'session_id' => 'Номер заказа',
            'name' => 'Имя',
            'email' => 'E-mail',
            'comment' => 'Комментарий',
            'phone' => 'Телефон',
            'date' => 'Дата',
        ];
    }

    public function getStatusFull() {
        return $this->hasOne(Status::className(), ['id' => 'status']);
    }

    public function getStatusName() {
        return $this->statusFull->title;
    }

}
