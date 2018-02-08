<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PengajuanProyek_model extends CI_Model {

	function insert_proyek($data){		
		return $this->db->insert('patungan_proyek',$data);
	}

	function get_proyek(){
		$this->db->where('user_id', $this->session->userdata('patungan_user_id'));
		return $this->db->get('patungan_proyek')->result();
	}

	function get_last_id(){
		return $this->db->select('max(proyek_id) as proyek_id')
		->from('patungan_proyek')
		->get()->row();
	}

	function insert_image($data){
		return $this->db->insert('patungan_gambar',$data);
	}
}