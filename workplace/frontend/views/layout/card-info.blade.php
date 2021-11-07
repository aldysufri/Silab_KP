<!DOCTYPE html>
<html lang="en">

<head>
	@yield('css')
	<link type="text/css" rel="stylesheet" href="{{ base_url('assets/css/style.css') }}" />
</head>

<body>
<div class="col s12 m3">
	<div class="card hoverable">
		<div class="card-logo">
			<center><h1 style="padding-top: 65px;">SiLab</h1></center>
		</div>
		<div class="card-content">
			<span class="card-title">{{ $lab->nama }}</span>
			<p><strong>Telepon:</strong></p>
			<p>{{ $lab->telepon }}</p>
			<div class="divider space"></div>
			<p><strong>Alamat:</strong></p>
			<p>{{ $lab->alamat }}</p>
		</div>
	</div>
</div>
</body>
