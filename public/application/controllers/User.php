<?php



class User extends CI_Controller {

	public function login() {

		$this->load->model('user_model');



		$results = $this->user_model->login(

			$_POST['username'],

			$_POST['password']

		);



		if (count($results) > 0) {

			$_SESSION['user'] = $results[0]->username;

			$this->load->helper('url');

			redirect('http://rdripley.com/forum-mvc');

		} else {

			$this->load->view('pages/login_failed');

		}

	}



	public function logout() {

		unset($_SESSION['user']);

		unset($_SESSION['user_id']);



		$this->load->helper('url');

		redirect('http://rdripley.com/forum-mvc');

	}

	public function register() {
		$this->load->view('common/header');
		$this->load->view('pages/register');
		$this->load->view('common/footer');

	}

}

