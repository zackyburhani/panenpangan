
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
									<hr>
					        <p align="center"><a href="#" class="btn btn-primary" role="button">Beli Sekarang</a></p>
					      </div>
					    </div>
					  </div>
				<?php endforeach; ?>
				
				</div>
			</div>
		</div>


