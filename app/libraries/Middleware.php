<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Middleware
{
	
	private $CI;

	public function __construct()
	{
		$this->CI =& get_instance();
	}

	public function auth()
	{
		if (!$this->CI->session->userdata('auth')) redirect(base_url('login'));
	}
}
