<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use app\widgets\menu\MainMenu;

AppAsset::register($this);
$assets = Yii::getAlias('@web');

$isHome = Yii::$app->controller->id == 'site' && Yii::$app->controller->action->id == 'index' ? true : false;
$curRegion = \Yii::$app->session['region'];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <title><?= Html::encode($this->title) ?></title>
        <?= Html::csrfMetaTags() ?>
        <?php $this->head() ?>
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans%3A300%2C300italic%2C400%2C400italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic&amp;v1&amp;subset=latin%2Clatin-ext" type="text/css" media="screen"/>
        <link href='http://fonts.googleapis.com/css?family=Shadows+Into+Light' rel='stylesheet' type='text/css'/>
        <link rel="stylesheet" type="text/css" href="<?= $assets ?>/css/jquery-ui.min.css" />
        <link rel="stylesheet" type="text/css" href="<?= $assets ?>/css/ajaxaddto.css" />
        <link rel="stylesheet" type="text/css" href="<?= $assets ?>/css/calendar-win2k-1.css" />
        <link rel="stylesheet" type="text/css" href="<?= $assets ?>/css/etalage.css" />
        <link rel="stylesheet" type="text/css" href="<?= $assets ?>/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="<?= $assets ?>/css/bootstrap-theme.min.css" />
        <link rel="stylesheet" type="text/css" href="<?= $assets ?>/css/owl.carousel.css" />
        <link rel="stylesheet" type="text/css" href="<?= $assets ?>/css/owl.theme.css" />
        <link rel="stylesheet" type="text/css" href="<?= $assets ?>/css/owl.transitions.css" />
        <link rel="stylesheet" type="text/css" href="<?= $assets ?>/css/selectbox.css" />
        <link rel="stylesheet" type="text/css" href="<?= $assets ?>/css/widgets.css" media="all" />
        <link rel="stylesheet" type="text/css" href="<?= $assets ?>/css/configurableswatches.css" media="all" />
        <link rel="stylesheet" type="text/css" href="<?= $assets ?>/css/dailydeal.css" media="all" />
        <link rel="stylesheet" type="text/css" href="<?= $assets ?>/css/jquery.fancybox.css" media="all" />
        <link rel="stylesheet" type="text/css" href="<?= $assets ?>/css/style.css" media="all" />
        <link rel="stylesheet" type="text/css" href="<?= $assets ?>/css/catalogcategorysearch.css" media="all" />
        <link rel="stylesheet" type="text/css" href="<?= $assets ?>/css/style1.css" media="all" />
        <link rel="stylesheet" type="text/css" href="<?= $assets ?>/css/font-awesome.min.css" media="all" />
        <link rel="stylesheet" type="text/css" href="<?= $assets ?>/css/megamenu.css" media="all" />
        <link rel="stylesheet" type="text/css" href="<?= $assets ?>/css/megamenu_responsive.css" media="all" />
        <link rel="stylesheet" type="text/css" href="<?= $assets ?>/css/styles.css" media="all" />
        <link rel="stylesheet" type="text/css" href="<?= $assets ?>/css/style2.css" media="all" />
        <link rel="stylesheet" type="text/css" href="<?= $assets ?>/css/styles1.css" media="all" />
        <link rel="stylesheet" type="text/css" href="<?= $assets ?>/css/animate.css" media="all" />
        <link rel="stylesheet" type="text/css" href="<?= $assets ?>/css/porto.css" media="all" />
        <link rel="stylesheet" type="text/css" href="<?= $assets ?>/css/animation.css" media="all" />
        <link rel="stylesheet" type="text/css" href="<?= $assets ?>/css/local.css" media="all" />
        <link rel="stylesheet" type="text/css" href="<?= $assets ?>/css/responsive.css" media="all" />
        <link rel="stylesheet" type="text/css" href="<?= $assets ?>/css/design_demo5_en.css" media="all" />
        <link rel="stylesheet" type="text/css" href="<?= $assets ?>/css/settings_demo5_en.css" media="all" />
        <link rel="stylesheet" type="text/css" href="<?= $assets ?>/css/custom.css" media="all" />
        <link rel="stylesheet" type="text/css" href="<?= $assets ?>/css/print.css" media="print" />

        <script type="text/javascript" src="<?= $assets ?>/js/prototype.js"></script>
        <script type="text/javascript" src="<?= $assets ?>/js/ccard.js"></script>
        <script type="text/javascript" src="<?= $assets ?>/js/validation.js"></script>
        <script type="text/javascript" src="<?= $assets ?>/js/builder.js"></script>
        <script type="text/javascript" src="<?= $assets ?>/js/effects.js"></script>
        <script type="text/javascript" src="<?= $assets ?>/js/dragdrop.js"></script>
        <script type="text/javascript" src="<?= $assets ?>/js/controls.js"></script>
        <script type="text/javascript" src="<?= $assets ?>/js/slider.js"></script>
        <script type="text/javascript" src="<?= $assets ?>/js/js.js"></script>
        <script type="text/javascript" src="<?= $assets ?>/js/form.js"></script>
        <script type="text/javascript" src="<?= $assets ?>/js/menu.js"></script>
        <script type="text/javascript" src="<?= $assets ?>/js/translate.js"></script>
        <script type="text/javascript" src="<?= $assets ?>/js/cookies.js"></script>
        <script type="text/javascript" src="<?= $assets ?>/js/jquery-1.10.2.min.js"></script>
        <script type="text/javascript" src="<?= $assets ?>/js/dailydeal.js"></script>
        <script type="text/javascript" src="<?= $assets ?>/js/jquery-1.11.3.min.js"></script>
        <script type="text/javascript" src="<?= $assets ?>/js/jquery-migrate-1.2.1.min.js"></script>
        <script type="text/javascript" src="<?= $assets ?>/js/jquery-noconflict.js"></script>
        <script type="text/javascript" src="<?= $assets ?>/js/jquery-ui.min.js"></script>
        <script type="text/javascript" src="<?= $assets ?>/js/jquery.fancybox.js"></script>
        <script type="text/javascript" src="<?= $assets ?>/js/ajaxaddto.js"></script>
        <script type="text/javascript" src="<?= $assets ?>/js/product.js"></script>
        <script type="text/javascript" src="<?= $assets ?>/js/configurable.js"></script>
        <script type="text/javascript" src="<?= $assets ?>/js/calendar.js"></script>
        <script type="text/javascript" src="<?= $assets ?>/js/calendar-setup.js"></script>
        <script type="text/javascript" src="<?= $assets ?>/js/jquery.etalage.min.js"></script>
        <script type="text/javascript" src="<?= $assets ?>/js/jquery.zoom.min.js"></script>
        <script type="text/javascript" src="<?= $assets ?>/js/jquery.mousewheel-3.0.6.pack.js"></script>
        <script type="text/javascript" src="<?= $assets ?>/js/jquery.selectbox.js"></script>
        <script type="text/javascript" src="<?= $assets ?>/js/jquery.stellar.min.js"></script>
        <script type="text/javascript" src="<?= $assets ?>/js/jquery.parallax.js"></script>
        <script type="text/javascript" src="<?= $assets ?>/js/jquery.cookie.js"></script>
        <script type="text/javascript" src="<?= $assets ?>/js/owl.carousel.min.js"></script>
        <script type="text/javascript" src="<?= $assets ?>/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?= $assets ?>/js/imagesloaded.js"></script>
        <script type="text/javascript" src="<?= $assets ?>/js/app.js"></script>
        <script type="text/javascript" src="<?= $assets ?>/js/megamenu.js"></script>
        <script type="text/javascript" src="<?= $assets ?>/js/bundle.js"></script>
        <script type="text/javascript" src="<?= $assets ?>/js/sw_quickview.js"></script>
        <script type="text/javascript" src="<?= $assets ?>/js/twitterfetcher.js"></script>
        <script type="text/javascript" src="<?= $assets ?>/js/wow.min.js"></script>
        <script type="text/javascript" src="<?= $assets ?>/js/porto.js"></script>
        <script type="text/javascript">
            //<![CDATA[
            Mage.Cookies.path = '/magento/porto';
            Mage.Cookies.domain = '.www.newsmartwave.net';
            //]]>
        </script>

        <script type="text/javascript">
            //<![CDATA[
            optionalZipCountries = ["HK", "IE", "MO", "PA"];
            //]]>
        </script>
        <script type="text/javascript">
            jQuery(function ($) {
                var scrolled = false;
                $(window).scroll(function () {
                    if (140 < $(window).scrollTop() && !scrolled) {
                        if (!$('.header-container .menu-wrapper .mini-cart').length && !$('.header-container .menu-wrapper .sticky-logo').length) {
                            $('.header-container').addClass("sticky-header");
                            var minicart = $('.header-container .mini-cart').html();
                            $('.header-container .menu-wrapper').append('<div class="mini-cart">' + minicart + '</div>');
                            var logo_image = $('<div>').append($('.header-container .header > .logo').clone()).html();
                            $('.header-container .menu-wrapper').prepend('<div class="sticky-logo">' + logo_image + '</div>');
                            $('.header-container .header-wrapper > div').each(function () {
                                if ($(this).hasClass("container")) {
                                    $(this).addClass("already");
                                } else {
                                    $(this).addClass("container");
                                }
                            });
                            scrolled = true;
                        }
                    }
                    if (140 >= $(window).scrollTop() && scrolled) {
                        $('.header-container').removeClass("sticky-header");
                        $('.header-container .menu-wrapper .mini-cart').remove();
                        $('.header-container .menu-wrapper > .sticky-logo').remove();
                        $('.header-container.type15 .header > .logo img.sticky-logo-image').remove();
                        $('.header-container.type15 .header > .logo img').removeClass("hide");
                        scrolled = false;
                        $('.header-container .header-wrapper > div').each(function () {
                            if ($(this).hasClass("already")) {
                                $(this).removeClass("already");
                            } else {
                                $(this).removeClass("container");
                            }
                        });
                    }
                });
            });
        </script><script type="text/javascript">
            //<![CDATA[
            if (typeof EM == 'undefined')
                EM = {};
            EM.Quickview = {
                QS_FRM_WIDTH: "1000",
                QS_FRM_HEIGHT: "730"
            };
            //]]	
        </script> <script type="text/javascript">//<![CDATA[
            var Translator = new Translate([]);
            //]]></script><script type="text/javascript">
                //<![CDATA[
                if (typeof dailydealTimeCountersCategory == 'undefined') {
                    var dailydealTimeCountersCategory = new Array();
                    var i = 0;
                }
                //]]>
        </script>        
    </head>
    <body class=" cms-index-index cms-porto-home-5">
        <?php $this->beginBody() ?>
        <div class="wrapper">
            <noscript>
            <div class="global-site-notice noscript">
                <div class="notice-inner">
                    <p>
                        <strong>JavaScript seems to be disabled in your browser.</strong><br />
                        You must have JavaScript enabled in your browser to utilize the functionality of this website.                </p>
                </div>
            </div>
            </noscript>
            <div class="page">
                <div class="header-container type4">
                    <div class="top-links-container">
                        <div class="top-links container">
                            <div class="form-currency top-select">
                                <span>Мы продаем флешки оптом уже 10 лет! Наносим красивые логотипы!</span>
                            </div>
                            
                            <span class="split"></span>
                            <div class="compare-link">
                                <a href="javascript:void(0)" onclick="popWin('http://www.newsmartwave.net/magento/porto/index.php/demo5_en/catalog/product_compare/index/uenc/aHR0cDovL3d3dy5uZXdzbWFydHdhdmUubmV0L21hZ2VudG8vcG9ydG8vaW5kZXgucGhwL2RlbW81X2Vu/', 'compare', 'top:0,left:0,width=820,height=600,resizable=yes,scrollbars=yes')"><i class="icon-compare-link"></i>Compare (0)</a>
                                <div class="compare-popup theme-border-color">
                                    <p class="empty">You have no items to compare.</p>
                                </div>
                            </div>            <div class="top-links-area">
                                <div class="top-links-icon"><a href="javascript:void(0)">links</a></div>
                                <ul class="links">
                                    <li class="first" ><a href="http://www.newsmartwave.net/magento/porto/index.php/demo5_en/customer/account/" title="My Account" >My Account</a></li>
                                    <li ><a href="http://www.newsmartwave.net/magento/porto/index.php/demo5_en/dailydeal/" title="Daily deal" >Daily deal</a></li>
                                    <li ><a href="http://www.newsmartwave.net/magento/porto/index.php/demo5_en/wishlist/" title="My Wishlist" >My Wishlist</a></li>
                                    <li ><a href="http://www.newsmartwave.net/magento/porto/index.php/demo5_en/blog/" title="Blog" >Blog</a></li>
                                    <li class=" last" ><a href="http://www.newsmartwave.net/magento/porto/index.php/demo5_en/customer/account/login/" title="Log In" >Log In</a></li>
                                </ul>
                            </div>
                            <p class="welcome-msg">Привет, Москва! Мы доставляем заказы в ваш город!</p>
                            <div class="clearer"></div>
                        </div>
                    </div>
                    <div class="header container">
                        <h1 class="logo"><strong>Fleshka.ru</strong>
                            <a href="/" title="Fleshka.ru" class="logo">
                                <img src="<?= $assets ?>/images/header.png" alt="Fleshka.ru" />
                            </a>
                        </h1>
                        <div class="cart-area">
                            <div class="custom-block"><i class="icon-phone" style="margin-right: 5px;"></i><span>(+404) 158 14 25 78</span><span class="split"></span><a href="#">CONTACT US</a></div>            <div class="mini-cart">
                                <a href="javascript:void(0)" class="mybag-link"><i class="icon-mini-cart"></i><span class="cart-info"><span class="cart-qty">0</span><span>item(s)</span></span></a>
                                <div class="topCartContent block-content theme-border-color">
                                    <div class="inner-wrapper">                                                    <p class="cart-empty">
                                            You have no items in your shopping cart.                    </p>
                                    </div>
                                </div>
                                <script type="text/javascript">
                                    jQuery(function ($) {
                                        $('.mini-cart').mouseover(function (e) {
                                            $(this).children('.topCartContent').fadeIn(200);
                                            return false;
                                        }).mouseleave(function (e) {
                                            $(this).children('.topCartContent').fadeOut(200);
                                            return false;
                                        });
                                    });
                                </script>
                            </div>        </div>
                        <div class="search-area">
                            <a href="javascript:void(0);" class="search-icon"><i class="icon-search"></i></a>
                            <form id="search_mini_form" action="//www.newsmartwave.net/magento/porto/index.php/demo5_en/catalogsearch/result/" method="get">
                                <div class="form-search ">
                                    <label for="search">Search:</label>
                                    <input id="search" type="text" name="q" class="input-text" />
                                    <select id="cat" name="cat">
                                        <option value="">All Categories</option>
                                        <option value="4">Fashion</option>
                                        <option value="12">- Women</option>
                                        <option value="13">- Men</option>
                                        <option value="66">- Jewellery</option>
                                        <option value="67">- Kids Fashion</option>
                                        <option value="5">Electronics</option>
                                        <option value="21">- Smart TVs</option>
                                        <option value="22">- Cameras</option>
                                        <option value="63">- Games</option>
                                        <option value="7">Home & Garden</option>
                                        <option value="11">Motors</option>
                                        <option value="31">- Cars and Trucks</option>
                                        <option value="32">- Motorcycles & Powersports</option>
                                        <option value="33">- Parts & Accessories</option>
                                        <option value="34">- Boats</option>
                                        <option value="57">- Auto Tools & Supplies</option>
                                    </select>
                                    <button type="submit" title="Search" class="button"><i class="icon-search"></i></button>
                                    <div id="search_autocomplete" class="search-autocomplete"></div>
                                    <div class="clearer"></div>
                                </div>
                            </form>
                            <script type="text/javascript">
                                //<![CDATA[
                                var searchForm = new Varien.searchForm('search_mini_form', 'search', 'Search...');
                                searchForm.initAutocomplete('http://www.newsmartwave.net/magento/porto/index.php/demo5_en/catalogsearch/ajax/suggest/', 'search_autocomplete');
                                //]]>
                            </script>
                        </div>
                        <div class="menu-icon"><a href="javascript:void(0)" title="Menu"><i class="fa fa-bars"></i></a></div>
                    </div>
                    <div class="header-wrapper">
                        <div class="main-nav">
                            <div class="container">            
                                <div class="menu-wrapper">
                                    <div class="menu-all-pages-container">
                                        <ul class="menu">
                                            <li class="act">
                                                <a href="//www.newsmartwave.net/magento/porto/index.php/demo5_en/">
                                                    <span>Home</span>
                                                </a>
                                            </li>
                                            <li class="menu-static-width  " >
                                                <a href="//www.newsmartwave.net/magento/porto/index.php/demo5_en/fashion.html">Fashion <span class="cat-label cat-label-label1">New</span></a>
                                                <div class="nav-sublist-dropdown" style="display: none; width:600px;">
                                                    <div class="container">
                                                        <div class="mega-columns row">
                                                            <div class="block1 col-sm-7">
                                                                <div class="row">
                                                                    <ul>
                                                                        <li class="menu-item menu-item-has-children menu-parent-item col-sw-2  "><a class="level1" data-id="12" href="//www.newsmartwave.net/magento/porto/index.php/demo5_en/fashion/women.html"><span>Women</span></a><div class="nav-sublist level1"><ul><li class="menu-item "><a class="level2" data-id="14" href="//www.newsmartwave.net/magento/porto/index.php/demo5_en/fashion/women/tops-blouses.html"><span>Tops &amp; Blouses</span></a></li><li class="menu-item "><a class="level2" data-id="79" href="//www.newsmartwave.net/magento/porto/index.php/demo5_en/fashion/women/accessories.html"><span>Accessories</span></a></li><li class="menu-item "><a class="level2" data-id="16" href="//www.newsmartwave.net/magento/porto/index.php/demo5_en/fashion/women/dresses-skirts.html"><span>Dresses &amp; Skirts</span></a></li><li class="menu-item "><a class="level2" data-id="40" href="//www.newsmartwave.net/magento/porto/index.php/demo5_en/fashion/women/shoes-boots.html"><span>Shoes &amp; Boots</span></a></li></ul></div></li><li class="menu-item menu-item-has-children menu-parent-item col-sw-2  "><a class="level1" data-id="13" href="//www.newsmartwave.net/magento/porto/index.php/demo5_en/fashion/men.html"><span>Men</span></a><div class="nav-sublist level1"><ul><li class="menu-item "><a class="level2" data-id="48" href="//www.newsmartwave.net/magento/porto/index.php/demo5_en/fashion/men/accessories.html"><span>Accessories</span></a></li><li class="menu-item "><a class="level2" data-id="17" href="//www.newsmartwave.net/magento/porto/index.php/demo5_en/fashion/men/shirts.html"><span>Watch Fashion <span class="cat-label cat-label-label1">New</span></span></a></li><li class="menu-item "><a class="level2" data-id="18" href="//www.newsmartwave.net/magento/porto/index.php/demo5_en/fashion/men/tees-knits-and-polos.html"><span>Tees, Knits &amp; Polos</span></a></li><li class="menu-item "><a class="level2" data-id="19" href="//www.newsmartwave.net/magento/porto/index.php/demo5_en/fashion/men/pants-denim.html"><span>Pants &amp; Denim</span></a></li></ul></div></li><li class="menu-item menu-item-has-children menu-parent-item col-sw-2  "><a class="level1" data-id="66" href="//www.newsmartwave.net/magento/porto/index.php/demo5_en/fashion/jewellery.html"><span>Jewellery <span class="cat-label cat-label-label2">Hot!</span></span></a><div class="nav-sublist level1"><ul><li class="menu-item "><a class="level2" data-id="42" href="//www.newsmartwave.net/magento/porto/index.php/demo5_en/fashion/jewellery/sweaters.html"><span>Sweaters</span></a></li><li class="menu-item "><a class="level2" data-id="43" href="//www.newsmartwave.net/magento/porto/index.php/demo5_en/fashion/jewellery/heels-sandals.html"><span>Heels &amp; Sandals</span></a></li><li class="menu-item "><a class="level2" data-id="44" href="//www.newsmartwave.net/magento/porto/index.php/demo5_en/fashion/jewellery/jeans-shorts.html"><span>Jeans &amp; Shorts</span></a></li></ul></div></li><li class="menu-item menu-item-has-children menu-parent-item col-sw-2  "><a class="level1" data-id="67" href="//www.newsmartwave.net/magento/porto/index.php/demo5_en/fashion/kids.html"><span>Kids Fashion</span></a><div class="nav-sublist level1"><ul><li class="menu-item "><a class="level2" data-id="45" href="//www.newsmartwave.net/magento/porto/index.php/demo5_en/fashion/kids/casual-shoes.html"><span>Casual Shoes</span></a></li><li class="menu-item "><a class="level2" data-id="46" href="//www.newsmartwave.net/magento/porto/index.php/demo5_en/fashion/kids/outwear.html"><span>Spring &amp; Autumn</span></a></li><li class="menu-item "><a class="level2" data-id="47" href="//www.newsmartwave.net/magento/porto/index.php/demo5_en/fashion/kids/sneakers.html"><span>Winter Sneakers</span></a></li></ul></div></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="right-mega-block col-sm-5"><img src="img/fashion_b.png" alt="" style="position: absolute;right: 10px;top: -10px;height: 273px;width: auto;max-width: none;z-index: -1;border-radius: 8px;" /></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="menu-full-width  " >
                                                <a href="//www.newsmartwave.net/magento/porto/index.php/demo5_en/electronics.html">Electronics</a>
                                                <div class="nav-sublist-dropdown" style="display: none;">
                                                    <div class="container">
                                                        <div class="top-mega-block"><div style="margin: 0 20px;padding: 10px 0 15px;border-bottom: 1px solid #eee;width: 63%;color: #000;"><b style="margin-right: 15px;">SUGGESTIONS:</b><a href="#" style="margin-right: 15px;color:#000">3D</a><a href="#" style="margin-right: 15px;color:#000">MOBILE</a><a href="#" style="margin-right: 15px;color:#000">CAMERAS</a><a href="#" style="color:#000">HEADSETS</a></div></div>
                                                        <div class="mega-columns row">
                                                            <div class="block1 col-sm-8">
                                                                <div class="row">
                                                                    <ul>
                                                                        <li class="menu-item menu-item-has-children menu-parent-item col-sw-3  "><div class="menu_thumb_img"><a class="menu_thumb_link" href="//www.newsmartwave.net/magento/porto/index.php/demo5_en/electronics/smart-tvs.html"><img src="img/smart_tv.png" alt="Thumbnail Image" /></a></div><a class="level1" data-id="21" href="//www.newsmartwave.net/magento/porto/index.php/demo5_en/electronics/smart-tvs.html"><span>Smart TVs</span></a><div class="nav-sublist level1"><ul><li class="menu-item "><a class="level2" data-id="29" href="//www.newsmartwave.net/magento/porto/index.php/demo5_en/electronics/smart-tvs/tv-audio.html"><span>TV, Audio</span></a></li><li class="menu-item "><a class="level2" data-id="25" href="//www.newsmartwave.net/magento/porto/index.php/demo5_en/electronics/smart-tvs/computers-tablets.html"><span>Computers &amp; Tablets</span></a></li><li class="menu-item "><a class="level2" data-id="50" href="//www.newsmartwave.net/magento/porto/index.php/demo5_en/electronics/smart-tvs/home-office-equipments.html"><span>Home Office Equipments</span></a></li><li class="menu-item "><a class="level2" data-id="55" href="//www.newsmartwave.net/magento/porto/index.php/demo5_en/electronics/smart-tvs/gps-navigation.html"><span>GPS Navigation</span></a></li><li class="menu-item "><a class="level2" data-id="26" href="//www.newsmartwave.net/magento/porto/index.php/demo5_en/electronics/smart-tvs/car-audio-video-gps.html"><span>Car Audio, Video &amp; GPS</span></a></li><li class="menu-item "><a class="level2" data-id="56" href="//www.newsmartwave.net/magento/porto/index.php/demo5_en/electronics/smart-tvs/radios-clock-radios.html"><span>Radios &amp; Clock Radios</span></a></li></ul></div></li><li class="menu-item menu-item-has-children menu-parent-item col-sw-3  "><div class="menu_thumb_img"><a class="menu_thumb_link" href="//www.newsmartwave.net/magento/porto/index.php/demo5_en/electronics/cameras.html"><img src="img/camera.png" alt="Thumbnail Image" /></a></div><a class="level1" data-id="22" href="//www.newsmartwave.net/magento/porto/index.php/demo5_en/electronics/cameras.html"><span>Cameras</span></a><div class="nav-sublist level1"><ul><li class="menu-item "><a class="level2" data-id="23" href="//www.newsmartwave.net/magento/porto/index.php/demo5_en/electronics/cameras/cell-phones-accessories.html"><span>Cell Phones &amp; Accessories</span></a></li><li class="menu-item "><a class="level2" data-id="24" href="//www.newsmartwave.net/magento/porto/index.php/demo5_en/electronics/cameras/cameras-photo.html"><span>Cameras &amp; Photo</span></a></li><li class="menu-item "><a class="level2" data-id="53" href="//www.newsmartwave.net/magento/porto/index.php/demo5_en/electronics/cameras/photo-accessories.html"><span>Photo Accessories</span></a></li><li class="menu-item "><a class="level2" data-id="54" href="//www.newsmartwave.net/magento/porto/index.php/demo5_en/electronics/cameras/ip-phones.html"><span>IP Phones</span></a></li><li class="menu-item "><a class="level2" data-id="27" href="//www.newsmartwave.net/magento/porto/index.php/demo5_en/electronics/cameras/iphone.html"><span>Samsung Galaxy Phones</span></a></li><li class="menu-item "><a class="level2" data-id="28" href="//www.newsmartwave.net/magento/porto/index.php/demo5_en/electronics/cameras/ipad.html"><span>iPad &amp; Android Tablets</span></a></li></ul></div></li><li class="menu-item menu-item-has-children menu-parent-item col-sw-3  "><div class="menu_thumb_img"><a class="menu_thumb_link" href="//www.newsmartwave.net/magento/porto/index.php/demo5_en/electronics/games.html"><img src="//www.newsmartwave.net/magento/porto/media/catalog/category/game.png" alt="Thumbnail Image" /></a></div><a class="level1" data-id="63" href="//www.newsmartwave.net/magento/porto/index.php/demo5_en/electronics/games.html"><span>Games</span></a><div class="nav-sublist level1"><ul><li class="menu-item "><a class="level2" data-id="51" href="//www.newsmartwave.net/magento/porto/index.php/demo5_en/electronics/games/e-book-readers.html"><span>e-Book Readers</span></a></li><li class="menu-item "><a class="level2" data-id="30" href="//www.newsmartwave.net/magento/porto/index.php/demo5_en/electronics/games/video-games-consolers.html"><span>Video Games &amp; Consolers</span></a></li><li class="menu-item "><a class="level2" data-id="49" href="//www.newsmartwave.net/magento/porto/index.php/demo5_en/electronics/games/printers-scanners.html"><span>Printers &amp; Scanners</span></a></li><li class="menu-item "><a class="level2" data-id="52" href="//www.newsmartwave.net/magento/porto/index.php/demo5_en/electronics/games/digital-picture-frames.html"><span>Digital Picture Frames</span></a></li><li class="menu-item "><a class="level2" data-id="64" href="//www.newsmartwave.net/magento/porto/index.php/demo5_en/electronics/games/3d-games.html"><span>3D Fashion Games</span></a></li><li class="menu-item "><a class="level2" data-id="65" href="//www.newsmartwave.net/magento/porto/index.php/demo5_en/electronics/games/game-machines.html"><span>Game Machine &amp; Devices</span></a></li></ul></div></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="right-mega-block col-sm-4"><div class="menu-right-block" style="position: relative;text-align:center;"><img src="//www.newsmartwave.net/magento/porto/media/wysiwyg/porto/category/banner/electronic.png" alt="" style="margin-top:20px"/>
                                                                    <div style="position: absolute;top: -35px;left: -15px;text-align: left;">
                                                                        <h2 style="font-size: 23px;font-weight: 600;color: #fff;background-color: #2e2e2e;line-height: 1;padding: 6px 50px 6px 8px;">SHOP NOW <b style="font-weight:700;">3D</b> <strong style="font-weight: 800;">TV's</strong></h2>
                                                                        <a class="btn btn-default" style="padding: 5px 7px 5px 15px;color: #fff; border: 0;font-size:13px;" href="//newsmartwave.net/magento/porto/index.php/electronics.html">VIEW NOW <em class="icon-right-dir"></em></a></div>
                                                                    <div style="position: absolute;bottom: 8px;width: 60%;text-align: center;left: 50px;line-height: 14px;font-size: 13px;">This is a custom block. You can add any images or links here.</div>
                                                                </div></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class=" ">
                                                <a href="//www.newsmartwave.net/magento/porto/index.php/demo5_en/home-garden.html">Home &amp; Garden</a>
                                            </li>
                                            <li class="menu-item menu-item-has-children menu-parent-item  " >
                                                <a href="//www.newsmartwave.net/magento/porto/index.php/demo5_en/motors.html">Motors</a>
                                                <div class="nav-sublist-dropdown" style="display: none;">
                                                    <div class="container">
                                                        <ul>
                                                            <li class="menu-item  "><a class="level1" data-id="31" href="//www.newsmartwave.net/magento/porto/index.php/demo5_en/motors/cars-and-trucks.html"><span>Cars and Trucks</span></a></li><li class="menu-item  "><a class="level1" data-id="32" href="//www.newsmartwave.net/magento/porto/index.php/demo5_en/motors/motorcycles.html"><span>Motorcycles &amp; Powersports</span></a></li><li class="menu-item menu-item-has-children menu-parent-item  "><a class="level1" data-id="33" href="//www.newsmartwave.net/magento/porto/index.php/demo5_en/motors/parts.html"><span>Parts &amp; Accessories</span></a><div class="nav-sublist level1"><ul><li class="menu-item "><a class="level2" data-id="58" href="//www.newsmartwave.net/magento/porto/index.php/demo5_en/motors/parts/motorcycle-parts.html"><span>Motorcycle Parts</span></a></li><li class="menu-item "><a class="level2" data-id="59" href="//www.newsmartwave.net/magento/porto/index.php/demo5_en/motors/parts/atv-parts.html"><span>ATV Parts</span></a></li><li class="menu-item "><a class="level2" data-id="60" href="//www.newsmartwave.net/magento/porto/index.php/demo5_en/motors/parts/snowmobile-parts.html"><span>Snowmobile Parts</span></a></li><li class="menu-item "><a class="level2" data-id="61" href="//www.newsmartwave.net/magento/porto/index.php/demo5_en/motors/parts/personal-watercraft-parts.html"><span>Personal Watercraft Parts</span></a></li><li class="menu-item "><a class="level2" data-id="62" href="//www.newsmartwave.net/magento/porto/index.php/demo5_en/motors/parts/other-vehicle-parts.html"><span>Other Vehicle Parts</span></a></li></ul></div></li><li class="menu-item  "><a class="level1" data-id="34" href="//www.newsmartwave.net/magento/porto/index.php/demo5_en/motors/boats.html"><span>Boats</span></a></li><li class="menu-item  "><a class="level1" data-id="57" href="//www.newsmartwave.net/magento/porto/index.php/demo5_en/motors/auto-tools-supplies.html"><span>Auto Tools &amp; Supplies</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>


                                            <li class="menu-item menu-item-has-children menu-parent-item fl-right">
                                                <a href="javascript:;">Features<span class="cat-label cat-label-label2">Hot!</span></a>
                                                <div class="nav-sublist-dropdown" style="display: none; list-style: none;">
                                                    <div class="container">
                                                        <ul>
                                                            <li class="menu-item menu-item-has-children menu-parent-item" style="list-style: none;">
                                                                <a class="level1" href="javascript:;"><span>Homepage Variations 1</span></a>
                                                                <div class="nav-sublist level1">
                                                                    <ul>
                                                                        <li class="menu-item " style="list-style: none;">
                                                                            <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo1_en"><span>Home Layout 1</span></a>
                                                                        </li>
                                                                        <li class="menu-item " style="list-style: none;">
                                                                            <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo2_en"><span>Home Layout 2</span></a>
                                                                        </li>
                                                                        <li class="menu-item " style="list-style: none;">
                                                                            <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo3_en"><span>Home Layout 3</span></a>
                                                                        </li>
                                                                        <li class="menu-item " style="list-style: none;">
                                                                            <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo4_en"><span>Home Layout 4</span></a>
                                                                        </li>
                                                                        <li class="menu-item " style="list-style: none;">
                                                                            <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo5_en"><span>Home Layout 5</span></a>
                                                                        </li>
                                                                        <li class="menu-item " style="list-style: none;">
                                                                            <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo6_en"><span>Home Layout 6</span></a>
                                                                        </li>
                                                                        <li class="menu-item " style="list-style: none;">
                                                                            <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo7_en"><span>Home Layout 7</span></a>
                                                                        </li>
                                                                        <li class="menu-item " style="list-style: none;">
                                                                            <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo8_en"><span>Home Layout 8</span></a>
                                                                        </li>
                                                                        <li class="menu-item " style="list-style: none;">
                                                                            <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo9_en"><span>Home Layout 9</span></a>
                                                                        </li>
                                                                        <li class="menu-item " style="list-style: none;">
                                                                            <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo10_en"><span>Home Layout 10</span></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                            <li class="menu-item menu-item-has-children menu-parent-item" style="list-style: none;">
                                                                <a class="level1" href="javascript:;"><span>Homepage Variations 2</span></a>
                                                                <div class="nav-sublist level1">
                                                                    <ul>
                                                                        <li class="menu-item " style="list-style: none;">
                                                                            <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo11_en"><span>Home Layout 11</span></a>
                                                                        </li>
                                                                        <li class="menu-item " style="list-style: none;">
                                                                            <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo12_en"><span>Home Layout 12</span></a>
                                                                        </li>
                                                                        <li class="menu-item " style="list-style: none;">
                                                                            <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo13_en"><span>Home Layout 13</span></a>
                                                                        </li>
                                                                        <li class="menu-item " style="list-style: none;">
                                                                            <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo14_en"><span>Home Layout 14</span></a>
                                                                        </li>
                                                                        <li class="menu-item " style="list-style: none;">
                                                                            <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo15_en"><span>Home Layout 15</span></a>
                                                                        </li>
                                                                        <li class="menu-item " style="list-style: none;">
                                                                            <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo16_en"><span>Home Layout 16</span></a>
                                                                        </li>
                                                                        <li class="menu-item " style="list-style: none;">
                                                                            <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo17_en"><span>Home Layout 17</span></a>
                                                                        </li>
                                                                        <li class="menu-item " style="list-style: none;">
                                                                            <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo18_en"><span>Home Layout 18</span></a>
                                                                        </li>
                                                                        <li class="menu-item " style="list-style: none;">
                                                                            <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo19_en"><span>Home Layout 19</span></a>
                                                                        </li>
                                                                        <li class="menu-item " style="list-style: none;">
                                                                            <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo4_sa"><span>Home RTL Layout</span></a>
                                                                        </li>
                                                                        <li class="menu-item " style="list-style: none;">
                                                                            <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo1_fr"><span>Home Full Ajax Layout</span></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                            <li class="menu-item menu-item-has-children menu-parent-item" style="list-style: none;">
                                                                <a class="level1" href="javascript:;"><span>Shop Variations 1</span></a>
                                                                <div class="nav-sublist level1">
                                                                    <ul>
                                                                        <li class="menu-item " style="list-style: none;">
                                                                            <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo5_en/electronics.html"><span>Fullwidth Banner</span></a>
                                                                        </li>
                                                                        <li class="menu-item " style="list-style: none;">
                                                                            <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo5_en/fashion.html"><span>Boxed Slider Banner</span></a>
                                                                        </li>
                                                                        <li class="menu-item " style="list-style: none;">
                                                                            <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo5_en/fashion/women.html"><span>Boxed Image Banner</span></a>
                                                                        </li>
                                                                        <li class="menu-item " style="list-style: none;">
                                                                            <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo5_en/fashion.html"><span>Left Sidebar</span></a>
                                                                        </li>
                                                                        <li class="menu-item " style="list-style: none;">
                                                                            <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo5_en/electronics/cameras.html"><span>Right Sidebar</span></a>
                                                                        </li>
                                                                        <li class="menu-item " style="list-style: none;">
                                                                            <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo17_en/fashion.html"><span>Ajax Infinite Scroll</span></a>
                                                                        </li>
                                                                        <li class="menu-item " style="list-style: none;">
                                                                            <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo6_fr/fashion/men/accessories.html"><span>2 Columns Products</span></a>
                                                                        </li>
                                                                        <li class="menu-item " style="list-style: none;">
                                                                            <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo6_fr/fashion/men/tees-knits-and-polos.html"><span>3 Columns Products</span></a>
                                                                        </li>
                                                                        <li class="menu-item " style="list-style: none;">
                                                                            <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo6_fr/fashion/men/shirts.html"><span>4 Columns Products</span></a>
                                                                        </li>
                                                                        <li class="menu-item " style="list-style: none;">
                                                                            <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo6_fr/fashion/men/pants-denim.html"><span>5 Columns Products</span></a>
                                                                        </li>
                                                                        <li class="menu-item " style="list-style: none;">
                                                                            <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo6_fr/fashion/kids/casual-shoes.html"><span>6 Columns Products</span></a>
                                                                        </li>
                                                                        <li class="menu-item " style="list-style: none;">
                                                                            <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo6_fr/fashion/kids/outwear.html"><span>7 Columns Products</span></a>
                                                                        </li>
                                                                        <li class="menu-item " style="list-style: none;">
                                                                            <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo6_fr/fashion/kids/sneakers.html"><span>8 Columns Products</span></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                            <li class="menu-item menu-item-has-children menu-parent-item" style="list-style: none;">
                                                                <a class="level1" href="javascript:;"><span>Shop Variations 2</span></a>
                                                                <div class="nav-sublist level1">
                                                                    <ul>
                                                                        <li class="menu-item " style="list-style: none; width: 250px;">
                                                                            <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo5_en/fashion/women-dress-m-rolex.html"><span>Product Page with Sidebar</span></a>
                                                                        </li>
                                                                        <li class="menu-item " style="list-style: none; width: 250px;">
                                                                            <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo5_en/fashion/racer-back-maxi-dress.html"><span>Product Page without Sidebar</span></a>
                                                                        </li>
                                                                        <li class="menu-item " style="list-style: none; width: 250px;">
                                                                            <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo11_en/electronics/motorola-male-phone-4g-blue-sony.html"><span>Product Page with Inner Zoom</span></a>
                                                                        </li>
                                                                        <li class="menu-item " style="list-style: none; width: 250px;">
                                                                            <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo11_fr/electronics/motorola-male-phone-4g-blue-sony.html"><span>Product Page with Outer Zoom</span></a>
                                                                        </li>
                                                                        <li class="menu-item " style="list-style: none; width: 250px;">
                                                                            <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo8_fr/fashion/fashion-dress.html"><span>Product Page with Vertical Gallery</span></a>
                                                                        </li>
                                                                        <li class="menu-item " style="list-style: none; width: 250px;">
                                                                            <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo11_fr/electronics/motorola-male-phone-4g-blue-sony.html"><span>Product Page with Addtocart Sticky</span></a>
                                                                        </li>
                                                                        <li class="menu-item " style="list-style: none; width: 250px;">
                                                                            <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo8_fr/fashion/fashion-dress.html"><span>Product Page with Vertical Tabs</span></a>
                                                                        </li>
                                                                        <li class="menu-item " style="list-style: none; width: 250px;">
                                                                            <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo9_fr/fashion/fashion-dress.html"><span>Product Page with Accordion</span></a>
                                                                        </li>
                                                                        <li class="menu-item " style="list-style: none; width: 250px;">
                                                                            <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo8_en/fashion/fashion-dress.html"><span>Product Page with Sticky Tabs</span></a>
                                                                        </li>
                                                                        <li class="menu-item " style="list-style: none; width: 250px;">
                                                                            <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo14_fr/electronics/motorola-male-phone-4g-blue-sony.html"><span>Product Page with Moved Tabs</span></a>
                                                                        </li>
                                                                        <li class="menu-item " style="list-style: none; width: 250px;">
                                                                            <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo5_en/women-dress.html"><span>Configurable Sample Product</span></a>
                                                                        </li>
                                                                        <li class="menu-item " style="list-style: none; width: 250px;">
                                                                            <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo5_en/electronics/games/seiko-bundle.html"><span>Bundle Sample Product</span></a>
                                                                        </li>
                                                                        <li class="menu-item " style="list-style: none; width: 250px;">
                                                                            <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo5_en/fashion/jewellery/women-jewellery.html"><span>Grouped Sample Product</span></a>
                                                                        </li>											
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                            <li class="menu-item menu-item-has-children menu-parent-item" style="list-style: none;">
                                                                <a class="level1" href="javascript:;"><span>Headers 1</span></a>
                                                                <div class="nav-sublist level1">
                                                                    <ul>
                                                                        <li class="menu-item " style="list-style: none;">
                                                                            <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo1_en"><span>Header Type 1</span></a>
                                                                        </li>
                                                                        <li class="menu-item " style="list-style: none;">
                                                                            <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo2_fr"><span>Header Type 2</span></a>
                                                                        </li>
                                                                        <li class="menu-item " style="list-style: none;">
                                                                            <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo4_en"><span>Header Type 3</span></a>
                                                                        </li>
                                                                        <li class="menu-item " style="list-style: none;">
                                                                            <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo5_en"><span>Header Type 4</span></a>
                                                                        </li>
                                                                        <li class="menu-item " style="list-style: none;">
                                                                            <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo5_fr"><span>Header Type 5</span></a>
                                                                        </li>
                                                                        <li class="menu-item " style="list-style: none;">
                                                                            <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo7_en"><span>Header Type 6</span></a>
                                                                        </li>
                                                                        <li class="menu-item " style="list-style: none;">
                                                                            <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo7_fr"><span>Header Type 7</span></a>
                                                                        </li>
                                                                        <li class="menu-item " style="list-style: none;">
                                                                            <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo2_en"><span>Header Type 8</span></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                            <li class="menu-item menu-item-has-children menu-parent-item" style="list-style: none;">
                                                                <a class="level1" href="javascript:;"><span>Headers 2</span></a>
                                                                <div class="nav-sublist level1">
                                                                    <ul>
                                                                        <li class="menu-item " style="list-style: none;">
                                                                            <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo11_en"><span>Header Type 9</span></a>
                                                                        </li>
                                                                        <li class="menu-item " style="list-style: none;">
                                                                            <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo12_en"><span>Header Type 10</span></a>
                                                                        </li>
                                                                        <li class="menu-item " style="list-style: none;">
                                                                            <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo13_en"><span>Header Type 11</span></a>
                                                                        </li>
                                                                        <li class="menu-item " style="list-style: none;">
                                                                            <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo16_en"><span>Header Type 12</span></a>
                                                                        </li>
                                                                        <li class="menu-item " style="list-style: none;">
                                                                            <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo17_en"><span>Header Type 13</span></a>
                                                                        </li>
                                                                        <li class="menu-item " style="list-style: none;">
                                                                            <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo18_en"><span>Header Type 14</span></a>
                                                                        </li>
                                                                        <li class="menu-item " style="list-style: none;">
                                                                            <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo19_en"><span>Header Type 15</span></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="fl-right">
                                                <a href="http://themeforest.net/item/porto-ecommerce-ultimate-magento-theme/9725864?license=regular&amp;open_purchase_for_item_id=9725864&amp;purchasable=source&amp;ref=ilistheme" target="_blank">Buy Porto!</a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <script type="text/javascript">
                        var SW_MENU_POPUP_WIDTH = 0;
                        jQuery(function ($) {
                            $(document).ready(function () {
                                $('.main-nav .menu').et_menu({
                                    type: "default",
                                    delayTime: 0});
                            });
                        });
                    </script></div>
                <div class="mobile-nav side-block container">
                    <div class="menu-all-pages-container">
                        <ul class="menu">
                            <li class="act">
                                <a href="//www.newsmartwave.net/magento/porto/index.php/demo5_en/">
                                    <span>Home</span>
                                </a>
                            </li>
                            <li class="menu-item menu-item-has-children menu-parent-item  " >
                                <a href="//www.newsmartwave.net/magento/porto/index.php/demo5_en/fashion.html">Fashion <span class="cat-label cat-label-label1">New</span></a>
                                <ul>
                                    <li class="menu-item menu-item-has-children menu-parent-item  "><a class="level1" data-id="12" href="//www.newsmartwave.net/magento/porto/index.php/demo5_en/fashion/women.html"><span>Women</span></a><ul><li class="menu-item "><a class="level2" data-id="14" href="//www.newsmartwave.net/magento/porto/index.php/demo5_en/fashion/women/tops-blouses.html"><span>Tops &amp; Blouses</span></a></li><li class="menu-item "><a class="level2" data-id="79" href="//www.newsmartwave.net/magento/porto/index.php/demo5_en/fashion/women/accessories.html"><span>Accessories</span></a></li><li class="menu-item "><a class="level2" data-id="16" href="//www.newsmartwave.net/magento/porto/index.php/demo5_en/fashion/women/dresses-skirts.html"><span>Dresses &amp; Skirts</span></a></li><li class="menu-item "><a class="level2" data-id="40" href="//www.newsmartwave.net/magento/porto/index.php/demo5_en/fashion/women/shoes-boots.html"><span>Shoes &amp; Boots</span></a></li></ul></li><li class="menu-item menu-item-has-children menu-parent-item  "><a class="level1" data-id="13" href="//www.newsmartwave.net/magento/porto/index.php/demo5_en/fashion/men.html"><span>Men</span></a><ul><li class="menu-item "><a class="level2" data-id="48" href="//www.newsmartwave.net/magento/porto/index.php/demo5_en/fashion/men/accessories.html"><span>Accessories</span></a></li><li class="menu-item "><a class="level2" data-id="17" href="//www.newsmartwave.net/magento/porto/index.php/demo5_en/fashion/men/shirts.html"><span>Watch Fashion <span class="cat-label cat-label-label1">New</span></span></a></li><li class="menu-item "><a class="level2" data-id="18" href="//www.newsmartwave.net/magento/porto/index.php/demo5_en/fashion/men/tees-knits-and-polos.html"><span>Tees, Knits &amp; Polos</span></a></li><li class="menu-item "><a class="level2" data-id="19" href="//www.newsmartwave.net/magento/porto/index.php/demo5_en/fashion/men/pants-denim.html"><span>Pants &amp; Denim</span></a></li></ul></li><li class="menu-item menu-item-has-children menu-parent-item  "><a class="level1" data-id="66" href="//www.newsmartwave.net/magento/porto/index.php/demo5_en/fashion/jewellery.html"><span>Jewellery <span class="cat-label cat-label-label2">Hot!</span></span></a><ul><li class="menu-item "><a class="level2" data-id="42" href="//www.newsmartwave.net/magento/porto/index.php/demo5_en/fashion/jewellery/sweaters.html"><span>Sweaters</span></a></li><li class="menu-item "><a class="level2" data-id="43" href="//www.newsmartwave.net/magento/porto/index.php/demo5_en/fashion/jewellery/heels-sandals.html"><span>Heels &amp; Sandals</span></a></li><li class="menu-item "><a class="level2" data-id="44" href="//www.newsmartwave.net/magento/porto/index.php/demo5_en/fashion/jewellery/jeans-shorts.html"><span>Jeans &amp; Shorts</span></a></li></ul></li><li class="menu-item menu-item-has-children menu-parent-item  "><a class="level1" data-id="67" href="//www.newsmartwave.net/magento/porto/index.php/demo5_en/fashion/kids.html"><span>Kids Fashion</span></a><ul><li class="menu-item "><a class="level2" data-id="45" href="//www.newsmartwave.net/magento/porto/index.php/demo5_en/fashion/kids/casual-shoes.html"><span>Casual Shoes</span></a></li><li class="menu-item "><a class="level2" data-id="46" href="//www.newsmartwave.net/magento/porto/index.php/demo5_en/fashion/kids/outwear.html"><span>Spring &amp; Autumn</span></a></li><li class="menu-item "><a class="level2" data-id="47" href="//www.newsmartwave.net/magento/porto/index.php/demo5_en/fashion/kids/sneakers.html"><span>Winter Sneakers</span></a></li></ul></li>
                                </ul>
                            </li>
                            <li class="menu-item menu-item-has-children menu-parent-item  " >
                                <a href="//www.newsmartwave.net/magento/porto/index.php/demo5_en/electronics.html">Electronics</a>
                                <ul>
                                    <li class="menu-item menu-item-has-children menu-parent-item  "><a class="level1" data-id="21" href="//www.newsmartwave.net/magento/porto/index.php/demo5_en/electronics/smart-tvs.html"><span>Smart TVs</span></a><ul><li class="menu-item "><a class="level2" data-id="29" href="//www.newsmartwave.net/magento/porto/index.php/demo5_en/electronics/smart-tvs/tv-audio.html"><span>TV, Audio</span></a></li><li class="menu-item "><a class="level2" data-id="25" href="//www.newsmartwave.net/magento/porto/index.php/demo5_en/electronics/smart-tvs/computers-tablets.html"><span>Computers &amp; Tablets</span></a></li><li class="menu-item "><a class="level2" data-id="50" href="//www.newsmartwave.net/magento/porto/index.php/demo5_en/electronics/smart-tvs/home-office-equipments.html"><span>Home Office Equipments</span></a></li><li class="menu-item "><a class="level2" data-id="55" href="//www.newsmartwave.net/magento/porto/index.php/demo5_en/electronics/smart-tvs/gps-navigation.html"><span>GPS Navigation</span></a></li><li class="menu-item "><a class="level2" data-id="26" href="//www.newsmartwave.net/magento/porto/index.php/demo5_en/electronics/smart-tvs/car-audio-video-gps.html"><span>Car Audio, Video &amp; GPS</span></a></li><li class="menu-item "><a class="level2" data-id="56" href="//www.newsmartwave.net/magento/porto/index.php/demo5_en/electronics/smart-tvs/radios-clock-radios.html"><span>Radios &amp; Clock Radios</span></a></li></ul></li><li class="menu-item menu-item-has-children menu-parent-item  "><a class="level1" data-id="22" href="//www.newsmartwave.net/magento/porto/index.php/demo5_en/electronics/cameras.html"><span>Cameras</span></a><ul><li class="menu-item "><a class="level2" data-id="23" href="//www.newsmartwave.net/magento/porto/index.php/demo5_en/electronics/cameras/cell-phones-accessories.html"><span>Cell Phones &amp; Accessories</span></a></li><li class="menu-item "><a class="level2" data-id="24" href="//www.newsmartwave.net/magento/porto/index.php/demo5_en/electronics/cameras/cameras-photo.html"><span>Cameras &amp; Photo</span></a></li><li class="menu-item "><a class="level2" data-id="53" href="//www.newsmartwave.net/magento/porto/index.php/demo5_en/electronics/cameras/photo-accessories.html"><span>Photo Accessories</span></a></li><li class="menu-item "><a class="level2" data-id="54" href="//www.newsmartwave.net/magento/porto/index.php/demo5_en/electronics/cameras/ip-phones.html"><span>IP Phones</span></a></li><li class="menu-item "><a class="level2" data-id="27" href="//www.newsmartwave.net/magento/porto/index.php/demo5_en/electronics/cameras/iphone.html"><span>Samsung Galaxy Phones</span></a></li><li class="menu-item "><a class="level2" data-id="28" href="//www.newsmartwave.net/magento/porto/index.php/demo5_en/electronics/cameras/ipad.html"><span>iPad &amp; Android Tablets</span></a></li></ul></li><li class="menu-item menu-item-has-children menu-parent-item  "><a class="level1" data-id="63" href="//www.newsmartwave.net/magento/porto/index.php/demo5_en/electronics/games.html"><span>Games</span></a><ul><li class="menu-item "><a class="level2" data-id="51" href="//www.newsmartwave.net/magento/porto/index.php/demo5_en/electronics/games/e-book-readers.html"><span>e-Book Readers</span></a></li><li class="menu-item "><a class="level2" data-id="30" href="//www.newsmartwave.net/magento/porto/index.php/demo5_en/electronics/games/video-games-consolers.html"><span>Video Games &amp; Consolers</span></a></li><li class="menu-item "><a class="level2" data-id="49" href="//www.newsmartwave.net/magento/porto/index.php/demo5_en/electronics/games/printers-scanners.html"><span>Printers &amp; Scanners</span></a></li><li class="menu-item "><a class="level2" data-id="52" href="//www.newsmartwave.net/magento/porto/index.php/demo5_en/electronics/games/digital-picture-frames.html"><span>Digital Picture Frames</span></a></li><li class="menu-item "><a class="level2" data-id="64" href="//www.newsmartwave.net/magento/porto/index.php/demo5_en/electronics/games/3d-games.html"><span>3D Fashion Games</span></a></li><li class="menu-item "><a class="level2" data-id="65" href="//www.newsmartwave.net/magento/porto/index.php/demo5_en/electronics/games/game-machines.html"><span>Game Machine &amp; Devices</span></a></li></ul></li>
                                </ul>
                            </li>
                            <li class=" ">
                                <a href="//www.newsmartwave.net/magento/porto/index.php/demo5_en/home-garden.html">Home &amp; Garden</a>
                            </li>
                            <li class="menu-item menu-item-has-children menu-parent-item  " >
                                <a href="//www.newsmartwave.net/magento/porto/index.php/demo5_en/motors.html">Motors</a>
                                <ul>
                                    <li class="menu-item  "><a class="level1" data-id="31" href="//www.newsmartwave.net/magento/porto/index.php/demo5_en/motors/cars-and-trucks.html"><span>Cars and Trucks</span></a></li><li class="menu-item  "><a class="level1" data-id="32" href="//www.newsmartwave.net/magento/porto/index.php/demo5_en/motors/motorcycles.html"><span>Motorcycles &amp; Powersports</span></a></li><li class="menu-item menu-item-has-children menu-parent-item  "><a class="level1" data-id="33" href="//www.newsmartwave.net/magento/porto/index.php/demo5_en/motors/parts.html"><span>Parts &amp; Accessories</span></a><ul><li class="menu-item "><a class="level2" data-id="58" href="//www.newsmartwave.net/magento/porto/index.php/demo5_en/motors/parts/motorcycle-parts.html"><span>Motorcycle Parts</span></a></li><li class="menu-item "><a class="level2" data-id="59" href="//www.newsmartwave.net/magento/porto/index.php/demo5_en/motors/parts/atv-parts.html"><span>ATV Parts</span></a></li><li class="menu-item "><a class="level2" data-id="60" href="//www.newsmartwave.net/magento/porto/index.php/demo5_en/motors/parts/snowmobile-parts.html"><span>Snowmobile Parts</span></a></li><li class="menu-item "><a class="level2" data-id="61" href="//www.newsmartwave.net/magento/porto/index.php/demo5_en/motors/parts/personal-watercraft-parts.html"><span>Personal Watercraft Parts</span></a></li><li class="menu-item "><a class="level2" data-id="62" href="//www.newsmartwave.net/magento/porto/index.php/demo5_en/motors/parts/other-vehicle-parts.html"><span>Other Vehicle Parts</span></a></li></ul></li><li class="menu-item  "><a class="level1" data-id="34" href="//www.newsmartwave.net/magento/porto/index.php/demo5_en/motors/boats.html"><span>Boats</span></a></li><li class="menu-item  "><a class="level1" data-id="57" href="//www.newsmartwave.net/magento/porto/index.php/demo5_en/motors/auto-tools-supplies.html"><span>Auto Tools &amp; Supplies</span></a></li>
                                </ul>
                            </li>


                            <li class="menu-item menu-item-has-children menu-parent-item">
                                <a href="javascript:;">Features<span class="cat-label cat-label-label2">Hot!</span></a>
                                <ul>
                                    <li class="menu-item menu-item-has-children menu-parent-item" style="list-style: none;">
                                        <a class="level1" href="javascript:;"><span>Homepage Variations 1</span></a>
                                        <ul>
                                            <li class="menu-item " style="list-style: none;">
                                                <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo1_en"><span>Home Layout 1</span></a>
                                            </li>
                                            <li class="menu-item " style="list-style: none;">
                                                <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo2_en"><span>Home Layout 2</span></a>
                                            </li>
                                            <li class="menu-item " style="list-style: none;">
                                                <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo3_en"><span>Home Layout 3</span></a>
                                            </li>
                                            <li class="menu-item " style="list-style: none;">
                                                <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo4_en"><span>Home Layout 4</span></a>
                                            </li>
                                            <li class="menu-item " style="list-style: none;">
                                                <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo5_en"><span>Home Layout 5</span></a>
                                            </li>
                                            <li class="menu-item " style="list-style: none;">
                                                <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo6_en"><span>Home Layout 6</span></a>
                                            </li>
                                            <li class="menu-item " style="list-style: none;">
                                                <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo7_en"><span>Home Layout 7</span></a>
                                            </li>
                                            <li class="menu-item " style="list-style: none;">
                                                <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo8_en"><span>Home Layout 8</span></a>
                                            </li>
                                            <li class="menu-item " style="list-style: none;">
                                                <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo9_en"><span>Home Layout 9</span></a>
                                            </li>
                                            <li class="menu-item " style="list-style: none;">
                                                <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo10_en"><span>Home Layout 10</span></a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children menu-parent-item" style="list-style: none;">
                                        <a class="level1" href="javascript:;"><span>Homepage Variations 2</span></a>
                                        <ul>
                                            <li class="menu-item " style="list-style: none;">
                                                <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo11_en"><span>Home Layout 11</span></a>
                                            </li>
                                            <li class="menu-item " style="list-style: none;">
                                                <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo12_en"><span>Home Layout 12</span></a>
                                            </li>
                                            <li class="menu-item " style="list-style: none;">
                                                <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo13_en"><span>Home Layout 13</span></a>
                                            </li>
                                            <li class="menu-item " style="list-style: none;">
                                                <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo14_en"><span>Home Layout 14</span></a>
                                            </li>
                                            <li class="menu-item " style="list-style: none;">
                                                <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo15_en"><span>Home Layout 15</span></a>
                                            </li>
                                            <li class="menu-item " style="list-style: none;">
                                                <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo16_en"><span>Home Layout 16</span></a>
                                            </li>
                                            <li class="menu-item " style="list-style: none;">
                                                <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo17_en"><span>Home Layout 17</span></a>
                                            </li>
                                            <li class="menu-item " style="list-style: none;">
                                                <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo18_en"><span>Home Layout 18</span></a>
                                            </li>
                                            <li class="menu-item " style="list-style: none;">
                                                <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo19_en"><span>Home Layout 19</span></a>
                                            </li>
                                            <li class="menu-item " style="list-style: none;">
                                                <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo4_sa"><span>Home RTL Layout</span></a>
                                            </li>
                                            <li class="menu-item " style="list-style: none;">
                                                <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo1_fr"><span>Home Full Ajax Layout</span></a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children menu-parent-item" style="list-style: none;">
                                        <a class="level1" href="javascript:;"><span>Shop Variations 1</span></a>
                                        <ul>
                                            <li class="menu-item " style="list-style: none;">
                                                <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo5_en/electronics.html"><span>Fullwidth Banner</span></a>
                                            </li>
                                            <li class="menu-item " style="list-style: none;">
                                                <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo5_en/fashion.html"><span>Boxed Slider Banner</span></a>
                                            </li>
                                            <li class="menu-item " style="list-style: none;">
                                                <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo5_en/fashion/women.html"><span>Boxed Image Banner</span></a>
                                            </li>
                                            <li class="menu-item " style="list-style: none;">
                                                <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo5_en/fashion.html"><span>Left Sidebar</span></a>
                                            </li>
                                            <li class="menu-item " style="list-style: none;">
                                                <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo5_en/electronics/cameras.html"><span>Right Sidebar</span></a>
                                            </li>
                                            <li class="menu-item " style="list-style: none;">
                                                <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo17_en/fashion.html"><span>Ajax Infinite Scroll</span></a>
                                            </li>
                                            <li class="menu-item " style="list-style: none;">
                                                <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo6_fr/fashion/men/accessories.html"><span>2 Columns Products</span></a>
                                            </li>
                                            <li class="menu-item " style="list-style: none;">
                                                <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo6_fr/fashion/men/tees-knits-and-polos.html"><span>3 Columns Products</span></a>
                                            </li>
                                            <li class="menu-item " style="list-style: none;">
                                                <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo6_fr/fashion/men/shirts.html"><span>4 Columns Products</span></a>
                                            </li>
                                            <li class="menu-item " style="list-style: none;">
                                                <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo6_fr/fashion/men/pants-denim.html"><span>5 Columns Products</span></a>
                                            </li>
                                            <li class="menu-item " style="list-style: none;">
                                                <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo6_fr/fashion/kids/casual-shoes.html"><span>6 Columns Products</span></a>
                                            </li>
                                            <li class="menu-item " style="list-style: none;">
                                                <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo6_fr/fashion/kids/outwear.html"><span>7 Columns Products</span></a>
                                            </li>
                                            <li class="menu-item " style="list-style: none;">
                                                <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo6_fr/fashion/kids/sneakers.html"><span>8 Columns Products</span></a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children menu-parent-item" style="list-style: none;">
                                        <a class="level1" href="javascript:;"><span>Shop Variations 2</span></a>
                                        <ul>
                                            <li class="menu-item " style="list-style: none;">
                                                <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo5_en/fashion/women-dress-m-rolex.html"><span>Product Page with Sidebar</span></a>
                                            </li>
                                            <li class="menu-item " style="list-style: none;">
                                                <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo5_en/fashion/racer-back-maxi-dress.html"><span>Product Page without Sidebar</span></a>
                                            </li>
                                            <li class="menu-item " style="list-style: none;">
                                                <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo11_en/electronics/motorola-male-phone-4g-blue-sony.html"><span>Product Page with Inner Zoom</span></a>
                                            </li>
                                            <li class="menu-item " style="list-style: none;">
                                                <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo11_fr/electronics/motorola-male-phone-4g-blue-sony.html"><span>Product Page with Outer Zoom</span></a>
                                            </li>
                                            <li class="menu-item " style="list-style: none;">
                                                <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo8_fr/fashion/fashion-dress.html"><span>Product Page with Vertical Gallery</span></a>
                                            </li>
                                            <li class="menu-item " style="list-style: none;">
                                                <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo11_fr/electronics/motorola-male-phone-4g-blue-sony.html"><span>Product Page with Addtocart Sticky</span></a>
                                            </li>
                                            <li class="menu-item " style="list-style: none;">
                                                <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo8_fr/fashion/fashion-dress.html"><span>Product Page with Vertical Tabs</span></a>
                                            </li>
                                            <li class="menu-item " style="list-style: none;">
                                                <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo9_fr/fashion/fashion-dress.html"><span>Product Page with Accordion</span></a>
                                            </li>
                                            <li class="menu-item " style="list-style: none;">
                                                <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo8_en/fashion/fashion-dress.html"><span>Product Page with Sticky Tabs</span></a>
                                            </li>
                                            <li class="menu-item " style="list-style: none;">
                                                <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo14_fr/electronics/motorola-male-phone-4g-blue-sony.html"><span>Product Page with Moved Tabs</span></a>
                                            </li>
                                            <li class="menu-item " style="list-style: none;">
                                                <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo5_en/women-dress.html"><span>Configurable Sample Product</span></a>
                                            </li>
                                            <li class="menu-item " style="list-style: none;">
                                                <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo5_en/electronics/games/seiko-bundle.html"><span>Bundle Sample Product</span></a>
                                            </li>
                                            <li class="menu-item " style="list-style: none;">
                                                <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo5_en/fashion/jewellery/women-jewellery.html"><span>Grouped Sample Product</span></a>
                                            </li>											
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children menu-parent-item" style="list-style: none;">
                                        <a class="level1" href="javascript:;"><span>Headers</span></a>
                                        <ul>
                                            <li class="menu-item " style="list-style: none;">
                                                <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo1_en"><span>Header Type 1</span></a>
                                            </li>
                                            <li class="menu-item " style="list-style: none;">
                                                <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo2_fr"><span>Header Type 2</span></a>
                                            </li>
                                            <li class="menu-item " style="list-style: none;">
                                                <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo4_en"><span>Header Type 3</span></a>
                                            </li>
                                            <li class="menu-item " style="list-style: none;">
                                                <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo5_en"><span>Header Type 4</span></a>
                                            </li>
                                            <li class="menu-item " style="list-style: none;">
                                                <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo5_fr"><span>Header Type 5</span></a>
                                            </li>
                                            <li class="menu-item " style="list-style: none;">
                                                <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo7_en"><span>Header Type 6</span></a>
                                            </li>
                                            <li class="menu-item " style="list-style: none;">
                                                <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo7_fr"><span>Header Type 7</span></a>
                                            </li>
                                            <li class="menu-item " style="list-style: none;">
                                                <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo2_en"><span>Header Type 8</span></a>
                                            </li>
                                            <li class="menu-item " style="list-style: none;">
                                                <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo11_en"><span>Header Type 9</span></a>
                                            </li>
                                            <li class="menu-item " style="list-style: none;">
                                                <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo12_en"><span>Header Type 10</span></a>
                                            </li>
                                            <li class="menu-item " style="list-style: none;">
                                                <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo13_en"><span>Header Type 11</span></a>
                                            </li>
                                            <li class="menu-item " style="list-style: none;">
                                                <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo16_en"><span>Header Type 12</span></a>
                                            </li>
                                            <li class="menu-item " style="list-style: none;">
                                                <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo17_en"><span>Header Type 13</span></a>
                                            </li>
                                            <li class="menu-item " style="list-style: none;">
                                                <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo18_en"><span>Header Type 14</span></a>
                                            </li>
                                            <li class="menu-item " style="list-style: none;">
                                                <a class="level2" href="http://www.newsmartwave.net/magento/porto/index.php/demo19_en"><span>Header Type 15</span></a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item">
                                <a href="http://themeforest.net/item/porto-ecommerce-ultimate-magento-theme/9725864?ref=SW-THEMES&amp;license=regular&amp;open_purchase_for_item_id=9725864&amp;purchasable=source" target="_blank">Buy Porto!</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="mobile-nav-overlay close-mobile-nav"></div>
                <script type="text/javascript">
                </script>        
                <?php echo $content; ?>
                <div class="footer-container ">
                    <div class="footer">
                        <div class="footer-middle">
                            <div class="container">
                                <div class="footer-ribbon">
                                    <span>Ribbon Text</span>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3"><div class="block">
                                            <div class="block-title"><strong><span>My Account</span></strong></div>
                                            <div class="block-content">
                                                <ul class="links">
                                                    <li><i class="icon-right-dir theme-color"></i><a href="http://www.newsmartwave.net/magento/porto/index.php/demo5_en/about-porto" title="About us">About us</a></li>
                                                    <li><i class="icon-right-dir theme-color"></i><a href="http://www.newsmartwave.net/magento/porto/index.php/demo5_en/contacts" title="Contact us">Contact us</a></li>
                                                    <li><i class="icon-right-dir theme-color"></i><a href="http://www.newsmartwave.net/magento/porto/index.php/demo5_en/customer/account" title="My account">My account</a></li>
                                                    <li><i class="icon-right-dir theme-color"></i><a href="http://www.newsmartwave.net/magento/porto/index.php/demo5_en/sales/order/history" title="Orders history">Orders history</a></li>
                                                    <li><i class="icon-right-dir theme-color"></i><a href="http://www.newsmartwave.net/magento/porto/index.php/demo5_en/catalogsearch/advanced" title="Advanced search">Advanced search</a></li>
                                                </ul>
                                            </div>
                                        </div></div>                <div class="col-sm-3"><div class="block">
                                            <div class="block-title"><strong><span>Contact Information</span></strong></div>
                                            <div class="block-content">
                                                <ul class="contact-info">
                                                    <li><i class="icon-location">&nbsp;</i><p><b>Address:</b><br/>123 Street Name, City, England</p></li>
                                                    <li><i class="icon-phone">&nbsp;</i><p><b>Phone:</b><br/>(123) 456-7890</p></li>
                                                    <li><i class="icon-mail">&nbsp;</i><p><b>Email:</b><br/><a href="/cdn-cgi/l/email-protection#8ae7ebe3e6caeff2ebe7fae6efa4e9e5e7"><span class="__cf_email__" data-cfemail="204d41494c604558414d504c450e434f4d">[email&#160;protected]</span><script data-cfhash='f9e31' type="text/javascript">/* <![CDATA[ */!function (t, e, r, n, c, a, p) {
                                                            try {
                                                                t = document.currentScript || function () {
                                                                    for (t = document.getElementsByTagName('script'), e = t.length; e--; )
                                                                        if (t[e].getAttribute('data-cfhash'))
                                                                            return t[e]
                                                                }();
                                                                if (t && (c = t.previousSibling)) {
                                                                    p = t.parentNode;
                                                                    if (a = c.getAttribute('data-cfemail')) {
                                                                        for (e = '', r = '0x' + a.substr(0, 2) | 0, n = 2; a.length - n; n += 2)
                                                                            e += '%' + ('0' + ('0x' + a.substr(n, 2) ^ r).toString(16)).slice(-2);
                                                                        p.replaceChild(document.createTextNode(decodeURIComponent(e)), c)
                                                                    }
                                                                    p.removeChild(t)
                                                                }
                                                            } catch (u) {
                                                            }
                                                        }()/* ]]> */</script></a></p></li>
                                                    <li><i class="icon-clock">&nbsp;</i><p><b>Working Days/Hours:</b><br/>Mon - Sun / 9:00AM - 8:00PM</p></li>
                                                </ul>
                                            </div>
                                        </div></div>                <div class="col-sm-3"><div class="block">
                                            <div class="block-title"><strong><span>Main Features</span></strong></div>
                                            <div class="block-content">
                                                <ul class="features">
                                                    <li><i class="icon-ok theme-color"></i><a href="#">Super Fast Magento Theme</a></li>
                                                    <li><i class="icon-ok  theme-color"></i><a href="#">1st Fully working Ajax Theme</a></li>
                                                    <li><i class="icon-ok  theme-color"></i><a href="#">10 Unique Homepage Layouts</a></li>
                                                    <li><i class="icon-ok  theme-color"></i><a href="#">Powerful Admin Panel</a></li>
                                                    <li><i class="icon-ok  theme-color"></i><a href="#">Mobile &amp; Retina Optimized</a></li>
                                                </ul>
                                            </div>
                                        </div></div>                <div class="col-sm-3"><div class="block block-subscribe">
                                            <div class="block-title">
                                                <strong><span>Be the First to Know</span></strong>
                                            </div>
                                            <form action="http://www.newsmartwave.net/magento/porto/index.php/demo5_en/newsletter/subscriber/new/" method="post" id="footer-newsletter-validate-detail" onsubmit="setNewsletterCookie()">
                                                <div class="block-content">
                                                    <p>Get all the latest information on Events,<br/>Sales and Offers. Sign up for newsletter today.</p>
                                                    <div class="input-box">
                                                        <p class="label">Enter your e-mail Address</p>
                                                        <input type="text" name="email" id="newsletter_footer" title="Sign up for our newsletter" class="input-text required-entry validate-email" />
                                                        <button type="submit" title="Submit" class="button"><span><span>Submit</span></span></button>
                                                        <div class="clearer"></div>
                                                    </div>
                                                </div>
                                            </form>
                                            <script type="text/javascript">
                                                //<![CDATA[
                                                var footernewsletterSubscriberFormDetail = new VarienForm('footer-newsletter-validate-detail');
                                                //]]>
                                            </script>
                                        </div>
                                    </div>                                </div>
                            </div>
                        </div>
                        <div class="footer-bottom">
                            <div class="container">
                                <a href="http://www.newsmartwave.net/magento/porto/index.php/demo5_en/" class="logo"><img src="http://www.newsmartwave.net/magento/porto/skin/frontend/smartwave/porto/images/logo_footer.png" alt=""/></a>
                                <div class="social-icons">
                                    <a href="http://www.example.com/" style="background-position:-60px 0; width:30px; height:30px;" class="icon1-class" title="Facebook" target="_blank">&nbsp;</a><a href="http://www.example.com/" style="background-position:0 0; width:30px; height:30px;" class="icon2-class" title="" target="_blank">&nbsp;</a><a href="http://www.example.com/" style="background-position:-300px 0; width:30px; height:30px;" class="icon3-class" title="" target="_blank">&nbsp;</a></div>
                                <div class="custom-block"><img src="http://www.newsmartwave.net/magento/porto/media/wysiwyg/smartwave/footer/payments.png" width="359" height="28" alt="" style="max-width: 100%;" /></div>                                <address>&copy;Copyright 2015 by SW-THEMES. All Rights Reserved.</address>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="#" id="totop"><i class="icon-up-open"></i></a>
                <script type="text/javascript">
                    var windowScroll_t;
                    jQuery(window).scroll(function () {
                        clearTimeout(windowScroll_t);
                        windowScroll_t = setTimeout(function () {
                            if (jQuery(this).scrollTop() > 100) {
                                jQuery('#totop').fadeIn();
                            } else {
                                jQuery('#totop').fadeOut();
                            }
                        }, 500);
                    });
                    jQuery('#totop').click(function () {
                        jQuery('html, body').animate({scrollTop: 0}, 600);
                        return false;
                    });
                    jQuery(function ($) {
                        $(".cms-index-index .footer-container.fixed-position .footer-top,.cms-index-index .footer-container.fixed-position .footer-middle").remove();
                    });
                </script>                

                <script type="text/javascript">
                    jQuery(function ($) {
                        var check_cookie = $.cookie('newsletter_popup');
                        if (window.location != window.parent.location) {
                            jQuery('#newsletter_popup').remove();
                        } else {
                            if (check_cookie == null || check_cookie == 'shown') {
                                setTimeout(function () {
                                    beginNewsletterForm();
                                }, 3000);
                            }
                            $('#newsletter_popup_dont_show_again').on('change', function () {
                                if ($(this).length) {
                                    var check_cookie = $.cookie('newsletter_popup');
                                    if (check_cookie == null || check_cookie == 'shown') {
                                        $.cookie('newsletter_popup', 'dontshowitagain');
                                    } else
                                    {
                                        $.cookie('newsletter_popup', 'shown');
                                        beginNewsletterForm();
                                    }
                                } else {
                                    $.cookie('newsletter_popup', 'shown');
                                }
                            });
                        }
                    });

                    function beginNewsletterForm() {
                        jQuery.fancybox({
                            'padding': '0px',
                            'autoScale': true,
                            'transitionIn': 'fade',
                            'transitionOut': 'fade',
                            'type': 'inline',
                            'href': '#newsletter_popup',
                            'onComplete': function () {
                                $.cookie('newsletter_popup', 'shown');
                            },
                            'tpl': {
                                closeBtn: '<a title="Close" class="fancybox-item fancybox-close fancybox-newsletter-close" href="javascript:;"></a>'
                            },
                            'helpers': {
                                overlay: {
                                    locked: false
                                }
                            }
                        });
                        jQuery('#newsletter_popup').trigger('click');
                    }

                </script>
                <style type="text/css">
                    #newsletter_popup{
                        width:700px;height:324px;}
                    </style>
                    <div class="block block-subscribe" id="newsletter_popup">
                    <form action="http://www.newsmartwave.net/magento/porto/index.php/demo5_en/newsletter/subscriber/new/" method="post" id="newsletter-popup-validate-detail" onsubmit="setNewsletterCookie()">
                        <div class="block-content">
                            <img src="http://www.newsmartwave.net/magento/porto/skin/frontend/smartwave/porto/images/logo.png" alt="" />
                            <h2>BE THE FIRST TO KNOW</h2><p>Subscribe to the Porto eCommerce newsletter to receive timely updates from your favorite products.</p>            <div class="input-box">
                                <input type="text" name="email" id="newsletter_popup_email" title="Sign up for our newsletter" class="input-text required-entry validate-email" placeholder="Email Address" />
                                <button type="submit" title="Go!" class="button"><span><span>Go!</span></span></button>
                                <div class="clearer"></div>
                            </div>
                        </div>
                    </form>
                    <script type="text/javascript">
                        //<![CDATA[
                        var newsletterpopupSubscriberFormDetail = new VarienForm('newsletter-popup-validate-detail');
                        document.getElementById("newsletter-popup-validate-detail").onsubmit = function () {
                            jQuery.cookie('newsletter_popup', 'dontshowitagain');
                        }
                        //]]>
                    </script>
                    <div class="subscribe-bottom">
                        <input type="checkbox" id="newsletter_popup_dont_show_again"/>
                        <label for="newsletter_popup_dont_show_again">Don't show this popup again</label>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">/* <![CDATA[ */(function (d, s, a, i, j, r, l, m, t) {
                try {
                    l = d.getElementsByTagName('a');
                    t = d.createElement('textarea');
                    for (i = 0; l.length - i; i++) {
                        try {
                            a = l[i].href;
                            s = a.indexOf('/cdn-cgi/l/email-protection');
                            m = a.length;
                            if (a && s > -1 && m > 28) {
                                j = 28 + s;
                                s = '';
                                if (j < m) {
                                    r = '0x' + a.substr(j, 2) | 0;
                                    for (j += 2; j < m && a.charAt(j) != 'X'; j += 2)
                                        s += '%' + ('0' + ('0x' + a.substr(j, 2) ^ r).toString(16)).slice(-2);
                                    j++;
                                    s = decodeURIComponent(s) + a.substr(j, m - j)
                                }
                                t.innerHTML = s.replace(/</g, '&lt;').replace(/>/g, '&gt;');
                                l[i].href = 'mailto:' + t.value
                            }
                        } catch (e) {
                        }
                    }
                } catch (e) {
                }
            })(document);/* ]]> */</script></body>
</html>
<?php $this->endBody() ?>
<?php $this->endPage() ?>