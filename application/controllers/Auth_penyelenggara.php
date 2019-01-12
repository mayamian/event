<?php
class Auth_penyelenggara extends CI_Controller
{ 
	function __construct()
	{
		parent:: __construct();
		//load model
		$this->load->model('Auth_penyelenggaramdl');
		// $this->load->model('Kategori_model');
		$this->load->model('Penyelenggara_model');
		//load library
		$this->load->library('form_validation');
		$this->load->library('session');
	}

	public function halaman_penyelenggara(){
		$this->load->view('templates/header');
		$this->load->view('pages/dashboard');
		$this->load->view('templates/aside');
		$this->load->view('templates/footer');
	}
	
	public function index(){
		$this->load->view('index/home_penyelenggara');
	}

	public function log_penyelenggara() {
		// $data['kategori_penyelenggara']=$this->Kategori_model->get_kategori();
		$data['list_penyelenggara']=$this->Penyelenggara_model->get_penyelenggara_db();
		$this->load->view('index/login_penyelenggara',$data);
		$this->load->model('Auth_Penyelenggaramdl');
	}

	public function proses_login() { 
        $email = $this->input->post('email'); 
        $password = $this->input->post('password'); 
        $login = $this->Auth_penyelenggaramdl->cek_penyelenggara($email,$password); 

        if (!empty($login)) { 
            // login berhasil 
            $this->session->set_userdata($login); 
            redirect(base_url('Auth_penyelenggara/index')); 
        } else { 
            // login gagal 
            $this->session->set_flashdata('gagal', 'Email atau Password Salah!'); 
            redirect(base_url('Home/login_penyelenggara')); 
        } 
    }

    public function logout_penyelenggara(){
		$this->session->sess_destroy();
		redirect('Home/index');
	}
	
	// 	public function add_proses(){
	// 	$data['kategori_penyelenggara']=$this->Kategori_model->get_kategori();
	// 	$data['list_penyelenggara']=$this->Penyelenggara_model->get_penyelenggara_db();
	// 	$this->form_validation->set_rules('kategori_penyelenggara', 'Kategori Penyelenggara', 'required');
	// 	$this->form_validation->set_rules('nama_penyelenggara', 'Nama Penyelenggara', 'required|is_unique[penyelenggara.nama_penyelenggara]');
	// 	$this->form_validation->set_rules('username', 'Username', 'required|is_unique[penyelenggara.username]');
	// 	$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[penyelenggara.email]');
	// 	$this->form_validation->set_rules('password', 'Password', 'required');
	// 	$this->form_validation->set_rules('konfirmasi_password', 'Konfirmasi Password', 'required|matches[password]');
	// 	$this->form_validation->set_rules('deskripsi_penyelenggara', 'Deskripsi Penyelenggara', 'required');
	// 	// $this->form_validation->set_rules('status', 'Status', 'required');
	// 	$this->form_validation->set_rules('web_url', 'Website', 'required|is_unique[penyelenggara.web_url]');
	// 	$this->form_validation->set_rules('ig_url', 'Instagram', 'required');
	// 	$this->form_validation->set_rules('tw_url', 'Twitter', 'required');
	// 	$this->form_validation->set_rules('fb_url', 'Facebook', 'required');
	// 	$this->form_validation->set_rules('youtube', 'Youtube', 'required');
		
	// 	if ($this->form_validation->run() == FALSE) {
	// 		/*$data['kategori_penyelenggara']=$this->Kategori_model->get_kategori();
	// 		*/
	// 		$this->load->view('index/login_penyelenggara',$data);
	// 	}

	// 	else{
	// 		$data=array(
	// 			'kategori_penyelenggara'=>$this->input->post('kategori_penyelenggara'),
	// 			'nama_penyelenggara'=>$this->input->post('nama_penyelenggara'),
	// 			'username'=>$this->input->post('username'),
	// 			'email'=>$this->input->post('email'),
	// 			'password'=>$this->input->post('password'),
	// 			'deskripsi_penyelenggara'=>$this->input->post('deskripsi_penyelenggara'),
	// 			'status'=>$this->input->post('status'),
	// 			'web_url'=>$this->input->post('web_url'),
	// 			'ig_url'=>$this->input->post('ig_url'),
	// 			'tw_url'=>$this->input->post('tw_url'),
	// 			'fb_url'=>$this->input->post('fb_url'),
	// 			'youtube'=>$this->input->post('youtube'),
	// 		);
	// 	$this->Auth_penyelenggaramdl->register($data);
	// 	redirect('Home/login_penyelenggara');
	// 	}
	// }

