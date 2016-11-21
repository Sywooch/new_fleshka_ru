<?php

namespace app\components;

use Yii;

class CController extends \yii\web\Controller {

    public static $menu = [];

    public function beforeAction($event) {

        $sql = 'select title, url, id from {{%pages}} WHERE type=\'category\' and active = 1';
        $models = \Yii::$app->db->createCommand($sql)->queryAll();
        $rows = [];
        foreach ($models as $key => $model) {
            if ($model['parent'] == 0) {
                $rows[$key] = $model;
                $rows[$key]['catChilds'] = $this->search($models, 'parent', $model['id']);
            }
        }
        self::$menu = $rows;
        unset($rows);

        //Yii::$app->ipgeobase->updateDB();
        $userIP = Yii::$app->getRequest()->getUserIP();
        $userRegionInfo = Yii::$app->ipgeobase->getLocation($userIP, true);
        if (empty(Yii::$app->session['region'])) {
            $regions = Yii::$app->params['regions'];
            if (!empty($userRegionInfo->city)) {
                if (isset($userRegionInfo->city)) {
                    foreach ($regions as $region) {
                        if (stripos($region['title'], $userRegionInfo->city) !== false) {
                            $this->setRegion($region['id']);
                            break;
                        }
                    }
                }
            } else {
                $this->setRegion(1);
            }
        }
        
        if (isset($_GET['region'])) {
            $this->setRegion((int) $_GET['region']);
            header('Location: /' . Yii::$app->request->pathInfo);
            exit;
            //return Yii::$app->response->redirect('/' . Yii::$app->request->pathInfo);
        }
        return parent::beforeAction($event);
    }

    public function getRegion() {
        $regions = Yii::$app->params['regions'];
        return !empty(Yii::$app->session['region']) ? Yii::$app->session['region'] : $regions[1];
    }

    public function setRegion($regionID) {
        $regions = Yii::$app->params['regions'];
        Yii::$app->session['region'] = $regions[$regionID];
        if (Yii::$app->session['region'] === $regions[$regionID])
            return true;
        else
            return false;
    }

    public function search($array, $key, $value) {
        $results = [];
        if (is_array($array)) {
            if (isset($array[$key]) && $array[$key] == $value)
                $results[] = $array;
            foreach ($array as $subarray)
                $results = array_merge($results, $this->search($subarray, $key, $value));
        }
        return $results;
    }

}
