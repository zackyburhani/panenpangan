<div class="container" style="margin-top: 130px ; margin-bottom: 100px">
  <div class="panel panel-success">
    <div class="panel-heading">
      <i class="fa fa-user"></i> Pelanggan
    </div>
    <div class="panel-body">
      <form class="" action="<?php blink('DaftarLengkap/DataLengkap')?>" method="post">

        <div class="form-group">
          <label class="col-md-2 control-label">Username</label>
            <div class="col-md-9">
              <input name="username" value="<?php echo $data->username  ?>" type="text" placeholder="Username" class="form-control" style="margin-bottom: 20px" readonly>
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
                  <input name="alamat" type="text" placeholder="E-Mail" class="form-control" style="margin-bottom: 20px">
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
