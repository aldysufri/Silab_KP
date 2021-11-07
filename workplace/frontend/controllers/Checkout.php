<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Checkout extends MX_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Mfrontend');
	}

	public function index($id)
	{
		$this->load->model('mfrontend');
		$data = array(
			'id' 		=> $id,
			'data'		=> $this->mfrontend->checkout('peminjaman_alat_bahan', $id)->result(),
			'item'		=> $this->mfrontend->get_peminjaman_status($id)->result(),
			'footer'	=> $this->mfrontend->get_web_setting('web_footer')
		);
		$this->slice->set($data)->view('checkout');
	}

	public function store($id)
	{
		if (!$this->input->post()) redirect(base_url());

		$data = array(

			'nama'			=> $this->input->post('nama'),
			'jurusan_prodi'	=> $this->input->post('jurusan_prodi'),
			'nim_nip'		=> $this->input->post('nim_nip'),
			'no_hp'			=> $this->input->post('no_hp'),
		);
		$this->load->model('mfrontend');
		$store = $this->db->update('peminjaman_alat_bahan', $data, array('id_guest' => $id));

		if ($store) :
			$flash = array(
				'type'	=> 'success',
				'title'	=> 'Good job!',
				'text'	=> 'Peminjaman berhasil, silahkan download lampiran.',
				'pdf'	=> base_url("lampiran/uid/$id.pdf")
			);
		else :
			$flash = array(
				'type'	=> 'error',
				'title'	=> 'Oops!',
				'text'	=> 'Peminjaman gagal, silahkan coba lagi.'
			);
		endif;

		$this->session->set_flashdata('flash', $flash);
		redirect(base_url("checkout/null"));
	}

	function delete($id)
	{
		$this->load->model('mfrontend');
		$where = array('id_barang' => $id);
		$this->mfrontend->delete($where, 'peminjaman_alat_bahan');
		redirect(base_url());
	}

	public function create_pdf($uid)
	{
		$this->load->model('mfrontend');
		// $data['data'] = $this->mfrontend->get_peminjaman('peminjaman');
		$peminjaman = array(
			'data'		=> $this->mfrontend->get_peminjaman('peminjaman'),
			'items' => $this->mfrontend->get_peminjaman_status($uid)->result(),
			'bio' => $this->mfrontend->get_pdf($uid)
		);
		// $this->load->model('mfrontend');
		// var_dump($data);
		$this->load->view('pdf-template', $peminjaman);
		if (!$peminjaman) redirect(base_url());
		$html = $this->load->view('pdf-template', $peminjaman, TRUE);
		// 		print_r($html);
		//$this->load->view('pdf-template', $data, TRUE);

		// 		exit();
		//return $html;
		$this->load->library('createpdf');

		$pdf = $this->createpdf->init();
		$pdf->SetTitle("$uid.pdf");
		$pdf->WriteHTML($html);
		$pdf->Output("$uid.pdf", "I");
	}
}
