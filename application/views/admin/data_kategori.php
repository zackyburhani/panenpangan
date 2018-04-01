<?php include"application/views/admin/template/header.php" ?>
<?php include"application/views/admin/template/sidebar.php" ?>

<section class="content-header">
  <h1>
    Dashboard
    <small>Halaman Kategori</small>
  </h1>
  </section>

<!-- Main content -->
<section class="content">
  <div class="panel panel-default">
    <div class="panel-body"><h4><i class="fa fa-file"></i> Data Kategori</h4></div>
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
        <button class="btn btn-default" data-toggle="modal" href="#" data-target="#entrykategoriModal"><i class="fa fa-plus"></i></button> Tambah Data Kategori
      </div>
      <!-- /.panel-heading -->
      <div class="panel-body">
        <table style="table-layout:fixed" class="table table-striped table-bordered table-hover" id="datatablekategori">
          <thead>
            <tr>
              <th align="center;">ID kategori</th>
              <th>Nama Kategori</th>
              <th width="50px"> <center>Edit</center> </th>
              <th width="50px"> <center>Hapus</center> </th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($dataKategori as $data){?>
            <tr>
              <td><?php echo $data->id_kategori;?></td>
              <td><?php echo $data->nm_kategori;?></td>
              <?php echo "<td><a href='#myModal' class='btn btn-default btn-small' id='custId' data-toggle='modal' data-id=".$data->id_kategori.">Edit</a></td>"; ?>
              <!-- <td><a class="btn btn-warning btn-circle" id="editkategori" data-id='$data->id_kategori' onclick="edit(<?php echo $data->id_kategori;?>)" data-toggle="modal"><span class="glyphicon glyphicon-edit"></span> </a></td> -->
              <td><a href="<?php blink('Admin/hapusKategori/'.$data->id_kategori)?>" onclick="return konfirmasi()" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a></td>
            </tr>
            <?php } ?>
          </tbody>
        </table>

              <!-- entry modal kategori -->
              <div class="modal fade" id="entrykategoriModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" id="myModalLabel"><i class="fa fa-file fa-fw"></i>Tambah Data kategori</h4>
                    </div>
                    <form method="POST" action="<?php echo site_url('Admin/tambahKategori')?>" enctype="multipart/form-data">
                      <div class="modal-body">
                        <div class="form-group"><label>ID Kategori</label>
                          <input required class="form-control required text-capitalize" data-placement="top" data-trigger="manual" type="text" name="id_kategori">
                        </div>

                        <div class="form-group"><label>Nama Kategori</label>
                          <input required class="form-control required text-capitalize" placeholder="Input Nama kategori" data-placement="top" data-trigger="manual" type="text" name="nm_kategori">
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
                <!-- /.entry kategori modal -->

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

        <!-- detil modal kategori -->
         <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
           <div class="modal-dialog">
             <div class="modal-content">
               <div class="modal-header">
                 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                 <h3 id="myModalLabel">Detil kategori</h3>
               </div>
               <div class="modal-body">
                 <form method="POST" action="" enctype="multipart/form-data">
                   <table class="table table-responsive" border="0" style="margin-top: -40px;">
                     <thead>
                       <td width="25%" ></td>
                       <td width="5%" ></td>
                       <td rowspan="12"><img  src="" alt="foto-guru" width="150" height="150" onmousedown="return false" oncontexmenu="return false" onselectstart="return false"/></td>
                       <td width="50%" ></td>
                       <td width="20%" ></td>
                     </thead>
                     <tbody>
                       <tr>
                         <td>ID</td>
                         <td>:</td>
                         <td></td>
                       </tr>
                       <tr>
                         <td>Nama Kategori</td>
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
         <!-- /.Detil modal kategori -->

      <!-- /.panel body -->
      </div>
    <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
    </div>

  </section>
  <!-- right col -->

<?php $this->load->view('admin/template/footer'); ?>
