<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengambilan_model extends CI_Model {

	function get_pengambilan_modal(){
		return $this->db->select('*')->from('patungan_pengambilan')
		->join('patungan_proyek','patungan_proyek.proyek_id=patungan_pengambilan.proyek_id')
		->join('patungan_user','patungan_user.user_id=patungan_proyek.user_id')->get()->result_array();
	}


	function get_detail($id){
		return $this->db->where('pengambilan_id',$id)->get('patungan_rincian_pengambilan')->result_array();
	}
}