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
                                        <?php if (!empty($colors)): ?>
                                            <?php foreach ($colors as $color): ?>
                                                <li class="etalage_thumb thumb_<?= $color['color_id']; ?> etalage_thumb_active" style="display: list-item; opacity: 1; position: absolute; overflow: hidden; background-image: none;">
                                                    <a rel="gallery" class="fancy-images fancy-images_<?= $color['color_id']; ?>" href="<?= $assets . '/uploads/images/' . $color['image']; ?>"><span class="glyphicon glyphicon-search"></span></a>
                                                    <img class="etalage_thumb_image" src="<?= $assets . '/uploads/images/' . $color['image']; ?>" alt="" style="display: inline; width: 329px; height: auto; opacity: 1;">
                                                    <img class="etalage_source_image" src="<?= $assets . '/uploads/images/' . $color['image']; ?>" alt="">                                                
                                                </li>
                                            <?php endforeach; ?>
                                        <?php else: ?>
                                                <li class="etalage_thumb" style="display: list-item; opacity: 1; position: absolute; overflow: hidden; background-image: none;">                                                    
                                                    <img src="/images/no-image.png" alt="" style="display: inline; width: 329px; height: auto; opacity: 1;">                                                                                            
                                                </li>
                                        <?php endif; ?>
                                    </ul>
                                    <div class="etalage-control">
                                        <a href="javascript:void(0)" class="etalage-prev"><i class="icon-angle-left"></i></a>
                                        <a href="javascript:void(0)" class="etalage-next"><i class="icon-angle-right"></i></a>
                                    </div>
                                    <div class="clear"></div><br><br><br><br><br><br><br><br><br>
                                    <?php if (!empty($colorButtons)): ?>
                                        <span>Выбор цвета</span><br><br>
                                        <div class="btn-group" data-toggle="buttons">
                                            <?php foreach ($colorButtons as $color): ?>
                                                <label class="btn btn-success" for="check-<?= $color['color_id']; ?>" style="border: 2px solid #08c;background-color: <?= $color['value']; ?>">
                                                    <input id="check-<?= $color['color_id']; ?>" data-title="<?= $color['title']; ?>" data-val="<?= $color['value']; ?>" data-id="<?= $color['color_id']; ?>" type="checkbox" name="colors[]" autocomplete="off">
                                                    <span class="glyphicon glyphicon-ok"></span>
                                                </label>
                                            <?php endforeach; ?>
                                        </div>
                                    <?php endif; ?>
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
                                            <?php if (!empty($volumes)): ?>
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
                                            <?php endif; ?>
                                            <?php if(!empty($model->price)): ?><h2 id="up-price" data-price="<?= $model->price; ?>">Цена: <?= $model->price; ?> руб.</h2><?php endif; ?>
                                            <button data-title="<?= $model->title; ?>" data-id="<?= $model->id; ?>" type="button" title="Добавить в корзину" class="button btn-cart <?= $model->type == 'upakovka' ? 'addtocart2' : 'addtocart'; ?>">
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