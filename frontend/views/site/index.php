<div class="top-container">
    <div id="slideshow">
        <div id="banner-slider-demo-5" class="owl-carousel owl-theme owl-middle-narrow owl-banner-carousel">
            <div class="item" style="background:url(http://www.newsmartwave.net/magento/porto/media/wysiwyg/porto/homepage/slider/05/01_bg.png) repeat;">
                <div class="container" style="position:relative">
                    <img src="http://www.newsmartwave.net/magento/porto/media/wysiwyg/porto/homepage/slider/05/01.png" width="1140" height="500" alt="" />
                    <div class="content type1 animated bounceInDown" data-animation="animated bounceInDown" style="position:absolute;top:30%;left:10%;text-align:right">
                        <h2 style="font-weight:600;line-height:1;color:#08c">HUGE <b style="font-weight:800">SALE</b></h2>
                        <p style="color:#777;font-weight:300;line-height:1;margin-bottom:15px">Now starting at <span style="color:#535353;font-weight:400">$99</span></p>
                        <a href="#" style="font-weight:300;">Shop now &gt;</a>
                    </div>
                </div>
            </div>
            <div class="item" style="background:url(http://www.newsmartwave.net/magento/porto/media/wysiwyg/porto/homepage/slider/05/02_bg.png) center center no-repeat;background-size:cover;">
                <div class="container" style="position:relative">
                    <img src="http://www.newsmartwave.net/magento/porto/media/wysiwyg/porto/homepage/slider/05/02.png" width="1140" height="500" alt="" />
                </div>
            </div>
            <div class="item" style="background:url(http://www.newsmartwave.net/magento/porto/media/wysiwyg/porto/homepage/slider/05/03_bg.png) center center no-repeat;background-size:cover;">
                <div class="container" style="position:relative">
                    <img src="http://www.newsmartwave.net/magento/porto/media/wysiwyg/porto/homepage/slider/05/03.png" width="1140" height="500" alt="" />
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
        <div class="single-images border-radius" style="padding-top: 25px;">
            <div class="container">
                <div class="row" style="margin-left:-10px;margin-right:-10px;">
                    <div class="col-sm-3 col-xs-6" style="padding-left:10px;padding-right:10px;padding-top:20px;">
                        <a class="image-link" href="#">
                            <img src="http://www.newsmartwave.net/magento/porto/media/wysiwyg/porto/homepage/slider/05/image_1.png" width="270" height="200" alt="" />
                        </a>
                    </div>
                    <div class="col-sm-3 col-xs-6" style="padding-left:10px;padding-right:10px;padding-top:20px;">
                        <a class="image-link" href="#">
                            <img src="http://www.newsmartwave.net/magento/porto/media/wysiwyg/porto/homepage/slider/05/image_2.png" width="270" height="200" alt="" />
                        </a>
                    </div>
                    <div class="col-sm-3 col-xs-6" style="padding-left:10px;padding-right:10px;padding-top:20px;">
                        <a class="image-link" href="#">
                            <img src="http://www.newsmartwave.net/magento/porto/media/wysiwyg/porto/homepage/slider/05/image_3.png" width="270" height="200" alt="" />
                        </a>
                    </div>
                    <div class="col-sm-3 col-xs-6" style="padding-left:10px;padding-right:10px;padding-top:20px;">
                        <a class="image-link" href="#">
                            <img src="http://www.newsmartwave.net/magento/porto/media/wysiwyg/porto/homepage/slider/05/image_4.png" width="270" height="200" alt="" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div style="padding-top: 35px;">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h2 class="filter-title"><span class="content"><strong>Featured Products</strong></span></h2>
                        <div id="featured_product" class="owl-top-narrow">
                            <div class="filter-products">
                                <div class="products owl-carousel">
                                    <div class="item">
                                        <div class="item-area">
                                            <div class="product-image-area">
                                                <div class="loader-container">
                                                    <div class="loader">
                                                        <i class="ajax-loader medium animate-spin"></i>
                                                    </div>
                                                </div>
                                                <a href="http://www.newsmartwave.net/magento/porto/index.php/demo5_en/white-top-277.html" title="Embellished Blouse" class="product-image">
                                                    <img src="http://www.newsmartwave.net/magento/porto/media/catalog/product/cache/9/small_image/300x400/9df78eab33525d08d6e5fb8d27136e95/f/a/fashion-11-1.jpg" width="300" height="400" alt="Embellished Blouse"/>
                                                </a>
                                            </div>
                                            <div class="details-area">
                                                <h2 class="product-name"><a href="http://www.newsmartwave.net/magento/porto/index.php/demo5_en/white-top-277.html" title="Embellished Blouse">Embellished Blouse</a></h2>
                                                <div class="price-box">
                                                    <span class="regular-price">
                                                        <span class="price">$128.00</span>                                    
                                                    </span>
                                                </div>
                                                <div class="actions">
                                                    <a href="#" class="addtocart" data-id="1" data-price="100" title="Добавить в корзину"><i class="icon-cart"></i><span>&nbsp;Купить</span></a>
                                                    <div class="clearer"></div>
                                                </div>
                                            </div>
                                        </div>  
                                    </div>
                                </div>
                            </div>

                        </div>
                        <script type="text/javascript">
                            jQuery(function ($) {
                                $("#featured_product .filter-products .owl-carousel").owlCarousel({lazyLoad: true, itemsCustom: [[0, 1], [320, 1], [480, 2], [768, 3], [992, 4], [1280, 5]], responsiveRefreshRate: 50, slideSpeed: 200, paginationSpeed: 500, scrollPerPage: false, stopOnHover: true, rewindNav: true, rewindSpeed: 600, pagination: false, navigation: true, autoPlay: true, navigationText: ["<i class='icon-left-open'></i>", "<i class='icon-right-open'></i>"]});
                            });
                        </script>
                    </div>
                </div>
            </div>
        </div>
        <div style="padding-top: 20px;">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h2 class="filter-title"><span class="content"><strong>New Products</strong></span></h2>
                        <div id="new_product" class="owl-top-narrow hide-addtolinks">
                            <div class="filter-products">
                                <div class="products owl-carousel">
                                    <div class="item"><div class="item-area">
                                            <div class="product-image-area">
                                                <div class="loader-container">
                                                    <div class="loader">
                                                        <i class="ajax-loader medium animate-spin"></i>
                                                    </div>
                                                </div>
                                                <a href="http://www.newsmartwave.net/magento/porto/index.php/demo5_en/quickview/index/view/id/111" class="quickview-icon"><i class="icon-export"></i><span>Quick View</span></a>
                                                <a href="http://www.newsmartwave.net/magento/porto/index.php/demo5_en/jewellery-bracelets-2xl.html" title="Jewellery Bracelets" class="product-image">
                                                    <img class="defaultImage lazyOwl" data-src="http://www.newsmartwave.net/magento/porto/media/catalog/product/cache/9/small_image/165x165/9df78eab33525d08d6e5fb8d27136e95/4/_/4_1_2.jpg" width="165" height="165" alt="Jewellery Bracelets"/>
                                                    <img class="hoverImage" src="http://www.newsmartwave.net/magento/porto/media/catalog/product/cache/9/thumbnail/165x165/9df78eab33525d08d6e5fb8d27136e95/2/_/2_5.jpg" width="165" height="165" alt="Jewellery Bracelets"/>
                                                </a>

                                                <div class="product-label" style="right: 10px; "><span class="new-product-icon">New</span></div>
                                            </div>
                                            <div class="details-area">
                                                <h2 class="product-name"><a href="http://www.newsmartwave.net/magento/porto/index.php/demo5_en/jewellery-bracelets-2xl.html" title="Jewellery Bracelets">Jewellery Bracelets</a></h2>
                                                <div class="ratings">
                                                    <div class="rating-box">
                                                        <div class="rating" style="width:0"></div>
                                                    </div>
                                                </div>



                                                <div class="price-box">
                                                    <span class="regular-price" id="product-price-111">
                                                        <span class="price">$189.00</span>                                    </span>

                                                </div>

                                                <div class="actions">
                                                    <a href="javascript:void(0)" onclick="ajaxWishlist(this, 'http://www.newsmartwave.net/magento/porto/index.php/demo5_en/wishlist/index/add/product/111/form_key/ikt2QIjzpNh3Dylx/', '111');" class="addtowishlist" title="Add to Wishlist"><i class="icon-wishlist"></i></a>
                                                    <a href="javascript:void(0);" class="addtocart outofstock" title="Out of stock">Out of stock</span></a>
                                                    <a href="javascript:void(0)" onclick="ajaxCompare(this, 'http://www.newsmartwave.net/magento/porto/index.php/demo5_en/catalog/product_compare/add/product/111/uenc/aHR0cDovL3d3dy5uZXdzbWFydHdhdmUubmV0L21hZ2VudG8vcG9ydG8vaW5kZXgucGhwL2RlbW81X2Vu/form_key/ikt2QIjzpNh3Dylx/', '111');" class="comparelink" title="Add to Compare"><i class="icon-compare"></i></a>
                                                    <div class="clearer"></div>
                                                </div>
                                            </div>
                                        </div></div>
                                    <div class="item"><div class="item-area">
                                            <div class="product-image-area">
                                                <div class="loader-container">
                                                    <div class="loader">
                                                        <i class="ajax-loader medium animate-spin"></i>
                                                    </div>
                                                </div>
                                                <a href="http://www.newsmartwave.net/magento/porto/index.php/demo5_en/quickview/index/view/id/110" class="quickview-icon"><i class="icon-export"></i><span>Quick View</span></a>
                                                <a href="http://www.newsmartwave.net/magento/porto/index.php/demo5_en/jewellery-bracelets-xl.html" title="Jewellery Bracelets-M" class="product-image">
                                                    <img class="defaultImage lazyOwl" data-src="http://www.newsmartwave.net/magento/porto/media/catalog/product/cache/9/small_image/165x165/9df78eab33525d08d6e5fb8d27136e95/5/_/5_1_1.jpg" width="165" height="165" alt="Jewellery Bracelets-M"/>
                                                    <img class="hoverImage" src="http://www.newsmartwave.net/magento/porto/media/catalog/product/cache/9/thumbnail/165x165/9df78eab33525d08d6e5fb8d27136e95/5/_/5_1_1.jpg" width="165" height="165" alt="Jewellery Bracelets-M"/>
                                                </a>

                                                <div class="product-label" style="right: 10px; "><span class="new-product-icon">New</span></div>
                                            </div>
                                            <div class="details-area">
                                                <h2 class="product-name"><a href="http://www.newsmartwave.net/magento/porto/index.php/demo5_en/jewellery-bracelets-xl.html" title="Jewellery Bracelets-M">Jewellery Bracelets-M</a></h2>
                                                <div class="ratings">
                                                    <div class="rating-box">
                                                        <div class="rating" style="width:0"></div>
                                                    </div>
                                                </div>



                                                <div class="price-box">
                                                    <span class="regular-price" id="product-price-110">
                                                        <span class="price">$389.00</span>                                    </span>

                                                </div>

                                                <div class="actions">
                                                    <a href="javascript:void(0)" onclick="ajaxWishlist(this, 'http://www.newsmartwave.net/magento/porto/index.php/demo5_en/wishlist/index/add/product/110/form_key/ikt2QIjzpNh3Dylx/', '110');" class="addtowishlist" title="Add to Wishlist"><i class="icon-wishlist"></i></a>
                                                    <a href="javascript:void(0)" class="addtocart" title="Add to Cart" onclick="setLocationAjax(this, 'http://www.newsmartwave.net/magento/porto/index.php/demo5_en/checkout/cart/add/uenc/aHR0cDovL3d3dy5uZXdzbWFydHdhdmUubmV0L21hZ2VudG8vcG9ydG8vaW5kZXgucGhwL2RlbW81X2Vu/product/110/form_key/ikt2QIjzpNh3Dylx/', '110')"><i class="icon-cart"></i><span>&nbsp;Add to Cart</span></a>
                                                    <a href="javascript:void(0)" onclick="ajaxCompare(this, 'http://www.newsmartwave.net/magento/porto/index.php/demo5_en/catalog/product_compare/add/product/110/uenc/aHR0cDovL3d3dy5uZXdzbWFydHdhdmUubmV0L21hZ2VudG8vcG9ydG8vaW5kZXgucGhwL2RlbW81X2Vu/form_key/ikt2QIjzpNh3Dylx/', '110');" class="comparelink" title="Add to Compare"><i class="icon-compare"></i></a>
                                                    <div class="clearer"></div>
                                                </div>
                                            </div>
                                        </div></div>
                                    <div class="item"><div class="item-area">
                                            <div class="product-image-area">
                                                <div class="loader-container">
                                                    <div class="loader">
                                                        <i class="ajax-loader medium animate-spin"></i>
                                                    </div>
                                                </div>
                                                <a href="http://www.newsmartwave.net/magento/porto/index.php/demo5_en/quickview/index/view/id/109" class="quickview-icon"><i class="icon-export"></i><span>Quick View</span></a>
                                                <a href="http://www.newsmartwave.net/magento/porto/index.php/demo5_en/jewellery-bracelets-l.html" title="Jewellery Bracelets-L" class="product-image">
                                                    <img class="defaultImage lazyOwl" data-src="http://www.newsmartwave.net/magento/porto/media/catalog/product/cache/9/small_image/165x165/9df78eab33525d08d6e5fb8d27136e95/8/_/8_3.jpg" width="165" height="165" alt="Jewellery Bracelets-L"/>
                                                    <img class="hoverImage" src="http://www.newsmartwave.net/magento/porto/media/catalog/product/cache/9/thumbnail/165x165/9df78eab33525d08d6e5fb8d27136e95/8/_/8_3.jpg" width="165" height="165" alt="Jewellery Bracelets-L"/>
                                                </a>

                                                <div class="product-label" style="right: 10px; "><span class="new-product-icon">New</span></div>
                                            </div>
                                            <div class="details-area">
                                                <h2 class="product-name"><a href="http://www.newsmartwave.net/magento/porto/index.php/demo5_en/jewellery-bracelets-l.html" title="Jewellery Bracelets-L">Jewellery Bracelets-L</a></h2>
                                                <div class="ratings">
                                                    <div class="rating-box">
                                                        <div class="rating" style="width:0"></div>
                                                    </div>
                                                </div>



                                                <div class="price-box">
                                                    <span class="regular-price" id="product-price-109">
                                                        <span class="price">$198.00</span>                                    </span>

                                                </div>

                                                <div class="actions">
                                                    <a href="javascript:void(0)" onclick="ajaxWishlist(this, 'http://www.newsmartwave.net/magento/porto/index.php/demo5_en/wishlist/index/add/product/109/form_key/ikt2QIjzpNh3Dylx/', '109');" class="addtowishlist" title="Add to Wishlist"><i class="icon-wishlist"></i></a>
                                                    <a href="javascript:void(0);" class="addtocart outofstock" title="Out of stock">Out of stock</span></a>
                                                    <a href="javascript:void(0)" onclick="ajaxCompare(this, 'http://www.newsmartwave.net/magento/porto/index.php/demo5_en/catalog/product_compare/add/product/109/uenc/aHR0cDovL3d3dy5uZXdzbWFydHdhdmUubmV0L21hZ2VudG8vcG9ydG8vaW5kZXgucGhwL2RlbW81X2Vu/form_key/ikt2QIjzpNh3Dylx/', '109');" class="comparelink" title="Add to Compare"><i class="icon-compare"></i></a>
                                                    <div class="clearer"></div>
                                                </div>
                                            </div>
                                        </div></div>
                                    <div class="item"><div class="item-area">
                                            <div class="product-image-area">
                                                <div class="loader-container">
                                                    <div class="loader">
                                                        <i class="ajax-loader medium animate-spin"></i>
                                                    </div>
                                                </div>
                                                <a href="http://www.newsmartwave.net/magento/porto/index.php/demo5_en/quickview/index/view/id/108" class="quickview-icon"><i class="icon-export"></i><span>Quick View</span></a>
                                                <a href="http://www.newsmartwave.net/magento/porto/index.php/demo5_en/jewellery-bracelets-m.html" title="Jewellery Bracelets-M" class="product-image">
                                                    <img class="defaultImage lazyOwl" data-src="http://www.newsmartwave.net/magento/porto/media/catalog/product/cache/9/small_image/165x165/9df78eab33525d08d6e5fb8d27136e95/9/_/9_7.jpg" width="165" height="165" alt="Jewellery Bracelets-M"/>
                                                    <img class="hoverImage" src="http://www.newsmartwave.net/magento/porto/media/catalog/product/cache/9/thumbnail/165x165/9df78eab33525d08d6e5fb8d27136e95/1/1/11_1_4.jpg" width="165" height="165" alt="Jewellery Bracelets-M"/>
                                                </a>

                                                <div class="product-label" style="right: 10px; "><span class="new-product-icon">New</span></div>
                                            </div>
                                            <div class="details-area">
                                                <h2 class="product-name"><a href="http://www.newsmartwave.net/magento/porto/index.php/demo5_en/jewellery-bracelets-m.html" title="Jewellery Bracelets-M">Jewellery Bracelets-M</a></h2>
                                                <div class="ratings">
                                                    <div class="rating-box">
                                                        <div class="rating" style="width:0"></div>
                                                    </div>
                                                </div>



                                                <div class="price-box">
                                                    <span class="regular-price" id="product-price-108">
                                                        <span class="price">$200.00</span>                                    </span>

                                                </div>

                                                <div class="actions">
                                                    <a href="javascript:void(0)" onclick="ajaxWishlist(this, 'http://www.newsmartwave.net/magento/porto/index.php/demo5_en/wishlist/index/add/product/108/form_key/ikt2QIjzpNh3Dylx/', '108');" class="addtowishlist" title="Add to Wishlist"><i class="icon-wishlist"></i></a>
                                                    <a href="javascript:void(0);" class="addtocart outofstock" title="Out of stock">Out of stock</span></a>
                                                    <a href="javascript:void(0)" onclick="ajaxCompare(this, 'http://www.newsmartwave.net/magento/porto/index.php/demo5_en/catalog/product_compare/add/product/108/uenc/aHR0cDovL3d3dy5uZXdzbWFydHdhdmUubmV0L21hZ2VudG8vcG9ydG8vaW5kZXgucGhwL2RlbW81X2Vu/form_key/ikt2QIjzpNh3Dylx/', '108');" class="comparelink" title="Add to Compare"><i class="icon-compare"></i></a>
                                                    <div class="clearer"></div>
                                                </div>
                                            </div>
                                        </div></div>
                                    <div class="item"><div class="item-area">
                                            <div class="product-image-area">
                                                <div class="loader-container">
                                                    <div class="loader">
                                                        <i class="ajax-loader medium animate-spin"></i>
                                                    </div>
                                                </div>
                                                <a href="http://www.newsmartwave.net/magento/porto/index.php/demo5_en/quickview/index/view/id/107" class="quickview-icon"><i class="icon-export"></i><span>Quick View</span></a>
                                                <a href="http://www.newsmartwave.net/magento/porto/index.php/demo5_en/jewellery-bracelets-s.html" title="Jewellery Bracelets-S" class="product-image">
                                                    <img class="defaultImage lazyOwl" data-src="http://www.newsmartwave.net/magento/porto/media/catalog/product/cache/9/small_image/165x165/9df78eab33525d08d6e5fb8d27136e95/9/_/9_8.jpg" width="165" height="165" alt="Jewellery Bracelets-S"/>
                                                    <img class="hoverImage" src="http://www.newsmartwave.net/magento/porto/media/catalog/product/cache/9/thumbnail/165x165/9df78eab33525d08d6e5fb8d27136e95/1/0/10_9.jpg" width="165" height="165" alt="Jewellery Bracelets-S"/>
                                                </a>

                                                <div class="product-label" style="right: 10px; "><span class="new-product-icon">New</span></div>
                                            </div>
                                            <div class="details-area">
                                                <h2 class="product-name"><a href="http://www.newsmartwave.net/magento/porto/index.php/demo5_en/jewellery-bracelets-s.html" title="Jewellery Bracelets-S">Jewellery Bracelets-S</a></h2>
                                                <div class="ratings">
                                                    <div class="rating-box">
                                                        <div class="rating" style="width:0"></div>
                                                    </div>
                                                </div>



                                                <div class="price-box">
                                                    <span class="regular-price" id="product-price-107">
                                                        <span class="price">$300.00</span>                                    </span>

                                                </div>

                                                <div class="actions">
                                                    <a href="javascript:void(0)" onclick="ajaxWishlist(this, 'http://www.newsmartwave.net/magento/porto/index.php/demo5_en/wishlist/index/add/product/107/form_key/ikt2QIjzpNh3Dylx/', '107');" class="addtowishlist" title="Add to Wishlist"><i class="icon-wishlist"></i></a>
                                                    <a href="javascript:void(0);" class="addtocart outofstock" title="Out of stock">Out of stock</span></a>
                                                    <a href="javascript:void(0)" onclick="ajaxCompare(this, 'http://www.newsmartwave.net/magento/porto/index.php/demo5_en/catalog/product_compare/add/product/107/uenc/aHR0cDovL3d3dy5uZXdzbWFydHdhdmUubmV0L21hZ2VudG8vcG9ydG8vaW5kZXgucGhwL2RlbW81X2Vu/form_key/ikt2QIjzpNh3Dylx/', '107');" class="comparelink" title="Add to Compare"><i class="icon-compare"></i></a>
                                                    <div class="clearer"></div>
                                                </div>
                                            </div>
                                        </div></div>
                                    <div class="item"><div class="item-area">
                                            <div class="product-image-area">
                                                <div class="loader-container">
                                                    <div class="loader">
                                                        <i class="ajax-loader medium animate-spin"></i>
                                                    </div>
                                                </div>
                                                <a href="http://www.newsmartwave.net/magento/porto/index.php/demo5_en/quickview/index/view/id/105" class="quickview-icon"><i class="icon-export"></i><span>Quick View</span></a>
                                                <a href="http://www.newsmartwave.net/magento/porto/index.php/demo5_en/jewellery-women-rings-m-seiko.html" title="Jewellery Bracelets-M" class="product-image">
                                                    <img class="defaultImage lazyOwl" data-src="http://www.newsmartwave.net/magento/porto/media/catalog/product/cache/9/small_image/165x165/9df78eab33525d08d6e5fb8d27136e95/9/_/9_4.jpg" width="165" height="165" alt="Jewellery Bracelets-M"/>
                                                    <img class="hoverImage" src="http://www.newsmartwave.net/magento/porto/media/catalog/product/cache/9/thumbnail/165x165/9df78eab33525d08d6e5fb8d27136e95/2/_/2_4.jpg" width="165" height="165" alt="Jewellery Bracelets-M"/>
                                                </a>

                                                <div class="product-label" style="right: 10px; "><span class="new-product-icon">New</span></div>
                                            </div>
                                            <div class="details-area">
                                                <h2 class="product-name"><a href="http://www.newsmartwave.net/magento/porto/index.php/demo5_en/jewellery-women-rings-m-seiko.html" title="Jewellery Bracelets-M">Jewellery Bracelets-M</a></h2>
                                                <div class="ratings">
                                                    <div class="rating-box">
                                                        <div class="rating" style="width:0"></div>
                                                    </div>
                                                </div>



                                                <div class="price-box">
                                                    <span class="regular-price" id="product-price-105">
                                                        <span class="price">$660.00</span>                                    </span>

                                                </div>

                                                <div class="actions">
                                                    <a href="javascript:void(0)" onclick="ajaxWishlist(this, 'http://www.newsmartwave.net/magento/porto/index.php/demo5_en/wishlist/index/add/product/105/form_key/ikt2QIjzpNh3Dylx/', '105');" class="addtowishlist" title="Add to Wishlist"><i class="icon-wishlist"></i></a>
                                                    <a href="javascript:void(0)" class="addtocart" title="Add to Cart" onclick="setLocationAjax(this, 'http://www.newsmartwave.net/magento/porto/index.php/demo5_en/checkout/cart/add/uenc/aHR0cDovL3d3dy5uZXdzbWFydHdhdmUubmV0L21hZ2VudG8vcG9ydG8vaW5kZXgucGhwL2RlbW81X2Vu/product/105/form_key/ikt2QIjzpNh3Dylx/', '105')"><i class="icon-cart"></i><span>&nbsp;Add to Cart</span></a>
                                                    <a href="javascript:void(0)" onclick="ajaxCompare(this, 'http://www.newsmartwave.net/magento/porto/index.php/demo5_en/catalog/product_compare/add/product/105/uenc/aHR0cDovL3d3dy5uZXdzbWFydHdhdmUubmV0L21hZ2VudG8vcG9ydG8vaW5kZXgucGhwL2RlbW81X2Vu/form_key/ikt2QIjzpNh3Dylx/', '105');" class="comparelink" title="Add to Compare"><i class="icon-compare"></i></a>
                                                    <div class="clearer"></div>
                                                </div>
                                            </div>
                                        </div></div>
                                </div>
                            </div>

                        </div>
                        <script type="text/javascript">
                            jQuery(function ($) {
                                $("#new_product .filter-products .owl-carousel").owlCarousel({lazyLoad: true, itemsCustom: [[0, 1], [320, 1], [480, 2], [768, 3], [992, 4], [1280, 6]], responsiveRefreshRate: 50, slideSpeed: 200, paginationSpeed: 500, scrollPerPage: false, stopOnHover: true, rewindNav: true, rewindSpeed: 600, pagination: false, navigation: true, autoPlay: true, navigationText: ["<i class='icon-left-open'></i>", "<i class='icon-right-open'></i>"]});
                            });
                        </script>
                    </div>
                </div>
            </div>
        </div>
        <div style="padding-top: 20px;" class="custom-support">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <i class="icon-star" style="border-radius:50%;border:2px solid #cecece;color:#333;background-color:transparent;line-height:58px;font-size:25px;"></i>
                        <div class="content">
                            <h2>Customer Support</h2>
                            <em>YOU WON'T BE ALONE</em>
                            <p>We really care about you and your website as much as you do. Purchasing Porto or any other theme from us you get 100% free support.</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <i class="icon-reply" style="border-radius:50%;border:2px solid #cecece;color:#333;background-color:transparent;line-height:58px;font-size:25px;"></i>
                        <div class="content">
                            <h2>Fully Customizable</h2>
                            <em>TONS OF OPTIONS</em>
                            <p>With Porto you can customize the layout, colors and styles within only a few minutes. Start creating an amazing website right now!</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <i class="icon-paper-plane" style="border-radius:50%;border:2px solid #cecece;color:#333;background-color:transparent;line-height:58px;font-size:25px;"></i>
                        <div class="content">
                            <h2>Powerful Admin</h2>
                            <em>MADE TO HELP YOU</em>
                            <p>Porto has very powerful admin features to help customer to build their own shop in minutes without any special skills in web development.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="parallax-wrapper ">
            <div class="overlay overlay-color" style="background-color: #000000; opacity: 0.75; filter: alpha(opacity=75);"></div>
            <div class="parallax" data-stellar-background-ratio="0.5" style="background-image: url(http://www.newsmartwave.net/magento/porto/media/wysiwyg/porto/homepage/content/05/2.jpg);">
                <div class="parallax-slider" style="position: relative; z-index: 3;">
                    <div class="container">
                        <div id="parallax-slider-demo-5" class="owl-carousel owl-theme">
                            <div class="item">
                                <h2 style="font-weight:600;">EXPLORE <b style="font-weight:800;">PORTO</b></h2>
                                <p style="font-weight:300;">Premium theme, unlimited possibilities...</p>
                                <a href="#" style="font-weight:300;">Purchase now &gt;</a>
                            </div>
                            <div class="item">
                                <h2 style="font-weight:600;">EXPLORE <b style="font-weight:800;">PORTO</b></h2>
                                <p style="font-weight:300;">Premium theme, unlimited possibilities...</p>
                                <a href="#" style="font-weight:300;">Purchase now &gt;</a>
                            </div>
                            <div class="item">
                                <h2 style="font-weight:600;">EXPLORE <b style="font-weight:800;">PORTO</b></h2>
                                <p style="font-weight:300;">Premium theme, unlimited possibilities...</p>
                                <a href="#" style="font-weight:300;">Purchase now &gt;</a>
                            </div>
                        </div>
                    </div>
                    <script type="text/javascript">
                        jQuery(function ($) {
                            $("#parallax-slider-demo-5").owlCarousel({navigation: false, slideSpeed: 300, paginationSpeed: 400, stopOnHover: true, autoPlay: true, singleItem: true});
                        });
                    </script>
                </div>
            </div>
        </div></div></div>        
