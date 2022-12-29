<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{

		$this->form_validation->set_rules('username', 'Username', 'required|trim');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');

		$username = $this->input->post('username', TRUE);
		$password = $this->input->post('password', TRUE);

		if ($this->form_validation->run() == TRUE) {

			$where 			= array('username' => $username);
			$user 			= $this->db->get_where('user', ['username' => $username])->row_array();


			if (($password == $user['password'])&&($user['level'] == 'Admin')) {
				$data = $this->m_auth->cek_login($where, 'user')->row();
				$data_session = array(
					'id_user'	=> $data->id_user,
					'nama'		=> $data->nama,
					'username'	=> $data->username,
					'email'		=> $data->email,
					'foto'		=> $data->foto,
					'status'	=> $data->level
				);
				$this->session->set_userdata($data_session);
				redirect(base_url('home'));

			} else if (($password == $user['password'])&&($user['level'] == 'User')) {
				$data = $this->m_auth->cek_login($where, 'user')->row();
				$data_session = array(
					'id_user'	=> $data->id_user,
					'nama'		=> $data->nama,
					'username'	=> $data->username,
					'email'		=> $data->email,
					'foto'		=> $data->foto,
					'status'	=> $data->level
				);
				$this->session->set_userdata($data_session);
				redirect(base_url('home'));
			} else {
				$this->session->set_flashdata('message_login_gagal', '
					<div class="alert alert-message text-center" id="alert-no">
						<b>Login Gagal ...!<br></b> Maaf, Username dan Password tidak ditemukan
					</div>
				');
				redirect(base_url('auth'));
			}
		} else {
			$this->load->view('auth/login');
            $this->session->unset_userdata('message_login_gagal');
		}
	}


	public function validasi()
	{
			$this->load->view('auth/login');
	}
}
