<?php
class User extends CI_Controller {
	public function login() {
		$this->load->model('user');
		$this->user->login();
		if ($results->num_rows > 0) {
			$_SESSION['user'] =$username;
			$this->load->helper('url');
			redirect('http://rdripley.com/forum-mvc');
		} else {
			$this->load->view('pages/login_failed');
		}
	}
	public function logout() {
		$this->load->view('pages/logout');
	}