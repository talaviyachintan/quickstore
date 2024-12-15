<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product - Quickstore</title>
    <!-- favicon icon -->
    <link rel="icon" href="img/favicon.png">
    <!-- font awesome sheet -->
    <link rel="stylesheet" href="css/all.min.css">
    <!-- bootstrap sheet -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- owl carousel -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <!-- slick slider -->
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slick-theme.css">
    <!-- Fancy box -->
    <!-- <link rel="stylesheet" href="css/jquery.fancybox.min.css"> -->
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
                <h1 class="entry_title">Product</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                      <li class="breadcrumb-item"><a href="./"><i class="fa-solid fa-house"></i></a></li>
                      <li class="breadcrumb-item active" aria-current="page">Product</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="container-fluid content_area">
            <div class="row gy-3">
                <div class="col-xl-4 col-lg-4 col-12">
                    <div class="product_view">
                        <div class="zoom_imgbg">
                            <div class="product-img">
                                <div class="product1">
                                    <img src="img/pro-page-1.jpg" alt="">
                                </div>
                                <div class="product1">
                                    <img src="img/pro-page-2.jpg" alt="">
                                </div>
                                <div class="product1">
                                    <img src="img/pro-page-3.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="thumbnail_img">
                            <div class="thumbnail">
                                <div>
                                    <img src="img/pro-page-1.jpg" alt="" width="100%">
                                </div>
                                <div>
                                    <img src="img/pro-page-2.jpg" alt="" width="100%">
                                </div>
                                <div>
                                    <img src="img/pro-page-3.jpg" alt="" width="100%">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-5 col-md-8 col-sm-7">
                    <div class="pro_detail_title">
                        <h1>Apple MacBook Air Laptop: M1 chip, 13.3-inch/33.74 cm</h1>
                        <div class="star_rating_block pro_detail_underline">
                            <ul>
                                <li><a href="javascript:void(0)" class="star_rating"><i class="fa-solid fa-star"></i></a></li>
                                <li><a href="javascript:void(0)" class="star_rating"><i class="fa-solid fa-star"></i></a></li>
                                <li><a href="javascript:void(0)" class="star_rating"><i class="fa-solid fa-star"></i></a></li>
                                <li><a href="javascript:void(0)" class="star_rating"><i class="fa-solid fa-star"></i></a></li>
                                <li><a href="javascript:void(0)" class="star_rating"><i class="fa-solid fa-star"></i></a></li>
                                <li><a href="javascript:void(0)" class="ms-2 star_color">(1 customer review)</a></li>
                            </ul>
                        </div>
                        <p class="pro_detail_price">$400.00
                            <span class="pro_detail_smalltext">& Free Shipping</span>
                        </p>
                        <div class="pro_detail_underline pb-0">
                            <p class="pro_detail_smalltext mb-3">
                                All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.
                            </p>
                        </div>
                        <p class="pro_detail_instock">30 in stock</p>
                        <div class="mb-4 d-flex">
                            <div class="spinners_added d-inline-block">
                                <button class="minus" onclick="counter('-')">-</button>
                                <input type="txt" class="input_counter" value="0" id="box">
                                <button class="plus" onclick="counter('+')">+</button>
                            </div>
                            <div>
                                <a href="cart" class="blue_button px-5 rounded-1">Add To Cart</a>
                            </div>
                        </div>
                        <div>
                            <a href="wishlist"><span class="border-end pe-3 me-3 pro_addto_wish"><i class="fa-solid fa-heart"></i> Add to wishlist</span></a>
                            <span class="pro_compare"><i class="fa-sharp fa-solid fa-chart-area"></i> Compare</span>
                        </div>
                        <div class="product_meta">
                            <span class="sku_wrapper">SKU: <span class="sku">UOP102</span></span>
                            <span class="posted_in">Categories: <a href="javascript:void(0)">Headphones</a>, <a href="javascript:void(0)">Laptops</a>, <a href="javascript:void(0)">Mini speakers</a>, <a href="javascript:void(0)">Smart watches</a>, <a href="javascript:void(0)">Tablets</a></span>
                            <span class="tagged_as">Tags: <a href="javascript:void(0)">HP</a>, <a href="javascript:void(0)">Lenovo</a></span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-5">
                    <div>
                        <img src="img/product_view_left.jpg" alt="">
                    </div>
                    <div class="mt-3 product_page_left">
                        <ul class="d-block">
                            <li><strong>Applicable on</strong>Orders above Rs. 500.</li>
                            <li><strong>Bank offer</strong>5% Cashback on paypal card.</li>
                            <li><strong>Coupon code</strong>Use code "QUICKSALE".</li>
                            <li><strong>Delivered</strong>Usually delivered in 6 days.</li>
                        </ul>
                    </div>
                    <div class="mt-3 product_page_left">
                        <ul class="d-block">
                            <li class="pro_page_card">
                                <img src="img/paypal.svg" alt="" class="pe-1 border-1 ">
                                <img src="img/mastercard.svg" alt="" class="pe-1 border-1">
                                <img src="img/American.svg" alt="" class="pe-1 border-1">
                                <img src="img/Discover.svg" alt="" class="pe-1 border-1">
                                <img src="img/visa.svg" alt="">
                            </li>
                            <li>Safe & more secure way to pay online. We don't strored any information's.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="pro_page_tabs">
                <ul class="nav nav-pills mb-3 justify-content-center border-bottom" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Description</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Additional Information</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Reviews (1)</button>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                        <p class="pro_detail_smalltext">In cursus faucibus tortor eu vestibulum. Ut eget turpis ac justo porta varius. Donec vel felis ante, ac vehicula ipsum. Quisque sed diam metus. Quisque eget leo sit amet erat varius rutrum vitae dapibus lectus. Vivamus et sapien ante. Suspendisse potenti. Fusce in tellus est, ac consequat lacus. Nulla risus massa, commodo in imperdiet ut, ornare in leo. Duis pellentesque sagittis lorem, sed mollis lorem venenatis iinded.</p>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                        <div class="d-flex">
                            <div class="prodetail_dimensions">Dimensions</div>
                            <div class="dimensions_value w-100 pro_detail_smalltext">55 x 56 x 85 cm</div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
                        <p class="pro_detail_smalltext">(0) review</p>
                    </div>
                </div>
            </div>  
        </div>
        <div class="container-fluid specer top_cate position-relative">
            <div class="section_headbg border-0">
                <h2 class="section_heading text-center fs-2">Related Products</h2>
            </div>
            <div>
                <div class="owl-carousel owl-theme" id="Sma_Phones">
                    <div class="item">
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
                                <h2 >
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
                                    <a href="product" class="add_to_cart" >Add to cart</a>
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
                    <div class="item">
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
                                <h2 >
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
                                    <a href="product" class="add_to_cart" >Buy on fipkart</a>
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
                    <div class="item">
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
                                <h2 >
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
                                    <a href="product" class="add_to_cart" >View products </a>
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
                    <div class="item">
                        <div class="card">
                            <div class="trending_imgbg position-relative">
                                <a href="product">
                                    <img src="img/smartphon4.jpg" alt="">
                                </a>
                                <a href="product" class="trending_hoverimg">
                                    <img src="img/smartphone04.jpg" alt="">
                                </a>
                                <a href="wishlist" class="product_icon">
                                    <i class="fa-regular fa-heart"></i>
                                </a>
                            </div>
                            <div class="trepro_details">
                                <span class="tre_category">Mobiles</span>
                                <h2 >
                                    <a href="product" class="treproduct__title text_truncate">Samsung Galaxy A23 128GB 6GB RAM Purple Color</a>
                                </h2>
                                <div id="quantity_bar" class="mb-3">
                                    <span class="quantity">Available : 
                                        <span class="counter">69</span>
                                    </span>
                                    <div class="progress">
                                        <div class="progress_bar" role="progressbar" style="width: 68.0233%;">
                                        </div>
                                    </div>
                                </div>
                                <div class="star_rating_block">
                                    <ul>
                                        <li><a href="javascript:void(0)" class="star_rating start_color"><i class="fa-solid fa-star"></i></a></li>
                                        <li><a href="javascript:void(0)" class="star_rating start_color"><i class="fa-solid fa-star"></i></a></li>
                                        <li><a href="javascript:void(0)" class="star_rating start_color"><i class="fa-solid fa-star"></i></a></li>
                                        <li><a href="javascript:void(0)" class="star_rating start_color"><i class="fa-solid fa-star"></i></a></li>
                                        <li><a href="javascript:void(0)" class="star_rating start_color"><i class="fa-solid fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <span class="pro_price">
                                    <span>$</span>750.00
                                </span>
                                <div class="product_action_wrap">
                                    <a href="product" class="add_to_cart" >Add to cart</a>
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
                    <div class="item">
                        <div class="card">
                            <div class="trending_imgbg position-relative">
                                <a href="product">
                                    <img src="img/trending-4.jpg" alt="">
                                </a>
                                <a href="product" class="trending_hoverimg">
                                    <img src="img/trending-04.jpg" alt="">
                                </a>
                                <a href="wishlist" class="product_icon">
                                    <i class="fa-regular fa-heart"></i>
                                </a>
                            </div>
                            <div class="trepro_details">
                                <span class="tre_category">Mobiles</span>
                                <h2 >
                                    <a href="product" class="treproduct__title text_truncate">Samsung Galaxy Note10+ Mobile Phone; Sim Free Smartphone</a>
                                </h2>
                                <div id="quantity_bar" class="mb-3">
                                    <span class="quantity">Available : 
                                        <span class="counter">80</span>
                                    </span>
                                    <div class="progress">
                                        <div class="progress_bar" role="progressbar" style="width: 80.0233%;">
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
                                    <span>$</span>300.00 - $500.00
                                </span>
                                <div class="product_action_wrap">
                                    <a href="product" class="add_to_cart" >Select Options</a>
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
                    <div class="item">
                        <div class="card">
                            <div class="trending_imgbg position-relative">
                                <a href="product">
                                    <img src="img/Bestsell1.jpg" alt="">
                                </a>
                                <a href="product" class="trending_hoverimg">
                                    <img src="img/Bestsell01.jpg" alt="">
                                </a>
                                <a href="wishlist" class="product_icon">
                                    <i class="fa-regular fa-heart"></i>
                                </a>
                            </div>
                            <div class="trepro_details">
                                <span class="tre_category">Mobiles</span>
                                <h2 >
                                    <a href="product" class="treproduct__title text_truncate">Smart Watch for Android iPhone, Bluetooth Phone Calls</a>
                                </h2>
                                <div id="quantity_bar" class="mb-3">
                                    <span class="quantity">Available : 
                                        <span class="counter">95</span>
                                    </span>
                                    <div class="progress">
                                        <div class="progress_bar" role="progressbar" style="width: 98.0233%;">
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
                                    <a href="product" class="add_to_cart" >Add to cart</a>
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
    <!-- custom js -->
    <script src="js/custom.js"></script>
    <script>
        function counter(s){
            var	txt=document.getElementById('box');
            if(s == '-'){
                if(txt.value>0){
                    txt.value --;
                }
            }
            if(s == '+'){
                txt.value++;
            }
        }
    </script>
</body>
</html>
