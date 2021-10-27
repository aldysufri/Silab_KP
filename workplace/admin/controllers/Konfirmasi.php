<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konfirmasi extends MX_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->middleware->auth();
	}

	public function peminjaman()
	{
		$this->load->model('madmin');
		
		$this->slice->with('data', $this->madmin->get_peminjaman_status('pending')->result())
			->view('konfirmasi-peminjaman');
	}

	public function lihat($type, $id)
	{
		$this->load->model('madmin');
     $sisa =0;
    $init = 0;
    if($type == 'alat') :
		  $init = $this->madmin->get_by('alat','id_alat', $id)->result()[0];
    	$sisa = $init->jumlah_alat;
    else  :
      $init = $this->madmin->get_by('bahan','id_bahan', $id)->result()[0];
      $sisa = $init->jumlah_bahan;
    endif;
		  $laststock = $this->madmin->get_by_order('stock','barang_id', $id)->result();
		if($laststock) 
		$sisa = $laststock[0]->remain;

		$barang = $this->madmin->get_barang($type, "id_$type", $id)->result()[0];
		$jum_pinjam = $this->madmin->get_jumlah_peminjam($id);
		$data = (object) array(
			'type'		=> $type,
			'tersedia'	=> $sisa,
			'barang'	=> $barang,
			'user'		=> $this->madmin->get_upinjam_status($id, 'pending')->result(),
			'peminjam'	=> $this->madmin->get_upinjam_status($id, 'active')->result()
			);
		$this->slice->with('data', $data)
			->view('konfirmasi-lihat');
	}

	public function edit_peminjam_ajax()
	{
		if (!$this->input->post()) redirect(base_url('dashboard/konfirmasi-peminjaman'));

		$this->load->model('madmin');

		$id = $this->input->post('id');
		$result = $this->madmin->get_by('peminjaman_alat_bahan', 'id_peminjaman', $id)->result()[0];

		echo json_encode($result);
	}

	public function edit_peminjam_ajax_save()
	{
		if (!$this->input->post()) redirect(base_url('dashboard/konfirmasi-peminjaman'));
		
		$this->load->model('madmin');

		$id = $this->input->post('idp');
		$data = array(
			'jumlah'		=> $this->input->post('jml'),
			'tanggal_start'	=> date('Y-m-d', strtotime($this->input->post('tstart'))),
			'jam_start'		=> date('H:i:s', strtotime($this->input->post('jstart'))),
			'tanggal_end'	=> date('Y-m-d', strtotime($this->input->post('tend'))),
			'jam_end'		=> date('H:i:s', strtotime($this->input->post('jend')))
			);
		$update = $this->madmin->patch('peminjaman_alat_bahan', $data, 'id_peminjaman', $id);

		if ($update) :
			$info = array(
				'status'	=> 'sukses',
				'pesan'		=> '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button><strong>Sukses!</strong> Perubahan berhasil dilakukan.</div>',
				);
		else :
			$info = array(
				'status'	=> 'gagal',
				'pesan'		=> '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button><strong>Error!</strong> Perubahan gagal dilakukan.</div>',
				);
		endif;

		echo json_encode($info);
	}

	public function confirm_terima()
	{
		if (!$this->input->post()) redirect(base_url('dashboard/konfirmasi-peminjaman'));

		$this->load->model('madmin');
		$this->load->library('Mcarbon');
		$rmdash = str_replace("-","",Mcarbon::now()->toDateTimeString());
		$rmcolon = str_replace(":","",$rmdash);
		$rmspace = str_replace(" ","",$rmcolon).substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'),1,3);
		$id = $this->input->post('id');
		$id_barang = $this->input->post('id_barang');
		$type = $this->input->post('type');
		$status = ($type == 'alat') ? 'active' : 'clear';
		$jumlah = $this->input->post('jumlah');
    $sisa =0;
    $init = 0;
    if($type == 'alat') :
		  $init = $this->madmin->get_by('alat','id_alat', $id_barang)->result()[0];
    	$sisa = $init->jumlah_alat;
    else  :
      $init = $this->madmin->get_by('bahan','id_bahan', $id_barang)->result()[0];
      $sisa = $init->jumlah_bahan;
    endif;
		  $laststock = $this->madmin->get_by_order('stock','barang_id', $id_barang)->result();
		if($laststock) 
		$sisa = $laststock[0]->remain;
		$available = ($sisa - $jumlah) >= 0 ? TRUE : FALSE;
		if ($available) :
			$update = $this->madmin->patch('peminjaman_alat_bahan', ['status' => $status], 'id_peminjaman', $id);
		else :
			$update = FALSE;
		endif;
		if ($update) :
			if ($type == 'alat')
			$this->madmin->store('stock',  ['barang_id' => ($id_barang),'trx_id' => ('TRX'.$rmspace), 'decrease' => ($jumlah),'remain' => ($sisa - $jumlah),'status' => ('Out'), 'description' => ($id),'type' => ('alat')] ,'barang_id', $id_barang);
			$info = array(
				'type'	=> 'success',
				'title'	=> 'Good job!',
				'text'	=> 'Peminjaman diterima.'
				);
		else :
			$info = array(
				'type'	=> 'error',
				'title'	=> 'Oops!',
				'text'	=> 'Konfirmasi gagal.'
		);
		endif;
		if ($update) :
		if ($type == 'bahan')
		$this->madmin->store('stock',  ['barang_id' => ($id_barang),'trx_id' => ('TRX'.$rmspace), 'decrease' => ($jumlah),'remain' => ($sisa - $jumlah),'status' => ('Out'), 'description' => ($id),'type' => ('bahan')] ,'barang_id', $id_barang);
		$info = array(
				'type'	=> 'success',
				'title'	=> 'Good job!',
				'text'	=> 'Peminjaman diterima.'
				);
		else :
			$info = array(
				'type'	=> 'error',
				'title'	=> 'Oops!',
				'text'	=> 'Konfirmasi gagal.'
				);
		endif;
		echo json_encode($info);
	}

	public function confirm_tolak()
	{
		if (!$this->input->post()) redirect(base_url('dashboard/konfirmasi-peminjaman'));

		$this->load->model('madmin');

		$id = $this->input->post('id');
		$data = array('status' => 'reject');
		$update = $this->madmin->patch('peminjaman_alat_bahan', $data, 'id_peminjaman', $id);

		if ($update) :
			$info = array(
				'type'	=> 'success',
				'title'	=> 'Good job!',
				'text'	=> 'Peminjaman ditolak.'
				);
		else :
			$info = array(
				'type'	=> 'error',
				'title'	=> 'Oops!',
				'text'	=> 'Konfirmasi gagal.'
				);
		endif;

		echo json_encode($info);
	}

	public function pengembalian()
	{
		$this->load->model('madmin');

		
		$this->slice->with('data', $this->madmin->get_peminjaman_status('active')->result())
			->view('konfirmasi-pengembalian');
	}

	public function confirm_kembali()
	{
		
		if (!$this->input->post()) redirect(base_url('dashboard/konfirmasi-pengembalian'));

		$this->load->model('madmin');

		$this->load->library('Mcarbon');
		$rmdash = str_replace("-","",Mcarbon::now()->toDateTimeString());
		$rmcolon = str_replace(":","",$rmdash);
		$rmspace = str_replace(" ","",$rmcolon).substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'),1,3);
		
		$id = $this->input->post('id');
		$id_barang = $this->madmin->get_by('peminjaman_alat_bahan', 'id_peminjaman', $id )->result()[0];

	
		$jumlah = $id_barang->jumlah;//$this->madmin->get_peminjaman('jumlah')->result();
		$init = $this->madmin->get_by('alat','id_alat', $id_barang->id_barang)->result()[0];
		$sisa = $init->jumlah_alat;
		$laststock = $this->madmin->get_by_order('stock','barang_id', $id_barang->id_barang)->result();
		if($laststock) $sisa = $laststock[0]->remain;
		$data = array('status' => 'clear');
		
		$update = $this->madmin->patch('peminjaman_alat_bahan', $data, 'id_peminjaman', $id);

		if ($update) :
			$this->madmin->store('stock',  
			[
				'barang_id' => ($id_barang->id_barang),
				'trx_id' => ('TRX'.$rmspace), 
				'increase' => ($jumlah),
				'remain' => ($sisa + $jumlah),
				'status' => ('In'), 
				'description' => ($id),
				'type' => ('alat')
				],
			'barang_id',
			$id_barang->id_barang);
			$info = array(
				'type'	=> 'success',
				'title'	=> 'Good job!',
				'text'	=> 'Pengembalian diterima.'
				);
		else :
			$info = array(
				'type'	=> 'error',
				'title'	=> 'Oops!',
				'text'	=> 'Konfirmasi gagal.'
		);
		endif;
		echo json_encode($info);
	}
}
