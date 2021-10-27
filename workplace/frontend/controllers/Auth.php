<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends MX_Controller {

	public function login()
	{
		if ($this->session->userdata('auth')) redirect(base_url('dashboard'));
		$this->slice->view('login');
	}

	public function validation()
	{
		if (!$this->input->post()) redirect(base_url('login'));
		
		$this->load->model('mauth');

		$data = (object) array(
			'username'	=> $this->input->post('username'),
			'password'	=> $this->input->post('password')
			);

		$user = $this->mauth->withUser($data->username);

		if ($user) :
			$password = $user[0]->password;
			if (password_verify($data->password, $password)) :
				$userdata = (object) array(
					'id_user'	=> $user[0]->id_user,
					'username'	=> $user[0]->username
					);

				$this->session->set_userdata('auth', $userdata);
				redirect(base_url('dashboard'));
			else :
				redirect(base_url('login'));
			endif;
		else :
			redirect(base_url('login'));
		endif;
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url());
	}

	private function encrypt($password)
	{
		return password_hash($password, PASSWORD_BCRYPT, ['cost' => 12]);
	}
}
