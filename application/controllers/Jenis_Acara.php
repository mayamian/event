<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jenis_Acara extends CI_Controller { 

	function __construct(){
		parent::__construct();
		//load model
		$this->load->model('JenisAcara_model');
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
		$data['list_jenisacara']=$this->JenisAcara_model->get_jenisacara_db();
		$this->load->view('templates/header');
		$this->load->view('templates/aside');
		$this->load->view('pages/jenis_acara/lihat',$data);
		$this->load->view('templates/footer');
	}

	public function add()
	{

		$this->load->view('templates/header');
		$this->load->view('templates/aside');
		$this->load->view('pages/jenis_acara/add');
		$this->load->view('templates/footer');
	}

	public function add_proses(){
		$this->form_validation->set_rules('jenis_acara','Jenis Acara','required');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header');
			$this->load->view('templates/aside');
			$this->load->view('pages/jenis_acara/add');
			$this->load->view('templates/footer');
		}
		else{
			$data=array(
				'jenis_acara'=>$this->input->post('jenis_acara'),
			);

			$this->JenisAcara_model->add($data);
			redirect('Jenis_Acara/lihat');
		}
		
	}

	function hapus($id){
		$this->JenisAcara_model->hapus($id);
		redirect('Jenis_Acara/lihat');	
	}

	public function edit($id)
	{
		$data['jenis_acara']=$this->JenisAcara_model->get_edit_db($id);
		$this->load->view('templates/header');
		$this->load->view('templates/aside');
		$this->load->view('pages/jenis_acara/edit', $data);
		$this->load->view('templates/footer');

	}

	public function edit_proses()
	{
		$this->form_validation->set_rules('idjenis_acara','No','required');
		$this->form_validation->set_rules('jenis_acara','Jenis Acara','required');
		if ($this->form_validation->run() == FALSE) {
			$id = $this->input->post('id');
			$data['jenis_acara']=$this->JenisAcara_model->get_edit_db($id);
			$this->load->view('templates/header');
			$this->load->view('templates/aside');
			$this->load->view('pages/jenis_acara/edit', $data);
			$this->load->view('templates/footer');
		}
		else{
			$id=$this->input->post('idjenis_acara');
		$data=array(
			'idjenis_acara'=>$this->input->post('idjenis_acara'),
			'jenis_acara'=>$this->input->post('jenis_acara'),
		);


		$this->JenisAcara_model->edit($data
			,$id);
		redirect('Jenis_Acara/lihat');
		}
		
	}
 
} 
