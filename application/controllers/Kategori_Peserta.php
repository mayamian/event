<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_Peserta extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Kategorip_model');
		$this->load->library('form_validation');
	}
 
	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/aside');
		$this->load->view('pages/dashboard');
		$this->load->view('templates/footer');
	}

	public function kategori_peserta()
	{
		$this->load->model('Kategorip_model');
		$data['list_kategorip']=$this->Kategorip_model->get_kategorip_db();
		$this->load->view('templates/header');
		$this->load->view('templates/aside');
		$this->load->view('pages/kategori_peserta/data', $data);
		$this->load->view('templates/footer');
	}

	public function tambah_kategorip()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/aside');
		$this->load->view('pages/kategori_peserta/tambah');
		$this->load->view('templates/footer');
	}

	public function tambahp_proses(){
		$this->form_validation->set_rules('kategori_peserta','Kategori Peserta','required');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header');
			$this->load->view('templates/aside');
			$this->load->view('pages/kategorip/tambah');
			$this->load->view('templates/footer');
		}
		else{
			$data=array(
				'kategori_peserta'=>$this->input->post('kategori_peserta'),
			);
		
		$this->Kategorip_model->tambah_db($data);
		redirect('Kategori_Peserta/kategori_peserta');
		}
	}

	function hapus($id){
		$this->load->model('Kategorip_model');
		$this->Kategorip_model->hapus_db($id);
		redirect('Kategori_Peserta/kategori_peserta');
	}	


	public function edit_kategorip($id)
	{
		$this->load->model('Kategorip_model');
		$data['kategori_peserta']=$this->Kategorip_model->get_edit_db($id);
		$this->load->view('templates/header');
		$this->load->view('templates/aside');
		$this->load->view('pages/kategori_peserta/edit_kategorip', $data);
		$this->load->view('templates/footer');
	}

	public function edit_proses()
	{
		$this->form_validation->set_rules('idkategori_peserta','No','required');
		$this->form_validation->set_rules('kategori_peserta','Kategori Peserta','required');
		if ($this->form_validation->run() == FALSE) {
			$id = $this->input->post('id');
			$data['kategori_pesrta']=$this->Kategorip_model->get_edit_db($id);
			$this->load->view('templates/header');
			$this->load->view('templates/aside');
			$this->load->view('pages/kategori_peserta/edit_kategorip', $data);
			$this->load->view('templates/footer');
		}
		else{
			$id=$this->input->post('idkategori_peserta');
			$data=array(
				'idkategori_peserta'=>$this->input->post('idkategori_peserta'),
				'kategori_peserta'=>$this->input->post('kategori_peserta'),
			);

			$this->Kategorip_model->edit_db($data,$id);
			redirect('Kategori_Peserta/kategori_peserta');
		}
	}
}