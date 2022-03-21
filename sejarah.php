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
                    <h2 class="detail__title">Sejarah Badan Eksekutif Mahasiswa <br> Bina Insani University </h2>
                <img src="assets/img/gambar-berita.jpeg" alt="" class="card__detail-img">

                </div>
            </div>
        </section>

        <section class="section berita container" id="berita">
            <div class="berita__link-container grid">
                <div class="berita__link-data">
                    <h2 class="berita__link-title">Bagaimana Bem Biu Bisa Terbentuk?</h2>
                    <p class="berita__link-desc">Badan Eksekutif Mahasiswa Universitas Bina Insani dibentuk pada tanggal 4 februari 2021. Ketika kampus STMIK Bina Insani berubah menjadi Universitas Bina Insani pada tahun 2019. maka segera terbentuk juga dengan resmi Badan Eksekutif Mahasiswa pada tanggal 4 Februari 2021. Maka dengan itu Bem pertama kali terbentuk.
                    </p>
                    <p class="berita__link-desc">Bem sendiri itu bekerja diawasi Badan kepengawasan Mahasiswa / BPM. Sama halnya seperti Bem-Bem lain, Bem Biu sendiri selalu membuat program kerja dimana untuk memajukan kampus dan menerima aspirasi dari mahasiswanya sendiri. Ga ketinggalan, Bem pun memulai debutnya pertama kali selama setahun sudah banyak melakukan kegiatan-kegiatan yang bermanfaat.
                    </p>
                </div>

                <div class="berita__link-data">
                    <h2 class="berita__link-title">Pasangan Calon Ketua Bem pertama</h2>
                    <p class="berita__link-desc">Awalnya Pasangan calon / Paslon ketua Bem itu hanya dua loh, sekarang menjabat sebagai ketua dan wakil ketua Bem Universitas Bina Insani. Pasangan-nya yakni Muhammad Aldisyah Rahman dan Raden Fitria Dwiyani Putri. Bem sendiri awalnya dipilih secara internal saja dan pemenang segera dijabat menjadi Ketua Bem.
                    </p>
                    <p class="berita__link-desc">Setelah melakukakan pemilihan lalu segeralah melakukan serah terima jabatan untuk seorang Ketua dan Wakil ketua angkata pertama ditahun 2021/2022. Disini, mereka mulai melakukan pencarian-pencarian maupun pembuatan hal-hal lain seperti adanya divisi, AD-ART, dan mengadakan rapat-rapat yang dibuat untuk mensukseskan BEM itu sendiri.
                    </p>
                </div>

                <div class="berita__link-data">
                    <h2 class="berita__link-title">Pembuatan Divisi untuk BEM</h2>
                    <p class="berita__link-desc">Badan Eksekutif Mahasiswa BIna Insani University melakukan pembuatan Divisi. Disini Bem melakukan pendirian 6 divisi yang digunakan secara sah untuk melakukan kegiatannya dalam hal visi maupun misinya. BEM pun menyetujui adanya 6 divisi yaitu Divisi Kominfo, Divisi Minat dan Bakat, Divisi Pengembangan SDM, Divisi Sosial dan Masyarakat, Divisi Penelitian dan PKM, Divisi Keilmuan
                    </p>
                    <p class="berita__link-desc">Divisi yang telah dibuat selanjutnya akan dipilih satu orang untuk menjadikannya sebagai koor di divisi tersebut. Setiap divisi memiliki 1 koor dan selanjutnya setiap divisi mencari atau merekrut anggota baru divisi. Divisi merekrut beberapa anggota untuk menjadikannya anggota divisi maupun anggota Bem Biu untuk mensukseskan Bem Biu sendiri. Divisi selanjutnya membuat kegiatan-kegiatan yang disebutnya Program Kerja / Proker Divisi. #imr
                    </p>
                </div>
            </div>
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

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <!--=============== MAIN JS ===============-->
        <script src="assets/js/main.js "></script>

</body>

</html>