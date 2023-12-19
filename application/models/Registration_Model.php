<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'application/PHPMailer/src/PHPMailer.php';
require 'application/PHPMailer/src/Exception.php';
require 'application/PHPMailer/src/SMTP.php';



class Registration_Model extends CI_Model {

    public function insert($aname, $district, $taluka, $village, $phone, $email) {
        // Generate username and password
        $username = strtolower(str_replace(' ', '', $aname)); 
        $password = substr(md5(uniqid(rand(), true)), 0, 8);

        $is_unique = false;
        $counter = 1;
        $new_username = $username;
        while (!$is_unique) {
            $existing_user = $this->db->get_where('applicant', array('username' => $new_username))->row();
            if (!$existing_user) {
                $is_unique = true;
            } else {
                $new_username = $username . $counter; 
            }
        }

        $data = array(
            'applicant_name' => $aname,
            'username' => $new_username, 
            'password' => $password, 
            'district_name' => $district,
            'taluka_name' => $taluka,
            'village_name' => $village,
            'phone' => $phone,
            'email' => $email
        );

        $sql_query = $this->db->insert('applicant', $data);
        if ($sql_query) {
            $this->sendEmail($aname, $email, $new_username, $password);
            $this->session->set_flashdata('success', 'Registration successful. Check your email for login details.');
            redirect('user/login');
            
        } else {
            
            $this->session->set_flashdata('error', 'Registration failed. Please try again.');
            redirect('user/registration');
        }
        
    }

    /*private function sendEmail($aname, $email, $username, $password) {
        $mail = new PHPMailer(true);

        try {
            // Configure SMTP settings
            $mail->isSMTP();
            $mail->Host       = "smtp.gmail.com";
            $mail->SMTPAuth   = true;
            $mail->Username   = "aditya.absoft@gmail.com";
            $mail->Password   = "snvkpbdyvdhmpkit";
            $mail->SMTPSecure = 'tls';
            $mail->Port       = 587;

            // Sender and recipient details
            $mail->setFrom("aditya.absoft@gmail.com");
            $mail->addAddress($email);

            // Email content
            $mail->isHTML(true);
            $mail->Subject = 'Registration Successful';
            $mail->Body    = 'Nandurbar Rahivasi Dakhla Project<br><br>'
                . 'Dear ' . $aname . ',<br><br>'
                . 'Your registration was successful. Here are your login details:<br><br>'
                . 'Username: ' . $username . '<br>'
                . 'Password: ' . $password . '<br><br>'
                . 'Thank you for registering.';

            $mail->send();
			
        } catch (Exception $e) {
            // Handle exception
            // echo 'Email could not be sent. Error: ' . $mail->ErrorInfo;
        }
    }*/

    private function sendEmail($aname, $email, $username, $password) {
        $mail = new PHPMailer(true);

        try {
            // Configure SMTP settings
            $mail->isSMTP();
            $mail->Host       = "smtp.gmail.com";
            $mail->SMTPAuth   = true;
            $mail->Username   = "talodapo@gmail.com";
            $mail->Password   = "jkfaiwevhxyjdlra";
            $mail->SMTPSecure = 'tls';
            $mail->Port       = 587;

            // Sender and recipient details
            $mail->setfrom("talodapo@gmail.com");
            $mail->addAddress($email);

            // Email content
            $mail->isHTML(true);
            $mail->Subject = 'Registration Successful';
            $mail->Body    = 'Nandurbar Rahivasi Dakhla Project<br><br>'
                . 'Dear ' . $aname . ',<br><br>'
                . 'Your registration was successful. Here are your login details:<br><br>'
                . 'Username: ' . $username . '<br>'
                . 'Password: ' . $password . '<br><br>'
                . 'Thank you for registering.';

            $mail->send();
            
        } catch (Exception $e) {
            // Handle exception
            // echo 'Email could not be sent. Error: ' . $mail->ErrorInfo;
        }
    }


    public function check_mobile_number($phone) {
        $query = $this->db->where('phone', $phone)
                          ->get('applicant');

        $account = $query->row();
            
        if ($account != NULL) {
            return $account->id;
        } else {
            return false; 
        }
    }

    public function update_password($user_id, $new_password, $confirm_password) {
        
        // Check if the mobile number matches the number associated with the user ID
        $user_data = $this->db->where('id', $user_id)
                            //   ->where('phone', $phone)
                              ->get('applicant')
                              ->row();
                            //   var_dump($user_data); exit;
    
        if (!$user_data) {
            return false; // Mobile number does not match the user ID
        }
    
        // Now, update the password
        if ($new_password !== $confirm_password) {
            return false; // Passwords don't match
        }
    
        $data = array(
            'password' => $new_password
        );
    
        $this->db->where('id', $user_id);
        $update_result = $this->db->update('applicant', $data);
    
        return $update_result;
    }

    public function sendMobileSms($to,$message)
    {
    $mobileNumber= $to; /*Separate mobile no with commas */
    $message= urlencode($message); /* message */
    $url="https://sms.visionhlt.com/api/mt/SendSms?apikey=8P4P69RvHkmmALN9L8HDXA&senderid=TULHRS&channel=Trans&DCS=0&flashsms=0&number=".$mobileNumber."&text=".$message."";
    $ch = curl_init();
    curl_setopt_array($ch, array(
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_SSL_VERIFYHOST => 0,
    CURLOPT_SSL_VERIFYPEER => 0
    ));
    /* get response */
    $output = curl_exec($ch);
    /* Print error if any */
    if(curl_errno($ch))
    {
    echo 'error:' . curl_error($ch);
    }
    curl_close($ch);
    return $output;
}
    
    
}

    

