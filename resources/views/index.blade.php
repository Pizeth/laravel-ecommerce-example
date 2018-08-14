<html><!-- meta contains meta taga, css and fontawesome icons etc -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Ecommerce | Home</title>
    <meta name="DC.title" content="">
    <meta name="description" content="">
    <meta name="keywords" content="">

	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<meta name="csrf-token" content="AdZZWyca8LT4m5m1Lny420ym4eP20X1bkORTjHQb">
	<meta name="Vectorcoder" content="http://ionicecommerce.com">

	<link href="{{ asset('css/ecom/app.theme.1.css') }}" media="all" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/jquery-ui.css') }}" media="all" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/flag-icon-css/css/flag-icon.css') }}" media="all" rel="stylesheet" type="text/css">
    <!-- slider -->
    <link href="{{ asset('css/bootstrap-slider.css') }}" media="all" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/bootstrap-select.css') }}" media="all" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/owl.carousel.css') }}" media="all" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link href="{{ asset('css/rtl.css') }}" media="all" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/ecom/responsive.css') }}" media="all" rel="stylesheet" type="text/css">



    <!--------- stripe js ------>
	<script src="{{ asset('js/saved_resource') }}"></script>

    <link rel="stylesheet" type="text/css" href="{{ asset('css/stripe.css') }}" data-rel-css="">

    <!------- paypal ---------->
    <script src="{{ asset('js/checkout.js.download') }}"></script><script async="true" id="xo-pptm" src="{{ asset('js/pptm.js.download') }}"></script>

    <!---- onesignal ------>
    <script src="{{ asset('js/OneSignalSDK.js.download') }}" async=""></script>
	<script>
        var OneSignal = window.OneSignal || [];
            OneSignal.push(function() {
		     //push here
        });

	//onesignal
        OneSignal.push(["init", {
            appId: "6053d948-b8f6-472a-87e4-379fa89f78d8",
            // safari_web_id: oneSignalSafariWebId,
            persistNotification: false,
            notificationClickHandlerMatch: 'origin',
            autoRegister: false,
            notifyButton: {
                enable: false
            }
        }]);

    </script>
    <script type="text/javascript" charset="UTF-8" src="{{ asset('js/common.js.download') }}"></script>
    <script type="text/javascript" charset="UTF-8" src="{{ asset('js/util.js.download') }}"></script>
    <script type="text/javascript" charset="UTF-8" src="{{ asset('js/stats.js.download') }}"></script>
</head>
<!-- ./end of meta -->

<!--dir="rtl"-->

