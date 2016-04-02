<?php

class Thread extends CI_Model {
	function __construct() {
		parent::__construct();
	}
	public function get_all() {
		return $this->db->select('users.username as author_name, threads.id, threads.title, posts.date')
			->from('threads')
			->join('users', 'users.id = threads.author_id')
			->join('posts', 'posts.thread_id = threads.id')
			->group_by('threads.id')
			->order_by('date', 'desc')
			->get()
			->result_object();
	}
}
