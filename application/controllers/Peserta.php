<?php
defined('BASEPATH')OR exit('No direct script access allowed');
class Peserta extends CI_Controller
{
	function __construct(){
		parent::__construct();
		//load model
		$this->load->model('Peserta_model');
		//load model kategori peserta
		$this->load->model('Kategorip_model');
		//validasi inputan
		$this->load->library('form_validation');
	}
	public function index(){
		$this->load->view('temlates/header');
		$this->load->view('templates/aside');
		$this->load->view('pages/dashboard');
		$this->load->view('templates/footer');
	}
	public function peserta(){
		$this->load->model('Peserta_model');
		$data['list_peserta']=$this->Peserta_model->get_peserta_db();
		$this->load->view('templates/header');
		$this->load->view('templates/aside');
		$this->load->view('pages/peserta/data_peserta',$data);
		$this->load->view('templates/footer');
	}
	function hapus($id){
		$this->load->model('Peserta_model');
		$this->Peserta_model->hapus_db($id);
		redirect('Peserta/peserta');
	}
	public function edit_peserta($id){
		$data['kategorip_peserta']=$this->Kategorip_model->get_kategorip();
		$data['peserta']=$this->Peserta_model->get_edit_db($id);
		$this->load->view('templates/header');
		$this->load->view('templates/aside');
		$this->load->view('pages/peserta/editp', $data);
		$this->load->view('templates/footer');

	}
	public function edit_proses(){
		$data['kategori_peserta']=$this->Kategorip_model->get_kategorip();
		$this->form_validation->set_rules('id_peserta','No','required');
		$this->form_validation->set_rules('nim', 'No', 'required');
		$this->form_validation->set_rules('nama', 'No', 'required');
		$this->form_validation->set_rules('no_telp', 'No', 'required');
		$this->form_validation->set_rules('email', 'No', 'required');
		//$this->form_validation->set_rules('username', 'No', 'required');
		$this->form_validation->set_rules('password', 'No', 'required');
		$this->form_validation->set_rules('kategori_peserta_idkategori_peserta', 'No', 'required');

		if($this->form_validation->run() == FALSE){
			$id = $this->input->post('id');
			$data['peserta']=$this->Peserta_model->get_edit_db($id);
			$data['kategori_penyelenggara']=$this->Peserta_model->get_peserta_kategori();
			$this->load->view('templates/header');
			$this->load->view('templates/aside');
			$this->load->view('pages/peserta/editp', $data);
			$this->load->view('templates/footer');
		}else{
			$id=$this->input->post('id_peserta');
			$data=array(
				'id_peserta'=>$this->input->post('id_peserta'),
				'nim'=>$this->input->post('nim'),
				'nama'=>$this->input->post('nama'),
				'no_telp'=>$this->input->post('no_telp'),
				'email'=>$this->input->post('email'),
				//'username'=>$this->input->post('username'),
				'password'=>$this->input->post('password'),
				'kategori_peserta_idkategori_peserta'=>$this->input->post('kategori_peserta_idkategori_peserta'),
			);
			$this->Peserta_model->edit_db($data, $id);
			redirect('Peserta/peserta');
		}
	}
	public function update_status($status, $id){
			if ($this->Acara_model->update_status($status, $id)) {
				redirect('Acara/lihat');
			}else{
				redirect('Acara/lihat');
			}
		}
}