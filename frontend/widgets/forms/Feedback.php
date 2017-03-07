<?php

namespace app\widgets\forms;

use Yii;
use yii\base\Widget;
use yii\helpers\Html;
use app\components\CController;

class Feedback extends Widget {

    public function run() {
        $model = new \frontend\models\FeedbackForm();
        if ($model->load(Yii::$app->request->post()) && isset($_POST['user_fname']) && $_POST['user_fname'] == '') {
            Yii::$app->mailer->compose()
                    ->setFrom('no-reply@fleshka.ru')
                    ->setTo('sale@fleshka.ru')
                    //->setTo('dilshod-x@mail.ru')
                    ->setTo('alex@fleshka.ru')
                    ->setSubject('Fleshka.ru - Заказать званок')
                    ->setTextBody('Заказать званок')
                    ->send();
            \Yii::$app->getSession()->setFlash('success', 'seccess');
        }
        return $this->render('feedback', ['model' => $model]);
    }

}
