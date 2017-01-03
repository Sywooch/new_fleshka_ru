<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CheckoutSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Заказы';
$this->params['breadcrumbs'][] = $this->title;
//print_r(yii\helpers\ArrayHelper::map(app\models\Status::find()->all(), 'id', 'title'));
?>
<div class="checkout-index">

    <h1><?= Html::encode($this->title) ?></h1>    

    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            //'product_id',
            //'product_title',
            //'prices',
            //'colors',            
            'session_id',
            'name',
            'email:email',
            //'status',
            [
                'attribute' => 'statusName',
                //'format' => 'html',
                'value' => 'statusName',
                'filterInputOptions' => ['class' => 'form-control',],
                'filter' => yii\bootstrap\Html::activeDropDownList($searchModel, 'statusName', yii\helpers\ArrayHelper::map(app\models\Status::find()->asArray()->all(), 'id', 'title'), ['multiple' => false]),
            ],
            // 'comment',
            // 'phone',
            ['class' => 'yii\grid\ActionColumn', 'template' => '{view} {delete}',
                'buttons' => [
                    'view' => function ($url, $model) {
                        $url = \yii\helpers\Url::toRoute(['checkout/view', 'id' => $model->session_id]);
                        return Html::a('<span class="glyphicon glyphicon-eye-open"></span>', $url, ['title' => Yii::t('app', 'Info'),]);
                    }
                        ],],
                ],
            ]);
            ?>

</div>
