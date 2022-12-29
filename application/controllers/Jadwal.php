<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal extends CI_Controller {

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

        $data['jadwal'] = $this->m_global->getData('jadwal')->result();
		$this->load->view('templates/header');
		$this->load->view('templates/topbar');

		if ($this->session->userdata('status') =='Admin') {
			$this->load->view('templates/sidebar_admin');
			$this->load->view('jadwal/jadwal', $data);
		} else {
			$this->load->view('templates/sidebar_user');
			$this->load->view('jadwal/jadwal_user', $data);
		}
		$this->load->view('templates/footer');
	}


	public function tambah() 
	{
		$this->load->view('templates/header');
		$this->load->view('templates/topbar');
		$this->load->view('templates/sidebar_admin');
		$this->load->view('jadwal/jadwal_tambah');
		$this->load->view('templates/footer');
	}

	public function tambah_aksi()
	{
		$nama			= $this->input->post('nama');
		$tgl_mulai				= $this->input->post('tgl_mulai');
		$tgl_selesai		= $this->input->post('tgl_selesai');
		$tempat		= $this->input->post('tempat');
		$narahubung			= $this->input->post('narahubung');

		$data = array(
						'id_jadwal'=>'',
						'nama'=>$nama,
						'tgl_mulai'=>$tgl_mulai,
						'tgl_selesai'=>$tgl_selesai,
						'tempat'=>$tempat,
						'narahubung'=>$narahubung
		);
		$this->m_global->tambahData($data, 'jadwal');

		$this->session->set_flashdata('message_jadwal_tambah', '
			<div class="alert alert-message" id="alert-yes">
				<i class="icon fa fa-check"></i><b>Jadwal tes berhasil ditambahkan...!</b>
			</div>
		');
		redirect(base_url('jadwal'));
	}

	public function edit($id) 
	{
		$where	= array('id_jadwal'=>$id);
		$data['jadwal']=$this->m_global->editData($where,'jadwal')->result();
		$this->load->view('templates/header');
		$this->load->view('templates/topbar');
		$this->load->view('templates/sidebar_admin');
		$this->load->view('jadwal/jadwal_edit',$data);
		$this->load->view('templates/footer');
	}
	
	public function update()
	{	
		$id_jadwal		= $this->input->post('id_jadwal');
		$nama			= $this->input->post('nama');
		$tgl_mulai		= $this->input->post('tgl_mulai');
		$tgl_selesai	= $this->input->post('tgl_selesai');
		$tempat			= $this->input->post('tempat');
		$narahubung		= $this->input->post('narahubung');

		$where = array('id_jadwal'=>$id_jadwal);		
		$data = array(
						'id_jadwal'=>$id_jadwal,
						'nama'=>$nama,
                        'tgl_mulai'=>$tgl_mulai,
                        'tgl_selesai'=>$tgl_selesai,
                        'tempat'=>$tempat,
                        'narahubung'=>$narahubung
		);
		$this->m_global->updateData($where,$data,'jadwal');
		$this->session->set_flashdata('message_jadwal_edit', '
			<div class="alert alert-message" id="alert-yes">
				<i class="icon fa fa-check"></i><b>Jadwal berhasil diupdate ...!</b>
			</div>
		');
		redirect(base_url('jadwal'));
	}

	public function hapus($id) 
	{
		$where = array(
					'id_jadwal'=>$id
				);
		$this->m_global->deleteData($where,'jadwal');
		
		$this->session->set_flashdata('message_jadwal_hapus', '
			<div class="alert alert-message" id="alert-no">
				<i class="icon fa fa-check"></i><b>Jadwal berhasil dihapus ...!</b>
			</div>
		');
		redirect(base_url('jadwal'));
	}
}