<body dir="ltr">
	<!-- header -->
	<header id="header-area" class="header-area bg-primary">
        <div class="header-mini">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <nav id="navbar_0" class="navbar navbar-expand-md navbar-dark navbar-0 p-0">
                            <div class="navbar-brand">
                                <select name="change_language" id="change_language" class="change-language">
                                    <option value="en" data-class="en" data-style="background-image: url(http://demo.laravelcommerce.com/resources/assets/images/language_flags/1486556365.503984030_english.jpg);" ><span class="flag-icon flag-icon-gb"></span>English</option>
                                    <option value="ar" data-class="ar" data-style="background-image: url(http://demo.laravelcommerce.com/resources/assets/images/language_flags/1502799254.1501241757.uae.jpg);" ><span class="flag-icon flag-icon-kh"></span>ភាសាខ្មែរ</option>
                                </select>
                                <!-- <select class="selectpicker" data-width="fit">
                                    <option data-content='<span class="flag-icon flag-icon-us"></span> English'>English</option>
                                    <option  data-content='<span class="flag-icon flag-icon-kh"></span> ភាសាខ្មែរ'>ភាសាខ្មែរ</option>
                                </select>
                                <script>
                                    $(function(){
                                        $('.selectpicker').selectpicker();
                                    });
                                </script>                                                         -->
                            </div>
                            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar_collapse_0" aria-controls="navbar_collapse_0" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbar_collapse_0">
                                <ul class="navbar-nav">
                                    <li class="nav-item"><div class="nav-link">Welcome Guest!</div></li>
                                    <li class="nav-item"> <a href="http://demo.laravelcommerce.com/login" class="nav-link -before"><i class="fa fa-lock" aria-hidden="true"></i>&nbsp;Login/Register</a> </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <div class="header-maxi">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-sm-12 col-lg-3 spaceright-0">
                        <a href="http://demo.laravelcommerce.com/" class="logo">
                            <strong>E</strong>COMMERCE
                        </a>
                    </div>
                    <div class="col-12 col-sm-7 col-md-8 col-lg-6 px-0">
                        <form class="form-inline" action="http://demo.laravelcommerce.com/shop" method="get">
                            <div class="search-categories">
                                <select id="category_id" name="category" style="display: none;">
                                    <option value="all">All Categories</option>
                                    <option value="men-s-clothing">Men's Clothing</option>
                                    <option value="men-polo-shirts">--Men Polo shirts</option>
                                    <option value="men-polo-shirts-1">--Men Polo shirts</option>
                                    <option value="men-jeans">--Men Jeans</option>
                                    <option value="men-shoes">--Men Shoes</option>
                                    <option value="sunglasses-glasses">--Sunglasses &amp; Glasses</option>
                                    <option value="women-s-clothing">Women's Clothing</option>
                                    <option value="women-dresses">--Women Dresses</option>
                                    <option value="women-shirts-tops">--Women Shirts &amp; Tops</option>
                                    <option value="women-jeans">--Women Jeans</option>
                                    <option value="women-hand-bags">--Women Hand Bags</option>
                                    <option value="boy-s-clothing">Boy's Clothing</option>
                                    <option value="boy-polo-shirts">--Boy Polo shirts</option>
                                    <option value="boy-casual-shirts">--Boy Casual Shirts</option>
                                    <option value="boy-pants-jeans">--Boy Pants &amp; Jeans</option>
                                    <option value="boy-shoes">--Boy Shoes</option>
                                    <option value="girl-s-clothing">Girl's Clothing</option>
                                    <option value="dresses-rompers">--Dresses &amp; Rompers</option>
                                    <option value="shorts-skirts">--Shorts &amp; Skirts</option>
                                    <option value="sweaters">--Sweaters</option>
                                    <option value="baby-mother">Baby &amp; Mother</option>
                                    <option value="new-born">--New Born</option>
                                    <option value="baby-dresses">--Baby Dresses</option>
                                    <option value="baby-blankets-swaddles">--Baby Blankets &amp; Swaddles</option>
                                    <option value="household-merchandises">Household Merchandises</option>                                   <option value="bedding-collections">--Bedding Collections</option>
                                    <option value="throws-pillows">--Throws &amp; Pillows</option>
                                    <option value="bath-robes">--Bath Robes</option>
                                    <option value="health-beauty-hair">Health &amp; Beauty, Hair</option>
                                    <option value="automobiles-motorcycles">Automobiles &amp; Motorcycles</option>
                                    <option value="jewelry-watches">Jewelry &amp; Watches</option>
                                    <option value="cellphones-accessories">Cellphones &amp; Accessories</option>
                                    <option value="computer-office-security">Computer, Office, Security</option>
                                </select>
                                <span tabindex="0" id="category_id-button" role="combobox" aria-expanded="false" aria-autocomplete="list" aria-owns="category_id-menu" aria-haspopup="true" class="ui-selectmenu-button ui-selectmenu-button-closed ui-corner-all ui-button ui-widget">
                                    <span class="ui-selectmenu-icon ui-icon ui-icon-triangle-1-s"></span>
                                    <span class="ui-selectmenu-text">All Categories</span>
                                </span>
                                <input type="search" name="search" placeholder="Search entire store here..." value="" aria-label="Search">
                                <button type="submit" class="btn btn-secondary"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </div>
                        </form>
                    </div>
                    <div class="col-12 col-sm-5 col-md-4 col-lg-3 spaceleft-0">
                        <ul class="top-right-list">
                            <li class="wishlist-header">
                                <a href="http://demo.laravelcommerce.com/wishlist">
                                    <span class="badge badge-secondary" id="wishlist-count">0</span>
                                    <span class="fa-stack fa-lg">
                                    <i class="fa fa-shopping-bag fa-stack-2x"></i>
                                    <i class="fa fa-heart fa-stack-2x"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="cart-header dropdown head-cart-content">
                                <a href="http://demo.laravelcommerce.com/#" id="dropdownMenuButton" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="badge badge-secondary">0</span>
                                    <i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
                                    <!--<img class="img-fluid" src="http://demo.laravelcommerce.com/public/images/shopping_cart.png') }}" alt="icon">-->
                                    <span class="block">
                                        <span class="title">My Cart</span>
                                        <span class="items">(0)&nbsp;Item</span>
                                    </span>
                                </a>
                                <div class="shopping-cart shopping-cart-empty dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                    <ul class="shopping-cart-items">
                                        <li>You have no items in your shopping cart.</li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-navi">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <nav id="navbar_1" class="navbar navbar-expand-lg navbar-dark navbar-1 p-0 d-none d-lg-block">
                            <div class="collapse navbar-collapse" id="navbar_collapse_1">
                            <ul class="navbar-nav">
                                <li class="nav-item first">
                                    <a href="http://demo.laravelcommerce.com/" class="nav-link">
                                        <i class="fa fa-home"></i>
                                    </a>
                                </li>
                                <li class="nav-item dropdown open">
                                    <a class="nav-link dropdown-toggle" href="http://demo.laravelcommerce.com/">Home Pages</a>
                                    <ul class="dropdown-menu">
                                        <li> <a class="dropdown-item" href="http://demo.laravelcommerce.com/setStyle?style=one">Home Page 1</a> </li>
                                        <li> <a class="dropdown-item" href="http://demo.laravelcommerce.com/setStyle?style=two">Home Page 2</a> </li>
                                        <li> <a class="dropdown-item" href="http://demo.laravelcommerce.com/setStyle?style=three">Home Page 3</a> </li>
                                    </ul>
                                </li>
                                <li class="nav-item"> <a class="nav-link" href="http://demo.laravelcommerce.com/shop">Shop</a> </li>
                                <li class="nav-item dropdown mega-dropdown open">
                                    <a href="javascript:void(0);" class="nav-link dropdown-toggle">
                                        Collection <span class="badge badge-secondary">Hot</span>
                                    </a>
                                    <ul class="dropdown-menu mega-dropdown-menu row">
                                        <li class="col-sm-3">
                                            <ul>
                                                <li class="dropdown-header underline">New in Stores</li>
                                                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                                                    <div class="carousel-inner">
                                                        <div class="carousel-item  active " style="pointer-events: auto !important;">
                                                            <span products_id="81" class="fa  fa-heart-o  is_liked">
                                                                <span class="badge badge-secondary">2</span>
                                                            </span>
                                                            <a href="http://demo.laravelcommerce.com/product-detail/ruffled-cotton-cardigan">
                                                                <img src="{{ asset('img/ecom/1502366686.pPOLO2-25207761_standard_v400.jpg') }}" alt="RUFFLED COTTON CARDIGAN">
                                                            </a>
                                                            <small>Girl's Clothing</small>
                                                            <h5>RUFFLED COTTON CARDIGAN</h5>
                                                            <div class="block">
                                                                <span class="price">$49.5</span>
                                                                <div class="buttons">
                                                                    <button class="btn btn-dark">View Detail</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Item -->
                                                        <div class="carousel-item " style="pointer-events: auto !important;">
                                                            <span products_id="80" class="fa  fa-heart-o  is_liked">
                                                                <span class="badge badge-secondary">2</span>
                                                            </span>
                                                            <a href="http://demo.laravelcommerce.com/product-detail/flag-combed-cotton-sweater">
                                                                <img src="{{ asset('img/ecom/1502366586.pPOLO2-25834797_standard_v400.jpg') }}" alt="FLAG COMBED COTTON SWEATER">
                                                            </a>
                                                            <small>Girl's Clothing</small>
                                                            <h5>FLAG COMBED COTTON SWEATER</h5>
                                                            <div class="block">
                                                                <span class="price">
                                                                    <span class="line-through">$99.99</span>
                                                                    $125
                                                                </span>
                                                                <div class="buttons">
                                                                    <button class="btn btn-dark">View Detail</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Item -->
                                                        <div class="carousel-item " style="pointer-events: auto !important;">
                                                            <span products_id="79" class="fa  fa-heart-o  is_liked">
                                                                <span class="badge badge-secondary">2</span>
                                                            </span>
                                                            <a href="http://demo.laravelcommerce.com/product-detail/fair-isle-hooded-sweater">
                                                                <img src="{{ asset('img/ecom/1502366462.pPOLO2-26090829_standard_v400.jpg') }}" alt="FAIR ISLE HOODED SWEATER">
                                                            </a>
                                                            <small>Girl's Clothing</small>
                                                            <h5>FAIR ISLE HOODED SWEATER</h5>
                                                            <div class="block">
                                                                <span class="price">$45</span>
                                                                <div class="buttons">
                                                                    <button class="btn btn-dark">View Detail</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Item -->
                                                        <div class="carousel-item " style="pointer-events: auto !important;">
                                                            <span products_id="78" class="fa  fa-heart-o  is_liked">
                                                                <span class="badge badge-secondary">2</span>
                                                            </span>
                                                            <a href="http://demo.laravelcommerce.com/product-detail/cable-knit-cashmere-sweater">
                                                                <img src="{{ asset('img/ecom/1502366342.pPOLO2-26090785_standard_v400.jpg') }}" alt="CABLE-KNIT CASHMERE SWEATER">
                                                            </a>
                                                            <small>Girl's Clothing</small>
                                                            <h5>CABLE-KNIT CASHMERE SWEATER</h5>
                                                            <div class="block">
                                                                <span class="price">$195</span>
                                                                <div class="buttons">
                                                                    <button class="btn btn-dark">View Detail</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Item -->
                                                        <div class="carousel-item " style="pointer-events: auto !important;">
                                                            <span products_id="77" class="fa  fa-heart-o  is_liked">
                                                                <span class="badge badge-secondary">2</span>
                                                            </span>
                                                            <a href="http://demo.laravelcommerce.com/product-detail/pleated-madras-skirt">
                                                                <img src="{{ asset('img/ecom/1502366105.pPOLO2-26091049_alternate1_v400.jpg') }}" alt="PLEATED MADRAS SKIRT">
                                                            </a>
                                                            <small>Girl's Clothing</small>
                                                            <h5>PLEATED MADRAS SKIRT</h5>
                                                            <div class="block">
                                                                <span class="price">$56.5</span>
                                                                <div class="buttons">
                                                                    <button class="btn btn-dark">View Detail</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <!-- End Item -->
                                                    </div>
                                                <!-- End Carousel Inner -->
                                                </div>
                                            </ul>
                                        </li>
                                        <li class="col-sm-9 pl-4 row">
                                            <ul class="col-sm-4">
                                                <li class="dropdown-header"><a href="http://demo.laravelcommerce.com/shop?category=men-s-clothing">Men's Clothing</a></li>
                                                <li><a href="http://demo.laravelcommerce.com/shop?category=men-polo-shirts">Men Polo shirts</a></li>
                                                <li><a href="http://demo.laravelcommerce.com/shop?category=men-polo-shirts-1">Men Polo shirts</a></li>
                                                <li><a href="http://demo.laravelcommerce.com/shop?category=men-jeans">Men Jeans</a></li>
                                                <li><a href="http://demo.laravelcommerce.com/shop?category=men-shoes">Men Shoes</a></li>
                                                <li><a href="http://demo.laravelcommerce.com/shop?category=sunglasses-glasses">Sunglasses &amp; Glasses</a></li>
                                            </ul>
                                            <ul class="col-sm-4">
                                                <li class="dropdown-header"><a href="http://demo.laravelcommerce.com/shop?category=women-s-clothing">Women's Clothing</a></li>
                                                <li><a href="http://demo.laravelcommerce.com/shop?category=women-dresses">Women Dresses</a></li>
                                                <li><a href="http://demo.laravelcommerce.com/shop?category=women-shirts-tops">Women Shirts &amp; Tops</a></li>
                                                <li><a href="http://demo.laravelcommerce.com/shop?category=women-jeans">Women Jeans</a></li>
                                                <li><a href="http://demo.laravelcommerce.com/shop?category=women-hand-bags">Women Hand Bags</a></li>
                                            </ul>
                                            <ul class="col-sm-4">
                                                <li class="dropdown-header"><a href="http://demo.laravelcommerce.com/shop?category=boy-s-clothing">Boy's Clothing</a></li>
                                                <li><a href="http://demo.laravelcommerce.com/shop?category=boy-polo-shirts">Boy Polo shirts</a></li>
                                                <li><a href="http://demo.laravelcommerce.com/shop?category=boy-casual-shirts">Boy Casual Shirts</a></li>
                                                <li><a href="http://demo.laravelcommerce.com/shop?category=boy-pants-jeans">Boy Pants &amp; Jeans</a></li>
                                                <li><a href="http://demo.laravelcommerce.com/shop?category=boy-shoes">Boy Shoes</a></li>
                                            </ul>
                                            <ul class="col-sm-4">
                                                <li class="dropdown-header"><a href="http://demo.laravelcommerce.com/shop?category=girl-s-clothing">Girl's Clothing</a></li>
                                                <li><a href="http://demo.laravelcommerce.com/shop?category=dresses-rompers">Dresses &amp; Rompers</a></li>
                                                <li><a href="http://demo.laravelcommerce.com/shop?category=shorts-skirts">Shorts &amp; Skirts</a></li>
                                                <li><a href="http://demo.laravelcommerce.com/shop?category=sweaters">Sweaters</a></li>
                                            </ul>
                                            <ul class="col-sm-4">
                                                <li class="dropdown-header"><a href="http://demo.laravelcommerce.com/shop?category=baby-mother">Baby &amp; Mother</a></li>
                                                <li><a href="http://demo.laravelcommerce.com/shop?category=new-born">New Born</a></li>
                                                <li><a href="http://demo.laravelcommerce.com/shop?category=baby-dresses">Baby Dresses</a></li>
                                                <li><a href="http://demo.laravelcommerce.com/shop?category=baby-blankets-swaddles">Baby Blankets &amp; Swaddles</a></li>
                                            </ul>
                                            <ul class="col-sm-4">
                                                <li class="dropdown-header"><a href="http://demo.laravelcommerce.com/shop?category=household-merchandises">Household Merchandises</a></li>
                                                <li><a href="http://demo.laravelcommerce.com/shop?category=bedding-collections">Bedding Collections</a></li>
                                                <li><a href="http://demo.laravelcommerce.com/shop?category=throws-pillows">Throws &amp; Pillows</a></li>
                                                <li><a href="http://demo.laravelcommerce.com/shop?category=bath-robes">Bath Robes</a></li>
                                            </ul>
                                            <ul class="col-sm-4">
                                                <li class="dropdown-header"><a href="http://demo.laravelcommerce.com/shop?category=health-beauty-hair">Health &amp; Beauty, Hair</a></li>
                                            </ul>
                                            <ul class="col-sm-4">
                                                <li class="dropdown-header"><a href="http://demo.laravelcommerce.com/shop?category=automobiles-motorcycles">Automobiles &amp; Motorcycles</a></li>
                                            </ul>
                                            <ul class="col-sm-4">
                                                <li class="dropdown-header"><a href="http://demo.laravelcommerce.com/shop?category=jewelry-watches">Jewelry &amp; Watches</a></li>
                                            </ul>
                                            <ul class="col-sm-4">
                                                <li class="dropdown-header"><a href="http://demo.laravelcommerce.com/shop?category=cellphones-accessories">Cellphones &amp; Accessories</a></li>
                                            </ul>
                                            <ul class="col-sm-4">
                                                <li class="dropdown-header"><a href="http://demo.laravelcommerce.com/shop?category=computer-office-security">Computer, Office, Security</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown open">
                                    <a class="nav-link dropdown-toggle" href="http://demo.laravelcommerce.com/news">News</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="http://demo.laravelcommerce.com/news?category=app-features">App Features</a></li>
                                        <li><a class="dropdown-item" href="http://demo.laravelcommerce.com/news?category=introduction">Introduction</a></li>
                                        <li><a class="dropdown-item" href="http://demo.laravelcommerce.com/news?category=platforms">Platforms</a></li>
                                        <li><a class="dropdown-item" href="http://demo.laravelcommerce.com/news?category=screen-shots">Screen Shots</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown open">
                                    <a href="http://demo.laravelcommerce.com/" class="nav-link dropdown-toggle">Info Pages</a>
                                    <ul class="dropdown-menu">
                                        <li> <a href="http://demo.laravelcommerce.com/page?name=about-us" class="dropdown-item">About Us</a> </li>
                                        <li> <a href="http://demo.laravelcommerce.com/page?name=privacy-policy" class="dropdown-item">Privacy Policy</a> </li>
                                        <li> <a href="http://demo.laravelcommerce.com/page?name=refund-policy" class="dropdown-item">Refund Policy</a> </li>
                                        <li> <a href="http://demo.laravelcommerce.com/page?name=term-services" class="dropdown-item">Term &amp; Services</a> </li>
                                    </ul>
                                </li>
                                <li class="nav-item"> <a class="nav-link" href="http://demo.laravelcommerce.com/contact-us">Contact Us</a> </li>
                                <li class="nav-item last"><a class="nav-link"><span>Hotline</span>(+92 312 1234567)</a></li>
                            </ul>
                            </div>
                        </nav>
                        <nav id="navbar_2" class="navbar navbar-expand-lg navbar-dark navbar-2 p-0 d-block d-lg-none">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_collapse_2" aria-controls="navbar_collapse_2" aria-expanded="false" aria-label="Toggle navigation"> Menu </button>
                            <div class="collapse navbar-collapse" id="navbar_collapse_2">
                                <ul class="navbar-nav">
                                    <li class="nav-item first"><a href="http://demo.laravelcommerce.com/" class="nav-link"><i class="fa fa-home"></i></a></li>
                                    <li class="nav-item dropdown open">
                                        <div class="nav-link dropdown-toggle">Home Pages</div>
                                            <ul class="dropdown-menu">
                                                <li> <a class="dropdown-item" href="http://demo.laravelcommerce.com/setStyle?style=one">Home Page 1</a> </li>
                                                <li> <a class="dropdown-item" href="http://demo.laravelcommerce.com/setStyle?style=two">Home Page 2</a> </li>
                                                <li> <a class="dropdown-item" href="http://demo.laravelcommerce.com/setStyle?style=three">Home Page 3</a> </li>
                                            </ul>
                                    </li>
                                    <li class="nav-item"> <a class="nav-link" href="http://demo.laravelcommerce.com/shop">Shop</a> </li>
                                    <li class="nav-item dropdown mega-dropdown open">
                                        <div class="nav-link dropdown-toggle">
                                            Collection<span class="badge badge-secondary">Hot</span>
                                        </div>
                                        <ul class="dropdown-menu mega-dropdown-menu row">
                                            <li class="col-sm-3">
                                                <ul>
                                                    <li class="dropdown-header underline">New in Stores</li>
                                                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                                                        <div class="carousel-inner">
                                                            <div class="carousel-item  active ">
                                                                <span products_id="81" class="fa  fa-heart-o  is_liked">
                                                                    <span class="badge badge-secondary">2</span>
                                                                </span>
                                                                <a href="http://demo.laravelcommerce.com/product-detail/ruffled-cotton-cardigan">
                                                                    <img src="{{ asset('img/ecom/1502366686.pPOLO2-25207761_standard_v400.jpg') }}" alt="RUFFLED COTTON CARDIGAN">
                                                                </a>
                                                                <small>Girl's Clothing</small>
                                                                <h5>RUFFLED COTTON CARDIGAN</h5>
                                                                <div class="block">
                                                                    <span class="price">$49.5</span>
                                                                    <div class="buttons">
                                                                    <a href="http://demo.laravelcommerce.com/product-detail/ruffled-cotton-cardigan" class="btn btn-dark">View Detail</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- End Item -->
                                                            <div class="carousel-item ">
                                                                <span products_id="80" class="fa  fa-heart-o  is_liked">
                                                                    <span class="badge badge-secondary">2</span>
                                                                </span>
                                                                <a href="http://demo.laravelcommerce.com/product-detail/flag-combed-cotton-sweater">
                                                                    <img src="{{ asset('img/ecom/1502366586.pPOLO2-25834797_standard_v400.jpg') }}" alt="FLAG COMBED COTTON SWEATER">
                                                                </a>
                                                                <small>Girl's Clothing</small>
                                                                <h5>FLAG COMBED COTTON SWEATER</h5>
                                                                <div class="block">
                                                                    <span class="price">
                                                                        <span class="line-through">$99.99</span>
                                                                        $125
                                                                    </span>
                                                                    <div class="buttons">
                                                                    <a href="http://demo.laravelcommerce.com/product-detail/flag-combed-cotton-sweater" class="btn btn-dark">View Detail</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- End Item -->
                                                            <div class="carousel-item ">
                                                                <span products_id="79" class="fa  fa-heart-o  is_liked">
                                                                    <span class="badge badge-secondary">2</span>
                                                                </span>
                                                                <a href="http://demo.laravelcommerce.com/product-detail/fair-isle-hooded-sweater">
                                                                    <img src="{{ asset('img/ecom/1502366462.pPOLO2-26090829_standard_v400.jpg') }}" alt="FAIR ISLE HOODED SWEATER">
                                                                </a>
                                                                <small>Girl's Clothing</small>
                                                                <h5>FAIR ISLE HOODED SWEATER</h5>
                                                                <div class="block">
                                                                    <span class="price">$45</span>
                                                                    <div class="buttons">
                                                                    <a href="http://demo.laravelcommerce.com/product-detail/fair-isle-hooded-sweater" class="btn btn-dark">View Detail</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- End Item -->
                                                            <div class="carousel-item ">
                                                                <span products_id="78" class="fa  fa-heart-o  is_liked">
                                                                    <span class="badge badge-secondary">2</span>
                                                                </span>
                                                                <a href="http://demo.laravelcommerce.com/product-detail/cable-knit-cashmere-sweater">
                                                                    <img src="{{ asset('img/ecom/1502366342.pPOLO2-26090785_standard_v400.jpg') }}" alt="CABLE-KNIT CASHMERE SWEATER">
                                                                </a>
                                                                <small>Girl's Clothing</small>
                                                                <h5>CABLE-KNIT CASHMERE SWEATER</h5>
                                                                <div class="block">
                                                                    <span class="price">$195</span>
                                                                    <div class="buttons">
                                                                    <a href="http://demo.laravelcommerce.com/product-detail/cable-knit-cashmere-sweater" class="btn btn-dark">View Detail</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- End Item -->
                                                            <div class="carousel-item ">
                                                                <span products_id="77" class="fa  fa-heart-o  is_liked">
                                                                    <span class="badge badge-secondary">2</span>
                                                                </span>
                                                                <a href="http://demo.laravelcommerce.com/product-detail/pleated-madras-skirt">
                                                                    <img src="{{ asset('img/ecom/1502366105.pPOLO2-26091049_alternate1_v400.jpg') }}" alt="PLEATED MADRAS SKIRT">
                                                                </a>
                                                                <small>Girl's Clothing</small>
                                                                <h5>PLEATED MADRAS SKIRT</h5>
                                                                <div class="block">
                                                                    <span class="price">$56.5</span>
                                                                    <div class="buttons">
                                                                    <a href="http://demo.laravelcommerce.com/product-detail/pleated-madras-skirt" class="btn btn-dark">View Detail</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- End Item -->
                                                        </div>
                                                        <!-- End Carousel Inner -->
                                                    </div>
                                                </ul>
                                            </li>
                                            <li class="col-sm-9 pl-4 row">
                                                <ul class="col-sm-4">
                                                    <li class="dropdown-header"><a href="http://demo.laravelcommerce.com/shop?category=men-s-clothing">Men's Clothing</a></li>
                                                    <li><a href="http://demo.laravelcommerce.com/shop?category=men-polo-shirts">Men Polo shirts</a></li>
                                                    <li><a href="http://demo.laravelcommerce.com/shop?category=men-polo-shirts-1">Men Polo shirts</a></li>
                                                    <li><a href="http://demo.laravelcommerce.com/shop?category=men-jeans">Men Jeans</a></li>
                                                    <li><a href="http://demo.laravelcommerce.com/shop?category=men-shoes">Men Shoes</a></li>
                                                    <li><a href="http://demo.laravelcommerce.com/shop?category=sunglasses-glasses">Sunglasses &amp; Glasses</a></li>
                                                </ul>
                                                <ul class="col-sm-4">
                                                    <li class="dropdown-header"><a href="http://demo.laravelcommerce.com/shop?category=women-s-clothing">Women's Clothing</a></li>
                                                    <li><a href="http://demo.laravelcommerce.com/shop?category=women-dresses">Women Dresses</a></li>
                                                    <li><a href="http://demo.laravelcommerce.com/shop?category=women-shirts-tops">Women Shirts &amp; Tops</a></li>
                                                    <li><a href="http://demo.laravelcommerce.com/shop?category=women-jeans">Women Jeans</a></li>
                                                    <li><a href="http://demo.laravelcommerce.com/shop?category=women-hand-bags">Women Hand Bags</a></li>
                                                </ul>
                                                <ul class="col-sm-4">
                                                    <li class="dropdown-header"><a href="http://demo.laravelcommerce.com/shop?category=boy-s-clothing">Boy's Clothing</a></li>
                                                    <li><a href="http://demo.laravelcommerce.com/shop?category=boy-polo-shirts">Boy Polo shirts</a></li>
                                                    <li><a href="http://demo.laravelcommerce.com/shop?category=boy-casual-shirts">Boy Casual Shirts</a></li>
                                                    <li><a href="http://demo.laravelcommerce.com/shop?category=boy-pants-jeans">Boy Pants &amp; Jeans</a></li>
                                                    <li><a href="http://demo.laravelcommerce.com/shop?category=boy-shoes">Boy Shoes</a></li>
                                                </ul>
                                                <ul class="col-sm-4">
                                                    <li class="dropdown-header"><a href="http://demo.laravelcommerce.com/shop?category=girl-s-clothing">Girl's Clothing</a></li>
                                                    <li><a href="http://demo.laravelcommerce.com/shop?category=dresses-rompers">Dresses &amp; Rompers</a></li>
                                                    <li><a href="http://demo.laravelcommerce.com/shop?category=shorts-skirts">Shorts &amp; Skirts</a></li>
                                                    <li><a href="http://demo.laravelcommerce.com/shop?category=sweaters">Sweaters</a></li>
                                                </ul>
                                                <ul class="col-sm-4">
                                                    <li class="dropdown-header"><a href="http://demo.laravelcommerce.com/shop?category=baby-mother">Baby &amp; Mother</a></li>
                                                    <li><a href="http://demo.laravelcommerce.com/shop?category=new-born">New Born</a></li>
                                                    <li><a href="http://demo.laravelcommerce.com/shop?category=baby-dresses">Baby Dresses</a></li>
                                                    <li><a href="http://demo.laravelcommerce.com/shop?category=baby-blankets-swaddles">Baby Blankets &amp; Swaddles</a></li>
                                                </ul>
                                                <ul class="col-sm-4">
                                                    <li class="dropdown-header"><a href="http://demo.laravelcommerce.com/shop?category=household-merchandises">Household Merchandises</a></li>
                                                    <li><a href="http://demo.laravelcommerce.com/shop?category=bedding-collections">Bedding Collections</a></li>
                                                    <li><a href="http://demo.laravelcommerce.com/shop?category=throws-pillows">Throws &amp; Pillows</a></li>
                                                    <li><a href="http://demo.laravelcommerce.com/shop?category=bath-robes">Bath Robes</a></li>
                                                </ul>
                                                <ul class="col-sm-4">
                                                    <li class="dropdown-header"><a href="http://demo.laravelcommerce.com/shop?category=health-beauty-hair">Health &amp; Beauty, Hair</a></li>
                                                </ul>
                                                <ul class="col-sm-4">
                                                    <li class="dropdown-header"><a href="http://demo.laravelcommerce.com/shop?category=automobiles-motorcycles">Automobiles &amp; Motorcycles</a></li>
                                                </ul>
                                                <ul class="col-sm-4">
                                                    <li class="dropdown-header"><a href="http://demo.laravelcommerce.com/shop?category=jewelry-watches">Jewelry &amp; Watches</a></li>
                                                </ul>
                                                <ul class="col-sm-4">
                                                    <li class="dropdown-header"><a href="http://demo.laravelcommerce.com/shop?category=cellphones-accessories">Cellphones &amp; Accessories</a></li>
                                                </ul>
                                                <ul class="col-sm-4">
                                                    <li class="dropdown-header"><a href="http://demo.laravelcommerce.com/shop?category=computer-office-security">Computer, Office, Security</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown open">
                                        <div class="nav-link dropdown-toggle">News</div>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="http://demo.laravelcommerce.com/news?category=app-features">App Features</a></li>
                                            <li><a class="dropdown-item" href="http://demo.laravelcommerce.com/news?category=introduction">Introduction</a></li>
                                            <li><a class="dropdown-item" href="http://demo.laravelcommerce.com/news?category=platforms">Platforms</a></li>
                                            <li><a class="dropdown-item" href="http://demo.laravelcommerce.com/news?category=screen-shots">Screen Shots</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown open">
                                        <div class="nav-link dropdown-toggle">Info Pages</div>
                                        <ul class="dropdown-menu">
                                        <li> <a href="http://demo.laravelcommerce.com/page?name=privacy-policy" class="dropdown-item">Privacy Policy</a> </li>
                                            <li> <a href="http://demo.laravelcommerce.com/page?name=refund-policy" class="dropdown-item">Refund Policy</a> </li>
                                            <li> <a href="http://demo.laravelcommerce.com/page?name=term-services" class="dropdown-item">Term &amp; Services</a> </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item"> <a class="nav-link" href="http://demo.laravelcommerce.com/contact-us">Contact Us</a> </li>
                                    <li class="nav-item last"><a class="nav-link"><span>Hotline</span>(+92 312 1234567)</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="carousel-content">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-3 p-0"> 
                    <nav id="categories" class="navbar navbar-expand-lg p-0 categories">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-categories" aria-controls="navbar-categories" aria-expanded="false" aria-label="Toggle navigation">
		                    All Categories  
                        </button>
                        <div class="collapse navbar-collapse" id="navbar-categories">
                            <ul class="navbar-nav flex-column">
                                <li class="nav-item dropdown">
                                    <a href="http://demo.laravelcommerce.com/shop?category=men-s-clothing" class="nav-link dropdown-toggle">
                                        <img class="img-fuild" src="{{ asset('img/ecom/1528806598.shirt.png') }}">
                                        Men's Clothing  <i class="fa fa-angle-right " aria-hidden="true"></i>         
                                    </a>
                                    <ul class="dropdown-menu multi-level">
                                        <li class="dropdown-submenu">
                                            <a class="dropdown-item" tabindex="-1" href="http://demo.laravelcommerce.com/shop?category=men-polo-shirts">
                                                <img class="img-fuild" src="{{ asset('img/ecom/1502105603.shirt.png') }}">
                                                Men Polo shirts
                                            </a>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a class="dropdown-item" tabindex="-1" href="http://demo.laravelcommerce.com/shop?category=men-polo-shirts-1">
                                                <img class="img-fuild" src="{{ asset('img/ecom/1502178863.shirt.png') }}">
                                                Men Polo shirts
                                            </a>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a class="dropdown-item" tabindex="-1" href="http://demo.laravelcommerce.com/shop?category=men-jeans">
                                                <img class="img-fuild" src="{{ asset('img/ecom/1502179389.jeans.png') }}">
                                                Men Jeans
                                            </a>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a class="dropdown-item" tabindex="-1" href="http://demo.laravelcommerce.com/shop?category=men-shoes">
                                                <img class="img-fuild" src="{{ asset('img/ecom/1502179895.sneaker.png') }}">
                                                Men Shoes
                                            </a>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a class="dropdown-item" tabindex="-1" href="http://demo.laravelcommerce.com/shop?category=sunglasses-glasses">
                                                <img class="img-fuild" src="{{ asset('img/ecom/1502180493.reading-glasses.png') }}">
                                                Sunglasses &amp; Glasses
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a href="http://demo.laravelcommerce.com/shop?category=women-s-clothing" class="nav-link dropdown-toggle">
                                        <img class="img-fuild" src="{{ asset('img/ecom/1528806661.dress.png') }}">
                                        Women's Clothing  <i class="fa fa-angle-right " aria-hidden="true"></i>         
                                    </a>
                                    <ul class="dropdown-menu multi-level">
                                        <li class="dropdown-submenu">
                                            <a class="dropdown-item" tabindex="-1" href="http://demo.laravelcommerce.com/shop?category=women-dresses">
                                                <img class="img-fuild" src="{{ asset('img/ecom/1502194101.dress.png') }}">
                                                Women Dresses
                                            </a>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a class="dropdown-item" tabindex="-1" href="http://demo.laravelcommerce.com/shop?category=women-shirts-tops">
                                                <img class="img-fuild" src="{{ asset('img/ecom/1502194198.shirt.png') }}">
                                                Women Shirts &amp; Tops
                                            </a>
                                        </li>
                                        <li class="dropdown-submenu">
                                        <a class="dropdown-item" tabindex="-1" href="http://demo.laravelcommerce.com/shop?category=women-jeans">
                                            <img class="img-fuild" src="{{ asset('img/ecom/1502194291.jeans.png') }}">
                                            Women Jeans
                                        </a>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a class="dropdown-item" tabindex="-1" href="http://demo.laravelcommerce.com/shop?category=women-hand-bags">
                                                <img class="img-fuild" src="{{ asset('img/ecom/1502194427.handbag.png') }}">
                                                Women Hand Bags
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a href="http://demo.laravelcommerce.com/shop?category=boy-s-clothing" class="nav-link dropdown-toggle">
                                        <img class="img-fuild" src="{{ asset('img/ecom/1502101936.man-standing-up.png') }}">
                                        Boy's Clothing  <i class="fa fa-angle-right " aria-hidden="true"></i>         
                                    </a>
                                    <ul class="dropdown-menu multi-level">
                                        <li class="dropdown-submenu">
                                            <a class="dropdown-item" tabindex="-1" href="http://demo.laravelcommerce.com/shop?category=boy-polo-shirts">
                                                <img class="img-fuild" src="{{ asset('img/ecom/1502283220.shirt2.png') }}">
                                                Boy Polo shirts
                                            </a>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a class="dropdown-item" tabindex="-1" href="http://demo.laravelcommerce.com/shop?category=boy-casual-shirts">
                                                <img class="img-fuild" src="{{ asset('img/ecom/1502283252.shirt.png') }}">
                                                Boy Casual Shirts
                                            </a>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a class="dropdown-item" tabindex="-1" href="http://demo.laravelcommerce.com/shop?category=boy-pants-jeans">
                                                <img class="img-fuild" src="{{ asset('img/ecom/1502283334.jeans.png') }}">
                                                Boy Pants &amp; Jeans
                                            </a>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a class="dropdown-item" tabindex="-1" href="http://demo.laravelcommerce.com/shop?category=boy-shoes">
                                                <img class="img-fuild" src="{{ asset('img/ecom/1502283383.sneaker.png') }}">
                                                Boy Shoes
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a href="http://demo.laravelcommerce.com/shop?category=girl-s-clothing" class="nav-link dropdown-toggle">
                                        <img class="img-fuild" src="{{ asset('img/ecom/1502103958.female-silhouette.png') }}">
                                        Girl's Clothing  <i class="fa fa-angle-right " aria-hidden="true"></i>         
                                    </a>
                                    <ul class="dropdown-menu multi-level">
                                        <li class="dropdown-submenu">
                                            <a class="dropdown-item" tabindex="-1" href="http://demo.laravelcommerce.com/shop?category=dresses-rompers">
                                                <img class="img-fuild" src="{{ asset('img/ecom/1502283482.dress.png') }}">
                                                Dresses &amp; Rompers
                                            </a>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a class="dropdown-item" tabindex="-1" href="http://demo.laravelcommerce.com/shop?category=shorts-skirts">
                                                <img class="img-fuild" src="{{ asset('img/ecom/1502283595.short-skirt.png') }}">
                                                Shorts &amp; Skirts
                                            </a>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a class="dropdown-item" tabindex="-1" href="http://demo.laravelcommerce.com/shop?category=sweaters">
                                                <img class="img-fuild" src="{{ asset('img/ecom/1502283706.pullover.png') }}">
                                                Sweaters
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a href="http://demo.laravelcommerce.com/shop?category=baby-mother" class="nav-link dropdown-toggle">
                                        <img class="img-fuild" src="{{ asset('img/ecom/1528806779.dress (1).png') }}">
                                        Baby &amp; Mother  <i class="fa fa-angle-right " aria-hidden="true"></i>         
                                    </a>
                                    <ul class="dropdown-menu multi-level">
                                        <li class="dropdown-submenu">
                                            <a class="dropdown-item" tabindex="-1" href="http://demo.laravelcommerce.com/shop?category=new-born">
                                                <img class="img-fuild" src="{{ asset('img/ecom/1502263460.smiling-baby.png') }}">
                                                New Born
                                            </a>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a class="dropdown-item" tabindex="-1" href="http://demo.laravelcommerce.com/shop?category=baby-dresses">
                                                <img class="img-fuild" src="{{ asset('img/ecom/1502267564.dress.png') }}">
                                                Baby Dresses
                                            </a>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a class="dropdown-item" tabindex="-1" href="http://demo.laravelcommerce.com/shop?category=baby-blankets-swaddles">
                                                <img class="img-fuild" src="{{ asset('img/ecom/1502273393.blanket.png') }}">
                                                Baby Blankets &amp; Swaddles
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a href="http://demo.laravelcommerce.com/shop?category=household-merchandises" class="nav-link dropdown-toggle">
                                        <img class="img-fuild" src="{{ asset('img/ecom/1528806720.sofa.png') }}">
                                        Household Merchandises  <i class="fa fa-angle-right " aria-hidden="true"></i>         
                                    </a>
                                    <ul class="dropdown-menu multi-level">
                                        <li class="dropdown-submenu">
                                            <a class="dropdown-item" tabindex="-1" href="http://demo.laravelcommerce.com/shop?category=bedding-collections">
                                                <img class="img-fuild" src="{{ asset('img/ecom/1502274677.modern-double-bed.png') }}">
                                                Bedding Collections
                                            </a>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a class="dropdown-item" tabindex="-1" href="http://demo.laravelcommerce.com/shop?category=throws-pillows">
                                                <img class="img-fuild" src="{{ asset('img/ecom/1502278859.pillow.png') }}">
                                                Throws &amp; Pillows
                                            </a>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a class="dropdown-item" tabindex="-1" href="http://demo.laravelcommerce.com/shop?category=bath-robes">
                                                <img class="img-fuild" src="{{ asset('img/ecom/1502280642.bath-robe.png') }}">
                                                Bath Robes
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a href="http://demo.laravelcommerce.com/shop?category=health-beauty-hair" class="nav-link dropdown-toggle">
                                        <img class="img-fuild" src="{{ asset('img/ecom/1528806373.heart.png') }}">
                                        Health &amp; Beauty, Hair         
                                    </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a href="http://demo.laravelcommerce.com/shop?category=automobiles-motorcycles" class="nav-link dropdown-toggle">
                                        <img class="img-fuild" src="{{ asset('img/ecom/1528806436.car.png') }}">
                                        Automobiles &amp; Motorcycles         
                                    </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a href="http://demo.laravelcommerce.com/shop?category=jewelry-watches" class="nav-link dropdown-toggle">
                                        <img class="img-fuild" src="{{ asset('img/ecom/1528806495.wedding-ring.png') }}">
                                        Jewelry &amp; Watches         
                                    </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a href="http://demo.laravelcommerce.com/shop?category=cellphones-accessories" class="nav-link dropdown-toggle">
                                        <img class="img-fuild" src="{{ asset('img/ecom/1528806529.mobile-phone.png') }}">
                                        Cellphones &amp; Accessories         
                                    </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a href="http://demo.laravelcommerce.com/shop?category=computer-office-security" class="nav-link dropdown-toggle">
                                        <img class="img-fuild" src="{{ asset('img/ecom/1528806833.computer.png') }}">
                                        Computer, Office, Security         
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="col-12 col-lg-9 p-0"> 
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class=""></li>
                            <li data-target="#myCarousel" data-slide-to="1" class=""></li>
                            <li data-target="#myCarousel" data-slide-to="2" class=""></li>
                            <li data-target="#myCarousel" data-slide-to="3" class="active"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item">
                                <img width="100%" class="first-slide" src="{{ asset('img/ecom/1531931372.banner-001.jpg') }}" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <a href="http://demo.laravelcommerce.com/product-detail/ruffled-cotton-cardigan">
                                    <img width="100%" class="first-slide" src="{{ asset('img/ecom/1531842089.SLID3-(1).jpg') }}" alt="First slide">
                                </a>
                            </div>
                            <div class="carousel-item">
                                <img width="100%" class="first-slide" src="{{ asset('img/ecom/1531842038.SLID5-3.jpg') }}" alt="First slide">
                            </div>
                            <div class="carousel-item active">
                                <a href="http://demo.laravelcommerce.com/product-detail/ruffled-cotton-cardigan">
                                    <img width="100%" class="first-slide" src="{{ asset('img/ecom/1531842053.BANNAR_4_5.jpg') }}" alt="First slide">
                                </a>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="http://demo.laravelcommerce.com/#myCarousel" role="button" data-slide="prev">
                            <span class="fa fa-angle-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="http://demo.laravelcommerce.com/#myCarousel" role="button" data-slide="next">
                            <span class="fa fa-angle-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div> 
                </div>
            </div>
        </div>
    </section>
    <!-- ./end of header -->

    <section class="site-content">
        <div class="container">
            <div class="group-banners en">
                <div class="row">
                    <div class="col-12 col-sm-4">
                        <div class="banner-image">
                            <a title="Banner Image" href="http://demo.laravelcommerce.com/shop"><img class="img-fluid" src="{{ asset('img/ecom/banner_1_en.jpg') }}" alt="Banner Image"></a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-4">
                        <div class="banner-image">
                            <a title="Banner Image" href="http://demo.laravelcommerce.com/shop"><img class="img-fluid" src="{{ asset('img/ecom/banner_2_en.jpg') }}" alt="Banner Image"></a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-4">
                        <div class="banner-image">
                            <a title="Banner Image" href="http://demo.laravelcommerce.com/shop"><img class="img-fluid" src="{{ asset('img/ecom/banner_3_en.jpg') }}" alt="Banner Image"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="group-banners ar">
                <div class="row">
                    <div class="col-12 col-sm-4">
                        <div class="banner-image">
                            <a title="Banner Image" href="http://demo.laravelcommerce.com/shop"><img class="img-fluid" src="{{ asset('img/ecom/banner_1_ar.jpg') }}" alt="Banner Image"></a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-4">
                        <div class="banner-image">
                            <a title="Banner Image" href="http://demo.laravelcommerce.com/shop"><img class="img-fluid" src="{{ asset('img/ecom/banner_2_ar.jpg') }}" alt="Banner Image"></a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-4">
                        <div class="banner-image">
                            <a title="Banner Image" href="http://demo.laravelcommerce.com/shop"><img class="img-fluid" src="{{ asset('img/ecom/banner_3_ar.jpg') }}" alt="Banner Image"></a>
                        </div>
                    </div>
                </div>
            </div>
        <!-- dynamic content -->
        <div class="products-area">
            <div class="row">
                <div class="col-md-12">
                    <div class="nav nav-pills" role="tablist">
                        <a class="nav-link nav-item nav-index active" href="http://demo.laravelcommerce.com/#featured" id="featured-tab" data-toggle="pill" role="tab" aria-controls="featured" aria-selected="true">Top Sales</a>
                        <a class="nav-link nav-item nav-index" href="http://demo.laravelcommerce.com/#special" id="special-tab" data-toggle="pill" role="tab" aria-controls="special" aria-selected="false">Special</a>
                        <a class="nav-link nav-item nav-index" href="http://demo.laravelcommerce.com/#liked" id="liked-tab" data-toggle="pill" role="tab" aria-controls="liked" aria-selected="false">Most Liked</a>
                    </div>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="overlay" style="display:none;"><img src="{{ asset('img/ecom/loader.gif') }}"></div>
                            <div role="tabpanel" class="tab-pane fade show active" id="featured" aria-labelledby="featured-tab">
                                <div id="owl_featured" class="owl-carousel owl_featured owl-loaded owl-drag">
                                    <div class="owl-stage-outer">
                                        <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 3120px;">
                                            <div class="owl-item active" style="width: 230px; margin-right: 10px;">
                                                <div class="product">
                                                    <article>
                                                        <div class="thumb"> 
                                                            <img class="img-fluid" src="{{ asset('img/ecom/1502174889.pPOLO2-26314766_standard_v400.jpg') }}" alt="CLASSIC FIT SOFT-TOUCH POLO">
                                                        </div>
						                                <span class="tag text-center">Men's Clothing</span>
                                                        <h2 class="title text-center">CLASSIC FIT SOFT-TOUCH POLO</h2>
                                                        <div class="price text-center">$85</div>
                                                        <div class="product-hover">
                     	                                    <div class="icons">
                                                                <div class="icon-liked">
                                                                    <span products_id="1" class="fa  fa-heart-o  is_liked">
                                                                        <span class="badge badge-secondary">8</span>
                                                                    </span>
                                                                </div>
                                                                <a href="http://demo.laravelcommerce.com/product-detail/classic-fit-soft-touch-polo" class="fa fa-eye"></a>
                                                            </div>
                                                            <div class="buttons">
                                                                <button class="btn btn-block btn-secondary cart" products_id="1">Add to Cart</button>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                            </div>
                                            <div class="owl-item active" style="width: 230px; margin-right: 10px;">
                                                <div class="product">
                                                    <article>
                                                        <div class="thumb"> 
                                                            <img class="img-fluid" src="{{ asset('img/ecom/1502181584.pPOLO2-26008953_standard_v400.jpg') }}" alt="STANDARD FIT COTTON POPOVER">
                                                        </div>
                                                        <span class="tag text-center">Men's Clothing</span>
                                                        <h2 class="title text-center">STANDARD FIT COTTON POPOVER</h2>
                                                        <div class="price text-center">$125.5</div>
                                                        <div class="product-hover">
                                                            <div class="icons">
                                                                <div class="icon-liked">
                                                                    <span products_id="8" class="fa  fa-heart-o  is_liked">
                                                                        <span class="badge badge-secondary">5</span>
                                                                    </span>
                                                                </div>
                                                                <a href="http://demo.laravelcommerce.com/product-detail/standard-fit-cotton-popover" class="fa fa-eye"></a>
                                                            </div>
                                                            <div class="buttons">
                                                                <button class="btn btn-block btn-secondary cart" products_id="8">Add to Cart</button>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                            </div>
                                            <div class="owl-item active" style="width: 230px; margin-right: 10px;">
                                                <div class="product">
                                                    <article>
                                                        <div class="thumb"> 
                                                            <img class="img-fluid" src="{{ asset('img/ecom/1502190187.pPOLO2-26315541_standard_v400.jpg') }}" alt="HAMPTON STRAIGHT FIT JEAN">
                                                        </div>
                                                        <span class="tag text-center">Men's Clothing</span>
                                                        <h2 class="title text-center">HAMPTON STRAIGHT FIT JEAN</h2>
                                                        <div class="price text-center"> $125</div>
                                                        <div class="product-hover">
                                                            <div class="icons">
                                                                <div class="icon-liked">
                                                                    <span products_id="13" class="fa  fa-heart-o  is_liked">
                                                                        <span class="badge badge-secondary">6</span>
                                                                    </span>
                                                                </div>
                                                                <a href="http://demo.laravelcommerce.com/product-detail/hampton-straight-fit-jean" class="fa fa-eye"></a>
                                                            </div>
                                                            <div class="buttons">
                                                                <button class="btn btn-block btn-secondary cart" products_id="13">Add to Cart</button>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                            </div>
                                            <div class="owl-item active" style="width: 230px; margin-right: 10px;">
                                                <div class="product">
                                                    <article>
                                                        <div class="thumb"> 
                                                            <img class="img-fluid" src="{{ asset('img/ecom/1502174364.pPOLO2-26314826_standard_v400.jpg') }}" alt="CLASSIC FIT COTTON POLO SHIRT">
                                                        </div>
                                                        <span class="tag text-center">Men's Clothing</span>
                                                        <h2 class="title text-center">CLASSIC FIT COTTON POLO SHIRT</h2>
                                                        <div class="price text-center">$85</div>
                                                        <div class="product-hover">
                                                            <div class="icons">
                                                                <div class="icon-liked">
                                                                    <span products_id="4" class="fa  fa-heart-o  is_liked">
                                                                        <span class="badge badge-secondary">4</span>
                                                                    </span>
                                                                </div>
                                                                <a href="http://demo.laravelcommerce.com/product-detail/classic-fit-cotton-polo-shirt" class="fa fa-eye"></a>
                                                            </div>
                                                            <div class="buttons">
                                                                    <button class="btn btn-block btn-secondary cart" products_id="4">Add to Cart</button>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                            </div>
                                            <div class="owl-item active" style="width: 230px; margin-right: 10px;">
                                                <div class="product">
                                                    <article>
                                                        <div class="thumb"> 
                                                            <img class="img-fluid" src="{{ asset('img/ecom/1502366105.pPOLO2-26091049_alternate1_v400.jpg') }}" alt="PLEATED MADRAS SKIRT">
                                                        </div>
                                                        <span class="tag text-center">Girl's Clothing</span>
                                                        <h2 class="title text-center">PLEATED MADRAS SKIRT</h2>
                                                        <div class="price text-center">$56.5</div>
                                                        <div class="product-hover">
                                                            <div class="icons">
                                                                <div class="icon-liked">
                                                                    <span products_id="77" class="fa  fa-heart-o  is_liked">
                                                                        <span class="badge badge-secondary">4</span>
                                                                    </span>
                                                                </div>
                                                                <a href="http://demo.laravelcommerce.com/product-detail/pleated-madras-skirt" class="fa fa-eye"></a>
                                                            </div>
                                                            <div class="buttons">
                                                                    <button class="btn btn-block btn-secondary cart" products_id="77">Add to Cart</button>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                            </div>
                                            <div class="owl-item" style="width: 230px; margin-right: 10px;">
                                                <div class="product">
                                                    <article>
                                                        <div class="thumb"> 
                                                            <img class="img-fluid" src="{{ asset('img/ecom/1502366686.pPOLO2-25207761_standard_v400.jpg') }}" alt="RUFFLED COTTON CARDIGAN">
                                                        </div>
                                                        <span class="tag text-center">Girl's Clothing</span>
                                                        <h2 class="title text-center">RUFFLED COTTON CARDIGAN</h2>
                                                        <div class="price text-center">$49.5</div>
                                                        <div class="product-hover">
                                                            <div class="icons">
                                                                <div class="icon-liked">
                                                                    <span products_id="81" class="fa  fa-heart-o  is_liked">
                                                                        <span class="badge badge-secondary">6</span>
                                                                    </span>
                                                                </div>
                                                                <a href="http://demo.laravelcommerce.com/product-detail/ruffled-cotton-cardigan" class="fa fa-eye"></a>
                                                            </div>
                                                            <div class="buttons">
                                                                <button class="btn btn-block btn-secondary cart" products_id="81">Add to Cart</button>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                            </div>
                                            <div class="owl-item" style="width: 230px; margin-right: 10px;">
                                                <div class="product">
                                                    <article>
                                                        <div class="thumb"> 
                                                            <img class="img-fluid" src="{{ asset('img/ecom/1502114036.pPOLO2-26316336_standard_v400.jpg') }}" alt="HAMPTON CLASSIC FIT SHIRT">
                                                        </div>
                                                        <span class="tag text-center">Men's Clothing</span>
                                                        <h2 class="title text-center">HAMPTON CLASSIC FIT SHIRT</h2>
                                                        <div class="price text-center">$98.5</div>
                                                        <div class="product-hover">
                                                            <div class="icons">
                                                                <div class="icon-liked">
                                                                    <span products_id="2" class="fa  fa-heart-o  is_liked">
                                                                        <span class="badge badge-secondary">5</span>
                                                                    </span>
                                                                </div>
                                                                <a href="http://demo.laravelcommerce.com/product-detail/hampton-classic-fit-shirt" class="fa fa-eye"></a>
                                                            </div>
                                                            <div class="buttons">
                                                                <button class="btn btn-block btn-secondary cart" products_id="2">Add to Cart</button>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                            </div>
                                            <div class="owl-item" style="width: 230px; margin-right: 10px;">
                                                <div class="product">
                                                    <article>
                                                        <div class="thumb"> 
                                                            <img class="img-fluid" src="{{ asset('img/ecom/1502176579.pPOLO2-26316348_standard_v400.jpg') }}" alt="CUSTOM SLIM FIT COTTON SHIRT">
                                                        </div>
                                                        <span class="tag text-center">Men's Clothing</span>
                                                        <h2 class="title text-center">CUSTOM SLIM FIT COTTON SHIRT</h2>
                                                        <div class="price text-center">$98.5</div>
                                                        <div class="product-hover">
                                                            <div class="icons">
                                                                <div class="icon-liked">
                                                                    <span products_id="5" class="fa  fa-heart-o  is_liked">
                                                                        <span class="badge badge-secondary">3</span>
                                                                    </span>
                                                                </div>
                                                                <a href="http://demo.laravelcommerce.com/product-detail/custom-slim-fit-cotton-shirt" class="fa fa-eye"></a>
                                                            </div>
                                                            <div class="buttons">
                                                                <button class="btn btn-block btn-secondary cart" products_id="5">Add to Cart</button>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                            </div>
                                            <div class="owl-item" style="width: 230px; margin-right: 10px;">
                                                <div class="product">
                                                    <article>
                                                        <div class="thumb"> 
                                                            <img class="img-fluid" src="{{ asset('img/ecom/1502177321.pPOLO2-26314634_standard_v400.jpg') }}" alt="CUSTOM SLIM FIT WEATHERED POLO">
                                                        </div>
                                                        <span class="tag text-center">Men's Clothing</span>
                                                        <h2 class="title text-center">CUSTOM SLIM FIT WEATHERED POLO</h2>
                                                        <div class="price text-center">$89.5</div>
                                                        <div class="product-hover">
                                                            <div class="icons">
                                                                <div class="icon-liked">
                                                                    <span products_id="6" class="fa  fa-heart-o  is_liked">
                                                                        <span class="badge badge-secondary">3</span>
                                                                    </span>
                                                                </div>
                                                                <a href="http://demo.laravelcommerce.com/product-detail/custom-slim-fit-weathered-polo" class="fa fa-eye"></a>
                                                            </div>
                                                            <div class="buttons">
                                                                <button class="btn btn-block btn-secondary cart" products_id="6">Add to Cart</button>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                            </div>
                                            <div class="owl-item" style="width: 230px; margin-right: 10px;">
                                                <div class="product">
                                                    <article>
                                                        <div class="thumb"> 
                                                            <img class="img-fluid" src="{{ asset('img/ecom/1502180946.pPOLO2-26008917_standard_v400.jpg') }}" alt="STANDARD FIT COTTON SHIRT">
                                                        </div>
                                                        <span class="tag text-center">Men's Clothing</span>
                                                        <h2 class="title text-center">STANDARD FIT COTTON SHIRT</h2>
                                                        <div class="price text-center"> $98.5</div>
                                                        <div class="product-hover">
                                                            <div class="icons">
                                                                <div class="icon-liked">
                                                                    <span products_id="7" class="fa  fa-heart-o  is_liked">
                                                                        <span class="badge badge-secondary">1</span>
                                                                    </span>
                                                                </div>
                                                                <a href="http://demo.laravelcommerce.com/product-detail/standard-fit-cotton-shirt" class="fa fa-eye"></a>
                                                            </div>
                                                            <div class="buttons">
                                                                <button class="btn btn-block btn-secondary cart" products_id="7">Add to Cart</button>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                            </div>
                                            <div class="owl-item" style="width: 230px; margin-right: 10px;"><div class="product">
                                                    <article>
                                                        <div class="thumb"> 
                                                            <img class="img-fluid" src="{{ asset('img/ecom/1502182426.pPOLO2-26008935_standard_v400.jpg') }}" alt="STANDARD FIT MADRAS POPOVER">
                                                        </div>
                                                        <span class="tag text-center">Men's Clothing</span>
                                                        <h2 class="title text-center">STANDARD FIT MADRAS POPOVER</h2>
                                                        <div class="price text-center">$89.5</div>
                                                        <div class="product-hover">
                                                            <div class="icons">
                                                                <div class="icon-liked">
                                                                    <span products_id="9" class="fa  fa-heart-o  is_liked">
                                                                        <span class="badge badge-secondary">4</span>
                                                                    </span>
                                                                </div>
                                                                <a href="http://demo.laravelcommerce.com/product-detail/standard-fit-madras-popover" class="fa fa-eye"></a>
                                                            </div>
                                                            <div class="buttons">
                                                                <button class="btn btn-block btn-secondary cart" products_id="9">Add to Cart</button>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                            </div>
                                            <div class="owl-item" style="width: 230px; margin-right: 10px;"><div class="product">
                                                    <article>
                                                        <div class="thumb"> 
                                                            <img class="img-fluid" src="{{ asset('img/ecom/1502186978.pPOLO2-26315018_standard_v400.jpg') }}" alt="STANDARD FIT COTTON WORKSHIRT">
                                                        </div>
                                                        <span class="tag text-center">
                                                        Men's Clothing                        </span>
                                                        <h2 class="title text-center">STANDARD FIT COTTON WORKSHIRT</h2>
                                                        <div class="price text-center">$165</div>
                                                        <div class="product-hover">
                                                            <div class="icons">
                                                                <div class="icon-liked">
                                                                    <span products_id="10" class="fa  fa-heart-o  is_liked">
                                                                        <span class="badge badge-secondary">0</span>
                                                                    </span>
                                                                </div>
                                                                <a href="http://demo.laravelcommerce.com/product-detail/standard-fit-cotton-workshirt" class="fa fa-eye"></a>
                                                            </div>
                                                            <div class="buttons">
                                                                <button class="btn btn-block btn-secondary cart" products_id="10">Add to Cart</button>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                            </div>
                                            <div class="owl-item" style="width: 230px; margin-right: 10px;">
                                                <div class="product last-product">
                                                    <article>
                                                        <a href="http://demo.laravelcommerce.com/shop?type=topseller" class="buttons">
                                                            <span class="fa fa-angle-right"></span>
                                                            <span class="btn btn-secondary">View All</span>
                                                        </a>
                                                    </article>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-nav">
                                        <div class="owl-prev disabled"><i class="fa fa-angle-left"></i></div>
                                        <div class="owl-next"><i class="fa fa-angle-right"></i></div>
                                    </div>
                                    <div class="owl-dots">
                                        <div class="owl-dot active"><span></span></div>
                                        <div class="owl-dot"><span></span></div>
                                        <div class="owl-dot"><span></span></div>
                                    </div>
                                </div>
                                <!-- 1st tab -->
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="special" aria-labelledby="special-tab">
                                <div id="owl_special" class="owl-carousel owl-loaded owl-drag">
                                    <div class="owl-stage-outer">
                                        <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s;">
                                            <div class="owl-item">
                                                <div class="product">
                                                    <article>
                  	                                    <div class="thumb">
                                                            <img class="img-fluid" src="{{ asset('img/ecom/1502366586.pPOLO2-25834797_standard_v400.jpg') }}" alt="FLAG COMBED COTTON SWEATER">
                                                        </div>
                                                        <span class="discount-tag">20%</span>                     
                                                        <span class="tag text-center">Girl's Clothing</span>
                                                        <h2 class="title text-center">FLAG COMBED COTTON SWEATER</h2>
                                                        <div class="price text-center">
                                                            $125
                                                            <span>$99.99</span>
                                                        </div>
                                                        <div class="product-hover">
                                                            <div class="icons">
                                                                <div class="icon-liked">
                                                                    <span products_id="80" class="fa  fa-heart-o  is_liked">
                                                                        <span class="badge badge-secondary">3</span>
                                                                    </span>
                                                                </div>
                                                                <a href="http://demo.laravelcommerce.com/product-detail/flag-combed-cotton-sweater" class="fa fa-eye"></a>
                                                            </div>
                                                            <div class="buttons">
                                                                    <button class="btn btn-block btn-secondary cart" products_id="80">Add to Cart</button>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                            </div>
                                            <div class="owl-item">
                                                <div class="product">
                                                    <article>
                                                        <div class="thumb">
                                                            <img class="img-fluid" src="{{ asset('img/ecom/1502364697.pPOLO2-23643008_standard_v400.jpg') }}" alt="COTTON CHINO BELTED SHIRTDRESS">
                                                        </div>
                                                        <span class="discount-tag">57%</span>                     
                                                        <span class="tag text-center"> Girl's Clothing</span>
                                                        <h2 class="title text-center">COTTON CHINO BELTED SHIRTDRESS</h2>
                                                        <div class="price text-center">
                                                            $55
                                                            <span>$23.5</span>
                                                        </div>
                                                        <div class="product-hover">
                                                            <div class="icons">
                                                                <div class="icon-liked">
                                                                    <span products_id="73" class="fa  fa-heart-o  is_liked">
                                                                        <span class="badge badge-secondary">4</span>
                                                                    </span>
                                                                </div>
                                                                <a href="http://demo.laravelcommerce.com/product-detail/cotton-chino-belted-shirtdress" class="fa fa-eye"></a>
                                                            </div>
                                                            <div class="buttons">
                                                                <button class="btn btn-block btn-secondary cart" products_id="73">Add to Cart</button>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                            </div>
                                            <div class="owl-item">
                                                <div class="product">
                                                    <article>
                                                        <div class="thumb">
                                                            <img class="img-fluid" src="{{ asset('img/ecom/1502363119.pPOLO2-25464682_standard_v400.jpg') }}" alt="PROPELL II SNEAKER">
                                                        </div>
                                                        <span class="discount-tag">46%</span>                     
                                                        <span class="tag text-center">Boy's Clothing</span>
                                                        <h2 class="title text-center">PROPELL II SNEAKER</h2>
                                                        <div class="price text-center">
                                                            $45
                                                            <span>$23.99</span>
                                                        </div>
                                                        <div class="product-hover">
                                                            <div class="icons">
                                                                <div class="icon-liked">
                                                                    <span products_id="70" class="fa  fa-heart-o  is_liked">
                                                                        <span class="badge badge-secondary">4</span>
                                                                    </span>
                                                                </div>
                                                                <a href="http://demo.laravelcommerce.com/product-detail/propell-ii-sneaker" class="fa fa-eye"></a>
                                                            </div>
                                                            <div class="buttons">
                                                                <button class="btn btn-block btn-secondary cart" products_id="70">Add to Cart</button>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                            </div>
                                            <div class="owl-item">
                                                <div class="product">
                                                    <article>
                                                        <div class="thumb">
                                                            <img class="img-fluid" src="{{ asset('img/ecom/1502362089.pPOLO2-14689748_standard_v400.jpg') }}" alt="POLO I WOOL TWILL SUIT">
                                                        </div>
                                                        <span class="discount-tag">19%</span>                     
                                                        <span class="tag text-center">Boy's Clothing</span>
                                                        <h2 class="title text-center">POLO I WOOL TWILL SUIT</h2>
                                                        <div class="price text-center">
                                                            $550
                                                            <span>$445</span>
                                                        </div>
                                                        <div class="product-hover">
                                                            <div class="icons">
                                                                <div class="icon-liked">
                                                                    <span products_id="67" class="fa  fa-heart-o  is_liked">
                                                                        <span class="badge badge-secondary">3</span>
                                                                    </span>
                                                                </div>
                                                                <a href="http://demo.laravelcommerce.com/product-detail/polo-i-wool-twill-suit" class="fa fa-eye"></a>
                                                            </div>
                                                            <div class="buttons">
                                                                <button class="btn btn-block btn-secondary cart" products_id="67">Add to Cart</button>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                            </div>
                                            <div class="owl-item">
                                                <div class="product">
                                                    <article>
                                                        <div class="thumb">
                                                            <img class="img-fluid" src="{{ asset('img/ecom/1502353123.pPOLO2-10531663_standard_v400.jpg') }}" alt="SLIM MOTT-WASH JEAN">
                                                        </div>
                                                        <span class="discount-tag">47%</span>                     
                                                        <span class="tag text-center">Boy's Clothing</span>
                                                        <h2 class="title text-center">SLIM MOTT-WASH JEAN</h2>
                                                        <div class="price text-center">
                                                            $45
                                                            <span>$23.5</span>
                                                        </div>
                                                        <div class="product-hover">
                                                            <div class="icons">
                                                                <div class="icon-liked">
                                                                    <span products_id="65" class="fa  fa-heart-o  is_liked">
                                                                        <span class="badge badge-secondary">3</span>
                                                                    </span>
                                                                </div>
                                                                <a href="http://demo.laravelcommerce.com/product-detail/slim-mott-wash-jean" class="fa fa-eye"></a>
                                                            </div>
                                                            <div class="buttons">
                                                                <button class="btn btn-block btn-secondary cart" products_id="65">Add to Cart</button>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                            </div>
                                            <div class="owl-item">
                                                <div class="product">
                                                    <article>
                                                        <div class="thumb">
                                                            <img class="img-fluid" src="{{ asset('img/ecom/1502351882.pPOLO2-24921004_standard_v400.jpg') }}" alt="COTTON MESH WORKSHIRT">
                                                        </div>
                                                        <span class="discount-tag">59%</span>                     
                                                        <span class="tag text-center">Boy's Clothing</span>
                                                        <h2 class="title text-center">COTTON MESH WORKSHIRT</h2>
                                                        <div class="price text-center">
                                                            $55
                                                            <span>$22.2</span>
                                                        </div>
                                                        <div class="product-hover">
                                                            <div class="icons">
                                                                <div class="icon-liked">
                                                                    <span products_id="62" class="fa  fa-heart-o  is_liked">
                                                                        <span class="badge badge-secondary">3</span>
                                                                    </span>
                                                                </div>
                                                                <a href="http://demo.laravelcommerce.com/product-detail/cotton-mesh-workshirt" class="fa fa-eye"></a>
                                                            </div>
                                                            <div class="buttons">
                                                                <button class="btn btn-block btn-secondary cart" products_id="62">Add to Cart</button>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                            </div>
                                            <div class="owl-item">
                                                <div class="product">
                                                    <article>
                                                        <div class="thumb">
                                                            <img class="img-fluid" src="{{ asset('img/ecom/1502274870.pPOLO2-25426585_alternate7_v360x480.jpg') }}" alt="RL Bowery Sateen Duvet Cover">
                                                        </div>
                                                        <span class="discount-tag">4%</span>                     
                                                        <span class="tag text-center">Household Merchandises</span>
                                                        <h2 class="title text-center">RL Bowery Sateen Duvet Cover</h2>
                                                        <div class="price text-center">
                                                            $470
                                                            <span>$450</span>
                                                        </div>
                                                        <div class="product-hover">
                                                            <div class="icons">
                                                                <div class="icon-liked">
                                                                    <span products_id="48" class="fa  fa-heart-o  is_liked">
                                                                        <span class="badge badge-secondary">2</span>
                                                                    </span>
                                                                </div>
                                                                <a href="http://demo.laravelcommerce.com/product-detail/rl-bowery-sateen-duvet-cover" class="fa fa-eye"></a>
                                                            </div>
                                                            <div class="buttons">
                                                                <button class="btn btn-block btn-secondary cart" products_id="48">Add to Cart</button>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                            </div>
                                            <div class="owl-item">
                                                <div class="product">
                                                    <article>
                                                        <div class="thumb">
                                                            <img class="img-fluid" src="{{ asset('img/ecom/1502268706.pPOLO2-25240665_standard_v400.jpg') }}" alt="RUFFLED FLORAL DRESS &amp; BLOOMER">
                                                        </div>
                                                        <span class="discount-tag">57%</span>                     
                                                        <span class="tag text-center">Baby &amp; Mother</span>
                                                        <h2 class="title text-center">RUFFLED FLORAL DRESS &amp; BLOOMER</h2>
                                                        <div class="price text-center">
                                                            $55.5
                                                            <span>$23.55</span>
                                                        </div>
                                                        <div class="product-hover">
                                                            <div class="icons">
                                                                <div class="icon-liked">
                                                                    <span products_id="44" class="fa  fa-heart-o  is_liked">
                                                                        <span class="badge badge-secondary">3</span>
                                                                    </span>
                                                                </div>
                                                                <a href="http://demo.laravelcommerce.com/product-detail/ruffled-floral-dress-bloomer" class="fa fa-eye"></a>
                                                            </div>
                                                            <div class="buttons">
                                                                <button class="btn btn-block btn-secondary cart" products_id="44">Add to Cart</button>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                            </div>
                                            <div class="owl-item">
                                                <div class="product">
                                                    <article>
                                                        <div class="thumb">
                                                            <img class="img-fluid" src="{{ asset('img/ecom/1502268005.pPOLO2-25655666_standard_v400.jpg') }}" alt="STRIPED POLO DRESS &amp; BLOOMER">
                                                        </div>
                                                        <span class="discount-tag">37%</span>                     
                                                        <span class="tag text-center">Baby &amp; Mother</span>
                                                        <h2 class="title text-center">STRIPED POLO DRESS &amp; BLOOMER</h2>
                                                        <div class="price text-center">
                                                            $35
                                                            <span>$21.99</span>
                                                        </div>
                                                        <div class="product-hover">
                                                            <div class="icons">
                                                                <div class="icon-liked">
                                                                    <span products_id="43" class="fa  fa-heart-o  is_liked">
                                                                        <span class="badge badge-secondary">4</span>
                                                                    </span>
                                                                </div>
                                                                <a href="http://demo.laravelcommerce.com/product-detail/striped-polo-dress-bloomer" class="fa fa-eye"></a>
                                                            </div>
                                                            <div class="buttons">
                                                                <button class="btn btn-block btn-secondary cart" products_id="43">Add to Cart</button>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                            </div>
                                            <div class="owl-item">
                                                <div class="product">
                                                    <article>
                                                        <div class="thumb">
                                                            <img class="img-fluid" src="{{ asset('img/ecom/1502264917.pPOLO2-21465903_lifestyle_v400.jpg') }}" alt="STRIPED COTTON HENLEY COVERALL">
                                                        </div>
                                                        <span class="discount-tag">5%</span>                     
                                                        <span class="tag text-center">Baby &amp; Mother</span>
                                                        <h2 class="title text-center">STRIPED COTTON HENLEY COVERALL</h2>
                                                        <div class="price text-center">
                                                            $29.5
                                                            <span>$27.85</span>
                                                        </div>
                                                        <div class="product-hover">
                                                            <div class="icons">
                                                                <div class="icon-liked">
                                                                    <span products_id="39" class="fa  fa-heart-o  is_liked">
                                                                        <span class="badge badge-secondary">2</span>
                                                                    </span>
                                                                </div>
                                                                <a href="http://demo.laravelcommerce.com/product-detail/striped-cotton-henley-coverall" class="fa fa-eye"></a>
                                                            </div>
                                                            <div class="buttons">
                                                                <button class="btn btn-block btn-secondary cart" products_id="39">Add to Cart</button>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                            </div>
                                            <div class="owl-item">
                                                <div class="product">
                                                    <article>
                                                        <div class="thumb">
                                                            <img class="img-fluid" src="{{ asset('img/ecom/1502195102.pPOLO2-25759495_alternate1_v400.jpg') }}" alt="MADRAS FIT-AND-FLARE DRESS">
                                                        </div>
                                                        <span class="discount-tag">41%</span>                     
                                                        <span class="tag text-center">Women's Clothing</span>
                                                        <h2 class="title text-center">MADRAS FIT-AND-FLARE DRESS</h2>
                                                        <div class="price text-center">
                                                            $258
                                                            <span>$150</span>
                                                        </div>
                                                        <div class="product-hover">
                                                            <div class="icons">
                                                                <div class="icon-liked">
                                                                    <span products_id="25" class="fa  fa-heart-o  is_liked">
                                                                        <span class="badge badge-secondary">0</span>
                                                                    </span>
                                                                </div>
                                                                <a href="http://demo.laravelcommerce.com/product-detail/madras-fit-and-flare-dress" class="fa fa-eye"></a>
                                                            </div>
                                                            <div class="buttons">
                                                                <button class="btn btn-block btn-secondary cart" products_id="25">Add to Cart</button>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                            </div>
                
                                            <div class="owl-item">
                                                <div class="product last-product">
                                                    <article>
                                                        <a href="http://demo.laravelcommerce.com/shop?type=special" class="buttons">
                                                            <span class="fa fa-angle-right"></span>
                                                            <span class="btn btn-secondary">View All</span>
                                                        </a>
                                                    </article>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-nav">
                                        <div class="owl-prev disabled"><i class="fa fa-angle-left"></i></div>
                                        <div class="owl-next"><i class="fa fa-angle-right"></i></div>
                                    </div>
                                    <div class="owl-dots">
                                        <div class="owl-dot active"><span></span></div>
                                        <div class="owl-dot"><span></span></div>
                                        <div class="owl-dot"><span></span></div>
                                    </div>
                                </div>
                            </div>

            <div role="tabpanel" class="tab-pane fade" id="liked" aria-labelledby="liked-tab">
              <div id="owl_liked" class="owl-carousel owl-loaded owl-drag">













                                <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s;"><div class="owl-item"><div class="product">
                  <article>
                  	<div class="thumb"><img class="img-fluid" src="{{ asset('img/ecom/1502174889.pPOLO2-26314766_standard_v400.jpg') }}" alt="CLASSIC FIT SOFT-TOUCH POLO"></div>
                                        <span class="tag text-center">
                    	Men's Clothing                    </span>

                    <h2 class="title text-center">CLASSIC FIT SOFT-TOUCH POLO</h2>

                    <div class="price text-center">
                                            	$85

                    </div>

                    <div class="product-hover">
                     	<div class="icons">
                        	<div class="icon-liked">

                            	<span products_id="1" class="fa  fa-heart-o  is_liked"><span class="badge badge-secondary">8</span></span>
                            </div>

                            <a href="http://demo.laravelcommerce.com/product-detail/classic-fit-soft-touch-polo" class="fa fa-eye"></a>
                        </div>

                        <div class="buttons">
                        	                                <button class="btn btn-block btn-secondary cart" products_id="1">Add to Cart</button>
                                                    </div>
                     </div>

					</article>
                </div></div><div class="owl-item"><div class="product">
                  <article>
                  	<div class="thumb"><img class="img-fluid" src="{{ asset('img/ecom/1502366342.pPOLO2-26090785_standard_v400.jpg') }}" alt="CABLE-KNIT CASHMERE SWEATER"></div>
                                        <span class="tag text-center">
                    	Girl's Clothing                    </span>

                    <h2 class="title text-center">CABLE-KNIT CASHMERE SWEATER</h2>

                    <div class="price text-center">
                                            	$195

                    </div>

                    <div class="product-hover">
                     	<div class="icons">
                        	<div class="icon-liked">

                            	<span products_id="78" class="fa  fa-heart-o  is_liked"><span class="badge badge-secondary">8</span></span>
                            </div>

                            <a href="http://demo.laravelcommerce.com/product-detail/cable-knit-cashmere-sweater" class="fa fa-eye"></a>
                        </div>

                        <div class="buttons">
                        	                                <button class="btn btn-block btn-secondary cart" products_id="78">Add to Cart</button>
                                                    </div>
                     </div>

					</article>
                </div></div><div class="owl-item"><div class="product">
                  <article>
                  	<div class="thumb"><img class="img-fluid" src="{{ asset('img/ecom/1502365515.pPOLO2-26091862_alternate1_v400.jpg') }}" alt="FLORAL SKIRT"></div>
                                        <span class="tag text-center">
                    	Girl's Clothing                    </span>

                    <h2 class="title text-center">FLORAL SKIRT</h2>

                    <div class="price text-center">
                                            	$49.5

                    </div>

                    <div class="product-hover">
                     	<div class="icons">
                        	<div class="icon-liked">

                            	<span products_id="76" class="fa  fa-heart-o  is_liked"><span class="badge badge-secondary">7</span></span>
                            </div>

                            <a href="http://demo.laravelcommerce.com/product-detail/floral-skirt" class="fa fa-eye"></a>
                        </div>

                        <div class="buttons">
                        	                                <button class="btn btn-block btn-secondary cart" products_id="76">Add to Cart</button>
                                                    </div>
                     </div>

					</article>
                </div></div><div class="owl-item"><div class="product">
                  <article>
                  	<div class="thumb"><img class="img-fluid" src="{{ asset('img/ecom/1502190187.pPOLO2-26315541_standard_v400.jpg') }}" alt="HAMPTON STRAIGHT FIT JEAN"></div>
                                        <span class="tag text-center">
                    	Men's Clothing                    </span>

                    <h2 class="title text-center">HAMPTON STRAIGHT FIT JEAN</h2>

                    <div class="price text-center">
                                            	$125

                    </div>

                    <div class="product-hover">
                     	<div class="icons">
                        	<div class="icon-liked">

                            	<span products_id="13" class="fa  fa-heart-o  is_liked"><span class="badge badge-secondary">6</span></span>
                            </div>

                            <a href="http://demo.laravelcommerce.com/product-detail/hampton-straight-fit-jean" class="fa fa-eye"></a>
                        </div>

                        <div class="buttons">
                        	                                <button class="btn btn-block btn-secondary cart" products_id="13">Add to Cart</button>
                                                    </div>
                     </div>

					</article>
                </div></div><div class="owl-item"><div class="product">
                  <article>
                  	<div class="thumb"><img class="img-fluid" src="{{ asset('img/ecom/1502191568.pPOLO2-26256404_standard_v400.jpg') }}" alt="DILLIAN II SUEDE CHELSEA BOOT"></div>
                                        <span class="tag text-center">
                    	Men's Clothing                    </span>

                    <h2 class="title text-center">DILLIAN II SUEDE CHELSEA BOOT</h2>

                    <div class="price text-center">
                                            	$275

                    </div>

                    <div class="product-hover">
                     	<div class="icons">
                        	<div class="icon-liked">

                            	<span products_id="17" class="fa  fa-heart-o  is_liked"><span class="badge badge-secondary">6</span></span>
                            </div>

                            <a href="http://demo.laravelcommerce.com/product-detail/dillian-ii-suede-chelsea-boot" class="fa fa-eye"></a>
                        </div>

                        <div class="buttons">
                        	                                <button class="btn btn-block btn-secondary cart" products_id="17">Add to Cart</button>
                                                    </div>
                     </div>

					</article>
                </div></div><div class="owl-item"><div class="product">
                  <article>
                  	<div class="thumb"><img class="img-fluid" src="{{ asset('img/ecom/1502366686.pPOLO2-25207761_standard_v400.jpg') }}" alt="RUFFLED COTTON CARDIGAN"></div>
                                        <span class="tag text-center">
                    	Girl's Clothing                    </span>

                    <h2 class="title text-center">RUFFLED COTTON CARDIGAN</h2>

                    <div class="price text-center">
                                            	$49.5

                    </div>

                    <div class="product-hover">
                     	<div class="icons">
                        	<div class="icon-liked">

                            	<span products_id="81" class="fa  fa-heart-o  is_liked"><span class="badge badge-secondary">6</span></span>
                            </div>

                            <a href="http://demo.laravelcommerce.com/product-detail/ruffled-cotton-cardigan" class="fa fa-eye"></a>
                        </div>

                        <div class="buttons">
                        	                                <button class="btn btn-block btn-secondary cart" products_id="81">Add to Cart</button>
                                                    </div>
                     </div>

					</article>
                </div></div><div class="owl-item"><div class="product">
                  <article>
                  	<div class="thumb"><img class="img-fluid" src="{{ asset('img/ecom/1502114036.pPOLO2-26316336_standard_v400.jpg') }}" alt="HAMPTON CLASSIC FIT SHIRT"></div>
                                        <span class="tag text-center">
                    	Men's Clothing                    </span>

                    <h2 class="title text-center">HAMPTON CLASSIC FIT SHIRT</h2>

                    <div class="price text-center">
                                            	$98.5

                    </div>

                    <div class="product-hover">
                     	<div class="icons">
                        	<div class="icon-liked">

                            	<span products_id="2" class="fa  fa-heart-o  is_liked"><span class="badge badge-secondary">5</span></span>
                            </div>

                            <a href="http://demo.laravelcommerce.com/product-detail/hampton-classic-fit-shirt" class="fa fa-eye"></a>
                        </div>

                        <div class="buttons">
                        	                                <button class="btn btn-block btn-secondary cart" products_id="2">Add to Cart</button>
                                                    </div>
                     </div>

					</article>
                </div></div><div class="owl-item"><div class="product">
                  <article>
                  	<div class="thumb"><img class="img-fluid" src="{{ asset('img/ecom/1502181584.pPOLO2-26008953_standard_v400.jpg') }}" alt="STANDARD FIT COTTON POPOVER"></div>
                                        <span class="tag text-center">
                    	Men's Clothing                    </span>

                    <h2 class="title text-center">STANDARD FIT COTTON POPOVER</h2>

                    <div class="price text-center">
                                            	$125.5

                    </div>

                    <div class="product-hover">
                     	<div class="icons">
                        	<div class="icon-liked">

                            	<span products_id="8" class="fa  fa-heart-o  is_liked"><span class="badge badge-secondary">5</span></span>
                            </div>

                            <a href="http://demo.laravelcommerce.com/product-detail/standard-fit-cotton-popover" class="fa fa-eye"></a>
                        </div>

                        <div class="buttons">
                        	                                <button class="btn btn-block btn-secondary cart" products_id="8">Add to Cart</button>
                                                    </div>
                     </div>

					</article>
                </div></div><div class="owl-item"><div class="product">
                  <article>
                  	<div class="thumb"><img class="img-fluid" src="{{ asset('img/ecom/1502174364.pPOLO2-26314826_standard_v400.jpg') }}" alt="CLASSIC FIT COTTON POLO SHIRT"></div>
                                        <span class="tag text-center">
                    	Men's Clothing                    </span>

                    <h2 class="title text-center">CLASSIC FIT COTTON POLO SHIRT</h2>

                    <div class="price text-center">
                                            	$85

                    </div>

                    <div class="product-hover">
                     	<div class="icons">
                        	<div class="icon-liked">

                            	<span products_id="4" class="fa  fa-heart-o  is_liked"><span class="badge badge-secondary">4</span></span>
                            </div>

                            <a href="http://demo.laravelcommerce.com/product-detail/classic-fit-cotton-polo-shirt" class="fa fa-eye"></a>
                        </div>

                        <div class="buttons">
                        	                                <button class="btn btn-block btn-secondary cart" products_id="4">Add to Cart</button>
                                                    </div>
                     </div>

					</article>
                </div></div><div class="owl-item"><div class="product">
                  <article>
                  	<div class="thumb"><img class="img-fluid" src="{{ asset('img/ecom/1502182426.pPOLO2-26008935_standard_v400.jpg') }}" alt="STANDARD FIT MADRAS POPOVER"></div>
                                        <span class="tag text-center">
                    	Men's Clothing                    </span>

                    <h2 class="title text-center">STANDARD FIT MADRAS POPOVER</h2>

                    <div class="price text-center">
                                            	$89.5

                    </div>

                    <div class="product-hover">
                     	<div class="icons">
                        	<div class="icon-liked">

                            	<span products_id="9" class="fa  fa-heart-o  is_liked"><span class="badge badge-secondary">4</span></span>
                            </div>

                            <a href="http://demo.laravelcommerce.com/product-detail/standard-fit-madras-popover" class="fa fa-eye"></a>
                        </div>

                        <div class="buttons">
                        	                                <button class="btn btn-block btn-secondary cart" products_id="9">Add to Cart</button>
                                                    </div>
                     </div>

					</article>
                </div></div><div class="owl-item"><div class="product">
                  <article>
                  	<div class="thumb"><img class="img-fluid" src="{{ asset('img/ecom/1502268005.pPOLO2-25655666_standard_v400.jpg') }}" alt="STRIPED POLO DRESS &amp; BLOOMER"></div>
                    <span class="discount-tag">37%</span>                    <span class="tag text-center">
                    	Baby &amp; Mother                    </span>

                    <h2 class="title text-center">STRIPED POLO DRESS &amp; BLOOMER</h2>

                    <div class="price text-center">
                                            	$21.99 <span>$35</span>
                    </div>

                    <div class="product-hover">
                     	<div class="icons">
                        	<div class="icon-liked">

                            	<span products_id="43" class="fa  fa-heart-o  is_liked"><span class="badge badge-secondary">4</span></span>
                            </div>

                            <a href="http://demo.laravelcommerce.com/product-detail/striped-polo-dress-bloomer" class="fa fa-eye"></a>
                        </div>

                        <div class="buttons">
                        	                                <button class="btn btn-block btn-secondary cart" products_id="43">Add to Cart</button>
                                                    </div>
                     </div>

					</article>
                </div></div><div class="owl-item"><div class="product">
                  <article>
                  	<div class="thumb"><img class="img-fluid" src="{{ asset('img/ecom/1502363119.pPOLO2-25464682_standard_v400.jpg') }}" alt="PROPELL II SNEAKER"></div>
                    <span class="discount-tag">46%</span>                    <span class="tag text-center">
                    	Boy's Clothing                    </span>

                    <h2 class="title text-center">PROPELL II SNEAKER</h2>

                    <div class="price text-center">
                                            	$23.99 <span>$45</span>
                    </div>

                    <div class="product-hover">
                     	<div class="icons">
                        	<div class="icon-liked">

                            	<span products_id="70" class="fa  fa-heart-o  is_liked"><span class="badge badge-secondary">4</span></span>
                            </div>

                            <a href="http://demo.laravelcommerce.com/product-detail/propell-ii-sneaker" class="fa fa-eye"></a>
                        </div>

                        <div class="buttons">
                        	                                <button class="btn btn-block btn-secondary cart" products_id="70">Add to Cart</button>
                                                    </div>
                     </div>

					</article>
                </div></div><div class="owl-item"><div class="product last-product">
                      <article>
                      	<a href="http://demo.laravelcommerce.com/shop?type=mostliked" class="buttons">
                        	<span class="fa fa-angle-right"></span>
                        	<span class="btn btn-secondary">View All</span>
                        </a>
                      </article>
                    </div></div></div></div><div class="owl-nav"><div class="owl-prev disabled"><i class="fa fa-angle-left"></i></div><div class="owl-next"><i class="fa fa-angle-right"></i></div></div><div class="owl-dots"><div class="owl-dot active"><span></span></div><div class="owl-dot"><span></span></div><div class="owl-dot"><span></span></div></div></div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- ./end of dynamic content -->
  </div>
