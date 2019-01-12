<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_Penyelenggara extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Kategori_model');
		$this->load->library('form_validation');
	}
 
	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/aside');
		$this->load->view('pages/dashboard');
		$this->load->view('templates/footer');
	}

	public function kategori()
	{
		$this->load->model('Kategori_model');
		$data['list_kategori']=$this->Kategori_model->get_kategori_db();
		$this->load->view('templates/header');
		$this->load->view('templates/aside');
		$this->load->view('pages/kategori/data_kategori', $data);
		$this->load->view('templates/footer');
	}

	public function tambah_kategori()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/aside');
		$this->load->view('pages/kategori/tambah');
		$this->load->view('templates/footer');
	}

	public function tambah_proses(){
		$this->form_validation->set_rules('kategori_penyelenggara','Kategori Penyelenggara','required');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header');
			$this->load->view('templates/aside');
			$this->load->view('pages/kategori/tambah');
			$this->load->view('templates/footer');
		}
		else{
			$data=array(
				'kategori_penyelenggara'=>$this->input->post('kategori_penyelenggara'),
			);
		
		$this->Kategori_model->tambah_db($data);
		redirect('Kategori_Penyelenggara/kategori');
		}
	}

	function hapus($id){
		$this->load->model('Kategori_model');
		$this->Kategori_model->hapus_db($id);
		redirect('Kategori_Penyelenggara/kategori');
	}

	public function edit_kategori($id)
	{
		$this->load->model('Kategori_model');
		$data['kategori']=$this->Kategori_model->get_edit_db($id);
		$this->load->view('templates/header');
		$this->load->view('templates/aside');
		$this->load->view('pages/kategori/edit', $data);
		$this->load->view('templates/footer');
	}

	public function edit_proses()
	{
		$this->form_validation->set_rules('idkategori_penyelenggara','No','required');
		$this->form_validation->set_rules('kategori_penyelenggara','Kategori Penyelenggara','required');
		if ($this->form_validation->run() == FALSE) {
			$id = $this->input->post('id');
			$data['kategori']=$this->Kategori_model->get_edit_db($id);
			$this->load->view('templates/header');
			$this->load->view('templates/aside');
			$this->load->view('pages/kategori/edit', $data);
			$this->load->view('templates/footer');
		}
		else{
			$id=$this->input->post('idkategori_penyelenggara');
			$data=array(
				'idkategori_penyelenggara'=>$this->input->post('idkategori_penyelenggara'),
				'kategori_penyelenggara'=>$this->input->post('kategori_penyelenggara'),
			);

			$this->Kategori_model->edit_db($data,$id);
			redirect('Kategori_Penyelenggara/kategori');
		}
		
		
	}

}