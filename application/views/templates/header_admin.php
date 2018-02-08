<?php
    $menu = array('','','');
    if($active == 'home'){
        $menu[0] = 'active';
    }elseif($active == 'pengajuanproyek'){
        $menu[1] = 'active';
    }elseif ($active == 'proyeksaya') {
        $menu[2] = 'active';
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="images/favicon_1.ico">

        <title>Moltran - Responsive Admin Dashboard Template</title>

        <!-- Base Css Files -->
        <link href="<?=base_url('assets/moltran/css/bootstrap.min.css')?>" rel="stylesheet" />

        <!-- Font Icons -->
        <link href="<?=base_url('assets/moltran/assets/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet" />
        <link href="<?=base_url('assets/moltran/assets/ionicon/css/ionicons.min.css')?>" rel="stylesheet" />
        <link href="<?=base_url('assets/moltran/css/material-design-iconic-font.min.css')?>" rel="stylesheet">

        <!-- animate css -->
        <link href="<?=base_url('assets/moltran/css/animate.css')?>" rel="stylesheet" />

        <!-- Waves-effect -->
        <link href="<?=base_url('assets/moltran/css/waves-effect.css')?>" rel="stylesheet">

        <!-- sweet alerts -->
        <link href="<?=base_url('assets/moltran/assets/sweet-alert/sweet-alert.min.css')?>" rel="stylesheet">

        <!-- Custom Files -->
        <link href="<?=base_url('assets/moltran/css/helper.css')?>" rel="stylesheet" type="text/css" />
        <link href="<?=base_url('assets/moltran/css/style.css')?>" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="<?=base_url('assets/moltran/js/modernizr.min.js')?>"></script>

    </head>



    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">
                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <a href="index.html" class="logo"><img src="<?=base_url('assets/moltran/images/iconaja.png')?>"> <span>Patungan</span></a>
                    </div>
                </div>
                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="">
                            <div class="pull-left">
                                <button class="button-menu-mobile open-left">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <span class="clearfix"></span>
                            </div>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->

            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">
                    <div class="user-details">
                        <div class="pull-left">
                            <img src="<?=base_url('assets/moltran/images/users/avatar-1.jpg')?>" alt="" class="thumb-md img-circle">
                        </div>
                        <div class="user-info">
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    Admin
                                    <span class="pull-right"><i class="md md-warning"></i></span>
                                </a>
                            </div>

                            <p class="text-muted m-0">Profile</p>
                        </div>
                    </div>
                    <!--- Divider -->
                    <div id="sidebar-menu">
                        <ul>
                            <li>
                                <a href="<?=base_url('admin/home')?>" class="waves-effect <?=$menu[0];?>"><i class="md md-assignment-turned-in"></i><span> Verifikasi Pengajuan</span></a>
                            </li>

														<li class="has_sub">
                                <a href="#" class="waves-effect"><i class="md md-assignment"></i><span>Transaksi</span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="<?=base_url('admin/pembayaran_modal')?>">Pembayaran Modal</a></li>
                                    <li><a href="<?=base_url('admin/pengambilan_modal')?>">Pengambilan Modal</a></li>
                                    <li><a href="<?=base_url('admin/pembayaran_keuntungan')?>">Pembayaran Keuntungan</a></li>
																		<li><a href="<?=base_url('admin/penyaluran_keuntungan')?>">Penyaluran Keuntungan</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="<?=base_url('login')?>" class="waves-effect"><i class="fa fa-power-off"></i><span> Keluar </span></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- Left Sidebar End -->


						<script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="<?=base_url('assets/moltran/js/jquery.min.js')?>"></script>
        <script src="<?=base_url('assets/moltran/js/bootstrap.min.js')?>"></script>
        <script src="<?=base_url('assets/moltran/js/waves.js')?>"></script>
        <script src="<?=base_url('assets/moltran/js/wow.min.js')?>"></script>
        <script src="<?=base_url('assets/moltran/js/jquery.nicescroll.js')?>" type="text/javascript"></script>
        <script src="<?=base_url('assets/moltran/js/jquery.scrollTo.min.js')?>"></script>
        <script src="<?=base_url('assets/moltran/assets/jquery-detectmobile/detect.js')?>"></script>
        <script src="<?=base_url('assets/moltran/assets/fastclick/fastclick.js')?>"></script>
        <script src="<?=base_url('assets/moltran/assets/jquery-slimscroll/jquery.slimscroll.js')?>"></script>
        <script src="<?=base_url('assets/moltran/assets/jquery-blockui/jquery.blockUI.js')?>"></script>


        <!-- CUSTOM JS -->
        <script src="<?=base_url('assets/moltran/js/jquery.app.js')?>"></script>
