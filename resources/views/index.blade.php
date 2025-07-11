<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir="ltr" lang="en" class="ie8"><![endif]-->
<!--[if IE 9 ]><html dir="ltr" lang="en" class="ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir="ltr" lang="en">
<!--<![endif]-->

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Plant Nest</title>
    <base href="../assets/" />
    <meta name="description" content="My Store" />
    <script src="catalog/view/javascript/jquery/jquery-2.1.1.min.js" type="text/javascript"></script>
    <script src="catalog/view/javascript/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

    <link href='https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700' rel='stylesheet' type='text/css'>
    <link
        href='https://fonts.googleapis.com/css?family=Philosopher:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i'
        rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--<link href="catalog/view/theme//stylesheet/TemplateTrip/bootstrap.min.css" rel="stylesheet" media="screen" />-->
    <link href="catalog/view/javascript/jquery/owl-carousel/owl.carousel.css" rel="stylesheet" media="screen" />
    <link href="catalog/view/theme/OPC190_02/stylesheet/TemplateTrip/bootstrap.min.css" rel="stylesheet"
        media="screen" />
    <link href="catalog/view/theme/OPC190_02/stylesheet/stylesheet.css" rel="stylesheet">
    <link href="catalog/view/theme/OPC190_02/stylesheet/TemplateTrip/ttblogstyle.css" rel="stylesheet"
        type="text/css" />
    <link href="catalog/view/theme/OPC190_02/stylesheet/TemplateTrip/ttcountdown.css" rel="stylesheet"
        type="text/css" />
    <link href="catalog/view/theme/OPC190_02/stylesheet/TemplateTrip/category-feature.css" rel="stylesheet"
        type="text/css" />
    <link href="catalog/view/theme/OPC190_02/stylesheet/TemplateTrip/animate.css" rel="stylesheet" type="text/css" />
    <link href="catalog/view/theme/OPC190_02/stylesheet/TemplateTrip/newsletter.css" rel="stylesheet" type="text/css" />
    <link href="catalog/view/theme/OPC190_02/stylesheet/TemplateTrip/ttinstafeed.css" rel="stylesheet"
        type="text/css" />
    <link href="catalog/view/theme/OPC190_02/stylesheet/TemplateTrip/lightbox.css" rel="stylesheet" type="text/css" />

    <link href="catalog/view/javascript/jquery/swiper/css/swiper.min.css" type="text/css" rel="stylesheet"
        media="screen" />
    <link href="catalog/view/javascript/jquery/swiper/css/opencart.css" type="text/css" rel="stylesheet"
        media="screen" />

    <script src="catalog/view/javascript/common.js" type="text/javascript"></script>
    <!-- TemplateTrip custom Theme JS START -->
    <script src="catalog/view/javascript/TemplateTrip/addonScript.js" type="text/javascript"></script>
    <script src="catalog/view/javascript/TemplateTrip/ttcountdown.js" type="text/javascript"></script>
    <script src="catalog/view/javascript/TemplateTrip/inview.js" type="text/javascript"></script>
    <script src="catalog/view/javascript/TemplateTrip/parallex.js" type="text/javascript"></script>
    <script src="catalog/view/javascript/TemplateTrip/lightbox-2.6.min.js" type="text/javascript"></script>
    <script src="catalog/view/javascript/TemplateTrip/waypoints.min.js" type="text/javascript"></script>
    <script src="catalog/view/javascript/jquery/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
    <script src="catalog/view/javascript/TemplateTrip/tt_quickview.js" type="text/javascript"></script>
    <script src="catalog/view/javascript/TemplateTrip/bootstrap-notify.min.js" type="text/javascript"></script>
    <!-- TemplateTrip custom Theme JS END -->

    <link href="image/catalog/logo.png" rel="icon" />

    <script src="catalog/view/javascript/jquery/swiper/js/swiper.jquery.js" type="text/javascript"></script>
    <script src="catalog/view/javascript/TemplateTrip/jquery.bpopup.min.js" type="text/javascript"></script>
    <script src="catalog/view/javascript/TemplateTrip/jquery.cookie.js" type="text/javascript"></script>

</head>

