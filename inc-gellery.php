<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gellery - Quickstore</title>
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
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
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
                <h1 class="entry_title">3 Columns</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                      <li class="breadcrumb-item"><a href="./"><i class="fa-solid fa-house"></i></a></li>
                      <li class="breadcrumb-item active text-underline" aria-current="page">Gallery</li>
                      <!-- <li class="breadcrumb-item active" aria-current="page">3 Columns</li> -->
                    </ol>
                </nav>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row g-4 py-4">
                <div class="col-lg-4 col-sm-6 col-12">
                    <a href="img/blogpage1.jpg" class="gallery_page_img" data-fancybox="images" data-caption="Backpackers following a dirt trail">
                        <img src="img/blogpage1.jpg" alt="">
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <a href="img/bolgpage2.jpg" class="gallery_page_img" data-fancybox="images" data-caption="Backpackers following a dirt trail">
                        <img src="img/bolgpage2.jpg" alt="">
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <a href="img/blogpage3.jpg" class="gallery_page_img" data-fancybox="images" data-caption="Backpackers following a dirt trail">
                        <img src="img/blogpage3.jpg" alt="">
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <a href="img/blogpage4.jpg" class="gallery_page_img" data-fancybox="images" data-caption="Backpackers following a dirt trail">
                        <img src="img/blogpage4.jpg" alt="">
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <a href="img/blogpage5.jpg" class="gallery_page_img" data-fancybox="images" data-caption="Backpackers following a dirt trail">
                        <img src="img/blogpage5.jpg" alt="">
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <a href="img/blogpage6.jpg" class="gallery_page_img" data-fancybox="images" data-caption="Backpackers following a dirt trail">
                        <img src="img/blogpage6.jpg" alt="">
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <a href="img/blogpage7.jpg" class="gallery_page_img" data-fancybox="images" data-caption="Backpackers following a dirt trail">
                        <img src="img/blogpage7.jpg" alt="">
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <a href="img/blogpage8.jpg" class="gallery_page_img" data-fancybox="images" data-caption="Backpackers following a dirt trail">
                        <img src="img/blogpage8.jpg" alt="">
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <a href="img/blogpage9.jpg" class="gallery_page_img" data-fancybox="images" data-caption="Backpackers following a dirt trail">
                        <img src="img/blogpage9.jpg" alt="">
                    </a>
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
    <script>
    $(document).ready(function () {
    // fancybox

	$("a.group").fancybox({
		'transitionIn'	:	'elastic',
		'transitionOut'	:	'elastic',
		'speedIn'		:	600, 
		'speedOut'		:	200, 
		'overlayShow'	:	false
	});
    });
    </script>
</body>
</html>
