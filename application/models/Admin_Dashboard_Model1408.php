<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Admin_Dashboard_Model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('adid'))
            redirect('admin/login');
    }



    public function get_rahivasi_form_details($id = NULL)
    {
        //$this->db->select('rahivasi_form.*,talukas.taluka_name,district_name');
        $adid = $this->session->userdata('adid');
        $this->db->select('*');
        $this->db->from('rahivasi_form');
        //$this->db->join('talukas','talukas.taluka_id=rahivasi_form.taluka_name','left');
        //$this->db->join('districts','districts.district_id=rahivasi_form.district_name','left');
        //$this->db->join('talukas','talukas.taluka_name=rahivasi_form.taluka_name','left');
        $id != '' ? $this->db->where('r_id', $id) : "";
        if ($adid['admin_type'] == 'clerk') {
            $this->db->where('clerk_verify_dsc', '0');
            $this->db->where('deleted_status', '0');
            // $this->db->or_where('deleted_status','2');
        }
        if ($adid['admin_type'] == 'apo') {
            $this->db->where('clerk_verify_dsc', '1');
            $this->db->where('apo_verify_dsc', '0');
            $this->db->where('deleted_status', '0');
            // $this->db->or_where('deleted_status','2');
        }
        if ($adid['admin_type'] == 'po') {
            $this->db->where('clerk_verify_dsc', '1');
            $this->db->where('apo_verify_dsc', '1');
            $this->db->where('po_verify_dsc', '0');
            $this->db->where('deleted_status', '0');
            // $this->db->or_where('deleted_status','2');
        }
        $this->db->order_by('r_id', 'asc');
        $query = $this->db->get();
        // var_dump($query); exit;
        $query = $query->result();
        return $query;
    }

    public function get_rahivasi_form_detailsid($id = NULL)
    {
        //$this->db->select('rahivasi_form.*,talukas.taluka_name,district_name');
        $adid = $this->session->userdata('adid');
        $this->db->select('*');
        $this->db->from('rahivasi_form');
        //$this->db->join('talukas','talukas.taluka_id=rahivasi_form.taluka_name','left');
        //$this->db->join('districts','districts.district_id=rahivasi_form.district_name','left');
        //$this->db->join('talukas','talukas.taluka_name=rahivasi_form.taluka_name','left');
        $id != '' ? $this->db->where('r_id', $id) : "";

        $this->db->order_by('r_id', 'asc');
        $query = $this->db->get();
        // var_dump($query); exit;
        $query = $query->result();
        return $query;
    }
    public function get_rahivasi_form_details_count()
    {
        $adid = $this->session->userdata('adid');
        $this->db->from('rahivasi_form');
        if ($adid['admin_type'] == 'clerk') {
            $this->db->where('clerk_verify_dsc', '0');
            $this->db->where('deleted_status', '0');
        } elseif ($adid['admin_type'] == 'apo') {
            $this->db->where('clerk_verify_dsc', '1');
            $this->db->where('apo_verify_dsc', '0');
            $this->db->where('deleted_status', '0');
        } elseif ($adid['admin_type'] == 'po') {
            $this->db->where('clerk_verify_dsc', '1');
            $this->db->where('apo_verify_dsc', '1');
            $this->db->where('po_verify_dsc', '0');
            $this->db->where('deleted_status', '0');
        }
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function get_po_approved_count()
    {
        $adid = $this->session->userdata('adid');
        $this->db->from('rahivasi_form');
        if ($adid['admin_type'] == 'po') {
            $this->db->where('po_verify_dsc', '1');
            $this->db->where('deleted_status', '0');
        }
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function get_rahivasi_form_details_doc($id = NULL)
    {
        //$this->db->select('rahivasi_form.*,talukas.taluka_name,district_name');
        $this->db->select('*');
        $this->db->from('rahivasi_form_doc');
        //$this->db->join('talukas','talukas.taluka_id=rahivasi_form.taluka_name','left');
        //$this->db->join('districts','districts.district_id=rahivasi_form.district_name','left');
        //$this->db->join('talukas','talukas.taluka_name=rahivasi_form.taluka_name','left');
        $id != '' ? $this->db->where('r_id', $id) : "";
        $query = $this->db->get();
        $query = $query->result();
        return $query;
    }

    public function get_rahivasi_form_details_remark($id = NULL)
    {
        //$this->db->select('rahivasi_form.*,talukas.taluka_name,district_name');
        $this->db->select('rahivasi_form_remark.*,admin_accounts.username');
        $this->db->from('rahivasi_form_remark');
        $this->db->join('admin_accounts', 'rahivasi_form_remark.added_by = admin_accounts.admin_id');
        //$this->db->join('talukas','talukas.taluka_id=rahivasi_form.taluka_name','left');
        //$this->db->join('districts','districts.district_id=rahivasi_form.district_name','left');
        //$this->db->join('talukas','talukas.taluka_name=rahivasi_form.taluka_name','left');
        $id != '' ? $this->db->where('r_id', $id) : "";
        $query = $this->db->get();
        $query = $query->result();
        return $query;
    }
    public function get_applicant_details($id = NULL)
    {
        //$this->db->select('rahivasi_form.*,talukas.taluka_name,district_name');
        $adid = $this->session->userdata('adid');
        $this->db->select('*');
        $this->db->from('applicant');
        $id != '' ? $this->db->where('r_id', $id) : "";
        $this->db->where('deleted_status', '0');
        $query = $this->db->get();
        $query = $query->result();
        return $query;
    }
    public function get_applicant_count()
    {
        $adid = $this->session->userdata('adid');
        $this->db->from('applicant');
        $this->db->where('deleted_status', '0');

        $query = $this->db->get();
        return $query->num_rows();
    }

    public function get_reject_application_details($id = NULL)
    {
        //$this->db->select('rahivasi_form.*,talukas.taluka_name,district_name');
        $adid = $this->session->userdata('adid');
        $this->db->select('*');
        $this->db->from('rahivasi_form');
        $id != '' ? $this->db->where('r_id', $id) : "";
        $this->db->where('deleted_status', '1');

        $query = $this->db->get();
        $query = $query->result();
        return $query;
    }

    public function get_reject_application_count()
    {
        $adid = $this->session->userdata('adid');
        $this->db->from('rahivasi_form');
        $this->db->where('deleted_status', '1');

        $query = $this->db->get();
        return $query->num_rows();
    }

    public function get_approved_application_details($id = NULL)
    {
        //$this->db->select('rahivasi_form.*,talukas.taluka_name,district_name');
        $adid = $this->session->userdata('adid');
        $this->db->select('*');
        $this->db->from('rahivasi_form');
        $id != '' ? $this->db->where('r_id', $id) : "";
        $this->db->where('po_verify', '1');

        $query = $this->db->get();
        $query = $query->result();
        return $query;
    }
    public function get_approved_application_count()
    {
        $adid = $this->session->userdata('adid');
        $this->db->from('rahivasi_form');
        $this->db->where('po_verify', '1');

        $query = $this->db->get();
        return $query->num_rows();
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

    // Function to add record in table
    public function insert_remark($data)
    {
        $this->db->insert('rahivasi_form_remark', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }


    public function sendMobileSms($to, $message)
    {
        $mobileNumber = $to; /*Separate mobile no with commas */
        $message = urlencode($message); /* message */
        $url = "https://sms.visionhlt.com/api/mt/SendSms?apikey=8P4P69RvHkmmALN9L8HDXA&senderid=TULHRS&channel=Trans&DCS=0&flashsms=0&number=" . $mobileNumber . "&text=" . $message . "";
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
        if (curl_errno($ch)) {
            echo 'error:' . curl_error($ch);
        }
        curl_close($ch);
        return $output;
    }
}
