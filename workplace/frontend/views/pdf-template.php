<style type="text/css">
	* {
		line-height: 1.2em;
		font-size: 12pt
	}

	.font-arial {
		font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif
	}

	.font-cambria {
		font-family: Cambria, Georgia, serif
	}

	.text-center {
		text-align: center
	}

	.margin-bottom {
		margin-bottom: 1.2em
	}

	table {
		border-collapse: collapse;
		width: 100%
	}

	table.line-height-table {
		line-height: 2em
	}

	table .col-center {
		text-align: center
	}

	#header table td {
		padding: 5px
	}

	img.center {
		display: block;
		margin: 0 auto
	}

	img.logo {
		width: 93px;
		height: 123px
	}

	img.certificate {
		padding: 0 10px;
		width: 110px;
		height: 64px
	}

	.head-info td {
		vertical-align: top;
		font-size: 8pt
	}

	.yth {
		padding: 20px 0
	}

	.align-top {
		vertical-align: top
	}
</style>
<section id="header">
	<table collapse="collapse" class="font-arial">
		<tr>
			<?php if ($data->show_kiri == 'ya') { ?>
				<td rowspan="1"><img class="center logo" style="width:100px; height:100px;" src="<?= base_url("assets/img/$data->foto_kiri") ?>"></td>
			<?php } ?>
			<td colspan="2" class="text-center">
				<span style="font-size: 15pt; font-weight: bold"> <?php echo ($data->title); ?> </span><br>
				<span style="font-size: 10pt; "><?php echo ($data->detail); ?></span>
				<span style="font-size: 6pt;">Website :<?php echo ($data->website); ?><br>Email: <?php echo ($data->email); ?></span>
			</td>

			<?php if ($data->show_kanan == 'ya') { ?>
				<td rowspan="2"><img class="center certificate" style="width:100px; height:100px;" src="<?= base_url("assets/img/$data->foto_kanan") ?>"></td>
			<?php } ?>
		</tr>
	</table>
	<hr widht="200px;">
</section>
<section class="font-cambria">
	<div class="yth">Kepada Yth.<br>Kepala Laboratorium<br>SMK DHARMA ANALITIKA MEDAN</div>
	<div>Dengan hormat,<br>Yang bertanda tangan dibawah ini, saya :</div>
</section>
<section>
	<table class="line-height-table">
		<tr>
			<td style="width: 20%">Nama</td>
			<td style="width: 2%">:</td>
			<td><?= ($bio->nama) ?></td>
		</tr>
		<tr>
			<td>NIM/NIP</td>
			<td>:</td>
			<td><?= ($bio->nim_nip) ?></td>
		</tr>
		<tr>
			<td>Jurusan/Prodi</td>
			<td>:</td>
			<td><?= ($bio->jurusan_prodi) ?></td>
		</tr>
		<tr>
			<td>No. HP</td>
			<td>:</td>
			<td><?= ($bio->no_hp) ?></td>
		</tr>
	</table>
</section>
<section>
	<div>Mengajukan permohonan peminjaman alat/bahan di laboratorium IKM.<br>Adapun alat/bahan yang akan saya pinjam adalah :</div>
</section>
<br>
<section>
	<table border="1" class="bordered highlight responsive-table">
		<thead>
			<tr>
				<th>Nama Barang</th>
				<th>jumlah</th>
				<th>Keperluan</th>
				<th>Tanggal Peminjaman</th>
				<th>Tanggal Pengembalian</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($items as $a) { ?>
				<tr>
					<td><?= ($a->nama_barang) ?></td>
					<td align="center"><?= ($a->jumlah) ?></td>
					<td align="center"><?= ($a->keperluan) ?></td>
					<td align="center"><?= ($a->tanggal_start) ?></td>
					<td align="center"><?= ($a->tanggal_end) ?></td>
				</tr>
			<?php } ?>

		</tbody>
	</table>
</section>
<br>
<section class="margin-bottom">
	<div>Demikian permohonan peminjaman alat/bahan ini saya buat. Atas ijin dan perkenaan kepala laboratorium, saya sampaikan terima kasih.</div>
</section>
<br>
<section id="ttd">
	<table>
		<tr>
			<td style="width: 70%;"></td>
			<td style="width: 30%;">Medan, <?= date('d-m-Y') ?></td>
		</tr>
		<tr>
			<td colspan="2">Mengetahui,</td>
		</tr>
		<tr>
			<td>Dosen pengampu/pembimbing,</td>
			<td>Hormat saya,</td>
		</tr>
		<tr>
			<td colspan="2" style="height: 70px"></td>
		</tr>
		<tr>
			<td class="align-top">(............................................................)</td>
			<td class="align-top"><?= ($bio->nama) ?></td>
		</tr>
	</table>
	<br>
	<table>
		<tr>
			<td class="col-center">Menyetujui,<br>Kepala Laboratorium</td>
		</tr>
		<tr>
			<td style="height: 70px"></td>
		</tr>
		<tr>
			<td class="align-top col-center">(............................................................)</td>
		</tr>
		<tr>
			<td style="color: #9c9c9c;">UID<?= ($bio->id_peminjaman) ?></td>
		</tr>
	</table>
</section>