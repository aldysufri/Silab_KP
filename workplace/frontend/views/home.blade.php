@extends('layout.app')

@section('content')
<marquee class="run" width="100%" height="20">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam enim
	ratione voluptatibus omnis labore modi, excepturi exercitationem fuga, perspiciatis impedit cum nulla recusandae ad
	ut, nam sit.</marquee>
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
							<button class="btn waves-effect waves-light"
								style="margin-top: 20px; background-color: #64C5C7; border-radius:20px" type="submit"
								name="search">Search</button>
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

	<div class="gallery" style="padding-left:50px;">
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

	<div class="gallery">
	<h2>Berita</h2>
	</div>
	<div class="gallery">
		<div class="card news">
			<h2>Bio Farma Sebut Program Vaksinasi COVID-19 Bisa Gratis</h2>
			<h5>Kamis, 19 November 2020</h5>
			<img src="https://pict.sindonews.net/dyn/620/pena/news/2020/11/19/701/238102/bio-farma-sebut-program-vaksinasi-covid19-bisa-gratis-ned.png" class="imgnews" alt="" />
			<p>Kamis, 19 November 2020 - 15:55 WIB loading... Bio Farma Sebut Program Vaksinasi COVID-19 Bisa Gratis. Foto/SINDOnews/Arif BANDUNG - Program vaksinasi COVID-19 kepada masyarakat Indonesia hingga kini masih menjadi polemik, terkait biaya. Banyak isu b...</p>
			<p><a href="https://daerah.sindonews.com/read/238102/701/bio-farma-sebut-program-vaksinasi-covid-19-bisa-gratis-1605773514">Some text..</a></p>
		</div>
		<div class="card news">
			<h2>Samoa Laporkan Kasus Pertama Covid-19</h2>
			<h5>Kamis, 19 November 2020</h5>
			<img src="https://static.republika.co.id/uploads/images/inpicture_slide/virus-corona-dalam-tampilan-mikroskopik_200508145120-348.jpg" class="imgnews" alt="" />
			<p>Pasien Covid-19 pertama di Samoa adalah seorang pelaut. REPUBLIKA.CO.ID, APIA -- Samoa melaporkan kasus Covid-19 pertama, Kamis (19/11). Masyarakat diimbau tetap tenang dan selalu menerapkan tindakan pencegahan seperti rutin mencuci tangan dan menjag...</p>
			<p><a href="https://www.republika.co.id/berita/qk1cph377/samoa-laporkan-kasus-pertama-covid19">Some text..</a></p>
		</div>
		<div class="card news">
			<h2>Menkeu: Kita harus hati-hati karena pemulihan masih tahap awal</h2>
			<h5>Kamis, 19 November 2020</h5>
		<img src="https://cdn.antaranews.com/cache/800x533/2020/11/18/menkeu-dalam-digital-transformasi-27102020_1.jpg" class="imgnews" alt="" />
		<p>Menteri Keuangan (Menkeu) Sri Mulyani Indrawati mengatakan pemulihan dan pembalikan tren dari kondisi kontraksi menuju positif di beberapa sektor pada kuartal III harus sangat dijaga secara hati-hati karena masih tahap awal. Menkeu mengatakan hal itu...</p>
		<p><a href="https://www.antaranews.com/berita/1848384/menkeu-kita-harus-hati-hati-karena-pemulihan-masih-tahap-awal">Some text..</a></p>
		</div>
	</div>

	</div>
</section>

@endsection