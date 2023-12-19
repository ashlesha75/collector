
<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Dashboard extends CI_Controller
{

  public function index()
  {

    $this->load->view('user/userdashboard');
  }

  public function rahivasi_list($id = NULL)
  {
    $this->load->model('User_Dashboard_Model');
    $this->load->library('form_validation');
    $editid    = $this->input->post('id');
    $userid = $this->session->userdata('id');
    $this->form_validation->set_rules('firstname', 'First Name', 'required');
    $this->form_validation->set_rules('lastname', 'Last Name', 'required');
    $this->form_validation->set_rules('firstname_marathi', 'पहिलं नाव', 'required');
    $this->form_validation->set_rules('middlename_marathi', 'वडिलांचे / पतीचे नाव', 'required');
    $this->form_validation->set_rules('lastname_marathi', 'आडनाव', 'required');
    $this->form_validation->set_rules('phone', 'Phone Number', 'required|numeric|exact_length[10]');
    $this->form_validation->set_rules('district_name', 'District Name', 'required');
    $this->form_validation->set_rules('taluka_name', 'Taluka Name', 'required');
    $this->form_validation->set_rules('village_name', 'Village Name', 'required');
    $this->form_validation->set_rules('area', 'Area', 'required');

    // if($editid==NULL){
    // $this->form_validation->set_rules('aadharno', 'Aadhar Card Number', 'required|is_unique[rahivasi_form.aadharno]');}
    $this->form_validation->set_rules('birthdate', 'Birth Date', 'required');

    if ($this->form_validation->run()) {

      $firstname = $this->input->post('firstname');
      $middlename = $this->input->post('middlename');
      $lastname = $this->input->post('lastname');
      $firstname_marathi = $this->input->post('firstname_marathi');
      $middlename_marathi = $this->input->post('middlename_marathi');
      $lastname_marathi = $this->input->post('lastname_marathi');
      $phone = $this->input->post('phone');
      $district = $this->input->post('district_name');
      $taluka = $this->input->post('taluka_name');
      $village = $this->input->post('village_name');
      $area = $this->input->post('area');
      $aadharno = $this->input->post('aadharno');
      $birthdate = $this->input->post('birthdate');
      $editid    = $this->input->post('id');

      $birthdate_time = new DateTime($birthdate);
      $today   = new DateTime('today');
      $age = $birthdate_time->diff($today)->y;
      // var_dump('bye'); exit;
      if ($editid == '') {
        /////////////////// save form //////////////////       
        // Assuming your model is already set up and has a method named "insert_data"
        $lastid = $this->User_Dashboard_Model->insert_data($firstname, $middlename, $lastname, $firstname_marathi, $middlename_marathi, $lastname_marathi, $phone, $district, $taluka, $village, $area, $aadharno, $birthdate, $age);

        //if record inserted then add documents
        if ($lastid) {
          $doc_name = $this->input->post('document_type');
          $files    = $_FILES['files']['name'];

          for ($i = 0; $i < count($doc_name); $i++) {
            $filename = "";
            //upload file
            if (!empty($_FILES['files']['name'][$i])) {
              $_FILES['file']['name'] = $_FILES['files']['name'][$i];
              $_FILES['file']['type'] = $_FILES['files']['type'][$i];
              $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
              $_FILES['file']['error'] = $_FILES['files']['error'][$i];
              $_FILES['file']['size'] = $_FILES['files']['size'][$i];

              $config['upload_path'] = './assests/uploads/';
              $config['allowed_types'] = 'jpg|jpeg|png|gif|pdf|JPG|JPEG|PNG|GIF|PDF';
              $config['max_size'] = '5000';
              $config['file_name'] = $_FILES['files']['name'][$i];

              $this->load->library('upload', $config);

              if ($this->upload->do_upload('file')) {
                $uploadData = $this->upload->data();
                $filename = $uploadData['file_name'];
              }
            }

            //insert into table
            $data = array(
              'r_id'     => $lastid,
              'doc_name' => $doc_name[$i],
              'doc_path' => 'assests/uploads/' . $filename,
            );
            $result = $this->User_Dashboard_Model->insert_document($data);
          }
        }
        $this->session->set_flashdata('flashSuccess', 'Record saved successfully.');
        redirect('user/dashboard/application_list');
      } else {
        // var_dump('hello'); exit;
        ////////////Update Record/////////////
        $data = array(
          'firstname' => $firstname,
          'middlename' => $middlename,
          'lastname' => $lastname,
          'firstname_marathi' => $firstname_marathi,
          'middlename_marathi' => $middlename_marathi,
          'lastname_marathi' => $lastname_marathi,
          'phone' => $phone,
          'district_name' => $district,
          'taluka_name' => $taluka,
          'village_name' => $village,
          'area' => $area,
          'aadharno' => $aadharno,
          'birthdate' => $birthdate,
          'age' => $age,
          'deleted_status' => '0'
        );
        $result = $this->User_Dashboard_Model->update_record($data, $editid);

        //remove old documents first
        $result = $this->User_Dashboard_Model->delete_record($editid);
        //insert new document in table
        $doc_name   = $this->input->post('document_type');
        $edit_image = $this->input->post('edit_image');
        $files      = $_FILES['files']['name'];

        for ($i = 0; $i < count($doc_name); $i++) {
          $filename = "";
          if ($doc_name[$i]) {
            //upload file
            if (!empty($_FILES['files']['name'][$i])) {
              $_FILES['file']['name'] = $_FILES['files']['name'][$i];
              $_FILES['file']['type'] = $_FILES['files']['type'][$i];
              $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
              $_FILES['file']['error'] = $_FILES['files']['error'][$i];
              $_FILES['file']['size'] = $_FILES['files']['size'][$i];

              $config['upload_path'] = './assests/uploads/';
              $config['allowed_types'] = 'jpg|jpeg|png|gif|pdf|JPG|JPEG|PNG|GIF|PDF';
              $config['max_size'] = '5000';
              $config['file_name'] = $_FILES['files']['name'][$i];

              $this->load->library('upload', $config);

              if ($this->upload->do_upload('file')) {
                $uploadData = $this->upload->data();
                $filename = 'assests/uploads/' . $uploadData['file_name'];
              }
            } else {
              $filename = $edit_image[$i];
            }
            //insert into table
            $data = array(
              'r_id'     => $editid,
              'doc_name' => $doc_name[$i],
              'doc_path' => $filename,
            );
            $result = $this->User_Dashboard_Model->insert_document($data);
          }
        }
        $this->session->set_flashdata('flashSuccess', 'Record updated successfully.');
        redirect('user/dashboard/application_list');
      }
    } else {
      if ($id) {
        $form_info = $this->User_Dashboard_Model->get_rahivasi_form_details($id);
        $form_info_doc = $this->User_Dashboard_Model->get_rahivasi_form_details_doc($id);
      } else {
        $form_info = "";
        $form_info_doc = "";
      }
      $data = array(
        'form_info' => $form_info,
        'form_info_doc' => $form_info_doc,
      );
      $data['validation_errors'] = validation_errors();
      $data['firstname'] = $this->input->post('firstname');
      $data['middlename'] = $this->input->post('middlename');
      $data['lastname'] = $this->input->post('lastname');
      $data['firstname_marathi'] = $this->input->post('firstname_marathi');
      $data['middlename_marathi'] = $this->input->post('middlename_marathi');
      $data['lastname_marathi'] = $this->input->post('lastname_marathi');
      $data['phone'] = $this->input->post('phone');
      $data['district'] = $this->input->post('district_name');
      $data['taluka'] = $this->input->post('taluka_name');
      $data['village'] = $this->input->post('village_name');
      $data['area'] = $this->input->post('area');
      $data['aadharno'] = $this->input->post('aadharno');
      $data['birthdate'] = $this->input->post('birthdate');

      $this->load->view('user/dashboard', $data);
    }
  }

  function loadDistrict()
  {
    $r = $this->db->get('districts')->result();
    $option = '';
    $option .= '<option class="dropdown-item" value="">Select District</option>';
    foreach ($r as $item) {
      if ($item->district_name == 'Nandurbar') {
        $option .= "<option class='dropdown-item' value='$item->district_name' selected>$item->district_name</option>";
      } else {
        $option .= "<option class='dropdown-item' value='$item->district_name'>$item->district_name</option>";
      }
    }
    echo $option;
    die;
  }


  function loadTaluka()
  {
    $district_name = $this->input->post('district_name');
    $r = $this->db->where('district_name', $district_name)->get('talukas')->result();
    $option = '';
    $option .= '<option class="dropdown-item" value="">Select Taluka</option>';
    foreach ($r as $item) {
      $option .= "<option class='dropdown-item' value='$item->taluka_name'>$item->taluka_name</option>";
    }
    echo $option;
    die;
  }

  function loadVillage()
  {
    $district_name = $this->input->post('district_name');
    $taluka_name = $this->input->post('taluka_name');
    $r = $this->db->where(['district_name' => $district_name, 'taluka_name' => $taluka_name])->get('villages')->result();
    $option = '';
    $option .= '<option class="dropdown-item" value="">Select Village</option>';
    foreach ($r as $item) {
      $option .= "<option class='dropdown-item' value='$item->village_name'>$item->village_name</option>";
    }
    echo $option;
    die;
  }

  public function application_list()
  {
    $this->load->model('User_Dashboard_Model');
    $form_info = $this->User_Dashboard_Model->get_rahivasi_form_details();
    $data = array(
      'form_info' => $form_info,
    );
    $this->load->view('user/application_list', $data);
  }

  public function view_detail($id = NULL)
  {
    $this->load->model('User_Dashboard_Model');
    $form_info = $this->User_Dashboard_Model->get_rahivasi_form_details($id);
    $form_info_doc = $this->User_Dashboard_Model->get_rahivasi_form_details_doc($id);
    $data = array(
      'form_info' => $form_info,
      'form_info_doc' => $form_info_doc,
    );
    $this->load->view('user/rahivasi_form_info', $data);
    //var_dump($id);die;
  }

  public function complant()
  {

    $this->load->view('user/complant');
  }


  // harshal
  public function raise_complaint()
  {
    $this->load->model('User_Dashboard_Model');
    $firstname = $this->input->post('firstname');
    $email = $this->input->post('email');
    $phone = $this->input->post('phone');
    // $land_line = $this->input->post('land_line');
    // $district_name = $this->input->post('district_name');
    // $taluka_name = $this->input->post('taluka_name');
    // $category = $this->input->post('category');
    // $service_type = $this->input->post('service_type');
    // $dep_name = $this->input->post('dep_name');
    // $service_name = $this->input->post('service_name');
    $details = $this->input->post('details');

    if (!empty($_FILES['file']['name'])) {
      $config['upload_path'] = './assests/uploads/';
      $config['allowed_types'] = 'jpg|jpeg|png|gif';
      $config['file_name'] = $_FILES['file']['name'];

      $this->load->library('upload', $config);
      $this->upload->initialize($config);

      if ($this->upload->do_upload('file')) {
        $uploadData = $this->upload->data();
        $picture = $uploadData['file_name'];
      } else {
        $picture = '';
      }
    } else {
      $picture = '';
    }

    $insert_raise_complaint = $this->User_Dashboard_Model->insert_raise_complaint($firstname, $email, $phone, $picture, $details);

    if ($insert_raise_complaint) {
      // redirect('user/dashboard/complant');
      $this->session->set_flashdata('success_message', 'Your complaint has been raised successfully. We will notify you shorly.');
    } else {
      $this->session->set_flashdata('success_message', 'Your complaint has been raised successfully. We will notify you shorly.');
    }
      redirect('user/dashboard/complant');
  }

  public function checkstatus()
  {
    $this->load->view('user/checkstatus');
  }
}
