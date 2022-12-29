<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anggota extends CI_Controller {

	public function __construct() {
		parent::__construct();

		if ($this->session->userdata('status') !='Admin') {
			redirect(base_url('auth'));
		}
	}

	public function index()
	{

		$data['anggota'] = $this->m_global->getData('anggota')->result();

		$this->load->view('templates/header');
		$this->load->view('templates/topbar');
		$this->load->view('templates/sidebar_admin');
		$this->load->view('anggota/anggota', $data);
		$this->load->view('templates/footer');
	}


	public function tambah() 
	{
		$this->load->view('templates/header');
		$this->load->view('templates/topbar');
		$this->load->view('templates/sidebar_admin');
		$this->load->view('anggota/anggota_tambah');
		$this->load->view('templates/footer');
	}

	public function tambah_aksi()
	{
		$nim				= $this->input->post('nim');
		$tgl_anggota		= $this->input->post('tgl_anggota');
		$nama_lengkap		= $this->input->post('nama_lengkap');
		$p_jabatan			= $this->input->post('p_jabatan');
		$p_panitia			= $this->input->post('p_panitia');
		$p_kegiatan			= $this->input->post('p_kegiatan');
		$prestasi			= $this->input->post('prestasi');
		$status_anggota		= $this->input->post('status_anggota');

		$foto				= $_FILES['foto']; // File

		if ($foto=='') {} else {
			$config['upload_path'] 		= './image/anggota';
			$config['allowed_types']	= 'jpg|jpeg|png';

			$this->load->library('upload',$config);
			if (!$this->upload->do_upload('foto')) {
				$foto = '-';
			} else {
				$foto 	= $this->upload->data('file_name');
			}
		}
		
		$data = array(
						'id_anggota'=>'',
						'tgl_anggota'=>$tgl_anggota,
						'nim'=>$nim,
						'nama_anggota'=>$nama_lengkap,
						'p_jabatan'=>$p_jabatan,
						'p_panitia'=>$p_panitia,
						'p_kegiatan'=>$p_kegiatan,
						'prestasi'=>$prestasi,
						'status_anggota'=>$status_anggota,
						'gambar'=>$foto
		);
		$this->m_global->tambahData($data, 'anggota');

		$this->session->set_flashdata('message_anggota_tambah', '
			<div class="alert alert-message" id="alert-yes">
				<i class="icon fa fa-check"></i><b>Data anggota berhasil ditambahkan...!</b>
			</div>
		');
		redirect(base_url('anggota'));
	}

	public function edit($id) 
	{
		$where	= array('id_anggota'=>$id);
		$data['anggota']=$this->m_global->editData($where,'anggota')->result();
		$this->load->view('templates/header');
		$this->load->view('templates/topbar');
		$this->load->view('templates/sidebar_admin');
		$this->load->view('anggota/anggota_edit',$data);
		$this->load->view('templates/footer');
	}
	
	public function update()
	{	
		$id_anggota 		= $this->input->post('id_anggota');
		$nim				= $this->input->post('nim');
		$tgl_anggota		= $this->input->post('tgl_anggota');
		$nama_lengkap		= $this->input->post('nama_lengkap');
		$p_jabatan			= $this->input->post('p_jabatan');
		$p_panitia			= $this->input->post('p_panitia');
		$p_kegiatan			= $this->input->post('p_kegiatan');
		$prestasi			= $this->input->post('prestasi');
		$status_anggota		= $this->input->post('status_anggota');
		$foto				= $this->input->post('foto');
		$foto_new			= $_FILES['foto_new']; // File


		if ($foto_new=='') {
			$foto_input = $foto;
		} else {
			$config['upload_path'] 		= './image/anggota';
			$config['allowed_types']	= 'jpg|jpeg|png';

			$this->load->library('upload',$config);
			if (!$this->upload->do_upload('foto_new')) {
				$foto_input = $foto;
			} else {
				$foto_input 	= $this->upload->data('file_name');
			}
		}

		$where = array('id_anggota'=>$id_anggota);		
		$data = array(
						'id_anggota'=>$id_anggota,
						'tgl_anggota'=>$tgl_anggota,
						'nim'=>$nim,
						'nama_anggota'=>$nama_lengkap,
						'p_jabatan'=>$p_jabatan,
						'p_panitia'=>$p_panitia,
						'p_kegiatan'=>$p_kegiatan,
						'prestasi'=>$prestasi,
						'status_anggota'=>$status_anggota,
						'gambar'=>$foto_input
		);
		$this->m_global->updateData($where,$data,'anggota');
		$this->session->set_flashdata('message_anggota_edit', '
			<div class="alert alert-message" id="alert-yes">
				<i class="icon fa fa-check"></i><b>Data anggota berhasil diupdate ...!</b>
			</div>
		');
		redirect(base_url('anggota'));
	}

	public function hapus($id) 
	{
		$where = array(
					'id_anggota'=>$id
				);
		$this->m_global->deleteData($where,'anggota');
		
		$this->session->set_flashdata('message_anggota_hapus', '
			<div class="alert alert-message" id="alert-no">
				<i class="icon fa fa-check"></i><b>Data anggota berhasil dihapus ...!</b>
			</div>
		');
		redirect(base_url('anggota'));
	}

	public function print() {
		$data['anggota'] = $this->m_global->getData('anggota')->result();
		$this->load->view('anggota/anggota_laporan.php', $data);
	}

}