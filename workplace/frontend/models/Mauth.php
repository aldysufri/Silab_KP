<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mauth extends CI_Model {

	public function withUser($username)
	{
		$this->db->where('username', $username);
		return $this->db->get('user')->result();
	}
}
