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
          <a href="<?php blink('LihatBeras') ?>" class="list-group-item">
              <i class="fa fa-comment-o"></i> Beras
          </a>
          <a href="<?php blink('LihatSayuran') ?>" class="list-group-item">
              <i class="fa fa-search"></i> Sayuran
          </a>
          <a href="<?php blink('LihatBuah') ?>" class="list-group-item">
              <i class="fa fa-user"></i> Buah-buahan
          </a>
      </div>
    </div>
  </div>

  </div>

<?php include"application/views/master/footer.php" ?>
