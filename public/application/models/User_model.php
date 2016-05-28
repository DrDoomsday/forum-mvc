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
	public function create($username, $password) {
		$data = array(
			'user' => $username,
			'password' => $password,
		);
		$this->db->insert('user', $data);
	}
}
