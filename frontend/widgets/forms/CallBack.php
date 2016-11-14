<?php

namespace app\widgets\forms;

use Yii;
use yii\base\Widget;
use yii\helpers\Html;
use app\components\CController;

class CallBack extends Widget {
    
    public $class = 'call-widget';

    public function run() {
        $model = new \frontend\models\CallBackForm();
        if ($model->load(Yii::$app->request->post())) {			
			Yii::$app->mailer->compose()
				->setFrom('no-reply@uyurista.ru')
				->setTo('marketing@uyurista.ru')
				->setSubject('Обратный звонок')
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
        return $this->render('callBack', ['model' => $model, 'class' => $this->class]);
    }

}
