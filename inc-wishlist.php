<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wishlist - Quickstore</title>
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
                <h1 class="entry_title">Wishlist</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                      <li class="breadcrumb-item"><a href="./"><i class="fa-solid fa-house"></i></a></li>
                      <li class="breadcrumb-item active text-underline" aria-current="page">Wishlist</li>
                      <!-- <li class="breadcrumb-item active" aria-current="page">3 Columns</li> -->
                    </ol>
                </nav>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row content_area">
                <div class="cart_frist_section">
                    <h2>My Wishlist</h2>
                </div>
                <div class="d-none d-lg-block">
                    <table class="cart_table1">
                        <thead>
                            <tr>
                                <th></th>
                                <th></th>
                                <th class="cart_table_proname">Product name</th>
                                <th class="cart_table_proprice">Unit price</th>
                                <th class="cart_table_proqua">Stock status</th>
                                <th class="cart_table_prosut"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th class="cart_remove"><i class="fa-solid fa-x"></i></th>
                                <th class="cart_pro_thmbnail">
                                    <img src="img/pro-page-1.jpg" alt="">
                                </th>
                                <th class="pro_detailname">	Apple MacBook Air Laptop: M1 chip, 13.3-inch/33.74 cm</th>
                                <th class="cart_table_price"><span>$400.00</span></th>
                                <th>
                                    <span>In Stock</span>
                                </th>
                                <th class="cart_table_price"><a href="cart" class="lern_btn m-0">Add to cart</a></th>
                            </tr>
                            <tr>
                                <th class="cart_remove"><i class="fa-solid fa-x"></i></th>
                                <th class="cart_pro_thmbnail">
                                    <img src="img/trending-1.jpg" alt="">
                                </th>
                                <th class="pro_detailname">E Circle Men's Smart Watch for Android Phone Night Black</th>
                                <th class="cart_table_price"><span>$150.00</span></th>
                                <th>
                                    <span>In Stock</span>
                                </th>
                                <th class="cart_table_price"><a href="cart" class="lern_btn m-0">Add to cart</a></th>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="d-block d-lg-none">
                    <table class="cart_table1">
                        <tbody>
                            <tr>
                                <th class="cart_remove"><i class="fa-solid fa-x"></i></th>
                                <th class="cart_pro_thmbnail">
                                    <img src="img/trending-02.jpg" alt="">
                                </th>
                                <th class="pro_detailname"><span class="cart_table_proname">Product</span> Olympus pen E-PL9 kit with 14-42, EZ lens, camera</th>
                                <th class="cart_table_price"><span class="cart_table_proprice">Price</span><span>$250.00</span></th>
                                <th><span class="cart_table_proqua">Quantity</span>
                                    <div class="spinners_added d-inline-block">
                                        <button class="minus" onclick="counter('-')">-</button>
                                        <input type="txt" class="input_counter" value="8" id="counter">
                                        <button class="plus" onclick="counter('+')">+</button>
                                    </div>
                                </th>
                                <th class="cart_table_price"><span class="cart_table_prosut">Subtotal</span><span>$2,000.00</span></th>
                            </tr>
                            <tr>
                                <th class="cart_remove"><i class="fa-solid fa-x"></i></th>
                                <th class="cart_pro_thmbnail">
                                    <img src="img/pro-page-1.jpg" alt="">
                                </th>
                                <th class="pro_detailname"><span class="cart_table_proname">Product</span>Apple MacBook Air Laptop: M1 chip, 13.3-inch/33.74 cm</th>
                                <th class="cart_table_price"><span class="cart_table_proprice">Price</span><span>$400.00</span></th>
                                <th><span class="cart_table_proqua">Quantity</span>
                                    <div class="spinners_added d-inline-block">
                                        <button class="minus" onclick="counter('-')">-</button>
                                        <input type="txt" class="input_counter" value="2" id="counter">
                                        <button class="plus" onclick="counter('+')">+</button>
                                    </div>
                                </th>
                                <th class="cart_table_price"><span class="cart_table_prosut">Subtotal</span><span>	$800.00</span></th>
                            </tr>
                        </tbody>
                    </table>
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
    <!-- fancy box -->
    <script src="js/jquery.fancybox.min.js"></script>
    <!-- bootstrap -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- custom js -->
    <script src="js/custom.js"></script>
</body>
</html>
