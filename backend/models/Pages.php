<?php

namespace app\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "{{%pages}}".
 *
 * @property integer $id
 * @property string $title
 * @property string $url
 * @property string $description
 * @property string $full_description
 * @property integer $active
 * @property integer $sort
 * @property string $meta_key
 * @property string $meta_desc
 * @property string $meta_title
 * @property string $meta_h1
 * @property string $image
 * @property string $type
 */
class Pages extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return '{{%pages}}';
    }

    public $arr;
    //public $in_stock;

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['title', 'sort', 'type', ], 'required'],
            [['url'], 'default', 'value' => null],
            [['description'], 'string'],
            [['active', 'in_stock', 'sort', 'price'], 'integer'],
            [['title'], 'string', 'max' => 1000],
            [['url', 'meta_key', 'meta_title', 'meta_h1'], 'string', 'max' => 255],
            [['meta_desc'], 'string', 'max' => 500],
            ['old_id', 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => 'Айди',
            'title' => 'Название',
            'url' => 'Ссылка',
            'description' => 'Описание',
            'in_stock' => 'На складе',
            //'full_description' => 'Full Description',
            'active' => 'Включена ли флешка',
            'sort' => 'Сортировка',
            'meta_key' => 'Meta Key',
            'meta_desc' => 'Meta Desc',
            'meta_title' => 'Meta Title',
            'meta_h1' => 'Meta H1',
            //'image' => 'Image',
            'type' => 'Тип',
            'price' => 'Цена для упаковки',
            'old_id' => 'Номер'
        ];
    }

    public function getParent() {
        return $this->hasOne(Pages::className(), ['id' => 'parent']);
    }

    public function getParentName() {
        return $this->parent->page_title;
    }

    function build_tree($arrs, $parent_id = 0, $level = 0) {
        if ($level == 0)
            $this->arr[0] = 'Нет';
        foreach ($arrs as $arr) {
            if ($arr['parent'] == $parent_id) {
                $this->arr[$arr['id']] = str_repeat("-", $level) . " " . $arr['title'];
                $this->build_tree($arrs, $arr['id'], ++$level);
            }
        }
        return $this->arr;
    }

    public function afterSave($insert, $changedAttributes) {
        parent::afterSave($insert, $changedAttributes);
        if (isset($_POST['images'])) {
            \Yii::$app->db->createCommand('delete from {{%color_to_page}} where page_id = ' . $this->id)->execute();
            foreach ($_POST['images'] as $colorId => $images) {
                foreach ($images as $image) {
                    \Yii::$app->db->createCommand('INSERT INTO {{%color_to_page}} (page_id, color_id, image) VALUES (' . $this->id . ', ' . $colorId . ', \'' . $image . '\')')->execute();
                }
            }
        }
        if (isset($_POST['volume'])) {
            \Yii::$app->db->createCommand('delete from {{%volume_to_page}} where page_id = ' . $this->id)->execute();
            foreach ($_POST['volume'] as $key => $volume) {
                if (isset($_POST['price'][$key]) && isset($_POST['price2'][$key]))
                    \Yii::$app->db->createCommand('INSERT INTO {{%volume_to_page}} (volume_id, page_id, price, price_pz) VALUES (' . $volume . ', ' . $this->id . ', ' . (empty($_POST['price'][$key]) ? 0 : $_POST['price'][$key]) . ', ' . (empty ($_POST['price2'][$key]) ? 0 : $_POST['price2'][$key]) . ')')->execute();
            }
        }
        if (isset($_POST['categories'])) {
            \Yii::$app->db->createCommand('delete from {{%category_to_page}} where page_id = ' . $this->id)->execute();
            foreach ($_POST['categories'] as $key => $category) {
                \Yii::$app->db->createCommand('INSERT INTO {{%category_to_page}} (category_id, page_id) VALUES (' . $category . ', ' . $this->id . ')')->execute();
            }
            $sql = 'UPDATE yu_categories ct SET cnt = (SELECT COUNT(*) FROM yu_category_to_page c2p WHERE c2p.category_id = ct.id GROUP BY c2p.category_id);';
            \Yii::$app->db->createCommand($sql)->execute();
        }
        if($insert) {
            $old_id = \Yii::$app->db->createCommand('SELECT MAX(old_id) as old_id FROM {{%pages}}')->queryOne();
            $old_id = $old_id['old_id'];
            \Yii::$app->db->createCommand('UPDATE {{%pages}} SET old_id = ' . ++$old_id . ' where id = ' . $this->id)->execute();
        }        
    }

    public function beforeSave($insert) {
        if (parent::beforeSave($insert)) {
            return true;
        } else {
            return false;
        }
    }

}
