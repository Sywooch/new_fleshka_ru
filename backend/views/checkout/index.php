<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CheckoutSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Checkouts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="checkout-index">

    <h1><?= Html::encode($this->title) ?></h1>    

    <?= GridView::widget([
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
            'status',
            // 'comment',
            // 'phone',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
