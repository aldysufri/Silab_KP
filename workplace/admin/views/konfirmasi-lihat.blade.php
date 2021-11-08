@extends('layout.app')

@section('breadcrumb')
	<li><a href="{{ base_url('dashboard') }}">Dashboard</a><i class="fa fa-circle"></i></li>
	<li><a href="{{ base_url('dashboard/konfirmasi-peminjaman') }}">Konfirmasi</a><i class="fa fa-circle"></i></li>
	<li><span>Lihat</span></li>
@endsection

@section('page-title', 'Lihat Detail Peminjaman')

@section('page-content')
	<!-- BEGIN TABLE PORTLET-->
	<div class="portlet light bordered">
		<div class="portlet-title">
			<div class="caption font-green">
				<i class="icon-list font-green"></i>
				<span class="caption-subject bold uppercase">Data {{ $data->type }}</span>
			</div>
		</div>
		<div class="portlet-body">
			<div class="detail-barang">
				<div class="row">
					@if ($data->type == 'alat')
					<div class="col-xs-12 col-sm-3">
						<img src="{{ base_url('assets/img/alat/'.$data->barang->foto_barang) }}" alt="Foto" class="img-rounded img-responsive">
					</div>
					@endif
					<div class="col-xs-12 col-sm-{{ ($data->type == 'alat') ? '9' : '12' }}">
						<div class="form-horizontal">
							<div class="form-body">
								<div class="form-group form-md-line-input">
									<label class="col-md-2 control-label">Nama</label>
									<div class="col-md-10">
										<input type="text" class="form-control" value="{{ $data->barang->nama_barang }}" readonly>
										<div class="form-control-focus"> </div>
									</div>
								</div>
								<div class="form-group form-md-line-input">
									<label class="col-md-2 control-label">Kondisi</label>
									<div class="col-md-10">
										<input type="text" class="form-control" value="{{ $data->barang->kondisi_barang }}" readonly>
										<div class="form-control-focus"> </div>
									</div>
								</div>
								@if ($data->type == 'alat')
									<div class="form-group form-md-line-input">
										<label class="col-md-2 control-label">Jumlah</label>
										<div class="col-md-10">
											<input type="text" class="form-control" value="{{ $data->barang->jumlah_barang . ' ' . $data->barang->satuan_barang }}" readonly>
											<div class="form-control-focus"> </div>
										</div>
									</div>
								@endif
								<div class="form-group form-md-line-input">
									<label class="col-md-2 control-label">Tersedia</label>
									<div class="col-md-10">
										<input type="text" class="form-control" value="{{ $data->tersedia . ' ' . $data->barang->satuan_barang }}" readonly>
										<div class="form-control-focus"> </div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	@if ($data->type == 'alat')
		<div class="portlet light bordered">
			<div class="portlet-title">
				<div class="caption font-green">
					<i class="icon-list font-green"></i>
					<span class="caption-subject bold uppercase">List Peminjam</span>
				</div>
			</div>
			<div class="portlet-body">
				<table id="dt_peminjam" class="table table-striped table-bordered table-hover order-column dt-responsive" width="100%" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th>ID</th>
							<th>Nama</th>
							<th>Jumlah</th>
							<th>Peminjaman</th>
							<th>Pengembalian</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($data->peminjam as $item)
							<tr>
								<td>{{ $item->id_peminjaman }}</td>
								<td>{{ $item->nama }}</td>
								<td>{{ $item->jumlah }}</td>
								<td>{{ date('d-m-Y', strtotime($item->tanggal_start)) }} {{ date('H:i', strtotime($item->jam_start)) }}</td>
								<td>{{ date('d-m-Y', strtotime($item->tanggal_end)) }} {{ date('H:i', strtotime($item->jam_end)) }}</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	@endif

	<div class="portlet light bordered">
		<div class="portlet-title">
			<div class="caption font-green">
				<i class="icon-list font-green"></i>
				<span class="caption-subject bold uppercase">List Konfirmasi</span>
			</div>
		</div>
		<div class="portlet-body">
			<table id="dt_konfirmasi" class="table table-striped table-bordered table-hover order-column dt-responsive" width="100%" cellspacing="0" width="100%">
				<thead>
					<tr>
						<th>ID</th>
						<th>Nama</th>
						<th>Jumlah</th>
						<th>Peminjaman</th>
						<th>Pengembalian</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($data->user as $item)
						<tr>
							<td>{{ $item->id_peminjaman }}</td>
							<td>{{ $item->nama }}</td>
							<td>{{ $item->jumlah }}</td>
							<td>{{ date('d-m-Y', strtotime($item->tanggal_start)) }} {{ date('H:i', strtotime($item->jam_start)) }}</td>
							<td>{{ date('d-m-Y', strtotime($item->tanggal_end)) }} {{ date('H:i', strtotime($item->jam_end)) }}</td>
							<td>
								<a class="edit_peminjaman btn btn-xs green-meadow" data-id="{{ $item->id_peminjaman }}" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit fa-fw"></i></a>
								<a class="konfirmasi_peminjaman btn btn-xs blue-sharp" data-id="{{ $item->id_peminjaman }}" data-id-barang="{{ $item->id_barang }}" data-jumlah="{{ $item->jumlah }}" data-toggle="tooltip" data-placement="top" title="Konfirmasi"><i class="fa fa-check-square-o fa-fw"></i></a>
								<a class="tolak_peminjaman btn btn-xs red-intense" data-id="{{ $item->id_peminjaman }}" data-toggle="tooltip" data-placement="top" title="Tolak"><i class="fa fa-close fa-fw"></i></a>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
	<!-- END TABLE PORTLET-->

	<!-- BEGIN MODAL -->
	<div id="edit_data" class="modal fade" tabindex="-1" data-width="760">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
			<h4 class="modal-title">Edit data [<span id="id_data_edit"></span>]</h4>
		</div>
		<div class="modal-body">
			<form role="form" class="form-horizontal">
				<div class="form-body">
					<div class="form-group form-md-line-input">
						<label class="col-md-3 control-label" for="edit_jumlah_barang">Jumlah Barang</label>
						<div class="col-md-9">
							<input type="number" class="form-control" id="edit_jumlah_barang" placeholder="Jumlah Barang" required>
						</div>
					</div>
					<div class="form-group form-md-line-input">
						<label class="col-md-3 control-label" for="edit_tanggal_peminjaman">Tanggal Peminjaman</label>
						<div class="col-md-9">
							<input type="text" class="form-control" id="edit_tanggal_peminjaman" placeholder="Tanggal Peminjaman" onfocus="blur()" required>
						</div>
					</div>
					<div class="form-group form-md-line-input">
						<label class="col-md-3 control-label" for="edit_jam_peminjaman">Jam Peminjaman</label>
						<div class="col-md-9">
							<input type="text" class="form-control" id="edit_jam_peminjaman" placeholder="Jam Peminjaman" onfocus="blur()" required>
						</div>
					</div>
					<div class="form-group form-md-line-input">
						<label class="col-md-3 control-label" for="edit_tanggal_pengembalian">Tanggal Pengembalian</label>
						<div class="col-md-9">
							<input type="text" class="form-control" id="edit_tanggal_pengembalian" placeholder="Tanggal Pengembalian" onfocus="blur()" required>
						</div>
					</div>
					<div class="form-group form-md-line-input">
						<label class="col-md-3 control-label" for="edit_jam_pengembalian">Jam Pengembalian</label>
						<div class="col-md-9">
							<input type="text" class="form-control" id="edit_jam_pengembalian" placeholder="Jam Pengembalian" onfocus="blur()" required>
						</div>
					</div>
				</div>
			</form>
		</div>
		<div class="modal-footer">
			<button id="edit_data_close" type="button" data-dismiss="modal" class="btn btn-outline dark">Tutup</button>
			<button id="edit_data_save" type="button" class="btn green active">Simpan</button>
		</div>
	</div>
	<!-- END MODAL -->