<div class="main-container col1-layout">
    <div class="main container">
        <div class="col-main">
            <div id="loading-mask">
                <div class ="background-overlay"></div>
                <p id="loading_mask_loader" class="loader">
                    <i class="ajax-loader large animate-spin"></i>
                </p>
            </div>
            <div id="after-loading-success-message">
                <div class ="background-overlay"></div>
                <div id="success-message-container" class="loader" >
                    <div class="msg-box">Product was successfully added to your shopping cart.</div>
                    <button type="button" name="finish_and_checkout" id="finish_and_checkout" class="button btn-cart" ><span><span>
                                Go to cart page		</span></span></button>
                    <button type="button" name="continue_shopping" id="continue_shopping" class="button btn-cart" >
                        <span><span>
                                Continue		</span></span></button>
                </div>
            </div>	
            <script type='text/javascript'>
                jQuery('#finish_and_checkout').click(function () {
                    try {
                        parent.location.href = 'http://www.newsmartwave.net/magento/porto/index.php/demo5_en/checkout/cart/';
                    } catch (err) {
                        location.href = 'http://www.newsmartwave.net/magento/porto/index.php/demo5_en/checkout/cart/';
                    }
                });
                jQuery('#continue_shopping').click(function () {
                    jQuery('#after-loading-success-message').fadeOut(200);
                    clearTimeout(ajaxcart_timer);
                    setTimeout(function () {
                        jQuery('#after-loading-success-message .timer').text(ajaxcart_sec);
                    }, 1000);
                });
            </script><div class="std"><h2 class="filter-title" style="margin:0 0 10px;"><span class="content"><strong>Featured Brands</strong></span><a class="f-right" href="http://www.newsmartwave.net/magento/porto/index.php/demo5_en/manufacturers">View All</a></h2>
                <div id="brands-slider-demo-5" class="owl-no-narrow">
                    <!--<div  class="owl-carousel owl-theme">
                        <div class="item" style="padding-top:10px;"><img src="http://www.newsmartwave.net/magento/porto/media/wysiwyg/porto/homepage/content/08/brand1.png" alt="" /></div>
                        <div class="item" style="padding-top:10px;"><img src="http://www.newsmartwave.net/magento/porto/media/wysiwyg/porto/homepage/content/08/brand2.png" alt="" /></div>
                        <div class="item" style="padding-top:10px;"><img src="http://www.newsmartwave.net/magento/porto/media/wysiwyg/porto/homepage/content/08/brand3.png" alt="" /></div>
                        <div class="item" style="padding-top:10px;"><img src="http://www.newsmartwave.net/magento/porto/media/wysiwyg/porto/homepage/content/08/brand4.png" alt="" /></div>
                        <div class="item" style="padding-top:10px;"><img src="http://www.newsmartwave.net/magento/porto/media/wysiwyg/porto/homepage/content/08/brand5.png" alt="" /></div>
                        <div class="item" style="padding-top:10px;"><img src="http://www.newsmartwave.net/magento/porto/media/wysiwyg/porto/homepage/content/08/brand1.png" alt="" /></div>
                        <div class="item" style="padding-top:10px;"><img src="http://www.newsmartwave.net/magento/porto/media/wysiwyg/porto/homepage/content/08/brand2.png" alt="" /></div>
                        <div class="item" style="padding-top:10px;"><img src="http://www.newsmartwave.net/magento/porto/media/wysiwyg/porto/homepage/content/08/brand3.png" alt="" /></div>
                        <div class="item" style="padding-top:10px;"><img src="http://www.newsmartwave.net/magento/porto/media/wysiwyg/porto/homepage/content/08/brand4.png" alt="" /></div>
                        <div class="item" style="padding-top:10px;"><img src="http://www.newsmartwave.net/magento/porto/media/wysiwyg/porto/homepage/content/08/brand5.png" alt="" /></div>
                    </div>-->
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <a href="http://www.newsmartwave.net/magento/porto/index.php/demo5_en/manufacturers/adidas/" title="Adidas"><img class="lazyOwl" data-src="http://www.newsmartwave.net/magento/porto/media/manufacturer/brand1.png" alt="brand1.png"/></a>
                        </div>
                        <div class="item">
                            <a href="http://www.newsmartwave.net/magento/porto/index.php/demo5_en/manufacturers/camel/" title="Camel"><img class="lazyOwl" data-src="http://www.newsmartwave.net/magento/porto/media/manufacturer/brand2.png" alt="brand2.png"/></a>
                        </div>
                        <div class="item">
                            <a href="http://www.newsmartwave.net/magento/porto/index.php/demo5_en/manufacturers/motorola/" title="Motorola"><img class="lazyOwl" data-src="http://www.newsmartwave.net/magento/porto/media/manufacturer/brand3.png" alt="brand3.png"/></a>
                        </div>
                        <div class="item">
                            <a href="http://www.newsmartwave.net/magento/porto/index.php/demo5_en/manufacturers/rolex/" title="Rolex"><img class="lazyOwl" data-src="http://www.newsmartwave.net/magento/porto/media/manufacturer/brand4.png" alt="brand4.png"/></a>
                        </div>
                        <div class="item">
                            <a href="http://www.newsmartwave.net/magento/porto/index.php/demo5_en/manufacturers/samsung-galaxy/" title="Samsung Galaxy"><img class="lazyOwl" data-src="http://www.newsmartwave.net/magento/porto/media/manufacturer/brand5.png" alt="brand5.png"/></a>
                        </div>
                        <div class="item">
                            <a href="http://www.newsmartwave.net/magento/porto/index.php/demo5_en/manufacturers/seiko/" title="Seiko"><img class="lazyOwl" data-src="http://www.newsmartwave.net/magento/porto/media/manufacturer/brand1.png" alt="brand1.png"/></a>
                        </div>
                        <div class="item">
                            <a href="http://www.newsmartwave.net/magento/porto/index.php/demo5_en/manufacturers/sony/" title="Sony"><img class="lazyOwl" data-src="http://www.newsmartwave.net/magento/porto/media/manufacturer/brand2.png" alt="brand2.png"/></a>
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
                <h2 class="filter-title" style="margin-top:40px;"><span class="content"><strong>FROM THE BLOG</strong></span></h2>
                <div id="latest_news" class="owl-top-narrow">
                    <div class="recent-posts">
                        <div class="owl-carousel">
                            <div class="item">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <div class="post-image">
                                            <img src="http://www.newsmartwave.net/magento/porto/media/wysiwyg/smartwave/blog/03.jpg" alt=""/>
                                        </div>
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="post-date">
                                            <span class="day">08</span>
                                            <span class="month">Dec</span>
                                        </div>
                                        <div class="postTitle">
                                            <h2><a href="http://www.newsmartwave.net/magento/porto/index.php/demo5_en/blog/post-format-video-2/" >Post Format � Video</a></h2>
                                        </div>
                                        <div class="postContent"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi&hellip;</p></div>
                                        <a class="readmore" href="http://www.newsmartwave.net/magento/porto/index.php/demo5_en/blog/post-format-video-2/">Read more ></a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <div class="post-image">
                                            <img src="http://www.newsmartwave.net/magento/porto/media/wysiwyg/smartwave/blog/04.jpg" alt=""/>
                                        </div>
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="post-date">
                                            <span class="day">08</span>
                                            <span class="month">Dec</span>
                                        </div>
                                        <div class="postTitle">
                                            <h2><a href="http://www.newsmartwave.net/magento/porto/index.php/demo5_en/blog/post-format-image-gallery-2/" >Post Format � Image Gallery</a></h2>
                                        </div>
                                        <div class="postContent"><p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent&hellip;</p></div>
                                        <a class="readmore" href="http://www.newsmartwave.net/magento/porto/index.php/demo5_en/blog/post-format-image-gallery-2/">Read more ></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <script type="text/javascript">
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
                            if (!$.cookie('basket') || $('.shopping-cart__goods__list li').length == 0) {
                                $('.shopping-cart__goods__inner .green-button').hide();
                                $('#total').hide();
                                $('.shopping-cart__goods__inner div div').html('<span id="hint" style="float: left;">Ваша корзина пуста, пожалуйста добавьте товары</span>');
                                return false;
                            }
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

                        if (productsCount()) {
                            $('.badge').text(productsCount());
                            $('.badge').show();
                        }

                        function showBasket() {
                            isEmptyBasket();
                            if (productsCount()) {
                                $('.badge').text(productsCount());
                                $('.badge').show();
                            } else {
                                $('.badge').hide();
                            }
                            if ($.cookie('basket')) {
                                items = JSON.parse($.cookie("basket"));
                                $('.shopping-cart__goods__inner .green-button').show();
                                $('#total').show();
                                var html = '<ul class="shopping-cart__goods__list">';
                                var totalSum = 0;
                                for (var i = 0; i < items.rows.length; i++)
                                {
                                    if (items.rows[i] != null) {
                                        totalSum += parseInt(items.rows[i]['price']) * parseInt(items.rows[i]['quantity']);
                                        html += '<li class="shopping-cart__goods__list__item">' +
                                                '<ul>' +
                                                '<li class="shopping-cart__goods__list__title">' +
                                                '<h3>' +
                                                ' <a href="#">' + items.rows[i]['name'] + '</a>' +
                                                '</h3>' +
                                                '</li>' +
                                                '<li class="shopping-cart__goods__list__counter">' +
                                                '<div class="number__counter">' +
                                                '<div class="number__counter__fewer">' +
                                                '<span>-</span>' +
                                                '</div>' +
                                                '<div class="number__counter__result">' +
                                                '<input type="text" value="' + items.rows[i]['quantity'] + '">' +
                                                '</div>' +
                                                '<div class="number__counter__more" data-price="' + parseInt(items.rows[i]['price']) + '">' +
                                                '<span>+</span>' +
                                                '</div>' +
                                                '</div>' +
                                                '</li>' +
                                                '<li class="shopping-cart__goods__list__price">' + numeral(parseInt(items.rows[i]['price']) * parseInt(items.rows[i]['quantity'])).format('0,0') + '<span>c</span></li>' +
                                                '<li class="shopping-cart__goods__list__delete">' +
                                                '<a href="#" data-id="' + items.rows[i]['id'] + '">Удалить</a>' +
                                                '</li>' +
                                                '</ul>' +
                                                '</li>';
                                    }
                                }
                                html += '</ul>';
                                $('.shopping-cart__goods__inner div div').html(html);
                                $('#total i').text(totalSum);
                            }
                            isEmptyBasket();
                        }

                        var data = {"total": 0, "rows": []};
                        var totalCost = 0;
                        function addProduct(id, name, price) {
                            if ($.cookie('basket')) {
                                var items = JSON.parse($.cookie("basket"));
                                if (items.rows[0] != null)
                                    data = JSON.parse($.cookie('basket'));
                            }
                            function add() {
                                for (var i = 0; i < data.total; i++) {
                                    if (items.rows[i] != null) {
                                        var row = data.rows[i];
                                        if (typeof row.id !== "undefined" && row.id == id) {
                                            row.quantity += 1;
                                            return;
                                        }
                                    }
                                }
                                data.total += 1;
                                data.rows.push({
                                    id: id,
                                    quantity: 1,
                                    price: price,
                                    name: name
                                });
                            }
                            add();
                            totalCost += price;
                            $.cookie("basket", JSON.stringify(data), {expires: 31, path: '/'});
                        }

                        $('.addtocart').on('click', function () {
                            var prod_id = $(this).data('id');
                            var prod_title = $(this).data('title');
                            var prod_price = $(this).data('price');
                            var cart = $('.mini-cart');
                            var imgtodrag = $('.product-image-area').find("img").eq(0);
                            if (imgtodrag) {
                                var imgclone = imgtodrag.clone()
                                        .offset({
                                            top: imgtodrag.offset().top,
                                            left: imgtodrag.offset().left
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
                                    addProduct(prod_id, prod_title, prod_price);
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
                    });

                </script>
            </div>                
        </div>
    </div>
</div>