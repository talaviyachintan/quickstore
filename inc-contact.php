<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Quickstore</title>
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
                <h1 class="entry_title">Contact</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                      <li class="breadcrumb-item"><a href="./"><i class="fa-solid fa-house"></i></a></li>
                      <li class="breadcrumb-item active" aria-current="page">Contact</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="container-fluid content_area">
            <div class="contactpage_titlebg">
                <h1 class="contactpage_title fs-1">Send us a message</h1>
                <p class="contactpage_tit_cap">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
            </div>
            <div class="row gy-3">
                <div class="col-lg-6 contactbox pe-0">
                    <div class="contactpage_left border h-100 border-end-0 d-flex align-items-center">
                        <div class="w-100">
                            <div class="contactpage_locationbg">
                                <div class="contactpage_loction">
                                    <a href="javascript:void(0)" class="contactpage_icon"><i class="fa-solid fa-location-dot"></i></a>
                                    <div>
                                        <h5 class="Contactpage_heading">Address :</h5>
                                        <p class="contactpage_tit_cap">502 New Design Str, San Francisco, United States of America.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="contactpage_locationbg">
                                <div class="contactpage_loction">
                                    <a href="javascript:void(0)" class="contactpage_icon"><i class="fa-solid fa-phone"></i></a>
                                    <div>
                                        <h5 class="Contactpage_heading">Contact Us :</h5>
                                        <p class="contactpage_tit_cap">+91 123-456-789 / +00 123-456-789</p>
                                    </div>
                                </div>
                            </div>
                            <div class="contactpage_locationbg">
                                <div class="contactpage_loction">
                                    <a href="javascript:void(0)" class="contactpage_icon"><i class="fa-solid fa-envelopes-bulk"></i></a>
                                    <div>
                                        <h5 class="Contactpage_heading">Email Us :</h5>
                                        <p class="contactpage_tit_cap">demo@company.com</p>
                                    </div>
                                </div>
                            </div>
                            <div class="contactpage_locationbg mb-0">
                                <div class="contactpage_loction border-0 mb-0 pb-0">
                                    <a href="javascript:void(0)" class="contactpage_icon"><i class="fa-regular fa-clock"></i></a>
                                    <div>
                                        <h5 class="Contactpage_heading">Open / Close Time</h5>
                                        <p class="contactpage_tit_cap">09:00AM - 7:00PM</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 contactbox ps-0">
                    <div class="contactpage_right border h-100">
                        <form>
                            <p class="contactpage_formsec">
                                <label class="contactpage_tit_cap w-100">Your name
                                    <input type="text" class="contactpage_input">
                                </label>
                            </p>
                            <p class="contactpage_formsec">
                                <label class="contactpage_tit_cap w-100">Your email
                                    <input type="text" class="contactpage_input">
                                </label>
                            </p>
                            <p class="contactpage_formsec">
                                <label class="contactpage_tit_cap w-100">Subject
                                    <input type="text" class="contactpage_input">
                                </label>
                            </p>
                            <p class="contactpage_formsec">
                                <label class="contactpage_tit_cap w-100">Your message (optional)
                                    <textarea name="" id="" cols="30" rows="10" class="contactpage_input"></textarea>
                                </label>
                            </p>
                            <p class="contactpage_formsec">
                                <input type="submit" class="blue_button border-0">
                            </p>
                        </form>
                    </div>
                </div>
                <div class="col-12">
                    <iframe loading="lazy" class="w-100 contactpage_map" src="https://maps.google.com/maps?q=London%20Eye%2C%20London%2C%20United%20Kingdom&amp;t=m&amp;z=10&amp;output=embed&amp;iwloc=near" title="London Eye, London, United Kingdom" aria-label="London Eye, London, United Kingdom"></iframe>
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
</body>
</html>
