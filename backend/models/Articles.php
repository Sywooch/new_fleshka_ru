<?php

namespace app\models;

use yii\web\UploadedFile;
use Yii;

/**
 * This is the model class for table "yu_articles".
 *
 * @property integer $id
 * @property string $title
 * @property string $short_description
 * @property string $description
 * @property string $date
 * @property integer $active
 * @property string $image
 */
class Articles extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'yu_articles';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['title', 'short_description', 'description', 'date', 'active'], 'required'],
            [['description'], 'string'],
            [['date'], 'safe'],
            [['active'], 'integer'],
            [['title', 'short_description', 'image'], 'string', 'max' => 255],
            [['image'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg, jpeg'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => 'Айди',
            'title' => 'Название',
            'short_description' => 'Краткое описание',
            'description' => 'Описание',
            'date' => 'Дата',
            'active' => 'Активный',
            'image' => 'Картинка',
        ];
    }

    public function beforeSave($insert) {
        if (parent::beforeSave($insert)) {
            $this->image = UploadedFile::getInstance($this, 'image');
            if($this->image !== null) {
                $path = Yii::getAlias('@frontend') . '/web/uploads/images/articles/';
                $file = $this->image->baseName . '.' . $this->image->extension;
                $this->image->saveAs($path . $file);
            }
            return true;
        } else {
            return false;
        }
    }

}