<body class="common-home">
    <div id="page">
        <header>
            <div class="full-header">

                <div class="header-left">
                    <div id="logo">
                        <a href="{{URL::TO('')}}">
                            <img src="image/catalog/logoapp.png" style="width:180px; height:
									70px;" title="Your Store" alt="Your Store" class="img-responsive" /></a>
                    </div>
                </div>

                <div class="right-block">
                    <div class="search">
                        <div id="search" class="input-group">
                            <span class="ttsearch_button"><i class="fa fa-search"></i></span>
                            <div class="ttsearchtoggle">
                                <input type="text" name="search" value="" placeholder="Search"
                                    class="form-control input-lg" />
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-default btn-lg"><i class="fa
												fa-search"></i></button>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="user-info">
                        <div class="dropdown"><a href="#" title="my account" class="dropdown-toggle"
                                data-toggle="dropdown"><i class="fa fa-user"></i>
                                <span class="ttuserheading">my account</span><i class="fa
										fa-caret-down"></i></a>
                            <ul class="dropdown-menu dropdown-menu-right account-link-toggle">
                                <li><a href="{{URL::TO('/register')}}"><i class='fa fa-user'></i> Register</a></li>
                                <li><a href="{{URL::TO('/login')}}"><i class='fa fa-sign-in'></i> Login</a></li>



                            </ul>
                        </div>
                    </div>
                    <div class="cart">
                        <div id="cart" class="btn-group">
                            <button type="button" data-toggle="dropdown" data-loading-text="Loading..." class="btn btn-inverse btn-block btn-lg
									dropdown-toggle"><i class="fa fa-shopping-cart"></i>
                                <span class="cart-heading">Checkout</span>
                                <span id="cart-total">0</span></button>
                            <ul class="dropdown-menu pull-right header-cart-toggle">
                                <li>
                                    <p class="text-center">Your shopping cart is empty!</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="header-left-cms">
                    <aside id="header-left">
                        <div class="main-category-list left-main-menu">
                            <div class="cat-menu">
                                <div class="TT-panel-heading">
                                    <span>menu</span>
                                </div>
                                <div class="menu-category">
                                    <ul class="dropmenu">

                                        <li class="nav-item">

                                            <a href="" class="nav-link">Home </a>
                                        </li>


                                        <li class="TT-Sub-List dropdown">
                                            <a href="{{URL::TO('/')}}" class="TT-Category-List">
                                                Category </a>
                                            <span class="active_menu"></span>




                                            <div class="dropdown-menu">
                                                <div class="dropdown-inner">
                                                    <ul class="list-unstyled childs_1 mega-dropdown-menu columns-4"
                                                        style="width: 800px;">

                                                        <li class="dropdown first" style="width: 25%;">
                                                            <a href="{{URL::TO('/indoor')}}" class="single-dropdown">
                                                                Indoor</a>

                                                            <div class="dropdown-menu">
                                                                <div class="dropdown-inner">
                                                                    <ul class="list-unstyled childs_2">

                                                                        <li><a href="{{URL::TO('/indoor')}}">
                                                                                Burning Bush</a>
                                                                        </li>
                                                                        <li><a href="{{URL::TO('/indoor')}}">
                                                                                Echinacea</a>
                                                                        </li>
                                                                        <li><a href="{{URL::TO('/indoor')}}">
                                                                                Euonymus</a>
                                                                        </li>
                                                                        <li><a href="{{URL::TO('/indoor')}}">
                                                                                Gold Spot</a>
                                                                        </li>
                                                                        <li><a href="">
                                                                            </a>
                                                                        </li>

                                                                    </ul>
                                                                </div>
                                                            </div>

                                                        </li>

                                                        <li class="dropdown first" style="width: 25%;">
                                                            <a href="{{URL::TO('/outdoor')}}"
                                                                class="single-dropdown">Outdoor</a>
                                                            <div class="dropdown-menu">
                                                                <div class="dropdown-inner">
                                                                    <ul class="list-unstyled childs_2">

                                                                        <li><a href="{{URL::TO('/outdoor')}}">
                                                                                Persian Shield</a>
                                                                        </li>
                                                                        <li><a href="{{URL::TO('/outdoor')}}">
                                                                                Caladium</a>
                                                                        </li>
                                                                        <li><a href="{{URL::TO('/outdoor')}}">
                                                                                DesertRose</a>
                                                                        </li>
                                                                        <li><a href="{{URL::TO('/outdoor')}}">
                                                                                Ajuga</a>
                                                                        </li>
                                                                        <li><a href="">
                                                                            </a>
                                                                        </li>

                                                                    </ul>
                                                                </div>
                                                            </div>

                                                        </li>

                                                        <li class="dropdown first" style="width: 25%;">
                                                            <a href="{{URL::TO('/medicinal')}}"
                                                                class="single-dropdown">Medicinal
                                                            </a>

                                                            <div class="dropdown-menu">
                                                                <div class="dropdown-inner">
                                                                    <ul class="list-unstyled childs_2">

                                                                        <li><a href="{{URL::TO('/medicinal')}}">
                                                                                Tulsi</a>
                                                                        </li>
                                                                        <li><a href="{{URL::TO('/medicinal')}}">
                                                                                Aloe Vera</a>
                                                                        </li>
                                                                        <li><a href="{{URL::TO('/medicinal')}}">
                                                                                Calandula</a>
                                                                        </li>
                                                                        <li><a href="{{URL::TO('/medicinal')}}">
                                                                                Thyme</a>
                                                                        </li>
                                                                        <li><a href="">
                                                                            </a>
                                                                        </li>

                                                                    </ul>
                                                                </div>
                                                            </div>

                                                        </li>

                                                        <li class="dropdown first" style="width: 25%;">
                                                            <a href="{{URL::TO('/flowering')}}" class="single-dropdown">
                                                                Flowering </a>

                                                            <div class="dropdown-menu">
                                                                <div class="dropdown-inner">
                                                                    <ul class="list-unstyled childs_2">

                                                                        <li><a href="{{URL::TO('/flowering')}}">
                                                                                Allium</a>
                                                                        </li>
                                                                        <li><a href="{{URL::TO('/flowering')}}">
                                                                                Angelonia</a>
                                                                        </li>
                                                                        <li><a href="{{URL::TO('/flowering')}}">
                                                                                Astrantia</a>
                                                                        </li>
                                                                        <li><a href="{{URL::TO('/flowering')}}">
                                                                                Balloon</a>
                                                                        </li>
                                                                        <li><a href="">
                                                                            </a>
                                                                        </li>

                                                                    </ul>
                                                                </div>
                                                            </div>

                                                        </li>

                                                        <li class="dropdown first" style="width: 25%;">
                                                            <a href="{{URL::TO('/non_flowering')}}"
                                                                class="single-dropdown">
                                                                Non Flowering </a>

                                                            <div class="dropdown-menu">
                                                                <div class="dropdown-inner">
                                                                    <ul class="list-unstyled childs_2">

                                                                        <li><a href="{{URL::TO('/non_flowering')}}">
                                                                                Peperonia</a>
                                                                        </li>
                                                                        <li><a href="{{URL::TO('/non_flowering')}}">
                                                                                Spider</a>
                                                                        </li>
                                                                        <li><a href="{{URL::TO('/non_flowering')}}">
                                                                                Swiss</a>
                                                                        </li>
                                                                        <li><a href="{{URL::TO('/non_flowering')}}">
                                                                                Horse Tails</a>
                                                                        </li>
                                                                        <li><a href="">
                                                                            </a>
                                                                        </li>

                                                                    </ul>
                                                                </div>
                                                            </div>

                                                        </li>
                                                        <li class="dropdown first" style="width: 25%;">
                                                            <a href="{{URL::TO('/succulents')}}"
                                                                class="single-dropdown">
                                                                Succulents </a>

                                                            <div class="dropdown-menu">
                                                                <div class="dropdown-inner">
                                                                    <ul class="list-unstyled childs_2">

                                                                        <li><a href="{{URL::TO('/succulents')}}">
                                                                                Echeveria</a>
                                                                        </li>
                                                                        <li><a href="{{URL::TO('/succulents')}}">
                                                                                Euphorbia</a>
                                                                        </li>
                                                                        <li><a href="{{URL::TO('/succulents')}}">
                                                                                Euphorbianmilii</a>
                                                                        </li>
                                                                        <li><a href="{{URL::TO('/succulents')}}">
                                                                                Prelevon Nurnberg</a>
                                                                        </li>
                                                                        <li><a href="">
                                                                            </a>
                                                                        </li>

                                                                    </ul>
                                                                </div>
                                                            </div>

                                                        </li>

                                                </div>
                                            </div>


                                        </li>


                                        <li class="nav-item">

                                            <a href="" class="nav-link">About </a>
                                        </li>
                                        <li class="nav-item">

                                            <a href="{{URL::TO('accessoriespage')}}" class="nav-link">Accessories </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </aside>

                </div>



            </div>

        </header>
        <div class="header-content-title">
            <div style="background-image:
						url('../../OPC190_nursery/OPC02/image/catalog/demo/banners/parallax.jpg');
						background-position: 50% 78.1106%;"
                data-source-url="../../OPC190_nursery/OPC02/image/catalog/demo/banners/parallax.jpg" class="parallex">
            </div>
        </div>



        <script>
