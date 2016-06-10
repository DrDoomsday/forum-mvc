<?php

class Thread extends CI_Controller {
	public function view($id = null) {
		$this->load->model('thread_model');
		$this->load->model('post_model');

		$threadResults = $this->thread_model->get($id);

		if (count($threadResults) > 0) {
			$thread = $threadResults[0];
		}

		$data = [
			'threadId' => $id,
			'thread'   => $thread,
			'posts'    => $this->post_model->get_all_from_thread($id),
			'user'     => isset($_SESSION['user']) ? $_SESSION['user'] : null,
		];

		if (! $data['posts']) {
			redirect('http://rdripley.com/forum-mvc');
		}

		$this->load->view('common/header');
		$this->load->view('pages/view_thread', $data);
		$this->load->view('common/footer');
	}
}
