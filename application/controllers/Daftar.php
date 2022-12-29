<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller {

	public function __construct() {
		parent::__construct();

		if ($this->session->userdata('status') !='User') {
			redirect(base_url('auth'));
		}
	}

	public function index() 
	{
		$id = $this->session->userdata('id_user');
		$where	= array('id_user'=>$id);
		$data['pendaftar']=$this->m_global->editData($where,'pendaftar')->result();

		$this->load->view('templates/header');
		$this->load->view('templates/topbar');
		$this->load->view('templates/sidebar_user');
		$this->load->view('daftar/daftar',$data);
		$this->load->view('templates/footer');
	}
	
	public function update()
	{	
		$id_pendaftaran 	= $this->input->post('id_pendaftaran');
		$id_user			= $this->input->post('id_user');
		$nim				= $this->input->post('nim');
		$tgl_daftar			= date('Y-m-d');
		$nama_mahasiswa		= $this->input->post('nama_mahasiswa');
		$tempat_lahir		= $this->input->post('tempat_lahir');
		$tanggal_lahir		= $this->input->post('tanggal_lahir');
		$alamat_mahasiswa	= $this->input->post('alamat_mahasiswa');
		$jenis_kelamin		= $this->input->post('jenis_kelamin');
		$nama_ayah			= $this->input->post('nama_ayah');
		$nama_ibu			= $this->input->post('nama_ibu');
		$jurusan			= $this->input->post('jurusan');
		$alasan_daftar		= $this->input->post('alasan_daftar');
		$status_daftar		= $this->input->post('status_daftar');
		$nim				= $this->input->post('nim');


		$foto				= $this->input->post('foto');
		$foto_new			= $_FILES['foto_new']; // File


		if ($foto_new=='') {
			$foto_input = $foto;
		} else {
			$config['upload_path'] 		= './image/pendaftar';
			$config['allowed_types']	= 'jpg|jpeg|png';

			$this->load->library('upload',$config);
			if (!$this->upload->do_upload('foto_new')) {
				$foto_input = $foto;
			} else {
				$foto_input 	= $this->upload->data('file_name');
			}
		}

		$where = array('id_pendaftaran'=>$id_pendaftaran);		
		$data = array(
						'id_pendaftaran'=>$id_pendaftaran,
						'id_user'=>$id_user,

						'nim'=>$nim,
						'nama_mahasiswa'=>$nama_mahasiswa,
						'tempat_lahir'=>$tempat_lahir,
						'tanggal_lahir'=>$tanggal_lahir,
						'alamat_mahasiswa'=>$alamat_mahasiswa,
						'jenis_kelamin'=>$jenis_kelamin,
						'nama_ayah'=>$nama_ayah,
						'nama_ibu'=>$nama_ibu,

						'jurusan'=>$jurusan,
						'alasan_daftar'=>$alasan_daftar,
						'status_daftar'=>$status_daftar,
						'tgl_daftar'=>$tgl_daftar,

						'gambar'=>$foto_input
		);
		$this->m_global->updateData($where,$data,'pendaftar');
		$this->session->set_flashdata('message_pendaftar_edit', '
			<div class="alert alert-message" id="alert-yes">
				<i class="icon fa fa-check"></i><b>Data pendaftaran berhasil diupdate ...!</b>
			</div>
		');
		redirect(base_url('daftar'));
	}

}