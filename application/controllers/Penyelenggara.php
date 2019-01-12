<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penyelenggara extends CI_Controller {

	function __construct(){
		parent::__construct();
		//load model
		$this->load->model('Penyelenggara_model');
		$this->load->model('Kategori_model');
		//validasi inputan
		$this->load->library('form_validation');
		$this->load->helper(array('form', 'url'));
	}

	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/aside');
		$this->load->view('pages/dashboard');
		$this->load->view('templates/footer');
	}

	public function penyelenggara()
	{
		$data['list_penyelenggara']	= $this->Penyelenggara_model->get_penyelenggara_db();
		$this->load->view('templates/header');
		$this->load->view('templates/aside');
		$this->load->view('pages/penyelenggara/lihat', $data);
		$this->load->view('templates/footer');
	}

	public function add()
	{
		$data['kategori_penyelenggara']=$this->Kategori_model->get_kategorip();
		$this->load->view('templates/header');
		$this->load->view('templates/aside');
		$this->load->view('pages/penyelenggara/add', $data);
		$this->load->view('templates/footer');
	}

	public function add_proses()
	{
		$data['list_penyelenggara']	= $this->Penyelenggara_model->get_penyelenggara_db();
		$this->form_validation->set_rules('kategori_penyelenggara','Kategori Penyelenggara','required');
		$this->form_validation->set_rules('nama_penyelenggara', 'Nama Penyelenggara', 'required|is_unique[penyelenggara.nama_penyelenggara]');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[penyelenggara.email]');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('konfirmasi_password', 'Konfirmasi Password');
		$this->form_validation->set_rules('logo', 'Logo Orma', 'required');
		$this->form_validation->set_rules('deskripsi_penyelenggara','Deskripsi Penyelenggara','required');
		// $this->form_validation->set_rules('status', 'Status', 'required');
		$this->form_validation->set_rules('web_url', 'Website', 'required|is_unique[penyelenggara.web_url]');
		$this->form_validation->set_rules('ig_url', 'Instagram', 'required');
		$this->form_validation->set_rules('tw_url', 'Twitter', 'required');
		$this->form_validation->set_rules('fb_url', 'Facebook', 'required');
		$this->form_validation->set_rules('youtube', 'Youtube', 'required');

			$config['upload_path'] = "./asset/img/logo_orma/";
		    $config['allowed_types'] = 'gif|jpeg|png|jpg';
		    $config['max_height'] = '20000';
		    $config['max_width'] = '2048';
		    $config['max_size'] = '2048';
		    $this->load->library('upload',$config);
		    $this->path = './asset/img/logo_orma/';
   
   			$this->upload->initialize($config);

		if ($this->form_validation->run() == FALSE && ! $this->upload->do_upload('logo')) {

			$id = $this->input->post('id');
			$data['kategori_penyelenggara']=$this->Kategori_model->get_kategorip();
			$data['logo']=$this->upload->display_errors();
			$this->load->view('templates/header');
			$this->load->view('templates/aside');
			$this->load->view('pages/penyelenggara/add', $data);
			$this->load->view('templates/footer');
		}
		
		else{
			$dataUpload = $this->upload->data();
			$data=array(
			'kategori_penyelenggara'=>$this->input->post('kategori_penyelenggara'),
			'nama_penyelenggara'=>$this->input->post('nama_penyelenggara'),
			'email'=>$this->input->post('email'),
			'password'=>$this->input->post('password'),
			'logo'=> $dataUpload['file_name'],
			'deskripsi_penyelenggara'=>$this->input->post('deskripsi_penyelenggara'),
			// 'status'=>$this->input->post('status'),
			'web_url'=>$this->input->post('web_url'),
			'ig_url'=>$this->input->post('ig_url'),
			'tw_url'=>$this->input->post('tw_url'),
			'fb_url'=>$this->input->post('fb_url'),
			'youtube'=>$this->input->post('youtube'),
			);
		$this->Penyelenggara_model->add($data);
		redirect('Penyelenggara/penyelenggara');
		}
	}
	
	public function hapus($id){
		$this->Penyelenggara_model->hapus_db($id);
		redirect('Penyelenggara/penyelenggara');
	}

	public function edit_penyelenggara($id)
	{
		$data['kategori_penyelenggara']=$this->Kategori_model->get_kategorip();
		$data['penyelenggara']=$this->Penyelenggara_model->get_edit_db($id);
		$this->load->view('templates/header');
		$this->load->view('templates/aside');
		$this->load->view('pages/penyelenggara/edit', $data);
		$this->load->view('templates/footer');
	}

	public function edit_proses()
	{
		$this->form_validation->set_rules('id_penyelenggara','No','required');
		$this->form_validation->set_rules('kategori_penyelenggara','Kategori Penyelenggara','required');
		$this->form_validation->set_rules('nama_penyelenggara','Nama Penyelenggara','required');
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_rules('logo','Logo','required');
		$this->form_validation->set_rules('deskripsi_penyelenggara','Deskripsi Penyelenggara','required');
		// $this->form_validation->set_rules('status', 'Status', 'required');
		$this->form_validation->set_rules('web_url', 'Website', 'required');
		$this->form_validation->set_rules('ig_url', 'Instagram', 'required');
		$this->form_validation->set_rules('tw_url', 'Twitter', 'required');
		$this->form_validation->set_rules('fb_url', 'Facebook', 'required');
		$this->form_validation->set_rules('youtube', 'Youtube', 'required');

		$config['upload_path'] = "./asset/img/logo_orma/";
		    $config['allowed_types'] = 'gif|jpeg|png|jpg';
		    $config['max_height'] = '20000';
		    $config['max_width'] = '2048';
		    $config['max_size'] = '2048';
		    $this->load->library('upload',$config);
		    $this->path = './asset/img/logo_orma/';
   
   			$this->upload->initialize($config);

		if ($this->form_validation->run() == FALSE && ! $this->upload->do_upload('logo')) {
			$id = $this->input->post('id');
			$data['penyelenggara']=$this->Penyelenggara_model->get_edit_db($id);
			$data['kategori_penyelenggara']=$this->Penyelenggara_model->get_penyelenggara_kategori();
			$data['logo']=$this->upload->display_errors();
			$this->load->view('templates/header');
			$this->load->view('templates/aside');
			$this->load->view('pages/penyelenggara/edit', $data);
			$this->load->view('templates/footer');
		}
		
		else{
			$id=$this->input->post('id_penyelenggara');
			$dataUpload = $this->upload->data();
		$data=array(
			'id_penyelenggara'=>$this->input->post('id_penyelenggara'),
			'kategori_penyelenggara'=>$this->input->post('kategori_penyelenggara'),
			'nama_penyelenggara'=>$this->input->post('nama_penyelenggara'),
			'email'=>$this->input->post('email'),
			'password'=>$this->input->post('password'),
			'logo'=> $dataUpload['file_name'],
			'deskripsi_penyelenggara'=>$this->input->post('deskripsi_penyelenggara'),
			// 'status'=>$this->input->post('status'),
			'web_url'=>$this->input->post('web_url'),
			'ig_url'=>$this->input->post('ig_url'),
			'tw_url'=>$this->input->post('tw_url'),
			'fb_url'=>$this->input->post('fb_url'),
			'youtube'=>$this->input->post('youtube'),
			);

		$this->Penyelenggara_model->edit_db($data,$id);
		redirect('Penyelenggara/penyelenggara');
		}	
	}
}