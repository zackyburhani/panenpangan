<div class="container" style="margin-top: 130px ; margin-bottom: 100px">
  
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


<?php if($getAllPelanggan != null) { ?>
  <div class="panel panel-success">
    <div class="panel-heading">
      <i class="fa fa-user"></i> Pelanggan
    </div>
    <div class="panel-body">
      <form class="" action="<?php blink('DaftarLengkap/UpdateDataLengkap')?>" method="post">

        <div class="form-group">
          <label class="col-md-2 control-label">Username</label>
            <div class="col-md-9">
              <input name="username" value="<?php echo $username  ?>" type="text" placeholder="Username" class="form-control" style="margin-bottom: 20px">
            </div>
          </div>

          <?php foreach($getAllPelanggan as $data) { ?>
              <div class="form-group">
                <label class="col-md-2 control-label">Nomor Telepon</label>
                  <div class="col-md-9">
                      <input name="no_telp" type="text" value="<?php echo $data->no_telp ?> " placeholder="Nomor Telepon" class="form-control" style="margin-bottom: 20px">
                  </div>
              </div>

                <div class="form-group">
                  <label class="col-md-2 control-label">Alamat</label>
                    <div class="col-md-9">
                      <textarea name="alamat" type="text" placeholder="" class="form-control" style="margin-bottom: 20px"><?php echo $data->alamat ?></textarea>
                    </div>
                  </div>

                <div class="form-group">
                  <label class="col-md-2 control-label">Kodepos</label>
                    <div class="col-md-9">
                      <input name="kodepos" type="text" value="<?php echo $data->kodepos ?>" placeholder="kodepos" class="form-control" style="margin-bottom: 20px">
                    </div>
                </div>

              <?php } ?>

            <div class="container-fluid">
              <div class="col-md-6" style="margin-left: 635px">
                 <a href="<?php blink('Home') ?>" class=" btn btn-default"><i class="fa fa-close"></i> Batal</a>
                <button type="submit" class=" btn btn-success" name="button"><i class="fa fa-save"></i> Update Data Diri</button>
              </div>
            </div>
        </form>
    </div>
  </div>
</div>

 <?php } else { ?>
  <div class="panel panel-success">
    <div class="panel-heading">
      <i class="fa fa-user"></i> Pelanggan
    </div>
    <div class="panel-body">
      <form class="" action="<?php blink('DaftarLengkap/DataLengkap')?>" method="post">

        <div class="form-group">
          <label class="col-md-2 control-label">Username</label>
            <div class="col-md-9">
              <input name="username" value="<?php echo $username  ?>" type="text" placeholder="Username" class="form-control" style="margin-bottom: 20px">
            </div>
          </div>

                <div class="form-group">
                  <label class="col-md-2 control-label">Nomor Telepon</label>
                    <div class="col-md-9">
                        <input name="no_telp" type="text" placeholder="Nomor Telepon" class="form-control" style="margin-bottom: 20px">
                    </div>
                </div>

                <div class="form-group">
                  <label class="col-md-2 control-label">Alamat</label>
                    <div class="col-md-9">
                      <textarea name="alamat" type="text" placeholder="Alamat" class="form-control" style="margin-bottom: 20px"></textarea>
                    </div>
                  </div>

                <div class="form-group">
                  <label class="col-md-2 control-label">Kodepos</label>
                    <div class="col-md-9">
                      <input name="kodepos" type="text" placeholder="kodepos" class="form-control" style="margin-bottom: 20px">
                    </div>
                </div>

            <div class="container-fluid">
              <div class="col-md-2" style="margin-left: 750px">
                <button type="submit" class=" btn btn-success" name="button"><i class="fa fa-save"></i> Update Data Diri</button>
              </div>
            </div>
        </form>
    </div>
  </div>
</div>
<?php } ?>