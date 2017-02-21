<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Checkout */

$this->title = 'Заказ №' . $model['session_id'];
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
    <?php if (!empty($products)): ?>
        <h3>Флешки</h3>
        <table id="w0" class="table table-striped table-bordered detail-view">
            <tbody>
                <tr><th>Картинка</th><th>Флешка</th><td>Цены</td><td>Цвета</td></tr>
                <?php foreach ($products as $product): ?>
                    <?php $prices = json_decode($product['prices'], true); ?>
                    <?php $colors = json_decode($product['colors'], true); ?>
                    <?php
                    $sql = 'SELECT old_id, title, image FROM {{%price_list}} WHERE id = ' . $product['product_id'] . ' LIMIT 1';
                    $pr = \Yii::$app->db->createCommand($sql)->queryOne();
                    ?>
                    <tr>
                        <th>
                            <?php if (!empty($pr['old_id'])): ?>
                                <?php $url = 'http://' . str_replace('admin.', '', Yii::$app->request->serverName) . '/uploads/images/' . $pr['image']; ?>
                            <img width="100" src="<?= $url; ?>"/>
                            <?php endif; ?>
                        </th>
                        <th>
                            <?php echo $pr['title'] . ' #' . $pr['old_id']; ?>
                        </th>
                        <td>
                            <?php
                            foreach ($prices as $key => $price) {
                                $sql = 'select p.price, vl.title from yu_volume_to_page p join yu_volumes vl on vl.id = p.volume_id WHERE p.volume_id = ' . $price['id'] . ' AND p.page_id = ' . $product['product_id'];
                                $pr = \Yii::$app->db->createCommand($sql)->queryOne();
                                $itog += $price['count'] * $pr['price'];
                                echo ($key >= 1 ? '<br>' : '') . $pr['title'] . ' Гб. х ' . $price['count'] . ' = ' . ($price['count'] * $pr['price']) . ' Руб.';
                            }
                            ?>
                        </td>
                        <td>
                            <div class="btn-group" data-toggle="buttons">
                                <?php foreach ($colors as $color): ?>
                                    <label class="btn btn-success" style="background-color: <?= \app\models\Colors::findOne($color['id'])->value; ?>">                                    
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
    <?php endif; ?>
</div>
