<div class="col s12 m3">
	<div class="card hoverable">
		<div class="card-image">
			@if ($lab->foto == 'default')
				<img src="{{ base_url('assets/img/mobile.jpg') }}">
			@else
				<img src="{{ base_url("storage/$lab->foto") }}">
			@endif
		</div>
		<div class="card-content">
			<span class="card-title">{{ $lab->nama }}</span>
			<p><strong>Telepon:</strong></p>
			<p>{{ $lab->telepon }}</p>
			<div class="divider space"></div>
			<p><strong>Alamat:</strong></p>
			<p>{{ $lab->alamat }}</p>
		</div>
	</div>
</div>
