<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penjadwalan extends MX_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->middleware->auth();
	}

	public function baru()
	{
		$this->slice->view('penjadwalan-baru');
	}

	public function semua()
	{
		$this->load->model('madmin');

		$this->slice->with('data', $this->madmin->all('jadwal_kegiatan')->result())
			->view('penjadwalan-semua');
	}

	public function store()
	{
		if (!$this->input->post()) redirect(base_url('dashboard/penjadwalan-baru'));

		$data = array(
			'id_kegiatan'		=> time(),
			'nama_kegiatan' 	=> $this->input->post('nama_kegiatan'),
			'tanggal_kegiatan'	=> date('Y-m-d', strtotime($this->input->post('tanggal_kegiatan'))),
			'jam_kegiatan'		=> date('H:i:s', strtotime($this->input->post('jam_kegiatan'))),
			'ruang_kegiatan'	=> $this->input->post('ruang_kegiatan')
			);

		$this->load->model('madmin');

		$store = $this->madmin->store('jadwal_kegiatan', $data);

		if ($store) :
			$flash = array(
				'type'	=> 'success',
				'title'	=> 'Good job!',
				'text'	=> 'Jadwal kegiatan berhasil ditambah.'
				);
		else :
			$flash = array(
				'type'	=> 'error',
				'title'	=> 'Oops!',
				'text'	=> 'Jadwal kegiatan gagal ditambah.'
				);
		endif;

		$this->session->set_flashdata('flash', $flash);
		redirect(base_url('dashboard/penjadwalan-baru'));
	}

	public function edit($id)
	{
		$this->load->model('madmin');

		$this->slice->with('data', $this->madmin->get_by('jadwal_kegiatan', 'id_kegiatan', $id)->result()[0])
			->view('penjadwalan-edit');
	}

	public function patch()
	{
		if (!$this->input->post()) redirect(base_url('dashboard/penjadwalan-semua'));

		$this->load->model('madmin');

		$id = $this->input->post('id_alat');

		$data = array(
			'nama_kegiatan' 	=> $this->input->post('nama_kegiatan'),
			'tanggal_kegiatan'	=> date('Y-m-d', strtotime($this->input->post('tanggal_kegiatan'))),
			'jam_kegiatan'		=> date('H:i:s', strtotime($this->input->post('jam_kegiatan'))),
			'ruang_kegiatan'	=> $this->input->post('ruang_kegiatan')
			);

		$patch = $this->madmin->patch('jadwal_kegiatan', $data, 'id_kegiatan', $id);

		if ($patch) :
			$flash = array(
				'type'	=> 'success',
				'title'	=> 'Good job!',
				'text'	=> 'Jadwal berhasil diperbarui.'
				);
		else :
			$flash = array(
				'type'	=> 'error',
				'title'	=> 'Oops!',
				'text'	=> 'Jadwal gagal diperbarui.'
				);
		endif;

		$this->session->set_flashdata('flash', $flash);
		redirect(base_url("dashboard/penjadwalan-edit/$id"));
	}

	public function destroy()
	{
		if (!$this->input->post()) redirect(base_url('dashboard/penjadwalan-semua'));

		$this->load->model('madmin');

		$id = $this->input->post('id');
		$destroy = $this->madmin->destroy('jadwal_kegiatan', 'id_kegiatan', $id);

		if ($destroy) :
			$feedback = [
				'type'	=> 'success',
				'title'	=> 'Good job!',
				'text'	=> 'Jadwal berhasil dihapus!'
				];
		else :
			$feedback = [
				'type'	=> 'warning',
				'title'	=> 'Oops!',
				'text'	=> 'Jadwal gagal dihapus!'
				];
		endif;
		echo json_encode($feedback);
	}
}
