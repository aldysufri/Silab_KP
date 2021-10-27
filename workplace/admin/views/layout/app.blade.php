<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
	<meta charset="utf-8" />
	<title>SiLab - Dashboard</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<meta content="Preview page of Metronic Admin Theme #1 for blank page layout" name="description" />
	<meta content="" name="author" />
	<!-- BEGIN GLOBAL MANDATORY STYLES -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
	<link href="{{ base_url('assets/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ base_url('assets/plugins/dashboard/plugins/simple-line-icons/simple-line-icons.min.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ base_url('assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ base_url('assets/plugins/dashboard/plugins/bootstrap-switch/css/bootstrap-switch.min.css') }}" rel="stylesheet" type="text/css" />
	<!-- END GLOBAL MANDATORY STYLES -->
	@yield('css')
	<!-- BEGIN THEME GLOBAL STYLES -->
	<link href="{{ base_url('assets/plugins/dashboard/css/components-md.min.css') }}" rel="stylesheet" id="style_components" type="text/css" />
	<link href="{{ base_url('assets/plugins/dashboard/css/plugins-md.min.css') }}" rel="stylesheet" type="text/css" />
	<!-- END THEME GLOBAL STYLES -->
	<!-- BEGIN THEME LAYOUT STYLES -->
	<link href="{{ base_url('assets/plugins/dashboard/css/layout.min.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ base_url('assets/plugins/dashboard/css/themes/darkblue.min.css') }}" rel="stylesheet" type="text/css" id="style_color" />
	<link href="{{ base_url('assets/plugins/dashboard/css/custom.min.css') }}" rel="stylesheet" type="text/css" />
	<!-- END THEME LAYOUT STYLES -->
