<?php

namespace backend\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use common\models\LoginForm;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * Site controller
 */
class SiteController extends Controller
{

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index', 'url', 'popular'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function actionPopular()
    {

        $tblName = '';
        if (isset($_GET['p']) && $_GET['p'] == 'popular') {
            $tblName = 'popular_pages';
            $sql = 'SELECT * FROM {{%popular}} LIMIT 8';
        } elseif (isset($_GET['p']) && $_GET['p'] == 'special') {
            $tblName = 'special_pages';
            $sql = 'SELECT * FROM {{%special}} LIMIT 8';
        }
        if (isset($_POST['result'])) {
            if (!empty($tblName)) {
                foreach ($_POST['result'] as $id) {
                    $sql = 'INSERT INTO {{%' . $tblName . '}} (page_id) VALUES(' . (int) $id . ')';
                    $models = \Yii::$app->db->createCommand($sql)->execute();
                }
            }
            echo 'success';
            exit;
        }
        $rows = \Yii::$app->db->createCommand($sql)->queryAll();
        $wh = '';
        if (!empty($rows)) {
            $notIN = [];
            foreach ($rows as $row) {
                $notIN[] = $row['id'];
            }
            $wh = ' WHERE id NOT IN(' . implode(',', $notIN) . ')';
        }
        $sql = 'SELECT title, id, old_id FROM {{%pages}}' . $wh . ' ORDER BY id DESC';
        $models = \Yii::$app->db->createCommand($sql)->queryAll();

        return $this->render('popular', [
            'models' => $models,
            'rows' => $rows,
        ]);
    }

    public function actionUrl()
    {
        $uploadedFile = UploadedFile::getInstanceByName('upload');
        $mime = \yii\helpers\FileHelper::getMimeType($uploadedFile->tempName);
        $file = time() . "_" . $uploadedFile->name;

        $url = Yii::$app->urlManager->createAbsoluteUrl('/uploads/ckeditor/' . $file);
        $uploadPath = Yii::getAlias('@frontend') . '/web/uploads/ckeditor/' . $file;
        //extensive suitability check before doing anything with the file…
        if ($uploadedFile == null) {
            $message = "No file uploaded.";
        } else if ($uploadedFile->size == 0) {
            $message = "The file is of zero length.";
        } else if ($mime != "image/jpeg" && $mime != "image/png") {
            $message = "The image must be in either JPG or PNG format. Please upload a JPG or PNG instead.";
        } else if ($uploadedFile->tempName == null) {
            $message = "You may be attempting to hack our server. We're on to you; expect a knock on the door sometime soon.";
        } else {
            $message = "";
            $move = $uploadedFile->saveAs($uploadPath);
            if (!$move) {
                $message = "Error moving uploaded file. Check the script is granted Read/Write/Modify permissions.";
            }
        }
        $funcNum = $_GET['CKEditorFuncNum'];
        echo "<script type='text/javascript'>window.parent.CKEDITOR.tools.callFunction($funcNum, '$url', '$message');</script>";
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

}
