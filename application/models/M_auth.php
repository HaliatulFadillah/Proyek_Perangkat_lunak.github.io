<?php 
defined('BASEPATH') OR exit('no direct script access allowed');

Class M_auth extends CI_Model {

	public function cek_login($where, $table)
	{
		return $this->db->get_where($table, $where);
	}

}
?>