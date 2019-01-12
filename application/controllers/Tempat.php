<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tempat extends CI_Controller { 

	function __construct(){
		parent::__construct();
		$this->load->model('Tempat_model');
	}

	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/aside');
		$this->load->view('pages/tempat/data_tempat');
		$this->load->view('templates/footer');
	} 

	public function tempat()
	{
		$this->load->model('Tempat_model');
		$data['list_tempat']=$this->Tempat_model->get_tempat_db();
		$this->load->view('templates/header');
		$this->load->view('templates/aside');
		$this->load->view('pages/tempat/data_tempat', $data);
		$this->load->view('templates/footer');
	}

	public function tambah_tempat()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/aside');
		$this->load->view('pages/tempat/tambah');
		$this->load->view('templates/footer');
	}

	public function tambah_proses(){
		$this->load->model('Tempat_model');
		$data=array(
			'nama_tempat'=>$this->input->post('nama_tempat'),
			'ruang'=>$this->input->post('ruang'),
			'status'=>$this->input->post('status'),
		);

		$this->Tempat_model->tambah_db($data);
		redirect('Tempat/tempat');
	}

	function hapus($id){
		$this->load->model('Tempat_model');
		$this->Tempat_model->hapus_db($id);
		redirect('Tempat/tempat');
	}

	public function edit_tempat($id)
	{
		$this->load->model('Tempat_model');
		$data['tempat']=$this->Tempat_model->get_edit_db($id);

		$this->load->view('templates/header');
		$this->load->view('templates/aside');
		$this->load->view('pages/tempat/edit', $data);
		$this->load->view('templates/footer');
	} 

	public function edit_proses()
	{
		   $this->form_validation->set_rules('status', 'Status', 'trim|required');
	    if ($this->form_validation->run() == TRUE)
	    {
			$this->load->model('Tempat_model');
			$id = $this->input->post('id_tempat');

			$data=array(	
				'id_tempat'=>$this->input->post('id_tempat'),
				'nama_tempat'=>$this->input->post('nama_tempat'),
				'ruang'=>$this->input->post('ruang'),
				'status'=>$this->input->post('status'),
			);

			$this->Tempat_model->edit_db($data,$id);
			redirect('Tempat/tempat');
			
		}else{
			redirect('Tempat/edit_tempat/'.$this->input->post('id_tempat'));
		}
	}

}