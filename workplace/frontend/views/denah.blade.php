@extends('layout.app')

@section('content')
<section id="breadcrumbs">
	<nav style="background-color: #5BBCBE">
		<div class="container">
				<div class="col s12">
					<a href="{{ base_url() }}" class="breadcrumb" title="Home">Home</a>
					<a href="{{ current_url() }}" class="breadcrumb" title="Here">Denah</a>
				</div>
		</div>
	</nav>
</section>


	<section id="denah">
		<div class="row">
			<div class="col s12 m3">
				<div class="card hoverable">
					<div class="card-content">
						<span class="card-title">Denah</span>
						<div class="divider"></div>
						<div class="Denah">
							<address>
								<strong>{{ $lab->nama }}</strong><br>
								{{ $lab->alamat }}<br>
								<abbr title="Phone">Phone:</abbr>
								{{ $lab->telepon }}<br>
								Email: <a href="mailto:{{ $lab->email }}">{{ $lab->email }}</a>
							</address>
						</div>
					</div>
				</div>
			</div>
			<div class="col s12 m9">
				<div class="google-maps">
					<iframe src="{{ $lab->map_url }}" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</section>
@endsection

@section('css')
<style type="text/css">
	.denah-content {
		margin-top: 1rem;
	}
</style>
@endsection