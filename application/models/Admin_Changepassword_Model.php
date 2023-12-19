<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Admin_Changepassword_Model extends CI_Model {

    public function check_mobile_number($phone) {
        $query = $this->db->where('phone', $phone)
                          ->get('admin_accounts');

        $account = $query->row();
            
        if ($account != NULL) {
            return $account->admin_id;
        } else {
            return false; 
        }
    }

    public function update_password($user_id, $new_password, $confirm_password) {
        
        // Check if the mobile number matches the number associated with the user ID
        $user_data = $this->db->where('admin_id', $user_id)
                            //   ->where('phone', $phone)
                              ->get('admin_accounts')
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
    
        $this->db->where('admin_id', $user_id);
        $update_result = $this->db->update('admin_accounts', $data);
    
        return $update_result;
    }

    public function sendMobileSms($to,$otp)
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
