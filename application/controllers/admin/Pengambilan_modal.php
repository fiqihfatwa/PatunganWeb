<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengambilan_modal extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('pengambilan_model');
	}

	function index(){
		$data['modal'] = $this->pengambilan_model->get_pengambilan_modal();


		$data['active'] = 'Pengambilan Modal';
		$this->load->view("templates/header_admin", $data);
		$this->load->view("admin/pengambilan_modal");
		$this->load->view("templates/footer");
	}

	function detail($id_pengambilan){
		Header("Content-Type:application/json");
		echo json_encode($this->pengambilan_model->get_detail($id_pengambilan));
	}

}
