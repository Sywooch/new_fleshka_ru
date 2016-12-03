<?php 
$assets = Yii::getAlias('@web');
?>
<div id="banner-slider-demo-5" class="owl-carousel owl-theme owl-middle-narrow owl-banner-carousel">
    <div class="item" style="background:url(<?= $assets ?>/images/banners/bb1.jpg) repeat;">
        <div class="container" style="position:relative">
            <img src="<?= $assets ?>/images/02.png" width="1140" height="500" alt="" />
        </div>
    </div>
    <div class="item" style="background:url(<?= $assets ?>/images/banners/bb2.jpg) center center no-repeat;background-size:cover;">
        <div class="container" style="position:relative">
            <img src="<?= $assets ?>/images/02.png" width="1140" height="500" alt="" />
        </div>
    </div>
    <div class="item" style="background:url(<?= $assets ?>/images/banners/bb3.jpg) center center no-repeat;background-size:cover;">
        <div class="container" style="position:relative">
            <img src="<?= $assets ?>/images/02.png" width="1140" height="500" alt="" />
        </div>
    </div>
</div>
<script type="text/javascript">
    jQuery(function ($) {
        $("#banner-slider-demo-5").owlCarousel({
            autoPlay: true,
            lazyLoad: true,
            stopOnHover: true,
            pagination: false,
            autoPlay:true,
                    navigation: true,
            navigationText: ["<i class='icon-chevron-left'></i>", "<i class='icon-chevron-right'></i>"],
            slideSpeed: 500,
            paginationSpeed: 500,
            singleItem: true,
            addClassActive: true,
            transitionStyle: "fade",
            afterMove: function () {
                $("#banner-slider-demo-5 .owl-item.active .content").each(function () {
                    $(this).addClass($(this).attr("data-animation"));
                });
            },
            beforeMove: function () {
                $("#banner-slider-demo-5 .owl-item .content").each(function () {
                    $(this).removeClass($(this).attr("data-animation"));
                });
            }
        });
    });
</script>