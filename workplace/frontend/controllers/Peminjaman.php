<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peminjaman extends MX_Controller {

	public function index()
	{
		$this->load->model('mfrontend');
		$data = array(
			'data'		=> $this->mfrontend->get_peminjaman('peminjaman'),
			);
		$this->slice->set($data)->view('pdf-template');
        // var_dump($data);
	}
}