</section>

<section class="products-content"> <div class="container-fuild">
  <div class="container">
    <div class="products-area">
		<!-- heading -->

        <div class="heading">
        <h2>Top Selling of the Week <small class="pull-right"><a href="http://demo.laravelcommerce.com/shop?type=topseller">View All</a></small></h2>
        <hr>
        </div>
      	<div class="row">
        	<div class="col-xs-12 col-sm-12">
            	<!-- Items -->
                <div class="row">
                  	<div class="products products-5x">


                    <div class="product product-2x">
                        <span class="product-featured-tag"><i class="fa fa-flag-o" aria-hidden="true"></i>&nbsp;Featured</span>
                        <div class="buttons-liked">

                            <span products_id="17" class="fa  fa-heart-o  is_liked">
                            	<span class="badge badge-secondary">6</span>
                            </span>
                        </div>

                        <article>
                            <div class="thumb"><img class="img-fluid" src="{{ asset('img/ecom/1502191568.pPOLO2-26256404_standard_v400.jpg') }}" alt="DILLIAN II SUEDE CHELSEA BOOT"></div>
                            <span class="tag">Men's Clothing</span>
                            <h2 class="title">DILLIAN II SUEDE CHELSEA BOOT</h2>
                            <div class="price">

                                    $275

                                                            </div>
                            <div class="block">





                                    <span class="option-name">Colors</span>


                                    <span class="option-value">Black</span>







                                    <span class="option-name">Size</span>


                                    <span class="option-value">7D</span>


                                    <span class="option-value">|</span>



                                    <span class="option-value">8D</span>





                            </div>

                            <div class="buttons">
                            	<a href="http://demo.laravelcommerce.com/#" class="btn btn-secondary">Add to Cart</a>
                            	<a href="http://demo.laravelcommerce.com/product-detail/dillian-ii-suede-chelsea-boot" class="btn btn-dark">View Detail</a>
                            </div>
                        </article>
                    </div>



                    <!-- Product sold -->


                                                    <div class="product">
                              <article>
                                <div class="thumb"> <img class="img-fluid" src="{{ asset('img/ecom/1502366686.pPOLO2-25207761_standard_v400.jpg') }}" alt="RUFFLED COTTON CARDIGAN"> </div>
                                                                        <span class="tag text-center">
                                        Girl's Clothing                                    </span>

                                    <h2 class="title text-center">RUFFLED COTTON CARDIGAN</h2>
                                    <div class="price text-center">
                                        $49.5
                                                                            </div>

                                    <div class="product-hover">
                                        <div class="icons">
                                            <div class="icon-liked">
                                                <span products_id="81" class="fa  fa-heart-o  is_liked"><span class="badge badge-secondary">6</span></span>
                                            </div>

                                            <a href="http://demo.laravelcommerce.com/product-detail/ruffled-cotton-cardigan" class="fa fa-eye"></a>
                                        </div>

                                       	<div class="buttons">

                                                <button class="btn btn-block btn-secondary cart" products_id="81">Add to Cart</button>
                                                                                    </div>

                                     </div>
                                </article>
                            </div>



                                                    <div class="product">
                              <article>
                                <div class="thumb"> <img class="img-fluid" src="{{ asset('img/ecom/1502190187.pPOLO2-26315541_standard_v400.jpg') }}" alt="HAMPTON STRAIGHT FIT JEAN"> </div>
                                                                        <span class="tag text-center">
                                        Men's Clothing                                    </span>

                                    <h2 class="title text-center">HAMPTON STRAIGHT FIT JEAN</h2>
                                    <div class="price text-center">
                                        $125
                                                                            </div>

                                    <div class="product-hover">
                                        <div class="icons">
                                            <div class="icon-liked">
                                                <span products_id="13" class="fa  fa-heart-o  is_liked"><span class="badge badge-secondary">6</span></span>
                                            </div>

                                            <a href="http://demo.laravelcommerce.com/product-detail/hampton-straight-fit-jean" class="fa fa-eye"></a>
                                        </div>

                                       	<div class="buttons">

                                                <button class="btn btn-block btn-secondary cart" products_id="13">Add to Cart</button>
                                                                                    </div>

                                     </div>
                                </article>
                            </div>



                                                    <div class="product">
                              <article>
                                <div class="thumb"> <img class="img-fluid" src="{{ asset('img/ecom/1502364697.pPOLO2-23643008_standard_v400.jpg') }}" alt="COTTON CHINO BELTED SHIRTDRESS"> </div>
                                    <span class="discount-tag">57%</span>                                    <span class="tag text-center">
                                        Girl's Clothing                                    </span>

                                    <h2 class="title text-center">COTTON CHINO BELTED SHIRTDRESS</h2>
                                    <div class="price text-center">
                                        $23.5 <span>$55</span>                                     </div>

                                    <div class="product-hover">
                                        <div class="icons">
                                            <div class="icon-liked">
                                                <span products_id="73" class="fa  fa-heart-o  is_liked"><span class="badge badge-secondary">4</span></span>
                                            </div>

                                            <a href="http://demo.laravelcommerce.com/product-detail/cotton-chino-belted-shirtdress" class="fa fa-eye"></a>
                                        </div>

                                       	<div class="buttons">

                                                <button class="btn btn-block btn-secondary cart" products_id="73">Add to Cart</button>
                                                                                    </div>

                                     </div>
                                </article>
                            </div>



                                        </div>
                </div>
            </div>
      	</div>
    </div>

    <div class="group-banners">
    	<div class="row">
        	<div class="col-xs-12 col-md-12">
            	<div class="banner-image en">
                    <a title="Banner Image" href="http://demo.laravelcommerce.com/#"><img class="img-fluid" src="{{ asset('img/ecom/sale_banners_en.jpg') }}" alt="Banner Image"></a>
                </div>
                <div class="banner-image ar">
                    <a title="Banner Image" href="http://demo.laravelcommerce.com/#"><img class="img-fluid" src="{{ asset('img/ecom/sale_banners_ar.jpg') }}" alt="Banner Image"></a>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>

