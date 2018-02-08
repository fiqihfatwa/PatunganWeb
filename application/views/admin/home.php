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
												<h4 class="pull-left page-title">Verifikasi Pengajuan Proyek</h4>
												<ol class="breadcrumb pull-right">
														<li><a href="<?=base_url('admin/home')?>">Home</a></li>
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

																<div class="row m-t-5">
																		<div class="col-md-12 col-sm-12 col-xs-12">
																				<div class="table">
																						<table id="datatable" class="table table-hover">
																								<thead>
																										<tr>
																												<th>No</th>
																												<th>Nama Proyek</th>
																												<th>Nama User</th>
																												<th>Tanggal Pengajuan</th>
																												<th>Status</th>
																												<th>Detail</th>
																										</tr>
																								</thead>
																								<tbody>
																									<?php $i=1; foreach($proyek as $pr){ ?>

																										<tr>
																											<td><?=$i++?></td>
																											<td><?=$pr['proyek_nama']?></td>
																											<td><?=$pr['user_name']?></td>
																											<td><?=$pr['proyek_insert_date']?></td>
																											<td>
																												<?php if($pr['proyek_status'] == 1){ ?>
																												Diterima
																											<?php }elseif($pr['proyek_status']==0){ ?>
																												Belum Diverifikasi

																											<?php }else{ ?>
																												Ditolak
																												<?php } ?>
																											</td>
																											<td>
										<button class="btn btn-default" onclick="openInNewTab('<?=base_url('admin/proyek?id='.$pr['proyek_id'])?>')">Lihat</button>
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
		} );

		function openInNewTab(url) {
		  var win = window.open(url, '_blank');
		  win.focus();
		}
</script>
