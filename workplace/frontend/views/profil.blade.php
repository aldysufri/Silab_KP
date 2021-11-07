@extends('layout.app')

@section('content')
<section id="breadcrumbs">
	<nav style="background-color: #5BBCBE">
		<div class="container">
			<div class="col s12">
				<a href="{{ base_url() }}" class="breadcrumb" title="Home">Home</a>
				<a href="{{ current_url() }}" class="breadcrumb" title="Here">Profil</a>
			</div>
		</div>
		</div>
	</nav>
</section>

<section id="profil">
	<div class="row">

		@include('layout.card-info')

		<div class="col s12 m9" style="margin-bottom: -72px;">
			<div class="section">
				<h5>Profil Laboratorium</h5>
			</div>
			<div class="divider"></div>
			<div class="denah-content">{{ $lab->profil }}</div>
		</div>
		<div class="col s1 m9">
			<div class="section">
				<h5>Visi</h5>
			</div>
			<div class="divider"></div>
			<div class="denah-content">"Terwujudnya Pusat Layanan Unggulan yang Berkualitas dan Kredibel dalam Bereksperimen"</div>
		</div>
		<div class="col s1 m9">
			<div class="section">
				<h5>Misi</h5>
			</div>
			<div class="divider"></div>
			<div class="denah-content">1. Terwujudnya layanan prima;<br />2. Terwujudnya Laboratorium sebagai
				Tempat Penyelesaian masalah;<br />3. Terwujudnya Laboratorium sesuai standar nasional
				Laboratorium.</div>
		</div>
	</div>
</section>
@endsection