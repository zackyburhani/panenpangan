fh5co-content-section -->		
<div class="container" style="margin-top: 130px; margin-bottom: 100px">

				<div class="btn-group" role="group" aria-label="Button group with nested dropdown">
				<?php foreach($dataKategori as $data){ ?>
					<!-- edit disini -->
				<a href="<?php blink('C_DaftarBarang/sort/'.$data->id_kategori.''); ?>" class="btn btn-secondary"><?php echo $data->nm_kategori; ?></a> 
				<?php }?> 
				</div>
				<hr>

				<?php if($dataBarang != null) { ?>
					<div class="row text-center">
					<?php foreach($dataBarang as $data){?>
					<div class="col-sm-4">
						<div class="animate-box">
							<div class="thumbnail">
								<img src="<?php blink('assets/img/'.$data->gambar_barang.''); ?>" class="img-rounded" alt="Cinque Terre" style="width:100%; height:250px">
								<div class="caption">
								<h3 align="center"><?php echo $data->nm_brg; ?></h3>
								<p align="center"><?php echo number_format($data->harga); ?> /kg</p>
								<input type="number" name="quantity" min="1" id="<?php echo $data->id_brg; ?>" value="1" class="quantity form-control">
								<hr>
								<p align="center">
								<button class="add_cart btn btn-primary" data-produkid="<?php echo $data->id_brg;?>" data-produknama="<?php echo $data->nm_brg;?>" data-produkharga="<?php echo $data->harga;?>"><span class="glyphicon glyphicon-shopping-cart"></span> Add To Cart</button>
								<a href="#modalform<?php echo $data->id_brg ?>" class="btn btn-primary" data-toggle="modal" role="button">Pesan</a></p>
					 			</div>
							</div>
				    	</div>
					</div>
					<?php echo $this->pagination->create_links(); ?>			
					<?php } ?>
					</div>
<?php } else { ?>
	<div class="animate-box">
		<center>Data Barang Kosong</center>
	</div>
<?php } ?>
				
				</div>
			</div>
		</div>

<!-- END fh5co-services-section -->
<?php foreach($dataBarang as $data){ ?> 
		<!-- modal view Form Pesan -->
				<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" id="modalform<?php echo $data->id_brg ?>" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
								<h3 id="myModalLabel" align="center">Form Pesan Barang</h3>
							</div>
							<div class="modal-body">
								<form method="POST" action="<?php blink('User/pesan/'.$data->id_brg.'/'.$data->harga); ?>" enctype="multipart/form-data">
									 <table class="table table-striped" border="0">
									  <thead>
										<td width="20%" ></td>
									  <td width="10%"  ></td>
									  <td width="60%" ></td>
									</thead>
									<tbody>
									<div class="form-group"><label>ID Pesan</label>
                        <input required class="form-control required text-capitalize" value="<?php echo $id_pesan ?>" readonly data-placement="top" data-trigger="manual" type="text" name="id_pesan">
                      </div>
										<tr>
										  <td>Item</td>
										<td>:</td>
										<td style="text-transform:capitalize;"><?php echo $data->nm_brg; ?></td>
									  </tr>
										 <tr>
										  <td>quantity</td>
										<td>:</td>
										<td style="text-transform:capitalize;"><input type="number" min="1" name="qty" id="qty" value="1" class="quantity form-control"></td>
										 </tr>
											<tr>
										  <td>Price</td>
										  <td>:</td>
										<td style="text-transform:capitalize;"><?php echo $data->harga; ?></td>
									  </tr>
											<tr>
										  <td>Description</td>
										<td>:</td>
										<td style="text-transform:capitalize;"><?php echo $data->deskripsi; ?></td>
									  </tr>
									  </tbody>
									</table>
								
							</div>
							<div class="modal-footer">
							<button type="submit" class="btn btn-success" > Pesan</button>
							<button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
								  <p class="help-block pull-left text-danger hide" id="form-error">&nbsp; The form is not valid. </p>
									</form>
								</div>
						</div>
					</div>
				</div>
				<?php }?>
			<!-- end modal view buku -->
		<!-- end modal view Form Pesan -->

