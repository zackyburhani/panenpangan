<div class="container" style="margin-top: 130px ; margin-bottom: 100px">
  <div class="panel panel-success">
    <div class="panel-heading">
     <span class="glyphicon glyphicon-user"></span> Buat Akun
    </div>
    <div class="panel-body">
      <form class="" action="<?php blink('User/InsertDaftar')?>" method="post">
        
        <div class="form-group">
          <label class="col-md-2 control-label">Username</label>
            <div class="col-md-9">
              <input name="username" type="text" placeholder="Username" class="form-control" style="margin-bottom: 20px">
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-2 control-label">Nama</label>
              <div class="col-md-9">
                  <input name="nm_plg" type="text" placeholder="Nama" class="form-control" style="margin-bottom: 20px">
              </div>
          </div>

            <div class="form-group">
              <label class="col-md-2 control-label">No. Telp</label>
                <div class="col-md-9">
                  <input name="no_telp" type="text" placeholder="Nomor Telepon" class="form-control" style="margin-bottom: 20px">
                </div>
            </div>

            <div class="form-group">
              <label class="col-md-2 control-label">E-mail</label>
                <div class="col-md-9">
                  <input name="email" type="text" placeholder="E-Mail" class="form-control" style="margin-bottom: 20px">
                </div>
              </div>

            <div class="form-group">
              <label class="col-md-2 control-label">Password</label>
                <div class="col-md-9">
                  <input name="password" type="password" placeholder="Password" class="form-control" style="margin-bottom: 20px">
                </div>
              </div>

            <div class="form-group">
              <label class="col-md-2 control-label">Ulangi Password</label>
                <div class="col-md-9">
                  <input name="password" type="password" placeholder="Ulangi Password" class="form-control" style="margin-bottom: 20px">
                </div>
            </div>

            <div class="container-fluid">
              <div class="col-md-2" style="margin-left: 840px">
                <button type="submit" class=" btn btn-success" name="button"><i class="fa fa-save"></i> Sign Up</button>
              </div>
            </div>
        </form>
    </div>
  </div>
</div>