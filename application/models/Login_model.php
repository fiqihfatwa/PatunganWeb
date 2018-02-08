<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	function cek_login($email){		
		return $this->db->where('user_email',$email)->get('patungan_user')->row_array();
	}	

	function cek_login_admin($email){
		return $this->db->where('admin_username',$email)->get('patungan_admin')->row_array();
	}
}