<?php $this->load->view('admin/template/header') ?>
<?php $this->load->view('admin/template/sidebar') ?>


  <!-- Main content -->
    <section class="content">
    	<!--START CONTENT LABEL-->
    	<div class="callout callout-info">
    		<div class="row">
    			<div class="form-group">
					<img class="col-md-1" src="<?php blink('metronic/assets/admin/layout7/img/panen.png')?>" width="20%">
						<div class="col-md-4">
							<h4 style="margin-top: 20px;">Selamat Datang Admin !</h4>
						</div>
				</div>
    		</div>
         </div>
         <!--EDN CONTENT LABEL-->

      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-md-4 col-xs-offset-1">
          <!-- small box -->
          <div class="small-box bg-blue">
            <div class="inner">
              <h3>150</h3>

              <p>Data Petani</p>
            </div>
            <div class="icon">
              <i class="fa fa-user fa-fw"></i>
            </div>
            <a href="<?php blink('Admin/petani') ?>" class="small-box-footer">Lihat Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-md-4 col-md-offset-2">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>65</h3>

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

<?php $this->load->view('admin/template/footer') ?>