@endsection

@section('css')
	<!-- BEGIN PAGE LEVEL PLUGINS -->
	<link rel="stylesheet" type="text/css" href="{{ base_url('assets/plugins/md-picker/css/mdDateTimePicker.min.css') }}">
	<link href="{{ base_url('assets/plugins/dashboard/plugins/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ base_url('assets/plugins/dashboard/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ base_url('assets/plugins/bootstrap-modal/css/bootstrap-modal-bs3patch.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ base_url('assets/plugins/bootstrap-modal/css/bootstrap-modal.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ base_url('assets/plugins/bootstrap-sweetalert/sweetalert.css') }}" rel="stylesheet" type="text/css" />
	<!-- END PAGE LEVEL PLUGINS -->
@endsection

@section('scripts')
	<!-- BEGIN PAGE LEVEL PLUGINS -->
	<script src="{{ base_url('assets/plugins/dashboard/scripts/datatable.min.js') }}" type="text/javascript"></script>
	<script src="{{ base_url('assets/plugins/dashboard/plugins/datatables/datatables.min.js') }}" type="text/javascript"></script>
	<script src="{{ base_url('assets/plugins/dashboard/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js') }}" type="text/javascript"></script>
	<script src="{{ base_url('assets/plugins/bootstrap-modal/js/bootstrap-modalmanager.js') }}" type="text/javascript"></script>
	<script src="{{ base_url('assets/plugins/bootstrap-modal/js/bootstrap-modal.js') }}" type="text/javascript"></script>
	<!-- END PAGE LEVEL PLUGINS -->
