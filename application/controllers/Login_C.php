<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_C extends CI_Controller{
	public function index()
	{
		$this->load->view('pages/login/login_view');
		$this->load->model('LoginAdmin_model');
	}
	
	/*public function login(){
		$username = $this->input->post('username', true);
		$password = $this->input->post('password', true);
		$cek = $this->LoginAdmin_model->proseslogin($username, $password);
		$hasil = count($cek);
		if($hasil >0){
			redirect('Login_C/admin');
		}else{
			$this->load->view('pages/login/view_login');
		}

	}*/


	public function login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => $password
		);
		$cek = $this->LoginAdmin_model->cek_login("admin",$where);
		if($cek->num_rows() > 0){

			foreach ($cek -> result() as $baris) {
				$data_session = array(
					'username' => $username,
					'password' => $password,
					'status' => "login"
				);
			}
			$this->session->set_userdata($data_session);
			$baru=$cek->row();
			if ( $username==$baru->username && $password==$baru->password ) {
				redirect('Admin_C/index');
			}else{
					 redirect('Home/login_admin');
				}
			}

		}
	

		public function logout(){
			//$this->session->sess_userdata('admin', FALSE);
			$this->session->sess_destroy();
			redirect('Home/login_admin');
		}

		public function admin(){
			$this->load->view('templates/header');
			$this->load->view('templates/aside');
			$this->load->view('pages/dashboard');
			$this->load->view('templates/footer');
			}

		}
