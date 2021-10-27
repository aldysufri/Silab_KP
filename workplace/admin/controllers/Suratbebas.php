<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Suratbebas extends MX_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->middleware->auth();
		// $this->load->model('Madmin');
	}

	public function baru()
	{
		$this->slice->view('suratbebas-baru');
	}

	public function semua()
	{
		$this->load->model('madmin');

		$this->slice->with('data', $this->madmin->all('surat_bebas')->result())
			->view('suratbebas-semua');
	}

    public function store()
	{
		$data = array(
			'id'		=> time(),
			'nama' 	    => $this->input->post('nama'),
			'nim' 	    => $this->input->post('nim'),
			'jurusan'	=> $this->input->post('jurusan'),
			);

		$this->load->model('madmin');
		$n = $this->input->post('nim');
		$nim_st = $this->madmin->get_nim($n);
		// var_dump($nim_st >> 0);
		// var_dump($nim_st ==! 0);

		if ($nim_st >> 0) :
			$flash = array(
					'type'	=> 'error',
					'title'	=> 'Oops!',
					'text'	=> 'Surat Bebas gagal ditambah. Masih ada Peminjaman Alat dan Bahan Lab '
					);
				$this->session->set_flashdata('flash', $flash);
				redirect(base_url('dashboard/suratbebas-baru'));
				
			else :

				$store = $this->madmin->store('surat_bebas', $data);
				if ($store) :
				$flash = array(
					'type'	=> 'success',
					'title'	=> 'Good job!',
					'text'	=> 'Surat bebas berhasil ditambah.'
					);
				endif;
				$this->session->set_flashdata('flash', $flash);
				redirect(base_url('dashboard/suratbebas-baru'));
			endif;

	}

	public function edit($id)
	{
		$this->load->model('madmin');

		$this->slice->with('data', $this->madmin->get_by('surat_bebas', 'id', $id)->result()[0])
			->view('suratbebas-edit');
	}

	public function patch()
	{
		if (!$this->input->post()) redirect(base_url('dashboard/suratbebas-semua'));

		$this->load->model('madmin');

		$id = $this->input->post('id');

		$data = array(
			'nama' 	    => $this->input->post('nama'),
			'nim' 	    => $this->input->post('nim'),
			'jurusan'	=> $this->input->post('jurusan')
			);

		$patch = $this->madmin->patch('surat_bebas', $data, 'id', $id);

		if ($patch) :
			$flash = array(
				'type'	=> 'success',
				'title'	=> 'Good job!',
				'text'	=> 'Surat berhasil diperbarui.'
				);
		else :
			$flash = array(
				'type'	=> 'error',
				'title'	=> 'Oops!',
				'text'	=> 'Surat gagal diperbarui.'
				);
		endif;

		$this->session->set_flashdata('flash', $flash);
		redirect(base_url("dashboard/suratbebas-edit/$id"));
	}

	public function destroy()
	{
		if (!$this->input->post()) redirect(base_url('dashboard/suratbebas-semua'));

		$this->load->model('madmin');

		$id = $this->input->post('id');
		$destroy = $this->madmin->destroy('surat_bebas', 'id', $id);

		if ($destroy) :
			$feedback = [
				'type'	=> 'success',
				'title'	=> 'Good job!',
				'text'	=> 'Surat berhasil dihapus!'
				];
		else :
			$feedback = [
				'type'	=> 'warning',
				'title'	=> 'Oops!',
				'text'	=> 'Surat gagal dihapus!'
				];
		endif;
		echo json_encode($feedback);
	}

	/* Create PDF File */
	public function create_pdf($uid = true)
	{
		$this->load->model('madmin');

		$data = $this->madmin->get_pdf($uid);
		if (!$data) redirect(base_url());

		$html = $this->load->view('pdf-template', (array) $data, TRUE);

		$this->load->library('createpdf');
		
		$pdf = $this->createpdf->init();
		$pdf->SetTitle("$uid.pdf");
		$pdf->WriteHTML($html);
		$pdf->Output("$uid.pdf", "I");
	}

}
