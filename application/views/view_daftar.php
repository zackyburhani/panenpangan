
<!-- BEGIN CONTAINER -->
<div class="page-container page-container-bg-solid">
	<!-- BEGIN CONTENT -->
	<div class="container container-lf-space page-content">
			<div class="margin-bottom-30">
				<!-- BEGIN WIDGET GRADIENT -->
				<div class="clearfix"></div>
          <div class="panel panel-info">
            <div class="panel-heading"><span class="fa fa-user" style="font-size:12px; color:Green"></span> Buat Akun</div>
              <div class="card card-body">
                <div class="panel-body">
                  <form class="" action="<?php blink('User/InsertDaftar')?>" method="post">
                    <div class="form-group">
                      <label class="col-md-1 col-md-offset-1 control-label">Username</label>
                        <div class="col-md-9 margin-bottom-10">
                          <input name="username" type="text" placeholder="Username" class="form-control">
                        </div>

                        <label class="col-md-1 col-md-offset-1 margin-top-20 control-label">Nama</label>
                          <div class="col-md-9 margin-bottom-10 margin-top-20">
                            <input name="nm_plg" type="text" placeholder="Nama" class="form-control">
                          </div>

                        <label class="col-md-1 col-md-offset-1 margin-top-20 control-label">No. Telp</label>
                          <div class="col-md-9 margin-bottom-10 margin-top-20">
                            <input name="no_telp" type="text" placeholder="Nomor Telepon" class="form-control">
                          </div>

                        <label class="col-md-1 col-md-offset-1 margin-top-20 control-label">E-mail</label>
                          <div class="col-md-9 margin-bottom-10 margin-top-20">
                            <input name="email" type="text" placeholder="E-Mail" class="form-control">
                          </div>

                        <label class="col-md-1 col-md-offset-1 margin-top-20 control-label">Password</label>
                          <div class="col-md-9 margin-bottom-10 margin-top-20">
                            <input name="password" type="password" placeholder="Password" class="form-control">
                          </div>

                          <label class="col-md-1 col-md-offset-1 margin-top-20 control-label">Ulangi Password</label>
                            <div class="col-md-9 margin-bottom-10 margin-top-20">
                              <input name="password" type="password" placeholder="Ulangi Password" class="form-control">
                            </div>
                      </div>
                      <div class="container-fluid">
                        <div class="col-md-1 col-md-offset-8 margin-bottom-10 margin-top-20">
                          <button type="submit" class=" btn btn-success" name="button">Sign Up</button>
                        </div>
                      </div>
                  </form>
                </div>
              </div>
          </div>
      </div> <!-- END WIDGET GRADIENT -->
  </div> <!-- END CONTENT -->
</div> <!-- END CONTAINER -->
