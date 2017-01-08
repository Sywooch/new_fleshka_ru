<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\ckeditor\CKEditor;
use kartik\file\FileInput;
use kartik\select2\Select2;
use dosamigos\datetimepicker\DateTimePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Pages */
/* @var $form yii\widgets\ActiveForm */
?>
<?php
$data = [
    'fleshka' => 'Флешка',
    'upakovka' => 'Упаковка',
//    'articles' => 'Статья',
//    'vacancies' => 'Вакансии',
//    'info' => 'Информационная страница',
//    'service' => 'Услуги',
//    'contact' => 'Контакт',
//    'category' => 'Категория',
//    'page' => 'Страница',
//    'brand' => 'Бренд',
];
$options = '';
foreach ($volumes as $volume) {
    $options .= '<option value="' . $volume['id'] . '">' . $volume['title'] . ' Гб</option>';
}
$opColor = '';
foreach ($colors as $color) {
    $opColor .= '<option value="' . $color['id'] . '">' . $color['title'] . '</option>';
}
$catOptions = '';
foreach ($cats as $cat) {
    $catOptions .= '<option value="' . $cat['id'] . '">' . $cat['title'] . '</option>';
}
?>
<div class="pages-form">

    <?php $form = ActiveForm::begin(); ?>

    <?=
    $form->field($model, 'type')->widget(Select2::classname(), [
        'data' => $data,
        'language' => 'ru',
        'options' => ['placeholder' => '--'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);
    ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>

    <?=
    $form->field($model, 'description')->widget(CKEditor::className(), [
        'options' => ['rows' => 6],
        'preset' => 'full',
        'clientOptions' => [
            'filebrowserUploadUrl' => '/site/url',
            'allowedContent' => true,
        ]
    ])
    ?>
    <hr/>
    <div class="form-group field-pages-meta_key">
        <label class="control-label" for="pages-meta_key">Обемы и цены:</label>
        <br>
        <button type="button" id="add-pr" class="btn btn-danger">Добавить</button>
        <br><br>
        <div class="prices">
            <?php
            if (isset($prices)) {
                foreach ($prices as $price) {
                    $options = '';
                    foreach ($volumes as $volume) {
                        $options .= '<option value="' . $volume['id'] . '"' . ($volume['id'] == $price['volume_id'] ? ' selected' : '') . '>' . $volume['title'] . ' Гб</option>';
                    }
                    echo '<div class="row add-me"><div class="col-xs-2"><label>Обем:</label><select class="form-control" name="volume[]">' . $options . '</select></div><div class="col-xs-2"><label>Цена со склада:</label><input class="form-control" value="' . $price['price'] . '" type="text" name="price[]"></div><div class="col-xs-2"><label>Цена под заказ:</label><input class="form-control" type="text" value="' . $price['price_pz'] . '" name="price2[]"></div><img class="remove-section" style="cursor: pointer;position: absolute;display: block;margin-left: 576px;margin-top: 26px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAExklEQVRYR8WXbWxTVRjH/8+527qt63opxmRxi0pMFNDNAEZMRElQ56IxBINohEi7yeSlLcMohoAuhmE0bmTdkNfdzQ8QM1Q0xETeviBGBxogCkGEoBBElNF2Xffe85h7YXVjtz1zaDyfbtrn/39+57n3nPMcwv886J/kjy9aXzCQEI9J5mkATRAgHcQMSREQzoLoiEaJA3nbll8era8SgMHUsTBUJgWqGDxLQKTVSAkpBPYCqHUb/gME4nQwac1iFesnShabmWnGaGc0NI7B+wVlLHY3LT2TSp8SIFpev4CZNgPIGUvypCYhO6FpC3XD/4mdjy1A2Fe/gkC1N5V4iFhCsoC2RDf8m270HAEQ9jZ4idj4t5IP9+F5uhFsHfrbMICwL1TCEm1CwPGfAEjZJaBNzW/xnxr0TwLw3Fbtau5v32qamKZMToSsRyZDKxxvhSbO/4m+QyeBtN/7dVdJB90ty2YOro4kQNQbeoEJO5TJAYjxLuStfg49u49Y4dmzH0RszXZwtGs0ckjCM56mwG4zOAkQ8YW+AzDVziFrVgkcT9wPysoA9/TD3AqE7gToutzci8JxgBmUnQnuG0Dv3mPoO3DcHkjSQb3F/2gSIOYNTUoQTqRcq85saEW3IKficcTf+9QKo7xskCPTejahON5jPTvfeBbdm/YgcbE9+ZudL8vEneNaqn6xphD2NlQRcV26+pmzd9W/jI7FG9OW2b1lKaJmTEIqXgdX6kZwiwVwtTz0kWDMU73A/MZKxF5rBnf32YaaVXHVLEBHcKvKyqxbs24EfRZAxBf6HsAUlcq1dj7iG76AvBS2DdVuG4+cylJ0vqn+lgk45DYCM65VwNdwVoAnqACcr89B7+dtGPjpom1oxqQiOMqmIl77mcrKPKJOuJsD9w5W4ByAO1Sq3EWl6D9+Dv1tp21DMx+6B5mTi9C1bZ/KCoA8pRvLJw4CmOulWKXKnvcwOBxH796jtqGOsikgZw56Pv5aZQUJavMY/umDALsAzFapHKVTQO4c9LTaJ8h+fga4PYbefcdUVuaesUNvDr5oAUR9DWsY/LZKlTn9bmTedzu6tpr9xsiRW/kk+o+eRf/hn1VWYPCr44xg3TWAitB0lvhGpcqYWAjHUw8g/r5ZsJHDuXIOene1YeC0/Uc6VCElFXta/D9YAGbbFfY1nlGtBFHggXNpGWKrt9sCuNYtQLx+N+TlSPq5JPCj+0N/sXkgDT2MAkyoT6ekXAdc776EDv8W27D8D15BrKoJ3NufFoAJ5eOaAlbPkQS4MLcux+XKOKlajq6a+Uj8HrEOnmHDPKBudaMzRXX+jpWn3LFICe2strbTYQ1J1NtQysRfpsM3k5g7nt1IXLgCeaUjpdzsmAHM9LQEvhoMGtGSRXyhGgCrVB/kmP4nXqU3Bd8Zqh0BwNXVIvqrZysIvjElSSFiRqPe7A/ceE+w7YotiPOedQBW3iyE2RFr0N7KN5attbukpL2YdHgbn5ZSboSGwjGBSHkOQizSjcD+VHrl1eyPJRvysrrlEmZeTgIFowS5wEBdZ2xgc9HOFd1pl/YoDWF2zdH8SzOR4FKQmAbCXZDQIcx9DBGQPAPQYRZij17YfpCqq1UtkZVaWYHRAo417i8ccL8wqxuJewAAAABJRU5ErkJggg=="></div>';
                }
            }
            ?>
        </div>
    </div>    
    <hr/>
    <div class="form-group field-pages-meta_key">
        <label class="control-label" for="pages-meta_key">Цвета и фотографии флешки:</label>
        <br>
        <button type="button" id="add-color" class="btn btn-danger">Новый цвет</button>
        <br><br>
        <div class="colors">
            <?php
            if (isset($images)) {
                $colorGroup = array();
                foreach ($images as $image) {
                    $colorGroup[$image['color_id']][] = $image;
                }
                foreach ($colorGroup as $colorId => $imgs) {
                    $opColor = '';
                    foreach ($colors as $color) {
                        $opColor .= '<option value="' . $color['id'] . '"' . ($color['id'] == $colorId ? ' selected' : '') . '>' . $color['title'] . '</option>';
                    }
                    echo '<br><div class="row add-me" style="border: 1px solid #e3e3e3;border-radius: 5px;"><div class="col-xs-2"><label>Цвет:</label><select class="form-control" name="volume[]">' . $opColor . '</select></div><div class="col-xs-2"><label>Картинки:</label><input class="form-control fileToUpload" type="file" name="file" multiple><div class="photos">';
                    foreach ($imgs as $img) {
                        echo '<div class="for-photo">
                                <img style="width: 70px;" alt="" src="//' . str_replace('admin.', '', $_SERVER['SERVER_NAME']) . '/uploads/images/' . $img['image'] . '"><input type="hidden" name="images[' . $colorId . '][]" value="' . $img['image'] . '">
                                <a href="#" class="delete-image" data-file="' . $img['image'] . '">x</a>
                             </div>';
                    }
                    echo '</div></div><img class="remove-color-images" style="cursor: pointer;position: absolute;display: block;margin-left: 576px;margin-top: 26px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAExklEQVRYR8WXbWxTVRjH/8+527qt63opxmRxi0pMFNDNAEZMRElQ56IxBINohEi7yeSlLcMohoAuhmE0bmTdkNfdzQ8QM1Q0xETeviBGBxogCkGEoBBElNF2Xffe85h7YXVjtz1zaDyfbtrn/39+57n3nPMcwv886J/kjy9aXzCQEI9J5mkATRAgHcQMSREQzoLoiEaJA3nbll8era8SgMHUsTBUJgWqGDxLQKTVSAkpBPYCqHUb/gME4nQwac1iFesnShabmWnGaGc0NI7B+wVlLHY3LT2TSp8SIFpev4CZNgPIGUvypCYhO6FpC3XD/4mdjy1A2Fe/gkC1N5V4iFhCsoC2RDf8m270HAEQ9jZ4idj4t5IP9+F5uhFsHfrbMICwL1TCEm1CwPGfAEjZJaBNzW/xnxr0TwLw3Fbtau5v32qamKZMToSsRyZDKxxvhSbO/4m+QyeBtN/7dVdJB90ty2YOro4kQNQbeoEJO5TJAYjxLuStfg49u49Y4dmzH0RszXZwtGs0ckjCM56mwG4zOAkQ8YW+AzDVziFrVgkcT9wPysoA9/TD3AqE7gToutzci8JxgBmUnQnuG0Dv3mPoO3DcHkjSQb3F/2gSIOYNTUoQTqRcq85saEW3IKficcTf+9QKo7xskCPTejahON5jPTvfeBbdm/YgcbE9+ZudL8vEneNaqn6xphD2NlQRcV26+pmzd9W/jI7FG9OW2b1lKaJmTEIqXgdX6kZwiwVwtTz0kWDMU73A/MZKxF5rBnf32YaaVXHVLEBHcKvKyqxbs24EfRZAxBf6HsAUlcq1dj7iG76AvBS2DdVuG4+cylJ0vqn+lgk45DYCM65VwNdwVoAnqACcr89B7+dtGPjpom1oxqQiOMqmIl77mcrKPKJOuJsD9w5W4ByAO1Sq3EWl6D9+Dv1tp21DMx+6B5mTi9C1bZ/KCoA8pRvLJw4CmOulWKXKnvcwOBxH796jtqGOsikgZw56Pv5aZQUJavMY/umDALsAzFapHKVTQO4c9LTaJ8h+fga4PYbefcdUVuaesUNvDr5oAUR9DWsY/LZKlTn9bmTedzu6tpr9xsiRW/kk+o+eRf/hn1VWYPCr44xg3TWAitB0lvhGpcqYWAjHUw8g/r5ZsJHDuXIOene1YeC0/Uc6VCElFXta/D9YAGbbFfY1nlGtBFHggXNpGWKrt9sCuNYtQLx+N+TlSPq5JPCj+0N/sXkgDT2MAkyoT6ekXAdc776EDv8W27D8D15BrKoJ3NufFoAJ5eOaAlbPkQS4MLcux+XKOKlajq6a+Uj8HrEOnmHDPKBudaMzRXX+jpWn3LFICe2strbTYQ1J1NtQysRfpsM3k5g7nt1IXLgCeaUjpdzsmAHM9LQEvhoMGtGSRXyhGgCrVB/kmP4nXqU3Bd8Zqh0BwNXVIvqrZysIvjElSSFiRqPe7A/ceE+w7YotiPOedQBW3iyE2RFr0N7KN5attbukpL2YdHgbn5ZSboSGwjGBSHkOQizSjcD+VHrl1eyPJRvysrrlEmZeTgIFowS5wEBdZ2xgc9HOFd1pl/YoDWF2zdH8SzOR4FKQmAbCXZDQIcx9DBGQPAPQYRZij17YfpCqq1UtkZVaWYHRAo417i8ccL8wqxuJewAAAABJRU5ErkJggg=="></div>';
                }
            }
            ?>
        </div>
    </div>
    <hr/>
    <div class="form-group field-pages-meta_key">
        <label class="control-label" for="pages-meta_key">Выводить в каталоги:</label>
        <br>
        <button type="button" id="add-category" class="btn btn-danger">Добавить</button>
        <br><br>
        <div class="categories">
            <?php
            if (isset($categories)) {
                foreach ($categories as $category) {
                    $catOptions = '';
                    foreach ($cats as $cat) {
                        $catOptions .= '<option value="' . $cat['id'] . '"' . ($cat['id'] == $category['category_id'] ? ' selected' : '') . '>' . $cat['title'] . '</option>';
                    }
                    echo '<div class="row add-me"><div class="col-xs-4"><label>Категория:</label><select class="form-control" name="categories[]">' . $catOptions . '</select></div><img class="remove-section" style="cursor: pointer;position: absolute;display: block;margin-left: 576px;margin-top: 26px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAExklEQVRYR8WXbWxTVRjH/8+527qt63opxmRxi0pMFNDNAEZMRElQ56IxBINohEi7yeSlLcMohoAuhmE0bmTdkNfdzQ8QM1Q0xETeviBGBxogCkGEoBBElNF2Xffe85h7YXVjtz1zaDyfbtrn/39+57n3nPMcwv886J/kjy9aXzCQEI9J5mkATRAgHcQMSREQzoLoiEaJA3nbll8era8SgMHUsTBUJgWqGDxLQKTVSAkpBPYCqHUb/gME4nQwac1iFesnShabmWnGaGc0NI7B+wVlLHY3LT2TSp8SIFpev4CZNgPIGUvypCYhO6FpC3XD/4mdjy1A2Fe/gkC1N5V4iFhCsoC2RDf8m270HAEQ9jZ4idj4t5IP9+F5uhFsHfrbMICwL1TCEm1CwPGfAEjZJaBNzW/xnxr0TwLw3Fbtau5v32qamKZMToSsRyZDKxxvhSbO/4m+QyeBtN/7dVdJB90ty2YOro4kQNQbeoEJO5TJAYjxLuStfg49u49Y4dmzH0RszXZwtGs0ckjCM56mwG4zOAkQ8YW+AzDVziFrVgkcT9wPysoA9/TD3AqE7gToutzci8JxgBmUnQnuG0Dv3mPoO3DcHkjSQb3F/2gSIOYNTUoQTqRcq85saEW3IKficcTf+9QKo7xskCPTejahON5jPTvfeBbdm/YgcbE9+ZudL8vEneNaqn6xphD2NlQRcV26+pmzd9W/jI7FG9OW2b1lKaJmTEIqXgdX6kZwiwVwtTz0kWDMU73A/MZKxF5rBnf32YaaVXHVLEBHcKvKyqxbs24EfRZAxBf6HsAUlcq1dj7iG76AvBS2DdVuG4+cylJ0vqn+lgk45DYCM65VwNdwVoAnqACcr89B7+dtGPjpom1oxqQiOMqmIl77mcrKPKJOuJsD9w5W4ByAO1Sq3EWl6D9+Dv1tp21DMx+6B5mTi9C1bZ/KCoA8pRvLJw4CmOulWKXKnvcwOBxH796jtqGOsikgZw56Pv5aZQUJavMY/umDALsAzFapHKVTQO4c9LTaJ8h+fga4PYbefcdUVuaesUNvDr5oAUR9DWsY/LZKlTn9bmTedzu6tpr9xsiRW/kk+o+eRf/hn1VWYPCr44xg3TWAitB0lvhGpcqYWAjHUw8g/r5ZsJHDuXIOene1YeC0/Uc6VCElFXta/D9YAGbbFfY1nlGtBFHggXNpGWKrt9sCuNYtQLx+N+TlSPq5JPCj+0N/sXkgDT2MAkyoT6ekXAdc776EDv8W27D8D15BrKoJ3NufFoAJ5eOaAlbPkQS4MLcux+XKOKlajq6a+Uj8HrEOnmHDPKBudaMzRXX+jpWn3LFICe2strbTYQ1J1NtQysRfpsM3k5g7nt1IXLgCeaUjpdzsmAHM9LQEvhoMGtGSRXyhGgCrVB/kmP4nXqU3Bd8Zqh0BwNXVIvqrZysIvjElSSFiRqPe7A/ceE+w7YotiPOedQBW3iyE2RFr0N7KN5attbukpL2YdHgbn5ZSboSGwjGBSHkOQizSjcD+VHrl1eyPJRvysrrlEmZeTgIFowS5wEBdZ2xgc9HOFd1pl/YoDWF2zdH8SzOR4FKQmAbCXZDQIcx9DBGQPAPQYRZij17YfpCqq1UtkZVaWYHRAo417i8ccL8wqxuJewAAAABJRU5ErkJggg=="></div>';
                }
            }
            ?>
        </div>
    </div>    
    <hr/>
    <?= $form->field($model, 'in_stock')->checkbox() ?>
    
    <?= $form->field($model, 'active')->checkbox() ?>

    <?= $form->field($model, 'sort')->textInput() ?>

    <?= $form->field($model, 'meta_key')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'meta_desc')->textarea(['maxlength' => true]) ?>

    <?= $form->field($model, 'meta_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'meta_h1')->textInput(['maxlength' => true]) ?>

    
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Обновить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php
$this->registerJs('$("#add-pr").click(function() {
        var html = \'<div class="row add-me"><div class="col-xs-2"><label>Обем:</label><select class="form-control" name="volume[]">' . $options . '</select></div><div class="col-xs-2"><label>Цена со склада:</label><input class="form-control" type="text" name="price[]"></div><div class="col-xs-2"><label>Цена под заказ:</label><input class="form-control" type="text" name="price2[]"></div><img class="remove-section" style="cursor: pointer;position: absolute;display: block;margin-left: 576px;margin-top: 26px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAExklEQVRYR8WXbWxTVRjH/8+527qt63opxmRxi0pMFNDNAEZMRElQ56IxBINohEi7yeSlLcMohoAuhmE0bmTdkNfdzQ8QM1Q0xETeviBGBxogCkGEoBBElNF2Xffe85h7YXVjtz1zaDyfbtrn/39+57n3nPMcwv886J/kjy9aXzCQEI9J5mkATRAgHcQMSREQzoLoiEaJA3nbll8era8SgMHUsTBUJgWqGDxLQKTVSAkpBPYCqHUb/gME4nQwac1iFesnShabmWnGaGc0NI7B+wVlLHY3LT2TSp8SIFpev4CZNgPIGUvypCYhO6FpC3XD/4mdjy1A2Fe/gkC1N5V4iFhCsoC2RDf8m270HAEQ9jZ4idj4t5IP9+F5uhFsHfrbMICwL1TCEm1CwPGfAEjZJaBNzW/xnxr0TwLw3Fbtau5v32qamKZMToSsRyZDKxxvhSbO/4m+QyeBtN/7dVdJB90ty2YOro4kQNQbeoEJO5TJAYjxLuStfg49u49Y4dmzH0RszXZwtGs0ckjCM56mwG4zOAkQ8YW+AzDVziFrVgkcT9wPysoA9/TD3AqE7gToutzci8JxgBmUnQnuG0Dv3mPoO3DcHkjSQb3F/2gSIOYNTUoQTqRcq85saEW3IKficcTf+9QKo7xskCPTejahON5jPTvfeBbdm/YgcbE9+ZudL8vEneNaqn6xphD2NlQRcV26+pmzd9W/jI7FG9OW2b1lKaJmTEIqXgdX6kZwiwVwtTz0kWDMU73A/MZKxF5rBnf32YaaVXHVLEBHcKvKyqxbs24EfRZAxBf6HsAUlcq1dj7iG76AvBS2DdVuG4+cylJ0vqn+lgk45DYCM65VwNdwVoAnqACcr89B7+dtGPjpom1oxqQiOMqmIl77mcrKPKJOuJsD9w5W4ByAO1Sq3EWl6D9+Dv1tp21DMx+6B5mTi9C1bZ/KCoA8pRvLJw4CmOulWKXKnvcwOBxH796jtqGOsikgZw56Pv5aZQUJavMY/umDALsAzFapHKVTQO4c9LTaJ8h+fga4PYbefcdUVuaesUNvDr5oAUR9DWsY/LZKlTn9bmTedzu6tpr9xsiRW/kk+o+eRf/hn1VWYPCr44xg3TWAitB0lvhGpcqYWAjHUw8g/r5ZsJHDuXIOene1YeC0/Uc6VCElFXta/D9YAGbbFfY1nlGtBFHggXNpGWKrt9sCuNYtQLx+N+TlSPq5JPCj+0N/sXkgDT2MAkyoT6ekXAdc776EDv8W27D8D15BrKoJ3NufFoAJ5eOaAlbPkQS4MLcux+XKOKlajq6a+Uj8HrEOnmHDPKBudaMzRXX+jpWn3LFICe2strbTYQ1J1NtQysRfpsM3k5g7nt1IXLgCeaUjpdzsmAHM9LQEvhoMGtGSRXyhGgCrVB/kmP4nXqU3Bd8Zqh0BwNXVIvqrZysIvjElSSFiRqPe7A/ceE+w7YotiPOedQBW3iyE2RFr0N7KN5attbukpL2YdHgbn5ZSboSGwjGBSHkOQizSjcD+VHrl1eyPJRvysrrlEmZeTgIFowS5wEBdZ2xgc9HOFd1pl/YoDWF2zdH8SzOR4FKQmAbCXZDQIcx9DBGQPAPQYRZij17YfpCqq1UtkZVaWYHRAo417i8ccL8wqxuJewAAAABJRU5ErkJggg=="></div>\';
        $(".prices").append(html);
    });
    $("#add-category").click(function() {
        var html = \'<div class="row add-me"><div class="col-xs-4"><label>Категория:</label><select class="form-control" name="categories[]">' . $catOptions . '</select></div><img class="remove-section" style="cursor: pointer;position: absolute;display: block;margin-left: 576px;margin-top: 26px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAExklEQVRYR8WXbWxTVRjH/8+527qt63opxmRxi0pMFNDNAEZMRElQ56IxBINohEi7yeSlLcMohoAuhmE0bmTdkNfdzQ8QM1Q0xETeviBGBxogCkGEoBBElNF2Xffe85h7YXVjtz1zaDyfbtrn/39+57n3nPMcwv886J/kjy9aXzCQEI9J5mkATRAgHcQMSREQzoLoiEaJA3nbll8era8SgMHUsTBUJgWqGDxLQKTVSAkpBPYCqHUb/gME4nQwac1iFesnShabmWnGaGc0NI7B+wVlLHY3LT2TSp8SIFpev4CZNgPIGUvypCYhO6FpC3XD/4mdjy1A2Fe/gkC1N5V4iFhCsoC2RDf8m270HAEQ9jZ4idj4t5IP9+F5uhFsHfrbMICwL1TCEm1CwPGfAEjZJaBNzW/xnxr0TwLw3Fbtau5v32qamKZMToSsRyZDKxxvhSbO/4m+QyeBtN/7dVdJB90ty2YOro4kQNQbeoEJO5TJAYjxLuStfg49u49Y4dmzH0RszXZwtGs0ckjCM56mwG4zOAkQ8YW+AzDVziFrVgkcT9wPysoA9/TD3AqE7gToutzci8JxgBmUnQnuG0Dv3mPoO3DcHkjSQb3F/2gSIOYNTUoQTqRcq85saEW3IKficcTf+9QKo7xskCPTejahON5jPTvfeBbdm/YgcbE9+ZudL8vEneNaqn6xphD2NlQRcV26+pmzd9W/jI7FG9OW2b1lKaJmTEIqXgdX6kZwiwVwtTz0kWDMU73A/MZKxF5rBnf32YaaVXHVLEBHcKvKyqxbs24EfRZAxBf6HsAUlcq1dj7iG76AvBS2DdVuG4+cylJ0vqn+lgk45DYCM65VwNdwVoAnqACcr89B7+dtGPjpom1oxqQiOMqmIl77mcrKPKJOuJsD9w5W4ByAO1Sq3EWl6D9+Dv1tp21DMx+6B5mTi9C1bZ/KCoA8pRvLJw4CmOulWKXKnvcwOBxH796jtqGOsikgZw56Pv5aZQUJavMY/umDALsAzFapHKVTQO4c9LTaJ8h+fga4PYbefcdUVuaesUNvDr5oAUR9DWsY/LZKlTn9bmTedzu6tpr9xsiRW/kk+o+eRf/hn1VWYPCr44xg3TWAitB0lvhGpcqYWAjHUw8g/r5ZsJHDuXIOene1YeC0/Uc6VCElFXta/D9YAGbbFfY1nlGtBFHggXNpGWKrt9sCuNYtQLx+N+TlSPq5JPCj+0N/sXkgDT2MAkyoT6ekXAdc776EDv8W27D8D15BrKoJ3NufFoAJ5eOaAlbPkQS4MLcux+XKOKlajq6a+Uj8HrEOnmHDPKBudaMzRXX+jpWn3LFICe2strbTYQ1J1NtQysRfpsM3k5g7nt1IXLgCeaUjpdzsmAHM9LQEvhoMGtGSRXyhGgCrVB/kmP4nXqU3Bd8Zqh0BwNXVIvqrZysIvjElSSFiRqPe7A/ceE+w7YotiPOedQBW3iyE2RFr0N7KN5attbukpL2YdHgbn5ZSboSGwjGBSHkOQizSjcD+VHrl1eyPJRvysrrlEmZeTgIFowS5wEBdZ2xgc9HOFd1pl/YoDWF2zdH8SzOR4FKQmAbCXZDQIcx9DBGQPAPQYRZij17YfpCqq1UtkZVaWYHRAo417i8ccL8wqxuJewAAAABJRU5ErkJggg=="></div>\';
        $(".categories").append(html);
    });
    $("#add-color").click(function() {
        var html = \'<br><div class="row add-me" style="border: 1px solid #e3e3e3;border-radius: 5px;"><div class="col-xs-2"><label>Цвет:</label><select class="form-control" name="volume[]">' . $opColor . '</select></div><div class="col-xs-2"><label>Картинки:</label><input class="form-control fileToUpload" type="file" name="file" multiple><div class="photos"></div></div><img class="remove-color-images" style="cursor: pointer;position: absolute;display: block;margin-left: 576px;margin-top: 26px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAExklEQVRYR8WXbWxTVRjH/8+527qt63opxmRxi0pMFNDNAEZMRElQ56IxBINohEi7yeSlLcMohoAuhmE0bmTdkNfdzQ8QM1Q0xETeviBGBxogCkGEoBBElNF2Xffe85h7YXVjtz1zaDyfbtrn/39+57n3nPMcwv886J/kjy9aXzCQEI9J5mkATRAgHcQMSREQzoLoiEaJA3nbll8era8SgMHUsTBUJgWqGDxLQKTVSAkpBPYCqHUb/gME4nQwac1iFesnShabmWnGaGc0NI7B+wVlLHY3LT2TSp8SIFpev4CZNgPIGUvypCYhO6FpC3XD/4mdjy1A2Fe/gkC1N5V4iFhCsoC2RDf8m270HAEQ9jZ4idj4t5IP9+F5uhFsHfrbMICwL1TCEm1CwPGfAEjZJaBNzW/xnxr0TwLw3Fbtau5v32qamKZMToSsRyZDKxxvhSbO/4m+QyeBtN/7dVdJB90ty2YOro4kQNQbeoEJO5TJAYjxLuStfg49u49Y4dmzH0RszXZwtGs0ckjCM56mwG4zOAkQ8YW+AzDVziFrVgkcT9wPysoA9/TD3AqE7gToutzci8JxgBmUnQnuG0Dv3mPoO3DcHkjSQb3F/2gSIOYNTUoQTqRcq85saEW3IKficcTf+9QKo7xskCPTejahON5jPTvfeBbdm/YgcbE9+ZudL8vEneNaqn6xphD2NlQRcV26+pmzd9W/jI7FG9OW2b1lKaJmTEIqXgdX6kZwiwVwtTz0kWDMU73A/MZKxF5rBnf32YaaVXHVLEBHcKvKyqxbs24EfRZAxBf6HsAUlcq1dj7iG76AvBS2DdVuG4+cylJ0vqn+lgk45DYCM65VwNdwVoAnqACcr89B7+dtGPjpom1oxqQiOMqmIl77mcrKPKJOuJsD9w5W4ByAO1Sq3EWl6D9+Dv1tp21DMx+6B5mTi9C1bZ/KCoA8pRvLJw4CmOulWKXKnvcwOBxH796jtqGOsikgZw56Pv5aZQUJavMY/umDALsAzFapHKVTQO4c9LTaJ8h+fga4PYbefcdUVuaesUNvDr5oAUR9DWsY/LZKlTn9bmTedzu6tpr9xsiRW/kk+o+eRf/hn1VWYPCr44xg3TWAitB0lvhGpcqYWAjHUw8g/r5ZsJHDuXIOene1YeC0/Uc6VCElFXta/D9YAGbbFfY1nlGtBFHggXNpGWKrt9sCuNYtQLx+N+TlSPq5JPCj+0N/sXkgDT2MAkyoT6ekXAdc776EDv8W27D8D15BrKoJ3NufFoAJ5eOaAlbPkQS4MLcux+XKOKlajq6a+Uj8HrEOnmHDPKBudaMzRXX+jpWn3LFICe2strbTYQ1J1NtQysRfpsM3k5g7nt1IXLgCeaUjpdzsmAHM9LQEvhoMGtGSRXyhGgCrVB/kmP4nXqU3Bd8Zqh0BwNXVIvqrZysIvjElSSFiRqPe7A/ceE+w7YotiPOedQBW3iyE2RFr0N7KN5attbukpL2YdHgbn5ZSboSGwjGBSHkOQizSjcD+VHrl1eyPJRvysrrlEmZeTgIFowS5wEBdZ2xgc9HOFd1pl/YoDWF2zdH8SzOR4FKQmAbCXZDQIcx9DBGQPAPQYRZij17YfpCqq1UtkZVaWYHRAo417i8ccL8wqxuJewAAAABJRU5ErkJggg=="></div>\';
        $(".colors").append(html);
    });
    $("body").on("click", ".remove-section", function(){
        $(this).parent(".add-me").remove();
    });
', yii\web\View::POS_END, 'my-options');
?>
