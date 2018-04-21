<?php include"application/views/master/header.php" ?>

<!-- BEGIN CONTAINER -->
<div class="page-container page-container-bg-solid">
	<!-- BEGIN CONTENT -->
	<div class="container container-lf-space page-content">
			<div class="margin-bottom-30">
				<!-- BEGIN WIDGET GRADIENT -->
				<div class="clearfix"></div>
          <div class="panel panel-info">
            <div class="panel-heading"><span class="fa fa-user" style="font-size:12px; color:Green"></span> Isi Data Diri Lengkap</div>
              <div class="card card-body">
                <div class="panel-body">
                  <form class="" action="index.html" method="post">
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
                            <input name="email" type="email" placeholder="E-Mail" class="form-control">
                          </div>

                        <label class="col-md-1 col-md-offset-1 margin-top-20 control-label">Alamat</label>
                          <div class="col-md-9 margin-bottom-10 margin-top-20">
                            <textarea name="alamat" rows="3" cols="10" class="form-control"></textarea>
                          </div>

                          <label class="col-md-1 col-md-offset-1 margin-top-20 control-label">Kode Pos</label>
                            <div class="col-md-9 margin-bottom-10 margin-top-20">
                              <input name="kodepos" type="text" placeholder="Kode Pos" class="form-control">
                            </div>
                      </div>
                      <div class="container-fluid">
                        <div class="col-md-1 col-md-offset-8 margin-bottom-10 margin-top-20">
                          <button type="button" class=" btn btn-success" name="button">Daftar</button>
                        </div>
                      </div>
                  </form>
                </div>
              </div>
          </div>
      </div> <!-- END WIDGET GRADIENT -->
  </div> <!-- END CONTENT -->
</div> <!-- END CONTAINER -->

<?php include"application/views/master/footer.php" ?>
