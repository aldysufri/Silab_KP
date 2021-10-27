@extends('layout.app')
@section('breadcrumb')
	<li><a href="{{ base_url('dashboard') }}">Dashboard</a><i class="fa fa-circle"></i></li>
@endsection
@section('page-title', 'Data Stok')

@section('page-content')
	<!-- BEGIN TABLE PORTLET-->
	<div class="portlet light bordered">
		<div class="portlet-title">
			<div class="caption font-green">
				<i class="icon-list font-green"></i>
				<span class="caption-subject bold uppercase">List Data Stok</span>
            </div>
            <div class="btn-group pull-right">
                    <button type="button" class="btn btn-primary">STOK BARU</button>
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                      <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                    <li><a href="{{ base_url('dashboard/stok/alat')}}">Alat</a></li>
                      <li><a href="{{ base_url('dashboard/stok/bahan')}}">Bahan</a></li>
                    </ul>
            </div>	
            <br><br>
        <div class="portlet-body">
			<table id="stok" class="table table-striped table-bordered table-hover order-column dt-responsive" width="100%" cellspacing="0" width="100%">
				<thead>
					<tr>
						<th>ID Barang</th>
            <th>Nama Barang</th>
						<th>Tipe</th>
						<th>Id Transaksi</th>
						<th>Penambahan</th>
						<th>Pengurangan</th>
						<th>Sisa</th>
						<th>Status</th>
						<th>Deskripsi</th>
						<th>Tanggal</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($data as $stok)
					<tr>
						<td>{{ $stok->barang_id }}</td>
            <td>
             @if ( $stok->type == 'alat')
               {{ $stok->nama_alat }}
              @else
              {{ $stok->nama_bahan }}
             @endif
            </td>
						<td><span class="label label-sm label-{{ ($stok->type == 'alat') ? 'info' : 'danger' }}">{{ $stok->type }}</span></td>
						<td>{{ $stok->trx_id }}</td>
						<td>{{ $stok->increase }}</td>
                        <td>{{ $stok->decrease }}</td>
                        <td>{{ $stok->remain }}</td>
                        <td>{{ $stok->status }}</td>
						<td>{{ $stok->description }}</td>
						<td>{{ $stok->created_at }}</td>
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
			$('#stok').dataTable({
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
						targets: [6]
					},
					{
						searchable: false,
						targets: [6]
					}
				],
				order: [[9, 'desc']]
			});
		});
	<!-- END PAGE LEVEL SCRIPTS -->
    </script>
@endsection

