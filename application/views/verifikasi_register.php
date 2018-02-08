<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="images/favicon_1.ico">

        <title>Patungan - Register</title>

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
    <body>


        <div class="wrapper-page">
            <div class="panel panel-color panel-primary panel-pages">
                <div class="panel-heading bg-img"> 
                    <div class="bg-overlay"></div>
                   <h3 class="text-center m-t-10 text-white"> Verifikasi </h3>
                </div> 


                <div class="panel-body">

                <form class="form-horizontal m-t-20" action="" method="post">                                       
                    <?=@$alert?>
                     <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control input-lg" type="text" name="kode" required="" placeholder="Masukkan Kode Verifikasi">
                        </div>
                    </div>

                    <div class="form-group ">                       
                    </div>
                    
                    <div class="form-group text-center m-t-40">
                        <div class="col-xs-12">
                            <button class="btn btn-primary waves-effect waves-light btn-lg w-lg" type="submit" name="submit">Verifikasi</button>
                        </div>
                
                </form> 
                <a href="<?=base_url('register/kirim_ulang')?>" class="btn btn-primary waves-effect waves-light btn-sm" style='margin-top: 10px'>Kirim Ulang Kode</button></a>
                    </div>                  
                </div>                                 
                
            </div>
        </div>

        
    	<script>
            var resizefunc = [];
        </script>
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
	
	</body>
</html>