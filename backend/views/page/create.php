<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Pages */

$this->title = 'Создать флешку';
$this->params['breadcrumbs'][] = ['label' => 'Флешки', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pages-create">
    <h1><?= Html::encode($this->title) ?></h1>
    <?= $this->render('_form', [
        'model' => $model, 'volumes' => $volumes, 'colors' => $colors, 'cats' => $cats
    ]) ?>
</div>
