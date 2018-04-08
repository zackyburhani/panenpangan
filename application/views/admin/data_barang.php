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

<?php if($this->session->flashdata('pesan') == TRUE ) { ?>
<div class="row">
  <div class="col-md-12">
  <div class="alert alert-success fade in" id="alert">
    <p><center><b><?php echo $this->session->flashdata('pesan') ?></b></center></p>
  </div>
</div>
</div>
<?php } ?>

<?php if($this->session->flashdata('pesanGagal') == TRUE ) { ?>
<div class="row">
  <div class="col-md-12">
  <div class="alert alert-danger" id="alert">
    <p><center><b><?php echo $this->session->flashdata('pesanGagal') ?></b></center></p>
  </div>
</div>
</div>
<?php } ?>

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
              <th width="40px" align="center;">Detil</th>
              <th width="40px" align="center;">Edit</th>
              <th width="40px" align="center;"  >Hapus</th>
            </tr>
              </thead>
              <tbody>
                <?php foreach($dataBarang as $data){?>
                <tr>
                  <td><?php echo $data->id_brg;?></td>
                  <td><?php echo $data->nm_brg;?></td>
                  <td><?php echo $data->stok;?></td>
                  <td><?php echo $data->harga;?></td>
                  <td><?php echo $data->rating;?></td>
                  <td><a href="#detilBarangModal<?php echo $data->id_brg ?>" class="btn btn-info btn-circle" id="detilbarang" data-toggle="modal"><span class="glyphicon glyphicon-eye-open"></span> </a></td>

                  <td align="center;"><a href="#modalEditBarang<?php echo $data->id_brg?>"  class="btn btn-warning btn-circle" data-toggle="modal"><span class="glyphicon glyphicon-edit"></span> </a></td>

                  <td align="center;"><a href="#modalHapusBarang<?php echo $data->id_brg?>"  class="btn btn-danger btn-circle" data-toggle="modal"><span class="glyphicon glyphicon-trash"></span> </a></td>

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
                    <form method="POST" action="<?php echo site_url('admin/tambahBarang')?>" enctype="multipart/form-data">
                      <div class="modal-body">

                        <div class="form-group"><label>ID Barang</label>
                          <input required class="form-control required text-capitalize" value="<?php echo $id_brg ?>" readonly data-placement="top" data-trigger="manual" type="text" name="id_brg">
                        </div>

												<div class="form-group"><label>Kategori</label>
			                    <div class="custom-select">
			                        <select class="form-control" name="kategori">
                                <?php foreach($dataKategori as $data){ ?>
			                            <option value="<?php echo $data->id_kategori; ?>"><?php echo $data->nm_kategori; ?></option>
			                          <?php } ?>
                              </select>
			                    </div>
			                  </div>

                        <div class="form-group"><label>Nama Barang</label>
                          <input required class="form-control required text-capitalize" placeholder="Input Nama Barang" data-placement="top" data-trigger="manual" type="text" name="nm_brg">
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
                          <div class="input-group">
                              <span class="input-group-btn">
                                  <span class="btn btn-default btn-file">
                                      Upload Gambar <input type="file" name="photo" required accept="image/png, image/jpeg, image/gif" id="imgInp">
                                  </span>
                              </span>
                              <input id='urlname' type="text" class="form-control" readonly>
                          </div>
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

  <?php foreach($dataBarang as $data){?>
  <!-- detil modal Barang -->
   <div class="modal fade" tabindex="-1" id="detilBarangModal<?php echo $data->id_brg ?>" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
     <div class="modal-dialog">
       <div class="modal-content">
         <div class="modal-header">
           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
           <h3 id="myModalLabel">Detil Barang</h3>
         </div>
         <div class="modal-body">
           <form method="POST" action="" enctype="multipart/form-data">
             <table class="table table-responsive" border="0">
               <tbody>
                 <tr>
                   <td>ID Kategori</td>
                   <td>:</td>
                   <td style="text-transform:capitalize;"><?php echo $data->id_kategori ?></td>
                 </tr>
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
                   <td>Stok</td>
                   <td>:</td>
                   <td style="text-transform:capitalize;"><?php echo $data->stok ?></td>
                 </tr>
                 <tr>
                   <td>Harga</td>
                   <td>:</td>
                   <td style="text-transform:capitalize;"><?php echo $data->harga ?></td>
                 </tr>
                 <tr>
                   <td>Ongos Kirim</td>
                   <td>:</td>
                   <td style="text-transform:capitalize;"><?php echo $data->ongkir ?></td>
                 </tr>
                 <tr>
                   <td>Rating</td>
                   <td>:</td>
                   <td style="text-transform:capitalize;"><?php echo $data->rating ?></td>
                 </tr>
                 <tr>
                   <td>Gambar</td>
                   <td>:</td>
                   <td><img src="<?php echo base_url('assets/img/'.$data->gambar.'');?>" width="200px"></td>
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

   <!--UPDATE Barang-->
   <?php foreach($dataBarang as $data) { ?>
	 <div class="modal fade" id="modalEditBarang<?php echo $data->id_brg?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		 <div class="modal-dialog">
			 <div class="modal-content">
				 <div class="modal-header">
					 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					 <h4 class="modal-title" id="myModalLabel"><div class="icon"><i class="ion ion-cube"></i> Update Data Barang</div></h4>
				 </div>
				 <form method="POST" action="<?php echo site_url('admin/ubahBarang')?>" enctype="multipart/form-data">
					 <div class="modal-body">

             <div class="form-group"><label>ID Barang</label>
               <input required class="form-control required text-capitalize" placeholder="Input Nama Barang" data-placement="top" data-trigger="manual" value="<?php echo $data->id_brg ?>" type="text" name="id_brg" readonly>
             </div>

						 <div class="form-group"><label>ID Kategori</label>
							 <div class="custom-select">
									 <select class="form-control" name="kategori">
                      <?php foreach($dataKategori as $data2) { ?>
											<option value="<?php echo $data2->id_kategori ?>"><?php echo $data2->nm_kategori ?></option>
									    <?php } ?>
                   </select>
							 </div>
						 </div>

						 <div class="form-group"><label>Nama Barang</label>
							 <input required class="form-control required text-capitalize" placeholder="Input Nama Barang" data-placement="top" data-trigger="manual" value="<?php echo $data->nm_brg ?>" type="text" name="nm_brg">
						 </div>

						 <div class="form-group">
							 <label>Stok</label>
							 <div class="input-group input-group">
								 <span class="input-group-addon" id="sizing-addon1">Kg.</span>
								 <input type="text" class="form-control" aria-describedby="sizing-addon1" placeholder="Stok" data-placement="top" value="<?php echo $data->stok ?>" data-trigger="manual" type="text" name="stok">
							 </div>
						 </div>

						 <div class="form-group">
							 <label>Harga</label>
							 <div class="input-group input-group">
								 <span class="input-group-addon" id="sizing-addon1">Rp.</span>
								 <input type="text" class="form-control" aria-describedby="sizing-addon1" placeholder="Harga" data-placement="top" data-trigger="manual" value="<?php echo $data->harga ?>" type="text" name="harga">
							 </div>
						 </div>

						 <div class="form-group"><label>Ongkos Kirim</label>
							 <input required class="form-control required text-capitalize" placeholder="Ongkos Kirim" data-placement="top" data-trigger="manual" value="<?php echo $data->ongkir ?>" type="text" name="ongkir">
						 </div>

						<div class="form-group">
              <label>Gambar</label>
                <div class="input-group">
                  <span class="input-group-btn">
                    <span class="btn btn-default btn-file">
                      Upload Gambar <input type="file" name="photo" accept="image/png, image/jpeg, image/gif" id="imgInp">
                    </span>
                  </span>
                <input id='urlname' type="text" class="form-control" readonly>
              </div>
            </div>

						 <div class="form-group"><label>Rating</label>
							 <div class="custom-select my-1 mr-sm-2">
									 <select class="form-control" name="rating">
											 <option <?php if( $data->rating=='1'){echo "selected"; } ?> value="1">1</option>
											 <option <?php if( $data->rating=='2'){echo "selected"; } ?> value="2">2</option>
											 <option <?php if( $data->rating=='3'){echo "selected"; } ?> value="3">3</option>
											 <option <?php if( $data->rating=='4'){echo "selected"; } ?> value="4">4</option>
											 <option <?php if( $data->rating=='5'){echo "selected"; } ?> value="5">5</option>
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
   <?php } ?>
	 <!-- /.Update Barang modal -->


<!--MODAL DELETE -->
<?php if (isset($dataBarang)){
foreach($dataBarang as $data){ ?>
<div class="modal fade" id="modalHapusBarang<?php echo $data->id_brg?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Confirm Delete</h4>
      </div>
     <div class='modal-body'>Anda yakin ingin menghapus <b><?php echo $data->id_brg ?></b> dengan nama <i><?php echo $data->nm_brg ?></i> ?
      </div>
      <div class='modal-footer'>
        <form class="" action="<?php echo site_url('admin/hapusBarang/'.$data->id_brg) ?>" method="post">
          <input type='hidden' value='<?php echo $data->id_brg?>' name='id_brg'>
          <button type='button' class='btn btn-default' data-dismiss='modal'>Batal</button>
          <button class='btn btn-danger' aria-label='Delete'type='submit' name='hapus'></span>Hapus</button>
        </form>
      </div>
    </div>
  </div>
</div>
  <?php }
  }
  ?>


      <!-- /.panel body -->
      </div>
    <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
    </div>

  </section>
  <!-- right col -->

