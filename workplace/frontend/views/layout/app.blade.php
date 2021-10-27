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
	<link type="text/css" rel="stylesheet" href="{{ base_url('assets/plugins/materialize/css/materialize.min.css') }}" media="screen,projection"/>
	@yield('css')
	<link type="text/css" rel="stylesheet" href="{{ base_url('assets/css/style.css') }}" />

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<header id="_header">
		<div class="navbar-fixed">
			<nav>
				<div class="nav-wrapper teal">
					<a href="{{ base_url() }}" class="brand-logo waves-effect waves-light">SiLab</a>
					<a href="#" data-activates="slide-out" class="button-collapse waves-effect waves-light"><i class="material-icons">menu</i></a>
					<ul class="right hide-on-med-and-down">
						<li><a href="{{ base_url() }}" class="waves-effect waves-light"><i class="material-icons left">home</i>Home</a></li>
						<li><a href="{{ base_url('profil') }}" class="waves-effect waves-light"><i class="material-icons left">account_box</i>Profil</a></li>
						<li><a href="{{ base_url('ketentuan') }}" class="waves-effect waves-light"><i class="material-icons left">announcement</i>Ketentuan</a></li>
						<li><a href="{{ base_url('jadwal') }}" class="waves-effect waves-light"><i class="material-icons left">event_note</i>Jadwal</a></li>
						<li><a href="{{ base_url('denah') }}" class="waves-effect waves-light"><i class="material-icons left">landscape</i>Denah</a></li>
						<li><a id="ide" href="" class="waves-effect waves-light"><i class="material-icons left">dns</i>Checkout</a></li>
						<li><a href="{{ base_url('kontak') }}" class="waves-effect waves-light"><i class="material-icons left">perm_phone_msg</i>Kontak</a></li>
						<li><a href="{{ base_url('login') }}" class="waves-effect waves-light"><i class="material-icons left">face</i>Login</a></li>
					</ul>
				</div>
			</nav>
		</div>
		<!-- Mobile Navigation -->
		<ul id="slide-out" class="side-nav">
			<li>
				<div class="userView">
					<div class="background">
						<img src='{{ $image->drawer == "default" ? base_url("assets/img/mobile.jpg") : base_url("storage/$image->drawer") }}'>
					</div>
					<a href="#!name"><span class="white-text name">SiLab</span></a>
					<a href="#!email"><span class="white-text email">Sistem Informasi Laboratorium</span></a>
				</div>
			</li>
			<li><a  href="{{ base_url() }}" class="waves-effect"><i class="material-icons left">home</i>Home</a></li>
			<li><a href="{{ base_url('profil') }}" class="waves-effect"><i class="material-icons left">account_box</i>Profil</a></li>
			<li><a href="{{ base_url('ketentuan') }}" class="waves-effect"><i class="material-icons left">announcement</i>Ketentuan</a></li>
			<li><a href="{{ base_url('jadwal') }}" class="waves-effect"><i class="material-icons left">event_note</i>Jadwal</a></li>
			<li><a href="{{ base_url('denah') }}" class="waves-effect"><i class="material-icons left">landscape</i>Denah</a></li>
			<li><a id="idec" href="" class="waves-effect"><i class="material-icons left">dns</i>Checkout</a></li>
			<li><a href="{{ base_url('kontak') }}" class="waves-effect"><i class="material-icons left">perm_phone_msg</i>Kontak</a></li>
			<li><a href="{{ base_url('login') }}" class="waves-effect"><i class="material-icons left">face</i>Login</a></li>
		</ul>
	</header>
	
	@yield('content')

	<footer class="page-footer teal">
		<div class="container">
			<div class="row">
				<div class="col l6 s12">
					<h5 class="white-text">{{ $footer->footer_description_title }}</h5>
					<p class="grey-text text-lighten-4">{{ $footer->footer_description_content }}</p>
				</div>
				<div class="col l4 offset-l2 s12">
					<h5 class="white-text">{{ $footer->footer_link_title }}</h5>
					<ul>
						@foreach ($footer->footer_link_content as $link)
							<li><a class="grey-text text-lighten-3" href="http://{{ $link->url }}" target="_blank">{{ $link->name }}</a></li>
						@endforeach
					</ul>
				</div>
			</div>
		</div>
		<div class="footer-copyright">
			<div class="container">
				&copy; {{ date('Y') }} SiLab by <a href="http://techarea.co.id/" target="_blank" style="color: inherit;"><strong>Tech</strong>area</a>.
				<a href="#_header" class="grey-text text-lighten-4 right">Top</a>
			</div>
		</div>
	</footer>

	<!--Import jQuery before materialize.js-->
	<script type="text/javascript" src="{{ base_url('assets/js/jquery-2.1.1.min.js') }}"></script>
	<script type="text/javascript" src="{{ base_url('assets/plugins/materialize/js/materialize.min.js') }}"></script>
	<script type="text/javascript" src="{{ base_url('assets/js/main.js') }}"></script>
	@yield('scripts')
	<script type="text/javascript">
	const id_guest =  localStorage.getItem("id_guest");
	$("#ide").attr("href", "<?= base_url('checkout/')?>"+id_guest);
	</script>
	<script type="text/javascript">
	const id_guest =  localStorage.getItem("id_guest");
	$("#idec").attr("href", "<?= base_url('checkout/')?>"+id_guest);
	</script>
</body>
</html>

