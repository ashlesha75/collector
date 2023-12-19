<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_Dashboard_Model extends CI_Model
{
    public function insert_data($firstname, $middlename, $lastname, $firstname_marathi, $middlename_marathi, $lastname_marathi, $phone, $district, $taluka, $village, $area, $aadharno, $birthdate, $age)
    {
        $userid = $this->session->userdata('id');
        //$birthdateTimestamp = strtotime($birthdate);
        //$currentDate = date('Y-m-d');
        //$currentTimestamp = strtotime($currentDate);
        //$age = date('Y', $currentTimestamp) - date('Y', $birthdateTimestamp);

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
            'user_id' => $userid,
            'deleted_status' => '0'
        );

        $this->db->insert('rahivasi_form', $data);
        $form_id = $this->db->insert_id(); // Get the last inserted form ID

        // Handle file uploads and insert file details into 'rahivasi_form_doc' table
        //$this->handleFileUploads($form_id);
        return $form_id;
    }

    // Function to add record in table
    public function insert_document($data)
    {
        $this->db->insert('rahivasi_form_doc', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }


    // Function to update record in table
    public function update_record($data, $id)
    {
        $this->db->where('r_id', $id);
        if ($this->db->update('rahivasi_form', $data)) {
            return true;
        } else {
            return false;
        }
    }

    // Function to Delete selected record from table
    public function delete_record($id)
    {
        $this->db->where('r_id', $id);
        $this->db->delete('rahivasi_form_doc');
    }

    private function handleFileUploads($form_id)
    {
        $selected_documents = $this->input->post('selected_documents');
        $files = $_FILES['file'];

        for ($i = 0; $i < count($selected_documents); $i++) {
            $file_name = $files['name'][$i];
            $file_tmp_name = $files['tmp_name'][$i];
            $file_type = $files['type'][$i];

            // Check if a file was selected and handle the upload
            if (!empty($file_name)) {
                $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
                $new_file_name = uniqid('doc_') . '.' . $file_ext;
                $file_destination = 'assets/uploads/' . $new_file_name;

                move_uploaded_file($file_tmp_name, $file_destination);

                // Insert file details into the 'rahivasi_form_doc' table
                $file_data = array(
                    'r_id' => $form_id,
                    'doc_name' => $selected_documents[$i],
                    'doc_path' => $new_file_name
                );

                $this->db->insert('rahivasi_form_doc', $file_data);
            }
        }
    }

    public function get_rahivasi_form_details($id = NULL)
    {
        $user_id = $this->session->userdata('id');
        $this->db->select('*');
        $this->db->from('rahivasi_form');
        $id != '' ? $this->db->where('r_id', $id) : "";
        $this->db->where('user_id', $user_id);
        $query = $this->db->get();
        $query = $query->result();
        return $query;
    }
    public function get_rahivasi_form_details_doc($id = NULL)
    {
        $this->db->select('*');
        $this->db->from('rahivasi_form_doc');
        $id != '' ? $this->db->where('r_id', $id) : "";
        $query = $this->db->get();
        $query = $query->result();
        return $query;
    }

    public function get_taluka_name_marathi($taluka_name)
    {
        // Assuming 'talukas' table has 'taluka_name' and 'taluka_name_marathi' fields
        $this->db->select('taluka_name_marathi');
        $this->db->where('taluka_name', $taluka_name);
        $query = $this->db->get('talukas');

        if ($query->num_rows() > 0) {
            return $query->row()->taluka_name_marathi;
        } else {
            return NULL;
        }
    }

    public function get_village_name_marathi($village_name)
    {
        // Assuming 'villages' table has 'village_name' and 'village_name_marathi' fields
        $this->db->select('village_name_marathi');
        $this->db->where('village_name', $village_name);
        $query = $this->db->get('villages');

        if ($query->num_rows() > 0) {
            return $query->row()->village_name_marathi;
        } else {
            return NULL;
        }
    }

    // harshal
    public function insert_raise_complaint($firstname, $email, $phone, $file, $details)
    {
        $data = array(

            'firstname' => $firstname,
            'email' => $email,
            'phone' => $phone,
            // 'land_line' => $land_line,
            // 'district_name' => $district_name,
            // 'taluka_name' => $taluka_name,
            // 'category' => $category,
            // 'service_type' => $service_type,
            // 'dep_name' => $dep_name,
            // 'service_name' => $service_name,
            'file' => $file,
            'details' => $details,
        );
        $this->db->insert('complaint', $data);
    }
}
