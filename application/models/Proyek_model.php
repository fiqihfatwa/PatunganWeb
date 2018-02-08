<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proyek_model extends CI_Model {

	function get_proyek_detail($x){
		return $this->db->select('*')->from('patungan_proyek')
		->join('patungan_gambar','patungan_proyek.proyek_id=patungan_gambar.proyek_id')
		->join('patungan_user','patungan_proyek.user_id=patungan_user.user_id')
		->where('patungan_proyek.proyek_id',$x)->get()->row_array();
	}

	function get_jumlah_slot($x){
		$this->db->where('proyek_id', $x);
		return $this->db->get('patungan_slot')->num_rows();
	}

	function insert_slot($data){
		return $this->db->insert('patungan_slot',$data);
	}	
}