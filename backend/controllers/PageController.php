<?php

namespace backend\controllers;

use Yii;
use app\models\Pages;
use app\models\PagesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * PageController implements the CRUD actions for Pages model.
 */
class PageController extends Controller {

    public function behaviors() {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['index', 'create', 'update', 'delete', 'view', 'delete-file', 'upload'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    public function actionDeleteFile($file) {
        $imageFile = Yii::getAlias('@frontend') . '/web/uploads/images/' . $file;
        unlink($imageFile);
        //$sql = "delete from {{%photo_to_color}} where `file` = '$file';";
        //\Yii::$app->db->createCommand($sql)->execute();
    }

    public function actionUpload($colorId) {
        $allowedExts = array("gif", "jpeg", "jpg", "png");
        $count = count($_FILES['file']['name']);
        for ($i = 0; $i < $count; $i++) {
            $temp = explode(".", $_FILES["file"]["name"][$i]);
            $extension = end($temp);
            if ((($_FILES["file"]["type"][$i] == "image/gif") || ($_FILES["file"]["type"][$i] == "image/jpeg") || ($_FILES["file"]["type"][$i] == "image/jpg") || ($_FILES["file"]["type"][$i] == "image/pjpeg") || ($_FILES["file"]["type"][$i] == "image/x-png") || ($_FILES["file"]["type"][$i] == "image/png")) && ($_FILES["file"]["size"][$i] < 1000000) && in_array($extension, $allowedExts)) {
                if ($_FILES["file"]["error"][$i] > 0) {
                    echo "Return Code: " . $_FILES["file"]["error"][$i] . "<br>";
                } else {
                    $filename = uniqid() . '.' . pathinfo($_FILES["file"]["name"][$i], PATHINFO_EXTENSION);
                    $path = Yii::getAlias('@frontend') . '/web/uploads/images/';
                    if (file_exists($path . $filename)) {
                        echo $filename . " already exists. ";
                    } else {
                        copy($_FILES["file"]["tmp_name"][$i], $path . $filename);
                        //\Yii::$app->db->createCommand('INSERT INTO {{%photo_to_color}} (file, color_id) VALUES (\'' . $filename . '\', ' . $colorId . ')')->execute();
                        //$image = $this->imageResize($filename, 'news', 177, 177);
                        echo '<div class="for-photo">
                                <img style="width: 70px;" alt="" src="//' . str_replace('admin.', '', $_SERVER['SERVER_NAME']) . '/uploads/images/' . $filename . '"><input type="hidden" name="images[' . $colorId . '][]" value="' . $filename . '">
                                <a href="#" class="delete-image" data-file="' . $filename . '">x</a>
                             </div>';
                    }
                }
            } else {
                echo "<script>alert('Invalid file');</script>";
            }
        }
    }

    /**
     * Lists all Pages models.
     * @return mixed
     */
    public function actionIndex() {
        $searchModel = new PagesSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Pages model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id) {
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Pages model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new Pages();
        
        $volumes = \Yii::$app->db->createCommand('select id, title from {{%volumes}}')->queryAll();
        $colors = \Yii::$app->db->createCommand('select id, title, value from {{%colors}}')->queryAll();
        $cats = \Yii::$app->db->createCommand('select id, title from {{%categories}}')->queryAll();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                        'model' => $model, 'volumes' => $volumes, 'colors' => $colors, 'cats' => $cats
            ]);
        }
    }

    /**
     * Updates an existing Pages model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id) {
        $model = $this->findModel($id);
        
        $volumes = \Yii::$app->db->createCommand('select id, title from {{%volumes}}')->queryAll();
        $colors = \Yii::$app->db->createCommand('select id, title, value from {{%colors}}')->queryAll();
        $cats = \Yii::$app->db->createCommand('select id, title from {{%categories}}')->queryAll();
        $prices = \Yii::$app->db->createCommand('select * from {{%volume_to_page}} where page_id = ' . (int) $id)->queryAll();
        $images = \Yii::$app->db->createCommand('select * from {{%color_to_page}} where page_id = ' . (int) $id)->queryAll();
        $categories = \Yii::$app->db->createCommand('select * from {{%category_to_page}} where page_id = ' . (int) $id)->queryAll();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                        'model' => $model, 'volumes' => $volumes, 'prices' => $prices, 'colors' => $colors, 'images' => $images, 'cats' => $cats, 'categories' => $categories
            ]);
        }
    }

    /**
     * Deletes an existing Pages model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id) {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Pages model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Pages the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = Pages::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
