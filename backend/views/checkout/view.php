<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Checkout */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Checkouts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="checkout-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?=
        Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ])
        ?>
    </p>

    <?=
    DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            //'product_id',
            //'product_title',
            //'prices',
            //'colors',
//            [
//                'label' => 'colors',
//                'value' => $model->colors,
//            ],
            'session_id',
            'name',
            'email:email',
            'comment',
            'phone',
        ],
    ])
    ?>

    <table id="w0" class="table table-striped table-bordered detail-view">
        <tbody>
            <?php foreach ($products as $product): ?>
            <tr><th><?php echo \app\models\Pages::findOne($product['product_id'])->title; ?></th><td>4</td></tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</div>
