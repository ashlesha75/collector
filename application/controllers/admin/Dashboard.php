<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Dashboard extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_Dashboard_Model');
		$this->load->model('Admin_Login_Model');
		if (!$this->session->userdata('adid'))
			redirect('admin/login');
	}

	public function index()
	{
		$this->load->view('admin/admindashboard');
	}
	public function application_list()
	{
		//$totalcount=$this->Admin_Dashboard_Model->totalcount();
		//$sevendayscount=$this->Admin_Dashboard_Model->countlastsevendays();
		//$thirtydayscount=$this->Admin_Dashboard_Model->countthirtydays();
		//$this->load->view('admin/adminview',['tcount'=>$totalcount,'tsevencount'=>$sevendayscount,'tthirycount'=>$thirtydayscount]);
		$form_info = $this->Admin_Dashboard_Model->get_rahivasi_form_details();
		$data = array(

			'form_info' => $form_info,
		);
		$this->load->view('admin/adminview', $data);
	}

	public function applicant_list()
	{
		$form_info = $this->Admin_Dashboard_Model->get_applicant_details();
		$data = array(
			'form_info' => $form_info,
		);
		$this->load->view('admin/applicant_list', $data);
	}

	public function reject_application_list()
	{
		$form_info = $this->Admin_Dashboard_Model->get_reject_application_details();
		$data = array(
			'form_info' => $form_info,
			'dcs_status' => 1, //harshal
		);
		$this->load->view('admin/adminview', $data);
	}

	public function approved_application_list()
	{
		$form_info = $this->Admin_Dashboard_Model->get_approved_application_details();
		$data = array(
			'form_info' => $form_info,
			'dcs_status' => 1,
		);
		$this->load->view('admin/adminview', $data);
		//$this->load->view('admin/daterange',$data);
		//$this->load->view('admin/daterange_new',$data);
	}
	public function view_detail($id = NULL)
	{
		$form_info = $this->Admin_Dashboard_Model->get_rahivasi_form_details($id);
		$form_info_doc = $this->Admin_Dashboard_Model->get_rahivasi_form_details_doc($id);
		$form_info_remark = $this->Admin_Dashboard_Model->get_rahivasi_form_details_remark($id);
		$data = array(
			'form_info' => $form_info,
			'form_info_doc' => $form_info_doc,
			'form_info_remark' => $form_info_remark,
		);
		$this->load->view('admin/rahivasi_form_info', $data);
		//var_dump($id);die;
	}




	public function view_app_detail($id = NULL)
	{
		$form_info = $this->Admin_Dashboard_Model->get_rahivasi_form_detailsid($id);
		// var_dump($form_info); exit;
		// $form_info_doc=$this->Admin_Dashboard_Model->get_rahivasi_form_details_doc($id); 
		$data = array(
			'form_info' => $form_info,
			//    'form_info_doc' => $form_info_doc,
		);
		$this->load->view('admin/app_rahivasi_form_info', $data);
	}


	public function changeStatus()
	{
		$id = $this->input->post('id');
		$remark = $this->input->post('remark');
		$adid = $this->session->userdata('adid');

		if ($adid['admin_type'] == 'po') {
			$form_info = $this->Admin_Dashboard_Model->get_po_approved_count();
			if ($form_info == '') {
				$form_info = 0;
			}
			$this->db->set('rahivasi_form.po_verify', '1');
			$this->db->set('rahivasi_form.po_verify_dsc', '1');
			$this->db->set('rahivasi_form.r_f_id', ($form_info + 1));
			$this->db->set('rahivasi_form.final_date', 'NOW()', false);
			// $this->send_msg_via_sms($to, $message);
		}
		if ($adid['admin_type'] == 'apo') {
			$this->db->set('rahivasi_form.apo_verify', '1');
		}

		if ($adid['admin_type'] == 'clerk') {
			$this->db->set('rahivasi_form.clerk_verify', '1');
		}

		$this->db->where('rahivasi_form.r_id =', $id);
		$result = $this->db->update('rahivasi_form');

		$data = array(
			'r_id'     => $id,
			'remark	' => $remark,
			'added_by' => $adid['admin_id']
		);
		$result1 = $this->Admin_Dashboard_Model->insert_remark($data);
		// var_dump($result);die;
	}

	public function sendtouser()
	{
		$id     = $this->input->post('id');
		$remark = $this->input->post('remark');
		$adid   = $this->session->userdata('adid');

		if ($adid['admin_type'] == 'clerk') {
			$this->db->set('rahivasi_form.clerk_verify', '0');
			$this->db->set('rahivasi_form.clerk_verify_dsc', '0');
			$this->db->set('rahivasi_form.clerk_remark', $remark);
			$this->db->set('rahivasi_form.deleted_status', '2');
			// $this->send_rejectmsg_via_sms($to, $message);
		}

		if ($adid['admin_type'] == 'apo') {
			$this->db->set('rahivasi_form.clerk_verify', '0');
			$this->db->set('rahivasi_form.clerk_verify_dsc', '0');
			$this->db->set('rahivasi_form.apo_verify', '0');
			$this->db->set('rahivasi_form.apo_verify_dsc', '0');

			$this->db->set('rahivasi_form.apo_remark', $remark);
			$this->db->set('rahivasi_form.deleted_status', '2');
			// $this->send_rejectmsg_via_sms($to, $message);
		}

		if ($adid['admin_type'] == 'po') {
			$this->db->set('rahivasi_form.clerk_verify', '0');
			$this->db->set('rahivasi_form.clerk_verify_dsc', '0');
			$this->db->set('rahivasi_form.po_verify', '0');
			$this->db->set('rahivasi_form.po_verify_dsc', '0');
			$this->db->set('rahivasi_form.apo_verify', '0');
			$this->db->set('rahivasi_form.apo_verify_dsc', '0');
			$this->db->set('rahivasi_form.po_remark', $remark);
			$this->db->set('rahivasi_form.deleted_status', '2');

			// $this->send_rejectmsg_via_sms($to, $message);
		}

		$this->db->where('rahivasi_form.r_id =', $id);
		$result = $this->db->update('rahivasi_form');


		$data = array(
			'r_id'     => $id,
			'remark	' => $remark,
			'added_by' => $adid['admin_id']
		);
		$result1 = $this->Admin_Dashboard_Model->insert_remark($data);
		// var_dump($result);die;
	}

	public function sendtoback()
	{
		$id     = $this->input->post('id');
		$remark = $this->input->post('remark');
		$adid   = $this->session->userdata('adid');



		if ($adid['admin_type'] == 'apo') {

			$this->db->set('rahivasi_form.clerk_verify_dsc', '0');
			$this->db->set('rahivasi_form.apo_verify', '0');
			$this->db->set('rahivasi_form.apo_verify_dsc', '0');

			$this->db->set('rahivasi_form.apo_remark', $remark);

			$this->send_rejectmsg_via_sms($to, $message);
		}

		if ($adid['admin_type'] == 'po') {

			$this->db->set('rahivasi_form.apo_verify_dsc', '0');
			$this->db->set('rahivasi_form.po_verify', '0');
			$this->db->set('rahivasi_form.po_verify_dsc', '0');
			$this->db->set('rahivasi_form.po_remark', $remark);


			$this->send_rejectmsg_via_sms($to, $message);
		}

		$this->db->where('rahivasi_form.r_id =', $id);
		$result = $this->db->update('rahivasi_form');


		$data = array(
			'r_id'     => $id,
			'remark	' => $remark,
			'added_by' => $adid['admin_id']
		);
		$result1 = $this->Admin_Dashboard_Model->insert_remark($data);
		// var_dump($result);die;
	}

	public function reject()
	{
		$id     = $this->input->post('id');
		$remark = $this->input->post('remark');
		$adid   = $this->session->userdata('adid');

		if ($adid['admin_type'] == 'clerk') {
			$this->db->set('rahivasi_form.deleted_status', '1');
			$this->db->set('rahivasi_form.clerk_remark', $remark);
			$this->send_rejectmsg_via_sms($to, $message);
		}

		if ($adid['admin_type'] == 'apo') {
			$this->db->set('rahivasi_form.deleted_status', '1');
			$this->db->set('rahivasi_form.apo_remark', $remark);

			$this->send_rejectmsg_via_sms($to, $message);
		}

		if ($adid['admin_type'] == 'po') {
			$this->db->set('rahivasi_form.deleted_status', '1');
			$this->db->set('rahivasi_form.po_remark', $remark);

			$this->send_rejectmsg_via_sms($to, $message);
		}

		$this->db->where('rahivasi_form.r_id =', $id);
		$result = $this->db->update('rahivasi_form');


		$data = array(
			'r_id'     => $id,
			'remark	' => $remark,
			'added_by' => $adid['admin_id']
		);
		$result1 = $this->Admin_Dashboard_Model->insert_remark($data);
		// var_dump($result);die;
	}

	public function delete_entry()
	{
		$id     = $this->input->post('id');
		$adid   = $this->session->userdata('adid');

		$this->db->set('rahivasi_form_doc.deleted_status', '1');
		$this->db->where('rahivasi_form_doc.r_id =', $id);
		$result = $this->db->update('rahivasi_form_doc');

		$this->db->set('rahivasi_form.deleted_status', '1');
		$this->db->where('rahivasi_form.r_id =', $id);
		$result = $this->db->update('rahivasi_form');

		// var_dump($result);die;
	}

	public function delete_entry_applicant()
	{
		$id     = $this->input->post('id');
		$adid   = $this->session->userdata('adid');

		$this->db->set('applicant.deleted_status', '1');
		$this->db->where('applicant.id =', $id);
		$result = $this->db->update('applicant');

		// var_dump($result);die;
	}

	public function proceedtoDsc()
	{
		$id = $this->input->post('id');
		$remark = $this->input->post('remark');
		$adid = $this->session->userdata('adid');

		if ($adid['admin_type'] == 'clerk') {
			$this->db->set('rahivasi_form.clerk_verify', '1');
			$this->db->set('rahivasi_form.clerk_verify_dsc', '1');
		}

		if ($adid['admin_type'] == 'apo') {
			$this->db->set('rahivasi_form.apo_verify', '1');
			$this->db->set('rahivasi_form.apo_verify_dsc', '1');
		}

		if ($adid['admin_type'] == 'po') {
			$this->db->set('rahivasi_form.apo_verify', '0');
			$this->db->set('rahivasi_form.apo_verify_dsc', '0');
			$this->db->set('rahivasi_form.po_verify', '0');
			$this->db->set('rahivasi_form.po_verify_dsc', '0');
		}

		$this->db->where('rahivasi_form.r_id =', $id);
		$result = $this->db->update('rahivasi_form');
+
		$data = array(
			'r_id'     => $id,
			'remark	' => $remark,
			'added_by' => $adid['admin_id']
		);
		$result1 = $this->Admin_Dashboard_Model->insert_remark($data);

		// var_dump($result);die;
	}
	private function send_msg_via_sms($to, $message)
	{

		// $to=$r->contact_no;
		// $message="Tuljai HR Services wishes you a very \"HAPPY BIRTHDAY\".\nMay our sweet bond of the relationship continue to get strong by leaps and bounds.\nRegards-Tuljai HR Services";
		// $this->Admin_Dashboard_Model->sendMobileSms($to,$message);
	}

	private function send_rejectmsg_via_sms($to, $message)
	{

		// $to=$r->contact_no;
		// $message="Tuljai HR Services wishes you a very \"HAPPY BIRTHDAY\".\nMay our sweet bond of the relationship continue to get strong by leaps and bounds.\nRegards-Tuljai HR Services";
		// $this->Admin_Dashboard_Model->sendMobileSms($to,$message);
	}

	// public function verify_index(){

	// 	$this->load->view('admin/verify');
	// }

	public function verify()
	{
		$this->load->helper('captcha');

		$vals = array(
			//'word'          ='Randdfdom word',
			'img_path'      => './captcha-images/',
			'img_url'       => base_url() . 'captcha-images/',
			'font_path'     => './path/to/fonts/texb.ttf',
			'img_width'     => '150',
			'img_height'    => 40,
			'expiration'    => 7200,
			'word_length'   => 7,
			'font_size'     => 16,
			'img_id'        => 'Imageid',
			'pool'          => '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',

			// White background and border, black text and red grid
			'colors'        => array(
				'background' => array(255, 255, 255),
				'border' => array(255, 255, 255),
				'text' => array(0, 0, 0),
				'grid' => array(255, 40, 40)
			)
		);

		$cap = create_captcha($vals);
		$image = $cap['image'];
		$captchaword = $cap['word'];

		$this->session->set_userdata('captcha_code', $captchaword);

		// // Store captcha values in session for validation

		$this->load->view('admin/verify', ['captcha_image' => $image, 'form_info' => array(), 'barcode' => NULL]);
	}

	public function getNewCaptcha()
	{
		$this->load->helper('captcha');

		$vals = array(
			//'word'          ='Randdfdom word',
			'img_path'      => './captcha-images/',
			'img_url'       => base_url() . 'captcha-images/',
			'font_path'     => './path/to/fonts/texb.ttf',
			'img_width'     => '150',
			'img_height'    => 40,
			'expiration'    => 7200,
			'word_length'   => 7,
			'font_size'     => 16,
			'img_id'        => 'Imageid',
			'pool'          => '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',

			// White background and border, black text and red grid
			'colors'        => array(
				'background' => array(255, 255, 255),
				'border' => array(255, 255, 255),
				'text' => array(0, 0, 0),
				'grid' => array(255, 40, 40)
			)
		);

		$cap = create_captcha($vals);
		$image = $cap['image'];
		$captchaword = $cap['word'];
		$this->session->set_userdata('captcha_code', $captchaword);
		echo $image;
	}



	public function verify_submission()
	{
		$user_input = $this->input->post('captcha_code');
		$barcode    = $this->input->post('username');
		$stored_captcha = $this->session->userdata('captcha_code'); // Change 'captcha_word' to 'captcha_code'

		if ($user_input === $stored_captcha) {
			//if(1){
			// CAPTCHA verification successful, process the form submission
			$this->load->helper('captcha');

			$vals = array(
				//'word'          ='Randdfdom word',
				'img_path'      => './captcha-images/',
				'img_url'       => base_url() . 'captcha-images/',
				'font_path'     => './path/to/fonts/texb.ttf',
				'img_width'     => '150',
				'img_height'    => 40,
				'expiration'    => 7200,
				'word_length'   => 7,
				'font_size'     => 16,
				'img_id'        => 'Imageid',
				'pool'          => '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',

				// White background and border, black text and red grid
				'colors'        => array(
					'background' => array(255, 255, 255),
					'border' => array(255, 255, 255),
					'text' => array(0, 0, 0),
					'grid' => array(255, 40, 40)
				)
			);

			$cap = create_captcha($vals);
			$image = $cap['image'];
			$captchaword = $cap['word'];

			$this->session->set_userdata('captcha_code', $captchaword);
			$form_info = $this->Admin_Dashboard_Model->get_approved_application_details('', $barcode);
			$data = array(
				'captcha_image' => $image,
				'user_input	' => $user_input,
				'barcode' => $barcode,
				'form_info' => $form_info,
			);
			// // Store captcha values in session for validation
			$this->load->view('admin/verify', $data);
		} else {
			$this->session->set_flashdata('flashError', 'CAPTCHA verification failed. Please try again.');
			redirect('admin/dashboard/verify'); // Redirect back to the verification page
		}
	}

	function Sendtodsi()
	{
		//generate dsc no and send_dsc status
		$id       = $this->input->post('id');
		$adid     = $this->session->userdata('adid');
		$today_date = date('Y-m-d');

		for ($i = 0; $i <= count($id); $i++) {
			$form_info = $this->Admin_Dashboard_Model->get_approved_application_details($id[$i]);
			$approval_id = $form_info['0']->r_f_id;
			$dsc_code = "DSC $approval_id";

			$this->db->set('rahivasi_form.send_dsc', '1');
			$this->db->set('rahivasi_form.dsc_code', $dsc_code);
			$this->db->set('rahivasi_form.dsc_date', $today_date);
			$this->db->where('rahivasi_form.r_id =', $id[$i]);
			$result = $this->db->update('rahivasi_form');
		}
		if ($result) {
			echo "succss";
			die;
		} else {
			echo "";
			die;
		}
	}

	// harshal
	public function registeredcomplaint()
	{
		$data['registered_users_complaint'] = $this->Admin_Dashboard_Model->registeredcomplaint()->result();
		$this->load->view('admin/registeredcomplaint',$data);
	}

	public function update_registered_users_complaint(){
		$remark_id = $this->input->post('remark_id');
        $remarks = $this->input->post('remarks');
		
		$data = array(
			'status' => 'non-editable'
		);

		if ($this->Admin_Dashboard_Model->update_registered_users_complaint($remark_id, $remarks)) {
            $this->session->set_flashdata('success_message', 'Record has been added successfully.');
        }else{
            $this->session->set_flashdata('success_message', 'Record has been added successfully.');
        }
		redirect('admin/Dashboard/registeredcomplaint');
	}
}
