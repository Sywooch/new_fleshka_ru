<div class="top-container">
    <div id="slideshow">
        <?= \app\widgets\sliders\MainSlider::widget(); ?>
        <div class="homepage-bar">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <i class="icon-truck" style="font-size:36px;"></i><div class="text-area"><h3>FREE SHIPPING & RETURN</h3><p>Free shipping on all orders over $99.</p></div>
                    </div>
                    <div class="col-md-4">
                        <i class="icon-dollar"></i><div class="text-area"><h3>MONEY BACK GUARANTEE</h3><p>100% money back guarantee.</p></div>
                    </div>
                    <div class="col-md-4">
                        <i class="icon-lifebuoy" style="font-size:32px;"></i><div class="text-area"><h3>ONLINE SUPPORT 24/7</h3><p>Lorem ipsum dolor sit amet.</p></div>
                    </div>
                </div>
            </div>
        </div>
        <?= app\widgets\lists\Popular::widget(); ?>
        <?= app\widgets\lists\Special::widget(); ?>       
    </div>
</div>        
<div class="main-container col1-layout">
    <div class="main container">
        <div class="col-main">
            <div id="loading-mask">
                <div class ="background-overlay"></div>
                <p id="loading_mask_loader" class="loader">
                    <i class="ajax-loader large animate-spin"></i>
                </p>
            </div>            	
            <div class="std">
                <h2 class="filter-title" style="margin:0 0 10px;">
                    <span class="content"><strong>Наши партнеры</strong></span>
                </h2>
                <div id="brands-slider-demo-5" class="owl-no-narrow">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <a href="#" title="Adidas"><img class="lazyOwl" data-src="http://www.newsmartwave.net/magento/porto/media/manufacturer/brand1.png" alt="brand1.png"/></a>
                        </div>
                        <div class="item">
                            <a href="#" title="Camel"><img class="lazyOwl" data-src="http://www.newsmartwave.net/magento/porto/media/manufacturer/brand2.png" alt="brand2.png"/></a>
                        </div>
                        <div class="item">
                            <a href="#" title="Motorola"><img class="lazyOwl" data-src="http://www.newsmartwave.net/magento/porto/media/manufacturer/brand3.png" alt="brand3.png"/></a>
                        </div>
                        <div class="item">
                            <a href="#" title="Rolex"><img class="lazyOwl" data-src="http://www.newsmartwave.net/magento/porto/media/manufacturer/brand4.png" alt="brand4.png"/></a>
                        </div>
                        <div class="item">
                            <a href="#" title="Samsung Galaxy"><img class="lazyOwl" data-src="http://www.newsmartwave.net/magento/porto/media/manufacturer/brand5.png" alt="brand5.png"/></a>
                        </div>
                        <div class="item">
                            <a href="#" title="Seiko"><img class="lazyOwl" data-src="http://www.newsmartwave.net/magento/porto/media/manufacturer/brand1.png" alt="brand1.png"/></a>
                        </div>
                        <div class="item">
                            <a href="#" title="Sony"><img class="lazyOwl" data-src="http://www.newsmartwave.net/magento/porto/media/manufacturer/brand2.png" alt="brand2.png"/></a>
                        </div>
                    </div>
                    <script type="text/javascript">
                        jQuery(function ($) {
                            $("#brands-slider-demo-5 .owl-carousel").owlCarousel({
                                lazyLoad: true,
                                itemsCustom: [[0, 1], [320, 1], [480, 2], [640, 3], [768, 3], [992, 5], [1200, 6]],
                                responsiveRefreshRate: 50,
                                slideSpeed: 200,
                                paginationSpeed: 500,
                                scrollPerPage: false,
                                stopOnHover: true,
                                rewindNav: true,
                                rewindSpeed: 600,
                                pagination: true,
                                navigation: false,
                                autoPlay: true
                            });
                        });
                    </script>
                </div>
                <?= \app\widgets\lists\LastNews::widget(); ?>

            </div>                
        </div>
    </div>
</div>