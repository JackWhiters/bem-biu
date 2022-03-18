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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--=============== FAVICON ===============-->
    <link rel="shortcut icon" href="assets/img/logo-kabinet.png" type="image/x-icon">

    <!--=============== REMIX ICONS ===============-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="assets/css/styless3.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

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

    <style>
        .bottom-left {
            position: absolute;
                bottom: 150px;
            left: 30px;
            /* text-shadow:0 0 1px black; */
             -webkit-text-stroke: 1px black;
            font-size:35px;
            z-index:10;
            border: radius 5px;
            border-color:black;
            color:white;
            font-weight:900;
            }
        .bottom-left2 {
            position:absolute;
            bottom: 50px;
            left:30px;
            shadow-radius: 5px;
            font-size:20px;
            text-align:left;
        }
        .gambar {
            min-hegiht:600px;
            min-width:1000px;

            max-height:600px;
            max-width:1000px;


        }
    </style>


    <title>BEM BIU</title>
</head>

<body>
    <!--==================== HEADER ====================-->
    <header class="header" id="header">
        <nav class="nav container">
            <img src="assets/img/klogo2.png" class="nav__logo" alt="">
            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="index.php" class="nav__link">Home</a>
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
                        <a href="detail-berita.php" class="nav__link active-link">Berita & Program</a>
                    </li>
                    <li class="nav__item">
                        <a href="struktur-divisi.php" class="nav__link">Struktur & Divisi</a>
                    </li>
                    <li class="nav__item">
                        <a href="ukm.php" class="nav__link">ukm</a>
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
                 <?php
                        while($row=mysqli_fetch_array($berita))
                        {
                    ?>
                <div class="detail__data" style="position:relative;">
                    <h2 class="detail__title">Berita & Program yang akan dan sudah dilaksanakan BEM BIU </h2>
                    <img src="admin/images/blog/<?php echo $row['img']; ?>" alt="" class="detail-img gambar">
                    <a href="blog-details.php?id=<?php echo $row['id']; ?>"><div class="bottom-left"><?php echo $row['title']; ?></div></a>
                    <a href="blog-details.php?id=<?php echo $row['id']; ?>"><p class="berita__detail bottom-left2">Kegiatan Pemira Untuk pergantian Ketua maupun wakil ketua Badan Eksekutif Mahasiswa Universitas Bina Insani</p></a>
                </div>
                <?php
                        }
                ?>
            </div>
        </section>

        <section class="section berita container" id="berita">
            <ul class="berita__program">
                <li class="page__show active-show" data-list="berita__card">Berita</li>
                <li class="page__show" data-list="program__card">Program</li>
            </ul>
            <div class="program__container grid">
                    <?php
                        while($row=mysqli_fetch_array($berita_main))
                        {
                    ?>
                <div class="berita__card">
                    <img src="admin/images/blog/<?php echo $row['img']; ?>" style="height:300px;width:300px;" class="cards__berita-img" alt="">
                    <div class="detail__upload-berita">
                        <h3 class="jenis__page-berita">Berita</h3>
                        <i class="ri-arrow-right-s-line"></i>
                        <p class="tanggal__upload-berita"><?php echo $row['date']; ?></p>
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

                    <?php
                        while($row=mysqli_fetch_array($program))
                        {
                    ?>
                <div class="program__card">
                    <img src="admin/images/services/<?php echo $row['img']; ?>" style="height:300px;width:300px;" class="cards__berita-img" alt="">
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
        </section>
    </main>
    <!--==================== FOOTER ====================-->
    <footer class="footer section ">
        <div class="footer__container container grid ">
            <div class="footer__content ">
                <a href="# " class="footer__logo ">
                    <img src="assets/img/klogo2.png" alt="">
                    <img src="assets/img/logobiu-removebg-preview.png" alt="">
                </a>

                <h3 class="footer__title ">
                    Badan Eksekutif Mahasiswa Universitas Bina Insani</p>
                </h3>

                <div class="footer__social ">
                    <a href="https://www.facebook.com/ " class="footer__social-link ">
                        <i class="ri-facebook-fill "></i>
                    </a>
                    <a href="https://www.instagram.com/ " class="footer__social-link ">
                        <i class="ri-instagram-line "></i>
                    </a>
                    <a href="https://twitter.com/ " class="footer__social-link ">
                        <i class="ri-twitter-fill "></i>
                    </a>
                </div>
            </div>

            <div class="footer__content ">
                <h3 class="footer__title ">Divisi</h3>

                <ul class="footer__data ">
                    <a href="#">
                        <li class="footer__information "> Kominfo</li>
                    </a>
                    <a href="#">
                        <li class="footer__information ">Minat dan Bakat</li>
                    </a>
                    <a href="#">
                        <li class="footer__information ">Social dan <br>Masyarakat </li>
                    </a>
                    <a href="#">
                        <li class="footer__information ">Penelitian dan PKM</li>
                    </a>
                    <a href="#">
                        <li class="footer__information ">Pengembangan SDM</li>
                    </a>
                </ul>
            </div>

            <div class="footer__content ">
                <h3 class="footer__title ">BEM BIU</h3>

                <ul class="footer__data ">
                    <a href="#">
                        <li class="footer__information ">Struktur</li>
                    </a>
                    <a href="#">
                        <li class="footer__information ">Program</li>
                    </a>
                    <a href="#">
                        <li class="footer__information ">Sejarah</li>
                    </a>
                    </a>
                </ul>
            </div>

            <div class="footer__content">
                <h3 class="footer__title">
                    Hubungi Kami
                </h3>
                <a href="#" class="button footer__button">Hubungi Kami</a>
            </div>
        </div>

    </footer>


    <!--=============== SCROLL UP ===============-->
    <a href="# " class="scrollup " id="scroll-up ">
        <i class="ri-arrow-up-fill scrollup__icon "></i>
    </a>

    <!--=============== SCROLL REVEAL ===============-->
    <script src="assets/js/scrollreveal.min.js "></script>


    <!--=============== MAIN JS ===============-->
    <script src="assets/js/main.js "></script>

    

</body>

</html>