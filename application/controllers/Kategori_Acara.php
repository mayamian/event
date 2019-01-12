<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_Acara extends CI_Controller { 

	function __construct(){
		parent::__construct();
		//load model
		$this->load->model('KategoriAcara_model');
		//vaidasi inputan
        $this->load->library('form_validation');
	}
 
	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/aside');
		$this->load->view('pages/dashboard');
		$this->load->view('templates/footer');
	}

	public function lihat()
	{
		$data['list_kategoriacara']=$this->KategoriAcara_model->get_kategoriacara_db();
		$this->load->view('templates/header');
		$this->load->view('templates/aside');
		$this->load->view('pages/kategori_acara/lihat',$data);
		$this->load->view('templates/footer');
	}

	public function add()
	{

		$this->load->view('templates/header');
		$this->load->view('templates/aside');
		$this->load->view('pages/kategori_acara/add');
		$this->load->view('templates/footer');
	}

	public function add_proses(){
		$this->form_validation->set_rules('kategori_acara','Kategori Acara','required');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header');
			$this->load->view('templates/aside');
			$this->load->view('pages/kategori_acara/add');
			$this->load->view('templates/footer');
		}
		else{
			$data=array(
				'kategori_acara'=>$this->input->post('kategori_acara'),
			);

			$this->KategoriAcara_model->add($data);
			redirect('Kategori_Acara/lihat');
		}
		
	}

	function hapus($id){
		$this->KategoriAcara_model->hapus($id);
		redirect('Kategori_Acara/lihat');	
	}

	public function edit($id)
	{
		$data['kategori_acara']=$this->KategoriAcara_model->get_edit_db($id);
		$this->load->view('templates/header');
		$this->load->view('templates/aside');
		$this->load->view('pages/kategori_acara/edit', $data);
		$this->load->view('templates/footer');

	}

	public function edit_proses()
	{
		$this->form_validation->set_rules('idkategori_acara','No','required');
		$this->form_validation->set_rules('kategori_acara','Kategori Acara','required');
		if ($this->form_validation->run() == FALSE) {
			$id = $this->input->post('id');
			$data['kategori_acara']=$this->KategoriAcara_model->get_edit_db($id);
			$this->load->view('templates/header');
			$this->load->view('templates/aside');
			$this->load->view('pages/kategori_acara/edit', $data);
			$this->load->view('templates/footer');
		}
		else{
			$id=$this->input->post('idkategori_acara');
		$data=array(
			'idkategori_acara'=>$this->input->post('idkategori_acara'),
			'kategori_acara'=>$this->input->post('kategori_acara'),
		);


		$this->KategoriAcara_model->edit($data
			,$id);
		redirect('Kategori_Acara/lihat');
		}
		
	}
 
} 
