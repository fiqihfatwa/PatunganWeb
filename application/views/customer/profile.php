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
                                <h4 class="pull-left page-title">Profile</h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="<?=base_url('customer/home')?>">Patungan</a></li>
                                    <li><a href="<?=base_url('customer/profile')?>">Profile</a></li>
                                </ol>
                            </div>
                        </div>

                        <div class="row">
                            <!-- Basic example -->
                            <div class="col-md-6 col-md-offset-3">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h3 class="">Profile - <small>Silahkan lengkapi data diri anda</small></h3></div>
                                    <div class="panel-body">
                                        <form role="form" method="POST" action="<?=base_url('customer/profile/update')?>">
                                            <div class="form-group">
                                                <label>Nama Lengkap</label>
                                                <input type="text" class="form-control" value="<?=$database->user_name?>" name="user_name" required>
                                            </div>
                                            <div class="form-group">
                                                <label>No.Telp</label>
                                                <input type="text" class="form-control" value="<?=$database->user_telephone?>" name="user_telephone">
                                            </div>
                                            <div class="form-group">
                                                <label>Alamat</label>
                                                <input type="text" class="form-control" placeholder="Alamat" value="<?=$database->user_alamat?>" name="user_alamat">
                                            </div>
                                            <div class="form-group">
                                                <label>No. KTP</label>
                                                <input type="text" class="form-control" placeholder="Nomor Kartu Tanda Penduduk" value="<?=$database->user_num_ktp?>" name="user_num_ktp">
                                            </div>
                                            <div class="form-group">
                                                <label>Nama Bank</label>
                                                <input type="text" class="form-control" placeholder="Nama Bank" value="<?=$database->user_name_bank?>" name="user_name_bank">
                                            </div>
                                            <div class="form-group">
                                                <label>Nama Pemilik Rekening</label>
                                                <input type="text" class="form-control" placeholder="Nama Pemilik Rekening" value="<?=$database->user_name_rekening_owner?>" name="user_name_rekening_owner">
                                            </div>
                                            <div class="form-group">
                                                <label>Nomor Rekening</label>
                                                <input type="text" class="form-control" placeholder="Nomor Rekening" value="<?=$database->user_num_rekening?>" name="user_num_rekening">
                                            </div>
                                            <button type="submit" class="btn btn-purple waves-effect waves-light pull-right">Submit</button>
                                        </form>
                                    </div><!-- panel-body -->
                                </div> <!-- panel -->
                            </div> <!-- col-->
                        </div>


                    </div> <!-- container -->
                               
                </div> <!-- content -->

                <footer class="footer text-right">
                    2016 © Moltran.
                </footer>

            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->