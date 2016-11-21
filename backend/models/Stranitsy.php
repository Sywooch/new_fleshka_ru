<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "yu_stranitsy".
 *
 * @property integer $id
 * @property string $title
 * @property string $url
 * @property string $description
 */
class Stranitsy extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'yu_stranitsy';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'url', 'description'], 'required'],
            [['description'], 'string'],
            [['title', 'url'], 'string', 'max' => 255]
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
            'url' => 'Ссылка',
            'description' => 'Описание',
        ];
    }
}
