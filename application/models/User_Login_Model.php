<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_Login_Model extends CI_Model
{
    public function validatelogin($username, $password)
    {
        $query = $this->db->where(['username' => $username, 'password' => $password, 'deleted_status' => 0]);
        $account = $this->db->get('applicant')->row();

        if ($account != NULL) {
            return $account->id;
        } else {
            $this->session->set_flashdata('error', 'Invalid Details. Error!!');
            redirect('user/login');
        }
    }
}
