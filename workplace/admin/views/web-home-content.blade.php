@extends('layout.app')

@section('breadcrumb')
	<li><a href="{{ base_url('dashboard') }}">Home</a><i class="fa fa-circle"></i></li>
	<li><a href="{{ base_url('dashboard/web-laboratorium') }}">Web Settings</a><i class="fa fa-circle"></i></li>
	<li><span>Home Content</span></li>
@endsection

@section('page-title', 'Home Content')

@section('page-content')
	<!-- BEGIN PORTLET-->
	<div class="portlet light bordered">
		<div class="portlet-title">
			<div class="caption font-green">
				<i class="icon-note font-green"></i>
				<span class="caption-subject bold uppercase">Form Home Content</span>
			</div>
		</div>
		<div class="portlet-body form">
			<p>Referensi nama icon bisa dilihat <a href="https://material.io/icons/" target="_blank" title="Material Icons">di sini</a>.</p>
			<form action="{{ base_url('dashboard/web-home-content/store') }}" method="POST" role="form">
				<input type="hidden" name="{{ $this->security->get_csrf_token_name() }}" value="{{ $this->security->get_csrf_hash() }}">
				<div class="form-body">
					<div class="row">
						<h4 class="form-title">Left Card Form</h4>
						<div class="col-xs-12 col-sm-6">
							<div class="form-group form-md-line-input form-md-floating-label has-success">
								<input name="left_card_icon" type="text" class="form-control" id="left_card_icon" value="{{ $left_card_icon }}" required>
								<label for="left_card_icon">Card Icon</label>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6">
							<div class="form-group form-md-line-input form-md-floating-label has-success">
								<input name="left_card_title" type="text" class="form-control" id="left_card_title" value="{{ $left_card_title }}" required>
								<label for="left_card_title">Card Title</label>
							</div>
						</div>
						<div class="col-xs-12">
							<div class="form-group form-md-line-input form-md-floating-label has-success">
								<textarea name="left_card_content" class="form-control" rows="3" id="left_card_content" required>{{ $left_card_content }}</textarea>
								<label for="left_card_content">Card content</label>
							</div>
						</div>
						<h4 class="form-title">Center Card Form</h4>
						<div class="col-xs-12 col-sm-6">
							<div class="form-group form-md-line-input form-md-floating-label has-warning">
								<input name="center_card_icon" type="text" class="form-control" id="center_card_icon" value="{{ $center_card_icon }}" required>
								<label for="center_card_icon">Card Icon</label>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6">
							<div class="form-group form-md-line-input form-md-floating-label has-warning">
								<input name="center_card_title" type="text" class="form-control" id="center_card_title" value="{{ $center_card_title }}" required>
								<label for="center_card_title">Card Title</label>
							</div>
						</div>
						<div class="col-xs-12">
							<div class="form-group form-md-line-input form-md-floating-label has-warning">
								<textarea name="center_card_content" class="form-control" rows="3" id="center_card_content" required>{{ $center_card_content }}</textarea>
								<label for="center_card_content">Card content</label>
							</div>
						</div>
						<h4 class="form-title">Right Card Form</h4>
						<div class="col-xs-12 col-sm-6">
							<div class="form-group form-md-line-input form-md-floating-label has-error">
								<input name="right_card_icon" type="text" class="form-control" id="right_card_icon" value="{{ $right_card_icon }}" required>
								<label for="right_card_icon">Card Icon</label>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6">
							<div class="form-group form-md-line-input form-md-floating-label has-error">
								<input name="right_card_title" type="text" class="form-control" id="right_card_title" value="{{ $right_card_title }}" required>
								<label for="right_card_title">Card Title</label>
							</div>
						</div>
						<div class="col-xs-12">
							<div class="form-group form-md-line-input form-md-floating-label has-error">
								<textarea name="right_card_content" class="form-control" rows="3" id="right_card_content" required>{{ $right_card_content }}</textarea>
								<label for="right_card_content">Card content</label>
							</div>
						</div>
					</div>
				</div>
				<div class="form-actions noborder">
					<button type="submit" class="btn blue">Submit</button>
				</div>
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
		textarea {
			resize: none;
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
