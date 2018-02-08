<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	function __construct(){
		parent::__construct();

		$this->load->model('profile_model');
	}

	function index(){
		$data['name'] = $this->session->userdata('patungan_name');
		$data['active'] = 'profile'; 

		$data['database'] = $this->profile_model->get_user_detail();
		$this->load->view("templates/header", $data);
		$this->load->view("customer/profile");
		$this->load->view("templates/footer");
	}

	function update(){
		$data = array(
			'user_name' => $this->input->post('user_name'),
			'user_telephone' => $this->input->post('user_telephone'),
			'user_alamat' => $this->input->post('user_alamat'),
			'user_name_bank' => $this->input->post('user_name_bank'),
			'user_name_rekening_owner' => $this->input->post('user_name_rekening_owner'),
			'user_num_rekening' => $this->input->post('user_num_rekening'),
			'user_num_ktp' => $this->input->post('user_num_ktp')
		);

		if($this->profile_model->update_user_detail($data)){
			redirect('customer/profile');
		} else {
			echo "gagal";
		}
	}

}