<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MX_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->middleware->auth();
	}

	public function index()
	{
		$this->slice->view('home');
	}

	public function daftar_peminjam()
	{
		$this->load->model('madmin');

		$data = array(
			'data'		=> $this->madmin->get_peminjaman_status('pending', FALSE)->result(),
			'cstatus'	=> array(
				'active'	=> 'success',
				'clear'		=> 'default',
				'reject'	=> 'danger'
				)
			);

		$this->slice->set($data)->view('daftar-peminjam');
	}

	public function user_settings()
	{
		$this->load->model('madmin');
		$this->slice->set((array) $this->madmin->get_user($this->session->userdata('auth')->id_user))
			->view('user-settings');
	}

	public function user_settings_store()
	{
		if (!$this->input->post()) redirect(base_url('dashboard/user-settings'));

		$id_user = $this->session->userdata('auth')->id_user;
		$data = array(
			'username'	=> $this->input->post('username'),
			'email'		=> $this->input->post('email')
			);

		$this->load->model('madmin');

		$patch = $this->madmin->patch('user', $data, 'id_user', $id_user);

		if ($patch) :
			$flash = array(
				'type'	=> 'success',
				'title'	=> 'Good job!',
				'text'	=> 'Profil berhasil diperbarui.'
				);
		else :
			$flash = array(
				'type'	=> 'error',
				'title'	=> 'Oops!',
				'text'	=> 'Profil gagal diperbarui.'
				);
		endif;

		$this->session->set_flashdata('flash', $flash);
		redirect(base_url('dashboard/user-settings'));
	}

	public function user_password_store()
	{
		if (!$this->input->post()) redirect(base_url('dashboard/user-settings'));

		$this->load->model('madmin');

		$id_user = $this->session->userdata('auth')->id_user;
		$oldPassword = $this->input->post('old_password');
		$newPassword = $this->input->post('new_password');
		$confirmPassword = $this->input->post('new_password_confirm');
		$user = $this->madmin->get_user($id_user);
		$valid = password_verify($oldPassword, $user->password);

		if ($valid) :
			if ($newPassword == $confirmPassword) :
				$data = array('password' => $this->encrypt($confirmPassword));
				
				$patch = $this->madmin->patch('user', $data, 'id_user', $id_user);
				
				if ($patch) :
					$flash = array(
						'type'	=> 'success',
						'title'	=> 'Good job!',
						'text'	=> 'Password berhasil diperbarui.'
						);
				else :
					$flash = array(
						'type'	=> 'error',
						'title'	=> 'Oops!',
						'text'	=> 'Password gagal diperbarui.'
						);
				endif;
			else :
				$flash = array(
					'type'	=> 'error',
					'title'	=> 'Oops!',
					'text'	=> 'Password baru dan konfirmasi password tidak sama.'
					);
			endif;
		else :
			$flash = array(
				'type'	=> 'error',
				'title'	=> 'Oops!',
				'text'	=> 'Password lama tidak sesuai.'
				);
		endif;

		$this->session->set_flashdata('flash', $flash);
		redirect(base_url('dashboard/user-settings'));
	}

	private function encrypt($password)
	{
		return password_hash($password, PASSWORD_BCRYPT, ['cost' => 12]);
	}
}
