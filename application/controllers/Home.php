<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{


	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('status') != 'Admin') {
			if ($this->session->userdata('status') != 'User') {
				redirect('auth');
			}
		}
	}

	public function index()
	{	
		$data['pembina'] = $this->m_math->sumDASHBOARD('pembina');
		$data['anggota'] = $this->m_math->sumDASHBOARD('anggota');
		$data['kegiatan'] = $this->m_math->sumDASHBOARD('kegiatan');

		$this->load->view('templates/header');
		$this->load->view('templates/topbar');
		
		if ($this->session->userdata('status') == 'Admin') {
			$this->load->view('templates/sidebar_admin');
			$this->load->view('home/home_admin', $data);
		} else {
			$this->load->view('templates/sidebar_user');
			$this->load->view('home/home_user', $data);
		}

		$this->load->view('templates/footer');
	}
}
