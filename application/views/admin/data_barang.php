<?php include"application/views/admin/template/header.php" ?>
<?php include"application/views/admin/template/sidebar.php" ?>

<section class="content-header">
  <h1>
    Dashboard
    <small>Halaman Barang</small>
  </h1>
  </section>

<!-- Main content -->
<section class="content">
  <div class="panel panel-default">
    <div class="panel-body"><h4><i class="ion ion-cube"></i> Data Barang</h4></div>
  </div>

  <div class="row">
    <div class="col-lg-12">
      <?php
        if (isset($_GET['tmb'])) {
        if($_GET['tmb']=="success") {
      ?>
    <div class="alert alert-success" id="success-alert-input">
      Data berhasil disimpan.
    </div>
      <?php }else{ ?>
    <div class="alert alert-danger" id="fail-alert-input">
      Data gagal disimpan.
    </div>
    <?php }
            }
      else if (isset($_GET['ubh'])) {
      if($_GET['ubh']=="success") {
    ?>
    <div class="alert alert-success" id="success-alert-edit">
      Data berhasil diedit.
    </div>
    <?php }else{ ?>
      <div class="alert alert-danger" id="fail-alert-edit">
        Data gagal diedit.
      </div>
      <?php }
        }
        else if (isset($_GET['hps'])) {
        if($_GET['hps']=="success") {
      ?>
      <div class="alert alert-success" id="success-alert-delete">
        Data berhasil dihapus.
      </div>
      <?php }else{ ?>
      <div class="alert alert-danger" id="fail-alert-delete">
        Data gagal dihapus.
      </div>
      <?php }
        }
        ?>
      </div>
    </div>

