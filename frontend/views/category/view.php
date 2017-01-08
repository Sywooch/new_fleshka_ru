<?php

use yii\helpers;
?>
<div class="main-container col2-left-layout">
    <div class="main container">
        <div class="row">
            <div class="col-main col-sm-9 f-right">
                <div class="page-title category-title">
                    <h1>Fashion</h1>
                </div>
                <div class="category-products">
                    <ul class="products-grid  columns4">                        
                        <?php foreach ($rows as $row): ?>
                            <?php $url = '/fleshka/' . \app\components\CController::ru2lat($row['title']) . '-' . $row['id']; ?>
                            <li class="item">
                                <div class="item-area">
                                    <div class="product-image-area">                                    
                                        <a href="<?= $url; ?>" title="<?php echo $row['title']; ?>" class="product-image">
                                            <img src="/uploads/images/<?php echo $row['image']; ?>" width="300" alt="<?php echo $row['title']; ?>">
                                        </a>
                                    </div>
                                    <div class="details-area">
                                        <h2 class="product-name"><a href="<?= $url; ?>" title="<?php echo $row['title']; ?>"><?php echo $row['title']; ?></a></h2>
                                        <div class="price-box">
                                            <p class="special-price">
                                                <span class="price-label">Special Price</span>
                                                <span class="price" id="product-price-2">
                                                    от <?php echo $row['price']; ?> Руб.
                                                </span>
                                            </p>
                                        </div>
                                        <div class="actions">
                                            <a href="<?= $url; ?>" class="addtocart"><i class="icon-cart"></i><span>&nbsp;Купить</span></a>                                        
                                            <div class="clearer"></div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                    <div class="toolbar-bottom">
                        <div class="toolbar">
                            <div class="sorter">
                                <div class="pager">
                                    <div class="pages">
                                        <?php
                                        echo \yii\widgets\LinkPager::widget([
                                            'pagination' => $pagination,
                                        ]);
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-left sidebar f-left col-sm-3">                
                <div class="block block-layered-nav">
                    <div class="block-content">
                        <dl id="narrow-by-list">
                            <dt class="odd">Цена</dt>
                            <dd class="odd"><div class="price price-filter-slider">
                                    <div>
                                        <div class="slider-range ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
                                            <div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 0%; width: 100%;"></div>
                                            <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 0%;"></span>
                                            <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 100%;"></span>
                                        </div>
                                        <div class="text-box">
                                            <form method="get">
                                                <span>от</span> <input type="text" name="p1" id="minPrice" class="priceTextBox minPrice" value="<?php echo isset($_GET['p1']) ? $_GET['p1'] : '100' ?>" style="border:solid 1px #eee; color: #a3a2a2; padding: 2px 5px; font-size: 14px; margin: 0 2px; width: 50px;"> 
                                                <span>до</span> <input type="text" name="p2" id="maxPrice" class="priceTextBox maxPrice" value="1000" style="border:solid 1px #eee; color: #a3a2a2; padding: 2px 5px; font-size: 14px; margin: 0 2px; width: 50px;">
                                                <input type="button" value="Подобрать" name="go" class="go" style="">  
                                                <?php echo isset($_GET['cl']) ? '<input type="hidden" value="' . (int) $_GET['cl'] . '" name="cl">' : '' ?>
                                                <?php echo isset($_GET['vl']) ? '<input type="hidden" value="' . (int) $_GET['vl'] . '" name="vl">' : '' ?>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="clearer"></div>                                        
                                </div>
                                <script type="text/javascript">
                                    jQuery(function ($) {
                                        jQuery(".go").on("click", function () {
                                            jQuery(this).parent("form").submit();
                                        });
                                        var newMinPrice, newMaxPrice;
                                        var categoryMinPrice = 100;
                                        var categoryMaxPrice = 1000;
                                        $(".slider-range").slider({
                                            range: true,
                                            min: categoryMinPrice,
                                            max: categoryMaxPrice,
                                            values: [<?php echo isset($_GET['p1']) ? $_GET['p1'] : '100' ?>, 1000],
                                            slide: function (event, ui) {
                                                $(".minPrice").val(newMinPrice);
                                                $(".maxPrice").val(newMaxPrice);
                                            }, stop: function (event, ui) {
                                                var newMinPrice = ui.values[0];
                                                var newMaxPrice = ui.values[1];
                                                $(".minPrice").val(newMinPrice);
                                                $(".maxPrice").val(newMaxPrice);
                                            }
                                        });
                                    });
                                </script>
                                <style type="text/css">.ui-slider .ui-slider-handle{background:#0088cc;width:13px; height:18px; border: 0; margin-top: -1px; cursor: pointer; border-radius: 5px; }.ui-slider{background:#eeeeee; width:px; height:7px; border:none; border-radius: 0; -moz-border-radius: 0; -webkit-border-radius: 0; cursor: pointer; margin: 5px 5px 20px 8px; }.ui-slider .ui-slider-range{background:#1ab2ff;border:none; cursor: pointer; box-shadow: inset 0px 1px 2px 0px rgba(0,0,0,.38); }#amount{}</style>
                            </dd>
                            <dt class="even">Выбор объема</dt>
                            <dd class="even">
                                <ol class="configurable-swatch-list no-count">
                                    <?php foreach ($volumes as $volume): ?>
                                        <?php
                                        $arrayParams = ['vl' => $volume['id']] + $_GET;
                                        $params = array_merge(["/category/view"], $arrayParams);
                                        $url = Yii::$app->urlManager->createUrl($params);
                                        ?>
                                        <li>
                                            <a href="<?= $url; ?>" class="swatch-link" style="line-height: 30px;">
                                                <span class="swatch-label" style="height:28px; min-width:40px; line-height: 30px;<?php echo isset($_GET['vl']) && $_GET['vl'] == $volume['id'] ? 'border-color: #08c;' : '' ?>"><?= $volume['title']; ?> Гб.</span>
                                            </a>
                                        </li>   
                                    <?php endforeach; ?>
                                </ol>
                            </dd>
                            <dt class="last even">Выбор цвета</dt>
                            <dd class="last even">
                                <ol class="configurable-swatch-list no-count">
                                    <?php foreach ($colors as $color): ?>
                                        <?php
                                        $arrayParams = ['cl' => $color['id']] + $_GET;
                                        $params = array_merge(["/category/view"], $arrayParams);
                                        $url = Yii::$app->urlManager->createUrl($params);
                                        ?>
                                        <li style="line-height: 30px;">
                                            <a href="<?= $url; ?>" class="swatch-link has-image">
                                                <span class="swatch-label" style="background-color: <?= $color['value']; ?>;height:28px; width:28px; line-height: 30px;<?php echo isset($_GET['cl']) && $_GET['cl'] == $color['id'] ? 'border-color: #08c;' : '' ?>"></span>
                                            </a>
                                        </li>
                                    <?php endforeach; ?>
                                </ol>
                            </dd>
                        </dl>
                        <script type="text/javascript">
                            jQuery(function ($) {
                                $(".block-layered-nav dt").click(function () {
                                    if ($(this).next("dd").css("display") == "none") {
                                        $(this).next("dd").slideDown(200);
                                        $(this).removeClass("closed");
                                    } else {
                                        $(this).next("dd").slideUp(200);
                                        $(this).addClass("closed");
                                    }
                                });
                            });
                        </script>
                    </div>
                </div>                
            </div>            
        </div>
    </div>
</div>