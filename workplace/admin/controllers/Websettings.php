<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Websettings extends MX_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->middleware->auth();
		$this->load->model('madmin');
	}

	public function image()
	{
		$this->slice->set((array) $this->madmin->get_web_setting('web_image'))
			->view('web-image');
	}

	public function image_store()
	{
		if (!$this->input->post()) redirect(base_url('dashboard/web-laboratorium'));

		$nama_header = $this->input->post('nama_header');
		$nama_drawer = $this->input->post('nama_drawer');
		$ganti_header = $this->input->post('ganti_header');
		$ganti_drawer = $this->input->post('ganti_drawer');
		
		if (isset($ganti_header)) :
			$up_header = $this->do_upload('header', 'header_');
		else :
			$up_header = $nama_header;
		endif;

		if (isset($ganti_drawer)) :
			$up_drawer = $this->do_upload('drawer', 'drawer_');
		else :
			$up_drawer = $nama_drawer;
		endif;

		$data = array(
			'header'	=> $up_header,
			'drawer'	=> $up_drawer
			);
		$update = $this->madmin->web_setting_store('web_image', json_encode($data));
		
		if ($update) :
			$flash = array(
				'type'	=> 'success',
				'title'	=> 'Good job!',
				'text'	=> 'Update Berhasil.'
				);
		else :
			$flash = array(
				'type'	=> 'error',
				'title'	=> 'Oops!',
				'text'	=> 'Update gagal.'
				);
		endif;

		$this->session->set_flashdata('flash', $flash);
		redirect(base_url('dashboard/web-image'));
	}

	public function laboratorium()
	{
		$this->slice->set((array) 
		$this->madmin->get_web_setting('laboratorium'))
			->view('web-laboratorium');
	}

	public function laboratorium_store()
	{
		if (!$this->input->post()) redirect(base_url('dashboard/web-laboratorium'));

		$nama_foto = $this->input->post('nama_foto');
		$nama_denah = $this->input->post('nama_denah');
		$ganti_foto = $this->input->post('ganti_foto');
		$ganti_denah = $this->input->post('ganti_denah');
		
		if (isset($ganti_foto)) :

			$up_foto = $this->do_upload('foto', 'foto_');
			//echo "asd";exit();
		else :
			$up_foto = $nama_foto;
		endif;

		if (isset($ganti_denah)) :
			$up_denah = $this->do_upload('denah', 'denah_');
		else :
			$up_denah = $nama_denah;
		endif;

		$data = array(
			'nama'		=> $this->input->post('nama'),
			'telepon'	=> $this->input->post('telepon'),
			'alamat'	=> $this->input->post('alamat'),
			'email'		=> $this->input->post('email'),
			'profil'	=> $this->input->post('profil'),
			'ketentuan'	=> $this->input->post('ketentuan'),
			'map_url'	=> $this->input->post('map_url'),
			'foto'		=> $up_foto,
			'denah'		=> $up_denah
			);
		$update = $this->madmin->web_setting_store('laboratorium', json_encode($data));
		
		if ($update) :
			$flash = array(
				'type'	=> 'success',
				'title'	=> 'Good job!',
				'text'	=> 'Update Berhasil.'
				);
		else :
			$flash = array(
				'type'	=> 'error',
				'title'	=> 'Oops!',
				'text'	=> 'Update gagal.'
				);
		endif;

		$this->session->set_flashdata('flash', $flash);
		redirect(base_url('dashboard/web-laboratorium'));
	}

	public function home_content()
	{
		$this->slice->set((array) $this->madmin->get_web_setting('home_card'))
			->view('web-home-content');
	}

	public function home_content_store()
	{
		if (!$this->input->post()) redirect(base_url('dashboard/web-home-content'));

		$json = json_encode($this->input->post());
		$update = $this->madmin->web_setting_store('home_card', $json);

		if ($update) :
			$flash = array(
				'type'	=> 'success',
				'title'	=> 'Good job!',
				'text'	=> 'Update Berhasil.'
				);
		else :
			$flash = array(
				'type'	=> 'error',
				'title'	=> 'Oops!',
				'text'	=> 'Update gagal.'
				);
		endif;

		$this->session->set_flashdata('flash', $flash);
		redirect(base_url('dashboard/web-home-content'));
	}

	public function web_footer()
	{
		$this->slice->set((array) $this->madmin->get_web_setting('web_footer'))
			->view('web-footer');
	}

	public function web_footer_store()
	{
		if (!$this->input->post()) redirect(base_url('dashboard/web-footer'));

		$links = (object) array(
			'name'	=> $this->input->post('footer_url_name'),
			'url'	=> $this->input->post('footer_url_link')
			);

		for ($i = 0; $i < count($links->name); $i++) :
			$link_content[$i] = array(
				'name'	=> $links->name[$i],
				'url'	=> "{$links->url[$i]}"
				);
		endfor;

		$data = array(
			'footer_description_title'		=> $this->input->post('footer_description_title'),
			'footer_description_content'	=> $this->input->post('footer_description_content'),
			'footer_link_title'				=> $this->input->post('footer_link_title'),
			'footer_link_content'			=> $link_content
			);

		$update = $this->madmin->web_setting_store('web_footer', json_encode($data));

		if ($update) :
			$flash = array(
				'type'	=> 'success',
				'title'	=> 'Good job!',
				'text'	=> 'Update Berhasil.'
				);
		else :
			$flash = array(
				'type'	=> 'error',
				'title'	=> 'Oops!',
				'text'	=> 'Update gagal.'
				);
		endif;

		$this->session->set_flashdata('flash', $flash);
		redirect(base_url('dashboard/web-footer'));
	}

	public function do_upload($name, $prefix)
	{
		$this->load->library('upload');

		$rename = $prefix . time() . ".jpg";
		$config['upload_path'] = 'storage';
		$config['allowed_types'] = 'jpg|jpeg|gif|png';
		$config['max_size'] = 2024;
		/*$config['min_width'] = 50;
		$config['min_height'] = 50;*/
		$config['file_name'] = $rename;

		$this->upload->initialize($config);

		array_map('unlink', glob(FCPATH . "storage/$prefix*.jpg"));

		return $this->upload->do_upload($name) ? $rename : 'default';
	}
}
