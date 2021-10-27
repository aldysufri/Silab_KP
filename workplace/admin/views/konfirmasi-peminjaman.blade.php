@extends('layout.app')

@section('breadcrumb')
	<li><a href="{{ base_url('dashboard') }}">Dashboard</a><i class="fa fa-circle"></i></li>
	<li><a href="{{ base_url('dashboard/konfirmasi-peminjaman') }}">Konfirmasi</a><i class="fa fa-circle"></i></li>
	<li><span>Peminjaman</span></li>
@endsection

@section('page-title', 'Konfirmasi Peminjaman')

@section('page-content')
	<!-- BEGIN TABLE PORTLET-->
	<div class="portlet light bordered">
		<div class="portlet-title">
			<div class="caption font-green">
				<i class="icon-list font-green"></i>
				<span class="caption-subject bold uppercase">List Data Peminjaman</span>
			</div>
		</div>
		<div class="portlet-body">
			<table id="table_peminjaman" class="table table-striped table-bordered table-hover order-column dt-responsive" width="100%" cellspacing="0" width="100%">
				<thead>
					<tr>
						<th>ID</th>
						<th>Nama</th>
						<th>Barang</th>
						<th>Tipe</th>
						<th>Peminjaman</th>
						<th>Pengembalian</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($data as $item)
						<tr>
							<td>{{ $item->id_peminjaman }}</td>
							<td>{{ $item->nama }}</td>
							<td>{{ $item->nama_barang }}</td>
							<td><span class="label label-sm label-{{ ($item->type_barang == 'alat') ? 'info' : 'danger' }}">{{ $item->type_barang }}</span></td>
							<td>{{ date('d-m-Y', strtotime($item->tanggal_start)) }} {{ date('H:i', strtotime($item->jam_start)) }}</td>
							<td>{{ date('d-m-Y', strtotime($item->tanggal_end)) }} {{ date('H:i', strtotime($item->jam_end)) }}</td>
							<td><a class="btn btn-xs green" href="{{ base_url("dashboard/konfirmasi-peminjaman/$item->type_barang/$item->id_barang") }}"><i class="icon-note"></i> Lihat</a></td>
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
	<script type="text/javascript">
		jQuery(function($) {
			$('#table_peminjaman').dataTable({
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
				order: [[4, "asc"]],
				columnDefs: [
					{
						orderable: false,
						targets: [6]
					},
					{
						searchable: false,
						targets: [6]
					}
				]
			});
		});
	</script>
	<!-- END PAGE LEVEL SCRIPTS -->
@endsection
