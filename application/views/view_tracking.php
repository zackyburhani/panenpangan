<div class="page-container page-container-bg-solid">
	<div class="container container-lf-space page-content" style="margin-top : 200px; margin-bottom: 200px">
		<div class="margin-bottom-10">
			<div class="clearfix"></div> 
          		<div class="panel panel-success	">
            		<div class="panel-heading"><span class="glyphicon glyphicon-map-marker"></span> Tracking Kiriman</div>
              			<div class="card card-body">
                			<div class="panel-body">
                  				<form  action="<?php echo site_url('Tracking/cari')?>" method="POST">
                    				<div class="form-group">
                      					<label class="col-md-2 control-label">No. Transaksi</label>
                        					<div class="col-md-6 margin-bottom-10 input-group-sm" style="margin-bottom: 30px">
                          						<input name="no_transaksi" type="text" placeholder="Nomor Transaksi" class="form-control">
                        					</div>
											<div class="col-md-4">
                          						<button type="submit" class=" btn btn-sm btn-success" name="button"><span class="glyphicon glyphicon-search"></span> Cari</button>
                        					</div>
                      				</div>
                      			</form>
								<div class="container-fluid">
									<table class="table table-bordered">
										<thead>
											<tr>
												<th><center>No. Transaksi</center></th>
												<th><center>Nama Barang</center></th>
												<th><center>Tanggal Kirim</center></th>
												<th><center>Status</center></th>
												<th><center>Terima Barang</center></th>
											</tr>
										</thead>
										<tbody id="show_data">
											<?php if(isset($id_transaksi)) { ?>
												<?php foreach($id_transaksi as $data) { ?>
													<tr>
														<td><center><?php echo $data->id_pesan ?></center></td>
														<td><center><?php echo $data->nm_brg ?></center></td>
														<th><center><?php echo $data->tgl_pesan ?></center></th>
														<td><center><i class="badge badge-danger"><?php echo $data->status ?></i></center></td>
														<td align="center"><a href="#modalKonfirmasiPesan<?php echo $data->id_pesan?>" class="btn btn-sm btn-success btn-circle" data-toggle="modal"><span class="glyphicon glyphicon-ok"></span> </a></td>
													</tr>
												<?php } ?>
											<?php } ?>
										</tbody>
									</table>
								</div>
                	</div>
              </div>
          </div>
      </div> <!-- END WIDGET GRADIENT -->
  </div> <!-- END CONTENT -->
</div> <!-- END CONTAINER -->

<?php if (isset($id_transaksi)){
	foreach($id_transaksi as $data){ ?>
		<div class="modal fade" id="modalKonfirmasiPesan<?php echo $data->id_pesan?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog modal-sm" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-ok fa-fw"></i>Konfirmasi Pesanan</h4>
		      </div>
		      <div class='modal-body'>Anda Yakin Sudah Terima Barang <b><?php echo $data->id_pesan ?></b> dengan nama <i><?php echo $data->nm_brg ?></i> ?
		      </div>
		      <div class='modal-footer'>
		        <form class="" action="" method="post">
		          <input type='hidden' id="status_konfirmasi" value='<?php echo $data->id_pesan?>' name='id_pesan'>
		          <button type='button' class='btn btn-sm btn-default' id="btn_update" data-dismiss='modal'><i class="fa fa-close"></i> Batal</button>
		          <button class='btn btn-sm btn-success' type='submit' name='konfirmasi'><span class="glyphicon glyphicon-ok"></span>Konfirmasi</button>
		        </form>
		      </div>
		    </div>
		  </div>
		</div>
  <?php }
  }
  ?>