<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('verifikasi_pengajuan_model');
	}

	function index(){
		$data['proyek'] = $this->verifikasi_pengajuan_model->get_proyek();		
		$data['active'] = 'home';
		$this->load->view("templates/header_admin", $data);
		$this->load->view("admin/home");
		$this->load->view("templates/footer");
	}

}
