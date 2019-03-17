<!DOCTYPE html>
<!--[if IE 8]> <html class="ie8"> <![endif]-->
<!--[if IE 9]> <html class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title>Главная | ДЕКО-ТРАНС</title>
    <meta name="description" content="Responsive modern ecommerce Html5 Template">
    <!--[if IE]> <meta http-equiv="X-UA-Compatible" content="IE=edge"> <![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href='//fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic%7CPT+Gudea:400,700,400italic%7CPT+Oswald:400,700,300' rel='stylesheet' id="googlefont">

    <link rel="stylesheet" href="{{URL::to('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::to('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{URL::to('css/prettyPhoto.css')}}">
    <link rel="stylesheet" href="{{URL::to('css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{URL::to('css/jquery.selectbox.css')}}">
    <link rel="stylesheet" href="{{URL::to('css/revslider.css')}}">
    <link rel="stylesheet" href="{{URL::to('css/style.css')}}">
    <link rel="stylesheet" href="{{URL::to('css/responsive.css')}}">

    <!-- Favicon and Apple Icons -->
    <link rel="icon" type="image/png" href="images/icons/icon.png">
    <link rel="apple-touch-icon" sizes="57x57" href="images/icons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/icons/apple-icon-72x72.png">

    <!-- Google map javascript api v3 -->
    <script src="//maps.googleapis.com/maps/api/js?key=AIzaSyD45Nu6JYgh1oKG5G9ut7Nr4QW48gx-6ug&amp;sensor=false"></script>

    <!--- jQuery -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.11.1.min.js"><\/script>')</script>

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

    <style id="custom-style">

    </style>
</head>
<body>
<div id="wrapper">
    <header id="header" class="header6">
        <div id="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="header-top-left">
                            <ul id="top-links" class="clearfix">
                                <!-- <li><a href="#" title="My Wishlist"><span class="top-icon top-icon-pencil"></span><span class="hide-for-xs">My Wishlist</span></a></li> -->
                                <li><a href="#" title="My Account"><span class="top-icon top-icon-user"></span><span class="hide-for-xs">Мой кабинет</span></a></li>
                                <li><a href="cart.phtml" title="My Cart"><span class="top-icon top-icon-cart"></span><span class="hide-for-xs">Корзина</span></a></li>
                                <!-- <li><a href="checkout.html" title="Checkout"><span class="top-icon top-icon-check"></span><span class="hide-for-xs">Checkout</span></a></li> -->
                            </ul>
                        </div><!-- End .header-top-left -->
                        <div class="header-top-right">

                            <div class="header-text-container pull-right">
                                <p class="header-text">Добро пожаловать!</p>
                                <p class="header-link"><a href="{{route('login')}}">Войти</a>&nbsp;или&nbsp;<a href="{{route('register')}}">Зарегистрироваться</a></p>
                            </div><!-- End .pull-right -->
                        </div><!-- End .header-top-right -->
                    </div><!-- End .col-md-12 -->
                </div><!-- End .row -->
            </div><!-- End .container -->
        </div><!-- End #header-top -->

        <div id="inner-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-12 logo-container">
                        <h1 class="logo clearfix">
                            <span>ООО "ДЕКО-ТРАНС"</span>
                            <a href="index.phtml" title="Venedor eCommerce Template"><img src="images/logodkt.png" alt="Venedor Commerce Template" width="200" height="54"></a>
                        </h1>
                    </div><!-- End .col-md-3 -->
                    <div class="col-md-9 col-sm-9 col-xs-12 header-inner-right">
                        <div class="header-inner-right-wrapper clearfix">

                            <div class="dropdown-cart-menu-container pull-right">
                                <div class="btn-group dropdown-cart">
                                    <button type="button" class="btn btn-custom dropdown-toggle" data-toggle="dropdown">
                                        <span class="cart-menu-icon"></span>
                                        0 товар(ов) <span class="drop-price">- $0.00</span>
                                    </button>

                                    <div class="dropdown-menu dropdown-cart-menu pull-right clearfix" role="menu">
                                        <p class="dropdown-cart-description">Товары в корзине.</p>
                                        <ul class="dropdown-cart-product-list">
                                            <li class="item clearfix">
                                                <a href="#" title="Delete item" class="delete-item"><i class="fa fa-times"></i></a>
                                                <a href="#" title="Edit item" class="edit-item"><i class="fa fa-pencil"></i></a>
                                                <figure>
                                                    <a href="product.html"><img src="images/products/thumbnails/item12.jpg" alt="phone 4"></a>
                                                </figure>
                                                <div class="dropdown-cart-details">
                                                    <p class="item-name">
                                                        <a href="product.html">Cam Optia AF Webcam </a>
                                                    </p>
                                                    <p>
                                                        1x
                                                        <span class="item-price">$499</span>
                                                    </p>
                                                </div><!-- End .dropdown-cart-details -->
                                            </li>
                                        </ul>

                                        <ul class="dropdown-cart-total">
                                            <!-- <li><span class="dropdown-cart-total-title">Shipping:</span>$7</li> -->
                                            <li><span class="dropdown-cart-total-title">Итого:</span>$1005<span class="sub-price">.99</span></li>
                                        </ul><!-- .dropdown-cart-total -->
                                        <div class="dropdown-cart-action">
                                            <p><a href="cart.phtml" class="btn btn-custom-2 btn-block">Корзина</a></p>
                                            <!-- <p><a href="checkout.html" class="btn btn-custom btn-block">Checkout</a></p> -->
                                        </div><!-- End .dropdown-cart-action -->

                                    </div><!-- End .dropdown-cart -->
                                </div><!-- End .btn-group -->
                            </div><!-- End .dropdown-cart-menu-container -->

                            <div id="quick-access">
                                <form class="form-inline quick-search-form" role="form" action="#">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Поиск">
                                    </div><!-- End .form-inline -->
                                    <button type="submit" id="quick-search" class="btn btn-custom"></button>
                                </form>
                            </div><!-- End #quick-access -->

                            <div class="header-box contact-infos pull-right">
                                <ul>
                                    <li><span class="header-box-icon header-box-icon-skype"></span>decotrans</li>
                                    <li><span class="header-box-icon header-box-icon-email"></span><a href="mailto:venedor@gmail.com">dekotrans.ltd@gmail.com</a></li>
                                </ul>
                            </div><!-- End .contact-infos -->

                            <div class="header-box contact-phones pull-right clearfix">
                                <span class="header-box-icon header-box-icon-earphones"></span>
                                <ul class="pull-left">
                                    <li>+38(044) 585 19 20</li>
                                    <li>+38(067) 548 86 53</li>
                                </ul>
                            </div><!-- End .contact-phones -->

                        </div><!-- End .header-inner-right-wrapper -->
                    </div><!-- End .col-md-7 -->
                </div><!-- End .row -->
            </div><!-- End .container -->

            <div id="main-nav-container">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 clearfix">

                            <nav id="main-nav">
                                <div id="responsive-nav">
                                    <div id="responsive-nav-button">
                                        Menu <span id="responsive-nav-button-icon"></span>
                                    </div><!-- responsive-nav-button -->
                                </div>
                                <div class="menu-table">
                                    <ul class="menu clearfix">
                                        <li>
                                            <a class="active" href="index.phtml">Главная</a>
                                        </li>
                                        <li>
                                            <a class="active" href="category.phtml">Товары</a>
                                        </li>

                                        <li><a href="aboutus.phtml">О нас</a>
                                            <ul>
                                                <li>
                                                    <a href="#">История</a>
                                                </li>
                                                <li>
                                                    <a href="#">Наша команда</a>
                                                </li>
                                                <li>
                                                    <a href="#">Контакты</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.phtml">Контаты</a></li>
                                        <!--  <li><a href="#">My Account</a></li>
                                         <li><a href="#">News</a></li>
                                         <li><a href="http://themeforest.net/item/venedor-premium-bootstrap-ecommerce-html5-template/7426521?ref=SW-THEMES" target="_blank">Buy Venedor</a></li> -->
                                    </ul>
                                </div>

                            </nav>

                        </div><!-- End .col-md-12 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->

            </div><!-- End #nav -->
        </div><!-- End #inner-header -->
    </header><!-- End #header -->

    @yield('content')

    <footer id="footer">
        <div id="inner-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-4 col-xs-12 widget">
                        <h3>MY ACCOUNT</h3>
                        <ul class="links">
                            <li><a href="#">My account</a></li>
                            <li><a href="#">Personal information</a></li>
                            <li><a href="#">Addresses</a></li>
                            <li><a href="#">Discount</a></li>
                            <li><a href="#">Order History</a></li>
                            <li><a href="#">Your Vouchers</a></li>
                        </ul>
                    </div><!-- End .widget -->

                    <div class="col-md-3 col-sm-4 col-xs-12 widget">
                        <h3>INFORMATION</h3>
                        <ul class="links">
                            <li><a href="#">New products</a></li>
                            <li><a href="#">Top sellers</a></li>
                            <li><a href="#">Specials</a></li>
                            <li><a href="#">Manufacturers</a></li>
                            <li><a href="#">Suppliers</a></li>
                            <li><a href="#">Our stores</a></li>
                        </ul>
                    </div><!-- End .widget -->

                    <div class="col-md-3 col-sm-4 col-xs-12 widget">
                        <h3>MY ACCOUNT</h3>

                        <ul class="contact-list">
                            <li><strong>Venedor Ltd</strong></li>
                            <li>United Kingdom</li>
                            <li>Greater London</li>
                            <li>London 02587</li>
                            <li>Oxford Street 48/188</li>
                            <li>Working Days: Mon. - Sun.</li>
                            <li>Working Hours: 9.00AM - 8.00PM</li>
                        </ul>
                    </div><!-- End .widget -->

                    <div class="clearfix visible-sm"></div>

                    <div class="col-md-3 col-sm-12 col-xs-12 widget">
                        <h3>FACEBOOK LIKE BOX</h3>

                        <div class="facebook-likebox">
                            <iframe src="//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fenvato&amp;colorscheme=dark&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=false"></iframe>
                        </div>


                    </div><!-- End .widget -->
                </div><!-- End .row -->
            </div><!-- End .container -->

        </div><!-- End #inner-footer -->

        <div id="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-sm-7 col-xs-12 footer-social-links-container">
                        <ul class="social-links clearfix">
                            <li><a href="#" class="social-icon icon-facebook"></a></li>
                            <li><a href="#" class="social-icon icon-twitter"></a></li>
                            <li><a href="#" class="social-icon icon-rss"></a></li>
                            <li><a href="#" class="social-icon icon-delicious"></a></li>
                            <li><a href="#" class="social-icon icon-linkedin"></a></li>
                            <li><a href="#" class="social-icon icon-flickr"></a></li>
                            <li><a href="#" class="social-icon icon-skype"></a></li>
                            <li><a href="#" class="social-icon icon-email"></a></li>
                        </ul>
                    </div><!-- End .col-md-7 -->

                    <div class="col-md-5 col-sm-5 col-xs-12 footer-text-container">
                        <p>&copy; 2019 ООО "ДЕКО-ТРАНС" &trade;. All Rights Reserved.</p>
                    </div><!-- End .col-md-5 -->
                </div><!-- End .row -->
            </div><!-- End .container -->
        </div><!-- End #footer-bottom -->

    </footer><!-- End #footer -->
</div><!-- End #wrapper -->

<a href="#" id="scroll-top" title="Scroll to Top"><i class="fa fa-angle-up"></i></a><!-- End #scroll-top -->

<!-- END -->
<script src="{{URL::to('js/bootstrap.min.js')}}"></script>
<script src="{{URL::to('js/smoothscroll.js')}}"></script>
<script src="{{URL::to('js/jquery.debouncedresize.js')}}"></script>
<script src="{{URL::to('js/retina.min.js')}}"></script>
<script src="{{URL::to('js/jquery.placeholder.js')}}"></script>
<script src="{{URL::to('js/jquery.hoverIntent.min.js')}}"></script>
<script src="{{URL::to('js/twitter/jquery.tweet.min.js')}}"></script>
<script src="{{URL::to('js/jquery.flexslider-min.js')}}"></script>
<script src="{{URL::to('js/owl.carousel.min.js')}}"></script>
<script src="{{URL::to('js/jquery.selectbox.min.js')}}"></script>
<script src="{{URL::to('js/jflickrfeed.min.js')}}"></script>
<script src="{{URL::to('js/jquery.prettyPhoto.js')}}"></script>
<script src="{{URL::to('js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{URL::to('js/jquery.themepunch.revolution.min.js')}}"></script>
<script src="{{URL::to('js/main.js')}}"></script>


<script>
    $(function() {

        // Slider Revolution
        jQuery('#slider-rev').revolution({
            delay:5000,
            startwidth:870,
            startheight:520,
            onHoverStop:"true",
            hideThumbs:250,
            navigationHAlign:"center",
            navigationVAlign:"bottom",
            navigationHOffset:0,
            navigationVOffset:15,
            soloArrowLeftHalign:"left",
            soloArrowLeftValign:"center",
            soloArrowLeftHOffset:0,
            soloArrowLeftVOffset:0,
            soloArrowRightHalign:"right",
            soloArrowRightValign:"center",
            soloArrowRightHOffset:0,
            soloArrowRightVOffset:0,
            touchenabled:"on",
            stopAtSlide:-1,
            stopAfterLoops:-1,
            dottedOverlay:"none",
            fullWidth:"on",
            spinned:"spinner4",
            shadow:0, // 1 2 3 to change shadows
            hideTimerBar: "on",
            // navigationStyle:"preview2"
        });

        /* This is fix for mobile devices position slider at the top  via absolute pos */
        var fixSliderForMobile = function () {
            var winWidth = $(window).width();

            if (winWidth <= 767 && $('#slider-rev-container').length) {
                var revSliderHeight = $('#slider-rev').height();
                console.log(revSliderHeight);
                $('.slider-position').css('padding-top', revSliderHeight);
                $('.main-content').css('position', 'static');
            } else {
                $('.slider-position').css('padding-top', 0);
                $('.main-content').css('position', 'relative');
            }
        };

        fixSliderForMobile();

        /* Resize fix positionin */
        if($.event.special.debouncedresize) {
            $(window).on('debouncedresize', function() {
                fixSliderForMobile();
            });
        } else {
            $(window).on('resize', function () {
                fixSliderForMobile();
            });
        }


    });
</script>
</body>
</html>

