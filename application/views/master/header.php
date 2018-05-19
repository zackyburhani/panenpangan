
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>PanenPangan</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'> -->
	
	<!-- GAMBAR ICON POJOK KIRI ATAS -->
	<link rel="SHORTCUT ICON" href="<?php echo base_url('assets/img/img/logo/favicon.ico') ?>">
	<!-- Animate.css -->
	<link rel="stylesheet" href="<?php blink('assets/pentagon/css/animate.css')?>">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="<?php blink('assets/pentagon/css/icomoon.css')?>">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="<?php blink('assets/pentagon/css/bootstrap.css')?>">
	<!-- Superfish -->
	<link rel="stylesheet" href="<?php blink('assets/pentagon/css/superfish.css')?>">

	<link rel="stylesheet" href="<?php blink('assets/pentagon/css/style.css')?>">
	<link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.css'?>">
	<link rel="stylesheet" href="<?php echo base_url().'assets/css/jquery-ui.css'?>">

	<link rel="stylesheet" href="<?php blink('assets/AdminLTE/bower_components/font-awesome/css/font-awesome.min.css')?>">

	<!-- Datatables -->
  <link rel="stylesheet" href="<?php blink('assets/AdminLTE/plugins/datatables/dataTables.bootstrap.css')?>">
  <link rel="stylesheet" href="<?php blink('assets/AdminLTE/plugins/datatables/dataTables.bootstrap.min.css')?>">
  <link rel="stylesheet" href="<?php blink('assets/AdminLTE/plugins/datatables/jquery.dataTables.css')?>">
  <link rel="stylesheet" href="<?php blink('assets/AdminLTE/plugins/datatables/jquery.dataTables.min.css')?>">
  <!--END PLUGINS-->


	<!-- Modernizr JS -->
	<script src="<?php  blink('assets/pentagon/js/modernizr-2.6.2.min')?>"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		<header id="fh5co-header-section">
			<nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="padding-bottom: 18px">
			    <div class="container">
			        <div class="navbar-header" style="margin-bottom:-70px;">
			            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
			                <span class="sr-only">Toggle navigation</span>
			                <span class="icon-bar"></span>
			                <span class="icon-bar"></span>
			                <span class="icon-bar"></span>
			            </button>
						<!-- BEGIN LOGO -->
						<div class="page-logo">
							<a href="<?php blink('Home') ?>">
								<img src="<?php blink('/assets/img/img/logo_panen2.png')?>" alt="logo" class="logo-default"/ style="margin-left:-50px;" width="15%">
							</a>
						</div>
						<!-- END LOGO -->
					</div>

	        <div id="navbar" class="navbar-collapse collapse">
				<!-- BEGIN SEARCH -->
				<div class="container">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-6 col-lg-offset-2" style="margin-top:20px">
								<form id="form_search" action="<?php blink('C_DaftarBarang/search');?>" method="GET">
									<div class="input-group">
								      <input type="text" class="form-control" name="title" id="title" placeholder="Search...">
								      <span class="input-group-btn">
								        <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
								      </span>
								    </div>
								</form>
							</div>
							
							<!-- BEGIN TOP NAVIGATION MENU -->
							<div class="top-menu">
								<div class="row">
									<div class="col-xs-offset-0">
										<ul class="nav navbar-nav pull-right">
											<li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
												<a  href="javascript:;" class="dropdown-toggle" style="margin-top :-20px; margin-right:10px;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
														<span class="glyphicon glyphicon-shopping-cart" style="margin-top:31px"></span> <span class="label label-danger" id="item"></span>
												</a>
													<ul class="dropdown-menu">
														<li class="external">
															<!-- nampilin cart -->
															<div class="col-md-4">
																<h5>Shopping Cart</h5>
																	<table class="table table-striped">
																		<thead>
																			<tr>
																				<th>Barang</th>
																				<th>Harga</th>
																				<th>Qty</th>
																				<th>Subtotal</th>
																				<th>Aksi</th>
																			</tr>
																		</thead>
																		<tbody id="detail_cart">	
																		</tbody>
																	</table>
																	<form method="POST" action="<?php blink('User/pesan_cart/'); ?>" enctype="multipart/form-data">
																<input required class="form-control required text-capitalize" value="<?php echo $id_pesan ?>" readonly data-placement="top" data-trigger="manual" type="hidden" name="id_pesan">
																<button type="submit" class="btn btn-primary">Pesan</button>
																</form>
																</div> 
																<!-- akhir nampilin -->	
														</li>
													</ul>
												</li>
											<li>

											<?php if($nama == null){ ?>

												<div class="row">
													<div class="col-md-5" style="margin-top:25px">
														<a class="btn btn-sm btn-success" name="button" href="<?php blink('Login')  ?>" data-target="#login"><i class="fa fa-sign-in"></i> LOGIN</a>
													</div>
													<div class="col-md-5" style="margin-top:25px">
														<a href="<?php blink('Home/daftar') ?>">
															<button type="button" id="daftar" data-target="#e" class="btn btn-sm btn-success" name="button"><i class="fa fa-user-plus"></i> DAFTAR</button>
														</a>
													</div>
												</div>
											<?php } else { ?>

												<div class="row" style="margin-left: 20px; margin-right: 90px;">
													<div class="col-md-12" style="margin-top:25px">
														<?php foreach($getNm_Plg as $data){ ?>
														<a  href="javascript:;" class="dropdown-toggle" style="margin-top :-20px;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
															<?php echo $data->nm_plg ?>

														</a>
														<?php } ?>
														<ul class="dropdown-menu" style="margin-left: -100px">
														<li class="external">
															<!-- nampilin cart -->
															<div class="col-md-4">
																<table class="table">
																	<tbody>
																	<tr>
																		<td>
																			<a href="<?php blink('DaftarLengkap') ?>">
																				<button class="btn btn-sm btn-block btn-success"><i class="fa fa-user"></i> Pengaturan Akun</button></td>	
																			</a>
																	</tr>
																	<tr>
																		<td>
																		<?php foreach($point as $data):?>																		
																			<button class="btn btn-sm btn-block btn-success"> Point Kamu <?php echo $data->poin; ?> </button></td>	
																		<?php endforeach;?>
																	</tr>
																	<tr>
																		<td>
																			<a href="<?php blink('User/invoice') ?>">
																				<button class="btn btn-sm btn-block btn-success"><i class="fa fa-money"></i> Invoice</button></td>	
																			</a>
																	</tr>
																	<tr>
																		<td>
																			<a href="<?php blink('History') ?>">
																				<button class="btn btn-sm btn-block btn-success"><span class="glyphicon glyphicon-list"></span> History Belanja</button>
																			</a>
																		</td>	
																	</tr>
																	<tr>
																		<td>
																			<a href="<?php blink('Tracking') ?>">
																				<button class="btn btn-sm btn-block btn-success"><span class="glyphicon glyphicon-map-marker"></span> Tracking</button>
																			</a>
																		</td>	
																	</tr>
																	<tr>
																		<td>
																			<a href="<?php blink('Login/logoutCustomer') ?>">
																				<button type="button" id="daftar" data-target="#e" class="btn btn-sm btn-block btn-success" name="button"><i class="fa fa-sign-out"></i> LOGOUT</button>
																			</a>
																		</td>	
																	</tr>
																	</tbody>
																</table>
															</div> 
														</li>
													</ul>
													</div>
												</div>

											<?php } ?>

											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div><!-- END SEARCH -->
	        	</div><!--/.nav-collapse -->
	      	</div>
	  	</div>
		  <!-- javascript search -->
 <!-- akhir search -->
	</nav>
</header>