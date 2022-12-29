<?php 
defined('BASEPATH') OR exit('no direct script access allowed');

Class M_join extends CI_Model {

	public function get_joinBOBOT()
	{
		$this->db->select('*');
		$this->db->from('bobot_penilaian');
		$this->db->join('kriteria','bobot_penilaian.id_kriteria=kriteria.id_kriteria');
		$query = $this->db->get();
		return $query->result();
	}

	public function get_joinPENAWARAN($id_paket_tender)
	{
		$this->db->select('*');
		$this->db->from('penawaran');
		$this->db->join('peserta_tender','penawaran.id_peserta=peserta_tender.id_peserta');
		$this->db->join('paket_tender','penawaran.id_paket_tender=paket_tender.id_paket_tender');
		$this->db->where('penawaran.id_paket_tender', $id_paket_tender);
		$query = $this->db->get();
		return $query->result();
	}

	public function get_joinPENAWARANbyIDPeserta($id)
	{
		$this->db->select('*');
		$this->db->from('penawaran');
		$this->db->join('peserta_tender','penawaran.id_peserta=peserta_tender.id_peserta');
		$this->db->join('paket_tender','penawaran.id_paket_tender=paket_tender.id_paket_tender');
		$this->db->where('penawaran.id_peserta', $id);
		$query = $this->db->get();
		return $query->result();
	}

	public function get_joinPENILAIAN($id_paket_tender)
	{
		$this->db->select('*');
		$this->db->from('penilaian');
		$this->db->join('peserta_tender','penilaian.id_peserta=peserta_tender.id_peserta');
		$this->db->join('paket_tender','penilaian.id_paket_tender=paket_tender.id_paket_tender');
		$this->db->join('bobot_penilaian','penilaian.id_bobot=bobot_penilaian.id_bobot');
		$this->db->where('penilaian.id_paket_tender', $id_paket_tender);
		$this->db->order_by('penilaian.id_peserta','asc'); 
		$this->db->order_by('penilaian.id_kriteria','asc'); 
		$query = $this->db->get();
		return $query->result();
	}

	public function get_TOPSIS()
	{
		$this->db->select('*');
		$this->db->from('proses_perhitungan_topsis');
		$this->db->join('paket_tender','proses_perhitungan_topsis.id_paket_tender=paket_tender.id_paket_tender');
		$this->db->join('peserta_tender','proses_perhitungan_topsis.id_peserta=peserta_tender.id_peserta');
		$this->db->order_by('proses_perhitungan_topsis.preferensi','desc'); 
		$query = $this->db->get();
		return $query->result();
	}

	public function get_joinTOPSIS($id_paket_tender)
	{
		$this->db->select('*');
		$this->db->from('proses_perhitungan_topsis');
		$this->db->join('paket_tender','proses_perhitungan_topsis.id_paket_tender=paket_tender.id_paket_tender');
		$this->db->join('peserta_tender','proses_perhitungan_topsis.id_peserta=peserta_tender.id_peserta');
		$this->db->where('proses_perhitungan_topsis.id_paket_tender', $id_paket_tender);
		$this->db->order_by('proses_perhitungan_topsis.preferensi','desc'); 
		$query = $this->db->get();
		return $query->result();
	}

}
?>