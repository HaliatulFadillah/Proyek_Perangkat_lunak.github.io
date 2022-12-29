<?php
defined('BASEPATH') or exit('no direct script access allowed');

class M_global extends CI_Model {
	public function getData($table)
	{
		return $this->db->get($table);
	}
	public function getDataByID($where, $table)
	{
		$this->db->where($where);
		return $this->db->get($table);
	}
	public function tambahData($data, $table)
	{
		$this->db->insert($table, $data);
	}
	public function editData($where, $table)
	{
		return $this->db->get_where($table, $where);
	}
	public function updateData($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}
	public function deleteData($where, $table)
	{
		$this->db->delete($table, $where);
	}
	public function minData($where, $table)
	{
		$this->db->where($where);
		$this->db->select_min('value');
		return $this->db->get($table);
	}
	public function maxData($table)
	{
		$this->db->select_max('id_user');
		return $this->db->get($table);
	}
	public function cekData($where, $table)
	{
		return $this->db->get_where($table, $where);
	}

}
