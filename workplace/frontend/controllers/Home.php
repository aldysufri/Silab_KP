<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MX_Controller {

	public function index()
	{
		$this->load->model('mfrontend');
		$data = array(
			'image'		=> $this->mfrontend->get_web_setting('web_image'),
			'card' 		=> $this->mfrontend->get_web_setting('home_card'),
			'footer'	=> $this->mfrontend->get_web_setting('web_footer')
			);
		$this->slice->set($data)->view('home');
	}
}
