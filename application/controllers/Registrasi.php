<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Registrasi extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('auth/registrasi');
	}

	public function tambah_aksi()
	{

		$username			= $this->input->post('username');
		$password			= $this->input->post('password');
		$nama_lengkap		= $this->input->post('nama_lengkap');
		$email				= $this->input->post('email');
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
						'level'=>'User'
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

		$this->session->set_flashdata('message_peserta_tambah', '
			<div class="alert alert-message" id="alert-yes">
				<i class="icon fa fa-check"></i><b>Data Registrasi berhasil dibuat ...!</b>
			</div>
		');
		redirect(base_url('auth/validasi'));

	}
	
}
