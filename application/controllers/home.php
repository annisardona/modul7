<?php
  
class Home extends CI_Controller {

    public function __construct() { 
        parent::__construct(); 
        $this->load->helper(array("form","url"));
        $this->load->library("session");
    }
	
    public function index() 
    { 
        if( $this->session->userdata("username") )
        {
            $this->load->view('view_home');                         
        }
        else
        {
            redirect("login");
        }
    } 
	
    public function logout() 
    { 
        $this->session->sess_destroy();
        redirect("login");
    } 
} 
?>