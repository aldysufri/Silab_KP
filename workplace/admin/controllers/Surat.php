<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Surat extends MX_Controller{
    
	public function __construct()
	{
		parent::__construct();
		$this->middleware->auth();
		$this->load->model('madmin');
	}

	public function peminjaman()
	{
		$this->slice->set((array) 
		$this->madmin->get_surat_peminjaman('peminjaman'))->view('persuratan-peminjaman');
		;
	}

		public function peminjaman_store()
	{
		if (!$this->input->post()) redirect(base_url('dashboard/peminjaman'));

		$foto_kanan = $this->input->post('foto_kanan');
		$foto_kiri = $this->input->post('foto_kiri');

		$up_foto_kanan = $_FILES['kanan'];
		if($up_foto_kanan=''){
			echo "tidak ada data";
		}else{
			$config['upload_path'] = 'storage';
			$config['max_size'] = 2024;
			$config['allowed_types'] = 'jpg|png|gif';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('kanan')){
				$up_foto_kanan = $foto_kanan;
			}else{
				$up_foto_kanan=$this->upload->data('file_name');
			}
		}

		if($this->input->post('ganti_foto_kiri') == 'on' ){
			$show_kiri = 'ya';
		}else{
			$show_kiri = 'tidak';
		};
		if($this->input->post('ganti_foto_kanan') == 'on'){
			$show_kanan = 'ya';
		}else{
			$show_kanan = 'tidak';
		};
		// var_dump($show);

		$up_foto_kiri = $_FILES['kiri'];
		if($up_foto_kiri=''){
			echo "tidak ada data";
		}else{
			$config['upload_path'] = 'storage';
			$config['max_size'] = 2024;
			$config['allowed_types'] = 'jpg|png|gif';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('kiri')){
				$up_foto_kiri = $foto_kiri;
			}else{
				$up_foto_kiri=$this->upload->data('file_name');
			}
		}

		$data = array(
			'title'		=> $this->input->post('title'),
			'detail'	=> 	$this->input->post('detail'),
			'website'	=> $this->input->post('website'),
			'email'		=> $this->input->post('email'),
			'foto_kanan'=> $up_foto_kanan,
			'foto_kiri' => $up_foto_kiri,
			'show_kanan' => $show_kanan,
			'show_kiri' => $show_kiri
			);
			// var_dump($data);
		$update = $this->madmin->peminjaman_store('peminjaman', json_encode($data));
		
		if ($update) :
			$flash = array(
				'type'	=> 'success',
				'title'	=> 'Good job!',
				'text'	=> 'Update Berhasil.'
				);
		else :
			$flash = array(
				'type'	=> 'error',
				'title'	=> 'Oops!',
				'text'	=> 'Update gagal.'
				);
		endif;

		$this->session->set_flashdata('flash', $flash);
		redirect(base_url('dashboard/peminjaman'));
	}
}