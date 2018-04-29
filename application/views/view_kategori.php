
    
<?php include"application/views/master/header.php" ?>

  <div class="container">
    <div class="row">
  
  		<div class="col-md-4 sidebar">
        <div class="mini-submenu">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </div>
        <div class="list-group">
          <span href="#" class="list-group-item" id="kategori">
              All Categories
          </span>
          <?php foreach($dataKategori as $data){
            ?>
          <a href="<?php blink('Home') ?>" class="list-group-item">
              <i class="fa fa-comment-o"></i> <?php echo $data->nm_kategori;?>
          </a>
         <?php } ?>
      </div>
    </div>
   
    <?php foreach($dataKategori as $data){?>
     
        <div class="col-sm-3">
        <div class="thumbnail">
        <div class="caption">
        <img src="<?php echo base_url('assets/img/'.$data->gambar_kategori.'');?>" class="img-rounded" alt="Cinque Terre" style="width:100%;">
                <h3 align="center"><?php echo $data->nm_kategori ?></h3>
                <hr>
                <p align="center"><a href="<?php blink('Home') ?>" class="btn btn-primary" role="button">Beli Sekarang</a></p>
        </div>
        </div>
        </div>
        <?php    }?>
   
  </div>

</div>

<?php include"application/views/master/footer.php" ?>
