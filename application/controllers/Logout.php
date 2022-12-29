<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller 
{
	public function index() 
	{
		$this->session->set_flashdata('message_logout', '
			<div class="alert alert-message text-center" id="alert-no">
				Anda berhasil logout ...!
			</div>
		');
		redirect(base_url('auth'));	
        $this->session->unset_userdata('message_logout');	
	}
}