<div class="row">
  <div class="col-lg-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        <button class="btn btn-default" data-toggle="modal" href="#" data-target="#entryBarangModal"><i class="fa fa-plus"></i></button> Tambah Data Barang
      </div>
      <!-- /.panel-heading -->
      <div class="panel-body">
        <table style="table-layout:fixed" class="table table-striped table-bordered table-hover" id="datatablebarang">
          <thead>
            <tr>
              <th>ID Barang</th>
              <th>Nama Barang</th>
              <th>Stok</th>
              <th>Harga</th>
							<th>Rating</th>
              <th>Aksi</th>
            </tr>
              </thead>
              <tbody>
                <?php foreach($dataBarang as $data){?>
                <tr>
                  <td><?php echo $data->id_barang;?></td>
                  <td><?php echo $data->nm_barang;?></td>
                  <td><?php echo $data->stok;?></td>
                  <td><?php echo $data->harga;?></td>
                  <td><?php echo $data->rating;?></td>
                  <?php echo "<td><a href='#myModal' class='btn btn-default btn-small' id='custId' data-toggle='modal' data-id=".$data->id_petani.">Edit</a></td>"; ?>
                  <!-- <td><a class="btn btn-warning btn-circle" id="editBarang" data-id='$data->id_barang' onclick="edit(<?php echo $data->id_petani;?>)" data-toggle="modal"><span class="glyphicon glyphicon-edit"></span> </a></td> -->
                  <td><a href="<?php blink('Barang/hapus/'.$data->id_barang)?>" onclick="return konfirmasi()" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a></td>
                </tr>
                <?php } ?>
              </tbody>
            </table>


              <!-- entry modal Barang -->
              <div class="modal fade" id="entryBarangModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" id="myModalLabel"><div class="icon"><i class="ion ion-cube"></i> Tambah Data Barang</div></h4>
                    </div>
                    <form method="POST" action="<?php echo site_url('Barang/tambah')?>" enctype="multipart/form-data">
                      <div class="modal-body">

                        <div class="form-group"><label>ID Barang</label>
                          <input required class="form-control required text-capitalize" placeholder="" data-placement="top" data-trigger="manual" type="text" name="id_barang">
                        </div>

												<div class="form-group"><label>Kategori</label>
			                    <div class="custom-select">
			                        <select class="form-control" name="kategori">
			                            <option value="beras">Beras</option>
																	<option value="sayur">Sayuran</option>
																	<option value="Buah">Buah-buahan</option>
			                        </select>
			                    </div>
			                  </div>

                        <div class="form-group"><label>Nama Barang</label>
                          <input required class="form-control required text-capitalize" placeholder="Input Nama Barang" data-placement="top" data-trigger="manual" type="text" name="nm_barang">
                        </div>

												<div class="form-group">
													<label>Stok</label>
													<div class="input-group input-group">
												  	<span class="input-group-addon" id="sizing-addon1">Kg.</span>
												  	<input type="text" class="form-control" aria-describedby="sizing-addon1" placeholder="Stok" data-placement="top" data-trigger="manual" type="text" name="stok">
													</div>
												</div>

												<div class="form-group">
													<label>Harga</label>
													<div class="input-group input-group">
												  	<span class="input-group-addon" id="sizing-addon1">Rp.</span>
												  	<input type="text" class="form-control" aria-describedby="sizing-addon1" placeholder="Harga" data-placement="top" data-trigger="manual" type="text" name="harga">
													</div>
												</div>

												<div class="form-group"><label>Ongkos Kirim</label>
													<input required class="form-control required text-capitalize" placeholder="Ongkos Kirim" data-placement="top" data-trigger="manual" type="text" name="ongkir">
												</div>

												<div class="form-group">
													<label>Gambar</label>
													<input required data-placement="top" data-trigger="manual" type="file" name="gambar">
												</div>

												<div class="form-group"><label>Rating</label>
			                    <div class="custom-select my-1 mr-sm-2">
			                        <select class="form-control" name="rating">
																	<option value="1">1</option>
																	<option value="2">2</option>
																	<option value="3">3</option>
																	<option value="4">4</option>
																	<option value="5">5</option>
			                        </select>
			                    </div>
			                  </div>

                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <p class="help-block pull-left text-danger hide" id="form-error">&nbsp; The form is not valid. </p>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <!-- /.entry Barang modal -->

              <!--MODAL HAPUS-->
              <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">'
                <div class="modal-dialog modal-sm" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times</span></button>
                        <h4 class="modal-title" id="myModalLabel">Confirm Delete</h4>
                    </div>

                    <div class='modal-body'>Kamu yakin ingin menghapus?</div>
                      <div class='modal-footer'>
                        <input type='hidden' value='' name='nip'>
                          <button type='button' class='btn btn-default' data-dismiss='modal'>Batal</button>
                          <button class='btn btn-danger' aria-label='Delete'type='submit' name='hapus'></span>Hapus</button>
                      </div>
                    </div>
                 </form>
                </tr>
              </tbody>
            </table>
          </div>
        <!-- /.panel-body -->
        </div>
        <!--END MODAL HAPUS-->


  <!-- detil modal Barang -->
   <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
     <div class="modal-dialog">
       <div class="modal-content">
         <div class="modal-header">
           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
           <h3 id="myModalLabel">Detil Barang</h3>
         </div>
         <div class="modal-body">
           <form method="POST" action="" enctype="multipart/form-data">
             <table class="table table-responsive" border="0" style="margin-top: -40px;">
               <thead>
                 <td width="25%" ></td>
                 <td width="5%"  ></td>
                 <td width="50%" ></td>
                 <td width="20%" ></td>
								 <td width="50%" ></td>
                 <td width="20%" ></td>
								 <td width="50%" ></td>
               </thead>
               <tbody>
                 <tr>
                   <td>ID Kategori</td>
                   <td>:</td>
                   <td style="text-transform:capitalize;"></td>
                 </tr>
                 <tr>
                   <td>ID Barang</td>
                   <td>:</td>
                   <td></td>
                   <td rowspan="12"><img  src="" alt="foto-guru" width="150" height="150" onmousedown="return false" oncontexmenu="return false" onselectstart="return false"/></td>
                 </tr>
                 <tr>
                   <td>Nama Barang</td>
                   <td>:</td>
                   <td style="text-transform:capitalize;"></td>
                 </tr>
                 <tr>
                   <td>Stok</td>
                   <td>:</td>
                   <td style="text-transform:capitalize;"></td>
                 </tr>
                 <tr>
                   <td>Harga</td>
                   <td>:</td>
                   <td style="text-transform:capitalize;"></td>
                 </tr>
                 <tr>
                   <td>Ongos Kirim</td>
                   <td>:</td>
                   <td style="text-transform:capitalize;"></td>
                 </tr>
                 <tr>
                   <td>Rating</td>
                   <td>:</td>
                   <td style="text-transform:capitalize;"></td>
                 </tr>
               </tbody>
             </table>
           </form>
         </div>
       </div>
     </div>
   </div>
   <!-- /.Detil modal Barang -->

   <!--UPDATE Barang-->
	 <div class="modal fade" id="updateBarangModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		 <div class="modal-dialog">
			 <div class="modal-content">
				 <div class="modal-header">
					 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					 <h4 class="modal-title" id="myModalLabel"><div class="icon"><i class="ion ion-cube"></i> Update Data Barang</div></h4>
				 </div>
				 <form method="POST" action="" enctype="multipart/form-data">
					 <div class="modal-body">

						 <div class="form-group"><label>ID Kategori</label>
							 <div class="custom-select">
									 <select class="form-control" name="kategori">
											 <option value="beras">Beras</option>
											 <option value="sayur">Sayuran</option>
											 <option value="Buah">Buah-buahan</option>
									 </select>
							 </div>
						 </div>

						 <div class="form-group"><label>Nama Barang</label>
							 <input required class="form-control required text-capitalize" placeholder="Input Nama Barang" data-placement="top" data-trigger="manual" type="text" name="nm_Barang">
						 </div>

						 <div class="form-group">
							 <label>Stok</label>
							 <div class="input-group input-group">
								 <span class="input-group-addon" id="sizing-addon1">Kg.</span>
								 <input type="text" class="form-control" aria-describedby="sizing-addon1" placeholder="Stok" data-placement="top" data-trigger="manual" type="text" name="stok">
							 </div>
						 </div>

						 <div class="form-group">
							 <label>Harga</label>
							 <div class="input-group input-group">
								 <span class="input-group-addon" id="sizing-addon1">Rp.</span>
								 <input type="text" class="form-control" aria-describedby="sizing-addon1" placeholder="Harga" data-placement="top" data-trigger="manual" type="text" name="harga">
							 </div>
						 </div>

						 <div class="form-group"><label>Ongkos Kirim</label>
							 <input required class="form-control required text-capitalize" placeholder="Ongkos Kirim" data-placement="top" data-trigger="manual" type="text" name="ongkir">
						 </div>

						 <div class="form-group">
							 <label>Gambar</label>
							 <input required data-placement="top" data-trigger="manual" type="file" name="gambar">
						 </div>

						 <div class="form-group"><label>Rating</label>
							 <div class="custom-select my-1 mr-sm-2">
									 <select class="form-control" name="kategori">
											 <option value="null">-</option>
											 <option value="1">1</option>
											 <option value="2">2</option>
											 <option value="3">3</option>
											 <option value="4">4</option>
											 <option value="5">5</option>
									 </select>
							 </div>
						 </div>

					 </div>
					 <div class="modal-footer">
						 <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						 <button type="button" class="btn btn-primary">Submit</button>
						 <p class="help-block pull-left text-danger hide" id="form-error">&nbsp; The form is not valid. </p>
					 </div>
				 </form>
			 </div>
		 </div>
	 </div>
	 <!-- /.Update Barang modal -->


      <!-- /.panel body -->
      </div>
    <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
    </div>

  </section>
  <!-- right col -->

<?php include"application/views/admin/template/footer.php" ?>
