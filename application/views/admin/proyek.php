            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->                      
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="pull-left page-title">Detail Proyek</h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="<?=base_url('customer/home')?>">Home</a></li>
                                </ol>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-8">
                                <div class="panel panel-default">
                                    <!-- Infografis -->
                                    <div style="background-color: black; position: relative; width: 100%; padding-top: 56.25%; margin-bottom: 10px">
                                    <center>
                                        <a href="<?=base_url('assets/images/'.$proyek['gambar_url'])?>" data-popup="lightbox" style="position:  absolute;top: 0;left: 0;bottom: 0;right: 0;">
                                            <img src="<?=base_url('assets/images/'.$proyek['gambar_url'])?>" style="width: auto; height: 100%;">
                                        </a>
                                    </center>
                                    </div>
                                    <!-- /infografis -->
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="panel panel-default">
                                    <div class="panel-body"> 
                                        <h3><?=$proyek['proyek_nama']?></h3>
                                        <h5>Rp. <?=number_format($proyek['proyek_harga_slot'],2,',','.')?> / slot</h5>  
                                        Periode: <?=$proyek['proyek_jangka_waktu']?>
                                        <br>
                                        Estimasi Profit: <?=$proyek['proyek_estimasi_keuntungan']?>
                                        <br><br>                                      
                                         <strong><?=$proyek['user_id']. ' - '.$proyek['user_name']?></strong>
                                    </div>
                                </div>
                                <?php if($proyek['proyek_status'] == 0){ ?>
                                <a href="<?=base_url('admin/proyek/publish/'.$proyek['proyek_id'])?>">
                                <button class="btn btn-lg btn-primary waves-effect waves-light" style="height: 70px;width: 150px">Terima</button>

                                <a href="<?=base_url('admin/proyek/tolak/'.$proyek['proyek_id'])?>">
                                <button class="btn btn-lg btn-danger waves-effect waves-light" style="height: 70px;width: 150px">Tolak</button>
                                </a>
                            </a>
                            <?php }else if($proyek['proyek_status']==1){ ?>
                                <a href="<?=base_url('admin/proyek/batalkan/'.$proyek['proyek_id'])?>">
                                <button class="btn btn-lg btn-primary waves-effect waves-light" style="height: 70px;width: 150px" disabled>Diterima</button>
                            </a>
                            <?php }else if($proyek['proyek_status']==2){ ?>
                                <a href="<?=base_url('admin/proyek/batalkan/'.$proyek['proyek_id'])?>">
                                <button class="btn btn-lg btn-danger waves-effect waves-light" style="height: 70px;width: 150px" disabled>Ditolak</button>
                            </a>
                            <?php } ?>
                            </div>
                            
                        </div>
                        <!-- end row -->

                        
                        <!-- end row -->

                         <div class="row">
                            <div class="col-xs-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Deskripsi</h3>
                                    </div>
                                    <div class="panel-body"> 
                                        <?=$proyek['proyek_deskripsi']?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                     
                        <!-- end row -->

                       
                        <!-- end row -->


                    </div> <!-- container -->
                               
                </div> <!-- content -->

            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->