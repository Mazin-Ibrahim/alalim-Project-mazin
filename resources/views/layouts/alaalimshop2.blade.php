<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <!-- Basic -->
  <meta charset="utf-8">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ config('app.name', 'alaalimshop') }}</title>
  <meta name="keywords" content="HTML5 Template" />
  <meta name="description" content="WellDone - Responsive HTML5 Template">
  <meta name="author" content="etheme.com">
  <link rel="shortcut icon" href="favicon.ico">
  <!-- Mobile Specific Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Web Fonts  -->
    
  <!-- page1 -->


  <link rel="stylesheet" href="{{ asset('css/pe-icon-7-stroke.css') }}">
   <link rel="stylesheet" href="{{ asset('css/tailwind.css') }}">
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">
   <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200&display=swap" rel="stylesheet">
  <!-- Icon Fonts  -->
  <link rel="stylesheet" href="{{ asset('font/style.css') }}">
  <!-- Vendor CSS -->
  <link rel="stylesheet" href="{{ asset('vendor/waves/waves.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/slick/slick.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/slick/slick-theme.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/bootstrap-select/bootstrap-select.css') }}">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style-rtl.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style-colors.css') }}">
  <link rel="stylesheet" href="{{ asset('css/my-style.css') }}">
  <!-- Custom Fonts -->
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>

  <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
  <link rel="stylesheet" type="text/css" href="{{ asset('vendor/rs-plugin/css/settings.css') }}" media="screen" />
  <!-- Head Libs -->


  <!-- Modernizr -->
  <script src="{{ asset('vendor/modernizr/modernizr.js') }}"></script>



