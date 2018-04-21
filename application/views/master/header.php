<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>PanenPangan.com</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1" name="viewport"/>
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all" rel="stylesheet" type="text/css"/>
<link href="<?php blink('metronic/assets/global/plugins/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet" type="text/css"/>
<link href="<?php blink('metronic/assets/global/plugins/simple-line-icons/simple-line-icons.min.css')?>" rel="stylesheet" type="text/css"/>
<link href="<?php blink('metronic/assets/global/plugins/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet" type="text/css"/>
<link href="<?php blink('metronic/assets/global/plugins/uniform/css/uniform.default.css')?>" rel="stylesheet" type="text/css"/>
<link href="<?php blink('metronic/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css')?>" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
<link href="<?php blink('metronic/assets/global/plugins/mapplic/mapplic/mapplic.css')?>" rel="stylesheet" type="text/css"/>
<!-- END PAGE LEVEL PLUGIN STYLES -->
<!-- BEGIN PAGE STYLES -->
<link href="<?php blink('metronic/assets/admin/pages/css/tasks.css')?>" rel="stylesheet" type="text/css"/>
<!-- END PAGE STYLES -->
<!-- BEGIN THEME STYLES -->
<link href="<?php blink('metronic/assets/global/css/components.css')?>" id="style_components" rel="stylesheet" type="text/css"/>
<link href="<?php blink('metronic/assets/global/css/plugins.css')?>" rel="stylesheet" type="text/css"/>
<link href="<?php blink('metronic/assets/admin/layout7/css/layout.css')?>" rel="stylesheet" type="text/css"/>
<link href="<?php blink('metronic/assets/admin/layout7/css/custom.css')?>" rel="stylesheet" type="text/css"/>

<!--KOMENTAR BUAT PENAMBAHAN CSS-->
<link href="<?php blink('metronic/assets/global/css/modal.css')?>" rel="stylesheet" type="text/css"/>
<link href="<?php blink('metronic/assets/global/css/footer.css')?>" rel="stylesheet" type="text/css"/>
<link href="<?php blink('metronic/assets/global/css/sidebar.css')?>" rel="stylesheet" type="text/css">
<!--END KOMENTAR BUAT PENAMBAHAN CSS-->

<link href="metronic/assets/admin/layout7/css/custom.css" rel="stylesheet" type="text/css"/>
<link href="metronic/assets/global/css/button_sebelahan.css" rel="stylesheet" type="text/css">


