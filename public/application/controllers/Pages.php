<?php
class Pages extends CI_Controller {

		public function home() {
			$this->load->model('thread_model');
			$data['threads'] = $this->thread_model->get_all();
			$this->load->view('common/header');
			$this->load->view('pages/home', $data);
			$this->load->view('common/footer');
		}
}
