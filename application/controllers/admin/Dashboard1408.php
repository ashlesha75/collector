<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Dashboard extends CI_Controller {
function __construct(){
parent::__construct();
$this->load->model('Admin_Dashboard_Model');
$this->load->model('Admin_Login_Model');
if(! $this->session->userdata('adid'))
redirect('admin/login');
}
	
public function index(){

$this->load->view('admin/admindashboard');
}
public function application_list(){
	//$totalcount=$this->Admin_Dashboard_Model->totalcount();
	//$sevendayscount=$this->Admin_Dashboard_Model->countlastsevendays();
	//$thirtydayscount=$this->Admin_Dashboard_Model->countthirtydays();
	//$this->load->view('admin/adminview',['tcount'=>$totalcount,'tsevencount'=>$sevendayscount,'tthirycount'=>$thirtydayscount]);
	$form_info=$this->Admin_Dashboard_Model->get_rahivasi_form_details(); 
	$data = array(
	
				'form_info' =>$form_info,
				); 
	$this->load->view('admin/adminview',$data);
	}

public function applicant_list(){
	$form_info=$this->Admin_Dashboard_Model->get_applicant_details(); 
	$data = array(
		'form_info' =>$form_info,
	); 
	$this->load->view('admin/applicant_list',$data);
}

public function reject_application_list(){
	$form_info=$this->Admin_Dashboard_Model->get_reject_application_details(); 
	$data = array(
	
				'form_info' =>$form_info,
				); 
	$this->load->view('admin/adminview',$data);
}

public function approved_application_list(){
	$form_info=$this->Admin_Dashboard_Model->get_approved_application_details(); 
	$data = array(
	
				'form_info' =>$form_info,
				); 
	$this->load->view('admin/adminview',$data);
}
public function view_detail($id=NULL){
	$form_info=$this->Admin_Dashboard_Model->get_rahivasi_form_details($id); 
	$form_info_doc=$this->Admin_Dashboard_Model->get_rahivasi_form_details_doc($id); 
	$form_info_remark=$this->Admin_Dashboard_Model->get_rahivasi_form_details_remark($id); 
	$data = array(
	   'form_info' =>$form_info,
	   'form_info_doc' => $form_info_doc,
	   'form_info_remark' => $form_info_remark,
	); 
	$this->load->view('admin/rahivasi_form_info',$data);
	//var_dump($id);die;
}

public function view_app_detail($id=NULL){
	$form_info=$this->Admin_Dashboard_Model->get_rahivasi_form_detailsid($id); 
	// var_dump($form_info); exit;
	// $form_info_doc=$this->Admin_Dashboard_Model->get_rahivasi_form_details_doc($id); 
	$data = array(
	   'form_info' =>$form_info,
	//    'form_info_doc' => $form_info_doc,
	); 
	$this->load->view('admin/app_rahivasi_form_info',$data);
	
}


 
public function changeStatus(){ 
	$id = $this->input->post('id');
	$remark = $this->input->post('remark');
	$adid = $this->session->userdata('adid');

	if($adid['admin_type']=='po'){
		$form_info=$this->Admin_Dashboard_Model->get_po_approved_count(); 
		if($form_info==''){
			$form_info=0;
		}
		$this->db->set('rahivasi_form.po_verify','1'); 
		$this->db->set('rahivasi_form.po_verify_dsc','1'); 
		$this->db->set('rahivasi_form.r_f_id',($form_info+1)); 
		$this->db->set('rahivasi_form.final_date', 'NOW()', false);
		// $this->send_msg_via_sms($to, $message);
	  }
	if($adid['admin_type']=='apo'){
      $this->db->set('rahivasi_form.apo_verify','1'); 
    }

    if($adid['admin_type']=='clerk'){
      $this->db->set('rahivasi_form.clerk_verify','1');
    }
	
	$this->db->where('rahivasi_form.r_id =',$id);
	$result = $this->db->update('rahivasi_form');

  $data = array(
    'r_id'     => $id,
    'remark	' => $remark,
    'added_by' => $adid['admin_id'] 
  );  
  $result1 = $this->Admin_Dashboard_Model->insert_remark($data); 
	// var_dump($result);die;
}

public function sendtouser(){ 
	$id     = $this->input->post('id');
	$remark = $this->input->post('remark');
	$adid   = $this->session->userdata('adid');

	if($adid['admin_type']=='clerk'){
		$this->db->set('rahivasi_form.clerk_verify','0');
		$this->db->set('rahivasi_form.clerk_verify_dsc','0');
		$this->db->set('rahivasi_form.clerk_remark',$remark);
		$this->db->set('rahivasi_form.deleted_status','2');
		// $this->send_rejectmsg_via_sms($to, $message);
	  }

	if($adid['admin_type']=='apo'){
	  $this->db->set('rahivasi_form.clerk_verify','0');
      $this->db->set('rahivasi_form.clerk_verify_dsc','0');
      $this->db->set('rahivasi_form.apo_verify','0'); 
	  $this->db->set('rahivasi_form.apo_verify_dsc','0');
	  
      $this->db->set('rahivasi_form.apo_remark',$remark);
	  $this->db->set('rahivasi_form.deleted_status','2');
	  // $this->send_rejectmsg_via_sms($to, $message);
    }

	if($adid['admin_type']=='po'){
		$this->db->set('rahivasi_form.clerk_verify','0');
		$this->db->set('rahivasi_form.clerk_verify_dsc','0');
		$this->db->set('rahivasi_form.po_verify','0'); 
		$this->db->set('rahivasi_form.po_verify_dsc','0');
		$this->db->set('rahivasi_form.apo_verify','0'); 
		$this->db->set('rahivasi_form.apo_verify_dsc','0');
		$this->db->set('rahivasi_form.po_remark',$remark);
		$this->db->set('rahivasi_form.deleted_status','2');

		// $this->send_rejectmsg_via_sms($to, $message);
	  }
	
	$this->db->where('rahivasi_form.r_id =',$id);
	$result = $this->db->update('rahivasi_form');


  $data = array(
    'r_id'     => $id,
    'remark	' => $remark,
    'added_by' => $adid['admin_id'] 
  );  
  $result1 = $this->Admin_Dashboard_Model->insert_remark($data); 
	// var_dump($result);die;
}

public function sendtoback(){ 
	$id     = $this->input->post('id');
	$remark = $this->input->post('remark');
	$adid   = $this->session->userdata('adid');



	if($adid['admin_type']=='apo'){
	 
      $this->db->set('rahivasi_form.clerk_verify_dsc','0');
      $this->db->set('rahivasi_form.apo_verify','0'); 
	  $this->db->set('rahivasi_form.apo_verify_dsc','0');
	  
      $this->db->set('rahivasi_form.apo_remark',$remark);
	
	  $this->send_rejectmsg_via_sms($to, $message);
    }

	if($adid['admin_type']=='po'){

		$this->db->set('rahivasi_form.apo_verify_dsc','0');	
		$this->db->set('rahivasi_form.po_verify','0'); 
		$this->db->set('rahivasi_form.po_verify_dsc','0');	
		$this->db->set('rahivasi_form.po_remark',$remark);


		$this->send_rejectmsg_via_sms($to, $message);
	  }
	
	$this->db->where('rahivasi_form.r_id =',$id);
	$result = $this->db->update('rahivasi_form');

	
  $data = array(
    'r_id'     => $id,
    'remark	' => $remark,
    'added_by' => $adid['admin_id']  
  );  
  $result1 = $this->Admin_Dashboard_Model->insert_remark($data); 
	// var_dump($result);die;
}

public function reject(){ 
	$id     = $this->input->post('id');
	$remark = $this->input->post('remark');
	$adid   = $this->session->userdata('adid');

	if($adid['admin_type']=='clerk'){
		$this->db->set('rahivasi_form.deleted_status','1');
		$this->db->set('rahivasi_form.clerk_remark',$remark);
		$this->send_rejectmsg_via_sms($to, $message);
	  }

	if($adid['admin_type']=='apo'){
		$this->db->set('rahivasi_form.deleted_status','1');
      $this->db->set('rahivasi_form.apo_remark',$remark);
      
	  $this->send_rejectmsg_via_sms($to, $message);
    }

	if($adid['admin_type']=='po'){
		$this->db->set('rahivasi_form.deleted_status','1'); 
		$this->db->set('rahivasi_form.po_remark',$remark);
		
		$this->send_rejectmsg_via_sms($to, $message);
	  }
	
	$this->db->where('rahivasi_form.r_id =',$id);
	$result = $this->db->update('rahivasi_form');


  $data = array(
    'r_id'     => $id,
    'remark	' => $remark,
    'added_by' => $adid['admin_id']   
  );  
  $result1 = $this->Admin_Dashboard_Model->insert_remark($data); 
	// var_dump($result);die;
}

public function delete_entry(){ 
	$id     = $this->input->post('id');
	$adid   = $this->session->userdata('adid');

	$this->db->set('rahivasi_form_doc.deleted_status','1');
	$this->db->where('rahivasi_form_doc.r_id =',$id);
  $result = $this->db->update('rahivasi_form_doc');

  $this->db->set('rahivasi_form.deleted_status','1');
	$this->db->where('rahivasi_form.r_id =',$id);
  $result = $this->db->update('rahivasi_form');

	// var_dump($result);die;
}

public function delete_entry_applicant(){ 
	$id     = $this->input->post('id');
	$adid   = $this->session->userdata('adid');

  $this->db->set('applicant.deleted_status','1');
	$this->db->where('applicant.id =',$id);
  $result = $this->db->update('applicant');
  
	// var_dump($result);die;
}

public function proceedtoDsc(){ 
	$id = $this->input->post('id');
	$remark = $this->input->post('remark');
	$adid = $this->session->userdata('adid');

    if($adid['admin_type']=='clerk'){
      $this->db->set('rahivasi_form.clerk_verify','1');
      $this->db->set('rahivasi_form.clerk_verify_dsc','1');
    }

    if($adid['admin_type']=='apo'){
      $this->db->set('rahivasi_form.apo_verify','1'); 
      $this->db->set('rahivasi_form.apo_verify_dsc','1');
    }

	if($adid['admin_type']=='po'){
		$this->db->set('rahivasi_form.apo_verify','0'); 
		$this->db->set('rahivasi_form.apo_verify_dsc','0');
		$this->db->set('rahivasi_form.po_verify','0'); 
		$this->db->set('rahivasi_form.po_verify_dsc','0');
		
	  }
	
	$this->db->where('rahivasi_form.r_id =',$id);
	$result = $this->db->update('rahivasi_form');

  $data = array(
    'r_id'     => $id,
    'remark	' => $remark,
    'added_by' => $adid['admin_id']   
  );  
  $result1 = $this->Admin_Dashboard_Model->insert_remark($data); 

	// var_dump($result);die;
}
private function send_msg_via_sms($to, $message) {

	// $to=$r->contact_no;
	// $message="Tuljai HR Services wishes you a very \"HAPPY BIRTHDAY\".\nMay our sweet bond of the relationship continue to get strong by leaps and bounds.\nRegards-Tuljai HR Services";
	// $this->Admin_Dashboard_Model->sendMobileSms($to,$message);
}

private function send_rejectmsg_via_sms($to, $message) {

	// $to=$r->contact_no;
	// $message="Tuljai HR Services wishes you a very \"HAPPY BIRTHDAY\".\nMay our sweet bond of the relationship continue to get strong by leaps and bounds.\nRegards-Tuljai HR Services";
	// $this->Admin_Dashboard_Model->sendMobileSms($to,$message);
}

}