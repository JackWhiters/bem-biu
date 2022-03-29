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
<!-- Stylesheets
<link href="assets/css/bootstrap.css" rel="stylesheet"> -->
<!-- <link href="assets/css/style.css" rel="stylesheet"> -->
<!-- Responsive File -->
<!-- <link href="assets/css/responsive.css" rel="stylesheet"> -->
<!-- Color File -->
<!-- <link href="assets/css/color.css" rel="stylesheet"> -->
<link style="assets/css/stylesss3.css" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&amp;family=Yantramanav:wght@300;400;500;700;900&amp;display=swap" rel="stylesheet">

    <link rel="shortcut icon" href="assets/img/logo-kabinet.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->

<!-- <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=601e75803d01430011c105c8&product=image-share-buttons' async='async'></script> -->

<style>
    .berita__terbaru-img
    {
        max-height:300px;
        max-width:500px;
        min-height:300px;
        max-width:500px;
    }
     @media only screen and (max-width: 600px) {
         .video__title{
             width:520px;
         }
         .video__title {
             width:520px;
         }
         .video__desc {
             width:520px;
         }
         .video__content
         {
              width:520px;
         }
         .video_bem {
             width:520px;
         }
     }

         @media only screen and (max-width: 500px) {
         .video__title{
             width:350px;
         }
         .video__title {
             width:350px;
         }
         .video__desc {
             width:350px;
         }
         .video__content
         {
              width:350px;
         }
         .video_bem {
             width:350px;
         }
        .berita__terbaru-img
        {
        max-height:200px;
        max-width:320px;
        min-height:200px;
        max-width:320px;
        }
     }

              @media only screen and (max-width: 400px) {
         .video__title{
             width:350px;
         }
         .video__desc {
             width:350px;
         }
         .video__content
         {
              width:350px;
         }
         .video_bem {
             width:340px;
         }
     }
</style>
</head>

<body>

<!-- <div class="page-wrapper"> -->
    <!-- Preloader -->
    <!-- <div class="loader-wrap">
        <div class="preloader"><div class="preloader-close">Preloader Close</div></div>
        <div class="layer layer-one"><span class="overlay"></span></div>
        <div class="layer layer-two"><span class="overlay"></span></div>        
        <div class="layer layer-three"><span class="overlay"></span></div>        
    </div> -->

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
                        <a href="https://binainsani.ac.id/"  target="_blank" class="button button--flex">
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
                    <iframe width="660" height="371" class="video_bem" src="https://www.youtube.com/embed/fuadn7oMYGs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
                    <p class="berita__detail"><?php echo $row['short']; ?></p>
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
                            <img src="admin/images/blog/<?php echo $row['img']; ?>"class="cards__berita-img" alt="">

                            <div class="detail__upload-berita">
                                <h3 class="jenis__page-berita">Berita</h3>
                                <i class="ri-arrow-right-s-line"></i>
                                <p class="tanggal__upload-berita"><?php echo $row['date']; ?></p>
                            </div>
                            <h2 class="berita__title-desc"><?php echo $row['title']; ?></h2>
                            <p class="berita__detail"><?php echo $row['short']; ?></p>
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
                        
                    
                        <img src="admin/images/services/<?php echo $row['img']; ?>"class="cards__berita-img">

                        <div class="detail__upload-berita">
                            <h3 class="jenis__page-berita">Program</h3>
                            <i class="ri-arrow-right-s-line"></i>
                            <p class="tanggal__upload-berita"><?php echo $row['date']; ?></p>
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
                    
                </div>
                
    </section>


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
    <!-- <a href="# " class="scrollup " id="scroll-up ">
        <i class="ri-arrow-up-fill scrollup__icon "></i>
    </a> -->

    <!--=============== SCROLL REVEAL ===============-->
    <script src="assets/js/scrollreveal.min.js "></script>

    <!--=============== MAIN JS ===============-->
    <script src="assets/js/main.js "></script>
</body>

</body>

</html>

