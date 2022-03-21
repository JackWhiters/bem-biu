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
    <link rel="stylesheet" href="../assets/css/styless3.css">

    
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
                        <a href="../index.php" class="nav__link">Home</a>
                    </li>
                    <li class="nav__item">
                        <a href="../tentang-kami.php" class="nav__link">Tentang Kami</a>
                        <i class="ri-arrow-down-s-line" style="color: white;"></i>
                        <ul class="dropdown__nav">
                            <li><a href="../tentang-kami.php" class="dropdown__link">Tentang BEM</a></li>
                            <li><a href="../visi-misi.php" class="dropdown__link">Visi-Misi</a></li>
                            <li><a href="../sejarah.php" class="dropdown__link">Sejarah</a></li>
                        </ul>
                    </li>
                    <li class="nav__item">
                        <a href="../detail-berita.php" class="nav__link">Berita & Program</a>
                    </li>
                    <li class="nav__item">
                        <a href="../struktur-divisi.php" class="nav__link active-link">Struktur & Divisi</a>
                    </li>
                    <li class="nav__item">
                        <a href="../ukm.php" class="nav__link ">UKM</a>
                    </li>
                    <li class="nav__item">
                        <a href="../contact.php" class="nav__link button--ghost">Hubungi Kami</a>
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
                    <h2 class="detail__title">Divisi Komunikasi dan Informasi BEM BiU Khabinet Phoenix</h2>
                <img src="assets/img/gambar-berita.jpeg" alt="" class="card__detail-img">

                </div>
            </div>
        </section>

        <section class="section berita container" id="berita">
            <div class="berita__link-container grid">
                <div class="berita__link-data">
                    <h2 class="berita__link-title">Tentang Divisi Minat Dan Bakat</h2>
                    <p class="berita__link-desc">Divisi Minat dan Bakat / Minbak dikoordinasikan oleh kak Anisah dari angkatan 2019,loh. Dia juga memiliki anggota-anggotanya, yaitu: Leliana Eka Fauziah dari angkatan 2020, Gilang gilang dari angkatan 2020, Aceng dari angkatan 2020, Nabilah dari angkatan 2020, Tryas dari angkatan 2020 kak Habibie dari angkatan 2019, Ka Faiq dari angkatan 2019. Dibawah pengkoordinasian Ka Anisah, Divisi Minbak sudah melakukan banyak kegiatan proker yang dijalankan.</p>

                    <p class="berita__link-desc">Divisi Minat dan Bakat pun juga menerima aspirasi tentang Minat dan Bakat yang ada kedalam mahasiswa/i yang ada dilingkungan kampus Universitas Bina Insani. 
                    </p>
                    <p class="berita__link-desc">Untuk seterusnya Divisi Minat dan Bakat akan terus berusaha yang terbaik untuk menjalankan proker-proker yang lainnya kedepannya. Dengan harapan semoga bisa dapat terwujud dengan baik dan sukses bersama para anggota divisi-nya sendiri maupun anggota dari Bem lainnya. Tidak ketinggalan dukungan dan bantuan dari Tim maupun anggota Bem pun sangat berarti untuk proker-proker yang akan dijalankannya nanti. #IMR #CMiiw</p>
                </div>
            </div>
        </section>

        <!--==================== VISI DIVISI KOMINFO ====================-->

        <section class="section visi__ukm container">
            <div class="visi__container grid">
                <div class="visi__ukm-data">
                    <h2 class="visi__ukm-title">Visi Divisi Komunikasi dan Informasi </h2>
                    <p class="visi__ukm-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>

                    <div class="order__visi">
                        <p class="order__details">1.</p>
                        <p class="order__details">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                    <div class="order__visi">
                        <p class="order__details">2.</p>
                        <p class="order__details">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                    <div class="order__visi">
                        <p class="order__details">3.</p>
                        <p class="order__details">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                </div>

                
                <div class="visi__ukm-data">
                    <h2 class="visi__ukm-title">Misi Divisi Komunikasi dan Informasi  </h2>
                    <p class="visi__ukm-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                    <div class="order__visi">
                        <p class="order__details">1.</p>
                        <p class="order__details">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                    <div class="order__visi">
                        <p class="order__details">2.</p>
                        <p class="order__details">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                    <div class="order__visi">
                        <p class="order__details">3.</p>
                        <p class="order__details">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                </div>
            </div>
        </section>

        
        <!--==================== ANGGOTA PENGURUS ====================-->

        <section class="member section" id="member">
            <h2 class="member__desc">Anggota & Pengurus Komunikasi dan Informasi</h2>

            <div class="swiper mySwiper member__container container grid">
                <div class="swiper-wrapper">
                    <div class="swiper-slide member-card">
                        <div class="member__card-content">
                            <div class="swiper-image">
                                <img src="assets/img/pp.jpg" class="member-image-img" alt="">
                            </div>
                            <h2 class="nama__koor-divisi-komunikasi-dan informasi"> Nadira Ilmitha - FB 19A</h2>
                            <p class="desc__koor-divisi-komunikasi-dan informasi">Koordinator Komunikasi dan Informasi 2020-2021</p>
                        </div>
                    </div>
                    
                    <div class="swiper-slide member-card">
                        <div class="member__card-content">
                            <div class="swiper-image">
                                <img src="assets/img/pp.jpg" class="member-image-img" alt="">
                            </div>
                            <h2 class="nama__anggota-divisi-komunikasi-dan-informasi"> Salsabilah Rahmadani - FB 19A</h2>
                            <p class="desc__anggota-divisi-komunikasi-dan-informasi"> Anggota Komunikasi  dan Informasi 2021</p>
                        </div>
                    </div>
                    
                    <div class="swiper-slide member-card">
                        <div class="member__card-content">
                            <div class="swiper-image">
                                <img src="assets/img/pp.jpg" class="member-image-img" alt="">
                            </div>
                            <h2 class="nama__anggota-divisi-komunikasi-dan-informasi"> Ika Nurfitriani - FB 19A</h2>
                            <p class="desc__anggota-divisi-komunikasi-dan-informasi"> Anggota Komunikasi  dan Informasi 2021</p>
                          </div>
                    </div>
                    
                    <div class="swiper-slide member-card">
                        <div class="member__card-content">
                            <div class="swiper-image">
                                <img src="assets/img/pp.jpg" class="member-image-img" alt="">
                            </div>
                            <h2 class="nama__anggota-divisi-komunikasi-dan-informasi"> Firli Juli Prayitno - FI 19A</h2>
                            <p class="desc__anggota-divisi-komunikasi-dan-informasi"> Anggota Komunikasi  dan Informasi 2021</p>
                         </div>
                    </div>

                    
                    <div class="swiper-slide member-card">
                        <div class="member__card-content">
                            <div class="swiper-image">
                                <img src="assets/img/pp.jpg" class="member-image-img" alt="">
                            </div>
                            <h2 class="nama__anggota-divisi-komunikasi-dan-informasi"> Muhammad Rizky Darmawan - FB 19A</h2>
                            <p class="desc__anggota-divisi-komunikasi-dan informasi"> Anggota Komunikasi  dan Informasi 2021</p>
                           </div>
                    </div>  
                    <div class="swiper-slide member-card">
                        <div class="member__card-content">
                            <div class="swiper-image">
                                <img src="assets/img/pp.jpg" class="member-image-img" alt="">
                            </div>
                            <h2 class="nama__anggota-divisi-komunikasi-dan-informasi"> Adzanti Fajri Syahputri Marcha - FI 20A</h2>
                            <p class="desc__anggota-divisi-komunikasi-dan-informasi"> Anggota Komunikasi  dan Informasi 2021</p>
                          </div>
                    </div>
                    
                    <div class="swiper-slide member-card">
                        <div class="member__card-content">
                            <div class="swiper-image">
                                <img src="assets/img/pp.jpg" class="member-image-img" alt="">
                            </div>
                            <h2 class="nama__anggota-divisi-komunikasi-dan-informasi"> Iqbal Maulana Rozak - FI 20A</h2>
                            <p class="desc__anggota-divisi-komunikasi-dan-informasi"> Anggota Komunikasi  dan Informasi 2021</p>
                        </div>
                    </div>
                    
                    <div class="swiper-slide member-card">
                        <div class="member__card-content">
                            <div class="swiper-image">
                                <img src="assets/img/pp.jpg" class="member-image-img" alt="">
                            </div>
                            <h2 class="nama__anggota-divisi-komunikasi-dan-informasi"> Muhammad Yazid - FI 20B</h2>
                            <p class="desc__anggota-divisi-komunikasi-dan-informasi"> Anggota Komunikasi  dan Informasi 2021</p>
                          </div>
                    </div>
                    
                    <div class="swiper-slide member-card">
                        <div class="member__card-content">
                            <div class="swiper-image">
                                <img src="assets/img/pp.jpg" class="member-image-img" alt="">
                            </div>
                            <h2 class="nama__anggota-divisi-komunikasi-dan-informasi"> Vinki Cecilian Maulana - FI 20A</h2>
                            <p class="desc__anggota-divisi-komunikasi-dan-informasi"> Anggota Komunikasi  dan Informasi 2021</p>
                         </div>
                    </div>

                    
                    <div class="swiper-slide member-card">
                        <div class="member__card-content">
                            <div class="swiper-image">
                                <img src="assets/img/pp.jpg" class="member-image-img" alt="">
                            </div>
                            <h2 class="nama__anggota-divisi-komunikasi-dan-informasi"> Wanindya Dian Aruna - FI 20A</h2>
                            <p class="desc__anggota-divisi-komunikasi-dan informasi"> Anggota Komunikasi  dan Informasi 2021</p>
                           </div>
                    </div>  
                </div>  
            <div class="swiper-pagination member__pagination"></div>
