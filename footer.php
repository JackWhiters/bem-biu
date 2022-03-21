<?php
    include "admin/conn.php";

    //fetch settings
    $settings = mysqli_query($con,"SELECT * FROM settings");
    $setting  = mysqli_fetch_array($settings);
?>
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
                    <a href="divisi/divisi-keilmuan.php">
                        <li class="footer__information "> Keilmuan</li>
                    </a>
                    <a href="divisi/divisi-kominfo.php">
                        <li class="footer__information "> Kominfo</li>
                    </a>
                    <a href="divisi/divisi-minbak.php">
                        <li class="footer__information ">Minat dan Bakat</li>
                    </a>
                    <a href="divisi/divisi-sosmas.php">
                        <li class="footer__information ">Social dan Masyarakat </li>
                    </a>
                    <a href="divisi/divisi-pkm.php">
                        <li class="footer__information ">Penelitian dan PKM</li>
                    </a>
                    <a href="divisi/divisi-sdm.php">
                        <li class="footer__information ">Pengembangan SDM</li>
                    </a>
                </ul>
            </div>

            <div class="footer__content ">
                <h3 class="footer__title ">BEM BIU</h3>

                <ul class="footer__data ">
                    <a href="struktur-divisi.php">
                        <li class="footer__information ">Struktur</li>
                    </a>
                    <a href="detail-program.php">
                        <li class="footer__information ">Program</li>
                    </a>
                    <a href="sejarah.php">
                        <li class="footer__information ">Sejarah</li>
                    </a>
                    </a>
                </ul>
            </div>

            <div class="footer__content">
                <h3 class="footer__title">
                    Hubungi Kami
                </h3>
                <a href="contact.php" class="button footer__button">Hubungi Kami</a>
            </div>
        </div>

    </footer>
    <!-- Newsletter -->
    <!-- <section class="newsletter-section style-two">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-5">
                    <h3><span class="flaticon-email"></span> Subscribe Our Newsletter <br> & Get Updates.</h3>
                </div>
                <div class="col-lg-7">
                    <div class="newsletter-form">
                        <form action="subscribe.php" method="post">
                            <div class="form-group">
                                <i class="far fa-envelope-open"></i>
                                <input type="email" placeholder="Enter Your Email Address..."  name="email">
                                <button type="submit" class="theme-btn btn-style-one"><span><i class="flaticon-up-arrow" name="submit"></i>Subscribe</span></button>
                                <label class="subscription-label" for="subscription-email"></label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>        
    </section>
<!--Main Footer-->
    <!-- <footer class="main-footer">
        <div class="upper-box">
            <div class="auto-container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="widget contact-widget style-two">
                            <h4>Punya Pertanyaan? <br> Hubungi Kami</h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="wrapper-box">
                                        <div class="icon-box">
                                            <div class="icon"><span class="flaticon-calling"></span></div>
                                            <div class="text"><strong>Phone</strong><a href="tel:<?php echo $setting['phone']; ?>"><?php echo $setting['phone']; ?></a></div>
                                        </div>
                                        <div class="icon-box">
                                            <div class="icon"><span class="flaticon-mail"></span></div>
                                            <div class="text"><strong>Email</strong><a href="mail:<?php echo $setting['email']; ?>"><?php echo $setting['email']; ?></a></div>
                                        </div>
                                        <ul class="social-icon">
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="icon-box">
                                        <div class="icon"><span class="flaticon-mail"></span></div>
                                        <div>
                                            <div class="text"><strong>Mon - Friday</strong>08.00 am to 9.00pm</div>
                                            <div class="text"><strong>Saturday</strong>10.00 am to 4.00pm</div>
                                            <div class="text"><span>Sunday-Closed</span></div>
                                        </div>                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="widget links-widget">
                                    <h4 class="widget_title">Useful Links</h4>
                                    <div class="widget-content">
                                        <ul class="list">
                                            <li><a href="about.php">About Company</a></li>
                                            <li><a href="contact.php">Get In Touch</a></li>
                                           <li><a href="service.php">Our Services</a></li>
                                            <li><a href="blog.php">Blogs & News</a></li>
                                            <li><a href="privacy.php">Privacy Policies</a></li>
                                            <li><a href="terms.php">Terms & Conditions</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="widget instagram-widget">
                                    <h4 class="widget_title">Our Gallery</h4>
                                    <div class="wrapper-box">
                                        <div class="image">
                                            <img src="assets/images/gallery/gallery-1.jpg" alt="">
                                            <div class="overlay-link"><a href="assets/images/gallery/gallery-1.jpg" class="lightbox-image" data-fancybox="gallery"><span class="fa fa-plus"></span></a></div>
                                        </div>
                                        <div class="image">
                                            <img src="assets/images/gallery/gallery-2.jpg" alt="">
                                            <div class="overlay-link"><a href="assets/images/gallery/gallery-2.jpg" class="lightbox-image" data-fancybox="gallery"><span class="fa fa-plus"></span></a></div>
                                        </div>
                                        <div class="image">
                                            <img src="assets/images/gallery/gallery-3.jpg" alt="">
                                            <div class="overlay-link"><a href="assets/images/gallery/gallery-3.jpg" class="lightbox-image" data-fancybox="gallery"><span class="fa fa-plus"></span></a></div>
                                        </div>
                                        <div class="image">
                                            <img src="assets/images/gallery/gallery-4.jpg" alt="">
                                            <div class="overlay-link"><a href="assets/images/gallery/gallery-4.jpg" class="lightbox-image" data-fancybox="gallery"><span class="fa fa-plus"></span></a></div>
                                        </div>
                                        <div class="image">
                                            <img src="assets/images/gallery/gallery-5.jpg" alt="">
                                            <div class="overlay-link"><a href="assets/images/gallery/gallery-5.jpg" class="lightbox-image" data-fancybox="gallery"><span class="fa fa-plus"></span></a></div>
                                        </div>
                                        <div class="image">
                                            <img src="assets/images/gallery/gallery-6.jpg" alt="">
                                            <div class="overlay-link"><a href="assets/images/gallery/gallery-6.jpg" class="lightbox-image" data-fancybox="gallery"><span class="fa fa-plus"></span></a></div>
                                        </div>
                                    </div><!-- /.gallery-wrapper -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>               
    </footer>
    <!--End Main Footer-->

    <!-- <div class="footer-bottom">
        <div class="auto-container">
            <div class="row m-0 align-items-center justify-content-between">
                <div class="copyright-text">Copyright © 2021 <?php echo $setting['site_name']; ?> | Designed By <a target="blank" href="https://www.actwebspace.com"> ACT Web Space</a></div>
                <ul class="menu">
                    <li><a href="privacy.php">Privacy Policies</a></li>
                    <li><a href="terms.php">Terms & Conditions </a></li>
                    <li><a href="contact.php">  Contact Us</a></li>
                </ul>
            </div>            
        </div>
    </div>
	
</div> -->
<!--End pagewrapper-->