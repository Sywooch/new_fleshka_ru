<?php $assets = Yii::getAlias('@web'); ?>
<div class="main-container col2-right-layout">
    <div class="main container">
        <div class="row">
            <div class="col-main col-sm-9">
                <div id="loading-mask">
                    <div class="background-overlay"></div>
                    <p id="loading_mask_loader" class="loader">
                        <i class="ajax-loader large animate-spin"></i>
                    </p>
                </div>
                <style>
                    .btn span.glyphicon {
                        opacity: 0;
                    }
                    .btn.active span.glyphicon {				
                        opacity: 1;
                    }
                    .btn-group input[type="checkbox"] {
                        position: absolute;
                        z-index: -1;
                        filter: alpha(opacity=0);
                        opacity: 0;
                    }
                </style>               
                <div class="product-view ">
                    <div class="product-essential">
                        <form action="" method="post" id="product_addtocart_form">
                            <div class="row">
                                <div class="product-img-box col-sm-5 ">
                                    <ul id="etalage_MTJhMzVlMTMxYTNlNTc0M2ZkYTBjYzYxOWJjY2ExNTU" class="etalage" style="display: block; width: 337px; height: 447px;">
                                        <?php foreach ($colors as $color): ?>
                                            <li class="etalage_thumb thumb_<?= $color['color_id']; ?> etalage_thumb_active" style="display: list-item; opacity: 1; position: absolute; overflow: hidden; background-image: none;">
                                                <a rel="gallery" class="fancy-images fancy-images_<?= $color['color_id']; ?>" href="<?= $assets . '/uploads/images/' . $color['image']; ?>"><span class="glyphicon glyphicon-search"></span></a>
                                                <img class="etalage_thumb_image" src="<?= $assets . '/uploads/images/' . $color['image']; ?>" alt="" style="display: inline; width: 329px; height: auto; opacity: 1;">
                                                <img class="etalage_source_image" src="<?= $assets . '/uploads/images/' . $color['image']; ?>" alt="">                                                
                                            </li>
                                        <?php endforeach; ?>                                     
                                    </ul>
                                    <div class="etalage-control">
                                        <a href="javascript:void(0)" class="etalage-prev"><i class="icon-angle-left"></i></a>
                                        <a href="javascript:void(0)" class="etalage-next"><i class="icon-angle-right"></i></a>
                                    </div>
                                    <div class="clear"></div><br><br><br><br><br><br><br><br><br>
                                    <span>Выбор цвета</span><br><br>
                                    <div class="btn-group" data-toggle="buttons">
                                        <?php foreach ($colors as $color): ?>
                                            <label class="btn btn-success" for="check-<?= $color['color_id']; ?>" style="border: 2px solid #08c;background-color: <?= $color['value']; ?>">
                                                <input id="check-<?= $color['color_id']; ?>" data-title="<?= $color['title']; ?>" data-val="<?= $color['value']; ?>" data-id="<?= $color['color_id']; ?>" type="checkbox" name="colors[]" autocomplete="off">
                                                <span class="glyphicon glyphicon-ok"></span>
                                            </label>
                                        <?php endforeach; ?>
                                    </div>
                                    <div class="product-view-zoom-area"></div>
                                    <script type="text/javascript">
                                        var zoom_enabled = false;
                                        var zoom_type = 0;
                                        jQuery(document).ready(function () {

                                            jQuery("body").on("click", ".btn-group label input", function () {
                                                if (jQuery(this).parent().hasClass("active")) {
                                                    jQuery(this).attr('checked', false);
                                                    jQuery(this).parent().removeClass("active");
                                                }
                                                else {
                                                    jQuery(this).attr('checked', true);
                                                    jQuery(this).parent().addClass("active");
                                                }
                                            });
                                            reloadEtalage();

                                            zoom_enabled = true;
                                            setTimeout(function () {
                                                reloadEtalage();
                                            }, 500);
                                            jQuery(window).resize(function (e) {
                                                reloadEtalage();
                                                var width = jQuery(this).width();
                                            });
                                            jQuery('.etalage-prev').on('click', function () {
                                                etalage_MTJhMzVlMTMxYTNlNTc0M2ZkYTBjYzYxOWJjY2ExNTU_previous();
                                            });
                                            jQuery('.etalage-next').on('click', function () {
                                                etalage_MTJhMzVlMTMxYTNlNTc0M2ZkYTBjYzYxOWJjY2ExNTU_next();
                                            });
                                            jQuery("a.fancy-images_MTJhMzVlMTMxYTNlNTc0M2ZkYTBjYzYxOWJjY2ExNTU").fancybox();
                                            function reloadEtalage() {
                                                var src_img_width = 600;
                                                var src_img_height = "auto";
                                                var ratio_width = 600;
                                                var ratio_height = 600;
                                                var width, height, thumb_position, small_thumb_count;
                                                small_thumb_count = 4;
                                                width = jQuery(".product-view .product-img-box").width() - 8;
                                                height = "auto";
                                                thumb_position = "bottom";

                                                jQuery('#etalage_MTJhMzVlMTMxYTNlNTc0M2ZkYTBjYzYxOWJjY2ExNTU').etalage({
                                                    thumb_image_width: width,
                                                    thumb_image_height: height,
                                                    source_image_width: src_img_width,
                                                    source_image_height: src_img_height,
                                                    zoom_area_width: width,
                                                    zoom_area_height: height,
                                                    zoom_enable: false,
                                                    small_thumbs: small_thumb_count,
                                                    smallthumb_hide_single: false,
                                                    smallthumbs_position: thumb_position,
                                                    small_thumbs_width_offset: 0,
                                                    show_icon: false,
                                                    autoplay: false
                                                });
                                                if (jQuery(window).width() < 768) {
                                                    var first_img = jQuery("#etalage_MTJhMzVlMTMxYTNlNTc0M2ZkYTBjYzYxOWJjY2ExNTU img.etalage_thumb_image").first();
                                                    var tmp_img = jQuery('<img src="" alt=""/>');
                                                    tmp_img.attr("src", first_img.attr("src"));
                                                    tmp_img.unbind("load");
                                                    tmp_img.bind("load", function () {
                                                        jQuery("#etalage_MTJhMzVlMTMxYTNlNTc0M2ZkYTBjYzYxOWJjY2ExNTU").height(Math.round(width * this.naturalHeight / this.naturalWidth + 8) + "px");
                                                    });
                                                    jQuery('#etalage_MTJhMzVlMTMxYTNlNTc0M2ZkYTBjYzYxOWJjY2ExNTU').removeClass("vertical");
                                                    jQuery(".product-view .product-img-box li.etalage_thumb").css({left: 0});
                                                }
                                                var first_img = jQuery("#etalage_MTJhMzVlMTMxYTNlNTc0M2ZkYTBjYzYxOWJjY2ExNTU img.etalage_thumb_image").first();
                                                var tmp_img = jQuery('<img src="" alt=""/>');
                                                tmp_img.attr("src", first_img.attr("src"));
                                                tmp_img.unbind("load");
                                                tmp_img.bind("load", function () {
                                                    jQuery("#etalage_MTJhMzVlMTMxYTNlNTc0M2ZkYTBjYzYxOWJjY2ExNTU").height(Math.round(width * this.naturalHeight / this.naturalWidth + 8) + "px");
                                                });
                                            }
                                        });
                                    </script>
                                    <div class="clear"></div>
                                </div>
                                <div class="product-shop col-sm-7">                                    
                                    <div class="product-name">
                                        <h1><?= $model->title; ?></h1>
                                    </div>
                                    <div class="short-description">
                                        <h2><?= $model->title; ?></h2>
                                        <div class="std"><?= $model->description; ?></div>
                                    </div>
                                    <div class="product-info">
                                        <div>
                                            <p class="availability in-stock">Наличие:<span><?= $model->in_stock == 1 ? 'Есть в наличии' : 'Под заказ'; ?></span></p>
                                        </div>
                                    </div>

                                    <div class="clearer"></div>
                                    <div class="add-to-box">
                                        <div class="add-to-cart">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <td>Выбор объема</td>
                                                        <td>Цена со склада</td>
                                                        <?php if (isset($volumes[0]) && $volumes[0]['price_pz'] > 0): ?>
                                                            <td>Цена под заказ от 100шт.</td>
                                                        <?php endif; ?>
                                                        <td>Коли́чество</td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($volumes as $volume): ?>
                                                        <tr>
                                                            <td style="color: #08c;"><?= $volume['title']; ?> Гб</td>
                                                            <td style="color: #08c;"><?= $volume['price']; ?> руб.</td>
                                                            <?php if ($volume['price_pz'] > 0): ?>
                                                                <td style="color: #08c;"><?= $volume['price_pz']; ?> руб.</td>
                                                            <?php endif; ?>
                                                            <td>
                                                                <div class="qty-holder">
                                                                    <input data-price="<?= $volume['price']; ?>" type="text" data-vol="<?= $volume['title']; ?>" data-id="<?= $volume['id']; ?>" maxlength="1000" value="0" title="Qty" class="input-text qty">
                                                                    <div class="qty-changer">
                                                                        <a href="javascript:void(0)" class="qty_inc"><i class="icon-up-dir"></i></a>
                                                                        <a href="javascript:void(0)" class="qty_dec"><i class="icon-down-dir"></i></a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    <?php endforeach; ?>
                                                </tbody>
                                                </thead>
                                            </table>
                                            <button data-title="<?= $model->title; ?>" data-id="<?= $model->id; ?>" type="button" title="Добавить в корзину" class="button btn-cart addtocart">
                                                <span><span><i class="icon-cart"></i>Добавить в корзину</span></span>
                                            </button>
                                            <div style="padding: 10px;margin-top: 10px;border-radius: 5px; display:none;" id="error-message" class="alert alert-danger"></div>

                                        </div>
                                    </div>
                                    <div class="clearer"></div>
                                    <!-- Check whether the plugin is enabled -->
                                    <style>
                                        #at3win #at3winheader h3 {
                                            text-align:left !important;
                                        }
                                    </style>
                                </div>

                            </div>
                        </form>
                    </div>
                    <div class="box-collateral box-up-sell category-products">
                        <h2><span>Also Purchased</span></h2>
                        <ul class="products-grid columns4">
                            <li class="item nth-child-2np1 nth-child-3np1 nth-child-4np1"><div class="item-area">
                                    <div class="product-image-area">
                                        <a href="http://www.newsmartwave.net/magento/porto/index.php/demo5_en/motorola-kids-phone-grey-rolex.html" title="Motorola Kids Phone-Grey" class="product-image">
                                            <img class="" src="http://www.newsmartwave.net/magento/porto/media/catalog/product/cache/9/small_image/300x/17f82f742ffe127f42dca9de82fb58b1/2/3/23_4_2.jpg" alt="Motorola Kids Phone-Grey">

                                        </a>

                                        <div class="product-label" style="right: 10px; "><span class="new-product-icon">New</span></div>
                                    </div>
                                    <div class="details-area">
                                        <h2 class="product-name"><a href="http://www.newsmartwave.net/magento/porto/index.php/demo5_en/motorola-kids-phone-grey-rolex.html" title="Motorola Kids Phone-Grey">Motorola Kids Phone-Grey</a></h2>
                                        <div class="ratings">
                                            <div class="rating-box">
                                                <div class="rating" style="width:0"></div>
                                            </div>
                                        </div>



                                        <div class="price-box">
                                            <span class="regular-price" id="product-price-84">
                                                <span class="price">$189.00</span>                                    </span>

                                        </div>

                                        <div class="actions">
                                            <a href="javascript:void(0)" onclick="ajaxWishlist(this, 'http://www.newsmartwave.net/magento/porto/index.php/demo5_en/wishlist/index/add/product/84/form_key/BixTzLDQ5sdTL6OO/', '84');" class="addtowishlist" title="Add to Wishlist"><i class="icon-wishlist"></i></a>
                                            <a href="javascript:void(0)" class="addtocart" title="Add to Cart" onclick="setLocationAjax(this, 'http://www.newsmartwave.net/magento/porto/index.php/demo5_en/checkout/cart/add/uenc/aHR0cDovL3d3dy5uZXdzbWFydHdhdmUubmV0L21hZ2VudG8vcG9ydG8vaW5kZXgucGhwL2RlbW81X2VuL2VsZWN0cm9uaWNzL2NhbWVyYXMvY2VsbC1waG9uZXMtYWNjZXNzb3JpZXMvbW90b3JvbGEta2lkcy1waG9uZS1icm93bi1zYW1zdW5nLWdhbGF4eS5odG1s/product/84/form_key/BixTzLDQ5sdTL6OO/', '84')"><i class="icon-cart"></i><span>&nbsp;Add to Cart</span></a>
                                            <a href="javascript:void(0)" onclick="ajaxCompare(this, 'http://www.newsmartwave.net/magento/porto/index.php/demo5_en/catalog/product_compare/add/product/84/uenc/aHR0cDovL3d3dy5uZXdzbWFydHdhdmUubmV0L21hZ2VudG8vcG9ydG8vaW5kZXgucGhwL2RlbW81X2VuL2VsZWN0cm9uaWNzL2NhbWVyYXMvY2VsbC1waG9uZXMtYWNjZXNzb3JpZXMvbW90b3JvbGEta2lkcy1waG9uZS1icm93bi1zYW1zdW5nLWdhbGF4eS5odG1s/form_key/BixTzLDQ5sdTL6OO/', '84');" class="comparelink" title="Add to Compare"><i class="icon-compare"></i></a>
                                            <div class="clearer"></div>
                                        </div>
                                    </div>
                                </div></li>
                            <li class="item nth-child-2n"><div class="item-area">
                                    <div class="product-image-area">
                                        <a href="http://www.newsmartwave.net/magento/porto/index.php/demo5_en/motorola-kids-phone-charcoal-seiko.html" title="Motorola Phone-Charcoal" class="product-image">
                                            <img class="" src="http://www.newsmartwave.net/magento/porto/media/catalog/product/cache/9/small_image/300x/17f82f742ffe127f42dca9de82fb58b1/2/2/22_1_4.jpg" alt="Motorola Phone-Charcoal">

                                        </a>

                                        <div class="product-label" style="right: 10px; "><span class="new-product-icon">New</span></div>
                                    </div>
                                    <div class="details-area">
                                        <h2 class="product-name"><a href="http://www.newsmartwave.net/magento/porto/index.php/demo5_en/motorola-kids-phone-charcoal-seiko.html" title="Motorola Phone-Charcoal">Motorola Phone-Charcoal</a></h2>
                                        <div class="ratings">
                                            <div class="rating-box">
                                                <div class="rating" style="width:0"></div>
                                            </div>
                                        </div>



                                        <div class="price-box">
                                            <span class="regular-price" id="product-price-85">
                                                <span class="price">$199.00</span>                                    </span>

                                        </div>

                                        <div class="actions">
                                            <a href="javascript:void(0)" onclick="ajaxWishlist(this, 'http://www.newsmartwave.net/magento/porto/index.php/demo5_en/wishlist/index/add/product/85/form_key/BixTzLDQ5sdTL6OO/', '85');" class="addtowishlist" title="Add to Wishlist"><i class="icon-wishlist"></i></a>
                                            <a href="javascript:void(0)" class="addtocart" title="Add to Cart" onclick="setLocationAjax(this, 'http://www.newsmartwave.net/magento/porto/index.php/demo5_en/checkout/cart/add/uenc/aHR0cDovL3d3dy5uZXdzbWFydHdhdmUubmV0L21hZ2VudG8vcG9ydG8vaW5kZXgucGhwL2RlbW81X2VuL2VsZWN0cm9uaWNzL2NhbWVyYXMvY2VsbC1waG9uZXMtYWNjZXNzb3JpZXMvbW90b3JvbGEta2lkcy1waG9uZS1icm93bi1zYW1zdW5nLWdhbGF4eS5odG1s/product/85/form_key/BixTzLDQ5sdTL6OO/', '85')"><i class="icon-cart"></i><span>&nbsp;Add to Cart</span></a>
                                            <a href="javascript:void(0)" onclick="ajaxCompare(this, 'http://www.newsmartwave.net/magento/porto/index.php/demo5_en/catalog/product_compare/add/product/85/uenc/aHR0cDovL3d3dy5uZXdzbWFydHdhdmUubmV0L21hZ2VudG8vcG9ydG8vaW5kZXgucGhwL2RlbW81X2VuL2VsZWN0cm9uaWNzL2NhbWVyYXMvY2VsbC1waG9uZXMtYWNjZXNzb3JpZXMvbW90b3JvbGEta2lkcy1waG9uZS1icm93bi1zYW1zdW5nLWdhbGF4eS5odG1s/form_key/BixTzLDQ5sdTL6OO/', '85');" class="comparelink" title="Add to Compare"><i class="icon-compare"></i></a>
                                            <div class="clearer"></div>
                                        </div>
                                    </div>
                                </div></li>
                            <li class="item nth-child-2np1 nth-child-3n"><div class="item-area">
                                    <div class="product-image-area">
                                        <a href="http://www.newsmartwave.net/magento/porto/index.php/demo5_en/motorola-kids-phone-blue-adidas.html" title="Motorola Kids Phone-Blue" class="product-image">
                                            <img class="defaultImage" src="http://www.newsmartwave.net/magento/porto/media/catalog/product/cache/9/small_image/300x/17f82f742ffe127f42dca9de82fb58b1/2/5/25_2_7.jpg" alt="Motorola Kids Phone-Blue">
                                            <img class="hoverImage" src="http://www.newsmartwave.net/magento/porto/media/catalog/product/cache/9/thumbnail/300x/17f82f742ffe127f42dca9de82fb58b1/2/4/24_3_5.jpg" alt="Motorola Kids Phone-Blue">
                                        </a>

                                        <div class="product-label" style="right: 10px; "><span class="new-product-icon">New</span></div>
                                    </div>
                                    <div class="details-area">
                                        <h2 class="product-name"><a href="http://www.newsmartwave.net/magento/porto/index.php/demo5_en/motorola-kids-phone-blue-adidas.html" title="Motorola Kids Phone-Blue">Motorola Kids Phone-Blue</a></h2>
                                        <div class="ratings">
                                            <div class="rating-box">
                                                <div class="rating" style="width:0"></div>
                                            </div>
                                        </div>



                                        <div class="price-box">
                                            <span class="regular-price" id="product-price-86">
                                                <span class="price">$99.00</span>                                    </span>

                                        </div>

                                        <div class="actions">
                                            <a href="javascript:void(0)" onclick="ajaxWishlist(this, 'http://www.newsmartwave.net/magento/porto/index.php/demo5_en/wishlist/index/add/product/86/form_key/BixTzLDQ5sdTL6OO/', '86');" class="addtowishlist" title="Add to Wishlist"><i class="icon-wishlist"></i></a>
                                            <a href="javascript:void(0)" class="addtocart" title="Add to Cart" onclick="setLocationAjax(this, 'http://www.newsmartwave.net/magento/porto/index.php/demo5_en/checkout/cart/add/uenc/aHR0cDovL3d3dy5uZXdzbWFydHdhdmUubmV0L21hZ2VudG8vcG9ydG8vaW5kZXgucGhwL2RlbW81X2VuL2VsZWN0cm9uaWNzL2NhbWVyYXMvY2VsbC1waG9uZXMtYWNjZXNzb3JpZXMvbW90b3JvbGEta2lkcy1waG9uZS1icm93bi1zYW1zdW5nLWdhbGF4eS5odG1s/product/86/form_key/BixTzLDQ5sdTL6OO/', '86')"><i class="icon-cart"></i><span>&nbsp;Add to Cart</span></a>
                                            <a href="javascript:void(0)" onclick="ajaxCompare(this, 'http://www.newsmartwave.net/magento/porto/index.php/demo5_en/catalog/product_compare/add/product/86/uenc/aHR0cDovL3d3dy5uZXdzbWFydHdhdmUubmV0L21hZ2VudG8vcG9ydG8vaW5kZXgucGhwL2RlbW81X2VuL2VsZWN0cm9uaWNzL2NhbWVyYXMvY2VsbC1waG9uZXMtYWNjZXNzb3JpZXMvbW90b3JvbGEta2lkcy1waG9uZS1icm93bi1zYW1zdW5nLWdhbGF4eS5odG1s/form_key/BixTzLDQ5sdTL6OO/', '86');" class="comparelink" title="Add to Compare"><i class="icon-compare"></i></a>
                                            <div class="clearer"></div>
                                        </div>
                                    </div>
                                </div></li>
                            <li class="item nth-child-2n nth-child-3np1 nth-child-4n"><div class="item-area">
                                    <div class="product-image-area">
                                        <a href="http://www.newsmartwave.net/magento/porto/index.php/demo5_en/motorola-kids-phone-black-adidas.html" title="Motorola Kids - Adidas" class="product-image">
                                            <img class="" src="http://www.newsmartwave.net/magento/porto/media/catalog/product/cache/9/small_image/300x/17f82f742ffe127f42dca9de82fb58b1/2/6/26_3_5.jpg" alt="Motorola Kids - Adidas">
                                        </a>
                                        <div class="product-label" style="right: 10px; "><span class="new-product-icon">New</span></div>
                                    </div>
                                    <div class="details-area">
                                        <h2 class="product-name"><a href="http://www.newsmartwave.net/magento/porto/index.php/demo5_en/motorola-kids-phone-black-adidas.html" title="Motorola Kids - Adidas">Motorola Kids - Adidas</a></h2>
                                        <div class="ratings">
                                            <div class="rating-box">
                                                <div class="rating" style="width:0"></div>
                                            </div>
                                        </div>
                                        <div class="price-box">
                                            <span class="regular-price" id="product-price-87">
                                                <span class="price">$199.00</span>                                    
                                            </span>
                                        </div>
                                        <div class="actions">
                                            <a href="javascript:void(0)" onclick="ajaxWishlist(this, 'http://www.newsmartwave.net/magento/porto/index.php/demo5_en/wishlist/index/add/product/87/form_key/BixTzLDQ5sdTL6OO/', '87');" class="addtowishlist" title="Add to Wishlist"><i class="icon-wishlist"></i></a>
                                            <a href="javascript:void(0)" class="addtocart" title="Add to Cart" onclick="setLocationAjax(this, 'http://www.newsmartwave.net/magento/porto/index.php/demo5_en/checkout/cart/add/uenc/aHR0cDovL3d3dy5uZXdzbWFydHdhdmUubmV0L21hZ2VudG8vcG9ydG8vaW5kZXgucGhwL2RlbW81X2VuL2VsZWN0cm9uaWNzL2NhbWVyYXMvY2VsbC1waG9uZXMtYWNjZXNzb3JpZXMvbW90b3JvbGEta2lkcy1waG9uZS1icm93bi1zYW1zdW5nLWdhbGF4eS5odG1s/product/87/form_key/BixTzLDQ5sdTL6OO/', '87')"><i class="icon-cart"></i><span>&nbsp;Add to Cart</span></a>
                                            <a href="javascript:void(0)" onclick="ajaxCompare(this, 'http://www.newsmartwave.net/magento/porto/index.php/demo5_en/catalog/product_compare/add/product/87/uenc/aHR0cDovL3d3dy5uZXdzbWFydHdhdmUubmV0L21hZ2VudG8vcG9ydG8vaW5kZXgucGhwL2RlbW81X2VuL2VsZWN0cm9uaWNzL2NhbWVyYXMvY2VsbC1waG9uZXMtYWNjZXNzb3JpZXMvbW90b3JvbGEta2lkcy1waG9uZS1icm93bi1zYW1zdW5nLWdhbGF4eS5odG1s/form_key/BixTzLDQ5sdTL6OO/', '87');" class="comparelink" title="Add to Compare"><i class="icon-compare"></i></a>
                                            <div class="clearer"></div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-right sidebar col-sm-3">
                <div class="custom-block custom-block-1">
                    <div>
                        <i class="icon-truck"></i><h3>FREE SHIPPING</h3><p>Free shipping on all orders over $99.</p>
                    </div>
                    <div>
                        <i class="icon-dollar"></i><h3>MONEY BACK GUARANTEE</h3><p>100% money back guarantee.</p>
                    </div>
                    <div>
                        <i class="icon-lifebuoy"></i><h3>ONLINE SUPPORT 24/7</h3><p>Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    //<![CDATA[
    $$('.related-checkbox').each(function (elem) {
        Event.observe(elem, 'click', addRelatedToProduct)
    });

    var relatedProductsCheckFlag = false;
    function selectAllRelated(txt) {
        if (relatedProductsCheckFlag == false) {
            $$('.related-checkbox').each(function (elem) {
                elem.checked = true;
            });
            relatedProductsCheckFlag = true;
            txt.innerHTML = "unselect all";
        } else {
            $$('.related-checkbox').each(function (elem) {
                elem.checked = false;
            });
            relatedProductsCheckFlag = false;
            txt.innerHTML = "select all";
        }
        addRelatedToProduct();
    }

    function addRelatedToProduct() {
        var checkboxes = $$('.related-checkbox');
        var values = [];
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].checked)
                values.push(checkboxes[i].value);
        }
        if ($('related-products-field')) {
            $('related-products-field').value = values.join(',');
        }
    }
    jQuery(function ($) {
        $("#block-related").owlCarousel({
            navigation: true, // Show next and prev buttons
            slideSpeed: 300,
            paginationSpeed: 400,
            singleItem: true,
            pagination: false,
            navigationText: ["<i class='icon-left-open'></i>", "<i class='icon-right-open'></i>"]
        });
    });
    jQuery(function ($) {
        $("#latest_news .owl-carousel").owlCarousel({
            lazyLoad: true,
            itemsCustom: [[0, 1], [320, 1], [480, 1], [640, 2], [768, 2], [992, 2], [1200, 2]],
            responsiveRefreshRate: 50,
            slideSpeed: 200,
            paginationSpeed: 500,
            scrollPerPage: false,
            stopOnHover: true,
            rewindNav: true,
            rewindSpeed: 600,
            pagination: false,
            navigation: true,
            autoPlay: true,
            navigationText: ["<i class='icon-left-open'></i>", "<i class='icon-right-open'></i>"]
        });
        function removeFromBasket(id) {
            if ($.cookie('basket')) {
                data = JSON.parse($.cookie('basket'));
                for (var i = 0; i < data.rows.length; i++) {
                    if (data.rows[i] != null && data.rows[i]['id'] == id)
                        delete data.rows[i];
                }
                $.cookie("basket", JSON.stringify(data), {expires: 31, path: '/'});
            }
        }
        $("body").on("click", ".btn-remove", function () {
            var id = $(this).data('id');
            removeFromBasket(id);
            showBasket();
        });
        function removeFromBasketSingle(id, c) {
            if ($.cookie('basket')) {
                data = JSON.parse($.cookie('basket'));
                var total = 0;
                for (var i = 0; i < data.rows.length; i++) {
                    if (data.rows[i] != null && data.rows[i]['id'] == id) {
                        total = parseInt(data.rows[i]['quantity']) - parseInt(c);
                        if (total <= 0)
                            delete data.rows[i];
                        else
                            data.rows[i]['quantity'] = total;
                    }
                }
                $.cookie("basket", JSON.stringify(data), {expires: 31, path: '/'});
            }
        }
        function isEmptyBasket() {
            if ($.cookie('basket')) {
                var items = JSON.parse($.cookie("basket"));
                var totalCount = true;
                for (var i = 0; i < items.rows.length; i++) {
                    if (items.rows[i] != null) {
                        totalCount = false;
                    }
                }
            } else
                totalCount = false;
            if (totalCount) {
                $('.topCartContent .inner-wrapper').html('<p class="cart-empty">Ваша корзина пуста, пожалуйста добавьте товары</p>');
                return true;
            }
            return false;
        }
        function productsCount() {
            if ($.cookie('basket')) {
                var items = JSON.parse($.cookie("basket"));
                var totalCount = 0;
                for (var i = 0; i < items.rows.length; i++) {
                    if (items.rows[i] != null) {
                        totalCount += parseInt(items.rows[i]['quantity']);
                    }
                }
                if (totalCount > 0)
                    return totalCount;
                else
                    return false;
            } else
                return false;
        }
        function showBasket() {
            if (isEmptyBasket()) {
                return false;
            }
            if ($.cookie('basket')) {
                items = JSON.parse($.cookie("basket"));
                $('#total').show();
                var totalItems = 0;
                var html = '<ol class="mini-products-list">';
                var totalSum = 0;
                for (var i = 0; i < items.rows.length; i++)
                {
                    if (items.rows[i] != null) {
                        totalItems += 1;
                        totalSum += parseInt(items.rows[i]['prices']['total']) * parseInt(items.rows[i]['quantity']);
                        var prices = items.rows[i]['prices'];
                        var vols = '';
                        for (var a = 0; a < prices.rows.length; a++) {
                            vols += '<p class="qty-price">' + prices.rows[a]['count'] + ' X ' + prices.rows[a]['vol'] + ' Гб = <span class="price">' + parseInt(prices.rows[a]['count']) * parseInt(prices.rows[a]['price']) + ' Руб.</span></p>';
                        }
                        html += '<li class="item">' +
                                '<a href="#" title="' + items.rows[i]['name'] + '" class="product-image"><img src="' + items.rows[i]['img'] + '" alt=""></a>' +
                                '<div class="product-details">' +
                                '<p class="product-name">' +
                                '<a href="#">' + items.rows[i]['name'] + '</a>' +
                                '</p>' + vols +
                                '<a href="#" title="' + items.rows[i]['name'] + '" data-id="' + items.rows[i]['id'] + '" class="btn-remove"><i class="icon-cancel"></i></a>' +
                                '</div>' +
                                '<div class="clearer"></div>' +
                                '</li>';

                    }
                }
                html += '</ol>';
                $('.topCartContent .inner-wrapper').html(html);
                var ttl = '<div style="float:left;" class="totals"><span class="label">Итого: </span><span class="price-total"><span class="price">' + totalSum + '</span></span></div>';
                var buttons = '<div class="actions"><a class="btn btn-default" href=""><i class="icon-basket"></i>Корзина</a>&nbsp;&nbsp;&nbsp;<a class="btn btn-default" href=""><i class="icon-right-thin"></i>Оформить заказ</a><div class="clearer"></div>';
                $(".cart-qty").text(totalItems);
                $('.topCartContent .inner-wrapper').append(ttl + buttons);
            }
            isEmptyBasket();
        }

        var data = {"total": 0, "rows": []};
        var totalCost = 0;
        function addProduct(id, name, prices, img, colors) {
            if ($.cookie('basket')) {
                var items = JSON.parse($.cookie("basket"));
                if (items.rows[0] != null) {
                    data = JSON.parse($.cookie('basket'));
                }
            }
            function add() {

                for (var i = 0; i < data.total; i++) {
                    if (items.rows[i] != null) {
                        var row = data.rows[i];
                        if (typeof row.id !== "undefined" && row.id == id) {
                            row.quantity += 1;
                            for (var a = 0; a < row.prices.rows.length; a++) {

                                if (typeof row.prices !== "undefined" && typeof prices.rows[a].id !== "undefined" && row.prices.rows[a].id == prices.rows[a].id) {
                                    prices.rows[a].count += row.prices.rows[a].count;
                                }
                            }
                            row.prices = prices;

                            return;
                        }
                    }
                }

                data.total += 1;
                data.rows.push({
                    id: id,
                    quantity: 1,
                    prices: prices,
                    name: name,
                    img: img,
                    colors: colors,
                });
            }
            add();
            totalCost += prices.total;
            $.cookie("basket", JSON.stringify(data), {expires: 31, path: '/'});
        }

        $('.addtocart').on('click', function () {
            var colors = $("input:checkbox:checked");
            var prices = $(".qty-holder input.qty");
            var prod_id = $(this).data('id');
            var prod_title = $(this).data('title');

            var cart = $('.mini-cart');
            var prc = false;
            var imgtodrag = $('.etalage_thumb').find("img").eq(0);
            $("#error-message").hide();
            if (colors.length <= 0) {
                $("#error-message").text("Выберите интересующие вас цвета");
                $("#error-message").show();
                return;
            }

            var pricesList = {"total": 0, "rows": []};
            var colorsList = {"total": 0, "rows": []};
            $(prices).each(function (e, i) {
                if ($(this).val() > 0) {
                    pricesList.total += parseInt($(this).val()) * parseInt($(this).data("price"));
                    pricesList.rows.push({
                        count: parseInt($(this).val()),
                        vol: $(this).data("vol"),
                        id: $(this).data("id"),
                        price: $(this).data("price")
                    });
                    prc = true;
                }
            });
            if (!prc) {
                $("#error-message").text(" Выберите интересующие вас объемы");
                $("#error-message").show();
                return;
            }
            $(colors).each(function (e, i) {
                colorsList.total += 1;
                colorsList.rows.push({
                    val: $(this).data("val"),
                    id: $(this).data("id"),
                    title: $(this).data("title")
                });
            });

            if (imgtodrag) {
                var imgclone = imgtodrag.clone()
                        .offset({
                            top: $(this).offset().top,
                            left: $(this).offset().left
                        })
                        .css({
                            'opacity': '0.5',
                            'position': 'absolute',
                            'height': '150px',
                            'width': '150px',
                            'z-index': '100'
                        })
                        .appendTo($('body'))
                        .animate({
                            'top': cart.offset().top + 10,
                            'left': cart.offset().left + 10,
                            'width': 75,
                            'height': 75
                        }, 1000, 'easeInOutExpo');

                setTimeout(function () {
                    addProduct(prod_id, prod_title, pricesList, imgtodrag.attr("src"), colorsList);
                    showBasket();
                    cart.effect("shake", {
                        times: 2
                    }, 200);
                }, 1500);

                imgclone.animate({
                    'width': 0,
                    'height': 0
                }, function () {
                    $(this).detach()
                });
            }
            return false;
        });
        showBasket();
    });

</script>  