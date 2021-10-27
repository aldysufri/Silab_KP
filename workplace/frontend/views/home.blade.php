@extends('layout.app')

@section('content')
	<section id="parallax">
		<div class="parallax-container">
			<h1 class="header">Sistem Informasi Laboratorium</h1>
			<div class="parallax"><img src='{{ $image->header == "default" ? base_url("assets/img/header.jpg") : base_url("storage/$image->header") }}' class="img-responsive"></div>
		</div>
	</section>

	<section id="search" class="grey lighten-4">
		<div class="container">
			<div class="row">
				<form class="col s12" action="{{ base_url('search') }}" method="POST">
					<div class="card hoverable">
						<div class="card-content black-text">
							<div class="row">
								<div class="input-field col s12 m2">
									<select name="kategori" >
										<option value="alat">Alat</option>
										<option value="bahan">Bahan</option>
									</select>
								</div>
								<div class="input-field col s12 m8">
									<input id="name" name="keywords" type="text" class="validate">
									<label for="name">Search name</label>
								</div>
								<div class="input-field col s12 m2">
									<button class="btn waves-effect waves-light" type="submit" name="search">Search</button>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</section>

	<section id="info" class="grey lighten-4">
		<div class="container">
			<div class="row">
				<div class="col s12 m4">
					<div class="card white hoverable">
						<div class="card-content black-text">
							<span class="card-title"><i class="material-icons blue-text">{{ $card->left_card_icon }}</i>{{ $card->left_card_title }}</span>
							<div class="divider"></div>
							<p>{{ $card->left_card_content }}</p>
						</div>
					</div>
				</div>
				<div class="col s12 m4">
					<div class="card white hoverable">
						<div class="card-content black-text">
							<span class="card-title"><i class="material-icons teal-text">{{ $card->center_card_icon }}</i>{{ $card->center_card_title }}</span>
							<div class="divider"></div>
							<p>{{ $card->center_card_content }}</p>
						</div>
					</div>
				</div>
				<div class="col s12 m4">
					<div class="card white hoverable">
						<div class="card-content black-text">
							<span class="card-title"><i class="material-icons red-text">{{ $card->right_card_icon }}</i>{{ $card->right_card_title }}</span>
							<div class="divider"></div>
							<p>{{ $card->right_card_content }}</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection
