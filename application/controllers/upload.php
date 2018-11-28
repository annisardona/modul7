<?php  
   class Upload extends CI_Controller {
      public function __construct() { 
         parent::__construct(); 
         $this->load->helper(array('form', 'url')); 
      }
		
      public function index() { 
		 if( $this->session->userdata("username") ){
			$this->load->view('view_upload_form', array('error' => ' ' )); 
		 }else{
			 redirect("login");
		 }
      } 
		
      public function do_upload() { 
         $config['upload_path']   = './uploads/'; 
         $config['allowed_types'] = 'gif|jpg|png'; 
         $config['max_size']      = 1000; 
         $config['max_width']     = 1024; 
         $config['max_height']    = 768;  
         $this->upload->initialize($config);
		 //$this->load->library('upload', $config);//
		
         if ( ! $this->upload->do_upload('userfile')) {
            $error = array('error' => $this->upload->display_errors()); 
            $this->load->view('view_upload_form', $error); 
         } 
         else { 
            $data = array('upload_data' => $this->upload->data()); 
            $this->load->view('view_upload_success', $data); 
         } 
      } 
   } 
?>