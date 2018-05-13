
		<!-- CAROUSEL -->
			<div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-top: 85px">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner">
					<div class="item active">
						<img alt="" src="<?php blink('assets/img/img/gambar1.jpg')?>"/>
					</div>

					<div class="item">
						<img alt="" src="<?php blink('assets/img/img/gambar2.jpg')?>"/>
					</div>

					<div class="item">
						<img alt="" src="<?php blink('assets/img/img/gambar3.jpg')?>"/>
					</div>
				</div>

				<!-- Left and right controls -->
				<a class="left carousel-control" href="#myCarousel" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#myCarousel" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
			<!--END CAROUSEL -->
		<br><br>

		<div id="fh5co-services-section">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3>KATEGORI</h3>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<?php foreach($dataKategori as $data){?>
					<div class="col-md-3 animate-box">
						<div class="panel panel-success">
							<div class="panel-heading"><center><?php echo $data->nm_kategori; ?></center></div>
					  			<div class="panel-body">
									<img src="<?php blink('assets/img/'.$data->gambar_kategori.''); ?>" class="img-rounded" alt="Cinque Terre" style="height: 150px;width: 235px; margin-bottom: 10px"><hr>
									<a href="<?php blink('C_DaftarBarang/sort/'.$data->id_kategori.''); ?>" class="btn btn-sm btn-primary btn-lg btn-block">-Pilih-</a>
								</div>
					  	</div>
					</div>
				<?php	}?>
				
				</div>
			</div>
		</div>

		<!-- END What we do -->
		<div id="fh5co-blog-section" class="fh5co-section-gray">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3>BEST SELLER</h3>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row row-bottom-padded-md fh5co-blog animate-box">
				<?php foreach($best as $data):?>
					  <div class="col-sm-4 fh5co-blog animate-box">
					    <div class="thumbnail">
								<img src="<?php blink('assets/img/'.$data->gambar_barang.''); ?>" class="img-rounded" alt="Cinque Terre" style="width:100%; height:250px">
								<div class="caption">
					        <h3 align="center"><center><?php echo $data->nm_brg; ?></center></h3>
					        <p align="center"><center><?php echo $data->harga; ?></center></p>
							<input type="number" name="quantity" id="<?php echo $data->id_brg; ?>" value="1" class="quantity form-control">
								<hr>
								<p align="center">
								<button class="add_cart btn btn-primary" data-produkid="<?php echo $data->id_brg;?>" data-produknama="<?php echo $data->nm_brg;?>" data-produkharga="<?php echo $data->harga;?>"><span class="glyphicon glyphicon-shopping-cart"></span> Add To Cart</button>
								<a href="#modalform<?php echo $data->id_brg ?>" class="btn btn-primary" data-toggle="modal" role="button">Pesan</a></p>
					 			</div>
					    </div>
					  </div>
				<?php endforeach; ?>
				</div>
			</div>
		</div>


<?php foreach($best as $data){ ?> 
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
										<td style="text-transform:capitalize;"><input type="number" name="qty" id="qty" value="1" class="quantity form-control"></td>
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


<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
        	<?php $no = rand(1,5) ?>
          <center><img src="<?php echo base_url('assets/img/iklan/'.$no.'.jpg');?>" width="800"></center>
        </div>
        <div class="modal-footer">
        </div>
      </div>
      
    </div>
  </div>





