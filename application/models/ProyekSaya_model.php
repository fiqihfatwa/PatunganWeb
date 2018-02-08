<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProyekSaya_model extends CI_Model {

	function get_all_proyek(){
		return $this->db->select('*,count(patungan_slot.slot_id) as jumlah_slot')->from('patungan_slot')
		->join('patungan_user','patungan_slot.user_id=patungan_user.user_id')
		->join('patungan_proyek','patungan_slot.proyek_id=patungan_proyek.proyek_id')
		->group_by('patungan_slot.proyek_id')
		->get()->result();

	}	

	function get_jumlah_slot($x){
		$this->db->where('proyek_id', $x);
		return $this->db->get('patungan_slot')->num_rows();
	}
}