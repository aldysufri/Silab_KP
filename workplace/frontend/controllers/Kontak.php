<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends MX_Controller {

	public function index()
	{
		$this->load->model('mfrontend');
		$data = array(
			'image'		=> $this->mfrontend->get_web_setting('web_image'),
			'lab' 		=> $this->mfrontend->get_web_setting('laboratorium'),
			'footer'	=> $this->mfrontend->get_web_setting('web_footer')
			);
		$this->slice->set($data)->view('kontak');
	}
}
