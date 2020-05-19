<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

  // ------------------------------------------------------------------------

  public function __construct()
  {
    parent::__construct();
  }

  // ------------------------------------------------------------------------


  // ------------------------------------------------------------------------
  public function profil($em)
  {
    return $this->db->get_where('user', ['email' => $em])->row();
  }

  // ------------------------------------------------------------------------

  // ------------------------------------------------------------------------
  public function editprofil($id)
  {
    $foto = $_FILES['re_upload']['name'];
    $username = $this->input->post('username', true);
    $nickname = $this->input->post('displayname', true);
    $desc = $this->input->post('description', true);
    $timeup = date('Y-m-d H:i:s');

    $data['user'] = $this->db->get_where('user', ['id' => $id])->row_array();

    $config['allowed_types'] = "jpg|png|jpeg";
    $config['upload_path'] = FCPATH."avatar/";
    $config['max_size'] = 3042;

    $this->load->library('upload',$config);
    
    if($foto) {

      if(!$this->upload->do_upload('re_upload')) {

        die($this->upload->display_errors());
      
      } else {
        
        $old_avatar = $data['user']['avatar'];
        $new_avatar = $this->upload->data('file_name');
        
        if($old_avatar != "default.png") {
          unlink(FCPATH. "avatar/". $old_avatar);
        }

        $this->db->set('avatar', $new_avatar);
        
        return $this->db->update('user'); 
      }

    } else {
      $user = [
        "username" => $username,
        "display_name" => $nickname,
        "description" => $desc,
        "updated_at" => $timeup
      ];
  
      $this->db->set($user);
      $this->db->where(['id' => $id]);

      return $this->db->update('user'); 
    }

  }

  // ------------------------------------------------------------------------

}

/* End of file User_model.php */
/* Location: ./application/models/User_model.php */