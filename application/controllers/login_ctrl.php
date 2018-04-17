<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_ctrl extends CI_Controller {

 	public function index()
	{
		$this->load->view('login');
	}
	// public function login(){
	// 	$this->load->view('login');
	// }
	public function admin_login()
	{   
		//  $name=$_POST['uname'];
		//  $password=$_POST['pass'];
		//  $data=$this->db->get('admin_login')->row();

		// if($data->name==$name && $data->password==$password)
		// {
		// 	$this->load->view('/admin_page');
		// }
		// else
		// {
		// 	$this->load->view('login');
		// }


    
	 
		$this->form_validation->set_rules('uname','User Name','required|alpha|max_length[20]');
		$this->form_validation->set_rules('pass','Password','required|alpha');

		if($this->form_validation->run())
		{
			if(isset($_POST['submit']))
		{
			$name=$_POST['uname'];
			$password=$_POST['pass'];
			$data=$this->db->get('admin_login')->row();
			if($data->name==$name && $data->password==$password)

			{
				$this->load->view('/admin_page');
			}
			else
			{
				$this->load->view('login');
			}
		}
		}
		else
		{
			$this->load->view('login');
		}
		
	}
}



//$username=$this->input->post('uname');
//$password=$this->input->post('pass');

?>