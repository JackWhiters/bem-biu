<?php

    error_reporting(0);
    include "admin/conn.php";

    //fet id
    $id = $_GET['id'];

    //fetch blogs 
    $blog = mysqli_query($con,"SELECT * FROM blog WHERE id=$id");
    $fetch = mysqli_fetch_array($blog);


    //fetch recent post
    $recent = mysqli_query($con,"SELECT * FROM blog LIMIT 4");

      //fetch category

    $cat = mysqli_query($con,"SELECT * FROM category ORDER BY id DESC");
    
    
    //fetch settings
    $settings = mysqli_query($con,"SELECT * FROM settings");
    $setting  = mysqli_fetch_array($settings);

    
?>
    
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from st.ourhtmldemo.com/new/Transida2/blog-details.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Jan 2021 08:08:07 GMT -->
<head>
<meta charset="utf-8">
<title><?php echo $setting['site_name']; ?> - <?php echo $fetch['title']; ?></title>
<meta name="description" content="">
<!-- Stylesheets -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--=============== FAVICON ===============-->
    <link rel="shortcut icon" href="assets/img/logo-kabinet.png" type="image/x-icon">

    <!--=============== REMIX ICONS ===============-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="assets/css/styless3.css">


<link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
<link rel="icon" href="assets/images/favicon.png" type="image/x-icon">

  <script>
        $(document).ready(function() {
            $(".program__card").hide();
            $(".berita__card:first-child").show();

            $(".page__show").click(function() {

                $(".berita__program .page__show").removeClass("active-show");
                $(this).addClass("active-show");

                var current_tab = $(this).attr("data-list");
                $(".berita__card, .program__card").hide();
                $("." + current_tab).show();
            })
        });
    </script>

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

 
    <!-- Main Header -->
    <!--==================== HEADER ====================-->
        <header class="header" id="header">
        <nav class="nav container">
            <img src="assets/img/klogo2.png" class="nav__logo" alt="">
            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="index.php" class="nav__link active-link">Home</a>
                    </li>
                    <li class="nav__item">
                        <a href="tentang-kami.php" class="nav__link">Tentang Kami</a>
                        <i class="ri-arrow-down-s-line" style="color: white;"></i>
                        <ul class="dropdown__nav">
                            <li><a href="tentang-kami.php" class="dropdown__link">Tentang BEM</a></li>
                            <li><a href="visi-misi.php" class="dropdown__link">Visi-Misi</a></li>
                            <li><a href="sejarah.php" class="dropdown__link">Sejarah</a></li>
                        </ul>
                    </li>
                    <li class="nav__item">
                        <a href="detail-berita.php" class="nav__link">Berita & Program</a>
                    </li>
                    <li class="nav__item">
                        <a href="struktur-divisi.php" class="nav__link">Struktur & Divisi</a>
                    </li>
                    
                    <li class="nav__item">
                        <a href="ukm.php" class="nav__link">UKM</a>
                    </li>
                    <li class="nav__item">
                        <a href="contact.php" class="nav__link button--ghost">Hubungi Kami</a>
                    </li>
                </ul>

                <div class="nav__close" id="nav-close">
                    <i class="ri-close-line"></i>
                </div>
            </div>

            <div class="nav__btns">

                <div class="nav__toggle" id="nav-toggle">
                    <i class="ri-menu-line"></i>
                </div>
            </div>
        </nav>
    </header>

    <main class="main">

        <section class="detail-berita section">
            <div class="detail-berita__container container grid">
                <div class="detail__data">
                    <h2 class="detail__title"><?php echo $fetch['title']; ?></h2>
                     <img src="admin/images/blog/<?php echo $fetch['img']; ?>" alt="" class="card__detail-img">

                </div>
            </div>
        </section>

        <section class="section berita container" id="berita">
            <div class="berita__link-container grid">
                <div class="berita__link-data">
                    <h2 class="berita__link-title"><?php echo $fetch['title']; ?></h2>
                    <p class="berita__link-desc"><?php echo $fetch['descrip']; ?>
                    </p>
                </div>
            </div>
        </section>
    </main>


  <!--Main Footer-->
   <?php include "footer.php"; ?>
<!--End pagewrapper-->


<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="flaticon-right-arrow-6"></span></div>

<script src="assets/js/jquery.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/bootstrap-select.min.js"></script>
<script src="assets/js/jquery.fancybox.js"></script>
<script src="assets/js/isotope.js"></script>
<script src="assets/js/owl.js"></script>
<script src="assets/js/appear.js"></script>
<script src="assets/js/wow.js"></script>
<script src="assets/js/lazyload.js"></script>
<script src="assets/js/scrollbar.js"></script>
<script src="assets/js/TweenMax.min.js"></script>
<script src="assets/js/swiper.min.js"></script>
<script src="assets/js/jquery.polyglot.language.switcher.js"></script>
<script src="assets/js/jquery.ajaxchimp.min.js"></script>
<script src="assets/js/parallax-scroll.js"></script>

<script src="assets/js/script.js"></script>


</body>

</html>













