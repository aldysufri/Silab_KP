@extends('layout.app')

@section('breadcrumb')
<li><a href="{{ base_url('dashboard') }}">Home</a><i class="fa fa-circle"></i></li>
<li><a href="{{ base_url('dashboard/peminjaman') }}">Persuratan</a><i class="fa fa-circle"></i></li>
<li><span>Peminjaman</span></li>
@endsection

@section('page-title', 'Peminjaman')

@section('page-content')
<!-- BEGIN PORTLET-->
<div class="portlet light bordered">
    <div class="portlet-title">
        <div class="caption font-green">
            <i class="icon-note font-green"></i>
            <span class="caption-subject bold uppercase">Form Surat Peminjaman</span>
        </div>
    </div>
    <div class="portlet-body form">
        <form action="{{ base_url('dashboard/peminjaman/store') }}" method="POST" enctype='multipart/form-data'
            role="form" novalidate>
            <input type="hidden" name="{{ $this->security->get_csrf_token_name() }}" value="{{ $this->security->get_csrf_hash() }}">
            <div class="form-body">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="form-group form-md-line-input form-md-floating-label">
                            <input name="title" type="text" class="form-control" id="title" value="{{ $title }}" required>
                            <label for="title">Title</label>
                        </div>
                    </div>
                    <h4 class="form-title">Detail</h4>
                   <div class="col-xs-12">
                        <div class="form-group">
                            <textarea id="detail" name="detail" class="tinymce form-control" rows="6" placeholder="Detail"
                                required>{{ $detail }}</textarea>
                        </div>
                    </div> 
                    <div class="col-xs-12">
                        <div class="form-group form-md-line-input form-md-floating-label">
                            <input name="website" type="text" class="form-control" id="website" value="{{ $website }}" required>
                            <label for="website">Website</label>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group form-md-line-input form-md-floating-label">
                            <input name="email" type="text" class="form-control" id="email" value="{{ $email }}" required>
                            <label for="email">Email</label>
                        </div>
                    </div>
                    <div class="kanan">
                        <h4 class="form-title">Foto Kanan</h4>
                        <div class="col-xs-12 col-sm-2">
                            <div class="md-checkbox form-group form-md-line-input has-success">
                                <input type="checkbox" id="ganti_foto_kanan" name="ganti_foto_kanan" class="md-check" {{ $show_kanan == 'ya' ? 'checked' : '' }}>
                                <label for="ganti_foto_kanan">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Show Image
                                </label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group form-md-line-input form-md-floating-label">
                                <input name="kanan" type="file" class="form-control" accept="image/jpeg">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <div class="form-group form-md-line-input form-md-floating-label">
                                <input name="foto_kanan" type="text" class="form-control" id="foto_kanan" value="{{ $foto_kanan }}"
                                    required readonly>
                                <label for="foto_kanan">Nama Foto</label>
                            </div>
                        </div>
                    </div>

                    <div class="kiri">
                        <h4 class="form-title">Foto Kiri</h4>
                        <div class="col-xs-12 col-sm-2">
                            <div class="md-checkbox form-group form-md-line-input has-success">
                                <input type="checkbox" id="ganti_foto_kiri" name="ganti_foto_kiri" class="md-check" {{ $show_kiri == 'ya' ? 'checked' : '' }}>
                                <label for="ganti_foto_kiri">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Show Image
                                </label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group form-md-line-input form-md-floating-label">
                                <input name="kiri" type="file" class="form-control" accept="image/jpeg">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <div class="form-group form-md-line-input form-md-floating-label">
                                <input name="foto_kiri" type="text" class="form-control" id="foto_kiri" value="{{ $foto_kiri }}" required readonly>
                                <label for="foto_kiri">Nama Foto</label>
                            </div>
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