<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proyek extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('a_proyek_model');
		$this->load->helper('verifikasi_helper');
	}


	function index(){
		$id = $_GET['id'];
		$data['proyek'] = $this->a_proyek_model->get_detail_proyek($id);
		$data['active'] = 'home';

		
		$this->load->view("templates/header_admin", $data);
		$this->load->view("admin/proyek");
		$this->load->view("templates/footer");

	}


	function publish($id){
			if($this->a_proyek_model->publish_proyek($id)){				
				$user = $this->a_proyek_model->get_user_publish($id);
				$us = $this->a_proyek_model->get_user($user['user_id']);								
				$token = generateCURL();
				sms_ke_user($us['user_telephone'],"Proyek Anda yaitu $user[proyek_nama] Telah diverifikasi.",$token);
				redirect(base_url('admin/proyek?id='.$id));
			}
	}


	function tolak($id){
		if($this->a_proyek_model->tolak_proyek($id)){				
				$user = $this->a_proyek_model->get_user_publish($id);
				$us = $this->a_proyek_model->get_user($user['user_id']);								
				$token = generateCURL();
				sms_ke_user($us['user_telephone'],"Mohon maaf, proyek Anda yaitu $user[proyek_nama] Ditolak.",$token);
				redirect(base_url('admin/proyek?id='.$id));
			}	
	}



}