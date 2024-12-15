<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout - Quickstore</title>
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
                <h1 class="entry_title">Checkout</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                      <li class="breadcrumb-item"><a href="./"><i class="fa-solid fa-house"></i></a></li>
                      <li class="breadcrumb-item active text-underline" aria-current="page">Checkout</li>
                      <!-- <li class="breadcrumb-item active" aria-current="page">3 Columns</li> -->
                    </ol>
                </nav>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row content_area">
                <div class="col-lg-6">
                    <div class="cart_frist_section">
                        <h2>Billing Details</h2>
                    </div>
                    <div class="contactpage_right border-0 p-0">
                        <form>
                            <p class="contactpage_formsec">
                                <label class="contactpage_tit_cap w-100">First name *
                                    <input type="text" class="contactpage_input" placeholder="Your Name">
                                </label>
                            </p>
                            <p class="contactpage_formsec">
                                <label class="contactpage_tit_cap w-100">Last name *
                                    <input type="text" class="contactpage_input">
                                </label>
                            </p>
                            <p class="contactpage_formsec">
                                <label class="contactpage_tit_cap w-100">Company name (optional)
                                    <input type="text" class="contactpage_input" placeholder="Company Name">
                                </label>
                            </p>
                            <p class="contactpage_formsec">
                                <label class="contactpage_tit_cap w-100">Country / Region *
                                    <input type="text" class="contactpage_input" placeholder="Country Name">
                                </label>
                            </p>
                            <p class="contactpage_formsec">
                                <label class="contactpage_tit_cap w-100">Street address *
                                    <input type="text" class="contactpage_input" placeholder="House number and street name">
                                </label>
                            </p>
                            <p class="contactpage_formsec">
                                <label class="contactpage_tit_cap w-100">Town / City *
                                    <input type="text" class="contactpage_input" placeholder="City">
                                </label>
                            </p>
                            <p class="contactpage_formsec">
                                <label class="contactpage_tit_cap w-100">State *
                                    <input type="text" class="contactpage_input" placeholder="State">
                                </label>
                            </p>
                            <p class="contactpage_formsec">
                                <label class="contactpage_tit_cap w-100">ZIP Code *
                                    <input type="text" class="contactpage_input" placeholder="335009">
                                </label>
                            </p>
                            <p class="contactpage_formsec">
                                <label class="contactpage_tit_cap w-100">Phone *
                                    <input type="text" class="contactpage_input" placeholder="123456789">
                                </label>
                            </p>
                            <p class="contactpage_formsec">
                                <label class="contactpage_tit_cap w-100">Email address *
                                    <input type="text" class="contactpage_input" placeholder="Your Email Address">
                                </label>
                            </p>
                        </form>
                    </div>
                    <div class="cart_frist_section">
                        <h2>Additional Information</h2>
                    </div>
                    <div class="contactpage_right border-0 p-0">
                        <form>
                            <p class="contactpage_formsec">
                                <label class="contactpage_tit_cap w-100">Order notes (optional)
                                    <textarea name="" id="" cols="5" rows="2" class="contactpage_input" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                </label>
                            </p>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="cart_frist_section">
                        <h2>Your Order</h2>
                    </div>
                    <div class="text-end">
                        <table class="cart_total_table cart_table2 ms-auto w-100">
                            <thead>
                                <tr>
                                    <th class="cart_table_proname">Product</th>
                                    <th class="cart_table_proname">Subtotal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th class="pro_detailname">Olympus pen E-PL9 kit with 14-42, EZ lens, camera  x 8</th>
                                    <th class="cart_table_price">$2,000.00</th>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <th class="pro_detailname">Apple MacBook Air Laptop: M1 chip, 13.3-inch/33.74 cm  x 2</th>
                                    <th class="cart_table_price">$800.00</th>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <th class="cart_table_proname">Subtotal</th>
                                    <th class="cart_table_proname">$2,800.00</th>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <th class="cart_table_proname">Total</th>
                                    <th class="cart_table_proname">$2,800.00</th>
                                </tr>
                            </tbody>
                        </table>
                        <div class="cash_on_delivery">
                            Cash on delivery
                        </div>
                        <span class="contactpage_tit_cap ms-2 my-2 text-start">Your personal data will be used to support your experience throughout this website, to manage access to your account, and for other purposes described in our <a href="javascript:void(0)" class="read_more lern_btn border-0 m-0">privacy policy.</a></span>
                        <div class="text-start">
                            <label for="" class="my-2">
                                <input type="checkbox"><span class="contactpage_tit_cap ms-2"> I have read and agree to the website <a href="javascript:void(0)" class="read_more lern_btn border-0 m-0"> terms and conditions *</a></span>
                            </label>
                        </div>
                        <a href="javascript:void(0)" class="blue_button mt-3 w-100 text-center">Place order</a>
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
    <!-- fancy box -->
    <script src="js/jquery.fancybox.min.js"></script>
    <!-- bootstrap -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- custom js -->
    <script src="js/custom.js"></script>
</body>
</html>
