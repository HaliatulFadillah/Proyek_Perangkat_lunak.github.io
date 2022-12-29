<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembina extends CI_Controller {

	public function __construct() {
		parent::__construct();

		if ($this->session->userdata('status') !='Admin') {
			redirect(base_url('auth'));
		}
	}

	public function index()
	{

		$data['pembina'] = $this->m_global->getData('pembina')->result();

		$this->load->view('templates/header');
		$this->load->view('templates/topbar');
		$this->load->view('templates/sidebar_admin');
		$this->load->view('pembina/pembina', $data);
		$this->load->view('templates/footer');
	}


	public function tambah() 
	{
		$this->load->view('templates/header');
		$this->load->view('templates/topbar');
		$this->load->view('templates/sidebar_admin');
		$this->load->view('pembina/pembina_tambah');
		$this->load->view('templates/footer');
	}

	public function tambah_aksi()
	{
		$nama_lengkap		= $this->input->post('nama_lengkap');
		$jabatan			= $this->input->post('jabatan');
		$foto				= $_FILES['foto']; // File

		if ($foto=='') {} else {
			$config['upload_path'] 		= './image/pembina';
			$config['allowed_types']	= 'jpg|jpeg|png';

			$this->load->library('upload',$config);
			if (!$this->upload->do_upload('foto')) {
				$foto = '-';
			} else {
				$foto 	= $this->upload->data('file_name');
			}
		}
		$data = array(
						'id_pembina'=>'',
						'nama_pembina'=>$nama_lengkap,
						'jabatan'=>$jabatan,
						'gambar'=>$foto
		);
		$this->m_global->tambahData($data, 'pembina');

		$this->session->set_flashdata('message_pembina_tambah', '
			<div class="alert alert-message" id="alert-yes">
				<i class="icon fa fa-check"></i><b>Data pembina berhasil ditambahkan...!</b>
			</div>
		');
		redirect(base_url('pembina'));
	}

	public function edit($id) 
	{
		$where	= array('id_pembina'=>$id);
		$data['pembina']=$this->m_global->editData($where,'pembina')->result();
		$this->load->view('templates/header');
		$this->load->view('templates/topbar');
		$this->load->view('templates/sidebar_admin');
		$this->load->view('pembina/pembina_edit',$data);
		$this->load->view('templates/footer');
	}
	
	public function update()
	{	
		$id_pembina 		= $this->input->post('id_pembina');
		$nama_lengkap		= $this->input->post('nama_lengkap');
		$jabatan			= $this->input->post('jabatan');
		$foto				= $this->input->post('foto');
		$foto_new			= $_FILES['foto_new']; // File


		if ($foto_new=='') {
			$foto_input = $foto;
		} else {
			$config['upload_path'] 		= './image/pembina';
			$config['allowed_types']	= 'jpg|jpeg|png';

			$this->load->library('upload',$config);
			if (!$this->upload->do_upload('foto_new')) {
				$foto_input = $foto;
			} else {
				$foto_input 	= $this->upload->data('file_name');
			}
		}

		$where = array('id_pembina'=>$id_pembina);		
		$data = array(
						'id_pembina'=>$id_pembina,
						'nama_pembina'=>$nama_lengkap,
						'jabatan'=>$jabatan,
						'gambar'=>$foto_input
		);
		$this->m_global->updateData($where,$data,'pembina');
		$this->session->set_flashdata('message_pembina_edit', '
			<div class="alert alert-message" id="alert-yes">
				<i class="icon fa fa-check"></i><b>Data pembina berhasil diupdate ...!</b>
			</div>
		');
		redirect(base_url('pembina'));
	}

	public function hapus($id) 
	{
		$where = array(
					'id_pembina'=>$id
				);
		$this->m_global->deleteData($where,'pembina');
		
		$this->session->set_flashdata('message_pembina_hapus', '
			<div class="alert alert-message" id="alert-no">
				<i class="icon fa fa-check"></i><b>Data pembina berhasil dihapus ...!</b>
			</div>
		');
		redirect(base_url('pembina'));
	}
}