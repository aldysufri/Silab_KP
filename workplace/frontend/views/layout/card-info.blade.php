<!DOCTYPE html>
<html lang="en">

<head>
	@yield('css')
	<link type="text/css" rel="stylesheet" href="{{ base_url('assets/css/style.css') }}" />
</head>

<body>
	<div class="col s12 m3">
		<div class="card hoverable">
			<div class="card-content">
					<center>
				<span class="card-title">{{ $lab->nama }}</span>
					</center>
				<div class="card-logo">
					<center>
						<h1 style="padding-top: 6px; color:white;  -webkit-text-stroke: 2px black;">
						    <span style="color:white; margin:-10px;">Si</span>
    						<span style="color:#3036B8">Lab</span>
						</h1>
					</center>
				</div>
				<p><strong>Telepon:</strong></p>
				<p>{{ $lab->telepon }}</p>
				<div class="divider space"></div>
				<p><strong>Alamat:</strong></p>
				<p>{{ $lab->alamat }}</p>
			</div>
		</div>
	</div>
</body>