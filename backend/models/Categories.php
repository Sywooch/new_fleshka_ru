<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "yu_categories".
 *
 * @property integer $id
 * @property string $title
 */
class Categories extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'yu_categories';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['title', 'parent'], 'required'],
            [['title'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => 'Айди',
            'title' => 'Название',
        ];
    }

    public function getDropdownItems($parentId = 0, $level = 0) {
        $itemsFormatted = array();
        $items = $this->find()->where(['parent' => $parentId])->asArray()->all();
        foreach ($items as $item) {
            $itemsFormatted[$item['id']] = str_repeat('&nbsp;&nbsp;&nbsp;&nbsp;', $level) . $item['title'];
            $itemsFormatted += $this->getDropdownItems($item['id'], $level + 1);
        }
        return $itemsFormatted;
    }

}
