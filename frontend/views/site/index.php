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
                        <h2 class="filter-title"><span class="content"><strong>Популярные флешки</strong></span></h2>
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
                                                <a href="" title="Embellished Blouse" class="product-image">
                                                    <img src="" width="300" height="400" alt="Embellished Blouse"/>
                                                </a>
                                            </div>
                                            <div class="details-area">
                                                <h2 class="product-name">
                                                    <a href="" title="Embellished Blouse">Embellished Blouse</a>
                                                </h2>
                                                <div class="price-box">
                                                    <span class="regular-price">
                                                        <span class="price">$128.00</span>                                    
                                                    </span>
                                                </div>
                                                <div class="actions">
                                                    <a href="#" class="addtocart" data-title="product 1" data-id="1" data-price="100" title="Добавить в корзину">
                                                        <i class="icon-cart"></i><span>&nbsp;Купить</span>
                                                    </a>
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
                        <h2 class="filter-title"><span class="content"><strong>Специальные предложения</strong></span></h2>
                        <div id="new_product" class="owl-top-narrow hide-addtolinks">
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
                                                <a href="" title="Embellished Blouse" class="product-image">
                                                    <img src="" width="300" height="400" alt="Embellished Blouse"/>
                                                </a>
                                            </div>
                                            <div class="details-area">
                                                <h2 class="product-name">
                                                    <a href="" title="Embellished Blouse">Embellished Blouse</a>
                                                </h2>
                                                <div class="price-box">
                                                    <span class="regular-price">
                                                        <span class="price">$128.00</span>                                    
                                                    </span>
                                                </div>
                                                <div class="actions">
                                                    <a href="#" class="addtocart" data-title="product 1" data-id="1" data-price="100" title="Добавить в корзину">
                                                        <i class="icon-cart"></i><span>&nbsp;Купить</span>
                                                    </a>
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
                                $("#new_product .filter-products .owl-carousel").owlCarousel({lazyLoad: true, itemsCustom: [[0, 1], [320, 1], [480, 2], [768, 3], [992, 4], [1280, 6]], responsiveRefreshRate: 50, slideSpeed: 200, paginationSpeed: 500, scrollPerPage: false, stopOnHover: true, rewindNav: true, rewindSpeed: 600, pagination: false, navigation: true, autoPlay: true, navigationText: ["<i class='icon-left-open'></i>", "<i class='icon-right-open'></i>"]});
                            });
                        </script>
                    </div>
                </div>
            </div>
        </div>
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
                <h2 class="filter-title" style="margin-top:40px;">
                    <span class="content">
                        <strong>Статьи</strong>
                    </span>
                </h2>
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
                        $("body").on("click", ".btn-remove", function() {
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
                            if (!$.cookie('basket') || $('.shopping-cart__goods__list li').length == 0) {                                
                                $('#topCartContent .inner-wrapper').html('<p class="cart-empty">Ваша корзина пуста, пожалуйста добавьте товары</p>');
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
                                //$('.shopping-cart__goods__inner .green-button').show();
                                $('#total').show();
                                var html = '<ol class="mini-products-list">';
                                var totalSum = 0;
                                for (var i = 0; i < items.rows.length; i++)
                                {
                                    if (items.rows[i] != null) {
                                        totalSum += parseInt(items.rows[i]['price']) * parseInt(items.rows[i]['quantity']);
                                        html += '<li class="item">' +
                                                '<a href="#" title="' + items.rows[i]['name'] + '" class="product-image"><img src="' + items.rows[i]['img'] + '" alt=""></a>' +
                                                '<div class="product-details">' +
                                                '<p class="product-name">' +
                                                '<a href="#">' + items.rows[i]['name'] + '</a>' +
                                                '</p>' +
                                                '<p class="qty-price">' + items.rows[i]['quantity'] + ' X<span class="price">' + parseInt(items.rows[i]['price']) + '</span></p>' +
                                                '<a href="#" title="' + items.rows[i]['name'] + '" data-id="' + items.rows[i]['id'] + '" class="btn-remove"><i class="icon-cancel"></i></a>' +
                                                '</div>' +
                                                '<div class="clearer"></div>' +
                                                '</li>';

                                    }
                                }
                                html += '</ol>';
                                $('.topCartContent .inner-wrapper').html(html);                                
                                var ttl = '<div class="totals"><span class="label">Итого: </span><span class="price-total"><span class="price">' + totalSum + '</span></span></div>';
                                var buttons = '<div class="actions"><a class="btn btn-default" href=""><i class="icon-basket"></i>View Cart</a><a class="btn btn-default" href=""><i class="icon-right-thin"></i>Checkout</a><div class="clearer"></div>';
                   
                                $('.topCartContent .inner-wrapper').append(ttl);
                            }
                            isEmptyBasket();
                        }

                        var data = {"total": 0, "rows": []};
                        var totalCost = 0;
                        function addProduct(id, name, price, img) {
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
                                    name: name,
                                    img: img
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
                                    addProduct(prod_id, prod_title, prod_price, imgtodrag);
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