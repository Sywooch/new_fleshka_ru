<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Checkout */

$this->title = 'Заказ №' . $model->session_id;
$this->params['breadcrumbs'][] = ['label' => 'Заказы', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
$itog = 0;
?>
<div class="checkout-view">

    <h1><?= Html::encode($this->title) ?></h1>


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
    <h3>Флешки</h3>
    <table id="w0" class="table table-striped table-bordered detail-view">
        <tbody>
            <tr><th>Флешка</th><td>Цены</td><td>Цвета</td></tr>
            <?php foreach ($products as $product): ?>
                <?php $prices = json_decode($product['prices'], true); ?>
                <?php $colors = json_decode($product['colors'], true); ?>
                <tr>
                    <th><?php echo \app\models\Pages::findOne($product['product_id'])->title; ?></th>
                    <td>
                        <?php
                        foreach ($prices as $key => $price) {
                            $itog += $price['count'] * $price['price'];
                            echo ($key >= 1 ? '<br>' : '') . $price['vol'] . ' Гб. х ' . $price['count'] . ' = ' . ($price['count'] * $price['price']) . ' Руб.';
                        }
                        ?>
                    </td>
                    <td>
                        <div class="btn-group" data-toggle="buttons">
                            <?php foreach ($colors as $color): ?>
                                <label class="btn btn-success" style="background-color: <?= $color['val']; ?>">                                    
                                    <span class="glyphicon "></span>
                                </label>
                            <?php endforeach; ?>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <h1>Итого <?= $itog . ' Руб.' ?></h1>
</div>