</head>
<body class="rtl" style="font-family: 'Cairo', sans-serif;">
    <div id="app">
      <div id="loader-wrapper" class="loader-off">
        <div id="loader"></div>
      </div>
      <!-- Modal Search -->
      <div class="overlay overlay-scale">
        <button type="button" class="overlay-close"> ✕ </button>
        <div class="overlay__content">
          <form id="search-form" class="search-form outer" action="#" method="post">
            <div class="input-group input-group--wd">
              <select class="" name="">
                <option value="">إلكترونيات</option>
                <option value="">ملابس</option>
              </select>
              <span class="input-group__bar"></span> </div>
            <a href="search-products.html" class="btn btn--wd text-uppercase wave waves-effect">بحث</a>
          </form>
        </div>
      </div>
      <!-- / end Modal Search -->

      <div class="wrapper">
        <!-- Header section -->
        <header class="header header--sticky">
          <div class="header-line hidden-xs">
            <div class="container">
              <div class="pull-left">
                <div class="social-links social-links--colorize">
                  <ul>
                    <li class="social-links__item"><a class="icon icon-facebook" href="#"></a></li>
                    <li class="social-links__item"><a class="icon icon-twitter" href="#"></a></li>
                    <li class="social-links__item"><a class="icon icon-google" href="#"></a></li>
                    <li class="social-links__item"><a class="icon icon-pinterest" href="#"></a></li>
                    <li class="social-links__item"><a class="icon icon-mail" href="#"></a></li>
                  </ul>
                </div>
              </div>
              <div class="pull-right">
                <div class="user-links">
                  <ul>
                    <li class="user-links__item"><a href="/page/login">تسجيل دخول</a></li>
                    <li class="user-links__item"><a href="/page/register">تسجيل جديد</a></li>

                    <!-- <li class="user-links__item "><input type="text" class="form-control" placeholder="Search"><span class="icon icon-search"></span></li> -->

                    <!-- <li  class="user-links__item user-links__item--separate"><a href="#" class="color-twitter">TWITTER</a> / <a href="#" class="color-facebook">FACEBOOK</a> LOGIN</li> -->
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="header__dropdowns-container">
            <div class="header__dropdowns">
              <div class="header__search pull-left"> <a href="#" class="btn dropdown-toggle btn--links--dropdown header__dropdowns__button search-open"
                ><span class="icon icon-search"></span></a> </div>
              <div class="header__cart pull-left"><span class="header__cart__indicator hidden-xs">$0.00</span>
                <div class="dropdown pull-right"><a href="#" class="btn dropdown-toggle btn--links--dropdown header__cart__button header__dropdowns__button" data-toggle="dropdown"><span class="icon icon-bag-alt"></span><span class="badge badge--menu">2</span></a>
                  <div class="dropdown-menu animated fadeIn shopping-cart" role="menu">
                    <div class="shopping-cart__settings"><a href="#" class="icon icon-gear"></a></div>
                    <div class="shopping-cart__top text-uppercase">العربة(2)</div>
                    <ul>
                      <li class='shopping-cart__item'>
                        <div class="shopping-cart__item__image pull-left"><a href="#"><img src="images/products/product.jpg" alt=""/></a></div>
                        <div class="shopping-cart__item__info">
                          <div class="shopping-cart__item__info__title">
                            <h2 class="text-uppercase"><a href="#">تشييرت أبيض بأكمام</a></h2>
                          </div>
                          <div class="shopping-cart__item__info__option">اللون: أبيض</div>
                          <div class="shopping-cart__item__info__option">الحجم: صغير</div>
                          <div class="shopping-cart__item__info__price">$84.00</div>
                          <div class="shopping-cart__item__info__qty">الكمية:1</div>
                          <div class="shopping-cart__item__info__delete"><a href="#" class="icon icon-clear"></a></div>
                        </div>
                      </li>
                      <li class='shopping-cart__item'>
                        <div class="shopping-cart__item__image pull-left"><a href="#"><img src="images/products/product.jpg" alt=""/></a></div>
                        <div class="shopping-cart__item__info">
                          <div class="shopping-cart__item__info__title">
                            <h2 class="text-uppercase"><a href="#">تشيرت أسود بدون أكمام</a></h2>
                          </div>
                          <div class="shopping-cart__item__info__option">اللون: أسود</div>
                          <div class="shopping-cart__item__info__option">الحجم: صغير</div>
                          <div class="shopping-cart__item__info__price">$84.00</div>
                          <div class="shopping-cart__item__info__qty">الكمية: 1</div>
                          <div class="shopping-cart__item__info__delete"><a href="#" class="icon icon-clear"></a></div>
                        </div>
                      </li>
                    </ul>
                    <div class="shopping-cart__bottom">
                      <div class="pull-left">المجموع: <span class="shopping-cart__total"> $130.00</span></div>
                      <div class="pull-right">
                        <button class="btn btn--wd text-uppercase">حجز و تأكيد</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="dropdown pull-right"> <a href="#" class="btn dropdown-toggle btn--links--dropdown header__dropdowns__button" data-toggle="dropdown"><span class="icon icon-person"></span></a>
                <ul class="dropdown-menu ul-row animated fadeIn" role="menu">

                  </li>
                  <li class='li-col list-user-menu'>
                    <h4>حسابي</h4>
                          <ul>
                            <li><a href="#">الصفحة الشخصية</a></li>
                            <li><a href="my orders.html">طلباتي</a></li>
                            <li><a href="my products.html">منتجاتي</a></li>
                            <li><a href="wish list.html">المفضلة</a></li>
                            <li><a href="bankAccount.html">حسابات</a></li>
                            <li><a href="records.html">السجلات</a></li>
                            <li><a href="#">خروج</a></li>
                          </ul>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <nav class="navbar navbar-wd" id="navbar">
            <div class="container">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" id="slide-nav"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                <!--  Logo  -->
                <a class="logo" href="index.html"> <img class="logo-default" src="images/logo.png" alt=""/> <img class="logo-mobile" src="images/logo-mobile.png" alt=""/> <img class="logo-transparent" src="images/logo-transparent.png" alt=""/> </a>
                <!-- End Logo -->
              </div>
              <div class="pull-left search-focus-fade" id="slidemenu">
                <div class="slidemenu-close visible-xs">✕</div>
                <ul class="nav navbar-nav">
                  <li> <a href="index.html" class="dropdown-toggle"><span class="link-name">الرئيسية</span><span class="caret caret--dots"></span></a>

                  </li>
                  <!-- layouts -->
                  <li> <a href="about-us.html" class="dropdown-toggle"><span class="link-name">من نحن</span><span class="caret caret--dots"></span></a>

                  </li>
                  <!-- Blog -->
                  <li><a href="contact.html"  class="dropdown-toggle"><span class="link-name">اتصل بنا</span><span class="caret caret--dots"></span></a>

                  </li>
                  <!-- Shop -->
                  <li><a href="store.html"  class="dropdown-toggle"><span class="link-name">المتجر</span><span class="caret caret--dots"></span></a>


                  </li>
                  <!-- CATEGORY -->
                  <li class="menu-large"><a href="cat.html" class="dropdown-toggle"><span class="link-name">التصنيفات</span><span class="caret caret--dots"></span></a>


                  </li>



                </ul>
              </div>
            </div>
          </nav>
        </header>
        <!-- End Header section -->

        <main class="py-4">
            @yield('content')
        </main>
      </div>
    <footer class="footer">
      <div class="footer__column-links">
        <div class="back-to-top" style="display: block !important;">
              <a href="#top" class="btn btn--round btn--round--lg">
                <span class="icon-arrow-up"></span>
              </a>
        </div>
        <div class="container">
          <div class="row">
            <!-- <div class="col-sm-5 col-md-12"> -->
              <div class="social-links social-links--colorize social-links--large">
                <ul class="text-center">
                  <li class="social-links__item"><a class="icon icon-facebook" href="http://www.facebook.com/"></a></li>
                  <li class="social-links__item"><a class="icon icon-twitter" href="http://www.twitter.com/"></a></li>
                  <li class="social-links__item"><a class="icon icon-google" href="http://www.google.com/"></a></li>
                  <li class="social-links__item"><a class="icon icon-pinterest" href="http://www.pinterest.com/"></a></li>
                  <li class="social-links__item"><a class="icon icon-mail" href="mailto:mail@google.com"></a></li>
                </ul>
              </div>
            <!-- </div> -->
          </div>

          <div class="row">
            <div class="social-links social-links--colorize social-links--large">
              <ul class=" text-center">
                <li class="social-links__item"><a href="#">الرئيسية</a></li>
                <li class="social-links__item"><a href="#"> من نحن</a></li>
                <li class="social-links__item"><a href="#">اتصل بنا</a></li>
                <li class="social-links__item"><a href="#">المتجر</a></li>
                <li class="social-links__item"><a href="#">التصنيفات</a></li>
                <li class="social-links__item"><a href="#">التعليمات</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="footer__bottom">
        <div class="container">
          <div class="pull-left text-uppercase">© 2020. كل الحقوق محفوظة.  <a href="#">العالمي شوب</a></div>
          <div class="pull-left text-center">
            <label>اختر المتجر: </label>
            <div class="select-wrapper">
                <select class="select--wd select--wd--xs">
                  <option>متجر عثمان</option>
                  <option>متجر ماي تكنولوجي</option>
                  <option>متجر الحسن</option>
                </select>
            </div>
          </div>
          <div class="pull-right text-uppercase text-right">صمم ب <span class="icon-favorite color-heart"></span> من <a href="#">شركة فلكس</a></div>
        </div>
      </div>
    </footer>

      <div class="compare-box" id="compareBox">
        <div class="container">
          <div class="compare-box__header">
            <h3 class="compare-box__header__title">Compare</h3>
            <div class="compare-box__header__toggle"><span class="compare-box__header__toggle__hide hide-compare">Hide<span class="icon icon-arrow-down"></span></span><span class="compare-box__header__toggle__show show-compare">Show<span class="icon icon-arrow-up"></span></span><span class="compare-box__header__toggle__close close-compare"><span class="icon icon-clear"></span></span></div>
          </div>
          <div class="compare-box__items">
            <ul class="compare-box__items__list compare-carousel nav-top">
              <li class="compare-box__items__list__item">
                <div class="compare-box__items__list__item__delete"><a href="#" class="icon icon-clear"></a></div>
                <a href="#"><img src="images/products/product-2.jpg" alt=""></a></li>
              <li class="compare-box__items__list__item empty">
                <div class="compare-box__items__list__item__num">1</div>
                <img src="images/products/product-empty.png" alt=""/></li>
              <li class="compare-box__items__list__item empty">
                <div class="compare-box__items__list__item__num">2</div>
                <img src="images/products/product-empty.png" alt=""/></li>
              <li class="compare-box__items__list__item empty">
                <div class="compare-box__items__list__item__num">3</div>
                <img src="images/products/product-empty.png" alt=""/></li>
              <li class="compare-box__items__list__item empty">
                <div class="compare-box__items__list__item__num">4</div>
                <img src="images/products/product-empty.png" alt=""/></li>
              <li class="compare-box__items__list__item empty">
                <div class="compare-box__items__list__item__num">5</div>
                <img src="images/products/product-empty.png" alt=""/></li>
              <li class="compare-box__items__list__item empty">
                <div class="compare-box__items__list__item__num">6</div>
                <img src="images/products/product-empty.png" alt=""/></li>
            </ul>
            <div class="compare-box__actions">
              <div class="compare-box__actions__btns"> <a href="#" class="btn btn--wd btn--lg text-uppercase">Compare</a> <a href="#" class="btn btn--wd btn--lg btn--light text-uppercase" id="removeAllCompare">Clear All</a> </div>
            </div>
          </div>
        </div>
    </div>
      <div class="modal fade bs-example-modal-sm" role="dialog" id="modalAddToCart">
          <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <button type="button" class="close icon-clear" data-dismiss="modal"></button>
            <div class="text-center">
              <div class="divider divider--xs"></div>
              <p>Product added to cart successfully! </p>
              <div class="divider divider--xs"></div>
              <a href="#" class="btn btn--wd">Go to Cart</a>
              <div class="divider divider--xs"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal fade bs-example-modal-sm" role="dialog" id="modalAddToWishlist">
          <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <button type="button" class="close icon-clear" data-dismiss="modal"></button>
            <div class="text-center">
              <div class="divider divider--xs"></div>
              <div class="loading">
                <div class="divider divider--sm"></div>
                <div class="loader">
                  <div class="bar"></div>
                  <div class="bar"></div>
                  <div class="bar"></div>
                  <div class="bar"></div>
                  <div class="bar"></div>
                </div>
              </div>
              <p class="success">Product added to wishlist successfully! </p>
              <div class="divider divider--xs"> </div>
            </div>
          </div>
        </div>
      </div>
      
      </div>
      <!-- page1 -->
      <!-- jQuery JS -->
      <script  src="{{ asset('js/app.js') }}"  ></script>

      <script  src="{{ asset('vendor/jquery/jquery.js') }}"></script>
      <!-- slick Slider JS -->
    <script src="{{ asset('js/slick.min.js') }}"></script>

      <!-- Main JS -->
      <script src="{{ asset('js/main.js') }}"></script>
      <!-- Bootstrap 3-->
      <script src="{{ asset('vendor/bootstrap/bootstrap.min.js') }}"></script>
      <!-- Specific Page Vendor -->
      <script src="{{ asset('vendor/waves/waves.min.js') }}"></script>
      <script src="{{ asset('vendor/slick/slick.min.js') }}"></script>
      <script src="{{ asset('vendor/bootstrap-select/bootstrap-select.min.js') }}"></script>
      <script src="{{ asset('vendor/parallax/jquery.parallax-1.1.3.js') }}"></script>
      <script src="{{ asset('vendor/waypoints/jquery.waypoints.min.js') }}"></script>
      <script src="{{ asset('vendor/waypoints/sticky.min.js') }}"></script>
      <script src="{{ asset('vendor/doubletaptogo/doubletaptogo.js') }}"></script>
      <script src="{{ asset('vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
      <script src="{{ asset('vendor/countdown/jquery.plugin.min.js') }}"></script>
      <script src="{{ asset('vendor/countdown/jquery.countdown.min.js') }}"></script>
      <!-- jQuery form validation -->
      <script src="{{ asset('vendor/form/jquery.form.js') }}"></script>
      <script src="{{ asset('vendor/form/jquery.validate.min.js') }}"></script>
      <!-- Custom -->
      <script src="{{ asset('js/custom.js') }}"></script>
      <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
      <script type="text/javascript" src="{{ asset('vendor/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
      <script type="text/javascript" src="{{ asset('vendor/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>
      <script type="text/javascript">
              jQuery(document).ready(function() {

                var windowW = window.innerWidth || $j(window).width();
                var fullwidth;
                var fullscreen;

                if (windowW > 767) {
                  fullwidth = "off";
                  fullscreen = "on";
                } else {
                  fullwidth = "on";
                  fullscreen = "off";
                }


                jQuery('.tp-banner').show().revolution(
                {
                  dottedOverlay:"none",
                  delay:16000,
                  startwidth:1170,
                  startheight:700,
                  hideThumbs:200,
                  hideTimerBar:"on",

                  thumbWidth:100,
                  thumbHeight:50,
                  thumbAmount:5,

                  navigationType:"none",
                  navigationArrows:"",
                  navigationStyle:"",

                  touchenabled:"on",
                  onHoverStop:"on",

                  swipe_velocity: 0.7,
                  swipe_min_touches: 1,
                  swipe_max_touches: 1,
                  drag_block_vertical: false,

                  parallax:"mouse",
                  parallaxBgFreeze:"on",
                  parallaxLevels:[7,4,3,2,5,4,3,2,1,0],

                  keyboardNavigation:"off",

                  navigationHAlign:"center",
                  navigationVAlign:"bottom",
                  navigationHOffset:0,
                  navigationVOffset:20,

                  soloArrowLeftHalign:"left",
                  soloArrowLeftValign:"center",
                  soloArrowLeftHOffset:20,
                  soloArrowLeftVOffset:0,

                  soloArrowRightHalign:"right",
                  soloArrowRightValign:"center",
                  soloArrowRightHOffset:20,
                  soloArrowRightVOffset:0,

                  shadow:0,
                  fullWidth: fullwidth,
                  fullScreen: fullscreen,

                  spinner:"",

                  stopLoop:"off",
                  stopAfterLoops:-1,
                  stopAtSlide:-1,

                  shuffle:"off",

                  autoHeight:"off",
                  forceFullWidth:"off",



                  hideThumbsOnMobile:"off",
                  hideNavDelayOnMobile:1500,
                  hideBulletsOnMobile:"off",
                  hideArrowsOnMobile:"off",
                  hideThumbsUnderResolution:0,

                  hideSliderAtLimit:0,
                  hideCaptionAtLimit:0,
                  hideAllCaptionAtLilmit:0,
                  startWithSlide:0,
                  fullScreenOffsetContainer: ".header"
                });

              });	//ready

      </script>
        <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> -->
      <script type="text/javascript" src="{{ asset('js/marquee.js') }}"></script>


      <script>

        jQuery(function (){

          jQuery('.simple-marquee-container').SimpleMarquee();

        });

      </script>
 
</body>
</html>
