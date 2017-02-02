<?php

namespace app\models;

use Yii;
use yii\web\UploadedFile;

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
    
    public function beforeSave($insert) {
        if (parent::beforeSave($insert)) {
            $this->image = UploadedFile::getInstance($this, 'image');
            $path = Yii::getAlias('@frontend') . '/web/uploads/images/categories/';
            $file = $this->image->baseName . '.' . $this->image->extension;
            $this->image->saveAs($path . $file);
            return true;
        } else {
            return false;
        }
    }

}
