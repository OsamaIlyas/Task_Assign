<?php

class Login_model extends CI_Model
{

    public function login()
    {
      return $this->db->get('admin_login')->row();
    }
}


?>