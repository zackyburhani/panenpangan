<section class="content-header">
  <h1>
    Dashboard
    <small>Halaman Kategori</small>
  </h1>
  </section>

<!-- Main content -->
<section class="content">
  <div class="panel panel-default">
    <div class="panel-body"><h4><i class="fa fa-list"></i> Data Kategori</h4></div>
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
        <button class="btn btn-default" data-toggle="modal" href="#" data-target="#entrykategoriModal"><i class="fa fa-plus"></i></button> Tambah Data Kategori
      </div>
      <!-- /.panel-heading -->
      <div class="panel-body">
        <table style="table-layout:fixed" class="table table-striped table-bordered table-hover" id="datatablekategori">
          <thead>
            <tr>
              <th align="center;">ID kategori</th>
              <th>Nama Kategori</th>
              <th width="50px"> <center>Gambar</center></th>
              <th width="50px"> <center>Edit</center> </th>
              <th width="50px"> <center>Hapus</center> </th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($dataKategori as $data){?>
            <tr>
              <td><?php echo $data->id_kategori;?></td>
              <td><?php echo $data->nm_kategori;?></td>
              <td align="center;"><a href="#modalDetailKategori<?php echo $data->id_kategori?>"  class="btn btn-info btn-circle" data-toggle="modal"><span class="glyphicon glyphicon-eye-open"></span> </a></td>
              <td align="center;"><a href="#modalEditKategori<?php echo $data->id_kategori?>"  class="btn btn-warning btn-circle" data-toggle="modal"><span class="glyphicon glyphicon-edit"></span> </a></td>
              <td align="center;"><a href="#modalHapusKategori<?php echo $data->id_kategori?>"  class="btn btn-danger btn-circle" data-toggle="modal"><span class="glyphicon glyphicon-trash"></span> </a></td>
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
                <h4 class="modal-title" id="myModalLabel"><i class="fa fa-list fa-fw"></i>Tambah Data kategori</h4>
              </div>
              <form method="POST" action="<?php echo site_url('Admin/tambahKategori')?>" enctype="multipart/form-data">
                <div class="modal-body">
                  <div class="form-group"><label>ID Kategori</label>
                    <input required class="form-control required text-capitalize" data-placement="top" value="<?php echo $id_kategori ?>" data-trigger="manual" type="text" name="id_kategori" readonly>
                  </div>

                  <div class="form-group"><label>Nama Kategori</label>
                    <input required class="form-control required text-capitalize" placeholder="Input Nama kategori" data-placement="top" data-trigger="manual" type="text" name="nm_kategori">
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
        <!-- END entry kategori modal -->

          <!-- START update kategori modal -->
        <?php if (isset($dataKategori)){
          foreach($dataKategori as $data){
        ?>
        <div class="modal fade" id="modalEditKategori<?php echo $data->id_kategori?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel"><i class="fa fa-list fa-fw"></i>Tambah Data kategori</h4>
              </div>
              <form method="POST" action="<?php echo site_url('Admin/ubahKategori')?>" enctype="multipart/form-data">
                <div class="modal-body">
                  <div class="form-group"><label>ID Kategori</label>
                    <input required class="form-control required text-capitalize" data-placement="top" value="<?php echo $data->id_kategori; ?>" data-trigger="manual" type="text" name="id_kategori" readonly>
                  </div>

                  <div class="form-group"><label>Nama Kategori</label>
                    <input required class="form-control required text-capitalize" placeholder="Input Nama kategori" data-placement="top" data-trigger="manual" value="<?php echo $data->nm_kategori?>" type="text" name="nm_kategori">
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
          <?php }
         }
         ?>
         <!-- START update kategori modal -->


        <!--MODAL DELETE -->
        <?php if (isset($dataKategori)){
        foreach($dataKategori as $data){ ?>
        <div class="modal fade" id="modalHapusKategori<?php echo $data->id_kategori?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel"><i class="fa fa-trash fa-fw"></i>Confirm Delete</h4>
              </div>
              <div class='modal-body'>Anda yakin ingin menghapus <b><?php echo $data->id_kategori ?></b> dengan nama <i><?php echo $data->nm_kategori ?></i> ?
              </div>
              <div class='modal-footer'>
                <form class="" action="<?php echo site_url('admin/hapusKategori/'.$data->id_kategori) ?>" method="post">
                  <input type='hidden' value='<?php echo $data->id_kategori?>' name='id_kategori'>
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

        <!-- detil modal Kategori -->
              <?php foreach($dataKategori as $data){?>
               <div class="modal fade" tabindex="-1" id="modalDetailKategori<?php echo $data->id_kategori?>" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                 <div class="modal-dialog">
                   <div class="modal-content">
                     <div class="modal-header">
                       <h3 id="myModalLabel">Detil Kategori</h3>
                     </div>
                     <div class="modal-body">
                       <form method="POST" action="">
                         <center><img src="<?php echo base_url('assets/img/'.$data->gambar_kategori.'');?>" width="500px"></center>
                       </form>
                     </div>
                     <div class="modal-footer">
                        <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true"><i class="fa fa-close"></i> Close</button>
                    </div>
                   </div>
                 </div>
               </div>
               <!-- /.Detil modal Kategori -->
               <?php } ?>


      <!-- /.panel -->
      </div>
    <!-- /.col-lg-12 -->
    </div>
  </section>
  <!-- right col -->
