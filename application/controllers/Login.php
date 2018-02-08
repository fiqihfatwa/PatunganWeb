<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('login_model');
	}

	function index(){
		if(isset($_POST['login'])){

			$email = $this->input->post('email');
			$ps = $this->input->post('password');

			$us = $this->login_model->cek_login($email);						

			if(count($us)>0){				
				
				if($us['user_password']== md5($ps)){
					$this->session->set_userdata('patungan_email',$email);
					$this->session->set_userdata('patungan_name',$us['user_name']);
					$this->session->set_userdata('patungan_user_id',$us['user_id']);			
					redirect('customer/home/');
				}else{
					redirect('login');					
				}
			}
			else{			

					$us = $this->login_model->cek_login_admin($email);
					if(count($us)>0){											
						if($us['admin_password']== md5($ps)){

							$this->session->set_userdata('patungan_email',$email);					
							redirect('admin/home/');
						}else{
							redirect('login');					
						}
					}

					redirect('login');
				}
		}else{
			$this->load->view("login");	
		}
		
	}

}