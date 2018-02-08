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
                                <h4 class="pull-left page-title">Proyek</h4>
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
                                        <a href="<?=base_url('assets/images/'.$database['gambar_url'])?>" data-popup="lightbox" style="position:  absolute;top: 0;left: 0;bottom: 0;right: 0;">
                                            <img src="<?=base_url('assets/images/'.$database['gambar_url'])?>" style="width: auto; height: 100%;">
                                        </a>
                                    </center>
                                    </div>
                                    <!-- /infografis -->
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="panel panel-default">
                                    <div class="panel-body"> 
                                        <h4><?=$database['proyek_nama']?></h4>
                                        <h5>Rp <?=number_format($database['proyek_harga_slot'],2,",",".");?> / slot</h5>  
                                        Periode: <?=$database['proyek_jangka_waktu']?>
                                        <br>
                                        Lokasi : <?=$database['proyek_lokasi']?>
                                        <br>
                                        Estimasi Profit: <?=floor(($database['proyek_estimasi_keuntungan'] * 100)/$database['proyek_total_dana'])?>%
                                        <br><br>
                                        Slot Tersisa: <?=10-$slot?>
                                        <br><br>
                                        oleh <strong><?=$database['user_name']?></strong>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-4">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Jumlah Pemodalan</h3>
                                    </div>
                                    <div class="panel-body"> 
                                        <form class="form-horizontal" role="form" action="<?=base_url('customer/proyek/input_slot')?>" method="POST">                                    
                                            <div class="form-group">
                                                <label class="col-md-4 control-label">Jumlah Slot:</label>
                                                <div class="col-md-3">
                                                    <input type="number" class="form-control" min="0" max="<?=10-$slot?>" placeholder="0" name="jumlah_slot">
                                                    <input type="hidden" value="<?=$database['proyek_id']?>" name="proyek_id">
                                                    <input type="hidden" value="<?=$database['user_id']?>" name="user_id">
                                                    <input type="hidden" value="<?=$database['proyek_harga_slot']?>" name="proyek_harga_slot">
                                                </div>
                                                <div class="col-md-3">
                                                    <button class="btn btn-primary">Bayar</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            
                        </div>
                        <!-- end row -->

                         <div class="row">
                            <div class="col-xs-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Deskripsi</h3>
                                    </div>
                                    <div class="panel-body"> 
                                        <?=$database['proyek_deskripsi']?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-xs-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Kebijakan dan Kesepakatan</h3>
                                    </div>
                                    <div class="panel-body"> 
                                        <ol type="number">
                                            <li>Jumlah slot yang ingin didanai tidak dibatasi selama slot tersedia.</li>
                                            <li>Jumlah nominal pendanaan 1 slot ada lah senilai Rp <?=$database['proyek_harga_slot']?>,-</li>
                                            <li>Kesepakatan pembagian hasil keuntungan dari proyek adalah sebanyak masing - masing 50% untuk pemodal dan pemilik usaha dari total keuntungan bersih.</li>
                                            <li>Estimasi Keuntungan pada proyek ini adalah sebesar <?=floor(($database['proyek_estimasi_keuntungan'] * 100)/$database['proyek_total_dana'])?>%.</li>
                                            <li>Pemilik usaha yang mengajukan patungan modal sudah terverivikasi oleh pihak Platform Patungan.</li>
                                            <li>Segala transaksi yang terjadi diawasi oleh pihak Platform Patungan melaui rekening bersama.</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-xs-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Simulasi</h3>
                                    </div>
                                    <div class="panel-body">                                      
                                        Simulasi perhitungan keuntungan (1 slot). <br>
                                        Nominal Investasi: <?=number_format($database['proyek_harga_slot'],2,",",".");?> <br>
                                        Profit 1 slot: <?=number_format($database['proyek_harga_slot']*floor(($database['proyek_estimasi_keuntungan'] * 100)/$database['proyek_total_dana'])/100,2,",",".")?> <br>
                                        Uang yang Anda dapatkan setelah akhir periode bulan: <?=number_format($database['proyek_harga_slot']+$database['proyek_harga_slot']*floor(($database['proyek_estimasi_keuntungan'] * 100)/$database['proyek_total_dana'])/100/2,2,",",".")?> <br>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                    </div> <!-- container -->
                               
                </div> <!-- content -->

            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->