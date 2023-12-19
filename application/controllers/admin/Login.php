<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Login extends CI_Controller
{

	public function index()
	{
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if ($this->form_validation->run()) {
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$this->load->model('Admin_Login_Model');
			$validate = $this->Admin_Login_Model->validatelogin($username, $password);
			if ($validate) {
				$admininfo = $this->Admin_Login_Model->get_admin($validate);
				$session_data = array(
					'admin_id' => $admininfo[0]->admin_id,
					'username' => $admininfo[0]->username,
					'email' => $admininfo[0]->email,
					'phone' => $admininfo[0]->phone,
					'admin_type' => $admininfo[0]->admin_type,
				);
				$this->session->set_userdata('adid', $session_data);
				return redirect('admin/dashboard');
			} else {
				$this->session->set_flashdata('error', 'Invalid details. Please try again with valid details');
				$this->load->view('admin/adminlogin');
			}
		} else {
			$this->load->view('admin/adminlogin');
		}
	}

	//function for logout
	public function logout()
	{
		$this->session->unset_userdata('adid');
		$this->session->sess_destroy();
		return redirect('admin/login');
	}
}
