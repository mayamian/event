<?php

class Auth_peserta extends CI_Controller
{
	function __construct()
	{
		parent:: __construct();
		$this->load->model('Auth_Pesertamdl');
		$this->load->library('session');
		$this->load->model('Kategorip_model');
		$this->load->model('Peserta_model');	
	}

	public function index(){
		$this->load->view('index/detail_event');
	}

	public function homep(){
		$this->load->view('index/home_peserta');
	}

    public function proses_login() { 
        $email = $this->input->post('email'); 
        $password = $this->input->post('password'); 
        $login = $this->Auth_Pesertamdl->cek_login($email, $password); 

        if (!empty($login)) { 
            // login berhasil 
            $this->session->set_userdata($login); 
            redirect(base_url('Auth_peserta/index')); 
        } else { 
            // login gagal 
            $this->session->set_flashdata('gagal', 'Email atau Password Salah!'); 
            redirect(base_url('Home/login_peserta')); 
        } 
    }
	public function register(){
		$data['kodeunik'] = $this->Peserta_model->buat_kode();
		$data['kategori_peserta']=$this->Kategorip_model->get_kategorip();
		$this->load->view('index/login_peserta', $data);
		$this->load->model('Auth_Pesertamdl');
		$data['list_peserta']=$this->Peserta_model->get_peserta_db();
	}
	public function proses_register(){
		$data['list_peserta']=$this->Peserta_model->get_peserta_db();
		$data['kategori_peserta']=$this->Kategorip_model->get_kategorip();
		$this->form_validation->set_rules('kode', 'Kode Peserta', 'required');
		$this->form_validation->set_rules('nim', 'Nomor Induk Mahasiswa', 'required|is_unique[peserta.nim]');
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		/*$this->form_validation->set_rules('username', 'Username', 'required|is_unique[peserta.username]');*/
		$this->form_validation->set_rules('no_telp', 'Nomor Telp', 'required|is_unique[peserta.no_telp]');
		$this->form_validation->set_rules('email', "Email", 'required|valid_email|is_unique[peserta.email]');
		$this->form_validation->set_rules('password', 'Password', 'required');
		//$this->form_validation->set_rules('konfirmasi_password', 'Konfirmasi Password', 'required|matches[password]');
		$this->form_validation->set_rules('kategori_peserta_idkategori_peserta', 'Kategori Peserta', 'required');
		if ($this->form_validation->run() === FALSE) {
			//print_r(validation_errors());
			$this->load->view('index/login_peserta', $data);
			//alert aja nggak usah di redirect
			//$this->Auth_Pesertamdl->register($data);
			//redirect('Auth_peserta/index');
		}else{		
		$data = array (
			'nim'=>$this->input->post('nim'),
			'nama'=>$this->input->post('nama'),
			//'username'=>$this->input->post('username'),
			'no_telp'=>$this->input->post('no_telp'),
			'email'=>$this->input->post('email'),
			'password'=>$this->input->post('password'),
			'kategori_peserta_idkategori_peserta'=>$this->input->post('kategori_peserta_idkategori_peserta'),
		);
		$this->Auth_Pesertamdl->register($data);
		redirect('Home/login_peserta');
	}
}
	public function logout(){
		$this->session->sess_destroy();
		redirect('Home/index');
	}
}