
		<!-- end:header-top -->
	<div id="fh5co-blog-section" class="fh5co-section-gray" style="margin-top: 30px">
		<?php foreach($idpesan as $data): ?>
			<div class="container">
				<div class="row">
						<div class="panel panel-default">
							<div class="panel-heading">	<span class="glyphicon glyphicon-usd"> INVOICE</span>
							<?php echo $data->tgl_pesan ?>
							</div>
								<div class="panel-body">
									<table class="table">
										<tbody>
											<tr class="success">
											<td height="200px"><br>Alamat : <br/> jakarta selatan</td>
 											<td wiheight="200px"><center><table>
												<tr>
													<br><br>
													<td>Total Harga Barang </td>
													<td> &nbsp;: Rp. <?php echo number_format($data->harga_total); ?> </td>
												</tr>
												<tr>
													<td>Ongkos Kirim </td>
													<td> &nbsp;: Rp. <?php echo number_format($data->ongkir); ?></td>
												</tr>
												<?php $total = $data->harga_total+$data->ongkir;?>
												<tr>
													<td>Total Harga </td>
													<td> &nbsp;: Rp. <?php echo number_format($total)?></td>
												</tr>
													<td><br><center><a href="<?php blink('User/bayar');?>" class="btn btn-sm btn-success glyphicon glyphicon-gift ">Bayar</a>
													<a href="#" class="btn btn-sm btn-info glyphicon glyphicon-save-file ">Cetak</a>
													</center></td>
											</table>
										</center></td>
											</tr>
										</tbody>
									</table>
						</div>
			  	    </div>
				</div>
			</div>
<?php endforeach; ?>
		</div>
