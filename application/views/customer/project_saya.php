        <!-- DataTables -->
        <link href="<?=base_url('assets/moltran/assets/datatables/jquery.dataTables.min.css')?>" rel="stylesheet" type="text/css" />

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
                                <h4 class="pull-left page-title">Proyek Saya</h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="<?=base_url('customer/home')?>">Home</a></li>
                                </ol>
                            </div>
                        </div>

                        <div class="row">
                           <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Daftar Proyek Saya</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <div class="table">
                                                    <table id="datatable" class="table table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th>No</th>
                                                                <th>Proyek</th>
                                                                <th>Nominal Proyek</th>
                                                                <th>Jumlah Slot</th>
                                                                <th>Jumlah Keuntungan</th>
                                                                <th>Tanggal Berakhir</th>
                                                                <th>Nomor Transaksi</th>
                                                                <th>Bukti Pembayaran</th>
                                                                <th>Status Return</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php $i=1; foreach($database as $data){?>
                                                            <tr>
                                                                <td><?=$i++?></td>
                                                                <td><?=$data->proyek_nama?></td>
                                                                <td><?=$data->jumlah_slot*$data->proyek_harga_slot?></td>
                                                                <td><?=$data->jumlah_slot?></td>
                                                                <td><?=$data->jumlah_slot*$data->proyek_harga_slot*floor(($data->proyek_estimasi_keuntungan * 100)/$data->proyek_total_dana)/100/2?></td>
                                                                <td><?=$data->proyek_jangka_waktu?></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                            </tr>
                                                            <?php } ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                    </div> <!-- container -->
                               
                </div> <!-- content -->

                <footer class="footer text-right">
                    2016 © Moltran.
                </footer>

            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        <script src="<?=base_url('assets/moltran/assets/datatables/jquery.dataTables.min.js')?>"></script>
        <script src="<?=base_url('assets/moltran/assets/datatables/dataTables.bootstrap.js')?>"></script>


        <script type="text/javascript">
            $(document).ready(function() {
               
                $('#datatable').dataTable();
            } );
        </script>