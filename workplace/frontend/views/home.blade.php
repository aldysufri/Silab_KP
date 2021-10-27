@extends('layout.app')

@section('content')
<section id="parallax">
	<div class="parallax-container">
		<h1 class="header">Sistem Informasi Laboratorium</h1>
		<p class="header">"Manfaatkan Fasiltas Tanpa Batas"</p>
		<div class="parallax"><img
				src='{{ $image->header == "default" ? base_url("assets/img/hero.jpg") : base_url("storage/$image->header") }}'
				class="hero" height="10px"></div>
	</div>
</section>

<div class="container ad">
	<div class="row">
		<form class="col s12" action="{{ base_url('search') }}" method="POST">
			<div class="card hoverable">
				<div class="card-content black-text">
					<div class="row">
						<div class="input-field col s12 m2">
							<select name="kategori">
								<option value="alat">Alat</option>
								<option value="bahan">Bahan</option>
							</select>
						</div>
						<div class="input-field col s12 m8">
							<input id="name" name="keywords" type="text" class="validate">
							<label for="name">Search name</label>
						</div>
						<div class="input-field col s12 m2">
							<button class="btn waves-effect waves-light" style="margin-top: 20px; background-color: #64C5C7; border-radius:20px" type="submit" name="search">Search</button>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>

<section id="info" class="grey lighten-4">
	<div class="container bt">
		<div class="row">
			<div class="col s12 m4">
				<div class="card white hoverable">
					<div class="card-content black-text">
						<span class="card-title"><i
								class="material-icons blue-text">{{ $card->left_card_icon }}</i>{{ $card->left_card_title }}</span>
						<div class="divider"></div>
						<p>{{ $card->left_card_content }}</p>
					</div>
				</div>
			</div>
			<div class="col s12 m4">
				<div class="card white hoverable">
					<div class="card-content black-text">
						<span class="card-title"><i
								class="material-icons teal-text">{{ $card->center_card_icon }}</i>{{ $card->center_card_title }}</span>
						<div class="divider"></div>
						<p>{{ $card->center_card_content }}</p>
					</div>
				</div>
			</div>
			<div class="col s12 m4">
				<div class="card white hoverable">
					<div class="card-content black-text">
						<span class="card-title"><i
								class="material-icons red-text">{{ $card->right_card_icon }}</i>{{ $card->right_card_title }}</span>
						<div class="divider"></div>
						<p>{{ $card->right_card_content }}</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="gallery">
		<h2>Gallery</h2>
		<img src="https://source.unsplash.com/random/201x201/?Laboratory" alt="" />
		<img src="https://source.unsplash.com/random/202x202/?Laboratory" alt="" />
		<img src="https://source.unsplash.com/random/203x203/?Laboratory" alt="" />
		<img src="https://source.unsplash.com/random/204x204/?Laboratory" alt="" />
		<img src="https://source.unsplash.com/random/205x205/?Laboratory" alt="" />
		<img src="https://source.unsplash.com/random/206x206/?Laboratory" alt="" />
		<img src="https://source.unsplash.com/random/207x207/?Laboratory" alt="" />
		<img src="https://source.unsplash.com/random/208x208/?Laboratory" alt="" />
		<img src="https://source.unsplash.com/random/209x209/?Laboratory" alt="" />
		<img src="https://source.unsplash.com/random/205x209/?Laboratory" alt="" />
	</div>
</section>

@endsection