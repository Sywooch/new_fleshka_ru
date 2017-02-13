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
        <script type="text/javascript">
            function cyr2lat(str) {
                var cyr2latChars = new Array(
                        ['а', 'a'], ['б', 'b'], ['в', 'v'], ['г', 'g'], ['д', 'd'], ['е', 'e'], ['ё', 'yo'], ['ж', 'zh'], ['з', 'z'],
                        ['и', 'i'], ['й', 'y'], ['к', 'k'], ['л', 'l'], ['м', 'm'], ['н', 'n'], ['о', 'o'], ['п', 'p'], ['р', 'r'],
                        ['с', 's'], ['т', 't'], ['у', 'u'], ['ф', 'f'], ['х', 'h'], ['ц', 'c'], ['ч', 'ch'], ['ш', 'sh'], ['щ', 'shch'], ['ъ', ''], ['ы', 'y'], ['ь', ''], ['э', 'e'], ['ю', 'yu'], ['я', 'ya'],
                        ['А', 'A'], ['Б', 'B'], ['В', 'V'], ['Г', 'G'], ['Д', 'D'], ['Е', 'E'], ['Ё', 'YO'], ['Ж', 'ZH'], ['З', 'Z'],
                        ['И', 'I'], ['Й', 'Y'], ['К', 'K'], ['Л', 'L'], ['М', 'M'], ['Н', 'N'], ['О', 'O'], ['П', 'P'], ['Р', 'R'],
                        ['С', 'S'], ['Т', 'T'], ['У', 'U'], ['Ф', 'F'], ['Х', 'H'], ['Ц', 'C'], ['Ч', 'CH'], ['Ш', 'SH'], ['Щ', 'SHCH'],
                        ['Ъ', ''], ['Ы', 'Y'], ['Ь', ''], ['Э', 'E'], ['Ю', 'YU'], ['Я', 'YA'], ['a', 'a'], ['b', 'b'], ['c', 'c'], ['d', 'd'], ['e', 'e'],
                        ['f', 'f'], ['g', 'g'], ['h', 'h'], ['i', 'i'], ['j', 'j'], ['k', 'k'], ['l', 'l'], ['m', 'm'], ['n', 'n'], ['o', 'o'],
                        ['p', 'p'], ['q', 'q'], ['r', 'r'], ['s', 's'], ['t', 't'], ['u', 'u'], ['v', 'v'], ['w', 'w'], ['x', 'x'], ['y', 'y'],
                        ['z', 'z'], ['A', 'A'], ['B', 'B'], ['C', 'C'], ['D', 'D'], ['E', 'E'], ['F', 'F'], ['G', 'G'], ['H', 'H'], ['I', 'I'], ['J', 'J'], ['K', 'K'],
                        ['L', 'L'], ['M', 'M'], ['N', 'N'], ['O', 'O'], ['P', 'P'], ['Q', 'Q'], ['R', 'R'], ['S', 'S'], ['T', 'T'], ['U', 'U'], ['V', 'V'], ['W', 'W'], ['X', 'X'], ['Y', 'Y'],
                        ['Z', 'Z'], [' ', '-'], ['0', '0'], ['1', '1'], ['2', '2'], ['3', '3'], ['4', '4'], ['5', '5'], ['6', '6'], ['7', '7'], ['8', '8'], ['9', '9'], ['-', '-']
                        );
                var newStr = new String();
                for (var i = 0; i < str.length; i++)
                {
                    ch = str.charAt(i);
                    var newCh = '';
                    for (var j = 0; j < cyr2latChars.length; j++)
                        if (ch == cyr2latChars[j][0])
                            newCh = cyr2latChars[j][1];
                    newStr += newCh;

                }
                newStr = newStr.replace(/[-]{2,}/gim, '-').replace(/\n/gim, '').toLowerCase();

                return newStr;
            }
        </script>
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

            if (Yii::$app->user->isGuest) {
                $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
            } else {
                $menuItems = [
                    [
                        'label' => 'Главная',
                        'items' => [
                            ['label' => 'Популярные флешки', 'url' => '/site/popular?p=popular'],
                            ['label' => 'Специальные предложения', 'url' => '/site/popular?p=special'],
                        ],
                    ],
                    ['label' => 'Заказы', 'url' => ['/checkout/index']],
                    ['label' => 'Флешки', 'url' => ['/page/index']],
                    ['label' => 'Категории', 'url' => ['/categories/index']],
                    ['label' => 'Объемы', 'url' => ['/volumes/index']],
                    ['label' => 'Цвета', 'url' => ['/colors/index']],
                    ['label' => 'Статьи', 'url' => ['/articles/index']],
                    ['label' => 'Страницы', 'url' => ['/stranitsy/index']],
                    //['label' => 'Services', 'url' => ['/services/index']],


                ];
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
    $("#save-list").on("click", function() {
        var json = {
            result: []
        };
        $(".added-drvs li").each(function (i, li) {
            json.result.push($(this).data('id'));
        });
        $.ajax({
            type:"POST",
            url: "/site/popular?p=<?= isset($_GET['p']) ? $_GET['p'] : ''; ?>",
            data: json,
            success: function(data) {
                alert("Изменения были успешно сохранены");
            }
        });
    });
    $("body").on("hover", ".popular-list li", function() {
        $(".list li button").hide();
        $(this).find("button").show();
    });
    $("body").on("click", ".added-drvs li", function() {
        var title = $(this).find("span").text();
        var id = $(this).data("id");
        $(".popular-list").prepend('<li style="cursor: pointer;" data-id="' + id + '"><span>' + title + '</span></li>');
        $(this).remove();
    });
    $("body").on("click", ".popular-list li", function() {
        var title = $(this).find("span").text();
        var id = $(this).data("id");
        $(".added-drvs").append('<li style="cursor: pointer;" data-id="' + id + '"><span>' + title + '</span></li>');
        $(this).remove();
    });
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
            $.get('/page/delete-file/', {file: file}, function (resp) {
            });
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
    $("#stranitsy-title").on('keyup', function () {
        var url = cyr2lat($(this).val());
        $("#stranitsy-url").val(url);
    });
</script>