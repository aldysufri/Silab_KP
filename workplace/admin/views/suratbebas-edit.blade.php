@extends('layout.app')

@section('breadcrumb')
	<li><a href="{{ base_url('dashboard') }}">Dashboard</a><i class="fa fa-circle"></i></li>
	<li><a href="{{ base_url('dashboard/suratbebas-semua') }}">Surat Bebas</a><i class="fa fa-circle"></i></li>
	<li><span>Edit</span></li>
@endsection

@section('page-title', 'Edit Surat Bebas')

@section('page-content')
	<!-- BEGIN PORTLET-->
	<div class="portlet light bordered">
		<div class="portlet-title">
			<div class="caption font-green">
				<i class="icon-note font-green"></i>
				<span class="caption-subject bold uppercase">Form Edit Surat Bebas</span>
			</div>
		</div>
		<div class="portlet-body form">
			<form action="{{ base_url('dashboard/suratbebas-patch') }}" method="POST" role="form">
				<input type="hidden" name="{{ $this->security->get_csrf_token_name() }}" value="{{ $this->security->get_csrf_hash() }}">
				<input type="hidden" name="id" value="{{ $data->id }}">
				<div class="form-body">
					<div class="row">
						<div class="col-xs-12 col-sm-6">
							<div class="form-group form-md-line-input form-md-floating-label">
								<input name="nama" type="text" class="form-control" value="{{ $data->nama }}" id="nama" required>
								<label for="nama">Nama</label>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6">
							<div class="form-group form-md-line-input form-md-floating-label">
								<input id="nim" name="nim" type="number" value="{{ $data->nim }}" class="form-control" required>
								<label for="nim">NIM</label>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6">
							<div class="form-group form-md-line-input form-md-floating-label">
								<input name="jurusan" type="text" class="form-control" value="{{ $data->jurusan }}" id="jurusan" required>
								<label for="jurusan">Jurusan</label>
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
	<link href="{{ base_url('assets/plugins/bootstrap-sweetalert/sweetalert.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('page-scripts')

	<script type="text/javascript" src="{{ base_url('assets/plugins/bootstrap-sweetalert/sweetalert.min.js') }}"></script>
	
	@if ($flash = $this->session->flashdata('flash'))
		<script type="text/javascript">
			jQuery(function($){
				swal('{{ $flash['title'] }}', '{{ $flash['text'] }}', '{{ $flash['type'] }}');
			});
		</script>
	@endif
@endsection
