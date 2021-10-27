<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends MX_Controller {

	private $per_page = 5;

	public function index()
	{
		if (!$this->input->post()) redirect(base_url());

		$keywords = url_title(strtolower($this->input->post('keywords')));
		$kategori = url_title(strtolower($this->input->post('kategori')));

		if ($keywords) :
			redirect(base_url("search/$kategori/$keywords"));
		else :
			redirect(base_url("search/$kategori"));
		endif;
	}

	public function only_type($kategori, $page = 1)
	{
		$this->load->library('pagination');
		$this->load->model('mfrontend');

		switch ($kategori) :
			case 'alat' :
				$options = (object) ['table' => 'alat'];
				break;
			
			case 'bahan' :
				$options = (object) ['table' => 'bahan'];
				break;
		endswitch;

		$offset = ($page * $this->per_page) - $this->per_page;
		$data = array(
			'image'		=> $this->mfrontend->get_web_setting('web_image'),
			'xpage'		=> (object) array(
				'base_url'		=> base_url("search/$kategori/page"),
				'first_url'		=> base_url("search/$kategori"),
				'num_rows'		=> count($this->mfrontend->all($options->table)->result()),
				'per_page'		=> $this->per_page,
				'uri_segment'	=> 4
				),
			'kategori'	=> $kategori,
			'keyword'	=> '',
			'slug_cat'	=> ['alat' => 'Alat', 'bahan' => 'Bahan'],
			'data'		=> $this->mfrontend->get_search($options->table, TRUE, $this->per_page, $offset, $options->table)->result(),
			'footer'	=> $this->mfrontend->get_web_setting('web_footer')
			);
		
		$this->slice->set($data)->view('search');
	}

	public function with_keyword($kategori, $keyword, $page = 1)
	{
		$this->load->library('pagination');
		$this->load->model('mfrontend');

		switch ($kategori) :
			case 'alat' :
				$options = (object) ['table' => 'alat'];
				break;
			
			case 'bahan' :
				$options = (object) ['table' => 'bahan'];
				break;
		endswitch;

		$offset = ($page * $this->per_page) - $this->per_page;
		$result = $this->mfrontend->get_search($options->table, FALSE, $this->per_page, $offset, $options->table, str_replace('-', ' ', $keyword))->result();

		$data = array(
			'image'		=> $this->mfrontend->get_web_setting('web_image'),
			'xpage'		=> (object) array(
				'base_url'		=> base_url("search/$kategori/$keyword/page"),
				'first_url'		=> base_url("search/$kategori/$keyword"),
				'num_rows'		=> count($result),
				'per_page'		=> $this->per_page,
				'uri_segment'	=> 5
				),
			'kategori'	=> $kategori,
			'keyword'	=> str_replace('-', ' ', $keyword),
			'slug_cat'	=> ['alat' => 'Alat', 'bahan' => 'Bahan'],
			'data'		=> $this->mfrontend->get_search($options->table, TRUE, $this->per_page, $offset, $options->table, str_replace('-', ' ', $keyword))->result(),
			'footer'	=> $this->mfrontend->get_web_setting('web_footer')
			);
		$this->slice->set($data)->view('search');
	}
}
