<!-- end:header-top -->
	<div id="fh5co-blog-section" class="fh5co-section-gray" style="margin-top: 30px">
		<?php foreach($idpesan as $data): ?>
			<div class="container">
				<div class="row">
					<div class="panel panel-default">
						<div class="panel-heading">	<span class="glyphicon glyphicon-usd"></span> INVOICE
							<?php echo $data->tgl_pesan ?>
						</div>
							<div class="panel-body">
								<table class="table">
									<thead>
										<tr>
											<th></th>
											<th></th>
											<th width="100px"></th>
											<th></th>
											<th></th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td width="10px">Nama </td> 
											<td width="5">:</td>
											<td> <?php echo $data->nm_plg ?></td>
											<td align="right">Total Harga Barang </td>
											<td> &nbsp;: Rp. <?php echo number_format($data->harga_total); ?> </td>
										</tr>
										<tr>
											<td width="10px">Alamat </td> 
											<td width="5">:</td>
											<td> <?php echo $data->alamat ?></td>
											<td align="right">Ongkos Kirim </td>
											<td> &nbsp;: Rp. <?php echo number_format($data->ongkir); ?></td>
										</tr>
										<tr>
											<td width="10px">Nomor Telepon </td> 
											<td width="5">:</td>
											<td> <?php echo $data->no_telp ?></td>
											<?php $total = $data->harga_total+$data->ongkir;?>
											<td align="right">Total Harga </td>
											<td> &nbsp;: Rp. <?php echo number_format($total)?></td>
										</tr>
										<tr>
											<td></td>
											<td width="10px"></td>
											<td width="5"></td>
											<td align="right">Status Bayar</td>
											<td> &nbsp;: <?php echo $data->status_bayar ?></td>
										</tr>
										<tr>
											<td colspan="5" align="center">
												<a href="<?php echo site_url('User/bayar/'.$data->id_pesan) ?>" class="btn btn-sm btn-success glyphicon glyphicon-gift">Bayar</a>
												<a href="<?php echo site_url('Laporan/cetak/'.$data->id_pesan) ?>" class="btn btn-sm btn-info glyphicon glyphicon-save-file ">Cetak</a>
											</td>
										</tr>	
									</tbody>
								</table>
							</div>
			  	    	</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>


