@extends('layout.app')

@section('breadcrumb')
	<li><a href="{{ base_url('dashboard') }}">Dashboard</a><i class="fa fa-circle"></i></li>
	<li><a href="{{ base_url('dashboard/bahan-semua') }}">Bahan</a><i class="fa fa-circle"></i></li>
	<li><span>Semua</span></li>
@endsection

@section('page-title', 'Data Bahan')

@section('page-content')
	<!-- BEGIN TABLE PORTLET-->
	<div class="portlet light bordered">
		<div class="portlet-title">
			<div class="caption font-green">
				<i class="icon-list font-green"></i>
				<span class="caption-subject bold uppercase">List Data Bahan</span>
			</div>
		</div>
		<div class="portlet-body">
			<table id="table_semua_bahan" class="table table-striped table-bordered table-hover order-column dt-responsive" width="100%" cellspacing="0" width="100%">
				<thead>
					<tr>
						<th>Nama</th>
						<th>Jumlah</th>
						<th>Tgl. Masuk</th>
						<th>Lokasi</th>
						<th>Kondisi</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($data as $bahan)
					<tr>
						<td>{{ $bahan->nama_bahan }}</td>
						<td>{{ $bahan->jumlah_bahan }} {{ $bahan->satuan_bahan }}</td>
						<td>{{ date('d-m-Y', strtotime($bahan->tgl_masuk_bahan)) }}</td>
						<td>{{ $bahan->lokasi_bahan }}</td>
						<td>{{ $bahan->kondisi_bahan }}</td>
						<td>
							<a class="btn btn-xs green" href='{{ base_url("dashboard/bahan-edit/$bahan->id_bahan") }}' data-toggle="tooltip" data-placement="top" title="Edit"><i class="icon-note"></i></a>
							<a class="bahan-delete btn btn-xs red" data-id="{{ $bahan->id_bahan }}" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="icon-trash"></i></a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
	<!-- END TABLE PORTLET-->
@endsection

@section('css')
	<!-- BEGIN PAGE LEVEL PLUGINS -->
	<link href="{{ base_url('assets/plugins/dashboard/plugins/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ base_url('assets/plugins/dashboard/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ base_url('assets/plugins/bootstrap-sweetalert/sweetalert.css') }}" rel="stylesheet" type="text/css" />
	<!-- END PAGE LEVEL PLUGINS -->
@endsection

@section('scripts')
	<!-- BEGIN PAGE LEVEL PLUGINS -->
	<script src="{{ base_url('assets/plugins/dashboard/scripts/datatable.min.js') }}" type="text/javascript"></script>
	<script src="{{ base_url('assets/plugins/dashboard/plugins/datatables/datatables.min.js') }}" type="text/javascript"></script>
	<script src="{{ base_url('assets/plugins/dashboard/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js') }}" type="text/javascript"></script>
	<!-- END PAGE LEVEL PLUGINS -->
@endsection

@section('page-scripts')
	<!-- BEGIN PAGE LEVEL SCRIPTS -->
	<script src="{{ base_url('assets/plugins/dashboard/scripts/table-datatables-responsive.min.js') }}" type="text/javascript"></script>
	<script type="text/javascript" src="{{ base_url('assets/plugins/bootstrap-sweetalert/sweetalert.min.js') }}"></script>
	<script type="text/javascript">
		jQuery(function($) {
			$('[data-toggle="tooltip"]').tooltip();
			$('#table_semua_bahan').dataTable({
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
				columnDefs: [
					{
						orderable: false,
						targets: [5]
					},
					{
						searchable: false,
						targets: [5]
					}
				],
				order: [[2, 'asc']]
			});
		});
		$('.bahan-delete').on('click', function() {
			var target = '{{ base_url('dashboard/bahan-hapus') }}';
			var id = $(this).data('id');
			var token = "{{ $this->security->get_csrf_hash() }}";
			swal({
				title: "Are you sure!",
				text: "Anda yakin ingin menghapusnya?",
				type: "warning",
				showCancelButton: true,
				confirmButtonText: "Hapus",
				cancelButtonText: "Batal",
				showLoaderOnConfirm: true,
				closeOnConfirm: false
			},
			function(){
				$.ajax({
					url: target,
					method: "POST",
					dataType: 'json',
					data: {id: id, csrf_token: token},
					success: function(json) {
						swal({
							title: json.title,
							text: json.text,
							type: json.type,
							closeOnConfirm: false
						}, function() {
							window.location.reload();
						});
					}
				});
			});
		});
	</script>
	<!-- END PAGE LEVEL SCRIPTS -->
@endsection
