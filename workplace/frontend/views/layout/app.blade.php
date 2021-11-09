<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SiLab - Sistem Informasi Laboratorium</title>

	<!--Import Google Icon Font-->
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="{{ base_url('assets/plugins/materialize/css/materialize.min.css') }}"
		media="screen,projection" />
	@yield('css')
	<link type="text/css" rel="stylesheet" href="{{ base_url('assets/css/style.css') }}" />
</head>

<body>
	<header id="_header">
		<div class="navbar-fixed">
			<nav style="background-color: #64C5C7">
				<div class="container">
					<div class="nav-wrapper">
						<a href="{{ base_url() }}" class="brand-logo">
							<span style="color:white; margin:-10px;">Si</span>
    						<span style="color:#3036B8">Lab</span>
						</a>
						<a href="#" data-activates="slide-out" class="button-collapse waves-effect waves-light"><i
								class="material-icons">menu</i></a>
						<ul class="right hide-on-med-and-down">
							<li class="ade"><a href="{{ base_url() }}" class="waves-effect waves-light">Beranda</a></li>
							<li><a href="{{ base_url('profil') }}" class="waves-effect waves-light">Profil</a></li>
							<li><a href="{{ base_url('ketentuan') }}" class="waves-effect waves-light">Ketentuan</a>
							</li>
							<li><a href="{{ base_url('denah') }}" class="waves-effect waves-light">Denah</a></li>
							<li><a id="ide" href="" class="waves-effect waves-light"><i class="material-icons left">shopping_cart</i></a></li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>

	@yield('content')

	<footer class="page-footer" style="background-color: #64C5C7">
		<div class="footer">
			<div class="row">
				<div class="col l2 s10">
					<h5 class="white-text">{{ $footer->footer_description_title }}</h5>
					<p class="grey-text text-lighten-4">{{ $footer->footer_description_content }}</p>
				</div>
				<div class="col l3 offset-l2 s10">
					<h5 class="white-text">Kontak</h5>
					<p class="grey-text text-lighten-4">{{ $footer->footer_kontak_content }}</p>
				</div>
				<div class="col l3 offset-l2 s10">
					<h5 class="white-text">Jam Operasional</h5>
					<p class="grey-text text-lighten-4">{{ $footer->footer_operasional_content }}</p>
				</div>
			</div>
		</div>
		<div class="footer-copyright">
			<div class="container">
				<center><strong>&copy; SiLab</strong></center>
			</div>
		</div>
	</footer>

	<!--Import jQuery before materialize.js-->
	<script type="text/javascript" src="{{ base_url('assets/js/jquery-2.1.1.min.js') }}"></script>
	<script type="text/javascript" src="{{ base_url('assets/plugins/materialize/js/materialize.min.js') }}"></script>
	<script type="text/javascript" src="{{ base_url('assets/js/main.js') }}"></script>
	@yield('scripts')
	<script type="text/javascript">
		const id_guest = localStorage.getItem("id_guest");
		$("#ide").attr("href", "<?= base_url('checkout/')?>" + id_guest);
	</script>
	<script type="text/javascript">
		const id_guest = localStorage.getItem("id_guest");
		$("#idec").attr("href", "<?= base_url('checkout/')?>" + id_guest);
	</script>
</body>

</html>