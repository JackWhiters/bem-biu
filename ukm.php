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
                            <a href="struktur-divisi.php" class="nav__link">Struktur & Divisi</a>
                        </li>
                        
                        <li class="nav__item">
                            <a href="ukm.php" class="nav__link active-link">UKM</a>
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

    <section class="ukm section">
        <div class="ukm__container container grid">
            <div class="ukm__data">
                <h2 class="ukm__title">UKM Yang Dinaungi Oleh BEM <br> Kabinet Phoenix</h2>
            </div>
        </div>
    </section>

    <!--==================== UKM ====================-->
    <section class="program section container" id="program">
        <div class="program__container grid">
            <div class="program__card">
                <div class="detail__divisi">
                    <p class="ukm__card-title">UKM</p>
                    <h2 class="ukm__card-desc">Computer Club</h2>
                </div>
                <img src="admin/images/divisi/cc.jpg" class="cards__program-img" alt="">

                <div class="detail__divisi-card">
                    <h2 class="detail__title-divisi">UKM ini bergerak di bidang yang berkaitan dengan Computer atau Komputer.</h2>
                    <a href="ukm/ukm-cc.php" class="button__program">Baca Selengkapnya
                    <i class="ri-arrow-right-s-line"></i>
                    </a>
                </div>
            </div>
            
            <div class="program__card">
                <div class="detail__divisi">
                    <p class="ukm__card-title">UKM</p>
                    <h2 class="ukm__card-desc">Bulu Tangkis</h2>
                </div>
                <img src="admin/images/divisi/bultang.jpg" class="cards__program-img" alt="">

                <div class="detail__divisi-card">
                    <h2 class="detail__title-divisi">UKM ini bergerak di bidang yang berkaitan dengan Olahraga Bulutangkis.</h2>
                    <a href="ukm/ukm-bultang.php" class="button__program">Baca Selengkapnya
                    <i class="ri-arrow-right-s-line"></i>
                    </a>
                </div>
            </div>
            
            <div class="program__card">
                <div class="detail__divisi">
                    <p class="ukm__card-title">UKM</p>
                    <h2 class="ukm__card-desc">Language Club</h2>
                </div>
                <img src="admin/images/divisi/language club.jpg" class="cards__program-img" alt="">

                <div class="detail__divisi-card">
                    <h2 class="detail__title-divisi">UKM ini bergerak di bidang yang berkaitan dengan Language atau Bahasa .</h2>
                    <a href="ukm/ukm-lc.php" class="button__program">Baca Selengkapnya
                    <i class="ri-arrow-right-s-line"></i>
                    </a>
                </div>
            </div>
            
            <div class="program__card">
                <div class="detail__divisi">
                    <p class="ukm__card-title">UKM</p>
                    <h2 class="ukm__card-desc">Lembaga Dakwah Kampus</h2>
                </div>
                <img src="admin/images/divisi/ldk.jpg" class="cards__program-img" alt="">

                <div class="detail__divisi-card">
                    <h2 class="detail__title-divisi">UKM ini bergerak di bidang yang berkaitan dengan Kegiatan Agama Islam.</h2>
                    <a href="ukm/ukm-ldk.php" class="button__program">Baca Selengkapnya
                    <i class="ri-arrow-right-s-line"></i>
                    </a>
                </div>
            </div>
            <div class="program__card">
                <div class="detail__divisi">
                    <p class="ukm__card-title">UKM</p>
                    <h2 class="ukm__card-desc">Paraswara</h2>
                </div>
                <img src="admin/images/divisi/paraswara.jpg" class="cards__program-img" alt="">

                <div class="detail__divisi-card">
                    <h2 class="detail__title-divisi">UKM ini bergerak di bidang yang berkaitan dengan kegiatan seperti Paduan Suara.</h2>
                    <a href="ukm/ukm-paraswara.php" class="button__program">Baca Selengkapnya
                    <i class="ri-arrow-right-s-line"></i>
                    </a>
                </div>
            </div>
            <div class="program__card">
                <div class="detail__divisi">
                    <p class="ukm__card-title">UKM</p>
                    <h2 class="ukm__card-desc">Seni Tari</h2>
                </div>
                <img src="admin/images/divisi/seni-tari.jpg" class="cards__program-img" alt="">

                <div class="detail__divisi-card">
                    <h2 class="detail__title-divisi">UKM ini bergerak di bidang yang berkaitan dengan Tari atau Kegiatan seperti Menari.</h2>
                    <a href="ukm/ukm-seni-tari.php" class="button__program">Baca Selengkapnya
                    <i class="ri-arrow-right-s-line"></i>
                    </a>
                </div>
            </div>
            <div class="program__card">
                <div class="detail__divisi">
                    <p class="ukm__card-title">UKM</p>
                    <h2 class="ukm__card-desc">Bina Insani Pencita Alam</h2>
                </div>
                <img src="admin/images/divisi/binapala.jpg" class="cards__program-img" alt="">

                <div class="detail__divisi-card">
                    <h2 class="detail__title-divisi">UKM ini bergerak di bidang yang berkaitan dengan Alam.</h2>
                    <a href="ukm/ukm-pd.php" class="button__program">Baca Selengkapnya
                    <i class="ri-arrow-right-s-line"></i>
                    </a>
                </div>
            </div>
            <div class="program__card">
                <div class="detail__divisi">
                    <p class="ukm__card-title">UKM</p>
                    <h2 class="ukm__card-desc">Futsal</h2>
                </div>
                <img src="admin/images/divisi/futsal-l.jpg" class="cards__program-img" alt="">

                <div class="detail__divisi-card">
                    <h2 class="detail__title-divisi">UKM ini bergerak di bidang yang berkaitan dengan Olahraga Futsal.</h2>
                    <a href="ukm/ukm-futsal.php" class="button__program">Baca Selengkapnya
                    <i class="ri-arrow-right-s-line"></i>
                    </a>
                </div>
            </div>
            <div class="program__card">
                <div class="detail__divisi">
                    <p class="ukm__card-title">UKM</p>
                    <h2 class="ukm__card-desc">Accounting Club</h2>
                </div>
                <img src="admin/images/divisi/accounting.jpg" class="cards__program-img" alt="">

                <div class="detail__divisi-card">
                    <h2 class="detail__title-divisi">UKM ini bergerak di bidang yang berkaitan dengan Accounting atau Akuntans</h2>
                    <a href="uk,/ukm-accounting.php" class="button__program">Baca Selengkapnya
                    <i class="ri-arrow-right-s-line"></i>
                    </a>
                </div>
            </div>
            <div class="program__card">
                <div class="detail__divisi">
                    <p class="ukm__card-title">UKM</p>
                    <h2 class="ukm__card-desc">Personal Development</h2>
                </div>
                <img src="admin/images/divisi/pd.jpg" class="cards__program-img" alt="">

                <div class="detail__divisi-card">
                    <h2 class="detail__title-divisi">UKM ini bergerak di bidang yang berkaitan dengan Pengembangan diri seperti Soft Skill.</h2>
                    <a href="detail-ukm.php" class="button__program">Baca Selengkapnya
                    <i class="ri-arrow-right-s-line"></i>
                    </a>
                </div>
            </div>
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