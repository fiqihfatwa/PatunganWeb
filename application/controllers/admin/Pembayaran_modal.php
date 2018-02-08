<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembayaran_modal extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('pemmodal_model');
	}

	function index(){
		$data['pembayaran'] = $this->pemmodal_model->get_pembayaran_modal();		
		$data['active'] = 'Pembayaran Modal';
		$this->load->view("templates/header_admin", $data);
		$this->load->view("admin/pembayaran_modal");
		$this->load->view("templates/footer");
	}


	function ubah_konfirmasi(){
		$id_user = $_POST['id_user'];
		$status = $_POST['status'];

		$data = array(
			'slot_status' => $status
		);

		$this->pemmodal_model->ubah_konfirmasi($id_user,$data);
	}


}
