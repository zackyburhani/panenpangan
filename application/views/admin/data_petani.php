<?php include"application/views/admin/template/header.php" ?>
<?php include"application/views/admin/template/sidebar.php" ?>

<section class="content-header">
  <h1>
    Dashboard
    <small>Halaman Petani</small>
  </h1>
  </section>

<!-- Main content -->
<section class="content">
  <div class="panel panel-default">
    <div class="panel-body"><h4><i class="ion ion-cube"></i> Data Petani</h4></div>
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
        <button class="btn btn-default" data-toggle="modal" href="#" data-target="#entrypetaniModal"><i class="fa fa-plus"></i></button> Tambah Data Barang
      </div>
      <!-- /.panel-heading -->
      <div class="panel-body">
        <table style="table-layout:fixed" class="table table-striped table-bordered table-hover" id="datatablePetani">
          <thead>
            <tr>
              <th width="80px" align="center;">ID Petani</th>
              <th>Nama</th>
              <th>Tanggal Lahir</th>
              <th>Alamat</th>
              <th>No. Telp</th>
              <th width="40px" align="center;"> <center>Edit</center> </th>
              <th width="40px" align="center;"> <center>Hapus</center> </th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($dataPetani as $data){?>
            <tr>
              <td><?php echo $data->id_petani;?></td>
              <td><?php echo $data->nm_petani;?></td>
              <td><?php echo $data->tgl_lahir;?></td>
              <td><?php echo $data->alamat;?></td>
              <td><?php echo $data->no_telp;?></td>
              <td align="center;"><a href="#modalEditPetani<?php echo $data->id_petani?>"  class="btn btn-warning btn-circle" data-toggle="modal"><span class="glyphicon glyphicon-edit"></span> </a></td>
              <td align="center;"><a href="<?php blink('Admin/hapusPetani/'.$data->id_petani)?>" onclick="return konfirmasi()" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a></td>
            </tr>
            <?php } ?>
          </tbody>
        </table>

              <!-- entry modal petani -->
              <div class="modal fade" id="entrypetaniModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" id="myModalLabel"><i class="fa fa-user fa-fw"></i>Tambah Data Petani</h4>
                    </div>
                    <form method="POST" action="<?php echo site_url('Admin/tambahPetani')?>" enctype="multipart/form-data">
                      <div class="modal-body">
                        <div class="form-group"><label>ID Petani</label>
                          <input required class="form-control required text-capitalize" value="<?php echo $id_petani ?>" data-placement="top" data-trigger="manual" type="text" name="id_petani" readonly>
                        </div>

                        <div class="form-group"><label>Nama Petani</label>
                          <input required class="form-control required text-capitalize" placeholder="Input Nama Petani" data-placement="top" data-trigger="manual" type="text" name="nm_petani">
                          </div>

                          <div class="form-group"><label>Tanggal Lahir</label>
                            <input required class="form-control" placeholder="yyyy-mm-dd" data-placement="top" data-trigger="manual" type="date" name="tgl_lahir">
                          </div>

                          <div class="form-group"><label>Alamat</label>
                            <textarea class="form-control" name="alamat" required></textarea>
                          </div>

                          <div class="form-group">
                            <label>Nomor Telepon</label>
                            <input required class="form-control required" placeholder="Nomor Telepon" data-placement="top" data-trigger="manual" type="text" name="no_telp" id="no_telp" maxlength="13">
                          </div>

                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
                            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Submit</button>
                            <p class="help-block pull-left text-danger hide" id="form-error">&nbsp; The form is not valid. </p>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                <!-- /.entry petani modal -->

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

         <?php if (isset($dataPetani)){
           foreach($dataPetani as $data){
          ?>
          <div id="modalEditPetani<?php echo $data->id_petani?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                      <h3 id="myModalLabel">Edit Data Petani</h3>
                  </div>

                  <form class="form-horizontal" method="post" action="<?php echo site_url('Admin/ubahPetani')?>">
                      <div class="modal-body">
                          <div class="control-group">
                              <label class="control-label">ID Petani</label>
                              <div class="controls">
                                  <input name="id_petani" class="form-control" type="text" value="<?php echo $data->id_petani; ?>" class="uneditable-input" readonly="true">
                              </div>
                          </div>

                          <div class="control-group">
                              <label class="control-label" >Nama Petani</label>
                              <div class="controls">
                                  <input name="nm_petani" type="text" class="form-control" value="<?php echo $data->nm_petani?>" required>
                              </div>
                          </div>

                          <div class="control-group">
                              <label class="control-label">Tanggal Lahir</label>
                              <div class="controls">
                                  <input name="tgl_lahir" type="date" class="form-control" value="<?php echo $data->tgl_lahir?>" required>
                              </div>
                          </div>

                          <div class="control-group">
                              <label class="control-label">Alamat</label>
                              <div class="controls">
                                <textarea name="alamat" class="form-control"><?php echo $data->alamat?></textarea>
                             </div>
                          </div>

                          <div class="control-group">
                              <label class="control-label" >Nomor Telepon</label>
                              <div class="controls">
                                  <input name="no_telp" class="form-control" type="text" value="<?php echo $data->no_telp?>" required>
                              </div>
                          </div>
                      </div>

                      <div class="modal-footer">
                          <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="fa fa-close"></i> Close</button>
                          <button class="btn btn-primary"><i class="fa fa-save"></i> Update</button>
                      </div>
                  </form>
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

<?php $this->load->view('admin/template/footer'); ?>
