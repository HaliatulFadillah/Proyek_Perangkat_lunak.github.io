<?php 
defined('BASEPATH') OR exit('no direct script access allowed');

Class M_math extends CI_Model {

	public function sumDASHBOARD($table) {
		$this->db->select('*');
		$this->db->from($table);
		$query = $this->db->get();
		$total = $query->num_rows();
		return $total;
	}
}