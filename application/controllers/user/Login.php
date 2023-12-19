<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function index() {

        
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run()) {
            
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $this->load->model('User_Login_Model');
            $validate = $this->User_Login_Model->validatelogin($username, $password);

            

            if ($validate) {
                $this->session->set_userdata('id', $validate);
                return redirect('user/dashboard');
            } else {
                $this->session->set_flashdata('error', 'Invalid details. Please try again with valid details');
                redirect('user/login');
            }
        } else {
            $this->load->view('user/login');
        }
    }

    // Function for logout
    public function logout() {
        $this->session->unset_userdata('id');
        $this->session->sess_destroy();
        return redirect('user/login');
    }



    


    

}






