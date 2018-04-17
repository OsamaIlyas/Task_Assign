<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Signup_model extends CI_Model {
	
	public function insert()
	{
      $this->db->insert('signup',$_POST);
	}
	public function getData()
	{
		return $this->db->get('signup')->result();
	}
	

}