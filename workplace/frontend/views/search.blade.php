@extends('layout.app')

@section('content')
<section id="breadcrumbs">
	<nav style="background-color: #5BBCBE">
		<div class="container">
			<div class="col s12">
				<a href="{{ base_url() }}" class="breadcrumb" title="Home">Home</a>
				<a href="{{ current_url() }}" class="breadcrumb" title="Here">Search</a>
			</div>
		</div>
	</nav>
</section>

<section id="search">
	<div class="row">
		<div class="container">
			<form class="col s12" action="{{ base_url('search') }}" method="POST">
				<div class="card hoverable">
					<div class="card-content black-text">
						<div class="row">
							<div class="input-field col s12 m2">
								<select name="kategori">
									@foreach ($slug_cat as $key => $val)
									<option value="{{ $key }}" {{ ($key == $kategori) ? 'selected' : NULL }}>{{ $val }}
									</option>
									@endforeach;
								</select>
							</div>
							<div class="input-field col s12 m8">
								<input id="name" name="keywords" type="text" value="{{ $keyword }}" class="validate">
								<label for="name">Search name</label>
							</div>
							<div class="input-field col s12 m2">
								<button class="btn waves-effect waves-light" type="submit" name="search">Search</button>
							</div>
						</div>
					</div>
				</div>
			</form>

			<section class="col s12">
				@forelse ($data as $item)
				<a href="{{ base_url("$kategori/$item->id-". url_title($item->nama)) }}">
					<div class="card hoverable">
						<div class="card-content black-text">
							<span class="card-title">{{ $item->nama }}</span>
							<div class="divider"></div>
							<p class="tags"><span class="btn">{{ $item->lokasi }}</span> <span
									class="btn blue">{{ $item->kondisi }}</span></p>
						</div>
					</div>
				</a>
				@empty
				<div class="card hoverable">
					<div class="card-content">
						<blockquote class="info">
							<p class="heading valign-wrapper cyan-text"><i class="material-icons">info</i>Informasi</p>
							<p>Tidak ada data yang ditemukan.</p>
						</blockquote>
					</div>
				</div>
				@endforelse
			</section>

			<section class="col s12">
				@php
				$setConfig = array(
				'base_url' => $xpage->base_url,
				'first_url' => $xpage->first_url,
				'total_rows' => $xpage->num_rows,
				'per_page' => $xpage->per_page,
				'uri_segment' => $xpage->uri_segment
				);
				$this->pagination->initialize($setConfig);
				@endphp
				{{ $this->pagination->create_links(); }}
			</section>
		</div>
	</div>
</section>
@endsection

@section('css')
<style type="text/css">
	p.tags {
		padding-top: 1rem;
	}

	p.tags span.btn {
		height: 30px;
		line-height: 30px;
		padding: 0 .75rem;
		text-transform: none;
	}
</style>
@endsection