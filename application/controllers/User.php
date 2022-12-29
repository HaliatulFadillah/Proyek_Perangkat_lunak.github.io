<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct() {
		parent::__construct();

		if ($this->session->userdata('status') !='Admin') {
			redirect(base_url('auth'));
		}
	}

	public function index()
	{

		$data['user'] = $this->m_global->getData('user')->result();

		$this->load->view('templates/header');
		$this->load->view('templates/topbar');
		$this->load->view('templates/sidebar_admin');
		$this->load->view('user/user', $data);
		$this->load->view('templates/footer');
	}


	public function tambah() 
	{
		$this->load->view('templates/header');
		$this->load->view('templates/topbar');
		$this->load->view('templates/sidebar_admin');
		$this->load->view('user/user_tambah');
		$this->load->view('templates/footer');
	}

	public function tambah_aksi()
	{
		$username			= $this->input->post('username');
		$password			= $this->input->post('password');
		$nama_lengkap		= $this->input->post('nama_lengkap');
		$email				= $this->input->post('email');
		$level				= $this->input->post('level');
		$foto				= $_FILES['foto']; // File

		if ($foto=='') {} else {
			$config['upload_path'] 		= './image/user';
			$config['allowed_types']	= 'jpg|jpeg|png';

			$this->load->library('upload',$config);
			if (!$this->upload->do_upload('foto')) {
				$foto = '-';
			} else {
				$foto 	= $this->upload->data('file_name');
			}
		}

		$id_user = $this->m_global->maxData('user')->result();
		foreach ($id_user as $key ) {
			$jumlah = $key->id_user;
		}
		$jumlah_id = $jumlah + 1;

		$data = array(
						'id_user'=>$jumlah_id,
						'nama'=>$nama_lengkap,
						'username'=>$username,
						'password'=>$password,
						'email'=>$email,
						'foto'=>$foto,
						'level'=>$level
		);
		$this->m_global->tambahData($data, 'user');


		$data = array(
						'id_hasil'=>'',
						'id_user'=>$jumlah_id,
						'tgl_tes'=>'',
						'jawab_benar'=>'0',
						'jawab_salah'=>'0',
						'point_hasil'=>'0',
						'status_tes'=>'-'
		);
		$this->m_global->tambahData($data, 'hasil');


		$data = array(
						'id_pendaftaran'=>'',
						'id_user'=>$jumlah_id,

						'nim'=>'-',
						'nama_mahasiswa'=>'-',
						'tempat_lahir'=>'-',
						'tanggal_lahir'=>'',
						'alamat_mahasiswa'=>'-',
						'jenis_kelamin'=>'-',
						'nama_ayah'=>'-',
						'nama_ibu'=>'-',

						'jurusan'=>'-',
						'alasan_daftar'=>'-',
						'status_daftar'=>'-',
						'tgl_daftar'=>'',

						'gambar'=>'-'
		);
		$this->m_global->tambahData($data, 'pendaftar');

		$this->session->set_flashdata('message_user_tambah', '
			<div class="alert alert-message" id="alert-yes">
				<i class="icon fa fa-check"></i><b>Data user berhasil ditambahkan...!</b>
			</div>
		');
		redirect(base_url('user'));
	}

	public function edit($id) 
	{
		$where	= array('id_user'=>$id);
		$data['user']=$this->m_global->editData($where,'user')->result();
		$this->load->view('templates/header');
		$this->load->view('templates/topbar');
		$this->load->view('templates/sidebar_admin');
		$this->load->view('user/user_edit',$data);
		$this->load->view('templates/footer');
	}
	
	public function update()
	{	
		$id_user 			= $this->input->post('id_user');
		$username			= $this->input->post('username');
		$password			= $this->input->post('password');
		$nama_lengkap		= $this->input->post('nama_lengkap');
		$email				= $this->input->post('email');
		$level				= $this->input->post('level');
		$foto				= $this->input->post('foto');
		$foto_new			= $_FILES['foto_new']; // File


		if ($foto_new=='') {
			$foto_input = $foto;
		} else {
			if ($level=='User') {
				$config['upload_path'] 		= './image/user';
			} else {
				$config['upload_path'] 		= './image/admin';
			}
			$config['allowed_types']	= 'jpg|jpeg|png';

			$this->load->library('upload',$config);
			if (!$this->upload->do_upload('foto_new')) {
				$foto_input = $foto;
			} else {
				$foto_input 	= $this->upload->data('file_name');
			}
		}

		$where = array('id_user'=>$id_user);		
		$data = array(
						'id_user'=>$id_user,
						'nama'=>$nama_lengkap,
						'username'=>$username,
						'password'=>$password,
						'email'=>$email,
						'foto'=>$foto_input,
						'level'=>$level
		);
		$this->m_global->updateData($where,$data,'user');
		$this->session->set_flashdata('message_user_edit', '
			<div class="alert alert-message" id="alert-yes">
				<i class="icon fa fa-check"></i><b>Data user berhasil diupdate ...!</b>
			</div>
		');
		redirect(base_url('user'));
	}

	public function hapus($id) 
	{
		$where = array(
					'id_user'=>$id
				);
		$this->m_global->deleteData($where,'user');
		$where = array(
					'id_user'=>$id
				);
		$this->m_global->deleteData($where,'pendaftar');
		$where = array(
					'id_user'=>$id
				);
		$this->m_global->deleteData($where,'jawab');
		$where = array(
					'id_user'=>$id
				);
		$this->m_global->deleteData($where,'hasil');
		
		$this->session->set_flashdata('message_user_hapus', '
			<div class="alert alert-message" id="alert-no">
				<i class="icon fa fa-check"></i><b>Data user berhasil dihapus ...!</b>
			</div>
		');
		redirect(base_url('user'));
	}
}