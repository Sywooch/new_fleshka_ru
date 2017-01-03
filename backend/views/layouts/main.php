<?php
/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>
        <?php $this->beginBody() ?>

        <div class="wrap">
            <?php
            NavBar::begin([
                'brandLabel' => 'Fleshka.ru - admin',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-inverse navbar-fixed-top',
                ],
            ]);
            $menuItems = [
                ['label' => 'Главная', 'url' => ['/site/index']],
                ['label' => 'Заказы', 'url' => ['/checkout/index']],
                ['label' => 'Флешки', 'url' => ['/page/index']],
                ['label' => 'Категории', 'url' => ['/categories/index']],
                ['label' => 'Объемы', 'url' => ['/volumes/index']],
                ['label' => 'Цвета', 'url' => ['/colors/index']],
                ['label' => 'Статьи', 'url' => ['/articles/index']],
                ['label' => 'Страницы', 'url' => ['/stranitsy/index']],
                    //['label' => 'Services', 'url' => ['/services/index']],
            ];
            if (Yii::$app->user->isGuest) {
                $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
            } else {
                $menuItems[] = '<li>'
                        . Html::beginForm(['/site/logout'], 'post')
                        . Html::submitButton(
                                'Logout (' . Yii::$app->user->identity->username . ')', ['class' => 'btn btn-link']
                        )
                        . Html::endForm()
                        . '</li>';
            }
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => $menuItems,
            ]);
            NavBar::end();
            ?>

            <div class="container">
                <?=
                Breadcrumbs::widget([
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ])
                ?>
                <?= Alert::widget() ?>
                <?= $content ?>
            </div>
        </div>

        <footer class="footer">
            <div class="container">
                <p class="pull-left">&copy; fleshka.ru <?= date('Y') ?></p>

                <p class="pull-right"><?= Yii::powered() ?></p>
            </div>
        </footer>
        <div id="loading-mask">
            <div class="background-overlay"></div>
            <p id="loading_mask_loader" class="loader">
                <img src="/assets/images/gears.gif">
            </p>
        </div>
        <style>
            #loading-mask {
                display: none;
                font-size: 1.1em;
                font-weight: 700;
                position: fixed;
                text-align: center;
                z-index: 20002;
                width: 100%;
                height: 100%;
                left: 0;
                top: 0;
            }
            .background-overlay {
                background-color: #fff;
            }
            .background-overlay {
                background-color: transparent;
                opacity: .5;
                filter: Alpha(Opacity=50);
                left: 0;
                top: 0;
            }
            .background-overlay {
                background-color: #fff;
                opacity: 0.3;
                width: 100%;
                height: 100%;
                position: absolute;
                top: 0px;
                filter: alpha(opacity=50);
            }
            #loading_mask_loader {
                font-weight: bold;
                left: 50%;
                margin-left: -22px;
                margin-top: -22px;
                padding: 6px 0;
                position: fixed;
                text-align: center;
                top: 50%;
                width: 44px;
                height: 44px;
                z-index: 1000;
                font-size: 16px;
                font-weight: normal;
                color: #fff;
                background-color: transparent;
            }
            .for-photo {
                float: left;
            }
        </style>
        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
<script>
    function submitForm(colorId, appendTo, th) {
        $("#loading-mask").show();
        var fd = new FormData($("#news-form")[0]);
        var ins = th.files.length;
        for (var x = 0; x < ins; x++) {
            fd.append("file[]", th.files[x]);
        }
        $.ajax({
            url: "/page/upload?colorId=" + colorId,
            type: "POST",
            data: fd,
            enctype: 'multipart/form-data',
            processData: false, // tell jQuery not to process the data
            contentType: false   // tell jQuery not to set contentType
        }).done(function (data) {
            $("#loading-mask").hide();
            $(appendTo).append(data);
        });
        return false;
    }
    $("body").on("click", ".delete-image", function () {
        $("#loading-mask").show();
        var th = $(this);
        var file = th.data("file");
        $.get('/page/delete-file/', {file: file}, function (resp) {
            th.parent(".for-photo").remove();
            $("#loading-mask").hide();
        });
        return false;
    });
    $("body").on("click", ".remove-color-images", function () {
        $("#loading-mask").show();
        var th = $(this);
        var files = th.parent(".add-me").find(".photos div .delete-image");
        $(files).each(function () {
            var file = $(this).data("file");
            $.get('/page/delete-file/', {file: file}, function (resp) {});
        });
        $(this).parent(".add-me").remove();
        $("#loading-mask").hide();
        return false;
    });
    var counter = 0;
    $("body").on('change', "input[name=file]", function () {
        var colorId = $(this).parent(".col-xs-2").parent(".add-me").find("select").val();
        var appendTo = $(this).parent(".col-xs-2").find(".photos");
        var th = $(this);
        
        if (counter < 10)
            submitForm(colorId, appendTo, th[0]);
        counter++;
    });
</script>