<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {
	
  public function __construct() {
       Parent::__construct();
   $this->load->library('session');
   $this->load->helper('form');
   $this->load->helper('url');
   $this->load->helper('html');
   $this->load->database();
   $this->load->library('form_validation');
  }
   
  public function index() { 
      $this->load->view('user/registration');
    }

    public function add() {
      $this->form_validation->set_rules('applicant_name', 'Name', 'required');
      $this->form_validation->set_rules('district_name', 'District', 'required');
      $this->form_validation->set_rules('taluka_name', 'Taluka', 'required');
      $this->form_validation->set_rules('village_name', 'Village', 'required');       
      $this->form_validation->set_rules('phone', 'Phone', 'required|numeric|exact_length[10]|is_unique[applicant.phone]');
      // $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[applicant.email]');
      $this->form_validation->set_rules('email', 'Email', 'required|valid_email');//harshal
  
      if ($this->form_validation->run()) {
          $aname = $this->input->post('applicant_name');
          $district = $this->input->post('district_name');
          $taluka = $this->input->post('taluka_name');
          $village = $this->input->post('village_name');
          
          $phone = $this->input->post('phone');
          $email = $this->input->post('email'); 
  
          $this->load->model('Registration_Model');
          $this->Registration_Model->insert($aname, $district, $taluka, $village, $phone, $email); 
              
          } else {
            
             $this->session->set_flashdata('error', 'Registration failed. Please try again.');
            $this->load->view('user/registration');
           
          }
      }



    function loadDistrict(){
        $edit_district = $this->input->post('edit_district');
        $r = $this->db->get('districts')->result();
        $option = '';
        $option .='<option class="dropdown-item" value="">Select District</option>';
        foreach($r as $item){
        if($edit_district!='' && $edit_district==$item->district_name){
          $option .="<option class='dropdown-item' value='$item->district_name' selected>$item->district_name</option>";  
        }    
        elseif($edit_district=='' && $item->district_name=='Nandurbar'){
          $option .="<option class='dropdown-item' value='$item->district_name' selected>$item->district_name</option>";
        }else{
            $option .="<option class='dropdown-item' value='$item->district_name'>$item->district_name</option>";
        }}
        echo $option;die;
      }

    function loadTaluka(){
        $edit_taluka = $this->input->post('edit_taluka');
        $district_name = $this->input->post('district_name');
        $r = $this->db->where('district_name', $district_name)->get('talukas')->result();
        $option = '';
        $option .='<option class="dropdown-item" value="">Select Taluka</option>';
        foreach($r as $item){
          if($edit_taluka!='' && $edit_taluka==$item->taluka_name){ 
            $set="selected";
          }else{ $set =""; }  
          $option .="<option class='dropdown-item' value='$item->taluka_name' $set>$item->taluka_name</option>";
        }
        echo $option;die;
      }

      function loadVillage(){
        $edit_village = $this->input->post('edit_village');
        $district_name = $this->input->post('district_name');
        $taluka_name = $this->input->post('taluka_name');
        $r = $this->db->where(['district_name' => $district_name, 'taluka_name' => $taluka_name])->get('villages')->result();
        $option = '';
        $option .='<option class="dropdown-item" value="">Select Village</option>';
        foreach($r as $item){
          if($edit_village!='' && $edit_village==$item->village_name){ 
            $set="selected";
          }else{ $set =""; }  
          $option .="<option class='dropdown-item' value='$item->village_name' $set>$item->village_name</option>";
        }
        echo $option;die;
      }

      public function certificate($id = NULL) { 
        $this->load->model('Admin_Dashboard_Model'); 
        $form_info = $this->Admin_Dashboard_Model->get_rahivasi_form_details($id,"true");
    //var_dump($id);die;
        if ($form_info) {
            // Fetch taluka_name_marathi from the 'talukas' table based on taluka_name
            $taluka_name_marathi = $this->Admin_Dashboard_Model->get_taluka_name_marathi($form_info[0]->taluka_name);
    
            // Fetch village_name_marathi from the 'villages' table based on village_name
            $village_name_marathi = $this->Admin_Dashboard_Model->get_village_name_marathi($form_info[0]->village_name);
    
            // Add taluka_name_marathi and village_name_marathi to the $form_info object
            $form_info[0]->taluka_name_marathi = $taluka_name_marathi;
            $form_info[0]->village_name_marathi = $village_name_marathi;
    
            $data = array(
                'form_info' => $form_info,
            );
    
            $this->load->view('user/certificate', $data);
        } else {
            echo "error";
        }
    }
    
}
