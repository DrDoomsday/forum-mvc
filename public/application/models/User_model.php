<?php

class User_model extends CI_Model {
	public function login($username, $password) {
		return $this->db->select('*')
				->from('users')
				->where('username', $username)
				->where('password', $password)
				->get()
				->result_object();
	}
}