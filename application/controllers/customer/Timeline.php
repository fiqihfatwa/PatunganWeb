<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Timeline extends CI_Controller {

	function __construct(){
		parent::__construct();
	}

	function index(){
		$data['active'] = 'timeline'; 
		$data['name'] = $this->session->userdata('patungan_name');
		$this->load->view("templates/header", $data);
		$this->load->view("customer/timeline");
		$this->load->view("templates/footer");
	}

}