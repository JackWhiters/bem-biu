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
            position: relative;
                bottom: 150px;
            text-align:left;
            left:30px;
            /* text-shadow:0 0 1px black; */
             -webkit-text-stroke: 1px black;
            font-size:25px;
            z-index:10;
            border: radius 5px;
            border-color:black;
            color:white;
            font-weight:900;
            }
        .bottom-left2 {
            position:relative;
            text-align:left;
            bottom: 130px;
            left:30px;
            text-border-radius:5px;
            border-color:white;
            text-shadow:2px 2px 2px white;
            font-size:18px;
            color:black;
            text-align:left;
            margin-right:15px;

        }
        .gambar {
            min-hegiht:600px;
            min-width:1000px;

            max-height:600px;
            max-width:1000px;
        }

        .detail-berita {
                  margin-bottom:130px;
              }

          @media only screen and (max-width: 800px)
          {
              .bottom-left {
                  position:relative;
                  font-size:14px;
                  top:5px;
                  left:20px;
                  
              }
              .bottom-left2 {
                  position:relative;
                  font-size:10px;
                  left:20px;
                  top:8px;
                  margin-right:10px;
              }

              .detail-berita {
                  height:700px;
                  padding-bottom:0px;
              }

              .detail__title {
                  font-size:35px;
              }
              .detail-img {
                  top:100px;
                  padding:0;
              }
          }

        @media only screen and (max-width: 900px)
          {
              .bottom-left {
                  position:relative;
                  font-size:14px;
                  top:5px;
                  left:20px;
                  
              }
              .bottom-left2 {
                  position:relative;
                  font-size:10px;
                  left:20px;
                  top:8px;
                  margin-right:10px;
              }

              .detail-berita {
                  height:800px;
              }

              .detail__title {
                  font-size:35px;
              }
              .detail-img {
                  top:100px;
                  padding:0;
              }
          }

    @media only screen and (max-width: 700px)
          {
              .bottom-left {
                  position:relative;
                  font-size:14px;
                  top:110px;
                  left:20px;
                  
              }
              .bottom-left2 {
                  position:relative;
                  font-size:10px;
                  left:20px;
                  top:130px;
                  margin-right:10px;
              }

              .detail-berita {
                  height:800px;
              }

              .detail__title {
                  font-size:35px;
              }
              .detail-img {
                  top:200px;
                  padding:0;
              }
              .detail-data {
                  padding:0px;
              }
          }
           @media only screen and (max-width: 500px) {
            .bottom-left {
                  position:relative;
                  font-size:12px;
                  top:128px;
                  left:20px;
                  
              }
              .bottom-left2 {
                  position:relative;
                  font-size:12px;
                  left:20px;
                  top:135px;
              }
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
                 <?php
                        while($row=mysqli_fetch_array($berita))
                        {
                    ?>
                <div class="detail__data" style="position:relative;">
                    <h2 class="detail__title">Berita & Program yang akan dan <br> sudah dilaksanakan BEM BIU </h2>
                    <a href="blog-details.php?id=<?php echo $row['id']; ?>"><img src="admin/images/blog/<?php echo $row['img']; ?>" alt="" class="detail-img"></a>
                     <a href="blog-details.php?id=<?php echo $row['id']; ?>"><div class="bottom-left"><?php echo $row['title']; ?></div></a>
                     <p class="berita__detail bottom-left2"><?php echo $row['short']; ?>"</p></a>
                </div>
            </div>
                            <?php
                        }
                ?>
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

                    <?php
                        while($row=mysqli_fetch_array($program))
                        {
                    ?>
                <div class="program__card">
                    <img src="admin/images/services/<?php echo $row['img']; ?>"class="cards__berita-img" alt="">
                    <div class="detail__upload-program">
                        <h3 class="jenis__page-program">Program</h3>
                        <i class="ri-arrow-right-s-line"></i>
                        <p class="tanggal__upload-berita"><?php echo $row['date']; ?></p>
                    </div>
                    <h2 class="berita__title-desc"><?php echo $row['title']; ?></h2>
                    <p class="berita__detail"><?php echo $row['short']; ?></p>
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
    <?php include "footer.php" ?>



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