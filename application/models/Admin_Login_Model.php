<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Admin_Login_Model extends CI_Model {


	public function validatelogin($username,$password){

		$query=$this->db->where(['username'=>$username,'password'=>$password]);
			$account=$this->db->get('admin_accounts')->row();
			if($account!=NULL){

		return $account->admin_id;
		}
		return NULL;
	}

	public function get_admin($adminid) {
		$this->db->select('*');
		$this->db->from('admin_accounts');
		$this->db->where('admin_id',$adminid);
		$query = $this->db->get();
		$query = $query->result();
		return $query;
	}

}

