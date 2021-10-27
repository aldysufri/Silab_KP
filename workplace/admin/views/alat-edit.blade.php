@extends('layout.app')

@section('breadcrumb')
	<li><a href="{{ base_url('dashboard') }}">Dashboard</a><i class="fa fa-circle"></i></li>
	<li><a href="{{ base_url('dashboard/alat-semua') }}">Alat</a><i class="fa fa-circle"></i></li>
	<li><span>Edit</span></li>
@endsection

@section('page-title', 'Edit Alat')

@section('page-content')
	<!-- BEGIN PORTLET-->
	<div class="portlet light bordered">
		<div class="portlet-title">
			<div class="caption font-green">
				<i class="icon-note font-green"></i>
				<span class="caption-subject bold uppercase">Form Edit Alat</span>
			</div>
		</div>
		<div class="portlet-body form">
			<form action="{{ base_url('dashboard/alat-patch') }}" method="POST" enctype='multipart/form-data' role="form">
				<input type="hidden" name="{{ $this->security->get_csrf_token_name() }}" value="{{ $this->security->get_csrf_hash() }}">
				<input type="hidden" name="id_alat" value="{{ $data->id_alat }}">
				<div class="form-body">
					<div class="row">
						<div class="col-xs-12 col-sm-6">
							<div class="form-group form-md-line-input form-md-floating-label">
								<input name="nama_alat" type="text" class="form-control" value="{{ $data->nama_alat }}" id="nama_alat" required>
								<label for="nama_alat">Nama Alat</label>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6">
							<div class="form-group form-md-line-input form-md-floating-label">
								<input name="nama_merk" type="text" class="form-control" value="{{ $data->merk_alat }}" id="nama_merk" required>
								<label for="nama_merk">Nama Merk</label>
							</div>
						</div>
						<div class="col-xs-12 col-sm-3">
							<div class="form-group form-md-line-input form-md-floating-label">
								<input name="jumlah" type="number" class="form-control" value="{{ $data->jumlah_alat }}" id="jumlah" required>
								<label for="jumlah">Jumlah</label>
							</div>
						</div>
						<div class="col-xs-12 col-sm-3">
							<div class="form-group form-md-line-input form-md-floating-label">
								<input name="satuan_jumlah" type="text" class="form-control" value="{{ $data->satuan_alat }}" id="satuan_jumlah" required>
								<label for="satuan_jumlah">Satuan</label>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6">
							<div class="form-group form-md-line-input form-md-floating-label">
								<input name="tanggal_masuk" type="text" class="form-control" value="{{ date('d-m-Y', strtotime($data->tgl_masuk_alat)) }}" id="tanggal_masuk" onfocus="blur()" required>
								<label for="tanggal_masuk">Tanggal Masuk</label>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6">
							<div class="form-group form-md-line-input form-md-floating-label">
								<input name="lokasi_simpan" type="text" class="form-control" value="{{ $data->lokasi_alat }}" id="lokasi_simpan" required>
								<label for="lokasi_simpan">Lokasi Simpan</label>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6">
							<div class="form-group form-md-line-input form-md-floating-label">
								<input name="kondisi_alat" type="text" class="form-control" value="{{ $data->kondisi_alat }}" id="kondisi_alat" required>
								<label for="kondisi_alat">Kondisi ALat</label>
							</div>
						</div>
						<h4 class="form-title">Upload Foto</h4>
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
						<div class="col-xs-12 col-sm-1">
							<div class="form-group form-md-line-input form-md-floating-label">
									<a href="{{ base_url('assets/plugins/filemanager/dialog.php?type=1&field_id=ganti_foto1&relative_url=0&akey=' . $this->config->item('key.access')) }}" class="btn btn-success rfmanager"><i class="fa fa-photo"></i></a>
							</div>
						</div>
						<div class="col-xs-12 col-sm-4">
								<div class="form-group form-md-line-input form-md-floating-label">
										<input class="form-control" id="ganti_foto1" name="edit-foto" type="text"  readonly="readonly" style="padding-left: 1rem">							
								</div>
						</div>
						<div class="col-xs-12 col-sm-4">
							<div class="form-group form-md-line-input form-md-floating-label">
								<input type="text" class="form-control" value="{{ $data->foto_alat }}" readonly>
								<label >Nama Foto</label>
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
	<link rel="stylesheet" href="{{ base_url('assets/plugins/fancybox/source/jquery.fancybox.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ base_url('assets/plugins/md-picker/css/mdDateTimePicker.min.css') }}">
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
	<script src="{{ base_url('assets/plugins/fancybox/source/jquery.fancybox.js') }}" type="text/javascript"></script>
	<script>
		 jQuery(function($) {
			  $('.rfmanager').fancybox({
				   type: 'iframe',
				   iframe: {
						css: {
							 width: '1000',
							 height: '570'
						}
				   }
			  });
	
			  function OnMessage(e){
				   var event = e.originalEvent;
				   if (event.data.sender === 'responsivefilemanager') {
						alert('responsivefilemanager');
						if (event.data.field_id) {
							 alert('jika ada');
							 var fieldID = event.data.field_id;
							 var url = event.data.url;
							 $('#'+fieldID).val(url).trigger('change');
							 $.fancybox.close();     
							 $(window).off('message', OnMessage);
						}
				   }
			  }
		 })
		 </script>
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

			MDPicker('tanggal_masuk', 'date');
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
