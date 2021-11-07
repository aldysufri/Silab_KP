@extends('layout.app')

@section('content')
<section id="breadcrumbs">
	<nav style="background-color: #5BBCBE">
		<div class="container">
			<div class="col s12">
				<a href="{{ base_url() }}" class="breadcrumb" title="Home">Home</a>
				<a href="{{ current_url() }}" class="breadcrumb" title="Here">Checkout</a>
			</div>
		</div>
	</nav>
</section>

<section id="profil">
	@if ($data)
<div class="row">
		<div class="col s12">
			<div class="">
				<form action="" id="chekout" method="POST" enctype='multipart/form-data' role="form">
					<div style="margin-left: 15px">
					<div class="section">
					<center><h3 style="font-family: 'Poppins', sans-serif; font-weight: 700">Checkout</h3></center>
					<p style="text-align:center">ID Peminjaman: {{ $id }}</p>
					</div>
					<div class="row">
						<div class="input-field col s12 m10">
							<input id="nama" name="nama" type="text" class="validate" required="">
							<label for="name">Nama</label>
						</div>
						<div class="input-field col s12 m10">
							<input id="jurusan" name="jurusan_prodi" type="text" class="validate" required="">
							<label for="jurusan">Jurusan</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12 m2">
							<input id="nip" name="nim_nip" type="text" class="validate" required="">
							<label for="nip">NIP</label>
						</div>
						<div class="input-field col s12 m8">
							<input id="nohp" name="no_hp" type="text" class="validate" required="">
							<label for="nohp">No Telfone</label>
						</div>
					</div>
					</div>
					<div class="card-content" style="margin: 20px;">
						<table class="bordered highlight responsive-table">
							<thead>
								<tr>
									<th>Nama Barang</th>
									<th>Type Barang</th>
									<th>jumlah</th>
									<th>Tanggal Peminjaman</th>
									<th>Tanggal Pengembalian</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($item as $a)
								<tr>
									<td>{{ $a->nama_barang }}</td>
									<td>{{ $a->type_barang }}</td>
									<td>{{ $a->jumlah }}</td>
									<td>{{ $a->tanggal_start }}</td>
									<td>{{ $a->tanggal_end }}</td>
									<td>
										<a href="<?php echo base_url(); ?>checkout/delete/<?php echo $a->id_barang; ?>"
											class="btn btn red" style="border-radius: 20px">Hapus</a>
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
					<div style="padding: 10px" class="form-actions noborder"><button onclick="clickCounter()"
						type="submit" style="background-color: #64C5C7; border-radius:20px" name="proses" value="true" class="btn waves-effect waves-light">Submit</button></div>
			</div>
			<div id="result"></div>
			</form>

		</div>
		<div class="divider"></div>
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
						<p>Belum Terdapat Peminjaman</p>
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
	<script type="text/javascript" src="{{ base_url('assets/plugins/md-picker/js/scroll-into-view-if-needed.min.js') }}"></script>
	<script type="text/javascript" src="{{ base_url('assets/plugins/md-picker/js/draggabilly.pkgd.min.js') }}"></script>
	<script type="text/javascript" src="{{ base_url('assets/plugins/md-picker/js/mdDateTimePicker.min.js') }}"></script>
	<script type="text/javascript" src="{{ base_url('assets/plugins/bootstrap-sweetalert/sweetalert.min.js') }}"></script>
	
	@if ($flash = $this->session->flashdata('flash'))
		<script type="text/javascript">
			jQuery(function($){
				var title = '{{ $flash['title'] }}';
				var text = '{{ $flash['text'] }}';
				var type = '{{ $flash['type'] }}';
				if (type == 'error') {
					swal(title, text, type);
				} else {
					swal({
						title: title,
						text: text,
						type: type,
						confirmButtonText: "Download",
						closeOnConfirm: false
					}, function() {
						window.open('{{ $flash['pdf'] }}', '_blank');
						swal.close();
						localStorage.removeItem("id_guest");
						location.reload();
					});
				}
			});
		</script>
	@endif

<script>
	function clickCounter() {
		const id_guest = localStorage.getItem("id_guest");
		$("#chekout").attr("action", "<?= base_url('checkout/store/')?>" + id_guest);
	}
</script>
@endsection
