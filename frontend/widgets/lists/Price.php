<?php

namespace app\widgets\lists;

use Yii;
use yii\base\Widget;
use yii\helpers\Html;
use app\components\CController;

class Price extends Widget {

    public $title;
    public $page_id;
    public $showModal = true;

    public function run() {
        $sql = 'SELECT * FROM {{%price_list}} WHERE page_id = ' . (int) $this->page_id . ' AND region_id = ' . (int) \Yii::$app->session['region']['id'];
        $rows = \Yii::$app->db->createCommand($sql)->queryAll();
        if (empty($rows))
            return '';
        $model = new \frontend\models\ServiceForm();
        if ($model->load(Yii::$app->request->post())) {
            Yii::$app->mailer->compose()
                ->setFrom('no-reply@uyurista.ru')
                ->setTo('marketing@uyurista.ru')
                ->setSubject('Прайс лист')
                ->setTextBody('Plain text content')
                ->setHtmlBody($model->phone . '/' . date('d.m.Y'))
                ->send();
			Yii::$app->mailer->compose()
				->setFrom('no-reply@uyurista.ru')
				->setTo('dela@uyurista.ru')
				->setSubject('Онлайн заявка')
				->setTextBody('Plain text content')
				->setHtmlBody($model->phone . '/' . date('d.m.Y'))
				->send();	
            \Yii::$app->getSession()->setFlash('success', 'seccess');
        }
        return $this->render('price', ['model' => $model, 'rows' => $rows, 'title' => $this->title, 'showModal' => $this->showModal]);
    }

}
