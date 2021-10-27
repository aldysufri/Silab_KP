@extends('layout.app')

@section('breadcrumb')
	<li><a href="{{ base_url('dashboard') }}">Home</a><i class="fa fa-circle"></i></li>
	<li><a href="{{ base_url('dashboard/web-laboratorium') }}">Web Settings</a><i class="fa fa-circle"></i></li>
	<li><span>Laboratorium</span></li>
@endsection

@section('page-title', 'Laboratorium')

@section('page-content')
	<!-- BEGIN PORTLET-->
	<div class="portlet light bordered">
		<div class="portlet-title">
			<div class="caption font-green">
				<i class="icon-note font-green"></i>
				<span class="caption-subject bold uppercase">Form Laboratorium</span>
			</div>
		</div>
		<div class="portlet-body form">
			<form action="{{ base_url('dashboard/web-laboratorium/store') }}" method="POST" enctype='multipart/form-data' role="form" novalidate>
				<input type="hidden" name="{{ $this->security->get_csrf_token_name() }}" value="{{ $this->security->get_csrf_hash() }}">
				<div class="form-body">
					<div class="row">
						<div class="col-xs-12 col-sm-6">
							<div class="form-group form-md-line-input form-md-floating-label">
								<input name="nama" type="text" class="form-control" id="nama" value="{{ $nama }}" required>
								<label for="nama">Nama Laboratorium</label>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6">
							<div class="form-group form-md-line-input form-md-floating-label">
								<input name="telepon" type="number" class="form-control" id="telepon" value="{{ $telepon }}" required>
								<label for="telepon">Telepon</label>
							</div>
						</div>
						<div class="col-xs-12">
							<div class="form-group form-md-line-input form-md-floating-label">
								<input name="alamat" type="text" class="form-control" id="alamat" value="{{ $alamat }}" required>
								<label for="alamat">Alamat</label>
							</div>
						</div>
						<div class="col-xs-12">
							<div class="form-group form-md-line-input form-md-floating-label">
								<input name="email" type="text" class="form-control" id="email" value="{{ $email }}" required>
								<label for="email">Email</label>
							</div>
						</div>
						<h4 class="form-title">Profil Laboratorium</h4>
						<div class="col-xs-12">
							<div class="form-group">
								<textarea name="profil" class="tinymce form-control" rows="6" placeholder="Profil" required>{{ $profil }}</textarea>
							</div>
						</div>
						<h4 class="form-title">Ketentuan Laboratorium</h4>
						<div class="col-xs-12">
							<div class="form-group">
								<textarea name="ketentuan" class="tinymce form-control" rows="6" placeholder="Ketentuan" required>{{ $ketentuan }}</textarea>
							</div>
						</div>
						<div class="col-xs-12">
							<div class="form-group form-md-line-input form-md-floating-label">
								<input name="map_url" type="text" class="form-control" id="map_url" value="{{ $map_url }}" >
								<label for="map_url">Google Maps URL</label>
							</div>
						</div>
						<h4 class="form-title">Foto Laboratorium</h4>
						<div class="col-xs-12 col-sm-2">
							<div class="md-checkbox form-group form-md-line-input has-success">
								<input type="checkbox" id="ganti_foto" name="ganti_foto" class="md-check">
								<label for="ganti_foto">
									<span></span>
									<span class="check"></span>
									<span class="box"></span> Ganti Foto
								</label>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6">
							<div class="form-group form-md-line-input form-md-floating-label">
								<input name="foto" type="file" class="form-control" accept="image/jpeg" >
							</div>
						</div>
						<div class="col-xs-12 col-sm-4">
							<div class="form-group form-md-line-input form-md-floating-label">
								<input name="nama_foto" type="text" class="form-control" id="nama_foto" value="{{ $foto }}" required readonly>
								<label for="nama_foto">Nama Foto</label>
							</div>
						</div>
						<h4 class="form-title">Denah Laboratorium</h4>
						<div class="col-xs-12 col-sm-2">
							<div class="md-checkbox form-group form-md-line-input has-success">
								<input type="checkbox" id="ganti_denah" name="ganti_denah" class="md-check">
								<label for="ganti_denah">
									<span></span>
									<span class="check"></span>
									<span class="box"></span> Ganti Denah
								</label>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6">
							<div class="form-group form-md-line-input form-md-floating-label">
								<input name="denah" type="file" class="form-control" accept="image/jpeg">
							</div>
						</div>
						<div class="col-xs-12 col-sm-4">
							<div class="form-group form-md-line-input form-md-floating-label">
								<input name="nama_denah" type="text" class="form-control" id="nama_denah" value="{{ $denah }}" required readonly>
								<label for="nama_denah">Nama Denah</label>
							</div>
						</div>
					</div>
				</div>
				<div class="form-actions noborder"><button type="submit" class="btn blue">Submit</button></div>
			</form>
		</div>
	</div>
	<!-- END PORTLET-->
@endsection

@section('css')
	<!-- BEGIN PAGE LEVEL PLUGINS -->
	<link href="{{ base_url('assets/plugins/bootstrap-sweetalert/sweetalert.css') }}" rel="stylesheet" type="text/css" />
	<style type="text/css">
		.form-title {
			padding-right: 15px;
			padding-left: 15px;
			font-weight: normal;
		}
		.md-checkbox label {
			padding-top: 7px;
		}
		.md-checkbox label>span.inc {
			top: 7px !important;
		}
		.md-checkbox label>.check {
			top: 22px !important;
		}
		.md-checkbox label>.box {
			top: 26px !important;
		}
	</style>
	<!-- END PAGE LEVEL PLUGINS -->
@endsection

@section('page-scripts')
	<!-- BEGIN PAGE LEVEL PLUGINS -->
	<script src="{{ base_url('assets/plugins/bootstrap-sweetalert/sweetalert.min.js') }}" type="text/javascript"></script>
	<script src="{{ base_url('assets/plugins/tinymce/tinymce.min.js') }}"></script>
	<script type="text/javascript">
		jQuery(function($) {
			tinymce.init({
				selector: ".tinymce",
				menubar: false,
				plugins: "advlist lists link responsivefilemanager code",
				toolbar: "undo redo | styleselect | bold italic underline | alignleft aligncenter alignright | bullist numlist | link unlink | responsivefilemanager code",
				external_filemanager_path:"/assets/plugins/filemanager/",
				filemanager_title:"Responsive Filemanager" ,
				external_plugins: { "filemanager" : "/assets/plugins/filemanager/plugin.min.js"}
			});
		});
	</script>
	@if ($flash = $this->session->flashdata('flash'))
		<script type="text/javascript">
			jQuery(function($){
				swal('{{ $flash['title'] }}', '{{ $flash['text'] }}', '{{ $flash['type'] }}');
			});
		</script>
	@endif
	<!-- END PAGE LEVEL PLUGINS -->
@endsection
