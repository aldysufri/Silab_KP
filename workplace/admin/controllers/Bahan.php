<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bahan extends MX_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->middleware->auth();
	}

	public function semua()
	{
		$this->load->model('madmin');

		$this->slice->with('data', $this->madmin->all('bahan')->result())
			->view('bahan-semua');
	}

	public function baru()
	{
		$this->slice->view('bahan-baru');
	}

	public function store()
	{
		if (!$this->input->post()) redirect(base_url('dashboard/bahan-baru'));
		
		$data = array(
			'id_bahan'			=> time(),
			'nama_bahan'		=> $this->input->post('nama_bahan'),
			'jumlah_bahan'		=> $this->input->post('jumlah'),
			'satuan_bahan'		=> $this->input->post('satuan_jumlah'),
			'tgl_masuk_bahan'	=> date( 'Y-m-d', strtotime($this->input->post('tanggal_masuk'))),
			'lokasi_bahan'		=> $this->input->post('lokasi_simpan'),
			'kondisi_bahan'		=> $this->input->post('kondisi_bahan'),
			'foto_bahan'		=> $this->input->post('foto_bahan')
			);

		$this->load->model('madmin');

		$store = $this->madmin->store('bahan', $data);

		if ($store) :
			$flash = array(
				'type'	=> 'success',
				'title'	=> 'Good job!',
				'text'	=> 'Bahan berhasil ditambah.'
				);
		else :
			$flash = array(
				'type'	=> 'error',
				'title'	=> 'Oops!',
				'text'	=> 'Bahan gagal ditambah.'
				);
		endif;

		$this->session->set_flashdata('flash', $flash);
		redirect(base_url('dashboard/bahan-baru'));
	}

	public function edit($id)
	{
		$this->load->model('madmin');

		$this->slice->with('data', $this->madmin->get_by('bahan', 'id_bahan', $id)->result()[0])
			->view('bahan-edit');
	}

	public function patch()
	{
		if (!$this->input->post()) redirect(base_url('dashboard/bahan-semua'));

		$this->load->model('madmin');

		$ganti_foto = $this->input->post('ganti_foto');
		$id = $this->input->post('id_bahan');

		$data['nama_bahan'] = $this->input->post('nama_bahan');
		$data['jumlah_bahan'] = $this->input->post('jumlah');
		$data['satuan_bahan'] = $this->input->post('satuan_jumlah');
		$data['tgl_masuk_bahan'] = date('Y-m-d', strtotime($this->input->post('tanggal_masuk')));
		$data['lokasi_bahan'] = $this->input->post('lokasi_simpan');
		$data['kondisi_bahan'] = $this->input->post('kondisi_bahan');

		if (isset($ganti_foto)) :
			$img = $this->madmin->get_by('bahan', 'id_bahan', $id)->result()[0]->foto_bahan;
			$data['foto_bahan'] = $this->input->post('edit-foto', TRUE, $img);
		endif;

		$patch = $this->madmin->patch('bahan', $data, 'id_bahan', $id);

		if ($patch) :
			$flash = array(
				'type'	=> 'success',
				'title'	=> 'Good job!',
				'text'	=> 'Bahan berhasil diperbarui.'
				);
		else :
			$flash = array(
				'type'	=> 'error',
				'title'	=> 'Oops!',
				'text'	=> 'Bahan gagal diperbarui.'
				);
		endif;

		$this->session->set_flashdata('flash', $flash);
		redirect(base_url("dashboard/bahan-edit/$id"));
	}

	public function destroy()
	{
		if (!$this->input->post()) redirect(base_url('dashboard/bahan-semua'));

		$this->load->model('madmin');

		$id_bahan = $this->input->post('id');
		$img = $this->madmin->get_by('bahan', 'id_bahan', $id_bahan)->result()[0]->foto_bahan;
		$destroy = $this->madmin->destroy('bahan', 'id_bahan', $id_bahan);

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
