<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stok extends MX_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->middleware->auth();
	}
    public function baru()
	{
		$this->load->model('madmin');

		
		$this->slice->With('data', $this->madmin->qwe("*","stock"," LEFT JOIN alat ON alat.id_alat = stock.barang_id LEFT JOIN bahan on bahan.id_bahan = stock.barang_id  
ORDER BY barang_id")->result())->view('stok');
		}
	public function stok_alat()
	{
			$this->load->model('madmin');
	
			$this->slice->with('data', $this->madmin->getAlatWithSisa()->result())
				->view('stok-alat');
	}
	public function stok_bahan()
	{
			$this->load->model('madmin');
	
			$this->slice->with('data', $this->madmin->getBahanWithSisa()->result())
				->view('stok-bahan');
	}
	public function store_alat()
	{
		if (!$this->input->post()) redirect(base_url('dashboard/stok-alat'));
		
		$data = array(
			'barang_id'			=> $this->input->post('barang_id'),
			'type'				=> $this->input->post('type'),
			'status'			=> $this->input->post('status'),
			'description'		=> $this->input->post('description'),
			'increase' => 0,
			'decrease' => 0,
			'remain' => 0,
			'trx_id' => 0,
		);
		$this->load->library('Mcarbon');
		$rmdash = str_replace("-","",Mcarbon::now()->toDateTimeString());
        $rmcolon = str_replace(":","",$rmdash);
        $rmspace = str_replace(" ","",$rmcolon).substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'),1,3);


			$this->load->model('madmin');
			$barang = $this->input->post('barang_id');
			$init = $this->madmin->get_by('alat','id_alat', $barang)->result()[0];
			$sisa = $init->jumlah_alat;
			$laststock = $this->madmin->get_by_order('stock','barang_id', $barang)->result();
			if($laststock) $sisa = $laststock[0]->remain;
			$jumlah = $this->input->post('jumlah');
			$status = $this->input->post('status');
			if ($status == 'In'){
					$data['trx_id'] = 'IN'.$rmspace;
					$data['increase'] = $jumlah;
					$data['decrease'] = 0;
					$data['remain'] = $sisa + $jumlah;
				
			
			}else {
				$data['trx_id'] = 'OUT'.$rmspace;
				$data['increase'] = 0;
				$data['decrease'] = $jumlah;
				$data['remain'] = $sisa - $jumlah;
			}
		
		$store = $this->madmin->store('stock', $data );
		if ($store) :
			$flash = array(
				'type'	=> 'success',
				'title'	=> 'Good job!',
				'text'	=> 'Alat berhasil ditambah.'
				);
		else :
			$flash = array(
				'type'	=> 'error',
				'title'	=> 'Oops!',
				'text'	=> 'Alat gagal ditambah.'
				);
		endif;

		$this->session->set_flashdata('flash', $flash);
		redirect(base_url('dashboard/stok'));
	}
	public function store_bahan()
	{
		if (!$this->input->post()) redirect(base_url('dashboard/stok-bahan'));
		
		$data = array(
			'barang_id'			=> $this->input->post('barang_id'),
			'type'				=> $this->input->post('type'),
			'status'			=> $this->input->post('status'),
			'description'		=> $this->input->post('description'),
			'increase' => 0,
			'decrease' => 0,
			'remain' => 0,
			'trx_id' => 0,
		);
		$this->load->library('Mcarbon');
		$rmdash = str_replace("-","",Mcarbon::now()->toDateTimeString());
        $rmcolon = str_replace(":","",$rmdash);
        $rmspace = str_replace(" ","",$rmcolon).substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'),1,3);


			$this->load->model('madmin');
			$barang = $this->input->post('barang_id');
			$init = $this->madmin->get_by('bahan','id_bahan', $barang)->result()[0];
			$sisa = $init->jumlah_bahan;
			$laststock = $this->madmin->get_by_order('stock','barang_id', $barang)->result();
			if($laststock) $sisa = $laststock[0]->remain;
			$jumlah = $this->input->post('jumlah');
			$status = $this->input->post('status');
			if ($status == 'In'){
					$data['trx_id'] = 'IN'.$rmspace;
					$data['increase'] = $jumlah;
					$data['decrease'] = 0;
					$data['remain'] = $sisa + $jumlah;
				
			
			}else {
				$data['trx_id'] = 'OUT'.$rmspace;
				$data['increase'] = 0;
				$data['decrease'] = $jumlah;
				$data['remain'] = $sisa - $jumlah;
			}
		
		$store = $this->madmin->store('stock', $data );
		if ($store) :
			$flash = array(
				'type'	=> 'success',
				'title'	=> 'Good job!',
				'text'	=> 'Alat berhasil ditambah.'
				);
		else :
			$flash = array(
				'type'	=> 'error',
				'title'	=> 'Oops!',
				'text'	=> 'Alat gagal ditambah.'
				);
		endif;

		$this->session->set_flashdata('flash', $flash);
		redirect(base_url('dashboard/stok'));
	}
	
}
