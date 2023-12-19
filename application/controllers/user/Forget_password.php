<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forget_password extends CI_Controller {

    public function index() {
        $this->load->view('user/forgetpass');
    }

    public function send_otp() {
        $this->form_validation->set_rules('phone', 'Phone', 'required');
    
        if ($this->form_validation->run()) {
            $phone = $this->input->post('phone');
    
            $this->load->model('Registration_Model');
            $user_id = $this->Registration_Model->check_mobile_number($phone);
    
            if ($user_id === false) {
                // Phone number does not exist, show error message
                $this->session->set_flashdata('error', 'Invalid phone number. Please try again with a valid number.');
                redirect('user/forget_password'); // Redirect to the forget_password index method
            }
    
            // Assuming you have a method to send the OTP via SMS to the provided phone number
            // This is just a placeholder. In a real implementation, you would integrate an SMS service.
            $otp = $this->generate_otp(); // Use the generate_otp() function from the previous answer
            $this->send_otp_via_sms($phone, $otp);
    
            // Store the generated OTP, the user ID, and the phone number in the session
            $this->session->set_userdata('otp', $otp);
            $this->session->set_userdata('user_id', $user_id);
            $this->session->set_userdata('phone', $phone);
           
    
            // Redirect to the same forgetpass view with OTP verification
            $data['otp_sent'] = true;
            $this->load->view('user/forgetpass', $data);
        } else {
            $this->load->view('user/forgetpass');
        }
    }
    
    
    public function verify_otp() {
        $this->form_validation->set_rules('otp', 'OTP', 'required');
    
        if ($this->form_validation->run()) {
            $otp = $this->input->post('otp');
            $stored_otp = $this->session->userdata('otp');
    
            if ($otp == $stored_otp) {
                // OTP matches, proceed to change password
                // $phone = $this->session->userdata('phone');
                
                // $this->session->set_flashdata('phone', $phone);
                // var_dump($phone); exit;
                redirect('user/forget_password/changepass');
            } else {
                $this->session->set_flashdata('error', 'Invalid OTP. Please try again.');
                // Redirect back to the same forgetpass view with OTP verification
                $data['otp_sent'] = true;
                $this->load->view('user/forgetpass', $data);
            }
        } else {
            // OTP form validation failed, redirect back to the same forgetpass view with OTP verification
            $data['otp_sent'] = true;
            $this->load->view('user/forgetpass', $data);
        }
    }
    
    
    
    
    

    public function changepass() {
        $this->load->view('user/changepass');
    }

    public function changepassword() {
        // Assuming the user is not logged in and you have their user ID available in the session
        $user_id = $this->session->userdata('user_id');
        $phone = $this->session->userdata('phone');
        
    
        $this->load->model('Registration_Model');
    
        $this->form_validation->set_rules('password', 'New Password', 'required');
        $this->form_validation->set_rules('cpassword', 'Confirm Password', 'required');
    
        if ($this->form_validation->run() == FALSE) {
            // Form validation failed or the page was loaded for the first time
            $this->load->view('user/changepass');
        } else {
            // Form validation passed, passwords match
    
            // Get the new password and confirm password from the form
            $new_password = $this->input->post('password');
            $confirm_password = $this->input->post('cpassword');
    
            // Retrieve the phone from flash data (set in verify_otp())
            $phone = $this->session->flashdata('phone');
            
           
            // Update the password in the applicant table
            $update_result = $this->Registration_Model->update_password($user_id, $new_password, $confirm_password);
    // var_dump($update_result); exit;
            if ($update_result === false) {
                // Passwords didn't match, show error message
                $this->session->set_flashdata('error', 'Passwords do not match. Please try again.');
                redirect('user/forget_password/changepassword'); // Redirect back to the change password page
            } elseif ($update_result) {
                // Password updated successfully, show success message or redirect to a success page
                $this->session->set_flashdata('success', 'Password updated successfully!');
                redirect('user/login'); // Redirect to the login page after password change
            } else {
                // Failed to update password, show error message
                $this->session->set_flashdata('error', 'Password update failed. Please try again later.');
                redirect('user/forget_password/changepassword'); // Redirect back to the change password page
            }
        }
    }
    
    
    
    

    private function send_otp_via_sms($to, $otp) {
        // $this->load->model('Registration_Model');
         // $to=$r->contact_no;
        // $message="Tuljai HR Services wishes you a very \"HAPPY BIRTHDAY\".\nMay our sweet bond of the relationship continue to get strong by leaps and bounds.\nRegards-Tuljai HR Services";
        // $this->Registration_Model->sendMobileSms($to,$otp);
    }


    private function generate_otp($length = 6) {
        $otp = '123456';
        // $characters = '0123456789';
        // $max = strlen($characters) - 1;

        // for ($i = 0; $i < $length; $i++) {
        //     $otp .= $characters[mt_rand(0, $max)];
        // }

        return $otp;
    }
    
}

