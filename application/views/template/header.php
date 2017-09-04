<?php if(!$this->session->userdata('user')):
		redirect('Admin/login');
	endif;
?>
<!DOCTYPE html>

<!-- Mirrored from optimisticdesigns.herokuapp.com/landerapp/pages-blank.html by HTTrack Website Copier/3.x [XR&CO'2013], Wed, 01 Apr 2015 07:18:47 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Admin Section</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">

	<!-- Open Sans font from Google CDN -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,600,700,300&amp;subset=latin" rel="stylesheet" type="text/css">

	<!-- LanderApp's stylesheets -->
	<link href="<?=base_url('admin_assets/');?>stylesheets/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="<?=base_url('admin_assets/');?>stylesheets/landerapp.min.css" rel="stylesheet" type="text/css">
	<link href="<?=base_url('admin_assets/');?>stylesheets/widgets.min.css" rel="stylesheet" type="text/css">
	<link href="<?=base_url('admin_assets/');?>stylesheets/pages.min.css" rel="stylesheet" type="text/css">
	<link href="<?=base_url('admin_assets/');?>stylesheets/rtl.min.css" rel="stylesheet" type="text/css">
	<link href="<?=base_url('admin_assets/');?>stylesheets/themes.min.css" rel="stylesheet" type="text/css">

	<!--[if lt IE 9]>
		<script src="assets/javascripts/ie.min.js"></script>
	<![endif]-->

</head>


<!-- 1. $BODY ======================================================================================
	
	Body

	Classes:
	* 'theme-{THEME NAME}'
	* 'right-to-left'      - Sets text direction to right-to-left
	* 'main-menu-right'    - Places the main menu on the right side
	* 'no-main-menu'       - Hides the main menu
	* 'main-navbar-fixed'  - Fixes the main navigation
	* 'main-menu-fixed'    - Fixes the main menu
	* 'main-menu-animated' - Animate main menu
-->
<body class="theme-default main-menu-animated">

<script>var init = [];</script>
<!-- Demo script --> <script src="<?=base_url('admin_assets/');?>demo/demo.js"></script> <!-- / Demo script -->

<div id="main-wrapper">


<!-- 2. $MAIN_NAVIGATION ===========================================================================

	Main navigation
-->
	<div id="main-navbar" class="navbar navbar-inverse" role="navigation">
		<!-- Main menu toggle -->
		<button type="button" id="main-menu-toggle"><i class="navbar-icon fa fa-bars icon"></i><span class="hide-menu-text">HIDE MENU</span></button>
		
		<div class="navbar-inner">
			<!-- Main navbar header -->
			<div class="navbar-header">

				<!-- Logo -->
				<a href="<?php echo base_url('admin');?>" class="navbar-brand">
					<strong>Admin Section</strong>
				</a>

				<!-- Main navbar toggle -->
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navbar-collapse"><i class="navbar-icon fa fa-bars"></i></button>

			</div> <!-- / .navbar-header -->

			<div id="main-navbar-collapse" class="collapse navbar-collapse main-navbar-collapse">
				<div>
					<ul class="nav navbar-nav">
						<li>
							<a href="<?php echo base_url('admin');?>">Home</a>
						</li>
						<!--<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown</a>
							<ul class="dropdown-menu">
								<li><a href="#">First item</a></li>
								<li><a href="#">Second item</a></li>
								<li class="divider"></li>
								<li><a href="#">Third item</a></li>
							</ul>
						</li>-->
					</ul> <!-- / .navbar-nav -->

					<div class="right clearfix">
						<ul class="nav navbar-nav pull-right right-navbar-nav">

<!-- 3. $NAVBAR_ICON_BUTTONS =======================================================================

							Navbar Icon Buttons

							NOTE: .nav-icon-btn triggers a dropdown menu on desktop screens only. On small screens .nav-icon-btn acts like a hyperlink.

							Classes:
							* 'nav-icon-btn-info'
							* 'nav-icon-btn-success'
							* 'nav-icon-btn-warning'
							* 'nav-icon-btn-danger' 
-->
						

							<li class="dropdown">
								<a href="#" class="dropdown-toggle user-menu" data-toggle="dropdown">
									<img src="<?=base_url('admin_assets/');?>demo/avatars/1.jpg" alt="">
									<span><?=$this->session->userdata('user');?></span>
								</a>
								<ul class="dropdown-menu">
									<!--<li><a href="#">Profile <span class="label label-warning pull-right">new</span></a></li>
									<li><a href="#">Account <span class="badge badge-primary pull-right">new</span></a></li>-->
									<li><a href="#"><i class="dropdown-icon fa fa-cog"></i>&nbsp;&nbsp;Settings</a></li>
									<li class="divider"></li>
									<li><a href="<?=base_url();?>admin/logout"><i class="dropdown-icon fa fa-power-off"></i>&nbsp;&nbsp;Log Out</a></li>
								</ul>
							</li>
						</ul> <!-- / .navbar-nav -->
					</div> <!-- / .right -->
				</div>
			</div> <!-- / #main-navbar-collapse -->
		</div> <!-- / .navbar-inner -->
	</div> <!-- / #main-navbar -->
<!-- /2. $END_MAIN_NAVIGATION -->


<!-- 4. $MAIN_MENU =================================================================================

		Main menu
		
		Notes:
		* to make the menu item active, add a class 'active' to the <li>
		  example: <li class="active">...</li>
		* multilevel submenu example:
			<li class="mm-dropdown">
			  <a href="#"><span class="mm-text">Submenu item text 1</span></a>
			  <ul>
				<li>...</li>
				<li class="mm-dropdown">
				  <a href="#"><span class="mm-text">Submenu item text 2</span></a>
				  <ul>
					<li>...</li>
					...
				  </ul>
				</li>
				...
			  </ul>
			</li>
-->
	<div id="main-menu" role="navigation">
		<div id="main-menu-inner">
			<div class="menu-content top" id="menu-content-demo">
				<!-- Menu custom content demo
					 Javascript: html/assets/demo/demo.js
				 -->
				<div>
					<div class="text-bg"><span class="text-slim">hi,</span> <span class="text-semibold"><?=$this->session->userdata('user');?></span></div>

					<img src="<?=base_url('admin_assets/');?>demo/avatars/1.jpg" alt="" class="">
					<!--<div class="btn-group">
						<a href="#" class="btn btn-xs btn-primary btn-outline dark"><i class="fa fa-envelope"></i></a>
						<a href="#" class="btn btn-xs btn-primary btn-outline dark"><i class="fa fa-user"></i></a>
						<a href="#" class="btn btn-xs btn-primary btn-outline dark"><i class="fa fa-cog"></i></a>
						<a href="#" class="btn btn-xs btn-danger btn-outline dark"><i class="fa fa-power-off"></i></a>
					</div>-->
					<a href="#" class="close">&times;</a>
				</div>
			</div>
			<ul class="navigation">
				
				<li class="mm-dropdown">
					<!--<a href="#"><i class="menu-icon fa fa-th"></i><span class="mm-text">Home</span></a>
					<ul>
                    	<!--<li>
							<a tabindex="-1" href="<?=base_url('Welcome/Invoice_list')?>"><span class="mm-text menu-icon fa  fa-minus-square"></span> InvoiceList</a>
						</li>-->
						
				
				</li>-->
				<li>
					<a href="<?=base_url('Admin');?>"><i class="menu-icon fa fa-dashboard"></i><span class="mm-text">Home</span></a>
				</li>
				<li>
					<a href="<?=base_url('Admin/team');?>"><i class="menu-icon fa fa-dashboard"></i><span class="mm-text">Employee's</span></a>
				</li>
				<li>
					<a href="<?=base_url('Admin/testimonials');?>"><i class="menu-icon fa fa-dashboard"></i><span class="mm-text">Testimonials</span></a>
				</li>
				<li>
					<a href="<?=base_url('Admin/projects');?>"><i class="menu-icon fa fa-dashboard"></i><span class="mm-text">Portfolio</span></a>
				</li>
			</ul> <!-- / .navigation -->
			<!--<div class="menu-content">
				<a href="pages-invoice.html" class="btn btn-primary btn-block btn-outline dark">Create Invoice</a>
			</div>-->
		</div> <!-- / #main-menu-inner -->
	</div> <!-- / #main-menu -->
<!-- /4. $MAIN_MENU -->


	