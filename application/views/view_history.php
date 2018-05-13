<div>
  <button class="btn btn-success">Barang Lunas</button>
</div> 

<div class="page-container page-container-bg-solid">
	<div class="container container-lf-space page-content" style="margin-top : 150px; margin-bottom: 200px">
		<div class="margin-bottom-10">
			<div class="clearfix"></div>
          		<div class="panel panel-success	">
            		<div class="panel-heading"><span class="glyphicon glyphicon-file"></span> History Pembayaran</div>
              			<div class="card card-body">
                			<div class="panel-body">
								<div class="container-fluid">
									<table class="table table-bordered" id="tableHistory">
											<thead>
												<tr>
													<th><center>No. Transaksi</center></th>
													<th><center>Tanggal Pesan</center></th>
													<th><center>Status</center></th>
													<th><center>Action</center></th>
												</tr>
											</thead>
											<tbody id="show_data">
												<?php if(isset($history)) { ?>
													<?php foreach($history as $data) { ?>
														<tr>
															<td><center><?php echo $data->id_pesan ?></center></td>
															<td><center><?php echo $data->tgl_pesan ?></center></td>
															<td><center><?php echo $data->status_bayar ?></center></td>
															<td align="center">
                                <a href="#detilModal<?php echo $data->id_pesan ?>" data-toggle="modal" class="btn btn-sm btn-info btn-circle"><span class="glyphicon glyphicon-eye-open"></span></a>
                                <a href="<?php echo site_url('Laporan/cetak/'.$data->id_pesan) ?>" class="btn btn-sm btn-danger"><span class="glyphicon glyphicon-print"></span></a>
                              </td>
														</tr>
												<?php } ?>
											<?php } else { ?>
												<tr>
													<td><i><center>Data Tidak Ditemukan</center></i></td>
												</tr>
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


 <!-- detil modal Barang -->
              <?php foreach($history as $data){?>
               <div class="modal fade" tabindex="-1" id="detilModal<?php echo $data->id_pesan ?>" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                 <div class="modal-dialog">
                   <div class="modal-content">
                     <div class="modal-header">
                       <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                       <h3 id="myModalLabel"><i class="ion ion-cube"></i> Detil Barang</h3>
                     </div>
                     <div class="modal-body">
                       <form method="POST" action="" enctype="multipart/form-data">
                         <table class="table table-responsive">
                           <tbody>
                            <tr>
                               <td>ID Barang</td>
                               <td>:</td>
                               <td style="text-transform:capitalize;"><?php echo $data->id_brg ?></td>
                             </tr>
                             <tr>
                               <td>Nama Barang</td>
                               <td>:</td>
                               <td style="text-transform:capitalize;"><?php echo $data->nm_brg ?></td>
                             </tr>
                             <tr>
                               <td>Tanggal Pesan</td>
                               <td>:</td>
                               <td style="text-transform:capitalize;"><?php echo $data->tgl_pesan ?></td>
                             </tr>
                             <tr>
                               <td>qty</td>
                               <td>:</td>
                               <td style="text-transform:capitalize;"><?php echo $data->qty ?></td>
                             </tr>
                             <tr>
                               <td>Harga</td>
                               <td>:</td>
                               <td style="text-transform:capitalize;"><?php echo  $harga = $data->harga*$data->qty.".00" ?></td>
                             </tr>
                             <tr>
                               <td>Ongos Kirim</td>
                               <td>:</td>
                               <td style="text-transform:capitalize;"><?php echo $data->ongkir ?></td>
                             </tr>
                             <tr>
                               <td>Harga Total</td>
                               <td>:</td>
                               <td style="text-transform:capitalize;"><?php echo $data->harga_total+$data->ongkir.".00" ?></td>
                             </tr>
                           </tbody>
                         </table>
                       </form>
                     </div>
                   </div>
                 </div>
               </div>
               <!-- /.Detil modal Barang -->
               <?php } ?>