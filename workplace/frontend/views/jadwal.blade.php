@extends('layout.app')

@section('content')
	<section id="breadcrumbs">
		<nav>
			<div class="nav-wrapper teal darken-1">
				<div class="col s12">
					<a href="{{ base_url() }}" class="breadcrumb" title="Home">Home</a>
					<a href="{{ current_url() }}" class="breadcrumb" title="Here">Jadwal</a>
				</div>
			</div>
		</nav>
	</section>
	<section id="jadwal">
		<div class="row">
			
			@include('layout.card-info')
			
			<div class="col s12 m9">
				<div class="section">
					<h5>Jadwal Laboratorium</h5>
				</div>
				<div class="divider"></div>
				<div class="table-content">
					<table class="bordered highlight responsive-table">
						<thead>
							<tr>
								<th>Nama Kegiatan</th>
								<th>Tanggal Kegiatan</th>
								<th>Jam Kegiatan</th>
								<th>Ruang Kegiatan</th>
							</tr>
						</thead>
						<tbody>
							@forelse ($data as $item)
							<tr>
								<td>{{ $item->nama_kegiatan }}</td>
								<td>{{ date('d-m-Y', strtotime($item->tanggal_kegiatan)) }}</td>
								<td>{{ date('H:i', strtotime($item->jam_kegiatan)) }}</td>
								<td>{{ $item->ruang_kegiatan }}</td>
							</tr>
							@empty
								<tr>
									<td colspan="4" class="center-align">Tidak ada data.</td>
								</tr>
							@endforelse
						</tbody>
					</table>
				</div>
				<section class="pagination">
					@php
						$setConfig = array(
							'base_url'		=> $xpage->base_url,
							'first_url'		=> $xpage->first_url,
							'total_rows'	=> $xpage->num_rows,
							'per_page'		=> $xpage->per_page,
							'uri_segment'	=> $xpage->uri_segment
						);
						$this->pagination->initialize($setConfig);
					@endphp
					{{ $this->pagination->create_links(); }}
				</section>
			</div>
		</div>
	</section>
@endsection

@section('css')
	<style type="text/css">
		section.pagination {
			margin: 1rem 0;
		}
	</style>
@endsection