@endsection

@section('page-scripts')
	<!-- BEGIN PAGE LEVEL SCRIPTS -->
	<script type="text/javascript" src="{{ base_url('assets/plugins/md-picker/js/moment.min.js') }}"></script>
	<script type="text/javascript" src="{{ base_url('assets/plugins/md-picker/js/moment.id.js') }}"></script>
	<script type="text/javascript" src="{{ base_url('assets/plugins/md-picker/js/scroll-into-view-if-needed.min.js') }}"></script>
	<script type="text/javascript" src="{{ base_url('assets/plugins/md-picker/js/draggabilly.pkgd.min.js') }}"></script>
	<script type="text/javascript" src="{{ base_url('assets/plugins/md-picker/js/mdDateTimePicker.min.js') }}"></script>
	<script src="{{ base_url('assets/plugins/dashboard/scripts/table-datatables-responsive.min.js') }}" type="text/javascript"></script>
	<script type="text/javascript" src="{{ base_url('assets/plugins/bootstrap-sweetalert/sweetalert.min.js') }}"></script>
	<script type="text/javascript">
		jQuery(function($) {
			$('[data-toggle="tooltip"]').tooltip();
			var createDataTable = function(target, order, exclude) {
				$(target).dataTable({
					language: {
						emptyTable: "No data available in table",
						info: "Showing _START_ to _END_ of _TOTAL_ records",
						infoEmpty: "No records found",
						infoFiltered: "(filtered1 from _MAX_ total records)",
						lengthMenu: "Show _MENU_",
						search: "Search:",
						zeroRecords: "No matching records found",
						paginate: {
							previous:"Prev",
							next: "Next",
							last: "Last",
							first: "First"
						}
					},
					lengthMenu: [
					[10, 15, 20, -1],
					[10, 15, 20, "All"]
					],
					pagingType: "bootstrap_extended",
					order: [[order, "asc"]],
					columnDefs: [
					{
						orderable: false,
						targets: [exclude]
					},
					{
						searchable: false,
						targets: [exclude]
					}
					]
				});
			}
			createDataTable('#dt_peminjam', 3, 0);
			createDataTable('#dt_konfirmasi', 3, 5);

			$.fn.modalmanager.defaults.spinner = 
				'<div class="loading-spinner" style="width: 200px; margin-left: -100px;">' +
					'<div class="progress progress-striped active">' +
						'<div class="progress-bar" style="width: 100%;"></div>' +
					'</div>' +
				'</div>';

			var modal = $('#edit_data');

			$('body').on('click', '.edit_peminjaman', function() {
				$('body').modalmanager('loading');
				var id = $(this).data('id');
				var target = '{{ base_url("dashboard/edit-peminjam-ajax") }}';
				$.ajax({
					url: target,
					method: "POST",
					dataType: 'json',
					data: {id: id},
					success: function(json) {
						var tgl_pinjam = json.tanggal_start.split('-');
						var jam_pinjam = json.jam_start.split(':');
						var tgl_kembali = json.tanggal_end.split('-');
						var jam_kembali = json.jam_end.split(':');
						modal.find('#id_data_edit').text(id);
						modal.find('#edit_jumlah_barang').val(json.jumlah);
						modal.find('#edit_tanggal_peminjaman').val(tgl_pinjam[2]+'-'+tgl_pinjam[1]+'-'+tgl_pinjam[0]);
						modal.find('#edit_jam_peminjaman').val(jam_pinjam[0]+':'+jam_pinjam[1]);
						modal.find('#edit_tanggal_pengembalian').val(tgl_kembali[2]+'-'+tgl_kembali[1]+'-'+tgl_kembali[0]);
						modal.find('#edit_jam_pengembalian').val(jam_kembali[0]+':'+jam_kembali[1]);
						modal.modal();
					}
				});
			});

			var MDPicker = function(target, type) {
				var target = document.getElementById(target);
				var dialog = new mdDateTimePicker.default({
					type: type,
					past: moment(),
					future: moment().add(1, 'years'),
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

			MDPicker('edit_tanggal_peminjaman', 'date');
			MDPicker('edit_jam_peminjaman', 'time');
			MDPicker('edit_tanggal_pengembalian', 'date');
			MDPicker('edit_jam_pengembalian', 'time');

			$('body').on('click', '#edit_data_save.active', function() {
				var thisBtn = $(this);
				thisBtn.removeClass('active').html('<i class="fa fa-spinner fa-spin fa-fw"></i> Loading, please wait...');
				var target = '{{ base_url("dashboard/edit-peminjam-ajax/save") }}';
				var jumlah_barang = $('#edit_jumlah_barang').val();
				var tanggal_peminjaman = $('#edit_tanggal_peminjaman').val();
				var jam_peminjaman = $('#edit_jam_peminjaman').val();
				var tanggal_pengembalian = $('#edit_tanggal_pengembalian').val();
				var jam_pengembalian = $('#edit_jam_pengembalian').val();
				var idp = $('#id_data_edit').text();
				$.ajax({
					url: target,
					method: "POST",
					dataType: 'json',
					data: {idp: idp, jml: jumlah_barang, tstart: tanggal_peminjaman, jstart: jam_peminjaman, tend: tanggal_pengembalian, jend: jam_pengembalian},
					success: function(json) {
						if (json.status == 'sukses') {
							modal.find('.modal-body').html(json.pesan);
							$('#edit_data_close').addClass('sukses');
							$('#edit_data_save').remove();
						} else if (json.status == 'gagal') {
							modal.find('.modal-body').prepend(json.pesan);
							thisBtn.addClass('active').html('Simpan');
						}
					}
				});
			});

			$('body').on('click', '#edit_data_close.sukses', function() {
				window.location.reload();
			});

			var useAjax = function(target, title, action) {
				$(target).on('click', function() {
					var id = $(this).data('id');
					var jml = $(this).data('jumlah');
					var id_barang = $(this).data('id-barang');
					var tersedia = {{ $data->tersedia }};
					var type = '{{ $data->type }}';
					swal({
						title: "Are you sure!",
						text: title,
						type: "warning",
						showCancelButton: true,
						confirmButtonText: "Iya",
						cancelButtonText: "Batal",
						showLoaderOnConfirm: true,
						closeOnConfirm: false
					},
					function(){
						$.ajax({
							url: action,
							method: "POST",
							dataType: 'json',
							data: {id: id, jumlah: jml, sisa: tersedia, type: type, id_barang: id_barang},
							success: function(json) {
								swal({
									title: json.title,
									text: json.text,
									type: json.type,
									closeOnConfirm: false
								}, function() {
									if (json.type == 'error') {
										swal.close();
									} else if (json.type == 'success') {
										window.location.reload();
									}
								});
							}
						});
					});
				});
			};

			useAjax('.konfirmasi_peminjaman', 'Anda yakin mengkonfirmasi ID ini?', '{{ base_url("dashboard/konfirmasi-terima") }}');
			useAjax('.tolak_peminjaman', 'Anda yakin ingin menolaknya?', '{{ base_url("dashboard/konfirmasi-tolak") }}');
		});
	</script>
	@if ($flash = $this->session->flashdata('flash'))
		<script type="text/javascript">
			jQuery(function($){
				swal('{{ $flash['title'] }}', '{{ $flash['text'] }}', '{{ $flash['type'] }}');
			});
		</script>
	@endif
	<!-- END PAGE LEVEL SCRIPTS -->
@endsection
