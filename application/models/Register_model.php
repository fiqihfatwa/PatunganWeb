<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register_model extends CI_Model {

	function insert_user($data){		
		return $this->db->insert('patungan_user',$data);
	}	
}