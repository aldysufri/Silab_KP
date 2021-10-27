<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail extends MX_Controller {

	public function index($kategori, $slug)
	{
		$this->load->model('mfrontend');
		$id = explode('-', $slug)[0];
		$data = array(
			'image'		=> $this->mfrontend->get_web_setting('web_image'),
			'peminjaman' => time(),
			'xid'		=> $id,
			'kategori'	=> $kategori,
			'slug'		=> $slug,
			'data'		=> $this->mfrontend->get_where($kategori, "id_$kategori", $id)->result(),
			'pengguna'	=> $this->mfrontend->get_upinjam_status($id, 'active')->result(),
			'antrian'	=> $this->mfrontend->get_upinjam_status($id, 'pending')->result(),
			'footer'	=> $this->mfrontend->get_web_setting('web_footer')
			);
		$this->slice->set($data)->view('detail');
	}

	public function store($kategori, $slug)
	{
		if (!$this->input->post()) redirect(base_url("$kategori/$slug"));
		$data = array(
			'id_guest'		=> $this->input->post('id_guest'),
			'id_barang'		=> $this->input->post('id_barang'),
			'type_barang'	=> $this->input->post('type_barang'),
			'jumlah'		=> $this->input->post('jumlah'),
			'keperluan'		=> $this->input->post('keperluan'),
			'tanggal_start'	=> date('Y-m-d', strtotime($this->input->post('tanggal_penggunaan'))),
			'jam_start'		=> date('H:i:s', strtotime($this->input->post('jam_penggunaan'))),
			'tanggal_end'	=> date('Y-m-d', strtotime($this->input->post('tanggal_pengembalian'))),
			'jam_end'		=> date('H:i:s', strtotime($this->input->post('jam_pengembalian'))),
			'status'		=> 'pending',
			);
		$this->load->model('mfrontend');

		$store = $this->mfrontend->store('peminjaman_alat_bahan', $data);
		if ($store) :
			$flash = array(
				'type'	=> 'success',
				'title'	=> 'Good job!',
				'text'	=> 'Peminjaman berhasil, silahkan ke Menu Checkout atau Tambah Pinjaman',
				);
		else :
			$flash = array(
				'type'	=> 'error',
				'title'	=> 'Oops!',
				'text'	=> 'Peminjaman gagal, silahkan coba lagi.'
				);
		endif;

		$this->session->set_flashdata('flash', $flash);
		redirect(base_url("$kategori/$slug"));
		// redirect(base_url());
	}
}