</div>
        </section>

<!--==================== PROGRAM KERJA DIVISI MINAT DAN BAKAT ====================-->
<section class="program section container" id="program">
            <h2 class="divisi__title"> Program Kerja Divisi Komunikasi dan Informasi </h2>
            <div class="program__container grid">
                <div class="program__card">
                    <div class="detail__divisi">
                        <p class="divisi__card-title"> Lomba dan Pameran Desain (Online)</p>
                        <h2 class="divisi__card-desc">  diadakan secara offline dan online</h2>
                    </div>
                    <img src="assets/img/gambar-berita.jpeg" class="cards__program-img" alt="">

                    <div class="detail__divisi-card">
                        <h2 class="detail__title-divisi">Mengenal Lebih dekat dengan divisi kominfo beserta visi misi dan prokernya</h2>
                        <a href="#" class="button__program">Baca Selengkapnya
                        <i class="ri-arrow-right-s-line"></i>
                        </a>
                    </div>
                </div>
                
                <div class="program__card">
                    <div class="detail__divisi">
                        <p class="divisi__card-title"> WEBINAR INTERNAL MENGENAI EDITING  </p>
                        <h2 class="divisi__card-desc"> Secara Offline / Online</h2>
                    </div>
                    <img src="assets/img/gambar-berita.jpeg" class="cards__program-img" alt="">

                    <div class="detail__divisi-card">
                        <h2 class="detail__title-divisi">Mengenal Lebih dekat dengan divisi kominfo beserta visi misi dan prokernya</h2>
                        <a href="#" class="button__program">Baca Selengkapnya
                        <i class="ri-arrow-right-s-line"></i>
                        </a>
                    </div>
                </div>
                
                <div class="program__card">
                    <div class="detail__divisi">
                        <p class="divisi__card-title"> KOTAK SARAN MAHASISWA  & WEBSITE BEM </p>
                        <h2 class="divisi__card-desc"> Diadakan secara online  </h2>
                    </div>
                    <img src="assets/img/gambar-berita.jpeg" class="cards__program-img" alt="">

                    <div class="detail__divisi-card">
                        <h2 class="detail__title-divisi">Mengenal Lebih dekat dengan divisi kominfo beserta visi misi dan prokernya</h2>
                        <a href="#" class="button__program">Baca Selengkapnya
                        <i class="ri-arrow-right-s-line"></i>
                        </a>
                    </div>
                </div>

                <div class="program__card">
                    <div class="detail__divisi">
                        <p class="divisi__card-title"> STUDI BANDING ANTAR KAMPUS</p>
                        <h2 class="divisi__card-desc"> Diadakan secara online  </h2>
                    </div>
                    <img src="assets/img/gambar-berita.jpeg" class="cards__program-img" alt="">

                    <div class="detail__divisi-card">
                        <h2 class="detail__title-divisi">Mengenal Lebih dekat dengan divisi kominfo beserta visi misi dan prokernya</h2>
                        <a href="#" class="button__program">Baca Selengkapnya
                        <i class="ri-arrow-right-s-line"></i>
                        </a>
                    </div>
                </div>
        </section>

    </main>
        
   
    <!--==================== FOOTER ====================-->
    <?php include "../footer.php" ?>

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".member__container", {
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