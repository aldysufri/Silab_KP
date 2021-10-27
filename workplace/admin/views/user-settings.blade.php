@extends('layout.app')

@section('breadcrumb')
	<li><a href="{{ base_url('dashboard') }}">Home</a><i class="fa fa-circle"></i></li>
	<li><span>User Settings</span></li>
@endsection

@section('page-title', 'User Settings')

@section('page-content')
	<!-- BEGIN PORTLET-->
	<div class="portlet light bordered">
		<div class="portlet-title">
			<div class="caption font-green">
				<i class="icon-note font-green"></i>
				<span class="caption-subject bold uppercase">Form User Settings</span>
			</div>
		</div>
		<div class="portlet-body form">
			<form action="{{ base_url('dashboard/user-settings/store/info') }}" method="POST" role="form">
				<input type="hidden" name="{{ $this->security->get_csrf_token_name() }}" value="{{ $this->security->get_csrf_hash() }}">
				<div class="form-body">
					<div class="row">
						<div class="col-xs-12 col-sm-6">
							<div class="form-group form-md-line-input form-md-floating-label">
								<input name="username" type="text" class="form-control" value="{{ $username }}" id="username" required>
								<label for="username">Username</label>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6">
							<div class="form-group form-md-line-input form-md-floating-label">
								<input name="email" type="email" class="form-control" value="{{ $email }}" id="email" required>
								<label for="email">Email</label>
							</div>
						</div>
					</div>
				</div>
				<div class="form-actions noborder"><button type="submit" class="btn blue">Submit</button></div>
			</form>
		</div>
	</div>

	<div class="portlet light bordered">
		<div class="portlet-title">
			<div class="caption font-green">
				<i class="icon-note font-green"></i>
				<span class="caption-subject bold uppercase">Form Ganti Password</span>
			</div>
		</div>
		<div class="portlet-body form">
			<form action="{{ base_url('dashboard/user-settings/store/password') }}" method="POST" role="form">
				<input type="hidden" name="{{ $this->security->get_csrf_token_name() }}" value="{{ $this->security->get_csrf_hash() }}">
				<div class="form-body">
					<div class="row">
						<div class="col-xs-12 col-sm-4">
							<div class="form-group form-md-line-input form-md-floating-label">
								<input name="old_password" type="password" class="form-control" id="old_password" required>
								<label for="old_password">Password lama</label>
							</div>
						</div>
						<div class="col-xs-12 col-sm-4">
							<div class="form-group form-md-line-input form-md-floating-label">
								<input name="new_password" type="password" class="form-control" id="new_password" required>
								<label for="new_password">Password Baru</label>
							</div>
						</div>
						<div class="col-xs-12 col-sm-4">
							<div class="form-group form-md-line-input form-md-floating-label">
								<input name="new_password_confirm" type="password" class="form-control" id="new_password_confirm" required>
								<label for="new_password_confirm">Konfirmasi Password</label>
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