<div class="container-fuild">
  <div class="container">
    <div class="products-area">
        <!-- heading -->
        <div class="heading">
        	<h2>Special Products of the Week <small class="pull-right"><a href="http://demo.laravelcommerce.com/shop?type=special">View All</a></small></h2>
        	<hr>
        </div>
        <div class="row">

            <div class="col-xs-12 col-sm-12">
                <div class="row">
                	<!-- Items -->
                    <div class="products products-5x">
                        <!-- Product -->

                                                                                                <div class="product">
                          <article>
                            <div class="thumb"><img class="img-fluid" src="{{ asset('img/ecom/1502366586.pPOLO2-25834797_standard_v400.jpg') }}" alt="FLAG COMBED COTTON SWEATER"></div>
                            <span class="discount-tag">20%</span>                            <span class="tag text-center">
                                Girl's Clothing                            </span>
                            <h2 class="title text-center">FLAG COMBED COTTON SWEATER</h2>

                            <div class="price text-center">
                            $125<span>$99.99</span></div>
                            <div class="product-hover">
                                <div class="icons">
                                    <div class="icon-liked">
                                        <span products_id="80" class="fa  fa-heart-o  is_liked"><span class="badge badge-secondary">3</span></span>
                                    </div>

                                    <a href="http://demo.laravelcommerce.com/product-detail/flag-combed-cotton-sweater" class="fa fa-eye"></a>
                                </div>

                                <div class="buttons">

                                        <button class="btn btn-block btn-secondary cart" products_id="80">Add to Cart</button>

                                                                    </div>

                             </div>
                          </article>
                        </div>
                                                                                                <div class="product">
                          <article>
                            <div class="thumb"><img class="img-fluid" src="{{ asset('img/ecom/1502364697.pPOLO2-23643008_standard_v400.jpg') }}" alt="COTTON CHINO BELTED SHIRTDRESS"></div>
                            <span class="discount-tag">57%</span>                            <span class="tag text-center">
                                Girl's Clothing                            </span>
                            <h2 class="title text-center">COTTON CHINO BELTED SHIRTDRESS</h2>

                            <div class="price text-center">
                            $55<span>$23.5</span></div>
                            <div class="product-hover">
                                <div class="icons">
                                    <div class="icon-liked">
                                        <span products_id="73" class="fa  fa-heart-o  is_liked"><span class="badge badge-secondary">4</span></span>
                                    </div>

                                    <a href="http://demo.laravelcommerce.com/product-detail/cotton-chino-belted-shirtdress" class="fa fa-eye"></a>
                                </div>

                                <div class="buttons">

                                        <button class="btn btn-block btn-secondary cart" products_id="73">Add to Cart</button>

                                                                    </div>

                             </div>
                          </article>
                        </div>
                                                                                                <div class="product">
                          <article>
                            <div class="thumb"><img class="img-fluid" src="{{ asset('img/ecom/1502363119.pPOLO2-25464682_standard_v400.jpg') }}" alt="PROPELL II SNEAKER"></div>
                            <span class="discount-tag">46%</span>                            <span class="tag text-center">
                                Boy's Clothing                            </span>
                            <h2 class="title text-center">PROPELL II SNEAKER</h2>

                            <div class="price text-center">
                            $45<span>$23.99</span></div>
                            <div class="product-hover">
                                <div class="icons">
                                    <div class="icon-liked">
                                        <span products_id="70" class="fa  fa-heart-o  is_liked"><span class="badge badge-secondary">4</span></span>
                                    </div>

                                    <a href="http://demo.laravelcommerce.com/product-detail/propell-ii-sneaker" class="fa fa-eye"></a>
                                </div>

                                <div class="buttons">

                                        <button class="btn btn-block btn-secondary cart" products_id="70">Add to Cart</button>

                                                                    </div>

                             </div>
                          </article>
                        </div>
                                                                                                <div class="product">
                          <article>
                            <div class="thumb"><img class="img-fluid" src="{{ asset('img/ecom/1502362089.pPOLO2-14689748_standard_v400.jpg') }}" alt="POLO I WOOL TWILL SUIT"></div>
                            <span class="discount-tag">19%</span>                            <span class="tag text-center">
                                Boy's Clothing                            </span>
                            <h2 class="title text-center">POLO I WOOL TWILL SUIT</h2>

                            <div class="price text-center">
                            $550<span>$445</span></div>
                            <div class="product-hover">
                                <div class="icons">
                                    <div class="icon-liked">
                                        <span products_id="67" class="fa  fa-heart-o  is_liked"><span class="badge badge-secondary">3</span></span>
                                    </div>

                                    <a href="http://demo.laravelcommerce.com/product-detail/polo-i-wool-twill-suit" class="fa fa-eye"></a>
                                </div>

                                <div class="buttons">

                                        <button class="btn btn-block btn-secondary cart" products_id="67">Add to Cart</button>

                                                                    </div>

                             </div>
                          </article>
                        </div>
                                                                                                <div class="product">
                          <article>
                            <div class="thumb"><img class="img-fluid" src="{{ asset('img/ecom/1502353123.pPOLO2-10531663_standard_v400.jpg') }}" alt="SLIM MOTT-WASH JEAN"></div>
                            <span class="discount-tag">47%</span>                            <span class="tag text-center">
                                Boy's Clothing                            </span>
                            <h2 class="title text-center">SLIM MOTT-WASH JEAN</h2>

                            <div class="price text-center">
                            $45<span>$23.5</span></div>
                            <div class="product-hover">
                                <div class="icons">
                                    <div class="icon-liked">
                                        <span products_id="65" class="fa  fa-heart-o  is_liked"><span class="badge badge-secondary">3</span></span>
                                    </div>

                                    <a href="http://demo.laravelcommerce.com/product-detail/slim-mott-wash-jean" class="fa fa-eye"></a>
                                </div>

                                <div class="buttons">

                                        <button class="btn btn-block btn-secondary cart" products_id="65">Add to Cart</button>

                                                                    </div>

                             </div>
                          </article>
                        </div>
                                                                                                <div class="product">
                          <article>
                            <div class="thumb"><img class="img-fluid" src="{{ asset('img/ecom/1502351882.pPOLO2-24921004_standard_v400.jpg') }}" alt="COTTON MESH WORKSHIRT"></div>
                            <span class="discount-tag">59%</span>                            <span class="tag text-center">
                                Boy's Clothing                            </span>
                            <h2 class="title text-center">COTTON MESH WORKSHIRT</h2>

                            <div class="price text-center">
                            $55<span>$22.2</span></div>
                            <div class="product-hover">
                                <div class="icons">
                                    <div class="icon-liked">
                                        <span products_id="62" class="fa  fa-heart-o  is_liked"><span class="badge badge-secondary">3</span></span>
                                    </div>

                                    <a href="http://demo.laravelcommerce.com/product-detail/cotton-mesh-workshirt" class="fa fa-eye"></a>
                                </div>

                                <div class="buttons">

                                        <button class="btn btn-block btn-secondary cart" products_id="62">Add to Cart</button>

                                                                    </div>

                             </div>
                          </article>
                        </div>
                                                                                                <div class="product">
                          <article>
                            <div class="thumb"><img class="img-fluid" src="{{ asset('img/ecom/1502274870.pPOLO2-25426585_alternate7_v360x480.jpg') }}" alt="RL Bowery Sateen Duvet Cover"></div>
                            <span class="discount-tag">4%</span>                            <span class="tag text-center">
                                Household Merchandises                            </span>
                            <h2 class="title text-center">RL Bowery Sateen Duvet Cover</h2>

                            <div class="price text-center">
                            $470<span>$450</span></div>
                            <div class="product-hover">
                                <div class="icons">
                                    <div class="icon-liked">
                                        <span products_id="48" class="fa  fa-heart-o  is_liked"><span class="badge badge-secondary">2</span></span>
                                    </div>

                                    <a href="http://demo.laravelcommerce.com/product-detail/rl-bowery-sateen-duvet-cover" class="fa fa-eye"></a>
                                </div>

                                <div class="buttons">

                                        <button class="btn btn-block btn-secondary cart" products_id="48">Add to Cart</button>

                                                                    </div>

                             </div>
                          </article>
                        </div>
                                                                                                <div class="product">
                          <article>
                            <div class="thumb"><img class="img-fluid" src="{{ asset('img/ecom/1502268706.pPOLO2-25240665_standard_v400.jpg') }}" alt="RUFFLED FLORAL DRESS &amp; BLOOMER"></div>
                            <span class="discount-tag">57%</span>                            <span class="tag text-center">
                                Baby &amp; Mother                            </span>
                            <h2 class="title text-center">RUFFLED FLORAL DRESS &amp; BLOOMER</h2>

                            <div class="price text-center">
                            $55.5<span>$23.55</span></div>
                            <div class="product-hover">
                                <div class="icons">
                                    <div class="icon-liked">
                                        <span products_id="44" class="fa  fa-heart-o  is_liked"><span class="badge badge-secondary">3</span></span>
                                    </div>

                                    <a href="http://demo.laravelcommerce.com/product-detail/ruffled-floral-dress-bloomer" class="fa fa-eye"></a>
                                </div>

                                <div class="buttons">

                                        <button class="btn btn-block btn-secondary cart" products_id="44">Add to Cart</button>

                                                                    </div>

                             </div>
                          </article>
                        </div>
                                                                                                <div class="product">
                          <article>
                            <div class="thumb"><img class="img-fluid" src="{{ asset('img/ecom/1502268005.pPOLO2-25655666_standard_v400.jpg') }}" alt="STRIPED POLO DRESS &amp; BLOOMER"></div>
                            <span class="discount-tag">37%</span>                            <span class="tag text-center">
                                Baby &amp; Mother                            </span>
                            <h2 class="title text-center">STRIPED POLO DRESS &amp; BLOOMER</h2>

                            <div class="price text-center">
                            $35<span>$21.99</span></div>
                            <div class="product-hover">
                                <div class="icons">
                                    <div class="icon-liked">
                                        <span products_id="43" class="fa  fa-heart-o  is_liked"><span class="badge badge-secondary">4</span></span>
                                    </div>

                                    <a href="http://demo.laravelcommerce.com/product-detail/striped-polo-dress-bloomer" class="fa fa-eye"></a>
                                </div>

                                <div class="buttons">

                                        <button class="btn btn-block btn-secondary cart" products_id="43">Add to Cart</button>

                                                                    </div>

                             </div>
                          </article>
                        </div>
                                                                                                <div class="product">
                          <article>
                            <div class="thumb"><img class="img-fluid" src="{{ asset('img/ecom/1502264917.pPOLO2-21465903_lifestyle_v400.jpg') }}" alt="STRIPED COTTON HENLEY COVERALL"></div>
                            <span class="discount-tag">5%</span>                            <span class="tag text-center">
                                Baby &amp; Mother                            </span>
                            <h2 class="title text-center">STRIPED COTTON HENLEY COVERALL</h2>

                            <div class="price text-center">
                            $29.5<span>$27.85</span></div>
                            <div class="product-hover">
                                <div class="icons">
                                    <div class="icon-liked">
                                        <span products_id="39" class="fa  fa-heart-o  is_liked"><span class="badge badge-secondary">2</span></span>
                                    </div>

                                    <a href="http://demo.laravelcommerce.com/product-detail/striped-cotton-henley-coverall" class="fa fa-eye"></a>
                                </div>

                                <div class="buttons">

                                        <button class="btn btn-block btn-secondary cart" products_id="39">Add to Cart</button>

                                                                    </div>

                             </div>
                          </article>
                        </div>

                                            </div>
                </div>
            </div>
        </div>
    </div>

    <div class="group-banners">
    	<div class="row">
        	<div class="col-xs-12 col-sm-12">
            	<div class="banner-image en">
                    <a title="Banner Image" href="http://demo.laravelcommerce.com/#"><img class="img-fluid" src="{{ asset('img/ecom/large_banner_en.jpg') }}" alt="Banner Image"></a>
                </div>
                <div class="banner-image ar">
                    <a title="Banner Image" href="http://demo.laravelcommerce.com/#"><img class="img-fluid" src="{{ asset('img/ecom/large_banner_ar.jpg') }}" alt="Banner Image"></a>
                </div>
            </div>
        </div>
    </div>

  </div>
