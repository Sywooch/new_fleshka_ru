<div style="padding-top: 20px;">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="filter-title"><span class="content"><strong>Специальные предложения</strong></span></h2>
                <div class="special_product" class="owl-top-narrow">
                    <div class="filter-products">
                        <div class="products owl-carousel">
                            <?php foreach ($rows as $row): ?>
                                <?php $url = '/fleshka/' . \app\components\CController::ru2lat($row['title']) . '-' . $row['id']; ?>
                                <div class="item">
                                    <div class="item-area">
                                        <div class="product-image-area">
                                            <div class="loader-container">
                                                <div class="loader">
                                                    <i class="ajax-loader medium animate-spin"></i>
                                                </div>
                                            </div>
                                            <a href="<?= $url; ?>" title="<?php echo $row['title']; ?>" class="product-image">
                                                <img src="/uploads/images/<?php echo $row['image']; ?>" width="300" height="400" alt="<?php echo $row['title'] . ' #' . $row['old_id']; ?>"/>
                                            </a>
                                        </div>
                                        <div class="details-area">
                                            <h2 class="product-name">
                                                <a href="<?= $url; ?>" title="<?php echo $row['title']; ?>"><?php echo $row['title']; ?></a>
                                            </h2>
                                            <div class="price-box">
                                                <span class="regular-price">
                                                    <?php if (!empty($row['price'])): ?>от <?php echo $row['price']; ?> Руб.<?php else: ?>&nbsp;<?php endif; ?>
                                                </span>
                                            </div>
                                            <div class="actions">
                                                <a href="<?= $url; ?>" class="addtocart" data-title="product 1" data-id="1" data-price="100" title="Добавить в корзину">
                                                    <i class="icon-cart"></i><span>&nbsp;Купить</span>
                                                </a>
                                                <div class="clearer"></div>
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    jQuery(function ($) {
        $(".special_product .filter-products .owl-carousel").owlCarousel({lazyLoad: true, itemsCustom: [[0, 1], [320, 1], [480, 2], [768, 3], [992, 4], [1280, 5]], responsiveRefreshRate: 50, slideSpeed: 200, paginationSpeed: 500, scrollPerPage: false, stopOnHover: true, rewindNav: true, rewindSpeed: 600, pagination: false, navigation: true, autoPlay: true, navigationText: ["<i class='icon-left-open'></i>", "<i class='icon-right-open'></i>"]});
    });
</script>