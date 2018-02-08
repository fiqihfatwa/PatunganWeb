<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('register_model');
		$this->load->helper('verifikasi');
		$this->load->library('curl');
	}

	function index(){
		if(isset($_POST['register'])){
			$email = $this->input->post('email');
			$nama = $this->input->post('nama');
			$ps1 = $this->input->post('password');
			$ps2 = $this->input->post('password2');
			$hp = $this->input->post('hp');
			if($ps1 == $ps2){
				$token = generateCURL();			
				$kode = generateRandomString();
				$this->session->set_userdata('no_hp',$hp);
				$this->session->set_userdata('kode',$kode);
				$this->session->set_userdata('nama',$nama);
				$this->session->set_userdata('email',$email);
				$this->session->set_userdata('ps',$ps1);
				verifikasi_sms($kode,$hp,$token);
				
				redirect('register/verifikasi');

				
			}else{
				redirect('register');
			}

		}else{
			$this->load->view("register");	
		}
		
	}

	function kirim_ulang(){		
		$token = generateCURL();			
		verifikasi_sms($this->session->userdata('kode'),$this->session->userdata('no_hp'),$token);
		redirect('register/verifikasi?d=1');
	}


	function verifikasi(){
		if(isset($_POST['submit'])){
			$token = generateCURL();
			$kode2 = $this->input->post('kode');			
			if(cek_sms($this->session->userdata('kode'),$kode2, $token)){
				$data = array(
					'user_email' => $this->session->userdata('email'),
					'user_password' => md5($this->session->userdata('ps')),
					'user_name' => $this->session->userdata('nama'),
					'user_telephone' => $this->session->userdata('no_hp')
				);

				if($this->register_model->insert_user($data)){
					redirect('login');
				}
			}else{				
				$data['alert'] = "Kode Salah";
			}
		}else{
			$data['alert'] = "Kode verifikasi akan dikirim ko nomor anda";
			if(@$_GET['d']){
				$data['alert'] = "Kode telah dikirim";
			}
			
		}
		$this->load->view('verifikasi_register',$data);
	}

}