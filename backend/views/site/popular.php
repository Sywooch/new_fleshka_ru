<div style="width: 360px;float: left;">
    <?php \nterms\listjs\ListJs::begin([
        'id' => 'dr-list',
        'search' => true,
        'sort' => [
            'name' => [
                'label' => 'Сортировать по названию',
            ],
        ],
        'clientOptions' => [
            'valueNames' => ['name'],
        ],
    ]); ?>
    <br>
    <ul class="list popular-list"
        style="height: 500px;overflow-y: auto;background-color: rgba(67, 90, 142, 0.14);width: 350px;">
        <?php foreach ($models as $model): ?>
            <li data-id="<?= $model['id']; ?>" style="cursor: pointer;">
                <div class="name"><span><?= $model['title'] . ' #' . $model['old_id']; ?></span>
                    <button style="display: none;" type="button" class="btn btn-danger btn-xs">+</button>
                </div>
            </li>
        <?php endforeach; ?>
    </ul>

    <?php \nterms\listjs\ListJs::end(); ?>

</div>
--->
<div style="width: 50%;float: right;">
    <ul style="height: 500px;overflow-y: auto;width: 350px;background-color: rgba(67, 90, 142, 0.14);margin-left: -160px;margin-top: 53px;"
        class="added-drvs">
        <?php
        if (!empty($rows)) {
            foreach ($rows as $row) {
                echo '<li data-id="' . $row['id'] . '" style="cursor: pointer;">
                <span>' . $row['title'] . ' #' . $row['old_id'] . '</span>
            </li>';
            }
        }
        ?>
    </ul>
</div>
<div align="center">
    <button type="button" id="save-list" class="btn btn-danger btn-xs">Сохранить</button>
</div>
<style>
    #dr-list input.search {
        width: 200px;
    }

    #dr-list button.sort {
        position: absolute;
        top: 70px;
        left: 350px;
    }
</style>