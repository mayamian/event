<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tiket extends CI_Controller { 

	function __construct(){
		parent::__construct();
		//load model
		$this->load->model('Tiket_model');
		$this->load->model('Acara_model');
		$this->load->model('Kategorip_model');
		//vaidasi inputan
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

	public function lihat()
	{
		$data['list_tiket']=$this->Tiket_model->get_tiket_db();
		$this->load->view('templates/header');
		$this->load->view('templates/aside');
		$this->load->view('pages/tiket/lihat',$data);
		$this->load->view('templates/footer');
	}

	public function add()
	{
		$data['acara']=$this->Acara_model->get_acara();
		$data['kategori_peserta']=$this->Kategorip_model->get_kategorip();

		$this->load->view('templates/header');
		$this->load->view('templates/aside');
		$this->load->view('pages/tiket/add', $data);
		$this->load->view('templates/footer');
	}

	public function add_proses(){
		$this->form_validation->set_rules('jumlah','Jumlah','required');
		$this->form_validation->set_rules('harga','harga','required');
		$this->form_validation->set_rules('acara_id_acara','Acara','required');
		$this->form_validation->set_rules('kategori_peserta_idkategori_peserta','Kategori Peserta','required');
		if ($this->form_validation->run() == FALSE) {
			$data['acara']=$this->Acara_model->get_acara();
			$data['kategori_peserta']=$this->Kategorip_model->get_kategoripeserta();
			$this->load->view('templates/header');
			$this->load->view('templates/aside');
			$this->load->view('pages/tiket/add', $data);
			$this->load->view('templates/footer');
		}
		else{
			$data=array(
				'id_tiket'=>$this->input->post('id_tiket'),
				'jumlah'=>$this->input->post('jumlah'),
				'harga'=>$this->input->post('harga'),
				'acara_id_acara'=>$this->input->post('acara_id_acara'),
				'kategori_peserta_idkategori_peserta'=>$this->input->post('kategori_peserta_idkategori_peserta'),
			);

			$this->Tiket_model->add($data);
			redirect('Tiket/lihat');
		}
		
	}

	function hapus($id){
		$this->Tiket_model->hapus($id);
		redirect('Tiket/lihat');	
	}

	public function edit($id)
	{
		$data['tiket']=$this->Tiket_model->get_edit_db($id);
		$data['acara']=$this->Acara_model->get_acara();
		$data['kategori_peserta']=$this->Kategorip_model->get_kategorip();
		$this->load->view('templates/header');
		$this->load->view('templates/aside');
		$this->load->view('pages/tiket/edit', $data);
		$this->load->view('templates/footer');

	}

	public function edit_proses()
	{
		$this->form_validation->set_rules('id_tiket','No','required');
		$this->form_validation->set_rules('jumlah','Jumlah','required');
		$this->form_validation->set_rules('harga','harga','required');
		$this->form_validation->set_rules('acara_id_acara','Acara','required');
		$this->form_validation->set_rules('kategori_peserta_idkategori_peserta','Kategori Peserta','required');
		if ($this->form_validation->run() == FALSE) {
			$id = $this->input->post('id');
			$data['tiket']=$this->Tiket_model->get_edit_db($id);
			$data['acara']=$this->Acara_model->get_acara();
			$data['kategori_peserta']=$this->KategoriPeserta_model->get_kategorip();
			$this->load->view('templates/header');
			$this->load->view('templates/aside');
			$this->load->view('pages/tiket/edit', $data);
			$this->load->view('templates/footer');
		}
		else{
			$id=$this->input->post('id_tiket');
		$data=array(
			'id_tiket'=>$this->input->post('id_tiket'),
			'jumlah'=>$this->input->post('jumlah'),
			'harga'=>$this->input->post('harga'),
			'acara_id_acara'=>$this->input->post('acara_id_acara'),
			'kategori_peserta_idkategori_peserta'=>$this->input->post('kategori_peserta_idkategori_peserta'),
		);


		$this->Tiket_model->edit($data
			,$id);
		redirect('Tiket/lihat');
		}
		
	}
 
} 
