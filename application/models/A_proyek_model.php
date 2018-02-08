<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class A_proyek_model extends CI_Model {

	function get_detail_proyek($id){		
		return $this->db->select('*')->from('patungan_proyek')
			->join('patungan_gambar','patungan_proyek.proyek_id=patungan_gambar.proyek_id')
			->join('patungan_user','patungan_proyek.user_id=patungan_user.user_id')
			->where('patungan_proyek.proyek_id',$id)->get()->row_array();
	}	

	function publish_proyek($id){
		return $this->db->where('proyek_id',$id)->update('patungan_proyek',array('proyek_status' => 1));
	}

	function tolak_proyek($id){
		return $this->db->where('proyek_id',$id)->update('patungan_proyek',array('proyek_status' => 2));
	}	


	function get_user_publish($id_proyek){
		return $this->db->select('*')->from('patungan_proyek')->where('proyek_id',$id_proyek)->get()->row_array();
	}

	function get_user($id_user){
		return $this->db->where('user_id',$id_user)->get('patungan_user')->row_array();
	}
}