</div>

<div class="container-fuild">
  <div class="container">
    <div class="products-area">
      <!-- heading -->
      <div class="heading">
        <h2>Categories <small class="pull-right"><!--<a href="shop" >View All</a>--></small></h2>
        <hr>
      </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12">
                <div class="row">
                    <!-- Items -->
                    <div class="products products-5x">
                        <!-- categories -->
                                                                                                                <div class="product">
                                    <div class="blog-post">
                                        <article>
                                            <div class="module">
                                            	<a href="http://demo.laravelcommerce.com/shop?category=men-s-clothing" class="cat-thumb">
                                                   <img class="img-fluid" src="{{ asset('img/ecom/1502285429.men.jpg') }}" alt="Men&#39;s Clothing">
                                                </a>
                                                <a href="http://demo.laravelcommerce.com/shop?category=men-s-clothing" class="cat-title">
                                                	Men's Clothing
                                                </a>
                                            </div>
                                        </article>
                                    </div>
                                </div>

                                                                                                                        <div class="product">
                                    <div class="blog-post">
                                        <article>
                                            <div class="module">
                                            	<a href="http://demo.laravelcommerce.com/shop?category=women-s-clothing" class="cat-thumb">
                                                   <img class="img-fluid" src="{{ asset('img/ecom/1502285278.women.jpg') }}" alt="Women&#39;s Clothing">
                                                </a>
                                                <a href="http://demo.laravelcommerce.com/shop?category=women-s-clothing" class="cat-title">
                                                	Women's Clothing
                                                </a>
                                            </div>
                                        </article>
                                    </div>
                                </div>

                                                                                                                        <div class="product">
                                    <div class="blog-post">
                                        <article>
                                            <div class="module">
                                            	<a href="http://demo.laravelcommerce.com/shop?category=boy-s-clothing" class="cat-thumb">
                                                   <img class="img-fluid" src="{{ asset('img/ecom/1502285654.boys.jpg') }}" alt="Boy&#39;s Clothing">
                                                </a>
                                                <a href="http://demo.laravelcommerce.com/shop?category=boy-s-clothing" class="cat-title">
                                                	Boy's Clothing
                                                </a>
                                            </div>
                                        </article>
                                    </div>
                                </div>

                                                                                                                        <div class="product">
                                    <div class="blog-post">
                                        <article>
                                            <div class="module">
                                            	<a href="http://demo.laravelcommerce.com/shop?category=girl-s-clothing" class="cat-thumb">
                                                   <img class="img-fluid" src="{{ asset('img/ecom/1502285903.girls.jpg') }}" alt="Girl&#39;s Clothing">
                                                </a>
                                                <a href="http://demo.laravelcommerce.com/shop?category=girl-s-clothing" class="cat-title">
                                                	Girl's Clothing
                                                </a>
                                            </div>
                                        </article>
                                    </div>
                                </div>

                                                                                                                        <div class="product">
                                    <div class="blog-post">
                                        <article>
                                            <div class="module">
                                            	<a href="http://demo.laravelcommerce.com/shop?category=baby-mother" class="cat-thumb">
                                                   <img class="img-fluid" src="{{ asset('img/ecom/1502285986.babies.jpg') }}" alt="Baby &amp; Mother">
                                                </a>
                                                <a href="http://demo.laravelcommerce.com/shop?category=baby-mother" class="cat-title">
                                                	Baby &amp; Mother
                                                </a>
                                            </div>
                                        </article>
                                    </div>
                                </div>

                                                                                                                        <div class="product">
                                    <div class="blog-post">
                                        <article>
                                            <div class="module">
                                            	<a href="http://demo.laravelcommerce.com/shop?category=household-merchandises" class="cat-thumb">
                                                   <img class="img-fluid" src="{{ asset('img/ecom/1502286030.home.jpg') }}" alt="Household Merchandises">
                                                </a>
                                                <a href="http://demo.laravelcommerce.com/shop?category=household-merchandises" class="cat-title">
                                                	Household Merchandises
                                                </a>
                                            </div>
                                        </article>
                                    </div>
                                </div>

                                                                                                                        <div class="product">
                                    <div class="blog-post">
                                        <article>
                                            <div class="module">
                                            	<a href="http://demo.laravelcommerce.com/shop?category=health-beauty-hair" class="cat-thumb">
                                                   <img class="img-fluid" src="{{ asset('img/ecom/1531492780.healthandbeauty.jpg') }}" alt="Health &amp; Beauty, Hair">
                                                </a>
                                                <a href="http://demo.laravelcommerce.com/shop?category=health-beauty-hair" class="cat-title">
                                                	Health &amp; Beauty, Hair
                                                </a>
                                            </div>
                                        </article>
                                    </div>
                                </div>

                                                                                                                        <div class="product">
                                    <div class="blog-post">
                                        <article>
                                            <div class="module">
                                            	<a href="http://demo.laravelcommerce.com/shop?category=automobiles-motorcycles" class="cat-thumb">
                                                   <img class="img-fluid" src="{{ asset('img/ecom/1531492795.automobiles.jpg') }}" alt="Automobiles &amp; Motorcycles">
                                                </a>
                                                <a href="http://demo.laravelcommerce.com/shop?category=automobiles-motorcycles" class="cat-title">
                                                	Automobiles &amp; Motorcycles
                                                </a>
                                            </div>
                                        </article>
                                    </div>
                                </div>

                                                                                                                        <div class="product">
                                    <div class="blog-post">
                                        <article>
                                            <div class="module">
                                            	<a href="http://demo.laravelcommerce.com/shop?category=jewelry-watches" class="cat-thumb">
                                                   <img class="img-fluid" src="{{ asset('img/ecom/1531492822.watches.jpg') }}" alt="Jewelry &amp; Watches">
                                                </a>
                                                <a href="http://demo.laravelcommerce.com/shop?category=jewelry-watches" class="cat-title">
                                                	Jewelry &amp; Watches
                                                </a>
                                            </div>
                                        </article>
                                    </div>
                                </div>

                                                                                                                        <div class="product">
                                    <div class="blog-post">
                                        <article>
                                            <div class="module">
                                            	<a href="http://demo.laravelcommerce.com/shop?category=cellphones-accessories" class="cat-thumb">
                                                   <img class="img-fluid" src="{{ asset('img/ecom/1531492844.mobiles.jpg') }}" alt="Cellphones &amp; Accessories">
                                                </a>
                                                <a href="http://demo.laravelcommerce.com/shop?category=cellphones-accessories" class="cat-title">
                                                	Cellphones &amp; Accessories
                                                </a>
                                            </div>
                                        </article>
                                    </div>
                                </div>



                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>

