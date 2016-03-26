<?php
class Pages extends CI_Controller {

		public function home() {
			$this->load->model('thread');
			$data['threads'] = $this->thread->get_all();
			$this->load->view('templates/header');
			$this->load->view('pages/home', $data);
			$this->load->view('templates/footer');
		}
		public function register() {
			
		}
}