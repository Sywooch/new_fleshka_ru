<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "yu_colors".
 *
 * @property integer $id
 * @property string $title
 * @property string $value
 */
class Colors extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'yu_colors';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'value'], 'required'],
            [['title', 'value'], 'string', 'max' => 255]
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
            'value' => 'Value',
        ];
    }
}
