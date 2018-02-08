<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProjectSaya extends CI_Controller {

	function __construct(){
		parent::__construct();

		$this->load->model('proyeksaya_model');
	}

	function index(){
		$data['name'] = $this->session->userdata('patungan_name');
		$data['active'] = 'proyeksaya';

		$data['database'] = $this->proyeksaya_model->get_all_proyek();

		$this->load->view("templates/header", $data);
		$this->load->view("customer/project_saya");
		$this->load->view("templates/footer");
	}

}