<div class="container-fuild">
  <div class="container">
    <div class="products-area">
      <!-- heading -->
      <div class="heading">
        <h2>Newest Products <small class="pull-right"><a href="http://demo.laravelcommerce.com/shop">View All</a></small></h2>
        <hr>
      </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12">
                <div class="row">
                    <!-- Items -->
                    <div class="products products-5x">
                        <!-- Product -->

                                                <div class="product">
                          <article>
                            <div class="thumb"> <img class="img-fluid" src="{{ asset('img/ecom/1502366686.pPOLO2-25207761_standard_v400.jpg') }}" alt="RUFFLED COTTON CARDIGAN"> </div>
                                                        <span class="tag text-center">
                            Girl's Clothing                            </span>
                            <h2 class="title text-center">RUFFLED COTTON CARDIGAN</h2>
                            <div class="price text-center">
                              $49.5

                                                            </div>
                            <div class="product-hover">
                                <div class="icons">
                                    <div class="icon-liked">
                                        <span products_id="81" class="fa  fa-heart-o  is_liked"><span class="badge badge-secondary">6</span></span>
                                    </div>

                                    <a href="http://demo.laravelcommerce.com/product-detail/ruffled-cotton-cardigan" class="fa fa-eye"></a>
                                </div>

                                <div class="buttons">

                                        <button class="btn btn-block btn-secondary cart" products_id="81">Add to Cart</button>

                                                                    </div>
                             </div>
                            </article>
                        </div>
                                                <div class="product">
                          <article>
                            <div class="thumb"> <img class="img-fluid" src="{{ asset('img/ecom/1502366586.pPOLO2-25834797_standard_v400.jpg') }}" alt="FLAG COMBED COTTON SWEATER"> </div>
                            <span class="discount-tag">20%</span>                            <span class="tag text-center">
                            Girl's Clothing                            </span>
                            <h2 class="title text-center">FLAG COMBED COTTON SWEATER</h2>
                            <div class="price text-center">
                              $99.99 <span> $125</span>                               </div>
                            <div class="product-hover">
                                <div class="icons">
                                    <div class="icon-liked">
                                        <span products_id="80" class="fa  fa-heart-o  is_liked"><span class="badge badge-secondary">3</span></span>
                                    </div>

                                    <a href="http://demo.laravelcommerce.com/product-detail/flag-combed-cotton-sweater" class="fa fa-eye"></a>
                                </div>

                                <div class="buttons">

                                        <button class="btn btn-block btn-secondary cart" products_id="80">Add to Cart</button>

                                                                    </div>
                             </div>
                            </article>
                        </div>
                                                <div class="product">
                          <article>
                            <div class="thumb"> <img class="img-fluid" src="{{ asset('img/ecom/1502366462.pPOLO2-26090829_standard_v400.jpg') }}" alt="FAIR ISLE HOODED SWEATER"> </div>
                                                        <span class="tag text-center">
                            Girl's Clothing                            </span>
                            <h2 class="title text-center">FAIR ISLE HOODED SWEATER</h2>
                            <div class="price text-center">
                              $45

                                                            </div>
                            <div class="product-hover">
                                <div class="icons">
                                    <div class="icon-liked">
                                        <span products_id="79" class="fa  fa-heart-o  is_liked"><span class="badge badge-secondary">4</span></span>
                                    </div>

                                    <a href="http://demo.laravelcommerce.com/product-detail/fair-isle-hooded-sweater" class="fa fa-eye"></a>
                                </div>

                                <div class="buttons">

                                        <button class="btn btn-block btn-secondary cart" products_id="79">Add to Cart</button>

                                                                    </div>
                             </div>
                            </article>
                        </div>
                                                <div class="product">
                          <article>
                            <div class="thumb"> <img class="img-fluid" src="{{ asset('img/ecom/1502366342.pPOLO2-26090785_standard_v400.jpg') }}" alt="CABLE-KNIT CASHMERE SWEATER"> </div>
                                                        <span class="tag text-center">
                            Girl's Clothing                            </span>
                            <h2 class="title text-center">CABLE-KNIT CASHMERE SWEATER</h2>
                            <div class="price text-center">
                              $195

                                                            </div>
                            <div class="product-hover">
                                <div class="icons">
                                    <div class="icon-liked">
                                        <span products_id="78" class="fa  fa-heart-o  is_liked"><span class="badge badge-secondary">8</span></span>
                                    </div>

                                    <a href="http://demo.laravelcommerce.com/product-detail/cable-knit-cashmere-sweater" class="fa fa-eye"></a>
                                </div>

                                <div class="buttons">

                                        <button class="btn btn-block btn-secondary cart" products_id="78">Add to Cart</button>

                                                                    </div>
                             </div>
                            </article>
                        </div>
                                                <div class="product">
                          <article>
                            <div class="thumb"> <img class="img-fluid" src="{{ asset('img/ecom/1502366105.pPOLO2-26091049_alternate1_v400.jpg') }}" alt="PLEATED MADRAS SKIRT"> </div>
                                                        <span class="tag text-center">
                            Girl's Clothing                            </span>
                            <h2 class="title text-center">PLEATED MADRAS SKIRT</h2>
                            <div class="price text-center">
                              $56.5

                                                            </div>
                            <div class="product-hover">
                                <div class="icons">
                                    <div class="icon-liked">
                                        <span products_id="77" class="fa  fa-heart-o  is_liked"><span class="badge badge-secondary">4</span></span>
                                    </div>

                                    <a href="http://demo.laravelcommerce.com/product-detail/pleated-madras-skirt" class="fa fa-eye"></a>
                                </div>

                                <div class="buttons">

                                        <button class="btn btn-block btn-secondary cart" products_id="77">Add to Cart</button>

                                                                    </div>
                             </div>
                            </article>
                        </div>
                                                <div class="product">
                          <article>
                            <div class="thumb"> <img class="img-fluid" src="{{ asset('img/ecom/1502365515.pPOLO2-26091862_alternate1_v400.jpg') }}" alt="FLORAL SKIRT"> </div>
                                                        <span class="tag text-center">
                            Girl's Clothing                            </span>
                            <h2 class="title text-center">FLORAL SKIRT</h2>
                            <div class="price text-center">
                              $49.5

                                                            </div>
                            <div class="product-hover">
                                <div class="icons">
                                    <div class="icon-liked">
                                        <span products_id="76" class="fa  fa-heart-o  is_liked"><span class="badge badge-secondary">7</span></span>
                                    </div>

                                    <a href="http://demo.laravelcommerce.com/product-detail/floral-skirt" class="fa fa-eye"></a>
                                </div>

                                <div class="buttons">

                                        <button class="btn btn-block btn-secondary cart" products_id="76">Add to Cart</button>

                                                                    </div>
                             </div>
                            </article>
                        </div>
                                                <div class="product">
                          <article>
                            <div class="thumb"> <img class="img-fluid" src="{{ asset('img/ecom/1502365189.pPOLO2-26091856_standard_v400.jpg') }}" alt="BUTTON-FRONT DENIM SKIRT"> </div>
                                                        <span class="tag text-center">
                            Girl's Clothing                            </span>
                            <h2 class="title text-center">BUTTON-FRONT DENIM SKIRT</h2>
                            <div class="price text-center">
                              $49.5

                                                            </div>
                            <div class="product-hover">
                                <div class="icons">
                                    <div class="icon-liked">
                                        <span products_id="75" class="fa  fa-heart-o  is_liked"><span class="badge badge-secondary">3</span></span>
                                    </div>

                                    <a href="http://demo.laravelcommerce.com/product-detail/button-front-denim-skirt" class="fa fa-eye"></a>
                                </div>

                                <div class="buttons">

                                        <button class="btn btn-block btn-secondary cart" products_id="75">Add to Cart</button>

                                                                    </div>
                             </div>
                            </article>
                        </div>
                                                <div class="product">
                          <article>
                            <div class="thumb"> <img class="img-fluid" src="{{ asset('img/ecom/1502364932.pPOLO2-25835439_standard_v400.jpg') }}" alt="STRIPED OFF-THE-SHOULDER DRESS"> </div>
                                                        <span class="tag text-center">
                            Girl's Clothing                            </span>
                            <h2 class="title text-center">STRIPED OFF-THE-SHOULDER DRESS</h2>
                            <div class="price text-center">
                              $45

                                                            </div>
                            <div class="product-hover">
                                <div class="icons">
                                    <div class="icon-liked">
                                        <span products_id="74" class="fa  fa-heart-o  is_liked"><span class="badge badge-secondary">3</span></span>
                                    </div>

                                    <a href="http://demo.laravelcommerce.com/product-detail/striped-off-the-shoulder-dress" class="fa fa-eye"></a>
                                </div>

                                <div class="buttons">

                                        <button class="btn btn-block btn-secondary cart" products_id="74">Add to Cart</button>

                                                                    </div>
                             </div>
                            </article>
                        </div>
                                                <div class="product">
                          <article>
                            <div class="thumb"> <img class="img-fluid" src="{{ asset('img/ecom/1502364697.pPOLO2-23643008_standard_v400.jpg') }}" alt="COTTON CHINO BELTED SHIRTDRESS"> </div>
                            <span class="discount-tag">57%</span>                            <span class="tag text-center">
                            Girl's Clothing                            </span>
                            <h2 class="title text-center">COTTON CHINO BELTED SHIRTDRESS</h2>
                            <div class="price text-center">
                              $23.5 <span> $55</span>                               </div>
                            <div class="product-hover">
                                <div class="icons">
                                    <div class="icon-liked">
                                        <span products_id="73" class="fa  fa-heart-o  is_liked"><span class="badge badge-secondary">4</span></span>
                                    </div>

                                    <a href="http://demo.laravelcommerce.com/product-detail/cotton-chino-belted-shirtdress" class="fa fa-eye"></a>
                                </div>

                                <div class="buttons">

                                        <button class="btn btn-block btn-secondary cart" products_id="73">Add to Cart</button>

                                                                    </div>
                             </div>
                            </article>
                        </div>
                                                <div class="product">
                          <article>
                            <div class="thumb"> <img class="img-fluid" src="{{ asset('img/ecom/1502364150.pPOLO2-26091141_standard_v400.jpg') }}" alt="MADRAS COTTON SHIRTDRESS"> </div>
                                                        <span class="tag text-center">
                            Girl's Clothing                            </span>
                            <h2 class="title text-center">MADRAS COTTON SHIRTDRESS</h2>
                            <div class="price text-center">
                              $59

                                                            </div>
                            <div class="product-hover">
                                <div class="icons">
                                    <div class="icon-liked">
                                        <span products_id="72" class="fa  fa-heart-o  is_liked"><span class="badge badge-secondary">2</span></span>
                                    </div>

                                    <a href="http://demo.laravelcommerce.com/product-detail/madras-cotton-shirtdress" class="fa fa-eye"></a>
                                </div>

                                <div class="buttons">

                                        <button class="btn btn-block btn-secondary cart" products_id="72">Add to Cart</button>

                                                                    </div>
                             </div>
                            </article>
                        </div>

                                            </div>
                </div>
            </div>
        </div>
    </div>


  </div>
</div>


 </section>




<section class="blog-content">
<div class="container">
    <div class="blog-area">
        <!-- heading -->
        <div class="heading">
            <h2>From our News <small class="pull-right"><a href="http://demo.laravelcommerce.com/news">View All</a></small></h2>
            <hr>
        </div>

		<div class="row">
            <div class="blogs blogs-3x">
            	<!-- Blog Post -->
									                        <div class="blog-post">
                            <article>
                                <div class="blog-thumb">
                                	<h4 class="blog-title">
                                        <a href="http://demo.laravelcommerce.com/news-detail/fashion-1">Fashion </a>
                                                                                    <span class="badge badge-success">Featured</span>
                                                                            </h4>
                                    <span class="blog-date">
                                        <strong>
                                            30                                        </strong>
                                        Mar                                    </span>

                                    <div class="blog-overlay">
                                        <a href="http://demo.laravelcommerce.com/news-detail/fashion-1" class="fa fa-search-plus"></a>
                                    </div>

                                    <img class="img-fluid" src="{{ asset('img/ecom/1531930664.blog-img-2.jpg') }}" alt="">
                                </div>
                            </article>
                        </div>
                	                        <div class="blog-post">
                            <article>
                                <div class="blog-thumb">
                                	<h4 class="blog-title">
                                        <a href="http://demo.laravelcommerce.com/news-detail/why-to-choose-this-app-for-your-project">Why To choose this App for your Project? </a>
                                                                                    <span class="badge badge-success">Featured</span>
                                                                            </h4>
                                    <span class="blog-date">
                                        <strong>
                                            22                                        </strong>
                                        Aug                                    </span>

                                    <div class="blog-overlay">
                                        <a href="http://demo.laravelcommerce.com/news-detail/why-to-choose-this-app-for-your-project" class="fa fa-search-plus"></a>
                                    </div>

                                    <img class="img-fluid" src="{{ asset('img/ecom/1531930697.blog-img-3.jpg') }}" alt="">
                                </div>
                            </article>
                        </div>
                	                        <div class="blog-post">
                            <article>
                                <div class="blog-thumb">
                                	<h4 class="blog-title">
                                        <a href="http://demo.laravelcommerce.com/news-detail/tools-and-technology">Tools and Technology </a>
                                                                                    <span class="badge badge-success">Featured</span>
                                                                            </h4>
                                    <span class="blog-date">
                                        <strong>
                                            22                                        </strong>
                                        Aug                                    </span>

                                    <div class="blog-overlay">
                                        <a href="http://demo.laravelcommerce.com/news-detail/tools-and-technology" class="fa fa-search-plus"></a>
                                    </div>

                                    <img class="img-fluid" src="{{ asset('img/ecom/1531930680.blog-img-1.jpg') }}" alt="">
                                </div>
                            </article>
                        </div>
                	            				</div>
		</div>
    </div>
</div>
</section>


	<section class="banner-content">
    	<div class="container">
		<div class="row">

            <div class="col-12 col-md-6 col-lg-3 p-0">
                <div class="banner-single">
                    <div class="panel">
                        <h3 class="fa fa-truck"></h3>
                        <div class="block">
                            <h4 class="title">Free Shipping</h4>
                            <p>On order over $99</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 p-0">
                <div class="banner-single">
                	<div class="panel">
                    	<h3 class="fa fa-money"></h3>
                        <div class="block">
                            <h4 class="title">Money Return</h4>
                            <p>30 Days money return</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 p-0">
                <div class="banner-single second-last">
                	<div class="panel">
                        <h3 class="fa fa-life-ring"></h3>
                        <div class="block">
                            <h4 class="title">Support 24/7</h4>
                            <p>Hotline&nbsp;:&nbsp;+92 312 1234567</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 p-0">
                <div class="banner-single last">
                    <div class="panel">
                    	<h3 class="fa fa-credit-card"></h3>
                        <div class="block">
                            <h4 class="title">Safe Payment</h4>
                            <p>Protect online payment</p>
                        </div>
                    </div>
                </div>
            </div>

		</div>
	</div>
    </section>

    <footer class="footer-content">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-6 col-lg-4">
        <div class="single-footer">
          <h5>About Store</h5>
          <ul class="contact-list  pl-0 mb-0">
            <li> <i class="fa fa-map-marker"></i><span>address City State, Zip Country</span> </li>
            <li> <i class="fa fa-phone"></i><span>+92 312 1234567</span> </li>
            <li> <i class="fa fa-envelope"></i><span> <a href="mailto:sales@brandbychoice.com">vectorcoder@gmail.com</a> </span> </li>

          </ul>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-4">
        <div class="footer-block">
        	<div class="single-footer">
              <h5>Our Services</h5>
              <ul class="links-list pl-0 mb-0">
                <li> <a href="http://demo.laravelcommerce.com/"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Home</a> </li>
                <li> <a href="http://demo.laravelcommerce.com/shop"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Shop</a> </li>
                <li> <a href="http://demo.laravelcommerce.com/orders"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Orders</a> </li>
                <li> <a href="http://demo.laravelcommerce.com/viewcart"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Shopping Cart</a> </li>            <li> <a href="http://demo.laravelcommerce.com/wishlist"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Wishlist</a> </li>
              </ul>
            </div>
            <div class="single-footer">
              <h5>Information</h5>
              <ul class="links-list pl-0 mb-0">
                                                            <li> <a href="http://demo.laravelcommerce.com/page?name=about-us"><i class="fa fa-angle-double-right" aria-hidden="true"></i>About Us</a> </li>
                                            <li> <a href="http://demo.laravelcommerce.com/page?name=privacy-policy"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Privacy Policy</a> </li>
                                            <li> <a href="http://demo.laravelcommerce.com/page?name=refund-policy"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Refund Policy</a> </li>
                                            <li> <a href="http://demo.laravelcommerce.com/page?name=term-services"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Term &amp; Services</a> </li>

                <li> <a href="http://demo.laravelcommerce.com/contact-us"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Contact Us</a> </li>
              </ul>
            </div>
        </div>
      </div>

      <div class="col-12 col-lg-4">
        <div class="single-footer">
            <div class="newsletter">
            	<h5>Subscribe for Newsletter</h5>
                <div class="block">
                    <input type="email" placeholder="Your email address here...">
                    <button type="button" class="btn btn-secondary">Subscribe!</button>
                </div>
            </div>

            <div class="socials">
            	<h5>Follow Us</h5>
                <ul class="list">
                	<li><a href="http://demo.laravelcommerce.com/#" class="fab fa-facebook"></a></li>
                    <li><a href="http://demo.laravelcommerce.com/#" class="fab fa-twitter"></a></li>
                    <li><a href="http://demo.laravelcommerce.com/#" class="fab fa-skype"></a></li>
                    <li><a href="http://demo.laravelcommerce.com/#" class="fab fa-linkedin"></a></li>
                </ul>
            </div>


        </div>
      </div>
    </div>
  </div>
