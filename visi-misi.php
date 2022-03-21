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
            <img src="assets/img/klogo2.png" href="index.php" class="nav__logo" alt="">
            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="index.php" class="nav__link">Home</a>
                    </li>
                    <li class="nav__item">
                        <a href="tentang-kami.php" class="nav__link active-link">Tentang Kami</a>
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
        
        <!--==================== VISI-MISI BEM ====================-->
       
        <section class="visi__bem section">
            <h2 class="visi__bem-title">Visi & Misi Badan Eksekutif Mahasiswa <br> Bina Insani University</h2>
        </section>
        <section class="visi__bem-biu">
            <div class="visi__bem-container container grid">
                <img src="assets/img/klogo2.png" alt="" class="visi__bem-img">
                <div class="visi__bem-biu">
                    <h2 class="visi__bem-biu-title">VISi BEM BIU</h2>
                    <p class="visi__bem-biu-desc">BEM Universitas Bina Insani menjadi sarana pengembangan kreatifitas, inspirasi dan aspirasi mahasiswa, juga meningkatkan BEM sebagai Badan Eksekutuf Mahasiswa Bina Insani yang unggul dan terpercaya bagi Indonesia</p>
                </div>

                
                <div class="visi__bem-biu">
                    <h2 class="visi__bem-biu-title">MISI BEM BIU</h2>

                    <div class="detail__visi-bem">
                        <p class="detail__visi-desc">1.</p>
                        <p class="detail__visi-desc">Mengadakan program kerja yang berlandaskan nilai pancasila dan tri dharma perguruan tinggi.</p>
                    </div>

                    <div class="detail__visi-bem">
                        <p class="detail__visi-desc">2.</p>
                        <p class="detail__visi-desc">Menampung aspirasi dan minat bakat, serta memecahkan masalah mahasiswa dengan prinsip kekeluargaan</p>
                    </div>

                    <div class="detail__visi-bem">
                        <p class="detail__visi-desc">3.</p>
                        <p class="detail__visi-desc">Menjadi wadah pengolah isu-isu nasional maupun internasional agar terciptanya insan akademis yang kritis dan peduli dengan keadaan sekitar</p>
                    </div>

                    <div class="detail__visi-bem">
                        <p class="detail__visi-desc">4.</p>
                        <p class="detail__visi-desc">Menjalin kerjasama yang baik dengan organisasi di dalam maupun diluar kampus</p>
                    </div>
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