<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="page-header-fixed ">

	<!-- Fixed navbar -->
	    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
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
									<img src="<?php blink('metronic/assets/admin/layout7/img/logo_panen2.png')?>" alt="logo" class="logo-default"/ style="margin-left:-50px;" width="15%">
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
										<form class="search" action="extra_search.html" method="GET">
												<input type="name" class="form-control" name="query" placeholder="Search...">
										</form>
									</div>
										<a href="javascript:;" class="btn submit"><i class="fa fa-search" style="margin-top:20px; margin-left:-15px;"></i></a>
										<!-- BEGIN TOP NAVIGATION MENU -->
										<div class="top-menu">
											<div class="row">
												<div class="col-xs-offset-0">
													<ul class="nav navbar-nav pull-right">
														<!-- BEGIN NOTIFICATION DROPDOWN -->
														<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
														<li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
															<a href="javascript:;" class="dropdown-toggle" style="margin-top :-40px; margin-right:10px;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
																<i class="fa fa-shopping-cart"></i>
																<span class="badge badge-success">7</span>
															</a>
															<ul class="dropdown-menu">
																<li class="external">
																	<h3><span class="bold">12 pending</span> notifications</h3>
																	<a href="extra_profile.html">view all</a>
																</li>
																<li>
																	<ul class="dropdown-menu-list scroller" style="height: 250px;" data-handle-color="#637283">
																		<li>
																			<a href="javascript:;">
																			<span class="time">just now</span>
																			<span class="details">
																			<span class="label label-sm label-icon label-success">
																			<i class="fa fa-plus"></i>
																			</span>
																			New user registered. </span>
																			</a>
																		</li>
																		<li>
																			<a href="javascript:;">
																			<span class="time">3 mins</span>
																			<span class="details">
																			<span class="label label-sm label-icon label-danger">
																			<i class="fa fa-bolt"></i>
																			</span>
																			Server #12 overloaded. </span>
																			</a>
																		</li>
																		<li>
																			<a href="javascript:;">
																			<span class="time">10 mins</span>
																			<span class="details">
																			<span class="label label-sm label-icon label-warning">
																			<i class="fa fa-bell-o"></i>
																			</span>
																			Server #2 not responding. </span>
																			</a>
																		</li>
																		<li>
																			<a href="javascript:;">
																			<span class="time">14 hrs</span>
																			<span class="details">
																			<span class="label label-sm label-icon label-info">
																			<i class="fa fa-bullhorn"></i>
																			</span>
																			Application error. </span>
																			</a>
																		</li>
																		<li>
																			<a href="javascript:;">
																			<span class="time">2 days</span>
																			<span class="details">
																			<span class="label label-sm label-icon label-danger">
																			<i class="fa fa-bolt"></i>
																			</span>
																			Database overloaded 68%. </span>
																			</a>
																		</li>
																		<li>
																			<a href="javascript:;">
																			<span class="time">3 days</span>
																			<span class="details">
																			<span class="label label-sm label-icon label-danger">
																			<i class="fa fa-bolt"></i>
																			</span>
																			A user IP blocked. </span>
																			</a>
																		</li>
																		<li>
																			<a href="javascript:;">
																			<span class="time">4 days</span>
																			<span class="details">
																			<span class="label label-sm label-icon label-warning">
																			<i class="fa fa-bell-o"></i>
																			</span>
																			Storage Server #4 not responding dfdfdfd. </span>
																			</a>
																		</li>
																		<li>
																			<a href="javascript:;">
																			<span class="time">5 days</span>
																			<span class="details">
																			<span class="label label-sm label-icon label-info">
																			<i class="fa fa-bullhorn"></i>
																			</span>
																			System Error. </span>
																			</a>
																		</li>
																		<li>
																			<a href="javascript:;">
																			<span class="time">9 days</span>
																			<span class="details">
																			<span class="label label-sm label-icon label-danger">
																			<i class="fa fa-bolt"></i>
																			</span>
																			Storage server failed. </span>
																			</a>
																		</li>
																	</ul>
																</li>
															</ul>
														</li>
														<li>
															<div style="margin-top : -30px; margin-left:-20px; padding-bottom : 50px">
																<div class="col-md-5">
																	<button type="button"  class="btn btn-success" name="button"  data-toggle="modal" href="#" data-target="#login" >LOGIN</button>
																</div>
																<div class="col-md-5">
																	<a href="<?php blink('Home/daftar') ?>">
																		<button type="button" id="daftar" onclick="location.href = ;" data-target="#e" class="btn btn-success" name="button">DAFTAR</button>
																	</a>
																</div>
															</div>
														</li>
														<!--DIKOMENTAR KARENA KODINGAN INI UNTUK YANG SUDAH LOGIN-->
													<!-- BEGIN USER LOGIN DROPDOWN -->
													<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte
													<li class="dropdown dropdown-user">
														<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
															<div class="dropdown-user-inner">
																<span class="username username-hide-on-mobile"> Nick </span>
																<img alt="" src="<?php blink('metronic/assets/admin/layout7/img/avatar1.jpg')?>"/>
															</div>
														</a>
														<ul class="dropdown-menu dropdown-menu-default">
															<li>
																<a href="extra_profile.html">
																<i class="icon-user"></i> My Profile </a>
															</li>
															<li>
																<a href="page_calendar.html">
																<i class="icon-calendar"></i> My Calendar </a>
															</li>
															<li>
																<a href="inbox.html">
																<i class="icon-envelope-open"></i> My Inbox <span class="badge badge-danger">
																3 </span>
																</a>
															</li>
															<li>
																<a href="page_todo.html">
																<i class="icon-rocket"></i> My Tasks <span class="badge badge-success">
																7 </span>
																</a>
															</li>
															<li class="divider">
															</li>
															<li>
																<a href="extra_lock.html">
																<i class="icon-lock"></i> Lock Screen </a>
															</li>
															<li>
																<a href="login.html">
																<i class="icon-key"></i> Log Out </a>
															</li>
														</ul>
													</li>
													<!-- END USER LOGIN DROPDOWN -->
												</ul>
											</div> <!--DIKOMENTAR KARENA KODINGAN INI UNTUK YANG SUDAH LOGIN-->
										</div>
									</div>
								</div>
							</div>
						<!-- END SEARCH -->
	        </div><!--/.nav-collapse -->
	      </div>
	    </nav>

<!-- BEGIN CLEARFIX -->
<div class="clearfix"></div>
<!-- END CLEARFIX -->

<!-- BEGIN # MODAL LOGIN -->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header" align="center">
				<img class="img-circle" id="img_logo" src="">
				<img id="profile-img" class="profile-img-card" src="<?php blink('metronic/assets/admin/layout7/img/panen.png')?>" width="30%" />
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
					</button>
			</div>
    	<!-- Begin # DIV Form -->
    	<div id="div-forms">
      	<!-- Begin # Login Form -->
          <form id="login-form">
		        <div class="modal-body">
				    	<input id="login_username" class="form-control" type="text" placeholder="Username" required>
				    	<input id="login_password" class="form-control" type="password" placeholder="Password" required>
            	<div class="checkbox">
              	<label><input type="checkbox"> Remember me</label>
              </div>
        		</div>
				    <div class="modal-footer">
	            <div>
	          		<button type="submit" class="btn btn-success btn-lg btn-block">Login</button>
	            </div>
					    <div>
	            	<button id="login_lost_btn" type="button" class="btn btn-link">Lupa Password?</button>
	      			</div>
				    </div>
        	</form>
        	<!-- End # Login Form -->
        	<!-- Begin | Lost Password Form -->
          <form id="lost-form" style="display:none;">
    	 	    <div class="modal-body">
		    			<div id="div-lost-msg">
                <div id="icon-lost-msg" class="margin-bottom-20 glyphicon glyphicon-chevron-right"></div>
                  <span id="text-lost-msg">Type your e-mail.</span>
                </div>
		    				<input id="lost_email" class="form-control" type="text" placeholder="E-mail" required>
            </div>
		    		<div class="modal-footer">
  						<div>
                <button type="submit" class="btn btn-success btn-lg btn-block">Kirim</button>
              </div>
              <div>
              	<button id="lost_login_btn" type="button" class="btn btn-link">Masuk</button>
              </div>
		    		</div>
      		</form>
			  	<!-- End | Lost Password Form -->
				</div>
      	<!-- End # DIV Form -->
			</div>
		</div>
	</div>
    <!-- END # MODAL LOGIN -->