</footer>

<div class="footer py-2 my-2">
  <div class="container">
    <div class="row">
    	<div class="footer-image col-12 col-md-6">
            <img class="img-fluid" src="{{ asset('img/ecom/payments.png') }}">
        </div>
        <div class="footer-info col-12 col-md-6">
            <p> © 2017 Company, Inc. <a href="http://demo.laravelcommerce.com/#">Privacy</a> · <a href="http://demo.laravelcommerce.com/#">Terms</a> </p>
        </div>
        <div class="floating-top" style="opacity: 0;"><a href="http://demo.laravelcommerce.com/#" class="fa fa-angle-up"></a></div>
    </div>
  </div>
</div>

<!--notification-->
<div id="message_content"></div>
<!--color panel-->

<div class="color-panel">
	<button type="button" class="btn slide-toggle"><i class="fa fa-cogs" aria-hidden="true"></i></button>
	<ul class="list-colors">
    	<h3>Website Skins</h3>
    	<li>
            <a href="http://demo.laravelcommerce.com/settheme?theme=app">
            	<span class="color"></span>
                <span>Default</span>
            </a>
        </li>
        <li>
            <a href="http://demo.laravelcommerce.com/settheme?theme=app.theme.1">
            	<span class="color color-1"></span>
                <span>Black</span>
                <span class="color color-1-1"></span>
                <span>Red</span>
            </a>
        </li>
        <li>
            <a href="http://demo.laravelcommerce.com/settheme?theme=app.theme.2">
            	<span class="color color-2"></span>
                <span>White</span>
                <span class="color color-2-2"></span>
                <span>Blue</span>
            </a>
        </li>
        <li>
            <a href="http://demo.laravelcommerce.com/settheme?theme=app.theme.3">
            	<span class="color color-3"></span>
                <span>White</span>
                <span class="color color-3-3"></span>
                <span>Parrot</span>
            </a>
        </li>
        <li>
            <a href="http://demo.laravelcommerce.com/settheme?theme=app.theme.4">
            	<span class="color color-4"></span>
                <span>Cyan </span>
                <span class="color color-4-4"></span>
                <span>Blue</span>
            </a>
        </li>
        <li>
            <a href="http://demo.laravelcommerce.com/settheme?theme=app.theme.5">
            	<span class="color color-5"></span>
                <span>Brown</span>
                <span class="color color-5-5"></span>
                <span>Skin</span>
            </a>
        </li>
        <li>
            <a href="http://demo.laravelcommerce.com/settheme?theme=app.theme.6">
            	<span class="color color-6"></span>
                <span>White</span>
                <span class="color color-6-6"></span>
                <span>Yellow</span>
            </a>
        </li>
        <li>
            <a href="http://demo.laravelcommerce.com/settheme?theme=app.theme.7">
            	<span class="color color-7"></span>
                <span>White</span>
                <span class="color color-7-7"></span>
                <span>Red</span>
            </a>
        </li>
        <li>
            <a href="http://demo.laravelcommerce.com/settheme?theme=app.theme.8">
            	<span class="color color-8"></span>
                <span>Baby Pink</span>
                <span class="color color-8-8"></span>
                <span>Purple</span>
            </a>
        </li>
        <li>
            <a href="http://demo.laravelcommerce.com/settheme?theme=app.theme.9">
            	<span class="color color-9"></span>
                <span>Black</span>
                <span class="color color-9-9"></span>
                <span>White</span>
            </a>
        </li>
    </ul>
</div>

<!-- loader content -->
<div class="loader" id="loader" style="display: none;">
	<img src="{{ asset('img/ecom/loader.gif') }}">
</div>
	<!-- all js scripts including custom js -->

	<!-- scripts -->
<script src="{{ asset('js/app.js.download') }}"></script>
<script src="{{ asset('js/jquery-ui.js.download') }}"></script>

<!-- owl carousel -->
<script src="{{ asset('js/owl.carousel.js.download') }}"></script>

<!--- google map-->
<script type="text/javascript" src="{{ asset('js/js') }}"></script>

<!--- one signal-->


<script type="application/javascript">


  jQuery(function() {
    jQuery( "#datepicker" ).datepicker({
      changeMonth: true,
      changeYear: true,
	  maxDate: '0',
    });
  });

