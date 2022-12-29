<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kegiatan extends CI_Controller {

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

		$data['kegiatan'] = $this->m_global->getData('kegiatan')->result();
		$data['pembina']  = $this->m_global->getData('pembina')->result();

		$this->load->view('templates/header');
		$this->load->view('templates/topbar');

		if ($this->session->userdata('status') =='Admin') {
			$this->load->view('templates/sidebar_admin');
			$this->load->view('kegiatan/kegiatan', $data);
		} else {
			$this->load->view('templates/sidebar_user');
			$this->load->view('kegiatan/kegiatan_user', $data);
		}
		$this->load->view('templates/footer');
	}


	public function tambah() 
	{
		$data['pembina']  = $this->m_global->getData('pembina')->result();
		$this->load->view('templates/header');
		$this->load->view('templates/topbar');
		$this->load->view('templates/sidebar_admin');
		$this->load->view('kegiatan/kegiatan_tambah', $data);
		$this->load->view('templates/footer');
	}

	public function tambah_aksi()
	{
		$tgl_kegiatan			= $this->input->post('tgl_kegiatan');
		$id_pembina				= $this->input->post('id_pembina');
		$deskripsi_kegiatan		= $this->input->post('deskripsi_kegiatan');
		$tempat_kegiatan		= $this->input->post('tempat_kegiatan');
		$hasil_kegiatan			= $this->input->post('hasil_kegiatan');
		$foto					= $_FILES['foto']; // File

		if ($foto=='') {} else {
			$config['upload_path'] 		= './image/kegiatan';
			$config['allowed_types']	= 'jpg|jpeg|png';

			$this->load->library('upload',$config);
			if (!$this->upload->do_upload('foto')) {
				$foto = '-';
			} else {
				$foto 	= $this->upload->data('file_name');
			}
		}
		$data = array(
						'id_kegiatan'=>'',
						'tgl_kegiatan'=>$tgl_kegiatan,
						'id_pembina'=>$id_pembina,
						'deskripsi_kegiatan'=>$deskripsi_kegiatan,
						'tempat_kegiatan'=>$tempat_kegiatan,
						'hasil_kegiatan'=>$hasil_kegiatan,
						'gambar'=>$foto
		);
		$this->m_global->tambahData($data, 'kegiatan');

		$this->session->set_flashdata('message_kegiatan_tambah', '
			<div class="alert alert-message" id="alert-yes">
				<i class="icon fa fa-check"></i><b>Data kegiatan berhasil ditambahkan...!</b>
			</div>
		');
		redirect(base_url('kegiatan'));
	}

	public function edit($id) 
	{
		$data['pembina']  = $this->m_global->getData('pembina')->result();
		$where	= array('id_kegiatan'=>$id);
		$data['kegiatan']=$this->m_global->editData($where,'kegiatan')->result();
		$this->load->view('templates/header');
		$this->load->view('templates/topbar');
		$this->load->view('templates/sidebar_admin');
		$this->load->view('kegiatan/kegiatan_edit',$data);
		$this->load->view('templates/footer');
	}
	
	public function update()
	{	
		$id_kegiatan 			= $this->input->post('id_kegiatan');
		$tgl_kegiatan			= $this->input->post('tgl_kegiatan');
		$id_pembina				= $this->input->post('id_pembina');
		$deskripsi_kegiatan		= $this->input->post('deskripsi_kegiatan');
		$tempat_kegiatan		= $this->input->post('tempat_kegiatan');
		$hasil_kegiatan			= $this->input->post('hasil_kegiatan');
		$foto					= $this->input->post('foto');
		$foto_new				= $_FILES['foto_new']; // File


		if ($foto_new=='') {
			$foto_input = $foto;
		} else {
			$config['upload_path'] 		= './image/kegiatan';
			$config['allowed_types']	= 'jpg|jpeg|png';

			$this->load->library('upload',$config);
			if (!$this->upload->do_upload('foto_new')) {
				$foto_input = $foto;
			} else {
				$foto_input 	= $this->upload->data('file_name');
			}
		}

		$where = array('id_kegiatan'=>$id_kegiatan);		
		$data = array(
						'id_kegiatan'=>$id_kegiatan,
						'tgl_kegiatan'=>$tgl_kegiatan,
						'id_pembina'=>$id_pembina,
						'deskripsi_kegiatan'=>$deskripsi_kegiatan,
						'tempat_kegiatan'=>$tempat_kegiatan,
						'hasil_kegiatan'=>$hasil_kegiatan,
						'gambar'=>$foto_input
		);
		$this->m_global->updateData($where,$data,'kegiatan');
		$this->session->set_flashdata('message_kegiatan_edit', '
			<div class="alert alert-message" id="alert-yes">
				<i class="icon fa fa-check"></i><b>Data kegiatan berhasil diupdate ...!</b>
			</div>
		');
		redirect(base_url('kegiatan'));
	}

	public function hapus($id) 
	{
		$where = array(
					'id_kegiatan'=>$id
				);
		$this->m_global->deleteData($where,'kegiatan');
		
		$this->session->set_flashdata('message_kegiatan_hapus', '
			<div class="alert alert-message" id="alert-no">
				<i class="icon fa fa-check"></i><b>Data kegiatan berhasil dihapus ...!</b>
			</div>
		');
		redirect(base_url('kegiatan'));
	}
	public function print() {
		$data['kegiatan'] = $this->m_global->getData('kegiatan')->result();
		$data['pembina'] = $this->m_global->getData('pembina')->result();
		$this->load->view('kegiatan/kegiatan_laporan.php', $data);
	}
}