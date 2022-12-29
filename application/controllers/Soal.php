<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Soal extends CI_Controller {

  public function __construct() {
    parent::__construct();

    if ($this->session->userdata('status') !='Admin') {
      redirect(base_url('auth'));
    }
  }

  public function index()
  {

    $data['soal'] = $this->m_global->getData('soal')->result();

    $this->load->view('templates/header');
    $this->load->view('templates/topbar');
    $this->load->view('templates/sidebar_admin');
    $this->load->view('soal/soal', $data);
    $this->load->view('templates/footer');
  }


  public function tambah() 
  {
    $this->load->view('templates/header');
    $this->load->view('templates/topbar');
    $this->load->view('templates/sidebar_admin');
    $this->load->view('soal/soal_tambah');
    $this->load->view('templates/footer');
  }

  public function tambah_aksi()
  {
    $pertanyaan   = $this->input->post('pertanyaan');
    $jawab_a      = $this->input->post('jawab_a');
    $jawab_b      = $this->input->post('jawab_b');
    $jawab_c      = $this->input->post('jawab_c');
    $jawab_d      = $this->input->post('jawab_d');
    $kunci_jawab  = $this->input->post('kunci_jawab');
    $point        = $this->input->post('point');

    $data = array(
            'id_soal'=>'',
            'pertanyaan'=>$pertanyaan,
            'jawab_a'=>$jawab_a,
            'jawab_b'=>$jawab_b,
            'jawab_c'=>$jawab_c,
            'jawab_d'=>$jawab_d,
            'kunci_jawab'=>$kunci_jawab,
            'point'=>$point
    );
    $this->m_global->tambahData($data, 'soal');

    $this->session->set_flashdata('message_soal_tambah', '
      <div class="alert alert-message" id="alert-yes">
        <i class="icon fa fa-check"></i><b>Data soal berhasil ditambahkan...!</b>
      </div>
    ');
    redirect(base_url('soal'));
  }

  public function edit($id) 
  {
    $where  = array('id_soal'=>$id);
    $data['soal']=$this->m_global->editData($where,'soal')->result();
    $this->load->view('templates/header');
    $this->load->view('templates/topbar');
    $this->load->view('templates/sidebar_admin');
    $this->load->view('soal/soal_edit',$data);
    $this->load->view('templates/footer');
  }
  
  public function update()
  { 
    $id_soal     = $this->input->post('id_soal');
    $pertanyaan   = $this->input->post('pertanyaan');
    $jawab_a      = $this->input->post('jawab_a');
    $jawab_b      = $this->input->post('jawab_b');
    $jawab_c      = $this->input->post('jawab_c');
    $jawab_d      = $this->input->post('jawab_d');
    $kunci_jawab  = $this->input->post('kunci_jawab');
    $point        = $this->input->post('point');

    $where = array('id_soal'=>$id_soal);    
    $data = array(
            'id_soal'=>$id_soal,
            'pertanyaan'=>$pertanyaan,
            'jawab_a'=>$jawab_a,
            'jawab_b'=>$jawab_b,
            'jawab_c'=>$jawab_c,
            'jawab_d'=>$jawab_d,
            'kunci_jawab'=>$kunci_jawab,
            'point'=>$point
    );
    $this->m_global->updateData($where,$data,'soal');
    $this->session->set_flashdata('message_soal_edit', '
      <div class="alert alert-message" id="alert-yes">
        <i class="icon fa fa-check"></i><b>Data soal berhasil diupdate ...!</b>
      </div>
    ');
    redirect(base_url('soal'));
  }

  public function hapus($id) 
  {
    $where = array(
          'id_soal'=>$id
        );
    $this->m_global->deleteData($where,'soal');
    
    $this->session->set_flashdata('message_soal_hapus', '
      <div class="alert alert-message" id="alert-no">
        <i class="icon fa fa-check"></i><b>Data soal berhasil dihapus ...!</b>
      </div>
    ');
    redirect(base_url('soal'));
  }
}