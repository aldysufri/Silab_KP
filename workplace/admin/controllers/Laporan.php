<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends MX_Controller {
	// Alat
    public function alat()
	{
		$this->slice->view('laporan-alat');
	}
	public function semuaalat()
	{
		$this->load->model('madmin');
		$this->slice->with('laporan', $this->madmin->stockalat()->result())
		->view('laporan-alat');
	}	
	// Bahan
	public function bahan()
	{
		$this->slice->view('laporan-bahan');
	}
	public function semuabahan()
	{
		$this->load->model('madmin');

		$this->slice->with('laporan', $this->madmin->stockbahan()->result())->view('laporan-bahan');
	}
	public function transaksi()
	{
		$this->slice->view('laporan-transaksi');
	}
	public function lap_transaksi()
	{
		$this->load->model('madmin');
		$this->slice->with('laporan', $this->madmin->lap_trans()->result())->view('laporan-transaksi');	
	}
	public function filter_transaksi(){
		$this->load->model('madmin');
		$tgl_awal = $this->input->get('tanggal_awal');
		$tgl_akhir = $this->input->get('tanggal_akhir');
		$this->slice->with('laporan', $this->madmin->qw("id_peminjaman,id_barang,type,jumlah,remain,description,status,trx_id as trx_id,created_at","peminjaman_alat_bahan as a","LEFT JOIN
		(SELECT barang_id,remain,description as description,type as type, trx_id as trx_id, created_at as created_at FROM stock) as b on a.id_peminjaman = b.description","where `created_at` BETWEEN '$tgl_awal 00-00-00' AND  '$tgl_akhir 23-59-00' ")->result())->view('laporan-transaksi');	
	
	}
	public function filter_alat(){
		$this->load->model('madmin');
		$tgl_awal = $this->input->get('tanggal_awal');
		$tgl_akhir = $this->input->get('tanggal_akhir');
		$this->slice->with('laporan', $this->madmin->qw("id_alat,nama_alat,merk_alat,jumlah_alat as stokawal,satuan_alat,masuk,keluar,created_at","alat as a","LEFT JOIN 
		(SELECT barang_id, SUM(increase) as masuk , SUM(decrease) as keluar, created_at as created_at FROM stock ) AS b on a.id_alat =b.barang_id","where `created_at` BETWEEN '$tgl_awal 00-00-00' AND '$tgl_akhir 23-59-00' GROUP BY barang_id")->result())->view('laporan-alat');	
	
	}

	public function filter_bahan(){
		$this->load->model('madmin');
		$tgl_awal = $this->input->get('tanggal_awal');
		$tgl_akhir = $this->input->get('tanggal_akhir');
		$this->slice->with('laporan', $this->madmin->qw("id_bahan,nama_bahan,jumlah_bahan as stokawal,created_at,satuan_bahan,masuk,keluar","bahan as a","LEFT JOIN 
		(SELECT barang_id, SUM(increase) as masuk , SUM(decrease) as keluar, created_at as created_at FROM stock ) AS b on a.id_bahan =b.barang_id","where `created_at` BETWEEN '$tgl_awal 00-00-00' AND '$tgl_akhir 23-59-00'GROUP BY barang_id")->result())->view('laporan-bahan');	
	
	}
}