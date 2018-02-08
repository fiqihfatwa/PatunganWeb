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
                                <h4 class="pull-left page-title">Pilihan Proyek</h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="<?=base_url('customer/home')?>">Home</a></li>
                                </ol>
                            </div>
                        </div>

                        <?php foreach($database as $data){?>
                            <div class="col-lg-4">
                                <div class="panel panel-default">
                                    <div class="">
                                        <img src="<?=base_url('assets/images/'.$data->gambar_url)?>" width="100%" height="auto"> 
                                    </div>
                                    <div class="panel-body"> 
                                        <center>
                                            <h4><?=$data->proyek_nama?></h4>
                                            <p><?=substr($data->proyek_deskripsi, 0, 76)?></p> 
                                            <br>
                                            <strong>oleh<br> <?=$data->user_name?></strong>
                                        </center>
                                    </div> 
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th><center>Estimasi Profit <br><?=floor(($data->proyek_estimasi_keuntungan * 100)/$data->proyek_total_dana)?>%</center></th>
                                                <th><center>Periode <br><?=$data->proyek_jangka_waktu?> </center></th>
                                            </tr>
                                        </thead>
                                    </table>
                                    <div class="panel-body">
                                        <center>
                                            <?php if($this->home_model->get_jumlah_slot($data->proyek_id) != 0) { ?>
                                                <a href="<?=base_url('customer/proyek?id='.$data->proyek_id)?>"><button class="btn btn-primary btn-rounded waves-effect waves-light w-md">Pilih</button></a>
                                             <?php } else { ?>
                                                <a href=""><button class="btn btn-warning btn-rounded waves-effect waves-light w-md" disabled>SOLD OUT</button></a>
                                             <?php } ?>
                                        </center>
                                    </div>
                                </div>
                            </div>
                        <!-- end row -->
                        <?php } ?>

                    </div> <!-- container -->
                               
                </div> <!-- content -->

                <footer class="footer text-right">
                    2016 © Moltran.
                </footer>

            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->