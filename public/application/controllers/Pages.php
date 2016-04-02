<?php
class Pages extends CI_Controller {

		public function home() {
			$this->load->model('thread');
			$data['threads'] = $this->thread->get_all();
			$this->load->view('templates/header');
			$this->load->view('pages/home', $data);
			$this->load->view('templates/footer');
		}
		public function account() {
			$this->load->view('templates/header');
			$this->load->view('templates/footer');
			$this->load->view('helpers/database_helper');
			$this->load->view('pages/account');
		}
		public function delete_post() {
			$this->load->view('helpers/database_helper');
			$this->load->view('pages/delete_post');
		}
		public function delete_thread() {
			$this->load->view('helpers/database_helper');
			$this->load->view('pages/delete_thread');
		}
		public function init_form() {
			$this->load->view('helpers/database_helper');
			$this->load->view('pages/init_form');
		}
		public function login() {
			$this->load->view('pages/init_form');
			$this->load->view('pages/login');
		}
		public function logout() {
			$this->load->view('pages/logout');
		}
		public function make_thread() {
			$this->load->view('templates/header');
			$this->load->view('templates/footer');
			$this->load->view('pages/init_form');
			$this->load->view('pages/make_thread');
		}
		public function new_password() {
			$this->load->view('helpers/database_helper');
			$this->load->view('pages/new_password');
		}
		public function register() {
			$this->load->view('pages/init_form');
			$this->load->view('pages/register');
		}
		public function reply() {
			$this->load->view('helpers/database_helper');
			$this->load->view('pages/reply');
		}
		public function view_thread() {
			$this->load->view('helpers/database_helper');
			$this->load->view('templates/header');
			$this->load->view('templates/footer');
			$this->load->view('pages/view_thread');
		}
}