<?php

namespace app\components;

use yii\web\UrlRule;
use Yii;

class MainUrlRule extends UrlRule {

    public $connectionID = 'db';

    public function init() {
        if ($this->name === null) {
            $this->name = __CLASS__;
        }
    }

    public function createUrl($manager, $route, $params) {

        return false;
    }

    public function parseRequest($manager, $request) {
        $pathInfo = strtolower($request->getPathInfo());
        if (empty($pathInfo))
            $pathInfo = '/';
        $page = $this->getPage($pathInfo);
		
        if (empty($page))
            return ['site/error', []];
        else {
            return $this->turnToController($page);
        }
    }

    protected function turnToController($pageInfo) {
        if (empty($pageInfo))
            return ['site/error', []];
        return [$pageInfo['action'], ['data' => $pageInfo]];
    }

    private function getPage($url) {
        $sql = 'select * from {{%pages}} where lower(url) =:url limit 1';
        return Yii::$app->db->createCommand($sql)->bindValues(['url' => $url])->queryOne();
    }

}
