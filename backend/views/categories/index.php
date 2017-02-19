<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CategoriesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Список категорий';
$this->params['breadcrumbs'][] = $this->title;
echo Yii::$app->request->serverName;
?>
<div class="categories-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Создать', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
            'id',
            'title',
                [
                'attribute' => 'image',
                'label' => 'Картинка',
                'format' => 'html',
                'value' => function ($data) {
                    $url = 'http://' . str_replace('admin.', '', Yii::$app->request->serverName) . '/uploads/images/categories/' . $data['image'];
                    return Html::img($url, ['alt' => 'myImage', 'width' => '70', 'height' => '50']);
                }
            ],
                ['class' => 'yii\grid\ActionColumn'],
        ],
    ]);
    ?>

</div>
