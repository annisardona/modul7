<?php
  
class Login extends CI_Controller {

    public function __construct() { 
        parent::__construct(); 
        $this->load->helper(array("form","url"));
        $this->load->library("session");        
    }
	
    public function index() 
    { 
        if($this->input->post("login")) 
        {
            $username = $this->input->post("username");
            $password = $this->input->post("password");

            if($username == "taka" && $password == "1234") 
            {                
                $data_session = array(
                    "username" => $username,
                    "user_session" => true
                );
                $this->session->set_userdata($data_session);
            }
            else 
            {
                $this->session->set_flashdata("pesan_gagal_login", "Username dan password salah!");
            }
        }

        if($this->session->userdata("username"))
        {
            redirect("home");
        }
        else 
        {   
            $this->load->view('view_login');             
        }
    } 
} 
?>