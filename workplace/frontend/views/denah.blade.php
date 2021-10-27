@extends('layout.app')

@section('content')
	<section id="breadcrumbs">
		<nav>
			<div class="nav-wrapper teal darken-1">
				<div class="col s12">
					<a href="{{ base_url() }}" class="breadcrumb" title="Home">Home</a>
					<a href="{{ current_url() }}" class="breadcrumb" title="Here">Denah</a>
				</div>
			</div>
		</nav>
	</section>

	<section id="denah">
		<div class="row">
			
			@include('layout.card-info')

			<div class="col s12 m9">
				<div class="section">
					<h5>Denah Laboratorium</h5>
				</div>
				<div class="divider"></div>
				<div class="denah-content">
					@if ($lab->denah == 'default')
						<img src="{{ base_url('assets/img/mobile.jpg') }}" class="responsive-img">
					@else
						<img src="{{ base_url("storage/$lab->denah") }}" class="responsive-img">
					@endif
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
