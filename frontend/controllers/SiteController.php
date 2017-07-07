<?php

namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use app\components\CController;
use \yii\data\Pagination;

/**
 * Site controller
 */
class SiteController extends CController {

    public function actions() {
        return [
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => null,
            ],
        ];
    }

    public function actionIndex() {

        return $this->render('index');
    }

    public function actionSearch($text) {
        $sql = 'SELECT
                    `pgs`.`id` AS `id`,
                    `pgs`.`old_id` AS `old_id`,
                    `pgs`.`title` AS `title`,
                    `v2p`.`price` AS `price`,
                    `pgs`.`old_id` AS `old_id`,
                    (
                            SELECT
                                    `cl2`.`image`
                            FROM
                                    `yu_color_to_page` `cl2`
                            WHERE
                                    (
                                            `cl2`.`page_id` = `pgs`.`id`
                                    )
                            ORDER BY
                                    `cl2`.`color_id`
                            LIMIT 1
                    ) AS `image`
                FROM
                        `yu_pages` pgs
                LEFT JOIN yu_volume_to_page v2p ON pgs.id = v2p.page_id';

        if (!filter_var($text, FILTER_VALIDATE_INT) === false) {
            $wh = ' WHERE `pgs`.old_id = ' . (int) $text . ' OR  pgs.title LIKE \'%' . (int) $text . '%\' LIMIT 1';
            $rows = Yii::$app->db->createCommand($sql . $wh)->queryAll();
            $pages = array();
        } else {
            $wh = ' WHERE pgs.title LIKE CONCAT(\'%\', :title, \'%\')';
            $command = Yii::$app->db->createCommand($sql . $wh);
            $command->bindParam(':title', $text);
            $rows = $command->queryAll();
            $cnt = count($rows);
            $pages = new \yii\data\Pagination(['totalCount' => $cnt, 'pageSize' => 20]);
            $rows = \Yii::$app->db->createCommand($sql . $wh . ' LIMIT ' . (int) $pages->limit . ' OFFSET ' . (int) $pages->offset)->bindParam(':title', $text)->queryAll();
        }

        \Yii::$app->view->registerMetaTag([
            'name' => 'keywords',
            'content' => ''
        ]);
        \Yii::$app->view->registerMetaTag([
            'name' => 'description',
            'content' => ''
        ]);
        return $this->render('search', ['text' => $text, 'rows' => $rows, 'pagination' => $pages,]);
    }

    public function actionContact() {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending email.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                        'model' => $model,
            ]);
        }
    }

    public function actionError() {
        header("HTTP/1.0 404 Not Found");
        $exception = Yii::$app->errorHandler->exception;

        if ($exception !== null) {
            return $this->render('error', ['exception' => $exception]);
        }
    }

}
