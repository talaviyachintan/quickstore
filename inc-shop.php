<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop - Quickstore</title>
    <!-- favicon icon -->
    <link rel="icon" href="img/favicon.png">
    <!-- font awesome sheet -->
    <link rel="stylesheet" href="css/all.min.css">
    <!-- bootstrap sheet -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- owl carousel -->
    <!-- <link rel="stylesheet" href="css/owl.carousel.min.css"> -->
    <!-- <link rel="stylesheet" href="css/owl.theme.default.min.css"> -->
    <!-- slick slider -->
    <!-- <link rel="stylesheet" href="css/slick.css"> -->
    <!-- <link rel="stylesheet" href="css/slick-theme.css"> -->
    <!-- rang slider -->
    <link rel="stylesheet" href="css/code.jquery.com_ui_1.12.1_themes_base_jquery-ui.css">
    <!-- style sheet -->
    <link rel="stylesheet" href="css/style.css">
    <!-- responsive sheet -->
    <link rel="stylesheet" href="css/responsive.css">
</head>
<body>
    <!-- start loader -->
    <?php include 'head.php';?>
    <!-- end loader -->
    <!-- start header -->
    <?php include 'header.php';?>
    <!-- end header -->
    <main>
        <div class="container-fluid">
            <div class="hero_section">
                <h1 class="entry_title">Shop</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                      <li class="breadcrumb-item"><a href="./"><i class="fa-solid fa-house"></i></a></li>
                      <li class="breadcrumb-item active" aria-current="page">Shop</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="container-fluid content_area">
            <div class="row">
                <div class="col-lg-3 order-2 order-lg-1">
                    <div class="sidebar_shop">
                        <div class="row">
                            <div class="col-12 col-sm-6 col-md-4 col-lg-12">
                                <div class="block_1">
                                    <h2 class="shop_sidebar_title fs-6">Categories</h2>
                                    <div>
                                        <ul class="d-block">
                                            <li class="shop_sidebar_text"><a href="javascript:void(0)"><span>Airpods (1)</span></a></li>
                                            <li class="shop_sidebar_text"><a href="javascript:void(0)"><span>Camera's (4)</span></a></li>
                                            <li class="shop_sidebar_text"><a href="javascript:void(0)"><span>Headphones (25)</span></a></li>
                                            <li class="shop_sidebar_text"><a href="javascript:void(0)"><span>Laptops (25)</span></a></li>
                                            <li class="shop_sidebar_text"><a href="javascript:void(0)"><span>Mini speakers (25)</span></a></li>
                                            <li class="shop_sidebar_text"><a href="javascript:void(0)"><span>Smart phones (6)</span></a></li>
                                            <li class="shop_sidebar_text"><a href="javascript:void(0)"><span>Smart watches (25)</span></a></li>
                                            <li class="shop_sidebar_text"><a href="javascript:void(0)"><span>SmartTV (1)</span></a></li>
                                            <li class="shop_sidebar_text"><a href="javascript:void(0)"><span>Tablets (25)</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-lg-12">
                                <div class="block_2">
                                    <h2 class="shop_sidebar_title fs-6">Filter by price</h2>
                                    <div>
                                        <div id="slider-range" style="height:2px;" class="rang_slider"></div>
                                        <p>
                                            <label for="amount"><span class="shop_sidebar_text">Price:</span> 
                                                <input type="text" id="amount" class="shop_sidebar_title mb-0">
                                            </label>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-lg-12">
                                <div class="block_3">
                                    <div class="overflow-hidden rounded">
                                        <img src="img/left-banner.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-lg-12">
                                <div class="block_4">
                                    <h2 class="shop_sidebar_title fs-6">Filter By Color</h2>
                                    <div>
                                        <ul class="d-block">
                                            <li class="shop_sidebar_text"><input type="checkbox" class="check_box"><a href="javascript:void(0)"><span>Black (1)</span></a></li>
                                            <li class="shop_sidebar_text"><input type="checkbox" class="check_box"><a href="javascript:void(0)"><span>Blue (18)</span></a></li>
                                            <li class="shop_sidebar_text"><input type="checkbox" class="check_box"><a href="javascript:void(0)"><span>Golden (1)</span></a></li>
                                            <li class="shop_sidebar_text"><input type="checkbox" class="check_box"><a href="javascript:void(0)"><span>Green (16)</span></a></li>
                                            <li class="shop_sidebar_text"><input type="checkbox" class="check_box"><a href="javascript:void(0)"><span>Orange (2)</span></a></li>
                                            <li class="shop_sidebar_text"><input type="checkbox" class="check_box"><a href="javascript:void(0)"><span>Pink (1)</span></a></li>
                                            <li class="shop_sidebar_text"><input type="checkbox" class="check_box"><a href="javascript:void(0)"><span>Red (17)</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-lg-12">
                                <div class="block_5">
                                    <h2 class="shop_sidebar_title fs-6">Filter By Size</h2>
                                    <div>
                                        <ul class="d-block">
                                            <li class="shop_sidebar_text"><input type="checkbox" class="check_box"><a href="javascript:void(0)"><span>M (9)</span></a></li>
                                            <li class="shop_sidebar_text"><input type="checkbox" class="check_box"><a href="javascript:void(0)"><span>XL (18)</span></a></li>
                                            <li class="shop_sidebar_text"><input type="checkbox" class="check_box"><a href="javascript:void(0)"><span>XXL (16)</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-lg-12">
                                <div class="block_6">
                                    <h2 class="shop_sidebar_title fs-6">Product Tags</h2>
                                    <div>
                                        <a href="javascript:void(0)" class="shop_left_btn">apple</a>
                                        <a href="javascript:void(0)" class="shop_left_btn">Boat</a>
                                        <a href="javascript:void(0)" class="shop_left_btn">Canon</a>
                                        <a href="javascript:void(0)" class="shop_left_btn">Contemporary</a>
                                        <a href="javascript:void(0)" class="shop_left_btn">HP</a>
                                        <a href="javascript:void(0)" class="shop_left_btn">Lenovo</a>
                                        <a href="javascript:void(0)" class="shop_left_btn">Monobloc</a>
                                        <a href="javascript:void(0)" class="shop_left_btn">Pillar</a>
                                        <a href="javascript:void(0)" class="shop_left_btn">samsung</a>
                                        <a href="javascript:void(0)" class="shop_left_btn">Sony</a>
                                        <a href="javascript:void(0)" class="shop_left_btn">Washer</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 order-1 order-lg-2">
                    <ul class="nav nav-pills shop_page_navbg" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active shop_page_navbtn p-0" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true"><i class="fa-solid fa-bars"></i></button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link shop_page_navbtn p-0" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false"><i class="fa-solid fa-bars"></i></button>
                        </li>
                        <div class="ms-auto d-sm-flex shop_page_filter">
                            <div class="me-3">
                                <p class="tre_category mb-0">Showing 1-15 of 25 results</p>
                            </div>
                            <div>
                                <select name="orderby" class="orderby" aria-label="Shop order">
                                    <option value="menu_order" selected="selected">Default sorting</option>
                                    <option value="popularity">Sort by popularity</option>
                                    <option value="rating">Sort by average rating</option>
                                    <option value="date">Sort by latest</option>
                                    <option value="price">Sort by price: low to high</option>
                                    <option value="price-desc">Sort by price: high to low</option>
                                </select>
                                <input type="hidden" name="paged" value="1">
                            </div>
                        </div>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                            <div class="row" id="shop_page">
                                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                    <div class="card">
                                        <div class="trending_imgbg position-relative">
                                            <a href="product">
                                                <img src="img/shop1.jpg" alt="">
                                            </a>
                                            <a href="product" class="trending_hoverimg">
                                                <img src="img/shop01.jpg" alt="">
                                            </a>
                                            <a href="wishlist" class="product_icon">
                                                <i class="fa-regular fa-heart"></i>
                                            </a>
                                        </div>
                                        <div class="trepro_details">
                                            <span class="tre_category">Headphones</span>
                                            <h2>
                                                <a href="product" class="treproduct__title text_truncate">Apple AirPods Max 2020 with Smart Case - Blue</a>
                                            </h2>
                                            <div id="quantity_bar" class="mb-3">
                                                <span class="quantity">Available : 
                                                    <span class="counter">14</span>
                                                </span>
                                                <div class="progress">
                                                    <div class="progress_bar" role="progressbar" style="width: 18.0233%;">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="star_rating_block">
                                                <ul>
                                                    <li><a href="javascript:void(0)" class="star_rating star_color"><i class="fa-solid fa-star"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="star_rating star_color"><i class="fa-solid fa-star"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="star_rating star_color"><i class="fa-solid fa-star"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="star_rating star_color"><i class="fa-solid fa-star"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="star_rating star_color"><i class="fa-solid fa-star"></i></a></li>
                                                </ul>
                                            </div>
                                            <span class="pro_price">
                                                <span>$</span>180.00
                                            </span>
                                            <div class="product_action_wrap">
                                                <a href="product" class="add_to_cart">Read More</a>
                                                <div class="w-100 d-flex">
                                                    <a href="product" class="quick">Quick View</a>
                                                <div class="compare_button">
                                                    <a href="product" class="compare">Compare</a>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                    <div class="card">
                                        <div class="trending_imgbg position-relative">
                                            <a href="product">
                                                <img src="img/shop2.jpg" alt="">
                                            </a>
                                            <a href="product" class="trending_hoverimg">
                                                <img src="img/shop02.jpg" alt="">
                                            </a>
                                            <a href="wishlist" class="product_icon">
                                                <i class="fa-regular fa-heart"></i>
                                            </a>
                                        </div>
                                        <div class="trepro_details">
                                            <span class="tre_category">Mobiles</span>
                                            <h2>
                                                <a href="product" class="treproduct__title text_truncate">Apple iPhone 13 (128GB) - Starlight Light Blue</a>
                                            </h2>
                                            <div id="quantity_bar" class="mb-3">
                                                <span class="quantity">Available : 
                                                    <span class="counter">77</span>
                                                </span>
                                                <div class="progress">
                                                    <div class="progress_bar" role="progressbar" style="width: 77.0233%;">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="star_rating_block">
                                                <ul>
                                                    <li><a href="javascript:void(0)" class="star_rating"><i class="fa-solid fa-star"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="star_rating"><i class="fa-solid fa-star"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="star_rating"><i class="fa-solid fa-star"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="star_rating"><i class="fa-solid fa-star"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="star_rating start_color"><i class="fa-solid fa-star"></i></a></li>
                                                </ul>
                                            </div>
                                            <span class="pro_price">
                                                <span>$</span>350.00
                                            </span>
                                            <div class="product_action_wrap">
                                                <a href="product" class="add_to_cart">Add to cart</a>
                                                <div class="w-100 d-flex">
                                                    <a href="product" class="quick">Quick View</a>
                                                <div class="compare_button">
                                                    <a href="product" class="compare">Compare</a>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                    <div class="card">
                                        <div class="trending_imgbg position-relative">
                                            <a href="product">
                                                <img src="img/shop3.jpg" alt="">
                                            </a>
                                            <a href="product" class="trending_hoverimg">
                                                <img src="img/shop03.jpg" alt="">
                                            </a>
                                            <a href="wishlist" class="product_icon">
                                                <i class="fa-regular fa-heart"></i>
                                            </a>
                                        </div>
                                        <div class="trepro_details">
                                            <span class="tre_category">Mobiles</span>
                                            <h2>
                                                <a href="product" class="treproduct__title text_truncate">Apple iPhone 13 Mini (512GB) - Blue</a>
                                            </h2>
                                            <div id="quantity_bar" class="mb-3">
                                                <span class="quantity">Available : 
                                                    <span class="counter">49</span>
                                                </span>
                                                <div class="progress">
                                                    <div class="progress_bar" role="progressbar" style="width: 48.0233%;">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="star_rating_block">
                                                <ul>
                                                    <li><a href="javascript:void(0)" class="star_rating"><i class="fa-solid fa-star"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="star_rating"><i class="fa-solid fa-star"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="star_rating"><i class="fa-solid fa-star"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="star_rating"><i class="fa-solid fa-star"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="star_rating start_color"><i class="fa-solid fa-star"></i></a></li>
                                                </ul>
                                            </div>
                                            <span class="pro_price">
                                                <span>$</span>350.00
                                            </span>
                                            <div class="product_action_wrap">
                                                <a href="product" class="add_to_cart">Buy on fipkart</a>
                                                <div class="w-100 d-flex">
                                                    <a href="product" class="quick">Quick View</a>
                                                <div class="compare_button">
                                                    <a href="product" class="compare">Compare</a>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                    <div class="card">
                                        <div class="trending_imgbg position-relative">
                                            <a href="product">
                                                <img src="img/trending-5.jpg" alt="">
                                            </a>
                                            <a href="product" class="trending_hoverimg">
                                                <img src="img/trending-05.jpg" alt="">
                                            </a>
                                            <a href="wishlist" class="product_icon">
                                                <i class="fa-regular fa-heart"></i>
                                            </a>
                                        </div>
                                        <div class="trepro_details">
                                            <span class="tre_category">Laptops</span>
                                            <h2>
                                                <a href="product" class="treproduct__title text_truncate">Apple MacBook Air Laptop: M1 chip, 13.3-inch/33.74 cm</a>
                                            </h2>
                                            <div id="quantity_bar" class="mb-3">
                                                <span class="quantity">Available : 
                                                    <span class="counter">30</span>
                                                </span>
                                                <div class="progress">
                                                    <div class="progress_bar" role="progressbar" style="width: 30.0233%;">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="star_rating_block">
                                                <ul>
                                                    <li><a href="javascript:void(0)" class="star_rating"><i class="fa-solid fa-star"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="star_rating"><i class="fa-solid fa-star"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="star_rating"><i class="fa-solid fa-star"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="star_rating"><i class="fa-solid fa-star"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="star_rating"><i class="fa-solid fa-star"></i></a></li>
                                                </ul>
                                            </div>
                                            <span class="pro_price">
                                                <span>$</span>400.00
                                            </span>
                                            <div class="product_action_wrap">
                                                <a href="product" class="add_to_cart">Add to cart</a>
                                                <div class="w-100 d-flex">
                                                    <a href="product" class="quick">Quick View</a>
                                                <div class="compare_button">
                                                    <a href="product" class="compare">Compare</a>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                    <div class="card">
                                        <div class="trending_imgbg position-relative">
                                            <a href="product">
                                                <img src="img/Npro4.jpg" alt="">
                                            </a>
                                            <a href="product" class="trending_hoverimg">
                                                <img src="img/Npro04.jpg" alt="">
                                            </a>
                                            <a href="wishlist" class="product_icon">
                                                <i class="fa-regular fa-heart"></i>
                                            </a>
                                        </div>
                                        <div class="trepro_details">
                                            <span class="tre_category">Watches</span>
                                            <h2>
                                                <a href="product" class="treproduct__title text_truncate">APPLE Watch Series 2 - 42 mm Stainless Steel Case</a>
                                            </h2>
                                            <div id="quantity_bar" class="mb-3">
                                                <span class="quantity">Available : 
                                                    <span class="counter">64</span>
                                                </span>
                                                <div class="progress">
                                                    <div class="progress_bar" role="progressbar" style="width: 64.0233%;">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="star_rating_block">
                                                <ul>
                                                    <li><a href="javascript:void(0)" class="star_rating star_color"><i class="fa-solid fa-star"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="star_rating star_color"><i class="fa-solid fa-star"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="star_rating star_color"><i class="fa-solid fa-star"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="star_rating star_color"><i class="fa-solid fa-star"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="star_rating star_color"><i class="fa-solid fa-star"></i></a></li>
                                                </ul>
                                            </div>
                                            <span class="pro_price">
                                                <span>$</span>4000.00
                                            </span>
                                            <div class="product_action_wrap">
                                                <a href="product" class="add_to_cart">Add to cart</a>
                                                <div class="w-100 d-flex">
                                                    <a href="product" class="quick">Quick View</a>
                                                <div class="compare_button">
                                                    <a href="product" class="compare">Compare</a>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                    <div class="card">
                                        <div class="trending_imgbg position-relative">
                                            <a href="product">
                                                <img src="img/trending-3.jpg" alt="">
                                            </a>
                                            <a href="product" class="trending_hoverimg">
                                                <img src="img/trending-03.jpg" alt="">
                                            </a>
                                            <a href="wishlist" class="product_icon">
                                                <i class="fa-regular fa-heart"></i>
                                            </a>
                                        </div>
                                        <div class="trepro_details">
                                            <span class="tre_category">Headphones</span>
                                            <h2>
                                                <a href="product" class="treproduct__title text_truncate">Bang &amp; Olufsen Beoplay H9i Wireless Over-Ear Headphones</a>
                                            </h2>
                                            <div id="quantity_bar" class="mb-3">
                                                <span class="quantity">Available : 
                                                    <span class="counter">14</span>
                                                </span>
                                                <div class="progress">
                                                    <div class="progress_bar" role="progressbar" style="width: 18.0233%;">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="star_rating_block">
                                                <ul>
                                                    <li><a href="javascript:void(0)" class="star_rating star_color"><i class="fa-solid fa-star"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="star_rating star_color"><i class="fa-solid fa-star"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="star_rating star_color"><i class="fa-solid fa-star"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="star_rating star_color"><i class="fa-solid fa-star"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="star_rating star_color"><i class="fa-solid fa-star"></i></a></li>
                                                </ul>
                                            </div>
                                            <span class="pro_price">
                                                <span>$</span>250.00
                                            </span>
                                            <div class="product_action_wrap">
                                                <a href="product" class="add_to_cart">Add to cart</a>
                                                <div class="w-100 d-flex">
                                                    <a href="product" class="quick">Quick View</a>
                                                <div class="compare_button">
                                                    <a href="product" class="compare">Compare</a>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                    <div class="card">
                                        <div class="trending_imgbg position-relative">
                                            <a href="product">
                                                <img src="img/shop7.jpg" alt="">
                                            </a>
                                            <a href="product" class="trending_hoverimg">
                                                <img src="img/shop07.jpg" alt="">
                                            </a>
                                            <a href="wishlist" class="product_icon">
                                                <i class="fa-regular fa-heart"></i>
                                            </a>
                                        </div>
                                        <div class="trepro_details">
                                            <span class="tre_category">Headphones</span>
                                            <h2>
                                                <a href="product" class="treproduct__title text_truncate">Beoplay A1 Portable Bluetooth Speaker with Microphone</a>
                                            </h2>
                                            <div id="quantity_bar" class="mb-3">
                                                <span class="quantity">Available : 
                                                    <span class="counter">90</span>
                                                </span>
                                                <div class="progress">
                                                    <div class="progress_bar" role="progressbar" style="width: 90.0233%;">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="star_rating_block">
                                                <ul>
                                                    <li><a href="javascript:void(0)" class="star_rating star_color"><i class="fa-solid fa-star"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="star_rating star_color"><i class="fa-solid fa-star"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="star_rating star_color"><i class="fa-solid fa-star"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="star_rating star_color"><i class="fa-solid fa-star"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="star_rating star_color"><i class="fa-solid fa-star"></i></a></li>
                                                </ul>
                                            </div>
                                            <span class="pro_price">
                                                <span>$</span>450.00 - $500.00
                                            </span>
                                            <div class="product_action_wrap">
                                                <a href="product" class="add_to_cart">Select Options</a>
                                                <div class="w-100 d-flex">
                                                    <a href="product" class="quick">Quick View</a>
                                                <div class="compare_button">
                                                    <a href="product" class="compare">Compare</a>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                    <div class="card">
                                        <div class="trending_imgbg position-relative">
                                            <a href="product">
                                                <img src="img/shop8.jpg" alt="">
                                            </a>
                                            <a href="product" class="trending_hoverimg">
                                                <img src="img/shop08.jpg" alt="">
                                            </a>
                                            <a href="wishlist" class="product_icon">
                                                <i class="fa-regular fa-heart"></i>
                                            </a>
                                        </div>
                                        <div class="trepro_details">
                                            <span class="tre_category">Mobiles</span>
                                            <h2>
                                                <a href="product" class="treproduct__title text_truncate">BoAt Rockerz 400 Bluetooth Headset Pink</a>
                                            </h2>
                                            <div id="quantity_bar" class="mb-3">
                                                <span class="quantity">Available : 
                                                    <span class="counter">36</span>
                                                </span>
                                                <div class="progress">
                                                    <div class="progress_bar" role="progressbar" style="width: 35.0233%;">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="star_rating_block">
                                                <ul>
                                                    <li><a href="javascript:void(0)" class="star_rating"><i class="fa-solid fa-star"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="star_rating"><i class="fa-solid fa-star"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="star_rating"><i class="fa-solid fa-star"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="star_rating"><i class="fa-solid fa-star"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="star_rating"><i class="fa-solid fa-star"></i></a></li>
                                                </ul>
                                            </div>
                                            <span class="pro_price">
                                                <span>$</span>151.00
                                            </span>
                                            <div class="product_action_wrap">
                                                <a href="product" class="add_to_cart">Add to cart</a>
                                                <div class="w-100 d-flex">
                                                    <a href="product" class="quick">Quick View</a>
                                                <div class="compare_button">
                                                    <a href="product" class="compare">Compare</a>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                    <div class="card">
                                        <div class="trending_imgbg position-relative">
                                            <a href="product">
                                                <img src="img/shop9.jpg" alt="">
                                            </a>
                                            <a href="product" class="trending_hoverimg">
                                                <img src="img/shop09.jpg" alt="">
                                            </a>
                                            <a href="wishlist" class="product_icon">
                                                <i class="fa-regular fa-heart"></i>
                                            </a>
                                        </div>
                                        <div class="trepro_details">
                                            <span class="tre_category">Laptops</span>
                                            <h2>
                                                <a href="product" class="treproduct__title text_truncate">Dell S27QC 27 inch 4K UHD Monitor - Grey</a>
                                            </h2>
                                            <div id="quantity_bar" class="mb-3">
                                                <span class="quantity">Available : 
                                                    <span class="counter">25</span>
                                                </span>
                                                <div class="progress">
                                                    <div class="progress_bar" role="progressbar" style="width: 25.0233%;">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="star_rating_block">
                                                <ul>
                                                    <li><a href="javascript:void(0)" class="star_rating"><i class="fa-solid fa-star"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="star_rating"><i class="fa-solid fa-star"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="star_rating"><i class="fa-solid fa-star"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="star_rating"><i class="fa-solid fa-star"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="star_rating"><i class="fa-solid fa-star"></i></a></li>
                                                </ul>
                                            </div>
                                            <span class="pro_price">
                                                <span>$</span>250.00
                                            </span>
                                            <div class="product_action_wrap">
                                                <a href="product" class="add_to_cart">Add to cart</a>
                                                <div class="w-100 d-flex">
                                                    <a href="product" class="quick">Quick View</a>
                                                <div class="compare_button">
                                                    <a href="product" class="compare">Compare</a>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                    <div class="card">
                                        <div class="trending_imgbg position-relative">
                                            <a href="product">
                                                <img src="img/trending-1.jpg" alt="">
                                            </a>
                                            <a href="product" class="trending_hoverimg">
                                                <img src="img/trending-01.jpg" alt="">
                                            </a>
                                            <a href="wishlist" class="product_icon">
                                                <i class="fa-regular fa-heart"></i>
                                            </a>
                                        </div>
                                        <div class="trepro_details">
                                            <span class="tre_category">Watches</span>
                                            <h2>
                                                <a href="product" class="treproduct__title text_truncate">E Circle Men's Smart Watch for Android Phone Night Black</a>
                                            </h2>
                                            <div id="quantity_bar" class="mb-3">
                                                <span class="quantity">Available : 
                                                    <span class="counter">68</span>
                                                </span>
                                                <div class="progress">
                                                    <div class="progress_bar" role="progressbar" style="width: 68.0233%;">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="star_rating_block">
                                                <ul>
                                                    <li><a href="javascript:void(0)" class="star_rating"><i class="fa-solid fa-star"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="star_rating"><i class="fa-solid fa-star"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="star_rating"><i class="fa-solid fa-star"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="star_rating"><i class="fa-solid fa-star"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="star_rating star_color"><i class="fa-solid fa-star"></i></a></li>
                                                </ul>
                                            </div>
                                            <span class="pro_price">
                                                <span>$</span>150.00
                                            </span>
                                            <div class="product_action_wrap">
                                                <a href="product" class="add_to_cart">Add to cart</a>
                                                <div class="w-100 d-flex">
                                                    <a href="product" class="quick">Quick View</a>
                                                <div class="compare_button">
                                                    <a href="product" class="compare">Compare</a>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                    <div class="card">
                                        <div class="trending_imgbg position-relative">
                                            <a href="product">
                                                <img src="img/Best3.jpg" alt="">
                                            </a>
                                            <a href="product" class="trending_hoverimg">
                                                <img src="img/Bestsell03.jpg" alt="">
                                            </a>
                                            <a href="wishlist" class="product_icon">
                                                <i class="fa-regular fa-heart"></i>
                                            </a>
                                        </div>
                                        <div class="trepro_details">
                                            <span class="tre_category">Laptops</span>
                                            <h2>
                                                <a href="product" class="treproduct__title text_truncate">HD Resolution Indoor Wi-Fi Security Camera, White</a>
                                            </h2>
                                            <div id="quantity_bar" class="mb-3">
                                                <span class="quantity">Available : 
                                                    <span class="counter">25</span>
                                                </span>
                                                <div class="progress">
                                                    <div class="progress_bar" role="progressbar" style="width: 25.0233%;">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="star_rating_block">
                                                <ul>
                                                    <li><a href="javascript:void(0)" class="star_rating"><i class="fa-solid fa-star"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="star_rating"><i class="fa-solid fa-star"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="star_rating"><i class="fa-solid fa-star"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="star_rating"><i class="fa-solid fa-star"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="star_rating"><i class="fa-solid fa-star"></i></a></li>
                                                </ul>
                                            </div>
                                            <span class="pro_price">
                                                <span>$</span>450.00
                                            </span>
                                            <div class="product_action_wrap">
                                                <a href="product" class="add_to_cart">Add to cart</a>
                                                <div class="w-100 d-flex">
                                                    <a href="product" class="quick">Quick View</a>
                                                <div class="compare_button">
                                                    <a href="product" class="compare">Compare</a>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                    <div class="card">
                                        <div class="trending_imgbg position-relative">
                                            <a href="product">
                                                <img src="img/trending-6.jpg" alt="">
                                            </a>
                                            <a href="product" class="trending_hoverimg">
                                                <img src="img/trending-06.jpg" alt="">
                                            </a>
                                            <a href="wishlist" class="product_icon">
                                                <i class="fa-regular fa-heart"></i>
                                            </a>
                                        </div>
                                        <div class="trepro_details">
                                            <span class="tre_category">Camera's</span>
                                            <h2>
                                                <a href="product" class="treproduct__title text_truncate">Hero Session Action Camera with 8MP Photos</a>
                                            </h2>
                                            <div id="quantity_bar" class="mb-3">
                                                <span class="quantity">Available : 
                                                    <span class="counter">33</span>
                                                </span>
                                                <div class="progress">
                                                    <div class="progress_bar" role="progressbar" style="width: 33.0233%;">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="star_rating_block">
                                                <ul>
                                                    <li><a href="javascript:void(0)" class="star_rating"><i class="fa-solid fa-star"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="star_rating"><i class="fa-solid fa-star"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="star_rating"><i class="fa-solid fa-star"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="star_rating"><i class="fa-solid fa-star"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="star_rating star_color"><i class="fa-solid fa-star"></i></a></li>
                                                </ul>
                                            </div>
                                            <span class="pro_price">
                                                <span>$</span>850.00
                                            </span>
                                            <div class="product_action_wrap">
                                                <a href="product" class="add_to_cart">Add to cart</a>
                                                <div class="w-100 d-flex">
                                                    <a href="product" class="quick">Quick View</a>
                                                <div class="compare_button">
                                                    <a href="product" class="compare">Compare</a>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                    <div class="card">
                                        <div class="trending_imgbg position-relative">
                                            <a href="product">
                                                <img src="img/shop13.jpg" alt="">
                                            </a>
                                            <a href="product" class="trending_hoverimg">
                                                <img src="img/shop013.jpg" alt="">
                                            </a>
                                            <a href="wishlist" class="product_icon">
                                                <i class="fa-regular fa-heart"></i>
                                            </a>
                                        </div>
                                        <div class="trepro_details">
                                            <span class="tre_category">Tablets</span>
                                            <h2>
                                                <a href="product" class="treproduct__title text_truncate">Honor T1 7.0 1 GB RAM 8 GB ROM 7 inch with Wi-Fi+3G Tablet</a>
                                            </h2>
                                            <div id="quantity_bar" class="mb-3">
                                                <span class="quantity">Available : 
                                                    <span class="counter">50</span>
                                                </span>
                                                <div class="progress">
                                                    <div class="progress_bar" role="progressbar" style="width: 50.0233%;">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="star_rating_block">
                                                <ul>
                                                    <li><a href="javascript:void(0)" class="star_rating"><i class="fa-solid fa-star"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="star_rating"><i class="fa-solid fa-star"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="star_rating"><i class="fa-solid fa-star"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="star_rating"><i class="fa-solid fa-star"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="star_rating"><i class="fa-solid fa-star"></i></a></li>
                                                </ul>
                                            </div>
                                            <span class="pro_price">
                                                <span>$</span>151.00 - $750.00
                                            </span>
                                            <div class="product_action_wrap">
                                                <a href="product" class="add_to_cart">View products </a>
                                                <div class="w-100 d-flex">
                                                    <a href="product" class="quick">Quick View</a>
                                                <div class="compare_button">
                                                    <a href="product" class="compare">Compare</a>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                    <div class="card">
                                        <div class="trending_imgbg position-relative">
                                            <a href="product">
                                                <img src="img/shop14.jpg" alt="">
                                            </a>
                                            <a href="product" class="trending_hoverimg">
                                                <img src="img/shop014.jpg" alt="">
                                            </a>
                                            <a href="wishlist" class="product_icon">
                                                <i class="fa-regular fa-heart"></i>
                                            </a>
                                        </div>
                                        <div class="trepro_details">
                                            <span class="tre_category">Camera's</span>
                                            <h2>
                                                <a href="product" class="treproduct__title text_truncate">JBL Link Music Bluetooth Lautsprecher, Brown</a>
                                            </h2>
                                            <div id="quantity_bar" class="mb-3">
                                                <span class="quantity">Available : 
                                                    <span class="counter">48</span>
                                                </span>
                                                <div class="progress">
                                                    <div class="progress_bar" role="progressbar" style="width: 25.0233%;">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="star_rating_block">
                                                <ul>
                                                    <li><a href="javascript:void(0)" class="star_rating star_color"><i class="fa-solid fa-star"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="star_rating star_color"><i class="fa-solid fa-star"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="star_rating star_color"><i class="fa-solid fa-star"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="star_rating star_color"><i class="fa-solid fa-star"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="star_rating star_color"><i class="fa-solid fa-star"></i></a></li>
                                                </ul>
                                            </div>
                                            <span class="pro_price">
                                                <span>$</span>120.00
                                            </span>
                                            <div class="product_action_wrap">
                                                <a href="product" class="add_to_cart">Add to cart</a>
                                                <div class="w-100 d-flex">
                                                    <a href="product" class="quick">Quick View</a>
                                                <div class="compare_button">
                                                    <a href="product" class="compare">Compare</a>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                    <div class="card">
                                        <div class="trending_imgbg position-relative">
                                            <a href="product">
                                                <img src="img/Npro2.jpg" alt="">
                                            </a>
                                            <a href="product" class="trending_hoverimg">
                                                <img src="img/Npro02.jpg" alt="">
                                            </a>
                                            <a href="wishlist" class="product_icon">
                                                <i class="fa-regular fa-heart"></i>
                                            </a>
                                        </div>
                                        <div class="trepro_details">
                                            <span class="tre_category">Headphones</span>
                                            <h2>
                                                <a href="product" class="treproduct__title text_truncate">Kids headphones bulk 10 pack multi colored for students</a>
                                            </h2>
                                            <div id="quantity_bar" class="mb-3">
                                                <span class="quantity">Available : 
                                                    <span class="counter">28</span>
                                                </span>
                                                <div class="progress">
                                                    <div class="progress_bar" role="progressbar" style="width: 28.0233%;">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="star_rating_block">
                                                <ul>
                                                    <li><a href="javascript:void(0)" class="star_rating star_color"><i class="fa-solid fa-star"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="star_rating star_color"><i class="fa-solid fa-star"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="star_rating star_color"><i class="fa-solid fa-star"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="star_rating star_color"><i class="fa-solid fa-star"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="star_rating star_color"><i class="fa-solid fa-star"></i></a></li>
                                                </ul>
                                            </div>
                                            <span class="pro_price">
                                                <span>$</span>300.00
                                            </span>
                                            <div class="product_action_wrap">
                                                <a href="product" class="add_to_cart">Add to cart</a>
                                                <div class="w-100 d-flex">
                                                    <a href="product" class="quick">Quick View</a>
                                                <div class="compare_button">
                                                    <a href="product" class="compare">Compare</a>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <nav class="pagination">
                                <ul>
                                    <li><a href="javascript:void(0)" class="pagination_number active">1</a></li>
                                    <li><a class="pagination_number" href="javascript:void(0)">2</a></li>
                                    <li><a class="pagination_number" href="javascript:void(0)">→</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                            <div class="row" id="shoppage_pro_horizontal">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="trending_imgbg position-relative">
                                            <a href="product">
                                                <img src="img/shop1.jpg" alt="">
                                            </a>
                                            <a href="product" class="trending_hoverimg">
                                                <img src="img/shop01.jpg" alt="">
                                            </a>
                                            <a href="wishlist" class="product_icon">
                                                <i class="fa-regular fa-heart"></i>
                                            </a>
                                        </div>
                                        <div class="trepro_details">
                                            <span class="tre_category">Headphones</span>
                                            <h2>
                                                <a href="product" class="treproduct__title text_truncate">Apple AirPods Max 2020 with Smart Case - Blue</a>
                                            </h2>
                                            <div id="quantity_bar" class="mb-3">
                                                <span class="quantity">Available : 
                                                    <span class="counter">14</span>
                                                </span>
                                                <div class="progress">
                                                    <div class="progress_bar" role="progressbar" style="width: 18.0233%;">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="star_rating_block">
                                                <ul>
                                                    <li><a href="javascript:void(0)" class="star_rating star_color"><i class="fa-solid fa-star"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="star_rating star_color"><i class="fa-solid fa-star"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="star_rating star_color"><i class="fa-solid fa-star"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="star_rating star_color"><i class="fa-solid fa-star"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="star_rating star_color"><i class="fa-solid fa-star"></i></a></li>
                                                </ul>
                                            </div>
                                            <span class="pro_price">
                                                <span>$</span>180.00
                                            </span>
                                            <p class="tre_category">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam hendrerit nisi sed sollicitudin pellentesque. Nunc posuere purus rhoncus pulvinar aliquam.</p>
                                            <div class="product_action_wrap d-inline-flex flex-wrap">
                                                <a href="product" class="add_to_cart">Add to cart</a>
                                                <div class="w-100 d-flex">
                                                    <a href="product" class="quick">Quick View</a>
                                                <div class="compare_button">
                                                    <a href="product" class="compare">Compare</a>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="card">
                                        <div class="trending_imgbg position-relative">
                                            <a href="product">
                                                <img src="img/shop2.jpg" alt="">
                                            </a>
                                            <a href="product" class="trending_hoverimg">
                                                <img src="img/shop02.jpg" alt="">
                                            </a>
                                            <a href="product" class="product_icon">
                                                <i class="fa-regular fa-heart"></i>
                                            </a>
                                        </div>
                                        <div class="trepro_details">
                                            <span class="tre_category">Mobiles</span>
                                            <h2>
                                                <a href="product" class="treproduct__title text_truncate">Apple iPhone 13 (128GB) - Starlight Light Blue</a>
                                            </h2>
                                            <div id="quantity_bar" class="mb-3">
                                                <span class="quantity">Available : 
                                                    <span class="counter">77</span>
                                                </span>
                                                <div class="progress">
                                                    <div class="progress_bar" role="progressbar" style="width: 77.0233%;">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="star_rating_block">
                                                <ul>
                                                    <li><a href="javascript:void(0)" class="star_rating"><i class="fa-solid fa-star"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="star_rating"><i class="fa-solid fa-star"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="star_rating"><i class="fa-solid fa-star"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="star_rating"><i class="fa-solid fa-star"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="star_rating start_color"><i class="fa-solid fa-star"></i></a></li>
                                                </ul>
                                            </div>
                                            <span class="pro_price">
                                                <span>$</span>350.00
                                            </span>
                                            <p class="tre_category">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam hendrerit nisi sed sollicitudin pellentesque. Nunc posuere purus rhoncus pulvinar aliquam.</p>
                                            <div class="product_action_wrap d-inline-flex flex-wrap">
                                                <a href="product" class="add_to_cart">Add to cart</a>
                                                <div class="w-100 d-flex">
                                                    <a href="product" class="quick">Quick View</a>
                                                <div class="compare_button">
                                                    <a href="product" class="compare">Compare</a>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="card">
                                        <div class="trending_imgbg position-relative">
                                            <a href="product">
                                                <img src="img/shop3.jpg" alt="">
                                            </a>
                                            <a href="product" class="trending_hoverimg">
                                                <img src="img/shop03.jpg" alt="">
                                            </a>
                                            <a href="wishlist" class="product_icon">
                                                <i class="fa-regular fa-heart"></i>
                                            </a>
                                        </div>
                                        <div class="trepro_details">
                                            <span class="tre_category">Mobiles</span>
                                            <h2>
                                                <a href="product" class="treproduct__title text_truncate">Apple iPhone 13 Mini (512GB) - Blue</a>
                                            </h2>
                                            <div id="quantity_bar" class="mb-3">
                                                <span class="quantity">Available : 
                                                    <span class="counter">49</span>
                                                </span>
                                                <div class="progress">
                                                    <div class="progress_bar" role="progressbar" style="width: 48.0233%;">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="star_rating_block">
                                                <ul>
                                                    <li><a href="javascript:void(0)" class="star_rating"><i class="fa-solid fa-star"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="star_rating"><i class="fa-solid fa-star"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="star_rating"><i class="fa-solid fa-star"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="star_rating"><i class="fa-solid fa-star"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="star_rating start_color"><i class="fa-solid fa-star"></i></a></li>
                                                </ul>
                                            </div>
                                            <span class="pro_price">
                                                <span>$</span>350.00
                                            </span>
                                            <p class="tre_category">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam hendrerit nisi sed sollicitudin pellentesque. Nunc posuere purus rhoncus pulvinar aliquam.</p>
                                            <div class="product_action_wrap d-inline-flex flex-wrap">
                                                <a href="product" class="add_to_cart">Add to cart</a>
                                                <div class="w-100 d-flex">
                                                    <a href="product" class="quick">Quick View</a>
                                                <div class="compare_button">
                                                    <a href="product" class="compare">Compare</a>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="card">
                                        <div class="trending_imgbg position-relative">
                                            <a href="product">
                                                <img src="img/trending-5.jpg" alt="">
                                            </a>
                                            <a href="product" class="trending_hoverimg">
                                                <img src="img/trending-05.jpg" alt="">
                                            </a>
                                            <a href="wishlist" class="product_icon">
                                                <i class="fa-regular fa-heart"></i>
                                            </a>
                                        </div>
                                        <div class="trepro_details">
                                            <span class="tre_category">Laptops</span>
                                            <h2>
                                                <a href="product" class="treproduct__title text_truncate">Apple MacBook Air Laptop: M1 chip, 13.3-inch/33.74 cm</a>
                                            </h2>
                                            <div id="quantity_bar" class="mb-3">
                                                <span class="quantity">Available : 
                                                    <span class="counter">30</span>
                                                </span>
                                                <div class="progress">
                                                    <div class="progress_bar" role="progressbar" style="width: 30.0233%;">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="star_rating_block">
                                                <ul>
                                                    <li><a href="javascript:void(0)" class="star_rating"><i class="fa-solid fa-star"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="star_rating"><i class="fa-solid fa-star"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="star_rating"><i class="fa-solid fa-star"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="star_rating"><i class="fa-solid fa-star"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="star_rating"><i class="fa-solid fa-star"></i></a></li>
                                                </ul>
                                            </div>
                                            <span class="pro_price">
                                                <span>$</span>400.00
                                            </span>
                                            <p class="tre_category">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam hendrerit nisi sed sollicitudin pellentesque. Nunc posuere purus rhoncus pulvinar aliquam.</p>
                                            <div class="product_action_wrap d-inline-flex flex-wrap">
                                                <a href="product" class="add_to_cart">Add to cart</a>
                                                <div class="w-100 d-flex">
                                                    <a href="product" class="quick">Quick View</a>
                                                <div class="compare_button">
                                                    <a href="product" class="compare">Compare</a>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="card">
                                        <div class="trending_imgbg position-relative">
                                            <a href="product">
                                                <img src="img/Npro4.jpg" alt="">
                                            </a>
                                            <a href="product" class="trending_hoverimg">
                                                <img src="img/Npro04.jpg" alt="">
                                            </a>
                                            <a href="wishlist" class="product_icon">
                                                <i class="fa-regular fa-heart"></i>
                                            </a>
                                        </div>
                                        <div class="trepro_details">
                                            <span class="tre_category">Watches</span>
                                            <h2>
                                                <a href="product" class="treproduct__title text_truncate">APPLE Watch Series 2 - 42 mm Stainless Steel Case</a>
                                            </h2>
                                            <div id="quantity_bar" class="mb-3">
                                                <span class="quantity">Available : 
                                                    <span class="counter">64</span>
                                                </span>
                                                <div class="progress">
                                                    <div class="progress_bar" role="progressbar" style="width: 64.0233%;">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="star_rating_block">
                                                <ul>
                                                    <li><a href="javascript:void(0)" class="star_rating star_color"><i class="fa-solid fa-star"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="star_rating star_color"><i class="fa-solid fa-star"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="star_rating star_color"><i class="fa-solid fa-star"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="star_rating star_color"><i class="fa-solid fa-star"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="star_rating star_color"><i class="fa-solid fa-star"></i></a></li>
                                                </ul>
                                            </div>
                                            <span class="pro_price">
                                                <span>$</span>4000.00
                                            </span>
                                            <p class="tre_category">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam hendrerit nisi sed sollicitudin pellentesque. Nunc posuere purus rhoncus pulvinar aliquam.</p>
                                            <div class="product_action_wrap d-inline-flex flex-wrap">
                                                <a href="product" class="add_to_cart">Add to cart</a>
                                                <div class="w-100 d-flex">
                                                    <a href="product" class="quick">Quick View</a>
                                                <div class="compare_button">
                                                    <a href="product" class="compare">Compare</a>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="card">
                                        <div class="trending_imgbg position-relative">
                                            <a href="product">
                                                <img src="img/trending-3.jpg" alt="">
                                            </a>
                                            <a href="product" class="trending_hoverimg">
                                                <img src="img/trending-03.jpg" alt="">
                                            </a>
                                            <a href="wishlist" class="product_icon">
                                                <i class="fa-regular fa-heart"></i>
                                            </a>
                                        </div>
                                        <div class="trepro_details">
                                            <span class="tre_category">Headphones</span>
                                            <h2>
                                                <a href="product" class="treproduct__title text_truncate">Bang &amp; Olufsen Beoplay H9i Wireless Over-Ear Headphones</a>
                                            </h2>
                                            <div id="quantity_bar" class="mb-3">
                                                <span class="quantity">Available : 
                                                    <span class="counter">14</span>
                                                </span>
                                                <div class="progress">
                                                    <div class="progress_bar" role="progressbar" style="width: 18.0233%;">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="star_rating_block">
                                                <ul>
                                                    <li><a href="javascript:void(0)" class="star_rating star_color"><i class="fa-solid fa-star"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="star_rating star_color"><i class="fa-solid fa-star"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="star_rating star_color"><i class="fa-solid fa-star"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="star_rating star_color"><i class="fa-solid fa-star"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="star_rating star_color"><i class="fa-solid fa-star"></i></a></li>
                                                </ul>
                                            </div>
                                            <span class="pro_price">
                                                <span>$</span>250.00
                                            </span>
                                            <p class="tre_category">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam hendrerit nisi sed sollicitudin pellentesque. Nunc posuere purus rhoncus pulvinar aliquam.</p>
                                            <div class="product_action_wrap d-inline-flex flex-wrap">
                                                <a href="product" class="add_to_cart">Add to cart</a>
                                                <div class="w-100 d-flex">
                                                    <a href="product" class="quick">Quick View</a>
                                                <div class="compare_button">
                                                    <a href="product" class="compare">Compare</a>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="card">
                                        <div class="trending_imgbg position-relative">
                                            <a href="product">
                                                <img src="img/shop7.jpg" alt="">
                                            </a>
                                            <a href="product" class="trending_hoverimg">
                                                <img src="img/shop07.jpg" alt="">
                                            </a>
                                            <a href="wishlist" class="product_icon">
                                                <i class="fa-regular fa-heart"></i>
                                            </a>
                                        </div>
                                        <div class="trepro_details">
                                            <span class="tre_category">Headphones</span>
                                            <h2>
                                                <a href="product" class="treproduct__title text_truncate">Beoplay A1 Portable Bluetooth Speaker with Microphone</a>
                                            </h2>
                                            <div id="quantity_bar" class="mb-3">
                                                <span class="quantity">Available : 
                                                    <span class="counter">90</span>
                                                </span>
                                                <div class="progress">
                                                    <div class="progress_bar" role="progressbar" style="width: 90.0233%;">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="star_rating_block">
                                                <ul>
                                                    <li><a href="javascript:void(0)" class="star_rating star_color"><i class="fa-solid fa-star"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="star_rating star_color"><i class="fa-solid fa-star"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="star_rating star_color"><i class="fa-solid fa-star"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="star_rating star_color"><i class="fa-solid fa-star"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="star_rating star_color"><i class="fa-solid fa-star"></i></a></li>
                                                </ul>
                                            </div>
                                            <span class="pro_price">
                                                <span>$</span>450.00 - $500.00
                                            </span>
                                            <p class="tre_category">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam hendrerit nisi sed sollicitudin pellentesque. Nunc posuere purus rhoncus pulvinar aliquam.</p>
                                            <div class="product_action_wrap d-inline-flex flex-wrap">
                                                <a href="product" class="add_to_cart">Add to cart</a>
                                                <div class="w-100 d-flex">
                                                    <a href="product" class="quick">Quick View</a>
                                                <div class="compare_button">
                                                    <a href="product" class="compare">Compare</a>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="card">
                                        <div class="trending_imgbg position-relative">
                                            <a href="product">
                                                <img src="img/shop8.jpg" alt="">
                                            </a>
                                            <a href="product" class="trending_hoverimg">
                                                <img src="img/shop08.jpg" alt="">
                                            </a>
                                            <a href="wishlist" class="product_icon">
                                                <i class="fa-regular fa-heart"></i>
                                            </a>
                                        </div>
                                        <div class="trepro_details">
                                            <span class="tre_category">Mobiles</span>
                                            <h2>
                                                <a href="product" class="treproduct__title text_truncate">BoAt Rockerz 400 Bluetooth Headset Pink</a>
                                            </h2>
                                            <div id="quantity_bar" class="mb-3">
                                                <span class="quantity">Available : 
                                                    <span class="counter">36</span>
                                                </span>
                                                <div class="progress">
                                                    <div class="progress_bar" role="progressbar" style="width: 35.0233%;">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="star_rating_block">
                                                <ul>
                                                    <li><a href="javascript:void(0)" class="star_rating"><i class="fa-solid fa-star"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="star_rating"><i class="fa-solid fa-star"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="star_rating"><i class="fa-solid fa-star"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="star_rating"><i class="fa-solid fa-star"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="star_rating"><i class="fa-solid fa-star"></i></a></li>
                                                </ul>
                                            </div>
                                            <span class="pro_price">
                                                <span>$</span>151.00
                                            </span>
                                            <p class="tre_category">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam hendrerit nisi sed sollicitudin pellentesque. Nunc posuere purus rhoncus pulvinar aliquam.</p>
                                            <div class="product_action_wrap d-inline-flex flex-wrap">
                                                <a href="product" class="add_to_cart">Add to cart</a>
                                                <div class="w-100 d-flex">
                                                    <a href="product" class="quick">Quick View</a>
                                                <div class="compare_button">
                                                    <a href="product" class="compare">Compare</a>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="card">
                                        <div class="trending_imgbg position-relative">
                                            <a href="product">
                                                <img src="img/shop9.jpg" alt="">
                                            </a>
                                            <a href="product" class="trending_hoverimg">
                                                <img src="img/shop09.jpg" alt="">
                                            </a>
                                            <a href="wishlist" class="product_icon">
                                                <i class="fa-regular fa-heart"></i>
                                            </a>
                                        </div>
                                        <div class="trepro_details">
                                            <span class="tre_category">Laptops</span>
                                            <h2>
                                                <a href="product" class="treproduct__title text_truncate">Dell S27QC 27 inch 4K UHD Monitor - Grey</a>
                                            </h2>
                                            <div id="quantity_bar" class="mb-3">
                                                <span class="quantity">Available : 
                                                    <span class="counter">25</span>
                                                </span>
                                                <div class="progress">
                                                    <div class="progress_bar" role="progressbar" style="width: 25.0233%;">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="star_rating_block">
                                                <ul>
                                                    <li><a href="javascript:void(0)" class="star_rating"><i class="fa-solid fa-star"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="star_rating"><i class="fa-solid fa-star"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="star_rating"><i class="fa-solid fa-star"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="star_rating"><i class="fa-solid fa-star"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="star_rating"><i class="fa-solid fa-star"></i></a></li>
                                                </ul>
                                            </div>
                                            <span class="pro_price">
                                                <span>$</span>250.00
                                            </span>
                                            <p class="tre_category">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam hendrerit nisi sed sollicitudin pellentesque. Nunc posuere purus rhoncus pulvinar aliquam.</p>
                                            <div class="product_action_wrap d-inline-flex flex-wrap">
                                                <a href="product" class="add_to_cart">Add to cart</a>
                                                <div class="w-100 d-flex">
                                                    <a href="product" class="quick">Quick View</a>
                                                <div class="compare_button">
                                                    <a href="product" class="compare">Compare</a>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="card">
                                        <div class="trending_imgbg position-relative">
                                            <a href="product">
                                                <img src="img/trending-1.jpg" alt="">
                                            </a>
                                            <a href="product" class="trending_hoverimg">
                                                <img src="img/trending-01.jpg" alt="">
                                            </a>
                                            <a href="wishlist" class="product_icon">
                                                <i class="fa-regular fa-heart"></i>
                                            </a>
                                        </div>
                                        <div class="trepro_details">
                                            <span class="tre_category">Watches</span>
                                            <h2>
                                                <a href="product" class="treproduct__title text_truncate">E Circle Men's Smart Watch for Android Phone Night Black</a>
                                            </h2>
                                            <div id="quantity_bar" class="mb-3">
                                                <span class="quantity">Available : 
                                                    <span class="counter">68</span>
                                                </span>
                                                <div class="progress">
                                                    <div class="progress_bar" role="progressbar" style="width: 68.0233%;">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="star_rating_block">
                                                <ul>
                                                    <li><a href="javascript:void(0)" class="star_rating"><i class="fa-solid fa-star"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="star_rating"><i class="fa-solid fa-star"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="star_rating"><i class="fa-solid fa-star"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="star_rating"><i class="fa-solid fa-star"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="star_rating star_color"><i class="fa-solid fa-star"></i></a></li>
                                                </ul>
                                            </div>
                                            <span class="pro_price">
                                                <span>$</span>150.00
                                            </span>
                                            <p class="tre_category">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam hendrerit nisi sed sollicitudin pellentesque. Nunc posuere purus rhoncus pulvinar aliquam.</p>
                                            <div class="product_action_wrap d-inline-flex flex-wrap">
                                                <a href="product" class="add_to_cart">Add to cart</a>
                                                <div class="w-100 d-flex">
                                                    <a href="product" class="quick">Quick View</a>
                                                <div class="compare_button">
                                                    <a href="product" class="compare">Compare</a>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="card">
                                        <div class="trending_imgbg position-relative">
                                            <a href="product">
                                                <img src="img/Best3.jpg" alt="">
                                            </a>
                                            <a href="product" class="trending_hoverimg">
                                                <img src="img/Bestsell03.jpg" alt="">
                                            </a>
                                            <a href="wishlist" class="product_icon">
                                                <i class="fa-regular fa-heart"></i>
                                            </a>
                                        </div>
                                        <div class="trepro_details">
                                            <span class="tre_category">Laptops</span>
                                            <h2>
                                                <a href="product" class="treproduct__title text_truncate">HD Resolution Indoor Wi-Fi Security Camera, White</a>
                                            </h2>
                                            <div id="quantity_bar" class="mb-3">
                                                <span class="quantity">Available : 
                                                    <span class="counter">25</span>
                                                </span>
                                                <div class="progress">
                                                    <div class="progress_bar" role="progressbar" style="width: 25.0233%;">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="star_rating_block">
                                                <ul>
                                                    <li><a href="javascript:void(0)" class="star_rating"><i class="fa-solid fa-star"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="star_rating"><i class="fa-solid fa-star"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="star_rating"><i class="fa-solid fa-star"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="star_rating"><i class="fa-solid fa-star"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="star_rating"><i class="fa-solid fa-star"></i></a></li>
                                                </ul>
                                            </div>
                                            <span class="pro_price">
                                                <span>$</span>450.00
                                            </span>
                                            <p class="tre_category">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam hendrerit nisi sed sollicitudin pellentesque. Nunc posuere purus rhoncus pulvinar aliquam.</p>
                                            <div class="product_action_wrap d-inline-flex flex-wrap">
                                                <a href="product" class="add_to_cart">Add to cart</a>
                                                <div class="w-100 d-flex">
                                                    <a href="product" class="quick">Quick View</a>
                                                <div class="compare_button">
                                                    <a href="product" class="compare">Compare</a>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="card">
                                        <div class="trending_imgbg position-relative">
                                            <a href="product">
                                                <img src="img/trending-6.jpg" alt="">
                                            </a>
                                            <a href="product" class="trending_hoverimg">
                                                <img src="img/trending-06.jpg" alt="">
                                            </a>
                                            <a href="wishlist" class="product_icon">
                                                <i class="fa-regular fa-heart"></i>
                                            </a>
                                        </div>
                                        <div class="trepro_details">
                                            <span class="tre_category">Camera's</span>
                                            <h2>
                                                <a href="product" class="treproduct__title text_truncate">Hero Session Action Camera with 8MP Photos</a>
                                            </h2>
                                            <div id="quantity_bar" class="mb-3">
                                                <span class="quantity">Available : 
                                                    <span class="counter">33</span>
                                                </span>
                                                <div class="progress">
                                                    <div class="progress_bar" role="progressbar" style="width: 33.0233%;">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="star_rating_block">
                                                <ul>
                                                    <li><a href="javascript:void(0)" class="star_rating"><i class="fa-solid fa-star"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="star_rating"><i class="fa-solid fa-star"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="star_rating"><i class="fa-solid fa-star"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="star_rating"><i class="fa-solid fa-star"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="star_rating star_color"><i class="fa-solid fa-star"></i></a></li>
                                                </ul>
                                            </div>
                                            <span class="pro_price">
                                                <span>$</span>850.00
                                            </span>
                                            <p class="tre_category">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam hendrerit nisi sed sollicitudin pellentesque. Nunc posuere purus rhoncus pulvinar aliquam.</p>
                                            <div class="product_action_wrap d-inline-flex flex-wrap">
                                                <a href="product" class="add_to_cart">Add to cart</a>
                                                <div class="w-100 d-flex">
                                                    <a href="product" class="quick">Quick View</a>
                                                <div class="compare_button">
                                                    <a href="product" class="compare">Compare</a>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="card">
                                        <div class="trending_imgbg position-relative">
                                            <a href="product">
                                                <img src="img/shop13.jpg" alt="">
                                            </a>
                                            <a href="product" class="trending_hoverimg">
                                                <img src="img/shop013.jpg" alt="">
                                            </a>
                                            <a href="wishlist" class="product_icon">
                                                <i class="fa-regular fa-heart"></i>
                                            </a>
                                        </div>
                                        <div class="trepro_details">
                                            <span class="tre_category">Tablets</span>
                                            <h2>
                                                <a href="product" class="treproduct__title text_truncate">Honor T1 7.0 1 GB RAM 8 GB ROM 7 inch with Wi-Fi+3G Tablet</a>
                                            </h2>
                                            <div id="quantity_bar" class="mb-3">
                                                <span class="quantity">Available : 
                                                    <span class="counter">50</span>
                                                </span>
                                                <div class="progress">
                                                    <div class="progress_bar" role="progressbar" style="width: 50.0233%;">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="star_rating_block">
                                                <ul>
                                                    <li><a href="javascript:void(0)" class="star_rating"><i class="fa-solid fa-star"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="star_rating"><i class="fa-solid fa-star"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="star_rating"><i class="fa-solid fa-star"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="star_rating"><i class="fa-solid fa-star"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="star_rating"><i class="fa-solid fa-star"></i></a></li>
                                                </ul>
                                            </div>
                                            <span class="pro_price">
                                                <span>$</span>151.00 - $750.00
                                            </span>
                                            <p class="tre_category">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam hendrerit nisi sed sollicitudin pellentesque. Nunc posuere purus rhoncus pulvinar aliquam.</p>
                                            <div class="product_action_wrap d-inline-flex flex-wrap">
                                                <a href="product" class="add_to_cart">Add to cart</a>
                                                <div class="w-100 d-flex">
                                                    <a href="product" class="quick">Quick View</a>
                                                <div class="compare_button">
                                                    <a href="product" class="compare">Compare</a>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="card">
                                        <div class="trending_imgbg position-relative">
                                            <a href="product">
                                                <img src="img/shop14.jpg" alt="">
                                            </a>
                                            <a href="product" class="trending_hoverimg">
                                                <img src="img/shop014.jpg" alt="">
                                            </a>
                                            <a href="wishlist" class="product_icon">
                                                <i class="fa-regular fa-heart"></i>
                                            </a>
                                        </div>
                                        <div class="trepro_details">
                                            <span class="tre_category">Camera's</span>
                                            <h2>
                                                <a href="product" class="treproduct__title text_truncate">JBL Link Music Bluetooth Lautsprecher, Brown</a>
                                            </h2>
                                            <div id="quantity_bar" class="mb-3">
                                                <span class="quantity">Available : 
                                                    <span class="counter">48</span>
                                                </span>
                                                <div class="progress">
                                                    <div class="progress_bar" role="progressbar" style="width: 25.0233%;">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="star_rating_block">
                                                <ul>
                                                    <li><a href="javascript:void(0)" class="star_rating star_color"><i class="fa-solid fa-star"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="star_rating star_color"><i class="fa-solid fa-star"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="star_rating star_color"><i class="fa-solid fa-star"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="star_rating star_color"><i class="fa-solid fa-star"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="star_rating star_color"><i class="fa-solid fa-star"></i></a></li>
                                                </ul>
                                            </div>
                                            <span class="pro_price">
                                                <span>$</span>120.00
                                            </span>
                                            <p class="tre_category">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam hendrerit nisi sed sollicitudin pellentesque. Nunc posuere purus rhoncus pulvinar aliquam.</p>
                                            <div class="product_action_wrap d-inline-flex flex-wrap">
                                                <a href="product" class="add_to_cart">Add to cart</a>
                                                <div class="w-100 d-flex">
                                                    <a href="product" class="quick">Quick View</a>
                                                <div class="compare_button">
                                                    <a href="product" class="compare">Compare</a>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="card">
                                        <div class="trending_imgbg position-relative">
                                            <a href="product">
                                                <img src="img/Npro2.jpg" alt="">
                                            </a>
                                            <a href="product" class="trending_hoverimg">
                                                <img src="img/Npro02.jpg" alt="">
                                            </a>
                                            <a href="wishlist" class="product_icon">
                                                <i class="fa-regular fa-heart"></i>
                                            </a>
                                        </div>
                                        <div class="trepro_details">
                                            <span class="tre_category">Headphones</span>
                                            <h2>
                                                <a href="product" class="treproduct__title text_truncate">Kids headphones bulk 10 pack multi colored for students</a>
                                            </h2>
                                            <div id="quantity_bar" class="mb-3">
                                                <span class="quantity">Available : 
                                                    <span class="counter">28</span>
                                                </span>
                                                <div class="progress">
                                                    <div class="progress_bar" role="progressbar" style="width: 28.0233%;">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="star_rating_block">
                                                <ul>
                                                    <li><a href="javascript:void(0)" class="star_rating star_color"><i class="fa-solid fa-star"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="star_rating star_color"><i class="fa-solid fa-star"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="star_rating star_color"><i class="fa-solid fa-star"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="star_rating star_color"><i class="fa-solid fa-star"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="star_rating star_color"><i class="fa-solid fa-star"></i></a></li>
                                                </ul>
                                            </div>
                                            <span class="pro_price">
                                                <span>$</span>300.00
                                            </span>
                                            <p class="tre_category">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam hendrerit nisi sed sollicitudin pellentesque. Nunc posuere purus rhoncus pulvinar aliquam.</p>
                                            <div class="product_action_wrap d-inline-flex flex-wrap">
                                                <a href="product" class="add_to_cart">Add to cart</a>
                                                <div class="w-100 d-flex">
                                                    <a href="product" class="quick">Quick View</a>
                                                <div class="compare_button">
                                                    <a href="product" class="compare">Compare</a>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <nav class="pagination">
                                <ul>
                                    <li><a href="javascript:void(0)" class="pagination_number active">1</a></li>
                                    <li><a class="pagination_number" href="javascript:void(0)">2</a></li>
                                    <li><a class="pagination_number" href="javascript:void(0)">→</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- start footer -->
    <?php include 'footer.php';?>
    <!-- end footer -->

    <!-- start bottom-top btn -->
    <div class="bottom_top">
        <a href="javascript:void(0)" class="bottom_topbtn"><i class="fa-solid fa-angle-up"></i></a>
    </div>
    <!-- end bottom-top btn -->


    <!-- jquery -->
    <script src="js/jquery-3.7.0.min.js"></script>
    <!-- owl carousel -->
    <script src="js/owl.carousel.js"></script>
    <!-- slick slider -->
    <script src="js/slick.min.js"></script>
    <!-- bootstrap -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- rang slder -->
    <script src="js/code.jquery.com_ui_1.12.1_jquery-ui.js"></script>
    <!-- custom js -->
    <script src="js/custom.js"></script>
    <script>
        $(function() {
            $( "#slider-range" ).slider({
                orientation: "horizontal",
                range: true,
                min: 80, 
                max: 4000, 
                values: [80, 4000],
                slide: function( event, ui ) {
                $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
                }
            });
            $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
                " - $" + $( "#slider-range" ).slider( "values", 1 ) );
        });
    </script>
</body>
</html>