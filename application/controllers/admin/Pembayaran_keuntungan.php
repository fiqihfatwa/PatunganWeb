<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembayaran_keuntungan extends CI_Controller {

	function __construct(){
		parent::__construct();
	}

	function index(){
		$data['active'] = 'Pembayaran Keuntungan';
		$this->load->view("templates/header_admin", $data);
		$this->load->view("admin/pembayaran_keuntungan");
		$this->load->view("templates/footer");
	}

}
