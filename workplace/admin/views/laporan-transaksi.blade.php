@extends('layout.app')

@section('breadcrumb')
	<li><a href="{{ base_url('dashboard') }}">Stok</a><i class="fa fa-circle"></i></li>
@endsection

@section('page-title', 'Laporan Transaksi')
@endsection
@section('page-content')
	<!-- BEGIN TABLE PORTLET-->
	<div class="portlet light bordered">
		<div class="portlet-title">
			<div class="caption font-green">
				<i class="icon-list font-green"></i>
				<span class="caption-subject bold uppercase">Laporan</span>
                <div class="row clearfix p-t-30 align-center">
                        <form  action="{{base_url('dashboard/filter-transaksi')}}" method="get">
                            <div class="col-lg-5 col-md-5 col-sm-2 col-xs-2">
                                </div>
                                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                                    <div class="input-daterange input-group" id="bs_datepicker_range_content" style="margin-bottom: 0 !important">
                                        <div class="form-line">
                                            <input name="tanggal_awal" type="text" class="form-control" id="tanggal_awal" onfocus="blur()" required placeholder="YYYY-MM-DD">
                                        </div>
                                        <span class="input-group-addon">to</span>
                                        <div class="form-line">
                                                <input name="tanggal_akhir" type="text" class="form-control" id="tanggal_akhir" onfocus="blur()" required placeholder="YYYY-MM-DD">
                                            </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                    <button type="submit" class="btn btn-primary ">FILTER</button>
                                </div>
  
                    </form>
                </div>
            </div>
        </div>
		<div class="portlet-body">
			<table id="laporanbahan" class="table table-striped table-bordered table-hover order-column dt-responsive" width="100%" cellspacing="0" width="100%">
				<thead>
                    <tr>    
                            <th>ID Peminjaman</th>
                            <th>ID Transaksi</th>
                            <th>Barang ID</th>
                            <th>Type</th>
                            <th>Jumlah</th>
                            <th>Sisa Stok </th>
                            <th>Sisa</th>
                            <th>Tanggal </th>

                    </tr>
                </thead>
				<tbody>
                    <tr>
                        @foreach ($laporan as  $item)
                         <td>{{$item->id_peminjaman}}</td>
                        <td>{{$item->trx_id}}</td>
                        <td>{{$item->id_barang}}</td> 
                        <td><span class="label label-sm label-{{ ($item->type == 'alat') ? 'info' : 'danger' }}">{{ $item->type }}</span></td>
                        <td>{{$item->jumlah}}</td>
                        <td>{{$item->remain ?? 0; }}</td>
                        
                        <td>
                            @if($item->status == 'active')
                            {{$item->remain - $item->jumlah}}
                            @elseif(($item->status == 'clear'))
                            {{$item->remain + $item->jumlah}}
                            @else
                            0
                            @endif

                        </td>
                        <td>{{$item->created_at}}</td>              
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
    <link rel="stylesheet" type="text/css" href="{{ base_url('assets/plugins/md-picker/css/mdDateTimePicker.min.css') }}">
	<link href="{{ base_url('assets/plugins/bootstrap-sweetalert/sweetalert.css') }}" rel="stylesheet" type="text/css" />
	<style type="text/css">
		.form-title {
			padding-right: 15px;
			padding-left: 15px;
			font-weight: normal;
		}
	</style>
@endsection

@section('scripts')
	<!-- BEGIN PAGE LEVEL PLUGINS -->
	<script src="{{ base_url('assets/plugins/dashboard/scripts/datatable.min.js') }}" type="text/javascript"></script>
	<script src="{{ base_url('assets/plugins/dashboard/plugins/datatables/datatables.min.js') }}" type="text/javascript"></script>
	<script src="{{ base_url('assets/plugins/dashboard/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js') }}" type="text/javascript"></script>
	<!-- END PAGE LEVEL PLUGINS -->
@endsection

@section('page-scripts')
    {{-- Data Picker --}}
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
						this.value = dialog.time.format('YYYY-MM-DD');
					}
					this.focus();
				});
			};

			MDPicker('tanggal_awal', 'date');
            MDPicker('tanggal_akhir', 'date');
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
	<!-- BEGIN PAGE LEVEL SCRIPTS -->
	<script src="{{ base_url('assets/plugins/dashboard/scripts/table-datatables-responsive.min.js') }}" type="text/javascript"></script>
	<script type="text/javascript" src="{{ base_url('assets/plugins/bootstrap-sweetalert/sweetalert.min.js') }}"></script>
	<script type="text/javascript">
		jQuery(function($) {
			$('[data-toggle="tooltip"]').tooltip();
			$('#laporanbahan').dataTable({
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
					[10,15, 20, -1],
					[10,15, 20, "All"]
				],
				pagingType: "bootstrap_extended",
				order: [[7, 'desc']]
			});
		});
    </script>
	<!-- END PAGE LEVEL SCRIPTS -->
@endsection

