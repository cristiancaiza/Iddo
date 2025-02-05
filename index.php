<?php
    $pageTitle = "On-demand Last-mile Delivery | Iddo";
    $pageDescription = "On-demand last-mile delivery service by Iddo. Fast, reliable, and efficient delivery solutions.";
    $pageKeywords = "Iddo, delivery, last-mile delivery, on-demand delivery, fast delivery";
    $pageAuthor = "Iddo";
    $ogImage = "assets/images/og-image.png";
    $ogUrl = "https://www.iddo.com";
    $twitterImage = "assets/images/twitter-image.png";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $pageDescription; ?>">
    <meta name="keywords" content="<?php echo $pageKeywords; ?>">
    <meta name="author" content="<?php echo $pageAuthor; ?>">
    <link rel="icon" href="assets/images/favicon/7.png" type="image/x-icon">
    <title><?php echo $pageTitle; ?></title>

     <!-- Open Graph Meta Tags -->
     <meta property="og:title" content="<?php echo $pageTitle; ?>">
    <meta property="og:description" content="<?php echo $pageDescription; ?>">
    <meta property="og:image" content="<?php echo $ogImage; ?>">
    <meta property="og:url" content="<?php echo $ogUrl; ?>">
    <meta property="og:type" content="website">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo $pageTitle; ?>">
    <meta name="twitter:description" content="<?php echo $pageDescription; ?>">
    <meta name="twitter:image" content="<?php echo $twitterImage; ?>">

    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap">

    <!-- bootstrap css -->
    <link id="rtl-link" rel="stylesheet" type="text/css" href="assets/css/vendors/bootstrap.css">

    <!-- wow css -->
    <link rel="stylesheet" href="assets/css/animate.min.css">

    <!-- Iconly css -->
    <link rel="stylesheet" type="text/css" href="assets/css/bulk-style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/animate.css">

    <!-- Template css -->
    <link id="color-link" rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body class="theme-color-6">

    <!-- Loader Start -->
    <div class="fullpage-loader">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
    <!-- Loader End -->
    <?php include_once 'header.php'; ?>

    <!-- mobile fix menu start -->
    <div class="mobile-menu d-md-none d-block mobile-cart">
        <ul>
            <li class="active">
                <a href="index.html">
                    <i class="iconly-Home icli"></i>
                    <span>Home</span>
                </a>
            </li>

            <li class="mobile-category">
                <a href="javascript:void(0)">
                    <i class="iconly-Category icli js-link"></i>
                    <span>Category</span>
                </a>
            </li>

            <li>
                <a href="search.html" class="search-box">
                    <i class="iconly-Search icli"></i>
                    <span>Search</span>
                </a>
            </li>

            <li>
                <a href="wishlist.html" class="notifi-wishlist">
                    <i class="iconly-Heart icli"></i>
                    <span>My Wish</span>
                </a>
            </li>

            <li>
                <a href="cart.html">
                    <i class="iconly-Bag-2 icli fly-cate"></i>
                    <span>Cart</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- mobile fix menu end -->

    <!-- Home Section Start -->
    <section class="home-section pt-2 ratio_50">
        <div class="container-fluid-lg">
            <div class="row g-4">
                <div class="col-xl-9 col-lg-8 ratio_50_1">
                    <div class="home-contain furniture-contain-2">
                        <img src="assets/images/furniture/banner/1.jpg" class="bg-img blur-up lazyload" alt="">
                        <div class="home-detail p-top-left mend-auto w-100">
                            <div>
                                <h6>Exclusive offer <span>30% Off</span></h6>
                                <h1 class="text-uppercase poster-1 text-content furniture-heading">Stay home &
                                    delivered your <span class="daily">Daily Needs</span></h1>
                                <button onclick="location.href = 'shop-left-sidebar.html';"
                                    class="btn btn-furniture mt-xxl-4 mt-3 home-button mend-auto">Shop Now <i
                                        class="fa-solid fa-right-long ms-2 icon"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 d-lg-inline-block d-none">
                    <div class="home-contain h-100 home-furniture">
                        <img src="assets/images/furniture/banner/2.png" class="bg-img blur-up lazyload" alt="">
                        <div class="home-detail p-top-left home-p-sm feature-detail mend-auto">
                            <div>
                                <h2 class="mt-0 theme-color text-kaushan fw-normal">Exclusive</h2>
                                <h3 class="furniture-content">Furniture</h3>
                                <a href="shop-left-sidebar.html"
                                    class="shop-button btn btn-furniture mt-0 d-inline-block btn-md text-content">Shop
                                    Now <i class="fa-solid fa-right-long ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Home Section End -->

    <!-- Service Section Start -->
    <section class="service-section">
        <div class="container-fluid-lg">
            <div class="row g-3 row-cols-xxl-5 row-cols-lg-3 row-cols-md-2">
                <div>
                    <div class="service-contain-2">
                        <svg class="icon-width">
                            <use xlink:href="assets/svg/svg/service-icon-4.svg#shipping"></use>
                        </svg>
                        <div class="service-detail">
                            <h3>Free Shipping</h3>
                            <h6 class="text-content">Free Shipping world wide</h6>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="service-contain-2">
                        <svg class="icon-width">
                            <use xlink:href="assets/svg/svg/service-icon-4.svg#service"></use>
                        </svg>
                        <div class="service-detail">
                            <h3>24 x 7 Service</h3>
                            <h6 class="text-content">Online Service For 24 x 7</h6>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="service-contain-2">
                        <svg class="icon-width">
                            <use xlink:href="assets/svg/svg/service-icon-4.svg#pay"></use>
                        </svg>
                        <div class="service-detail">
                            <h3>Online Pay</h3>
                            <h6 class="text-content">Online Payment Avaible</h6>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="service-contain-2">
                        <svg class="icon-width">
                            <use xlink:href="assets/svg/svg/service-icon-4.svg#offer"></use>
                        </svg>
                        <div class="service-detail">
                            <h3>Festival Offer</h3>
                            <h6 class="text-content">Super Sale Upto 50% off</h6>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="service-contain-2">
                        <svg class="icon-width">
                            <use xlink:href="assets/svg/svg/service-icon-4.svg#return"></use>
                        </svg>
                        <div class="service-detail">
                            <h3>100% Original</h3>
                            <h6 class="text-content">100% Money Back</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Service Section End -->

    <!-- Product Section Start -->
    <section class="product-section">
        <div class="container-fluid-lg">
            <div class="row g-sm-4 g-3">
                <div class="col-xxl-9 col-xl-8">
                    <div class="title title-flex">
                        <div>
                            <h2>Top Save Today</h2>
                            <span class="title-leaf">
                                <svg class="icon-width">
                                    <use xlink:href="assets/svg/leaf.svg#leaf"></use>
                                </svg>
                            </span>
                            <p>Don't miss this opportunity at a special discount just for this week.</p>
                        </div>
                        <div class="timing-box">
                            <div class="timing">
                                <i data-feather="clock"></i>
                                <h6 class="name">Expires in :</h6>
                                <div class="time" id="clockdiv-1" data-hours="1" data-minutes="2" data-seconds="3">
                                    <ul>
                                        <li>
                                            <div class="counter">
                                                <div class="days">
                                                    <h6></h6>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="counter">
                                                <div class="hours">
                                                    <h6></h6>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="counter">
                                                <div class="minutes">
                                                    <h6></h6>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="counter">
                                                <div class="seconds">
                                                    <h6></h6>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="section-b-space">
                        <div class="row row-cols-xxl-5 row-cols-md-4 row-cols-sm-3 row-cols-2 g-sm-4 g-3 no-arrow">
                            <div>
                                <div class="product-box product-white-bg wow fadeIn">
                                    <div class="product-image">
                                        <a href="product-left-thumbnail.html">
                                            <img src="assets/images/furniture/1.png"
                                                class="img-fluid blur-up lazyload" alt="">
                                        </a>
                                        <ul class="product-option">
                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                                <a href="wishlist.html" class="notifi-wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-detail position-relative">
                                        <a href="product-left-thumbnail.html">
                                            <h6 class="name">Home Decor Lucky Deer Family Matte Finish Ceramic Figures
                                            </h6>
                                        </a>

                                        <h6 class="sold weight text-content fw-normal">1 KG</h6>

                                        <h6 class="price theme-color">$ 80.00</h6>

                                        <div class="add-to-cart-btn-2 add-to-cart-box addtocart_btn">
                                            <button class="btn addcart-button btn buy-button"><i
                                                    class="fa-solid fa-plus"></i></button>
                                            <div class="cart_qty qty-box-2">
                                                <div class="input-group">
                                                    <button type="button" class="qty-left-minus" data-type="minus"
                                                        data-field="">
                                                        <i class="fa fa-minus"></i>
                                                    </button>
                                                    <input class="form-control input-number qty-input" type="text"
                                                        name="quantity" value="1">
                                                    <button type="button" class="qty-right-plus" data-type="plus"
                                                        data-field="">
                                                        <i class="fa fa-plus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="product-box product-white-bg wow fadeIn" data-wow-delay="0.1s">
                                    <div class="product-image">
                                        <a href="product-left-thumbnail.html">
                                            <img src="assets/images/furniture/2.png"
                                                class="img-fluid blur-up lazyload" alt="">
                                        </a>
                                        <ul class="product-option">
                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                                <a href="wishlist.html" class="notifi-wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-detail position-relative">
                                        <a href="product-left-thumbnail.html">
                                            <h6 class="name">luxury comfort full size 17*27 jumbo border pillow</h6>
                                        </a>

                                        <h6 class="sold weight text-content fw-normal">1 KG</h6>

                                        <h6 class="price theme-color">$ 80.00</h6>

                                        <div class="add-to-cart-btn-2 addtocart_btn">
                                            <button class="btn addcart-button btn buy-button"><i
                                                    class="fa-solid fa-plus"></i></button>
                                            <div class="cart_qty qty-box-2">
                                                <div class="input-group">
                                                    <button type="button" class="qty-left-minus" data-type="minus"
                                                        data-field="">
                                                        <i class="fa fa-minus"></i>
                                                    </button>
                                                    <input class="form-control input-number qty-input" type="text"
                                                        name="quantity" value="1">
                                                    <button type="button" class="qty-right-plus" data-type="plus"
                                                        data-field="">
                                                        <i class="fa fa-plus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="product-box product-white-bg wow fadeIn">
                                    <div class="product-image">
                                        <a href="product-left-thumbnail.html">
                                            <img src="assets/images/furniture/3.png"
                                                class="img-fluid blur-up lazyload" alt="">
                                        </a>
                                        <ul class="product-option">
                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                                <a href="wishlist.html" class="notifi-wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-detail position-relative">
                                        <a href="product-left-thumbnail.html">
                                            <h6 class="name">Coral Bean Bag Chair</h6>
                                        </a>

                                        <h6 class="sold weight text-content fw-normal">1 KG</h6>

                                        <h6 class="price theme-color">$ 80.00</h6>

                                        <div class="add-to-cart-btn-2 addtocart_btn">
                                            <button class="btn addcart-button btn buy-button"><i
                                                    class="fa-solid fa-plus"></i></button>
                                            <div class="cart_qty qty-box-2">
                                                <div class="input-group">
                                                    <button type="button" class="qty-left-minus" data-type="minus"
                                                        data-field="">
                                                        <i class="fa fa-minus"></i>
                                                    </button>
                                                    <input class="form-control input-number qty-input" type="text"
                                                        name="quantity" value="1">
                                                    <button type="button" class="qty-right-plus" data-type="plus"
                                                        data-field="">
                                                        <i class="fa fa-plus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="product-box product-white-bg wow fadeIn" data-wow-delay="0.1s">
                                    <div class="product-image">
                                        <a href="product-left-thumbnail.html">
                                            <img src="assets/images/furniture/4.png"
                                                class="img-fluid blur-up lazyload" alt="">
                                        </a>
                                        <ul class="product-option">
                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                                <a href="wishlist.html" class="notifi-wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-detail position-relative">
                                        <a href="product-left-thumbnail.html">
                                            <h6 class="name">ELSTONE HOME White Colour Bath Towel</h6>
                                        </a>

                                        <h6 class="sold weight text-content fw-normal">1 KG</h6>

                                        <h6 class="price theme-color">$ 80.00</h6>

                                        <div class="add-to-cart-btn-2 addtocart_btn">
                                            <button class="btn addcart-button btn buy-button"><i
                                                    class="fa-solid fa-plus"></i></button>
                                            <div class="cart_qty qty-box-2">
                                                <div class="input-group">
                                                    <button type="button" class="qty-left-minus" data-type="minus"
                                                        data-field="">
                                                        <i class="fa fa-minus"></i>
                                                    </button>
                                                    <input class="form-control input-number qty-input" type="text"
                                                        name="quantity" value="1">
                                                    <button type="button" class="qty-right-plus" data-type="plus"
                                                        data-field="">
                                                        <i class="fa fa-plus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="product-box product-white-bg wow fadeIn">
                                    <div class="product-image">
                                        <a href="product-left-thumbnail.html">
                                            <img src="assets/images/furniture/5.png"
                                                class="img-fluid blur-up lazyload" alt="">
                                        </a>
                                        <ul class="product-option">
                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                                <a href="wishlist.html" class="notifi-wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-detail position-relative">
                                        <a href="product-left-thumbnail.html">
                                            <h6 class="name">Benefits of using natural stone tile flooring</h6>
                                        </a>

                                        <h6 class="sold weight text-content fw-normal">1 KG</h6>

                                        <h6 class="price theme-color">$ 80.00</h6>

                                        <div class="add-to-cart-btn-2 addtocart_btn">
                                            <button class="btn addcart-button btn buy-button"><i
                                                    class="fa-solid fa-plus"></i></button>
                                            <div class="cart_qty qty-box-2">
                                                <div class="input-group">
                                                    <button type="button" class="qty-left-minus" data-type="minus"
                                                        data-field="">
                                                        <i class="fa fa-minus"></i>
                                                    </button>
                                                    <input class="form-control input-number qty-input" type="text"
                                                        name="quantity" value="1">
                                                    <button type="button" class="qty-right-plus" data-type="plus"
                                                        data-field="">
                                                        <i class="fa fa-plus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="product-box product-white-bg wow fadeIn" data-wow-delay="0.1s">
                                    <div class="product-image">
                                        <a href="product-left-thumbnail.html">
                                            <img src="assets/images/furniture/6.png"
                                                class="img-fluid blur-up lazyload" alt="">
                                        </a>
                                        <ul class="product-option">
                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                                <a href="wishlist.html" class="notifi-wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-detail position-relative">
                                        <a href="product-left-thumbnail.html">
                                            <h6 class="name">Nature Baby Merino Knit Bassinet Blanket</h6>
                                        </a>

                                        <h6 class="sold weight text-content fw-normal">1 KG</h6>

                                        <h6 class="price theme-color">$ 80.00</h6>

                                        <div class="add-to-cart-btn-2 addtocart_btn">
                                            <button class="btn addcart-button btn buy-button"><i
                                                    class="fa-solid fa-plus"></i></button>
                                            <div class="cart_qty qty-box-2">
                                                <div class="input-group">
                                                    <button type="button" class="qty-left-minus" data-type="minus"
                                                        data-field="">
                                                        <i class="fa fa-minus"></i>
                                                    </button>
                                                    <input class="form-control input-number qty-input" type="text"
                                                        name="quantity" value="1">
                                                    <button type="button" class="qty-right-plus" data-type="plus"
                                                        data-field="">
                                                        <i class="fa fa-plus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="product-box product-white-bg wow fadeIn">
                                    <div class="product-image">
                                        <a href="product-left-thumbnail.html">
                                            <img src="assets/images/furniture/7.png"
                                                class="img-fluid blur-up lazyload" alt="">
                                        </a>
                                        <ul class="product-option">
                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                                <a href="wishlist.html" class="notifi-wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-detail position-relative">
                                        <a href="product-left-thumbnail.html">
                                            <h6 class="name">Wooden Tea Cup Coaster Coffee Drinks</h6>
                                        </a>

                                        <h6 class="sold weight text-content fw-normal">1 KG</h6>

                                        <h6 class="price theme-color">$ 80.00</h6>

                                        <div class="add-to-cart-btn-2 addtocart_btn">
                                            <button class="btn addcart-button btn buy-button"><i
                                                    class="fa-solid fa-plus"></i></button>
                                            <div class="cart_qty qty-box-2">
                                                <div class="input-group">
                                                    <button type="button" class="qty-left-minus" data-type="minus"
                                                        data-field="">
                                                        <i class="fa fa-minus"></i>
                                                    </button>
                                                    <input class="form-control input-number qty-input" type="text"
                                                        name="quantity" value="1">
                                                    <button type="button" class="qty-right-plus" data-type="plus"
                                                        data-field="">
                                                        <i class="fa fa-plus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div>

                                <div class="product-box product-white-bg wow fadeIn" data-wow-delay="0.1s">
                                    <div class="product-image">
                                        <a href="product-left-thumbnail.html">
                                            <img src="assets/images/furniture/8.png"
                                                class="img-fluid blur-up lazyload" alt="">
                                        </a>
                                        <ul class="product-option">
                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                                <a href="wishlist.html" class="notifi-wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-detail position-relative">
                                        <a href="product-left-thumbnail.html">
                                            <h6 class="name">Goddess Marble Hexagon Party Plates</h6>
                                        </a>

                                        <h6 class="sold weight text-content fw-normal">1 KG</h6>

                                        <h6 class="price theme-color">$ 80.00</h6>

                                        <div class="add-to-cart-btn-2 addtocart_btn">
                                            <button class="btn addcart-button btn buy-button"><i
                                                    class="fa-solid fa-plus"></i></button>
                                            <div class="cart_qty qty-box-2">
                                                <div class="input-group">
                                                    <button type="button" class="qty-left-minus" data-type="minus"
                                                        data-field="">
                                                        <i class="fa fa-minus"></i>
                                                    </button>
                                                    <input class="form-control input-number qty-input" type="text"
                                                        name="quantity" value="1">
                                                    <button type="button" class="qty-right-plus" data-type="plus"
                                                        data-field="">
                                                        <i class="fa fa-plus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="product-box product-white-bg wow fadeIn">
                                    <div class="product-image">
                                        <a href="product-left-thumbnail.html">
                                            <img src="assets/images/furniture/9.png"
                                                class="img-fluid blur-up lazyload" alt="">
                                        </a>
                                        <ul class="product-option">
                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                                <a href="wishlist.html" class="notifi-wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-detail position-relative">
                                        <a href="product-left-thumbnail.html">
                                            <h6 class="name">Handmade Brown Mango Wooden Tray Square</h6>
                                        </a>

                                        <h6 class="sold weight text-content fw-normal">1 KG</h6>

                                        <h6 class="price theme-color">$ 80.00</h6>

                                        <div class="add-to-cart-btn-2 addtocart_btn">
                                            <button class="btn addcart-button btn buy-button"><i
                                                    class="fa-solid fa-plus"></i></button>
                                            <div class="cart_qty qty-box-2">
                                                <div class="input-group">
                                                    <button type="button" class="qty-left-minus" data-type="minus"
                                                        data-field="">
                                                        <i class="fa fa-minus"></i>
                                                    </button>
                                                    <input class="form-control input-number qty-input" type="text"
                                                        name="quantity" value="1">
                                                    <button type="button" class="qty-right-plus" data-type="plus"
                                                        data-field="">
                                                        <i class="fa fa-plus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div>

                                <div class="product-box product-white-bg wow fadeIn" data-wow-delay="0.1s">
                                    <div class="product-image">
                                        <a href="product-left-thumbnail.html">
                                            <img src="assets/images/furniture/10.png"
                                                class="img-fluid blur-up lazyload" alt="">
                                        </a>
                                        <ul class="product-option">
                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                                <a href="wishlist.html" class="notifi-wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-detail position-relative">
                                        <a href="product-left-thumbnail.html">
                                            <h6 class="name">heavy duty cane round basket</h6>
                                        </a>

                                        <h6 class="sold weight text-content fw-normal">1 KG</h6>

                                        <h6 class="price theme-color">$ 80.00</h6>

                                        <div class="add-to-cart-btn-2 addtocart_btn">
                                            <button class="btn addcart-button btn buy-button"><i
                                                    class="fa-solid fa-plus"></i></button>
                                            <div class="cart_qty qty-box-2">
                                                <div class="input-group">
                                                    <button type="button" class="qty-left-minus" data-type="minus"
                                                        data-field="">
                                                        <i class="fa fa-minus"></i>
                                                    </button>
                                                    <input class="form-control input-number qty-input" type="text"
                                                        name="quantity" value="1">
                                                    <button type="button" class="qty-right-plus" data-type="plus"
                                                        data-field="">
                                                        <i class="fa fa-plus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="title">
                        <h2>Bowse by Categories</h2>
                        <span class="title-leaf">
                            <svg class="icon-width">
                                <use xlink:href="assets/svg/leaf.svg#leaf"></use>
                            </svg>
                        </span>
                        <p>Top Categories Of The Week</p>
                    </div>

                    <div class="category-slider-2 product-wrapper no-arrow">
                        <div>
                            <a href="shop-left-sidebar.html" class="category-box category-dark">
                                <div>
                                    <img src="assets/images/furniture/icon/decorations.svg" class="blur-up lazyload"
                                        alt="">
                                    <h5>Decorations</h5>
                                </div>
                            </a>
                        </div>

                        <div>
                            <a href="shop-left-sidebar.html" class="category-box category-dark">
                                <div>
                                    <img src="assets/images/furniture/icon/pillows.svg" class="blur-up lazyload"
                                        alt="">
                                    <h5>Bed linen</h5>
                                </div>
                            </a>
                        </div>

                        <div>
                            <a href="shop-left-sidebar.html" class="category-box category-dark">
                                <div>
                                    <img src="assets/images/furniture/icon/cushions.svg" class="blur-up lazyload"
                                        alt="">
                                    <h5>Cushions</h5>
                                </div>
                            </a>
                        </div>

                        <div>
                            <a href="shop-left-sidebar.html" class="category-box category-dark">
                                <div>
                                    <img src="assets/images/furniture/icon/blankets.svg" class="blur-up lazyload"
                                        alt="">
                                    <h5>Blankets</h5>
                                </div>
                            </a>
                        </div>

                        <div>
                            <a href="shop-left-sidebar.html" class="category-box category-dark">
                                <div>
                                    <img src="assets/images/furniture/icon/gift.svg" class="blur-up lazyload" alt="">
                                    <h5>Giftwraps</h5>
                                </div>
                            </a>
                        </div>

                        <div>
                            <a href="shop-left-sidebar.html" class="category-box category-dark">
                                <div>
                                    <img src="assets/images/furniture/icon/sleepware.svg" class="blur-up lazyload"
                                        alt="">
                                    <h5>Sleepwear</h5>
                                </div>
                            </a>
                        </div>

                        <div>
                            <a href="shop-left-sidebar.html" class="category-box category-dark">
                                <div>
                                    <img src="assets/images/furniture/icon/bakeware.svg" class="blur-up lazyload"
                                        alt="">
                                    <h5>Cookware & Bakeware</h5>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="section-t-space section-b-space">
                        <div class="row g-md-4 g-3">
                            <div class="col-md-6">
                                <div class="banner-contain hover-effect">
                                    <img src="assets/images/furniture/banner/4.jpg" class="bg-img blur-up lazyload"
                                        alt="">
                                    <div class="banner-details p-center-left p-4">
                                        <div>
                                            <h3 class="text-kaushan text-yellow">50% offer</h3>
                                            <h4 class="theme-color mb-2 fw-normal"><span
                                                    class="theme-color fw-bold">Restyling</span> your Home</h4>
                                            <button onclick="location.href = 'shop-left-sidebar.html';"
                                                class="btn btn-furniture btn-sm mend-auto">Shop Now <i
                                                    class="fa-solid fa-arrow-right icon"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="banner-contain hover-effect">
                                    <img src="assets/images/furniture/banner/5.jpg" class="bg-img blur-up lazyload"
                                        alt="">
                                    <div class="banner-details p-center-left p-4">
                                        <div>
                                            <h3 class="text-kaushan text-yellow">50% offer</h3>
                                            <h4 class="theme-color mb-2 fw-normal"><span class="theme-color fw-bold">New
                                                    Elite</span> Collections</h4>
                                            <button onclick="location.href = 'shop-left-sidebar.html';"
                                                class="btn btn-furniture btn-sm mend-auto">Shop Now <i
                                                    class="fa-solid fa-arrow-right icon"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="title d-block">
                        <h2>Food Cupboard</h2>
                        <span class="title-leaf">
                            <svg class="icon-width">
                                <use xlink:href="assets/svg/leaf.svg#leaf"></use>
                            </svg>
                        </span>
                        <p>A virtual assistant collects the products from your list</p>
                    </div>

                    <div class="row row-cols-xxl-5 row-cols-md-4 row-cols-sm-3 row-cols-2 g-sm-4 g-3 no-arrow">
                        <div>
                            <div class="product-box product-white-bg wow fadeIn">
                                <div class="product-image">
                                    <a href="product-left-thumbnail.html">
                                        <img src="assets/images/furniture/13.png" class="img-fluid blur-up lazyload"
                                            alt="">
                                    </a>
                                    <ul class="product-option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i data-feather="eye"></i>
                                            </a>
                                        </li>

                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="compare.html">
                                                <i data-feather="refresh-cw"></i>
                                            </a>
                                        </li>

                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="wishlist.html" class="notifi-wishlist">
                                                <i data-feather="heart"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-detail position-relative">
                                    <a href="product-left-thumbnail.html">
                                        <h6 class="name">Elama Fine Round Gloss Dinnerware Dish Set</h6>
                                    </a>

                                    <h6 class="sold weight text-content fw-normal">1 KG</h6>

                                    <h6 class="price theme-color">$ 80.00</h6>

                                    <div class="add-to-cart-btn-2 addtocart_btn">
                                        <button class="btn addcart-button btn buy-button"><i
                                                class="fa-solid fa-plus"></i></button>
                                        <div class="cart_qty qty-box-2">
                                            <div class="input-group">
                                                <button type="button" class="qty-left-minus" data-type="minus"
                                                    data-field="">
                                                    <i class="fa fa-minus"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text"
                                                    name="quantity" value="1">
                                                <button type="button" class="qty-right-plus" data-type="plus"
                                                    data-field="">
                                                    <i class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box product-white-bg wow fadeIn" data-wow-delay="0.1s">
                                <div class="product-image">
                                    <a href="product-left-thumbnail.html">
                                        <img src="assets/images/furniture/8.png" class="img-fluid blur-up lazyload"
                                            alt="">
                                    </a>
                                    <ul class="product-option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i data-feather="eye"></i>
                                            </a>
                                        </li>

                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="compare.html">
                                                <i data-feather="refresh-cw"></i>
                                            </a>
                                        </li>

                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="wishlist.html" class="notifi-wishlist">
                                                <i data-feather="heart"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-detail position-relative">
                                    <a href="product-left-thumbnail.html">
                                        <h6 class="name">Goddess Marble Hexagon Party Plates</h6>
                                    </a>

                                    <h6 class="sold weight text-content fw-normal">1 KG</h6>

                                    <h6 class="price theme-color">$ 80.00</h6>

                                    <div class="add-to-cart-btn-2 addtocart_btn">
                                        <button class="btn addcart-button btn buy-button"><i
                                                class="fa-solid fa-plus"></i></button>
                                        <div class="cart_qty qty-box-2">
                                            <div class="input-group">
                                                <button type="button" class="qty-left-minus" data-type="minus"
                                                    data-field="">
                                                    <i class="fa fa-minus"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text"
                                                    name="quantity" value="1">
                                                <button type="button" class="qty-right-plus" data-type="plus"
                                                    data-field="">
                                                    <i class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box product-white-bg wow fadeIn">
                                <div class="product-image">
                                    <a href="product-left-thumbnail.html">
                                        <img src="assets/images/furniture/10.png" class="img-fluid blur-up lazyload"
                                            alt="">
                                    </a>
                                    <ul class="product-option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i data-feather="eye"></i>
                                            </a>
                                        </li>

                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="compare.html">
                                                <i data-feather="refresh-cw"></i>
                                            </a>
                                        </li>

                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="wishlist.html" class="notifi-wishlist">
                                                <i data-feather="heart"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-detail position-relative">
                                    <a href="product-left-thumbnail.html">
                                        <h6 class="name">heavy duty cane round basket</h6>
                                    </a>

                                    <h6 class="sold weight text-content fw-normal">1 KG</h6>

                                    <h6 class="price theme-color">$ 80.00</h6>

                                    <div class="add-to-cart-btn-2 addtocart_btn">
                                        <button class="btn addcart-button btn buy-button"><i
                                                class="fa-solid fa-plus"></i></button>
                                        <div class="cart_qty qty-box-2">
                                            <div class="input-group">
                                                <button type="button" class="qty-left-minus" data-type="minus"
                                                    data-field="">
                                                    <i class="fa fa-minus"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text"
                                                    name="quantity" value="1">
                                                <button type="button" class="qty-right-plus" data-type="plus"
                                                    data-field="">
                                                    <i class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box product-white-bg wow fadeIn" data-wow-delay="0.1s">
                                <div class="product-image">
                                    <a href="product-left-thumbnail.html">
                                        <img src="assets/images/furniture/6.png" class="img-fluid blur-up lazyload"
                                            alt="">
                                    </a>
                                    <ul class="product-option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i data-feather="eye"></i>
                                            </a>
                                        </li>

                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="compare.html">
                                                <i data-feather="refresh-cw"></i>
                                            </a>
                                        </li>

                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="wishlist.html" class="notifi-wishlist">
                                                <i data-feather="heart"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-detail position-relative">
                                    <a href="product-left-thumbnail.html">
                                        <h6 class="name">Nature Baby Merino Knit Bassinet Blanket</h6>
                                    </a>

                                    <h6 class="sold weight text-content fw-normal">1 KG</h6>

                                    <h6 class="price theme-color">$ 80.00</h6>

                                    <div class="add-to-cart-btn-2 addtocart_btn">
                                        <button class="btn addcart-button btn buy-button"><i
                                                class="fa-solid fa-plus"></i></button>
                                        <div class="cart_qty qty-box-2">
                                            <div class="input-group">
                                                <button type="button" class="qty-left-minus" data-type="minus"
                                                    data-field="">
                                                    <i class="fa fa-minus"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text"
                                                    name="quantity" value="1">
                                                <button type="button" class="qty-right-plus" data-type="plus"
                                                    data-field="">
                                                    <i class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box product-white-bg wow fadeIn">
                                <div class="product-image">
                                    <a href="product-left-thumbnail.html">
                                        <img src="assets/images/furniture/4.png" class="img-fluid blur-up lazyload"
                                            alt="">
                                    </a>
                                    <ul class="product-option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i data-feather="eye"></i>
                                            </a>
                                        </li>

                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="compare.html">
                                                <i data-feather="refresh-cw"></i>
                                            </a>
                                        </li>

                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="wishlist.html" class="notifi-wishlist">
                                                <i data-feather="heart"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-detail position-relative">
                                    <a href="product-left-thumbnail.html">
                                        <h6 class="name">ELSTONE HOME White Colour Bath Towel</h6>
                                    </a>

                                    <h6 class="sold weight text-content fw-normal">1 KG</h6>

                                    <h6 class="price theme-color">$ 80.00</h6>

                                    <div class="add-to-cart-btn-2 addtocart_btn">
                                        <button class="btn addcart-button btn buy-button"><i
                                                class="fa-solid fa-plus"></i></button>
                                        <div class="cart_qty qty-box-2">
                                            <div class="input-group">
                                                <button type="button" class="qty-left-minus" data-type="minus"
                                                    data-field="">
                                                    <i class="fa fa-minus"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text"
                                                    name="quantity" value="1">
                                                <button type="button" class="qty-right-plus" data-type="plus"
                                                    data-field="">
                                                    <i class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-3 col-xl-4 d-none d-xl-block">
                    <div class="p-sticky">
                        <div class="category-menu">
                            <h3>Shop By Product</h3>
                            <ul class="border-bottom-0">
                                <li>
                                    <div class="category-list">
                                        <img src="assets/images/furniture/icon/decorations.svg"
                                            class="blur-up lazyload" alt="">
                                        <h5>
                                            <a href="shop-left-sidebar.html">Decorations</a>
                                        </h5>
                                    </div>
                                </li>
                                <li>
                                    <div class="category-list">
                                        <img src="assets/images/furniture/icon/pillows.svg" class="blur-up lazyload"
                                            alt="">
                                        <h5>
                                            <a href="shop-left-sidebar.html">Bed Linen</a>
                                        </h5>
                                    </div>
                                </li>
                                <li>
                                    <div class="category-list">
                                        <img src="assets/images/furniture/icon/cushions.svg" class="blur-up lazyload"
                                            alt="">
                                        <h5>
                                            <a href="shop-left-sidebar.html">Cushions</a>
                                        </h5>
                                    </div>
                                </li>
                                <li>
                                    <div class="category-list">
                                        <img src="assets/images/furniture/icon/blankets.svg" class="blur-up lazyload"
                                            alt="">
                                        <h5>
                                            <a href="shop-left-sidebar.html">Blankets</a>
                                        </h5>
                                    </div>
                                </li>
                                <li>
                                    <div class="category-list">
                                        <img src="assets/images/furniture/icon/gift.svg" class="blur-up lazyload"
                                            alt="">
                                        <h5>
                                            <a href="shop-left-sidebar.html">Giftwraps</a>
                                        </h5>
                                    </div>
                                </li>
                                <li>
                                    <div class="category-list">
                                        <img src="assets/images/furniture/icon/sleepware.svg"
                                            class="blur-up lazyload" alt="">
                                        <h5>
                                            <a href="shop-left-sidebar.html">Sleepwear</a>
                                        </h5>
                                    </div>
                                </li>
                                <li>
                                    <div class="category-list">
                                        <img src="assets/images/furniture/icon/bakeware.svg" class="blur-up lazyload"
                                            alt="">
                                        <h5>
                                            <a href="shop-left-sidebar.html">Cookware & Bakeware</a>
                                        </h5>
                                    </div>
                                </li>
                                <li>
                                    <div class="category-list">
                                        <img src="assets/images/furniture/icon/room-fragrance.svg"
                                            class="blur-up lazyload" alt="">
                                        <h5>
                                            <a href="shop-left-sidebar.html">Room Fragrance</a>
                                        </h5>
                                    </div>
                                </li>
                                <li>
                                    <div class="category-list">
                                        <img src="assets/images/furniture/icon/tableware.svg"
                                            class="blur-up lazyload" alt="">
                                        <h5>
                                            <a href="shop-left-sidebar.html">Servingware & Tableware</a>
                                        </h5>
                                    </div>
                                </li>
                                <li>
                                    <div class="category-list">
                                        <img src="assets/images/furniture/icon/shower.svg" class="blur-up lazyload"
                                            alt="">
                                        <h5>
                                            <a href="shop-left-sidebar.html">Bath & Shower</a>
                                        </h5>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="ratio_156 section-t-space">
                            <div class="home-contain hover-effect">
                                <img src="assets/images/furniture/banner/3.jpg" class="bg-img blur-up lazyload"
                                    alt="">
                                <div class="home-detail p-top-left home-p-medium">
                                    <div>
                                        <h4 class="text-yellow home-banner text-kaushan">New Arrival</h4>
                                        <h3 class="text-uppercase theme-color fw-bold mb-1">Desk Table</h3>
                                        <p class="text-content mb-3">Top Selling Of The Week! Exclusive Offer!</p>
                                        <button onclick="location.href = 'shop-left-sidebar.html';"
                                            class="btn btn-furniture btn-md mend-auto">Shop Now <i
                                                class="fa-solid fa-arrow-right icon"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="section-t-space">
                            <div class="category-menu">
                                <h3>Trending Products</h3>

                                <ul class="product-list border-0 p-0 d-block">
                                    <li>
                                        <div class="offer-product">
                                            <a href="product-left-thumbnail.html" class="offer-image">
                                                <img src="assets/images/furniture/2.png" class="blur-up lazyload"
                                                    alt="">
                                            </a>

                                            <div class="offer-detail">
                                                <div>
                                                    <a href="product-left-thumbnail.html" class="text-title">
                                                        <h6 class="name">Meatigo Premium Goat Curry</h6>
                                                    </a>
                                                    <span>450 G</span>
                                                    <h6 class="price theme-color">$ 70.00</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="offer-product">
                                            <a href="product-left-thumbnail.html" class="offer-image">
                                                <img src="assets/images/furniture/3.png" class="blur-up lazyload"
                                                    alt="">
                                            </a>

                                            <div class="offer-detail">
                                                <div>
                                                    <a href="product-left-thumbnail.html" class="text-title">
                                                        <h6 class="name">Coral Bean Bag Chair</h6>
                                                    </a>
                                                    <span>450 G</span>
                                                    <h6 class="price theme-color">$ 40.00</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="mb-0">
                                        <div class="offer-product">
                                            <a href="product-left-thumbnail.html" class="offer-image">
                                                <img src="assets/images/furniture/5.png" class="blur-up lazyload"
                                                    alt="">
                                            </a>

                                            <div class="offer-detail">
                                                <div>
                                                    <a href="product-left-thumbnail.html" class="text-title">
                                                        <h6 class="name">Benefits of using natural stone tile flooring
                                                        </h6>
                                                    </a>
                                                    <span>1 KG</span>
                                                    <h6 class="price theme-color">$ 80.00</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Section End -->

    <!-- Banner Section Start -->
    <section class="banner-section">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-12">
                    <div class="banner-contain-3 section-b-space section-t-space hover-effect overflow-visible">
                        <img src="assets/images/furniture/banner/6.jpg" class="bg-img" alt="">
                        <img src="assets/images/furniture/banner/1-1.png" class="flower-pot img-fluid" alt="">
                        <div
                            class="banner-detail p-center-left position-relative d-block py-0 banner-furniture mend-auto">
                            <div class="row">
                                <div class="col-xl-6 offset-xxl-2 offset-xl-1 col-md-8 col-sm-9">
                                    <h4 class="text-uppercase text-yellow text-kaushan furniture-title">Best of
                                        Collections <img src="assets/images/furniture/arrow.svg" alt=""></h4>
                                    <h2 class="mt-sm-3 mt-1 mb-2 text-content">Home Decor <span
                                            class="theme-color fw-bold">LookBook</span> 2022</h2>
                                    <p class="text-content">In publishing and graphic design, Lorem ipsum is a
                                        placeholder text commonly used to demonstrate.</p>
                                    <button class="btn theme-bg-color mt-sm-4 mt-2 btn-md text-white fw-bold"
                                        onclick="location.href = 'shop-left-sidebar.html';">Shop Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Section End -->

    <!-- Best Seller Section Start -->
    <section>
        <div class="container-fluid-lg">
            <div class="title d-block">
                <div>
                    <h2>Our best Seller</h2>
                    <span class="title-leaf">
                        <svg class="icon-width">
                            <use xlink:href="assets/svg/leaf.svg#leaf"></use>
                        </svg>
                    </span>
                    <p>A virtual assistant collects the products from your list</p>
                </div>
            </div>
            <div class="banner-slider product-wrapper wow fadeInUp">
                <div>
                    <ul class="product-list">
                        <li>
                            <div class="offer-product">
                                <a href="product-left-thumbnail.html" class="offer-image">
                                    <img src="assets/images/furniture/1.png" class="blur-up lazyload" alt="">
                                </a>

                                <div class="offer-detail">
                                    <div>
                                        <a href="product-left-thumbnail.html" class="text-title">
                                            <h6 class="name">Home Decor Lucky Deer Family Matte Finish</h6>
                                        </a>
                                        <span>500 G</span>
                                        <h6 class="price theme-color">$ 10.00</h6>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="offer-product">
                                <a href="product-left-thumbnail.html" class="offer-image">
                                    <img src="assets/images/furniture/2.png" class="blur-up lazyload" alt="">
                                </a>

                                <div class="offer-detail">
                                    <div>
                                        <a href="product-left-thumbnail.html" class="text-title">
                                            <h6 class="name">Potato</h6>
                                        </a>
                                        <span>500 G</span>
                                        <h6 class="price theme-color">$ 10.00</h6>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="offer-product">
                                <a href="product-left-thumbnail.html" class="offer-image">
                                    <img src="assets/images/furniture/3.png" class="blur-up lazyload" alt="">
                                </a>

                                <div class="offer-detail">
                                    <div>
                                        <a href="product-left-thumbnail.html" class="text-title">
                                            <h6 class="name">Coral Bean Bag Chair</h6>
                                        </a>
                                        <span>200 G</span>
                                        <h6 class="price theme-color">$ 10.00</h6>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="offer-product">
                                <a href="product-left-thumbnail.html" class="offer-image">
                                    <img src="assets/images/furniture/4.png" class="blur-up lazyload" alt="">
                                </a>

                                <div class="offer-detail">
                                    <div>
                                        <a href="product-left-thumbnail.html" class="text-title">
                                            <h6 class="name">ELSTONE HOME White Colour Bath Towel</h6>
                                        </a>
                                        <span>150 G</span>
                                        <h6 class="price theme-color">$ 10.00</h6>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

                <div>
                    <ul class="product-list">
                        <li>
                            <div class="offer-product">
                                <a href="product-left-thumbnail.html" class="offer-image">
                                    <img src="assets/images/furniture/5.png" class="blur-up lazyload" alt="">
                                </a>

                                <div class="offer-detail">
                                    <div>
                                        <a href="product-left-thumbnail.html" class="text-title">
                                            <h6 class="name">Benefits of using natural stone tile flooring</h6>
                                        </a>
                                        <span>500 G</span>
                                        <h6 class="price theme-color">$ 10.00</h6>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="offer-product">
                                <a href="product-left-thumbnail.html" class="offer-image">
                                    <img src="assets/images/furniture/6.png" class="blur-up lazyload" alt="">
                                </a>

                                <div class="offer-detail">
                                    <div>
                                        <a href="product-left-thumbnail.html" class="text-title">
                                            <h6 class="name">Nature Baby Merino Knit Bassinet Blanket</h6>
                                        </a>
                                        <span>1 L</span>
                                        <h6 class="price theme-color">$ 10.00</h6>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="offer-product">
                                <a href="product-left-thumbnail.html" class="offer-image">
                                    <img src="assets/images/furniture/7.png" class="blur-up lazyload" alt="">
                                </a>

                                <div class="offer-detail">
                                    <div>
                                        <a href="product-left-thumbnail.html" class="text-title">
                                            <h6 class="name">Wooden Tea Cup Coaster</h6>
                                        </a>
                                        <span>1 KG</span>
                                        <h6 class="price theme-color">$ 10.00</h6>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="offer-product">
                                <a href="product-left-thumbnail.html" class="offer-image">
                                    <img src="assets/images/furniture/8.png" class="blur-up lazyload" alt="">
                                </a>

                                <div class="offer-detail">
                                    <div>
                                        <a href="product-left-thumbnail.html" class="text-title">
                                            <h6 class="name">Goddess Marble Hexagon</h6>
                                        </a>
                                        <span>150 G</span>
                                        <h6 class="price theme-color">$ 10.00</h6>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

                <div>
                    <ul class="product-list">
                        <li>
                            <div class="offer-product">
                                <a href="product-left-thumbnail.html" class="offer-image">
                                    <img src="assets/images/furniture/9.png" class="blur-up lazyload" alt="">
                                </a>

                                <div class="offer-detail">
                                    <div>
                                        <a href="product-left-thumbnail.html" class="text-title">
                                            <h6 class="name">Handmade Brown Mango Wooden Tray Square</h6>
                                        </a>
                                        <span>1 L</span>
                                        <h6 class="price theme-color">$ 10.00</h6>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="offer-product">
                                <a href="product-left-thumbnail.html" class="offer-image">
                                    <img src="assets/images/furniture/10.png" class="blur-up lazyload" alt="">
                                </a>

                                <div class="offer-detail">
                                    <div>
                                        <a href="product-left-thumbnail.html" class="text-title">
                                            <h6 class="name">heavy duty cane round basket</h6>
                                        </a>
                                        <span>500 G</span>
                                        <h6 class="price theme-color">$ 10.00</h6>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="offer-product">
                                <a href="product-left-thumbnail.html" class="offer-image">
                                    <img src="assets/images/furniture/11.png" class="blur-up lazyload" alt="">
                                </a>

                                <div class="offer-detail">
                                    <div>
                                        <a href="product-left-thumbnail.html" class="text-title">
                                            <h6 class="name">WaahKart Antique Fiber Flower Vase</h6>
                                        </a>
                                        <span>1 KG</span>
                                        <h6 class="price theme-color">$ 10.00</h6>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="offer-product">
                                <a href="product-left-thumbnail.html" class="offer-image">
                                    <img src="assets/images/furniture/12.png" class="blur-up lazyload" alt="">
                                </a>

                                <div class="offer-detail">
                                    <div>
                                        <a href="product-left-thumbnail.html" class="text-title">
                                            <h6 class="name">Towels Cotton Soft</h6>
                                        </a>
                                        <span>160 ML</span>
                                        <h6 class="price theme-color">$ 10.00</h6>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

                <div>
                    <ul class="product-list">
                        <li>
                            <div class="offer-product">
                                <a href="product-left-thumbnail.html" class="offer-image">
                                    <img src="assets/images/furniture/13.png" class="blur-up lazyload" alt="">
                                </a>

                                <div class="offer-detail">
                                    <div>
                                        <a href="product-left-thumbnail.html" class="text-title">
                                            <h6 class="name">Gloss Dinnerware Dish</h6>
                                        </a>
                                        <span>500 G</span>
                                        <h6 class="price theme-color">$ 10.00</h6>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="offer-product">
                                <a href="product-left-thumbnail.html" class="offer-image">
                                    <img src="assets/images/furniture/14.png" class="blur-up lazyload" alt="">
                                </a>

                                <div class="offer-detail">
                                    <div>
                                        <a href="product-left-thumbnail.html" class="text-title">
                                            <h6 class="name">Marble Small Amenity Tray</h6>
                                        </a>
                                        <span>1 L</span>
                                        <h6 class="price theme-color">$ 10.00</h6>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="offer-product">
                                <a href="product-left-thumbnail.html" class="offer-image">
                                    <img src="assets/images/furniture/5.png" class="blur-up lazyload" alt="">
                                </a>

                                <div class="offer-detail">
                                    <div>
                                        <a href="product-left-thumbnail.html" class="text-title">
                                            <h6 class="name">Benefits of using natural stone tile flooring</h6>
                                        </a>
                                        <span>1 KG</span>
                                        <h6 class="price theme-color">$ 10.00</h6>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="offer-product">
                                <a href="product-left-thumbnail.html" class="offer-image">
                                    <img src="assets/images/furniture/9.png" class="blur-up lazyload" alt="">
                                </a>

                                <div class="offer-detail">
                                    <div>
                                        <a href="product-left-thumbnail.html" class="text-title">
                                            <h6 class="name">Handmade Brown Mango Wooden Tray Square</h6>
                                        </a>
                                        <span>150 G</span>
                                        <h6 class="price theme-color">$ 10.00</h6>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Best Seller Section End -->

    <!-- Newsletter Section Start -->
    <section class="newsletter-section section-b-space">
        <div class="container-fluid-lg">
            <div class="newsletter-box newsletter-box-2">
                <div class="newsletter-contain py-5">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xxl-4 col-lg-5 col-md-7 col-sm-9 offset-xxl-2 offset-md-1">
                                <div class="newsletter-detail">
                                    <h2>Join our newsletter and get...</h2>
                                    <h5>$20 discount for your first order</h5>
                                    <div class="input-box">
                                        <input type="email" class="form-control" id="exampleFormControlInput1"
                                            placeholder="Enter Your Email">
                                        <i class="fa-solid fa-envelope arrow"></i>
                                        <button class="sub-btn  btn-animation">
                                            <span class="d-sm-block d-none">Subscribe</span>
                                            <i class="fa-solid fa-arrow-right icon"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Newsletter Section End -->

    <!-- Footer Section Start -->
    <footer class="section-t-space footer-section-2 footer-color-3">
        <div class="container-fluid-lg">
            <div class="main-footer">
                <div class="row g-md-4 gy-sm-5">
                    <div class="col-xxl-3 col-xl-4 col-sm-6">
                        <a href="index.html" class="foot-logo theme-logo">
                            <img src="assets/images/logo/4.png" class="img-fluid blur-up lazyload" alt="">
                        </a>
                        <p class="information-text information-text-2">it is a long established fact that a reader will
                            be distracted by the readable content.</p>
                        <ul class="social-icon">
                            <li class="light-bg">
                                <a href="https://www.facebook.com/" class="footer-link-color">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li class="light-bg">
                                <a href="https://accounts.google.com/signin/v2/identifier?flowName=GlifWebSignIn&flowEntry=ServiceLogin"
                                    class="footer-link-color">
                                    <i class="fab fa-google"></i>
                                </a>
                            </li>
                            <li class="light-bg">
                                <a href="https://twitter.com/i/flow/login" class="footer-link-color">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li class="light-bg">
                                <a href="https://www.instagram.com/" class="footer-link-color">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                            <li class="light-bg">
                                <a href="https://in.pinterest.com/" class="footer-link-color">
                                    <i class="fab fa-pinterest-p"></i>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-xxl-2 col-xl-4 col-sm-6">
                        <div class="footer-title">
                            <h4 class="text-white">About Iddo</h4>
                        </div>
                        <ul class="footer-list footer-contact footer-list-light">
                            <li>
                                <a href="about-us.html" class="light-text">About Us</a>
                            </li>
                            <li>
                                <a href="contact-us.html" class="light-text">Contact Us</a>
                            </li>
                            <li>
                                <a href="term_condition.html" class="light-text">Terms & Conditions</a>
                            </li>
                            <li>
                                <a href="careers.html" class="light-text">Careers</a>
                            </li>
                            <li>
                                <a href="blog-list.html" class="light-text">Latest Blog</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-xxl-2 col-xl-4 col-sm-6">
                        <div class="footer-title">
                            <h4 class="text-white">Useful Link</h4>
                        </div>
                        <ul class="footer-list footer-list-light footer-contact">
                            <li>
                                <a href="order-success.html" class="light-text">Your Order</a>
                            </li>
                            <li>
                                <a href="user-dashboard.html" class="light-text">Your Account</a>
                            </li>
                            <li>
                                <a href="order-tracking.html" class="light-text">Track Orders</a>
                            </li>
                            <li>
                                <a href="wishlist.html" class="light-text">Your Wishlist</a>
                            </li>
                            <li>
                                <a href="faq.html" class="light-text">FAQs</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-xxl-2 col-xl-4 col-sm-6">
                        <div class="footer-title">
                            <h4 class="text-white">Categories</h4>
                        </div>
                        <ul class="footer-list footer-list-light footer-contact">
                            <li>
                                <a href="vegetables-demo.html" class="light-text">Fresh Vegetables</a>
                            </li>
                            <li>
                                <a href="spice-demo.html" class="light-text">Hot Spice</a>
                            </li>
                            <li>
                                <a href="bags-demo.html" class="light-text">Brand New Bags</a>
                            </li>
                            <li>
                                <a href="bakery-demo.html" class="light-text">New Bakery</a>
                            </li>
                            <li>
                                <a href="grocery-demo.html" class="light-text">New Grocery</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-xxl-3 col-xl-4 col-sm-6">
                        <div class="footer-title">
                            <h4 class="text-white">Store information</h4>
                        </div>
                        <ul class="footer-address footer-contact">
                            <li>
                                <a href="javascript:void(0)" class="light-text">
                                    <div class="inform-box flex-start-box">
                                        <i data-feather="map-pin"></i>
                                        <p>Iddo Demo Store, Demo store india 345 - 659</p>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)" class="light-text">
                                    <div class="inform-box">
                                        <i data-feather="phone"></i>
                                        <p>Call us: 123-456-7890</p>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)" class="light-text">
                                    <div class="inform-box">
                                        <i data-feather="mail"></i>
                                        <p>Email Us: Support@Iddo.com</p>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)" class="light-text">
                                    <div class="inform-box">
                                        <i data-feather="printer"></i>
                                        <p>Fax: 123456</p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="sub-footer sub-footer-lite section-b-space section-t-space">
                <div class="left-footer">
                    <p class="light-text">2022 Copyright By Themeforest Powered By Pixelstrap</p>
                </div>

                <ul class="payment-box">
                    <li>
                        <img src="assets/images/icon/paymant/visa.png" class="blur-up lazyload" alt="">
                    </li>
                    <li>
                        <img src="assets/images/icon/paymant/discover.png" alt="" class="blur-up lazyload">
                    </li>
                    <li>
                        <img src="assets/images/icon/paymant/american.png" alt="" class="blur-up lazyload">
                    </li>
                    <li>
                        <img src="assets/images/icon/paymant/master-card.png" alt="" class="blur-up lazyload">
                    </li>
                    <li>
                        <img src="assets/images/icon/paymant/giro-pay.png" alt="" class="blur-up lazyload">
                    </li>
                </ul>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Quick View Modal Box Start -->
    <div class="modal fade theme-modal view-modal" id="view" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-xl modal-fullscreen-sm-down">
            <div class="modal-content">
                <div class="modal-header p-0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row g-sm-4 g-2">
                        <div class="col-lg-6">
                            <div class="slider-image">
                                <img src="assets/images/product/category/1.jpg" class="img-fluid blur-up lazyload"
                                    alt="">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="right-sidebar-modal">
                                <h4 class="title-name">Peanut Butter Bite Premium Butter Cookies 600 g</h4>
                                <h4 class="price">$36.99</h4>
                                <div class="product-rating">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <span class="ms-2">8 Reviews</span>
                                    <span class="ms-2 text-danger">6 sold in last 16 hours</span>
                                </div>

                                <div class="product-detail">
                                    <h4>Product Details :</h4>
                                    <p>Candy canes sugar plum tart cotton candy chupa chups sugar plum chocolate I love.
                                        Caramels marshmallow icing dessert candy canes I love soufflé I love toffee.
                                        Marshmallow pie sweet sweet roll sesame snaps tiramisu jelly bear claw. Bonbon
                                        muffin I love carrot cake sugar plum dessert bonbon.</p>
                                </div>

                                <ul class="brand-list">
                                    <li>
                                        <div class="brand-box">
                                            <h5>Brand Name:</h5>
                                            <h6>Black Forest</h6>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="brand-box">
                                            <h5>Product Code:</h5>
                                            <h6>W0690034</h6>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="brand-box">
                                            <h5>Product Type:</h5>
                                            <h6>White Cream Cake</h6>
                                        </div>
                                    </li>
                                </ul>

                                <div class="select-size">
                                    <h4>Cake Size :</h4>
                                    <select class="form-select select-form-size">
                                        <option selected>Select Size</option>
                                        <option value="1.2">1/2 KG</option>
                                        <option value="0">1 KG</option>
                                        <option value="1.5">1/5 KG</option>
                                        <option value="red">Red Roses</option>
                                        <option value="pink">With Pink Roses</option>
                                    </select>
                                </div>

                                <div class="modal-button">
                                    <button onclick="location.href = 'cart.html';"
                                        class="btn btn-md add-cart-button icon">Add
                                        To Cart</button>
                                    <button onclick="location.href = 'product-left-thumbnail.html';"
                                        class="btn theme-bg-color view-button icon text-white fw-bold btn-md">
                                        View More Details</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quick View Modal Box End -->

    <!-- Location Modal Start -->
    <div class="modal location-modal fade theme-modal" id="locationModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Choose your Delivery Location</h5>
                    <p class="mt-1 text-content">Enter your address and we will specify the offer for your area.</p>
                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="location-list">
                        <div class="search-input">
                            <input type="search" class="form-control" placeholder="Search Your Area">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </div>

                        <div class="disabled-box">
                            <h6>Select a Location</h6>
                        </div>

                        <ul class="location-select custom-height">
                            <li>
                                <a href="javascript:void(0)">
                                    <h6>Alabama</h6>
                                    <span>Min: $130</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)">
                                    <h6>Arizona</h6>
                                    <span>Min: $150</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)">
                                    <h6>California</h6>
                                    <span>Min: $110</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)">
                                    <h6>Colorado</h6>
                                    <span>Min: $140</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)">
                                    <h6>Florida</h6>
                                    <span>Min: $160</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)">
                                    <h6>Georgia</h6>
                                    <span>Min: $120</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)">
                                    <h6>Kansas</h6>
                                    <span>Min: $170</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)">
                                    <h6>Minnesota</h6>
                                    <span>Min: $120</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)">
                                    <h6>New York</h6>
                                    <span>Min: $110</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)">
                                    <h6>Washington</h6>
                                    <span>Min: $130</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Location Modal End -->

    <!-- Cookie Bar Box Start -->
    <div class="cookie-bar-box">
        <div class="cookie-box">
            <div class="cookie-image">
                <img src="assets/images/cookie-bar.png" class="blur-up lazyload" alt="">
                <h2>Cookies!</h2>
            </div>

            <div class="cookie-contain">
                <h5 class="text-content">We use cookies to make your experience better</h5>
            </div>
        </div>

        <div class="button-group">
            <button class="btn privacy-button">Privacy Policy</button>
            <button class="btn ok-button">OK</button>
        </div>
    </div>
    <!-- Cookie Bar Box End -->

    <!-- Deal Box Modal Start -->
    <div class="modal fade theme-modal deal-modal" id="deal-box" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
            <div class="modal-content">
                <div class="modal-header">
                    <div>
                        <h5 class="modal-title w-100" id="deal_today">Deal Today</h5>
                        <p class="mt-1 text-content">Recommended deals for you.</p>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="deal-offer-box">
                        <ul class="deal-offer-list">
                            <li class="list-1">
                                <div class="deal-offer-contain">
                                    <a href="shop-left-sidebar.html" class="deal-image">
                                        <img src="assets/images/vegetable/product/10.png" class="blur-up lazyload"
                                            alt="">
                                    </a>

                                    <a href="shop-left-sidebar.html" class="deal-contain">
                                        <h5>Blended Instant Coffee 50 g Buy 1 Get 1 Free</h5>
                                        <h6>$52.57 <del>57.62</del> <span>500 G</span></h6>
                                    </a>
                                </div>
                            </li>

                            <li class="list-2">
                                <div class="deal-offer-contain">
                                    <a href="shop-left-sidebar.html" class="deal-image">
                                        <img src="assets/images/vegetable/product/11.png" class="blur-up lazyload"
                                            alt="">
                                    </a>

                                    <a href="shop-left-sidebar.html" class="deal-contain">
                                        <h5>Blended Instant Coffee 50 g Buy 1 Get 1 Free</h5>
                                        <h6>$52.57 <del>57.62</del> <span>500 G</span></h6>
                                    </a>
                                </div>
                            </li>

                            <li class="list-3">
                                <div class="deal-offer-contain">
                                    <a href="shop-left-sidebar.html" class="deal-image">
                                        <img src="assets/images/vegetable/product/12.png" class="blur-up lazyload"
                                            alt="">
                                    </a>

                                    <a href="shop-left-sidebar.html" class="deal-contain">
                                        <h5>Blended Instant Coffee 50 g Buy 1 Get 1 Free</h5>
                                        <h6>$52.57 <del>57.62</del> <span>500 G</span></h6>
                                    </a>
                                </div>
                            </li>

                            <li class="list-1">
                                <div class="deal-offer-contain">
                                    <a href="shop-left-sidebar.html" class="deal-image">
                                        <img src="assets/images/vegetable/product/13.png" class="blur-up lazyload"
                                            alt="">
                                    </a>

                                    <a href="shop-left-sidebar.html" class="deal-contain">
                                        <h5>Blended Instant Coffee 50 g Buy 1 Get 1 Free</h5>
                                        <h6>$52.57 <del>57.62</del> <span>500 G</span></h6>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Deal Box Modal End -->

    <!-- Tap to top and theme setting button start -->
    <div class="theme-option">
        <div class="setting-box">
            <button class="btn setting-button">
                <i class="fa-solid fa-gear"></i>
            </button>

            <div class="theme-setting-2">
                <div class="theme-box">
                    <ul>
                        <li>
                            <div class="setting-name">
                                <h4>Color</h4>
                            </div>
                            <div class="theme-setting-button color-picker">
                                <form class="form-control">
                                    <label for="colorPick" class="form-label mb-0">Theme Color</label>
                                    <input type="color" class="form-control form-control-color" id="colorPick"
                                        value="#417394" title="Choose your color">
                                </form>
                            </div>
                        </li>

                        <li>
                            <div class="setting-name">
                                <h4>Dark</h4>
                            </div>
                            <div class="theme-setting-button">
                                <button class="btn btn-2 outline" id="darkButton">Dark</button>
                                <button class="btn btn-2 unline" id="lightButton">Light</button>
                            </div>
                        </li>

                        <li>
                            <div class="setting-name">
                                <h4>RTL</h4>
                            </div>
                            <div class="theme-setting-button rtl">
                                <button class="btn btn-2 rtl-unline">LTR</button>
                                <button class="btn btn-2 rtl-outline">RTL</button>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="back-to-top">
            <a id="back-to-top" href="#">
                <i class="fas fa-chevron-up"></i>
            </a>
        </div>
    </div>
    <!-- Tap to top and theme setting button end -->

    <!-- Bg overlay Start -->
    <div class="bg-overlay"></div>
    <!-- Bg overlay End -->

    <!-- latest jquery-->
    <script src="assets/js/jquery-3.6.0.min.js"></script>

    <!-- jquery ui-->
    <script src="assets/js/jquery-ui.min.js"></script>

    <!-- Bootstrap js-->
    <script src="assets/js/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="assets/js/bootstrap/bootstrap-notify.min.js"></script>
    <script src="assets/js/bootstrap/popper.min.js"></script>

    <!-- feather icon js-->
    <script src="assets/js/feather/feather.min.js"></script>
    <script src="assets/js/feather/feather-icon.js"></script>

    <!-- Lazyload Js -->
    <script src="assets/js/lazysizes.min.js"></script>

    <!-- Slick js-->
    <script src="assets/js/slick/slick.js"></script>
    <script src="assets/js/slick/slick-animation.min.js"></script>
    <script src="assets/js/slick/custom_slick.js"></script>

    <!-- Auto Height Js -->
    <script src="assets/js/auto-height.js"></script>

    <!-- Timer Js -->
    <script src="assets/js/timer1.js"></script>

    <!-- Quantity js -->
    <script src="assets/js/quantity-2.js"></script>

    <!-- WOW js -->
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/custom-wow.js"></script>

    <!-- script js -->
    <script src="assets/js/script.js"></script>

    <!-- theme setting js -->
    <script src="assets/js/theme-setting.js"></script>
</body>

</html>