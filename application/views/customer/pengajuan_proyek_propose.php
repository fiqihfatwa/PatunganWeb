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
                                <h4 class="pull-left page-title">Pengajuan Proyek</h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="<?=base_url('customer/home')?>">Home</a></li>
                                </ol>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h3 class="panel-title">Form Pengajuan Project</h3></div>
                                    <div class="panel-body">
                                        <form class="form-horizontal" role="form" method="POST" action="<?=base_url('customer/pengajuanproyek/process_propose')?>" enctype="multipart/form-data">                                    
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Nama Proyek</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" placeholder="Nama Proyek (contoh: Proyek Kayu Manis)" name="proyek_nama">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="example-email">Lokasi</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" placeholder="Lokasi Proyek" name="proyek_lokasi">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Jumlah modal yang dibutuhkan</label>
                                                <div class="col-md-9">
                                                    <input type="number" class="form-control" placeholder="10.000.000" name="proyek_total_dana">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Estimasi Keuntungan</label>
                                                <div class="col-md-9">
                                                    <input type="number" class="form-control" placeholder="2.000.000" name="proyek_estimasi_keuntungan">
                                                </div>
                                            </div>                                    
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Durasi / Periode</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" placeholder="2 bulan" name="proyek_jangka_waktu">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Deskripsi</label>
                                                <div class="col-md-9">
                                                    <textarea class="form-control" rows="5" placeholder="Deskripsi Proyek (ceritakan mengenai proyek yang akan diajukan, jelaskan mengenai alur proyek)" name="proyek_deskripsi"></textarea>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Foto</label>
                                                <div class="col-md-9">
                                                    <input name="foto" type="file" multiple />
                                                </div>
                                            </div> 

                                            <div class="form-group">
                                                <div class="col-lg-offset-2 col-lg-10">
                                                    <button class="btn btn-success waves-effect waves-light" type="submit">Save</button>
                                                    <button class="btn btn-default waves-effect" type="button">Cancel</button>
                                                </div>
                                            </div>
                           
                                        </form>
                                    </div> <!-- panel-body -->
                                </div> <!-- panel -->
                            </div> <!-- col -->
                        </div> <!-- End row -->


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