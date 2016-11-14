<?php
$sql = 'select id, title, url from {{%pages}} where parent =:parent and type =:type and active = 1 order by sort';
$childs = \Yii::$app->db->createCommand($sql)->bindValues(['parent' => $model['id'], 'type' => 'page'])->queryAll();
 $this->title = $model['meta_title'];
?>
<div class="container">
    <?php if (!empty($childs)): ?>
        <br>
        <div class="page__top-panel modified">
            <dl>
                <dt class="pos-top <?= $model['icon']; ?>"><?= $model['title']; ?></dt>
                <dd>
                    <div class="links__list three-col">
                        <?= app\widgets\lists\Services::widget(['parent' => $model['id'], 'type' => 'page']); ?>
                    </div> 
                </dd>
            </dl>
        </div>
    <?php endif; ?>
    <div class="page__in">            
        <?= $model['full_description']; ?>
    </div>
</div> 