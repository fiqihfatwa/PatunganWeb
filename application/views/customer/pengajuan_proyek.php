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
                           <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Daftar Pengajuan Proyek</h3>
                                    </div>
                                    <div class="panel-body">   
                                        <a href="<?=base_url('customer/pengajuanproyek/propose');?>"><button type="button" class="btn btn-primary waves-effect waves-light m-b-15"> <i class="fa fa-plus"></i> <span>Buat Pengajuan Baru</span> </button>
                                        <div class="row m-t-5">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <div class="table">
                                                    <table id="datatable" class="table table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th>No</th>
                                                                <th>Nama Proyek</th>
                                                                <th>Lokasi Proyek</th>
                                                                <th>Jumlah Slot</th>
                                                                <th>Total Dana</th>
                                                                <th>Tanggal Pengajuan</th>
                                                                <th>Status</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php $i=1; foreach($database as $data){?>
                                                                <tr>
                                                                    <td><?=$i++?></td>
                                                                    <td><?=$data->proyek_nama?></td>
                                                                    <td><?=$data->proyek_lokasi?></td>
                                                                    <td>10</td>
                                                                    <td><?=$data->proyek_total_dana?></td>
                                                                    <td><?=$data->proyek_insert_date?></td>
                                                                    <td>
                                                                        <?php 
                                                                            if($data->proyek_status == 1){
                                                                                echo "verified";
                                                                            } else {
                                                                                echo "not verified";
                                                                            }
                                                                        ?>
                                                                            
                                                                    </td>
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