<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proyek extends CI_Controller {

	private $data;

	function __construct(){
		parent::__construct();
		$this->data['active'] = 'proyek';
		$this->data['name'] = $this->session->userdata('patungan_name');

		$this->load->model('proyek_model');
	}

	function index(){
		$id = $_GET['id'];

		$data['database'] = $this->proyek_model->get_proyek_detail($id);
		$data['slot'] = $this->proyek_model->get_jumlah_slot($id);
		$this->load->view("templates/header", $this->data);
		$this->load->view("customer/proyek", $data);
		$this->load->view("templates/footer");
	}

	function input_slot(){
		$x = $this->input->post('jumlah_slot');

		$input = array(
			'user_id' => $this->input->post('user_id'),
			'proyek_id' => $this->input->post('proyek_id'),
			'slot_harga' => $this->input->post('proyek_harga_slot'),
			'slot_date' => date("Y/m/d")
			
		);

		for($i = 1; $i < $x; $i++){
			$this->proyek_model->insert_slot($input);
		}

		if($this->proyek_model->insert_slot($input)){
			redirect('customer/home');
		} else {
			echo "gagal";
		}
	}

}