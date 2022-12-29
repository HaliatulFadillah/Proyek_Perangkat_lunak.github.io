<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tes_online extends CI_Controller {

	public function __construct() {
		parent::__construct();

		if ($this->session->userdata('status') !='User') {
			redirect(base_url('auth'));
		}
	}

	public function index()
	{
		$data['id_user'] = $this->session->userdata('id_user');
		$data['hasil'] 	 = $this->m_global->getData('hasil')->result();

		$this->load->view('templates/header');
		$this->load->view('templates/topbar');
		$this->load->view('templates/sidebar_user');
		$this->load->view('tes_online/tes_online', $data);
		$this->load->view('templates/footer');
	}


	public function mulai() 
	{
		$data['soal'] 	 = $this->m_global->getData('soal')->result();
		$this->load->view('templates/header');
		$this->load->view('templates/topbar');
		$this->load->view('templates/sidebar_user');
		$this->load->view('tes_online/tes_online_mulai', $data);
		$this->load->view('templates/footer');
	}

	public function kirim_jawaban()
	{
		$data['soal'] 	 = $this->m_global->getData('soal')->result();
		$id_user = $this->session->userdata('id_user');
		$tgl_tes			= date('Y-m-d');
		$poin = 0; $benar = 0; $salah = 0; $status_tes = 'Tidak Lulus';
		foreach ($data['soal'] as $s) {
			$jawab	= $this->input->post('jawab_'.$s->id_soal);

			if ($jawab==$s->kunci_jawab) {
				$poin = $poin + $s->point;
				$benar = $benar + 1;
			} else {
				$salah = $salah + 1;
			}

			if ($poin>=75) {
				$status_tes = 'Lulus';
			}

			$data = array(
							'id_jawab'=>'',
							'id_soal'=>$s->id_soal,
							'id_user'=>$id_user,
							'jawab'=>$jawab
			);
			$this->m_global->tambahData($data, 'jawab');

			$where = array('id_user'=>$id_user);
			$data = array(	
							'id_user'=>$id_user,
							'tgl_tes'=>$tgl_tes,
							'jawab_benar'=>$benar,
							'jawab_salah'=>$salah,
							'point_hasil'=>$poin,
							'status_tes'=>$status_tes
			);
			$this->m_global->updateData($where,$data,'hasil');
		}



		$this->session->set_flashdata('message_kirim_jawaban', '
			<div class="alert alert-message" id="alert-yes">
				<i class="icon fa fa-check"></i><b>Lembar jawaban berhasil dikirimkan, silahkan cek hasil tes pada menu Cek Hasil</b>
			</div>
		');
		redirect(base_url('tes_online'));
	}

}