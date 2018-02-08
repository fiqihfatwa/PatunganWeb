<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemmodal_model extends CI_Model {


	function get_pembayaran_modal(){
		return $this->db->select('*')->from('patungan_slot')
		->join('patungan_proyek','patungan_proyek.proyek_id=patungan_slot.proyek_id')
		->join('patungan_user','patungan_user.user_id=patungan_slot.user_id')		
		->get()->result_array();
	}

	function ubah_konfirmasi($slot,$data){
		$this->db->where('slot_id',$slot)->update('patungan_slot',$data);
	}
}
