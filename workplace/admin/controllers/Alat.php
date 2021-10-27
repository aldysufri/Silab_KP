<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alat extends MX_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->middleware->auth();
	}

	public function semua()
	{
		$this->load->model('madmin');

		$this->slice->with('data', $this->madmin->getAlatWithSisa()->result())
			->view('alat-semua');
	}

	public function baru()
	{
		$this->slice->view('alat-baru');
	}

	public function store()
	{
		if (!$this->input->post()) redirect(base_url('dashboard/alat-baru'));
		
		$data = array(
			'id_alat'			=> time(),
			'nama_alat'			=> $this->input->post('nama_alat'),
			'merk_alat'			=> $this->input->post('nama_merk'),
			'jumlah_alat'		=> $this->input->post('jumlah'),
			'satuan_alat'		=> $this->input->post('satuan_jumlah'),
			'tgl_masuk_alat'	=> date( 'Y-m-d', strtotime($this->input->post('tanggal_masuk'))),
			'lokasi_alat'		=> $this->input->post('lokasi_simpan'),
			'kondisi_alat'		=> $this->input->post('kondisi_alat'),
			'foto_alat'			=> $this->input->post('foto_alat')
			);

		$this->load->model('madmin');

		$store = $this->madmin->store('alat', $data);

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
		redirect(base_url('dashboard/alat-baru'));
	}

	public function edit($id)
	{
		$this->load->model('madmin');

		$this->slice->with('data', $this->madmin->get_by('alat', 'id_alat', $id)->result()[0])
			->view('alat-edit');
	}

	public function patch()
	{
		if (!$this->input->post()) redirect(base_url('dashboard/alat-semua'));

		$this->load->model('madmin');

		$ganti_foto = $this->input->post('ganti_foto');
		$id = $this->input->post('id_alat');

		$data['nama_alat'] = $this->input->post('nama_alat');
		$data['merk_alat'] = $this->input->post('nama_merk');
		$data['jumlah_alat'] = $this->input->post('jumlah');
		$data['satuan_alat'] = $this->input->post('satuan_jumlah');
		$data['tgl_masuk_alat'] = date('Y-m-d', strtotime($this->input->post('tanggal_masuk')));
		$data['lokasi_alat'] = $this->input->post('lokasi_simpan');
		$data['kondisi_alat'] = $this->input->post('kondisi_alat');

		if (isset($ganti_foto)) :
			$img = $this->madmin->get_by('alat', 'id_alat', $id)->result()[0]->foto_alat;
			$data['foto_alat'] = $this->input->post('edit-foto', TRUE, $img);
		endif;

		$patch = $this->madmin->patch('alat', $data, 'id_alat', $id);

		if ($patch) :
			$flash = array(
				'type'	=> 'success',
				'title'	=> 'Good job!',
				'text'	=> 'Alat berhasil diperbarui.'
				);
		else :
			$flash = array(
				'type'	=> 'error',
				'title'	=> 'Oops!',
				'text'	=> 'Alat gagal diperbarui.'
				);
		endif;

		$this->session->set_flashdata('flash', $flash);
		redirect(base_url("dashboard/alat-edit/$id"));
	}

	public function destroy()
	{
		if (!$this->input->post()) redirect(base_url('dashboard/alat-semua'));

		$this->load->model('madmin');

		$id_alat = $this->input->post('id');
		$img = $this->madmin->get_by('alat', 'id_alat', $id_alat)->result()[0]->foto_alat;
		$destroy = $this->madmin->destroy('alat', 'id_alat', $id_alat);

		if ($destroy) :
			$feedback = [
				'type'	=> 'success',
				'title'	=> 'Good job!',
				'text'	=> 'Alat berhasil dihapus!'
				];
		else :
			$feedback = [
				'type'	=> 'warning',
				'title'	=> 'Oops!',
				'text'	=> 'Alat gagal dihapus!'
				];
		endif;
		echo json_encode($feedback);
	}

	public function do_upload($name, $prefix, $delete = FALSE, $img_name = NULL)
	{
		$this->load->library('upload');

		$rename = $prefix . time() . ".jpg";
		$config['upload_path'] = 'storage';
		$config['allowed_types'] = 'jpg|jpeg|gif|png';
		$config['max_size'] = 3024;
		$config['min_width'] = 50;
		$config['min_height'] = 50;
		$config['file_name'] = $rename;

		$this->upload->initialize($config);

		if ($delete && $img_name != NULL) :
			unlink(FCPATH . "storage/$img_name");
		endif;

		return $this->upload->do_upload($name) ? $rename : 'default';
	}
}
