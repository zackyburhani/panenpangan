  <!-- Main content -->
    <section class="content">
    	<!--START CONTENT LABEL-->
    	<div class="bs-callout bs-callout-success">
        <style type="text/css">
          .bs-callout {
              padding: 20px;
              margin: 20px 0;
              border: 1px solid #d9d9d9;
              border-left-width: 5px;
              border-radius: 3px;
          }
          .bs-callout h4 {
              margin-top: 0;
              margin-bottom: 5px;
          }
          .bs-callout p:last-child {
              margin-bottom: 0;
          }
          .bs-callout code {
              border-radius: 3px;
          }
          .bs-callout+.bs-callout {
              margin-top: -5px;
          }
          .bs-callout-success {
              background-color:  #d9d9d9;
              border-left-color: #5cb85c;
          }
        </style>
    		<div class="row">
    			<div class="form-group">
					<img class="col-md-1" src="<?php blink('metronic/assets/admin/layout7/img/panen.png')?>" width="20%">
						<div class="col-md-4">
							<h4 style="margin-top: 20px;">Selamat Datang <i><?php echo $nama; ?></i> !</h4>
						</div>
				</div>
    		</div>
         </div>
         <!--EDN CONTENT LABEL-->

      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-md-4">
          <!-- small box -->
          <div class="small-box bg-blue">
            <div class="inner">
              <h3><?php echo $totalPetani ?></h3>

              <p>Data Petani</p>
            </div>
            <div class="icon">
              <i class="fa fa-user fa-fw"></i>
            </div>
            <a href="<?php blink('Admin/petani') ?>" class="small-box-footer">Lihat Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-md-4">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php echo $totalKategori ?></h3>

              <p>Data Kategori</p>
            </div>
            <div class="icon">
              <i class="fa fa-list fa-fw"></i>
            </div>
            <a href="<?php blink('Admin/kategori') ?>" class="small-box-footer">Lihat Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-md-4">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php echo $totalBarang ?></h3>

              <p>Data Pangan</p>
            </div>
            <div class="icon">
              <i class="ion ion-cube"></i>
            </div>
            <a href="<?php blink('Admin/barang') ?>" class="small-box-footer">Lihat Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- right col -->
  </div>
  <!-- /.row (main row) -->