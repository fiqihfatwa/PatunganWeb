<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PengajuanProyek extends CI_Controller {

	private $data;

	function __construct(){
		parent::__construct();
		$this->data['active'] = 'pengajuanproyek';
		$this->data['name'] = $this->session->userdata('patungan_name');

		$this->load->model('pengajuanproyek_model');
	}

	function index(){
		$data['database'] = $this->pengajuanproyek_model->get_proyek();

		$this->load->view("templates/header", $this->data);
		$this->load->view("customer/pengajuan_proyek", $data);
		$this->load->view("templates/footer");
	}

	function propose(){
		$this->load->view("templates/header", $this->data);
		$this->load->view("customer/pengajuan_proyek_propose");
		$this->load->view("templates/footer");
	}

	function process_propose(){

		$data = array(
			'user_id' => $this->session->userdata('patungan_user_id'),
			'proyek_nama' => $this->input->post('proyek_nama'),
			'proyek_lokasi' => $this->input->post('proyek_lokasi'),
			'proyek_total_dana' => $this->input->post('proyek_total_dana'),
			'proyek_estimasi_keuntungan' => $this->input->post('proyek_estimasi_keuntungan'),
			'proyek_jangka_waktu' => $this->input->post('proyek_jangka_waktu'),
			'proyek_deskripsi' => $this->input->post('proyek_deskripsi'),
			'proyek_insert_date' => date("Y/m/d"),
			'proyek_status' => '0',
			'proyek_total_slot' => 10,
			'proyek_harga_slot' => $this->input->post('proyek_total_dana')/10
		);

		if($this->pengajuanproyek_model->insert_proyek($data)){
			$config['upload_path'] = './assets/images/';
			$config['allowed_types'] = 'gif|jpg|png';		
			$this->load->library('upload',$config);

			$proyek_id = $this->pengajuanproyek_model->get_last_id();

			$data = array(
				'proyek_id' => $proyek_id->proyek_id,
				'gambar_url' => $_FILES['foto']['name']
			);



			if(!$this->upload->do_upload('foto')){
					var_dump($this->upload->display_errors());die;
			}else{
				$this->pengajuanproyek_model->insert_image($data);
			}
			redirect('customer/pengajuanproyek');
		} else {
			echo "gagal";
		}

	}
}