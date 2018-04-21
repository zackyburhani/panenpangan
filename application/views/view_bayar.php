<?php include"application/views/master/header.php" ?>
<!-- BEGIN CONTAINER -->
<div class="page-container page-container-bg-solid">
	<!-- BEGIN CONTENT -->
	<div class="container-fluid container-lf-space page-content">
		<div class="panel panel-info">
			<div class="panel-heading"><span class="fa fa-user" style="font-size:12px; color:Green"></span> BUDI LUHUR</div>
			<div class="card card-body">
      	<div class="panel-body">
        	<div class="col-sm-3">
							<h3>ALAMAT</h3><br>
							<p>get alamat here</p><br>
							<!-- <textarea name="alamat" rows="4" cols="80" value=""><?php echo $data->alamat;?></textarea> -->
        	</div>

        	<div class="col-md-4 col-sm-4 col-xs-4">
        		<label for="total_harga" style="text-align: center;">TOTAL HARGA BARANG</label>
						<input type="text" name="total_harga" value="" style=""><br>
						<label for="ongkos">ONGKOS KIRIM</label>
						<input type="text" name="ongkos" value="" style=""><br>
						<hr style="height:1px;border:none;color:#333;background-color:#333;">
						<label for="ongkos">TOTAL BELANJA</label>
						<input type="text" name="total_belanja" value="" style=""><br>
						<p><a href="#" class="btn btn-primary btnTambah" role="button">BAYAR</a></p>
        	</div>
      	</div>
			</div>
    </div>
  </div>

</div>
<?php include"application/views/master/footer.php" ?>