$(document).ready(function() {
/* ---------------- start Templatetrip link more menu ----------------------*/
            var max_link = 4;
            var moretext = "More";
            var items = $('.menu-category > ul.dropmenu > li');
            var surplus = items.slice(max_link, items.length);
            surplus.wrapAll('<li class="dropdown more-menu"><div class="dropdown-menu"><div class="dropdown-inner"><ul class="list-unstyled childs_1 single-dropdown-menu"></ul></div></div></li>');
            $('.more-menu').prepend('<a href="#" class="level-top">' + moretext + '</a>');


/* ---------------- End Templatetrip link more menu ----------------------*/
});
</script>
        <div class="content-top">
            <div class="slideshow-panel">
                <!-- <div class="ttloading-bg ttloader"></div> -->
                <div class="swiper-viewport">
                    <div id="slideshow0" class="slideshow-main swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide text-center">
                                <a href="#">
                                    <img src="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/image/cache/catalog/demo/banners/slider-01-1903x855.jpg"
                                        alt="slider-01" class="img-responsive" />
                                </a>
                            </div>
                            <div class="swiper-slide text-center">
                                <a href="#">
                                    <img src="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/image/cache/catalog/demo/banners/slider-02-1903x855.jpg"
                                        alt="slider-02" class="img-responsive" />
                                </a>
                            </div>
                        </div>
                        <div class="swiper-pagination slideshow0"></div>
                        <div class="swiper-pager">
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                    </div>
                </div>
            </div>
            <script type="text/javascript">
                var swiper = new Swiper('#slideshow0', {
                    mode: 'horizontal',
                    slidesPerView: 1,
                    pagination: '.slideshow0',
                    paginationClickable: true,
                    nextButton: '.swiper-button-next',
                    prevButton: '.swiper-button-prev',
                    spaceBetween: 0,
                    effect: 'fade',
                    autoplay: 2500,
                    autoplayDisableOnInteraction: true,
                    loop: true
                });
            </script>
            <div class="newletter-popup">
                <div id="boxes" class="newletter-container">
                    <div id="dialog" class="window">
                        <div id="popup2">
                            <span class="b-close"><span>X</span></span>
                        </div>
                        <div class="newslatter-img col-sm-6 col-xs-6">
                        </div>
                        <div class="box col-sm-6 col-xs-6">
                            <div class="newletter-title">
                                <h2>Newsletter</h2>
                            </div>
                            <div class="box-content newleter-content">
                                <label></label>
                                <div id="frm_subscribe">
                                    <form name="subscribe" id="subscribe_popup">
                                        <div class="newslatterpopup-content">
                                            <span class="required">*</span><span>Your email address</span>
                                            <div id="notification"></div>
                                            <input type="text" value="" name="subscribe_pemail" id="subscribe_pemail"
                                                placeholder="Your email address">
                                            <input type="hidden" value="" name="subscribe_pname" id="subscribe_pname" />

                                            <div class="popup-button">
                                                <a class="button btn btn-primary"
                                                    onclick="email_subscribepopup()"><span>Subscribe</span></a>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="subscribe-bottom">
                                        <input type="checkbox" id="newsletter_popup_dont_show_again">
                                        <label for="newsletter_popup_dont_show_again">Don't show this popup
                                            again</label>
                                    </div>
                                </div><!-- /#frm_subscribe -->
                            </div><!-- /.box-content -->
                        </div>
                    </div>

                    <script type="text/javascript">
                        function email_subscribepopup() {
                            $.ajax({
                                type: 'post',
                                url: 'index.php?route=extension/module/ttnewslettersubscribe/subscribepopup',
                                dataType: 'html',
                                data: $("#subscribe_popup").serialize(),
                                success: function (html) {
                                    //$.cookie('shownewsletter', '1');
                                    try {

                                        eval(html);

                                    } catch (e) {
                                    }
                                }
                            });


                        }
                        function email_unsubscribepopup() {
                            $.ajax({
                                type: 'post',
                                url: 'index.php?route=extension/module/ttnewslettersubscribe/unsubscribe',
                                dataType: 'html',
                                data: $("#subscribe_popup").serialize(),
                                success: function (html) {
                                    try {

                                        eval(html);

                                    } catch (e) {
                                    }
                                }
                            });
                            $('html, body').delay(1500).animate({ scrollTop: 0 }, 'slow');

                        }
                    </script>
                    <script type="text/javascript">
                        $(document).ready(function () {

                            if ($.cookie('shownewsletter') == 1) $('.newletter-popup').hide();
                            $('#subscribe_pemail').keypress(function (e) {
                                if (e.which == 13) {
                                    e.preventDefault();
                                    email_subscribepopup();
                                }
                                var name = $(this).val();
                                $('#subscribe_pname').val(name);
                            });
                            $('#subscribe_pemail').change(function () {
                                var name = $(this).val();
                                $('#subscribe_pname').val(name);
                            });


                            //transition effect
                            if ($.cookie("shownewsletter") != 1) {
                                $('.newletter-popup').bPopup();

                            }


                            $('#newsletter_popup_dont_show_again').on('change', function () {
                                if ($.cookie("shownewsletter") != 1) {
                                    $.cookie("shownewsletter", '1')
                                } else {
                                    $.cookie("shownewsletter", '0')
                                }
                            });


                        });
                    </script>
                </div>
            </div><!-- /.box -->


        </div>
        <div class="tthome">

            <div id="content" class="col-sm-12 left-column">
                <div class="tt-category-featured">
                    <div class="container">

                        <div class="box-heading">
                            <h3>Category Feature</h3>
                        </div>
                        <div class="ttfcat-items">
                            <div class="row">
                                <div class="category-feature tt-carousel">
                                    <div class="item">
                                        <div class="content">
                                            <div class="image">
                                                <a href="/">
                                                    <img src="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/image/cache/catalog/demo/banners/categorybanner-01-160x170.png"
                                                        alt=" Assorted Shrubs" title=" Assorted Shrubs"
                                                        class="img-responsive" />
                                                </a>
                                            </div>
                                            <div class="caption">
                                                <div class="cat-title">
                                                    <h4><a href="/">
                                                            Assorted Shrubs</a></h4>
                                                </div>
                                                <div class="cat-sub">
                                                    <ul>
                                                        <li><a href="/" class="list-group-item">Mardi Gras</a></li>
                                                        <li><a href="/" class="list-group-item">Golden King</a></li>
                                                        <li><a href="/" class="list-group-item">Rose Creek</a></li>
                                                        <li><a href="/" class="list-group-item">Canyon Creek</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Caption END -->
                                    </div>
                                    <div class="item">
                                        <div class="content">
                                            <div class="image">
                                                <a href="/">
                                                    <img src="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/image/cache/catalog/demo/banners/categorybanner-04-160x170.png"
                                                        alt="Mardi Gras" title="Mardi Gras" class="img-responsive" />
                                                </a>
                                            </div>
                                            <div class="caption">
                                                <div class="cat-title">
                                                    <h4><a href="/">Mardi
                                                            Gras</a></h4>
                                                </div>
                                                <div class="cat-sub">
                                                    <ul>
                                                        <li><a href="/" class="list-group-item">Burning Bush</a></li>
                                                        <li><a href="/" class="list-group-item">Echinacea</a></li>
                                                        <li><a href="/" class="list-group-item">Euonymus</a></li>
                                                        <li><a href="/" class="list-group-item">Gold Spot</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Caption END -->
                                    </div>
                                    <div class="item">
                                        <div class="content">
                                            <div class="image">
                                                <a href="/">
                                                    <img src="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/image/cache/catalog/demo/banners/categorybanner-03-160x170.png"
                                                        alt="Golden King" title="Golden King" class="img-responsive" />
                                                </a>
                                            </div>
                                            <div class="caption">
                                                <div class="cat-title">
                                                    <h4><a href="/">Golden
                                                            King</a></h4>
                                                </div>
                                                <div class="cat-sub">
                                                    <ul>
                                                        <li><a href="/" class="list-group-item">Dianthus</a></li>
                                                        <li><a href="/" class="list-group-item">Fern</a></li>
                                                        <li><a href="/" class="list-group-item">Firewitch</a></li>
                                                        <li><a href="/" class="list-group-item">Frosty Fire</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Caption END -->
                                    </div>
                                    <div class="item">
                                        <div class="content">
                                            <div class="image">
                                                <a href="/">
                                                    <img src="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/image/cache/catalog/demo/banners/categorybanner-02-160x170.png"
                                                        alt="Rose Creek" title="Rose Creek" class="img-responsive" />
                                                </a>
                                            </div>
                                            <div class="caption">
                                                <div class="cat-title">
                                                    <h4><a href="/">Rose
                                                            Creek</a></h4>
                                                </div>
                                                <div class="cat-sub">
                                                    <ul>
                                                        <li><a href="/" class="list-group-item">Autumn</a></li>
                                                        <li><a href="/" class="list-group-item">Grandifolius</a></li>
                                                        <li><a href="/" class="list-group-item">Green Boxleaf</a></li>
                                                        <li><a href="/" class="list-group-item">Raulston's Gold</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Caption END -->
                                    </div>
                                    <div class="item">
                                        <div class="content">
                                            <div class="image">
                                                <a href="/">
                                                    <img src="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/image/cache/catalog/demo/banners/categorybanner-01-160x170.png"
                                                        alt="Canyon Creek" title="Canyon Creek"
                                                        class="img-responsive" />
                                                </a>
                                            </div>
                                            <div class="caption">
                                                <div class="cat-title">
                                                    <h4><a href="/">Canyon
                                                            Creek</a></h4>
                                                </div>
                                                <div class="cat-sub">
                                                    <ul>
                                                        <li><a href="/" class="list-group-item">Abelia</a></li>
                                                        <li><a href="/" class="list-group-item">Ajuga</a></li>
                                                        <li><a href="/" class="list-group-item">Aucuba</a></li>
                                                        <li><a href="/" class="list-group-item">Coreopsis</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Caption END -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="html-content">
                    <div class="box-content">
                        <div id="ttcmsservices">
                            <div class="services">
                                <div class="container">
                                    <div class="row">
                                        <div class="tt-title">welcome to the nutrients plants</div>
                                        <div class="service-subtitle">Quis turpis et volutpat convallis,
                                            Plants Product and All</div>
                                        <div class="services-content">
                                            <div class="col-sm-4 col-xs-6 left-service service left-to-right
														hb-animate-element">
                                                <div class="inner_content">
                                                    <div class="service-img col-sm-3">
                                                        <img alt="Free Shipping"
                                                            src="image/catalog/demo/banners/service-icon1.png">
                                                    </div>
                                                    <div class="service-content col-sm-9">
                                                        <div class="services-title">Free Shipping</div>
                                                        <div class="service-desc">Lorem ipsum dolor sit amet, conc Lorem
                                                            sit amet, concLorem ipsum dolor</div>
                                                    </div>
                                                </div>

                                                <div class="inner_content">
                                                    <div class="service-img col-sm-3">
                                                        <img alt="big saving"
                                                            src="image/catalog/demo/banners/service-icon2.png">
                                                    </div>
                                                    <div class="service-content col-sm-9">
                                                        <div class="services-title">big saving</div>
                                                        <div class="service-desc">Lorem ipsum dolor sit amet, conc Lorem
                                                            sit amet, concLorem ipsum dolor</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4 col-xs-6 right-service service right-to-left
														hb-animate-element">
                                                <div class="inner_content">
                                                    <div class="service-img col-sm-3">
                                                        <img alt="Easy Retrurns"
                                                            src="image/catalog/demo/banners/service-icon3.png">
                                                    </div>
                                                    <div class="service-content col-sm-9">
                                                        <div class="services-title">Easy Retrurns</div>
                                                        <div class="service-desc">Lorem ipsum dolor sit amet, conc Lorem
                                                            sit amet, concLorem ipsum dolor</div>
                                                    </div>
                                                </div>
                                                <div class="inner_content">
                                                    <div class="service-img col-sm-3">
                                                        <img alt="24x7 support"
                                                            src="image/catalog/demo/banners/service-icon4.png">
                                                    </div>
                                                    <div class="service-content col-sm-9">
                                                        <div class="services-title">24x7 support</div>
                                                        <div class="service-desc">Lorem ipsum dolor sit amet, conc Lorem
                                                            sit amet, concLorem ipsum dolor</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4 col-xs-4 middle-img bottom-to-top
														hb-animate-element">
                                                <div class="service-inner-img">
                                                    <a href="#">
                                                        <img alt="about-img.png"
                                                            src="image/catalog/demo/banners/about-img.png">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>












                <div class="html-content">
                    <div class="box-content">
                        <div id="ttcms-content">
                            <div class="ttcmscontent container hover_effect">
                                <div class="row">
                                    <div class="col-sm-12 ttcontents ttcmsleft left-to-right
												hb-animate-element">
                                        <div class="row">
                                            <div class="ttcmscontent ttcontentbanner col-xs-7">
                                                <div class="image1 ttimg">
                                                    <div class="ttcontentbanner-img"><a href="#"> <img alt=""
                                                                src="image/catalog/demo/banners/cms-img-01.png"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ttcmscontent ttcontentdesc col-xs-5">
                                                <div class="ttcmscontentblock">
                                                    <div class="ttcmscontent-content">
                                                        <div class="ttcmscontent-title">nutrients plant collection</div>
                                                        <div class="ttcmscontent-subtitle">Get 50% off On This Month
                                                        </div>
                                                        <div class="ttcmscontent-btn">
                                                            <a href="#">read more</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 ttcontents ttcmsright right-to-left
												hb-animate-element">
                                        <div class="row">
                                            <div class="ttcmscontent ttcontentbanner col-xs-7">
                                                <div class="video ttimg">
                                                    <div class="ttcontentbanner-img">
                                                        <span id="popup__toggle">
                                                            <img id=""
                                                                src="image/catalog/demo/banners/video-banner.jpg">
                                                            <div class="image-hover"></div>
                                                            <span class="play-icone"><i class="fa fa-play"></i></span>
                                                        </span>

                                                        <div class="popup__overlay">
                                                            <div class="popup" id="popupVid">
                                                                <a class="popup__close">X</a>
                                                                <iframe allowfullscreen=""
                                                                    src="https://www.youtube.com/embed/ARwB7xb--sQ?vq=720"
                                                                    frameborder="0" height="600" width="1060"></iframe>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ttcmscontent ttcontentdesc2 col-xs-5">
                                                <div class="ttcmscontentblock">
                                                    <div class="ttcmscontent-content">
                                                        <div class="ttcmscontent-title">New In Trend</div>
                                                        <div class="ttcmscontent-subtitle">nventore veritatis et quasi
                                                            architecto beatae dicta sun explicabo. Nemo enim ipsam volup
                                                            tatemarchitecto volup a sit aspernatur.explicabo.</div>
                                                        <div class="ttcmscontent-btn">
                                                            <a href="#">watch now</a>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="html-content">
                    <div class="box-content">
                        <div id="ttcmstestimonial" class=" bottom-to-top
                                    hb-animate-element">
                            <div style="background-image:
                                        url('image/catalog/demo/banners/testimonals-bg.jpg');
                                        background-position: 50% 78.1106%;"
                                data-source-url="image/catalog/demo/banners/testimonals-bg.jpg" class="parallex">
                                <div class="tttestimonial-content
                                            container">
                                    <div class="tttestimonial-inner">
                                        <div class="tt-title">client say</div>
                                        <ul id="tttestimonial-carousel" class="tt-carousel">
                                            <li>

                                                <div class="testimonial-image"><img alt="" src="teampic/zain.jpeg">
                                                </div>
                                                <div class="testimonial-content">
                                                    <div class="testimonial-user-title">
                                                        <h4>Zain</h4>
                                                        <div class="user-designation">Marketing
                                                            Manager</div>
                                                    </div>
                                                    <div class="testimonial-desc">
                                                        <p>Meet the
                                                            ingenious
                                                            mind behind
                                                            Plant Nest's
                                                            thriving
                                                            digital
                                                            presence,
                                                            Mr. Muhammad
                                                            Zain, our
                                                            accomplished
                                                            Marketing
                                                            Manager.
                                                            With a
                                                            creative
                                                            flair and a
                                                            deep-rooted
                                                            understanding
                                                            of both
                                                            plants and
                                                            people .</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>

                                                <div class="testimonial-image"><img alt="" src="teampic/qasim.jpg">
                                                </div>
                                                <div class="testimonial-content">
                                                    <div class="testimonial-user-title">
                                                        <h4>Qasim Lodhi</h4>
                                                        <div class="user-designation">Designer</div>
                                                    </div>
                                                    <div class="testimonial-desc">
                                                        <p>Meet the
                                                            creative
                                                            visionary
                                                            shaping the
                                                            visual
                                                            tapestry of
                                                            Plant Nest,
                                                            Mr. Qasim,
                                                            our talented
                                                            Designer.
                                                            With an
                                                            artistic eye
                                                            and a deep
                                                            appreciation
                                                            for the
                                                            beauty of
                                                            botany, Mr.
                                                            Qasim weaves
                                                            his design
                                                            magic into
                                                            every pixel
                                                            of our
                                                            website.

                                                            .</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>

                                                <div class="testimonial-image"><img alt="" src="teampic/anas.jpg"></div>
                                                <div class="testimonial-content">
                                                    <div class="testimonial-user-title">
                                                        <h4>Anas Furqan</h4>
                                                        <div class="user-designation">
                                                            Devoloper</div>
                                                    </div>
                                                    <div class="testimonial-desc">
                                                        <p>Introducing
                                                            the
                                                            mastermind
                                                            behind the
                                                            seamless
                                                            functionality
                                                            of Plant
                                                            Nest,
                                                            Mr. Anas,
                                                            our skilled
                                                            Developer.
                                                            With a knack
                                                            for
                                                            translating
                                                            ideas into
                                                            digital
                                                            landscapes,
                                                            Mr. Anas
                                                            orchestrates
                                                            the virtual
                                                            growth of
                                                            our website
                                                            .</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>

                                                <div class="testimonial-image"><img alt="" src="teampic/awaiz.jpg">
                                                </div>
                                                <div class="testimonial-content">
                                                    <div class="testimonial-user-title">
                                                        <h4>Awaiz Jawed</h4>
                                                        <div class="user-designation">Designer</div>
                                                    </div>
                                                    <div class="testimonial-desc">
                                                        <p>Meet the
                                                            artistic
                                                            force
                                                            shaping the
                                                            visual
                                                            allure of
                                                            Plant Nest,
                                                            Mr. Awaiz,
                                                            our talented
                                                            Designer.
                                                            With a blend
                                                            of
                                                            imagination
                                                            and
                                                            expertise,
                                                            Mr. Awaiz
                                                            crafts a
                                                            harmonious
                                                            blend of
                                                            nature and
                                                            design in
                                                            every pixel
                                                            of our
                                                            website.
                                                            .</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>

                                                <div class="testimonial-image"><img alt="" src="teampic/abuzar.jpeg">
                                                </div>
                                                <div class="testimonial-content">
                                                    <div class="testimonial-user-title">
                                                        <h4>Abuzar</h4>
                                                        <div class="user-designation">CEO
                                                        </div>
                                                    </div>
                                                    <div class="testimonial-desc">
                                                        <p>Meet the
                                                            driving
                                                            force behind
                                                            Plant Nest's
                                                            flourishing
                                                            garden,
                                                            Mr. Abuzar
                                                            Bin Amjad,
                                                            our esteemed
                                                            CEO. With a
                                                            profound
                                                            passion for
                                                            all things
                                                            botanical
                                                            and an
                                                            unwavering
                                                            commitment
                                                            to fostering
                                                            a verdant
                                                            community.</p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="blog_latest_new_home" class="hb-animate-element
                            bottom-to-top">
                        <div class="container">
                            <div class="blog-container">
                                <div class="box-heading title_block">
                                    <h3><a class="ttblock-heading" href="/">Interesting Knowledge</a></h3>
                                    <div class="ttsubtitle">our plant house</div>
                                </div>
                                <div class="block_content">
                                    <div class="row">
                                        <ul id="ttsmartblog-carousel" class="tt-carousel
                                                ttblog-content
                                                owl-carousel owl-theme">

                                            <li class='blogli'>
                                                <ul>

                                                    <li>
                                                        <div class="blog-content">
                                                            <div class="ttblog_image_holder
                                                                    blog_image_holder
                                                                    col-xs-6
                                                                    col-sm-6">
                                                                <a href="/">
                                                                    <img class="image_thumb" src="extra/ik1.jpg" alt="Latest
                                                                            News" title="Latest
                                                                            News" />
                                                                    <div class="blog-hover"></div>
                                                                </a>
                                                                <span class="bloglinks">
                                                                    <a class="icon
                                                                            zoom" data-lightbox="example-set"
                                                                        href="extra/ik1.jpg" title="Click
                                                                            to
                                                                            view
                                                                            Full
                                                                            Image">
                                                                        <i class="fa
                                                                                fa-search"></i>
                                                                    </a>
                                                                </span>
                                                            </div>

                                                            <div class="blog-caption
                                                                    blog-sub-content
                                                                    col-xs-6
                                                                    col-sm-6">
                                                                <div class="blog-inner">
                                                                    <h3><a href="/"><b>What
                                                                                was
                                                                                the
                                                                                first
                                                                                plant
                                                                                on
                                                                                earth?</b></a></h3>
                                                                    <p class="blog-description">
                                                                        The
                                                                        first
                                                                        terrestrial
                                                                        plants
                                                                        were
                                                                        probably
                                                                        in
                                                                        the
                                                                        form
                                                                        of
                                                                        <span style="background-color:
                                                                                yellow;">
                                                                            tiny
                                                                            plants
                                                                            resembling
                                                                            liverworts.
                                                                        </span>
                                                                    </p>
                                                                    <a href="/" class="read-more">read
                                                                        more</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>


                                                    <li>
                                                        <div class="blog-content">
                                                            <div class="ttblog_image_holder
                                                                    blog_image_holder
                                                                    col-xs-6
                                                                    col-sm-6">
                                                                <a href="/">
                                                                    <img class="image_thumb" src="extra/ik2.jpg" alt="Latest
                                                                            News" title="Latest
                                                                            News" />
                                                                    <div class="blog-hover"></div>
                                                                </a>
                                                                <span class="bloglinks">
                                                                    <a class="icon
                                                                            zoom" data-lightbox="example-set"
                                                                        href="image/cache/catalog/demo/banners/4-home-default-370x240.jpg"
                                                                        title="Click
                                                                            to
                                                                            view
                                                                            Full
                                                                            Image">
                                                                        <i class="fa
                                                                                fa-search"></i>
                                                                    </a>
                                                                </span>
                                                            </div>

                                                            <div class="blog-caption
                                                                    blog-sub-content
                                                                    col-xs-6
                                                                    col-sm-6">
                                                                <div class="blog-inner">
                                                                    <h3> <a href="/"><br>
                                                                            Which
                                                                            is
                                                                            the
                                                                            biggest
                                                                            flower?<br></a></h3>
                                                                    <p class="blog-description">
                                                                        The
                                                                        flower
                                                                        with
                                                                        the
                                                                        world's
                                                                        largest
                                                                        bloom
                                                                        is
                                                                        the
                                                                        Rafflesia
                                                                        arnoldii.
                                                                        <span style="background-color:
                                                                                yellow;">This
                                                                            rare
                                                                            flower
                                                                            is
                                                                            found
                                                                            in
                                                                            the
                                                                            rainforests
                                                                            of
                                                                            Indonesia.</span>
                                                                    </p>
                                                                    <a href="/" class="read-more">read
                                                                        more</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                            </li>
                                        </ul>

                                        <li class='blogli'>
                                            <ul>

                                                <li>
                                                    <div class="blog-content">
                                                        <div class="ttblog_image_holder
                                                                    blog_image_holder
                                                                    col-xs-6
                                                                    col-sm-6">
                                                            <a href="/">
                                                                <img class="image_thumb"
                                                                    src="image/cache/catalog/demo/banners/2-home-default-370x240.jpg"
                                                                    alt="Latest
                                                                            News" title="Latest
                                                                            News" />
                                                                <div class="blog-hover"></div>
                                                            </a>
                                                            <span class="bloglinks">
                                                                <a class="icon
                                                                            zoom" data-lightbox="example-set"
                                                                    href="image/cache/catalog/demo/banners/2-home-default-870x564.jpg"
                                                                    title="Click
                                                                            to
                                                                            view
                                                                            Full
                                                                            Image">
                                                                    <i class="fa
                                                                                fa-search"></i>
                                                                </a>
                                                            </span>
                                                        </div>

                                                        <div class="blog-caption
                                                                    blog-sub-content
                                                                    col-xs-6
                                                                    col-sm-6">
                                                            <div class="blog-inner">
                                                                <span class="blog-date">
                                                                    <i class="fa
                                                                                fa-calendar"></i>
                                                                    <span class="date">27</span>
                                                                    <span class="month">Oct-2020</span>
                                                                </span>
                                                                <div class="comment">
                                                                    <a href="/">
                                                                        <i class="fa
                                                                                    fa-comments-o"></i>
                                                                        0
                                                                        Comments</a>
                                                                </div>
                                                                <h5 class="post_title"><a href="/">tempora
                                                                        incidunt
                                                                        utlabore</a></h5>
                                                                <p class="blog-description">
                                                                    Lorem
                                                                    Ipsum
                                                                    is
                                                                    simply
                                                                    dummy
                                                                    text
                                                                    of
                                                                    the
                                                                    printing
                                                                    and
                                                                    typese...</p>
                                                                <a href="/" class="read-more">read
                                                                    more</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>


                                                <li>
                                                    <div class="blog-content">
                                                        <div class="ttblog_image_holder
                                                                    blog_image_holder
                                                                    col-xs-6
                                                                    col-sm-6">
                                                            <a href="/">
                                                                <img class="image_thumb"
                                                                    src="image/cache/catalog/demo/banners/1-home-default-370x240.jpg"
                                                                    alt="Latest
                                                                            News" title="Latest
                                                                            News" />
                                                                <div class="blog-hover"></div>
                                                            </a>
                                                            <span class="bloglinks">
                                                                <a class="icon
                                                                            zoom" data-lightbox="example-set"
                                                                    href="image/cache/catalog/demo/banners/1-home-default-870x564.jpg"
                                                                    title="Click
                                                                            to
                                                                            view
                                                                            Full
                                                                            Image">
                                                                    <i class="fa
                                                                                fa-search"></i>
                                                                </a>
                                                            </span>
                                                        </div>

                                                        <div class="blog-caption
                                                                    blog-sub-content
                                                                    col-xs-6
                                                                    col-sm-6">
                                                            <div class="blog-inner">
                                                                <span class="blog-date">
                                                                    <i class="fa
                                                                                fa-calendar"></i>
                                                                    <span class="date">27</span>
                                                                    <span class="month">Oct-2020</span>
                                                                </span>
                                                                <div class="comment">
                                                                    <a href="/">
                                                                        <i class="fa
                                                                                    fa-comments-o"></i>
                                                                        0
                                                                        Comments</a>
                                                                </div>
                                                                <h5 class="post_title"><a href="/">Lorem
                                                                        ipsum
                                                                        dolor
                                                                        site
                                                                        amet</a></h5>
                                                                <p class="blog-description">
                                                                    Lorem
                                                                    Ipsum
                                                                    is
                                                                    simply
                                                                    dummy
                                                                    text
                                                                    of
                                                                    the
                                                                    printing
                                                                    and...</p>
                                                                <a href="/" class="read-more">read
                                                                    more</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                        </li>
                                        </ul>



                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="brand-carousel hb-animate-element bottom-to-top">
                    <div class="container">
                        <div class="box-heading">
                            <h3>Brands</h3>
                        </div>
                        <div class="swiper-viewport">
                            <div id="carousel0" class="swiper-container brand-items">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide text-center">
                                        <a href="#"><img
                                                src="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/image/cache/catalog/demo/manufacturer/brand-logo-01-140x100.png"
                                                alt="NFL" class="img-responsive" /></a>
                                    </div>
                                    <div class="swiper-slide text-center">
                                        <a href="#"><img
                                                src="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/image/cache/catalog/demo/manufacturer/brand-logo-02-140x100.png"
                                                alt="RedBull" class="img-responsive" /></a>
                                    </div>
                                    <div class="swiper-slide text-center">
                                        <a href="#"><img
                                                src="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/image/cache/catalog/demo/manufacturer/brand-logo-03-140x100.png"
                                                alt="Sony" class="img-responsive" /></a>
                                    </div>
                                    <div class="swiper-slide text-center">
                                        <a href="#"><img
                                                src="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/image/cache/catalog/demo/manufacturer/brand-logo-04-140x100.png"
                                                alt="Coca Cola" class="img-responsive" /></a>
                                    </div>
                                    <div class="swiper-slide text-center">
                                        <a href="#"><img
                                                src="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/image/cache/catalog/demo/manufacturer/brand-logo-05-140x100.png"
                                                alt="Burger King" class="img-responsive" /></a>
                                    </div>
                                    <div class="swiper-slide text-center">
                                        <a href="#"><img
                                                src="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/image/cache/catalog/demo/manufacturer/brand-logo-06-140x100.png"
                                                alt="Canon" class="img-responsive" /></a>
                                    </div>
                                    <div class="swiper-slide text-center">
                                        <a href="#"><img
                                                src="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/image/cache/catalog/demo/manufacturer/brand-logo-07-140x100.png"
                                                alt="Harley Davidson" class="img-responsive" /></a>
                                    </div>
                                    <div class="swiper-slide text-center">
                                        <a href="#"><img
                                                src="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/image/cache/catalog/demo/manufacturer/brand-logo-08-140x100.png"
                                                alt="Dell" class="img-responsive" /></a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination carousel0"></div>
                            <div class="swiper-pager">
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <script type="text/javascript">
                    $('#carousel0').swiper({
                        mode: 'horizontal',
                        autoplay: 3000,
                        //pagination: '.carousel0',
                        pagination: false,
                        paginationClickable: false,
                        prevButton: '.swiper-button-prev',
                        nextButton: '.swiper-button-next',

                        // Default parameters
                        slidesPerView: 5,

                        // Responsive breakpoints
                        breakpoints: {
                            // when window width is <= 1200px
                            1199: {
                                slidesPerView: 4
                            },
                            // when window width is <= 991px
                            991: {
                                slidesPerView: 4
                            },
                            // when window width is <= 767px
                            767: {
                                slidesPerView: 3
                            },
                            // when window width is <= 480px
                            480: {
                                slidesPerView: 2
                            }
                        }

                    });
                </script>
                <script>
                    var Tawk_API = {}, $_Tawk_LoadStart = new Date();
                    (function () {
                        var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
                        s1.async = true;
                        s1.src = 'https://embed.tawk.to/5fa664720a68960861bc9308/default';
                        s1.charset = 'UTF-8';
                        s1.setAttribute('crossorigin', '*');
                        s0.parentNode.insertBefore(s1, s0);
                    })();
                </script>
                <!--End of Tawk.to Script-->


            </div>

        </div>
        <footer>
            <script src="https://apps.elfsight.com/p/platform.js" defer></script>
            <div class="elfsight-app-9e158db6-9112-41b3-8a93-4cd7cdeb957a"></div>
            <div class="footer-container">
                <div class="container hb-animate-element bottom-to-top">
                    <div class="row">

                        <div class="footer-column footer-right-cms col-sm-4">
                            <aside id="footer-right">
                                <div class="newletter-subscribe hb-animate-element bottom-to-top">
                                    <div id="newletter-boxes" class="newletter-container">
                                        <div id="dialog-normal" class="window">
                                            <div class="box">
                                                <div class="newletter-title">
                                                    <h2 class="tt-title">Sign Up For
                                                        Newsletter</h2>
                                                    <div class="newsletter-desc">Wants to get latest updates! sign up
                                                        for free.</div>
                                                </div>
                                                <div class="box-content newleter-content">
                                                    <label></label>
                                                    <div id="form_subscribe">
                                                        <form name="subscribe" id="subscribe">
                                                            <input type="text" placeholder="Your email address" value=""
                                                                name="subscribe_email" id="subscribe_email">
                                                            <input type="hidden" value="" name="subscribe_name"
                                                                id="subscribe_name" />
                                                            <a class="button btn btn-primary"
                                                                onclick="email_subscribe()"><span>Subscribe</span><i
                                                                    class="fa fa-paper-plane"></i></a>

                                                        </form>
                                                    </div><!-- /#frm_subscribe -->
                                                    <div id="notification-normal"></div>
                                                </div><!-- /.box-content -->
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.box -->
                                <script type="text/javascript">
                                    function email_subscribe() {
                                        $.ajax({
                                            type: 'post',
                                            url: 'index.php?route=extension/module/ttnewslettersubscribe/subscribe',
                                            dataType: 'html',
                                            data: $("#subscribe").serialize(),
                                            success: function (html) {
                                                try {

                                                    eval(html);

                                                } catch (e) {
                                                }

                                            }
                                        });


                                    }
                                    function email_unsubscribe() {
                                        $.ajax({
                                            type: 'post',
                                            url: 'index.php?route=extension/module/ttnewslettersubscribe/unsubscribe',
                                            dataType: 'html',
                                            data: $("#subscribe").serialize(),
                                            success: function (html) {
                                                try {

                                                    eval(html);

                                                } catch (e) {
                                                }
                                            }
                                        });
                                        $('html, body').delay(1500).animate({ scrollTop: 0 }, 'slow');

                                    }
                                </script>
                                <script type="text/javascript">
                                    $(document).ready(function () {
                                        $('#subscribe_email').keypress(function (e) {
                                            if (e.which == 13) {
                                                e.preventDefault();
                                                email_subscribe();
                                            }
                                            var name = $(this).val();
                                            $('#subscribe_name').val(name);
                                        });
                                        $('#subscribe_email').change(function () {
                                            var name = $(this).val();
                                            $('#subscribe_name').val(name);
                                        });

                                    });
                                </script>
                                <div class="html-content">
                                    <div class="box-content">
                                        <div id="ttcmspaymentlogo">
                                            <h5 class="toggle">Payment Methods</h5>
                                            <div id="ttpayment">
                                                <div class="payment_logo_block">
                                                    <div class="payment-title">Accepted Payment Methods</div>
                                                    <ul class="payment-list list-unstyled">
                                                        <li class="google"><a href="#"> <img
                                                                    src="image/catalog/demo/banners/google.png"
                                                                    alt="google"></a></li>
                                                        <li class="maestro"><a href="#"> <img
                                                                    src="image/catalog/demo/banners/maestro.png"
                                                                    alt="maestro"></a></li>
                                                        <li class="mastercard"><a href="#"> <img
                                                                    src="image/catalog/demo/banners/mastercard.png"
                                                                    alt="mastercard"></a></li>
                                                        <li class="paypal"><a href="#"> <img
                                                                    src="image/catalog/demo/banners/paypal.png"
                                                                    alt="paypal"></a></li>
                                                        <li class="visa"><a href="#"> <img
                                                                    src="image/catalog/demo/banners/visa.png"
                                                                    alt="visa"></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </aside>

                        </div>

                        <div class="footer-column footer-left-cms
                                    col-sm-4">
                            <aside id="footer-left">
                                <div class="html-content">
                                    <div class="box-content">
                                        <div class="contact-us">
                                            <h5 class="">Store
                                                Information</h5>
                                            <ul style="display: block;" class="list-unstyled">
                                                <li class="contact-detail">
                                                    <div class="data
                                                                address">
                                                        <i class="fa
                                                                    fa-map-marker"></i>
                                                        <div class="contact-address">Plants
                                                            Nursery<br>Pakistan</div>
                                                    </div>
                                                </li>
                                                <li class="contact">
                                                    <div class="data
                                                                contact">
                                                        <i class="fa
                                                                    fa-phone"></i>
                                                        <span class="phone">
                                                            <a href="#">0312-16554574</a>
                                                        </span>
                                                    </div>
                                                </li>
                                                <li class="fax">
                                                    <div class="data
                                                                fax">
                                                        <i class="fa
                                                                    fa-fax"></i>
                                                        <span class="fax-address">
                                                            <a href="#">0340-8591425</a>
                                                        </span>
                                                    </div>
                                                </li>
                                                <li class="email">
                                                    <div class="data
                                                                email">
                                                        <i class="fa
                                                                    fa-envelope"></i>
                                                        <span class="email-address">
                                                            <a
                                                                href="mailto:bitrebels@aptechgdn.net">bitrebels@aptechgdn.net</a>
                                                        </span>
                                                    </div>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </aside>

                        </div>


                        <div class="col-sm-4 footer-column
                                    footer-extras">
                            <h5>Extras</h5>
                            <ul class="list-unstyled">
                                <li><a href="/outdoor">Ajuga</a></li>
                                <li><a href="/Medicinal">Tulsi</a></li>
                                <li><a href="/Succenlents">Echeveria</a></li>
                                <li><a href="/flowering">Angelonia</a></li>
                                <li><a href="/non-flowering">Spider</a></li>
                                <li><a href="/">Give A Feedback</a></li>
                            </ul>
                        </div>



                    </div>

                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="footer-bottom-link col-sm-6 hb-animate-element
								left-to-right">
                        <p>Powered By Bit Rebels "Plant Nest" &copy; 2023</p>
                    </div>
                    <div class="footer-bottom-cms col-sm-6 hb-animate-element right-to-left">
                        <aside id="footer-bottom">
                            <div class="html-content">
                                <div class="box-content">
                                    <div class="follow-us">
                                        <h5>Follow us</h5>
                                        <ul class="list-unstyled">
                                            <li class="facebook">
                                                <a target="_blank" class="_blank" href="#" title="Facebook">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li class="twitter">
                                                <a target="_blank" class="_blank" href="#" title="Twitter">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li class="rss">
                                                <a target="_blank" class="_blank" href="#" title="RSS">
                                                    <i class="fa fa-rss"></i>
                                                </a>
                                            </li>
                                            <li class="google-plus">
                                                <a target="_blank" class="_blank" href="#" rel="publisher"
                                                    title="Google Plus">
                                                    <i class="fa fa-google-plus"></i>
                                                </a>
                                            </li>
                                            <li class="instagram">
                                                <a target="_blank" class="_blank" href="#" rel="publisher"
                                                    title="instagram">
                                                    <i aria-hidden="true" class="fa fa-instagram"></i>
                                                </a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </aside>

                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script type="text/javascript">
        var tt_live_search = {
            selector: '#search input[name=\'search\']',
            text_no_matches: '',
            height: '50px'
        }

        $(document).ready(function () {
            var html = '';
            html += '<div class="live-search">';
            html += '	<ul>';
            html += '	</ul>';
            html += '<div class="result-text"></div>';
            html += '</div>';

            //$(tt_live_search.selector).parent().closest('div').after(html);
            $(tt_live_search.selector).after(html);

            $(tt_live_search.selector).autocomplete({
                'source': function (request, response) {
                    var filter_name = $(tt_live_search.selector).val();
                    var cat_id = 0;
                    var module_tt_live_search_min_length = '1';
                    if (filter_name.length < module_tt_live_search_min_length) {
                        $('.live-search').css('display', 'none');
                    }
                    else {
                        var html = '';
                        html += '<li style="text-align: center;height:10px;">';
                        html += '<img class="loading" src="image/catalog/demo/banners/loading.gif" />';
                        html += '</li>';
                        $('.live-search ul').html(html);
                        $('.live-search').css('display', 'block');

                        $.ajax({
                            url: 'index.php?route=extension/module/tt_live_search&filter_name=' + encodeURIComponent(filter_name),
                            dataType: 'json',
                            success: function (result) {
                                var products = result.products;
                                $('.live-search ul li').remove();
                                $('.result-text').html('');
                                if (!$.isEmptyObject(products)) {
                                    var show_image = 1;
                                    var show_price = 1;
                                    var show_description = 0;
                                    $('.result-text').html('<a href="https://opencart.templatetrip.com/OPC07/OPC190_nursery/OPC02/index.php?route=product/search&amp;search=' + filter_name + '" class="view-all-results">    View all results     (' + result.total + ')</a>');

                                    $.each(products, function (index, product) {
                                        var html = '';

                                        html += '<li>';
                                        html += '<a href="' + product.url + '" title="' + product.name + '">';
                                        if (product.image && show_image) {
                                            html += '	<div class="product-image col-sm-4 col-xs-4"><img alt="' + product.name + '" src="' + product.image + '"></div>';
                                        }
                                        html += '<div class="search-description col-sm-8 col-xs-8">';
                                        html += '	<div class="product-name">' + product.name;
                                        if (show_description) {
                                            html += '<p>' + product.extra_info + '</p>';
                                        }
                                        html += '</div>';
                                        if (show_price) {
                                            if (product.special) {
                                                html += '	<div class="product-price"><span class="special">' + product.price + '</span><span class="price">' + product.special + '</span></div>';
                                            } else {
                                                html += '	<div class="product-price"><span class="price">' + product.price + '</span></div>';
                                            }
                                        }
                                        html += '</div>';
                                        html += '<span style="clear:both"></span>';
                                        html += '</a>';
                                        html += '</li>';
                                        $('.live-search ul').append(html);
                                    });
                                } else {
                                    var html = '';
                                    html += '<li style="text-align: center;height:10px;">';
                                    html += tt_live_search.text_no_matches;
                                    html += '</li>';

                                    $('.live-search ul').html(html);
                                }
                                $('.live-search').css('display', 'block');
                                return false;
                            }
                        });
                    }
                },
                'select': function (product) {
                    $(tt_live_search.selector).val(product.name);
                }
            });

            $(document).bind("mouseup touchend", function (e) {
                var container = $('.live-search');
                if (!container.is(e.target) && container.has(e.target).length === 0) {
                    container.hide();
                }
            });
        });
			//--></script>
    <!--
OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.
Please donate via PayPal to donate@opencart.com
//-->
</body>

</html>