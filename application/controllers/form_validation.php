<?php
  
class Form_validation extends CI_Controller {

    public function index()
    {
        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');

        $this->form_validation->set_rules(
            'username', 'Username',
            'required|min_length[5]|max_length[12]',
            array(
                    'required'      => 'You have not provided %s.',
                    'is_unique'     => 'This %s already exists.'
            )
        );
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]');
        $this->form_validation->set_rules('passconf', 'Password Confirmation', 'trim|required|matches[password]');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('view_form_validation');
        }
        else
        {
            $this->load->view('view_form_validation_success');
        }
    } 
} 
?>