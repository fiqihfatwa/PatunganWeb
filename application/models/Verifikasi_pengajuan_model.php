<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Verifikasi_pengajuan_model extends CI_Model {


	function get_proyek(){
		return $this->db->select("*")->from('patungan_proyek')->join('patungan_user','patungan_proyek.user_id=patungan_user.user_id')->get()->result_array();
	}
}