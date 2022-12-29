<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hasil_tes extends CI_Controller {

	public function __construct() {
		parent::__construct();

		if ($this->session->userdata('status') !='Admin') {
			if ($this->session->userdata('status') !='User') {
				redirect(base_url('auth'));
			}
		}
	}


	public function index()
	{

		$data['hasil'] = $this->m_global->getData('hasil')->result();
		$data['pendaftar'] = $this->m_global->getData('pendaftar')->result();

		$this->load->view('templates/header');
		$this->load->view('templates/topbar');


		if ($this->session->userdata('status') =='Admin') {
			$this->load->view('templates/sidebar_admin');
			$this->load->view('hasil/hasil', $data);
		} else {
			$this->load->view('templates/sidebar_user');
			$this->load->view('hasil/hasil_user', $data);
		}
		$this->load->view('templates/footer');
	}

	public function print() {
		$data['pendaftar'] = $this->m_global->getData('pendaftar')->result();
		$data['hasil'] = $this->m_global->getData('hasil')->result();
		$this->load->view('hasil/hasil_laporan.php', $data);
	}

}