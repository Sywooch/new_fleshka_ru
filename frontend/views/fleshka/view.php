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
                                            <li class="etalage_thumb thumb_<?= $color['id']; ?> etalage_thumb_active" style="display: list-item; opacity: 1; position: absolute; overflow: hidden; background-image: none;">
                                                <a rel="gallery" class="fancy-images fancy-images_<?= $color['id']; ?>" href="<?= $assets . '/uploads/images/' . $color['image']; ?>"><span class="glyphicon glyphicon-search"></span></a>
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
                                            <label class="btn btn-success" style="border: 2px solid #08c;background-color: <?= $color['value']; ?>">
                                                <input type="checkbox" autocomplete="off" checked>
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
                                                if (jQuery(this).parent().hasClass("active"))
                                                    jQuery(this).parent().removeClass("active");
                                                else
                                                    jQuery(this).parent().addClass("active");
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
                                                                    <input type="text" name="qty" id="qty" maxlength="1000" value="0" title="Qty" class="input-text qty">
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
                                            <button type="button" title="Добавить в корзину" class="button btn-cart"><span><span><i class="icon-cart"></i>Добавить в корзину</span></span></button>
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
                    <div class="product-collateral">
                        <div class="product-tabs horizontal">
                            <ul>
                                <li id="tab_description_tabbed" class=" active first"><a href="javascript:void(0)">Description</a></li>
                                <li id="tab_additional_tabbed" class=""><a href="javascript:void(0)">Additional</a></li>
                                <li id="tab_tags_tabbed" class=""><a href="javascript:void(0)">Tags</a></li>
                                <li id="tab_review_tabbed" class=""><a href="javascript:void(0)">Reviews</a></li>
                            </ul>
                            <div class="clearer"></div>
                            <div class="tab-content" id="tab_description_tabbed_contents">    <h2>Details</h2>
                                <div class="std">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                                    <ul>
                                        <li>Any Product types that You want - Simple, Configurable, Bundled and Grouped Products</li>
                                        <li>Downloadable/Digital Products, Virtual Products</li>
                                        <li>Inventory Management with Backordered items</li>
                                        <li>Customer Personalized Products - upload text for embroidery, monogramming, etc.</li>
                                        <li>Create Store-specific attributes on the fly</li>
                                        <li>Advanced Pricing Rules and support for Special Prices</li>
                                        <li>Tax Rates per location, customer group and product type</li>
                                        <li>Detailed Configuration Options in Theme Admin Penl</li>
                                    </ul>    </div>
                            </div>
                            <div class="tab-content" id="tab_additional_tabbed_contents" style="display: none;">    <h2>Additional Information</h2>
                                <table class="data-table" id="product-attribute-specs-table">
                                    <colgroup><col width="25%">
                                        <col>
                                    </colgroup><tbody>
                                        <tr class="first last odd">
                                            <th class="label">Color</th>
                                            <td class="data last">Brown</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <script type="text/javascript">decorateTable('product-attribute-specs-table')</script>
                            </div>
                            <div class="tab-content" id="tab_tags_tabbed_contents" style="display: none;"><div class="box-collateral box-tags">
                                    <h2>Product Tags</h2>
                                    <form id="addTagForm" action="http://www.newsmartwave.net/magento/porto/index.php/demo5_en/tag/index/save/product/82/uenc/aHR0cDovL3d3dy5uZXdzbWFydHdhdmUubmV0L21hZ2VudG8vcG9ydG8vaW5kZXgucGhwL2RlbW81X2VuL2VsZWN0cm9uaWNzL2NhbWVyYXMvY2VsbC1waG9uZXMtYWNjZXNzb3JpZXMvbW90b3JvbGEta2lkcy1waG9uZS1icm93bi1zYW1zdW5nLWdhbGF4eS5odG1s/" method="get">
                                        <div class="form-add">
                                            <label for="productTagName">Add Your Tags:</label>
                                            <div class="input-box">
                                                <input type="text" class="input-text required-entry" name="productTagName" id="productTagName">
                                            </div>
                                            <button type="button" title="Add Tags" class="button" onclick="submitTagForm()">
                                                <span>
                                                    <span>Add Tags</span>
                                                </span>
                                            </button>
                                        </div>
                                    </form>
                                    <p class="note">Use spaces to separate tags. Use single quotes (') for phrases.</p>
                                    <script type="text/javascript">
                                        //<![CDATA[
                                        var addTagFormJs = new VarienForm('addTagForm');
                                        function submitTagForm() {
                                            if (addTagFormJs.validator.validate()) {
                                                addTagFormJs.form.submit();
                                            }
                                        }
                                        //]]>
                                    </script>
                                </div>
                            </div>
                            <div class="tab-content" id="tab_review_tabbed_contents" style="display: none;">
                                <div class="collateral-box" id="product-customer-reviews">
                                    <ol><li>Be the first to review this product</li></ol>
                                </div>

                                <div class="add-review">
                                    <div class="form-add">
                                        <h3>Write Your Own Review</h3>
                                        <div class="block-content">
                                            <form action="http://www.newsmartwave.net/magento/porto/index.php/demo5_en/review/product/post/id/82/" method="post" id="review-form">
                                                <input name="form_key" type="hidden" value="BixTzLDQ5sdTL6OO">
                                                <fieldset>
                                                    <h4>How do you rate this product? <em class="required">*</em></h4>
                                                    <span id="input-message-box"></span>
                                                    <table class="data-table ratings-table" id="product-review-table">
                                                        <thead>
                                                            <tr class="first last">
                                                                <th class="a-center">&nbsp;</th>
                                                                <th class="a-center"><span class="nobr">1 star</span></th>
                                                                <th class="a-center"><span class="nobr">2 stars</span></th>
                                                                <th class="a-center"><span class="nobr">3 stars</span></th>
                                                                <th class="a-center"><span class="nobr">4 stars</span></th>
                                                                <th class="a-center"><span class="nobr">5 stars</span></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr class="first odd">
                                                                <th>Quality</th>
                                                                <td class="value a-center"><input type="radio" name="ratings[1]" id="Quality_1" value="1" class="radio"></td>
                                                                <td class="value a-center"><input type="radio" name="ratings[1]" id="Quality_2" value="2" class="radio"></td>
                                                                <td class="value a-center"><input type="radio" name="ratings[1]" id="Quality_3" value="3" class="radio"></td>
                                                                <td class="value a-center"><input type="radio" name="ratings[1]" id="Quality_4" value="4" class="radio"></td>
                                                                <td class="value a-center last"><input type="radio" name="ratings[1]" id="Quality_5" value="5" class="radio"></td>
                                                            </tr>
                                                            <tr class="even">
                                                                <th>Value</th>
                                                                <td class="value a-center"><input type="radio" name="ratings[2]" id="Value_1" value="6" class="radio"></td>
                                                                <td class="value a-center"><input type="radio" name="ratings[2]" id="Value_2" value="7" class="radio"></td>
                                                                <td class="value a-center"><input type="radio" name="ratings[2]" id="Value_3" value="8" class="radio"></td>
                                                                <td class="value a-center"><input type="radio" name="ratings[2]" id="Value_4" value="9" class="radio"></td>
                                                                <td class="value a-center last"><input type="radio" name="ratings[2]" id="Value_5" value="10" class="radio"></td>
                                                            </tr>
                                                            <tr class="last odd">
                                                                <th>Price</th>
                                                                <td class="value a-center"><input type="radio" name="ratings[3]" id="Price_1" value="11" class="radio"></td>
                                                                <td class="value a-center"><input type="radio" name="ratings[3]" id="Price_2" value="12" class="radio"></td>
                                                                <td class="value a-center"><input type="radio" name="ratings[3]" id="Price_3" value="13" class="radio"></td>
                                                                <td class="value a-center"><input type="radio" name="ratings[3]" id="Price_4" value="14" class="radio"></td>
                                                                <td class="value a-center last"><input type="radio" name="ratings[3]" id="Price_5" value="15" class="radio"></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <input type="hidden" name="validate_rating" class="validate-rating" value="">
                                                    <script type="text/javascript">decorateTable('product-review-table')</script>
                                                    <ul class="form-list">
                                                        <li>
                                                            <label for="nickname_field" class="required"><em>*</em>Nickname</label>
                                                            <div class="input-box">
                                                                <input type="text" name="nickname" id="nickname_field" class="input-text required-entry" value="">
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <label for="summary_field" class="required"><em>*</em>Summary of Your Review</label>
                                                            <div class="input-box">
                                                                <input type="text" name="title" id="summary_field" class="input-text required-entry" value="">
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <label for="review_field" class="required"><em>*</em>Review</label>
                                                            <div class="input-box">
                                                                <textarea name="detail" id="review_field" cols="5" rows="3" class="required-entry"></textarea>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </fieldset>
                                                <div class="buttons-set">
                                                    <button type="submit" title="Submit Review" class="button"><span><span>Submit Review</span></span></button>
                                                </div>
                                            </form>
                                            <script type="text/javascript">
                                                //<![CDATA[
                                                var dataForm = new VarienForm('review-form');
                                                Validation.addAllThese(
                                                        [
                                                            ['validate-rating', 'Please select one of each of the ratings above', function (v) {
                                                                    var trs = $('product-review-table').select('tr');
                                                                    var inputs;
                                                                    var error = 1;

                                                                    for (var j = 0; j < trs.length; j++) {
                                                                        var tr = trs[j];
                                                                        if (j > 0) {
                                                                            inputs = tr.select('input');

                                                                            for (i in inputs) {
                                                                                if (inputs[i].checked == true) {
                                                                                    error = 0;
                                                                                }
                                                                            }

                                                                            if (error == 1) {
                                                                                return false;
                                                                            } else {
                                                                                error = 1;
                                                                            }
                                                                        }
                                                                    }
                                                                    return true;
                                                                }]
                                                        ]
                                                        );
                                                //]]>
                                            </script>
                                        </div>
                                    </div>
                                </div></div>
                            <script type="text/javascript">
                                //<![CDATA[
                                new Varien.Tabs('.product-tabs > ul');
                                //]]>
                            </script>
                            <div class="clearer"></div>
                        </div>
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
                                                <span class="price">$199.00</span>                                    </span>

                                        </div>

                                        <div class="actions">
                                            <a href="javascript:void(0)" onclick="ajaxWishlist(this, 'http://www.newsmartwave.net/magento/porto/index.php/demo5_en/wishlist/index/add/product/87/form_key/BixTzLDQ5sdTL6OO/', '87');" class="addtowishlist" title="Add to Wishlist"><i class="icon-wishlist"></i></a>
                                            <a href="javascript:void(0)" class="addtocart" title="Add to Cart" onclick="setLocationAjax(this, 'http://www.newsmartwave.net/magento/porto/index.php/demo5_en/checkout/cart/add/uenc/aHR0cDovL3d3dy5uZXdzbWFydHdhdmUubmV0L21hZ2VudG8vcG9ydG8vaW5kZXgucGhwL2RlbW81X2VuL2VsZWN0cm9uaWNzL2NhbWVyYXMvY2VsbC1waG9uZXMtYWNjZXNzb3JpZXMvbW90b3JvbGEta2lkcy1waG9uZS1icm93bi1zYW1zdW5nLWdhbGF4eS5odG1s/product/87/form_key/BixTzLDQ5sdTL6OO/', '87')"><i class="icon-cart"></i><span>&nbsp;Add to Cart</span></a>
                                            <a href="javascript:void(0)" onclick="ajaxCompare(this, 'http://www.newsmartwave.net/magento/porto/index.php/demo5_en/catalog/product_compare/add/product/87/uenc/aHR0cDovL3d3dy5uZXdzbWFydHdhdmUubmV0L21hZ2VudG8vcG9ydG8vaW5kZXgucGhwL2RlbW81X2VuL2VsZWN0cm9uaWNzL2NhbWVyYXMvY2VsbC1waG9uZXMtYWNjZXNzb3JpZXMvbW90b3JvbGEta2lkcy1waG9uZS1icm93bi1zYW1zdW5nLWdhbGF4eS5odG1s/form_key/BixTzLDQ5sdTL6OO/', '87');" class="comparelink" title="Add to Compare"><i class="icon-compare"></i></a>
                                            <div class="clearer"></div>
                                        </div>
                                    </div>
                                </div></li>
                        </ul>
                        <script type="text/javascript">
                            jQuery('.col-main .products-grid li:nth-child(2n)').addClass('nth-child-2n');
                            jQuery('.col-main .products-grid li:nth-child(2n+1)').addClass('nth-child-2np1');
                            jQuery('.col-main .products-grid li:nth-child(3n)').addClass('nth-child-3n');
                            jQuery('.col-main .products-grid li:nth-child(3n+1)').addClass('nth-child-3np1');
                            jQuery('.col-main .products-grid li:nth-child(4n)').addClass('nth-child-4n');
                            jQuery('.col-main .products-grid li:nth-child(4n+1)').addClass('nth-child-4np1');
                        </script>
                    </div>
                </div>
                <script type="text/javascript">
                    jQuery(function ($) {
                        $("body.quickview-index-view .no-rating a, body.quickview-index-view .ratings a").off('click').on("click", function (e) {
                            window.parent.location.href = $(this).attr("href");
                            window.parent.jQuery.fancybox.close();
                        });
                    });
                </script>
                <script type="text/javascript">
                    var lifetime = 3600;
                    var expireAt = Mage.Cookies.expires;
                    if (lifetime > 0) {
                        expireAt = new Date();
                        expireAt.setTime(expireAt.getTime() + lifetime * 1000);
                    }
                    Mage.Cookies.set('external_no_cache', 1, expireAt);
                </script>
            </div>
            <div class="col-right sidebar col-sm-3">

                <div class="block block-manufacturer">
                    <a href="http://www.newsmartwave.net/magento/porto/index.php/demo5_en/manufacturers/samsung-galaxy/" title="Samsung Galaxy"><img src="http://www.newsmartwave.net/magento/porto/media/manufacturer/brand5.png" title="Samsung Galaxy"></a>
                    <hr>
                </div>

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
                </div><div class="custom-block">
                    <div id="custom-owl-slider-product" class="owl-carousel owl-theme" style="opacity: 1; display: block;">
                        <div class="owl-wrapper-outer"><div class="owl-wrapper" style="width: 1064px; left: 0px; display: block;"><div class="owl-item" style="width: 266px;"><div class="item"><img class="lazyOwl" src="http://www.newsmartwave.net/magento/porto/media/wysiwyg/porto/ads/blue/ad1.jpg" alt="" style="display: inline;"></div></div><div class="owl-item loading" style="width: 266px;"><div class="item"><img class="lazyOwl" src="http://www.newsmartwave.net/magento/porto/media/wysiwyg/porto/ads/blue/ad2.jpg" data-src="http://www.newsmartwave.net/magento/porto/media/wysiwyg/porto/ads/blue/ad2.jpg" alt="" style="display: none;"></div></div></div></div>

                        <div class="owl-controls clickable"><div class="owl-pagination"><div class="owl-page active"><span class=""></span></div><div class="owl-page"><span class=""></span></div></div></div></div>
                    <script type="text/javascript">
                        jQuery(function ($) {
                            $("#custom-owl-slider-product").owlCarousel({
                                lazyLoad: true,
                                slideSpeed: 300,
                                paginationSpeed: 400,
                                singleItem: true,
                                responsiveRefreshRate: 50,
                                slideSpeed: 200,
                                        paginationSpeed: 500,
                                        stopOnHover: true,
                                rewindNav: true,
                                rewindSpeed: 600,
                                navigation: false
                            });

                        });
                    </script>
                </div><div class="block block-related">
                    <div class="block-title">
                        <strong><span>Related Products</span></strong>
                    </div>
                    <div class="block-content">
                        <p class="block-subtitle">Check items to add to the cart or&nbsp;<a href="#" onclick="selectAllRelated(this);
                                return false;">select all</a></p>
                        <div class="owl-carousel owl-theme" id="block-related" style="opacity: 1; display: block;">
                            <div class="owl-wrapper-outer"><div class="owl-wrapper" style="width: 1064px; left: 0px; display: block;"><div class="owl-item" style="width: 266px;"><div class="item">
                                            <div class="product">
                                                <input type="checkbox" class="checkbox related-checkbox" id="related-checkbox86" name="related_products[]" value="86">
                                                <div class="row">
                                                    <div class="col-xs-6">
                                                        <a href="http://www.newsmartwave.net/magento/porto/index.php/demo5_en/motorola-kids-phone-blue-adidas.html" title="Motorola Kids Phone-Blue" class="product-image"><img src="http://www.newsmartwave.net/magento/porto/media/catalog/product/cache/9/thumbnail/300x/17f82f742ffe127f42dca9de82fb58b1/2/4/24_3_5.jpg" alt="Motorola Kids Phone-Blue"></a>
                                                    </div>
                                                    <div class="product-details col-xs-6">
                                                        <p class="product-name"><a href="http://www.newsmartwave.net/magento/porto/index.php/demo5_en/motorola-kids-phone-blue-adidas.html">Motorola Kids Phone-Blue</a></p>
                                                        <div class="ratings">
                                                            <div class="rating-box">
                                                                <div class="rating" style="width:0"></div>
                                                            </div>
                                                        </div>



                                                        <div class="price-box">
                                                            <span class="regular-price" id="product-price-86-related">
                                                                <span class="price">$99.00</span>                                    </span>

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product">
                                                <input type="checkbox" class="checkbox related-checkbox" id="related-checkbox87" name="related_products[]" value="87">
                                                <div class="row">
                                                    <div class="col-xs-6">
                                                        <a href="http://www.newsmartwave.net/magento/porto/index.php/demo5_en/motorola-kids-phone-black-adidas.html" title="Motorola Kids - Adidas" class="product-image"><img src="http://www.newsmartwave.net/magento/porto/media/catalog/product/cache/9/thumbnail/300x/17f82f742ffe127f42dca9de82fb58b1/2/6/26_3_5.jpg" alt="Motorola Kids - Adidas"></a>
                                                    </div>
                                                    <div class="product-details col-xs-6">
                                                        <p class="product-name"><a href="http://www.newsmartwave.net/magento/porto/index.php/demo5_en/motorola-kids-phone-black-adidas.html">Motorola Kids - Adidas</a></p>
                                                        <div class="ratings">
                                                            <div class="rating-box">
                                                                <div class="rating" style="width:0"></div>
                                                            </div>
                                                        </div>



                                                        <div class="price-box">
                                                            <span class="regular-price" id="product-price-87-related">
                                                                <span class="price">$199.00</span>                                    </span>

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product">
                                                <div class="row">
                                                    <div class="col-xs-6">
                                                        <a href="http://www.newsmartwave.net/magento/porto/index.php/demo5_en/samsung-galaxy-phone-142.html" title="Samsung Galaxy Phone" class="product-image"><img src="http://www.newsmartwave.net/magento/porto/media/catalog/product/cache/9/thumbnail/300x/17f82f742ffe127f42dca9de82fb58b1/2/4/24_2_5.jpg" alt="Samsung Galaxy Phone"></a>
                                                    </div>
                                                    <div class="product-details col-xs-6">
                                                        <p class="product-name"><a href="http://www.newsmartwave.net/magento/porto/index.php/demo5_en/samsung-galaxy-phone-142.html">Samsung Galaxy Phone</a></p>
                                                        <div class="ratings">
                                                            <div class="rating-box">
                                                                <div class="rating" style="width:0"></div>
                                                            </div>
                                                        </div>



                                                        <div class="price-box">
                                                            <span class="regular-price" id="product-price-88-related">
                                                                <span class="price">$279.00</span>                                    </span>

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div></div><div class="owl-item" style="width: 266px;"><div class="item">                                <div class="product">
                                                <input type="checkbox" class="checkbox related-checkbox" id="related-checkbox89" name="related_products[]" value="89">
                                                <div class="row">
                                                    <div class="col-xs-6">
                                                        <a href="http://www.newsmartwave.net/magento/porto/index.php/demo5_en/samsung-galaxy-phone-black-154.html" title="Samsung Galaxy - Black" class="product-image"><img src="http://www.newsmartwave.net/magento/porto/media/catalog/product/cache/9/thumbnail/300x/17f82f742ffe127f42dca9de82fb58b1/2/8/28_14.jpg" alt="Samsung Galaxy - Black"></a>
                                                    </div>
                                                    <div class="product-details col-xs-6">
                                                        <p class="product-name"><a href="http://www.newsmartwave.net/magento/porto/index.php/demo5_en/samsung-galaxy-phone-black-154.html">Samsung Galaxy - Black</a></p>
                                                        <div class="ratings">
                                                            <div class="rating-box">
                                                                <div class="rating" style="width:0"></div>
                                                            </div>
                                                        </div>



                                                        <div class="price-box">
                                                            <span class="regular-price" id="product-price-89-related">
                                                                <span class="price">$319.00</span>                                    </span>

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product">
                                                <input type="checkbox" class="checkbox related-checkbox" id="related-checkbox90" name="related_products[]" value="90">
                                                <div class="row">
                                                    <div class="col-xs-6">
                                                        <a href="http://www.newsmartwave.net/magento/porto/index.php/demo5_en/samsung-galaxy-phone-blue-146.html" title="Samsung Galaxy - Blue" class="product-image"><img src="http://www.newsmartwave.net/magento/porto/media/catalog/product/cache/9/thumbnail/300x/17f82f742ffe127f42dca9de82fb58b1/2/9/29_8.jpg" alt="Samsung Galaxy - Blue"></a>
                                                    </div>
                                                    <div class="product-details col-xs-6">
                                                        <p class="product-name"><a href="http://www.newsmartwave.net/magento/porto/index.php/demo5_en/samsung-galaxy-phone-blue-146.html">Samsung Galaxy - Blue</a></p>
                                                        <div class="ratings">
                                                            <div class="rating-box">
                                                                <div class="rating" style="width:0"></div>
                                                            </div>
                                                        </div>



                                                        <div class="price-box">
                                                            <span class="regular-price" id="product-price-90-related">
                                                                <span class="price">$279.00</span>                                    </span>

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product">
                                                <input type="checkbox" class="checkbox related-checkbox" id="related-checkbox91" name="related_products[]" value="91">
                                                <div class="row">
                                                    <div class="col-xs-6">
                                                        <a href="http://www.newsmartwave.net/magento/porto/index.php/demo5_en/samsung-galaxy-phone-grey.html" title="Samsung Galaxy - Grey" class="product-image"><img src="http://www.newsmartwave.net/magento/porto/media/catalog/product/cache/9/thumbnail/300x/17f82f742ffe127f42dca9de82fb58b1/2/2/22_1_2.jpg" alt="Samsung Galaxy - Grey"></a>
                                                    </div>
                                                    <div class="product-details col-xs-6">
                                                        <p class="product-name"><a href="http://www.newsmartwave.net/magento/porto/index.php/demo5_en/samsung-galaxy-phone-grey.html">Samsung Galaxy - Grey</a></p>
                                                        <div class="ratings">
                                                            <div class="rating-box">
                                                                <div class="rating" style="width:0"></div>
                                                            </div>
                                                        </div>



                                                        <div class="price-box">
                                                            <span class="regular-price" id="product-price-91-related">
                                                                <span class="price">$279.00</span>                                    </span>

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div></div></div></div>
                            <div class="owl-controls clickable"><div class="owl-buttons"><div class="owl-prev"><i class="icon-left-open"></i></div><div class="owl-next"><i class="icon-right-open"></i></div></div></div></div>
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
                        //]]>
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>