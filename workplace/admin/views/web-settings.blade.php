@extends('layout.app')

@section('breadcrumb')
	<li><a href="{{ base_url('dashboard') }}">Home</a><i class="fa fa-circle"></i></li>
	<li><span>Web Settings</span></li>
@endsection

@section('page-title', 'Web Settings')

@section('page-content')
	<!-- BEGIN PORTLET-->
	<div class="portlet light bordered">
		<div class="portlet-title">
			<div class="caption font-green">
				<i class="icon-note font-green"></i>
				<span class="caption-subject bold uppercase">Setting Web Content</span>
			</div>
		</div>
		<div class="portlet-body form">
			<div class="tabbable-line">
				<ul class="nav nav-tabs ">
					<li class="active">
						<a href="#tab_content" data-toggle="tab" aria-expanded="true">Content</a>
					</li>
					<li class="">
						<a href="#tab_footer" data-toggle="tab" aria-expanded="false">Footer</a>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active" id="tab_content">
						<p>Referensi nama icon bisa dilihat <a href="https://material.io/icons/" target="_blank" title="Material Icons">di sini</a>.</p>
						<form role="form">
							<div class="tabbable-line">
								<ul class="nav nav-tabs ">
									<li class="active">
										<a href="#tab_card_left" data-toggle="tab" aria-expanded="true">Left Card</a>
									</li>
									<li class="">
										<a href="#tab_card_center" data-toggle="tab" aria-expanded="false">Center Card</a>
									</li>
									<li class="">
										<a href="#tab_card_right" data-toggle="tab" aria-expanded="false">Right Card</a>
									</li>
								</ul>
								<div class="tab-content">
									<div class="tab-pane active" id="tab_card_left">
										<div class="row">
											<div class="col-xs-12 col-sm-6">
												<div class="form-group form-md-line-input form-md-floating-label">
													<input name="left_card_icon" type="text" class="form-control" id="left_card_icon" required>
													<label for="left_card_icon">Left Card Icon</label>
												</div>
											</div>
											<div class="col-xs-12 col-sm-6">
												<div class="form-group form-md-line-input form-md-floating-label">
													<input name="left_card_name" type="text" class="form-control" id="left_card_name" required>
													<label for="left_card_name">Left Card Title</label>
												</div>
											</div>
											<div class="col-xs-12 col-sm-12">
												<div class="form-group form-md-line-input form-md-floating-label">
												<textarea id="left_card_content" name="left_card_content" class="form-control" rows="3" required></textarea>
												<label for="left_card_content">Left Card Content</label>
												</div>
											</div>
										</div>
									</div>
									<div class="tab-pane" id="tab_card_center">
										<div class="row">
											<div class="col-xs-12 col-sm-6">
												<div class="form-group form-md-line-input form-md-floating-label">
													<input name="center_card_icon" type="text" class="form-control" id="center_card_icon" required>
													<label for="center_card_icon">Center Card Icon</label>
												</div>
											</div>
											<div class="col-xs-12 col-sm-6">
												<div class="form-group form-md-line-input form-md-floating-label">
													<input name="center_card_name" type="text" class="form-control" id="center_card_name" required>
													<label for="center_card_name">Center Card Title</label>
												</div>
											</div>
											<div class="col-xs-12 col-sm-12">
												<div class="form-group form-md-line-input form-md-floating-label">
													<textarea id="center_card_content" name="center_card_content" class="form-control" rows="3" required></textarea>
													<label for="center_card_content">Center Card Content</label>
												</div>
											</div>
										</div>
									</div>
									<div class="tab-pane" id="tab_card_right">
										<div class="row">
											<div class="col-xs-12 col-sm-6">
												<div class="form-group form-md-line-input form-md-floating-label">
													<input name="right_card_icon" type="text" class="form-control" id="right_card_icon" required>
													<label for="right_card_icon">Right Card Icon</label>
												</div>
											</div>
											<div class="col-xs-12 col-sm-6">
												<div class="form-group form-md-line-input form-md-floating-label">
													<input name="right_card_name" type="text" class="form-control" id="right_card_name" required>
													<label for="right_card_name">Right Card Title</label>
												</div>
											</div>
											<div class="col-xs-12 col-sm-12">
												<div class="form-group form-md-line-input form-md-floating-label">
													<textarea id="right_card_content" name="right_card_content" class="form-control" rows="3" required></textarea>
													<label for="right_card_content">Right Card Content</label>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="form-actions noborder">
								<button type="submit" class="btn blue">Submit</button>
								<button type="reset" class="btn default">Cancel</button>
							</div>
						</form>
					</div>
					<div class="tab-pane" id="tab_footer">
						<form role="form">
							<p>Footer terdapat 2 kolom. Kolom pertama yaitu deskripsi dan kedua yaitu kumpulan link.</p>
							<div class="tabbable-line">
								<ul class="nav nav-tabs ">
									<li class="active">
										<a href="#tab_footer_deskripsi" data-toggle="tab" aria-expanded="true">Deskripsi</a>
									</li>
									<li class="">
										<a href="#tab_footer_link" data-toggle="tab" aria-expanded="false">Link</a>
									</li>
								</ul>
								<div class="tab-content">
									<div class="tab-pane active" id="tab_footer_deskripsi">
										<div class="row">
											<div class="col-xs-12 col-sm-12">
												<div class="form-group form-md-line-input form-md-floating-label">
													<input name="footer_description_title" type="text" class="form-control" id="footer_description_title" required>
													<label for="footer_description_title">Title</label>
												</div>
											</div>
											<div class="col-xs-12 col-sm-12">
												<div class="form-group form-md-line-input form-md-floating-label">
													<textarea id="footer_description_content" name="footer_description_content" class="form-control" rows="3" required></textarea>
													<label for="footer_description_content">Content</label>
												</div>
											</div>
										</div>
									</div>
									<div class="tab-pane" id="tab_footer_link">
										<div class="row">
											<div class="col-xs-12 col-sm-12">
												<div class="form-group form-md-line-input form-md-floating-label">
													<input name="footer_link_title" type="text" class="form-control" id="footer_link_title" required>
													<label for="footer_link_title">Title</label>
												</div>
											</div>
										</div>
										<div id="list_url" class="row">
											<div class="url_item">
												<div class="col-xs-12 col-sm-4">
													<div class="form-group form-md-line-input form-md-floating-label">
														<input name="footer_url_name[]" type="text" class="form-control" required>
														<label>URL Name</label>
													</div>
												</div>
												<div class="col-xs-12 col-sm-8">
													<div class="form-group form-md-line-input form-md-floating-label">
														<div class="input-group">
															<span class="input-group-addon">http://</span>
															<div class="input-group-control">
																<input name="footer_url_link[]" type="text" class="form-control" required>
																<label>URL</label>
															</div>
															<span class="input-group-btn btn-right">
																<button class="btn green-haze btn_add" type="button">Add New</button>
															</span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="form-actions noborder">
								<button type="submit" class="btn blue">Submit</button>
								<button type="reset" class="btn default">Cancel</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- END PORTLET-->
@endsection


@section('page-scripts')
	<script type="text/javascript">
		jQuery(function($) {
			$('body').on('click', '.btn_add', function() {
				$(this).text('Delete').removeClass('btn_add green-haze').addClass('btn_delete red-intense');
				var htmlAddNew = '<div class="url_item"><div class="col-xs-12 col-sm-4"><div class="form-group form-md-line-input form-md-floating-label"><input name="footer_url_name[]" type="text" class="form-control focus" required><label>URL Name</label></div></div><div class="col-xs-12 col-sm-8"><div class="form-group form-md-line-input form-md-floating-label"><div class="input-group"><span class="input-group-addon">http://</span><div class="input-group-control"><input name="footer_url_link[]" type="text" class="form-control" required><label>URL</label></div><span class="input-group-btn btn-right"><button class="btn blue-madison btn_add" type="button">Add New</button></span></div></div></div></div>';
				var parent = $('#list_url');
				parent.append(htmlAddNew).find('input.focus').focus();
			});

			$('body').on('click', '.btn_delete', function() {
				$(this).parents('.url_item').remove();
			});
		});
	</script>
@endsection
