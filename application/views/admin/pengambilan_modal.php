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
												<h4 class="pull-left page-title">Pengambilan Modal</h4>
												<ol class="breadcrumb pull-right">
														<li><a href="<?=base_url('admin/home')?>">Home</a></li>
												</ol>
										</div>
								</div>

								<div class="row">
									 <div class="col-md-12">
												<div class="panel panel-default">
														<div class="panel-heading">
																<h3 class="panel-title">Daftar Pengambilan Modal</h3>
														</div>
														<div class="panel-body">

																<div class="row m-t-5">
																		<div class="col-md-12 col-sm-12 col-xs-12">
																				<div class="table">
																						<table id="datatable" class="table table-hover">
																								<thead>
																										<tr>
																												<th>No</th>
																												<th>Nama Proyek</th>
																												<th>Nama User</th>
																												<th>Detail</th>
																												<th>Tanggal Pengajuan</th>
																												<th>Total Dana</th>
																												
																												<th>Konfirmasi</th>
																										</tr>
																								</thead>
																								<tbody>
																			<?php $i=1; foreach($modal as$mod){ ?>
																				<tr>
																					<td><?=$i++?></td>
																					<td><?=$mod['proyek_nama']?></td>
																					<td><?=$mod['user_name']?></td>
																					<td> <button class="btn btn-primary waves-effect waves-light detail" data-toggle="modal" data-target="#myModal">
																					<input type="hidden" class="id_p" value="<?=$mod['pengambilan_id']?>">
																					Lihat</button>
</td>
																					<td><?=$mod['pengambilan_date']?></td>

																					<td></td>
																					<td>
																						<?php
														$ya = $tidak= null;
														if($mod['pengambilan_konfirmasi']==1)
															$ya = 'checked';
														else
															$tidak = 'checked';
													?>
													<input type="radio" name="<?=$mod['pengambilan_id']?>"  class="konfirmasi" value="1" <?=$ya?>>Ya &nbsp
													<input type="radio" name="<?=$mod['pengambilan_id']?>" class="konfirmasi" value="0" <?=$tidak?>>Tidak
													<input type="hidden" class='id_user' value="<?=$mod['pengambilan_id']?>">

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

				<footer class="footer text-right">
						2016 © Moltran.
				</footer>

		</div>
		<!-- ============================================================== -->
		<!-- End Right content here -->
		<!-- ============================================================== -->

                        <!-- Bootstrap Modals -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading"> 
                                        <h3 class="panel-title">Detail Pengambilan </h3> 
                                    </div> 
                                    <div class="panel-body"> 
                                        <!-- sample modal content -->
                                        <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        <h4 class="modal-title" id="myModalLabel">Detail</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                       
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary waves-effect waves-light">Save changes</button>
                                                    </div>
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->

                                        <!--  Modal content for the above example -->
                                        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        <h4 class="modal-title" id="myLargeModalLabel">Large modal</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                      ...
                                                    </div>
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->

                                        <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="display: none;">
                                            <div class="modal-dialog modal-sm">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        <h4 class="modal-title" id="mySmallModalLabel">Small modal</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                      ...
                                                    </div>
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->

                                        <!-- Button trigger modal -->
                                        <button class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#myModal">Standard Modal</button>
                                        <!-- Large modal -->
                                        <button class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-lg">Large modal</button>
                                        <!-- Small modal -->
                                        <button class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-sm">Small modal</button>

                                    </div>
                                </div>
                            </div>

                        </div> <!-- End of row -->



<script src="<?=base_url('assets/moltran/assets/datatables/jquery.dataTables.min.js')?>"></script>
<script src="<?=base_url('assets/moltran/assets/datatables/dataTables.bootstrap.js')?>"></script>


<script src="<?=base_url('assets/moltran/assets/modal-effect/js/classie.js')?>"></script>
        <script src="<?=base_url('assets/moltran/assets/modal-effect/js/modalEffects.js')?>"></script>

         <script src="<?=base_url('assets/moltran/js/jquery.app.js')?>"></script>




<script type="text/javascript">
		$(document).ready(function() {
				$('#datatable').dataTable();

				$('.detail').on('click',function(){
					var id = $(this).find('.id_p').val()
					
					$.post("<?=base_url('admin/pengambilan_modal/detail/')?>"+id,function(data){
						$('.modal-body').empty();
						for(i=0;i<data.length;i++)
							$('.modal-body').append("<p>"+data[i].rincian_pengambilan_deskripsi+" "+data[i].rincian_pengambilan_nominal+"</p>");
					});
				})
		} );
</script>
