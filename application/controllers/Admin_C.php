<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_C extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->model('Admin_model');
		$this->load->library('form_validation');
	}
	public function login_admin(){
		$this->load->view('index/login');
	}
	public function dash(){
		$this->load->view('templates/header');
		$this->load->view('templates/aside');
		$this->load->view('pages/dashboard');
		$this->load->view('templates/footer');
	}
	public function proses_login(){
		$username = $this->input->post('username'); 
        $password = $this->input->post('password'); 
        $login = $this->Admin_model->cek_login($username, $password); 

        if (!empty($login)) { 
            // login berhasil 
            $this->session->set_userdata($login); 
            redirect(base_url('Admin_C/dash')); 
        } else { 
            // login gagal 
            $this->session->set_flashdata('gagal', 'Email atau Password Salah!'); 
            redirect(base_url('Admin_C/login_admin')); 
        } 
	}
	public function admin(){
		$data['list_admin']=$this->Admin_model->get_admin_db();
		$this->load->view('templates/header');
		$this->load->view('templates/aside');
		$this->load->view('pages/admin/data_admin', $data);
		$this->load->view('templates/footer');
	}
	public function tambah_admin(){
		$this->load->view('templates/header');
		$this->load->view('templates/aside');
		$this->load->view('pages/admin/tambah_admin');
		$this->load->view('templates/footer');
	}
	public function tambah_proses(){
		/*$this->form_validation->set_rules('admin','id_superadmin', 'required');*/
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('status', 'Status', 'required');

		if($this->form_validation->run()==FALSE){
			$this->load->view('templates/header');
			$this->load->view('templates/aside');
			$this->load->view('pages/admin/tambah_admin');
			$this->load->view('templates/footer');
		}else{
			$data=array(
				/*'id_superadmin'=>$this->input->post('id_superadmin'),*/
				'username'=>$this->input->post('username'),
				'password'=>$this->input->post('password'),
				'nama'=>$this->input->post('nama'),
				'email'=>$this->input->post('email'),
				'status'=>$this->input->post('status'),
			);
			$this->Admin_model->tambah_db($data);
			redirect('Admin_C/admin');
		}
	}

	function hapus($id){
		$this->Admin_model->hapus_db($id);
		redirect('Admin_C/admin');
	}
}	