<?php
    include "admin/conn.php";

    //fetch settings
    $settings = mysqli_query($con,"SELECT * FROM settings");
    $setting  = mysqli_fetch_array($settings);


    // fetch testimonials
    $testi = mysqli_query($con,"SELECT * FROM testimonials");

    //fetch blog
    $program = mysqli_query($con,"SELECT * FROM services ORDER BY id DESC LIMIT 6");

//     $program_main = mysqli_query($con,"SELECT * FROM
//   (SELECT * FROM services order by id desc limit 5) table_alias order by id limit 3 ");




     //fetch services
    $berita = mysqli_query($con,"SELECT * FROM blog ORDER BY id DESC LIMIT 1");

    $berita_main = mysqli_query($con,"SELECT * FROM
  (SELECT * FROM blog order by id desc limit 5) table_alias
order by id limit 3 ");

?>


<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<title><?php echo $setting['site_name']; ?> </title>
<meta name="description" content="We Offer Import & Export assistance foreign businesses in transporting and selling their products in China, India and USA. We connect domestic companies to the international shipping services most suited for their business.">
<!-- Stylesheets -->
<link href="assets/css/bootstrap.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">
<!-- Responsive File -->
<link href="assets/css/responsive.css" rel="stylesheet">
<!-- Color File -->
<link href="assets/css/color.css" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&amp;family=Yantramanav:wght@300;400;500;700;900&amp;display=swap" rel="stylesheet">

    <link rel="shortcut icon" href="assets/img/logo-kabinet.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->

<script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=601e75803d01430011c105c8&product=image-share-buttons' async='async'></script>

</head>

<body>

<div class="page-wrapper">
    <!-- Preloader -->
    <div class="loader-wrap">
        <div class="preloader"><div class="preloader-close">Preloader Close</div></div>
        <div class="layer layer-one"><span class="overlay"></span></div>
        <div class="layer layer-two"><span class="overlay"></span></div>        
        <div class="layer layer-three"><span class="overlay"></span></div>        
    </div>

   <?php include "header.php"; ?>

       <main class="main">
        <!--==================== HOME ====================-->
        <section class="home section" id="home">
            <div class="home__container container grid">
                <img src="assets/img/logo-kabinet.png" alt="" class="home__img">

                <div class="home__data">
                    <p class="home__desc">
                        Website Resmi Badan Eksekutif Mahasiswa
                    </p>
                    <h1 class="home__title">
                        BEM Universitas Bina Insani
                    </h1>
                    <p class="home__description">
                        Badan Eksekutif Mahasiswa Universitas Bina Insani Didirikan pada tanggal 4 Feruari 2021, diketuai oleh Muhammad Aldisyah Rahman dan wakilnya, Raden Fitria Dwiyani Putri.
                    </p>

                    <div class="link__web">

                        <a href="#video" class="button button--ghost">
                            Selengkapnya >
                        </a>
                        <a href="#about" class="button button--flex">
                            Bina Insani University >
                        </a>
                    </div>
                </div>

            </div>
        </section>
    <!-- Hidden Sidebar -->


       <!--==================== VIDEO ====================-->
        <section class="video section" id="video">
            <div class="video__container container grid">
                <h2 class="video__title">BEM Universitas Bina Insani</h2>
                <p class="video__desc">Pengenalan Badan Eksekutif Mahasiswa Universitas Bina Insani</p>
                <div class="video__content">
                    <video id="video-file">
                        <source src="assets/video/video.mp4" type="video/mp4">
                    </video>

                    <button class="button button--flex video__button" id="video-button">
                        <i class="ri-play-line video__button-icon" id="video-icon"></i>
                    </button>
                </div>
            </div>
        </section>

        <section class="berita section container" id="berita">
            <h2 class="berita__title">Berita Mengenai BEM BIU</h2>
            <p class="berita__desc">Berita terkini kegiatan maupun kegiatan program kerja yang dilakukan oleh Badan Eksekutif Mahasiswa Universitas Bina Insani</p>
             <?php
                        while($row=mysqli_fetch_array($berita))
                        {
                    ?>
            <div class="berita__container grid">
                <img src="admin/images/blog/<?php echo $row['img']; ?>" alt="" class="berita__terbaru-img">
                <div class="berita__data-terbaru">
                    <div class="detail__upload-berita">
                        <h3 class="jenis__page-berita">Berita</h3>
                        <i class="ri-arrow-right-s-line"></i>
                        <p class="tanggal__upload-berita"><?php echo $row['date']; ?></p>
                    </div>
                    <h2 class="berita__title-desc"><?php echo $row['title']; ?></h2>
                    <p class="berita__detail">Kegiatan Pemira Untuk pergantian Ketua maupun wakil ketua Badan Eksekutif Mahasiswa Universitas Bina Insani</p>
                    <a href="blog-details.php?id=<?php echo $row['id']; ?>" class="button__berita">Lihat Selengkapnya 
                        <i class="ri-arrow-right-s-line"></i>
                    </a>
                </div>
            </div>
            <?php
                        }
                        ?>

             <div class="berita-lawas__container grid">
                                     <?php
                        while($row=mysqli_fetch_array($berita_main))
                        {
                    ?>
                <div class="berita__card">
                    <img src="admin/images/blog/<?php echo $row['img']; ?>" style="height:300px;width:300px;" class="cards__berita-img" alt="">

                    <div class="detail__upload-berita">
                        <h3 class="jenis__page-berita">Berita</h3>
                        <i class="ri-arrow-right-s-line"></i>
                        <p class="tanggal__upload-berita">20 JAN 2022</p>
                    </div>
                    <h2 class="berita__title-desc"><?php echo $row['title']; ?></h2>
                    <p class="berita__detail"><?php echo $row['descrip']; ?></p>
                    <a href="blog-details.php?id=<?php echo $row['id']; ?>" class="button__berita">Lihat Selengkapnya 
                        <i class="ri-arrow-right-s-line"></i>
                    </a>
                </div>
                                <?php
                        }
                ?>
            </div>



        </section>

    <section class="program section container" id="program">
                <h2 class="program__title">Program yang sudah terlaksana</h2>
                <p class="program__desc">Program kerja yang telah dilakukan oleh Badan Eksekutif Mahasiswa Universitas Bina Insani dan divisi-divisinya.</p>
                <div class="program__container grid">
                                                 <?php
                        while($row=mysqli_fetch_array($program))
                        {
                    ?>
                    <div class="program__card">
                        <img src="admin/images/services/<?php echo $row['img']; ?>" style="height:300px;width:300px;"  class="cards__berita-img" alt="">

                        <div class="detail__upload-berita">
                            <h3 class="jenis__page-berita">Program</h3>
                            <i class="ri-arrow-right-s-line"></i>
                            <p class="tanggal__upload-berita"><?php echo $row['date']; ?><</p>
                        </div>
                        <h2 class="berita__title-desc"><?php echo $row['title']; ?></h2>
                        <p class="berita__detail"><?php echo $row['descrip']; ?></p>
                        <a href="program.php?id=<?php echo $row['id']; ?>" class="button__berita">Lihat Selengkapnya 
                            <i class="ri-arrow-right-s-line"></i>
                        </a>
                    </div>
                    <?php
                        }
                    ?>
    </section>

 
    <!-- Services Section -->
    <!-- serivice from here -->
         <!-- <section class="services-section style-two ">
        <div class="auto-container">
            <div class="sec-title text-center">
                <div class="sub-title">Main Services</div>
                <h2>Moving Your Products Across <br> All Borders</h2>
            </div>
   
        </div>
    </section>
     -->
    
    
    <!-- boostrap -->
    <style>
.zoom {
    
 
}

.zoom:hover {
  transform: scale(1.02); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}
</style>
   

    <!-- Testimonials Section -->
    <!-- <section class="testimonials-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <div class="sub-title text-center">Testimonials</div>
                <h2>1000+ Happy Customers Said</h2>
            </div>
            <div class="theme_carousel owl-theme owl-carousel">
            <?php
                while($row=mysqli_fetch_array($testi)){
            ?>
                <div class="testimonial-block"> 
                    <div class="inner-box">
                        <div class="text"><?php echo $row['descrip']; ?>
                        </div>
                        <div class="author-thumb">
                            <img src="admin/images/testimonial/<?php echo $row['img']; ?>" alt="">
                            <div class="quote"><span class="flaticon-right-quote"></span>
                            </div>
                        </div>
                        <h4><?php echo $row['title']; ?></h4>
                        <div class="designation"><?php echo $row['designation']; ?></div>
                        <div class="rating">
                            <span class="flaticon-star-1"></span>
                            <span class="flaticon-star-1"></span>
                            <span class="flaticon-star-1"></span>
                            <span class="flaticon-star-1"></span>
                            <span class="flaticon-star-1"></span>
                        </div>
                    </div>
                </div>
          <?php } ?>
                <!-- End -->
            </div>
        </div>
    </section> -->

    <!-- News Section -->
    <!--<section class="news-section">
        <div class="auto-container">
            <div class="sec-top row m-0 justify-content-md-between align-items-center">
                <div class="sec-title">
                    <div class="sub-title">News & Updates</div>
                    <h2>Latest From Our Blog Post</h2>
                </div>
                <div class="link">
                    <a href="blog.php" class="readmore-link"><i class="flaticon-up-arrow"></i>Read All News</a>
                </div>
            </div>
            <div class="row">
                <?php  
                    while($row=mysqli_fetch_array($blog)){

                ?>
                <div class="news-block-one col-lg-4">
                    <div class="inner-box wow fadeInUp" data-wow-duration="1500ms">
                        <div class="image">
                            <a href="blog-details.php?id=<?php echo $row['id']; ?>"><img src="admin/images/blog/<?php echo $row['img']; ?>" alt=""></a>
                            <div class="date"><?php echo $row['date']; ?></div>
                        </div>
                        <div class="lower-content">
                            <div class="category"><i class="fas fa-folder"></i><?php echo $row['category']; ?></div>
                            <h3><a href="blog-details.php?id=<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a></h3>
                            <div class="text"><?php 
                            $ddesc = $row['descrip']; 
                        echo $dec = substr($ddesc,0,180);
                        ?>...</div>
                            <div class="link">
                                <a href="blog-details.php?id=<?php echo $row['id']; ?>" class="readmore-link"><i class="flaticon-up-arrow"></i>More Details</a>
                            </div>
                        </div>
                     
                    </div>
                </div>
        <?php } ?>
            </div>
        </div>
    </section> -->

    <!-- Map Section -->
  <!--  <section class="map-section">
        <div class="contact-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d55945.16225505631!2d-73.90847969206546!3d40.66490264739892!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1601263396347!5m2!1sen!2sbd" width="600" height="490" style="border:0; width: 100%" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    </section> -->

    <!-- Branches Section -->
   <!-- <section class="branches-section">
        <div class="auto-container">
            <div class="theme_carousel owl-theme owl-carousel" data-options='{"loop": true, "margin": 0, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 1000, "responsive":{ "0" :{ "items": "1" }, "600" :{ "items" : "1" }, "768" :{ "items" : "2" } , "992":{ "items" : "2" }, "1200":{ "items" : "4" }}}'>
                <div class="single-info">
                    <h4><span class="flaticon-cursor"></span>Hoxton - HO</h4>
                    <div class="text"> Boat House, 152/21 City Road,
                    Hoxton, N1 6NG, UK.</div>
                    <div class="link">
                        <a href="#" class="readmore-link"><i class="flaticon-up-arrow"></i>View On Map</a>
                    </div>
                </div>
                <div class="single-info">
                    <h4><span class="flaticon-cursor"></span>Melbourne</h4>
                    <div class="text"> 46 Yarra Boulevard, 2nd Cross,
                        Victoria 3010, AUS.</div>
                    <div class="link">
                        <a href="#" class="readmore-link"><i class="flaticon-up-arrow"></i>View On Map</a>
                    </div>
                </div>
                <div class="single-info">
                    <h4><span class="flaticon-cursor"></span>Houston</h4>
                    <div class="text"> 3333 Raleigh Street, Houston,
                        TX 77021, USA.</div>
                    <div class="link">
                        <a href="#" class="readmore-link"><i class="flaticon-up-arrow"></i>View On Map</a>
                    </div>
                </div>
                <div class="single-info">
                    <h4><span class="flaticon-cursor"></span>New Delhi</h4>
                    <div class="text">11/8, Shantipath, Chanakyapuri,
                        New Delhi 110049, IND.</div>
                    <div class="link">
                        <a href="#" class="readmore-link"><i class="flaticon-up-arrow"></i>View On Map</a>
                    </div>
                </div>
                <div class="single-info">
                    <h4><span class="flaticon-cursor"></span>Hoxton - HO</h4>
                    <div class="text"> Boat House, 152/21 City Road,
                    Hoxton, N1 6NG, UK.</div>
                    <div class="link">
                        <a href="#" class="readmore-link"><i class="flaticon-up-arrow"></i>View On Map</a>
                    </div>
                </div>
                <div class="single-info">
                    <h4><span class="flaticon-cursor"></span>Melbourne</h4>
                    <div class="text"> 46 Yarra Boulevard, 2nd Cross,
                        Victoria 3010, AUS.</div>
                    <div class="link">
                        <a href="#" class="readmore-link"><i class="flaticon-up-arrow"></i>View On Map</a>
                    </div>
                </div>
                <div class="single-info">
                    <h4><span class="flaticon-cursor"></span>Houston</h4>
                    <div class="text"> 3333 Raleigh Street, Houston,
                        TX 77021, USA.</div>
                    <div class="link">
                        <a href="#" class="readmore-link"><i class="flaticon-up-arrow"></i>View On Map</a>
                    </div>
                </div>
                <div class="single-info">
                    <h4><span class="flaticon-cursor"></span>New Delhi</h4>
                    <div class="text">11/8, Shantipath, Chanakyapuri,
                        New Delhi 110049, IND.</div>
                    <div class="link">
                        <a href="#" class="readmore-link"><i class="flaticon-up-arrow"></i>View On Map</a>
                    </div>
                </div>
            </div>
        </div>        
    </section> -->



    <?php include "footer.php"; ?>

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

    <!--=============== SCROLL UP ===============-->
    <a href="# " class="scrollup " id="scroll-up ">
        <i class="ri-arrow-up-fill scrollup__icon "></i>
    </a>

    <!--=============== SCROLL REVEAL ===============-->
    <script src="assets/js/scrollreveal.min.js "></script>

    <!--=============== MAIN JS ===============-->
    <script src="assets/js/main.js "></script>
</body>

</body>

</html>

