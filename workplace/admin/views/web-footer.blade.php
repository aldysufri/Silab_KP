@extends('layout.app')

@section('breadcrumb')
	<li><a href="{{ base_url('dashboard') }}">Home</a><i class="fa fa-circle"></i></li>
	<li><a href="{{ base_url('dashboard/web-laboratorium') }}">Web Settings</a><i class="fa fa-circle"></i></li>
	<li><span>Footer</span></li>
@endsection

@section('page-title', 'Footer')

@section('page-content')
	<!-- BEGIN PORTLET-->
	<div class="portlet light bordered">
		<div class="portlet-title">
			<div class="caption font-green">
				<i class="icon-note font-green"></i>
				<span class="caption-subject bold uppercase">Form Footer</span>
			</div>
		</div>
		<div class="portlet-body form">
			<form action="{{ base_url('dashboard/web-footer/store') }}" method="POST" role="form">
				<input type="hidden" name="{{ $this->security->get_csrf_token_name() }}" value="{{ $this->security->get_csrf_hash() }}">
				<div class="form-body">
					<div class="row">
						<h4 class="form-title">Description</h4>
						<div class="col-xs-12">
							<div class="form-group form-md-line-input form-md-floating-label has-success">
								<input name="footer_description_title" type="text" class="form-control" id="footer_description_title" value="{{ $footer_description_title }}" required>
								<label for="footer_description_title">Title</label>
							</div>
						</div>
						<div class="col-xs-12">
							<div class="form-group form-md-line-input form-md-floating-label has-success">
								<textarea id="footer_description_content" name="footer_description_content" class="form-control" rows="5" required>{{ $footer_description_content }}</textarea>
								<label for="footer_description_content">Content</label>
							</div>
						</div>
					</div>
					<div class="row">
						<h4 class="form-title">External Link</h4>
					</div>
					<div id="repeat_link">
						<div class="row">
							<div class="col-xs-12 col-sm-12">
								<div class="form-group form-md-line-input form-md-floating-label has-warning">
									<input name="footer_link_title" type="text" class="form-control" id="footer_link_title" value="{{ $footer_link_title }}" required>
									<label for="footer_link_title">Title</label>
								</div>
							</div>
						</div>
						<div id="list_url" class="row">
							@php
								$size = count($footer_link_content);
								$i = 1;
							@endphp
							@foreach ($footer_link_content as $link)
							<div class="url_item">
								<div class="col-xs-12 col-sm-4">
									<div class="form-group form-md-line-input form-md-floating-label has-warning">
										<input name="footer_url_name[]" type="text" class="form-control" value="{{ $link->name }}" required>
										<label>URL Name</label>
									</div>
								</div>
								<div class="col-xs-12 col-sm-8">
									<div class="form-group form-md-line-input form-md-floating-label has-warning">
										<div class="input-group">
											<span class="input-group-addon">http://</span>
											<div class="input-group-control">
												<input name="footer_url_link[]" type="text" class="form-control" value="{{ $link->url }}" required>
												<label>URL</label>
											</div>
											<span class="input-group-btn btn-right">
												@if ($i != $size)
													<button class="btn btn_delete red-intense" type="button">Delete</button>
												@else
													<button class="btn green-haze btn_add" type="button">Add New</button>
												@endif
											</span>
										</div>
									</div>
								</div>
							</div>
							@php
								$i++
							@endphp
							@endforeach
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
	<script type="text/javascript">
		jQuery(function($) {
			$('body').on('click', '.btn_add', function() {
				$(this).text('Delete').removeClass('btn_add green-haze').addClass('btn_delete red-intense');
				var htmlAddNew = '<div class="url_item"><div class="col-xs-12 col-sm-4"><div class="form-group form-md-line-input form-md-floating-label has-warning"><input name="footer_url_name[]" type="text" class="form-control focus" required><label>URL Name</label></div></div><div class="col-xs-12 col-sm-8"><div class="form-group form-md-line-input form-md-floating-label has-warning"><div class="input-group"><span class="input-group-addon">http://</span><div class="input-group-control"><input name="footer_url_link[]" type="text" class="form-control" required><label>URL</label></div><span class="input-group-btn btn-right"><button class="btn blue-madison btn_add" type="button">Add New</button></span></div></div></div></div>';
				var parent = $('#list_url');
				parent.append(htmlAddNew).find('input.focus').focus();
			});

			$('body').on('click', '.btn_delete', function() {
				$(this).parents('.url_item').remove();
			});

			$('body').on('click', function() {
				$('#list_url').find('.form-control.focus').removeClass('focus');
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
