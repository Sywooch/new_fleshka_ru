<div class="top-container">
    <div id="slideshow">
        <?= \app\widgets\sliders\MainSlider::widget(); ?>
        <div class="homepage-bar">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <i class="icon-truck" style="font-size:36px;"></i><div class="text-area"><h3>Доставка по России и СНГ</h3><p></p></div>
                    </div>
                    <div class="col-md-4">
                        <i class="icon-dollar"></i><div class="text-area"><h3>Гибкие финансовые условия</h3><p></p></div>
                    </div>
                    <div class="col-md-4">
                        <i class="icon-lifebuoy" style="font-size:32px;"></i><div class="text-area"><h3>Профессиональная техподдержка</h3><p></p></div>
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
                            <img class="lazyOwl" data-src="/images/client2.jpg"/>
                        </div> 
                        <div class="item">
                            <img class="lazyOwl" data-src="/images/client3.jpg"/>
                        </div> 
                        <div class="item">
                            <img class="lazyOwl" data-src="/images/client4.jpg"/>
                        </div> 
                        <div class="item">
                            <img class="lazyOwl" data-src="/images/client5.jpg"/>
                        </div>
                        <div class="item">
                            <img class="lazyOwl" data-src="/images/client6.jpg"/>
                        </div>
                        <div class="item">
                            <img class="lazyOwl" data-src="/images/client7.jpg"/>
                        </div>
                        <div class="item">
                            <img class="lazyOwl" data-src="/images/client8.jpg"/>
                        </div>
                        <div class="item">
                            <img class="lazyOwl" data-src="/images/client9.jpg"/>
                        </div>
                        <div class="item">
                            <img class="lazyOwl" data-src="/images/client10.jpg"/>
                        </div>
                        <div class="item">
                            <img class="lazyOwl" data-src="/images/client11.jpg"/>
                        </div>
                        <div class="item">
                            <img class="lazyOwl" data-src="/images/client12.jpg"/>
                        </div>
                        <div class="item">
                            <img class="lazyOwl" data-src="/images/client13.jpg"/>
                        </div>
                        <div class="item">
                            <img class="lazyOwl" data-src="/images/client14.jpg"/>
                        </div>
                        <div class="item">
                            <img class="lazyOwl" data-src="/images/client15.jpg"/>
                        </div>
                        <div class="item">
                            <img class="lazyOwl" data-src="/images/client16.jpg"/>
                        </div>
                        <div class="item">
                            <img class="lazyOwl" data-src="/images/client17.jpg"/>
                        </div>
                        <div class="item">
                            <img class="lazyOwl" data-src="/images/client18.jpg"/>
                        </div>
                        <div class="item">
                            <img class="lazyOwl" data-src="/images/client1.jpg"/>
                        </div> 
                    </div>
                </div>                
                <?= \app\widgets\lists\LastNews::widget(); ?>
            </div>                
        </div>
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