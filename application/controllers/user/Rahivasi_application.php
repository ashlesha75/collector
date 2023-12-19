
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Login extends CI_Controller {
public function Rahivasi_application(){

$this->load->view('user/rahivasi_application');
}	

public function list(){

    $this->load->view('user/rahivasi_application_list');
    }
}