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
												<h4 class="pull-left page-title">Pembayaran Modal</h4>
												<ol class="breadcrumb pull-right">
														<li><a href="<?=base_url('admin/home')?>">Home</a></li>
												</ol>
										</div>
								</div>

								<div class="row">
									 <div class="col-md-12">
												<div class="panel panel-default">
														<div class="panel-heading">
																<h3 class="panel-title">Daftar Pembayaran Modal</h3>
														</div>
														<div class="panel-body">

																<div class="row m-t-5">
																		<div class="col-md-12 col-sm-12 col-xs-12">
																				<div class="table">
																						<table id="datatable" class="table table-hover">
																								<thead>
																										<tr>
																												<th>No</th>
																												<th>ID Slot</th>
																												<th>Nama Proyek</th>
																												<th>Pengambil Slot</th>

																												<th>Estimasi Pembayaran</th>
																												<th>Bukti Pembayaran</th>	
																												<th>Konfirmasi</th>
																										</tr>
																								</thead>
																								<tbody>
										<?php $i=1; foreach($pembayaran as $bayar){ ?>
											<tr>
												<td><?=$i++?></td>
												<td><?=$bayar['slot_id']?></td>
												<td><?=$bayar['proyek_nama']?></td>
												<td><?=$bayar['user_name']?></td>
												<td><?=$bayar['slot_estimasi_pembayaran']?></td>

												<td>
													<?php if($bayar['slot_bukti_pembayaran'] != '') { ?>
													<a href="<?=base_url('assets/images/$bayar[slot_bukti_bayar]')?>">Lihat</a>
													<?php } ?>
												</td>
												<td>
													<?php
														$ya = $tidak= null;
														if($bayar['slot_status']==1)
															$ya = 'checked';
														else
															$tidak = 'checked';
													?>
													<input type="radio" name="<?=$bayar['slot_id']?>"  class="konfirmasi" value="1" <?=$ya?>>Ya &nbsp
													<input type="radio" name="<?=$bayar['slot_id']?>" class="konfirmasi" value="0" <?=$tidak?>>Tidak
													<input type="hidden" class='id_user' value="<?=$bayar['slot_id']?>">
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




<script src="<?=base_url('assets/moltran/assets/datatables/jquery.dataTables.min.js')?>"></script>
<script src="<?=base_url('assets/moltran/assets/datatables/dataTables.bootstrap.js')?>"></script>


<script type="text/javascript">
		$(document).ready(function() {
				$('#datatable').dataTable();


				$('.konfirmasi').on('change',function(){
					var id_user = $(this).siblings('.id_user').val();
					var status = $(this).val();
					$.post('pembayaran_modal/ubah_konfirmasi/',{id_user:id_user,status:status});
				});
		} );
</script>