</head>
<!-- END HEAD -->
<body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white page-md">
	<div class="page-wrapper">
		<!-- BEGIN HEADER -->
		<div class="page-header navbar navbar-fixed-top">
			<!-- BEGIN HEADER INNER -->
			<div class="page-header-inner ">
				<!-- BEGIN LOGO -->
				<div class="page-logo">
					<a href="{{ base_url('dashboard') }}">
						<img src="{{ base_url('assets/img/logo.png') }}" alt="logo" class="logo-default" />
					</a>
					<div class="menu-toggler sidebar-toggler"><span></span></div>
				</div>
				<!-- END LOGO -->
				<!-- BEGIN RESPONSIVE MENU TOGGLER -->
				<a href="#!" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"><span></span></a>
				<!-- END RESPONSIVE MENU TOGGLER -->
				<!-- BEGIN HORIZANTAL MENU -->
				<div class="hor-menu hidden-sm hidden-xs">
					<ul class="nav navbar-nav">
						<li class="classic-menu-dropdown active" aria-haspopup="true">
							<a href="{{ current_url() }}">Active<span class="selected"></span></a>
						</li>
						<li class="classic-menu-dropdown">
							<a href="{{ base_url() }}"><i class="icon-screen-desktop"></i> Website</a>
						</li>
					</ul>
				</div>
				<!-- END HORIZANTAL MENU -->
			</div>
			<!-- END HEADER INNER -->
		</div>
		<!-- END HEADER -->
		<!-- BEGIN HEADER & CONTENT DIVIDER -->
		<div class="clearfix"></div>
		<!-- END HEADER & CONTENT DIVIDER -->
		<!-- BEGIN CONTAINER -->
		<div class="page-container">
			<!-- BEGIN SIDEBAR -->
			<div class="page-sidebar-wrapper">
				<!-- BEGIN SIDEBAR -->
				<div class="page-sidebar navbar-collapse collapse">
					<!-- BEGIN SIDEBAR MENU -->
					<ul class="page-sidebar-menu  page-header-fixed" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
						<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
						<li class="sidebar-toggler-wrapper hide"><div class="sidebar-toggler"><span></span></div></li>
						<!-- END SIDEBAR TOGGLER BUTTON -->
						<li class="heading"><h3 class="uppercase">Menu Navigation</h3></li>
						<li class="nav-item">
							<a href="{{ base_url('dashboard') }}" class="nav-link nav-toggle">
								<i class="icon-home"></i>
								<span class="title">Dashboard</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="#!" class="nav-link nav-toggle">
								<i class="icon-layers"></i>
								<span class="title">Data Alat</span>
								<span class="arrow"></span>
							</a>
							<ul class="sub-menu">
								<li><a href="{{ base_url('dashboard/alat-baru') }}"><i class="fa fa-angle-double-right"></i>Buat Baru</a></li>
								<li><a href="{{ base_url('dashboard/alat-semua') }}"><i class="fa fa-angle-double-right"></i>Semua Alat</a></li>
							</ul>
						</li>
						<li class="nav-item">
							<a href="#!" class="nav-link nav-toggle">
								<i class="icon-chemistry"></i>
								<span class="title">Data Bahan</span>
								<span class="arrow"></span>
							</a>
							<ul class="sub-menu">
								<li><a href="{{ base_url('dashboard/bahan-baru') }}"><i class="fa fa-angle-double-right"></i>Buat Baru</a></li>
								<li><a href="{{ base_url('dashboard/bahan-semua') }}"><i class="fa fa-angle-double-right"></i>Semua Bahan</a></li>
							</ul>
						</li>

						<li class="nav-item">
							<a href="#!" class="nav-link nav-toggle">
								<i class="icon-check"></i>
								<span class="title">Konfirmasi</span>
								<span class="arrow"></span>
							</a>
							<ul class="sub-menu">
								<li><a href="{{ base_url('dashboard/konfirmasi-peminjaman') }}"><i class="fa fa-angle-double-right"></i>Peminjaman</a></li>
								<li><a href="{{ base_url('dashboard/konfirmasi-pengembalian') }}"><i class="fa fa-angle-double-right"></i>Pengembalian</a></li>
							</ul>
						</li>
						<li class="nav-item">
							<a href="#!" class="nav-link nav-toggle">
								<i class="icon-list"></i>
								<span class="title">Stok</span>
								<span class="arrow"></span>
							</a>
							<ul class="sub-menu">
								<li><a href="{{ base_url('dashboard/stok') }}"><i class="fa fa-angle-double-right"></i>Stok</a></li>
								<li class="nav-item">
										<a href="#!" class="nav-link nav-toggle">
											<i class="icon-list"></i>
											<span class="title">Laporan</span>
											<span class="arrow"></span>
										</a>
										<ul class="sub-menu">
											<li><a href="{{ base_url('dashboard/laporan-alat') }}"><i class="fa fa-angle-double-right"></i>laporan Alat</a></li>
											<li><a href="{{ base_url('dashboard/laporan-bahan') }}"><i class="fa fa-angle-double-right"></i>Laporan Bahan</a>
											<li><a href="{{ base_url('dashboard/laporan-transaksi') }}"><i class="fa fa-angle-double-right"></i>Laporan Transaksi</a></li>
										</ul>
									</li>
							</ul>
						</li>
						<li class="nav-item">
							<a href="#!" class="nav-link nav-toggle">
								<i class="icon-calendar"></i>
								<span class="title">Penjadwalan</span>
								<span class="arrow"></span>
							</a>
							<ul class="sub-menu">
								<li><a href="{{ base_url('dashboard/penjadwalan-baru') }}"><i class="fa fa-angle-double-right"></i>Buat Baru</a></li>
								<li><a href="{{ base_url('dashboard/penjadwalan-semua') }}"><i class="fa fa-angle-double-right"></i>Semua Jadwal</a></li>
							</ul>
						</li>

						<li class="nav-item">
							<a href="#!" class="nav-link nav-toggle">
								<i class="icon-docs"></i>
								<span class="title">Persuratan</span>
								<span class="arrow"></span>
							</a>
							<ul class="sub-menu">
								<li><a href="{{ base_url('dashboard/peminjaman') }}"><i class="fa fa-angle-double-right"></i>Peminjaman</a></li>
								<li><a href="{{ base_url('dashboard/suratbebas-baru') }}"><i class="fa fa-angle-double-right"></i>Buat Surat Bebas Lab Baru</a></li>
								<li><a href="{{ base_url('dashboard/suratbebas-semua') }}"><i class="fa fa-angle-double-right"></i>Surat Bebas Lab</a></li>
							</ul>
						</li>

						<li class="nav-item">
							<a href="{{ base_url('dashboard/daftar-peminjam') }}" class="nav-link nav-toggle">
								<i class="icon-list"></i>
								<span class="title">Daftar Peminjam</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="#!" class="nav-link nav-toggle">
								<i class="icon-puzzle"></i>
								<span class="title">Web Settings</span>
								<span class="arrow"></span>
							</a>
							<ul class="sub-menu">
								<li><a href="{{ base_url('dashboard/web-laboratorium') }}"><i class="fa fa-angle-double-right"></i>Laboratorium</a></li>
								<li><a href="{{ base_url('dashboard/web-image') }}"><i class="fa fa-angle-double-right"></i>Image</a></li>
								<li><a href="{{ base_url('dashboard/web-home-content') }}"><i class="fa fa-angle-double-right"></i>Home Content</a></li>
								<li><a href="{{ base_url('dashboard/web-footer') }}"><i class="fa fa-angle-double-right"></i>Footer</a></li>
							</ul>
						</li>
						<li class="nav-item">
							<a href="{{ base_url('dashboard/user-settings') }}" class="nav-link nav-toggle">
								<i class="icon-settings"></i>
								<span class="title">User Settings</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{ base_url('logout') }}" class="nav-link nav-toggle">
								<i class="icon-power"></i>
								<span class="title">Log Out</span>
							</a>
						</li>
					</ul>
					<!-- END SIDEBAR MENU -->
				</div>
				<!-- END SIDEBAR -->
			</div>
			<!-- END SIDEBAR -->
			<!-- BEGIN CONTENT -->
			<div class="page-content-wrapper">
				<!-- BEGIN CONTENT BODY -->
				<div class="page-content">
					<!-- BEGIN PAGE HEADER-->
					<!-- BEGIN PAGE BAR -->
					<div class="page-bar">
						<ul class="page-breadcrumb">
							@yield('breadcrumb')
						</ul>
					</div>
					<!-- END PAGE BAR -->
					<!-- BEGIN PAGE TITLE-->
					<h1 class="page-title">@yield('page-title')</h1>
					<!-- END PAGE TITLE-->
					<!-- END PAGE HEADER-->
					@yield('page-content')
				</div>
				<!-- END CONTENT BODY -->
			</div>
			<!-- END CONTENT -->
		</div>
		<!-- END CONTAINER -->
		<!-- BEGIN FOOTER -->
		<div class="page-footer">
			<div class="page-footer-inner">{{ date('Y') }} &copy; SiLab by <a href="http://techarea.co.id/" target="_blank" style="color: inherit;"><strong>Tech</strong>area</a>.</div>
			<div class="scroll-to-top"><i class="icon-arrow-up"></i></div>
		</div>
		<!-- END FOOTER -->
	</div>
	<!-- BEGIN CORE PLUGINS -->
	
	<script src="{{ base_url('assets/plugins/dashboard/plugins/jquery.min.js') }}" type="text/javascript"></script>
	<script src="{{ base_url('assets/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
	<script src="{{ base_url('assets/plugins/dashboard/plugins/js.cookie.min.js') }}" type="text/javascript"></script>
	<script src="{{ base_url('assets/plugins/dashboard/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
	<script src="{{ base_url('assets/plugins/dashboard/plugins/jquery.blockui.min.js') }}" type="text/javascript"></script>
	<script src="{{ base_url('assets/plugins/dashboard/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}" type="text/javascript"></script>
	<!-- END CORE PLUGINS -->
	@yield('scripts')
	<!-- BEGIN THEME GLOBAL SCRIPTS -->
	<script src="{{ base_url('assets/plugins/dashboard/scripts/app.min.js') }}" type="text/javascript"></script>
	<!-- END THEME GLOBAL SCRIPTS -->
	@yield('page-scripts')
	<!-- BEGIN THEME LAYOUT SCRIPTS -->
	<script src="{{ base_url('assets/plugins/dashboard/scripts/layout.min.js') }}" type="text/javascript"></script>
	<!-- END THEME LAYOUT SCRIPTS -->
</body>
</html>
