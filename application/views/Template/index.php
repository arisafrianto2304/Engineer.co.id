<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Page Title -->
    <title>Engineer.co.id</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/logo/Logo1.png" type="image/x-icon">

    <!-- CSS Files -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/animate-3.7.0.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome-4.7.0.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/fonts/flat-icon/flaticon.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-4.1.3.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl-carousel.min.css">
    <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/nice-select.css"> -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/chosen/bootstrap-chosen.css">
</head>
<body>
    <!-- Preloader Starts -->
    <div class="preloader">
        <div class="spinner"></div>
    </div>
    <!-- Preloader End -->

    <!-- Header Area Starts -->
	<header class="header-area main-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="logo-area">
                        <a href="<?php echo base_url(); ?>"><img id="logo" src="<?php echo base_url(); ?>assets/images/logo/logo2.png" alt="logo"></a>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="custom-navbar">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>  
                    <div class="main-menu">
                        <ul>
                            <li class="active"><a href="<?php echo base_url(); ?>Home">Beranda</a></li>
                            <li><a href="<?php echo base_url(); ?>About">Tentang</a></li>
                            <li><a href="<?php echo base_url(); ?>Contact">Kontak</a></li>
                            <li class="menu-btn">
                                <a href="<?php echo base_url(); ?>Jobs" class="template-btn">REQUEST CV</a>
                                <!-- jobs ku ganti bg -->
                                <a href="<?php echo base_url(); ?>DropCV" class="template-btn">SUBMIT CV</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->

    <!--Start Body-->
    <?php echo $contents; ?>
    <!--End Body-->

    
    <!-- Footer Area Starts -->
    <footer class="footer-area section-padding">
            <div class="footer-widget">
                <div class="container-fluid text-md-left">
                    <div class="row">
                        <div class="col-md-4 col-lg-3">
                            <div class="d-flex">
                                <div class="into-icon">
                                    <i class="fa fa-home"></i>
                                </div>
                                <div class="">
                                    <h4 style="color:#FF9902">Bandung, Jawa Barat</h4>
                                    <p>Jl. Telekomunikasi, Jl. Terusan Buah Batu No.01</p>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="into-icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="">
                                    <h4 style="color:#FF9902">+62 822 8200 2190</h4>
                                    <p>Senin-Jumat 09.00-17.00 </p>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="into-icon">
                                    <i class="fa fa-envelope-o"></i>
                                </div>
                                <div class="">
                                    <h4 style="color:#FF9902"> helper@engineer.co.id   </h4>
                                    <p>Kirim Pesan Anda Kapan Saja!</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-xl-2 offset-md-7 col-md-3">
                            <div class="mb-2 mt-3 mb-lg-0">
                                <h3 style="color:#FF9902" class="mb-4">Engineer.co.id</h3>
                                <ul>
                                    <li class="mb-2"><a href="<?php echo base_url(); ?>Jobs">Lowongan</a></li>
                                    <li class="mb-2"><a href="<?php echo base_url(); ?>About">Tentang</a></li>
                                    <li class="mb-2"><a href="<?php echo base_url(); ?>Contact">Kebijakan Privasi</a></li>
                                    <!-- <li class="mb-2"><a href="<?php echo base_url(); ?>Contact">FAQ</a></li> -->
                                    <li class="mb-2"><a href="<?php echo base_url(); ?>Contact">Kontak</a></li>
                                </ul>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</span>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="social-icons">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Area End -->


    <!-- Javascript -->
    <script src="<?php echo base_url(); ?>assets/js/vendor/jquery-2.2.4.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/vendor/bootstrap-4.1.3.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/vendor/wow.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/vendor/owl-carousel.min.js"></script>
    <!-- <script src="<?php echo base_url(); ?>assets/js/vendor/jquerynice-select.min.js"></script> -->
    <script src="<?php echo base_url(); ?>assets/js/vendor/ion.rangeSlider.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/chosen/chosen.jquery.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/chosen/chosen-active.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/main.js"></script> 
</body>
</html>
