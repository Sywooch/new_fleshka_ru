<div class="main-container col2-left-layout">
    <div class="main container">
        <div class="row">
            <div class="col-main col-sm-9 f-right">
                <div class="page-title category-title">
                    <h1>Fashion</h1>
                </div>
                <div class="category-products">
                    <ul class="products-grid  columns4">
                        <li class="item nth-child-2np1 nth-child-3np1 nth-child-4np1 nth-child-5np1 nth-child-6np1 nth-child-7np1 nth-child-8np1">
                            <div class="item-area">
                                <div class="product-image-area">
                                    <div class="loader-container">
                                        <div class="loader">
                                            <i class="ajax-loader medium animate-spin"></i>
                                        </div>
                                    </div>                                    
                                    <a href="http://www.newsmartwave.net/magento/porto/index.php/demo5_en/fashion/noa-sheer-blouse-black-s.html" title="Noa Sheer Blouse - Black" class="product-image">
                                        <img id="product-collection-image-2" class="defaultImage" src="http://www.newsmartwave.net/magento/porto/media/catalog/product/cache/9/small_image/300x/17f82f742ffe127f42dca9de82fb58b1/p/r/product_1__9.jpg" width="300" alt="Noa Sheer Blouse - Black">
                                    </a>
                                    <div class="product-label" style="right: 10px;"><span class="sale-product-icon">-10%</span></div>
                                    <div class="product-label" style="right: 10px; top: 40px;"><span class="new-product-icon">New</span></div>
                                </div>
                                <div class="details-area">
                                    <h2 class="product-name"><a href="http://www.newsmartwave.net/magento/porto/index.php/demo5_en/fashion/noa-sheer-blouse-black-s.html" title="Noa Sheer Blouse - Black">Noa Sheer Blouse - Black</a></h2>
                                    <div class="ratings">
                                        <div class="rating-box">
                                            <div class="rating" style="width:0"></div>
                                        </div>
                                    </div>
                                    <div class="price-box">
                                        <p class="old-price">
                                            <span class="price-label">Regular Price:</span>
                                            <span class="price" id="old-price-2">
                                                $99.00
                                            </span>
                                        </p>
                                        <p class="special-price">
                                            <span class="price-label">Special Price</span>
                                            <span class="price" id="product-price-2">
                                                $89.00
                                            </span>
                                        </p>
                                    </div>
                                    <div class="actions">
                                        <a href="#" class="addtocart" title="Add to Cart" ><i class="icon-cart"></i><span>&nbsp;Add to Cart</span></a>                                        
                                        <div class="clearer"></div>
                                    </div>
                                </div>
                            </div>
                        </li>
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
                                            <span>от</span> <input type="text" name="min" id="minPrice" class="priceTextBox minPrice" value="19" style="border:solid 1px #eee; color: #a3a2a2; padding: 2px 5px; font-size: 14px; margin: 0 2px; width: 50px;"> 
                                            <span>до</span> <input type="text" name="max" id="maxPrice" class="priceTextBox maxPrice" value="850" style="border:solid 1px #eee; color: #a3a2a2; padding: 2px 5px; font-size: 14px; margin: 0 2px; width: 50px;">
                                            <input type="button" value="FILTER" name="go" class="go" style="">
                                            <input type="hidden" id="amount" class="price-amount" style="background:none; border:none;" value="$19 - $850">
                                        </div>

                                    </div>
                                    <div class="clearer"></div>                                        
                                </div>
                                <script type="text/javascript">
                                    jQuery(function ($) {
                                        var newMinPrice, newMaxPrice, url, temp;
                                        var categoryMinPrice = 19;
                                        var categoryMaxPrice = 850;
                                        $(".slider-range").slider({
                                            range: true,
                                            min: categoryMinPrice,
                                            max: categoryMaxPrice,
                                            values: [19, 850],
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
                            <dt class="even">Size</dt>
                            <dd class="even">
                                <ol class="configurable-swatch-list no-count">
                                    <li>
                                        <a href="http://www.newsmartwave.net/magento/porto/index.php/demo5_en/fashion.html?size=8" class="swatch-link" style="line-height: 30px;">
                                            <span class="swatch-label" style="height:28px; min-width:28px; line-height: 30px;">
                                                S                                    </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://www.newsmartwave.net/magento/porto/index.php/demo5_en/fashion.html?size=7" class="swatch-link" style="line-height: 30px;">
                                            <span class="swatch-label" style="height:28px; min-width:28px; line-height: 30px;">
                                                M                                    </span>
                                        </a>
                                    </li>                                    
                                </ol>
                            </dd>
                            <dt class="last even">Color</dt>
                            <dd class="last even">
                                <ol class="configurable-swatch-list no-count">
                                    <li style="line-height: 30px;">
                                        <a href="http://www.newsmartwave.net/magento/porto/index.php/demo5_en/fashion.html?color=27" class="swatch-link has-image">
                                            <span class="swatch-label" style="height:28px; width:28px; line-height: 30px;">
                                                <img src="http://www.newsmartwave.net/magento/porto/media/catalog/swatches/9/26x26/media/black.png" alt="Black" title="Black" width="26" height="26">
                                            </span>
                                        </a>
                                    </li>
                                    <li style="line-height: 30px;">
                                        <a href="http://www.newsmartwave.net/magento/porto/index.php/demo5_en/fashion.html?color=26" class="swatch-link has-image">
                                            <span class="swatch-label" style="height:28px; width:28px; line-height: 30px;">
                                                <img src="http://www.newsmartwave.net/magento/porto/media/catalog/swatches/9/26x26/media/blue.png" alt="Blue" title="Blue" width="26" height="26">
                                            </span>
                                        </a>
                                    </li>
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