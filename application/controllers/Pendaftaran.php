<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftaran extends CI_Controller {

	function __construct(){
		parent::__construct();
		//load model
		$this->load->model('Pendaftaran_model');
		//validasi inputan
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/aside');
		$this->load->view('pages/dashboard');
		$this->load->view('templates/footer');
	}

	public function pendaftaran()
	{
		$data['list_pendaftaran'] = $this->Pendaftaran_model->get_pendaftaran_db();
		$this->load->view('templates/header');
		$this->load->view('templates/aside');
		$this->load->view('pages/pendaftaran/data_pendaftaran', $data);
		$this->load->view('templates/footer');
	}

	public function tambah_pendaftaran()
	{
		//if(method == 'GET') {
		//} else if (method == 'POST')

		$data['kodeunik'] = $this->Pendaftaran_model->buat_kode();
		$this->load->view('templates/header');
		$this->load->view('templates/aside');
		$this->load->view('pages/pendaftaran/tambah', $data);
		$this->load->view('templates/footer');
	}

	public function tambah_proses(){
		
		$this->form_validation->set_rules('kode', 'Kode Pendaftaran', 'required');
		$this->form_validation->set_rules('nim', 'NIM', 'required');
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('waktu_mulai', 'Waktu Mulai', 'required');
		$this->form_validation->set_rules('jam_awal', 'Jam Mulai', 'required');
		$this->form_validation->set_rules('waktu_selesai', 'Waktu Selesai', 'required');
		$this->form_validation->set_rules('jam_selesai', 'Jam Selesai', 'required');
		$this->form_validation->set_rules('status', 'Status', 'required');
		$this->form_validation->set_rules('acara_id_acara', 'Id Acara', 'required');
		$this->form_validation->set_rules('peserta_id_peserta', 'Id Peserta', 'required');
		
		if ($this->form_validation->run() == FALSE) {
			$data['kodeunik'] = $this->Pendaftaran_model->buat_kode();
			$this->load->view('templates/header');
			$this->load->view('templates/aside');
			$this->load->view('pages/pendaftaran/tambah', $data);
			$this->load->view('templates/footer');
		}

		else{
			$data=array(
				'kode'=>$this->input->post('kode'),
				'nim'=>$this->input->post('nim'),
				'nama'=>$this->input->post('nama'),
				'waktu_mulai'=>$this->input->post('waktu_mulai'),
				'jam_awal'=>$this->input->post('jam_awal'),
				'waktu_selesai'=>$this->input->post('waktu_selesai'),
				'jam_selesai'=>$this->input->post('jam_selesai'),
				'status'=>$this->input->post('status'),
				'acara_id_acara'=>$this->input->post('acara_id_acara'),
				'peserta_id_peserta'=>$this->input->post('peserta_id_peserta'),
			);

		$this->Pendaftaran_model->tambah_db($data);
		redirect('Pendaftaran/pendaftaran');
		}
	}

	function hapus($id){
		$this->Pendaftaran_model->hapus_db($id);
		redirect('Pendaftaran/pendaftaran');
	}

	function edit_pendaftaran($id)
	{
		$data['pendaftaran']=$this->Pendaftaran_model->get_edit_db($id);
		$this->load->view('templates/header');
		$this->load->view('templates/aside');
		$this->load->view('pages/pendaftaran/edit', $data);
		$this->load->view('templates/footer');
	}

	function edit_proses()
	{
		$this->form_validation->set_rules('kode', 'Kode Pendaftaran', 'required');
		$this->form_validation->set_rules('nim', 'NIM', 'required');
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('waktu_mulai', 'Waktu Mulai', 'required');
		$this->form_validation->set_rules('jam_awal', 'Jam Mulai', 'required');
		$this->form_validation->set_rules('waktu_selesai', 'Waktu Selesai', 'required');
		$this->form_validation->set_rules('jam_selesai', 'Jam Selesai', 'required');
		$this->form_validation->set_rules('status', 'Status', 'required');
		$this->form_validation->set_rules('acara_id_acara', 'Id Acara', 'required');
		$this->form_validation->set_rules('peserta_id_peserta', 'Id Peserta', 'required');

		if ($this->form_validation->run() == FALSE) {
			$id = $this->input->post('id');
			$data['pendaftaran']=$this->Pendaftaran_model->get_edit_db($id);
			$this->load->view('templates/header');
			$this->load->view('templates/aside');
			$this->load->view('pages/pendaftaran/edit', $data);
			$this->load->view('templates/footer');
		}
		
		else{
			$id=$this->input->post('kode');
		$data=array(
			'kode'=>$this->input->post('kode'),
			'nim'=>$this->input->post('nim'),
			'nama'=>$this->input->post('nama'),
			'waktu_mulai'=>$this->input->post('waktu_mulai'),
			'jam_awal'=>$this->input->post('jam_awal'),
			'waktu_selesai'=>$this->input->post('waktu_selesai'),
			'jam_selesai'=>$this->input->post('jam_selesai'),
			'status'=>$this->input->post('status'),
			'acara_id_acara'=>$this->input->post('acara_id_acara'),
			'peserta_id_peserta'=>$this->input->post('peserta_id_peserta'),
			);

		$this->Pendaftaran_model->edit_db($data,$id);
		redirect('Pendaftaran/pendaftaran');
		}	
	}
}

	

