<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {

	function get_all_proyek(){
		return $this->db->select('*')->from('patungan_proyek')
		->join('patungan_gambar','patungan_proyek.proyek_id=patungan_gambar.proyek_id')
		->join('patungan_user','patungan_proyek.user_id=patungan_user.user_id')
		->where('proyek_status', 1)->get()->result();

	}	

	function get_jumlah_slot($x){
		$this->db->where('proyek_id', $x);
		return $this->db->get('patungan_slot')->num_rows();
	}
}