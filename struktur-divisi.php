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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

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
                        <a href="detail-berita.php" class="nav__link">Berita & Program</a>
                    </li>
                    <li class="nav__item">
                        <a href="struktur-divisi.php" class="nav__link  active-link">Struktur & Divisi</a>
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


        <!--==================== SWIPER CARD ====================-->

        <section class="swiper__section section " id="berita">
            <div class="swiper__title">
                <h2 class="struktur__title">Jajaran Pengurus & Divisi Pada BEM <br> Bina Insani University 2021/2022</h2>
                <p class="struktur__desc">Jajaran Pengurus Inti</p>
            </div>
            <div class="swiper mySwiper swiper__container container grid">
                <div class="swiper-wrapper">
                    <div class="swiper-slide swiper-card">
                        <div class="swiper__card-content">
                            <div class="swiper-image">
                                <img src="admin/images/team/aldis.jpeg" class="swiper-image-img" alt="">
                            </div>
                            <h2 class="nama__profesi">Muhammad Aldisyah Rahman</h2>
                            <p class="desc__profesi">Ketua BEM</p>
                        </div>
                    </div>

                    <div class="swiper-slide swiper-card">
                        <div class="swiper__card-content">
                            <div class="swiper-image">
                                <img src="admin/images/team/raden.jpeg" class="swiper-image-img" alt="">
                            </div>
                            <h2 class="nama__profesi">Raden Fitria Dwiyani Putri</h2>
                            <p class="desc__profesi">Wakil Ketua Bem</p>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-card">
                        <div class="swiper__card-content">
                            <div class="swiper-image">
                                <img src="admin/images/team/nada.jpeg" class="swiper-image-img" alt="">
                            </div>
                            <h2 class="nama__profesi">Nada Aura</h2>
                            <p class="desc__profesi">Sekertaris 1</p>
                        </div>
                    </div>

                    <div class="swiper-slide swiper-card">
                        <div class="swiper__card-content">
                            <div class="swiper-image">
                                <img src="admin/images/team/siti.png" class="swiper-image-img" alt="">
                            </div>
                            <h2 class="nama__profesi">Siti Rahmah Nur Effendi</h2>
                            <p class="desc__profesi">Bendahara 2</p>
                        </div>
                    </div>
                    
                </div>  
                
                <div class="swiper-pagination"></div>
            </div>
            
        </section>
        
    <!--==================== DIVIS - DIVISI ====================-->
        <section class="program section container" id="program">
            <h2 class="divisi__title">Divisi pada BEM BIU</h2>
            <div class="program__container grid">
                <div class="program__card">
                    <div class="detail__divisi">
                        <p class="divisi__card-title">DIVISI</p>
                        <h2 class="divisi__card-desc">Divisi Keilmuan</h2>
                    </div>
                    <img src="assets/img/gambar-berita.jpeg" class="cards__program-img" alt="">

                    <div class="detail__divisi-card">
                        <h2 class="detail__title-divisi">Mengenal Lebih dekat dengan divisi kominfo beserta visi misi dan prokernya</h2>
                        <a href="divisi/divisi-keilmuan.php" class="button__program">Baca Selengkapnya
                        <i class="ri-arrow-right-s-line"></i>
                        </a>
                    </div>
                </div>
                <div class="program__card">
                    <div class="detail__divisi">
                        <p class="divisi__card-title">DIVISI</p>
                        <h2 class="divisi__card-desc">Divisi Komunikasi dan Informasi</h2>
                    </div>
                    <img src="admin/images/divisi/kominfo.png" class="cards__program-img" alt="">

                    <div class="detail__divisi-card">
                        <h2 class="detail__title-divisi">Mengenal Lebih dekat dengan divisi kominfo beserta visi misi dan prokernya</h2>
                        <a href="divisi/divisi-kominfo.php" class="button__program">Baca Selengkapnya
                        <i class="ri-arrow-right-s-line"></i>
                        </a>
                    </div>
                </div>
                
                <div class="program__card">
                    <div class="detail__divisi">
                        <p class="divisi__card-title">DIVISI</p>
                        <h2 class="divisi__card-desc">Divisi Minat Dan Bakat</h2>
                    </div>
                    <img src="admin/images/divisi/minat_bakat.png" class="cards__program-img" alt="">

                    <div class="detail__divisi-card">
                        <h2 class="detail__title-divisi">Mengenal Lebih dekat dengan divisi kominfo beserta visi misi dan prokernya</h2>
                        <a href="divisi/divisi-minbak.php" class="button__program">Baca Selengkapnya
                        <i class="ri-arrow-right-s-line"></i>
                        </a>
                    </div>
                </div>
                
     
                
                <div class="program__card">
                    <div class="detail__divisi">
                        <p class="divisi__card-title">DIVISI</p>
                        <h2 class="divisi__card-desc">Divisi Sosial Masyarakat</h2>
                    </div>
                    <img src="assets/img/gambar-berita.jpeg" class="cards__program-img" alt="">

                    <div class="detail__divisi-card">
                        <h2 class="detail__title-divisi">Mengenal Lebih dekat dengan divisi kominfo beserta visi misi dan prokernya</h2>
                        <a href="divisi/divisi-sosmas.php" class="button__program">Baca Selengkapnya
                        <i class="ri-arrow-right-s-line"></i>
                        </a>
                    </div>
                </div>
                
                <div class="program__card">
                    <div class="detail__divisi">
                        <p class="divisi__card-title">DIVISI</p>
                        <h2 class="divisi__card-desc">Divisi PKM dan Penelitian</h2>
                    </div>
                    <img src="assets/img/gambar-berita.jpeg" class="cards__program-img" alt="">

                    <div class="detail__divisi-card">
                        <h2 class="detail__title-divisi">Mengenal Lebih dekat dengan divisi kominfo beserta visi misi dan prokernya</h2>
                        <a href="divisi/divisi-pkm.php" class="button__program">Baca Selengkapnya
                        <i class="ri-arrow-right-s-line"></i>
                        </a>
                    </div>
                </div>
                
                <div class="program__card">
                    <div class="detail__divisi">
                        <p class="divisi__card-title">DIVISI</p>
                        <h2 class="divisi__card-desc">Divisi Sumber Daya Manusia</h2>
                    </div>
                    <img src="assets/img/gambar-berita.jpeg" class="cards__program-img" alt="">

                    <div class="detail__divisi-card">
                        <h2 class="detail__title-divisi">Mengenal Lebih dekat dengan divisi kominfo beserta visi misi dan prokernya</h2>
                        <a href="divisi/divisi-sdm.php" class="button__program">Baca Selengkapnya
                        <i class="ri-arrow-right-s-line"></i>
                        </a>
                    </div>
                </div>
        </section>

    </main>

    <!--==================== FOOTER ====================-->
    <?php include "footer.php" ?>

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        spaceBetween: 10,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        breakpoints: {
          0: {
            slidesPerView: 1,
            spaceBetween: 20,
          },
          640: {
            slidesPerView: 2,
            spaceBetween: 20,
          },
          1024: {
            slidesPerView: 3,
            spaceBetween: 30,
          },
        },
      });
    </script>

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