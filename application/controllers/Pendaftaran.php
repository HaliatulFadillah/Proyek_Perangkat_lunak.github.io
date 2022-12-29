<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftaran extends CI_Controller {

	public function __construct() {
		parent::__construct();

		if ($this->session->userdata('status') !='Admin') {
			redirect(base_url('auth'));
		}
	}

	public function index()
	{

		$data['pendaftar'] = $this->m_global->getData('pendaftar')->result();

		$this->load->view('templates/header');
		$this->load->view('templates/topbar');
		$this->load->view('templates/sidebar_admin');
		$this->load->view('pendaftar/pendaftar', $data);
		$this->load->view('templates/footer');
	}


	public function tambah() 
	{
		$this->load->view('templates/header');
		$this->load->view('templates/topbar');
		$this->load->view('templates/sidebar_admin');
		$this->load->view('pendaftar/pendaftar_tambah');
		$this->load->view('templates/footer');
	}

	public function tambah_aksi()
	{
		$nama_lengkap		= $this->input->post('nama_lengkap');
		$jabatan			= $this->input->post('jabatan');
		$foto				= $_FILES['foto']; // File

		if ($foto=='') {} else {
			$config['upload_path'] 		= './image/pendaftar';
			$config['allowed_types']	= 'jpg|jpeg|png';

			$this->load->library('upload',$config);
			if (!$this->upload->do_upload('foto')) {
				$foto = '-';
			} else {
				$foto 	= $this->upload->data('file_name');
			}
		}
		$data = array(
						'id_pendaftar'=>'',
						'nama_pendaftar'=>$nama_lengkap,
						'jabatan'=>$jabatan,
						'gambar'=>$foto
		);
		$this->m_global->tambahData($data, 'pendaftar');

		$this->session->set_flashdata('message_pendaftar_tambah', '
			<div class="alert alert-message" id="alert-yes">
				<i class="icon fa fa-check"></i><b>Data pendaftar berhasil ditambahkan...!</b>
			</div>
		');
		redirect(base_url('pendaftar'));
	}

	public function detail($id) 
	{
		$where	= array('id_pendaftaran'=>$id);
		$data['pendaftar']=$this->m_global->editData($where,'pendaftar')->result();
		$this->load->view('templates/header');
		$this->load->view('templates/topbar');
		$this->load->view('templates/sidebar_admin');
		$this->load->view('pendaftar/pendaftar_detail',$data);
		$this->load->view('templates/footer');
	}
	

	public function print() {
		$data['pendaftar'] = $this->m_global->getData('pendaftar')->result();
		$this->load->view('pendaftar/pendaftar_laporan.php', $data);
	}
}