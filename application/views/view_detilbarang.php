
<?php include"application/views/master/header.php" ?>

<!-- BEGIN CONTAINER -->
<div class="page-container page-container-bg-solid">
	<!-- BEGIN CONTENT -->
 
	<div class="container-fluid container-lf-space page-content">
  <?php foreach($getBarang as $data){?>
    <div class="panel panel-default">
      <div class="panel-body">
        <div class="col-sm-3">
          <div class="thumbnail">
          <?php if($data->id_kategori==$id_kategori){ ?>
             <img src="<?php echo base_url('assets/img/'.$data->gambar_barang.'');?>" >
         <?php } else {
              }?>
               </div>
        </div>
  
        <div class="col-md-4 col-sm-4 col-xs-4">
          <h3><?php echo $data->nm_brg ?></h3><br>
          <p><?php echo $data->harga ?>/kg</p><br>
          <div class="center">
            <div class="form-group">
              <label for="inputState" class="col-form-label">JUMLAH PESAN</label>
                <div class="input-group number-spinner">
                  <span class="input-group-btn">
                    <button class="btn btn-primary" data-dir="dwn" type="button" style="padding-top : 10px; padding-bottom : 10px;"><i class="fa fa-minus"></i></button>
                  </span>
                  <input type="text" name="quantity" class="form-control text-center" style="padding-bottom: 10px;" value="1">
                  <span class="input-group-btn">
                    <button class="btn btn-primary" data-dir="up" type="button" style="padding-top : 10px; padding-bottom : 10px;"><i class="fa fa-plus"></i></button>
                  </span>
                </div>
								<div class="row">
									<p><a href="#" class="btn btn-primary btnTambah" role="button">Tambah Ke Keranjang</a></p>
									<p><a href="#" class="btn btn-primary btnBeli" role="button">Beli Sekarang</a></p>
								</div>
            </div>
          </div>
        </div>
      </div>
			<!-- mulai penjelasan produk -->
			<div class="row">
				<div class="panel-body">
					<div class="col-md-3 col-sm-3 col-xs-3">
						<h3>DESKRIPSI PRODUK</h3>
					</div>
				</div>
			</div>
			<!-- akhir penjelasan produk -->   
     <?php}?>

    </div>
  </div>

</div>

<?php include"application/views/master/footer.php" ?>
