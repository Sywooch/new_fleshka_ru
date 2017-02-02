<?php

namespace app\widgets\menu;

use yii\base\Widget;
use yii\helpers\Html;
use app\components\CController;

class MainMenu extends Widget {

    public $mobile = false;

    public function run() {
        $rows = \Yii::$app->db->createCommand('SELECT * from {{%categories}}')->queryAll();
        
        $menu = $this->buildNavigation($rows);

        return $this->render('mainMenu', ['menu' => $menu, 'mobile' => $this->mobile]);
    }

    private function hasChild($id, $rows) {
        $hasChild = false;
        foreach ($rows as $row) {
            if ($row['parent'] == $id)
                $hasChild = true;
        }
        return $hasChild;
    }

    function buildNavigation($items, $parent = 0) {
        $hasChildren = false;
        $outputHtml = ($parent > 0 ? '<div class="nav-sublist level1 z-index-1000 width-400">' : '') . '<ul>%s</ul>' . ($parent > 0 ? '</div>' : '');
        $childrenHtml = '';
        foreach ($items as $item) {
            if ($item['parent'] == $parent) {
                $hasChildren = true;
                $url = $this->hasChild($item['id'], $items) ? '/catalog/' . $item['id'] : '/category/' . \app\components\CController::ru2lat($item['title']) . '-' . $item['id'];
                $childrenHtml .= '<li class="menu-item menu-left' . ($item['parent'] == 0 && $this->hasChild($item['id'], $items) ? ' menu-item-has-children menu-parent-item' : '') . '"><a class="' . ($parent > 0 ? 'level2' : 'level1') . '" href="' . $url . '" data-id="' . $item['id'] . '"><span>' . $item['title'] . '</span></a>';
                $childrenHtml .= $this->buildNavigation($items, $item['id']);
                $childrenHtml .= '</li>';
            }
        }
        if (!$hasChildren) {
            $outputHtml = '';
        }
        return sprintf($outputHtml, $childrenHtml);
    }

}
