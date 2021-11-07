@extends('layout.app')

@section('content')
<section id="breadcrumbs">
	<nav style="background-color: #5BBCBE">
		<div class="container">
			<div class="col s12">
				<a href="{{ base_url() }}" class="breadcrumb" title="Home">Home</a>
				<a href="{{ current_url() }}" class="breadcrumb" title="Here">Detail {{ ucwords($kategori) }}</a>
			</div>
		</div>
	</nav>
</section>

<section id="profil">
	@if ($data)
	<div class="row">
		<div class="col s12 m3">
			<div class="card hoverable">
				@if ($kategori == 'alat')
				<div class="card-image">
					<img src='{{ base_url("assets/img/alat/".$data[0]->foto) }}' alt="">
				</div>
				@else
				<div class="card-image">
					<img src='{{ $data[0]->foto_bahan }}'>
				</div>
				@endif
				<div class="card-content">
					<span class="card-title">{{ $data[0]->nama }}</span>
					<p><strong>Kondisi:</strong></p>
					<p>{{ $data[0]->kondisi }}</p>
					<div class="divider space"></div>
					<p><strong>Lokasi:</strong></p>
					<p>{{ $data[0]->lokasi }}</p>
				</div>
			</div>
		</div>
		<div class="col s12 m9">
			<div class="section">
				<h5>{{ $data[0]->nama }}</h5>
			</div>
			<div class="divider"></div>
			<div class="detail-content">
				<div class="row">
					<div class="col s12">
						<ul class="tabs">
							<li class="tab"><a class="active" href="#form_penggunaan">Form Penggunaan</a></li>
							<li class="tab"><a href="#antrian_penggunaan">Antrian Penggunaan</a></li>
						</ul>
					</div>
					<div id="form_penggunaan" class="col s12">
						<div class="card hoverable">
							<div class="card-content">
								<span class="card-title">Form Penggunaan {{ ucwords($kategori) }}</span>
								<div class="divider with-margin"></div>
								<div class="row form-content">
									<form class="col s12" action='{{ base_url("$kategori/$slug/store") }}'
										method="POST">
										<input type="hidden" name="{{ $this->security->get_csrf_token_name() }}"
											value="{{ $this->security->get_csrf_hash() }}">
										<input type="hidden" name="id_barang" value="{{ $xid }}">
										<input name="id_guest" value="" hidden type="text" id="id_guest">
										<input type="hidden" name="type_barang" value="{{ $kategori }}">
										<div class="row">
											<div class="input-field col s12 m2">
												<input id="jumlah" name="jumlah" type="number" class="validate"
													required="">
												<label for="jumlah">Jumlah</label>
											</div>
											<div class="input-field col s12 m10">
												<input id="keperluan" name="keperluan" type="text" class="validate"
													required="">
												<label for="keperluan">Keperluan</label>
											</div>
										</div>
										<div class="divider"></div>
										<div class="row">
											<div class="input-field col s12 m6">
												<input id="tanggal_penggunaan" name="tanggal_penggunaan" type="text"
													class="datepicker" onfocus="blur()" required="">
												<label for="tanggal_penggunaan">Tanggal Penggunaan</label>
											</div>
											<div class="input-field col s12 m6">
												<input id="jam_penggunaan" name="jam_penggunaan" type="text"
													class="timepicker" onfocus="blur()" required="">
												<label for="jam_penggunaan">Jam Penggunaan</label>
											</div>
										</div>
										<div class="row">
											<div class="input-field col s12 m6">
												<input id="tanggal_pengembalian" name="tanggal_pengembalian" type="text"
													class="datepicker" onfocus="blur()" required="">
												<label for="tanggal_pengembalian">Tanggal Pengembalian</label>
											</div>
											<div class="input-field col s12 m6">
												<input id="jam_pengembalian" name="jam_pengembalian" type="text"
													class="timepicker" onfocus="blur()" required="">
												<label for="jam_pengembalian">Jam Pengembalian</label>
											</div>
										</div>
										<div class="row">
										<button class="btn waves-effect waves-light" style="background-color: #64C5C7; border-radius:20px" type="submit" name="proses" id="btn" value="true">Proses</button>
										<button class="btn waves-effect waves-light" style="background-color: #ff3838; border-radius:20px" onclick="history.back()">Batal</button>
								</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div id="antrian_penggunaan" class="col s12">
					@if ($antrian)
					<div class="card hoverable">
						<div class="card-content">
							<span class="card-title">Antrian Penggunaan {{ ucwords($kategori) }}</span>
							<div class="divider with-margin"></div>
							<table class="bordered highlight responsive-table">
								<thead>
									<tr>
										<th>ID</th>
										<th>Nama</th>
										<th>Keperluan</th>
										<th>Peminjaman</th>
										<th>Pengembalian</th>
									</tr>
								</thead>
								<tbody>
									@foreach ($antrian as $item)
									<tr>
										<td>{{ $item->id_peminjaman }}</td>
										<td>{{ $item->nama }}</td>
										<td>{{ $item->keperluan }}</td>
										<td>{{ date('d-m-Y', strtotime($item->tanggal_start)) }}
											{{ date('H:i', strtotime($item->jam_start)) }}</td>
										<td>{{ date('d-m-Y', strtotime($item->tanggal_end)) }}
											{{ date('H:i', strtotime($item->jam_end)) }}</td>
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>
					</div>
					@else
					<div class="card hoverable">
						<div class="card-content">
							<span class="card-title">Antrian Penggunaan {{ ucwords($kategori) }}</span>
							<div class="divider with-margin"></div>
							<blockquote class="info">
								<p class="heading valign-wrapper cyan-text"><i class="material-icons">info</i>Informasi
								</p>
								<p>Tidak ada pengguna yang mengantri menggunakan alat.</p>
							</blockquote>
						</div>
					</div>
					@endif
				</div>
			</div>
		</div>
	</div>
	</div>
	@else
	<div class="row">
		<div class="col s12">
			<div class="card hoverable">
				<div class="card-content">
					<span class="card-title">Oops!</span>
					<div class="divider with-margin"></div>
					<blockquote class="info">
						<p class="heading valign-wrapper cyan-text"><i class="material-icons">info</i>Informasi</p>
						<p>Halaman yang anda cari tidak ditemukan.</p>
					</blockquote>
				</div>
			</div>
		</div>
	</div>
	@endif
