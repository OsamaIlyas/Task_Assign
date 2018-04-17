<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_page_ctrl extends CI_Controller
 {
	public function __construct()
		{
			parent::__construct();
		
			$this->load->model('signup_model');
		}
	
	public function register()
    {
        $this->load->view('admin_page');
    }
	public function submit()
    {
        $this->signup_model->insert();
        redirect('admin_page_ctrl/register','refresh');
	}
	public function get()
	{
		$data['list']=$this->signup_model->getData();
		$this->load->view('user_list',$data);
	}
	}
 
	
    