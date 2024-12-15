<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Account - Quickstore</title>
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
                <h1 class="entry_title">My Account</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                      <li class="breadcrumb-item"><a href="./"><i class="fa-solid fa-house"></i></a></li>
                      <li class="breadcrumb-item active text-underline" aria-current="page">My Account</li>
                      <!-- <li class="breadcrumb-item active" aria-current="page">3 Columns</li> -->
                    </ol>
                </nav>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row content_area">
                <div class="col-lg-6">
                    <div class="cart_frist_section">
                        <h2>Login</h2>
                    </div>
                    <div class="contactpage_right border">
                        <form>
                            <p class="contactpage_formsec">
                                <label class="contactpage_tit_cap w-100">Username or email address *
                                    <input type="text" class="contactpage_input">
                                </label>
                            </p>
                            <p class="contactpage_formsec">
                                <label class="contactpage_tit_cap w-100">Password *
                                    <input type="text" class="contactpage_input">
                                </label>
                            </p>
                            <label for="" class="my-2">
                                <input type="checkbox"><span class="contactpage_tit_cap ms-2">Remember me</span>
                            </label>
                            <p class="contactpage_formsec">
                                <input type="submit" class="blue_button border-0" value="Log In">
                            </p>
                            <a href="javascript:void(0)" class="read_more lern_btn border-0 ms-0">Forgot Password?</a>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="cart_frist_section">
                        <h2>Register</h2>
                    </div>
                    <div class="contactpage_right border">
                        <form>
                            <p class="contactpage_formsec">
                                <label class="contactpage_tit_cap w-100">Username *
                                    <input type="text" class="contactpage_input">
                                </label>
                            </p>
                            <p class="contactpage_formsec">
                                <label class="contactpage_tit_cap w-100">Email address *
                                    <input type="text" class="contactpage_input">
                                </label>
                            </p>
                            <p class="contactpage_formsec">
                                <label class="contactpage_tit_cap w-100">Password *
                                    <input type="text" class="contactpage_input">
                                </label>
                            </p>
                            <span class="contactpage_tit_cap ms-2 my-2">Your personal data will be used to support your experience throughout this website, to manage access to your account, and for other purposes described in our <a href="javascript:void(0)" class="read_more lern_btn border-0 m-0">privacy policy.</a></span>
                            <p class="contactpage_formsec">
                                <input type="submit" class="blue_button border-0" value="Register">
                            </p>
                        </form>
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
