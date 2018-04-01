<?php include"application/views/master/header.php" ?>

<!-- BEGIN CONTAINER -->
<div class="page-container page-container-bg-solid">
	<!-- BEGIN CONTENT -->
	<div class="container container-lf-space page-content" style="margin-bottom : 90px;">
			<div class="margin-bottom-10">
				<!-- BEGIN WIDGET GRADIENT -->
				<div class="clearfix"></div>
          <div class="panel panel-info">
            <div class="panel-heading"><span class="fa fa-user" style="font-size:12px; color:Green"></span> Tracking Kiriman</div>
              <div class="card card-body">
                <div class="panel-body">
                  <form class="" action="index.html" method="post">
                    <div class="form-group">
                      <label class="col-md-2 control-label">No. Transaksi</label>
                        <div class="col-md-6 margin-bottom-10">
                          <input name="no_transaksi" type="text" placeholder="Nomor Transaksi" class="form-control">
                        </div>
												<div class="col-md-4">
                          <button type="button" class=" btn btn-success" name="button">Cari</button>
                        </div>
                      </div>
											<div class="container-fluid">
												<table class="table table-bordered">
												 <thead>
													 <tr>
														 <th>No. Transaksi</th>
														 <th>Nama Barang</th>
														 <th>Tanggal Kirim</th>
														 <th>Status</th>
													 </tr>
												 </thead>
												 <tbody>
													 <tr>
														 <td>TS0001</td>
														 <td>Beras</td>
														 <th>12/12/2018</th>
														 <td><i class="badge badge-danger">Dalam Perjalanan</i></td>
													 </tr>
												 </tbody>
											 </table>
											</div>
                  </form>
                </div>
              </div>
          </div>
      </div> <!-- END WIDGET GRADIENT -->
  </div> <!-- END CONTENT -->
</div> <!-- END CONTAINER -->

<?php include"application/views/master/footer.php" ?>
