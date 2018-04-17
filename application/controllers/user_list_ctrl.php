<?php

class User_list_ctrl extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    
        $this->load->model('signup_model');
    }
    public function index()
    {
        $this->load->view('user_list');
    }
   
}
?>

