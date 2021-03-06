 <section class="content-header">
  <h1>
    Dashboard
    <small>Halaman Konfirmasi Pembayaran</small>
  </h1>
  </section>

<!-- Main content -->
<section class="content">
  <div class="panel panel-default">
    <div class="panel-body"><h4><i class="fa fa-money"></i> Data Pembayaran</h4></div>
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
      </div>
      <!-- /.panel-heading -->
      <div class="panel-body">
        <table style="table-layout:fixed" class="table table-striped table-bordered table-hover" id="datatablePetani">
          <thead>
            <tr>
              <th width="55px" align="center;">ID Pesan</th>
              <th>Nama</th>
              <th width="80px">Barang</th>
              <th width="100px">Tanggal Pesan</th>
              <th width="22px">QTY</th>
              <th width="90px">Total Bayar</th>
              <th width="70px"> Konfirmasi </th>
              <th width="40px"> <center>Detail</center> </th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($bayar as $data){?>
            <tr>
              <td><?php echo $data->id_pesan;?></td>
              <td><?php echo $data->nm_plg;?></td>
              <td><?php echo $data->nm_brg;?></td>
              <td><?php echo $data->tgl_pesan;?></td>
              <td><?php echo $data->qty;?></td>
              <td><?php echo $data->ongkir+$data->harga_total;?></td>
              <td align="center">
                <?php if($data->status_bayar != "Lunas") {  ?>
                  <a href="#modalUpdateBayar<?php echo $data->id_pesan?>" class="btn btn-success btn-circle" data-toggle="modal"><span class="glyphicon glyphicon-check"></span> </a>
                <?php } else { echo "-"; } ?>
              </td>
              <td align="center"><a href="#modalDetailbayar<?php echo $data->id_petani?>" class="btn btn-info btn-circle" data-toggle="modal"><span class="glyphicon glyphicon-eye-open"></span> </a></td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
        <!-- /.panel body -->
        </div>


<?php if (isset($bayar)){
foreach($bayar as $data){ ?>
<div class="modal fade" id="modalUpdateBayar<?php echo $data->id_pesan?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-money fa-fw"></i> Konfirmasi Pembayaran</h4>
      </div>
      <div class='modal-body'>Anda yakin ingin konfirmasi <b><?php echo $data->id_pesan ?></b> ?
      </div>
      <div class='modal-footer'>
        <form class="" action="<?php echo site_url('admin/verification/'.$data->id_pesan) ?>" method="post">
          <input type='hidden' value='<?php echo $data->id_pesan?>' name='id_pesan'>
          <button type='button' class='btn btn-default' data-dismiss='modal'>Batal</button>
          <button class='btn btn-success' aria-label='Update' type='submit' name='update'></span>Konfirmasi</button>
        </form>
      </div>
    </div>
  </div>
</div>
  <?php }
  }
  ?>


<!-- detil modal Barang -->
              <?php foreach($bayar as $data){?>
               <div class="modal fade" tabindex="-1" id="modalDetailbayar<?php echo $data->id_petani?>" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                 <div class="modal-dialog">
                   <div class="modal-content">
                     <div class="modal-header">
                       <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                       <h3 id="myModalLabel"><i class="fa fa-money"></i> Detil Pembayaran</h3>
                     </div>
                     <div class="modal-body">
                       <form method="POST" action="" enctype="multipart/form-data">
                         <table class="table table-responsive" border="0">
                           <tbody>
                            <tr>
                               <td>Nama </td>
                               <td>:</td>
                               <td style="text-transform:capitalize;"><?php echo $data->nm_plg ?></td>
                             </tr>
                             <tr>
                               <td>Nama Kategori</td>
                               <td>:</td>
                               <td style="text-transform:capitalize;"><?php echo $data->nm_kategori ?></td>
                             </tr>
                             <tr>
                               <td>Nama Barang</td>
                               <td>:</td>
                               <td style="text-transform:capitalize;"><?php echo $data->nm_brg ?></td>
                             </tr>
                             <tr>
                               <td>Harga</td>
                               <td>:</td>
                               <td style="text-transform:capitalize;"><?php echo $data->harga ?></td>
                             </tr>
                             <tr>
                               <td>QTY</td>
                               <td>:</td>
                               <td style="text-transform:capitalize;"><?php echo $data->qty ?></td>
                             </tr>
                             <tr>
                               <td>Ongos Kirim</td>
                               <td>:</td>
                               <td style="text-transform:capitalize;"><?php echo $data->ongkir ?></td>
                             </tr>
                             <tr>
                               <td>Total Bayar</td>
                               <td>:</td>
                               <td style="text-transform:capitalize;"><b><?php echo $total = 
                               ($data->qty*$data->harga)+$data->ongkir.".00" ?></b></td>
                             </tr>
                           </tbody>
                         </table>
                       </form>
                     </div>
                   </div>
                 </div>
               </div>
               <!-- /.Detil modal Barang -->
               <?php } ?>



     <!-- /.panel -->
     </div>
    <!-- /.col-lg-12 -->
    </div>

  </section>
  <!-- right col -->