</section>
@endsection

@section('css')
<link rel="stylesheet" type="text/css" href="{{ base_url('assets/plugins/md-picker/css/mdDateTimePicker.min.css') }}">
<link href="{{ base_url('assets/plugins/bootstrap-sweetalert/sweetalert.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('scripts')
<script type="text/javascript" src="{{ base_url('assets/plugins/md-picker/js/moment.min.js') }}"></script>
<script type="text/javascript" src="{{ base_url('assets/plugins/md-picker/js/moment.id.js') }}"></script>
<script type="text/javascript" src="{{ base_url('assets/plugins/md-picker/js/scroll-into-view-if-needed.min.js') }}">
</script>
<script type="text/javascript" src="{{ base_url('assets/plugins/md-picker/js/draggabilly.pkgd.min.js') }}"></script>
<script type="text/javascript" src="{{ base_url('assets/plugins/md-picker/js/mdDateTimePicker.min.js') }}"></script>
<script type="text/javascript" src="{{ base_url('assets/plugins/bootstrap-sweetalert/sweetalert.min.js') }}"></script>

<script type="text/javascript">
	$("#btn").click(function () {
		let nor = "<?php echo $peminjaman ?>"
		if (Storage !== "undefined") {
			let data;
			if (localStorage.id_guest) {
				let techStack = localStorage.getItem("id_guest");
				data = localStorage.id_guest = techStack;
			}else{
				data = localStorage.id_guest = nor;
			}
			document.getElementById("id_guest").value = data;
			console.log(data);
		}
	});
	
</script>

<script type="text/javascript">
	$(document).ready(function () {
		var MDPicker = function (target, type) {
			var target = document.getElementById(target);
			var dialog = new mdDateTimePicker.default({
				type: type,
				past: moment(),
				future: moment().add(1, 'years'),
				mode: true,
				colon: true,
				autoClose: true,
				inner24: true,
				trigger: target
			});

			target.addEventListener('click', function () {
				dialog.toggle();
			});

			target.addEventListener('onOk', function () {
				if (type == 'time') {
					this.value = dialog.time.format('HH:mm');
				} else if (type == 'date') {
					this.value = dialog.time.format('DD-MM-YYYY');
				}
				this.focus();
			});
		}

		MDPicker('tanggal_penggunaan', 'date');
		MDPicker('tanggal_pengembalian', 'date');
		MDPicker('jam_penggunaan', 'time');
		MDPicker('jam_pengembalian', 'time');
	});
</script>
@if ($flash = $this->session->flashdata('flash'))
<script type="text/javascript">
	jQuery(function($){
		var title = '{{ $flash['title'] }}';
		var text = '{{ $flash['text'] }}';
		var type = '{{ $flash['type'] }}';
		if (type == 'error') {
			swal(title, text, type);
		} else {
			// swal(title, text, type);
			swal({
				title: title,
				text: text,
				type: type,
				confirmButtonText: "Ok",
				closeOnConfirm: true
				});
		}
	});
</script>
@endif



@endsection