	/*public function index(){
	$this->load->view('index/login_penyelenggara');
		$this->load->model('Auth_penyelenggaramdl');	
	}*/
		// $this->load->model('Auth_Penyelenggaramdl');
		// $data['list_penyelenggara']=$this->Penyelenggara_model->get_penyelenggara_db();



/*

	public function register(){
		$data['kategori_peserta']=$this->Kategorip_model->get_kategorip();
		$this->load->view('index/login_peserta', $data);
		$this->load->model('Auth_Pesertamdl');
		$data['list_peserta']=$this->Peserta_model->get_peserta_db();
	}
	public function proses_register(){
		$data['kategori_penyelenggara']=$this->Kategorip_model->get_kategorip();
		$this->form_validation->set_rules('nim', 'Nomor Induk Mahasiswa', 'required|is_unique[peserta.nim]');
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		/*$this->form_validation->set_rules('username', 'Username', 'required|is_unique[peserta.username]');
		$this->form_validation->set_rules('no_telp', 'Nomor Telp', 'required|is_unique[peserta.no_telp]');
		$this->form_validation->set_rules('email', "Email", 'required|valid_email|is_unique[peserta.email]');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('konfirmasi_password', 'Konfirmasi Password', 'required|matches[password]');
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
			'username'=>$this->input->post('username'),
			'no_telp'=>$this->input->post('no_telp'),
			'email'=>$this->input->post('email'),
			'password'=>$this->input->post('password'),
			'kategori_peserta_idkategori_peserta'=>$this->input->post('kategori_peserta_idkategori_peserta'),
		);
		$this->Auth_Pesertamdl->register($data);
		redirect('Home/login_peserta');
	}*/
}

	/*public function penyelenggara()
	{
//		$data['list_penyelenggara']=$this->Penyelenggara_model->get_penyelenggara_db();
		$this->load->view('templates/header');
		$this->load->view('templates/aside');
		$this->load->view('pages/penyelenggara/data_penyelenggara');
		$this->load->view('templates/footer');
	}

	/*public function proses_login(){
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if($this->form_validation->run() == FALSE){
			$this->load->view('pages/login/login_penyelenggara');
		}else{
			$username = $this->input->post('username');
			$cek = $this->Auth_penyelenggaramdl->cekUsername($username);
			if($cek->num_rows() == 1){
				$password = $this->input->post('password');
				if (password_verivy($password, $cek->row()->password)){
					$session['nama_penyelenggara'] = $cek->row()->nama_penyelenggara;
					$session['logged_in'] = TRUE;

					$this->session->set_userdata($session);

				}else{
					echo "Login gagal";
				}
			}else{
				echo "Maaf Username tidak terdaftar";
			}
		}
	}
/*
	public function register($data){
		$this->load->model('Penyelenggara_model'. $data);
		$this->load->view('pages/register/register_peyelenggara');
	}

	public function proses_register(){
		$this->form_validation->set_rules('nama_penyelenggara', 'Nama Penyelenggara', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required|is_unique[penyelenggara.username]');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[penyelenggara.email]');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('konfirmasi_password', 'Konfirmasi Password', 'required|matches[password]' );
		$this->form_validation->set_rules('deskripsi_penyelenggara', 'Deskripsi', 'required');
		$this->form_validation->set_rules('web_url', 'Website', 'required');
		$this->form_validation->set_rules('ig_url', 'Instagram', 'required');
		$this->form_validation->set_rules('tw_url', 'Twitter', 'required');
		$this->form_validation->set_rules('fb_url', 'Facebook', 'required');
		if($this->form_validation->run() == FALSE){
			$this->load->view('pages/register/register_peyelenggara');
			//redirect('Auth_penyelenggara/register');
		}else{
			$data= array(
				'id_penyelenggara'=>$this->input->post('id_penyelenggara'),
				'nama_penyelenggara'=>$this->input->post('nama_penyelenggara'),
				'username'=>$this->input->post('username'),
				'email'>$this->input->post('email'),
				'password'=> password_hash($this->input->post('password'), PASSWORD_DEFAULT),
				'deskripsi_penyelenggara'=>$this->input->post('deskripsi_penyelenggara'),
				'web_url'=>$this->input->post('web_url'),
				'ig_url'=>$this->input->post('ig_url'),
				'tw_url'=>$this->input->post('tw_url'),
				'fb_url'=>$this->input->post('fb_url')
			);
		$insert = $this->Auth_penyelenggaramdl->register($data);
		if($insert){
			echo 'Registrasi Berhasil';
		}else{
			echo 'Terjadi Kesalahan Saat Registrasi';
		}
	}
}*/