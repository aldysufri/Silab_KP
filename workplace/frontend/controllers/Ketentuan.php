<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ketentuan extends MX_Controller {

	public function index()
	{
		$this->load->model('mfrontend');
		$data = array(
			'lab' 		=> $this->mfrontend->get_web_setting('laboratorium'),
			'footer'	=> $this->mfrontend->get_web_setting('web_footer')
			);
		$this->slice->set($data)->view('ketentuan');
	}
}
