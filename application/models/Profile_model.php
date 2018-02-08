<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile_model extends CI_Model {

	function update_user_detail($data){
		$this->db->where('user_id', $this->session->userdata('patungan_user_id'));		
		return $this->db->update('patungan_user',$data);
	}

	function get_user_detail(){
		$this->db->where('user_id', $this->session->userdata('patungan_user_id'));
		return $this->db->get('patungan_user')->row();
	}	

}