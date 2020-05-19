<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    
    if(!$this->session->userdata('email')) {
      redirect('auth');
    }
  }

  public function index()
  {
    $data['judul'] = ['Home Ekadsi','Dashboard'];
    $data['user'] = $this->user_model->profil($this->session->userdata('email'));
    $this->load->view('_partials/header', $data);
    $this->load->view('user/index', $data);
  }

  public function profile()
  {
    $data['judul'] = ['Profile | Ekadsi','Profil'];
    $data['user'] = $this->user_model->profil($this->session->userdata('email'));
    $this->load->view('_partials/header', $data);
    $this->load->view('user/profile', $data);
  }

  public function progkursus()
  {
    $data['judul'] = ['Progress Kursus | Ekadsi','Kursus Saya'];
    $data['user'] = $this->user_model->profil($this->session->userdata('email'));
    $this->load->view('_partials/header', $data);
    $this->load->view('user/progkursus', $data);
  }

  public function course()
  {
    $data['judul'] = ['Kursus | Ekadsi','Kursus ~name course~'];
    $data['user'] = $this->user_model->profil($this->session->userdata('email'));
    $this->load->view('_partials/header', $data);
    $this->load->view('user/course', $data);
  }

  public function edit()
  {
    $this->form_validation->set_rules('username','Username','required|trim');

    if($this->form_validation->run() === false) {
      $data['judul'] = ['Edit Profile | Ekadsi','Edit Profil'];
      $data['user'] = $this->user_model->profil($this->session->userdata('email'));
      $this->load->view('_partials/header', $data);
      $this->load->view('user/edit', $data);
    } else {
      $model = $this->user_model->editprofil($this->uri->segment(3));
      if($model) {
        $this->session->set_flashdata('message','<span class="badge badge-success text-white">Berhasil Diubah</span>');
        redirect('profile');
      } else {
        $this->session->set_flashdata('message','<span class="badge badge-danger text-white">Gagal Diubah</span>');
        redirect('profile');
      }
    }

  }
}


/* End of file User.php */
/* Location: ./application/controllers/User.php */