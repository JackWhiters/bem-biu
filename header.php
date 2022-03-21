<?php
    include "admin/conn.php";

    //fetch settings
    $settings = mysqli_query($con,"SELECT * FROM settings");
    $setting  = mysqli_fetch_array($settings);
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--=============== FAVICON ===============-->
    <link rel="shortcut icon" href="assets/img/logo-kabinet.png" type="image/x-icon">

    <!--=============== REMIX ICONS ===============-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="assets/css/styless3.css">
</head>
 <!-- Main Header -->
    <!--==================== HEADER ====================-->
    <header class="header" id="header">
        <nav class="nav container">
            <img src="assets/img/klogo2.png" href="index.php" class="nav__logo" alt="">
            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="index.php" class="nav__link active-link">Home</a>
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
