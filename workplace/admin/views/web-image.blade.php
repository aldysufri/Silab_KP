@extends('layout.app')

@section('breadcrumb')
	<li><a href="{{ base_url('dashboard') }}">Home</a><i class="fa fa-circle"></i></li>
	<li><a href="{{ base_url('dashboard/web-laboratorium') }}">Web Settings</a><i class="fa fa-circle"></i></li>
	<li><span>Image</span></li>
@endsection

@section('page-title', 'Image')

@section('page-content')
	<!-- BEGIN PORTLET-->
	<div class="portlet light bordered">
		<div class="portlet-title">
			<div class="caption font-green">
				<i class="icon-note font-green"></i>
				<span class="caption-subject bold uppercase">Form Image</span>
			</div>
		</div>
		<div class="portlet-body form">
			<form action="{{ base_url('dashboard/web-image/store') }}" method="POST" enctype='multipart/form-data' role="form">
				<input type="hidden" name="{{ $this->security->get_csrf_token_name() }}" value="{{ $this->security->get_csrf_hash() }}">
				<div class="form-body">
					<div class="row">
						<h4 class="form-title">Home Page Header</h4>
						<div class="col-xs-12 col-sm-2">
							<div class="md-checkbox form-group form-md-line-input has-success">
								<input type="checkbox" id="ganti_header" name="ganti_header" class="md-check">
								<label for="ganti_header">
									<span></span>
									<span class="check"></span>
									<span class="box"></span> Ganti Header
								</label>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6">
							<div class="form-group form-md-line-input form-md-floating-label">
								<input name="header" type="file" class="form-control" accept="image/jpeg">
							</div>
						</div>
						<div class="col-xs-12 col-sm-4">
							<div class="form-group form-md-line-input form-md-floating-label">
								<input name="nama_header" type="text" class="form-control" id="nama_header" value="{{ $header }}" required readonly>
								<label for="nama_header">Nama Gambar</label>
							</div>
						</div>
						<h4 class="form-title">Mobile Drawer</h4>
						<div class="col-xs-12 col-sm-2">
							<div class="md-checkbox form-group form-md-line-input has-success">
								<input type="checkbox" id="ganti_drawer" name="ganti_drawer" class="md-check">
								<label for="ganti_drawer">
									<span></span>
									<span class="check"></span>
									<span class="box"></span> Ganti Drawer
								</label>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6">
							<div class="form-group form-md-line-input form-md-floating-label">
								<input name="drawer" type="file" class="form-control"  accept="image/jpeg">
							</div>
						</div>
						<div class="col-xs-12 col-sm-4">
							<div class="form-group form-md-line-input form-md-floating-label">
								<input name="nama_drawer" type="text" class="form-control" id="nama_drawer" value="{{ $drawer }}" required readonly>
								<label for="nama_drawer">Nama Gambar</label>
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
	@if ($flash = $this->session->flashdata('flash'))
		<script type="text/javascript">
			jQuery(function($){
				swal('{{ $flash['title'] }}', '{{ $flash['text'] }}', '{{ $flash['type'] }}');
			});
		</script>
	@endif
	<!-- END PAGE LEVEL PLUGINS -->
@endsection