jQuery( document ).ready( function () {
	jQuery('#loader').hide();

		 OneSignal.push(function () {
	  OneSignal.registerForPushNotifications();
	  OneSignal.on('subscriptionChange', function (isSubscribed) {
	   if (isSubscribed) {
		OneSignal.getUserId(function (userId) {
		 device_id = userId;
		 //ajax request
		 jQuery.ajax({
			url: 'http://demo.laravelcommerce.com/subscribeNotification',
			type: "POST",
			data: '&device_id='+device_id,
			success: function (res) {},
		});

		 //$scope.oneSignalCookie();
		});
	   }
	  });

	 });

	//load google map




	$.noConflict();

	//stripe_ajax
	jQuery(document).on('click', '#stripe_ajax', function(e){
		jQuery('#loader').css('display','flex');
		jQuery.ajax({
			url: 'http://demo.laravelcommerce.com/stripeForm',
			type: "POST",
			success: function (res) {
				if(res.trim() == "already added"){
				}else{
					jQuery('.head-cart-content').html(res);
					jQuery(parent).removeClass('cart');
					jQuery(parent).addClass('active');
				}
				message = "Product is added!";
				notification(message);
				jQuery('#loader').hide();
			},
		});
	});

	//commeents
	jQuery(document).on('focusout','#order_comments', function(e){
		jQuery('#loader').css('display','flex');
		var comments = jQuery('#order_comments').val();
		jQuery.ajax({
			url: 'http://demo.laravelcommerce.com/commentsOrder',
			type: "POST",
			data: '&comments='+comments,
			async: false,
			success: function (res) {
				jQuery('#loader').hide();
			},
		});
	});


	//cash_on_delivery_button
	jQuery(document).on('click', '#cash_on_delivery_button', function(e){
		jQuery('#loader').css('display','flex');
		jQuery("#update_cart_form").submit();
	});

	//shipping_mehtods_form
	jQuery(document).on('submit', '#shipping_mehtods_form', function(e){
		jQuery('.error_shipping').hide();
		var checked = jQuery(".shipping_data:checked").length > 0;
		if (!checked){
			jQuery('.error_shipping').show();
			return false;
		}
	});

	//update_cart
	jQuery(document).on('click', '#update_cart', function(e){
		jQuery('#loader').css('display','flex');
		jQuery("#update_cart_form").submit();
	});

	//shipping_data
	jQuery(document).on('click', '.shipping_data', function(e){
		getZonesBilling();
	});

	//billling method
	jQuery(document).on('click', '#same_billing_address', function(e){
		if(jQuery(this).prop('checked') == true){
			jQuery("#billing_firstname").val(jQuery("#firstname").val());
			jQuery("#billing_lastname").val(jQuery("#lastname").val());
			jQuery("#billing_company").val(jQuery("#company").val());
			jQuery("#billing_street").val(jQuery("#street").val());
			jQuery("#billing_city").val(jQuery("#city").val());
			jQuery("#billing_zip").val(jQuery("#postcode").val());
			jQuery("#billing_countries_id").val(jQuery("#entry_country_id").val());
			jQuery("#billing_zone_id").val(jQuery("#entry_zone_id").val());

			jQuery(".same_address").attr('readonly','readonly');
			jQuery(".same_address_select").attr('disabled','disabled');
		}else{
			jQuery(".same_address").removeAttr('readonly');
			jQuery(".same_address_select").removeAttr('disabled');
		}
	});

	//apply_coupon_cart
	jQuery(document).on('submit', '#apply_coupon', function(e){
		jQuery('#coupon_code').remove('error');
		jQuery('#coupon_require_error').hide();
		jQuery('#loader').css('display','flex');

		if(jQuery('#coupon_code').val().length > 0){
			var formData = jQuery(this).serialize();
			jQuery.ajax({
				url: 'http://demo.laravelcommerce.com/apply_coupon',
				type: "POST",
				data: formData,
				success: function (res) {
					var obj = JSON.parse(res);
					var message = obj.message;
					jQuery('#loader').hide();
					if(obj.success==0){
						jQuery("#coupon_error").html(message).show();
						return false;
					}else if(obj.success==2){
						jQuery("#coupon_error").html(message).show();
						return false;
					}else if(obj.success==1){
						window.location.reload(true);
					}
				},
			});
		}else{
			jQuery('#loader').css('display','none');
			jQuery('#coupon_code').addClass('error');
			jQuery('#coupon_require_error').show();
			return false;
		}
		jQuery('#loader').hide();
		return false;
	});

	//coupon_code
	jQuery(document).on('keyup', '#coupon_code', function(e){
		jQuery("#coupon_error").hide();
		if(jQuery(this).val().length >0){
			jQuery('#coupon_code').removeClass('error');
			jQuery('#coupon_require_error').hide();
		}else{
			jQuery('#coupon_code').addClass('error');
			jQuery('#coupon_require_error').show();
		}

	});

	//test
	jQuery(document).on('click', '#myFunction', function(e){
		var message = 'sadsad';
		notification(message);
	});


	//change language
	function changeLanguage(locale){
		jQuery('#loader').css('display','flex');
		jQuery.ajax({
			url: 'http://demo.laravelcommerce.com/language',
			type: "POST",
			data: '&locale='+locale,
			//dataType:"json",

			success: function (res) {
				window.location.reload(true);
			},
		});

	};

	jQuery( function() {
		jQuery.widget( "custom.iconselectmenu", jQuery.ui.selectmenu, {
		  _renderItem: function( ul, item ) {
			var li = jQuery( "<li>" ),
			  wrapper = jQuery( "<div>", { text: item.label } );

			if ( item.disabled ) {
			  li.addClass( "ui-state-disabled" );
			}

			jQuery( "<span>", {
			  style: item.element.attr( "data-style" ),
			  "class": "ui-icon " + item.element.attr( "data-class" )
			})
			  .appendTo( wrapper );

			return li.append( wrapper ).appendTo( ul );
		  }
		});



		jQuery("#change_language")
		.iconselectmenu({
		  create: function (event, ui) {
			  var widget = jQuery(this).iconselectmenu("widget");
			  $span = jQuery('<span id="' + this.id + '_image" class="ui-selectmenu-image"> ').html("&nbsp;").appendTo(widget);
			  $span.attr("style", jQuery(this).children(":selected").data("style"));

		  },
		  change: function (event, ui) {
			  jQuery("#" + this.id + '_image').attr("style", ui.item.element.data("style"));
			  var locale = jQuery(this).val();
			  changeLanguage(locale);

		  }
		}).iconselectmenu("menuWidget").addClass("ui-menu-icons customicons");

  } );

	jQuery( function() {
    	jQuery( "#category_id" ).selectmenu();
		jQuery( ".attributes_data" ).selectmenu();
	});

	//is_liked
	jQuery(document).on('click', '.is_liked', function(e){
		var products_id = jQuery(this).attr('products_id');
		var selector = jQuery(this);
		jQuery('#loader').css('display','flex');
		var user_count = jQuery('#wishlist-count').html();
		jQuery.ajax({
			url: 'http://demo.laravelcommerce.com/likeMyProduct',
			type: "POST",
			data: '&products_id='+products_id,

			success: function (res) {
				//jQuery('.head-cart-content').html(res);
				var obj = JSON.parse(res);
				var message = obj.message;

				if(obj.success==0){

				}else if(obj.success==2){
					jQuery(selector).removeClass('fa-heart-o');
					jQuery(selector).addClass('fa-heart');
					jQuery(selector).children('span').html(obj.total_likes);
					jQuery('#wishlist-count').html(parseInt(user_count)+ parseInt(1));
					jQuery(selector).children('.badge').html(obj.total_likes);
				}else if(obj.success==1){
					jQuery(selector).removeClass('fa-heart');
					jQuery(selector).addClass('fa-heart-o');

					jQuery(selector).children('span').html(obj.total_likes);
					jQuery('#wishlist-count').html(user_count-1);
					jQuery(selector).children('.badge').html(obj.total_likes);
				}
				jQuery('#loader').hide();
				notification(message);

			},
		});

	});

	//wishlist_liked
	jQuery(document).on('click', '.wishlist_liked', function(e){
		var products_id = jQuery(this).attr('products_id');
		var selector = jQuery(this).parents('.product').remove();
		jQuery('#loader').css('display','flex');
		var user_count = jQuery('#wishlist-count').html();
		jQuery.ajax({
			url: 'http://demo.laravelcommerce.com/likeMyProduct',
			type: "POST",
			data: '&products_id='+products_id,

			success: function (res) {
				var obj = JSON.parse(res);
				var message = obj.message;

				if(obj.success==0){

				}else if(obj.success==2){
					//jQuery(selector).children('span').html(obj.total_likes);
					jQuery('#wishlist-count').html(parseInt(user_count)+ parseInt(1));
					//jQuery(selector).children('span').html(obj.total_likes+" Likes");
				}else if(obj.success==1){
					//jQuery(selector).addClass(hidden);

					//jQuery(selector).children('span').html(obj.total_likes);
					var count = user_count-1;
					jQuery('#wishlist-count').html(count);

					if(count==0){
						jQuery(".loaded_content").hide();
						jQuery("#loaded_content_empty").show();
					}else{
						jQuery('.showing_record').html(count);
						jQuery('.showing_total_record').html(parseInt(jQuery('.showing_total_record').html())-parseInt(1));
					}
					//website.product is not added to your wish list
					//jQuery(selector).children('span').html(obj.total_likes+" Likes");
				}
				jQuery('#loader').hide();
				notification(message);

			},
		});

	});

			var direction = false;
		//product slider
	jQuery(".owl_featured").owlCarousel({
		margin:10,
		loop:false,
		nav:true,
		rtl:direction,
		responsive:{
			0:{
				items:1
			},
			576:{
				items:2
			},
			768:{
				items:3
			},
			992:{
				items:4
			},
			1199:{
				items:5
			}
		}
	});


	jQuery("#owl_special").owlCarousel({
		loop:false,
		margin:10,
		nav:true,
		rtl:direction,
		responsive:{
			0:{
				items:1
			},
			576:{
				items:2
			},
			768:{
				items:3
			},
			992:{
				items:4
			},
			1199:{
				items:5
			}
		}
	});

	jQuery("#owl_liked").owlCarousel({
		loop:false,
		margin:10,
		nav:true,
		rtl:direction,
		responsive:{
			0:{
				items:1
			},
			576:{
				items:2
			},
			768:{
				items:3
			},
			992:{
				items:4
			},
			1199:{
				items:5
			}
		}
	});

	jQuery("#owl_brands").owlCarousel({
		loop:false,
		margin:10,
		nav:true,
		rtl:direction,
		responsive:{
			0:{
				items:1
			},
			576:{
				items:1
			},
			768:{
				items:3
			},
			992:{
				items:4
			},
			1199:{
				items:6
			}
		}
	});

	jQuery( ".owl-prev").html('<i class="fa fa-angle-left"></i>');
	jQuery( ".owl-next").html('<i class="fa fa-angle-right"></i>');


//change_language
jQuery(document).on('click', '.change_language', function(e){
	jQuery('#loader').css('display','flex');
	var languages_id = jQuery(this).attr('languages_id');
	jQuery.ajax({
		url: 'http://demo.laravelcommerce.com/change_language',
		type: "POST",
		data: '&languages_id='+languages_id,
		success: function (res) {
			jQuery('#loader').hide();
		},
	});
});


//sortby
jQuery(document).on('change', '.sortby', function(e){
	jQuery('#loader').css('display','flex');
	jQuery("#load_products_form").submit();
});


//load more products
jQuery(document).on('click', '#load_products', function(e){
	jQuery('#loader').css('display','flex');
	var page_number = jQuery('#page_number').val();
	var total_record = jQuery('#total_record').val();
	var formData = jQuery("#load_products_form").serialize();
	jQuery.ajax({
		url: 'http://demo.laravelcommerce.com/filterProducts',
		type: "POST",
		data: formData,
		success: function (res) {
			if(jQuery.trim().res==0){
				jQuery('#load_products').hide();
				jQuery('#loaded_content').show();
			}else{
				page_number++;
				jQuery('#page_number').val(page_number);
				jQuery('#listing-products').append(res);
				var record_limit = jQuery('#record_limit').val();
				var showing_record = page_number*record_limit;
				if(total_record<=showing_record){
					jQuery('.showing_record').html(total_record);
					jQuery('#load_products').hide();
					jQuery('#loaded_content').show();
				}else{
					jQuery('.showing_record').html(showing_record);
				}
			}
			jQuery('#loader').hide();
		},
	});
});

//sortby
jQuery(document).on('change', '.sortbywishlist', function(e){
	jQuery('#loader').css('display','flex');
	jQuery("#load_wishlist_form").submit();
});


//load more products
jQuery(document).on('click', '#load_wishlist', function(e){
	jQuery('#loader').css('display','flex');
	var page_number = jQuery('#page_number').val();
	var formData = jQuery("#load_wishlist_form").serialize();
	jQuery.ajax({
		url: 'http://demo.laravelcommerce.com/loadMoreWishlist',
		type: "POST",
		data: formData,
		success: function (res) {

			if(jQuery.trim().res==0){
				jQuery('#load_wishlist').hide();
				jQuery('#loaded_content').show();
			}else{
				page_number++;
				jQuery('#page_number').val(page_number);
				jQuery('#listing-wishlist').append(res);

				var record_limit = jQuery('#record_limit').val();
				var total_record = jQuery('#total_record').val();

				var showing_record = page_number*record_limit;
				if(total_record<=showing_record){
					jQuery('#load_wishlist').hide();
					jQuery('.showing_record').html(total_record);
				}else{
					jQuery('.showing_record').html(showing_record);
				}
			}
			jQuery('#loader').hide();


			/*if(jQuery.trim().res==0){
				jQuery('#load_wishlist').hide();
				jQuery('#loaded_content').show();
			}else{
				page_number++;
				jQuery('#page_number').val(page_number);
				jQuery('#listing-wishlist').append(res);
			}
			jQuery('#loader').hide();*/
		},
	});
});



//sortbynews
jQuery(document).on('change', '.sortbynews', function(e){
	jQuery('#loader').css('display','flex');
	jQuery("#load_news_form").submit();
});

//load more news
jQuery(document).on('click', '#load_news', function(e){
	jQuery('#loader').css('display','flex');
	var page_number = jQuery('#page_number').val();
	var formData = jQuery("#load_news_form").serialize();
	jQuery.ajax({
		url: 'http://demo.laravelcommerce.com/loadMoreNews',
		type: "POST",
		data: formData,
		success: function (res) {
			if(jQuery.trim().res==0){
				jQuery('#load_news').hide();
				jQuery('#loaded_content').show();
			}else{
				page_number++;
				jQuery('#page_number').val(page_number);
				jQuery('#listing-news').append(res);

				var record_limit = jQuery('#record_limit').val();
				var total_record = jQuery('#total_record').val();
				//alert(record_limit);
				var showing_record = page_number*record_limit;
				if(total_record<showing_record){
					jQuery('#load_news').hide();
					jQuery('.showing_record').html(total_record);
				}else{
					jQuery('.showing_record').html(showing_record);
				}
			}
			jQuery('#loader').hide();
		},
	});
});

/*jQuery(document).on('click', '.filters_box', function(e){
	if (jQuery('input:checkbox.filters_box:checked').length > 0) {
      	jQuery('#filters_applied').val(1);
		jQuery('#apply_options_btn').removeAttr('disabled');
	} else {
      	jQuery('#filters_applied').val(0);
		jQuery('#apply_options_btn').attr('disabled',true);
    }
})
*/
jQuery(document).on('click', '#apply_options_btn', function(e){
	if (jQuery('input:checkbox.filters_box:checked').length > 0) {
      	jQuery('#filters_applied').val(1);
		jQuery('#apply_options_btn').removeAttr('disabled');
	} else {
      	jQuery('#filters_applied').val(0);
		jQuery('#apply_options_btn').attr('disabled',true);
    }
	jQuery('#load_products_form').submit();

})

//add-to-Cart with custom options
jQuery(document).on('click', '.add-to-Cart', function(e){
	jQuery('#loader').css('display','flex');
	var formData = jQuery("#add-Product-form").serialize();
	var url = jQuery('#checkout_url').val();
	var message;
	jQuery.ajax({
		url: 'http://demo.laravelcommerce.com/addToCart',
		type: "POST",
		data: formData,

		success: function (res) {
			if(res.trim() == "already added"){
				//notification
				message = 'Product is added!';
			}else{
				jQuery('.head-cart-content').html(res);
				message = 'Product is added!';
				jQuery(parent).addClass('active');
			}
				if(url.trim()=='true'){
					window.location.href = 'http://demo.laravelcommerce.com/checkout';
				}else{
					jQuery('#loader').css('display','none');
					//window.location.href = 'http://demo.laravelcommerce.com/viewcart';
					//message = "Product is added!";
					//notification(message);
				}
		},
	});
});

//update-single-Cart with
jQuery(document).on('click', '.update-single-Cart', function(e){
	jQuery('#loader').css('display','flex');
	var formData = jQuery("#add-Product-form").serialize();
	var url = jQuery('#checkout_url').val();
	var message;
	jQuery.ajax({
		url: 'http://demo.laravelcommerce.com/updatesinglecart',
		type: "POST",
		data: formData,

		success: function (res) {
			if(res.trim() == "already added"){
				//notification
				message = 'Product is added!';
			}else{
				jQuery('.head-cart-content').html(res);
				message = 'Product is added!';
				jQuery(parent).addClass('active');
			}
				if(url.trim()=='true'){
					window.location.href = 'http://demo.laravelcommerce.com/checkout';
				}else{
					jQuery('#loader').css('display','none');
					//window.location.href = 'http://demo.laravelcommerce.com/viewcart';
					//message = "Product is added!";
					//notification(message);
				}
		},
	});
});

//validate form

jQuery(document).on('submit', '.form-validate', function(e){

	var error = "";

	//to validate text field

	jQuery(".field-validate").each(function() {
		if(this.value == '') {
			jQuery(this).closest(".form-group").addClass('has-error');
			jQuery(this).next(".error-content").removeAttr('hidden');
			error = "has error";
		}else{
			jQuery(this).closest(".form-group").removeClass('has-error');
			jQuery(this).next(".error-content").attr('hidden', true);
		}
	});

	/*jQuery(".phone-validate").each(function() {
		if(this.value == '' && isNaN(this.value)) {
			jQuery(this).closest(".form-group").addClass('has-error');
			jQuery(this).next(".error-content").removeAttr('hidden');
			error = "has error";
		}else{
			jQuery(this).closest(".form-group").removeClass('has-error');
			jQuery(this).next(".error-content").attr('hidden', true);
		}
	});*/


	var check = 0;
	jQuery(".password").each(function() {
		var regex = "^\\s+$";
		if(this.value.match(regex)) {
			jQuery(this).closest(".form-group").addClass('has-error');
			jQuery(this).next(".error-content").removeAttr('hidden');
			error = "has error";
		}else{
			if(check == 1){
				 var res = passwordMatch();

					if(res=='matched'){
						jQuery('.password').closest(".form-group").removeClass('has-error');
						jQuery('#re_password').closest('.re-password-content').children('.error-content-password').add('hidden');
					}else if(res=='error'){
						jQuery('.password').closest(".form-group").addClass('has-error');
						jQuery('#re_password').closest('.re-password-content').children('.error-content-password').removeAttr('hidden');
						error = "has error";
					}
				}else{
					jQuery(this).closest(".form-group").removeClass('has-error');
					jQuery(this).next(".error-content").attr('hidden', true);
				}
				 check++;
			}

	});


	jQuery(".number-validate").each(function() {
		if(this.value == '' || isNaN(this.value)) {
			jQuery(this).closest(".form-group").addClass('has-error');
			jQuery(this).next(".error-content").removeAttr('hidden');
			error = "has error";
		}else{
			jQuery(this).closest(".form-group").removeClass('has-error');
			jQuery(this).next(".error-content").attr('hidden', true);
		}
	});



	//

	jQuery(".email-validate").each(function() {

		var validEmail = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;

		if(this.value != '' && validEmail.test(this.value)) {

			jQuery(this).closest(".form-group").removeClass('has-error');

			jQuery(this).next(".error-content").attr('hidden', true);



		}else{

			jQuery(this).closest(".form-group").addClass('has-error');

			jQuery(this).next(".error-content").removeAttr('hidden');

			error = "has error";

		}

	});


	jQuery(".checkbox-validate").each(function() {

		if(jQuery(this).prop('checked') == true){
			jQuery(this).closest(".form-group").removeClass('has-error');
			jQuery(this).closest('.checkbox-parent').children('.error-content').attr('hidden', true);
		}else{
			jQuery(this).closest(".form-group").addClass('has-error');
			jQuery(this).closest('.checkbox-parent').children('.error-content').removeAttr('hidden');

			error = "has error";
		}

	});



	if(error=="has error"){

		return false;

	}



});



//focus form field

jQuery(document).on('keyup focusout change', '.field-validate', function(e){
	if(this.value == '') {
		jQuery(this).closest(".form-group").addClass('has-error');
		jQuery(this).next(".error-content").removeAttr('hidden');
	}else{
		jQuery(this).closest(".form-group").removeClass('has-error');
		jQuery(this).next(".error-content").attr('hidden', true);
	}
});



//focus form field
jQuery(document).on('keyup', '.number-validate', function(e){
	if(this.value == '' || isNaN(this.value)) {
		jQuery(this).closest(".form-group").addClass('has-error');
		jQuery(this).next(".error-content").removeAttr('hidden');
	}else{
		jQuery(this).closest(".form-group").removeClass('has-error');
		jQuery(this).next(".error-content").attr('hidden', true);
	}
});

//match password
jQuery(document).on('keyup focusout', '.password', function(e){
	var regex = "^\\s+$";
	if(this.value.match(regex)) {
		jQuery(this).closest(".form-group").addClass('has-error');
		jQuery(this).next(".error-content").removeAttr('hidden');
	}else{
		jQuery(this).closest(".form-group").removeClass('has-error');
		jQuery(this).next(".error-content").attr('hidden', true);
	}
});



jQuery(document).on('keyup focusout', '.email-validate', function(e){

	var validEmail = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;

	if(this.value != '' && validEmail.test(this.value)) {
		jQuery(this).closest(".form-group").removeClass('has-error');
		jQuery(this).next(".error-content").attr('hidden', true);
	}else{
		jQuery(this).closest(".form-group").addClass('has-error');
		jQuery(this).next(".error-content").removeAttr('hidden');
		error = "has error";
	}

});




	//sorting grid/list
	jQuery(document).on('click','#list',function(){
		if (!jQuery(this).hasClass('active')) {
			jQuery('#listing-products, .load-more-area').hide();
			jQuery( '#listing-products' ).removeClass( 'products-3x' );
			jQuery( '#listing-products' ).addClass( 'products-list' );
			jQuery( '#grid' ).removeClass( 'active' );
			jQuery( this ).addClass( 'active' );
			jQuery('#listing-products, .load-more-area').fadeIn(1000);
		}
	});

	jQuery(document).on('click','#grid',function(){
		if (!jQuery(this).hasClass('active')){
			jQuery('#listing-products, .load-more-area').hide();
			jQuery( '#listing-products' ).removeClass( 'products-list' );
			jQuery( '#listing-products' ).addClass( 'products-3x' );
			jQuery( '#list' ).removeClass( 'active' );
			jQuery( this ).addClass( 'active' );
			jQuery('#listing-products, .load-more-area').fadeIn(1000);
		}
	});

	//sorting grid/list
	jQuery(document).on('click','#list_wishlist',function(){
		if (!jQuery(this).hasClass('active')) {
			jQuery('#listing-wishlist, .load-more-area').hide();
			jQuery( '#listing-wishlist' ).removeClass( 'products-3x' );
			jQuery( '#listing-wishlist' ).addClass( 'products-list' );
			jQuery( '#grid_wishlist' ).removeClass( 'active' );
			jQuery( this ).addClass( 'active' );
			jQuery('#listing-wishlist, .load-more-area').fadeIn(1000);
		}
	});

	jQuery(document).on('click','#grid_wishlist',function(){
		if (!jQuery(this).hasClass('active')){
			jQuery('#listing-wishlist, .load-more-area').hide();
			jQuery( '#listing-wishlist' ).removeClass( 'products-list' );
			jQuery( '#listing-wishlist' ).addClass( 'products-3x' );
			jQuery( '#list_wishlist' ).removeClass( 'active' );
			jQuery( this ).addClass( 'active' );
			jQuery('#listing-wishlist, .load-more-area').fadeIn(1000);
		}
	});

	//sorting grid/list
	jQuery(document).on('click','#list_news',function(){
		if (!jQuery(this).hasClass('active')) {
			jQuery('#listing-news, .load-more-area').hide();
			jQuery( '#listing-news' ).removeClass( 'blogs-4x' );
			jQuery( '#listing-news' ).addClass( 'blogs-list' );
			jQuery( '#grid_news' ).removeClass( 'active' );
			jQuery( this ).addClass( 'active' );
			jQuery('#listing-news, .load-more-area').fadeIn(1000);
		}
	});

	jQuery(document).on('click','#grid_news',function(){
		if (!jQuery(this).hasClass('active')){
			jQuery('#listing-news, .load-more-area').hide();
			jQuery( '#listing-news' ).removeClass( 'blogs-list' );
			jQuery( '#listing-news' ).addClass( 'blogs-4x' );
			jQuery( '#list_news' ).removeClass( 'active' );
			jQuery( this ).addClass( 'active' );
			jQuery('#listing-news, .load-more-area').fadeIn(1000);
		}
	});

	/*$(".show_commentsandnotes_container").click(function () {
		$('.commentsandnotes_bg').fadeIn(1000, function() {
		   $('.commentsandnotes_bg').addClass('show');
		});
		$('.commentsandnotes_container').fadeIn(1000, function() {
		   $('.commentsandnotes_container').addClass('show');
		});
	});
	$(".commentsandnotes_bg").click(function () {
		$('.commentsandnotes_bg').fadeOut(1000, function() {
		   $('.commentsandnotes_bg').removeClass('show');
		});
		$('.commentsandnotes_container').fadeOut(1000, function() {
		   $('.commentsandnotes_container').removeClass('show');
		});
	});*/



	// This button will increment the value
	jQuery('.qtyplus').click(function(e){
		// Stop acting like a button
		e.preventDefault();
		// Get the field name
		fieldName = jQuery(this).attr('field');
		// Get its current value
		var currentVal = parseInt(jQuery(this).prev('.qty').val());
		// If is not undefined
		if (!isNaN(currentVal)) {

		} else {
			// Otherwise put a 0 there
			jQuery(this).prev('.qty').val(0);
		}

		var qty = jQuery('.qty').val();
		var products_price = jQuery('#products_price').val();
		var total_price = parseFloat(qty) * parseFloat(products_price);
		jQuery('.total_price').html('$'+total_price.toFixed(2));
	});

	// This button will decrement the value till 0

	jQuery(".qtyminus").click(function(e) {

		// Stop acting like a button
		e.preventDefault();

		// Get the field name
		fieldName = jQuery(this).attr('field');

		// Get its current value
		var currentVal = parseInt(jQuery(this).next('.qty').val());
		// If it isn't undefined or its greater than 0
		if (!isNaN(currentVal) && currentVal > 1) {
			// Decrement one
			jQuery(this).next('.qty').val(currentVal - 1);
		} else {

			// Otherwise put a 0 there
			jQuery(this).next('.qty').val(1);

		}

		var qty = jQuery('.qty').val();
		var products_price = jQuery('#products_price').val();
		var total_price = parseFloat(qty) * parseFloat(products_price);
		jQuery('.total_price').html('$'+total_price.toFixed(2));

	});


	//cart page

jQuery(document).on('focusout','.qty',function(){
	var minimum = '1';
	var maximum = jQuery(this).attr('max');
	var current = jQuery(this).val();

	if( parseInt(current) > parseInt(maximum)){
		jQuery(this).val(maximum);
	}

	if(current<minimum){
		jQuery(this).val(minimum);
	}

	var products_price = jQuery('#products_price').val();
	var total_price = parseFloat(jQuery(this).val()) * parseFloat(products_price);
	jQuery('.total_price').html('$'+total_price.toFixed(2));

});

	function cart_item_price(){

		var subtotal = 0;
		jQuery(".cart_item_price").each(function() {
			subtotal= parseFloat(subtotal) + parseFloat(jQuery(this).val());
		});
		jQuery('#subtotal').html('$'+subtotal);

		var discount = 0;
		jQuery(".discount_price_hidden").each(function() {
			discount =  parseFloat(discount) - parseFloat(jQuery(this).val());
		});

		jQuery('.discount_price').val(Math.abs(discount));

		jQuery('#discount').html('$'+Math.abs(discount));

		//total value
		var total_price = parseFloat(subtotal) - parseFloat(discount);
		jQuery('#total_price').html('$'+total_price);
	};

	//default_address
	jQuery(document).on('click', '.default_address', function(e){
		jQuery('#loader').css('display','flex');
		var address_id = jQuery(this).attr('address_id');
		jQuery.ajax({
			url: 'http://demo.laravelcommerce.com/myDefaultAddress',
			type: "POST",
			data: '&address_id='+address_id,

			success: function (res) {
				 window.location = 'shipping-address?action=default';
			},

		});

	});



	//deleteMyAddress
	jQuery(document).on('click', '.deleteMyAddress', function(e){
		jQuery('#loader').css('display','flex');
		var address_id = jQuery(this).attr('address_id');
		jQuery.ajax({
			url: 'http://demo.laravelcommerce.com/delete-address',
			type: "POST",
			data: '&address_id='+address_id,

			success: function (res) {
				window.location = 'shipping-address?action=detele';
			},
		});
	});

jQuery('.slide-toggle').on('click', function(event){
 jQuery('.color-panel').toggleClass('active');
});

	 jQuery( function() {
	  var maximum_price = jQuery( ".maximum_price" ).val();
	  jQuery( "#slider-range" ).slider({
		range: true,
		min: 0,
		max: maximum_price,
		values: [ 0, maximum_price ],
		slide: function( event, ui ) {
			jQuery('#min_price').val(ui.values[ 0 ] );
			jQuery('#max_price').val(ui.values[ 1 ] );

			jQuery('#min_price_show').val( ui.values[ 0 ] );
			jQuery('#max_price_show').val( ui.values[ 1 ] );
		},
		create: function(event, ui){
			jQuery(this).slider('value',20);
		}
	   });
	   jQuery( "#min_price_show" ).val( jQuery( "#slider-range" ).slider( "values", 0 ) );
	   jQuery( "#max_price_show" ).val(jQuery( "#slider-range" ).slider( "values", 1 ) );
	   //jQuery( "#slider-range" ).slider( "option", "max", 50 );
	 });




//tooltip enable
jQuery(function () {
  jQuery('[data-toggle="tooltip"]').tooltip()
});

function initialize(location){
			var address = 'Latitude, Longitude';
		var map = new google.maps.Map(document.getElementById('googleMap'), {
		mapTypeId: google.maps.MapTypeId.TERRAIN,
		zoom: 13
	});
	var geocoder = new google.maps.Geocoder();
	geocoder.geocode({
		'address': address
	},
	function(results, status) {
		if(status == google.maps.GeocoderStatus.OK) {
		 new google.maps.Marker({
			position: results[0].geometry.location,
			map: map
		 });
		 map.setCenter(results[0].geometry.location);
		}
	});
   }

//default product cart
jQuery(document).on('click', '.cart', function(e){
	var parent = jQuery(this);
	var products_id = jQuery(this).attr('products_id');
	var message ;
	jQuery.ajax({
		url: 'http://demo.laravelcommerce.com/addToCart',
		type: "POST",
		data: '&products_id='+products_id,
		success: function (res) {
			if(res.trim() == "already added"){
			}else{
				jQuery('.head-cart-content').html(res);
				jQuery(parent).removeClass('cart');
				jQuery(parent).addClass('active');
				jQuery(parent).html("Added!");
			}
			message = "Product is added!";
			notification(message);
		},
	});

});



});


//ready doument end
jQuery('.dropdown-menu').on('click', function(event){
	// The event won't be propagated up to the document NODE and
	// therefore delegated events won't be fired
	event.stopPropagation();
});
jQuery(".alert.fade").fadeTo(2000, 500).slideUp(500, function(){
    jQuery(".alert.fade").slideUp(500);
});

function delete_cart_product(cart_id){
	jQuery('#loader').css('display','flex');
	var id = cart_id;
	jQuery.ajax({
		url: 'http://demo.laravelcommerce.com/deleteCart',
		type: "GET",
		data: '&id='+id+'&type=header cart',
		success: function (res) {
			window.location.reload(true);
		},
	});
};

//paymentMethods
function paymentMethods(){
	//jQuery('#loader').css('display','flex');
	var payment_method = jQuery(".payment_method:checked").val();
	jQuery(".payment_btns").hide();

	jQuery("#"+payment_method+'_button').show();

	jQuery.ajax({
		url: 'http://demo.laravelcommerce.com/paymentComponent',
		type: "POST",
		data: '&payment_method='+payment_method,
		success: function (res) {
			//jQuery('#loader').hide();
		},
	});
}

//notification
function notification(message) {
	jQuery('#message_content').html(message);
	var x = document.getElementById("message_content");
	x.className = "show";
	setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
}

function passwordMatch(){

	var password = jQuery('#password').val();
	var re_password = jQuery('#re_password').val();

	if(password == re_password){
		return 'matched';
	}else{
		return 'error';
	}
}

function getZones() {
	jQuery('#loader').css('display','flex');
	var country_id = jQuery('#entry_country_id').val();
	jQuery.ajax({
		url: 'http://demo.laravelcommerce.com/ajaxZones',
		type: "POST",
		//data: '&country_id='+country_id,
		 data: {'country_id': country_id},

		success: function (res) {
			var i;
			var showData = [];
			for (i = 0; i < res.length; ++i) {
				var j = i + 1;
				showData[i] = "<option value='"+res[i].zone_id+"'>"+res[i].zone_name+"</option>";
			}
			showData.push("<option value='Other'>Other</option>");
			jQuery("#entry_zone_id").html(showData);
			jQuery('#loader').hide();
		},
	});

};

function getBillingZones() {
	console.log('here');
	jQuery('#loader').css('display','flex');
	var country_id = jQuery('#billing_countries_id').val();
	jQuery.ajax({
		url: 'http://demo.laravelcommerce.com/ajaxZones',
		type: "POST",
		 data: {'country_id': country_id},

		success: function (res) {
			var i;
			var showData = [];
			for (i = 0; i < res.length; ++i) {
				var j = i + 1;
				showData[i] = "<option value='"+res[i].zone_id+"'>"+res[i].zone_name+"</option>";
			}
			showData.push("<option value='Other'>Other</option>");
			jQuery("#billing_zone_id").html(showData);
			jQuery('#loader').hide();
		},
	});

};

function getZonesBilling() {
	var field_name = jQuery('.shipping_data:checked');
	var mehtod_name = jQuery(field_name).attr('method_name');
	var shipping_price = jQuery(field_name).attr('shipping_price');
	jQuery("#mehtod_name").val(mehtod_name);
	jQuery("#shipping_price").val(shipping_price);
}

'use strict';
function showPreview(objFileInput) {
	if (objFileInput.files[0]) {
		var fileReader = new FileReader();
		fileReader.onload = function (e) {
			jQuery("#uploaded_image").html('<img src="'+e.target.result+'" width="150px" height="150px" class="upload-preview" />');
			jQuery("#uploaded_image").css('opacity','1.0');
			jQuery(".upload-choose-icon").css('opacity','0.8');
		}
		fileReader.readAsDataURL(objFileInput.files[0]);
	}
}

jQuery(document).ready(function() {
  /******************************
      BOTTOM SCROLL TOP BUTTON
   ******************************/

  // declare variable
  var scrollTop = jQuery(".floating-top");

  jQuery(window).scroll(function() {
    // declare variable
    var topPos = jQuery(this).scrollTop();

    // if user scrolls down - show scroll to top button
    if (topPos > 150) {
      jQuery(scrollTop).css("opacity", "1");

    } else {
      jQuery(scrollTop).css("opacity", "0");
    }

  });

  //Click event to scroll to top
  jQuery(scrollTop).click(function() {
    jQuery('html, body').animate({
      scrollTop: 0
    }, 800);
    return false;

  });
});


jQuery('body').on('mouseenter mouseleave','.dropdown.open',function(e){
  var _d=jQuery(e.target).closest('.dropdown');
  _d.addClass('show');
  setTimeout(function(){
    _d[_d.is(':hover')?'addClass':'removeClass']('show');

  },300);
  jQuery('.dropdown-menu', _d).attr('aria-expanded',_d.is(':hover'));
});



jQuery('.nav-index').on('show.bs.tab', function (e) {
	  console.log('fire');
	  e.target // newly activated tab
	  e.relatedTarget // previous active tab
	  jQuery('.overlay').show();
})
  jQuery('.nav-index').on('hidden.bs.tab', function (e) {
	  console.log('expire');
	  e.target // newly activated tab
	  e.relatedTarget // previous active tab
	  jQuery('.overlay').hide();
})
</script>
&gt;&gt;&gt;&gt;&gt;&gt;
    <!-- ./end of js scripts -->




<div class="ui-selectmenu-menu ui-front"><ul aria-hidden="true" aria-labelledby="change_language-button" id="change_language-menu" role="listbox" tabindex="0" class="ui-menu ui-corner-bottom ui-widget ui-widget-content ui-menu-icons customicons"></ul></div><div class="ui-selectmenu-menu ui-front"><ul aria-hidden="true" aria-labelledby="category_id-button" id="category_id-menu" role="listbox" tabindex="0" class="ui-menu ui-corner-bottom ui-widget ui-widget-content"></ul></div></body></html>
