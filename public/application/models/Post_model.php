<?php

class Post_model extends CI_Model {
	public function get_all_from_thread($threadId) {
		return $this->db->select('posts.*, users.username as author_name')
			->from('posts')
			->join('users', 'users.id = posts.author_id')
			->where('posts.thread_id', $threadId)
			->order_by('posts.date', 'asc')
			->get()
			->result_object();
	}
}