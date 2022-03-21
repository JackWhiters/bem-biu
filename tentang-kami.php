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

        <section class="detail-berita section">
            <div class="detail-berita__container container grid">
                <div class="detail__data">
                    <h2 class="detail__title">Tentang Badan Eksekutif Mahasiswa <br> Bina Insani University </h2>
                <img src="assets/img/gambar-berita.jpeg" alt="" class="card__detail-img">

                </div>
            </div>
        </section>

        <section class="section berita container" id="berita">
            <div class="berita__link-container grid">
                <div class="berita__link-data">
                    <h2 class="berita__link-title">Apa Sih BEM BIU?</h2>
                    <p class="berita__link-desc">Badan Eksekutif Mahasiswa Universitas Bina Insani atau sering disebut Bem Biu dibuat pada tanggal 4 Februari 2022 dan diketuai oleh Muhammad Aldisyah Rahman dengan wakilnya Raden Fitria Dwiyani Putri.  </p>

                    <p class="berita__link-desc">Bem itu sendiri adalah oganisasi mahasiswa intra kampus yang merupakan lembaga eksekutif di tingkat pendidikan tinggi yang dipimpin oleh seorang Presiden Mahasiswa atau Ketua BEM. Dalam melaksanakan program-programnya, umumnya BEM memiliki beberapa kementerian dan departemen atau bidang.</p>
                
                    <p class="berita__link-desc">Bem Biu itu sendiri mempunyai divisi divisi-nya antara lain adalah Divisi Kominfo, divisi Minat Bakat, Divisi Sosial dan Masyarakat, Divisi Penelitian dan PKM, dan divisi Keilmuan, Divisi Pengembangan SDM. Divisi- divisi tersebut tentu mempunyai seorang koor-nya sendiri yang bertujuan agar kegiatan dari divisi-divisi tersebut dapat terkoordinasi dengan mudah kegiatan kegiatannya dari divisi tersebut maupun laporan kepada ketua BEM.</p>

                </div>

                <div class="berita__link-data">
                    <h2 class="berita__link-title">Alasan pembuatan Bem Biu</h2>
                    <p class="berita__link-desc">Badan Eksekutif Mahasiswa Universitas Bina Insani dibuat untuk kegiatan penampungan aspirasi aspirasi mahasiswa. “ Saya dulu tujuan untuk membuat Bem ini sendiri adalah untuk kegiatan menampung aspirasi-aspirasi dari para mahasiswa lalu dibuat titik temu untuk menyelesaikan solusinya bersama “ Ucap Ketua BEM Biu.</p>

                    <p class="berita__link-desc">Walau Bem sendiri sering di wacanakan sebagai wadah politik di dunia perkampusan, namun disini Bem Sendiri itu dipergunakan untuk penampungan aspirasi dan pemecahan solusi secara bersama. Pendirian ini dimaksudkan agar dapat dengan mudah mencapai suatu tujuan dengan solusi-solusi yang dapat diterima dengan baik. #imr</p>
                
                    
                </div>
            </div>
        </section>

        <!--==================== FOOTER ====================-->
        <?php include "footer.php" ?>


        <!--=============== SCROLL UP ===============-->
        <a href="# " class="scrollup " id="scroll-up ">
            <i class="ri-arrow-up-fill scrollup__icon "></i>
        </a>

        <!--=============== SCROLL REVEAL ===============-->
        <script src="assets/js/scrollreveal.min.js "></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <!--=============== MAIN JS ===============-->
        <script src="assets/js/main.js "></script>

</body>

</html>