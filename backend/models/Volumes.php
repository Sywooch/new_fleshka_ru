<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "yu_volumes".
 *
 * @property integer $id
 * @property string $title
 */
class Volumes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'yu_volumes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['title'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Айди',
            'title' => 'Название',
        ];
    }
}
