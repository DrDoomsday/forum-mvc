<?php

class Thread_model extends CI_Model {
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

	public function get($id) {
		return $this->db->select('threads.*, users.username as author_name')
			->from('threads')
			->join('users', 'users.id = threads.author_id')
			->where('threads.id', $id)
			->get()
			->result_object();
	}
}
