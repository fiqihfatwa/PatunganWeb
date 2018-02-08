<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();

		$this->load->model('home_model');
	}

	function index(){
		$data['name'] = $this->session->userdata('patungan_name');
		$data['active'] = 'home'; 

		$data['database'] = $this->home_model->get_all_proyek();

	

		$this->load->view("templates/header", $data);
		$this->load->view("customer/home");
		$this->load->view("templates/footer");
	}

}