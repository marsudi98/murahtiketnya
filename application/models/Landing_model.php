<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing_model extends CI_Model {

	var $table = "bandara";
	public function get_data_airport(){
		$this->db->select('*');
		$this->db->from($this->table);
		$query = $this->db->get();
		return $query->result();
	}
}
