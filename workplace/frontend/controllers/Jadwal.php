<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal extends MX_Controller {

	private $per_page = 5;

	public function index($page = 1)
	{
		$this->load->library('pagination');
		$this->load->model('mfrontend');
		$offset = ($page * $this->per_page) - $this->per_page;
		$data = array(
			'image'		=> $this->mfrontend->get_web_setting('web_image'),
			'xpage'		=> (object) array(
				'base_url'		=> base_url("jadwal/page"),
				'first_url'		=> base_url("jadwal"),
				'num_rows'		=> count($this->mfrontend->get_jadwal($this->per_page, $offset)->result()),
				'per_page'		=> $this->per_page,
				'uri_segment'	=> 3
				),
			'lab' 		=> $this->mfrontend->get_web_setting('laboratorium'),
			'data'		=> $this->mfrontend->get_jadwal($this->per_page, $offset, TRUE)->result(),
			'footer'	=> $this->mfrontend->get_web_setting('web_footer')
			);
		$this->slice->set($data)->view('jadwal');
	}
}
