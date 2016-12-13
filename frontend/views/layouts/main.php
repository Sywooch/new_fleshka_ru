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
        <link rel="stylesheet" type="text/css" href="<?= $assets ?>/css/local.css?v=1" media="all" />
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
        <script type="text/javascript" src="<?= $assets ?>/js/numeral.min.js"></script>

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
            <div class="page">
                <div class="header-container type4">
                    <div class="top-links-container">
                        <div class="top-links container">
                            <p class="welcome-msg" style="float: left;">Мы продаем флешки оптом уже 10 лет! Наносим красивые логотипы!</p>        

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
                            <div class="custom-block">
                                <i class="icon-phone" style="margin-right: 5px;"></i>
                                <span>(+404) 158 14 25 78</span>
                                <span class="split"></span>
                                <a href="/kontakty">Контакты</a></div>            
                            <div class="mini-cart">
                                <a href="#" class="mybag-link">
                                    <i class="icon-mini-cart"></i>
                                    <span class="cart-info">
                                        <span class="cart-qty">0</span>
                                        <span>item(s)</span>                                            
                                    </span>
                                </a>
                                <div class="topCartContent block-content theme-border-color">
                                    <div class="inner-wrapper">                                                   
                                        <p class="cart-empty">
                                            Ваша корзина пуста.              
                                        </p>
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
                            </div>        
                        </div>
                        <div class="search-area">
                            <a href="#" class="search-icon"><i class="icon-search"></i></a>
                            <form id="search_mini_form" action="" method="get">
                                <div class="form-search ">
                                    <label for="search">Поиск</label>
                                    <input placeholder="Поиск" id="search" type="text" name="q" class="input-text" />                                    
                                    <button type="submit" title="Search" class="button"><i class="icon-search"></i></button>
                                    <div class="clearer"></div>
                                </div>
                            </form>
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
                                                <a href="/">
                                                    <span>Главная</span>
                                                </a>
                                            </li>
                                            <li class="menu-item menu-item-has-children menu-parent-item  " >
                                                <a href="">Motors</a>
                                                <div class="nav-sublist-dropdown" style="display: none;">
                                                    <div class="container">
                                                        <ul>
                                                            <li class="menu-item">
                                                                <a class="level1" data-id="31" href=""><span>Cars and Trucks</span></a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="level1" data-id="32" href="">
                                                                    <span>Motorcycles &amp; Powersports</span>
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="level1" data-id="33" href="">
                                                                    <span>Parts &amp; Accessories</span>
                                                                </a>
                                                            </li>                                                            
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="menu-item">
                                                <a href="">Home &amp; Garden</a>
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
                    </script>
                </div>
                <div class="mobile-nav side-block container">
                    <div class="menu-all-pages-container">
                        <ul class="menu">
                            <li class="act">
                                <a href="/">
                                    <span>Главная</span>
                                </a>
                            </li> 
                            <li class="menu-item menu-item-has-children menu-parent-item" >
                                <a href="">Motors</a>
                                <ul>
                                    <li class="menu-item">
                                        <a class="level1" data-id="31" href="">
                                            <span>Cars and Trucks</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a class="level1" data-id="32" href="">
                                            <span>Motorcycles &amp; Powersports</span>
                                        </a>
                                    </li>                                    
                                </ul>
                            </li>
                            <li class="menu-item">
                                <a href="">Home &amp; Garden</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="mobile-nav-overlay close-mobile-nav"></div>        
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
            })(document);/* ]]> */</script>
          
    </body>
</html>
<?php $this->endBody() ?>
<?php $this->endPage() ?>