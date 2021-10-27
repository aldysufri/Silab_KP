@extends('layout.app')
@section('breadcrumb')
	<li><a href="{{ base_url('dashboard') }}">Dashboard</a><i class="fa fa-circle"></i></li>
	<li><a href="{{ base_url('dashboard/stok') }}">Stok</a><i class="fa fa-circle"></i></li>
	<li><span>Stok Alat</span></li>
@endsection
@section('page-title', 'Form Stok')
@section('page-content')
	<!-- BEGIN PORTLET-->
	<div class="portlet light bordered">
		<div class="portlet-title">
			<div class="caption font-green">
				<i class="icon-note font-green"></i>
				<span class="caption-subject bold uppercase">Form Stok Bahan </span>
			</div>
		</div>
		<div class="portlet-body form">
			<form action="{{ base_url('dashboard/stok-bahan/store') }}" method="POST" enctype='multipart/form-data' role="form">
				<input type="hidden" name="{{ $this->security->get_csrf_token_name() }}" value="{{ $this->security->get_csrf_hash() }}">
				<div class="form-body">
					<div class="row">
						<div class="col-xs-12 col-sm-6">
							<div class="form-group form-md-line-input form-md-floating-label">
                                <select name="barang_id" id="barang_id" class="form-control">
                                    @foreach ($data as $bahan)
                                <option value="{{ $bahan->id_bahan }}">{{ $bahan->nama_bahan }}</option>
                                    @endforeach
                                </select>
                                <label for="nama_alat">Nama Alat</label>
                            </div>
                            <input type="text" value="bahan" id="type" name="type" hidden>
							<div class="form-group">
                                <input type="radio" class="" class="custom-control-input" name="status" id="status1" value="In" checked> 
                                <label for="status1">Masuk</label>
                                <input type="radio" class="" name="status" id="status2" value="Out"> 
                                <label for="status2">Keluar</label>
                             </div>
                             <div class="form-group form-md-line-input form-md-floating-label">
                                 <input type="number" class="form-control" id="jumlah" name="jumlah">
                                 <label for="jumlah">Jumlah</label>
                            </div>
                            <div class="form-group form-md-line-input form-md-floating-label">
                                <textarea name="description" class="form-control" id="" cols="30" rows="10"></textarea>
                                    <label for="description">Deskripsi</label>
                            </div>
                            <div class="form-group form-md-line-input form-md-floating-label">
                                    <button type="submit" class="btn btn-primary" >Submit</button>
                             </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
	</div>
@endsection