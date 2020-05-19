<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Base extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {

    if($this->session->userdata('email')) {
      redirect('user');
    }

    $this->form_validation->set_rules('email','Email','trim|required|valid_email|min_length[8]');
    $this->form_validation->set_rules('password','Password','trim|required|min_length[8]');

    if($this->form_validation->run() == FALSE) {
      
      $data['judul'] = ["Ekadsi", "Home"];
      $this->load->view('_partials/header',$data);
      $this->load->view('LandingPage',$data);
      
    } else {
      $this->_login();
    }    
  }

  private function _login()
  {
    $this->auth_model->auth();
  }

  public function regist()
  {
    $this->form_validation->set_rules('username', 'Name', 'required|trim|min_length[5]');
    $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
        'is_unique' => 'This email has already registered!'
    ]);
    $this->form_validation->set_rules('pass', 'Password', 'required|trim|min_length[8]|matches[re_pass]', [
        'matches' => 'Password dont match!',
        'min_length' => 'Password too short!'
    ]);
    $this->form_validation->set_rules('re_pass', 'Password', 'required|trim|matches[pass]');

    if($this->form_validation->run() === FALSE) {
        $this->session->set_flashdata('message', validation_errors());
        return redirect('auth');
    } else {
      $this->auth_model->register();
      return redirect('user');
    }

  }

  public function logout()
  {
    $this->auth_model->logout();
  }

}


/* End of file Base.php */
/* Location: ./application/controllers/Base.php */