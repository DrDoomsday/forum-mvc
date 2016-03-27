<?php

class Thread extends CI_Model {
	function __construct() {
		parent::__construct();
	}
	public function get_all() {
		$query = $this->db->get('threads');
		return $query->result();
	}
}
