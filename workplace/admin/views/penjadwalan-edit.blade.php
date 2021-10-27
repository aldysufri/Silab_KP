@extends('layout.app')

@section('breadcrumb')
	<li><a href="{{ base_url('dashboard') }}">Dashboard</a><i class="fa fa-circle"></i></li>
	<li><a href="{{ base_url('dashboard/penjadwalan-semua') }}">Penjadwalan</a><i class="fa fa-circle"></i></li>
	<li><span>Edit</span></li>
@endsection

@section('page-title', 'Edit Penjadwalan')

@section('page-content')
	<!-- BEGIN PORTLET-->
	<div class="portlet light bordered">
		<div class="portlet-title">
			<div class="caption font-green">
				<i class="icon-note font-green"></i>
				<span class="caption-subject bold uppercase">Form Edit Penjadwalan</span>
			</div>
		</div>
		<div class="portlet-body form">
			<form action="{{ base_url('dashboard/penjadwalan-patch') }}" method="POST" role="form">
				<input type="hidden" name="{{ $this->security->get_csrf_token_name() }}" value="{{ $this->security->get_csrf_hash() }}">
				<input type="hidden" name="id_alat" value="{{ $data->id_kegiatan }}">
				<div class="form-body">
					<div class="row">
						<div class="col-xs-12 col-sm-6">
							<div class="form-group form-md-line-input form-md-floating-label">
								<input name="nama_kegiatan" type="text" class="form-control" value="{{ $data->nama_kegiatan }}" id="nama_kegiatan" required>
								<label for="nama_kegiatan">Nama Kegiatan</label>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6">
							<div class="form-group form-md-line-input form-md-floating-label">
								<input name="tanggal_kegiatan" type="text" class="form-control" value="{{ date('d-m-Y', strtotime($data->tanggal_kegiatan)) }}" id="tanggal_kegiatan" onfocus="blur()" required>
								<label for="tanggal_kegiatan">Tanggal Kegiatan</label>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6">
							<div class="form-group form-md-line-input form-md-floating-label">
								<input name="jam_kegiatan" type="text" class="form-control" value="{{ date('H:i', strtotime($data->jam_kegiatan)) }}" id="jam_kegiatan" onfocus="blur()" required>
								<label for="jam_kegiatan">Jam Kegiatan</label>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6">
							<div class="form-group form-md-line-input form-md-floating-label">
								<input name="ruang_kegiatan" type="text" class="form-control" value="{{ $data->ruang_kegiatan }}" id="ruang_kegiatan" required>
								<label for="ruang_kegiatan">Ruang Kegiatan</label>
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
	<link rel="stylesheet" type="text/css" href="{{ base_url('assets/plugins/md-picker/css/mdDateTimePicker.min.css') }}">
	<link href="{{ base_url('assets/plugins/bootstrap-sweetalert/sweetalert.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('page-scripts')
	<script type="text/javascript" src="{{ base_url('assets/plugins/md-picker/js/moment.min.js') }}"></script>
	<script type="text/javascript" src="{{ base_url('assets/plugins/md-picker/js/moment.id.js') }}"></script>
	<script type="text/javascript" src="{{ base_url('assets/plugins/md-picker/js/scroll-into-view-if-needed.min.js') }}"></script>
	<script type="text/javascript" src="{{ base_url('assets/plugins/md-picker/js/draggabilly.pkgd.min.js') }}"></script>
	<script type="text/javascript" src="{{ base_url('assets/plugins/md-picker/js/mdDateTimePicker.min.js') }}"></script>
	<script type="text/javascript" src="{{ base_url('assets/plugins/bootstrap-sweetalert/sweetalert.min.js') }}"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			var MDPicker = function(target, type) {
				var target = document.getElementById(target);
				var dialog = new mdDateTimePicker.default({
					type: type,
					mode: true,
					colon: true,
					autoClose: true,
					inner24: true,
					past: moment(),
					future: moment().add(1, 'years'),
					trigger: target
				});

				target.addEventListener('click', function() {
					dialog.toggle();
				});

				target.addEventListener('onOk', function() {
					if (type == 'time') {
						this.value = dialog.time.format('HH:mm');
					} else if (type == 'date') {
						this.value = dialog.time.format('DD-MM-YYYY');
					}
					this.focus();
				});
			};

			MDPicker('tanggal_kegiatan', 'date');
			MDPicker('jam_kegiatan', 'time');
		});
	</script>
	@if ($flash = $this->session->flashdata('flash'))
		<script type="text/javascript">
			jQuery(function($){
				swal('{{ $flash['title'] }}', '{{ $flash['text'] }}', '{{ $flash['type'] }}');
			});
		</script>
	@endif
@endsection
