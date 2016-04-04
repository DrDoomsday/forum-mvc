<?php

class User extends CI_Model {
	public function login() {
		$username = $_POST['username'];
		$password = $_POST['password'];

		return $results = $this->db->select('*')
				->from('users')
				->where('username', $username)
				->where('password', $password)
				->get()
				->result_object();
	}
}