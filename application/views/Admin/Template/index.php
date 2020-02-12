<!-- signin dan sign up admin -->
<!doctype html> 
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Engineer | Admin Staff </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/images/logo/Logo1.png">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i,800" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/font-awesome.min.css">
    <!-- adminpro icon CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/adminpro-custon-icon.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/meanmenu.min.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/jquery.mCustomScrollbar.min.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/normalize.css">
    <!-- form CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/form.css">
    <!-- style CSS
		============================================ -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/alerts.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="<?php echo base_url(); ?>assets/admin/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body class="darklayout">
    <!-- Header top area start-->
    <div class="wrapper-pro">
        <div class="content-inner-all">
            <!-- Header top area start-->
            
            <!-- Breadcome Desktop start-->
            <div class="breadcome-area mg-b-30 small-dn">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="breadcome-list shadow-reset">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="breadcome-heading">
                                            <h2>Desktop Version</h2>
                                            <br>
                                            <h2>Welcome To Admin Staff Engineer</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Breadcome Desstop End-->
            
            <!-- Breadcome Mobile start-->
            <div class="breadcome-area mg-b-30 des-none">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list map-mg-t-40-gl shadow-reset">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcome-heading">
                                            <h2>Thanks for Visits</h2>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Dashboard</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Breadcome MObile End-->
            <!-- Untuk verifikasi -->
            <?php if($status == TRUE) { ?>
                <?php if($jenis == 'signup') { ?>
                    <div class="container-fluid">
                        <div class="row">
                            <?php if($keterangan == 'duplikat') { ?>
                                <div class="alert alert-warning alert-success-style3 col-lg-11">
                                    <button type="button" class="close sucess-op" data-dismiss="alert" aria-label="Close">
                                        <span class="icon-sc-cl" aria-hidden="true">&times;</span>
                                    </button>
                                    <span class="adminpro-icon adminpro-warning-danger admin-check-sucess"></span>
                                    <p><strong>Warning!</strong> Akun ini sudah terdaftar.</p>
                                </div>
                            <?php } else if($keterangan == 'password') { ?>
                                <div class="alert alert-warning alert-success-style3 col-lg-11">
                                    <button type="button" class="close sucess-op" data-dismiss="alert" aria-label="Close">
                                        <span class="icon-sc-cl" aria-hidden="true">&times;</span>
                                    </button>
                                    <span class="adminpro-icon adminpro-warning-danger admin-check-sucess"></span>
                                    <p><strong>Warning!</strong> Password tidak cocok. Silahkan daftar ulang.</p>
                                </div>
                            <?php } else if($keterangan == 'sukses') { ?>
                                <div class="alert alert-success alert-success-style1 col-lg-11">
                                    <button type="button" class="close sucess-op" data-dismiss="alert" aria-label="Close">
                                        <span class="icon-sc-cl" aria-hidden="true">&times;</span>
                                    </button>
                                    <span class="adminpro-icon adminpro-checked-pro admin-check-sucess"></span>
                                    <p><strong>Success!</strong> Akun berhasil di daftarkan.</p>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                <?php } else if($jenis == 'signin') { ?>
                    <div class="container-fluid">
                        <div class="row">
                            <?php if($keterangan == 'email') { ?>
                                <div class="alert alert-warning alert-success-style3 col-lg-11">
                                    <button type="button" class="close sucess-op" data-dismiss="alert" aria-label="Close">
                                        <span class="icon-sc-cl" aria-hidden="true">&times;</span>
                                    </button>
                                    <span class="adminpro-icon adminpro-warning-danger admin-check-sucess"></span>
                                    <p><strong>Warning!</strong> Email yang anda masukkan salah. </p>
                                </div>
                            <?php } else if($keterangan == 'password') { ?>
                                <div class="alert alert-warning alert-success-style3 col-lg-11">
                                    <button type="button" class="close sucess-op" data-dismiss="alert" aria-label="Close">
                                        <span class="icon-sc-cl" aria-hidden="true">&times;</span>
                                    </button>
                                    <span class="adminpro-icon adminpro-warning-danger admin-check-sucess"></span>
                                    <p><strong>Warning!</strong> Password yang anda masukkan salah.</p>
                                </div>
                            <?php } else if($keterangan == 'akun') { ?>
                                <div class="alert alert-warning alert-success-style3 col-lg-11">
                                    <button type="button" class="close sucess-op" data-dismiss="alert" aria-label="Close">
                                        <span class="icon-sc-cl" aria-hidden="true">&times;</span>
                                    </button>
                                    <span class="adminpro-icon adminpro-warning-danger admin-check-sucess"></span>
                                    <p><strong>Warning!</strong> Akun anda belum terdaftar.</p>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                <?php } ?>
            <?php } ?>
            <!-- Header top area end-->

            <!-- start body -->
            <?php echo $contents; ?>
            <!-- end body -->
        </div>
    </div>
    <!-- Footer Start-->
    <div class="footer-copyright-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-copy-right">
                        <p>Copyright &#169; 2018 Brama All rights reserved. Template by Brama</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End-->

    <!-- jquery
		============================================ -->
    <script src="<?php echo base_url(); ?>assets/admin/js/vendor/jquery-1.11.3.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="<?php echo base_url(); ?>assets/admin/js/bootstrap.min.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="<?php echo base_url(); ?>assets/admin/js/jquery.meanmenu.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="<?php echo base_url(); ?>assets/admin/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="<?php echo base_url(); ?>assets/admin/js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="<?php echo base_url(); ?>assets/admin/js/jquery.scrollUp.min.js"></script>
    <!-- form validate JS
		============================================ -->
    <script src="<?php echo base_url(); ?>assets/admin/js/jquery.form.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/jquery.validate.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/form-active.js"></script>
    <!-- main JS
		============================================ -->
    <script src="<?php echo base_url(); ?>assets/admin/js/main.js"></script>
</body>

</html>