<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * Model Auth_model
 *
 * This Model for ...
 * 
 * @package		CodeIgniter
 * @category	Model
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Auth_model extends CI_Model {

  // ------------------------------------------------------------------------

  public function __construct()
  {
    parent::__construct();
  }

  // ------------------------------------------------------------------------


  // ------------------------------------------------------------------------
  public function auth()
  {
    $email = $this->input->post('email', true);
    $password = $this->input->post('password', true);

    $user = $this->db->get_where('user', ['email' => $email])->row_array();

    if($user) {
      
      if (password_verify($password, $user['password'])) {
      
        $data = [
            'email' => $user['email'],
            'username' => $user['username']
        ];
  
        $this->session->set_userdata($data);
        return redirect('user');
  
      } else {
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email/Password Salah!</div>');
        return redirect('auth');
      }

    } else {
      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email/Password Salah!</div>');
      return redirect('auth');
    }

  }

  public function register()
  {

    $data = [
      'avatar'      => 'default.png',
      'username'    => htmlspecialchars($this->input->post('username',true)),
      'email'       => htmlspecialchars($this->input->post('email',true)),
      'password'    => password_hash($this->input->post('pass'), PASSWORD_DEFAULT),
      'level'       => 'user',
      'created_at'  => date('Y-m-d H:i:s')
    ];

    $this->db->insert('user', $data); 

    $this->session->set_userdata($data);
    $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Selamat Datang '.$this->session->userdata('username').' !!!</div>');
    return redirect('User');
  }

  public function logout()
  {
    $this->session->unset_userdata('email');
    $this->session->unset_userdata('username');

    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Terima Kasih, Sudah Berkunjung !!!</div>');
    return redirect('auth');
  }

  // ------------------------------------------------------------------------

}

/* End of file Auth_model.php */
/* Location: ./application/models/Auth_model.php */